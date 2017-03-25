@extends('layouts.app')

@section('content')
<div class="container">
	<!-- should in modal -->
	
	<div class="col-md-6">
		@if(count($events))
		<div class="list-group">
			<li class="list-group-item">
				<p>{{$events->day}}</p>
			</li>
    		@foreach($events as $event)
    		<li class="list-group-item clearfix">
    			<span class="pull-right">
    				<a href="/events/{{$event->id}}">
						<button class="btn btn-xs btn-info">Edit</button>
					</a>
    			</span>
				<p>{{$event->description}}</p>
				<p>RM {{$event->amount}}</p>
    		</li>
    		@endforeach
    	</div>
    	@else
    	
			<p>Events is empty</p>
    	@endif	
	</div>
	<div class="col-md-6">
		@include('partials.create')
	</div>
</div>


@endsection