<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class CalendarsController extends Controller
{
    public function getEvents(){

    	$events= Event::all();

    	foreach ($events as $event) {
			$event->title = $event->description;
			$date = $event->event_date;
			$pieces = explode(" ", $date);

			$event->start = $pieces[0] . "T" . $pieces[1];
		}

    	return $events;
    }
}
