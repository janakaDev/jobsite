<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"  type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/jasny-bootstrap.min.css') }}"  type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-select.min.css') }}"  type="text/css">
    <!-- Material CSS -->
    <link rel="stylesheet" href="{{ asset('/css/material-kit.css') }}"  type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('/fonts/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/fonts/themify-icons.css') }}" >

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('/extras/animate.css') }}" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('/extras/owl.carousel.css') }}"  type="text/css">
    <link rel="stylesheet" href="{{ asset('/extras/owl.theme.css') }}"  type="text/css">
    <!-- Rev Slider CSS -->
    <link rel="stylesheet" href="{{ asset('/extras/settings.css') }}"  type="text/css">
    <!-- Slicknav js -->
    <link rel="stylesheet" href="{{ asset('/css/slicknav.css') }}"  type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}"  type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}" type="text/css">
    <!-- Color CSS Styles  -->
    <link rel="stylesheet" href="{{ asset('/css/colors/red.css') }}" type="text/css"  media="screen" />
    <link rel="stylesheet" href="{{ asset('/css/global') }}" type="text/css"  />



    <!-- Main JS  -->


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

<div id="app">

    @include("layouts.top_menu")

    <main class="py-4">
        @yield('content')
    </main>
    @include("layouts.footer")
</div>

</body>
</html>
