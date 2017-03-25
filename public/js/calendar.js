$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({

    	 events: [
	        {
	            title  : 'RM 5',
	            start  : '2017-03-03T09:00:00',
	            color  : '#f34141',
	            description: 'This is a cool event'
	        },
	        {
	            title  : 'RM 10',
	            start  : '2017-03-03T13:00:00'
	        },
	        {
	            title  : 'RM 3',
	            start  : '2017-03-03T20:00:00',
	            color  : '#000'
	        }
	    ],

	   // events: '/api/events',
	   eventColor: '#378006'

    })

});