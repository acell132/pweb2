<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    public function run()
    {
        $images = [
            [
                'product_id' => 1,
                'image_url' => 'uploads/products/construction.jpg',
                'is_primary' => true,
            ],
            [
                'product_id' => 2,
                'image_url' => 'uploads/products/construction.jpg',
                'is_primary' => true,
            ],
            [
                'product_id' => 3,
                'image_url' => 'uploads/products/construction.jpg',
                'is_primary' => true,
            ],
            [
                'product_id' => 4,
                'image_url' => 'uploads/products/construction.jpg',
                'is_primary' => true,
            ],
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
        ];

        $this->db->table('product_images')->insertBatch($images);
    }
}
