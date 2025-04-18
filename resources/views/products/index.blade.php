@extends('layouts.app')

@section('content')
    <!-- Search Form -->
    <form method="GET" action="{{ route('products.index') }}" class="search-form text-center mt-8">
        <input
            type="text"
            name="search"
            value="{{ request('search') }}"
            placeholder="Search products..."
            class="p-3 w-64 rounded border border-gray-300 mr-2"
        >
        <button
            type="submit"
            class="p-3 bg-blue-600 text-white rounded hover:bg-blue-700"
        >
            Search
        </button>
    </form>

    <div class="product-container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-8">
        @foreach($products as $product)
            <div class="product-card bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                <div class="product-image">
                    <img src="{{ $product->image[0]->image_path ? asset('storage/'. $product->image[0]->image_path): asset('images/default-product.jpg') }}" alt="{{ $product->title }}" class="w-full h-48 object-cover">
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">{{ $product->title }}</h3>
                    <p class="text-sm text-gray-600 mb-4">{{ Str::limit($product->description, 100) }}</p>
                    <div class="price text-green-600 font-semibold text-lg">Ksh {{ number_format($product->price, 2) }}</div>
                    <div class="category text-sm text-gray-500 mt-1">{{ $product->category }}</div>
                    <div class="availability text-sm text-gray-500 mt-1">
                        {{ $product->available ? 'Available' : 'Not Available' }}
                    </div>g
                </div>
                <div class="actions p-4 border-t border-gray-200 flex flex-col gap-2">
                    <a href="{{ route('products.show', $product->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 text-center">
                        View
                    </a>
                    @if($product->user && $product->user->phone_number)
                        <a href="https://wa.me/{{ $product->user->phone_number }}" target="_blank" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 text-center">
                            Chat Seller
                        </a>
                    @endif
                    @can('update', $product)
                        <a href="{{ route('products.edit', $product->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 text-center">
                            Edit
                        </a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 w-full">
                                Delete
                            </button>
                        </form>
                    @endcan
                </div>
            </div>
        @endforeach
    </div>

@endsection