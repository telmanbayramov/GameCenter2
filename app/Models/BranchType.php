<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchType extends Model
{
    use HasFactory;
    protected $table = 'branch_types';

    protected $fillable = [
        'title',
        'order',
        'created_date',
        'updated_date',
    ];
    public function branches()
    {
        return $this->hasMany(Branch::class, 'branch_type_id');
    }
}
