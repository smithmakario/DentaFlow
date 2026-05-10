<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
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
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
        }
        body {
            background-color: #f8f9ff;
        }
    </style>
</head>
<body class="font-body-md text-on-surface">
<!-- TopAppBar -->
<header class="bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 shadow-sm dark:shadow-none docked full-width top-0 z-50 sticky">
<div class="flex justify-between items-center w-full px-6 py-4 max-w-7xl mx-auto">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-blue-600 dark:text-blue-400 text-2xl" data-icon="dentistry">dentistry</span>
<h1 class="font-['Inter'] antialiased text-xl font-bold tracking-tight text-slate-900 dark:text-white">DentaFlow</h1>
</div>
<div class="flex items-center gap-4">
<button class="text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-300 transition-colors active:opacity-80">
<span class="material-symbols-outlined text-2xl" data-icon="account_circle">account_circle</span>
</button>
</div>
</div>
</header>
<main class="max-w-7xl mx-auto px-6 py-8">
<!-- Progress Stepper -->
<div class="mb-12">
<div class="flex items-center justify-center max-w-3xl mx-auto relative">
<div class="absolute top-1/2 left-0 w-full h-0.5 bg-surface-container-high -translate-y-1/2 z-0"></div>
<div class="relative z-10 flex justify-between w-full">
<!-- Step 1: Active -->
<div class="flex flex-col items-center">
<div class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center font-label-md shadow-md ring-4 ring-background">
                            1
                        </div>
<span class="mt-2 font-label-md text-primary">Services</span>
</div>
<!-- Step 2 -->
<div class="flex flex-col items-center">
<div class="w-10 h-10 rounded-full bg-surface-container-highest text-on-surface-variant flex items-center justify-center font-label-md ring-4 ring-background">
                            2
                        </div>
<span class="mt-2 font-label-md text-on-surface-variant">Provider</span>
</div>
<!-- Step 3 -->
<div class="flex flex-col items-center">
<div class="w-10 h-10 rounded-full bg-surface-container-highest text-on-surface-variant flex items-center justify-center font-label-md ring-4 ring-background">
                            3
                        </div>
<span class="mt-2 font-label-md text-on-surface-variant">Time</span>
</div>
<!-- Step 4 -->
<div class="flex flex-col items-center">
<div class="w-10 h-10 rounded-full bg-surface-container-highest text-on-surface-variant flex items-center justify-center font-label-md ring-4 ring-background">
                            4
                        </div>
<span class="mt-2 font-label-md text-on-surface-variant">Review</span>
</div>
</div>
</div>
</div>
<!-- Page Header & Search -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-8">
<div>
<h2 class="font-h2 text-h2 text-on-surface mb-2">Select a Service</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">Choose the dental procedure you need today.</p>
</div>
<div class="relative w-full md:w-80">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline" data-icon="search">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-white border border-outline-variant rounded-xl focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all font-body-md" placeholder="Search services..." type="text"/>
</div>
</div>
<!-- Service Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Service Card 1 -->
<div class="bg-white p-6 rounded-xl border border-outline-variant hover:border-primary hover:shadow-lg transition-all cursor-pointer group flex flex-col h-full">
<div class="w-12 h-12 rounded-lg bg-surface-container-low text-primary flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-on-primary transition-colors">
<span class="material-symbols-outlined text-3xl" data-icon="medical_services">medical_services</span>
</div>
<h3 class="font-h3 text-h3 text-on-surface mb-2">Routine Checkup</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-6 flex-grow">Comprehensive oral examination, digital X-rays, and professional consultation.</p>
<div class="flex items-center justify-between mt-auto pt-4 border-t border-surface-container-high">
<div class="flex items-center gap-1 text-on-surface-variant">
<span class="material-symbols-outlined text-sm" data-icon="schedule">schedule</span>
<span class="font-label-md">45 min</span>
</div>
<span class="font-label-md text-primary">$80.00</span>
</div>
</div>
<!-- Service Card 2 -->
<div class="bg-white p-6 rounded-xl border-2 border-primary shadow-md relative group flex flex-col h-full">
<div class="absolute -top-3 left-6 px-3 py-1 bg-primary text-on-primary rounded-full text-[10px] font-bold uppercase tracking-wider">Recommended</div>
<div class="w-12 h-12 rounded-lg bg-primary text-on-primary flex items-center justify-center mb-4">
<span class="material-symbols-outlined text-3xl" data-icon="clean_hands">clean_hands</span>
</div>
<h3 class="font-h3 text-h3 text-on-surface mb-2">Dental Cleaning</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-6 flex-grow">Professional scale and polish to remove plaque and tartar for a healthier smile.</p>
<div class="flex items-center justify-between mt-auto pt-4 border-t border-surface-container-high">
<div class="flex items-center gap-1 text-on-surface-variant">
<span class="material-symbols-outlined text-sm" data-icon="schedule">schedule</span>
<span class="font-label-md">60 min</span>
</div>
<span class="font-label-md text-primary">$120.00</span>
</div>
</div>
<!-- Service Card 3 -->
<div class="bg-white p-6 rounded-xl border border-outline-variant hover:border-primary hover:shadow-lg transition-all cursor-pointer group flex flex-col h-full">
<div class="w-12 h-12 rounded-lg bg-surface-container-low text-primary flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-on-primary transition-colors">
<span class="material-symbols-outlined text-3xl" data-icon="auto_awesome">auto_awesome</span>
</div>
<h3 class="font-h3 text-h3 text-on-surface mb-2">Teeth Whitening</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-6 flex-grow">Advanced laser whitening treatment for a brighter, more confident smile.</p>
<div class="flex items-center justify-between mt-auto pt-4 border-t border-surface-container-high">
<div class="flex items-center gap-1 text-on-surface-variant">
<span class="material-symbols-outlined text-sm" data-icon="schedule">schedule</span>
<span class="font-label-md">90 min</span>
</div>
<span class="font-label-md text-primary">$350.00</span>
</div>
</div>
<!-- Service Card 4 -->
<div class="bg-white p-6 rounded-xl border border-outline-variant hover:border-primary hover:shadow-lg transition-all cursor-pointer group flex flex-col h-full">
<div class="w-12 h-12 rounded-lg bg-surface-container-low text-primary flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-on-primary transition-colors">
<span class="material-symbols-outlined text-3xl" data-icon="emergency">emergency</span>
</div>
<h3 class="font-h3 text-h3 text-on-surface mb-2">Emergency Care</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-6 flex-grow">Urgent treatment for toothaches, broken teeth, or acute dental trauma.</p>
<div class="flex items-center justify-between mt-auto pt-4 border-t border-surface-container-high">
<div class="flex items-center gap-1 text-on-surface-variant">
<span class="material-symbols-outlined text-sm" data-icon="schedule">schedule</span>
<span class="font-label-md">30 min</span>
</div>
<span class="font-label-md text-primary">$150.00</span>
</div>
</div>
</div>
<!-- Featured Section (Bento Style) -->
<div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="md:col-span-2 bg-gradient-to-br from-primary-container to-blue-700 rounded-xl p-8 text-on-primary relative overflow-hidden">
<div class="relative z-10 max-w-md">
<h3 class="font-h2 text-h2 mb-4">Dental Wellness Plan</h3>
<p class="font-body-lg opacity-90 mb-6">Join our monthly membership for free cleanings, checkups, and 20% off all other procedures.</p>
<button class="bg-white text-primary px-6 py-3 rounded-full font-label-md shadow-lg hover:bg-opacity-90 transition-all">Learn More</button>
</div>
<div class="absolute right-0 bottom-0 top-0 w-1/3 opacity-20 flex items-center justify-center">
<span class="material-symbols-outlined text-[160px]" data-icon="verified">verified</span>
</div>
</div>
<div class="bg-surface-container-highest rounded-xl p-8 flex flex-col justify-center items-center text-center">
<div class="w-16 h-16 rounded-full bg-white flex items-center justify-center mb-4 shadow-sm">
<span class="material-symbols-outlined text-3xl text-secondary" data-icon="chat">chat</span>
</div>
<h4 class="font-h3 text-h3 text-on-surface mb-2">Need Help?</h4>
<p class="font-body-sm text-on-surface-variant mb-4">Not sure which service to choose? Talk to our virtual assistant.</p>
<button class="text-secondary font-label-md flex items-center gap-2 hover:underline">
                    Start Consultation <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
</button>
</div>
</div>
<!-- Sticky Bottom Action Bar -->
<div class="mt-12 flex items-center justify-end">
<button class="flex items-center gap-2 px-8 py-4 bg-primary text-on-primary rounded-xl font-label-md shadow-lg hover:shadow-xl hover:translate-y-[-2px] active:translate-y-0 transition-all group">
                Continue to Provider
                <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform" data-icon="chevron_right">chevron_right</span>
</button>
</div>
</main>
<!-- Footer -->
<footer class="bg-slate-50 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800 full-width bottom-0 mt-12">
<div class="w-full py-12 px-6 flex flex-col md:flex-row justify-between items-center gap-4 max-w-7xl mx-auto">
<div class="flex items-center gap-4">
<span class="font-['Inter'] font-bold text-slate-900 dark:text-white">DentaFlow</span>
<span class="font-['Inter'] text-xs text-slate-500 dark:text-slate-400">© 2024 DentaFlow. Clinical Excellence in Dental Care.</span>
</div>
<div class="flex gap-6">
<a class="font-['Inter'] text-xs text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white underline cursor-pointer" href="#">Support</a>
<a class="font-['Inter'] text-xs text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white underline cursor-pointer" href="#">Privacy Policy</a>
<a class="font-['Inter'] text-xs text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white underline cursor-pointer" href="#">Terms of Service</a>
</div>
</div>
</footer>
</body></html>
