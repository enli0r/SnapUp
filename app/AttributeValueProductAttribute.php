<?php

namespace App;

use App\AttributeValue;
use App\ProductAttribute;
use Illuminate\Database\Eloquent\Model;

class AttributeValueProductAttribute extends Model
{
    protected $table = 'attribute_value_product_attributes';

    protected $fillable = ['product_attribute_id', 'attribute_value_id', 'price'];

    public function productAttribute(){
        return $this->belongsTo(ProductAttribute::class);
    }

    public function attribute_value(){
        return $this->belongsTo(AttributeValue::class);
    }
}
