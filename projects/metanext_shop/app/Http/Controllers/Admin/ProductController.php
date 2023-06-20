<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $products = Product::with(['user'])->orderBy('id', 'desc')->get();


       return view( 'admin.product.index' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'user_id' => ['nullable', 'exists:users'],
            'title' => ['required'],
            'body' => ['required'],
            'published' => ['required'],
            'price' => ['required', 'numeric'],
            'inventory' => ['required', 'integer'],// mojoodi kala
        ]);

        $data['user_id']=1;
        Product::create($data);
        return redirect(route('admin.product.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.show' , compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit' , compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'user_id' => ['nullable', 'exists:users'],
            'title' => ['required'],
            'body' => ['required'],
            'published' => ['required'],
            'price' => ['required', 'numeric'],
            'inventory' => ['required', 'integer'],
        ]);

        $product->update([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'price' => $request->input('price'),
            'inventory' => $request->input('inventory'),
        ]);
        return redirect(route('admin.product.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete($product);
        return redirect(route('admin.product.index'));
    }
}
