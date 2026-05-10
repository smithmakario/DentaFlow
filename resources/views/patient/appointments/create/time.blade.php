<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>DentaFlow - Appointment Booking</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-tertiary-fixed-variant": "#832600",
                    "on-tertiary-container": "#fff6f4",
                    "on-surface": "#0b1c30",
                    "error-container": "#ffdad6",
                    "primary-container": "#0066ff",
                    "on-secondary-fixed-variant": "#00504c",
                    "on-error": "#ffffff",
                    "inverse-primary": "#b3c5ff",
                    "on-primary-fixed": "#001849",
                    "background": "#f8f9ff",
                    "inverse-on-surface": "#eaf1ff",
                    "surface-dim": "#cbdbf5",
                    "tertiary": "#a33200",
                    "error": "#ba1a1a",
                    "secondary-fixed": "#6ff7ee",
                    "outline-variant": "#c2c6d8",
                    "on-surface-variant": "#424656",
                    "on-primary": "#ffffff",
                    "secondary-fixed-dim": "#4edbd2",
                    "on-primary-container": "#f8f7ff",
                    "tertiary-fixed": "#ffdbd0",
                    "secondary-container": "#6ff7ee",
                    "primary-fixed-dim": "#b3c5ff",
                    "on-tertiary-fixed": "#390c00",
                    "surface-container-high": "#dce9ff",
                    "on-secondary-container": "#00716b",
                    "surface-tint": "#0054d6",
                    "surface": "#f8f9ff",
                    "on-secondary-fixed": "#00201e",
                    "primary": "#0050cb",
                    "on-background": "#0b1c30",
                    "on-error-container": "#93000a",
                    "on-primary-fixed-variant": "#003fa4",
                    "outline": "#727687",
                    "tertiary-container": "#cc4204",
                    "surface-container-highest": "#d3e4fe",
                    "on-tertiary": "#ffffff",
                    "secondary": "#006a65",
                    "primary-fixed": "#dae1ff",
                    "surface-bright": "#f8f9ff",
                    "on-secondary": "#ffffff",
                    "surface-variant": "#d3e4fe",
                    "tertiary-fixed-dim": "#ffb59d",
                    "surface-container": "#e5eeff",
                    "surface-container-low": "#eff4ff",
                    "inverse-surface": "#213145",
                    "surface-container-lowest": "#ffffff"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "xl": "32px",
                    "xs": "4px",
                    "container-max": "1440px",
                    "unit": "4px",
                    "gutter": "20px",
                    "lg": "24px",
                    "sidebar-width": "260px",
                    "md": "16px",
                    "sm": "8px"
            },
            "fontFamily": {
                    "h1": ["Inter"], "body-sm": ["Inter"], "label-sm": ["Inter"], "body-md": ["Inter"], "body-lg": ["Inter"], "h3": ["Inter"], "label-md": ["Inter"], "h2": ["Inter"]
            },
            "fontSize": {
                    "h1": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "body-sm": ["13px", {"lineHeight": "18px", "letterSpacing": "0", "fontWeight": "400"}],
                    "label-sm": ["11px", {"lineHeight": "14px", "letterSpacing": "0.05em", "fontWeight": "700"}],
                    "body-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0", "fontWeight": "400"}],
                    "body-lg": ["16px", {"lineHeight": "24px", "letterSpacing": "0", "fontWeight": "400"}],
                    "h3": ["20px", {"lineHeight": "28px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600"}],
                    "h2": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}]
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
        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex flex-col">
<!-- TopAppBar -->
<header class="bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 shadow-sm dark:shadow-none sticky top-0 z-50">
<div class="flex justify-between items-center w-full px-6 py-4 max-w-7xl mx-auto">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-blue-600" style="font-variation-settings: 'FILL' 1;">dentistry</span>
<span class="text-xl font-bold tracking-tight text-slate-900 dark:text-white">DentaFlow</span>
</div>
<nav class="hidden md:flex items-center gap-8 font-['Inter'] antialiased text-sm font-medium">
<a class="text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-300 transition-colors" href="#">Dashboard</a>
<a class="text-blue-600 dark:text-blue-400 border-b-2 border-blue-600 pb-1" href="#">Book Appointment</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-300 transition-colors" href="#">Records</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-300 transition-colors" href="#">Billing</a>
</nav>
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-slate-500 cursor-pointer hover:text-slate-900">search</span>
<span class="material-symbols-outlined text-slate-500 cursor-pointer hover:text-slate-900">account_circle</span>
</div>
</div>
</header>
<main class="flex-grow max-w-7xl mx-auto w-full px-6 py-8">
<!-- Progress Stepper -->
<div class="mb-12">
<div class="flex items-center justify-center max-w-3xl mx-auto">
<!-- Step 1 -->
<div class="flex flex-col items-center flex-1">
<div class="w-10 h-10 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center mb-2">
<span class="material-symbols-outlined text-md">check</span>
</div>
<span class="font-label-md text-on-surface-variant">Services</span>
</div>
<div class="h-px bg-outline-variant flex-grow -mt-6"></div>
<!-- Step 2 -->
<div class="flex flex-col items-center flex-1">
<div class="w-10 h-10 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center mb-2">
<span class="material-symbols-outlined text-md">check</span>
</div>
<span class="font-label-md text-on-surface-variant">Provider</span>
</div>
<div class="h-px bg-outline-variant flex-grow -mt-6"></div>
<!-- Step 3 -->
<div class="flex flex-col items-center flex-1">
<div class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center mb-2 shadow-lg shadow-primary/20">
<span class="font-bold">3</span>
</div>
<span class="font-label-md text-primary font-bold">Time</span>
</div>
<div class="h-px bg-outline-variant flex-grow -mt-6"></div>
<!-- Step 4 -->
<div class="flex flex-col items-center flex-1">
<div class="w-10 h-10 rounded-full border-2 border-outline-variant text-outline flex items-center justify-center mb-2">
<span class="font-bold">4</span>
</div>
<span class="font-label-md text-outline">Review</span>
</div>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
<!-- Sidebar: Selected Provider Info -->
<aside class="lg:col-span-3 space-y-6">
<div class="bg-surface-container-lowest border border-slate-200 rounded-xl p-6 shadow-sm">
<h3 class="font-h3 text-on-surface mb-4">Your Selection</h3>
<div class="flex flex-col items-center text-center pb-6 border-b border-slate-100">
<div class="w-20 h-20 rounded-full overflow-hidden mb-3 ring-4 ring-primary-fixed">
<img alt="Dr. Sarah Jenkins" class="w-full h-full object-cover" data-alt="A professional dental practitioner, Dr. Sarah Jenkins, smiling warmly in a clinical environment. She is wearing a crisp white medical coat and a blue stethoscope around her neck. The background is a brightly lit, modern dental office with high-end medical equipment softly blurred. The lighting is clean and professional, emphasizing a mood of reliability and technical excellence." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJ7DyWFuj7_Ydgfn3A8EghDooLtX1445WwFMQAmqdWaDvOeQtXekxyXCniKq8zS7puNDxC_yX1Ac9139kcOinAqlyHcktJZOSXrnyOq_920WDxuv1L5pMS86fm4bZzCyZ7yWP3jO7o1DOyG6Y15--IoLcOEESmB2ZR50dVHtAdaSb_uXNSU_ZiP9A10NUxhwRlAG9-1y9016cm1ZdMbIWHLbWzfHi-uHyp6pLZOZtw-BpJa0uvwH3Hag60DUgiKvWO1ZhRPB3ySu0"/>
</div>
<h4 class="font-h3 text-slate-900">Dr. Sarah Jenkins</h4>
<p class="text-body-sm text-slate-500">Periodontist • 12 years exp.</p>
</div>
<div class="pt-6 space-y-3">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-lg">medical_services</span>
<div class="flex flex-col">
<span class="text-label-sm text-slate-400">SERVICE</span>
<span class="text-body-md font-medium text-slate-800">Deep Cleaning &amp; Polish</span>
</div>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-lg">payments</span>
<div class="flex flex-col">
<span class="text-label-sm text-slate-400">ESTIMATED COST</span>
<span class="text-body-md font-medium text-slate-800">$180.00</span>
</div>
</div>
</div>
</div>
<div class="bg-primary-fixed-dim/20 rounded-xl p-4 border border-primary-fixed-dim/30">
<p class="text-body-sm text-on-primary-fixed-variant leading-relaxed">
<span class="material-symbols-outlined text-primary mr-1 text-sm">info</span>
                        Appointments cancelled less than 24 hours in advance may incur a $50 fee.
                    </p>
</div>
</aside>
<!-- Main Content: Calendar and Slots -->
<section class="lg:col-span-9 bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
<div class="flex flex-col md:flex-row h-full min-h-[600px]">
<!-- Calendar Section -->
<div class="flex-1 p-8 border-b md:border-b-0 md:border-r border-slate-100">
<div class="flex items-center justify-between mb-8">
<h2 class="font-h2 text-on-surface">September 2024</h2>
<div class="flex gap-2">
<button class="p-2 hover:bg-slate-50 rounded-lg border border-slate-200 transition-colors">
<span class="material-symbols-outlined text-slate-600">chevron_left</span>
</button>
<button class="p-2 hover:bg-slate-50 rounded-lg border border-slate-200 transition-colors">
<span class="material-symbols-outlined text-slate-600">chevron_right</span>
</button>
</div>
</div>
<div class="calendar-grid mb-4">
<span class="text-center text-label-sm text-slate-400 py-2">MON</span>
<span class="text-center text-label-sm text-slate-400 py-2">TUE</span>
<span class="text-center text-label-sm text-slate-400 py-2">WED</span>
<span class="text-center text-label-sm text-slate-400 py-2">THU</span>
<span class="text-center text-label-sm text-slate-400 py-2">FRI</span>
<span class="text-center text-label-sm text-slate-400 py-2">SAT</span>
<span class="text-center text-label-sm text-slate-400 py-2">SUN</span>
</div>
<div class="calendar-grid gap-1">
<!-- Placeholder dates -->
<div class="aspect-square flex items-center justify-center text-slate-300 text-body-sm">26</div>
<div class="aspect-square flex items-center justify-center text-slate-300 text-body-sm">27</div>
<div class="aspect-square flex items-center justify-center text-slate-300 text-body-sm">28</div>
<div class="aspect-square flex items-center justify-center text-slate-300 text-body-sm">29</div>
<div class="aspect-square flex items-center justify-center text-slate-300 text-body-sm">30</div>
<div class="aspect-square flex items-center justify-center text-slate-300 text-body-sm">31</div>
<!-- September 1st -->
<div class="aspect-square flex flex-col items-center justify-center hover:bg-slate-50 rounded-lg cursor-pointer transition-colors border border-transparent">
<span class="text-body-md text-slate-700">1</span>
</div>
<div class="aspect-square flex flex-col items-center justify-center hover:bg-slate-50 rounded-lg cursor-pointer transition-colors border border-transparent">
<span class="text-body-md text-slate-700">2</span>
</div>
<div class="aspect-square flex flex-col items-center justify-center hover:bg-slate-50 rounded-lg cursor-pointer transition-colors border border-transparent">
<span class="text-body-md text-slate-700">3</span>
</div>
<div class="aspect-square flex flex-col items-center justify-center hover:bg-slate-50 rounded-lg cursor-pointer transition-colors border border-transparent">
<span class="text-body-md text-slate-700">4</span>
</div>
<div class="aspect-square flex flex-col items-center justify-center hover:bg-slate-50 rounded-lg cursor-pointer transition-colors border border-transparent">
<span class="text-body-md text-slate-700">5</span>
</div>
<div class="aspect-square flex flex-col items-center justify-center hover:bg-slate-50 rounded-lg cursor-pointer transition-colors border border-transparent">
<span class="text-body-md text-slate-700">6</span>
</div>
<div class="aspect-square flex flex-col items-center justify-center hover:bg-slate-50 rounded-lg cursor-pointer transition-colors border border-transparent">
<span class="text-body-md text-slate-700">7</span>
</div>
<div class="aspect-square flex flex-col items-center justify-center hover:bg-slate-50 rounded-lg cursor-pointer transition-colors border border-transparent">
<span class="text-body-md text-slate-700">8</span>
</div>
<div class="aspect-square flex flex-col items-center justify-center hover:bg-slate-50 rounded-lg cursor-pointer transition-colors border border-transparent">
<span class="text-body-md text-slate-700">9</span>
</div>
<div class="aspect-square flex flex-col items-center justify-center hover:bg-slate-50 rounded-lg cursor-pointer transition-colors border border-transparent">
<span class="text-body-md text-slate-700">10</span>
</div>
<!-- Selected Date -->
<div class="aspect-square flex flex-col items-center justify-center bg-primary text-on-primary rounded-lg cursor-pointer shadow-md ring-2 ring-primary ring-offset-2">
<span class="text-body-md font-bold">11</span>
<div class="w-1 h-1 bg-white rounded-full mt-1"></div>
</div>
<div class="aspect-square flex flex-col items-center justify-center hover:bg-slate-50 rounded-lg cursor-pointer transition-colors border border-transparent">
<span class="text-body-md text-slate-700">12</span>
</div>
<div class="aspect-square flex flex-col items-center justify-center hover:bg-slate-50 rounded-lg cursor-pointer transition-colors border border-transparent">
<span class="text-body-md text-slate-700">13</span>
</div>
<div class="aspect-square flex flex-col items-center justify-center hover:bg-slate-50 rounded-lg cursor-pointer transition-colors border border-transparent">
<span class="text-body-md text-slate-700">14</span>
</div>
<div class="aspect-square flex flex-col items-center justify-center hover:bg-slate-50 rounded-lg cursor-pointer transition-colors border border-transparent">
<span class="text-body-md text-slate-700">15</span>
</div>
<div class="aspect-square flex flex-col items-center justify-center hover:bg-slate-50 rounded-lg cursor-pointer transition-colors border border-transparent">
<span class="text-body-md text-slate-700">16</span>
</div>
<div class="aspect-square flex flex-col items-center justify-center hover:bg-slate-50 rounded-lg cursor-pointer transition-colors border border-transparent">
<span class="text-body-md text-slate-700">17</span>
</div>
<div class="aspect-square flex flex-col items-center justify-center hover:bg-slate-50 rounded-lg cursor-pointer transition-colors border border-transparent">
<span class="text-body-md text-slate-700">18</span>
</div>
<div class="aspect-square flex flex-col items-center justify-center hover:bg-slate-50 rounded-lg cursor-pointer transition-colors border border-transparent">
<span class="text-body-md text-slate-700">19</span>
</div>
<div class="aspect-square flex flex-col items-center justify-center hover:bg-slate-50 rounded-lg cursor-pointer transition-colors border border-transparent">
<span class="text-body-md text-slate-700">20</span>
</div>
</div>
</div>
<!-- Slots Section -->
<div class="w-full md:w-80 bg-slate-50/50 p-8">
<div class="mb-6">
<h4 class="font-h3 text-on-surface">Available Slots</h4>
<p class="text-body-sm text-slate-500">Wednesday, Sept 11</p>
</div>
<div class="space-y-8 h-[400px] overflow-y-auto pr-2 custom-scrollbar">
<!-- Morning -->
<div>
<h5 class="font-label-sm text-slate-400 mb-3 flex items-center gap-2">
<span class="material-symbols-outlined text-sm">wb_sunny</span> MORNING
                                </h5>
<div class="grid grid-cols-2 gap-2">
<button class="py-2 px-3 border border-slate-200 rounded-lg bg-white text-body-md hover:border-primary hover:text-primary transition-all">08:30 AM</button>
<button class="py-2 px-3 border border-slate-200 rounded-lg bg-white text-body-md hover:border-primary hover:text-primary transition-all">09:15 AM</button>
<button class="py-2 px-3 border border-primary bg-primary-container text-on-primary-container text-body-md font-semibold rounded-lg shadow-sm">10:00 AM</button>
<button class="py-2 px-3 border border-slate-200 rounded-lg bg-white text-body-md opacity-40 cursor-not-allowed">11:00 AM</button>
</div>
</div>
<!-- Afternoon -->
<div>
<h5 class="font-label-sm text-slate-400 mb-3 flex items-center gap-2">
<span class="material-symbols-outlined text-sm">light_mode</span> AFTERNOON
                                </h5>
<div class="grid grid-cols-2 gap-2">
<button class="py-2 px-3 border border-slate-200 rounded-lg bg-white text-body-md hover:border-primary hover:text-primary transition-all">01:30 PM</button>
<button class="py-2 px-3 border border-slate-200 rounded-lg bg-white text-body-md hover:border-primary hover:text-primary transition-all">02:15 PM</button>
<button class="py-2 px-3 border border-slate-200 rounded-lg bg-white text-body-md hover:border-primary hover:text-primary transition-all">03:00 PM</button>
<button class="py-2 px-3 border border-slate-200 rounded-lg bg-white text-body-md hover:border-primary hover:text-primary transition-all">04:30 PM</button>
</div>
</div>
<!-- Evening -->
<div>
<h5 class="font-label-sm text-slate-400 mb-3 flex items-center gap-2">
<span class="material-symbols-outlined text-sm">dark_mode</span> EVENING
                                </h5>
<div class="grid grid-cols-2 gap-2">
<button class="py-2 px-3 border border-slate-200 rounded-lg bg-white text-body-md hover:border-primary hover:text-primary transition-all">05:15 PM</button>
<button class="py-2 px-3 border border-slate-200 rounded-lg bg-white text-body-md hover:border-primary hover:text-primary transition-all">06:00 PM</button>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
<!-- Footer Actions -->
<div class="mt-12 flex items-center justify-between max-w-7xl mx-auto border-t border-slate-200 pt-8">
<button class="px-6 py-2 border border-slate-300 rounded-lg text-slate-600 font-medium hover:bg-slate-50 active:scale-95 transition-all flex items-center gap-2">
<span class="material-symbols-outlined text-md">arrow_back</span>
                Back to Providers
            </button>
<div class="flex items-center gap-6">
<div class="hidden sm:block text-right">
<p class="text-label-sm text-slate-500 uppercase">SELECTED APPOINTMENT</p>
<p class="text-body-md font-semibold text-slate-900">Wed, Sep 11 at 10:00 AM</p>
</div>
<button class="px-8 py-3 bg-primary text-on-primary rounded-lg font-bold shadow-lg shadow-primary/20 hover:bg-primary-fixed-dim transition-all active:scale-95 flex items-center gap-2">
                    Review Details
                    <span class="material-symbols-outlined text-md">arrow_forward</span>
</button>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-slate-50 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800">
<div class="w-full py-12 px-6 flex flex-col md:flex-row justify-between items-center gap-4 max-w-7xl mx-auto font-['Inter'] text-xs text-slate-500 dark:text-slate-400">
<div class="flex flex-col gap-1 items-center md:items-start">
<span class="font-bold text-slate-900 dark:text-white text-sm">DentaFlow</span>
<p>© 2024 DentaFlow. Clinical Excellence in Dental Care.</p>
</div>
<div class="flex gap-6">
<a class="hover:text-slate-900 dark:hover:text-white underline transition-colors cursor-pointer" href="#">Support</a>
<a class="hover:text-slate-900 dark:hover:text-white underline transition-colors cursor-pointer" href="#">Privacy Policy</a>
<a class="hover:text-slate-900 dark:hover:text-white underline transition-colors cursor-pointer" href="#">Terms of Service</a>
</div>
</div>
</footer>
</body></html>
