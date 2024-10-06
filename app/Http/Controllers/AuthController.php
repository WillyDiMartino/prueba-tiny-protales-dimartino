<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function actionLogin(Request $request){
        $credentials = $request->only(['email', 'password']);
        
        if(!Auth::attempt($credentials)){
            return redirect()
            ->route("auth.login")
            ->with("feedback", [
                "message" => "Credenciales incorrectas",
                "class" => "alert-danger",
            ])
            ->withInput();
        }
        return redirect()->route("articles.index")
        ->with("feedback", [
            "message" => "Bienvenido de nuevo",
            "class" => "alert-success",
        ]);
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route("auth.login")
        ->with("feedback", [
            "message" => "Sesion cerrada con exito",
            "class" => "alert-success",
        ]);
    }

}
