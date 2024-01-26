<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTTrack Online: Download Websites and HTML Templates for offline</title>

    <meta name="google-site-verification" content="pyKvbrMf18kEyCCqY93hBplnyqgqEsa5-5rJl-OJVBo" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2RLJEQ4B4D"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-2RLJEQ4B4D');
    </script>

    {{-- @vite('resources/css/app.css') --}}
    @vite(['resources/css/app.css'])
    @livewireStyles

    {{-- favicon --}}
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="310x310"
        href="{{ asset('images/favicons/android-icon-310x310.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ 'images/favicons/favicon-32x32.png' }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ 'images/favicons/favicon-96x96.png' }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ 'images/favicons/favicon-16x16.png' }}">
    <link rel="manifest" href="{{ asset('images/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('images/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">


    {{-- favicon ends --}}


    {{-- meta tags --}}
    <meta name="title" content="HTTrack Online tool Download Websites and HTML Templates for offline">
    <meta name="description"
        content="Download websites and HTML templates, including all assets (CSS, images, JS). Ideal for designers and front-end developers">
    <meta name="keywords"
        content="Download HTML templates, Download Websites, Download webpage assets, httrack-online webpage downloader">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">

    {{-- meta tags end --}}

    {{-- og tags --}}

    <meta property="og:title" content="HTTrack Online tool, Download Websites and HTML Templates for offline">
    <meta property="og:site_name" content="HTTrack Online">
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:description"
        content="Download websites and HTML templates, including all assets (CSS, images, JS). Ideal for designers and front-end developers">
    <meta property="og:type" content="product">
    <meta property="og:image" content="{{ asset('images/site-copier-banner.webp') }}">


    {{-- og tags end --}}

    {{-- twitter card --}}

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="HTTrack Online tool Download Websites and HTML Templates for offline">
    <meta name="twitter:description"
        content="Download websites and HTML templates, including all assets (CSS, images, JS). Ideal for designers and front-end developers">
    <meta name="twitter:image" content="{{ asset('images/site-copier-banner.webp') }}">
    <meta name="twitter:image:alt" content="website copier">

    {{-- twitter card ends --}}


</head>

<body class="bg-white dark:bg-gray-800">


    @livewire('scraper')

</body>


</html>
