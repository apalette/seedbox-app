@extends('layouts.app')

@section('content')
<h2>All users</h2>
<div class="form-wrapper">
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th></th>
		       		<th>Firstname</th>
		        	<th>Lastname</th>
		        	<th>Email</th>
		        	<th>Created</th>
		        	<th>Updated</th>
		        	<th></th>
		        	<th></th>
		      	</tr>
			</thead>
		    <tbody>
				<tr>
					<td>
						<a class="btn btn-primary btn-xs" href="{{url('/users/edit/1')}}"><span class="glyphicon glyphicon-pencil"></span></a>
						<a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#modal_delete_1"><span class="glyphicon glyphicon-trash"></span></a>
					</td>
		        	<td>John</td>
		        	<td>Doe</td>
		        	<td>john@example.com</td>
		        	<td>01/21/2016 18:35</td>
		        	<td>01/21/2016 18:35</td>
		        	<td><span class="text-danger">locked</span></td>
		        	<td><a class="btn btn-success btn-xs" href="#"><span class="glyphicon glyphicon-ok"></span> unlock</a></td>
		        </tr>
		      	<tr>
		      		<td>
						<a class="btn btn-primary btn-xs" href="{{url('/users/edit/1')}}"><span class="glyphicon glyphicon-pencil"></span></a>
						<a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#modal_delete_1"><span class="glyphicon glyphicon-trash"></span></a>
					</td>
		      		<td>Mary</td>
		        	<td>Moe</td>
		        	<td>mary@example.com</td>
		        	<td>01/21/2016 18:35</td>
		        	<td>01/21/2016 18:35</td>
		        	<td><span class="text-warning">pending</span></td>
		        	<td></td>
		      	</tr>
		      	<tr>
		      		<td>
						<a class="btn btn-primary btn-xs" href="{{url('/users/edit/1')}}"><span class="glyphicon glyphicon-pencil"></span></a>
						<a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#modal_delete_1"><span class="glyphicon glyphicon-trash"></span></a>
					</td>
		      		<td>July</td>
		        	<td>Dooley</td>
		        	<td>july@example.com</td>
		        	<td>01/21/2016 18:35</td>
		        	<td>01/21/2016 18:35</td>
		        	<td><span class="text-success">active</span></td>
		        	<td><a class="btn btn-danger btn-xs" href="#"><span class="glyphicon glyphicon-remove"></span> lock</a></td>
		    	</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_delete_1">
	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title">Delete an account</h4>
      		</div>
      		<div class="modal-body">
        		<p>Are you sure?</p>
      		</div>
      		<div class="modal-footer">
      			<form>
        			<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        			<button type="button" class="btn btn-primary">Yes, delete!</button>
        		</form>
      		</div>
		</div>
  	</div>
</div>


<hr/>
<h2>Create an account</h2>
<form class="form-wrapper">
	<div class="row">
		<div class="col-sm-6 col-md-5">
			<div class="form-group">
				<label for="first_name">Firstname</label>
				<input type="text" class="form-control" id="first_name" placeholder="Enter user firstname">
			</div>		
		</div>
		<div class="col-sm-6 col-md-5">
			<div class="form-group">
				<label for="last_name">Lastname</label>
				<input type="text" class="form-control" id="last_name" placeholder="Enter user lastname">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-md-5">
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" id="email" placeholder="Enter user email">
			</div>		
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 text-right">
			<a class="btn btn-primary">Create</a>
		</div>
	</div>
</form>
@endsection