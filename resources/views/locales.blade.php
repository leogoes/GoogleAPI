<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href={{ asset('../@fullcalendar/packages/core/main.css')}} rel='stylesheet' />
<link href={{ asset('../@fullcalendar/packages/daygrid/main.css')}} rel='stylesheet' />
<link href={{ asset('../@fullcalendar/packages/timegrid/main.css')}} rel='stylesheet' />
<link href={{ asset('../@fullcalendar/packages/list/main.css')}} rel='stylesheet' />
<script src={{ asset('../@fullcalendar/packages/core/main.js')}}></script>
<script src={{ asset('../@fullcalendar/packages/core/locales-all.js')}}></script>
<script src={{ asset('../@fullcalendar/packages/interaction/main.js')}}></script>
<script src={{ asset('../@fullcalendar/packages/daygrid/main.js')}}></script>
<script src={{ asset('../@fullcalendar/packages/timegrid/main.js')}}></script>
<script src={{ asset('../@fullcalendar/packages/list/main.js')}}></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var initialLocaleCode = 'en';
    var localeSelectorEl = document.getElementById('locale-selector');
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      defaultDate: '2019-04-12',
      locale: initialLocaleCode,
      buttonIcons: false, // show the prev/next text
      weekNumbers: true,
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2019-04-01'
        },
        {
          title: 'Long Event',
          start: '2019-04-07',
          end: '2019-04-10'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2019-04-09T16:00:00'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2019-04-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2019-04-11',
          end: '2019-04-13'
        },
        {
          title: 'Meeting',
          start: '2019-04-12T10:30:00',
          end: '2019-04-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2019-04-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2019-04-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2019-04-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2019-04-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2019-04-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2019-04-28'
        }
      ]
    });

    calendar.render();

    // build the locale selector's options
    calendar.getAvailableLocaleCodes().forEach(function(localeCode) {
      var optionEl = document.createElement('option');
      optionEl.value = localeCode;
      optionEl.selected = localeCode == initialLocaleCode;
      optionEl.innerText = localeCode;
      localeSelectorEl.appendChild(optionEl);
    });

    // when the selected option changes, dynamically change the calendar option
    localeSelectorEl.addEventListener('change', function() {
      if (this.value) {
        calendar.setOption('locale', this.value);
      }
    });

  });

</script>
<style>

  body {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #top {
    background: #eee;
    border-bottom: 1px solid #ddd;
    padding: 0 10px;
    line-height: 40px;
    font-size: 12px;
  }

  #calendar {
    max-width: 900px;
    margin: 40px auto;
    padding: 0 10px;
  }

</style>
</head>
<body>

  <div id='top'>

    Locales:
    <select id='locale-selector'></select>

  </div>

  <div id='calendar'></div>

</body>
</html>
