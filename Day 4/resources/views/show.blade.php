
@extends('layout')
@section('title','show')
@section('content')
<x-nav/>


<div class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white border border-gray-200 m-5">
    <img class="w-full h-48 object-cover" src="{{ asset($product->image) ?? 'laptop.jpg' }}" alt="{{ $product->name }}">

    <div class="p-5">
        <div class="flex justify-between items-start mb-2">
            <h2 class="text-xl font-bold text-gray-800 leading-tight">{{ $product->name }}</h2>
            <span class="text-lg font-semibold text-green-600">${{ number_format($product->price, 2) }}</span>
        </div>

        <p class="text-gray-600 text-sm mb-4">
            {{ $product->description }}
        </p>

        <div class="flex items-center justify-between text-xs text-gray-500 mb-6">
            <span>Stock: <strong class="text-gray-700">{{ $product->quantity }}</strong> units</span>
            <span>Updated: {{ \Carbon\Carbon::parse($product->updated_at)->format('M d, Y') }}</span>
        </div>

        <div class="flex gap-2">
            <a href="/products/{{ $product->id }}/edit" class="flex-1 text-center bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-200">
                Update
            </a>

            <form action="/products/{{ $product->id }}" method="POST" class="flex-1">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')" class="w-full bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded transition duration-200">
                    Delete
                </button>
            </form>
        </div>
    </div>
</div>
@endsection