<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
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
                $('#navbarNav .navLogin').addClass('active');
            }
            else if(window.location.href.includes('/home') || window.location.href.includes('/menu')){
                $('#navbarNav .navHome').addClass('active');
                $('#navbarNav .navLogin').removeClass('active');
            }
            else {
                $('#navbarNav .navHome').removeClass('active');
                $('#navbarNav .navLogin').removeClass('active');
            }
        })
    </script>
    @yield('page-script')
</body>
</html>
