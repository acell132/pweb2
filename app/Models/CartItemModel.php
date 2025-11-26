<?php

namespace App\Models;

use CodeIgniter\Model;

class CartItemModel extends Model
{
    protected $table = 'cart_items';
    protected $primaryKey = 'cart_item_id';
    protected $allowedFields = ['cart_id', 'product_id', 'quantity', 'unit_price', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
}