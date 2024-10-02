<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;
    protected $table = 'costs';

    protected $fillable = [
        'cost_type_id',
        'title',
        'amount',
        'order',
    ];

    public function costsType()
    {
        return $this->belongsTo(CostType::class, 'cost_type_id');
    }
}
