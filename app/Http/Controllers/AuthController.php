<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

public function loginForm()
{
    return view ('auth.login');
}

public function registerForm()
{
    return view ('auth.register');
}


public function register ()
{
# Validar los datos de registro
$validatedData = request()->validate([
'name' => 'required|string|max:255',
'email' => 'required|string|email|max:255|unique:users',
'password' => 'required|string|min:8|confirmed',
]);

# Crear el usuario
$user = \App\Models\User::create([
'name' => $validatedData['name'],
'email' => $validatedData['email'],
'password' => $validatedData['password'],
]);

# Redirigir o iniciar sesión automáticamente
auth()->login($user);
return redirect('/')->with('success', 'Cuenta creada exitosamente');

}

public function login(Request $request)
{
    // Validar las credenciales
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Intentar autenticar
    if (auth()->attempt($credentials)) {
        // Regenerar la sesión para prevenir session fixation
        $request->session()->regenerate();

        // Redirigir al home
        return redirect('/')->with('success', 'Bienvenido de vuelta!');
    }

    // Si falla, devolver con error
    return back()->withErrors([
        'email' => 'Las credenciales no coinciden con nuestros registros.',
    ])->onlyInput('email');
}

public function logout(Request $request)
{
    auth()->logout();
    
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    
    return redirect('/')->with('success', 'Sesión cerrada correctamente');
}
}

