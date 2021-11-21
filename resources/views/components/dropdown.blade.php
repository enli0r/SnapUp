@props(['buttonName', 'categories', 'gender'])

<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle dropdown-button" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      {{ $buttonName }}
    </button>

    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        
        @foreach ($categories as $category)

            @if (count($category->children) > 0)
                
                <ul>
                    <form action="{{ route('products.categories', $category->slug) }}" method="POST">
                        @csrf

                        <input type="hidden" name="_method" value="PUT">
                        <button type="submit" name="gender" value="{{ $gender }}" class="category-name">{{ $category->name }}</button>
                    </form>

                    
                    @foreach ($category->children as $subcategory)
                        <form action="{{ route('products.categories', [$category->slug, $subcategory->slug]) }}" method="POST">
                            @csrf

                            <input type="hidden" name="_method" value="PUT">
                            <button type="submit" name="gender" value="{{ $gender }}" class="dropdown-item">{{ $subcategory->name }}</button>
                        </form>
                    @endforeach
                </ul>
            @endif
        @endforeach 
        
    </ul>
</div>