<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function registro(Request $request) {
        return view('/registro');
    }

    public function submit(Request $request) {
        $this->validate($request, [
            'nombre' => 'required|min:3|max:20',
            'email' => 'required|email',
            'password' => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/|confirmed',
            'avatar' => 'image'
        ]);
    }
}
