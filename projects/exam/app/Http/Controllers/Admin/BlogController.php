<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs= Blog::with(['category' , 'user'])->orderBy('id' , 'desc')->get();
        return view('admin.blog.index' , compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= $request->validate([
            'name' => 'required',
            'body' => 'required',
            'description' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
        ]);

        Blog::create($data);
        return redirect(route('admin.blog.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
//        $data=Blog::with(['comments'])->where('id',$blog->id)->first();
        $blog->load(['comments' , 'comments.user', 'image' , 'category']);
        return view('admin.blog.show' , compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return  view('admin.blog.edit' , compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $data = $request->validate([
            'name' => 'required',
            'body' => 'required',
            'description' => 'required',
            'user_id' => 'required',
             'published' => 'required',
            'category_id' => 'required',




        ]);
//        dd($data);

        $blog->update($data);

        return redirect(route('admin.blog.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect(route('admin.blog.index'));
    }

    public function commentStore(Blog $blog)
    {

    }
}
