<x-layout>
    <section class="order">
        <div class="container order-container">
            <div class="order-wrapper">
                <div class="order-details">
                    <div class="order-details-heading">
                        <h2>Order details</h2>
                    </div>
                    

                    <hr>

                    @foreach ($order_details as $key=>$value)

                        @if ($key == "zipCode")
                            <h4><span class="order-detail-name">Zip code</span>: <span class="order-detail-value">{{ $value }}</span></h4>

                            @continue
                        @endif

                        @if ($key == "phoneNumber")
                            <h4><span class="order-detail-name">Phone number</span>: <span class="order-detail-value">{{ $value }}</span></h4>

                            @continue
                        @endif


                        <h4><span class="order-detail-name">{{ ucfirst($key) }}</span>: <span class="order-detail-value">{{ $value }}</span></h4> 
                    @endforeach
                </div>

                <hr>
            
                <div class="order-cart-heading">
                    <h2>Products</h2>
                </div>
                

                <div class="order-cart-header">
                    <div class="order-cart-header-wrapper">
                        <div class="left-space-filler">

                        </div>

                        <h3>Name</h3>
                        <h3>Quantity</h3>
                        <h3>Price</h3>
                    </div>

                    <div class="right-space-filler"></div>
                </div>

                <hr>
                
                <div class="order-cart">
                    @foreach ($products as $product)
                        <div class="order-cart-wrapper">
                            <div class="order-cart-product">
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
                        </div>

                        <hr id="product-separator">
                    @endforeach
                </div>

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

            <div class="back-confirm-order">

                <a href="{{ url()->previous() }}" type="button" class="btn btn-primary">Back</a>

                <form action="{{ route('order.store') }}" method="post" class="confirm-order-form">
                    @csrf

                    <input type="hidden" name="_method" value="put">
                    <input type="hidden" name="totalPrice" value="{{ $total_price }}">

                    @foreach ($order_details as $key=>$value)
                        <input type="hidden" name="order_details[{{ $key }}]" value="{{ $value }}">
                    @endforeach

                    <button type="submit" class="btn btn-success">Confirm purchase</button>
                </form>
            </div>

            
        </div>
    </section>
</x-layout>