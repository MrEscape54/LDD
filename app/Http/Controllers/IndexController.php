<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;

class IndexController extends Controller
{

    public function index(Request $request) {

        $brands = Brand::all();
        $categories = Category::all();

        return view('index')->with('brands', $brands)
                            ->with('categories', $categories);
    }
}
