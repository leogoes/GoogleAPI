<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href={{ asset('../@fullcalendar/packages/core/main.css')}} rel='stylesheet' />
<link href={{ asset('../@fullcalendar/packages/daygrid/main.css')}} rel='stylesheet' />
<link href={{ asset('../@fullcalendar/packages/timegrid/main.css')}} rel='stylesheet' />
<link href={{ asset('../@fullcalendar/packages/list/main.css')}} rel='stylesheet' />
<script src={{ asset('../@fullcalendar/vendor/rrule.js')}}></script>
<script src={{ asset('../@fullcalendar/packages/core/main.js')}}></script>
<script src={{ asset('../@fullcalendar/packages/interaction/main.js')}}></script>
<script src={{ asset('../@fullcalendar/packages/daygrid/main.js')}}></script>
<script src={{ asset('../@fullcalendar/packages/timegrid/main.js')}}></script>
<script src={{ asset('../@fullcalendar/packages/list/main.js')}}></script>
<script src={{ asset('../@fullcalendar/packages/rrule/main.js')}}></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list', 'rrule' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      defaultDate: '2019-04-12',
      editable: true,
      events: [
        {
          title: 'rrule event',
          rrule: {
            dtstart: '2019-04-09T13:00:00',
            // until: '2019-04-01',
            freq: 'weekly'
          },
          duration: '02:00'
        }
      ],
      eventClick: function(arg) {
        if (confirm('delete event?')) {
          arg.event.remove()
        }
      }
    });

    calendar.render();
  });

</script>
<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>
</head>
<body>

  <div id='calendar'></div>

</body>
</html>
