@props(['cart_count'])

<nav class="main-navbar">

    <div class="sidebar d-flex" id="sidebar">

      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <span>Customer service</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <span>About</span>
          </a>
        </li>

      </ul>


      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <div class="search nav-link">
            <i class="fas fa-search"></i>
            <form action="" class="search-form">
              <input type="text" placeholder="Search">
            </form>
          </div>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="{{route('cart')}}">
            <i class="fas fa-shopping-bag"></i>
            <span>
              Shopping bag ({{ isset($cart_count) ? $cart_count: ''  }})
            </span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}"><i class="fas fa-user"></i>
          
          <span>
            @auth
                {{ $user->username }}
            @endauth

            @guest
              Sign in
            @endguest

          </span>

          </a>
        </li>
        
      </ul>
           
    </div>


    <div class="logo-container">
      <a href="{{ route('home') }}" class="logo">snapup</a>
    </div>

    <nav class="category-navbar">
        <div class="category-navbar-wrapper">

            <a href="{{ route('products') }}" class="category-link">All products</a>

            <x-dropdown buttonName="Men" :categories="$categories" gender="men"/>
            <x-dropdown buttonName="Women" :categories="$categories" gender="women"/>

            <p class="category-link disabled">Featured</p>
            <p class="category-link disabled">Sale</p>
        
        </div>
  </nav>


</nav>
