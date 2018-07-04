<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function listar (Request $request) {
        $brands = Brand::all();

        return view('brands.listar')
            ->with('brands', $brands);
    }

    public function agregar (Request $request) {
        $brands = Brand::all();

        return view('brands.agregar')
            ->with('brands', $brands);
    }
}
