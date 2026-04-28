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
        <x-dialog />
        <x-layout>
            <x-slot:header>
                <x-layout.header>
                    <x-slot:right>
                        <x-dropdown text="Hello, {{ auth()->user()->username }}!">
                            <a href="{{ route('patient.profile')}}">
                                <x-dropdown.items text="Profile" icon="user-circle" />
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown.items text="Logout" icon="arrow-left-on-rectangle" onclick="event.preventDefault(); this.closest('form').submit();" />
                            </form>
                        </x-dropdown>
                    </x-slot:right>
                </x-layout.header>
            </x-slot:header>

            <x-slot:menu>
                <x-side-bar smart>
                    <x-slot:brand>
                        <div class="border-b-1 p-3 border-primary-500">
                            <h2 class="text-xl text-center text-secondary-500 font-bold">Patient</h2>
                        </div>
                    </x-slot:brand>
                    <x-side-bar.item text="Home" icon="home" :route="route('patient.dashboard')" />
                    <x-side-bar.item text="Appointments" icon="clock" :route="route('patient.appointments')" match="patient.appointments*" />
                    <x-side-bar.item text="Documents" icon="arrow-up-tray" :route="route('patient.documents')" />
                    <x-side-bar.item text="Medical Records" icon="rectangle-stack" :route="route('patient.medical-records')" />
                </x-side-bar>
            </x-slot:menu>

             {{ $slot }}
        </x-layout>

        @livewireScripts
    </body>
</html>
