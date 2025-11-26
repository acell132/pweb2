<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductSpecificationModel extends Model
{
    protected $table = 'product_specifications';
    protected $primaryKey = 'spec_id';
    protected $allowedFields = ['product_id', 'specification_name', 'specification_value'];

    public function getSpecs($productId)
    {
        return $this->where('product_id', $productId)->findAll();
    }

    public function getWeight($productId)
    {
        $row = $this->where('product_id', $productId)
                    ->where('specification_name', 'weight')
                    ->first();

        if (!$row) return 0;

        // Bersihkan semua karakter non angka
        return floatval($row['specification_value']);
    }


}
