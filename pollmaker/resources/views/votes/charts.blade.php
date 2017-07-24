@extends('layouts/master')

@section('content')
	
	<h1 class=""> {{ $poll->title }} ?</h1>

	@foreach($votes as $vote)
		{{ $vote->choice }} -> {{ $vote->votes }}
		<br>
	@endforeach	

	<div class="col-md-8">
		<canvas id="myChart"></canvas>
	</div>		
@endsection

@section('chart')
	<!-- chart JS goes here -->
@endsection