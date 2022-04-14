<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OmotolaniOlurotimi</title>

        <!-- Fonts -->
        
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    </head>
    <body class="antialiased texxt-gray-800 dark:text-200">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
            <!-- ====== Navbar Section Start -->
            <x-layouts.navbar></x-layouts.navbar>
            <!-- ====== Navbar Section End -->
            {{$slot}}
            <x-layouts.footer></x-layouts.footer>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
