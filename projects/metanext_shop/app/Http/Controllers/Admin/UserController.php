<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->get();
//       or $users= orderBy('id', 'desc')->get();
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
         $request->validate([
            'name' => 'required|min:3',
             'email' => 'required|email',
             'password' => ['required' , 'min:5' , 'max:10']
             ]);
         User::create([
             'name' => $request->input('name'),
             'email' => $request->input('email'),
             'password' => $request->input('password'),
         ]);
         return redirect(route('admin.user.index'));


    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {

        return view('admin.user.show', compact('user'));
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
      $request->validate([
           'name' => 'required|min:3',
          'email' => 'required|email',
      ]);

      $user->update([
         'name' => $request-> input('name'),
          'email' => $request-> input('email')
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
