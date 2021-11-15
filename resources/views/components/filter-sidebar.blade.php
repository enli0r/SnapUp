@props(['url', 'gender'])

<div class="filter-sidebar">
    <h1>Filters</h1>

    <form action="{{ $url }}?gender={{ $gender }}" method="post">
        <h4>Gender</h4>
        <hr>
        <div class="form-group gender">
            <label for="gender-men">Men</label>
            <input type="checkbox" id="gender-men" name="gender" value="men">

            <label for="gender-men">Women</label>
            <input type="checkbox" id="gender-men" name="gender" value="women">
        </div>

        

        <h4>Category</h4>
        <hr>
        <div class="form-group category">
            @foreach ($categories as $category)
                @if ($category->slug != "men" && $category->slug != "women")
                    <label for="{{ $category->slug }}">{{ $category->name }}</label>
                    <input type="checkbox" id="{{ $category->slug }}" name="category" value="{{ $category->slug }}">
                @endif
            @endforeach
        </div>

        <h4>Color</h4>        
        <hr>
        <div class="form-group color">
            @foreach ($all_attributes as $attribute)
                @if ($attribute->name == "Color")
                    @foreach ($attribute->values as $value)
                        <label for="{{ $value->value }}">{{ $value->value }}</label>
                        <input type="checkbox" id="{{ $value->value }}" name="color" value="{{ $value->value }}">
                    @endforeach
                @endif
            @endforeach
        </div>

        <h4>Size</h4>        
        <hr>
        <div class="form-group color">
            @foreach ($all_attributes as $attribute)
                @if ($attribute->name == "Size")
                    @foreach ($attribute->values as $value)
                        <label for="{{ $value->value }}">{{ $value->value }}</label>
                        <input type="checkbox" id="{{ $value->value }}" name="size" value="{{ $value->value }}">
                    @endforeach
                @endif
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary" value="submited">Submit</button>
    </form>
</div>