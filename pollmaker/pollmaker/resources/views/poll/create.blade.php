@extends('layouts/master')

@section('content')

	<div class="page-header">
	  <h1>Create Poll</h1>
	</div>

	<form action="/polls/store" method="post" class="col-md-6 col-md-offset-2">
		{{ csrf_field() }}

		<div class="form-group">
		<label for="email">Poll title:</label>
		 <input type="text" class="form-control" placeholder="what is your favorite color ?" name="title">
		</div>

		<div class="form-group" id="choices">
			<label for="choices">choices:</label>
		</div>

		<input type="submit" id="action" class="btn btn-success pull-right" value="Save">  

		<a id="addChoice" class="btn btn-default pull-right" >More Choices</a>
	
	</form>
@endsection