<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    use HasFactory;
    protected $table = 'product_orders';

    protected $fillable = [
        'seat_order_id',
        'product_id',
        'count',
        'price',
        'total_price',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function productOrders()
    {
        return $this->hasMany(ProductOrder::class, 'product_id');
    }
    public function SeatOrders()
    {
        return $this->hasMany(SeatOrder::class, 'seat_order_id');
    }
}
