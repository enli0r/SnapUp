<?php

namespace App;

use App\Product;
use App\OrderDetails;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['order_details_id', 'product_id', 'size', 'color', 'quantity', 'total_price'];


    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function orderDetails(){
        return $this->belongsTo(OrderDetails::class);
    }
}
