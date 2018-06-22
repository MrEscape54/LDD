<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function registro(Request $request) {
        return view('/registro');
    }
}
