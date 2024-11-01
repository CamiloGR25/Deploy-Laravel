@extends('layout')

@section('title', 'Iniciar Sesión')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 border border-gray-300 rounded-lg shadow">
    <h2 class="text-2xl font-semibold text-center mb-6">Iniciar Sesión</h2>

    @if (session('status'))
        <div class="bg-green-500 text-white p-4 mb-4 rounded">
            {{ session('status') }}
        </div>
    @endif

    <!-- Mostrar errores de validación -->
    @if ($errors->any())
        <div class="bg-red-500 text-white p-4 mb-4 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700">Correo:</label>
            <input type="email" name="correo" value="{{ old('correo') }}" class="w-full px-4 py-2 border rounded focus:outline-none" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Contraseña:</label>
            <input type="password" name="password" class="w-full px-4 py-2 border rounded focus:outline-none" required>
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
            Iniciar Sesión
        </button>
    </form>
</div>
@endsection
