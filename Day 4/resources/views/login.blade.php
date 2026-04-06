
@extends('layout')
@section('title','show')
@section('content')
<x-nav/>

<div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
  <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Login</h2>
    
    <form class="space-y-4" method="POST" action="{{ route('login') }}">
      <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Email Address</label>
        <input type="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all" placeholder="name@company.com" />
      </div>
@error('email')
   <span class="text-red-500">{{ $message }}</span>
@enderror
@error('credentails')
   <span class="text-red-500">{{ $message }}</span>
@enderror

      <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Password</label>
        <input type="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all" placeholder="••••••••" />
      </div>
@error('password')
   <span class="text-red-500">{{ $message }}</span>
@enderror
@error('credentails')
   <span class="text-red-500">{{ $message }}</span>
@enderror
      <div class="flex items-center justify-between text-sm">
        <label class="flex items-center text-gray-500">
          <input type="checkbox" class="mr-2 rounded border-gray-300 text-indigo-600"> Remember me
        </label>
        <a href="#" class="text-indigo-600 hover:underline">Forgot password?</a>
      </div>

      <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 rounded-lg transition-colors">
        Sign In
      </button>
    </form>

    <p class="text-center text-sm text-gray-500 mt-6">
      Don't have an account? 
      <a href="#" class="text-indigo-600 font-medium hover:underline">Create one</a>
    </p>
  </div>
</div>
@endsection