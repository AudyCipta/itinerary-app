<header>
  <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary fixed-top" data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand d-block d-lg-none" href="{{ route('home.index') }}">
        <img src="/img/logo.png" alt="{{ env('APP_NAME') }}" width="27">
      </a>

      <div class="d-flex align-items-center column-gap-2">
        <div class="d-flex d-lg-none align-items-center column-gap-2">
          @guest
            @if (!request()->routeIs('login'))
              <a href="{{ route('login') }}" class="btn btn-second rounded-pill px-3">Login</a>
            @endif
          @else
            @if (request()->routeIs('trips.index'))
              <button class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#addItineraryModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-plus-lg" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                </svg>
                <span>Add New Trip</span>
              </button>
            @else
              <a href="{{ route('trips.index') }}" class="btn btn-second rounded-pill px-3">My Trips</a>
            @endif
            <div class="flex-shrink-0 dropdown">
              <a href="#" class="d-block link-body-emphasis text-decoration-none" data-bs-toggle="dropdown"
                aria-expanded="true">
                <img src="{{ auth()->user()->getImageURL() }}" alt="picture" width="32" height="32"
                  class="rounded-circle" referrerpolicy="no-referrer">
              </a>
              <ul class="dropdown-menu dropdown-menu-end text-small shadow" data-popper-placement="top-end">
                {{-- <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li> --}}
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </li>
              </ul>

            </div>
          @endguest
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11"
          aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
        <a class="navbar-brand col-lg-3 me-0 d-none d-lg-block" href="{{ route('home.index') }}">
          <img src="/img/logo.png" alt="{{ env('APP_NAME') }}" width="27">
        </a>

        <ul class="navbar-nav col-lg-6 justify-content-lg-center">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('home.index') ? 'active' : '' }}"
              href="{{ route('home.index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('itineraries.*') ? 'active' : '' }}"
              href="{{ route('itineraries.index') }}">Itineraries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('places.*') ? 'active' : '' }}"
              href="{{ route('places.index') }}">Places</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('blog.*') ? 'active' : '' }}"
              href="{{ route('blog.index') }}">Blog</a>
          </li>
        </ul>
        <div class="d-none d-lg-flex col-lg-3 justify-content-lg-end align-items-center column-gap-3">
          @guest
            @if (!request()->routeIs('login'))
              <a href="{{ route('login') }}" class="btn btn-second rounded-pill px-3">Login</a>
            @endif
          @else
            @if (request()->routeIs('trips.index'))
              <button class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#addItineraryModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-plus-lg" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                </svg>
                <span>Add New Trip</span>
              </button>
            @else
              <a href="{{ route('trips.index') }}" class="btn btn-second rounded-pill px-3">My Trips</a>
            @endif
            <div class="flex-shrink-0 dropdown">
              <a href="#" class="d-block link-body-emphasis text-decoration-none" data-bs-toggle="dropdown"
                aria-expanded="true">
                <img src="{{ auth()->user()->getImageURL() }}" alt="picture" width="32" height="32"
                  class="rounded-circle" referrerpolicy="no-referrer">
              </a>
              <ul class="dropdown-menu dropdown-menu-end text-small shadow" data-popper-placement="top-end">
                {{-- <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li> --}}
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </li>
              </ul>

            </div>
          @endguest
        </div>
      </div>

    </div>
  </nav>
</header>
