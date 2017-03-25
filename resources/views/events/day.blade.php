@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-6">
		<div class="list-group">
    		@foreach($events as $event)
    		<li class="list-group-item clearfix">
				<p>{{$event->description}}</p>
				<p>{{$event->event_date}}</p>
				<p>RM {{$event->amount}}</p>
    		</li>
    		@endforeach

    	</div>	
	</div>
	<div class="col-md-6">Right</div>
</div>


@endsection