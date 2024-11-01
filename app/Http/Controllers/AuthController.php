<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // autenticar al usuario
    public function login(Request $request)
    {
        // validación de campos
        $request->validate([
            'correo' => 'required|email',
            'password' => 'required|string',
        ]);

        // Intento de autenticación
        if (Auth::attempt(['correo' => $request->correo, 'password' => $request->password])) {
            return redirect()->intended('users');
        }

        // redirige al login con un mensaje de error
        return back()->withErrors([
            'correo' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ])->withInput();
    }

    // cerrar sesion
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('status', 'Has cerrado sesión con éxito.');
    }
}