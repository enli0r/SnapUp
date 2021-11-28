<x-layout>
    <section class="cart">
        <div class="container  cart-container">

            <div class="cart-wrapper">


                <div class="cart-header">
                    <div class="cart-header-wrapper">
                        <div class="left-space-filler">

                        </div>

                        <h3>Name</h3>
                        <h3>Quantity</h3>
                        <h3>Price</h3>
                    </div>

                    <div class="right-space-filler"></div>
                </div>

                <hr>
    
                @foreach ($products as $product)

                    <div class="cart-product-wrapper">
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

                        <form action="" class="product-remove-form">
                            <button type="submit" class="product-remove-btn btn btn-danger">Remove</button>
                        </form>
                    </div>

                    

                    <hr class="product-separator">
                @endforeach
    
                @php
    
                    $total_price = 0.0;
    
                    foreach ($products as $product) {
                        $total_price += $product->price;
                    }
    
                @endphp
    
                <div class="total">
                    <div class="total-price-wrapper">

                        <div class="left-space-filler"></div>

                        <h3 class="total-price">Total: ${{ $total_price }}</h3>
                    </div>


                    <div class="right-space-filler"></div>
                </div>
            </div>

            
            <div class="continue-and-checkout">
                <a class="continue btn btn-primary" href="{{ url()->previous() }}">Continue shopping</a>
                <a class="checkout btn btn-success" href="{{ route('order') }}">Checkout now</a>
            </div>
        </div>

    </section>

    

</x-layout>