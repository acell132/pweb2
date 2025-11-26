<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewModel extends Model
{
    protected $table = 'reviews';
    protected $primaryKey = 'review_id';
    protected $allowedFields = ['product_id', 'user_id', 'rating', 'review_text'];

    public function getReviews($productId)
    {
        return $this->select('reviews.*, users.full_name')
                    ->join('users', 'users.user_id = reviews.user_id', 'left')
                    ->where('reviews.product_id', $productId)
                    ->orderBy('reviews.created_at', 'DESC')
                    ->findAll();
    }

    public function getAverageRating($productId)
    {
        return $this->where('product_id', $productId)
                    ->selectAvg('rating')
                    ->first();
    }

    public function getReviewCount($productId)
    {
        return $this->where('product_id', $productId)->countAllResults();
    }
}
