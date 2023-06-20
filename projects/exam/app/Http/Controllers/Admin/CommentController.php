<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::with(['commentable'])->get();
        return view('admin.comment.index' , compact('comments'));
//        return view('admin.blog.show' ,  compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.comment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//          dd(Auth::id());
//        dd($request->all());
         $data=$request->validate([
            'name'=>'required',

            'commentable_id'=>'required',
            'commentable_type'=>'required',
            'body'=>'required',
        ]);
        if($request->commentable_type=='product'){
            $commentableType=Product::class;
        }
        else if($request->commentable_type=='blog'){
            $commentableType=Blog::class;
        }




        $data['user_id']= Auth::id();
        $data['commentable_type']= $commentableType;
        Comment::create($data);
//        return redirect(route('admin.comment.index'));
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        $comment->load(['commentable']);
       return view('admin.comment.show' , compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view('admin.comment.edit' , compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {

        $data=$request->validate([
            'name'=>'required',
            'commentable_id'=>'required',
            'commentable_type'=>'required',
            'body'=>'required',
        ]);
        if($request->commentable_type=='product'){
            $commentableType=Product::class;
        }
        else if($request->commentable_type=='blog'){
            $commentableType=Blog::class;
        }




        $data['user_id']= Auth::id();
        $data['commentable_type']= $commentableType;
        $comment->update($data);
        return redirect(route('admin.comment.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect(route("admin.comment.index"));
    }
}
