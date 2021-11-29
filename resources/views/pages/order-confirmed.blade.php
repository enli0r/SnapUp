<x-layout>
    <div class="container success-message-container">
        <div class="alert alert-success text-center my-5 success-message">
            {{ $message }}
        </div>

        <div class="shop-more text-right">
            <a href="{{ route('products') }}"class="btn btn-primary">Shop some more</a>
        </div>
    </div>
    
</x-layout>