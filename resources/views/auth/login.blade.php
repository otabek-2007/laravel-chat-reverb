@extends('layouts.app')

@section('title', __('Login'))

@section('content')
<div class="max-w-md mx-auto mt-10 bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-center text-gray-800 dark:text-gray-100">{{ __('Login') }}</h2>
    <form action="{{ route('login') }}" method="POST" class="mt-6 space-y-4">
        @csrf
        <div>
            <label for="email" class="block text-sm font-medium">{{ __('Email') }}</label>
            <input type="email" name="email" id="email" required
                class="w-full mt-1 p-3 rounded-lg bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 focus:ring-blue-500">
        </div>
        <div>
            <label for="password" class="block text-sm font-medium">{{ __('Password') }}</label>
            <input type="password" name="password" id="password" required
                class="w-full mt-1 p-3 rounded-lg bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 focus:ring-blue-500">
        </div>
        <button type="submit"
            class="w-full p-3 text-white bg-blue-600 hover:bg-blue-700 rounded-lg font-semibold">{{ __('Login') }}</button>
    </form>
</div>
@endsection