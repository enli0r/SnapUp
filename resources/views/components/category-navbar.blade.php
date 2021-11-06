<nav class="category-navbar">
    <div class="container">
        <div class="category-navbar-wrapper">
            @foreach ($categories as $category)
                <a href="{{ route('products') }}">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>
</nav>