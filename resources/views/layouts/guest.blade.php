<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Panel-less CMS') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white text-gray-900 antialiased">
    <div class="main-content">
        {{-- navigation --}}
        <nav class="blog-nav">

            <x-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                {{ __('Home') }}
            </x-nav-link>

            <x-nav-link :href="route('posts.index')" :active="request()->routeIs('posts.index')" wire:navigate>
                {{ __('Posts') }}
            </x-nav-link>

        </nav>

        {{-- content --}}
        {{ $slot }}
    </div>
    </body>
</html>
