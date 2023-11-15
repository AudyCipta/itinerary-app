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

<x-layouts.auth title="Verify Page">
  <section id="auth" class="py-0">
    <div class="auth-content vh-100 position-relative">

      <div class="auth-image"></div>

      <div class="auth-form position-absolute">
        <div class="card border p-5 pt-4 rounded-4 shadow">
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
