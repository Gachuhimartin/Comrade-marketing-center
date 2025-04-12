<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Include your custom styles here -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }
        .product-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 20px;
            width: 300px;
            display: inline-block;
            vertical-align: top;
            text-align: center;
        }
        .product-card h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        .product-card p {
            margin: 10px 0;
            font-size: 1em;
            color: #666;
        }
        .product-card .price {
            font-size: 1.2em;
            color: green;
            margin-top: 10px;
        }
        .product-card .category {
            font-size: 1em;
            color: #777;
            margin-top: 10px;
        }
        .actions {
            margin-top: 15px;
        }
        .actions a,
        .actions button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 8px 15px;
            margin: 5px;
            text-decoration: none;
            border-radius: 5px;
        }
        .actions button {
            cursor: pointer;
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

    <header>
        <h1>Product List</h1>
        <a href="{{ route('products.create') }}">Add New Product</a>
    </header>

    <main>
        <div class="product-container">
            @foreach($products as $product)
                <div class="product-card">
                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->description }}</p>
                    <div class="price">${{ number_format($product->price, 2) }}</div>
                    <div class="category">{{ $product->category }}</div>
                    <div class="actions">
                        <a href="{{ route('products.show', $product->id) }}">View</a>
                        <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Comrade Marketing Centre</p>
    </footer>

</body>
</html>
