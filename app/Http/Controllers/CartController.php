<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index(){
        return view('pages.cart');
    }

    public function store(Request $request){

        $validated = $request->validate([
            'size' => 'required',
            'color' => 'required'
        ]);


        $product = Product::findOrFail($request->product_id);
        $alert = '';

        $cart_count = Cart::content()->count();
        
        $cartItem = Cart::add(
            $product->id,
            $product->name,
            1,
            $product->price,
            0,
            ['size' => $request->size, 'color' => $request->color]
        );


        if($cart_count != Cart::content()->count()){
            $message = 'Product is successfuly added to cart!';
            $alert = 'success';
        }else{
            $message = 'Product is already in cart!';
            $alert = 'danger';
        }


        return redirect()->back()->with([
            'message' => $message,
            'alert' => $alert
        ]);
    }
}
