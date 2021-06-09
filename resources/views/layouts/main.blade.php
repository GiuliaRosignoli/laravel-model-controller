<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&family=Nunito:wght@300;600;700;800&family=Quantico:wght@400;700&family=Ruda:wght@400;500;600&display=swap" rel="stylesheet">
        {{-- Styles --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
    </head>
    <body>
        <!--Header-->
        <header>
            @include('./partials/header')
        </header>

        <!--Main-->
        <main>
            @yield('content')
        </main>

        <!--Footer -->
        <footer>
            @include('./partials/footer')
        </footer>
    </body>
</html>
