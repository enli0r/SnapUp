<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name' ,'slug', 'description', 'parent_id', 'featured','menu','image', 'sex'];

    protected $casts = [
        'parent_id' =>  'integer',
        'featured'  =>  'boolean',
        'menu'      =>  'boolean'
    ];

    public function parent(){
        return $this->belongsTo('App\Category', 'parent_id');
    }

    public function images(){
        return $this->hasMany('App\ProductImage');
    }
}
