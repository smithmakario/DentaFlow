<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>


        <tallstackui:script />
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            main.mx-auto.max-w-full.p-10 {
                background: #f9fafb;
                min-height: 100vh;
            }
        </style>
    </head>
    <body>
        <x-toast />
        <x-layout>
            <x-slot:header>
                <x-layout.header>
                    <x-slot:right>
                        <x-dropdown text="Hello, Admin!">
                            <x-dropdown.items text="Profile" icon="user" />
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
                    <x-slot:brand>
                        <div class="mt-3">
                            <h2 class="text-xl text-center text-secondary-500 font-bold">Admin</h2>
                        </div>
                    </x-slot:brand>
                    <x-side-bar.item text="Home" icon="home" :route="route('admin.dashboard')" />
                    <x-side-bar.item text="Branches" icon="clock" :route="route('admin.branches')" />
                </x-side-bar>
            </x-slot:menu>

             {{ $slot }}
        </x-layout>

        @livewireScripts
    </body>
</html>
