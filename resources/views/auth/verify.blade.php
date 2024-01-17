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

<x-layouts.auth title="Verify">
  <section id="auth" class="py-0">
    <div class="auth-content min-vh-100">

      <div class="auth-form position-absolute">
        <div class="card border p-2 pt-1 p-md-5 pt-md-4 rounded-4 shadow">
          <div class="card-body">
            <h2 class="mt-0 mb-0">{{ __('Verify Your Email Address') }}</h2>
            <p class="lead text-muted mb-4">
              {{ __('Before proceeding, please check your email for a verification link.') }}
              {{ __('If you did not receive the email') }},</p>

            @if (session('resent'))
              <div class="alert alert-success" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
              </div>
            @endif

            <form method="POST" action="{{ route('verification.resend') }}">
              @csrf

              <div class="d-grid">
                <button type="submit" class="btn btn-primary rounded-pill py-2 text-uppercase fw-bold">
                  {{ __('click here to request another') }}
                </button>
              </div>
            </form>
          </div>

        </div>
      </div>

    </div>
  </section>
</x-layouts.auth>
