<!DOCTYPE html><!--  Last Published: Wed Aug 02 2023 21:52:39 GMT+0000 (Coordinated Universal Time)  -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <base href={{ config('app.url') }}/>
    <meta charset="utf-8">
    <title>@yield('title', 'Mernom')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta content="@yield('og:title', 'Mernom')" property="og:title">
    <meta content="@yield('og:description', 'Mernom')" property="og:description">
    <meta content="@yield('og:image', 'default.jpg')" property="og:image">

    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    @stack('styles')
</head>
<body>
    @include('layouts.header')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    @stack('scripts')
</body>
</html>
