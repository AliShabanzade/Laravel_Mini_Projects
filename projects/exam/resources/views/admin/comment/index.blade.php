@extends('admin.layout.base')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">name</th>
            <th scope="col">commentable_type</th>
            <th scope="col">commentable_id</th>
            <th scope="col">user_id</th>
            <th scope="col">published</th>


{{--            <th scope="col">body</th>--}}
{{--            <th scope="col">Created at</th>--}}


        </tr>
        </thead>
        <tbody>
        @foreach ($comments as $comment)
            <tr>

                <th scope="row">{{$comment->id}}</th>
                <td>{{$comment->name}}</td>
                <td>{{$comment->commentable_type}}</td>
                <td>{{$comment->commentable_id}}</td>
                <td>{{$comment->user->name??'not fond'}}</td>
                <td>{{$comment->published}}</td>
                <td>{{$comment->published}}</td>
{{--                <td>{{$comment->body}}</td>--}}
{{--                <td>{{$comment->created_at}}</td>--}}





                <td>
                    <div class="btn-group btn-group-sm">
                        <a href="{{route('admin.comment.show' , $comment->id)}}" class="btn btn-primary">show</a>
                        <a href="{{route('admin.comment.edit' , $comment->id)}}" class="btn btn-info">Edit</a>
                        <form action="{{route('admin.comment.destroy' , $comment->id)}}" method="post">
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
