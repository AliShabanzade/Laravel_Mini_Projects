@extends('exam.resources.views.admin.layout.base')
@section('content')

        <form class="row g-3" action="{{route('admin.blog.update', $blog->id)}}" method="post"  novalidate>
            @csrf
            @method('PATCH')
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Title</label>
                <input type="text" name="title" value="{{$blog->title}}" class="form-control" >
                @error('title')
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





