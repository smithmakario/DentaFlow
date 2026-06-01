<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>


        <tallstackui:script />
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
      <style>
         .material-symbols-outlined {
         font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
         display: inline-block;
         line-height: 1;
         text-transform: none;
         letter-spacing: normal;
         word-wrap: normal;
         white-space: nowrap;
         direction: ltr;
         }
         body {
         background: linear-gradient(135deg, #f8f9ff 0%, #eef2ff 100%);
         }
      </style>
    </head>
   <body class="font-body-md text-on-background min-h-screen flex flex-col antialiased">
      <nav class="bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 shadow-sm flex justify-between items-center w-full px-6 py-3 h-16 fixed top-0 z-50 font-inter antialiased">
         <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-blue-600 dark:text-blue-400" data-icon="dentistry">dentistry</span>
            <span class="text-xl font-bold tracking-tight text-slate-900 dark:text-white">DentaFlow</span>
         </div>
         <div class="flex items-center gap-4">
            <button class="text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors p-2 rounded-lg flex items-center gap-2">
            <span class="material-symbols-outlined" data-icon="help_outline">help_outline</span>
            <span class="text-body-sm font-label-md">Support</span>
            </button>
         </div>
      </nav>
      <main class="flex-grow flex items-center justify-center pt-24 pb-12 px-4">
         <div class="w-full max-w-[28rem]">
            <div class="bg-white rounded-xl shadow-sm border border-outline-variant p-8 md:p-10">
               <div class="text-center mb-10">
                  <h1 class="font-h1 text-h2 text-on-surface mb-2">Admin</h1>
                  <p class="font-body-md text-on-surface-variant">Clinical Practice Management Access</p>
               </div>
                {{ $slot }}
            </div>
            <p class="text-center mt-8 font-body-sm text-on-surface-variant">
               Don't have an account? <a class="text-primary font-label-md hover:underline" href="#">Contact Administration</a>
            </p>
         </div>
      </main>
      <footer class="bg-slate-50 dark:bg-slate-950 w-full py-8 px-6 flex flex-col md:flex-row justify-between items-center gap-4 border-t border-slate-200 dark:border-slate-800 text-sm font-inter text-slate-500">
         <div class="text-slate-500 dark:text-slate-400">
            © 2024 DentaFlow Systems. Clinical Precision Guaranteed.
         </div>
         <div class="flex gap-6">
            <a class="text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 duration-200 ease-in-out" href="#">Privacy Policy</a>
            <a class="text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 duration-200 ease-in-out" href="#">Terms of Service</a>
            <a class="text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 duration-200 ease-in-out" href="#">Security</a>
            <a class="text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 duration-200 ease-in-out" href="#">Status</a>
         </div>
      </footer>
        @livewireScripts
   </body>
</html>
