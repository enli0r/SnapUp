<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\CategoryProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductCategory;

class CategoryController extends Controller
{

    public function index(){
        return view('pages.categories')->with('categories', Category::all());
    }


    // public function show($categorySlug, $subcategorySlug = null, $subsubcategorySlug = null){

    //     $categories = Category::whereIn('slug', [$categorySlug, $subcategorySlug, $subsubcategorySlug])->get();

    //     return view('pages.products')->with([
    //         'categories' => $categories
    //     ]);
    // }
}
