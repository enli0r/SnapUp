<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    protected $table = 'order_details';

    protected $fillable = ['name', 'surname', 'country', 'city', 'zip-code', 'adress', 'phone-number'];


    public function orders(){
        return $this->hasMany(Order::class);
    }
}
