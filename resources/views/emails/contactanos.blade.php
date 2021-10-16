<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje Enviado</title>
</head>
<body>
    <h1>correo electronico</h1>

    <p><strong>Nombre:</strong> {{ $contacto['name'] }}</p>
    <p><strong>Correo:</strong> {{ $contacto['email'] }}</p>
    <p><strong>Mensaje:</strong> {{ $contacto['menssage'] }}</p>

</body>
</html>
