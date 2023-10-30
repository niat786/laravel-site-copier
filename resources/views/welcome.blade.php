<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTTrack Online: Download Websites and HTML Templates for offline</title>
    {{-- @vite('resources/css/app.css') --}}
    @vite(['resources/css/app.css'])
    @livewireStyles


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
