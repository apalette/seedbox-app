@extends('layouts.app')

@section('content')
<h2>Add a file to the list</h2>
<form class="form-wrapper">
	<div class="form-group">
    	<label for="item_type">Type</label>
    	<select class="form-control" id="item_type" required>
    		<option value="" selected disabled>Please select</option>
    		<option value="1" data-type="movie">Movie</option>
    		<option value="2" data-type="tv">TV show</option>
    	</select>
	</div>
	<div class="form-block form-block-type-tv hide">
		<h3>TV show informations</h3>
  		<div class="form-group">
    		<label for="tv_item_id">Name</label>
    		<select class="form-control" id="tv_item_id">
	    		<option value="" selected disabled>Please select</option>
	    		<option value="1">The Mist</option>
	    		<option value="2">Zoo</option>
	    		<optgroup label="Or ...">
	    			<option value="0">Create a new TV show</option>
	    		</optgroup>
	    	</select>
	    </div>
	    <div class="form-group hide" id="tv_item_name_block">
	    	<input type="text" class="form-control" id="tv_name" placeholder="Enter TV show name" />
    	</div>
		<div class="row">
			<div class="col-xs-12 col-sm-5">
				<div class="form-group">
					<label for="season-num">Season</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="small">Num :</i></span>
						<input type="number" class="form-control" id="season-num" min="1" max="50" placeholder="Enter season number">
					</div>
				</div>
				<div class="form-group">
					<input type="url" class="form-control" id="season-poster" placeholder="Enter season poster url">
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-sm-offset-1">
				<div class="form-group">
					<label for="episode-num">Episode</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="small">Num :</i></span>
						<input type="number" class="form-control span8" id="episode-num" min="1" max="50" placeholder="Enter episode number">
					</div>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="tv_item_name" placeholder="Enter episode name">
				</div>
			</div>
		</div>
	</div>
	<div class="form-block form-block-type-movie hide">
		<h3>Movie informations</h3>
	    <div class="form-group">
	    	<label for="movie_item_name">Name</label>
	    	<input type="text" class="form-control" id="movie_item_name" placeholder="Enter movie name" />
    	</div>
		<div class="form-group">
			<label for="movie_item_poster">Poster url</label>
	    	<input type="url" class="form-control" id="movie_item_poster" placeholder="Enter movie poster url">
		</div>
	</div>
	<div class="form-group">
    	<label for="item_url">File url</label>
    	<input class="form-control" id="item_url" type="url" placeholder="Enter video url" required />
	</div>
	<div class="form-group text-right">
		<input type="submit" class="btn btn-primary" value="Add" />
	</div>
</form>
@endsection

@section('js')
<script>
	$(document).ready(function(){
		$('#item_type').on('change', function(){
			var t = $(this).find('option:selected').data('type');
			$('.form-block').addClass('hide');
			$('.form-block input, .form-block select').removeAttr('required').removeAttr('pattern');
			$('.form-block-type-'+t).removeClass('hide');
			$('.form-block-type-'+t+' input, .form-block-type-'+t+' select').prop('required', true).prop('pattern','.*[^ ].*');
			if (t == 'tv') {
				$('#tv_item_id').trigger('change');
			}
		});
		
		$('#tv_item_id').on('change', function(){
			var v = $(this).val();
			$('#tv_item_name_block').toggleClass('hide', ! (v == 0));
			if (v == 0) {
				$('#tv_name').prop('required', true).prop('pattern','.*[^ ].*');
			}
			else {
				$('#tv_name').removeAttr('required').removeAttr('pattern');
			}
		});
	});
</script>
@endsection