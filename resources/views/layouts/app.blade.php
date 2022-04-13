<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    </head>
    <body class="antialiased">
        <!-- ====== Navbar Section Start -->
        <x-layouts.navbar></x-layouts.navbar>
        <!-- ====== Navbar Section End -->
        {{$slot}}
        <footer></footer>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
