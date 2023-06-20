@extends('admin.layout.base')
@section('content')

    <form class="row g-3" action="{{route('admin.brand.update', $brand->id)}}" method="post"  novalidate>
        @csrf
        @method('PATCH')
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Rename Brand </label>
            <input type="text" name="name" value="{{$brand->name}}" class="form-control" >
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>






        <div class="col-12">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>

@endsection





