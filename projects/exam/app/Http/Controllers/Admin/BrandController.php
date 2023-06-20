<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $brands= Brand::with(['products'])->orderBy('id' , 'desc')->get();
       return view('admin.brands.index' , compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= $request->validate([
           'name' => 'required'
        ]);

        Brand::create($data);
       return redirect(route('admin.brand.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
       $brand->load(['products']);
       return view('admin.brands.show' , compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('admin.brands.edit' , compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $data= $request->validate([
            'name' => 'required'
        ]);

        $brand->update($data);
        return redirect(route('admin.brand.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
      $brand->delete();
      return redirect(route('admin.brand.index'));
    }
}
