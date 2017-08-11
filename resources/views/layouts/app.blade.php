<!DOCTYPE html>
<html lang="fr">
	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Seedbox</title>
    	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{url('css/main.css')}}" rel="stylesheet">
		<!--[if lt IE 9]>
      		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    	<![endif]-->
	</head>
  	<body>
    	<!-- Static navbar -->
		<nav class="navbar navbar-inverse navbar-static-top">
      		<div class="container">
        		<div class="navbar-header">
          			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            			<span class="sr-only">Menu</span>
            			<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
          			</button>
          			<a class="navbar-brand" href="{{url('/')}}">Seedbox</a>
        		</div>
        		<div id="navbar" class="navbar-collapse collapse">
          			<ul class="nav navbar-nav">
          				{{url()->current()}}
            			<li{!!(url()->current() == url('/')) ? ' class="active"' : ''!!}><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            			<li{!!(url()->current() == url('/newfile')) ? ' class="active"' : ''!!}><a href="{{url('/newfile')}}"><span class="glyphicon glyphicon-plus-sign"></span> Add File</a></li>
            			<li {!!((url()->current() == url('/users')) || (strpos(url()->current(), url('users/edit')) !== false)) ? ' class="active"' : ''!!}><a href="{{url('/users')}}"><span class="glyphicon glyphicon-user"></span> Users</a></li>
          			</ul>
          			<ul class="nav navbar-nav navbar-right">
          				<li><span class="navbar-text">Username <a href="{{url('/logout')}}"><i class="glyphicon glyphicon-log-out"></i></a></span></li>
          			</ul>
        		</div>
      		</div>
    	</nav>
    	
    	<div class="wrapper">
    		<div class="container">
    			@yield('content')
    		</div>
    	</div>

    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<script src="{{url('js/bootstrap.min.js')}}"></script>
    	@yield('js')
	</body>
</html>