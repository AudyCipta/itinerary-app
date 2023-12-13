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
  <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/list@6.1.10/index.global.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <script>
    $(function() {
      const currentUrl = window.location.href;
      const slug = currentUrl.split('/').pop();

      $.ajax({
        method: "GET",
        url: `{{ route('itineraries.index') }}/${slug}/booked`,
        dataType: 'json',
        success: function(response) {
          const calendarEl = document.getElementById('calendar');
          const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            themeSystem: "bootstrap",
            headerToolbar: {
              start: 'prev,next today',
              center: 'title',
              end: 'dayGridMonth,dayGridWeek,dayGridDay,listMonth'
            },
            events: response.data.events
          });
          calendar.render();
        },
        error: function(error) {
          console.log(error);
        }
      });
    });
  </script>
@endpush

<x-layouts.app title="Place Detail">
  <section id="detail-trip-hero" class="py-0 min-vh-100 bg-secondary d-flex align-items-center">
    <div class="container text-center">
      <h1 class="text-white">{{ $itinerary->total_day }} {{ $itinerary->total_day > 1 ? 'days' : 'day' }} with
        {{ $itinerary->name }}</h1>
      {{-- <p class="text-white lead">{{ $itinerary->total_day }} {{ $itinerary->total_day > 1 ? 'Days' : 'Day' }} Trip</p> --}}
      {{-- <p class="text-white lead">{{ date('m d, Y', strtotime($itinerary->start_day)) }} -
        {{ date('m d, Y', strtotime($itinerary->start_day . ' + ' . $itinerary->total_day . ' days')) }}</p> --}}
      @auth
        <button type="button" class="btn btn-primary py-2 px-3 mt-2 rounded-pill d-flex align-items-center mx-auto">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus"
            viewBox="0 0 16 16">
            <path
              d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
          </svg>
          <span>Add to My Trip</span>
        </button>
      @else
        <a href="{{ route('login') }}" class="btn btn-primary py-2 px-3 rounded-pill">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus"
            viewBox="0 0 16 16">
            <path
              d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
          </svg>
          <span>Add to My Trip</span>
        </a>
      @endauth
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
          @for ($i = 1; $i <= count($days); $i++)
            <li class="nav-item" role="presentation">
              <button class="nav-link {{ $i == 1 ? 'active' : '' }}" id="pills-home-tab" data-bs-toggle="pill"
                data-bs-target="#day-{{ $i }}" type="button" role="tab" aria-controls="pills-home"
                aria-selected="true">Day {{ $i }}</button>
            </li>
          @endfor
        </ul>

      </div>

      <div class="tab-content" id="pills-tabContent">
        @foreach ($days as $day)
          <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="day-{{ $loop->index + 1 }}"
            role="tabpanel" aria-labelledby="day-{{ $loop->index + 1 }}-tab" tabindex="0">
            <div class="d-flex flex-column row-gap-4">
              @for ($i = 0; $i < count($day); $i++)
                <div class="card">
                  <div class="card-header">
                    <span>{{ $day[$i]['title'] }}</span>
                  </div>
                  <div class="card-body">
                    <div class="row gx-3">
                      <div class="col-md-4">
                        <img src="{{ asset('storage/places/' . $day[$i]['picture']) }}" class="img-fluid rounded-3"
                          alt="places">
                      </div>
                      <div class="col-md-8 d-flex flex-column justify-content-between">
                        <div class="desc mb-4">
                          <p class="card-text text-justify mb-0">{!! substr($day[$i]['description'], 0, 260) !!} <a
                              href="{{ route('places.detail', ['place' => $day[$i]['slug']]) }}">More...</a></p>
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
                          <p class="card-text">
                            <a href="#">Find places to stay</a> with best proximity to your trip
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endfor
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
</x-layouts.app>
