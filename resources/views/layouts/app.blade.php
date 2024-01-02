<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dishaan Selvarajah')</title>
    <!-- Include your CSS and JavaScript files here -->
    {{-- <link rel="stylesheet" href="/public/css/app.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css"> 
    <link rel="shortcut icon" href="{{ asset('images/Icon.svg') }}">
    <script defer src="{{ asset('js/script.js') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bangers&family=Courier+Prime&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-gradient">
    <header id="header" class="header position-relative flex align-items margin-auto">
        <div class="icon-and-burger">
            <a href="/" class="header-icon">
                <img src="{{ asset('images/icon.svg') }}" alt="Favicon af logo">
            </a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <nav id="topNav" class="topnav">
            <a href="{{ route('about') }}" class="tilted-border">Origin Story</a>
            <a href="{{ route('study-cases') }}" class="tilted-border">Cases</a>
            <a href="{{ route('contact') }}" class="tilted-border bg-yellow color-black" id="kontaktIndex">Kontakt</a>
        </nav>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main> 
</body>
</html>
