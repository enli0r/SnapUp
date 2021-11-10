<nav class="category-navbar">
    <div class="container">
        <div class="category-navbar-wrapper">

            <a href="{{ route('home') }}" class="home"><img class="home-icon" src="https://i.ibb.co/XFFH8VX/31-316559-white-home-icon-no-background.png" alt=""></a>

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Men
                </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    
                    @foreach ($categories as $category)

                        @if (count($category->children) > 0)
                            
                            <ul>
                                <li class="category-name"><a href="{{ route('products.categories', $category->slug) }}">{{ $category->name }}</a></li>
                                
                                @foreach ($category->children as $subcategory)
                                    <li><a class="dropdown-item" href="{{ route('products.categories', [$category->slug, $subcategory->slug]) }}?gender=men">{{ $subcategory->name }}</a></li>
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
                                <li class="category-name">{{ $category->name }}</li>

                                @foreach ($category->children as $subcategory)
                                    <li><a class="dropdown-item" href="{{ route('products.categories', [$category->slug, $subcategory->slug]) }}?gender=women">{{ $subcategory->name }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    @endforeach 

                    
                </ul>
            </div>
            
        
        </div>
    </div>
</nav>