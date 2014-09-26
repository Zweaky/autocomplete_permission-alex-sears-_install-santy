@extends('teacher/student')
@section('main')
<h1><center>Welcome to Student Attendance Management System </center></h1>
<!-- <p>{{ link_to_route('teacher.create', 'Create new book') }}</p> -->
@if ($booksList->count())
<table class="table table-striped table-bordered">
    <thead>
    <tr>
       
        <th>Id</th>
        <th>StudentName</th>
        <th>Attendance</th>
        <th>ClassTeacher</th>
        <th>date</th>
        <th>Language</th>
         <th>Mark</th>
    </tr>
    </thead>
   
    <tbody>
    @foreach ($booksList as $book)
    <tr>
      <td>{{ $book->id }}</td>
      <td>{{ $book->susername }}</td>
      <td>{{ $book->MarkAttendance  }}</td>
      <td>{{ $book->ClassTeacher }}</td>
      <td>{{ $book->date }}</td>
     <!--  <td>@if ($book->language==1){{'Malayalam'}} @else{{'English'}}
                @endif</td> -->

      <!-- <td>{{ link_to_route('student.show', 'Read', array($book->id),
                array('class' => 'btn btn-primary')) }}</td>
      <td>{{ link_to_route('student.edit', 'Update', array($book->id),
                array('class' => 'btn btn-warning')) }}</td>
      <td> -->
        <td>
        {{ Form::open(array('method'=> 'DELETE', 'route' =>
              array('teacher.destroy', $book->id))) }}
        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
        {{ Form::close() }}
      </td>
        <td>
     {{ Form::open(array('url' => 'teacher')) }}
     <p>
      
      {{ Form::hidden('id',$book->id) }}
    </p>
        {{ Form::submit('present', array('class' => 'btn btn-danger')) }}
        {{ Form::close() }}
      </td>
       <td>
     {{ Form::open(array('url' => 'teachers')) }}
     <p>
      
      {{ Form::hidden('id',$book->id) }}
    </p>
        {{ Form::submit('absent', array('class' => 'btn btn-danger')) }}
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