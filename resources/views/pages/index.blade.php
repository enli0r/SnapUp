<x-layout>
    <x-navbar />
    <x-category-navbar />

    {{-- header --}}
    <div class="header">
        <div class="container">
                <div class="header-wrapper">
                    <h1>give your<br>workout<br>a new style!</h1>
                    <p>Success isn't always about greatness. It's about consistency. Consistent hard work gains success. Greatness will come.</p>
                    <a href="" class="btn btn-primary">Explore Now</a>
                </div>
        </div>
    </div>

    <!-- featured categories -->
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
                            <a href=""><img src="{{ $category->image }}" alt=""></a>
                            <div class="basic-info">
                                <h5>{{ $category->name }}</h5>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <!-- featured products -->
    <section class="featured-products">
        <div class="container">

            <div class="section-title">
                <h2>featured products</h2>
                <div id="rectangle"></div>
            </div>

            <div class="featured-products-wrapper grid-container">

                @foreach ($products as $product)
                    @if ($product->is_featured == 1)
                    <div class="grid-item">
                        <a href=""><img src="{{ $product->images->first()->url }}" alt=""></a>
                        <div class="basic-info">
                            <h5>{{ $product->name }}</h5>
                            <p>{{ $product->price }}</p>
                        </div>
                    </div>
                    @endif
                @endforeach

                {{-- <div class="grid-item">
                    <a href=""><img src="images/product-1.jpg" alt=""></a>
                    <div class="basic-info">
                        <h5>Red T-Shirt</h5>
                        <p>$30.00</p>
                    </div>
                </div>

                <div class="grid-item">
                    <a href=""><img src="images/product-2.jpg" alt=""></a>
                    <div class="basic-info">
                        <h5>Sneakers</h5>
                        <p>$100.00</p>
                    </div>
                </div>

                <div class="grid-item">
                    <a href=""><img src="images/product-3.jpg" alt=""></a>
                    <div class="basic-info">
                        <h5>Sweatsuit</h5>
                        <p>$60.00</p>
                    </div>
                </div>

                <div class="grid-item">
                    <a href=""><img src="images/product-4.jpg" alt=""></a>
                    <div class="basic-info">
                        <h5>Blue T-Shirt</h5>
                        <p>$50.00</p>
                    </div>
                </div> --}}

            </div>
        </div>
    </section>

    <!-- latest products -->
    <section class="latest-products">
        <div class="container">
            <div class="section-title">
                <h2>latest products</h2>
                <div id="rectangle"></div>
            </div>
            <div class="latest-products-wrapper grid-container">

                <div class="grid-item">
                    <a href=""><img src="images/product-5.jpg" alt=""></a>
                    <div class="basic-info">
                        <h5>Grey shoes</h5>
                        <p>$80.00</p>
                    </div>
                </div>

                <div class="grid-item">
                    <a href=""><img src="images/product-6.jpg" alt=""></a>
                    <div class="basic-info">
                        <h5>Puma T-Shirt</h5>
                        <p>$40.00</p>
                    </div>
                </div>

                <div class="grid-item">
                    <a href=""><img src="images/product-7.jpg" alt=""></a>
                    <div class="basic-info">
                        <h5>Socks</h5>
                        <p>$5.00</p>
                    </div>
                </div>

                <div class="grid-item">
                    <a href=""><img src="images/product-8.jpg" alt=""></a>
                    <div class="basic-info">
                        <h5>Watch</h5>
                        <p>$500.00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- exclusive offer -->
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

    <!-- testimonial -->
    <section class="testimonial">
        <div class="container">
            <div class="testimonial-wrapper grid-container">
                <div class="grid-item">
                    <div class="quotes">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                    
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, quod. Est excepturi reiciendis sed minus tempore ad quas hic ipsam, exercitationem quos, laboriosam natus consequuntur totam esse quibusdam cum at.</p>
                    <img src="images/user-1.png" alt="">
                    <div class="user-name">
                        <h3>Caitlyn</h3>
                        <h3>Orvel</h3>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="quotes">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                                    
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, quod. Est excepturi reiciendis sed minus tempore ad quas hic ipsam, exercitationem quos, laboriosam natus consequuntur totam esse quibusdam cum at.</p>
                    <img src="images/user-2.png" alt="">
                    <div class="user-name">
                        <h3>Theodore</h3>
                        <h3>Smith</h3>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="quotes">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                    
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, quod. Est excepturi reiciendis sed minus tempore ad quas hic ipsam, exercitationem quos, laboriosam natus consequuntur totam esse quibusdam cum at.</p>
                    <img src="images/user-3.png" alt="">
                    <div class="user-name">
                        <h3>Jennifer</h3>
                        <h3>Lawrence</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- brands -->
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

    <x-footer />
</x-layout>
