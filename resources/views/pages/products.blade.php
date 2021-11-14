<x-layout>
   


    <section class="products">
    
        <div class="container products-container">

            <x-filter-sidebar />

            @if (count($products) > 0)
                <div class="products-wrapper grid-container">
                    @foreach ($products as $product)
                        <a href="{{ route('show', $product->id) }}">
                            <div class="grid-item">
                                <img class="product-image" src="{{ $product->images->first()->url }}" alt="">
                                
                                <div class="separator"></div>

                                <div class="product-info">
                                    <h5 class="product-name">{{ $product->name }}</h5>
                                    <p class="product-price">${{ $product->price }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach      
                </div>
            @endif
        </div>
    </section>


</x-layout>
