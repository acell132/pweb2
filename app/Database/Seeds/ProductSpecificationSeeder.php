<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSpecificationSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // Produk 1
            [
                'product_id' => 5,
                'specification_name' => 'Material',
                'specification_value' => 'Besi Galvanis'
            ],
            [
                'product_id' => 5,
                'specification_name' => 'Berat',
                'specification_value' => '2.3 kg'
            ],
            [
                'product_id' => 5,
                'specification_name' => 'Warna',
                'specification_value' => 'Silver'
            ],

            // Produk 2
            [
                'product_id' => 6,
                'specification_name' => 'Material',
                'specification_value' => 'Baja Karbon'
            ],
            [
                'product_id' => 6,
                'specification_name' => 'Ukuran',
                'specification_value' => '30 cm'
            ],
            [
                'product_id' => 6,
                'specification_name' => 'Berat',
                'specification_value' => '1.8 kg'
            ],

            // Produk 3
            [
                'product_id' => 7,
                'specification_name' => 'Material',
                'specification_value' => 'PVC'
            ],
            [
                'product_id' => 7,
                'specification_name' => 'Diameter',
                'specification_value' => '4 inch'
            ],
            [
                'product_id' => 7,
                'specification_name' => 'Tipe',
                'specification_value' => 'Schedule 40'
            ],

            // Produk 4
            [
                'product_id' => 8,
                'specification_name' => 'Material',
                'specification_value' => 'Kayu Jati'
            ],
            [
                'product_id' => 8,
                'specification_name' => 'Panjang',
                'specification_value' => '1 meter'
            ],

            // Produk 5
            [
                'product_id' => 9,
                'specification_name' => 'Kapasitas',
                'specification_value' => '50 kg'
            ],
            [
                'product_id' => 9,
                'specification_name' => 'Bahan',
                'specification_value' => 'Baja Ringan'
            ],

            // Produk 6
            [
                'product_id' => 10,
                'specification_name' => 'Voltase',
                'specification_value' => '220V'
            ],
            [
                'product_id' => 10,
                'specification_name' => 'Daya',
                'specification_value' => '500 Watt'
            ],
            [
                'product_id' => 10,
                'specification_name' => 'Brand',
                'specification_value' => 'Makita'
            ],

            // Produk 7
            [
                'product_id' => 11,
                'specification_name' => 'Jenis',
                'specification_value' => 'Palu Besi'
            ],
            [
                'product_id' => 11,
                'specification_name' => 'Berat',
                'specification_value' => '800 gram'
            ],

            // Produk 8
            [
                'product_id' => 12,
                'specification_name' => 'Material',
                'specification_value' => 'Aluminium'
            ],
            [
                'product_id' => 12,
                'specification_name' => 'Ukuran',
                'specification_value' => '2 meter'
            ],

            // Produk 9
            [
                'product_id' => 13,
                'specification_name' => 'Tipe',
                'specification_value' => 'Bor Tangan'
            ],
            [
                'product_id' => 13,
                'specification_name' => 'Kecepatan',
                'specification_value' => '3000 RPM'
            ],
            [
                'product_id' => 13,
                'specification_name' => 'Daya',
                'specification_value' => '350 Watt'
            ],
        ];

        $this->db->table('product_specifications')->insertBatch($data);
    }
}
