@props(['product'])

<a href="{{ route('show', $product->id) }}">
    <div class="grid-item">
        <img class="product-image" src="{{ $product->images->first()->url }}" alt="">
        
        <div class="separator"></div>

        <div class="product-info">
            <h5 class="product-name">{{ $product->name }}</h5>
            <p class="product-price">${{ $product->price }}</p>
        </div>
    </div>
</a>