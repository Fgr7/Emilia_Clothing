<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Laravel App</title>

    <!-- Tailwind CSS Link -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>
  </head>
  <body class="bg-gray-100 text-gray-800">
    <!-- Document body -->
    <nav class="flex py-5 bg-pink-300 text-white mb-10">
        <div class="w-1/4 px-12 mr-auto">
            <p class="text-4xl italic front-bold text-pink-500 font-serif">Emilia</p>
        </div>
        <ul class="w-3/4 px-16 ml-auto flex justify-end pt-l">
        <li class="mx-1">

                
                <a href="{{ route('home.index') }}" class="text-xl py-2 px-4  hover:text-pink-700">Inicio</a>
                <a href="{{route('info.index')}}" class="text-xl py-2 px-4  hover:text-pink-700">Descripción</a>
                <a href="{{ route('catalogo.index') }}" class="text-xl py-2 px-4  hover:text-pink-700">Catálogo</a>
                <a href="{{ route('contacto.index') }}" class="text-xl py-2 px-4  hover:text-pink-700">Contacto</a>

        </li>
          @if(auth()->check())
            <li class="mx-6">
                <p class="text-xl text-pink-400 font ">Bienvenido   <b>{{ auth()->user()->name }}</b></p>
            </li>

            <li>
                <a href="{{ route('login.destroy')}}" class= "front-bold text-xl border-2 border-white py-3 px-4 rounded-md hover:bg-white hover:text-pink-700">Log out</a>
            </li>
          @else
          <li class="mx-1">
                <a href="{{ route('login.index')  }}" class="font-semibold text-xl hover:bg-pink-700 py-3 px-4 rounded-md">Log In</a>
            </li>

            <li>
                <a href="{{ route('register.index')  }}" class= "front-semibold text-xl border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-pink-700">Register</a>
            </li>
          @endif
        </ul>

    </nav>


    @yield('content')

  </body>
</html>
