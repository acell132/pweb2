<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'order_id';
    protected $allowedFields = [
        'user_id',
        'status',
        'total',
        'order_date',
        'address',
        'created_at',
        'updated_at'
    ];

    protected $useTimestamps = true; // otomatis set created_at & updated_at
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
