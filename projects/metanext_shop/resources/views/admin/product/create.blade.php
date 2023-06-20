


@extends('exam.resources.views.admin.layout.base')

@section('content')

    <form class="row g-3" action="{{route('admin.product.store')}}" method="post"  novalidate>
        @csrf
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Prorduct Name</label>
            <input type="text" name="title" value="{{old('title')}}" class="form-control" >
            @error('title')
               <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label  class="form-label">Detail</label>
            <input type="text" name="body" value="{{old('body')}}" class="form-control" >
            @error('body')
             <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-12">
            <label  class="form-label">Price</label>
            <input type="text"  name="price" value="{{old('price')}}" class="form-control" >
            @error('price')
              <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-12">
            <label  class="form-label">Inventory</label>
            <input type="text"  name="inventory" value="{{old('inventory')}}" class="form-control" >
            @error('inventory')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>


        <div class="col-12">
            <label class="form-label">Published</label>
            <select  name="published" class="form-control form-select">
                <option value="1" {{old('published')=='1' ? 'selected' : ""}}>enable</option>
                <option value="0" {{old('published')=='0' ? 'selected' : ""}}>disable</option>
            </select>
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>

@endsection


