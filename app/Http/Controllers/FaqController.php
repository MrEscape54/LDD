<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;

class FaqController extends Controller
{
    public function faq(Request $request) {

        $brands = Brand::all();
        $categories = Category::all();

        return view('/faq')->with('brands', $brands)
                           ->with('categories', $categories);
    }
}
