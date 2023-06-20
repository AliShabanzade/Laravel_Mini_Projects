@extends('admin.layout.base')
@section('content')
{{--{{ dd($comment) }}--}}
    <form class="row g-3" action="{{ route('admin.comment.update' , $comment->id)}}" method="post"  novalidate>
        @csrf
        @method('PATCH')
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">comment name</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control" >
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">commentable id</label>
            <input type="text" name="commentable_id" value="{{old('commentable_id')}}" class="form-control" >
            @error('commentable_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-6">



            <p>Please select comment Type</p>
            <input type="radio"  name="commentable_type" value="product">
            <label >product</label><br>
            <input type="radio" name="commentable_type" value="blog">
            <label >blog</label><br>
        </div>

        <div class="form-outline w-100">
                <textarea class="form-control" id="textAreaExample" rows="4"
                          style="background: #fff;"  name="body"  placeholder="لطفا کامنتی ارسال کنید"  ></textarea>
            <label class="form-label" for="textAreaExample">Message</label>
        </div>










        <div class="col-12">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>

@endsection





