<?php

namespace App;

use App\Product;
use App\AttributeValue;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $table = 'attributes';

    protected $fillable = ['name', 'is_filterable', 'is_requried'];

    protected $casts = [
        'is_required' => 'boolean',
        'is_filterable' => 'boolean',
    ];

    public function values(){
        return $this->hasMany(AttributeValue::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
