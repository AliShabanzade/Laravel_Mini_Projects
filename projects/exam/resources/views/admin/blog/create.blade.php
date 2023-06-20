@extends('admin.layout.base')
@section('content')

    <form class="row g-3" action="{{route('admin.blog.store')}}" method="post"  novalidate>
        @csrf

        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">blog name</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control" >
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">description</label>
            <input type="text" name="description" value="{{old('description')}}" class="form-control" >
            @error('description')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label  class="form-label">Body</label>
            <input type="text" name="body" value="{{old('body')}}" class="form-control" >
            @error('body')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-12">
            <label  class="form-label">Category id</label>
            <input type="text"  name="category_id" value="{{old('category_id')}}" class="form-control" >
            @error('category_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-12">
            <label  class="form-label">User id</label>
            <input type="text"  name="user_id" value="{{old('user_id')}}" class="form-control" >
            @error('user_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>




        <div class="col-12">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>

@endsection





