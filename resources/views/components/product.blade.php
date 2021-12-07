@props(['product'])

<a  class="grid-item"href="{{ route('show', $product->id) }}">
    <img class="product-image" src="{{ $product->images->first()->url }}" alt="">

    <div class="product-info">
        <h5 class="product-name">{{ $product->name }}</h5>
        <p class="product-price">${{ $product->price }}</p>
    </div>
</a>

