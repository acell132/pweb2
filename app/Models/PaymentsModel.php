<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentsModel extends Model
{
    protected $table = 'payments';
    protected $primaryKey = 'payment_id';

    // Fields yang boleh diisi (mass assignment)
    protected $allowedFields = [
        'order_id',
        'payment_proof',
        'payment_date',
        'payment_method',
        'amount',
        'created_at',
        'updated_at'
    ];

    // Enable automatic timestamps
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Tipe data
    protected $returnType = 'array';
}
