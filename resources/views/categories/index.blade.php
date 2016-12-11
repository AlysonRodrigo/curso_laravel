@extends('app')

@section('content')
    <div class="container">
        <h1>Categories</h1>

        <a href="{{ route('admin.categories.create') }}" class="btn btn-success">New category</a>
        <br>
        <br>

        <table class="table">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Description</td>
                <td>Action</td>
            </tr>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>
                    <a href="{{ route('admin.categories.destroy',['id'=>$category->id]) }}">Delete</a> |
                    <a href="{{ route('admin.categories.edit',['id'=>$category->id]) }}">Edit</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection