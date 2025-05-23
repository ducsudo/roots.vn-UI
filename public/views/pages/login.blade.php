@extends('layouts.layout')
@section('content')
    <div class="flex items-center justify-center h-screen bg-gray-100">
        <div class="w-full max-w-xs">

            <form 
                class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" 
                action="{{ route('auth.login') }}"
                method="post"
                enctype="multipart/form-data"
            >
                @csrf
                <h2 class="text-center text-2xl font-bold mb-4">Login</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        id="email" 
                        type="text"
                        placeholder="Enter your email"
                        name="email"
                    >
                </div>
                <div class="mb-6">
                    <label 
                        class="block text-gray-700 text-sm font-bold mb-2" 
                        for="password"
                    >
                        Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        id="password" type="password" placeholder="Enter your password"
                        name="password"
                    >
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Sign In
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                        Forgot Password?
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection