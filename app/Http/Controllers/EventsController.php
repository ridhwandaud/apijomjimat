<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Carbon\Carbon;

class EventsController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

    	$events = Event::all();

        $events->date = new Carbon();

    	foreach ($events as $event) {
    		$format = new Carbon($event->event_date);
    		$date = $format->diffForHumans();
			$event->event_date = $date;
		}
    	

    	return view('events.index',compact('events'));
    }

    public function store(Request $request){

    	// Validate 

    	// return $request->event_date;

    	$this->validate(request(),[
    		'description' => 'required',
    		'amount' => 'required',
    		'event_date' => 'required'
    	]);

    	Event::create(request(['description','event_date','amount']));

    	return redirect()->back();

    }

    public function show($id)
    {
    	$event = Event::find($id);

    	return view('events.show',compact('event'));
    }

    public function destroy($id){
    	$event = Event::find($id);

		$event->delete();

		return redirect('/events');

    }
}

