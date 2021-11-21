<nav class="category-navbar">
    <div class="container">
        <div class="category-navbar-wrapper">

            <a href="{{ route('home') }}" class="home"><img class="home-icon" src="https://i.ibb.co/XFFH8VX/31-316559-white-home-icon-no-background.png" alt=""></a>

            <a href="{{ route('products') }}" class="category-link">All products</a>

            <x-dropdown buttonName="Men" :categories="$categories" gender="men"/>
            <x-dropdown buttonName="Women" :categories="$categories" gender="women"/>

            {{-- <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Men
                </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    
                    @foreach ($categories as $category)

                        @if (count($category->children) > 0)
                            
                            <ul>
                                <form action="{{ route('products.categories', $category->slug) }}" method="POST">
                                    @csrf

                                    <input type="hidden" name="_method" value="PUT">
                                    <button type="submit" name="gender" value="men" class="category-name">{{ $category->name }}</button>
                                </form>

                                
                                @foreach ($category->children as $subcategory)
                                    <form action="{{ route('products.categories', [$category->slug, $subcategory->slug]) }}" method="POST">
                                        @csrf

                                        <input type="hidden" name="_method" value="PUT">
                                        <button type="submit" name="gender" value="men" class="dropdown-item">{{ $subcategory->name }}</button>
                                    </form>
                                @endforeach
                            </ul>
                        @endif
                    @endforeach 

                    
                </ul>
            </div>


            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                  Women
                </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    @foreach ($categories as $category)

                        @if (count($category->children) > 0)
                            
                            <ul>
                                <li class="category-name"><a href="{{ route('products.categories', $category->slug) }}?gender=women">{{ $category->name }}</a></li>

                                @foreach ($category->children as $subcategory)
                                    <li><a class="dropdown-item" href="{{ route('products.categories', [$category->slug, $subcategory->slug]) }}?gender=women">{{ $subcategory->name }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    @endforeach 
                </ul>
            </div> --}}
            
        
        </div>
    </div>
</nav>