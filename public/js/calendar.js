$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({

    	 events: [
	        {
	            title  : 'RM10 Nasi Lemak + Teh Ais',
	            start  : '2017-03-03T09:00:00'
	        },
	        {
	            title  : 'event2',
	            start  : '2010-01-05',
	            end    : '2010-01-07'
	        },
	        {
	            title  : 'event3',
	            start  : '2017-03-09T12:30:00',
	            allDay : false // will make the time show
	        }
	    ],

	    // events: '/show/booking'
	   eventColor: '#378006'

    })

});