<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name', 'slug', 'parent_id', 'image','sex'];


    public function parent(){
        return $this->belongsTo('App\Category', 'parent_id');
    }

    public function children(){
        return $this->hasMany('App\Category', 'parent_id');
    }

    public function products(){
        return $this->hasMany('App\Product', 'parent_id');
    }

}
