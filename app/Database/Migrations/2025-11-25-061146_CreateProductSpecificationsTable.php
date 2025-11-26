<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductSpecificationsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'spec_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'product_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'specification_name' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'specification_value' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('spec_id', true);
        $this->forge->addForeignKey('product_id', 'products', 'product_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('product_specifications');
    }

    public function down()
    {
        $this->forge->dropTable('product_specifications');
    }
}
