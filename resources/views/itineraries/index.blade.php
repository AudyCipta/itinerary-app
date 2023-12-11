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

<x-layouts.app title="Itineraries Page">
  <section id="itineraries">
    <div class="container">

      <div class="itineraries-content">
        <div class="row gy-4 itineraries-list">
          <div class="col-12 col-md-4 itineraries-item">
            <a href="{{ route('itineraries.detail', ['id' => 'my-trip-1']) }}" class="card text-decoration-none">
              <img src="https://placehold.co/600x400" class="card-img-top" alt="places">
              <div class="card-body">
                <h3 class="card-title text-truncate">Trip Name Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Reiciendis
                  cumque minima recusandae, enim sapiente quam hic deserunt quibusdam ducimus possimus accusantium,
                  nihil dolore eveniet! Tempore temporibus ut aliquid nam iste!</h3>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus praesentium,
                  debitis harum suscipit repellendus, beatae corporis voluptatem, quaerat libero dolore minima
                  assumenda amet cum exercitationem dignissimos sapiente minus. Assumenda, deleniti.</p>
                <hr>
                <div class="d-flex justify-content-between schedule">
                  <h6 class="mb-0">7 Days Trip</h6>
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
          <div class="col-12 col-md-4 itineraries-item">
            <a href="{{ route('itineraries.detail', ['id' => 'my-trip-1']) }}" class="card text-decoration-none">
              <img src="https://placehold.co/600x400" class="card-img-top" alt="places">
              <div class="card-body">
                <h3 class="card-title text-truncate">Trip Name Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Reiciendis
                  cumque minima recusandae, enim sapiente quam hic deserunt quibusdam ducimus possimus accusantium,
                  nihil dolore eveniet! Tempore temporibus ut aliquid nam iste!</h3>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus praesentium,
                  debitis harum suscipit repellendus, beatae corporis voluptatem, quaerat libero dolore minima
                  assumenda amet cum exercitationem dignissimos sapiente minus. Assumenda, deleniti.</p>
                <hr>
                <div class="d-flex justify-content-between schedule">
                  <h6 class="mb-0">7 Days Trip</h6>
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
          <div class="col-12 col-md-4 itineraries-item">
            <a href="{{ route('itineraries.detail', ['id' => 'my-trip-1']) }}" class="card text-decoration-none">
              <img src="https://placehold.co/600x400" class="card-img-top" alt="places">
              <div class="card-body">
                <h3 class="card-title text-truncate">Trip Name Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Reiciendis
                  cumque minima recusandae, enim sapiente quam hic deserunt quibusdam ducimus possimus accusantium,
                  nihil dolore eveniet! Tempore temporibus ut aliquid nam iste!</h3>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus praesentium,
                  debitis harum suscipit repellendus, beatae corporis voluptatem, quaerat libero dolore minima
                  assumenda amet cum exercitationem dignissimos sapiente minus. Assumenda, deleniti.</p>
                <hr>
                <div class="d-flex justify-content-between schedule">
                  <h6 class="mb-0">7 Days Trip</h6>
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
        </div>
      </div>

    </div>
  </section>
</x-layouts.app>
