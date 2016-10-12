@extends('layout.template')
@section('content')
    <h1>Update Book</h1>
    {!! Form::model($book,['method' => 'PATCH','route'=>['books.update',$book->id]]) !!}
    <div class="form-group">
        {!! Form::label('Name', 'Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Price', 'Price:') !!}
        {!! Form::text('price',null,['class'=>'form-control']) !!}
    </div>
   
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
