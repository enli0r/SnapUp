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
                                $redirect = 'products';
                                $subcategory = 'subcategory[]='.$child_cat->slug;
                                $gender = '?gender='.$categorySlug.'&';

                                if($categorySlug == 'men' || $categorySlug == 'women'){
                                    $url = $redirect . $gender . $subcategory;
                                }else{
                                    $url = $redirect . '?' . $subcategory;
                                }

                            @endphp


                            <a href="{{ $url }}" class="reveal-subcategory-link">{{ $child_cat->name }}</a>
                        @endforeach
                    </div>
                
                @endif
            @endforeach
        </div>
    </div>
</div>