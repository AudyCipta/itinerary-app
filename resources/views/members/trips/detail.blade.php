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
  <section id="detail-trip-hero" class="py-0 min-vh-100 bg-secondary d-flex align-items-center">
    <div class="container text-center">
      <h1 class="text-white">{{ $itineraryBook->total_day }} {{ $itineraryBook->total_day > 1 ? 'days' : 'day' }} with
        {{ $itineraryBook->name }}</h1>
      <p class="text-white lead">{{ date('m d, Y', strtotime($itineraryBook->start_day)) }} -
        {{ date('m d, Y', strtotime($itineraryBook->start_day . ' + ' . $itineraryBook->total_day - 1 . ' days')) }}</p>
    </div>
  </section>

  <section id="detail-trip-calendar">
    <div class="container">
      <div id="calendar"></div>
    </div>
  </section>

  <section id="detail-trip-places" class="pt-0">
    <div class="container">

      <div class="d-flex justify-content-between w-100 mb-3">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
              type="button" role="tab" aria-controls="pills-home" aria-selected="true">Day 1</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
              type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Day 2</button>
          </li>
        </ul>
        <button type="button" class="btn btn-secondary px-3 py-0">Add Place</button>
      </div>

      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
          tabindex="0">
          <div class="d-flex flex-column row-gap-4">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <span>test</span>
                <a href="#" class="btn btn-link btn-sm">Remove</a>
              </div>
              <div class="card-body">
                <div class="row gx-3">
                  <div class="col-md-4">
                    <img src="https://placehold.co/600x400" class="img-fluid rounded-3" alt="places">
                  </div>
                  <div class="col-md-8 d-flex flex-column justify-content-between">
                    <div class="desc mb-4">
                      <p class="card-text text-justify mb-0">This is a wider card with supporting text below as a
                        natural
                        lead-in
                        to
                        additional
                        content. This content is a little bit longer. Lorem ipsum dolor sit amet consectetur
                        adipisicing.
                        Lorem ipsum dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet
                        elit.<a href="#"> More...</a></p>
                    </div>
                    <div>
                      <p class="card-text lead mb-1 fw-bold">Things to do in [Places]</p>
                      <p class="card-text">
                        <span>Golf</span>
                        <span>Outdoor</span>
                        <span>Histories</span>
                      </p>
                    </div>
                    <hr>
                    <div>
                      <p class="card-text lead mb-1 fw-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                          class="bi bi-house-gear" viewBox="0 0 16 16">
                          <path
                            d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207l-5 5V13.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 2 13.5V8.207l-.646.647a.5.5 0 1 1-.708-.708z" />
                          <path
                            d="M11.886 9.46c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.044c-.613-.181-.613-1.049 0-1.23l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
                        </svg>
                        <span class="ms-1">Find places to stay Feb 24 — 25:</span>
                      </p>
                      <p class="card-text"><a href="#">Find places to stay</a> with best proximity to your trip
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
          tabindex="0">...</div>
      </div>
    </div>
  </section>
</x-layouts.app>
