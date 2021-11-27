<x-layout>
    <section class="product">
        <div class="container">

            {{-- if order not validated --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <p class="my-0">Please fill in all product details!</p>
                </div>
            @endif

            <div class="product-wrapper grid-container">
                <img class="grid-item product-image" src="{{ $product->images->first()->url }}" alt="">

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
                        <h3 class="store-price">${{ $product->price }}</h3>
                    
                        <h3 class="online-price">${{ $product->online_price }}</h3>

                        <p>Listed price is only for online purchase!</p>
                    </div>

                    
                    {{-- order form --}}
                    <form action="{{ route('products.addToCart', [$product->id]) }}" method="post" class="order-form">
                        @csrf
                        <input type="hidden" name="_method" value="put" />

                        <input type="hidden" name="product_id" value="{{ $product->id }}" />
                        <input type="hidden" name="price" value="{{ $product->price }}" />

                        
                            @foreach ($attributes as $attribute)
                                <p class="attribute-name">{{ $attribute->name }}</p>
                                <div class="{{ $attribute->code }} attribute-values">

                                    @foreach ($attributeProducts as $attributeProduct)
                                        @foreach ($attributeProduct->attributeValues()->where('attribute_id', $attribute->id)->get() as $attributeValue)
                                            @php
                                                $id = $attributeProduct->id.$attributeValue->id;
                                            @endphp
                                            <div class="order-input-label">
                                                <input type="radio" name="{{ $attribute->code }}" id="{{ $id }}" value="{{ $attributeValue->value }}">
                                                <label for="{{ $id }}">{{ $attributeValue->value }}</label>
                                            </div>
                                            
                                        @endforeach
                                    @endforeach
                                </div>
                            @endforeach

                            <button class="btn btn-primary" type="submit" value="submitted">Add to cart</button>
                                                    
                    </form>


                </div>
                <hr>
                    
                <div class="product-description grid-item">
                    <h3>Product description</h3>
                    <hr>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure quisquam maiores placeat eligendi? Libero odio omnis dolorem et, itaque quasi consequatur sint earum. Officia cupiditate illum nobis quae, consectetur itaque.</p>
                </div>
            </div>
        </div>
    </section>        
    <x-footer />
</x-layout>