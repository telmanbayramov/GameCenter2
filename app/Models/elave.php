<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class elave extends Model
{
    use HasFactory;
    protected $table = 'elave';

    protected $fillable = [
        'promotion_id',
        'amount',
    ];

    public function elaveTables()
    {
        return $this->hasMany(ElaveTable::class, 'elave_id');
    }
}
