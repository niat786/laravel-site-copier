<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- @vite('resources/css/app.css') --}}
    @vite(['resources/css/app.css'])
    @livewireStyles


</head>

<body class="bg-white dark:bg-gray-800">


    @livewire('scraper')

</body>


</html>
