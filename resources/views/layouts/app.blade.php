<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'answerfinder') }}</title>

    

        {{-- Fonts --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        {{-- Styles --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        {{-- Scripts --}}
        <script src="{{ asset('js/app.js') }}" defer></script>

        {{-- Icons --}}
        <script src="https://kit.fontawesome.com/769c20f8b9.js" crossorigin="anonymous"></script>

        @livewireStyles
    </head>
    
    <body class="font-sans text-sm text-gray-900 bg-gray-background">


        <header class="flex items-center justify-between px-8 py-4">
            <a href="#">answerfinder</a>
            <div class="flex items-center justify-between">
                @if (Route::has('login'))
                    <div class="px-6 py-4">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline dark:text-gray-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

                <a href="#">
                    <img src="https://static.nationalgeographic.rs/Picture/6985/jpeg/Vincent_van_Gogh___National_Gallery_of_Art_681308748" alt="xd" class="w-10 h-10 rounded-full">
                </a>
            </div>
        </header>   
        
        
        {{ $slot }}

        @livewireScripts
    </body>
    
</html>
