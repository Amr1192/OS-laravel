
@extends('layout')
@section('title','show')
@section('content')
<x-nav/>

<div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
  <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Register</h2>
    
    <form class="space-y-4" method="POST" action="{{ route('register') }}">
      <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Full Name</label>
        <input type="text" name="name" value="{{ old('name') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all" placeholder="John Doe" />
      </div>
@error('name')
<span class="text-sm text-red-500 ">{{ $message }}</span>   
@enderror
      <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Email Address</label>
        <input type="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all" placeholder="name@company.com" />
      </div>
      @error('email')
<span class=" text-sm text-red-500">{{ $message }}</span>   
@enderror

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Password</label>
          <input type="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all" placeholder="••••••••" />
        </div>
        <div>
            @error('password')
<span class="text-sm text-red-500 ">{{ $message }}</span>   
@enderror
    
          <label class="block text-sm font-medium text-gray-600 mb-1">Confirm password</label>
          <input type="password" name="password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all" placeholder="••••••••" />
        </div>
      </div>
@error('password')
<span class=" text-sm text-red-500">{{ $message }}</span>   
@enderror
   

      <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 rounded-lg transition-colors">
        Create Account
      </button>
    </form>

    <p class="text-center text-sm text-gray-500 mt-6">
      Already have an account? 
      <a href="#" class="text-indigo-600 font-medium hover:underline">Sign In</a>
    </p>
  </div>
</div>
@endsection