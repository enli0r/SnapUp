<?php

namespace App\Http\Traits;

use App\Product;
use App\Category;


trait ProductTrait{

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