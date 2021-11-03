<?php

namespace App;

use App\Attribute;
use App\ProductImage;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'code', 'price', 'online_price', 'description', 'quantity', 'status', 'is_featured'];

    protected $casts = [
        'status' => 'boolean',
        'is_featured' => 'boolean'
    ];

    public function category(){
        return $this->belongsToMany(Category::class);
    }

    public function images(){
        return $this->hasMany(ProductImage::class);
    }

    public function attributes(){
        return $this->hasMany(Attribute::class);
    }

}
