<x-layout>
    <x-navbar />
    <x-category-navbar />
        <section class="product">

            <div class="container">
                <div class="product-wrapper grid-container">
                    <img class="grid-item product-image" src="{{ $product->images->first()->url }}" alt="">

                    <div class="product-details grid-item">
                        <h2 class="name">{{ $product->name }}</h2>
                        <h2 class="code"><span>code</span>: {{ $product->code }}</h2>
                        <div class="price">
                            <h3 class="store-price">${{ $product->price }}</h3>
                        
                            <h3 class="online-price">${{ $product->online_price }}</h3>

                            <p>Listed price is only for online purchase!</p>
                        </div>

                        <hr>
                        

                        @foreach ($attributes as $attribute)
                            <h1 class="attribute-name">avaliable {{ $attribute->name }}s</h1>
                            @foreach ($productAttributes as $productAttribute)
                                @if ($attribute->id == $productAttribute->attribute_id)
                                    
                                    @if ($attribute->name == 'Size')
                                        <div class="size">

                                            @php
                                                $sizeSymbol = substr($productAttribute->value, 0,1);
                                            @endphp


                                            <p class="size-symbol">{{$sizeSymbol}}</p>
                                        </div>
                                    @endif

                                    @if ($attribute->name == 'Color') 
                                        <div class="color 
                                         @php
                                            if($productAttribute->value == 'black'){
                                                echo('black');
                                            }else if($productAttribute->value == 'red'){
                                                echo('red');
                                            }else if($productAttribute->value == 'blue'){
                                                echo('blue');
                                            }
                                        @endphp">


                                            <p class="size-symbol">{{$sizeSymbol}}</p>
                                        </div>
                                    @endif


                                @endif
                            @endforeach
                        @endforeach
                        
                    </div>
                </div>
            </div>

        </section>        
    <x-footer />
</x-layout>