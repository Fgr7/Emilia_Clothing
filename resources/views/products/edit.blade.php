@extends('layaoutss.app')

@section('title', 'Edit')

@section('content')

<form action="{{ route('products.update', $product->id) }}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg ml-96 mt-6">
    @csrf    

    @method('put') 
    <h2 class="text-2xl text-center py-4 mb-4 font-semibold object-center">Edit Product
        {{  $product->id  }}
    </h2>

    <input class="my-2 w-full bg-gray-200 p-2  text-lg rounded placeholder-gray-900"
    placeholder="Title" name='title' value="{{ $product->title }}">

    <input class="my-2 w-full bg-gray-200 p-2  text-lg rounded placeholder-gray-900"
    placeholder="Color" name='color' value="{{ $product->color }}">

    <input class="my-2 w-full bg-gray-200 p-2  text-lg rounded placeholder-gray-900"
    placeholder="Imagen" name='imagen' value="{{ $product->imagen }}">

    <input class="my-2 w-full bg-gray-200 p-2  text-lg rounded placeholder-gray-900"
    placeholder="Price" name='price' value="{{ $product->price }}">

    <button type="submit" class="my-3 w-full bg-pink-500 p-2 font-semibold rounded text-white hover:bg-pink-600 ">Send</buttom>
</form>

@endsection