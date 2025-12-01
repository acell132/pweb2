<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\OrderItemModel;
use App\Models\ProductModel;
use App\Models\PaymentsModel;
use App\Models\ProductSpecificationModel;
use CodeIgniter\CLI\Console;

class Order extends BaseController
{
    protected $orderModel;
    protected $orderItemModel;
    protected $productModel;
    protected $specModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
        $this->orderItemModel = new OrderItemModel();
        $this->productModel = new ProductModel();
        $this->specModel = new ProductSpecificationModel();
    }

    public function myorder()
{
    $userId = session()->get('user_id');
    if (!$userId) return redirect()->to('/login');

    // Pagination: 5 orders per page
    $perPage = 5;

    $ordersQuery = $this->orderModel
        ->where('user_id', $userId)
        ->orderBy('order_date', 'DESC');

    $orders = $ordersQuery->paginate($perPage, 'orders');
    $pager = $ordersQuery->pager; // Pager object

    foreach ($orders as &$order) {
        $items = $this->orderItemModel
            ->select('order_items.*, products.name, products.price as unit_price, product_images.image_url as image')
            ->join('products', 'products.product_id = order_items.product_id')
            ->join('product_images', 'product_images.product_id = products.product_id AND product_images.is_primary = 1', 'left')
            ->where('order_id', $order['order_id'])
            ->findAll();

        $subtotal = 0;
        $totalWeight = 0;
        foreach ($items as $item) {
            $subtotal += $item['unit_price'] * $item['quantity'];
            $weight = $this->specModel->getWeight($item['product_id']);
            $totalWeight += $weight * $item['quantity'];
        }

        $roundedWeight = ceil($totalWeight);
        $ratePerKg = 5000;
        $shipping = $subtotal > 500000 ? 0 : $roundedWeight * $ratePerKg;
        $tax = $subtotal * 0.085;
        $total = $subtotal + $shipping + $tax;

        $order['items'] = $items;
        $order['subtotal'] = $subtotal;
        $order['shipping'] = $shipping;
        $order['tax'] = $tax;
        $order['total'] = $total;
        $order['status'] = $order['status'] ?? 'Pending';
    }

    return view('pages/my_orders', [
        'orders' => $orders,
        'pager' => $pager
    ]);
}


    public function detail($orderId)
    {
        $userId = session()->get('user_id');
        $order = $this->orderModel->where(['order_id'=>$orderId,'user_id'=>$userId])->first();

        if(!$order) return "Order not found";

        $items = $this->orderItemModel
            ->select('order_items.*, products.name, products.price as unit_price, product_images.image_url as image')
            ->join('products', 'products.product_id = order_items.product_id')
            ->join('product_images', 'product_images.product_id = products.product_id AND product_images.is_primary=1', 'left')
            ->where('order_id', $orderId)
            ->findAll();

        $html = '<table>
            <thead><tr>
                <th>Product</th><th>Name</th><th>Qty</th><th>Unit Price</th><th>Total</th>
            </tr></thead><tbody>';

        foreach($items as $item){
            $html .= '<tr>
                <td><img src="'.base_url($item['image']).'" /></td>
                <td>'.esc($item['name']).'</td>
                <td>'.$item['quantity'].'</td>
                <td>Rp '.number_format($item['unit_price'],0,',','.').'</td>
                <td>Rp '.number_format($item['unit_price']*$item['quantity'],0,',','.').'</td>
            </tr>';
        }

        $html .= '</tbody></table>';

        $html .= '<div class="summary">
            <div>Subtotal: Rp '.number_format($order['subtotal'],0,',','.').'</div>
            <div>Shipping: Rp '.number_format($order['shipping'],0,',','.').'</div>
            <div>Tax: Rp '.number_format($order['tax'],0,',','.').'</div>
            <div>Total: Rp '.number_format($order['total'],0,',','.').'</div>
        </div>';

        return $html;
    }

    public function cancel($orderId)
    {
        // Cek order
        $order = $this->orderModel->find($orderId);
        if (!$order) {
            return $this->response->setStatusCode(404)->setJSON([
                'status' => 'error',
                'message' => 'Order not found'
            ]);
        }

        // Ambil semua item dalam order ini
        $orderItems = $this->orderItemModel->where('order_id', $orderId)->findAll();

        // Kembalikan stok setiap produk
        foreach ($orderItems as $item) {
            $qty = (int)$item['quantity'];
            $this->productModel->where('product_id', $item['product_id'])
                ->increment('stock', $qty);
        }

        // Update status menjadi cancelled
        $this->orderModel->update($orderId, ['status' => 'cancelled']);

        // Response
        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Order cancelled & stock restored'
        ]);
    }


    public function submit()
    {
        $request = service('request');
        $paymentModel = new PaymentsModel();
        $ordersModel  = new OrderModel();

        $order_id = $request->getPost('order_id');
        $amount = (int) $this->request->getPost('amount');
        $file     = $request->getFile('payment_proof');

        if (!$order_id || !$amount) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Invalid data'
            ]);
        }

        // Handle file upload
        $filename = null;
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $filename = $file->getRandomName();
            $file->move(FCPATH . 'uploads/payments', $filename);
        }

        // Simpan payment
        $paymentModel->save([
            'order_id' => $order_id,
            'payment_proof' => $filename,
            'payment_date' => date('Y-m-d H:i:s'),
            'payment_method' => 'Transfer Bank',
            'amount' => $amount,
        ]);

        // Update status order menjadi paid
        $ordersModel->update($order_id, [
            'status' => 'verification'
        ]);

        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Payment submitted successfully'
        ]);
    }
}
