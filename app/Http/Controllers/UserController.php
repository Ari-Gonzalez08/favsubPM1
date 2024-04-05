<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $request) {
        $credentials = $request -> validate ([
            "email"=> "required|email",
            "password"=> "required",
        ]);
        if (Auth::attempt($credentials)){
            return redirect('/');
        }
        return back ()->withErrors(['email'=> 'Credenciales incorrectas', 'password' => 'Contraseña incorrecta']);
    }

public function create (Request $request){
  $verifiedData = $request->validate([
    'email' => 'required|email|unique:users,email',
    'password' => 'required|min:6|max:20',
    'name' => 'required|min:3',
    'birthday' => 'date',
  ]);

  if(User::create($verifiedData)){
    return redirect('/');
  }
  return back()->withErrors([]);
}
}
