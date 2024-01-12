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
      border-color: #6e6e6e !important;
    }
  </style>
@endpush

<x-layouts.auth title="Login Page">
  <section id="auth" class="py-0">
    <div class="auth-content min-vh-100">

      <div class="auth-form position-absolute">
        <div class="card border p-2 pt-1 p-md-5 pt-md-4 rounded-4 shadow">
          <div class="card-body">
            <h2 class="mt-0 mb-2">{{ __('Login') }}</h2>
            <p class="lead text-muted">Your journey starts here</p>

            <form method="POST" action="{{ route('login') }}">
              @csrf

              <div class="mb-2">
                <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}<span
                    class="text-danger">*</span></label>

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                  name="email" value="{{ old('email') }}" placeholder="Enter your email address" required
                  autocomplete="email" autofocus>

                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="mb-3">
                <label for="password" class="col-form-label text-md-end">{{ __('Password') }}<span
                    class="text-danger">*</span></label>

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                  name="password" placeholder="Enter your password" required autocomplete="current-password">

                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check mb-0">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>

                  <label class="form-check-label text-muted" for="remember">
                    {{ __('Remember Me') }}
                  </label>
                </div>
                @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}" class="text-decoration-none">
                    {{ __('Forgot Your Password?') }}
                  </a>
                @endif
              </div>

              <div class="d-grid">
                <button type="submit"
                  class="btn btn-primary rounded-pill py-2 text-uppercase fw-bold position-relative">
                  <span>{{ __('Continue') }}</span>
                  <span class="position-absolute" style="right: 28px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                      class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                    </svg>
                  </span>
                </button>
              </div>

              @if (Route::has('register'))
                <p class="mt-3 mb-0 text-muted">Don't have an account?
                  <a href="{{ route('register') }}" class="text-decoration-none">
                    {{ __('Register') }}
                  </a>
                </p>
              @endif

              <div class="hr-text my-4 text-muted">or</div>

              <div class="d-grid">
                <a href="{{ route('google.login') }}"
                  class="btn btn-google rounded-3 rounded-pill d-flex align-items-center w-100">
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26"
                    viewBox="0 0 48 48">
                    <path fill="#FFC107"
                      d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                    </path>
                    <path fill="#FF3D00"
                      d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                    </path>
                    <path fill="#4CAF50"
                      d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                    </path>
                    <path fill="#1976D2"
                      d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                    </path>
                  </svg>
                  <span>Continue with Google</span>
                </a>
              </div>
            </form>
          </div>

        </div>
      </div>

    </div>
  </section>
</x-layouts.auth>
