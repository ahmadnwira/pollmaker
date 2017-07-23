@extends('layouts/master')

@section('content')

<h1>{{ $poll->title }} :</h1>
<div class="container">
	<form action="/voting/store" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="poll" value="{{ $poll->id }}">
		@foreach($votes as $vote)
				<li class="list-group-item">
					 <input type="radio" name="choice" value="{{ $vote->choice }}">
					{{ $vote->choice }}
				</li>
		@endforeach
	
		<div class="space">
			<input class="btn btn-default" type="submit" value="vote!">
		</div>
	</form>
</div>

@endsection