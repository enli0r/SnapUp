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
        $products = Product::all();
        $currentcategory = null;

        $products = $this->getProducts(isset($_POST['category']) ? $_POST['category'] : null, isset($_POST['subcategory']) ? $_POST['subcategory'] : null, $_POST);

        isset($_POST) ? $previouspost = $_POST : $previouspost = null;

        return view('pages.products')->with([
            'products' => $products,
            'currentcategory' => $currentcategory,
            'previouspost' => $previouspost
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


    public function addToCart(Request $request){
        $product = Product::findOrFail($request->product_id);

        Cart::add(
            $product->id,
            $product->name,
            1,
            $product->price,
            0,
            ['size' => $request->size, 'color' => $request->color]
        );
        
    }

}
