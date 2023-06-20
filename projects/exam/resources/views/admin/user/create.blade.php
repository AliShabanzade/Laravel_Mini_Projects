@extends('admin.layout.base')

@section('content')

    <form class="row g-3" action="{{route('admin.user.store')}}" method="post"  novalidate>
        @csrf
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Name</label>
            <input type="email" name="name" value="{{old('name')}}" class="form-control" >
            @error('name')
               <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Family</label>
            <input type="text" name="family" value="{{old('family')}}" class="form-control" >
            @error('family')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Mobile</label>
            <input type="text" name="mobile" value="{{old('mobile')}}" class="form-control" >
            @error('mobile')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" name="password" value="{{old('password')}}" class="form-control" >
            @error('password')
             <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Email</label>
            <input type="email"  name="email" value="{{old('email')}}" class="form-control" >
            @error('email')
              <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>

@endsection


