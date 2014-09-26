

<!DOCTYPE html>
<html>
	<head>
		{{ HTML::style('register/css/normalize.css') }}
		{{ HTML::style('register/css/style.css') }}
		
	</head>
	<body>
		<div id="wrapper">
			<header>
				@include('layout.menu')
			</header>
			<div id="content">
				<div id="global">
					@if(Session::has('global'))
						<p>{{ Session::get('global') }}</p>
					@endif
				</div>
				@yield('content')
			</div>
			<footer>
				this is footer
			</footer>
		</div>
	</body>
</html>