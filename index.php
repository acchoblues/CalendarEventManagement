<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="fullcalendar/fullcalendar.min.css" />
<script src="fullcalendar/lib/jquery.min.js"></script>
<script src="fullcalendar/lib/moment.min.js"></script>
<script src="fullcalendar/fullcalendar.min.js"></script>

<script>

$(document).ready(function () {
    var calendar = $('#calendar').fullCalendar({
        editable: false,
        events: "fetch-event-view.php",
        displayEventTime: false,
        eventRender: function (event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },
        eventMouseover: function(calEvent, jsEvent) {
    var tooltip = '<div class="tooltipevent" style="width:100px;height:100px;background:#B2CEE6;position:absolute;z-index:10001;">' + calEvent.title + '</div>';
    var $tooltip = $(tooltip).appendTo('body');

    $(this).mouseover(function(e) {
        $(this).css('z-index', 10000);
        $tooltip.fadeIn('500');
        $tooltip.fadeTo('10', 1.9);
    }).mousemove(function(e) {
        $tooltip.css('top', e.pageY + 10);
        $tooltip.css('left', e.pageX + 20);
    });
},

eventMouseout: function(calEvent, jsEvent) {
    $(this).css('z-index', 8);
    $('.tooltipevent').remove();
}
    });
});

function displayMessage(message) {
	    $(".response").html("<div class='success'>"+message+"</div>");
    setInterval(function() { $(".success").fadeOut(); }, 1000);
}
</script>

<style>
body {
    margin-top: 50px;
    text-align: center;
    font-size: 12px;
    font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;
}

#calendar {
    width: 700px;
    margin: 0 auto;
}

.response {
    height: 60px;
}

.success {
    background: #cdf3cd;
    padding: 10px 60px;
    border: #c3e6c3 1px solid;
    display: inline-block;
}
</style>
</head>
<body>
    <h2>Calendar Event Management | www.hakkoblogs.com</h2>
    <a href="login.php"><h3>Login</h3></a>
    <div class="response"></div>
    <div id='calendar'></div>
</body>


</html>