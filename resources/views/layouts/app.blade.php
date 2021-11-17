<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="/assets/icon.png" />

    <title>@yield('title')</title>

    {{-- Style --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
  </head>
  <body>

    {{-- Navbar --}}
    @include('includes.navbar')

    {{-- Page Content --}}
    @yield('content')

    {{-- Script --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')

  </body>
</html>
