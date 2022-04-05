<?php

namespace App;

use App\Product;
use App\Attribute;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    protected $table = 'attribute_values';

    protected $fillable = ['value', 'price'];

    public function attribute(){
        return $this->belongsTo(Attribute::class);
    }

    //method for defining relationship with attributeProduct through pivot table
    public function attributeProducts(){
        return $this->belongsToMany(AttributeProduct::class, 'attribute_value_attribute_product', 'attribute_value_id', 'attribute_product_id')->using(AttributeValueAttributeProduct::class);
    }

}
