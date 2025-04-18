@extends('layouts.app')

@section('content')
<div class="login-container max-w-md mx-auto bg-white rounded-lg shadow-lg p-6 mt-12">
    <div class="login-header text-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">{{ __('Login to Your Account') }}</h1>
    </div>

    <!-- General error message -->
    @if ($errors->has('login'))
        <div class="error-message bg-red-100 text-red-600 p-4 rounded mb-4">
            <p>{{ $errors->first('login') }}</p>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-group mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            @error('email')
                <div class="error-message text-red-600 text-sm mt-1">
                    <p>{{ $message }}</p>
                </div>
            @enderror
        </div>
        
        <div class="input-group mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
            <input type="password" id="password" name="password" required 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            @error('password')
                <div class="error-message text-red-600 text-sm mt-1">
                    <p>{{ $message }}</p>
                </div>
            @enderror
        </div>
        
        <div class="login-btn-container text-center">
            <button type="submit" class="login-submit bg-blue-600 text-white px-6 py-2 rounded-md shadow-sm hover:bg-blue-700 transition duration-200">
                {{ __('Login') }}
            </button>
        </div>
    </form>
    
    <div class="register-link text-center mt-6">
        <p class="text-sm text-gray-600">{{ __("Don't have an account?") }} 
            <a href="{{ route('register') }}" class="text-blue-600 hover:underline">{{ __('Register here') }}</a>
        </p>
    </div>
</div>
@endsection
