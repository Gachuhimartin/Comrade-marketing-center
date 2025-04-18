@extends('layouts.app')

@section('content')
<div class="register-container max-w-lg mx-auto bg-white rounded-lg shadow-lg p-6 mt-12">
    <div class="register-header text-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">{{ __('Create an Account') }}</h1>
    </div>

    <!-- Display error messages -->
    @if ($errors->any())
        <div class="error-message bg-red-100 text-red-600 p-4 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form id="register-form" action="{{ route('register') }}" method="POST">
        @csrf
        <div class="input-group mb-4">
            <label for="user_name" class="block text-sm font-medium text-gray-700">{{ __('User Name') }}</label>
            <input type="text" id="user_name" name="user_name" value="{{ old('user_name') }}" required 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div class="input-group mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div class="input-group mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
            <input type="password" id="password" name="password" required 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div class="input-group mb-4">
            <label for="confirm_password" class="block text-sm font-medium text-gray-700">{{ __('Confirm Password') }}</label>
            <input type="password" id="confirm_password" name="confirm_password" required 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div class="input-group mb-4">
            <label for="phone_number" class="block text-sm font-medium text-gray-700">{{ __('Phone Number') }}</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" 
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div class="register-btn-container text-center">
            <button type="submit" class="register-submit bg-blue-600 text-white px-6 py-2 rounded-md shadow-sm hover:bg-blue-700 transition duration-200">
                {{ __('Register') }}
            </button>
        </div>
    </form>

    <div class="login-link text-center mt-6">
        <p class="text-sm text-gray-600">{{ __('Already have an account?') }} 
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">{{ __('Login here') }}</a>
        </p>
    </div>
</div>
@endsection
