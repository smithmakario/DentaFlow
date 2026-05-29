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
      <aside class="fixed left-0 top-0 h-full flex flex-col w-64 bg-slate-50 border-r border-slate-200 z-50">
         <div class="px-6 py-8">
            <div class="flex items-center gap-2 mb-2">
               <span class="material-symbols-outlined text-primary text-2xl" data-icon="medical_services">medical_services</span>
               <h1 class="text-lg font-bold text-slate-900">Clinic Central</h1>
            </div>
            <p class="text-label-sm text-outline px-1">Standard Plan</p>
         </div>
         <nav class="flex-1 space-y-1">
            <!-- Overview (Active) -->
            <a class="flex items-center gap-3 px-4 py-3 text-blue-700 bg-blue-50 border-r-4 border-blue-600 font-medium" href="#">
            <span class="material-symbols-outlined" data-icon="analytics">analytics</span>
            <span class="font-body-md text-body-md">Overview</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 transition-all" href="#">
            <span class="material-symbols-outlined" data-icon="person">person</span>
            <span class="font-body-md text-body-md">Patients</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 transition-all" href="#">
            <span class="material-symbols-outlined" data-icon="calendar_today">calendar_today</span>
            <span class="font-body-md text-body-md">Appointments</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 transition-all" href="#">
            <span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
            <span class="font-body-md text-body-md">Inventory</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 transition-all" href="#">
            <span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
            <span class="font-body-md text-body-md">Billing</span>
            </a>
         </nav>
        <form id="logoutForm" action="{{ route('logout') }}" method="POST">@csrf</form>
         <div class="mt-auto border-t border-slate-200 p-4 space-y-1">
            <a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 rounded-md" href="#">
            <span class="material-symbols-outlined" data-icon="settings">settings</span>
            <span class="font-body-md text-body-md">Settings</span>
            </a>
            <a onclick="document.getElementById('logoutForm').submit()" class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 rounded-md" href="javascript:void(0)">
            <span class="material-symbols-outlined" data-icon="logout">logout</span>
            <span class="font-body-md text-body-md">Logout</span>
            </a>
         </div>
      </aside>
    <main class="ml-64 min-h-screen bg-gray-100 p-xl">
         <!-- Header -->
         <header class="flex justify-between items-center mb-xl">
            <div>
               <h2 class="font-h1 text-h1 text-on-surface">Practice Dashboard</h2>
               <p class="text-body-md text-on-surface-variant">Welcome back, Dr. Julian. Here's what's happening today.</p>
            </div>
            <div class="flex items-center gap-md">
               <div class="relative">
                  <span class="material-symbols-outlined p-2 bg-white rounded-full border border-outline-variant text-on-surface-variant cursor-pointer" data-icon="notifications">notifications</span>
                  <span class="absolute top-0 right-0 w-3 h-3 bg-error rounded-full border-2 border-surface"></span>
               </div>
               <div class="flex items-center gap-sm bg-white border border-outline-variant px-3 py-1.5 rounded-full">
                  <img alt="User profile" class="w-8 h-8 rounded-full object-cover" data-alt="Professional headshot of a male dentist in a clean white clinical coat, smiling warmly in a bright, modern dental office with soft blue accents and professional lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjsC8ySwpbuSDvMdp_zTs-F9K8dXwBGqodB98fkOsc1EiRntfsyOVsWQbqgEUZsX9yMqh7JKQOEW0XEUFsH6FCilsPn8_nkLuBZRqHBHF1-Z1oA63dfpSYC6uIOkLHDEZt4sXnRCS7lki8PnsvrIhyeBpuX4ePSAVFu8FK1ewXeqXT4PgQcsKbDMHPHYVHHW_2NlH3XYBXRxMo2U0HMUvYEJt4OWYRp2cqNix1mqIrngjmMNzHYNOP0sCh_jXw6sjfeFsYERrwt1g"/>
                  <span class="text-label-md text-on-surface">Dr. Julian</span>
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
