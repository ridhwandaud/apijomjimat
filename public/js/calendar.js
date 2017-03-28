$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({

    	eventSources: [
    		{
				url: '/get/events',
				type: 'GET',
				color: '#378006'
        	},
        ],

	   eventColor: '#378006',

	   eventClick: function(event) {
	        if (event.url) {
	            window.open(event.url,'_self');
	            return false;
	        }
	    },
	    dayClick: function(date, jsEvent, view) {

	        console.log('Clicked on: ' + date.format());

	        window.open('/get/events/' + date.format(),'_self');

	    }


    });

});