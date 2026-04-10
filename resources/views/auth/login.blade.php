@extends('layouts.auth')

@section('title', 'Login')

@section('konten')
<div class="flex items-center justify-center min-h-screen">
    <div class="mx-auto w-full max-w-sm rounded-lg bg-white p-6 shadow-lg">
        <form>
            <!-- Email input -->
            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-700">
                    Email
                </label>
                <input
                    type="email"
                    id="email"
                    placeholder="Enter email"
                    class="mt-1 block w-full rounded-md border py-2 px-4 border-gray-300 shadow-sm 
               focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
            </div>

            <!-- Password input -->
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">
                    Password
                </label>
                <input
                    type="password"
                    id="password"
                    placeholder="Password"
                    class="mt-1 block w-full rounded-md border py-2 px-4 border-gray-300 shadow-sm 
               focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
            </div>

            <!-- Remember me + Forgot password -->
            <div class="mb-6 flex items-center justify-between">
                <label class="flex items-center text-sm text-gray-600">
                    <input type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" />
                    <span class="ml-2">Remember me</span>
                </label>
                <a href="#" class="text-sm text-indigo-600 hover:text-indigo-500">
                    Forgot password?
                </a>
            </div>

            <!-- Sign in button -->
            <button
                type="submit"
                class="w-full cursor-pointer rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white 
             hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Sign in
            </button>

            <!-- Register link -->
            <p class="mt-6 text-center text-sm text-gray-600">
                Not a member?
                <a href="#" class="text-indigo-600 hover:text-indigo-500">Register</a>
            </p>
        </form>
    </div>
</div>
@endsection