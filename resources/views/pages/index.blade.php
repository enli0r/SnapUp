<x-layout>

    <div class="sidebar">
        <div class="sidebar-wrapper">
            <div class="sidebar-link-wrapper sing-in">
                <i class="fas fa-user"></i>
                <a href="" class="sidebar-link-sign-in">Sign in</a>
            </div>

            <div class="sidebar-category-toggle toggled-stg-all">
                <div class="sidebar-link-wrapper category-wrapper" id="stg-all">
                    <a href="" class="sidebar-link">All products</a>
                </div>
    
                <x-slideToggle :categories="$categories" category="stg-all" />
            </div>


            <div class="sidebar-category-toggle toggled-stg-men">
                <div class="sidebar-link-wrapper category-wrapper" id="stg-men">
                    <a href="" class="sidebar-link">Men</a>
                </div>
    
                <x-slideToggle :categories="$categories" category="stg-men" />
            </div>
            
            <div class="sidebar-category-toggle toggled-stg-women">
                <div class="sidebar-link-wrapper category-wrapper" id="stg-women">
                    <a href="" class="sidebar-link">Women</a>
                </div>

                <x-slideToggle :categories="$categories" category="stg-women" />
            </div>
            
            
            <div class="sidebar-link-wrapper">
                <a href="" class="sidebar-link">Featured</a>
            </div>


            <div class="sidebar-link-wrapper">
                <a href="" class="sidebar-link">Sale</a>
            </div>

            <div class="sidebar-link-wrapper">
                <a href="" class="sidebar-link small-link">Customer service</a>
            </div>
            
            <div class="sidebar-link-wrapper">
                <a href="" class="sidebar-link small-link">About</a>
            </div>
        </div>

            

        <div class="sidebar-close-icon">

        </div>
    </div>
  

    <section class="header">
        <div class="container header-container">
            <div class="header-wrapper ">
                <i class="fas fa-chevron-left prev header-prev arrow"></i>
                <i class="fas fa-chevron-right next header-next arrow"></i>

                <div class="header-slider">
                    <div class="header-slide">
                        <img src="https://i.ibb.co/ZGP2j65/komp-slika-3.jpg" class="desktop-slide" alt="">
                        <img src="https://i.ibb.co/PWsSWgt/mob-slika-3.jpg" class="phone-slide" alt="">
                    </div>

                    <div class="header-slide">
                        <img src="https://i.ibb.co/gy4jh45/komp-slika-1.jpg" class="desktop-slide" alt="">
                        <img src="https://i.ibb.co/vzxqkcj/mob-slika-1-with-bubbles.jpg" class="phone-slide" alt="">

                    </div>

                    <div class="header-slide">
                        <img src="https://i.ibb.co/TgtFFk6/komp-slika-2.jpg" class="desktop-slide" alt="">
                        <img src="https://i.ibb.co/7NTB7PN/mob-slika-2.jpg" class="phone-slide" alt="">

                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="featured-categories">
        <div class="container">
            <div class="featured-categories-wrapper grid-container">

                @foreach ($categories as $category)
                    @if ($category->is_featured == 1)
                        <form class="grid-item featured-{{ $category->slug }}" action="{{ route('products') }}" method="post" id="featured-category-form">
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
   
    <section class="base-categories">
        <div class="container">
            <div class="base-categories-wrapper">
                <div class="category men">
                    <img src="https://i.ibb.co/cDNCSdc/hmgoepprod-2.jpg" alt="">

                    <a href="#">Men</a>

                    <form action="{{ route('products') }}">
                        <button type="submit" name="category" value="clothes">Clothes</button>
                        <button type="submit" name="category" value="footwear">footwear</button>
                    </form>
                </div>

                <div class="category women">
                    <img src="https://i.ibb.co/xqK99L4/women.jpg" alt="">

                    <a href="#">Women</a>

                    <form action="{{ route('products') }}">
                        <button type="submit" name="category" value="clothes">Clothes</button>
                        <button type="submit" name="category" value="footwear">footwear</button>
                    </form>

                </div>

                <div class="category kids">
                    {{-- <img src="https://i.ibb.co/gSyFd40/kids.jpg" alt=""> --}}
                    <img src="https://i.ibb.co/4T8nnRN/children-817368-1280.webp" alt="">

                    <a href="#">Kids</a>

                    <form action="{{ route('products') }}">
                        <button type="submit" name="category" value="clothes">Clothes</button>
                        <button type="submit" name="category" value="footwear">footwear</button>
                    </form>

                </div>

                
                
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

    <section class="latest-products">
        <div class="container">
            <div class="section-title">
                <h2>new collection</h2>
                <div id="rectangle"></div>
            </div>

            <div class="latest-products-wrapper">

                <i class="fas fa-chevron-left prev latest-prev arrow"></i>
                <i class="fas fa-chevron-right next latest-next arrow"></i>

                <div class="latest-products-slider products-slider">
                    @foreach ($products as $product)
                        <div class="latest-product">
                            <a href="{{ route('show', $product->id) }}"><img src="{{ $product->images->first()->url }}" alt=""></a>
                            <div class="basic-info">
                                <h5>{{ $product->name }}</h5>
                                <p>${{ $product->price }}</p>
                            </div>
                        </div>
                    @endforeach

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

            <div class="featured-products-wrapper">

                <i class="fas fa-chevron-left prev featured-prev arrow"></i>
                <i class="fas fa-chevron-right next featured-next arrow"></i>


                <div class="featured-products-slider products-slider">
                    @foreach ($products->reverse() as $product)
                        @if ($product->is_featured == 1)
                            <div class="featured-product">
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
        </div>
    </section>

</x-layout>
