<x-layout>
    <x-navbar />
    <section class="products">
        <div class="container">
            <div class="products-wrapper grid-container">
                @foreach ($products as $product)

                    <a href="#">
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
        </div>
    </section>
</x-layout>
