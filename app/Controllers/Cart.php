<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\ProductSpecificationModel;
use App\Models\CartModel;
use App\Models\CartItemModel;

class Cart extends BaseController
{
    protected $product;
    protected $cartModel;
    protected $cartItemModel;

    public function __construct()
    {
        $this->product = new ProductModel();
        $this->cartModel = new CartModel();
        $this->cartItemModel = new CartItemModel();
    }

    protected function getUserCartId()
    {
        $userId = session()->get('user_id'); // pastikan login
        $cart = $this->cartModel->where('user_id', $userId)->first();

        if (!$cart) {
            $cartId = $this->cartModel->insert(['user_id' => $userId], true);
        } else {
            $cartId = $cart['cart_id'];
        }

        return $cartId;
    }

    // ==================================================
    // TAMPILKAN CART
    // ==================================================
    public function index()
    {
        $cartId = $this->getUserCartId();

        $items = $this->cartItemModel
              ->select('cart_items.*, products.name, products.price, product_images.image_url as image')
              ->join('products', 'products.product_id = cart_items.product_id')
              ->join('product_images', 'product_images.product_id = products.product_id AND product_images.is_primary = 1', 'left')
              ->where('cart_id', $cartId)
              ->findAll();


        $specModel = new ProductSpecificationModel();
        $totalWeight = 0;
        $subtotal = 0;

        foreach ($items as $item) {
            $weight = $specModel->getWeight($item['product_id']);
            $totalWeight += ($weight * $item['quantity']);
            $subtotal += ($item['unit_price'] * $item['quantity']);
        }

        $ratePerKg = 5000;
        $roundedWeight = ceil($totalWeight);
        $shipping = $subtotal > 500000 ? 0 : $roundedWeight * $ratePerKg;
        $tax = $subtotal * 0.085;
        $total = $subtotal + $shipping + $tax;

        // dd($items);

        return view('Shop/cart', [
            'cart' => $items,
            'subtotal' => $subtotal,
            'shipping' => $shipping,
            'tax' => $tax,
            'total' => $total
        ]);
    }

    // ==================================================
    // ADD TO CART
    // ==================================================
    public function add($productId)
    {
        $product = $this->product->find($productId);
        if (!$product) return redirect()->back()->with('error', 'Product not found');
        
        $qty = (int) $this->request->getGet('qty');
        $qty = max(1, min($qty, $product['stock']));
        
        $cartId = $this->getUserCartId();
        
        $existing = $this->cartItemModel->where(['cart_id' => $cartId, 'product_id' => $productId])->first();
        // dd($existing);
        if ($existing) {
            $newQty = min($existing['quantity'] + $qty, $product['stock']);
            $this->cartItemModel->update($existing['cart_item_id'], ['quantity' => $newQty]);
        } else {
            $this->cartItemModel->insert([
                'cart_id' => $cartId,
                'product_id' => $productId,
                'quantity' => $qty,
                'unit_price' => $product['price']
            ]);
        }

        return redirect()->to('/cart');
    }

    // ==================================================
    // REMOVE ITEM
    // ==================================================
    public function remove($productId)
    {
        $cartId = $this->getUserCartId();
        $item = $this->cartItemModel->where(['cart_id' => $cartId, 'product_id' => $productId])->first();
        if ($item) $this->cartItemModel->delete($item['cart_item_id']);

        return redirect()->to('/cart');
    }

    // ==================================================
    // CLEAR CART
    // ==================================================
    public function clear()
    {
        $cartId = $this->getUserCartId();
        $this->cartItemModel->where('cart_id', $cartId)->delete();
        return redirect()->to('/cart');
    }

    // ==================================================
    // INCREASE QTY
    // ==================================================
    public function increase($productId)
    {
        $cartId = $this->getUserCartId();
        $item = $this->cartItemModel->where(['cart_id' => $cartId, 'product_id' => $productId])->first();
        if ($item) {
            $product = $this->product->find($productId);
            $newQty = min($item['quantity'] + 1, $product['stock']);
            $this->cartItemModel->update($item['cart_item_id'], ['quantity' => $newQty]);
        }
        return redirect()->to('/cart');
    }

    // ==================================================
    // DECREASE QTY
    // ==================================================
    public function decrease($productId)
    {
        $cartId = $this->getUserCartId();
        $item = $this->cartItemModel->where(['cart_id' => $cartId, 'product_id' => $productId])->first();
        if ($item && $item['quantity'] > 1) {
            $this->cartItemModel->update($item['cart_item_id'], ['quantity' => $item['quantity'] - 1]);
        }
        return redirect()->to('/cart');
    }
}
