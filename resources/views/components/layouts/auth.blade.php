<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ env('APP_NAME') }} - {{ $title ?? 'Untitle' }}</title>

  <link rel="shortcut icon" type="image/x-icon" href="/img/logo.ico" />

  <!-- Scripts -->
  @vite(['resources/sass/main.scss', 'resources/js/main.js'])

  @stack('styles')
</head>

<body>
  <x-header />

  <div class="auth">
    <div class="auth-image"></div>
    {{ $slot }}
  </div>

  @stack('scripts')
</body>

</html>
