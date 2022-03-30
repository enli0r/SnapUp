<button class="filters-open-button">Filters &#8594;</button>

<div class="filter-sidebar">
    <img class="filters-close-icon" src="https://i.ibb.co/6RDhB9Q/cancel.png" alt="hehe">


    <form action="" method="get" class="filters-form">

        {{-- Gender --}}
        <div class="form-section form-section-gender">
            <h4 class="form-group-heading" id="heading-gender">Gender</i></h4>
            <span class="caret"></span>


            
        
            <div class="form-group">
                <div class="input-label">
                    <x-filtering.checkbox-bounce id="men" name="gender" value="men"/>


                    <label for="men">Men</label>
                </div>

                <div class="input-label">
                    <x-filtering.checkbox-bounce id="women" name="gender" value="women" />

                    <label for="women">Women</label>
                </div>

                <div class="input-label">
                    <x-filtering.checkbox-bounce id="unisex" name="gender" value="unisex" />

                    <label for="women">Unisex</label>
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

        {{-- color --}}
        <div class="form-section form-section-color">
            <h4 class="form-group-heading" id="heading-color">Color</h4>        

            <div class="form-group form-group-colors ">
                @foreach ($all_attributes as $attribute)
                    @if ($attribute->name == "Color")
                        @foreach ($attribute->values as $value)
                            <div class="input-label">
    
                                <input type="checkbox" name="color[]" id="{{ $value->value }}" value="{{ $value->value }}" class="color color-{{ $value->value }} filterable"
                                
                                    @if (request()->color != null)
                                        @if (in_array($value->value , request()->color))
                                            checked
                                        @endif
                                    @endif
                                />
                    
                            </div>
                            
                        @endforeach
                    @endif
                @endforeach
            </div>
        </div>
    </form>
</div>