<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'slug',
        'price',
        'stok',
        'short_desc',
        'desc',
        'category_id',
        'cover_image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function image()
    {
        return $this->hasMany(Image::class, 'product_id');
    }
}
