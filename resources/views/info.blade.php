@extends('layaoutss.app')

@section('title', 'Home')

@section('content')

  <h1 class="text-6xl font-serif text-pink-300 text-center pt-20 px-10"> Emilia Clothing</h1>
  <div class="container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 h-screen pt-4">
      <div class="max-h-96 md:h-screen">
        <!-- Aqui para poner una imagen -->
        <img class="w-screen h-screen object-cover object-top" src="https://sc04.alicdn.com/kf/HTB1cX45olUSMeJjy1zjq6A0dXXaO.jpg" alt=""> -->
      </div>
      <div class="flex bg-gray-100 p-10">
        <div class="mb-auto mt-auto max-w-lg">
          <h1 class="text-3xl uppercase">Elegantes, Moderno e Impactantes</h1>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
          <br>
          <div class="grid gap-4 grid-cols-2">
            <ul class="list-disc">
              <li> Pagos Seguros </li>
            </ul>
            <ul class="list-disc">
              <li> Estilos Unicos </li>
            </ul>
            <ul class="list-disc">
              <li> Gran variedad </li>
            </ul>
            <ul class="list-disc">
              <li> Productos de Alta Calidad </li>
            </ul>
          </div>
          <button class="bg-black rounded-md py-3 px-7 mt-6 text-white">Contacos</button>
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection