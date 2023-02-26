<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    @vite('resources/js/app.js')

    @yield('cdns')

</head>

<body>
    {{-- GENERIC-HEADER --}}

    @include('includes.header')

    {{-- EXTENDS-MAIN --}}
    <main>
        @yield('main-content')
    </main>






    {{-- SCRIPT --}}
    @yield('script')
</body>

</html>
