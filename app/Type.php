<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function category(){
        return $this->belongsTo('App\Category','cat_id');
    }

    public function product(){
        return $this->hasMany('App\Product', 'type_id');
    }
}
