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
        $search = $request->input('search');
        $category = $request->input('category');
        $title = $request->input('title');
        $price = $request->input('price');
        $condition = $request->input('condition');
        $available = $request->input('available');

        $products = Product::query()
            ->when($category, function ($query, $category) {
                return $query->where('category', 'like', "%{$category}%");
            })
            ->when($title, function ($query, $title) {
                return $query->where('title', 'like', "%{$title}%");
            })
            ->when($price, function ($query, $price) {
                return $query->where('price', 'like', "%{$price}%");
            })
            ->when($condition, function ($query, $condition) {
                return $query->where('condition', 'like', "%{$condition}%");
            })
            // ->when($request->input('available'), function ($query, $available) {
            //     return $query->where('available', $available);
            // })
            ->when(!$category && !$title && !$price && !$condition && !$available && $search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', "%{$search}%")
                      ->orWhere('category', 'like', "%{$search}%")
                      ->orWhere('price', 'like', "%{$search}%")
                      ->orWhere('condition', 'like', "%{$search}%")
                      ->orWhereHas('user', function ($userQuery) use ($search) {
                          $userQuery->where('username', 'like', "%{$search}%");
                      });
                });
            })
            ->get();

        return view('products.index', compact('products', 'search', 'category', 'title', 'price', 'condition'));
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
            'location' => 'required|string',
            
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
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'available' => 'nullable',
        ]);
        $validated['available'] = $request->has('available') ? true : false;
        $product->update($validated);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    // Delete a product from the database
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
