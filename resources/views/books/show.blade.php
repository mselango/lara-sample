
@extends('layout/template')
@section('content')
    <h1>Book Show</h1>

    <form class="form-horizontal">
      
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="isbn" placeholder={{$book->name}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Price</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" placeholder={{$book->price}} readonly>
            </div>
        </div>
      

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('books')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
@stop