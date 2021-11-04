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

    public function productAtrributes(){
        return $this->belongsToMany(ProductAttribute::class);
    }


}
