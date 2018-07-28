<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;

class ProductController extends Controller
{
    // Only admins are allowed to perform the functions below
    public function __construct()
    {
        $this->middleware('admin')->except(['showProducts']);
    }

    public function showProducts() {
        $products = Product::paginate(20);

        return view('products.watches')->with('products', $products);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(24);

        return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = DB::table('brands')->where('id', '=', $request['brand_id'])->value('brand_name');
        
        $request->validate([
            'brand_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'genre_id' => 'required|numeric',
            'description' => 'required',
            'price' => 'required',
            'isAvailable' => 'required|boolean',
            'picture' => 'required|image'
        ]);

        $file = $request->file('picture');
        //$name = $file->store('img/Brands/'.$brand);
        $name = '/img/Brands/' . $brand . '/' . $file->getClientOriginalName();
        $file->move(public_path() . '/img/Brands/' . $brand, $file->getClientOriginalName());

        Product::create([
            'brand_id' => $request['brand_id'],
            'category_id' => $request['category_id'],
            'genre_id' => $request['genre_id'],
            'description' => $request['description'],
            'price' => $request['price'],
            'isAvailable' => $request['isAvailable'],
            'picture' =>$name,
        ]); 

        $request->session()->flash('message', 'Producto creado satisfactoriamente!');
        return redirect()->route('products.index');
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
        $product = Product::find($id);

        session()->flash('message', 'Producto actualizado satisfactoriamente!');
        return view('products.edit', compact('product'));
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
        
        $brand = DB::table('brands')->where('id', '=', $request['brand_id'])->value('brand_name');
        
        $request->validate([
            'brand_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'genre_id' => 'required|numeric',
            'description' => 'required',
            'price' => 'required',
            'isAvailable' => 'required|boolean',
            'picture' => 'required|image'
        ]);

        $file = $request->file('picture');
        $name = '/img/Brands/' . $brand . '/' . $file->getClientOriginalName();
        $file->move(public_path() . '/img/Brands/' . $brand, $file->getClientOriginalName());

        Product::find($id)->update([
            'brand_id' => $request['brand_id'],
            'category_id' => $request['category_id'],
            'genre_id' => $request['genre_id'],
            'description' => $request['description'],
            'price' => $request['price'],
            'isAvailable' => $request['isAvailable'],
            'picture' =>$name,
        ]);

        $request->session()->flash('message', 'Producto actualizado satisfactoriamente!');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    
        $product = Product::find($id);
        $product->delete();
        session()->flash('message', 'Producto eliminado satisfactoriamente!');
        return redirect()->route('products.index');
    }
}
