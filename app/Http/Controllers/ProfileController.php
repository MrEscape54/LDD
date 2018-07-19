<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(Request $request) {
        return view('profile', array('user' => Auth::user()));
    }
}
