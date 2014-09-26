@extends('teacher.student')
@section('main')
<h1>Create Class Attendance </h1>
{{ Form::open(array('route' => 'teacher.store')) }}
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
        {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
    </li>
</ul>
{{ Form::close() }}
@if ($errors->any())
<ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif
@stop