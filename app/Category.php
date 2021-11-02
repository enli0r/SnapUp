<?php

namespace App;

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
    
}
