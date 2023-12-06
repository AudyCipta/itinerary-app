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
  <section id="place-detail" class="pt-0 mt-5">
    <div class="container">

      <div class="place-detail-content">
        <div class="row">
          <div class="col-md-12">
            <div id="carouselExampleFade" class="carousel slide carousel-fade">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://placehold.co/600x400" class="d-block w-100" alt="img">
                </div>
                <div class="carousel-item">
                  <img src="https://placehold.co/600x400" class="d-block w-100" alt="img">
                </div>
                <div class="carousel-item">
                  <img src="https://placehold.co/600x400" class="d-block w-100" alt="img">
                </div>
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
          </div>
          <div class="col-md">
            <div class="place-detail-body">
              <h2 class="mb-4">{{ $place->name }}</h2>
              <p>A website wireframe, also known as a page schematic or screen blueprint, is a visual guide that
                represents the skeletal framework of a website. Wireframes are created for the purpose of arranging
                elements to best accomplish a particular purpose.</p>
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
  </section>
</x-layouts.app>
