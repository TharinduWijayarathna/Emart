<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('title', 'Emart - X Module')
    </title>
    <meta name="keywords" content="">
    <meta name="description" content="Yoo Brands Pvt Ltd">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/logo/box_logo.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/logo/box_logo.png') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $curr_url = Route::currentRouteName();
        // if ($errors) {
        // $errors_msgs = $errors->messages();
        // }else {
        // $errors_msgs = [];
        // }
    @endphp

    @include('libraries.styles')
</head>

<body class="g-sidenav-show  bg-gray-100">

    @include('components.preloader')

    <div class="min-height-150 bg-header position-absolute w-100"></div>
    @include('components.side-bar')
    <main class="main-content position-relative border-radius-lg ">
        @include('components.nav')
        {{ $header ?? '' }}
        <div class="container-fluid py-4">
            {{ $content ?? '' }}
            @stack('modals')
        </div>
        @include('components.footer')
    </main>
    @include('libraries.scripts')
</body>

</html>
