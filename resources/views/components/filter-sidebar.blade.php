@props(['currentcategory', 'gender', 'previouspost'])

<button class="filters-open-button">Filters &#8594;</button>

<div class="filter-sidebar">
    <img class="filters-close-icon" src="https://i.ibb.co/6RDhB9Q/cancel.png" alt="hehe">

    <h1 class="filters-heading">Filters</h1>

    <form action="" method="post" class="filters-form">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <hr>
        <h4 class="form-group-heading">Gender</h4>
        
        <div class="form-group gender">
            <div class="input-label">
                <input type="checkbox" id="gender-men" name="gender" value="men"
                @if (isset($previouspost['gender'])) 
                    @if ($previouspost['gender'] == 'men')
                        checked
                    @endif
                @else
                    checked
                @endif>
                <label for="gender-men">Men</label>
            </div>
            
            <div class="input-label">
                <input type="checkbox" id="gender-men" name="gender" value="women"
                @if (isset($previouspost['gender'])) 
                    @if ($previouspost['gender'] == 'women')
                        checked
                    @endif
                @else
                    checked
                @endif>
                <label for="gender-men">Women</label>
            </div>
        </div>


        @if ($currentcategory == null)
            <h4 class="form-group-heading">Category</h4>
            
            <div class="form-group category">
                @foreach ($categories as $category)
                    @if ($category->slug != "men" && $category->slug != "women" && $category->is_featured == 0 && $category->parent_id == 0)
                        <div class="input-label"> 
                            <input type="checkbox" id="{{ $category->slug }}" name="category" value="{{ $category->slug }}"
                            @php 
                                if(isset($previouspost['category'])){
                                    if($previouspost['category'] == $category->slug){
                                        echo('checked');
                                    }
                                }
                            @endphp>


                            <label for="{{ $category->slug }}">{{ $category->name }}</label>
                        </div>

                        @foreach ($category->children as $child)
                            <div class="input-label subcategory">
                                <input type="checkbox" id="{{ $child->slug }}" name="subcategory" value="{{ $child->slug }}">
                                <label for="{{ $child->slug }}">{{ $child->name }}</label>
                            </div>
                        @endforeach

                    @endif
                @endforeach
            </div>
        @endif
        

        
        <hr>
        <h4 class="form-group-heading">Featured category</h4>
        
        <div class="form-group category">
            @foreach ($categories as $category)
                @if ($category->slug != "men" && $category->slug != "women" && $category->is_featured == 1)
                    <div class="input-label">
                        <input type="checkbox" id="{{ $category->slug }}" name="featured_category" value="{{ $category->slug }}"
                        @php 
                            if(isset($previouspost['featured_category'])){
                                if($previouspost['featured_category'] == $category->slug){
                                    echo('checked');
                                }
                            }                                    
                        @endphp>
                        <label for="{{ $category->slug }}">{{ $category->name }}</label>
                    </div>
                @endif
            @endforeach
        </div>

        <h4 class="form-group-heading">Color</h4>        
        <hr>
        <div class="form-group color">
            @foreach ($all_attributes as $attribute)
                @if ($attribute->name == "Color")
                    @foreach ($attribute->values as $value)
                        <div class="input-label">
                            {{-- checking the checkbox if its filtered --}}
                            <input type="checkbox" id="{{ $value->value }}" name="color[]" value="{{ $value->value }}"  
                            @php 
                                if(isset($previouspost['color'])){
                                    foreach($previouspost['color'] as $color){
                                        if($color == $value->value){
                                            echo('checked');
                                        }
                                    }
                                }                                    
                            @endphp>

                            <label for="{{ $value->value }}">{{ $value->value }}</label>
                        </div>
                        
                    @endforeach
                @endif
            @endforeach
        </div>

        <hr>
        <h4 class="form-group-heading">Size</h4>        
        <div class="form-group color">
            @foreach ($all_attributes as $attribute)
                @if ($attribute->name == "Size")
                    @foreach ($attribute->values as $value)
                        <div class="input-label">
                            <input type="checkbox" id="{{ $value->value }}" name="size[]" value="{{ $value->value }}"
                            @php 
                                if(isset($previouspost['size'])){
                                    foreach($previouspost['size'] as $size){
                                        if($size == $value->value){
                                            echo('checked');
                                        }
                                    }
                                }                                    
                            @endphp>
                            <label for="{{ $value->value }}">{{ $value->value }}</label>
                        </div>
                        
                    @endforeach
                @endif
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary" value="submited">Submit</button>
    </form>
</div>