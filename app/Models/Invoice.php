<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoices';

    protected $fillable = [
        'total_price',
        'seat_order_id',
        'created_date',
        'updated_date',
    ];

    public function seatOrder()
    {
        return $this->belongsTo(SeatOrder::class, 'seat_order_id');
    }
}
