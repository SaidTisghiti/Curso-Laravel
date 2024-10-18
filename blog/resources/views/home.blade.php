<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-4x1 mx-auto px-4">
        {{-- <h1>Bienvenido a la pagina principal</h1> --}}
        <x-alert2 type="danger" class="mb-4">
            <x-slot name="title">
                Titulo
            </x-slot>
            Contenido de la alerta
        </x-alert2>
        <p>Hola mundo</p>
    </div>
</body>
</html>