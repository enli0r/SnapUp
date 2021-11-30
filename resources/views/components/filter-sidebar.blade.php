@props(['currentcategory', 'previouspost'])

<button class="filters-open-button">Filters &#8594;</button>

<div class="filter-sidebar">
    <img class="filters-close-icon" src="https://i.ibb.co/6RDhB9Q/cancel.png" alt="hehe">

    <h1 class="filters-heading">Filters</h1>

    <form action="" method="post" class="filters-form">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <hr>

        {{-- Gender --}}
        <h4 class="form-group-heading">Gender</h4>
        
        <div class="form-group gender">
            <div class="input-label">
                <input type="radio" id="men-women" name="gender" value=""
                @if (!isset($previouspost['gender']))
                    checked
                @endif>
                <label for="men-women">Men & Women</label>
            </div>

            <div class="input-label">
                <input type="radio" id="gender-men" name="gender" value="men"
                @if (isset($previouspost['gender'])) 
                    @if ($previouspost['gender'] == 'men')
                        checked
                    @endif
                @endif>
                <label for="gender-men">Men</label>
            </div>
            
            <div class="input-label">
                <input type="radio" id="gender-women" name="gender" value="women"
                @if (isset($previouspost['gender'])) 
                    @if ($previouspost['gender'] == 'women')
                        checked
                    @endif
                @endif>
                <label for="gender-women">Women</label>
            </div>
        </div>

        {{-- Category --}}
        @if ($currentcategory == null)
            <hr>
            <h4 class="form-group-heading">Category</h4>
            
            <div class="form-group category">
                @foreach ($categories as $category)
                    @if ($category->slug != "men" && $category->slug != "women" && $category->is_featured == 0 && $category->parent_id == 0)

                        {{-- Category button --}}
                        <button type="submit" value="{{$category->slug}}" name="category" class="parent-category
                            @php 
                                if(isset($previouspost['category'])){
                                    if($previouspost['category'] == $category->slug){
                                        echo('button-checked');
                                    }
                                }
                            @endphp">
                                {{$category->name}}
                        </button>

                        {{-- Category children radio buttons --}}
                        @foreach ($category->children as $child)
                            <div class="input-label subcategory">
                                <input type="radio" id="{{ $child->slug }}" name="subcategory" value="{{ $child->slug }}" class="child-category"
                                @if (isset($previouspost['subcategory']))
                                    @if ($previouspost['subcategory'] == $child->slug)
                                        checked
                                    @endif
                                @endif 
                                >
                                <label for="{{ $child->slug }}">{{ $child->name }}</label>
                            </div>
                        @endforeach
 
                    @endif
                @endforeach
            </div>
        @endif

    
        {{-- Featured category --}}    
        <hr>
        <h4 class="form-group-heading">Featured category</h4>
        
        <div class="form-group category">
            @foreach ($categories as $category)
                @if ($category->slug != "men" && $category->slug != "women" && $category->is_featured == 1)
                    <div class="input-label">
                        <input type="radio" id="{{ $category->slug }}" name="featured_category" value="{{ $category->slug }}"
                        @php 
                            if(isset($previouspost['featured_category'])){
                                if($previouspost['featured_category'] == $category->slug){
                                    echo('checked');
                                }
                            }                                    
                        @endphp>
                        <label for="{{ $category->slug }}">{{ $category->name }} ({{count($category->products)}})</label>
                    </div>
                @endif
            @endforeach
        </div>

        {{-- Color --}}
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

        {{-- Size --}}
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

        <button type="submit" class="btn btn-primary" name="filter-submit" value="submited">Submit</button>
    </form>
</div>