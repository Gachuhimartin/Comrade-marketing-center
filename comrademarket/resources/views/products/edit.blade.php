<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit Product - {{ $product->name }}</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"/>
</head>
<body class="bg-gray-100 font-sans">
  <div class="max-w-3xl mx-auto p-8 bg-white shadow-md rounded-2xl mt-12">
    <h1 class="text-3xl font-bold text-center text-blue-700 mb-8">Edit Product</h1>

    <!-- Form to update product -->
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <!-- Title -->
      <div class="mb-6">
        <label for="title" class="block text-gray-700 font-medium mb-1">Item Title</label>
        <input type="text" id="title" name="title" value="{{ old('title', $product->name) }}" placeholder="e.g., HP Laptop 14-inch" required
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        <p class="text-sm text-gray-500 mt-1">Max 100 characters. Be descriptive.</p>
        @error('title')
          <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Category -->
      <div class="mb-6">
        <label for="category" class="block text-gray-700 font-medium mb-1">Category</label>
        <select id="category" name="category" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option value="">Choose category</option>
          <option value="books" {{ old('category', $product->category) == 'books' ? 'selected' : '' }}>Books & Textbooks</option>
          <option value="electronics" {{ old('category', $product->category) == 'electronics' ? 'selected' : '' }}>Electronics</option>
          <option value="furniture" {{ old('category', $product->category) == 'furniture' ? 'selected' : '' }}>Furniture</option>
          <option value="clothing" {{ old('category', $product->category) == 'clothing' ? 'selected' : '' }}>Clothing & Accessories</option>
          <option value="services" {{ old('category', $product->category) == 'services' ? 'selected' : '' }}>Services</option>
          <option value="other" {{ old('category', $product->category) == 'other' ? 'selected' : '' }}>Other</option>
        </select>
        @error('category')
          <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Condition -->
      <div class="mb-6">
        <label for="condition" class="block text-gray-700 font-medium mb-1">Condition</label>
        <select id="condition" name="condition" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option value="">Select condition</option>
          <option value="new" {{ old('condition', $product->condition) == 'new' ? 'selected' : '' }}>New</option>
          <option value="like_new" {{ old('condition', $product->condition) == 'like_new' ? 'selected' : '' }}>Like New</option>
          <option value="good" {{ old('condition', $product->condition) == 'good' ? 'selected' : '' }}>Good</option>
          <option value="fair" {{ old('condition', $product->condition) == 'fair' ? 'selected' : '' }}>Fair</option>
          <option value="poor" {{ old('condition', $product->condition) == 'poor' ? 'selected' : '' }}>Poor</option>
        </select>
        @error('condition')
          <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Price -->
      <div class="mb-6">
        <label for="price" class="block text-gray-700 font-medium mb-1">Price ($)</label>
        <input type="number" name="price" id="price" required min="0" step="0.01" value="{{ old('price', $product->price) }}"
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
               placeholder="e.g., 120.00">
        @error('price')
          <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Location -->
      <div class="mb-6">
        <label for="location" class="block text-gray-700 font-medium mb-1">Location</label>
        <input type="text" id="location" name="location" value="{{ old('location', $product->location) }}" required
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
               placeholder="e.g., UWI Mona Campus">
        @error('location')
          <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Description -->
      <div class="mb-6">
        <label for="description" class="block text-gray-700 font-medium mb-1">Description</label>
        <textarea id="description" name="description" rows="4" required
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                  placeholder="Describe the item in detail...">{{ old('description', $product->description) }}</textarea>
        @error('description')
          <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Image Upload with Preview -->
      <div class="mb-6">
        <label class="block text-gray-700 font-medium mb-2">Upload New Image</label>
        <div id="preview-container" class="mb-2 border rounded-lg p-4 bg-gray-50 text-center">
          @if($product->image)
            <img src="{{ asset('storage/' . $product->image[0]->image_path) }}" alt="Current image" class="mx-auto rounded-lg max-h-48">
          @else
            <span class="text-gray-400 text-sm">No image available</span>
          @endif
        </div>
        <input type="file" name="image" id="image" accept="image/*" class="hidden">
        @error('image')
          <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
        <label for="image"
               class="inline-block mt-2 bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition cursor-pointer">
          Choose New Image
        </label>
      </div>

      <!-- Contact Preferences -->
      <div class="mb-6">
        <label class="block text-gray-700 font-medium mb-2">Contact Preferences</label>
        <div class="space-y-2">
          <label class="inline-flex items-center">
            <input type="checkbox" name="contact_app" {{ old('contact_app', $product->contact_app) ? 'checked' : '' }} class="form-checkbox text-blue-600">
            <span class="ml-2 text-gray-700">In-App Messaging</span>
          </label>
          <label class="inline-flex items-center">
            <input type="checkbox" name="contact_email" {{ old('contact_email', $product->contact_email) ? 'checked' : '' }} class="form-checkbox text-blue-600">
            <span class="ml-2 text-gray-700">Email</span>
          </label>
          <label class="inline-flex items-center">
            <input type="checkbox" name="contact_phone" {{ old('contact_phone', $product->contact_phone) ? 'checked' : '' }} class="form-checkbox text-blue-600">
            <span class="ml-2 text-gray-700">Phone</span>
          </label>
        </div>
      </div>

      <!-- Submit Button -->
      <div class="mt-8">
        <button type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition font-semibold">
          Update Product
        </button>
      </div>
    </form>
  </div>

  <script>
    document.getElementById('image').addEventListener('change', function(event) {
      const preview = document.getElementById('preview-container');
      const file = event.target.files[0];

      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          preview.innerHTML = `<img src="${e.target.result}" alt="New image preview" class="mx-auto rounded-lg max-h-48">`;
        };
        reader.readAsDataURL(file);
      } else {
        // If no new file is selected, show the existing image or placeholder
        @if($product->image)
          preview.innerHTML = `<img src="{{ asset('storage/' . $product->image) }}" alt="Current image" class="mx-auto rounded-lg max-h-48">`;
        @else
          preview.innerHTML = `<span class="text-gray-400 text-sm">No image available</span>`;
        @endif
      }
    });
  </script>
</body>
</html>
