<?php

namespace App\Models;

use CodeIgniter\Model;

class PromotionModel extends Model
{
    protected $table = 'promotions';
    protected $primaryKey = 'promotion_id';

    protected $allowedFields = [
        'promo_code', 'description', 'discount_type', 'discount_value',
        'min_purchase', 'max_discount', 'start_date', 'end_date',
        'status'
    ];

    // Valid promo
    public function checkValidPromo($code)
    {
        $now = date('Y-m-d H:i:s');

        return $this->where('promo_code', $code)
            ->where('status', 'active')
            ->where('start_date <=', $now)
            ->where('end_date >=', $now)
            ->first();
    }
}
