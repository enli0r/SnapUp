<x-layout>
    <section class="products">
        <div class="filters-products-wrapper">
            <x-filter-sidebar :previouspost="$previouspost" :currentcategory="$currentcategory"/>

            <div class="products-container">

                @if (count($products) > 0)
                    <div class="products-wrapper grid-container @if (count($products) < 3) grid-left-align @endif">
                        @foreach ($products as $product)
                            <x-product :product="$product"/>
                        @endforeach      
                    </div>
                @endif
            </div>
        
        
            

        </div>
    </section>
</x-layout>
