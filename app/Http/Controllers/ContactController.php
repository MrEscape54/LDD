<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() {
        return view('/contact');
    }

    public function sendContact(Request $request) {
        $request->validate([
            'nombre' => 'required|min:2|max:20',
            'email' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required',
        ]);

        return redirect()->route('/');
    }
}
