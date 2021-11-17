<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" href="/assets/icon.png" />

        <title>@yield('title')</title>

        {{-- Style --}}
        @stack('prepend-style')
        @include('includes.adminstyle')
        @stack('addon-style')
    </head>

    {{-- Page Content --}}
    @yield('content')

    {{-- Script --}}
    @stack('prepend-script')
    @include('includes.adminscript')
    @stack('addon-script')

</html>
