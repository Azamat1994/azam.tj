<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="/storage/logo/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/storage/logo/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/storage/logo/favicon-16x16.png">
        <link rel="manifest" href="/storage/logo/site.webmanifest">


        <title>{{ config('app.name', 'Azam') }}</title>







        <meta property="og:image" content="{{ $meta['image'] ?? '' }}" />








        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
