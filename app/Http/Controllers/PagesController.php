<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\ProductImage;
use App\Sex;
use App\Testimonial;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{

    public function index(){

        $categories = Category::all();
        $products = Product::all();
        $testimonials = Testimonial::all();

        return view('pages.index')->with(compact('categories', 'products', 'testimonials'));
    }

    public function about(){
        return view('pages.about');
    }

    public function admin(){
        return view('admin.index');
    }
}
