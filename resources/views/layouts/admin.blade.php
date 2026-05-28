<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>


    <tallstackui:script />
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        main.mx-auto.max-w-full.p-10 {
            background: #f9fafb;
            min-height: 100vh;
        }
    </style>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: auto auto;
            gap: 24px;
        }
    </style>
</head>

<body>
    <x-toast />
    <!-- Sidebar Navigation -->
    <aside
        class="fixed left-0 top-0 h-full flex flex-col py-6 bg-slate-900 border-r border-slate-800 w-64 shadow-xl z-40">
        @php
            $activeClass = "flex items-center gap-3 px-4 py-3 text-white bg-blue-600 rounded-lg mx-2 border-l-4 border-white transition-all duration-200 translate-x-1";
            $inactiveClass = "flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white mx-2 hover:bg-slate-800 transition-all duration-200";
        @endphp
        <div class="px-6 mb-8 flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-blue-600 flex items-center justify-center">
                <span class="material-symbols-outlined text-white" data-icon="dentistry">dentistry</span>
            </div>
            <div>
                <h1 class="text-lg font-black text-white leading-none">DentaFlow</h1>
                <p class="text-xs text-slate-400 mt-1">Enterprise Admin</p>
            </div>
        </div>
        <nav class="flex-1 space-y-1">
            <!-- Active State -->
            <a class="{{ Route::is('admin.dashboard') ? $activeClass : $inactiveClass }}"
                href="{{ route('admin.dashboard') }}">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="font-medium">Dashboard</span>
            </a>
            <a class="{{ Route::is('admin.clinics.*') ? $activeClass : $inactiveClass }}"
                href="{{ route('admin.clinics.index') }}">
                <span class="material-symbols-outlined" data-icon="medical_services">medical_services</span>
                <span class="font-medium">Clinics</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white mx-2 hover:bg-slate-800 transition-all duration-200"
                href="#">
                <span class="material-symbols-outlined" data-icon="payments">payments</span>
                <span class="font-medium">Subscription</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white mx-2 hover:bg-slate-800 transition-all duration-200"
                href="#">
                <span class="material-symbols-outlined" data-icon="monitoring">monitoring</span>
                <span class="font-medium">Analytics</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white mx-2 hover:bg-slate-800 transition-all duration-200"
                href="#">
                <span class="material-symbols-outlined" data-icon="group">group</span>
                <span class="font-medium">Staff</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white mx-2 hover:bg-slate-800 transition-all duration-200"
                href="#">
                <span class="material-symbols-outlined" data-icon="history">history</span>
                <span class="font-medium">Audit Log</span>
            </a>
        </nav>
        <div class="px-4 mt-auto">
                <form id="logoutForm" action="{{ route('central.logout') }}" method="post">@csrf
                    <input type="hidden" name="redirect_url" value="/admin/login">
                </form>
            <button
                onclick="document.querySelector('#logoutForm').submit()"
                class="w-full py-3 px-4 bg-slate-800 hover:bg-slate-700 text-white rounded-lg font-medium text-sm transition-colors flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-sm" data-icon="support_agent">logout</span>
                Log Out
            </button>
        </div>
    </aside>
    <main class="ml-64 min-h-screen bg-gray-100">
        <!-- Top Bar -->
        <header class="sticky top-0 z-30 flex justify-between items-center h-16 px-xl w-full bg-white/80 backdrop-blur-md border-b border-slate-200">
        <div class="flex items-center gap-lg">
            <div class="relative">
                <span class="absolute left-3 top-1/2 -translate-y-1/2 material-symbols-outlined text-slate-400 text-sm" data-icon="search">search</span>
                <input class="pl-10 pr-4 py-2 bg-surface border-none rounded-full text-body-sm w-80 focus:ring-2 focus:ring-primary/20" placeholder="Search clinics, transactions..." type="text"/>
            </div>
        </div>
        <div class="flex items-center gap-md">
            <button class="p-2 text-slate-500 hover:bg-slate-50 rounded-full transition-colors relative">
            <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
            <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
            </button>
            <button class="p-2 text-slate-500 hover:bg-slate-50 rounded-full transition-colors">
            <span class="material-symbols-outlined" data-icon="help">help</span>
            </button>
            <button class="p-2 text-slate-500 hover:bg-slate-50 rounded-full transition-colors">
            <span class="material-symbols-outlined" data-icon="settings">settings</span>
            </button>
            <div class="h-8 w-[1px] bg-slate-200 mx-2"></div>
            <div class="flex items-center gap-3">
                <div class="text-right">
                    <p class="font-label-md text-on-surface capitalize">{{ auth()->user()->username }}</p>
                    <p class="text-[10px] text-slate-500 uppercase tracking-wider font-bold">Super Admin</p>
                </div>
                <x-avatar  class="w-10 h-10" text="{{ ucfirst(auth()->user()->username[0]) }}"/>
            </div>
        </div>
        </header>
        <div class="max-w-7xl mx-auto px-xl py-xl">
            {{ $slot }}
        </div>
    </main>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {packages: ['corechart']});
    </script>
    @livewireScripts
</body>

</html>
