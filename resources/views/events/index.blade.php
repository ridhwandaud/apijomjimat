@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-6">
    	<form action="/events" method="POST">
    		{{ csrf_field() }}
    		<div class="form-group">
    			<label for="">Value</label>
    			<input class="form-control" type="text" placeholder="Amount Spent" name="amount">
    		</div>
    		<div class="form-group">
    			<label for="">Note</label>
    			<input class="form-control" type="text" placeholder="Note" name="description">
    		</div>
    		<!-- <div class="form-group">
    			<label for="">Date</label>
    			<input class="form-control" type="date" name="event_date">
    		</div> -->
    		<div class="form-group">
                <div class='input-group date' id='datetimepicker'>
                    <input type='text' class="form-control" name="event_date" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
    		<!-- <div class="form-group">
    			<label for="">Time</label>
    			<input class="form-control" type="text" placeholder="Event Time" name="time">
    		</div> -->
    		<div class="form-group">
    			<button class="btn btn-primary">Save Events</button>
    		</div>
    	</form>

    	@include('layouts.errors')    	
    	
    </div>

    <div class="col-md-6">
    	<div class="list-group">
    	@foreach($events as $event)
    		<li class="list-group-item clearfix">
				<p>{{$event->description}}</p>
				<p>{{$event->event_date}}</p>
				<p>RM {{$event->amount}}</p>
				<p>{{$event->created_at->toFormattedDateString()}}</p>
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
