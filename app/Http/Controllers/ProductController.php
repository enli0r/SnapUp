<?php

namespace App\Http\Controllers;

use App\Product;
use App\Attribute;
use App\AttributeValue;
use App\ProductAttribute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AttributeValueProductAttribute;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($categorySlug = null, $subcategorySlug = null, $subsubcategorySlug = null)
    {
        $this->routeControll($categorySlug, $subcategorySlug, $subsubcategorySlug);
        $categories = $this->getCategories($categorySlug, $subcategorySlug, $subsubcategorySlug);

        return view('pages.products')->with(compact('categories'));
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

    public function getCategories($categorySlug, $subcategorySlug, $subsubcategorySlug)
    {
        $routeCategorySlugs = array($categorySlug, $subcategorySlug, $subsubcategorySlug);
        $routeCategorySlugs = array_filter($routeCategorySlugs); //removing null values
        $categories = Category::all();
                
        foreach($routeCategorySlugs as $slug){
            $categories = $categories->where('slug', $slug);
        }

        //dd($categories);
        return $categories;
    }

    public function routeControll($categorySlug, $subcategorySlug, $subsubcategorySlug){

        //Not allowing parent categories to be sub categories
        if($subcategorySlug != null){
            $subcategory = Category::where('slug', $subcategorySlug)->first();

            if($subcategory->parent_id == null){
                return abort(404);
            }

        }

        //Not allowing parent categories to be subsub categories
        if($subsubcategorySlug != null){
            $subsubcategory = Category::where('slug', $subsubcategorySlug)->first();

            if($subsubcategory->parent_id == null){
                return abort(404);
            }
        }


        //Redirecting to error 404 page if category slugs dont exist
        $allCategorySlugs = Category::all()->pluck('slug')->toArray();
        $routeCategorySlugs = array($categorySlug, $subcategorySlug, $subsubcategorySlug);
        $routeCategorySlugs = array_filter($routeCategorySlugs); //removing null values

        
        //Making sure we are not array intersecting with null values in arrar
        foreach($routeCategorySlugs as $slug){
            if(!in_array($slug, $allCategorySlugs)){
                return abort(404);
            }
        }

        if(count(array_intersect($routeCategorySlugs, $allCategorySlugs)) != count($routeCategorySlugs)){
            return abort(404);
        }
    }

}
