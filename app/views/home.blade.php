<li>{{ HTML::link('master', 'Register') }}</li>

<html>

<head>
  <style type="text/css">
      body{background:url(bb.jpg);
     background-size:200% 200%;
     -moz-background-size:100% 100%; /* Firefox 3.6 */
     background-repeat:no-repeat;
     word-wrap:break-word;}
     
      div{background:url(02.jpg);
    border:2px solid #a1a1a1;
          padding:10px 40px; 
          word-wrap:break-word;
          width:1200px;
          border-radius:25px;}
          li{color: red; background-color: white;}
     
     table.black{background:url(02.jpg);
                 padding-left:4cm;
                 padding-right:4cm;}
                 
     div.ani{width:120px;
          height: 5px;
          background:grey;
          position:relative;
          animation:myfirst 15s;
          -moz-animation:myfirst 15s; /* Firefox */
          -webkit-animation:myfirst 15s; /* Safari and Chrome */
          -o-animation:myfirst 15s; /* Opera */}
          
      @keyframes myfirst{
  0%   {background:grey; left:0px; top:0px;}
        20%  {background:yellow; left:210px; top:0px;}
        40%  {background:lightblue; left:420px; top:0px;}
        60%  {background:green; left:730px; top:0px;}
        80%  {background:red; left:940px; top:0px;}
      100% {background:grey; left:1150px; top:0px;}}
  
      @-moz-keyframes myfirst /* Firefox */{
  0%   {background:grey; left:0px; top:0px;}
        20%  {background:yellow; left:210px; top:0px;}
        40%  {background:lightblue; left:420px; top:0px;}
        60%  {background:green; left:730px; top:0px;}
        80%  {background:red; left:940px; top:0px;}
      100% {background:grey; left:1150px; top:0px;}}
              
      @-webkit-keyframes myfirst /* Safari and Chrome */{
        0%   {background:grey; left:0px; top:0px;}
        20%  {background:yellow; left:210px; top:0px;}
        40%  {background:lightblue; left:420px; top:0px;}
        60%  {background:green; left:730px; top:0px;}
        80%  {background:red; left:940px; top:0px;}
      100% {background:grey; left:1150px; top:0px;}}
     
  </style>
</head>

<body>

<font color="black" />
  <div class="ani">Track Attendance</div>
<font size="6" color="white" />
    <center>
      <div><h1>
      Attendance Tracker
      </h1></div>
    <br /><br /><br />

    <h1>Login</h1>

    <!-- if there are login errors, show them here -->
    
<!--teacher ------------------------------------------------------------------------------------->

{{ Form::open(array('url' => '/')) }}
@if (Session::get('loginError'))
    <div class="alert alert-danger">{{ Session::get('loginError') }}</div>
    @endif

<table align='left' class="black" width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td colspan="3"><strong><font  size=6 color="white">Teacher Login</font></strong></td>
</tr>
<tr>
<td width="78"><font color="white" size=5 >{{ Form::label('username', 'username') }}</font></td>
<td width="6"><font color="white">:</font></td>
<td width="294">{{ Form::text('username', Input::old('username'), array('id' => 'username')) }}</td>

</tr>
<tr>
<td><font size=5 color="white">{{ Form::label('password', 'password') }}</font></td>
<td><font color="white">:</font></td>
<td>{{ Form::text('password', Input::old('password'), array('id' => 'mypassword')) }}</td>
</font>
</tr>
<!--<tr>
<td><font size=5 color="white">Sub Code</font></td>
<td><font color="white">:</font></td>
</font>
</tr>
<tr>-->
 
<td align='right'>{{ Form::submit('Login!') }}</td>
</tr>
</table>
{{ Form::close() }}
<!#-----------------------------------------------------------------------------------------------

#student --------------------------------------------------------------------------------------->
{{ Form::open(array('url' => '/')) }}
<table align='right' class="black" width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td colspan="3"><strong><font  size=6 color="white">Students</font></strong></td>
</tr>
<tr>
<td width="78"><font color="white" size=5 >{{ Form::label('Username', 'Username') }}</font></td>
<td width="6"><font color="white">:</font></td>
<td width="294">{{ Form::text('susername', Input::old('susername'), array('id' => 'usn')) }}</td>
</tr>
<tr>
<td align='right'>{{ Form::submit('Check!',array('align'=>'right')) }}</td>
</tr>
</table>
{{ Form::close() }}
<!#------------------------------------------------------------------------------------------------>

</body>
</html>
