@extends('layout')

@section('title', 'Editar Usuario')

@section('content')
<h2 class="text-2xl font-semibold mb-4">Editar Usuario</h2>

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label class="block">Nombre:</label>
        <input type="text" name="nombre" class="border-gray-300 rounded w-full" value="{{ $user->nombre }}" required>
    </div>
    <div class="mb-4">
        <label class="block">Apellido:</label>
        <input type="text" name="apellido" class="border-gray-300 rounded w-full" value="{{ $user->apellido }}" required>
    </div>
    <div class="mb-4">
        <label class="block">Correo:</label>
        <input type="email" name="correo" class="border-gray-300 rounded w-full" value="{{ $user->correo }}" required>
    </div>
    <div class="mb-4">
        <label class="block">Número de Teléfono:</label>
        <input type="text" name="nro_telefono" class="border-gray-300 rounded w-full" value="{{ $user->nro_telefono }}">
    </div>
    <div class="mb-4">
        <label class="block">Contraseña (dejar en blanco para no cambiar):</label>
        <input type="password" name="contraseña" class="border-gray-300 rounded w-full">
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Actualizar</button>
</form>
@endsection
