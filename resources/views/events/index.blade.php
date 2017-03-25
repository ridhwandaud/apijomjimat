@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-6">
    	@include('partials.create')

    	@include('layouts.errors')    	
    	
    </div>

    <div class="col-md-6">
    	<div class="list-group">
    	@foreach($events as $event)
    		<li class="list-group-item clearfix">
				<p>{{$event->description}}</p>
				<p>{{$event->event_date}}</p>
				<p>RM {{$event->amount}}</p>
				<span class="pull-right">
					<a href="/events/{{$event->id}}">
						<button class="btn btn-xs btn-info">Edit</button>
					</a>
					<a href="/delete/{{$event->id}}">
						<button class="btn btn-xs btn-warning">
					  		<span class="glyphicon glyphicon-trash"></span>
						</button>
					</a>
				</span>
			</li>
    	@endforeach
    	</div>
    </div>
</div>
@endsection
