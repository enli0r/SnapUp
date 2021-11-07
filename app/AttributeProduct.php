<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AttributeProduct extends Pivot //Pivot table that has pivot table
{
    protected $table = 'attribute_product';

    //method for accessing products through pivot table
    public function attributeValues(){
        return $this->belongsToMany(AttributeValue::class, 'attribute_value_attribute_product', 'attribute_product_id', 'attribute_value_id')->using(AttributeValueAttributeProduct::class);
    }
}
