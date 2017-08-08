@extends('layouts.app')

@section('content')
<h2>Recently added</h2>
<ul class="list-unstyled list-inline">
	<li class="app-item">
		<div class="line"><img src="https://images-na.ssl-images-amazon.com/images/M/MV5BNzI5MzM3MzkxNF5BMl5BanBnXkFtZTgwOTkyMjI4MTI@._V1_UX182_CR0,0,182,268_AL_.jpg" class="img-responsive" /></div>
		<h3 class="line">Alien Covenant (2017)</h3>
		<div class="small line">By username</div>
		<div class="line"><span class="label label-warning">Movie</span> <span class="label label-info">In progress</span></div>
	</li>
	<li class="app-item">
		<div class="line"><img src="https://images-na.ssl-images-amazon.com/images/M/MV5BMTQ4MjA3MzUwOF5BMl5BanBnXkFtZTgwNDU1MjMxNjE@._V1_UY268_CR4,0,182,268_AL_.jpg" class="img-responsive" /></div>
		<h3 class="line">Zoo</h3>
		<h4 class="line">S03E06</h4>
		<div class="small line">By username</div>
		<div class="line"><span class="label label-danger">TV show</span> <span class="label label-success">Completed</span></div>
	</li>
	<li class="app-item">
		<div class="line"><img src="https://dg31sz3gwrwan.cloudfront.net/poster/326887/1198331-4-optimized.jpg" class="img-responsive" /></div>
		<h3 class="line">The mist</h3>
		<h4 class="line">S01E07</h4>
		<div class="small line">By username</div>
		<div class="line"><span class="label label-danger">TV show</span> <span class="label label-success">Completed</span></div>
	</li>
</ul>

<h2>My movies</h2>
<ul class="list-unstyled list-inline">
	<li class="app-item">
		<div class="line"><img src="https://images-na.ssl-images-amazon.com/images/M/MV5BNzI5MzM3MzkxNF5BMl5BanBnXkFtZTgwOTkyMjI4MTI@._V1_UX182_CR0,0,182,268_AL_.jpg" class="img-responsive" /></div>
		<h3 class="line">Alien Covenant (2017)</h3>
		<div class="small line">By username</div>
		<div class="line"><span class="label label-warning">Movie</span> <span class="label label-info">In progress</span></div>
	</li>
</ul>

<h2>My TV shows</h2>
<ul class="list-unstyled list-inline app-list">
	<li class="app-item">
		<div class="line"><img src="https://images-na.ssl-images-amazon.com/images/M/MV5BMTQ4MjA3MzUwOF5BMl5BanBnXkFtZTgwNDU1MjMxNjE@._V1_UY268_CR4,0,182,268_AL_.jpg" class="img-responsive" /></div>
		<h3 class="line">Zoo</h3>
		<h4 class="line">S03E06</h4>
		<div class="small line">By username</div>
		<div class="line"><span class="label label-danger">TV show</span> <span class="label label-success">Completed</span></div>
	</li>
	<li class="app-item">
		<div class="line"><img src="https://dg31sz3gwrwan.cloudfront.net/poster/326887/1198331-4-optimized.jpg" class="img-responsive" /></div>
		<h3 class="line">The mist</h3>
		<h4 class="line">S01E07</h4>
		<div class="small line">By username</div>
		<div class="line"><span class="label label-danger">TV show</span> <span class="label label-success">Completed</span></div>
	</li>
	<li class="app-item">
		<div class="line no-poster"><span class="glyphicon glyphicon-film"></span></div>
		<h3 class="line">Teen Wolf</h3>
		<h4 class="line">S06E12</h4>
		<div class="small line">By username</div>
		<div class="line"><span class="label label-danger">TV show</span> <span class="label label-success">Completed</span></div>
	</li>
</ul>
@endsection