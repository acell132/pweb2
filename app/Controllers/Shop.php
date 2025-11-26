<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\PromotionModel;
use App\Models\ProductSpecificationModel;
use App\Models\ReviewModel;

class Shop extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();

        // Get query parameters
        $category = $this->request->getGet('category');
        $price = $this->request->getGet('price');
        $sort = $this->request->getGet('sort');
        $page = $this->request->getGet('page') ?? 1;

        $totalProducts = $productModel->countAll();

        // Base product query
        $query = $productModel->select('products.*, product_images.image_url')
                      ->join('product_images', 'product_images.product_id = products.product_id AND product_images.is_primary = 1', 'left');

        // Filter by category
        if (!empty($category) && $category !== 'all') {
            $query = $query->where('category_id', $category);
        }

        // Filter by price range
        if ($price == 'under50') {
            $query->where('price <', 50000);
        } elseif ($price == '50-200') {
            $query->where('price >=', 50000)->where('price <=', 200000);
        } elseif ($price == 'over200') {
            $query->where('price >', 200000);
        }

        // Sorting
        if ($sort == 'latest') {
            $query->orderBy('created_at', 'DESC');
        } elseif ($sort == 'low-high') {
            $query->orderBy('price', 'ASC');
        } elseif ($sort == 'high-low') {
            $query->orderBy('price', 'DESC');
        } else {
            $query->orderBy('is_featured', 'DESC');
        }

        $filteredProducts = $query->countAllResults(false);

        // Pagination: 9 items per page
        $products = $query->paginate(8, 'products');

        $now = date('Y-m-d H:i:s');

        $promoModel = new PromotionModel();
        $activePromo = $promoModel
        ->where('status', 'active')
        ->where('start_date <=', $now)
        ->where('end_date >=', $now)
        ->orderBy('start_date', 'DESC')
        ->first();


        return view('Shop/index', [
            'products' => $products,
            'pager' => $query->pager,
            'category_selected' => $category,
            'price_selected' => $price,
            'sort_selected' => $sort,
            'filteredProducts' => $filteredProducts,
            'totalProducts' => $totalProducts,
            'activePromo' => $activePromo,
        ]);
    }
    public function detail($slug)
    {
        $productModel = new ProductModel();
        $specModel = new ProductSpecificationModel();
        $reviewModel = new ReviewModel();

        // Ambil produk berdasarkan slug
        $product = $productModel
            ->select('products.*, product_images.image_url')
            ->join('product_images', 'product_images.product_id = products.product_id AND product_images.is_primary = 1', 'left')
            ->where('slug', $slug)
            ->first();

        if (!$product) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Ambil semua gambar untuk gallery
        $images = $productModel->getImages($product['product_id']);

        // Ambil spesifikasi
        $specs = $specModel->getSpecs($product['product_id']);

        // Ambil review
        $reviews = $reviewModel->getReviews($product['product_id']);
        $avgRating = $reviewModel->getAverageRating($product['product_id'])['rating'];
        $reviewCount = $reviewModel->getReviewCount($product['product_id']);
        $relatedProducts = $productModel->getRelatedProducts($product['category_id'], $product['product_id']);

        return view('Shop/detail', [
            'product' => $product,
            'images'  => $images,
            'specs'   => $specs,
            'reviews' => $reviews,
            'avgRating' => $avgRating,
            'reviewCount' => $reviewCount,
            'related' => $relatedProducts,
        ]);
    }

    public function cart()
    {
         return view('Shop/cart');
    }
}


