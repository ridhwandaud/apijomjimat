<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Carbon\Carbon;
class CalendarsController extends Controller
{
    public function getEvents(){

    	$events= Event::all();

    	foreach ($events as $event) {
			$event->title = $event->description;
			$date = $event->event_date;
			$pieces = explode(" ", $date);

			$event->start = $pieces[0] . "T" . $pieces[1];

			$event->url = "/events/" . $event->id;
		}

    	return $events;
    }

    public function getDay($day){

    	$events = Event::whereDate("event_date", '=', $day)->get();

    	// transform to view
    	$date = new Carbon($day);
    	$events->day = $date->toFormattedDateString();
    	$events->date = $day;

    	foreach ($events as $event) {
    		$format = new Carbon($event->event_date);
    		$date = $format->toFormattedDateString();
			$event->event_date = $date;
		}

    	return view('events.day',compact('events'));

    }
}
