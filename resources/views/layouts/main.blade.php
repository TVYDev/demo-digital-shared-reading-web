<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    @include('layouts.partials.navbar')
    <div class="container" id="mainContent">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            if(window.location.href.includes('/login')) {
                $('#navbarNav .navHome').removeClass('active');
                $('#navbarNav .navContactUs').removeClass('active');
                $('#navbarNav .navLogin').addClass('active');
            }
            else if(window.location.href.includes('/home') || window.location.href.includes('/menu')){
                $('#navbarNav .navHome').addClass('active');
                $('#navbarNav .navContactUs').removeClass('active');
                $('#navbarNav .navLogin').removeClass('active');
            }
            else if(window.location.href.includes('/contact-us')){
                $('#navbarNav .navContactUs').addClass('active');
                $('#navbarNav .navLogin').removeClass('active');
                $('#navbarNav .navHome').removeClass('active');
            }
            else {
                $('#navbarNav .navContactUs').removeClass('active');
                $('#navbarNav .navHome').removeClass('active');
                $('#navbarNav .navLogin').removeClass('active');
            }
        })
    </script>
    @yield('page-script')
</body>
</html>
