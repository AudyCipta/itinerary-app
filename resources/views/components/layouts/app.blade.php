<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ env('APP_NAME') }} &middot; {{ $title ?? 'Untitle' }}</title>

  <link rel="shortcut icon" type="image/png" href="/img/logo.png" />

  <!-- Scripts -->
  @vite(['resources/sass/main.scss', 'resources/js/main.js'])

  @stack('styles')
</head>

<body class="d-flex flex-column min-vh-100">
  <x-header />

  <main>{{ $slot }}</main>

  <x-footer />

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    @if (session()->has('success'))
      Swal.fire({
        title: "Success",
        text: "{{ session()->get('success') }}",
        icon: "success"
      });
    @endif

    @if (session()->has('error'))
      Swal.fire({
        title: "Failed",
        text: "{{ session()->get('error') }}",
        icon: "error"
      });
    @endif
  </script>

  @stack('scripts')
</body>

</html>
