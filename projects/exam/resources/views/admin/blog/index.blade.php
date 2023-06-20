@extends('admin.layout.base')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">publisher name</th>
            <th scope="col">name</th>
            <th scope="col">description</th>
            <th scope="col">body</th>
            <th scope="col">Created at</th>
            <th scope="col">Updated at</th>
            <th scope="col">category id</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($blogs as $blog)
            <tr>

                <th scope="row">{{$blog->id}}</th>
                <td>{{$blog->user->name??'not fond'}}</td>
                <td>{{$blog->name}}</td>
                <td>{{$blog->description}}</td>
                <td>{{$blog->body}}</td>
                <td>{{$blog->created_at}}</td>
                <td>{{$blog->updated_at}}</td>
                <td>{{$blog->category_id}}</td>

                <td>
                    <div class="btn-group btn-group-sm">
                        <a href="{{route('admin.blog.show' , $blog->id)}}" class="btn btn-primary">show</a>
                        <a href="{{route('admin.blog.edit' , $blog->id)}}" class="btn btn-info">Edit</a>
                        <form action="{{route('admin.blog.destroy' , $blog->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>

                    </div>
                </td>
            </tr>
    @endforeach

        </tbody>
    </table>




@endsection
