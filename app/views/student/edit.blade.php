 
@extends('student.student')
@section('main')
<h1>Edit Book</h1>
 
{{ Form::model($book, array('method' => 'PATCH', 
'route' =>array('student.update', $book->id))) }}
<ul>
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
        {{ Form::select('language', array('0' => 
          'Select a Level', '1' => 'English', '2' => 'Spanish'), 
           null, array('class' => 'form-control')) }}
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