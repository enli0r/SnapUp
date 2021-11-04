<x-layout>
    <x-navbar />
        <section class="product">

            <div class="container">
                <div class="product-wrapper grid-container">
                    <img class="grid-item" src="{{ $product->images->first()->url }}" alt="">

                    <div class="product-details grid-item">
                        <h3 class="product-code">{{ $product->code }}</h3>
                        <h2 class="product-name">{{ $product->name }}</h2>
                        <h2 class="product-price">{{ $product->price }}</h2>

                        @foreach ($attributes as $attribute)
                            <h1>{{ $attribute->name }}</h1>
                            @foreach ($productAttributes as $productAttribute)
                                @if ($attribute->id == $productAttribute->attribute_id)
                                    <p>{{ $productAttribute->value }}</p>
                                @endif
                            @endforeach
                        @endforeach
                        
                    </div>
                </div>
            </div>

        </section>        
    <x-footer />
</x-layout>