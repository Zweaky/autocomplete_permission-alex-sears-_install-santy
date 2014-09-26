<!DOCTYPE html>
<html>
	<head>
      {{ HTML::style('master/syl.css') }}
		
	</head>
	<body>
		<div id="wrapper">
			<header>
				@include('header')
			</header>
			<div id="content">
				<div id="global">
					 <div id="header-wrapper">
                   <div id="header">
					@if(Session::has('global'))
						<p>{{ Session::get('global') }}</p>
					@endif
				</div>
				@yield('content')
			</div>
			<footer>
			@include('footer')
			</footer>
		</div>
	</body>
</html>