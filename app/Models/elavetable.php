<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class elavetable extends Model
{
    use HasFactory;
    protected $table = 'elavetable';

    protected $fillable = [
        'elave_id',
        'product_orders_id',
        'amount',
    ];

    public function elave()
    {
        return $this->belongsTo(Elave::class, 'elave_id');
    }
}
