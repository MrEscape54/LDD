<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $redirectTo = '/';

    public function login(Request $request) {
        return view('/login');
    }

    public function submit(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'contraseña' => 'required'
        ]);
        return redirect('/');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('perfil');
        }
    }
}
