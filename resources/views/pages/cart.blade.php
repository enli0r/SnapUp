<x-layout>
    <section class="cart">
        <div class="container cart-container">

            <div class="cart-header">
                <div class="cart-header-wrapper">
                    <h3>Name</h3>
                    <h3>Quantity</h3>
                    <h3>Price</h3>
                </div>
            </div>

            @foreach ($products as $product)
                <div class="cart-product">
                    @foreach ($images as $image)
                        @if ($image->product_id == $product->id)
                            <img src="{{ $image->url  }}" alt="">
                        @endif
                    @endforeach

                    <div class="cart-product-details">
                        <h3 class="cart-product-name">{{ $product->name }}</h3>
                        
                        <h3 class="cart-product-quantity">{{ $product->qty }}</h3>

                        <h3 class="cart-product-price">${{ $product->price }}</h3>
                    </div>

            
                </div>
            @endforeach
        </div>
    </section>

</x-layout>