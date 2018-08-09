<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['editProfile', 'updateProfile']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function editProfile($id) {

        if (Auth::user()->id != $id) {
            return redirect()->route('/');
        }
        else {
        $user = User::find($id);

        session()->flash('message', 'Usuario actualizado satisfactoriamente!');
        return view('users.editProfile', compact('user'));
        }
    }

    public function updateProfile(Request $request, $id) {
        $request->validate([
            'nombre' => 'required|min:3|max:20',
            'primer_nombre' => 'required|min:3|max:20',
            'apellido' => 'nullable|min:2|max:20',
            'email' => 'required|email',
            'teléfono' => 'nullable|regex:/[0-9]{3}-[0-9]{4}-[0-9]{4}/',
            'avatar' => 'image|nullable',
        ]);

        if($request->hasfile('avatar')){
            $path = $request->file('avatar')->store('avatars');
        }
        else {
            $path = Auth::user()->avatar;
        }

        User::find($id)->update([
            'name' => $request['nombre'],
            'first_name' => $request['primer_nombre'],
            'last_name' => $request['apellido'],
            'email' => $request['email'],
            'phone' => $request['teléfono'],
            'avatar' =>$path,
        ]);

        //$request->session()->flash('message', 'Usuario actualizado satisfactoriamente!');
        return redirect()->route('/');
    }

    public function index()
    {
        $users = User::paginate(24);

        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:3|max:20',
            'email' => 'required|email|unique:users',
            'teléfono' => 'nullable|regex:/[0-9]{3}-[0-9]{4}-[0-9]{4}/',
            'contraseña' => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/|confirmed',
            'avatar' => 'image|nullable',
            'isAdmin' => 'required|min:0|max:1',
        ]);

        if($request->hasfile('avatar')){
            $path = $request->file('avatar')->store('avatars');
        }
        else {
            $path = 'avatars/avatar-generico.jpg';
        }

        User::create([
            'name' => $request['nombre'],
            'email' => $request['email'],
            'phone' => $request['teléfono'],
            'password' => Hash::make($request['contraseña']),
            'avatar' =>$path,
            'isAdmin' =>$request['isAdmin']
        ]);

        $request->session()->flash('message', 'Usuario creado satisfactoriamente!');
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        session()->flash('message', 'Usuario actualizado satisfactoriamente!');
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|min:3|max:20',
            'email' => 'required|email',
            'teléfono' => 'nullable|regex:/[0-9]{3}-[0-9]{4}-[0-9]{4}/',
            'avatar' => 'image|nullable',
            'isAdmin' => 'required|min:0|max:1',
        ]);

        if($request->hasfile('avatar')){
            $path = $request->file('avatar')->store('avatars');
        }
        else {
            $user = User::find($id);
            $avatar =$user->avatar;
            $path = $avatar;
        }

        User::find($id)->update([
            'name' => $request['nombre'],
            'email' => $request['email'],
            'phone' => $request['teléfono'],
            'password' => $request['contraseña'],
            'avatar' =>$path,
            'isAdmin' => $request['isAdmin'],
        ]);

        $request->session()->flash('message', 'Usuario actualizado satisfactoriamente!');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        session()->flash('message', 'Usuario eliminado satisfactoriamente!');
        return redirect()->route('users.index');
    }
}
