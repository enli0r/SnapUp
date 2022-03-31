<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Attribute;
use App\AttributeValue;
use App\CategoryProduct;
use App\ProductAttribute;
use Illuminate\Http\Request;
use App\Http\Traits\ProductTrait;
use App\Http\Controllers\Controller;
use App\AttributeValueProductAttribute;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Arr;

class ProductController extends Controller
{

    use ProductTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
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
        if(count($filtered_products) == 0){
            $filtered_products = $products;
        }


        return view('pages.products')->with([
            'products' => $filtered_products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        if($product == null){
            return abort(404);
        }

        $attributes = $product->attributes;
        $attributeProducts = $product->attributeProducts;

        return view('pages.show')->with(compact('product', 'attributes', 'attributeProducts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }


}
