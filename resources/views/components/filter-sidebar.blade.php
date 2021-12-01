@props(['currentcategory', 'previouspost'])

<button class="filters-open-button">Filters &#8594;</button>

<div class="filter-sidebar">
    <img class="filters-close-icon" src="https://i.ibb.co/6RDhB9Q/cancel.png" alt="hehe">

    <h1 class="filters-heading">Filters</h1>

    <hr>

    <form action="" method="post" class="filters-form">
        @csrf
        <input type="hidden" name="_method" value="PUT">

        {{-- Gender --}}
        <div class="form-section form-section-gender">
            <h4 class="form-group-heading" id="heading-gender">Gender <i id="arrow-down" class="arrow  down"></i></h4>
            <span class="caret"></span>
        
            <div class="form-group" id="form-group-gender">
                <div class="input-label">
                    <input type="radio" id="men-women" name="gender" value="" @if (!isset($previouspost['gender'])) checked @endif>
                    <label for="men-women">Men & Women</label>
                </div>
    
                <div class="input-label">
                    <x-filtering.filter-radio id="gender-men" name="gender" value="men" :previouspost="$previouspost"/>
                    <label for="gender-men">Men</label>
                </div>
                
                <div class="input-label">
                    <x-filtering.filter-radio id="gender-women" name="gender" value="women" :previouspost="$previouspost"/>
                    <label for="gender-women">Women</label>
                </div>
            </div>
        </div>


        {{-- Category --}}
        @if ($currentcategory == null)
            <div class="form-section form-section-category">
                <h4 class="form-group-heading" id="heading-category">Category</h4>
                
                <div class="form-group" id="form-group-category">
                    @foreach ($categories as $category)
                        @if ($category->slug != "men" && $category->slug != "women" && $category->is_featured == 0 && $category->parent_id == 0)

                            <x-filtering.category-button type="submit" class="parent-category" name="category" :category="$category"/>

                            {{-- category-children radio buttons --}}
                            @foreach ($category->children as $child)

                                <div class="input-label subcategory">
                                    <x-filtering.filter-radio :id="$child->slug" name="subcategory" :value="$child->slug" :previouspost="$previouspost"/>
                                    <label for="{{ $child->slug }}">{{ $child->name }}</label>
                                </div>

                            @endforeach

                        @endif
                    @endforeach
                </div>
            </div> 
        @endif


        {{-- featured category --}}
        <div class="form-section form-section-featured-category">
            <h4 class="form-group-heading" id="heading-featured-category">Featured category</h4>
            
            <div class="form-group" id="form-group-featured-category">
                @foreach ($categories as $category)
                    @if ($category->slug != "men" && $category->slug != "women" && $category->is_featured == 1)
                        <div class="input-label">

                            <x-filtering.filter-radio :id="$category->slug" name="featured_category" :value="$category->slug" :previouspost="$previouspost"/>
                            <label for="{{ $category->slug }}">{{ $category->name }} ({{count($category->products)}})</label>

                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        

        {{-- color --}}
        <div class="form-section form-section-color">
            <h4 class="form-group-heading" id="heading-color">Color</h4>        

            <div class="form-group" id="form-group-color">
                @foreach ($all_attributes as $attribute)
                    @if ($attribute->name == "Color")
                        @foreach ($attribute->values as $value)
                            <div class="input-label">
    
                                <x-filtering.filter-checkbox :id="$value->value" name="color" :value="$value->value" :previouspost="$previouspost" />
                                <label for="{{ $value->value }}">{{ $value->value }}</label>
    
                            </div>
                            
                        @endforeach
                    @endif
                @endforeach
            </div>
        </div>


        {{-- size --}}
        <div class="form-section form-section-size">
            <h4 class="form-group-heading" id="heading-size">Size</h4>        
            <div class="form-group" id="form-group-size">
                @foreach ($all_attributes as $attribute)
                    @if ($attribute->name == "Size")
                        @foreach ($attribute->values as $value)
                            <div class="input-label">
    
                                <x-filtering.filter-checkbox :id="$value->value" name="size" :value="$value->value" :previouspost="$previouspost" />
                                <label for="{{ $value->value }}">{{ $value->value }}</label>
    
                            </div>
                            
                        @endforeach
                    @endif
                @endforeach
            </div>
        </div>

        

        <button type="submit" id="filter-submit" name="filter-submit" value="submited">Filter</button>
    </form>
</div>