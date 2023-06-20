@extends('admin.layout.base')
@section('content')

        <form class="row g-3" action="{{route('admin.user.update', $user->id)}}" method="post"  novalidate>
            @csrf
            @method('PATCH')
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Name</label>
                <input type="email" name="name" value="{{$user->name}}" class="form-control" >
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="col-6">
                <label for="inputAddress" class="form-label">Family</label>
                <input type="email"  name="family" value="{{$user->family}}" class="form-control" >
                @error('family')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="col-6">
                <label for="inputAddress" class="form-label">Mobile</label>
                <input type="email"  name="mobile" value="{{$user->mobile}}" class="form-control" >
                @error('mobile')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


            <div class="col-6">
                <label for="inputAddress" class="form-label">Email</label>
                <input type="email"  name="email" value="{{$user->email}}" class="form-control" >
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>

    @endsection





