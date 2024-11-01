@extends('layout')

@section('title', 'Crear Usuario')

@section('content')
<div class="max-w-lg mx-auto px-4"> <!-- contenedor para centrar y dar margenes -->
    <h2 class="text-2xl font-semibold mb-4 text-center">Crear Nuevo Usuario</h2>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block">Nombre:</label>
            <input type="text" name="nombre" class="border-gray-300 rounded w-full" required>
        </div>
        <div class="mb-4">
            <label class="block">Apellido:</label>
            <input type="text" name="apellido" class="border-gray-300 rounded w-full" required>
        </div>
        <div class="mb-4">
            <label class="block">Correo:</label>
            <input type="email" name="correo" class="border-gray-300 rounded w-full" required>
        </div>
        <div class="mb-4">
            <label class="block">Número de Teléfono:</label>
            <input type="text" name="nro_telefono" class="border-gray-300 rounded w-full">
        </div>
        <div class="mb-4">
            <label class="block">Contraseña:</label>
            <input type="password" name="password" class="border-gray-300 rounded w-full" required>
        </div>
        <div class="flex justify-center space-x-4 mt-4"> <!-- centrar botones -->
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md">Guardar</button>
            <a href="{{ route('users.index') }}" class="bg-red-500 text-white px-4 py-2 rounded-md">Cancelar</a>
        </div>
    </form>
</div>
@endsection
