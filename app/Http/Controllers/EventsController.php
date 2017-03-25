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

    	return view('events.index',compact('events'));
    }

    public function store(Request $request){

    	// Validate 

    	$this->validate(request(),[
    		'description' => 'required',
    		'amount' => 'required',
    		'event_date' => 'required'
    	]);

    	Event::create(request(['description','event_date','amount']));

    	return redirect('/events');

    }

    public function show($id)
    {
    	$event = Event::find($id);

    	return view('events.show',compact('event'));
    }
}
