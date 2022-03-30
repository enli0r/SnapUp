<x-layout>
    <section class="products">
        <div class="container filters-products-wrapper">
            <x-filter-sidebar />


            @if (count($products) > 0)
                <div class="products-wrapper grid-container @if (count($products) < 3) grid-left-align @endif">
                    @foreach ($products as $product)
                        <x-product :product="$product"/>
                    @endforeach      
                </div>
            @endif

        </div>
    </section>
</x-layout>
