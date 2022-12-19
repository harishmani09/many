<x-app-layout>

    <div>
        <li>{{ $product->title }}</li>
    </div>

    @if ($product->categories->count())
        <ul>
            @foreach ($product->categories as $category)
                <li>{{ $category->title }}(added at:{{ $category->pivot->created_at->diffForHumans() }} )</li>
            @endforeach
        </ul>
    @endif


</x-app-layout>
