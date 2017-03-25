@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-6">
		<h1>Edit Events</h1>

		<form method="POST" action="/save/{{$event->id}}">
			{{ csrf_field() }}
			<div class="form-group">
				<h4>Event ID = {{$event->id}}</h4>
			</div>
			<div class="form-group">
				<label for="">Amount</label>
				<textarea name="title" class="form-control">{{$event->amount}}</textarea>
			</div>
			<div class="form-group">
				<label for="">Note</label>
				<textarea name="title" class="form-control">{{$event->description}}</textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Save Booking</button>
			</div>
			
		</form>

	</div>
</div>


@endsection
