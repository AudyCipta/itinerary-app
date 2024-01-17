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
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

  <script>
    $(function() {
      const currentUrl = window.location.href;
      const slug = currentUrl.split('/').pop();

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        cache: false
      });

      $("input[type=date]").flatpickr({
        minDate: "today"
      });

      $.ajax({
        method: "GET",
        url: `{{ route('trips.index') }}/${slug}/booked`,
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

      $('.edit-place-btn').on('click', function(e) {
        e.preventDefault();
        const id = $(this).data('id');

        $.ajax({
          method: "GET",
          url: `{{ route('trips.index') }}/${id}/edit`,
          dataType: 'json',
          success: function(response) {
            const itineraryBookPlace = response.data.itineraryBookPlace;
            $('#editPlaceModal #id').val(itineraryBookPlace.id);
            $('#editPlaceModal #day_to').val(itineraryBookPlace.day_to);
            $('#editPlaceModal #time').val(itineraryBookPlace.time);
            $('#editPlaceModal form').attr('action', `{{ route('trips.index') }}/${id}/update`);
          },
          error: function(error) {
            console.log(error);
          }
        });
      });

      $('.delete-place-btn').on('click', function(e) {
        e.preventDefault();
        const id = $(this).data('id');
        $('#deletePlaceModal form').attr('action', `{{ route('trips.index') }}/${id}/delete`);
        $('#deletePlaceModal #id').val(id);
      });

      $('#editPlaceModal form').on('submit', function(e) {
        e.preventDefault();
        const id = $('#editPlaceModal #id').val();

        $.ajax({
          method: "PUT",
          url: `{{ route('trips.index') }}/${id}/update`,
          data: $(this).serialize(),
          dataType: 'json',
          success: function(response) {
            if (response.status == 'success') {
              location.href = '{{ url()->current() }}'
            } else {
              alert('error');
            }
          },
          error: function(error) {
            console.log(error);
          }
        });
      });

      $('#deletePlaceModal form').on('submit', function(e) {
        e.preventDefault();
        const id = $('#deletePlaceModal #id').val();

        $.ajax({
          method: "DELETE",
          url: `{{ route('trips.index') }}/${id}/delete`,
          dataType: 'json',
          success: function(response) {
            if (response.status == 'success') {
              location.href = '{{ url()->current() }}'
            } else {
              alert('error');
            }
          },
          error: function(error) {
            console.log(error);
          }
        });
      });

      $('#editItineraryModal').on('shown.bs.modal', function() {
        const id = $('button[data-bs-target="#editItineraryModal"]').data('id');

        /*
        data: new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
        */

        $.ajax({
          method: "GET",
          url: `{{ route('trips.index') }}/${id}/edit-itinerary`,
          dataType: 'json',
          success: function(response) {
            const {
              name,
              total_day,
              start_day
            } = response.data.itineraryBook;
            $('#editItineraryModal #name').val(name);
            $('#editItineraryModal #start_day').val(start_day);

            $('#editItineraryModal #total_day').empty();
            let tripName =
              '<option value="" selected disabled>Enter how many days your itinerary is</option>';
            [...Array(7)].forEach((_, index) => {
              tripName +=
                `<option ${index === 0 ? 'selected' : ''} value="${index + total_day}">${index + total_day}</option>`;
            });
            $('#editItineraryModal #total_day').append(tripName);
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
@endpush

<x-layouts.app title="My Trip Detail">
  <section id="detail-trip-hero" class="py-0 min-vh-100 bg-secondary d-flex align-items-center"
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
        url({{ $itineraryBook->thumbnail ? asset('storage/thumbnail-itinerary-books/' . $itineraryBook->thumbnail) : '/img/hero.jpeg' }})">
    <div class="container text-center">
      <h1 class="text-white">{{ $itineraryBook->total_day }} {{ $itineraryBook->total_day > 1 ? 'days' : 'day' }} with
        {{ $itineraryBook->name }}</h1>
      <p class="text-white lead">{{ date('m d, Y', strtotime($itineraryBook->start_day)) }} -
        {{ date('m d, Y', strtotime($itineraryBook->start_day . ' + ' . $itineraryBook->total_day - 1 . ' days')) }}
      </p>

      <div class="d-flex justify-content-center column-gap-3">
        <button class="btn btn-danger py-2 px-3 mt-2 rounded-pill" data-bs-toggle="modal"
          data-bs-target="#deleteItineraryModal">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-trash-fill" viewBox="0 0 16 16">
            <path
              d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
          </svg>
          <span class="ms-2">Delete This Trip</span>
        </button>
        <button class="btn btn-primary py-2 px-3 mt-2 rounded-pill" data-bs-toggle="modal"
          data-bs-target="#editItineraryModal" data-id="{{ $itineraryBook->id }}">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path
              d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
            <path fill-rule="evenodd"
              d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
          </svg>
          <span class="ms-2">Edit This Trip</span>
        </button>
      </div>

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
          @for ($i = 1; $i <= $itineraryBook->total_day; $i++)
            <li class="nav-item" role="presentation">
              <button class="nav-link {{ $i == 1 ? 'active' : '' }}" id="pills-home-tab" data-bs-toggle="pill"
                data-bs-target="#day-{{ $i }}" type="button" role="tab" aria-controls="pills-home"
                aria-selected="true">Day {{ $i }}</button>
            </li>
          @endfor
        </ul>
        <button class="btn btn-second text-light" data-bs-toggle="modal" data-bs-target="#addPlaceModal">Add
          Place</button>
      </div>

      <div class="tab-content" id="pills-tabContent">
        @for ($i = 0; $i < $itineraryBook->total_day; $i++)
          <div class="tab-pane fade {{ $i == 0 ? 'show active' : '' }}" id="day-{{ $i + 1 }}" role="tabpanel"
            aria-labelledby="day-{{ $i + 1 }}-tab" tabindex="0">
            <div class="d-flex flex-column row-gap-4">
              @foreach ($itineraryBook->dayPlaces($i + 1) as $item)
                <div class="card">
                  <div class="card-header d-flex justify-content-between">
                    <span>{{ $item->place->name }} - {{ $item->time }}</span>
                    <div>
                      <a href="#" class="btn btn-sm btn-outline-secondary edit-place-btn"
                        data-id="{{ $item->id }}" data-bs-toggle="modal" data-bs-target="#editPlaceModal">Edit</a>
                      <a href="#" class="btn btn-sm btn-outline-danger delete-place-btn"
                        data-id="{{ $item->id }}" data-bs-toggle="modal"
                        data-bs-target="#deletePlaceModal">Delete</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row g-3">
                      <div class="col-md-4">
                        <img src="{{ asset('storage/places/' . $item->place->placeImages[0]->picture) }}"
                          class="img-fluid rounded-3" alt="places">
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

  <!-- Edit Place Modal -->
  <div class="modal fade" id="editPlaceModal" tabindex="-1" aria-labelledby="editPlaceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editPlaceModalLabel">Edit Place</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="post">
          @method('PUT')
          <input type="hidden" name="id" id="id">
          <div class="modal-body">
            <div class="row gx-3">
              <div class="col mb-0">
                <label for="day_to" class="form-label">Day</label>
                <select class="form-select" id="day_to" name="day_to" required>
                  <option value="" selected disabled>Choose day</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                </select>
              </div>
              <div class="col-auto mb-0">
                <label for="time" class="form-label">Time</label>
                <input type="time" class="form-control" id="time" name="time" required>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Delete Place Modal -->
  <div class="modal fade" id="deletePlaceModal" tabindex="-1" aria-labelledby="deletePlaceModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deletePlaceModalLabel">Delete Place</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="mb-0 text-muted">Click button "delete" if you want to delete this place.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="">
            @method('DELETE')
            <input type="hidden" name="id" id="id">
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Itinerary Modal -->
  <div class="modal fade" id="deleteItineraryModal" tabindex="-1" aria-labelledby="deleteItineraryModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteItineraryModalLabel">Delete Itinerary?</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="mb-0 text-muted">Click button "delete" if you want to delete this itinerary.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="{{ route('trips.delete_itinerary', ['itineraryBook' => $itineraryBook->id]) }}"
            method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Itinerary Modal -->
  <div class="modal fade" id="editItineraryModal" tabindex="-1" aria-labelledby="editItineraryModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editItineraryModalLabel">Edit Itinerary</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('trips.update_itinerary', ['itineraryBook' => $itineraryBook->id]) }}" method="POST"
          enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="modal-body">
            <div class="mb-3">
              <label for="name" class="form-label">Name Trip<span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="name" id="name"
                placeholder="Create Your Name Trip" required>
            </div>
            <div class="mb-3">
              <label for="total_day" class="form-label">Total Day<span class="text-danger">*</span></label>
              <select name="total_day" id="total_day" class="form-control"></select>
            </div>
            <div class="mb-3">
              <label for="start_day" class="form-label">Start date<span class="text-danger">*</span></label>
              <input type="date" class="form-control" name="start_day" id="start_day"
                placeholder="Select start date">
            </div>
            <div class="mb-0">
              <label for="thumbnail" class="form-label">Thumbnail</label>
              <input class="form-control" type="file" name="thumbnail" id="thumbnail">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Add Place Modal -->
  <div class="modal fade" id="addPlaceModal" tabindex="-1" aria-labelledby="addPlaceModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addPlaceModalLabel">Add Place</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('trips.add_place') }}" method="post">
          @csrf
          <input type="hidden" name="itinerary_book_id" id="itinerary_book_id" value="{{ $itineraryBook->id }}">
          <div class="modal-body">
            <div class="mb-3">
              <label for="place_id" class="form-label">Place<span class="text-danger">*</span></label>
              <select name="place_id" id="place_id" class="form-control" required>
                <option value="" disabled selected>Choose place</option>
                @foreach ($places as $place)
                  <option value="{{ $place->id }}">{{ $place->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="day_to" class="form-label">Day To<span class="text-danger">*</span></label>
              <select name="day_to" id="day_to" class="form-control" required>
                <option value="" disabled selected>Choose Day To</option>
                @for ($i = 1; $i <= $itineraryBook->total_day; $i++)
                  <option value="{{ $i }}">{{ $i }}</option>
                @endfor
              </select>
            </div>
            <div class="mb-3">
              <label for="time" class="form-label">Time<span class="text-danger">*</span></label>
              <input type="time" class="form-control" name="time" id="time" placeholder="Enter time"
                required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-layouts.app>
