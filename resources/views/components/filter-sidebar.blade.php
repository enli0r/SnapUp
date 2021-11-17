@props(['currentcategory', 'gender'])

<div class="filter-sidebar">
    <h1>Filters</h1>

    <form action="" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <hr>
        <h4 class="form-group-heading">Gender</h4>
        
        <div class="form-group gender">
            <div class="input-label">
                <input type="checkbox" id="gender-men" name="gender" value="men" @if ($gender == 'men') checked @endif>
                <label for="gender-men">Men</label>
            </div>
            
            <div class="input-label">
                <input type="checkbox" id="gender-men" name="gender" value="women" @if ($gender == 'women') checked @endif>
                <label for="gender-men">Women</label>
            </div>
        </div>

        
        <hr>
        <h4 class="form-group-heading">Category</h4>
        
        <div class="form-group category">
            @foreach ($categories as $category)
                @if ($category->slug != "men" && $category->slug != "women" && $category->is_featured == 1)
                    <div class="input-label">
                        <input type="checkbox" id="{{ $category->slug }}" name="featured_category" value="{{ $category->slug }}">
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
                            <input type="checkbox" id="{{ $value->value }}" name="color" value="{{ $value->value }}">
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
                            <input type="checkbox" id="{{ $value->value }}" name="size" value="{{ $value->value }}">
                            <label for="{{ $value->value }}">{{ $value->value }}</label>
                        </div>
                        
                    @endforeach
                @endif
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary" value="submited">Submit</button>
    </form>
</div>