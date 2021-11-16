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

        // $this->routeControll($categorySlug, $subcategorySlug, $request);
        $products = $this->getProducts($categorySlug, $subcategorySlug, $request);
        
        return view('pages.products')->with([
            'products' => $products,
            'gender' => $request->gender,
            'currentCategory' => Category::where('slug', $categorySlug)->first()
        ]);
    }

    public function filter(Request $request, $categorySlug, $subcategorySlug = null){
        $request->random="xd";

        $products = $this->getProducts($categorySlug, $subcategorySlug, $request);


        
    }

    public function getProducts($categorySlug, $subcategorySlug, $request){

        dd($request->random);

        $all_products = Product::all();
        $products = collect();
        $cat_slugs = [$subcategorySlug, $request->gender];
        $cat_slugs = array_filter($cat_slugs);
        $children_slugs = Category::where('slug', $categorySlug)->first()->children->pluck('slug')->toArray();
        
            
        foreach($all_products as $product){
            
            //If subslug is not null, it will push prodcuts that have same slugs as in array cat_slugs (sub slug and gender if selected)
            if(in_array($subcategorySlug, $children_slugs)){
                //Checking to see if product belongs to all categories in cat_slug
                $check = count(array_intersect($cat_slugs, $product->categories->pluck('slug')->toArray())) == count($cat_slugs);

                if($check){
                    $products->push($product);
                }


            //If subsulug is null push products from all childcategories
            }else{
                foreach($children_slugs as $child_slug){
                    array_push($cat_slugs, $child_slug);
                    $check = count(array_intersect($cat_slugs, $product->categories->pluck('slug')->toArray())) == count($cat_slugs);

                    if($check){
                        $products->push($product);
                    }
                    array_pop($cat_slugs);
                }

            }
    
            
        }

        return $products;
    }

    public function routeControll($categorySlug, $subcategorySlug, $request){
         $childrenCategorySlugs = Category::where('slug', $categorySlug)->first()->children->pluck('slug')->toArray();
         $genders = ['men', 'women'];

        if($request->gender != null && !in_array($request->gender, $genders)){
            return abort(404);
        }

         if($subcategorySlug != null && !in_array($subcategorySlug, $childrenCategorySlugs)){
             return abort(404);
         }

         
    }

}
