<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products= Product::with(['category', 'user' , 'brand' ])->orderBy('id' , 'desc')->get();
        return view('admin.product.index' , compact('products'));

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
        $data = $request->validate([
            'name'=> 'required',
            'user_id' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'detail' => 'required',
            'description' => 'required',

        ]);

        $data['user_id']=1;
        $data['category_id']=1;
        $data['brand_id']=1;

        Product::create($data);
        return redirect(route('admin.product.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product->load(['comments' , 'comments.user' , 'images' , 'brand' , 'category']);
       return view('admin.product.show' ,compact('product'));
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

//        dd($product);

        $data = $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'description' => 'required',
            'user_id' => 'required',
            'brand_id' => 'required',
            'category_id' => 'required',




        ]);

//        $data['user_id']=1;
//        $data['category_id']=1;
//        $data['brand_id']=1;
         $data['user_id'] = Auth::id();
        $product->update($data);
//            'name' => $request->input('name'),
//            'detail' => $request->input('detail'),
//            'description' => $request->input('description'),
//            'user_id' => $request->input('user_id'),
//            'brand_id' => $request->input('brand_id'),
//            'category_id' => $request->input('category_id'),
//        ]);
        return redirect(route('admin.product.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('admin.product.index'));
    }


    public function commentStore()
    {

    }
}
