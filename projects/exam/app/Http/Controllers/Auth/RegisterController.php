<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
   }

    public function store(Request $request)
    {
        $data = $request->validate([
                 'name' => 'required',
                  'email'=> 'required',
                   'password'=>'required',
                  'family' => 'required',
                   'mobile' => 'required',
        ]);

        User::create($data);
        return redirect(route('admin.dashboard'));
   }
}
