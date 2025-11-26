<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $allowedFields = [
        'category_id', 'name', 'slug', 'description', 'price',
        'stock', 'rating', 'is_featured', 'status'
    ];

    public function getProductsWithImage()
    {
        return $this->select('products.*, product_images.image_url')
            ->join('product_images', 'product_images.product_id = products.product_id AND product_images.is_primary = 1', 'left')
            ->where('products.status', 'active')
            ->orderBy('products.created_at', 'DESC')
            ->findAll();
    }

    public function getImages($productId)
    {
        return $this->db->table('product_images')
            ->where('product_id', $productId)
            ->orderBy('is_primary', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function getRelatedProducts($categoryId, $currentProductId)
    {
        return $this->select('products.*, product_images.image_url')
            ->join(
                'product_images',
                'product_images.product_id = products.product_id 
                AND product_images.is_primary = 1',
                'left'
            )
            ->where('products.category_id', $categoryId)
            ->where('products.product_id !=', $currentProductId)
            ->where('products.status', 'active')
            ->limit(4)
            ->findAll();
    }


}
