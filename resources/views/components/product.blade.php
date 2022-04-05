@props(['product'])

<a  class="grid-item" href="{{ route('show', $product->id) }}">
    <div class="images">
        <img class="product-image" src="{{ $product->images->first()->url }}" alt="">
        {{-- <img class="hover-image" src="https://m.media-amazon.com/images/M/MV5BODkzMjhjYTQtYmQyOS00NmZlLTg3Y2UtYjkzN2JkNmRjY2FhXkEyXkFqcGdeQXVyNTM4MDQ5MDc@._V1_FMjpg_UX1000_.jpg" alt=""> --}}
    </div>
    

    <div class="product-info">
        <h5 class="product-name">{{ $product->name }}</h5>
        <p class="product-price">${{ $product->price }}</p>
    </div>
</a>

