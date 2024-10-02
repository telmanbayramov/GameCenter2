<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'seats';

    protected $fillable = [
        'seat_type_id',
        'branch_id',
        'order',
        'seat_status',
    ];
    public function seatType()
    {
        return $this->belongsTo(SeatType::class, 'seat_type_id');
    }

    public function seatStatus()
    {
        return $this->belongsTo(SeatStatus::class, 'seat_status');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }
}
