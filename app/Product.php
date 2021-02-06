<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','sex_id','type_id','slug', 'description', 'parent_id', 'featured','menu','image'];
    protected $casts = [
        'parent_id' =>  'integer',
        'featured'  =>  'boolean',
        'menu'      =>  'boolean'
    ];

    public function sex(){
        return $this->belongsTo('App\Sex', 'sex_id');
    }

    public function type(){
        return $this->belongsTo('App\Type', 'type_id');
    }
}
