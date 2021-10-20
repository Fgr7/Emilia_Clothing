@extends('layaoutss.app')

@section('title', 'Catalogo')

@section('content')



<div class="content-around" >
    @foreach($products as $product)
        
    
        <div class="inline-block ml-36 ">
        <img src="{{ $product->imagen }}" width='250' alt="">
            <div class=" mb-12">
                <p class=" text-2xl font-serif antialiased">{{ $product->title }}</p>
                <p class="italic mb-2">{{ $product->price }}</p>
                <a class="font-semibold text-white text-base bg-pink-400 py-1 px-2 rounded-md hover:bg-white hover:text-pink-700">Comprar</a>
                <a class= "front-semibold text-base border-2  py-2 px-4 rounded-md hover:bg-white hover:text-pink-700">Información</a>
            </div>    
        </div>



    @endforeach
</div>


@endsection
