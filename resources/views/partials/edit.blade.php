<form method="POST" action="/save/{{$event->id}}">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="">Amount</label>
		<input name="title" type="text" class="form-control" value="{{$event->amount}}">
	</div>
	<div class="form-group">
		<label for="">Note</label>
		<input name="title" type="text" class="form-control" value="{{$event->description}}">
	</div>
	<div class="form-group">
        <div class='input-group date' id='datetimepicker'>
            <input type='text' class="form-control" name="event_date" value="{{$event->event_date}}" />
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Save Booking</button>
	</div>
	
</form>
