@extends('layaoutss.app')

@section('title', 'Contacto')

@section('content')

<div class="flex bg-gray-100 p-20">
    <div class="mb-auto mt-auto max-w-lg">
    <h1 class="text-5xl font-serif text-pink-300 text-right  "> Escribenos aqui</h1>
    <div class="grid gap-3 grid-cols-1 text-left">

<form action="{{ route('contactanos.store') }}" method="POST" >

    @csrf

    <label>
        <br>
        <input placeholder="Nombre Completo" type="text" name="name">
    </label>
    <br>

    @error('name')
        <p><strong>{{ $message }}</strong></p>

    @enderror
    <label>
        <br>
        <input placeholder="Correo Electronico" type="text" name="correo">
    </label>
    <br>

    @error('correo')
        <p><strong>{{ $message }}</strong></p>

    @enderror

    <label>
        <br>
        <textarea placeholder="Mensaje" name="mensaje" rows="4" ></textarea>
    </label>

    @error('mensaje')
        <p><strong>{{ $message }}</strong></p>

    @enderror
    <br>
    <button class="bg-black rounded-md py-3 px-7 mt-6 text-white text-right">Enviar Mensaje</button>
</form>

@if (session('info'))
    <script>
        alert("{{ session('info') }}")
    </script>
@endif

</div>
</div>
</div>
@endsection


