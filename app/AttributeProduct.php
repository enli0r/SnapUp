<?php

namespace App;

use App\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AttributeProduct extends Pivot //Pivot table that has pivot table
{
    protected $table = 'attribute_product';

    public function products(){
        return $this->belongsTo(Product::class);
    }

    public function attribute(){
        return $this->belongsTo(Attribute::class);
    }

    //method for accessing products through pivot table
    public function attributeValues(){
        return $this->belongsToMany(AttributeValue::class, 'attribute_value_attribute_product', 'attribute_product_id', 'attribute_value_id')->using(AttributeValueAttributeProduct::class);
    }
}
