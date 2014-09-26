 
@extends('student.student')
@section('main')
<h1>Edit Book</h1>
{{ Form::model($book, array('method' => 'PATCH', 
'route' =>array('teacher.update', $book->id))) }}
 
<ul>
    <li>
        {{ Form::label('Student ID', 'Student ID:') }}
        {{ Form::text('id') }}
    </li>
    <li>
        {{ Form::label('Name', 'Name:') }}
        {{ Form::text('susername') }}
    </li>
    <li>
        {{ Form::label('ClassTeacher', 'ClassTeacher:') }}
        {{ Form::text('ClassTeacher') }}
    </li>
    
    <li>
        {{ Form::submit('Update', array('class' => 
                 'btn btn-warning'))}}
        {{ link_to_route('student.show', 'Cancel', $book->
                  id,array('class' => 'btn btn-danger')) }}
    </li>
</ul>
{{ Form::close() }}
@if ($errors->any())
<ul>
    {{implode('',$errors->all('<li class="error">:message</li>'))}}
</ul>
@endif
@stop