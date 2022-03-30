<?php

namespace App\Http\Traits;

use App\Product;
use App\Category;


trait ProductTrait{

    public function getProducts($categorySlug, $subcategorySlug, $POST){  
        $filters = [];
        $filterAttributes = ['color', 'size'];
        
        foreach($filterAttributes as $filterAttribute){
            isset($POST[$filterAttribute]) ? $filters[$filterAttribute] = $POST[$filterAttribute] : '';
        }
        
        $all_products = Product::all();
        $products = collect();
        $cat_slugs = [$subcategorySlug];

        if($POST!=null){
            if(isset($POST['gender'])){
                array_push($cat_slugs, $POST['gender']);
            }

            if(isset($POST['featured_category'])){
                array_push($cat_slugs, $POST['featured_category']);
            }
        }
        $cat_slugs = array_filter($cat_slugs);


        //If subcategory selected but category isnt, category automaticaly becomes parent of subcategory
        if($subcategorySlug != null && $categorySlug == null){
            $categorySlug = Category::where('slug', $subcategorySlug)->first()->parent->slug;
        }
        
        //If category is not in request nor selected (products controller)
        if($categorySlug != null){


            //Route controll for category
            if(!in_array($categorySlug, Category::all()->pluck('slug')->toArray())){
                return abort(404);
            }


            $children_slugs = Category::where('slug', $categorySlug)->first()->children->pluck('slug')->toArray();
            foreach($all_products as $product){

                //If subslug is child of category, it will push prodcuts that have same slugs as in array cat_slugs (sub slug and gender if selected)                    
                if(in_array($subcategorySlug, $children_slugs)){
                    //Checking to see if product belongs to all categories in cat_slug
                    $belongsToAllCategories = count(array_intersect($cat_slugs, $product->categories->pluck('slug')->toArray())) == count($cat_slugs);
                    if($belongsToAllCategories){
                        $this->filter($products, $product, $filters);
                    }


                //If subsulug is null push products from all childcategories
                }else if($subcategorySlug == null){
                    foreach($children_slugs as $child_slug){
                        array_push($cat_slugs, $child_slug);

                        $belongsToAllCategories = count(array_intersect($cat_slugs, $product->categories->pluck('slug')->toArray())) == count($cat_slugs);

                        if($belongsToAllCategories){
                            $this->filter($products, $product, $filters);
                        }
                        array_pop($cat_slugs);
                    }

                }else{
                    //If subslug is not null but it doesnt exist
                    return abort(404);
                }
        
                
        }
                
        }else{
            //if category slug is null
            foreach($all_products as $product){
                $belongsToAllCategories = count(array_intersect($cat_slugs, $product->categories->pluck('slug')->toArray())) == count($cat_slugs);

                if($belongsToAllCategories){
                    $this->filter($products, $product, $filters);
                }
            }
        }
        

        return $products;
    }

    public function filter($products, $product, $filters){
        
        if($filters != null){
            $counter = 0;

            foreach($filters as $key=>$values){ //Cycling through filters 
                foreach($product->attributeProducts as $attributeProduct){ //cycling through attribute products (we can access values from there)
                    if(in_array($attributeProduct->attribute->code, array_keys($filters)) && count(array_intersect($values, $attributeProduct->attributeValues->pluck('value')->toArray())) == count($values)){
                        $counter++;
                    }else{
                        continue;
                    }
                }
            }

        if($counter == count($filters)){
            $products->push($product);
        }
            
        }else{
            $products->push($product);
        }
        
    }

}