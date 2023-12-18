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
    <script src="your-js-file.js"></script>
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
            <a href="{{ route('contact') }}" class="tilted-border bg-yellow color-black">Kontakt</a>
        </nav>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main> 

    <footer>  
        <img src="{{ asset('images/footer.svg') }}" class="footer-om-mig position-absolute" alt="Bygninger i bunden af siden"/>
        <nav class="footer-nav text-center block margin-auto">
            <h3 class="fontsize-h2 fontfamily-comicfont">Mangler du en Front-ender?</h3>
            <a href="mailto:Dishaan@Selvarajah.dk" target="_blank">
                <img src="{{ asset('images/envelope-solid.svg') }}" alt="Mail"/>
            </a>
            <a href="https://www.linkedin.com/in/dishaan-selvarajah-5748bb21a/" target="_blank">
                <img src="{{ asset('images/linkedin-brands.svg') }}" alt="linkedin logo"/>
            </a>
        </nav>
        <div class="overlay-om-mig position-absolute block width100"></div>
    </footer> 

</body>
</html>
