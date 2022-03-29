<div class="header__title">
  <h2>SRCSET</h2>
</div>
<div class="header__menu">
  <nav>
    <ul>
      <li><a href="#">Link</a></li>
      <li><a href="#">Aboutz Meh</a></li>
      <li><a href="#">Contacto</a></li>
      @if (Route::has('login'))
        @auth
          <li>
              <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
          </li>
        @else
          <li>
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
          </li>
          @if (Route::has('register'))
            <li>
              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            </li>
          @endif
        @endauth
      @endif
    </ul>
  </nav>
</div>
