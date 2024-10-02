<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatStatus extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'seat_statuses';

    protected $fillable = [
        'title',
        'color',
    ];

    public function seats()
    {
        return $this->hasMany(Seat::class, 'seat_status');
    }
}
