@extends('admin.layout.base')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">name</th>
            <th scope="col">created At</th>
            <th scope="col">Updated At</th>

            {{--            <th scope="col">body</th>--}}
            {{--            <th scope="col">Created at</th>--}}


        </tr>
        </thead>
        <tbody>brand
        @foreach ($brands as $brand)
            <tr>

                <th scope="row">{{$brand->id}}</th>
                <td>{{$brand->name}}</td>
                <td>{{$brand->created_at}}</td>
                <td>{{$brand->updated_at}}</td>

                {{--                <td>{{$comment->body}}</td>--}}
                {{--                <td>{{$comment->created_at}}</td>--}}





                <td>
                    <div class="btn-group btn-group-sm">
                        <a href="{{route('admin.brand.show' , $brand->id)}}" class="btn btn-primary">show</a>
                        <a href="{{route('admin.brand.edit' , $brand->id)}}" class="btn btn-info">Edit</a>
                        <form action="{{route('admin.brand.destroy' , $brand->id)}}" method="post">
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
