<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $table = 'attributes';

    protected $fillable = ['name', 'code', 'product_id', 'is_required'];


    public function value(){
        return $this->hasMany('App\AttributeValue', 'attribute_id');
    }

}
