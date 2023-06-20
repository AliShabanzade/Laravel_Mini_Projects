@extends('admin.layout.base')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Family</th>
            <th scope="col">Mobile</th>
            <th scope="col">Email</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->family}}</td>
            <td>{{$user->mobile}}</td>
            <td>{{$user->email}}</td>
            <td>
                <div class="btn-group btn-group-sm">
                    <a href="{{route('admin.user.show' , $user->id)}}" class="btn btn-primary">show</a>
                    <a href="{{route('admin.user.edit' , $user->id)}}" class="btn btn-info">Edit</a>
                    <form action="{{route('admin.user.destroy' , $user->id)}}" method="post">
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
