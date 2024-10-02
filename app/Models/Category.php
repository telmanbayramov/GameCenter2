<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $fillable = [
        'title',
        'parent_category_id',
        'order',
        'created_date',
        'updated_date',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
