<x-layout>
    <section class="product">
        <div class="container">

            {{-- if order not validated --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <p class="my-0">Please fill in all product details!</p>
                </div>
            @endif

            @if (session('message'))
                <div class="alert alert-{{ session('alert') }}">
                    <p class="my-0">{{ session('message') }}</p>
                </div>
            @endif
            {{--  --}}

            <div class="product-wrapper grid-container">

                <div class="product-images">

                    <div class="side-images">
                        <img class="main-image" src="{{ $product->images->first()->url }}" alt="">

                        <img class="secondary-image" src="https://lp2.hm.com/hmgoepprod?set=quality%5B79%5D%2Csource%5B%2F12%2F14%2F1214b7c6fc43fb86060eac7967a689d1f8e59722.jpg%5D%2Corigin%5Bdam%5D%2Ccategory%5B%5D%2Ctype%5BLOOKBOOK%5D%2Cres%5Bm%5D%2Chmver%5B1%5D&call=url[file:/product/main]" alt="">
    
    
                        <img class="secondary-image" src="https://www.riotgames.com/darkroom/1440/b540da2b9afe5ec83e842a2d84f6dbb1:e95535ecd35e48592908762c9353926a/arcane-final-poster-16x9-no-text-no-border.jpg" alt="">
                    </div>
                    
                    <div class="active-image-container">
                        <img class="active-image" src="{{ $product->images->first()->url }}" alt="">
                    </div>
                    

                </div>

                
                


                <div class="product-details grid-item">
                    <h2 class="name">{{ $product->name }}</h2>
                    <h2 class="code"><span>code</span>: {{ $product->code }}</h2>

                    <div class="avaliability">
                        <ul>
                            @if ($product->quantity > 0)

                                <li id="avaliable">Avaliable</li>     

                            @else

                                <li id="not-avaliable">Not avaliable</li>

                            @endif
                        </ul>
                    </div>
                    
                    

                    <div class="price">
                        {{-- <h3 class="store-price">${{ $product->price }}</h3> --}}
                    
                        <h3 class="online-price">${{ $product->online_price }}</h3>

                        <p>Listed price is only for online purchase!</p>
                    </div>

                    
                    {{-- order form --}}
                    <form action="{{ route('cart.store', [$product->id]) }}" method="post" class="order-form">
                        @csrf
                        <input type="hidden" name="_method" value="put" />

                        <input type="hidden" name="product_id" value="{{ $product->id }}" />
                        <input type="hidden" name="price" value="{{ $product->price }}" />

                        
                        @foreach ($attributeProducts as $attributeProduct)
                            @if ($attributeProduct->product_id == $product->id)
                                @if ($attributeProduct->attribute->code == 'size')

                                    <div class="sizes">
                                        <h3 class="attribute-name">Select size</h3>

                                        <div class="sizes-wrapper">
                                            @foreach ($attributeProduct->attributeValues as $value)
                                                
                                            <input type="radio" name="size" id="{{ $value->value }}" value="{{ $value->value }}">

                                            <label class="size-label label-for-{{ $value->value }}" for="{{ $value->value }}">{{ ucfirst($value->value) }}</label>
                                            
                                        
                                        @endforeach
                                        </div>
                                            
                                    </div>
                                    
                                    
                                @endif

                                @if ($attributeProduct->attribute->code == 'color')
                                    <h3 class="attribute-name">
                                        Choose color
                                    </h3>
                                    
                                    <div class="colors">
                                        @foreach ($attributeProduct->attributeValues as $value)
                                            <input type="radio" name="color" id="{{ $value->value }}" value="{{ $value->value }}" class="color color-{{ $value->value }}">
                                        @endforeach
                                    </div>
                                    
                                @endif


                            @endif
                    
                        @endforeach

                        <div class="quantity-and-submit">
                            <input class="quantity" type="number" name="quantity" placeholder="1" value="1" min="1" step="1" pattern="\d+">

                            <button class="btn btn-primary" type="submit" value="submitted">
                                <i class="fas fa-shopping-bag"></i>
                                Add to cart
                            </button>
                        </div>

                        
                                                    
                    </form>


                </div>
                <hr>
            </div>

            <div class="product-description">
                <h3>Product description</h3>
                <hr>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure quisquam maiores placeat eligendi? Libero odio omnis dolorem et, itaque quasi consequatur sint earum. Officia cupiditate illum nobis quae, consectetur itaque.</p>
            </div>

        </div>
    </section>        
    <x-footer />
</x-layout>