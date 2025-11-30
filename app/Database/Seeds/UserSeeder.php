<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'full_name'     => 'Admin Utama',
                'email'         => 'admin@example.com',
                'password_hash' => password_hash('admin123', PASSWORD_DEFAULT),
                'role'          => 'admin',
                'created_at'    => date('Y-m-d H:i:s')
            ],
            [
                'full_name'     => 'User Biasa',
                'email'         => 'user@example.com',
                'password_hash' => password_hash('user123', PASSWORD_DEFAULT),
                'role'          => 'customer',
                'created_at'    => date('Y-m-d H:i:s')
            ],
        ];

        // Insert multiple rows
        $this->db->table('users')->insertBatch($data);
    }
}
