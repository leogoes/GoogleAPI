<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href={{ asset('../@fullcalendar/packages/core/main.css') }} rel='stylesheet' />
<link href={{ asset('../@fullcalendar/packages/daygrid/main.css') }} rel='stylesheet' />
<script src={{ asset('../@fullcalendar/packages/core/main.js') }}></script>
<script src={{ asset('../@fullcalendar/packages/interaction/main.js') }}></script>
<script src={{ asset('../@fullcalendar/packages/daygrid/main.js') }}></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var srcCalendarEl = document.getElementById('source-calendar');
    var destCalendarEl = document.getElementById('destination-calendar');

    var srcCalendar = new FullCalendar.Calendar(srcCalendarEl, {
      plugins: [ 'interaction', 'dayGrid' ],
      editable: true,
      defaultDate: '2019-04-12',
      events: [
        {
          title: 'event1',
          start: '2019-04-11T10:00:00',
          end: '2019-04-11T16:00:00'
        },
        {
          title: 'event2',
          start: '2019-04-13T10:00:00',
          end: '2019-04-13T16:00:00'
        }
      ],
      eventLeave: function(info) {
        console.log('event left!', info.event);
      }
    });

    var destCalendar = new FullCalendar.Calendar(destCalendarEl, {
      plugins: [ 'interaction', 'dayGrid' ],
      defaultDate: '2019-04-12',
      editable: true,
      droppable: true, // will let it receive events!
      eventReceive: function(info) {
        console.log('event received!', info.event);
      }
    });

    srcCalendar.render();
    destCalendar.render();
  });

</script>
<style>

  body {
    margin: 20px 0 0 20px;
    font-size: 14px;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
  }

  #source-calendar,
  #destination-calendar {
    float: left;
    width: 600px;
    margin: 0 20px 20px 0;
  }

</style>
</head>
<body>

  <div id='source-calendar'></div>
  <div id='destination-calendar'></div>

</body>
</html>
