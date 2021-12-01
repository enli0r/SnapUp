@props(['name', 'category'])


<button {{ $attributes }} value="{{ $category->slug }}" name="{{ $name }}">
       {{ $category->name }}
</button>