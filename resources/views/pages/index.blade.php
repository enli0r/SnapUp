<x-layout>

    <div class="container header-carousel">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="https://i.ibb.co/TgChnZZ/SV-FW21-Desktop.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="https://i.ibb.co/YBks3Hp/sv-gym-time-oct21-2-desk.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="https://i.ibb.co/cYjhv8K/SV-New-trends-21-1200x526.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>        
    </div>
    
    

    <section class="featured-categories">
        <div class="container">
            {{-- <div class="section-title">
                <h2>Featured categories</h2>
                <div id="rectangle"></div>
            </div> --}}
            <div class="featured-categories-wrapper grid-container">

                @foreach ($categories as $category)
                    @if ($category->is_featured == 1)
                        <div class="grid-item featured-{{ $category->slug }}">
                            <form action="{{ route('products') }}" method="post" id="featured-category-form">
                                @csrf
                                <input type="hidden" name="_method" value="put">
                                <input type="hidden" name="featured_category" value="{{ $category->slug }}">

                                <button type="submit" class="category-btn">
                                    <img class="cat-img" src="{{ $category->image }}" alt="">

                                    <div class="cat-name-bg">
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

    <section class="exclusive-offer">
        <div class="container">
            <div class="exclusive-offer-wrapper">
                <div class="exclusive-offer-product">
                    <img src="https://i.ibb.co/BnK7sy4/pngwing-com-2.png" alt="">
                </div>
            
                <div class="offer-description">
                    <p>Exclusively Avaliable on SnapUp</p>
                    <h2>nike vendor</h2>
                    <small>The Addidas Vendor are designed to protect your feet when running, provide traction on different surfaces, cushion landing shock and support your feet.</small>
                    <a href="" class="exclusive-btn">buy now!</a>
                </div>
            </div>
        </div>
    </section>

    <section class="latest-products">
        <div class="container">
            <div class="section-title">
                <h2>new collection</h2>
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


    <section class="featured-products">
        <div class="container">

            <div class="section-title">
                <h2>most popular</h2>
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

   
    
    <section class="testimonial">
        <div class="container">
            <div class="testimonial-wrapper grid-container">


                @foreach ($testimonials as $testimonial)
                    <div class="grid-item">

                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        
                        <p>{{ $testimonial->description }}</p>

                        <i class="fa fa-quote-right" aria-hidden="true"></i>


                        <div class="image-and-name">
                            <img src="{{ $testimonial->image }}" alt="">
                            
                            <h3 class="user-name">{{ $testimonial->name }}</h3>
                        </div>
                        
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    

</x-layout>
