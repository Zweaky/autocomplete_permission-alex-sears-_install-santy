@extends('student.student')
@section('main')
<h1>Create Book</h1>
{{ Form::open(array('route' => 'student.store')) }}
<ul>
    <li>
        {{ Form::label('RollNo', 'Roll notes_body(server, mailbox, msg_number):') }}
        {{ Form::text('id') }}
    </li>
   <li>
        {{ Form::label('studentName', 'studentName:') }}
        {{ Form::text('sname') }}
    </li>
    <li>
        {{ Form::label('FatherName', 'FatherName:') }}
        {{ Form::text('sfathername') }}
    </li>
    <li>
        {{ Form::label('Class', 'Class:') }}
        {{ Form::text('sclass') }}
    </li>
    <li>
        {{ Form::label('Sex', 'Sex:') }}
        {{ Form::text('ssex') }}
    </li>
    <li>
        {{ Form::label('Language', 'Language') }}
        {{ Form::select('language', array('0' => 'Select a Level', 
           '1' => 'English', '2' => 'Spanish'), Input::old('language'), 
           array('class' => 'form-control')) }}
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