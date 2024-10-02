<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatOrder extends Model
{
    use HasFactory;
    protected $table = 'seat_orders';

    protected $fillable = [
        'seat_id',
        'promotion_id',
        'start_date',
        'end_date',
        'created_date',
        'updated_date',
    ];

    public function promotion()
    {
        return $this->belongsTo(Promotion::class, 'promotion_id');
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'seat_order_id');
    }
    public function products_orders()
    {
        return $this->hasMany(Invoice::class, 'seat_order_id');
    }
}
