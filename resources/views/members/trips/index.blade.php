@push('scripts')
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

  <script>
    $("input[type=date]").flatpickr({
      minDate: "today",
      allowInput: true,
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

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
    }

    .navbar-toggler {
      border-color: #ccc !important;
    }
  </style>
@endpush

<x-layouts.app title="My Trips">
  <section id="my-trip">
    <div class="container">

      <div class="my-trip-content">
        @if (!count($itineraryBook))
          <div class="row">
            <div class="col-12">
              <div class="my-trip-empty text-center">
                <img src="/img/bro.png" alt="empty" class="d-block mx-auto img-fluid">
                <h2 class="mt-5">Ups! Sorry, you don't have a travel agenda :&#40; <br> let's add your bucket list to
                  your itinerary
                </h2>
                <button class="btn btn-primary rounded-pill px-3 py-2 mt-3" data-bs-toggle="modal"
                  data-bs-target="#addItineraryModal">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                  </svg>
                  <span>Add My Trip</span>
                </button>
              </div>
            </div>
          </div>
        @else
          <div class="row gy-4 my-trip-list">
            @foreach ($itineraryBook as $itinerary)
              <div class="col-12 col-md-6 col-lg-4 my-trip-item">
                <a href="{{ route('trips.detail', ['itineraryBook' => $itinerary->slug]) }}"
                  class="card text-decoration-none h-100">
                  @if ($itinerary->thumbnail)
                    <img src="{{ asset('storage/thumbnail-itinerary-books/' . $itinerary->thumbnail) }}"
                      class="card-img-top" alt="places">
                  @else
                    <img src="https://placehold.co/600x400" class="card-img-top" alt="places">
                  @endif
                  <div class="card-body">
                    <h3 class="card-title text-truncate">{{ $itinerary->name }}</h3>
                    {{-- <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus
                      praesentium,
                      debitis harum suscipit repellendus, beatae corporis voluptatem, quaerat libero dolore minima
                      assumenda amet cum exercitationem dignissimos sapiente minus. Assumenda, deleniti.</p> --}}
                    <hr>
                    <div class="d-flex justify-content-between schedule">
                      <h6 class="mb-0">{{ $itinerary->total_day }} Days Trip</h6>
                      <span class="px-1 py-0 rounded text-light bg-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                          class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                          <path fill-rule="evenodd"
                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                        </svg>
                      </span>
                    </div>
                  </div>
                </a>
              </div>
            @endforeach
          </div>
        @endif
      </div>

    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="addItineraryModal" tabindex="-1" aria-labelledby="addItineraryModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addItineraryModalLabel">Add New Trip</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('trips.create') }}" method="POST" enctype="multipart/form-data">
          @csrf
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
              <input type="date" class="form-control" name="start_day" id="start_day" placeholder="Select start date"
                required>
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
