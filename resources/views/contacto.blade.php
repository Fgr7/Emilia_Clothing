@extends('layaoutss.app')
<link rel="stylesheet" href="css/formulario.css">
@section('title', 'contacto')

@section('content')

<div>
    <section class="form-register">
        <h1>Formulario</h1>
        <label class="coco" for="name">Nombres: </label>
        <input class="controls" name="name" id="name" placeholder="Ingrese sus nombres" type="text">
        <label class="coco" for="lastname">Apellidos: </label>
        <input class="controls" name="name" id="name" placeholder="Ingrese sus apellidos" type="text">
        <label class="coco" for="email">Email: </label>
        <input class="controls" name="name" id="name" placeholder="Ingrese su email" type="email">
        <label class="coco" for="phone">Télefono: </label>
        <input class="controls" name="name" id="name" placeholder="Ingrese su teléfono" type="number">
        <input class="botons"  type="submit" value="Registrar">
    </section>
</div>

@endsection
