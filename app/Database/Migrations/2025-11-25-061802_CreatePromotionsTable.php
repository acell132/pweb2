<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePromotionsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'promotion_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'promo_code' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'unique'     => true
            ],
            'description' => [
                'type'    => 'TEXT',
                'null'    => true
            ],
            'discount_type' => [
                'type'       => 'ENUM',
                'constraint' => ['percent', 'fixed'],
                'default'    => 'percent'
            ],
            'discount_value' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'default'    => 0.00
            ],
            'min_purchase' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'default'    => 0.00
            ],
            'max_discount' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'null'       => true
            ],
            'start_date' => [
                'type' => 'DATETIME'
            ],
            'end_date' => [
                'type' => 'DATETIME'
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['active', 'inactive', 'expired'],
                'default'    => 'active'
            ],
            'created_at' => [
                'type'    => 'DATETIME',
                'null'    => true
            ],
            'updated_at' => [
                'type'    => 'DATETIME',
                'null'    => true
            ]
        ]);

        $this->forge->addKey('promotion_id', true);

        $this->forge->createTable('promotions');
    }

    public function down()
    {
        $this->forge->dropTable('promotions');
    }
}
