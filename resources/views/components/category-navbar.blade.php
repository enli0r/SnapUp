{{-- <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
 --}}


        {{-- DROPDOWN --}}

        {{-- <div class="collapse navbar-collapse">

            <ul class="navbar-nav mx-auto">

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a href="{{route('products')}}" class="dropdown-item nav-link" >All Products</a>
                        </div>
                    </li>
                
            </ul>
        </div>
    </div>  
</nav> --}}

<nav class="category-navbar">
    <div class="container">
        <div class="category-navbar-wrapper">
            <a href="{{ route('products') }}">New collection</a>
            <a href="{{ route('products') }}">All products</a>
            <a href="{{ route('products') }}">Male</a>
            <a href="{{ route('products') }}">Female</a>
            <a href="{{ route('products') }}">Accessories</a>

        </div>
    </div>
</nav>