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

      const postList = $('.post-list');

      const renderSkeleton = (i = 1) => {
        return `
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="card h-100 rounded-4" aria-hidden="true">
              <div class="card-body">
                <svg class="placeholder-wave card-img-top rounded-4 mb-2" width="100%" height="220"
                  xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                  preserveAspectRatio="xMidYMid slice" focusable="false">
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" class="placeholder" fill="#868e96"></rect>
                </svg>
                <h3 class="card-title placeholder-wave">
                  <span class="placeholder col-9"></span>
                </h3>
                <p class="card-text placeholder-wave mb-3">
                  <span class="placeholder col-12"></span>
                  <span class="placeholder col-4"></span>
                  <span class="placeholder col-7"></span>
                  <span class="placeholder col-6"></span>
                  <span class="placeholder col-4"></span>
                </p>
                <p class="card-text placeholder-wave">
                  <span class="placeholder col-5"></span>
                </p>
              </div>
            </div>
          </div>
        `.repeat(i);
      }

      const renderPosts = (data) => {
        postList.empty();

        if (data.length) {
          $.each(data, function(index, item) {
            const placeItem = $(`
              <div class="col-4 post-item">
                <div class="card h-100 rounded-4">
                  <div class="card-body w-100 d-flex flex-column">
                    ${item.picture ? `<img src="{{ asset('storage/posts/${item.picture}') }}" class="img-fluid rounded-4" alt="img">` : '<img src="https://placehold.co/600x400" class="img-fluid rounded-4" alt="img">'}
                    <h3 class="card-title mt-3 post-title">${item.title}</h3>
                    <div class="post-desc mb-3"><p>${item.subtitle}</p></div>
                    <a href="{{ route('blog.index') }}/${item.slug}"
                      class="card-link text-decoration-none mt-auto">
                      Learn more
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                          d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            `);
            postList.append(placeItem);
          });
        } else {
          const alert = $(`
            <div class="col-12">
              <div class="alert alert-primary mb-0" role="alert">
                Data not found!
              </div>
            </div>
          `);
          postList.append(alert);
        }
      }

      const getPosts = () => {
        $.ajax({
          method: "GET",
          url: "{{ route('blog.get_all') }}",
          dataType: 'json',
          beforeSend: function() {
            postList.append(renderSkeleton(9));
          },
          success: function(response) {
            setTimeout(function() {
              renderPosts(response.data.posts);
            }, 600);
          },
          error: function(error) {
            console.log(error);
          }
        });
      }

      getPosts();
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

<x-layouts.app title="Blog Page">
  <section id="blog">
    <div class="container">

      <div class="section-header row justify-content-center">
        <div class="col-9">
          <h2 class="text-center">Unlock the best of Badung - dive in today!</h2>
          <p class="text-center lead mb-0">Embark on a virtual odyssey with our Badung Blog! Uncover captivating stories,
            essential tips, and exciting adventures, guiding you through the heart of this enchanting destination.</p>
        </div>
      </div>

      <div class="blog-content">
        <div class="row gy-4 post-list"></div>
      </div>

    </div>
  </section>
</x-layouts.app>
