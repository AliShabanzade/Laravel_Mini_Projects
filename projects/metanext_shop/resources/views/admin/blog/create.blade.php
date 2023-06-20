@extends('exam.resources.views.admin.layout.base')

@section('content')

    <form class="row g-3" action="{{route('admin.blog.store')}}" method="post"  novalidate>
        @csrf
        <div class="col-md-12">
            <label  class="form-label">Title</label>
            <input type="text" name="title" value="{{old('title')}}" class="form-control" >
            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>


        <div class="col-md-12">
            <label class="form-label">Body</label>
            <textarea name="body"  class="form-control" >{!! old('body') !!}</textarea>
            @error('body')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-12">
            <label class="form-label">Published</label>
            <select  name="published" class="form-control form-select">
                <option value="1" {{old('published')=='1' ? 'selected' : ""}}>enable</option>
                <option value="0" {{old('published')=='0' ? 'selected' : ""}}>disable</option>
            </select>
            @error('published')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>

@endsection


