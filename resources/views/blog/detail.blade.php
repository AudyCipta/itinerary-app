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

<x-layouts.app title="Blog Detail">
  <section id="blog-detail">
    <div class="container">

      <div class="blog-detail-content">
        <div class="text-center mb-5">
          <h2>{{ $post->title }}</h2>
          <p>{{ $post->subtitle }}</p>
        </div>

        <img
          src="{{ $post->picture ? asset('storage/posts/' . $post->picture) : 'https://placehold.co/600x400?text=Photo+is+not+available' }}"
          alt="img" class="img-fluid w-100 rounded-3">

        {!! $post->description !!}
      </div>

    </div>
  </section>
</x-layouts.app>
