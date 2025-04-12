<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        <div class="flex flex-col md:flex-row gap-6">
            <!-- Image Preview -->
            <div class="md:w-1/2">
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image[0]->image_path) }}" alt="{{ $product->name }}" class="rounded-lg w-full object-cover h-96">
                @else
                    <div class="w-full h-96 bg-gray-200 flex items-center justify-center text-gray-500 rounded-lg">
                        No Image Available
                    </div>
                @endif
            </div>

            <!-- Product Info -->
            <div class="md:w-1/2 flex flex-col justify-between">
                <div>
                    <h1 class="text-3xl font-bold mb-2">{{ $product->name }}</h1>
                    <p class="text-sm text-gray-600 mb-4">Category: <span class="font-medium">{{ $product->category }}</span></p>
                    <p class="text-gray-800 mb-6">{{ $product->description }}</p>
                </div>

                <div>
                    {{ $product->user->phone_number}}
                </div>


                <div class="mt-auto">
                    <p class="text-2xl font-semibold text-green-600 mb-4">${{ number_format($product->price, 2) }}</p>
                    <a href="{{ route('products.index') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                        Back to Listings
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
