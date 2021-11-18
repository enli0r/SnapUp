<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\CategoryProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductCategory;
use App\Attribute;
use App\Http\Traits\ProductTrait;
use PDO;

class CategoryController extends Controller
{

    use ProductTrait;

    public function index(Request $request, $categorySlug, $subcategorySlug = null){

        $products = $this->getProducts($categorySlug, $subcategorySlug, $request->gender, $_POST); //Function get products is from ProductTrait


        return view('pages.products')->with([
            'products' => $products,
            'gender' => $request->gender,
            'currentcategory' => Category::where('slug', $categorySlug)->first(),
            'previouspost' => $_POST
        ]);
    }

}
