<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PromotionSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'promo_code'     => 'PROMO10',
                'description'    => 'Diskon 10% untuk semua produk.',
                'discount_type'  => 'percent',
                'discount_value' => 10,
                'min_purchase'   => 50000,
                'max_discount'   => 20000,
                'start_date'     => '2025-01-01 00:00:00',
                'end_date'       => '2025-12-31 23:59:59',
                'status'         => 'active',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s')
            ],
            [
                'promo_code'     => 'FIX5000',
                'description'    => 'Potongan langsung Rp5.000.',
                'discount_type'  => 'fixed',
                'discount_value' => 5000,
                'min_purchase'   => 20000,
                'max_discount'   => null,
                'start_date'     => '2025-02-01 00:00:00',
                'end_date'       => '2025-02-28 23:59:59',
                'status'         => 'inactive',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s')
            ],
            [
                'promo_code'     => 'EXPIRED50',
                'description'    => 'Promo sudah kadaluarsa.',
                'discount_type'  => 'percent',
                'discount_value' => 50,
                'min_purchase'   => 100000,
                'max_discount'   => 50000,
                'start_date'     => '2024-01-01 00:00:00',
                'end_date'       => '2024-01-31 23:59:59',
                'status'         => 'expired',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s')
            ],
        ];

        // Insert multiple rows
        $this->db->table('promotions')->insertBatch($data);
    }
}
