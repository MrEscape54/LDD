<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function perfil(Request $request) {
        return view('/perfil');
    }
}
