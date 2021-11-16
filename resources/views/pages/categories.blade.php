<x-layout>
    <div class="container">
        <h1 class="text-center my-5">Categories page</h1>
        @foreach ($categories as $category)
            <ul>
                @if ($category->parent_id == null)
                    <li>{{ $category->name }}</li>
                        @foreach ($category->children as $child_category)
                            <li class="px-3">{{ $child_category->name }}</li>
                        @endforeach
                @endif
            
            </ul>

        @endforeach

    </div>
</x-layout>