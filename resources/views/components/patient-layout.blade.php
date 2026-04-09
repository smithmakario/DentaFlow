<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Dentalflow | Patient Dashboard</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<!-- Icons -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "outline-variant": "#c2c6d4",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary": "#ffffff",
                        "surface-bright": "#f9f9ff",
                        "on-secondary-fixed-variant": "#00504a",
                        "on-error": "#ffffff",
                        "error-container": "#ffdad6",
                        "on-primary-fixed-variant": "#00468b",
                        "surface": "#f9f9ff",
                        "on-surface-variant": "#424752",
                        "outline": "#727783",
                        "tertiary-fixed-dim": "#b1cad7",
                        "primary-container": "#005fb8",
                        "on-secondary-container": "#006f67",
                        "inverse-primary": "#a8c8ff",
                        "surface-tint": "#005db5",
                        "primary": "#00488d",
                        "primary-fixed": "#d6e3ff",
                        "error": "#ba1a1a",
                        "primary-fixed-dim": "#a8c8ff",
                        "secondary-fixed": "#8ef4e9",
                        "inverse-on-surface": "#eff0f8",
                        "background": "#f9f9ff",
                        "inverse-surface": "#2e3036",
                        "on-tertiary": "#ffffff",
                        "on-primary-container": "#cadcff",
                        "on-primary-fixed": "#001b3d",
                        "on-surface": "#191c21",
                        "tertiary-fixed": "#cde6f4",
                        "on-tertiary-container": "#c5deec",
                        "on-background": "#191c21",
                        "on-tertiary-fixed-variant": "#334a55",
                        "on-secondary-fixed": "#00201d",
                        "secondary": "#006a63",
                        "secondary-fixed-dim": "#71d7cd",
                        "surface-container-high": "#e7e8f0",
                        "on-error-container": "#93000a",
                        "surface-container-low": "#f2f3fb",
                        "on-tertiary-fixed": "#051e28",
                        "surface-dim": "#d8dae2",
                        "surface-container": "#ecedf6",
                        "tertiary": "#344b56",
                        "secondary-container": "#8bf1e6",
                        "surface-variant": "#e1e2ea",
                        "surface-container-highest": "#e1e2ea",
                        "on-primary": "#ffffff",
                        "tertiary-container": "#4c636e"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    }
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
        }
        .primary-gradient {
            background: linear-gradient(135deg, #00488d 0%, #005fb8 100%);
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9f9ff;
        }
        h1, h2, h3, .font-headline {
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>
<body class="text-on-surface">
<div class="flex min-h-screen">
<!-- Sidebar Navigation (Shared Component Integration) -->
<aside class="w-72 bg-surface border-r border-outline-variant/20 flex flex-col fixed inset-y-0 left-0 z-50">
<div class="p-6 flex items-center gap-3">
<div class="size-10 rounded-full bg-primary-container flex items-center justify-center text-white overflow-hidden shadow-md">
<img class="w-full h-full object-cover" data-alt="Abstract minimalist logo for  Dentalflow dental practice featuring a soft blue stylized tooth shape" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4p4yZmzziY6qgWkel80XYeCYwFp5nYFRrg7MPTDQLv7xPnsAY3O-qPXogj0BdfZC7ooe0qKw17k0upTEVYkwvsDWVYh4_2qCH6sRyS3uY8fXP-ak8PDA08weZbs-CykARLrb5Xfz29wvxLwKuopOeQ5hUH5lycwjWDhrAVwkJZlk57aR63pCBdpzdXFztj_12MNerg7DykJcKUV8frlKS5Sb8rWdsWByBDBPlKdgv1QpXVQcbkQpAmrnQkyeChegXM0M86YZCKa4"/>
</div>
<div>
<h1 class="text-on-surface text-base font-bold leading-tight">Dentalflow</h1>
<p class="text-secondary text-xs font-medium uppercase tracking-wider">Dental Care</p>
</div>
</div>
@php
    $activeClass = "flex items-center gap-3 px-4 py-3 rounded-xl bg-surface-container-high text-primary font-semibold transition-all";
    $linkClass = "flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container-low transition-all"
@endphp
<nav class="flex-1 px-4 py-4 space-y-2">
                    <a class="{{ Route::is('patient.dashboard') ? $activeClass : $linkClass }}" href="{{ route('patient.dashboard') }}">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">dashboard</span>
<span>Dashboard</span>
</a>
<a class="{{ Route::is('patient.appointments.index') ? $activeClass : $linkClass }}" href="{{ route('patient.appointments.index') }}">
<span class="material-symbols-outlined">calendar_today</span>
<span>Appointments</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container-low transition-all" href="#">
<span class="material-symbols-outlined">description</span>
<span>Medical Records</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container-low transition-all" href="#">
<span class="material-symbols-outlined">credit_card</span>
<span>Billing</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container-low transition-all" href="#">
<span class="material-symbols-outlined">settings</span>
<span>Settings</span>
</a>
</nav>
<div class="p-6">
<div class="bg-surface-container-highest rounded-2xl p-4 flex flex-col gap-3">
<p class="text-xs font-semibold text-primary uppercase">Need help?</p>
<p class="text-sm text-on-surface-variant">Our support team is available 24/7 for dental emergencies.</p>
<button class="bg-primary text-white text-sm font-bold py-2 px-4 rounded-full w-full">Contact Support</button>
</div>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 ml-72 min-h-screen flex flex-col">
    {{ $slot }}
</main>
</div>
</body></html>
