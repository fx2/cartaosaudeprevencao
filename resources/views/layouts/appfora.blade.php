<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cartão Saúde Prevenção</title>
    <link href="images/" rel="icon">
    {{-- <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/green.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('css/loading.css') }}">
    <style>
        .botaoprimeiro {
            position: relative;
        }

    </style>
</head>
{{-- @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        @endauth
    </div>
@endif --}}

<body>
    <section id="loading">
        <div id="loading-content"></div>
    </section>
@yield('content')
@include('layouts.fragments.footer')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false') }}"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/sweetalert.js') }}"></script>

    {{-- <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script> --}}

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script> --}}

    <!--Bootstrap Core-->
    {{-- <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}

    <!--to view items on reach-->
    {{-- <script src="{{ asset('js/jquery.appear.js') }}"></script> --}}

    <!--Equal-Heights-->
    {{-- <script src="{{ asset('js/jquery.matchHeight-min.js') }}"></script> --}}

    <!--Owl Slider-->
    {{-- <script src="{{ asset('js/owl.carousel.min.js') }}"></script> --}}

    <!--number counters-->
    {{-- <script src="{{ asset('js/jquery-countTo.js') }}"></script> --}}

    <!--Parallax Background-->
    {{-- <script src="{{ asset('js/parallaxie.js') }}"></script> --}}

    <!--Cubefolio Gallery-->
    {{-- <script src="{{ asset('js/jquery.cubeportfolio.min.js') }}"></script> --}}

    <!--FancyBox popup-->
    {{-- <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script> --}}

    <!-- Video Background-->
    {{-- <script src="{{ asset('js/jquery.background-video.js') }}"></script> --}}

    <!--TypeWriter-->
    {{-- <script src="{{ asset('js/typewriter.js') }}"></script> --}}

    <!--Particles-->
    {{-- <script src="{{ asset('js/particles.min.js') }}"></script> --}}

    <!--WOw animations-->
    {{-- <script src="{{ asset('js/wow.min.js') }}"></script> --}}

    <!--Revolution SLider-->
    {{-- <script src="{{ asset('js/revolution/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('js/revolution/jquery.themepunch.revolution.min.js') }}"></script> --}}
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    {{-- <script src="{{ asset('js/revolution/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('js/revolution/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('js/revolution/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('js/revolution/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('js/revolution/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('js/revolution/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('js/revolution/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('js/revolution/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('js/revolution/extensions/revolution.extension.video.min.js') }}"></script> --}}

    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/campanha.js') }}"></script>
    
    <!--Google Map API-->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJnKEvlwpyjXfS_h-J1Cne2fPMqeb44Mk"></script> -->
    <script src="{{ asset('js/functions.js') }}"></script>
    <script>
        function showLoading() {
          document.querySelector('#loading').classList.add('loading');
          document.querySelector('#loading-content').classList.add('loading-content');
        }      
        function hideLoading() {
            document.querySelector('#loading').classList.remove('loading');
            document.querySelector('#loading-content').classList.remove('loading-content');
        }
    </script>
    @stack('js')

</body>

</html>