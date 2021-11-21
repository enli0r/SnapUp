<x-layout>
    <section class="products">
        <div class="container products-container">
        <x-filter-sidebar :previouspost="$previouspost" :currentcategory="$currentcategory"/>

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
