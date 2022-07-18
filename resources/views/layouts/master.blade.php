<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Martires-Alberto-Orozco-Gonzalez</title>

        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">

        <!--====== Animate CSS ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    
        <!--====== Slick CSS ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}">
    
        <!--====== Line Icons CSS ======-->
        <link rel="stylesheet" href="{{ asset('assets/fonts/lineicons/font-css/LineIcons.css') }}">
    
        <!--====== Tailwind CSS ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/tailwindcss.css') }}">

        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        
        @yield('styles')
    

</head>

<body>
    
    {{-- Seccion header  y nav--}}
    @include('Front.partials.header')

      {{-- Seccion para el contenido de la pagina --}}
      @yield('content')

    {{-- Seccion del footer --}}
    @include('Front.partials.footer')

    @yield('scripts')

</body>
</html>