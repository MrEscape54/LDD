<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function listar(Request $request) {

        $table = Brand::find(1);

        return view('brands.listar')
            ->with('brands', $table);
    }

    public function agregar(Request $request) {

    }
}
