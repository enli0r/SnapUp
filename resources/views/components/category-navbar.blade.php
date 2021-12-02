<nav class="category-navbar">
    <div class="container">
        <div class="category-navbar-wrapper">

            <a href="{{ route('products') }}" class="category-link">All products</a>

            <x-dropdown buttonName="Men" :categories="$categories" gender="men"/>
            <x-dropdown buttonName="Women" :categories="$categories" gender="women"/>
        
        </div>
    </div>
</nav>