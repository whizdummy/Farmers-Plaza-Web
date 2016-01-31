<!DOCTYPE html>
 	<html lang="en">
 	<head>
 		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
 		<meta charset="UTF-8">
 		<title>Farm2D</title>
		
		<!-- CSS -->
 		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 		<link rel="stylesheet" type="text/css" href="{!!URL::asset('css/materialize.css')!!}" media="screen,projection">
 		<link rel="stylesheet" type="text/css" href="{!!URL::asset('css/style.css')!!}" media="screen,projection">
 		<link rel="stylesheet" type="text/css" href="{!!URL::asset('css/mainStyle.css')!!}" media="screen,projection">
 		<link rel="shortcut icon" href="{!! URL::asset('pictures/logo.png') !!}" />

 		<!--  Scripts-->
 		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 		<script src="{!! URL::asset('js/materialize.js') !!}"></script>
 		<script src="{!! URL::asset('js/init.js') !!}"></script>

 		<div class="navbar">
 		  <nav class="white">
 		    <div class="nav-wrapper" >
 		    <img src="{!! URL::asset('pictures/navIcon.png') !!}">
 		      <ul class="right hide-on-med-and-down" align="middle">
 		      	@yield('navbar')
 		      	<li><a href="#" class="green-text">ABOUT</a></li>

 		      	@if(Session::get('username') != null)
 		      		<li class="{{ strpos(Request::url(), 'maintenance') !== false ? 'active' : '' }}"><a href="{{URL::to('/maintenance')}}" class="green-text text-darken-4">ADD CROPS</a></li>
					<li class="{{ strpos(Request::url(), 'tasks') !== false ? 'active' : '' }}"><a href="{{URL::to('tasks')}}" class="green-text text-darken-4 ">ADD TASK</a></li>
 		      		<li><a class="waves-effect waves-light btn green darken-4 white-text" href="{{URL::to('/logout')}}">LOG OUT</a></li>
 		      		
 		      		@else 
 		      			<li><a class="waves-effect waves-light btn green darken-4 white-text" href="{{URL::to('/login')}}">LOG IN</a></li>
 		      	@endif
 		      </ul>
 		    </div>
 		  </nav>
 		</div>
 	</head>
 	<body class="green darken-4">
 		@yield('mainBody')
 	</body>

 	<footer class="footer page-footer green darken-4">
 	      <div class="container">
 	      <div class="row">
 	        <div class="col l6 s12 green  darken-4">
 	        <h5 class="white-text">Farm2D.com</h5>
 	        <p class="grey-text text-lighten-4">Farm2D.com is the world's first Farm Management System with amazing 2D Soil Mapping!</p>
 	        </div>
 	        <div class="col l4 offset-l2 s12 green  darken-4">
 	        <h5 class="white-text">Links</h5>
 	        <ul>
 	          <li><a class="grey-text text-lighten-3" href="#!">www.facebook.com/Farm2DOfficial</a></li>
 	          <li><a class="grey-text text-lighten-3" href="#!">www.twitter.com/@Farm2DOfficial</a></li>
 	          <li><a class="grey-text text-lighten-3" href="#!">www.Farm2DOfficial.com</a></li>
 	          <li><a class="grey-text text-lighten-3" href="#!">www.instagram.com/@Farm2DOfficial</a></li>
 	        </ul>
 	        </div>
 	      </div>
 	      </div>
 	      <div class="footer-copyright">
 	      <div class="container">
 	      (c) 2015 Copyright
 	      <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
 	      </div>
 	      </div>
 	  </footer>
 	</html>	