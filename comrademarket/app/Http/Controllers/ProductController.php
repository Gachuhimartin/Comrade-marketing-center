<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // Show a list of products
    public function index(Request $request)
    {
        // Initialize the query
        $query = Product::query();
    
        // Filter by name (if provided)
        if ($request->has('name') && $request->name != '') {
            $query->where('name', 'like', '%' . $request->name . '%');
        }
    
        // Filter by category (if provided)
        if ($request->has('category') && $request->category != '') {
            $query->where('category', 'like', '%' . $request->category . '%');
        }
    
        // Filter by price (if provided)
        if ($request->has('price') && $request->price != '') {
            $query->where('price', '<=', $request->price);
        }
    
        // Filter by condition (if provided)
        if ($request->has('condition') && $request->condition != '') {
            $query->where('condition', 'like', '%' . $request->condition . '%');
        }
    
        // Filter by user (if provided)
        if ($request->has('user') && $request->user != '') {
            $query->whereHas('user', function($q) use ($request) {
                $q->where('username', 'like', '%' . $request->user . '%');
            });
        }
    
        // Execute the query and get results
        $products = $query->get();
    
        // Return view with products and the search term
        return view('products.index', compact('products'));
    }
    
    // Show the form to create a new product
    public function create()
    {
        return view('products.create');
    }

    // Store a new product in the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'condition' => 'required|string',
            'category' => 'required|string',
            'location' => 'required|string'
        ]);
        $validated['user_id'] = Auth::id();
        
        try{
            if($request->hasFile('image')){
                $store = $request->file('image');
                $filename = time(). '_product_image.' . $store->getClientOriginalExtension();
    
                $path = $store->storeAs('product/images',$filename,'public');
            }
            $product = Product::create($validated);
            Image::create([
                'image_path' => $path,
                'product_id' => $product->id,
            ]);
        }catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    // Show a specific product
    public function show(Product $product)
    {
        
        return view('products.show', compact('product'));
    }

    // Show the form to edit an existing product
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Update a product in the database
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $product->update($request->all());

        return redirect()->route('product.index')->with('success', 'Product updated successfully.');
    }

    // Delete a product from the database
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }
}
