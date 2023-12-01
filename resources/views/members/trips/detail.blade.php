@push('scripts')
  <script>
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      let height = window.innerHeight - 60;

      if (document.body.scrollTop > height || document.documentElement.scrollTop > height) {
        document.querySelector('.navbar').classList.add('link-dark');
      } else {
        document.querySelector('.navbar').classList.remove('link-dark');
      }
    }
  </script>

  <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.10/index.global.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.10/index.global.min.js'></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        themeSystem: "bootstrap",
        events: [{
            title: "2 days with Summer Uluwatu Trip",
            start: "2023-12-07",
            end: "2023-12-09"
          },
          {
            title: "Meeting",
            url: "http://google.com/",
            start: "2023-12-07T10:30:00"
          },
          {
            title: "Lunch",
            url: "http://google.com/",
            start: "2023-12-07T12:00:00"
          },
          {
            title: "Breakfast",
            url: "http://google.com/",
            start: "2023-12-08T08:00:00"
          },
          {
            title: "Meeting",
            url: "http://google.com/",
            start: "2023-12-08T20:30:00"
          }
        ]
      });
      calendar.render();
    });
  </script>
@endpush

<x-layouts.app title="My Trip Detail">
  <section id="my-trip-detail-hero" class="py-0 min-vh-100 bg-secondary d-flex align-items-center">
    <div class="container">
      <div class="my-trip-detail-content text-center">
        <h1 class="text-white">2 days with Summer Uluwatu Trip</h1>
        <p class="text-white lead">mm dd, yyyy - mm dd, yyyy</p>
      </div>
    </div>
  </section>

  <section id="my-trip-calendar">
    <div class="container">
      <div id="calendar"></div>
    </div>
  </section>
</x-layouts.app>
