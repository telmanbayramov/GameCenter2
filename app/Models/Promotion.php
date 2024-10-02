<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    protected $table = 'promotions';

    protected $fillable = [
        'title',
        'price',
        'description',
        'created_date',
        'updated_date',
        'order',
    ];

    public function seatOrders()
    {
        return $this->hasMany(SeatOrder::class, 'promotion_id');
    }
    public function components()
    {
        return $this->hasMany(PromotionComponent::class, 'promotion_id');
    }
}
