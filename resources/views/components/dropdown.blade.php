@props(['categories', 'categorySlug'])

<div class="navbar-reveal for-{{ $categorySlug }}">
    <div class="container">
        <div class="navbar-reveal-wrapper">
            @foreach ($categories as $category)
                @if (count($category->children) > 0)

                    <div class="navbar-category">
                        <a href="" class="reveal-category-link">{{ $category->name }}</a>

                        @foreach ($category->children as $child_cat)

                            @php

                                $route = route('products', array_merge(\Request::query(), ['type' => 'listing']));
                                
                                if($categorySlug == 'men' || $categorySlug == 'women'){
                                    $route = route('products', array_merge(\Request::query(), ['gender' => $categorySlug, 'subcategory[]' => $child_cat->slug]));
                                }else{
                                    $route = route('products', array_merge(\Request::query(), ['subcategory[]' => $child_cat->slug]));

                                }

                            @endphp


                            <a href="{{ $route }}" class="reveal-subcategory-link">{{ $child_cat->name }}</a>
                        @endforeach
                    </div>
                
                @endif
            @endforeach
        </div>
    </div>
</div>