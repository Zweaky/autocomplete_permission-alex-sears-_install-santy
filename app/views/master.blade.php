<html>
<head>

	{{ HTML::style('master/syl.css') }}
<body>
<div id="menu-wrapper">
	<div id="menu">
		<ul>
			
			   <li>{{ HTML::link('student','student' ) }}</li>
			<li>{{ HTML::link('teacher','teacher' ) }}</li>
			
			 @if(Auth::check())
    <li>Now login {{ HTML::link('logout', 'Logout (' . Auth::user()->username . ')') }}</li>
     <li>{{ HTML::link('student','student' ) }}</li>
     <li>{{ HTML::link('student','student' ) }}</li>
@else
   
  <li>{{ HTML::link('/', 'login') }}</li> 
@endif
			<li><a href="{{ URL::route('post-add-register') }}">Register</a></li>
		</div>
	<!-- end #menu --> 
</div>
 
 



<div id="banner"><a href="#">{{ HTML::image('master/images/url.jpg','samp',array('height'=>300,'width'=>1200)) }}</a></div>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Programming<span>Exposure</span></a></h1>
			<p>Template design by <a href="#">Edu-Group</a></p>
		</div>
	</div>
    <div id="wrapper"> 
	<!-- end #header -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="sidebar">
					<ul>
						<li>
							<h2>Search Here:</h2>
							<div id="search" >
								<form method="get" action="#">
									<div>
										<input type="text" name="s" id="search-text" value="" />
										<input type="submit" id="search-submit" value="" />
									</div>
								</form>
							</div>
							<div style="clear: both;">&nbsp;</div>
						</li>
						<li>
							<h2></h2>
							<p>
{{ HTML::image('master/images/NirwanaEduGroupLogo copy.jpg','samp',array('height'=>239,'width'=>241)) }}</p>
						</li>
						<li>
							<h2>Categories</h2>
							<ul><li>Web Development</li>
								<li>Scripting Languages</li>
								<li>High Level Languages</li>
								<li>Database Tutorials</li>
								<li>Misc Technical Tutorials</li>
								<li>Computer Programming</li>
							</ul>
						</li>
						<li>
							<h2>WebDevelopment</h2>
							<ul>
							  <li><strong>SERVER SIDE CODING</strong></li>
								<li><a href="#">HTML</a></li>
								<li><a href="#">ASP</a></li>
								<li><a href="#">.NET WITH MVC 3</a></li>
								<li><a href="http://en.wikipedia.org/wiki/Java_%28programming_language%29" title="Java (programming language)">Java</a>,<a href="#"></a></li>
								
								<li><a href="#">PHP</a></li>
								
						  </ul>
						</li>
					  <li>
					    <h2>WebDevelopment</h2>
						  <ul>
						    <li><strong>CLIENT SIDE CODING</strong></li>
							  <li><a href="#">AJAZ</a></li>
							  <li><a href="#">JAVASCRIPT</a></li>
							  <li><a href="http://en.wikipedia.org/wiki/JQuery" title="JQuery">jQuery</a></li>
							  <li><a href="http://en.wikipedia.org/wiki/HTML5" title="HTML5">HTML5</a> and <a href="http://en.wikipedia.org/wiki/CSS3" title="CSS3">CSS3</a></li>
							  
						  </ul>
						</li>
					</ul>
				</div>
				<!-- end #sidebar -->
				<div id="content">
					<div class="post">
						<h2 class="title"><a href="#">Welcome to EDU GROUP</a></h2>
						<p class="meta"><span class="date">March 8, 2014</span><span class="posted">Posted by Iqbal</span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<p>Edu Group offers you best-in-class educational services. Our   expert counseling meets your needs and values, allowing you to pursue   your educational and professional goals.Educational Point assists you in   achieving all that you can in today's competitive academic and business   environment. It is an ever-expanding higher educational consultation   with multi cultural and multi lingual learning environment. Educational   Point has excellent links with future and higher education, industry and   commerce organizationss.....</p>
							<p class="links"><a href="#" class="button">Read More</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="button">Comments</a></p>
					  </div>
					</div>
					<div class="post">
						<h2 class="title"><a href="#">Learn HTML</a></h2>
						<p class="meta"><span class="date">February 10, 2013</span><span class="posted">Posted by <a href="#">Someone</a></span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<p><strong>HTML is the "mother tongue" of your browser</strong>                            </p>
							<p>To make a long story short, HTML was invented in 1990 by a scientist called Tim Berners-Lee. The purpose was to make it easier for scientists at different universities to gain access to each other's   research documents. The project became a bigger success than Tim   Berners-Lee had ever imagined. By inventing HTML he laid the foundation for the web as we know it today.</p>
                            <p>HTML is a language, which makes it possible to present information  (e.g. scientific research) on the Internet. What you see when you view a   page on the Internet is your browser's interpretation of HTML</p>
							<p class="links"><a href="#" class="button">Read More</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="button">Comments</a></p>
						</div>
					</div>
					<div class="post">
						<h2 class="title"><a href="#">lEARN PHP </a></h2>
						<p class="meta"><span class="date">February 08, 2013</span><span class="posted">Posted by <a href="#">Someone</a></span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<p id="pd1"><strong>The essentials for learning PHP:</strong></p>
							<p>Learning a new language (programming or otherwise) can be a bit overwhelming. Many people just don't know where to start and give up before they even begin. Learning PHP is NOT as overwhelming as it might seem, I promise you. Just take it one step at a time, and before you know it you'll be off and running. </a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.  Mauris quam enim, molestie in, rhoncus ut, lobortis a, est. Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum</p>
							<p>. </p>
							<p class="links"><a href="#" class="button">Read More</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="button">Comments</a></p>
					  </div>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				
				<div id="sidebar2">
					<ul>
						<li>
							<h2>SHARE LINK</h2>
							<p><a href="www.facebook.com"><img src="images.jpg" width="25" height="20"></a><a href="www.gmail.com"><img src="gmail.jpg" width="25" height="20"></a><a href="www.twitter.com"><img src="twitter.jpg" width="25" height="20"></a><a href="www.whatsupp.com"><img src="whatup.jpg" width="25" height="20"></a><a href="www.yahoo.com"><img src="yahoo.jpg" width="25" height="20"></a>
                           </p>
						</li>
						<li>
							<h2>Web hosting</h2>
							<ul>
							  <li>JustHost.Com</li>
								<li><a href="#">Web.Com</a></li>
								<li><a href="#">BlueHost</a></li>
								<li><a href="#">Hub</a></li>
								<li><a href="#">FatCow</a></li>
								<li><a href="#">iPage</a></li>
							</ul>
						</li>
					  <li>
							<h2>Books</h2>
							<ul>
							  
							  <li><a href="#">PHP</a></li>
								<li><a href="#">HTML</a></li>
								<li><a href="#">.NET</a></li>
								<li><a href="#">JAVASCRIPT</a></li>
								<li><a href="#">AJAZ</a></li>
								<li><a href="#">DATABASE</a></li>
							</ul>
						</li>
					  <li>
						<h2>Software</h2>
					    <ul>
						    DreamWeaver
					        <li><a href="#"></a></li>
							  <li>MicrosoftVisualstudio 2010</li>
							  <li><a href="#">Putty</a></li>
							  <li><a href="#">PaintShop Pro</a></li>
                               <li><a href="#">WS_FTP Pro</a></li>
                                <li><a href="#">NoteTabPro</a></li>
						  </ul>
						</li>
					</ul>
				</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page --> 
</div>
<div id="footer">
	<p>&copy; 2013 Sitename.com. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://www.freecsstemplates.org">FCT</a>.</p>
</div>
<!-- end #footer -->
</div>
</body>
</head>
</html>
