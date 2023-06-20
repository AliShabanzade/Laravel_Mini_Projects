@extends('exam.resources.views.admin.layout.base')

@section('content')
{{--    {{$products[1]}}--}}
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">created with</th>
            <th scope="col">name</th>
            <th scope="col">published</th>
            <th scope="col">price</th>
            <th scope="col">view</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->user->name??'not found'}}</td>
            <td>{{$product->title}}</td>
            <td>{{$product->published}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->views}}</td>

            <td>
                <div class="btn-group btn-group-sm">
                    <a href="{{route('admin.product.show' , $product->id)}}" class="btn btn-primary">show</a>
                    <a href="{{route('admin.product.edit' , $product->id)}}" class="btn btn-info">Edit</a>
                    <form action="{{route('admin.product.destroy' , $product->id)}}" method="post">
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
