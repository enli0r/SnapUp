<?php

namespace App\Http\Controllers;

use App\Product;
use App\OrderDetails;
use App\ProductImage;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderDetailsController extends Controller
{
    public function index(){
        return view('pages.order-details');
    }

    public function validation(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:25',
            'country' => 'required|max:255',
            'zipCode' => 'required|max:25',
            'adress' => 'required|max:255',
            'phoneNumber' => 'required|max:25',
            'payment' => 'required'
        ]);


        $order_details = [
            'name' => $request->name,
            'surname' => $request->surname,
            'country' => $request->country,
            'city' => $request->city,
            'zip-code' => $request->zipCode,
            'adress' => $request->adress,
            'phone-number' => $request->phoneNumber,
            'payment' => $request->payment,
        ];

        $products = Cart::content();
        $images = ProductImage::all();

        return view('pages.order')->with([
            'order_details' => $order_details,
            'products' => $products,
            'images' => $images,
        ]);
    }
}
