@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-6">
    	<form action="/events" method="POST">
    		{{ csrf_field() }}
    		<div class="form-group">
    			<label for="">Date</label>
    			<input class="form-control" type="date" name="date">
    		</div>
    		<div class="form-group">
    			<label for="">Time</label>
    			<input class="form-control" type="text" placeholder="Event Time" name="time">
    		</div>
    		<div class="form-group">
    			<label for="">Value</label>
    			<input class="form-control" type="text" placeholder="Amount Spend" name="amount">
    		</div>
    		<div class="form-group">
    			<label for="">Description</label>
    			<input class="form-control" type="text" placeholder="Event description" name="description">
    		</div>
    		<div class="form-group">
    			<button class="btn btn-primary">Save Events</button>
    		</div>
    	</form>
		
		@if (count($errors))
		<div class="form-group">
			<div class="alert alert-danger">
	    		<ul>
	    			@foreach ( $errors->all() as $error )
						<li>{{$error}}</li>
	    			@endforeach
	    		</ul>
	    	</div>	
		</div>
		@endif
    	
    	
    </div>

    <div class="col-md-6">
    	<div class="list-group">
    	@foreach($events as $event)
    		<li class="list-group-item clearfix">
				<p>{{$event->description}}</p>
				<p>{{$event->event_date}}</p>
				<span class="pull-right">
					<a href="/events/{{$event->id}}">
						<button class="btn btn-xs btn-info">Edit</button>
					</a>
				</span>
			</li>
    	@endforeach
    	</div>
    </div>
</div>
@endsection
