<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\CategoryProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function show(Category $category){

        return view('pages.products')->with([
            'products' => $category->products,
            'child_categories' => $category->children,
        ]);
    }
}
