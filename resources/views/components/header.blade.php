<header>
  <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary fixed-top" data-bs-theme="dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11"
        aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
        <a class="navbar-brand col-lg-3 me-0" href="{{ route('home.index') }}">
          <img src="/img/logo.png" alt="{{ env('APP_NAME') }}" width="27">
        </a>
        <ul class="navbar-nav col-lg-6 justify-content-lg-center">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('home.index') ? 'active' : '' }}"
              href="{{ route('home.index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Itineraries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('places.*') ? 'active' : '' }}"
              href="{{ route('places.index') }}">Places</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
        </ul>
        <div class="d-lg-flex col-lg-3 justify-content-lg-end  align-items-center column-gap-3">
          @guest
            <a href="{{ route('login') }}" class="btn btn-primary rounded-pill px-3">Login</a>
          @else
            <a href="#" class="btn btn-primary rounded-pill px-3">My Trips</a>
            <div class="flex-shrink-0 dropdown">
              <a href="#" class="d-block link-body-emphasis text-decoration-none" data-bs-toggle="dropdown"
                aria-expanded="true">
                <img src="{{ auth()->user()->getImageURL() }}" alt="picture" width="32" height="32"
                  class="rounded-circle">
              </a>
              <ul class="dropdown-menu dropdown-menu-end text-small shadow" data-popper-placement="top-end">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
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
