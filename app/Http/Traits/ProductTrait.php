<?php

namespace App\Http\Traits;

use App\Product;
use App\Category;
use Illuminate\Support\Arr;


trait ProductTrait{

    public function getProducts(){
        $gender = request()->gender;

        if(request()->gender != null){
            $products = Category::where('name', $gender)->first()->products;
        }else{
            $products = Product::all();
        }

        $filters = Arr::except(request()->input(), ['gender']);
        $filtered_products = collect();


        //Algorithm for filtering products ie. pushing products that accept conditions into filtered products array.
        foreach($products as $product){
            foreach($filters as $filter=>$values){
                foreach($values as $value){

                    // Comparing to product categories
                    foreach($product->categories->pluck('name') as $category){

                        if($value == $category){
                            if(!$filtered_products->contains($product)){
                                $filtered_products->push($product);
                            }
                        }
                    }

                    // Comparing to product attributes
                    foreach($product->attributes->pluck('name') as $attribute){
                        if($value == $attribute){
                            if(!$filtered_products->contains($product)){
                                $filtered_products->push($product);
                            }
                        }
                    }
                }
            }
        }



        //If there are no filtered products, show products which fromm the condition can be either all products or products with selected gender
        if(request()->input() == null){
            $filtered_products = Product::all();
        }

        if(request()->gender != null && count($filters) == 0){
            $filtered_products = Category::where('name', $gender)->first()->products;
        }
        

        return $filtered_products;

    }

    
}