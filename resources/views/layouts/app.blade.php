<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">
        <link href="{{ asset('fontawesome/css/fontawesome.css') }}" rel="stylesheet">
        <link href="{{ asset('fontawesome/css/brands.css') }}" rel="stylesheet">
        <link href="{{ asset('fontawesome/css/solid.css') }}" rel="stylesheet">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.top-navigation')
            <div class="flex flex-row">
                <div class="basis-1/5 box-border h-screen overflow-y-auto hidden sm:flex">
                    @include('layouts.side-navigation')
                </div>
                <!-- Page Content -->
                <div class="grow justify-center">
                    <main>
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>
    </body>
</html>
