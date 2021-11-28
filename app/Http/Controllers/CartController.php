<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index(){
        $products = Cart::content();
        $images = ProductImage::all();

        return view('pages.cart')->with(compact('products', 'images'));
    }

    public function store(Request $request){

        $validated = $request->validate([
            'size' => 'required',
            'color' => 'required',
            'quantity' => 'required'
        ]);


        $product = Product::findOrFail($request->product_id);
        $alert = '';

        $cart_count = Cart::content()->count();
        
        $cartItem = Cart::add(
            $product->id,
            $product->name,
            $request->quantity,
            $product->price,
            0,
            ['size' => $request->size, 'color' => $request->color]
        )->associate('Product');

        
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
