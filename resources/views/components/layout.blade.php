<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Aulab Post' }}</title>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/752e643d10.js" crossorigin="anonymous"></script>
    @vite(['resources/sass/app.scss', 'resources/css/app.css'])
    {{ $style ?? '' }}
</head>

<body>
    {{-- NavBar --}}
    <div class="container-fluid p-0 my-navbar">
        <x-navbar/>
    </div>


    {{-- Main --}}
    <div class="container main">
    <main class="py-4">
        {{ $slot }}
        
    </main>
    </div>


    {{-- Footer --}}
    <div class="container-fluid footer bg-light">
        <x-footer/>
    </div>

    <div class="container-up position-fixed">
        <button class="btn-up bg-info text-light"><span class="fa-solid fa-chevron-up"></span></button>
    </div>

    {{-- Scripts --}}
    @vite(['resources/js/app.js'])
    <script src="https://kit.fontawesome.com/752e643d10.js" crossorigin="anonymous"></script>
    {{ $script ?? '' }}
</body>

</html>
