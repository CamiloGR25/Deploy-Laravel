<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestión de Usuarios')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-8 text-center">Administración de Usuarios</h1>
        @yield('content') <!-- Aquí se inserta el contenido de cada vista específica -->
    </div>

</body>
</html>
