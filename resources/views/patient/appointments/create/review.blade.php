<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Review &amp; Confirm | DentaFlow</title>
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
        }
        .active-step-shadow {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        }
    </style>
</head>
<body class="bg-background font-body-md text-on-background min-h-screen flex flex-col">
<!-- TopAppBar -->
<header class="bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 shadow-sm dark:shadow-none sticky top-0 z-50">
<div class="flex justify-between items-center w-full px-6 py-4 max-w-7xl mx-auto">
<div class="flex items-center gap-2">
<span class="text-xl font-bold tracking-tight text-slate-900 dark:text-white font-h1">DentaFlow</span>
</div>
<nav class="hidden md:flex gap-8 items-center font-['Inter'] antialiased text-sm font-medium">
<a class="text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-300 transition-colors" href="#">Dashboard</a>
<a class="text-blue-600 dark:text-blue-400 border-b-2 border-blue-600 transition-colors" href="#">Appointments</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-300 transition-colors" href="#">Records</a>
</nav>
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-slate-500" data-icon="account_circle">account_circle</span>
</div>
</div>
</header>
<main class="flex-grow max-w-4xl mx-auto w-full px-6 py-xl">
<!-- Multi-Step Form Wizard Stepper -->
<div class="mb-xl">
<div class="flex items-center justify-between relative">
<!-- Progress Line -->
<div class="absolute top-1/2 left-0 w-full h-0.5 bg-surface-container-highest -translate-y-1/2 z-0"></div>
<div class="absolute top-1/2 left-0 w-3/4 h-0.5 bg-primary -translate-y-1/2 z-0"></div>
<!-- Step 1: Completed -->
<div class="relative z-10 flex flex-col items-center">
<div class="w-10 h-10 rounded-full bg-secondary text-on-secondary flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-md" data-icon="check">check</span>
</div>
<span class="mt-2 font-label-md text-on-surface">Services</span>
</div>
<!-- Step 2: Completed -->
<div class="relative z-10 flex flex-col items-center">
<div class="w-10 h-10 rounded-full bg-secondary text-on-secondary flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-md" data-icon="check">check</span>
</div>
<span class="mt-2 font-label-md text-on-surface">Provider</span>
</div>
<!-- Step 3: Completed -->
<div class="relative z-10 flex flex-col items-center">
<div class="w-10 h-10 rounded-full bg-secondary text-on-secondary flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-md" data-icon="check">check</span>
</div>
<span class="mt-2 font-label-md text-on-surface">Time</span>
</div>
<!-- Step 4: Active -->
<div class="relative z-10 flex flex-col items-center">
<div class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center shadow-sm ring-4 ring-primary-fixed">
<span class="font-bold">4</span>
</div>
<span class="mt-2 font-label-md text-primary font-bold">Review</span>
</div>
</div>
</div>
<!-- Main Content Canvas -->
<div class="space-y-lg">
<div class="text-center mb-xl">
<h1 class="font-h1 text-on-surface">Final Review</h1>
<p class="font-body-lg text-on-surface-variant mt-sm">Please verify your appointment details before confirming.</p>
</div>
<!-- Bento-style Summary Grid -->
<div class="grid grid-cols-1 md:grid-cols-12 gap-lg">
<!-- Appointment Main Info -->
<div class="md:col-span-8 bg-surface-container-lowest border border-outline-variant rounded-xl p-lg active-step-shadow">
<h2 class="font-h3 text-on-surface mb-md">Appointment Summary</h2>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-xl">
<div class="flex gap-md items-start">
<div class="p-sm bg-primary-fixed rounded-lg text-primary">
<span class="material-symbols-outlined" data-icon="medical_services">medical_services</span>
</div>
<div>
<p class="font-label-sm text-outline uppercase tracking-wider">Service</p>
<p class="font-h3 text-on-surface">Routine Checkup</p>
</div>
</div>
<div class="flex gap-md items-start">
<div class="p-sm bg-secondary-fixed rounded-lg text-on-secondary-container">
<span class="material-symbols-outlined" data-icon="person">person</span>
</div>
<div>
<p class="font-label-sm text-outline uppercase tracking-wider">Doctor</p>
<p class="font-h3 text-on-surface">Dr. Sterling</p>
</div>
</div>
<div class="flex gap-md items-start">
<div class="p-sm bg-surface-container-high rounded-lg text-on-surface">
<span class="material-symbols-outlined" data-icon="calendar_today">calendar_today</span>
</div>
<div>
<p class="font-label-sm text-outline uppercase tracking-wider">Date &amp; Time</p>
<p class="font-h3 text-on-surface">Oct 28, 10:00 AM</p>
</div>
</div>
<div class="flex gap-md items-start">
<div class="p-sm bg-surface-container-high rounded-lg text-on-surface">
<span class="material-symbols-outlined" data-icon="location_on">location_on</span>
</div>
<div>
<p class="font-label-sm text-outline uppercase tracking-wider">Location</p>
<p class="font-h3 text-on-surface">Downtown Branch</p>
</div>
</div>
</div>
</div>
<!-- Side Illustration / Context -->
<div class="md:col-span-4 bg-primary-container rounded-xl overflow-hidden relative flex items-center justify-center min-h-[200px]">
<img alt="Clinical excellence" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-60" data-alt="A clean, minimalist high-key clinical office setting with soft, diffused white lighting. The image captures the corner of a modern dental treatment room featuring a sleek, ergonomically designed chair in soft gray leather, against a pristine white wall. The visual style is high-end corporate modernism with a palette of soft blues, whites, and light grays, evoking a sense of absolute hygiene and professional reliability." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDKsrwX36Kw9ecDol7Y-npXY51lLIcmhpiGRls5JnXBDFI5qQlzi9LEitANMLZMRf2rgx2Kk1zESiDvJO1fYZ-wSLT9euvYJFigBgmwaw8QKrCwnRqGx6PF-u8Jnd-z71Tqv3AhB-t0bSincIGtV4wpYNSQWTarCrQChT1kuzdWh62qetL_HraungZ5CJvNgwHSsSsYCisscb9Jyu4J5MsC1qFgTFItv3nb_Gt-fh2g-8sGSSgEYPuULNLG88pUNS4pdHQucmHUPbU"/>
<div class="relative z-10 text-center p-md">
<span class="material-symbols-outlined text-on-primary-container scale-150 mb-md block" data-icon="verified">verified</span>
<p class="font-label-md text-on-primary-container">Clinical Excellence Guaranteed</p>
</div>
</div>
</div>
<!-- Notes & Confirmation Section -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-lg active-step-shadow space-y-lg">
<div>
<label class="block font-label-md text-on-surface-variant mb-xs" for="notes">Reason for visit / Notes for doctor (Optional)</label>
<textarea class="w-full bg-surface-container-low border border-outline-variant rounded-lg px-md py-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all font-body-md text-on-surface" id="notes" placeholder="Please describe any specific concerns or symptoms..." rows="3"></textarea>
</div>
<div class="flex items-start gap-md bg-surface-container-low p-md rounded-lg border border-outline-variant">
<div class="flex items-center h-5">
<input class="w-5 h-5 text-primary border-outline-variant rounded focus:ring-primary" id="insurance" type="checkbox"/>
</div>
<div class="ml-sm text-sm">
<label class="font-label-md text-on-surface" for="insurance">Confirm Insurance Status</label>
<p class="text-on-surface-variant font-body-sm">I confirm that my insurance details on file are up to date, or I will provide them at the time of the visit.</p>
</div>
</div>
</div>
<!-- Action Area -->
<div class="flex flex-col md:flex-row gap-md justify-between items-center py-md">
<button class="flex items-center gap-sm px-lg py-md border border-outline-variant rounded-full text-on-surface-variant font-label-md hover:bg-surface-container-high transition-colors active:opacity-80">
<span class="material-symbols-outlined" data-icon="arrow_back">arrow_back</span>
                    Back to Selection
                </button>
<button class="w-full md:w-auto flex items-center justify-center gap-sm px-xl py-md bg-primary text-on-primary rounded-full font-h3 hover:bg-on-primary-fixed-variant transition-all active:scale-[0.98] shadow-md">
                    Confirm Booking
                    <span class="material-symbols-outlined" data-icon="event_available">event_available</span>
</button>
</div>
<!-- Success Message Preview (Hidden by default, shown for structure) -->
<div class="hidden text-center p-xl bg-secondary-container rounded-xl border border-secondary">
<div class="w-16 h-16 bg-secondary text-on-secondary rounded-full flex items-center justify-center mx-auto mb-md">
<span class="material-symbols-outlined text-xl" data-icon="check_circle">check_circle</span>
</div>
<h3 class="font-h2 text-on-secondary-container">Booking Confirmed!</h3>
<p class="font-body-md text-on-secondary-container mt-xs">A confirmation email has been sent to your registered address.</p>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-slate-50 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800">
<div class="w-full py-12 px-6 flex flex-col md:flex-row justify-between items-center gap-4 max-w-7xl mx-auto">
<div class="flex flex-col items-center md:items-start gap-1">
<span class="font-bold text-slate-900 dark:text-white font-h2">DentaFlow</span>
<p class="font-['Inter'] text-xs text-slate-500 dark:text-slate-400">© 2024 DentaFlow. Clinical Excellence in Dental Care.</p>
</div>
<div class="flex gap-6">
<a class="font-['Inter'] text-xs text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white underline cursor-pointer" href="#">Support</a>
<a class="font-['Inter'] text-xs text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white underline cursor-pointer" href="#">Privacy Policy</a>
<a class="font-['Inter'] text-xs text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white underline cursor-pointer" href="#">Terms of Service</a>
</div>
</div>
</footer>
</body></html>
