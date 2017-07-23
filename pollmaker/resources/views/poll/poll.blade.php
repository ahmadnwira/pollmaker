@extends('layouts/master')

@section('content')
<div class="col-md-6 col-md-offset-2">
		
	<h3 class="mark">Poll :
		{{ $poll->title }} 
		<span class="badge badge-lead"> Expires at :
		 	{{  date( 'd/M/Y', strtotime($poll->expire_date) ) }}
		 </span>
	</h3>	

	@foreach($votes as $vote)
		<li class="list-group-item">
			<p>
				{{ $vote->choice }} : 
				<span class="badge badge-lead">votes {{ $vote->votes }}</span>
			</p>
		</li>
	@endforeach

</div>
@endsection