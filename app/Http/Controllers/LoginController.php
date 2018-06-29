<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;

class LoginController extends Controller
{
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
}
