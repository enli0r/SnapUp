@props(['categories', 'category'])

<div class="navbar-reveal for-{{ $category }}">
    <div class="container">
        <div class="navbar-reveal-wrapper">
            @foreach ($categories as $category)
                @if (count($category->children) > 0)

                    <div class="navbar-category">
                        <a href="#" class="reveal-category-link">{{ $category->name }}</a>

                        @foreach ($category->children as $child_cat)
                            <a href="#" class="reveal-subcategory-link">{{ $child_cat->name }}</a>
                        @endforeach
                    </div>
                
                @endif
            @endforeach
        </div>
    </div>
</div>