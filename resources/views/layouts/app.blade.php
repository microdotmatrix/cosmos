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
  <body>
    <div class="fixed right-0 z-10 opacity-10 hover:opacity-50">@include('layouts.navigation')</div>

    <!-- Page Heading -->
    <header class="header fixed z-50">
      @include('components.header')
    </header>

    <!-- Page Content -->
    <main>
      @yield('content')
    </main>

    <footer class="footer">
      @include('components.footer')
    </footer>

    <!-- Scripts -->
    @include('partials.scripts')
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
