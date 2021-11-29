<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetails;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderController extends Controller
{
    public function index(){
        return view('pages.order');
    }
    

    public function store(Request $request){
        $order_details = OrderDetails::create($request->order_details);

        $products = Cart::content();

        foreach($products as $product){
            Order::create([
                'order_details_id' => $order_details->id,
                'product_id' => $product->id,
                'size' => $product->options['size'],
                'color' => $product->options['color'],
                'quantity' => $product->qty,
                'total_price' => $request->totalPrice,
            ]);
        }

        Cart::destroy();

        return view('pages.order-confirmed')->with('message', 'Thank you for your purchase');
    }
}
