<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionComponent extends Model
{
    use HasFactory;
    protected $table = 'promotion_components';

    protected $fillable = [
        'promotion_id',
        'title',
        'product_id',
        'count',
        'description',
        'price',
        'created_date',
        'updated_date',
        'order',
    ];

    public function promotion()
    {
        return $this->belongsTo(Promotion::class, 'promotion_id');
    }
}
