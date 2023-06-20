@extends('admin.layout.base')
@section('content')

    <form class="row g-3" action="{{route('admin.brand.store')}}" method="post"  novalidate>
        @csrf

        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">New Brand Name</label>
            <input type="text" name="name"  class="form-control" >
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>






        <div class="col-12">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>

@endsection





