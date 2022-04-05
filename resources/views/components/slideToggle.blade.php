@props(['categories', 'category'])

<div class="sidebar-category sidebar-category-{{ $category }}">
    @foreach ($categories as $category)
        @if (count($category->children) > 0)
            <div class="sidebar-subcategory-toggle toggled-stg-{{ $category->slug }}">

                <div class="sidebar-link-wrapper subcategory-wrapper" id="stg-{{ $category->slug }}">
                    <a href="#" class="sidebar-link">{{ $category->name }}</a>
                </div>

                <div class="sidebar-subcategories sidebar-subcategory-stg-{{ $category->slug }}">
                    @foreach ($category->children as $child_cat)
                        <div class="sidebar-link-wrapper">
                            <a href="#" class="sidebar-link">{{ $child_cat->name }}</a>
                        </div>
                    @endforeach
                </div>

            </div>
            
        @endif
    @endforeach
</div>

 