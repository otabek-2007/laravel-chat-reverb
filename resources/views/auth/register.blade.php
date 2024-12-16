@extends('layouts.app')

@section('title', __('Register'))

@section('content')
<div class="max-w-md mx-auto mt-10 bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-center text-gray-800 dark:text-gray-100">{{ __('Register') }}</h2>
    <form action="{{ route('register') }}" method="POST" class="mt-6 space-y-4">
        @csrf
        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium">{{ __('Name') }}</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required
                class="w-full mt-1 p-3 rounded-lg bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 focus:ring-blue-500">
            @error('name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium">{{ __('Email') }}</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required
                class="w-full mt-1 p-3 rounded-lg bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 focus:ring-blue-500">
            @error('email')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium">{{ __('Password') }}</label>
            <input type="password" name="password" id="password" required
                class="w-full mt-1 p-3 rounded-lg bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 focus:ring-blue-500">
            @error('password')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-sm font-medium">{{ __('Confirm Password') }}</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required
                class="w-full mt-1 p-3 rounded-lg bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 focus:ring-blue-500">
            @error('password_confirmation')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="w-full p-3 text-white bg-blue-600 hover:bg-blue-700 rounded-lg font-semibold">{{ __('Register') }}</button>
    </form>

</div>
@endsection