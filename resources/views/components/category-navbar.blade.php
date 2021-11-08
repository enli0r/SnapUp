<nav class="category-navbar">
    <div class="container">
        <div class="category-navbar-wrapper">
            <a href="{{ route('products') }}">All products</a>
            @foreach ($categories as $category)
                @if ($category->parent_id == null)
                    <a href="{{ route('products', $category->slug) }}">{{ $category->name }}</a>
                @endif
            @endforeach
        </div>
    </div>
</nav>