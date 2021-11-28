<?php

namespace App\Http\Controllers;

use App\OrderDetails;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderDetailsController extends Controller
{
    public function index(){
        return view('pages.order-details');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:25',
            'country' => 'required|max:255',
            'zipCode' => 'required|max:25',
            'adress' => 'required|max:255',
            'phoneNumber' => 'required|max:25',
            'payment' => 'required'
        ]);


        OrderDetails::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'country' => $request->country,
            'zipCode' => $request->zipCode,
            'adress' => $request->adress,
            'phoneNumber' => $request->phoneNumber,
            'payment' => $request->payment,
        ]);

        return view('order')->with('post', $request);
    }
}
