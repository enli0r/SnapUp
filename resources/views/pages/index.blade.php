<x-layout>
    <div class="header">
        <div class="container">
                <div class="header-wrapper">
                    <h1>give your<br>workout<br>a new style!</h1>
                    <p>Success isn't always about greatness. It's about consistency. Consistent hard work gains success. Greatness will come.</p>
                    <a href="" class="btn btn-primary">Explore Now</a>
                </div>
        </div>
    </div>

    <section class="featured-categories">
        <div class="container">
            <div class="section-title">
                <h2>Featured categories</h2>
                <div id="rectangle"></div>
            </div>
            <div class="featured-categories-wrapper grid-container">

                @foreach ($categories as $category)
                    @if ($category->is_featured == 1)
                        <div class="grid-item">
                            <form action="{{ route('products') }}" method="post" id="featured-category-form">
                                @csrf
                                <input type="hidden" name="_method" value="put">
                                <input type="hidden" name="featured_category" value="{{ $category->slug }}">

                                <button type="submit">
                                    <a href="{{ route('products.categories', $category->slug) }}"><img src="{{ $category->image }}" alt=""></a>
                                    <div class="basic-info">
                                        <h5>{{ $category->name }}</h5>
                                    </div>
                                </button>
                            </form>
                            
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section class="featured-products">
        <div class="container">

            <div class="section-title">
                <h2>featured products</h2>
                <div id="rectangle"></div>
            </div>

            <div class="featured-products-wrapper grid-container">

                @php
                    $counter = 0;
                @endphp

                @foreach ($products->reverse() as $product)
                    @if ($product->is_featured == 1)
                        <div class="grid-item">
                            <a href="{{ route('show', $product->id) }}"><img src="{{ $product->images->first()->url }}" alt=""></a>
                            <div class="basic-info">
                                <h5>{{ $product->name }}</h5>
                                <p>${{ $product->price }}</p>
                            </div>
                        </div>

                        @php
                            $counter += 1;
                        @endphp
                    @endif
                    
                    @if ($counter > 3)
                        @break;
                    @endif
                @endforeach

            </div>
        </div>
    </section>


    <section class="latest-products">
        <div class="container">
            <div class="section-title">
                <h2>latest products</h2>
                <div id="rectangle"></div>
            </div>

            <div class="latest-products-wrapper grid-container">

                @foreach ($products as $product)
                    @if ($loop->remaining < 4 )
                        <div class="grid-item">
                            <a href="{{ route('show', $product->id) }}"><img src="{{ $product->images->first()->url }}" alt=""></a>
                            <div class="basic-info">
                                <h5>{{ $product->name }}</h5>
                                <p>${{ $product->price }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section class="exclusive-offer">
        <div class="container">
            <div class="exclusive-offer-wrapper">
                <div class="exclusive-offer-product">
                    <img src="images/exclusive5.png" alt="">
                </div>
            
                <div class="offer-description">
                    <p>Exclusively Avaliable on SnapUp</p>
                    <h2>addidas vendor</h2>
                    <small>The Addidas Vendor are designed to protect your feet when running, provide traction on different surfaces, cushion landing shock and support your feet.</small>
                    <a href="" class="btn btn-primary">buy now!</a>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial">
        <div class="container">
            <div class="testimonial-wrapper grid-container">


                @foreach ($testimonials as $testimonial)
                    <div class="grid-item">
                        <div class="quotes">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                        </div>
                        
                        <p>{{ $testimonial->description }}</p>

                        <div class="image-and-name">
                            <img src="{{ $testimonial->image }}" alt="">
                            
                            <h3 class="user-name">{{ $testimonial->name }}</h3>
                        </div>
                        
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="brands">
        <div class="container">
            <div class="brands-wrapper">
                <div class="grid-item">
                    <img src="images/logo-godrej.png" alt="">
                </div>
                <div class="grid-item">
                    <img src="images/logo-oppo.png" alt="">
                </div>
                <div class="grid-item">
                    <img src="images/logo-coca-cola.png" alt="">
                </div>
                <div class="grid-item">
                    <img src="images/logo-paypal.png" alt="">
                </div>
                <div class="grid-item">
                    <img src="images/logo-philips.png" alt="">
                </div>
            </div>
        </div>
    </section>

</x-layout>
