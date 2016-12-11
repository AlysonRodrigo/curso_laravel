@extends('app')

@section('content')
    <div class="container">
        <h1>Products</h1>

        <a href="{{ route('admin.products.create') }}" class="btn btn-success">New Product</a>
        <br>
        <br>

        <table class="table">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Description</td>
                <td>Price</td>
                <td>Action</td>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <a href="{{ route('admin.products.destroy',['id'=>$product->id]) }}">Delete</a> |
                    <a href="{{ route('admin.products.edit',['id'=>$product->id]) }}">Edit</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection