<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'saberProT&T') }}</title>
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('images/icono.png') }}" type="image/x-icon">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-1 lg:px-1">
                <div class="flex justify-center pt-1 sm:justify-start sm:pt-0" >
                    <img class="sombra" src="{{ asset('images/icono.png') }}" alt="logo-paola" width="800">
                </div>
                <div class="d-flex justify-content-center">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="mx-3 btn btn-secondary btn-sm">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="mx-3 btn btn-secondary btn-sm">{{ __('Login') }}</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="mx-3 btn btn-secondary btn-sm">{{ __('Register') }}</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
