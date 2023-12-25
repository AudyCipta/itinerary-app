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

<x-layouts.app title="Blog Detail">
  <section id="blog-detail">
    <div class="container">

      <div class="blog-detail-content">
        <div class="text-center mb-5">
          <h2>{{ $post->title }}</h2>
          <p>{{ $post->subtitle }}</p>
        </div>

        <img src="{{ $post->picture ? asset('storage/posts/' . $post->picture) : 'https://placehold.co/600x400' }}"
          alt="img" class="img-fluid w-100 rounded-3">

        {!! $post->description !!}
      </div>

    </div>
  </section>
</x-layouts.app>
