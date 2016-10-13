@extends('layout/template')

@section('content')
 <h1>Peru BookStore</h1>
 <a href="{{url('/books/create')}}" class="btn btn-success">Create Book</a>
 <hr>
 @if(Session::has('success'))
<p class="alert alert-info">{{ Session::get('success') }}</p>
@endif
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>Name</th>
         <th>Price</th>
         <th>View</th>
          <th>Update</th>
          <th>Delete</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($books as $book)
         <tr>
             <td>{{ $book->id }}</td>
             <td>{{ $book->name }}</td>
             <td>{{ $book->price }}</td>
             <td><a href="{{url('books',$book->id)}}" class="btn btn-primary">View</a></td>
             <td><a href="{{route('books.edit',$book->id)}}" class="btn btn-warning">Update</a></td>
              <td>
             {{ Form::open(['method' => 'DELETE', 'route'=>['books.destroy', $book->id]]) }}
             {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
             {{ Form::close() }}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>
{{ $books->links() }}
@endsection