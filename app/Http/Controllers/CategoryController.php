<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\CategoryProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductCategory;
use PDO;

class CategoryController extends Controller
{

    public function index(Request $request, $categorySlug, $subcategorySlug = null){
        
        $products = $this->getProducts($categorySlug, $subcategorySlug, $request);

        return view('pages.products')->with(compact('products'));
    }

    public function getProducts($categorySlug, $subcategorySlug, $request){
        $category = Category::where('slug', $categorySlug)->first();



        //Ako podkategorija ne postoji vracamo proizvode iz svih podkategorija u toj kategoriji, a ako postoji onda vracamo proizvode samo iz te podkategorije
        if($subcategorySlug == null){
            if(count($category->children) > 0){
                $products = $category->children[0]->products; //created collection of products
    
                for ($i=1 ; $i < count($category->children) ; $i++) { 
                    foreach($category->children[$i]->products as $product){ //iterating through category children products
                        $products->push($product); //adding prodduct to existing collection
                    }
                }
            }else{
                $products = $category->products;
            }
        }else{
            $subcategory = Category::where('slug', $subcategorySlug)->first();
            $products = $subcategory->products;
        }

        return $products;
    }


    public function getGenderProducts($products, $product, $request){

        //Iterating categories that this product belongs to, and checking if that category slug is male or female (equal to request gender(male, female))
        foreach($product->categories as $productCategory){
            if($productCategory->slug == $request->gender){
                $products->push($product); //adding prodduct to existing collection
            }
        }

        return $products;
    }

}
