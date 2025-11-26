<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    public function run()
    {
        $images = [
            [
                'product_id' => 5,
                'image_url' => 'uploads/products/construction.jpg',
                'is_primary' => true,
            ],
            [
                'product_id' => 6,
                'image_url' => 'uploads/products/construction.jpg',
                'is_primary' => true,
            ],
            [
                'product_id' => 7,
                'image_url' => 'uploads/products/construction.jpg',
                'is_primary' => true,
            ],
            [
                'product_id' => 8,
                'image_url' => 'uploads/products/construction.jpg',
                'is_primary' => true,
            ],
            [
                'product_id' => 9,
                'image_url' => 'uploads/products/construction.jpg',
                'is_primary' => true,
            ],
            [
                'product_id' => 10,
                'image_url' => 'uploads/products/construction.jpg',
                'is_primary' => true,
            ],
            [
                'product_id' => 11,
                'image_url' => 'uploads/products/construction.jpg',
                'is_primary' => true,
            ],
            [
                'product_id' => 12,
                'image_url' => 'uploads/products/construction.jpg',
                'is_primary' => true,
            ],
            [
                'product_id' => 13,
                'image_url' => 'uploads/products/construction.jpg',
                'is_primary' => true,
            ],
        ];

        $this->db->table('product_images')->insertBatch($images);
    }
}
