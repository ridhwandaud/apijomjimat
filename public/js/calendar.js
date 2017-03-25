$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({

    	//  events: [
	    //     {
	    //         title  : 'RM 5',
	    //         start  : '2017-03-03T09:00:00',
	    //         color  : '#f34141',
	    //         description: 'This is a cool event'
	    //     },
	    //     {
	    //         title  : 'RM 10',
	    //         start  : '2017-03-03T13:00:00'
	    //     },
	    //     {
	    //         title  : 'RM 3',
	    //         start  : '2017-03-03T20:00:00',
	    //         color  : '#000'
	    //     }
	    // ],

	   events: '/get/events',
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


    })

});