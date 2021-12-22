<x-layout>

    <div class="sidebar">
        <ul class="navbar-nav">
            <li class="nav-item sign-in">
                <i class="fas fa-user"></i>
                <a href="">Sing in</a>
            </li>


            <li class="nav-item">
                <a href="{{ route('products') }}" class="sidebar-link">All products</a>
            </li>
    
            <li class="nav-item">
                <a href="" class="sidebar-link">Men</a>
            </li>
    
            <li class="nav-item">
                <a href="" class="sidebar-link">Women</a>
            </li>
    
            <li class="nav-item">
                <p class="sidebar-link disabled">Featured</p>
            </li>
    
            <li class="nav-item">
                <p class="sidebar-link disabled">Sale</p>
            </li>

            <li class="nav-item">
                <a href="#" class="sidebar-link-smaller">Customer service</a>
            </li>

            <li class="nav-item">
                <a href="#" class="sidebar-link-smaller">About</a>
            </li>

        </ul>

        <i class="fa fa-times sidebar-close-icon"></i>
    </div>
  

    {{-- <section class="header">
        <div class="container header-container">
            <div class="header-wrapper ">
                <i class="fas fa-chevron-left prev header-prev arrow"></i>
                <i class="fas fa-chevron-right next header-next arrow"></i>

                <div class="header-slider">
                    <div class="header-slide">
                        <img src="https://i.ibb.co/TgChnZZ/SV-FW21-Desktop.jpg" class="desktop-slide" alt="">
                        <img src="https://i.ibb.co/44db1qZ/c1crop.jpg" class="phone-slide" alt="">

                    </div>

                    <div class="header-slide">
                        <img src="https://i.ibb.co/YBks3Hp/sv-gym-time-oct21-2-desk.jpg" class="desktop-slide" alt="">
                        <img src="https://i.ibb.co/gDDpYXQ/c2crop.jpg" class="phone-slide" alt="">

                    </div>

                    <div class="header-slide">
                        <img src="https://i.ibb.co/cYjhv8K/SV-New-trends-21-1200x526.jpg" class="desktop-slide" alt="">
                        <img src="https://i.ibb.co/Hrcd7Rx/c3crop.jpg" class="phone-slide" alt="">

                    </div>
                </div>
            </div>
        </div>

    </section> --}}

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
                    <img src="https://i.ibb.co/gSyFd40/kids.jpg" alt="">

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
