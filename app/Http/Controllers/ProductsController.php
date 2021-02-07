<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index(){
        $products = Category::find(3)->products;

        //dd($products);

        return view('pages.products')->with(compact('products'));
    }
}
