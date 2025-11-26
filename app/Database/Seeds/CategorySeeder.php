<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'        => 'Material Bangunan',
                'slug'        => 'material-bangunan',
                'description' => 'Berbagai material untuk kebutuhan konstruksi.',
                'icon'        => 'icons/material.png',
                'created_at'  => Time::now(),
                'updated_at'  => Time::now(),
            ],
            [
                'name'        => 'Peralatan Tukang',
                'slug'        => 'peralatan-tukang',
                'description' => 'Peralatan untuk pekerjaan bangunan.',
                'icon'        => 'icons/tools.png',
                'created_at'  => Time::now(),
                'updated_at'  => Time::now(),
            ],
            [
                'name'        => 'Safety Equipment',
                'slug'        => 'safety-equipment',
                'description' => 'Perlengkapan keselamatan kerja.',
                'icon'        => 'icons/safety.png',
                'created_at'  => Time::now(),
                'updated_at'  => Time::now(),
            ]
        ];

        $this->db->table('categories')->insertBatch($data);
    }
}
