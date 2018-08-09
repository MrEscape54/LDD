<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;

class ContactController extends Controller
{
    public function contact() {
        $brands = Brand::all();
        $categories = Category::all();

        return view('/contact')->with('brands', $brands)
                               ->with('categories', $categories);
    }

    public function sendContact(Request $request) {
        $request->validate([
            'nombre' => 'required|min:2|max:20',
            'email' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required',
        ]);
        
        //recibir mail enviado en la casilla ldd.dhouse@gmail.com
        return redirect()->route('/');
    }
}
