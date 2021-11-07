<nav class="category-navbar">
    <div class="container">
        <div class="category-navbar-wrapper">
            <a href="{{ route('products') }}">All products</a>
            @foreach ($categories as $category)
                <a href="{{ route('categories', $category->slug) }}">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>
</nav>