<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sex;
use App\Product;

class ProductsController extends Controller
{

    public function products(){
        $products = Product::all();

        return view('pages.products')->with(compact('products'));
    }
}
