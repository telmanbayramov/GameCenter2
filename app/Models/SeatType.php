<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatType extends Model
{
    use HasFactory;

    protected $table = 'seat_types';

    protected $fillable = [
        'title',
        'order',
        'created_date',
        'updated_date',
    ];

    public function seats()
    {
        return $this->hasMany(Seat::class, 'seat_type_id');
    }
}
