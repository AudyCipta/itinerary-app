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

<x-layouts.auth title="Confirm Password">
  <section id="auth" class="py-0">
    <div class="auth-content vh-100 position-relative">

      <div class="auth-image"></div>

      <div class="auth-form position-absolute">
        <div class="card border p-5 pt-4 rounded-4 shadow">
          <div class="card-body">
            <h2 class="mt-0 mb-0">{{ __('Confirm Password') }}</h2>
            <p class="lead text-muted">{{ __('Please confirm your password before continuing.') }}</p>

            <form method="POST" action="{{ route('password.confirm') }}">
              @csrf

              <div class="mb-3">
                <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                  name="password" placeholder="Enter your password" required autocomplete="current-password">

                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="mb-3">
                @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}" class="text-decoration-none">
                    {{ __('Forgot Your Password?') }}
                  </a>
                @endif
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary rounded-pill py-2 text-uppercase fw-bold">
                  {{ __('Confirm Password') }}
                </button>
              </div>
            </form>
          </div>

        </div>
      </div>

    </div>
  </section>
</x-layouts.auth>
