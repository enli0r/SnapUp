<x-layout>

    <!-- Section only appears if there are some child categories -->
    {{-- @if (count($child_categories) > 0)

        <section class="categories">
            <div class="container">
                <div class="section-title">
                    <h2>Categories</h2>
                </div>

                <hr>

                <div class="categories-wrapper grid-container">
                    @foreach ($child_categories as $category)

                        <div class="grid-item">
                            <h1>{{ $category->name }}</h1>

                            @if ($category->image != null)
                                <img src="{{ $category->image }}" alt="">
                            @else
                                <img src="https://i.ibb.co/0JKP8r6/category-1.jpg" alt="">

                            @endif
                        </div>

                    @endforeach
                </div>
            </div>
        </section>

    @endif --}}

 
        <section class="products">
            <div class="container">

                <div class="section-title">
                    <h2>Products</h2>
                </div>

                <hr>

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
