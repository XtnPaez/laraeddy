<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
       
    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }

    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $usuario = DB::table('cuis.usuarios')
        ->where('email', $request->email)
        ->where('estado', true)
        ->first();

    if (!$usuario || !Hash::check($request->password, $usuario->password_hash)) {
        return back()->with('error', 'Credenciales incorrectas o usuario inactivo');
    }

    session([
        'usuario_id' => $usuario->id,
        'usuario_nombre' => $usuario->nombre,
        'usuario_rol' => $usuario->rol
    ]);

    return redirect()->route('inicio');
}

}

