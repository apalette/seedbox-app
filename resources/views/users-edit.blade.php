@extends('layouts.app')

@section('content')
<h2><a href="{{url('/users')}}">Users</a> > Edit an account</h2>
<form class="form-wrapper">
	<div class="row">
		<div class="col-sm-6 col-md-5">
			<div class="form-group">
				<label for="first_name">Firstname</label>
				<input type="text" class="form-control" id="first_name" placeholder="Enter user firstname" value="Firstname">
			</div>		
		</div>
		<div class="col-sm-6 col-md-5">
			<div class="form-group">
				<label for="last_name">Lastname</label>
				<input type="text" class="form-control" id="last_name" placeholder="Enter user lastname" value="Lastname">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-md-5">
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" id="email" placeholder="Enter user email" value="Email">
			</div>		
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 text-right">
			<a class="btn btn-default" href="{{url('/users')}}">Cancel</a> <input class="btn btn-primary" type="submit" value="Edit" />
		</div>
	</div>
</form>
@endsection