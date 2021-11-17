<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\CategoryProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductCategory;
use App\Attribute;
use PDO;

class CategoryController extends Controller
{

    public function index(Request $request, $categorySlug, $subcategorySlug = null){
        // $this->routeControll($categorySlug, $subcategorySlug, $request);
        // $products = $this->getProducts($categorySlug, $subcategorySlug, $request);

        $products = $this->getProducts($categorySlug, $subcategorySlug, $request->gender, $_POST);


        return view('pages.products')->with([
            'products' => $products,
            'gender' => $request->gender,
            'currentcategory' => Category::where('slug', $categorySlug)->first()
        ]);
    }

    public function getProducts($categorySlug, $subcategorySlug, $gender, $POST){
        

        $filters = [];
        $filterAttributes = ['color', 'size'];
        foreach($filterAttributes as $filterAttribute){
            isset($POST[$filterAttribute]) ? $filters[$filterAttribute] = $POST[$filterAttribute] : '';
        }
        
        $all_products = Product::all();
        $products = collect();
        $cat_slugs = array_filter([$subcategorySlug]);

        if($POST!=null){
            if(isset($POST['gender'])){
                array_push($cat_slugs, $POST['gender']);
            }

            if(isset($POST['featured_category'])){
                array_push($cat_slugs, $POST['featured_category']);
            }

        }else{
            array_push($cat_slugs, $gender);
        }
        

        $children_slugs = Category::where('slug', $categorySlug)->first()->children->pluck('slug')->toArray();

        foreach($all_products as $product){


            //If subslug is not null, it will push prodcuts that have same slugs as in array cat_slugs (sub slug and gender if selected)
            if(in_array($subcategorySlug, $children_slugs)){
                //Checking to see if product belongs to all categories in cat_slug
                $belongsToAllCategories = count(array_intersect($cat_slugs, $product->categories->pluck('slug')->toArray())) == count($cat_slugs);
                if($belongsToAllCategories){
                    $this->filter($products, $product, $filters);
                }


            //If subsulug is null push products from all childcategories
            }else{
                foreach($children_slugs as $child_slug){
                    array_push($cat_slugs, $child_slug);

                    $belongsToAllCategories = count(array_intersect($cat_slugs, $product->categories->pluck('slug')->toArray())) == count($cat_slugs);

                    if($belongsToAllCategories){
                        $this->filter($products, $product, $filters);
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

    public function filter($products, $product, $filters){

        if($filters != null){
            foreach($product->attributeProducts as $attirbuteProduct){
                foreach($attirbuteProduct->attributeValues as $attributeValue){
                    foreach($filters as $filterName=>$filterValue){
                        if($attributeValue->value == $filterValue){
                            $products->push($product);
                        }
                    }
                }
            }
        }else{
            $products->push($product);
        }
        
    }

}
