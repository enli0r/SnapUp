<x-layout>
    <section class="product">
        <div class="container">
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

                    <hr>

                    @foreach ($attributes as $attribute)
                        <p>{{ $attribute->name }}</p>

                        <!-- cycling through attribute products associated with product -->
                        @foreach ($attributeProducts as $attributeProduct) 
                            <!-- cycling through attributeValues associated with current attribute through pivot table -->
                            @foreach ($attributeProduct->attributeValues()->where('attribute_id', $attribute->id)->get() as $attributeValue)

                            <!-- creating s/m/l symbols using first letter, it will change latter-->
                            @php
                                $sizeSymbol = substr($attributeValue->value, 0,1);
                            @endphp

                            <!-- setting div class based on attribute and its value -->
                            <div class="{{ $attribute->code }} {{ $attributeValue->value }}">

                                <!-- adding symbol only to size attribute -->
                                @if ($attribute->code == 'size')
                                    <p class="size-symbol">{{ $sizeSymbol }}</p>
                                @endif

                            </div>

                                
                            @endforeach
                        @endforeach
                        
                    @endforeach
                    
                </div>

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