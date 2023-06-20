@extends('admin.layout.base')
@section('content')

        <form class="row g-3" action="{{route('admin.blog.update', $blog->id)}}" method="post"  novalidate>
            @csrf
            @method('PATCH')
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">name</label>
                <input type="text" name="name" value="{{$blog->name}}" class="form-control" >
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="col-12">
                <label class="form-label">Body</label>
                <textarea   name="body" class="form-control">{!!$blog->body!!}</textarea>
                @error('body')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


            <div class="col-12">
                <label class="form-label">description</label>
                <textarea   name="description" class="form-control">{!!$blog->description!!}</textarea>
                @error('description')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="col-12">
                <label class="form-label">user id</label>
                <textarea   name="user_id" class="form-control">{!!$blog->user_id!!}</textarea>
                @error('user_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


            <div class="col-12">
                <label class="form-label">category id</label>
                <textarea   name="category_id" class="form-control">{!!$blog->category_id!!}</textarea>
                @error('category_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="col-12">
                <label class="form-label">Published</label>
                <select name="published" class="form-control form-select">
                    <option value="1" {!! $blog->published == '0'? 'disable' : 'enable' !!}>enable</option>
                    <option value="0" {!! $blog->published == '0'? 'disable' : 'enable' !!}>disable</option>
                </select>
                @error('body')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


            <div class="col-12">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>

    @endsection





