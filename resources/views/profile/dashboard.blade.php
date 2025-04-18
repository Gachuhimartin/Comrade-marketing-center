@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Top header section with blue background -->
    <div class="bg-blue-600 text-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <h1 class="text-2xl font-bold">Comrade Marketing Centre</h1>
            <p class="text-blue-100">The official marketplace for university students</p>
            
            <!-- Search bar -->
            <form action="{{route('products.index')}}" method="get">
                <div class="mt-4 relative w-full max-w-md">
                    <input type="text" name="search" placeholder="Search for items..." 
                           class="w-full pl-10 pr-4 py-2 border border-blue-500 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-300 text-gray-800">
                    <span class="absolute left-3 top-2.5 text-blue-400">Q</span>
                </div>
            </form>
        </div>
    </div>

    <!-- Main content -->
    <div class="max-w-7xl mx-auto px-4 py-6 grid grid-cols-1 md:grid-cols-4 gap-6">
        <!-- Categories sidebar -->
        <div class="md:col-span-1">
            <div class="bg-white p-4 rounded-lg shadow border border-gray-200">
                <h2 class="font-bold text-lg mb-3 text-gray-800">Browse Categories</h2>
                <ul class="space-y-2">
                    <li class="text-blue-600 hover:text-blue-800 hover:underline cursor-pointer">Textbooks</li>
                    <li class="text-blue-600 hover:text-blue-800 hover:underline cursor-pointer">Electronics</li>
                    <li class="text-blue-600 hover:text-blue-800 hover:underline cursor-pointer">Furniture</li>
                    <li class="text-blue-600 hover:text-blue-800 hover:underline cursor-pointer">Clothing</li>
                    <li class="text-blue-600 hover:text-blue-800 hover:underline cursor-pointer">Other</li>
                </ul>
            </div>
        </div>

        <!-- Dashboard content -->
        <div class="md:col-span-3 space-y-6">
            <!-- Quick Actions at the TOP -->
            <div class="bg-white p-6 rounded-lg shadow border border-gray-200">
                <h3 class="font-bold text-lg mb-3 text-gray-800">Quick Actions</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <a href="{{ route('products.index')}}" class="border border-blue-100 bg-blue-50 rounded-md p-4 hover:bg-blue-100 transition">
                        <p class="font-medium text-blue-700">Browse Listings</p>
                        <p class="text-sm text-blue-600">Find items for sale</p>
                    </a>
                    <a href="{{route('profile.edit') }}" class="border border-green-100 bg-green-50 rounded-md p-4 hover:bg-green-100 transition">
                        <p class="font-medium text-green-700">Your Profile</p>
                        <p class="text-sm text-green-600">Manage your account</p>
                    </a>
                    <a href="{{ route('products.create') }}" class="border border-blue-100 bg-blue-50 rounded-md p-4 hover:bg-blue-100 transition">
                        <p class="font-medium text-blue-700">Sell an Item</p>
                        <p class="text-sm text-blue-600">List your items for sale</p>
                    </a>
                </div>
            </div>

            <!-- User info section -->
            <div class="bg-white p-6 rounded-lg shadow border border-gray-200">
                <h2 class="text-xl font-bold mb-4 text-gray-800">Welcome,</h2>
                
                <div class="space-y-3">
                    <div>
                        <p class="text-gray-600">Email: <span class="text-gray-900">{{ Auth::user()->email }}</span></p>
                    </div>
                    <div>
                        <p class="text-gray-600">Phone: <span class="text-gray-900">{{ Auth::user()->phone_number ?? 'Not provided' }}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
