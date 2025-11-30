<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'payment_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'order_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'payment_proof' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'payment_date' => [
                'type' => 'DATETIME',
            ],
            'payment_method' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'amount' => [
                'type' => 'DECIMAL',
                'constraint' => '20,2',
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

        $this->forge->addKey('payment_id', true);
        $this->forge->addForeignKey('order_id', 'orders', 'order_id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('payments');
    }

    public function down()
    {
        $this->forge->dropTable('payments');
    }
}
