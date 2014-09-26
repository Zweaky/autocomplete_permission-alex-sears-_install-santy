@extends('main')
@section('content')
	<div class='form-container'>
		{{ Form::open(array("URL::route('post-add-register')")) }}
		<div class="form-header">
			<h2>Teacher Register</h2>
		</div>

		<div class="fields"> 
			{{ Form::label('email', 'E-Mail Address') }}
			{{ Form::text('email') }}

			@if($errors->has('email'))
				<p class="error">{{ $errors->first('email') }}</p>
			@endif
		</div>	
		<div class="fields"> 
			{{ Form::label('username', 'username') }}
			{{ Form::text('username') }}
			@if($errors->has('username'))
				<p class="error">{{ $errors->first('username') }}</p>
			@endif
		</div>	
		<div class="fields"> 
			{{ Form::label('password', 'password') }}
			{{ Form::text('password') }}
			@if($errors->has('password'))
				<p class="error">{{ $errors->first('password') }}</p>
			@endif
		</div>
			
		<div class="fields"> 
			<label>&nbsp;</label>
			{{ Form::submit('Submit',array('class'=>'button')) }}
		</div>			
		{{ Form::close()}}
	</div>
	<script type="text/javascript">
	$(document).ready(function(){
		//alert("working");
	});
	</script>
@stop
