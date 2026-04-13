<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>


        <tallstackui:script />
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
<x-layout>
        <x-slot:header>
            <x-layout.header>
                <x-slot:right>
                    <x-dropdown text="Hello, Patient!">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown.items text="Logout" icon="arrow-left-on-rectangle" onclick="event.preventDefault(); this.closest('form').submit();" />
                        </form>
                    </x-dropdown>
                </x-slot:right>
            </x-layout.header>
        </x-slot:header>

        <x-slot:menu>
            <x-side-bar>
                <x-side-bar.item text="Home" icon="home" :route="route('dashboard')" />
                <x-side-bar.item text="Settings" icon="cog" :route="route('settings')" />
            </x-side-bar>
        </x-slot:menu>

        {{ $slot }}
    </x-layout>

        @livewireScripts
    </body>
</html>
