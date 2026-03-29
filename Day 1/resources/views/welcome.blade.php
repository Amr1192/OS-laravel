
@extends('layout')
@section('title','welcome')
{{-- @section('content')

<x-nav>
    Open source
    <x-slot:track>OS</x-slot:track>
    <x-slot:country>Menofia</x-slot:country>
</x-nav>
@endsection --}}


@php
    $products = file_get_contents(database_path('products.json'));
   $products = json_decode($products);
@endphp

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 p-8 bg-gray-50">
    @foreach($products as $product)
    <div class="group bg-white rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100 overflow-hidden">
        
        <div class="relative overflow-hidden">
            <img 
                src="{{ asset($product->image) }}" 
                class="w-full h-52 object-cover transform group-hover:scale-105 transition-transform duration-500"
                loading="lazy"
            >
        </div>

        <div class="p-6">
            <div class="flex justify-between items-start mb-2">
                <h3 class="text-lg font-bold text-gray-900 leading-tight">
                    {{ $product->name }}
                </h3>
            </div>

            <p class="text-gray-500 text-sm line-clamp-2 mb-3 h-10">
                Product description goes here.
            </p>

            <div class="mb-5">
                <span class="text-2xl text-blue-500 font-bold">
                    {{ $product->price }}
                </span>
            </div>

            <div class="flex gap-3">
                <a href="#" 
                   class="flex-1 text-center border border-gray-200 hover:bg-gray-50 text-gray-700 py-2.5 rounded-xl text-sm font-semibold transition">
                    {{ $product->description }}
                </a>
                <button class="flex-[1.5] bg-blue-600 hover:bg-blue-700 text-white py-2.5 rounded-xl text-sm font-semibold shadow-md shadow-blue-100 transition">
                    Add to Cart
                </button>
            </div>
        </div>
    </div>
    @endforeach
</div>


@php
    $procuts = []
@endphp

@foreach ($products as $product )
    $product->name 
    $product->image
@endforeach

=>
->