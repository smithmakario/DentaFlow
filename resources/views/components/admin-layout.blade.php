<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>DentaFlow Super Admin Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-surface": "#0b1c30",
                    "on-secondary-fixed-variant": "#00504c",
                    "surface-container": "#e5eeff",
                    "surface-container-low": "#eff4ff",
                    "primary-fixed-dim": "#b3c5ff",
                    "tertiary-container": "#cc4204",
                    "on-secondary-container": "#00716b",
                    "surface-container-highest": "#d3e4fe",
                    "on-background": "#0b1c30",
                    "surface": "#f8f9ff",
                    "surface-bright": "#f8f9ff",
                    "error-container": "#ffdad6",
                    "secondary-container": "#6ff7ee",
                    "tertiary": "#a33200",
                    "surface-tint": "#0054d6",
                    "inverse-primary": "#b3c5ff",
                    "secondary-fixed-dim": "#4edbd2",
                    "surface-container-lowest": "#ffffff",
                    "surface-container-high": "#dce9ff",
                    "on-primary-fixed-variant": "#003fa4",
                    "on-tertiary-fixed-variant": "#832600",
                    "error": "#ba1a1a",
                    "inverse-surface": "#213145",
                    "tertiary-fixed-dim": "#ffb59d",
                    "primary-container": "#0066ff",
                    "background": "#f8f9ff",
                    "on-tertiary": "#ffffff",
                    "on-error-container": "#93000a",
                    "on-error": "#ffffff",
                    "on-tertiary-fixed": "#390c00",
                    "outline-variant": "#c2c6d8",
                    "secondary": "#006a65",
                    "on-primary": "#ffffff",
                    "primary-fixed": "#dae1ff",
                    "on-primary-container": "#f8f7ff",
                    "on-primary-fixed": "#001849",
                    "on-tertiary-container": "#fff6f4",
                    "outline": "#727687",
                    "on-secondary-fixed": "#00201e",
                    "on-surface-variant": "#424656",
                    "surface-dim": "#cbdbf5",
                    "surface-variant": "#d3e4fe",
                    "on-secondary": "#ffffff",
                    "tertiary-fixed": "#ffdbd0",
                    "inverse-on-surface": "#eaf1ff",
                    "primary": "#0050cb",
                    "secondary-fixed": "#6ff7ee"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "sm": "8px",
                    "unit": "4px",
                    "md": "16px",
                    "xs": "4px",
                    "xl": "32px",
                    "container-max": "1440px",
                    "gutter": "20px",
                    "sidebar-width": "260px",
                    "lg": "24px"
            },
            "fontFamily": {
                    "body-sm": ["Inter"],
                    "h1": ["Inter"],
                    "body-lg": ["Inter"],
                    "h3": ["Inter"],
                    "h2": ["Inter"],
                    "body-md": ["Inter"],
                    "label-sm": ["Inter"],
                    "label-md": ["Inter"]
            },
            "fontSize": {
                    "body-sm": ["13px", {"lineHeight": "18px", "letterSpacing": "0", "fontWeight": "400"}],
                    "h1": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "body-lg": ["16px", {"lineHeight": "24px", "letterSpacing": "0", "fontWeight": "400"}],
                    "h3": ["20px", {"lineHeight": "28px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "h2": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "body-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0", "fontWeight": "400"}],
                    "label-sm": ["11px", {"lineHeight": "14px", "letterSpacing": "0.05em", "fontWeight": "700"}],
                    "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
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
<body class="bg-surface font-body-md text-on-surface antialiased">
<!-- Sidebar Navigation -->
<aside class="fixed left-0 top-0 h-full flex flex-col py-6 bg-slate-900 border-r border-slate-800 w-64 shadow-xl z-40">
@php
    $activeClass = 'flex items-center gap-3 px-4 py-3 text-white bg-blue-600 rounded-lg mx-2 border-l-4 border-white transition-all duration-200 translate-x-1';
    $inactiveClass = 'flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white mx-2 hover:bg-slate-800 transition-all duration-200';
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
<a class="{{ Route::is('admin.dashboard.index') ? $activeClass : $inactiveClass }}" href="{{ route('admin.dashboard.index') }}">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span class="font-medium">Dashboard</span>
</a>
<a class="{{ Route::is('admin.clinic.add') ? $activeClass : $inactiveClass }}" href="{{ route('admin.clinic.add') }}">
<span class="material-symbols-outlined" data-icon="medical_services">medical_services</span>
<span class="font-medium">Clinics</span>
</a>
<a class="{{ Route::is('admin.subscriptions.index') ? $activeClass : $inactiveClass }}" href="{{ route('admin.subscriptions.index') }}">
<span class="material-symbols-outlined" data-icon="payments">payments</span>
<span class="font-medium">Subscription</span>
</a>
<a class="{{ Route::is('admin.analytics.index') ? $activeClass : $inactiveClass }}" href="{{ route('admin.analytics.index') }}">
<span class="material-symbols-outlined" data-icon="monitoring">monitoring</span>
<span class="font-medium">Analytics</span>
</a>
<a class="{{ Route::is('admin.staff.index') ? $activeClass : $inactiveClass }}" href="{{ route('admin.staff.index') }}">
<span class="material-symbols-outlined" data-icon="group">group</span>
<span class="font-medium">Staff</span>
</a>
<a class="{{ Route::is('admin.audit.index') ? $activeClass : $inactiveClass }}" href="{{ route('admin.audit.index') }}">
<span class="material-symbols-outlined" data-icon="history">history</span>
<span class="font-medium">Audit Log</span>
</a>
</nav>
<div class="px-4 mt-auto">
<button class="w-full py-3 px-4 bg-slate-800 hover:bg-slate-700 text-white rounded-lg font-medium text-sm transition-colors flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-sm" data-icon="support_agent">support_agent</span>
                Support Portal
            </button>
</div>
</aside>
<!-- Main Content Canvas -->
<main class="ml-64 min-h-screen">
    {{ $slot }}
</main>
<!-- FAB for Global Action -->
<button class="fixed bottom-lg right-lg w-14 h-14 bg-primary text-white rounded-full shadow-2xl flex items-center justify-center hover:scale-110 transition-transform z-50">
<span class="material-symbols-outlined text-2xl" data-icon="add">add</span>
</button>
</body></html>
