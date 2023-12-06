@push('styles')
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

<x-layouts.app title="Places Page">
  <section id="places">
    <div class="container">

      <div class="row section-header justify-content-center">
        <div class="col-9">
          <h2 class="text-center">Your Best Place for Unforgettable Experiences!</h2>
          <p class="text-center mb-0">Explore perfection in Badung, epic bucket list to <br> add your to next itinerary
          </p>
        </div>
      </div>

      <div class="row place-search mt-5 mb-5 justify-content-center">
        <div class="col-md-4">
          <div class="position-relative">
            <input type="text" class="form-control p-2 rounded-pill" placeholder="Search Place"
              aria-label="Search Place">
            <span class="position-absolute icon-search">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-search" viewBox="0 0 16 16">
                <path
                  d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
              </svg>
            </span>
          </div>
        </div>
      </div>

      <div class="places-content">
        <div class="row gy-4">
          @foreach ($places as $place)
            <div class="col-md-4">
              <a href="{{ route('places.detail', ['place' => $place->slug]) }}"
                class="card text-decoration-none rounded-4">
                <div class="card-body">
                  @if ($place->placeImages->isNotEmpty())
                    @php
                      $picture = $place->placeImages->first()->picture;
                    @endphp
                    <img src="{{ asset('storage/places') }}/{{ $picture }}" class="card-img-top mb-3 rounded-4"
                      alt="places">
                  @else
                    <img src="https://placehold.co/600x400" class="card-img-top mb-3 rounded-4" alt="default image">
                  @endif
                  <h5 class="card-title">{{ $place->name }}</h5>
                  <p class="card-text">{{ $place->destinationPreference->destinationCategory->name }} /
                    {{ $place->destinationPreference->name }}</p>
                </div>
              </a>
            </div>
          @endforeach
        </div>
      </div>

    </div>
  </section>
</x-layouts.app>
