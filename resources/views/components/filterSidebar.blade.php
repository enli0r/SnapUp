<button class="filters-open-button">Filters &#8594;</button>

<div class="filter-sidebar">
    <img class="filters-close-icon" src="https://i.ibb.co/6RDhB9Q/cancel.png" alt="hehe">


    <form action="" method="get" class="filters-form">

        {{-- Gender --}}
        <div class="form-section form-section-gender">
            <h4 class="form-group-heading" id="heading-gender">Gender</i></h4>
            <span class="caret"></span>


            
        
            <div class="form-group">

                <div class="input-label filterable">
                    <x-filtering.checkbox-bounce-single name="gender" value="men" id="men" />

                    <label for="men">Men</label>
                </div>
                <div class="input-label filterable">
                    <x-filtering.checkbox-bounce-single name="gender" value="women" id="women" />

                    <label for="women">Women</label>
                </div>
                <div class="input-label filterable">
                    <x-filtering.checkbox-bounce-single name="gender" value="unisex" id="unisex" />

                    <label for="unisex">Unisex</label>
                </div>

            </div>
        </div>


        {{-- Category --}}
        <div class="form-section form-section-category">
            <h4 class="form-group-heading" id="heading-category">Category</h4>
            
            <div class="form-group" id="form-group-category">
                @foreach ($categories as $category)
                    @if ($category->slug != "men" && $category->slug != "women" && $category->is_featured == 0 && $category->parent_id == 0)

                        @foreach ($category->children as $child)

                            <div class="input-label subcategory">
                                <x-filtering.checkbox-bounce :id="$child->slug" name="subcategory" :value="$child->slug"/>

                                <label for="{{ $child->slug }}">{{ $child->name }}</label>
                            </div>

                        @endforeach

                    @endif
                @endforeach
            </div>
        </div> 


        {{-- featured category --}}
        <div class="form-section form-section-featured-category">
            <h4 class="form-group-heading" id="heading-featured-category">Featured category</h4>
            
            <div class="form-group" id="form-group-featured-category">
                @foreach ($categories as $category)
                    @if ($category->is_featured == 1)
                        <div class="input-label">

                            <x-filtering.checkbox-bounce :id="$category->slug" name="featured_category" :value="$category->slug" />

                            <label for="{{ $category->slug }}">{{ $category->name }} ({{count($category->products)}})</label>

                        </div>
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
    
                                <x-filtering.checkbox-bounce :id="$value->value" name="size" :value="$value->value"/>
                                <label for="{{ $value->value }}">{{ $value->value }}</label>
    
                            </div>
                            
                        @endforeach
                    @endif
                @endforeach
            </div>
        </div>

    </form>
</div>