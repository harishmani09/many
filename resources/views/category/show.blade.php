<x-app-layout>


    <div>
        {{ $category->title }}

        @if ($category->products->count())
            @foreach ($category->products as $product)
                <div>{{ $product->title }}</div>
                <div>{{ $product->price }}</div>
            @endforeach

        @endif

    </div>


</x-app-layout>
