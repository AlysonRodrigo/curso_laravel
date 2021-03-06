@extends('app')

@section('content')
    <div class="container">
        <h1>Edit category: {{ $category->name }}</h1>

        @if($errors->any())
         <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
         </div>
        @endif

        {!! Form::open(['route'=>['admin.categories.update',$category->id],'method'=>'post']) !!}

        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name', $category->name, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('name','Description:') !!}
            {!! Form::textarea('description', $category->description, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Save Category',['class' => 'btn btn-primary form-control']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection