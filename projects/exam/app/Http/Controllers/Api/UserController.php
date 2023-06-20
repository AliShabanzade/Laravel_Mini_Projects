<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends ApiBaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$users= User::select(['id' , 'name as user_name' , 'email'])->where('id' , '>'  , '30')->get();
        //clean code use UserResource
        $users = User::where('id' , '>' , '30')->get();

        //successResponse created in ApiBaseController
      return $this->successResponse(UserResource::collection($users));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {

        //....
        $user = User::create($request->validated());
        return $this->successResponse(UserResource::make($user));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
//        $user = User::where('id' , $user->id)
//            ->select(['id' , 'name as user_name' , 'email'])
//            ->first();
      //clean code1 use
      return $this->successResponse(UserResource::make($user));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
       //....
        $user->update($request->validated());
        return $this->successResponse(UserResource::make($user));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
