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

      const itineraryList = $('.itineraries-list');

      const renderSkeleton = (i = 1) => {
        return `
          <div class="col-12 col-md-6 col-lg-4 itineraries-item">
            <a href="javascript:void(0)" class="card text-decoration-none">
              <svg class="placeholder-wave card-img-top" width="100%" height="220" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" class="placeholder" fill="#868e96"></rect>
              </svg>
              <div class="card-body">
                <h3 class="card-title placeholder-wave">
                  <span class="placeholder col-9"></span>
                </h3>
                <hr>
                <div class="d-flex align-items-center schedule">
                  <h6 class="placeholder-wave w-100 mb-0">
                    <span class="placeholder col-5"></span>
                  </h6>
                  <span class="px-1 py-0 rounded text-light bg-primary placeholder">
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
        `.repeat(i);
      }

      const renderItineraries = (data) => {
        itineraryList.empty();

        if (data.length) {
          $.each(data, function(index, item) {
            const itineraryItem = $(`
              <div class="col-12 col-md-6 col-lg-4 itineraries-item">
                <a href="{{ route('itineraries.index') }}/${item.slug}" class="card text-decoration-none">
                  ${item.thumbnail ? `<img src="{{ asset('storage/thumbnail-itineraries/${item.thumbnail}') }}" class="card-img-top" alt="img">` : '<img src="https://placehold.co/600x400" class="card-img-top" alt="img">'}
                  <div class="card-body">
                    <h3 class="card-title text-truncate">${item.name}</h3>
                    <hr>
                    <div class="d-flex justify-content-between schedule">
                      <h6 class="mb-0">${item.total_day} Days Trip</h6>
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
            `);
            itineraryList.append(itineraryItem);
          });
        } else {
          const alert = $(`
            <div class="col-12">
              <div class="alert alert-primary mb-0" role="alert">
                Data not found!
              </div>
            </div>
          `);
          itineraryList.append(alert);
        }
      }

      const getItineraries = () => {
        $.ajax({
          method: "GET",
          url: "{{ route('itineraries.get_all') }}",
          dataType: 'json',
          beforeSend: function() {
            itineraryList.append(renderSkeleton(9));
          },
          success: function(response) {
            setTimeout(function() {
              renderItineraries(response.data.itineraries);
            }, 800);
          },
          error: function(error) {
            console.log(error);
          }
        });
      }

      getItineraries();
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

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
    }

    .navbar-toggler {
      border-color: #ccc !important;
    }
  </style>
@endpush

<x-layouts.app title="Itineraries">
  <section id="itineraries">
    <div class="container">

      <div class="itineraries-content">
        <div class="row g-4 g-lg-5 itineraries-list"></div>
      </div>

    </div>
  </section>
</x-layouts.app>
