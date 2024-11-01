@extends('layout')

@section('title', 'Listado de Usuarios')

@section('content')
<div class="flex justify-between items-center mb-4">
    <a href="{{ route('users.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Crear Nuevo Usuario</a>

    <!-- Botón de Cerrar Sesión -->
    <form action="{{ route('logout') }}" method="POST" class="inline">
        @csrf
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">
            Cerrar Sesión
        </button>
    </form>
</div>

<table class="min-w-full bg-white border border-gray-300">
    <thead>
        <tr>
            <th class="py-2 px-4 border-b">Nombre</th>
            <th class="py-2 px-4 border-b">Apellido</th>
            <th class="py-2 px-4 border-b">Correo</th>
            <th class="py-2 px-4 border-b">Número de Teléfono</th>
            <th class="py-2 px-4 border-b">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td class="py-2 px-4 border-b">{{ $user->nombre }}</td>
                <td class="py-2 px-4 border-b">{{ $user->apellido }}</td>
                <td class="py-2 px-4 border-b">{{ $user->correo }}</td>
                <td class="py-2 px-4 border-b">{{ $user->nro_telefono }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ route('users.edit', $user->id) }}" class="text-blue-500">Editar</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Seguro que deseas eliminar este usuario?')" class="text-red-500">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
