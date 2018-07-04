<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegistroController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => 'required|min:3|max:20',
            'email' => 'required|email',
            'teléfono' => 'nullable',
            'contraseña' => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/|confirmed',
            'avatar' => 'image'
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['nombre'],
            'email' => $data['email'],
            'phone' => $data['teléfono'],
            'password' => Hash::make($data['contraseña']),
            'avatar' => $data['avatar']
        ]);
    }

    public function registro(Request $request) {
        return view('/registro');
    }

   /*  public function submit(Request $request) {
        $this->validate($request, [
            'nombre' => 'required|min:3|max:20',
            'email' => 'required|email',
            'teléfono' => 'nullable',
            'contraseña' => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/|confirmed',
            'avatar' => 'image'
        ]);
        return redirect('/');
    }  */
}
