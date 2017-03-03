@extends('layouts.app')

@section('content')
<div class="container col-md-6 col-md-offset-3">
	<h4>Create new Subreddit</h4>
	<form action="/subreddit/new" method="post">
	{{csrf_field()}}
	<div class="form-group">
	<input type="text" name="name" class="form-control" placeholder="Enter Subreddit Name"></br>
	<textarea name="description" type="text" class="form-control" placeholder="Create description for Subreddit" rows="5"></textarea></br>
	<input type="submit" class="btn btn-default" value="Create new Subreddit!">
	</div>
	</form>
</div>


@endsection