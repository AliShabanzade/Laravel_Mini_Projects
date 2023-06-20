


@extends('admin.layout.base')

@section('content')

    <form class="row g-3" action="{{route('admin.product.store')}}" method="post"  novalidate>
        @csrf
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Prorduct Name</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control" >
            @error('name')
               <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label  class="form-label">Detail</label>
            <input type="text" name="detail" value="{{old('detail')}}" class="form-control" >
            @error('detail')
             <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-12">
            <label  class="form-label">Description</label>
            <input type="text"  name="description" value="{{old('description')}}" class="form-control" >
            @error('description')
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
            <label  class="form-label">Brand_id</label>
            <input type="text"  name="brand_id" value="{{old('brand_id')}}" class="form-control" >
            @error('brand_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-12">
            <label  class="form-label">category_id</label>
            <input type="text"  name="category_id" value="{{old('category_id')}}" class="form-control" >
            @error('category_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>



        <div class="col-12">
            <label  class="form-label">Image</label>
            <input type="text"  name="image" value="{{old('image')}}" class="form-control" >
            @error('image')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>


{{--        <div class="col-12">--}}
{{--            <label class="form-label">Published</label>--}}
{{--            <select  name="published" class="form-control form-select">--}}
{{--                <option value="1" {{old('published')=='1' ? 'selected' : ""}}>enable</option>--}}
{{--                <option value="0" {{old('published')=='0' ? 'selected' : ""}}>disable</option>--}}
{{--            </select>--}}
{{--            @error('email')--}}
{{--            <span class="text-danger">{{$message}}</span>--}}
{{--            @enderror--}}
{{--        </div>--}}

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>

@endsection


