@extends('layout')
@section('title', 'Edit Product')
@section('content')
<x-nav/>

<div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
  <div class="max-w-2xl w-full bg-white rounded-xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Edit Product: {{ $product->name }}</h2>
    
    <form class="space-y-4" action="{{ route('products.update', $product->id) }}" method="POST">
      @method('PUT')

      <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Product Name</label>
        <input type="text" name="name" value="{{ $product->name }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none" required />
      </div>
      @error('name')
      <div class="text-red-500">{{ $message }}</div>
      @enderror

      <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Description</label>
        <textarea name="description" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">{{ $product->description }}</textarea>
      </div>
  @error('description')
      <div class="text-red-500">{{ $message }}</div>
      @enderror

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Price ($)</label>
          <input type="number" step="0.01" name="price" value="{{ $product->price }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none" required />
        </div>
  @error('price')
      <div class="text-red-500">{{ $message }}</div>
      @enderror

        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Quantity</label>
          <input type="number" name="quantity" value="{{ $product->quantity }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none" required />
        </div>
      </div>
  @error('quantity')
      <div class="text-red-500">{{ $message }}</div>
      @enderror

             <select name="category_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

      <div class="pt-4">
        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 rounded-lg transition-colors shadow-md">
          Update Product
        </button>
      </div>
    </form>

    <div class="mt-6 text-center">
      <a href="{{ route('products.index') }}" class="text-sm text-gray-500 hover:text-indigo-600">
        ← Back to Product List
      </a>
    </div>
  </div>
</div>
@endsection