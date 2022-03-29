<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

      <!-- Styles -->
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
      <link rel="stylesheet" href="{{ asset('css/main.css') }}">

  </head>
  <body class="antialiased">
    <div class="fixed right-0 z-10 opacity-10 hover:opacity-50">@include('layouts.navigation')</div>

    <!-- Page Heading -->
    <header class="header fixed">
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
    </header>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Scripts -->
    @include('partials.scripts')
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
