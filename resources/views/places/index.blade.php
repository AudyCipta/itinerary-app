@push('scripts')
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <script>
    $(function() {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        cache: false
      });

      const placeList = $('.place-list');

      const renderSkeleton = () => {
        return `
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="card h-100 rounded-4" aria-hidden="true">
              <div class="card-body">
                <svg class="placeholder-wave card-img-top rounded-4 mb-2" width="100%" height="210"
                  xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                  preserveAspectRatio="xMidYMid slice" focusable="false">
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" class="placeholder"></rect>
                </svg>
                <h4 class="card-title placeholder-wave">
                  <span class="placeholder col-9"></span>
                </h4>
                <p class="card-text placeholder-wave">
                  <span class="placeholder col-3"></span>
                  <span class="placeholder col-4"></span>
                </p>
              </div>
            </div>
          </div>
        `;
      }

      const renderPlaces = (data) => {
        placeList.empty();

        if (data.length) {
          $.each(data, function(index, item) {
            const placeItem = $(`
              <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('places.index') }}/${item.slug}" class="card text-decoration-none rounded-4">
                  <div class="card-body">
                    <img src="{{ asset('storage/places/${item.place_images[0].picture}') }}" class="card-img-top mb-3 rounded-4 my-img" alt="places">
                    <h5 class="card-title text-truncate">${item.name}</h5>
                    <p class="card-text">${item.destination_preference.destination_category.name} / ${item.destination_preference.name}</p>
                  </div>
                </a>
              </div>
            `);
            placeList.append(placeItem);
          });
        } else {
          const alert = $(`
            <div class="col-12">
              <div class="alert alert-primary mb-0" role="alert">
                Data not found!
              </div>
            </div>
          `);
          placeList.append(alert);
        }
      }

      const getPlaces = () => {
        $.ajax({
          method: "GET",
          url: "{{ route('places.get_all') }}",
          dataType: 'json',
          beforeSend: function() {
            for (let index = 0; index < 9; index++) {
              placeList.append(renderSkeleton());
            }
          },
          success: function(response) {
            setTimeout(function() {
              renderPlaces(response.data.places);
            }, 800);
          },
          error: function(error) {
            console.log(error);
          }
        });
      }

      const searchPlace = () => {
        let delayTimer;

        $('#keyword').on('input', function() {
          clearTimeout(delayTimer);

          delayTimer = setTimeout(function() {
            $.ajax({
              method: "GET",
              url: "{{ route('places.search') }}",
              data: {
                key: $('#keyword').val()
              },
              dataType: 'json',
              success: function(response) {
                renderPlaces(response.data.places);
              },
              error: function(error) {
                console.log(error);
              }
            });
          }, 1000);
        });
      }

      getPlaces();
      searchPlace();
    });
  </script>
@endpush

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
            <input type="text" id="keyword" class="form-control p-2 rounded-pill" placeholder="Search Place"
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
        <div class="row gy-4 place-list"></div>
      </div>

    </div>
  </section>
</x-layouts.app>
