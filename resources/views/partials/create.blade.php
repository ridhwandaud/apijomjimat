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
	<div class="form-group">
        <div class='input-group date' id='datetimepicker'>
            <input type='text' class="form-control" name="event_date" value="{{$events->date}}" />
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>
	<div class="form-group">
		<button class="btn btn-primary">Save Events</button>
	</div>
</form>