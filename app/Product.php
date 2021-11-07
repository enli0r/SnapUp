<?php

namespace App;

use App\Attribute;
use App\ProductImage;
use App\AttributeValue;
use App\CategoryProduct;
use App\ProductAttribute;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'code', 'price', 'online_price', 'description', 'quantity', 'status', 'is_featured'];

    protected $casts = [
        'status' => 'boolean',
        'is_featured' => 'boolean'
    ];

    public function images(){
        return $this->hasMany(ProductImage::class);
    }

    //method for accessing attributes through pivot table
    public function attributes(){
        return $this->belongsToMany(Attribute::class)->using(AttributeProduct::class);
    }

    //method for accessing categories through pivot table
    public function categories(){
        return $this->belongsToMany(Category::class)->using(CategoryProduct::class);
    }

    //method for accessing attributeProducts
    public function attributeProducts(){
        return $this->hasMany(AttributeProduct::class);
    }
}
