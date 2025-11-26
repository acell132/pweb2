<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'review_id' => 1,
                'product_id' => 5,
                'user_id' => 2,
                'rating' => 5,
                'review_text' => 'Excellent quality cement! Very strong and sets quickly.',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'review_id' => 2,
                'product_id' => 5,
                'user_id' => 2,
                'rating' => 5,
                'review_text' => 'Consistency is perfect and delivery was fast. Recommended!',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'review_id' => 3,
                'product_id' => 6,
                'user_id' => 1,
                'rating' => 4,
                'review_text' => 'Good quality cement, but packaging could be improved.',
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('reviews')->insertBatch($data);
    }
}
