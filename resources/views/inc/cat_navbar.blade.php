<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">

        <div class="collapse navbar-collapse">

            <ul class="navbar-nav mx-auto">
                @foreach ($sexes as $sex)
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ucfirst($sex->name)}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a href="{{route('products')}}" class="dropdown-item nav-link" >All Products</a>

                            @foreach ($types as $type)
                            <a href="#" class="dropdown-item nav-link">{{ucfirst($type->name)}}</a>
                            {{-- <ul class="d-inline">
                                <li></li>
                            </ul> --}}
                            @endforeach 
                            
                        </div>
                    </li>
                @endforeach
                
            </ul>
        </div>
    </div>  
</nav>