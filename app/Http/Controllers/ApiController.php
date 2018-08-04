<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ApiController extends Controller
{
    public function checkEmail($email) {

            $cantidad = User::where('email', $email)->count();
            return response()->json( $cantidad );
    }
}
