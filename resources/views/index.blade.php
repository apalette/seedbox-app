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
            			<li class="active"><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            			<li><a href="{{url('/create')}}"><span class="glyphicon glyphicon-plus-sign"></span> Add File</a></li>
            			<li><a href="{{url('/users')}}"><span class="glyphicon glyphicon-user"></span> Users</a></li>
          			</ul>
          			<ul class="nav navbar-nav navbar-right">
          				<li><span class="navbar-text">Username <a href="{{url('/logout')}}"><i class="glyphicon glyphicon-log-out"></i></a></span></li>
          			</ul>
        		</div>
      		</div>
    	</nav>
    	
    	<div class="wrapper">
    		<div class="container">
    			<h2>Ajoutés récemments</h2>
    			<ul class="list-unstyled list-inline">
    				<li class="app-item">
    					<div class="line"><img src="https://images-na.ssl-images-amazon.com/images/M/MV5BNzI5MzM3MzkxNF5BMl5BanBnXkFtZTgwOTkyMjI4MTI@._V1_UX182_CR0,0,182,268_AL_.jpg" class="img-responsive" /></div>
    					<h3 class="line">Alien Covenant (2017)</h3>
    					<div class="small line">Par username</div>
    					<div class="line"><span class="label label-warning">Film</span> <span class="label label-info">En cours</span></div>
    				</li>
    				<li class="app-item">
    					<div class="line"><img src="https://images-na.ssl-images-amazon.com/images/M/MV5BMTQ4MjA3MzUwOF5BMl5BanBnXkFtZTgwNDU1MjMxNjE@._V1_UY268_CR4,0,182,268_AL_.jpg" class="img-responsive" /></div>
    					<h3 class="line">Zoo</h3>
    					<h4 class="line">S03E06</h4>
    					<div class="small line">Par username</div>
    					<div class="line"><span class="label label-danger">Série</span> <span class="label label-success">Completed</span></div>
    				</li>
    				<li class="app-item">
    					<div class="line"><img src="https://dg31sz3gwrwan.cloudfront.net/poster/326887/1198331-4-optimized.jpg" class="img-responsive" /></div>
    					<h3 class="line">The mist</h3>
    					<h4 class="line">S01E07</h4>
    					<div class="small line">Par username</div>
    					<div class="line"><span class="label label-danger">Série</span> <span class="label label-success">Completed</span></div>
    				</li>
    			</ul>
    			
    			<h2>Mes Films</h2>
    			<ul class="list-unstyled list-inline">
    				<li class="app-item">
    					<div class="line"><img src="https://images-na.ssl-images-amazon.com/images/M/MV5BNzI5MzM3MzkxNF5BMl5BanBnXkFtZTgwOTkyMjI4MTI@._V1_UX182_CR0,0,182,268_AL_.jpg" class="img-responsive" /></div>
    					<h3 class="line">Alien Covenant (2017)</h3>
    					<div class="small line">Par username</div>
    					<div class="line"><span class="label label-warning">Film</span> <span class="label label-info">En cours</span></div>
    				</li>
    			</ul>
    			
    			<h2>Mes séries</h2>
    			<ul class="list-unstyled list-inline app-list">
    				<li class="app-item">
    					<div class="line"><img src="https://images-na.ssl-images-amazon.com/images/M/MV5BMTQ4MjA3MzUwOF5BMl5BanBnXkFtZTgwNDU1MjMxNjE@._V1_UY268_CR4,0,182,268_AL_.jpg" class="img-responsive" /></div>
    					<h3 class="line">Zoo</h3>
    					<h4 class="line">S03E06</h4>
    					<div class="small line">Par username</div>
    					<div class="line"><span class="label label-danger">Série</span> <span class="label label-success">Completed</span></div>
    				</li>
    				<li class="app-item">
    					<div class="line"><img src="https://dg31sz3gwrwan.cloudfront.net/poster/326887/1198331-4-optimized.jpg" class="img-responsive" /></div>
    					<h3 class="line">The mist</h3>
    					<h4 class="line">S01E07</h4>
    					<div class="small line">Par username</div>
    					<div class="line"><span class="label label-danger">Série</span> <span class="label label-success">Completed</span></div>
    				</li>
    				<li class="app-item">
    					<div class="line no-poster"><span class="glyphicon glyphicon-film"></span></div>
    					<h3 class="line">Teen Wolf</h3>
    					<h4 class="line">S06E12</h4>
    					<div class="small line">Par username</div>
    					<div class="line"><span class="label label-danger">Série</span> <span class="label label-success">Completed</span></div>
    				</li>
    			</ul>
    		</div>
    	</div>

    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<script src="{{url('js/bootstrap.min.js')}}"></script>
	</body>
</html>