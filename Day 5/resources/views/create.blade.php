@extends('layout')
@section('title','create')
@section('content')
<x-nav/>

<div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
    
  <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Create Product</h2>
   
    <form class="space-y-4" method="POST" action="{{ url('/products') }}">
      <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Name</label>
        <input type="text" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"  />
      </div>
    @error('name')
      <div class="text-red-500">{{$message}}</div>
      @enderror

      <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Description</label>
        <input type="text" name="description" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all" />
      </div>
    @error('description')
      <div class="text-red-500">{{$message}}</div>
      @enderror
      <div class="grid grid-cols-1 gap-4">
        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Price</label>
          <input type="text" name="price" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all" />
        </div>
            @error('price')
      <div class="text-red-500">{{$message}}</div>
      @enderror
        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">quantity</label>
          <input type="text" name="quantity" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all" />
        </div>
      @error('quantity')
      <div class="text-red-500">{{$message}}</div>
      @enderror
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Category</label>
        <select name="category_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
      </div>
      <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 rounded-lg transition-colors">
        Create Product
      </button>
    </form>

  </div>
</div>
@endsection