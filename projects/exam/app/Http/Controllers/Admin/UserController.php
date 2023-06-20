<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users= User::with('products' , 'blogs')->orderBy('id')->get();
//        dd($users);
        return view('admin.user.index' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $data = $request->validate([
            'name' => 'required',
            'family' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'password' => 'required',

        ]);

         User::create($data);
         return redirect(route('admin.user.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $user->load(['products' , 'blogs' , 'comments' ]);
        return view('admin.user.show' , compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.user.edit' , compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {

          $data= $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'family' => 'required',
            'mobile' => 'required',

        ]);

        $user->update($data);

        $user->update([
            'name' => $request-> input('name'),
            'email' => $request-> input('email'),
            'family' => $request-> input('family'),
            'mobile' => $request-> input('mobile'),
        ]);
        return redirect(route('admin.user.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
       $user->delete();
       return redirect(route('admin.user.index'));
    }
}
