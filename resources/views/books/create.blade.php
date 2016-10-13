@extends('layout.template')
@section('content')
    <h1>Create Book</h1>
    
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    {{ Form::open(['url' => 'books','files'=>'true']) }}
    <div class="form-group">
        {{ Form::label('Name', 'Name:') }}
        {{ Form::text('name',null,['class'=>'form-control']) }}
        {{ $errors->first('name') }}
    </div>
    <div class="form-group">
        {{ Form::label('Price', 'Price:') }}
        {{ Form::text('price',null,['class'=>'form-control']) }}
    </div>
   <div class="form-group">
        {{ Form::label('Image', 'Image:') }}
        {{ Form::file('photo',null,['class'=>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::submit('Save', ['class' => 'btn btn-primary form-control']) }}
    </div>
    {{ Form::close() }}
@stop