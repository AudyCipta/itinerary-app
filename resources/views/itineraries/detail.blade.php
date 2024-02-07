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

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.10/index.global.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.10/index.global.min.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/list@6.1.10/index.global.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

  <script>
    $(function() {
      $("input[type=date]").flatpickr({
        minDate: "today",
        allowInput: true
      });

      const currentUrl = window.location.href;
      const slug = currentUrl.split('/').pop();

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        cache: false
      });

      // $.ajax({
      //   method: "GET",
      //   url: `{{ route('itineraries.index') }}/${slug}/booked`,
      //   dataType: 'json',
      //   success: function(response) {
      //     const calendarEl = document.getElementById('calendar');
      //     const calendar = new FullCalendar.Calendar(calendarEl, {
      //       initialView: 'dayGridMonth',
      //       themeSystem: "bootstrap",
      //       headerToolbar: {
      //         start: 'prev,next today',
      //         center: 'title',
      //         end: 'dayGridMonth,dayGridWeek,dayGridDay,listMonth'
      //       },
      //       events: response.data.events
      //     });
      //     calendar.render();
      //   },
      //   error: function(error) {
      //     console.log(error);
      //   }
      // });

      $('#addItineraryModal form').submit(function(e) {
        e.preventDefault();
        const id = $('#addItineraryModal form #id').val();

        $.ajax({
          method: "POST",
          url: `{{ route('trips.index') }}/${id}`,
          data: {
            'start_day': $('#start_day').val()
          },
          dataType: 'json',
          beforeSend: function() {
            $('#addItineraryModal .modal-footer button').attr('disabled', true);
            $('#addItineraryModal .modal-footer button').attr('disabled', true);
            $('#addItineraryModal button[type=submit]').html(`
              <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
              <span role="status">Save</span>
            `);
          },
          success: function(response) {
            setTimeout(function() {
              if (response.status == 'success') {
                $('#addItineraryModal .modal-footer button').removeAttr('disabled');
                $('#addItineraryModal .modal-footer button').removeAttr('disabled');
                $('#addItineraryModal button[type=submit]').html(`Save`);
                $('#addItineraryModal').modal('hide');
                Swal.fire({
                  title: "Itinerary added successfully",
                  text: "Open the 'my trip' page to see the Itinerary that was added previously",
                  icon: "success"
                });
              } else {
                Swal.fire({
                  title: "Itinerary failed to add",
                  text: "Something went wrong!",
                  icon: "error"
                });
              }
            }, 800);
          },
          error: function(error) {
            console.log(error);
          }
        });

      });
    });
  </script>
@endpush

@push('styles')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
@endpush

<x-layouts.app title="Place Detail">
  <section id="detail-trip-hero" class="py-0 min-vh-100 bg-secondary d-flex align-items-center"
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
        url({{ $itinerary->thumbnail ? asset('storage/thumbnail-itineraries/' . $itinerary->thumbnail) : '/img/hero.jpeg' }})">
    <div class="container text-center">
      <h1 class="text-white">{{ $itinerary->total_day }} {{ $itinerary->total_day > 1 ? 'days' : 'day' }} with
        {{ $itinerary->name }}</h1>
      {{-- <p class="text-white lead">{{ $itinerary->total_day }} {{ $itinerary->total_day > 1 ? 'Days' : 'Day' }} Trip</p> --}}
      {{-- <p class="text-white lead">{{ date('m d, Y', strtotime($itinerary->start_day)) }} -
        {{ date('m d, Y', strtotime($itinerary->start_day . ' + ' . $itinerary->total_day . ' days')) }}</p> --}}
      @auth
        <button type="button" class="btn btn-primary py-2 px-3 mt-2 rounded-pill d-flex align-items-center mx-auto"
          data-bs-toggle="modal" data-bs-target="#addItineraryModal">
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

  {{-- <section id="detail-trip-calendar">
    <div class="container">
      <div id="calendar"></div>
    </div>
  </section> --}}

  <section id="detail-trip-places">
    <div class="container">

      <div class="d-flex justify-content-between w-100 mb-3">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
          @for ($i = 1; $i <= $itinerary->total_day; $i++)
            <li class="nav-item" role="presentation">
              <button class="nav-link {{ $i == 1 ? 'active' : '' }}" id="pills-home-tab" data-bs-toggle="pill"
                data-bs-target="#day-{{ $i }}" type="button" role="tab" aria-controls="pills-home"
                aria-selected="true">Day {{ $i }}</button>
            </li>
          @endfor
        </ul>
      </div>

      <div class="tab-content" id="pills-tabContent">
        @for ($i = 0; $i < $itinerary->total_day; $i++)
          <div class="tab-pane fade {{ $i == 0 ? 'show active' : '' }}" id="day-{{ $i + 1 }}" role="tabpanel"
            aria-labelledby="day-{{ $i + 1 }}-tab" tabindex="0">
            <div class="d-flex flex-column row-gap-4">
              @foreach ($itinerary->dayPlaces($i + 1) as $item)
                <div class="card">
                  <div class="card-header">{{ $item->place->name }}</div>
                  <div class="card-body">
                    <div class="row g-3">
                      <div class="col-md-4">
                        @if (count($item->place->placeImages))
                          <img src="{{ asset('storage/places/' . $item->place->placeImages[0]->picture) }}"
                            class="img-fluid w-full rounded-3" alt="places">
                        @else
                          <img src="https://placehold.co/600x400?text=Photo+is+not+available"
                            class="img-fluid rounded-3" alt="img">
                        @endif
                      </div>
                      <div class="col-md-8 d-flex flex-column justify-content-between">
                        <div class="desc">
                          <h5>Description</h5>
                          <p class="card-text text-justify mb-0">{!! substr($item->place->description, 0, 250) !!}...</p>
                        </div>

                        <div class="mb-4">
                          <h5>Address</h5>
                          <p class="card-text">{{ $item->place->address }}</p>
                        </div>

                        <div>
                          <a href="{{ route('places.detail', ['place' => $item->place->slug]) }}"
                            class="btn btn-second text-light">Read More <svg xmlns="http://www.w3.org/2000/svg"
                              width="16" height="16" fill="currentColor" class="bi bi-arrow-right"
                              viewBox="0 0 16 16">
                              <path fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        @endfor
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="addItineraryModal" tabindex="-1" aria-labelledby="addItineraryModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addItineraryModalLabel">Add to My Trip</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="">
          <input type="hidden" name="id" id="id" value="{{ $itinerary->id }}">
          <div class="modal-body">
            <div class="mb-0">
              <input type="date" placeholder="Select Start Day" class="form-control" id="start_day"
                name="start_day" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-layouts.app>
