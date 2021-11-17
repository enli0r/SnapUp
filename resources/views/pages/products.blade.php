<x-layout>
    <section class="products">
        <div class="container products-container">

            <x-filter-sidebar :currentcategory="$currentcategory" :gender="$gender"/>

            @if (count($products) > 0)
                <div class="products-wrapper grid-container">
                    @foreach ($products as $product)
                        <x-product :product="$product"/>
                    @endforeach      
                </div>
            @endif
        </div>
    </section>
</x-layout>
