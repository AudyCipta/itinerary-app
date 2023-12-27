@push('scripts')
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.10/index.global.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.10/index.global.min.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/list@6.1.10/index.global.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

  <script>
    $(function() {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        cache: false
      });

      $("input[type=date]").flatpickr({
        minDate: "today",
        allowInput: true,
      });

      $('#tripModal').on('shown.bs.modal', function() {
        $.ajax({
          method: "GET",
          url: "{{ route('places.itinerary_book') }}",
          dataType: 'json',
          success: function(response) {
            const itineraryBook = response.data.itineraryBook;
            $('#tripModal #name').empty();
            let tripName = '<option value="" selected disabled>Choose your trip</option>';
            itineraryBook.forEach((item) => {
              tripName += `<option value="${item.id}">${item.name}</option>`;
            });
            $('#tripModal #name').append(tripName);
          },
          error: function(error) {
            console.log(error);
          }
        });

        $('#tripModal form').on('submit', function(e) {
          e.preventDefault();
          $.ajax({
            method: "POST",
            url: "{{ route('places.store') }}",
            data: $('#tripModal form').serialize(),
            dataType: 'json',
            success: function(response) {
              $('#tripModal').modal('hide');
              if (response.status == 'success') {
                Swal.fire({
                  title: "Place added successfully",
                  text: "Open the 'my trip' page to see the Place that was added previously",
                  icon: "success"
                });
              } else {
                Swal.fire({
                  title: "Place failed to add",
                  text: "Something went wrong!",
                  icon: "error"
                });
              }
            },
            error: function(error) {
              console.log(error);
            }
          });
        });
      });

      $('#createTripModal').on('shown.bs.modal', function() {
        $('#createTripModal form').on('submit', function(e) {
          e.preventDefault();
          $.ajax({
            method: "POST",
            url: "{{ route('places.create_trip') }}",
            // data: $('#createTripModal form').serialize(),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
              $('#createTripModal').modal('hide');
              if (response.status == 'success') {
                Swal.fire({
                  title: "Trip added successfully",
                  text: "Open the 'my trip' page to see the Trip that was added previously",
                  icon: "success"
                });
              } else {
                Swal.fire({
                  title: "Trip failed to add",
                  text: response.message,
                  icon: "error"
                });
              }
            },
            error: function(error) {
              console.log(error);
            }
          });
        });
      });

      $('#tripModal #name').on('input', function() {
        $.ajax({
          method: "GET",
          url: `{{ route('places.itinerary_book') }}/${$('#tripModal #name').val()}`,
          dataType: 'json',
          success: function(response) {
            const tanggalDiberikan = new Date(response.data.itineraryBook.start_day);
            $('#tripModal #day_to').empty();
            let dayTo = '<option value="" selected disabled>Choose date</option>';

            for (let index = 0; index < response.data.itineraryBook.total_day; index++) {
              let tanggalBaru = new Date(tanggalDiberikan);
              tanggalBaru.setDate(tanggalBaru.getDate() + index);
              let tanggalFormatted = tanggalBaru.toISOString().split('T')[0];

              dayTo += `<option value="${index+1}">${tanggalFormatted}</option>`;
            }

            $('#tripModal #day_to').append(dayTo);
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
  <style>
    header .navbar {
      background-color: rgba(255, 255, 255, 0.9) !important;
      backdrop-filter: blur(10px) !important;
    }

    .nav-link {
      color: #767494 !important;
    }

    .nav-link.active {
      color: #5d5a88 !important;
    }
  </style>
@endpush

<x-layouts.app title="Place Detail">
  <section id="place-detail" class="pt-4 pb-0 mt-5">
    <div class="container">
      <div class="place-detail-content">
        <div class="row">

          <div class="col-md-12">
            <div class="position-relative">
              <div id="carouselExampleFade" class="carousel slide carousel-fade">
                <div class="carousel-indicators">
                  @foreach ($place->placeImages as $item)
                    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="{{ $loop->index }}"
                      class="{{ $loop->first ? 'active' : '' }}" aria-current="true"
                      aria-label="Slide {{ $loop->index + 1 }}"></button>
                  @endforeach
                </div>
                <div class="carousel-inner">
                  @php
                    $i = 0;
                  @endphp
                  @foreach ($place->placeImages as $item)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                      <img src="{{ asset('storage/places') }}/{{ $item->picture }}" class="rounded-4 d-block w-100"
                        alt="img">
                    </div>
                  @endforeach
                </div>
                <button class="carousel-control-prev opacity-100" type="button" data-bs-target="#carouselExampleFade"
                  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next opacity-100" type="button" data-bs-target="#carouselExampleFade"
                  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <h1 class="mb-0 text-light position-absolute"
                style="top: 50%; left: 50%; transform: translate(-50%, -50%);z-index: 9;text-shadow: 2px 3px 5px rgba(0,0,0,0.5);">
                {{ $place->name }}</h1>
            </div>
          </div>

          <div class="col-md">
            <div class="place-detail-content py-4">
              <div class="row">
                <div class="col-md-8">
                  <div class="place-detail-body">
                    {!! $place->description !!}
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="place-detail-info">
                    <h5 class="mb-3">Create a full itinerary - for free!</h5>
                    @guest
                      <a href="{{ route('login') }}" class="btn btn-primary rounded-pill px-4 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                          class="bi bi-plus" viewBox="0 0 16 16">
                          <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg>
                        Add to Itineraries
                      </a>
                    @else
                      <a href="#" class="btn btn-primary rounded-pill px-4 py-2" data-bs-toggle="modal"
                        data-bs-target="#tripModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                          class="bi bi-plus" viewBox="0 0 16 16">
                          <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg>
                        Add to Itineraries
                      </a>
                    @endguest

                    <div class="google-map mt-4">
                      {!! $place->map !!}
                    </div>

                    <div class="address mt-4">
                      <p class="mb-0 fw-bold">Address</p>
                      <p>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path
                              d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                          </svg></span>
                        <span>{{ $place->address }}</span>
                      </p>
                    </div>

                    <div class="ticket mt-4">
                      <p class="mb-0 fw-bold">Ticket</p>
                      <p class="mb-0">
                        <span style="color: #5D5A88"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-ticket-detailed" viewBox="0 0 16 16">
                            <path
                              d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5M5 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2z" />
                            <path
                              d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5z" />
                          </svg></span>
                        <span class="ms-1" style="color: #5D5A88">Entrance tickets <span
                            class="fw-medium">-</span></span>
                      </p>
                    </div>

                    {{-- <div class="hour mt-3">
                      <p class="mb-0 fw-bold">Hour</p>
                      <div class="d-flex justify-content-between">
                        <p>Sunday-Monday</p>
                        <p>00.00am - 11.15pm</p>
                      </div>
                    </div> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="tripModal" tabindex="-1" aria-labelledby="tripModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="tripModalLabel">Add Your Trip</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="">
          <input type="hidden" name="place_id" id="place_id" value="{{ $place->id }}">
          <div class="modal-body">
            <div class="mb-3">
              <label for="name" class="form-label">Trip Name<span class="text-danger">*</span></label>
              <select class="form-select" id="name" name="name" required>
                <option value="" selected disabled>Choose your trip</option>
              </select>
            </div>
            <div class="row gx-3">
              <div class="col">
                <label for="day_to" class="form-label">Date<span class="text-danger">*</span></label>
                <select class="form-select" name="day_to" id="day_to" required>
                  <option value="" selected disabled>Choose date</option>
                </select>
              </div>
              <div class="col-auto">
                <label for="time" class="form-label">Time<span class="text-danger">*</span></label>
                <input type="time" class="form-control" id="time" name="time" required>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary d-flex align-items-center column-gap-1"
              data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#createTripModal">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path
                  d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
              </svg>
              <span>Create New Trip</span>
            </button>
            <button type="submit" class="btn btn-primary d-flex align-items-center column-gap-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-bookmark" viewBox="0 0 16 16">
                <path
                  d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z" />
              </svg>
              <span>Add to My Trip</span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="createTripModal" tabindex="-1" aria-labelledby="createTripModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="createTripModalLabel">Create Trip Name</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="">
          <div class="modal-body">
            <div class="mb-3">
              <label for="name" class="form-label">Name Trip<span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="name" id="name"
                placeholder="Create Your Name Trip" required>
            </div>
            <div class="mb-3">
              <label for="total_day" class="form-label">Total Day<span class="text-danger">*</span></label>
              <input type="number" class="form-control" name="total_day" id="total_day"
                placeholder="Enter how many days your itinerary is" required>
            </div>
            <div class="mb-3">
              <label for="start_day" class="form-label">Start date<span class="text-danger">*</span></label>
              <input type="date" class="form-control" name="start_day" id="start_day"
                placeholder="Select start date" required>
            </div>
            <div class="mb-0">
              <label for="thumbnail" class="form-label">Thumbnail</label>
              <input class="form-control" type="file" name="thumbnail" id="thumbnail">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Create</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-layouts.app>
