<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderController extends Controller
{
    public function index(){
        return view('pages.order');
    }

    public function destroy($id){
        Cart::remove($id);

        return redirect()->back();
    }
}
