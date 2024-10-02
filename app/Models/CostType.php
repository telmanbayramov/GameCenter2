<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostType extends Model
{
    use HasFactory;

    protected $table = 'costs_types';

    protected $fillable = [
        'title',
        'order',
    ];

    public function costs()
    {
        return $this->hasMany(Cost::class, 'cost_type_id');
    }
}
