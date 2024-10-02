<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'title',
        'category_id',
        'price',
        'stock_count',
        'order',
        'created_date',
        'updated_date',
    ];

    public function productOrders()
    {
        return $this->hasMany(ProductOrder::class, 'product_id');
    }
}
