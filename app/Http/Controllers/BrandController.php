<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Session\Session;

class BrandController extends Controller
{
    // Only admins are allowed to perform the functions below
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = Brand::all();

        return view('brands.index')
            ->with('brands', $table);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.create');
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
            'brand_name' => 'required',
        ]);

        Brand::create([
            'brand_name' => $request['brand_name'],
        ]);

        $request->session()->flash('message', 'Marca creada exitosamente!');
        return redirect()->route('brands.index');
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
        $brand = Brand::find($id);

        session()->flash('message', 'Marca actualizada exitosamente!');
        return view('brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) // test changing it to: public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'brand_name' => 'required',
        ]);

        Brand::find($id)->update([  //test changing it to: $brand->update([
            'brand_name' => $request['brand_name'],
        ]);

        $request->session()->flash('message', 'Marca actualizada exitosamente!');
        return redirect()->route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        session()->flash('message', 'Marca eliminada exitosamente!');
        return redirect()->route('brands.index');
    }
}
