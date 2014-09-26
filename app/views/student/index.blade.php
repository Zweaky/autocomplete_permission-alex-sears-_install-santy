@extends('student/student')
@section('main')
<h1><center>Welcome to Student Details </center></h1>
<p>{{ link_to_route('student.create', 'Create new book') }}</p>
@if ($booksList->count())
<table class="table table-striped table-bordered">
    <thead>
    <tr>
       
        <th>Id</th>
        <th>StudentName</th>
        <th>StudentFatherName</th>
        <th>Class</th>
        <th>Sex</th>
        <th>Language</th>
    </tr>
    </thead>
    
    <tbody>
    @foreach ($booksList as $book)
    <tr>
      <td>{{ $book->id }}</td>
      <td>{{ $book->sname }}</td>
      <td>{{ $book->sfathername }}</td>
      <td>{{ $book->sclass }}</td>
      <td>{{ $book->ssex }}</td>
      <td>@if ($book->language==1){{'Malayalam'}} @else{{'English'}}
                @endif</td>

      <!-- <td>{{ link_to_route('student.show', 'Read', array($book->id),
                array('class' => 'btn btn-primary')) }}</td> -->
      <td>{{ link_to_route('student.edit', 'Update', array($book->id),
                array('class' => 'btn btn-warning')) }}</td>
      <td>
        {{ Form::open(array('method'=> 'DELETE', 'route' =>
              array('student.destroy', $book->id))) }}
        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
        {{ Form::close() }}
      </td>
      
    </tr>
    @endforeach
    </tbody>
</table>
@else
There are no books
@endif
@stop