


    
  <html>
<head>

	{{ HTML::style('master/syl.css') }}
<body>
<div id="menu-wrapper">
	<div id="menu">
		<ul>
			
			 
			 
			
			 @if(Auth::check())
    <li>Now login {{ HTML::link('logout', 'Logout (' . Auth::user()->username . ')') }}</li>
@else
   
  <li>{{ HTML::link('/', 'login') }}</li> 
@endif
			<li><a href="{{ URL::route('post-add-register') }}">Register</a></li>
		</div>
	<!-- end #menu --> 
</div>
 
<div id="banner"><a href="#">{{ HTML::image('master/images/url.jpg','samp',array('height'=>300,'width'=>1200)) }}</a></div>