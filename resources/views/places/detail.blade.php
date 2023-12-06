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

<x-layouts.app title="Place Detail">
  <section id="place-detail" class="pt-4 mt-5">
    <div class="container">
      <div class="place-detail-content">
        <div class="row">

          <div class="col-md-12">
            <div class="position-relative">
              <div id="carouselExampleFade" class="carousel slide carousel-fade">
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
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <h1 class="mb-0 text-light position-absolute"
                style="top: 50%; left: 50%; transform: translate(-50%, -50%);z-index: 9">{{ $place->name }}</h1>
            </div>
          </div>

          <div class="col-md">
            <div class="place-detail-body py-4">
              <div class="row">
                <div class="col-md-8">
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum iusto unde nam, dolore repudiandae
                    deleniti ratione illum veritatis repellat distinctio. Dignissimos illum consequuntur vitae adipisci
                    nam debitis corporis quos accusantium?</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis consequatur illo earum
                    voluptatibus voluptas, quaerat qui unde explicabo iusto praesentium ducimus aliquid dolorum minus
                    ipsam! Officia accusantium quae nobis vel.</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis consequatur illo earum
                    voluptatibus voluptas, quaerat qui unde explicabo iusto praesentium ducimus aliquid dolorum minus
                    ipsam! Officia accusantium quae nobis vel.</p>
                </div>
                <div class="col-md-4">
                  <h5>Create a full itinerary - for free!</h5>
                  <a href="#" class="btn btn-primary rounded-pill px-4 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-plus" viewBox="0 0 16 16">
                      <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                    Add to Itineraries
                  </a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</x-layouts.app>
