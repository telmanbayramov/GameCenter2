<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'order',
        'branch_type_id',
        'created_date',
        'updated_date',
    ];

    public function branchType()
    {
        return $this->belongsTo(BranchType::class);
    }

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }
}
