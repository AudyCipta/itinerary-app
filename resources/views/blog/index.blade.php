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
        <div class="row gy-4">
          <div class="col-4">
            <div class="card h-100 rounded-4">
              <div class="card-body w-100 d-flex flex-column">
                <img src="https://placehold.co/600x400" class="img-fluid rounded-4" alt="img">
                <h3 class="card-title mt-3">Lorem, ipsum.</h3>
                <p class="card-text text-auto mb-3">Lorem ipsum dolor sit amet consecte tur adipiscing elit semper
                  dalaracc lacus vel
                  facilisis volutpat est velitolm.</p>
                <a href="{{ route('blog.detail', ['id' => 'post-1']) }}" class="card-link text-decoration-none mt-auto">
                  Learn more
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                  </svg></a>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card h-100 rounded-4">
              <div class="card-body w-100 d-flex flex-column">
                <img src="https://placehold.co/600x400" class="img-fluid rounded-4" alt="img">
                <h3 class="card-title mt-3">Lorem, ipsum.</h3>
                <p class="card-text text-auto mb-3">Lorem ipsum dolor sit amet consecte tur adipiscing elit semper
                  dalaracc lacus vel
                  facilisis volutpat est velitolm.</p>
                <a href="{{ route('blog.detail', ['id' => 'post-1']) }}" class="card-link text-decoration-none mt-auto">
                  Learn more
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                  </svg></a>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card h-100 rounded-4">
              <div class="card-body w-100 d-flex flex-column">
                <img src="https://placehold.co/600x400" class="img-fluid rounded-4" alt="img">
                <h3 class="card-title mt-3">Lorem, ipsum.</h3>
                <p class="card-text text-auto mb-3">Lorem ipsum dolor sit amet consecte tur adipiscing elit semper
                  dalaracc lacus veltolm.</p>
                <a href="{{ route('blog.detail', ['id' => 'post-1']) }}" class="card-link text-decoration-none mt-auto">
                  Learn more
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                  </svg></a>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card h-100 rounded-4">
              <div class="card-body w-100 d-flex flex-column">
                <img src="https://placehold.co/600x400" class="img-fluid rounded-4" alt="img">
                <h3 class="card-title mt-3">Lorem, ipsum.</h3>
                <p class="card-text text-auto mb-3">Lorem ipsum dolor sit amet consecte tur adipiscing elit semper
                  dalaracc lacus vel
                  facilisis volutpat est velitolm.</p>
                <a href="{{ route('blog.detail', ['id' => 'post-1']) }}" class="card-link text-decoration-none mt-auto">
                  Learn more
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                  </svg></a>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card h-100 rounded-4">
              <div class="card-body w-100 d-flex flex-column">
                <img src="https://placehold.co/600x400" class="img-fluid rounded-4" alt="img">
                <h3 class="card-title mt-3">Lorem, ipsum.</h3>
                <p class="card-text text-auto mb-3">Lorem ipsum dolor sit amet consecte tur adipiscing elit semper
                  dalaracc lacus vel
                  facilisis volutpat est velitolm.</p>
                <a href="{{ route('blog.detail', ['id' => 'post-1']) }}" class="card-link text-decoration-none mt-auto">
                  Learn more
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                  </svg></a>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card h-100 rounded-4">
              <div class="card-body w-100 d-flex flex-column">
                <img src="https://placehold.co/600x400" class="img-fluid rounded-4" alt="img">
                <h3 class="card-title mt-3">Lorem, ipsum.</h3>
                <p class="card-text text-auto mb-3">Lorem ipsum dolor sit amet consecte tur adipiscing elit semper
                  dalaracc lacus veltolm.</p>
                <a href="{{ route('blog.detail', ['id' => 'post-1']) }}"
                  class="card-link text-decoration-none mt-auto">
                  Learn more
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                  </svg></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</x-layouts.app>
