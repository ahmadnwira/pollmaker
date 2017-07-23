@extends('layouts/master')

@section('content')

	<div class="row">
	
		<div class="col-md-4 col-md-offset-1">
			<h3>old-polls</h3>
			<ul class="list-group">
				@foreach($expiredPolls as $expiredPoll )
				<li class="list-group-item">
					<a href="/polls/{{ $expiredPoll->id }}">{{ $expiredPoll->title }}</a>
					<span class="badge badge-winner">winner: option-A</span>
				</li>
				@endforeach
			</ul>	
		</div>

		<div class="col-md-4 col-md-offset-1">
			<h3>current-polls</h3>
			<ul class="list-group">
			<ul class="list-group">
				@foreach($currentPolls as $currentPoll )
				<li class="list-group-item">
					<a href="/polls/{{ $currentPoll->id }}">{{ $currentPoll->title }}</a>
					<span class="badge badge-lead">lead: option-A</span>
				</li>
				@endforeach
			</ul>		
		</div>
	
	</div>

	<a href="polls/create" class="btn btn-info space">New Poll</a>	

@endsection