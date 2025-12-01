<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderItemModel extends Model
{
    protected $table = 'order_items';
    protected $primaryKey = 'order_item_id';
    protected $allowedFields = [
        'order_id',
        'product_id',
        'quantity',
        'unit_price',
        'created_at',
        'updated_at'
    ];

    protected $useTimestamps = true; // otomatis handle created_at & updated_at
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
