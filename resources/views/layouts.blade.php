<!doctype html>
<html lang="{{ app()->getLocale() }}" xmlns:livewire="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>@yield('pageTitle')</title>
        <meta name="" content="">
        <meta name="title" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">

        <meta name="author" content="">
        <link rel="author" href="humans.txt">

        <meta name="google" content="notranslate">
        <meta name="theme-color" content="#fff">
        <meta name="generator" content="PHPStorm">
        <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">
        <link rel="license" href="copyright.html">

        <!--social-->
        <meta property="og:url" content="">
        <meta property="og:type" content="">
        <meta property="og:title" content="">
        <meta property="og:description" content="">
        <meta property="og:image" content="">

        <meta name="twitter:card" content="summary/description">
        <meta name="twitter:url" content="https://website.com">
        <meta name="twitter:title" content="Title of website">
        <meta name="twitter:description" content="description">

        <!--google-->
        <meta name="robots" content="index, follow" />
        <meta name="revisit-after" content="3 month" />

        <!--favicon-->
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('image/favicon.ico')}}" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('image/favicon.ico')}}" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('image/favicon.ico')}}" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('image/favicon.ico')}}" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ asset('image/favicon.ico')}}" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('image/favicon.ico')}}" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('image/favicon.ico')}}" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('image/favicon.ico')}}" />
        <link rel="icon" type="image/png" href="{{ asset('/images/fav196.png')}}" sizes="196x196" />
        <link rel="icon" type="image/png" href="{{ asset('/images/fav96.png')}}" sizes="96x96" />
        <link rel="icon" type="image/png" href="{{ asset('/images/fav32.png')}}" sizes="32x32" />
        <link rel="icon" type="image/png" href="{{ asset('/images/fav16.png')}}" sizes="16x16" />
        <link rel="icon" type="image/png" href="{{ asset('/images/fav128.png')}}" sizes="128x128" />
        <meta name="application-name" content="&nbsp;"/>
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="{{ asset('image/favicon.ico')}}" />
        <meta name="msapplication-square70x70logo" content="{{ asset('image/favicon.ico')}}" />
        <meta name="msapplication-square150x150logo" content="{{ asset('image/favicon.ico')}}" />
        <meta name="msapplication-wide310x150logo" content="{{ asset('image/favicon.ico')}}" />
        <meta name="msapplication-square310x310logo" content="{{ asset('image/favicon.ico')}}" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
        <livewire:styles>
    </head>

    <body class="font-sans">

    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@0.5.21/dist/vanta.clouds.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    <livewire:scripts>
    </body>
</html>
