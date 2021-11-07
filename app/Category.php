<?php

namespace App;

use App\Product;
use App\CategoryProduct;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name', 'slug', 'description', 'parent_id', 'is_featured', 'image'];

    protected $casts = [
        'featured' => 'boolean',
    ];

    public function children(){
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function parent(){
        return $this->belongsTo(Category::class, 'parent_id');
    }
    
    //method for accessing products through pivot table
    public function products(){
        return $this->belongsToMany(Product::class)->using(CategoryProduct::class);
    }

}
