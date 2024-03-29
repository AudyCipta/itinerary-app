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

<x-layouts.auth title="Reset Password">
  <section id="auth" class="py-0">
    <div class="auth-content min-vh-100">

      <div class="auth-form position-absolute">
        <div class="card border p-2 pt-1 p-md-5 pt-md-4 rounded-4 shadow">
          <div class="card-body">
            <h2 class="mt-0 mb-0">{{ __('Reset Password') }}</h2>
            <p class="lead text-muted">Your password will be reset after you filled this form.</p>

            <form method="POST" action="{{ route('password.update') }}">
              @csrf

              <input type="hidden" name="token" value="{{ $token }}">

              <div class="mb-2">
                <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                  name="email" value="{{ $email ?? old('email') }}" placeholder="Enter your email address" required
                  autocomplete="email" autofocus>

                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="mb-2">
                <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                  name="password" placeholder="Enter your password" required autocomplete="new-password">

                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="mb-4">
                <label for="password-confirm" class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                  placeholder="Enter your confirm password" required autocomplete="current-password">
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary rounded-pill py-2 text-uppercase fw-bold">
                  {{ __('Reset Password') }}
                </button>
              </div>
            </form>
          </div>

        </div>
      </div>

    </div>
  </section>
</x-layouts.auth>
