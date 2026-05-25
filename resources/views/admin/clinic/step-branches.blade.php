<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
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
        }
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-surface font-body-md text-on-surface">
<!-- Super Admin SideNavBar -->
<aside class="fixed left-0 top-0 h-full flex flex-col py-6 bg-slate-900 w-64 border-r border-slate-800 shadow-xl z-50">
<div class="px-6 mb-8">
<h1 class="text-lg font-black text-white">DentaFlow</h1>
<p class="text-xs text-slate-400">Enterprise Admin</p>
</div>
<nav class="flex-1 space-y-1">
<a class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white mx-2 hover:bg-slate-800 transition-all duration-200" href="{{ route('admin.dashboard.index') }}">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span>Dashboard</span>
</a>
<!-- Active State: Clinics (Since we are onboarding a clinic) -->
<a class="flex items-center gap-3 px-4 py-3 text-white bg-blue-600 rounded-lg mx-2 border-l-4 border-white translate-x-1 transition-all duration-200" href="{{ route('admin.clinic.index') }}">
<span class="material-symbols-outlined" data-icon="medical_services">medical_services</span>
<span>Clinics</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white mx-2 hover:bg-slate-800 transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="payments">payments</span>
<span>Subscription</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white mx-2 hover:bg-slate-800 transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="monitoring">monitoring</span>
<span>Analytics</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white mx-2 hover:bg-slate-800 transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="group">group</span>
<span>Staff</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white mx-2 hover:bg-slate-800 transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="history">history</span>
<span>Audit Log</span>
</a>
</nav>
<div class="mt-auto px-4">
<button class="w-full py-3 bg-slate-800 text-white rounded-lg font-label-md flex items-center justify-center gap-2 hover:bg-slate-700 transition-colors">
<span class="material-symbols-outlined text-sm" data-icon="support_agent">support_agent</span>
                Support Portal
            </button>
</div>
</aside>
<!-- Main Content Area -->
<main class="ml-64 min-h-screen bg-background">
<!-- TopBar Integration -->
<header class="sticky top-0 z-40 flex justify-between items-center h-16 px-xl w-full bg-white/80 backdrop-blur-md border-b border-slate-200">
<div class="flex items-center gap-4">
<h2 class="font-h2 text-on-surface">New Clinic Onboarding</h2>
</div>
<div class="flex items-center gap-6">
<div class="flex gap-4">
<span class="material-symbols-outlined text-slate-500 cursor-pointer hover:text-primary transition-colors" data-icon="notifications">notifications</span>
<span class="material-symbols-outlined text-slate-500 cursor-pointer hover:text-primary transition-colors" data-icon="help">help</span>
<span class="material-symbols-outlined text-slate-500 cursor-pointer hover:text-primary transition-colors" data-icon="settings">settings</span>
</div>
<img alt="Super Admin Profile" class="w-8 h-8 rounded-full border border-slate-200 object-cover" data-alt="A professional headshot of a mature healthcare administrator in a clean office setting. He is wearing a crisp white shirt and a blue blazer, looking directly at the camera with a confident and helpful expression. The background is a soft-focus modern medical facility with high-key lighting and corporate blue accents." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBs2PtFQ21Z3WUw6AqK4tw8lsaCh7DwXVHv4XidMEy-u1udYz0cVOIDvhLv9whEhZB0ugNfGdNWbS2RcVpvJLc0XQDOgSBT9twYHnmMS67bA8T3Wpaz4Ea1cibpWv1smXf6yu-5cNr8Q3APjlaFO4YnOxPpjL7EiXfXtFkSlcgK1BBFucPJbVxIOBT683tE5IMMF7GXT7G4tH5DU3GHHTZDrT-QsNndzW0qgD1KYDCSwLJKYJ89Af9DWIhFX8vCLSmo5RurIZClmHY"/>
</div>
</header>
<!-- Wizard Container -->
<div class="max-w-5xl mx-auto px-xl py-xl">
<!-- Progress Stepper -->
<div class="mb-12">
<div class="flex items-center justify-between relative">
<!-- Progress Line Background -->
<div class="absolute top-1/2 left-0 w-full h-1 bg-surface-container -translate-y-1/2 z-0"></div>
<!-- Active Progress Line -->
<div class="absolute top-1/2 left-0 w-1/2 h-1 bg-primary -translate-y-1/2 z-0 transition-all duration-500"></div>
<!-- Step 1: Active -->
<div class="relative z-10 flex flex-col items-center">
<div class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold shadow-lg">1</div>
<span class="mt-2 font-label-md text-on-surface-variant">Clinic Profile</span>
</div>
<!-- Step 2: Upcoming -->
<div class="relative z-10 flex flex-col items-center">
<div class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold shadow-lg">2</div>
<span class="mt-2 font-label-md text-primary">Branches</span>
</div>
<!-- Step 3: Upcoming -->
<div class="relative z-10 flex flex-col items-center">
<div class="w-10 h-10 rounded-full bg-surface-container-highest text-on-surface-variant flex items-center justify-center font-bold">3</div>
<span class="mt-2 font-label-md text-on-surface-variant">Subscription</span>
</div>
<!-- Step 4: Upcoming -->
<div class="relative z-10 flex flex-col items-center">
<div class="w-10 h-10 rounded-full bg-surface-container-highest text-on-surface-variant flex items-center justify-center font-bold">4</div>
<span class="mt-2 font-label-md text-on-surface-variant">Primary Admin</span>
</div>
</div>
</div>
<!-- Wizard Card: Step 1 Content -->
<div class="bg-surface-container-lowest rounded-xl border border-outline-variant shadow-sm overflow-hidden">
<div class="p-xl border-b border-outline-variant bg-surface-bright">
<h3 class="font-h3 text-on-surface">Step 1: Branches</h3>
<p class="text-body-md text-on-surface-variant mt-1">Provide the foundational identity details for the new dental facility.</p>
</div>
<div class="p-xl grid grid-cols-12 gap-lg">
<!-- Left: Form Fields -->
<div class="col-span-8 space-y-lg">
<div class="grid grid-cols-1 gap-md">
<div class="space-y-unit">
<label class="font-label-md text-on-surface-variant block">Branch Name *</label>
<input class="w-full px-md py-sm rounded-lg border border-outline text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" placeholder="e.g. BrightSmile Dental Group" type="text"/>
</div>
</div>
<div class="grid grid-cols-2 gap-md">
<div class="space-y-unit">
<label class="font-label-md text-on-surface-variant block">Primary Contact Email *</label>
<input class="w-full px-md py-sm rounded-lg border border-outline text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" placeholder="admin@clinic.com" type="email"/>
</div>
<div class="space-y-unit">
<label class="font-label-md text-on-surface-variant block">Phone Number *</label>
<input class="w-full px-md py-sm rounded-lg border border-outline text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" placeholder="+1 (555) 000-0000" type="tel"/>
</div>
</div>
<div class="space-y-unit">
<label class="font-label-md text-on-surface-variant block">Clinic Specialization</label>
<select class="w-full px-md py-sm rounded-lg border border-outline text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none bg-white transition-all">
<option>General Dentistry</option>
<option>Orthodontics</option>
<option>Pediatric Dentistry</option>
<option>Periodontics</option>
<option>Multi-Specialty</option>
</select>
</div>
</div>
<!-- Right: Logo Upload -->
<div class="col-span-4 border-l border-outline-variant pl-lg">
<div class="space-y-md">
<label class="font-label-md text-on-surface-variant block">Clinic Logo</label>
<div class="group relative aspect-square w-full border-2 border-dashed border-outline-variant rounded-xl flex flex-col items-center justify-center bg-surface-container-low hover:border-primary hover:bg-surface-container transition-all cursor-pointer overflow-hidden">
<span class="material-symbols-outlined text-outline text-4xl mb-2 group-hover:text-primary transition-colors" data-icon="cloud_upload">cloud_upload</span>
<p class="text-label-md text-on-surface-variant px-4 text-center">Click or drag clinic logo to upload (PNG, JPG up to 2MB)</p>
<!-- Background preview image placeholder (hidden until upload) -->
<div class="absolute inset-0 opacity-0 group-hover:opacity-10 bg-cover bg-center" data-alt="A minimalist and clean dental clinic logo featuring a stylized tooth combined with a leaf, symbolizing organic care. The logo uses a professional palette of emerald green and slate blue on a white background. The image is bright and clinical, emphasizing hygiene and modern design." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBddPZ_Lj2YVeix4UuFG4Vye4nW0LHRnFRBleV2lcIID8C4afKiOHhKPn86BXYytcJnrUgj3zSBD6u0E3NIin9uEIyx0QIpCj7WiyUd0NZOrxQPgmetNMsyKQqFzyP8HLA5oPr4JRi9hDWRdIWsBmLpE9YbK_ubkc2J8FJ3N83kvUUGGrxbBEbJwjjlpjd511g8QFbNvqziEVeC6nKOtMubBHAZVzcoVf2OG9QlDC5f1iztPOqvV8EPoyWNEmJnVpl1dK7ZRgy1pEk')"></div>
</div>
<div class="flex gap-2">
<span class="material-symbols-outlined text-primary text-sm" data-icon="info">info</span>
<p class="text-xs text-on-surface-variant">Recommended size: 512x512px</p>
</div>
</div>
</div>
</div>
<!-- Wizard Actions -->
<div class="p-lg bg-surface-container-low flex justify-between items-center border-t border-outline-variant">
<button class="px-xl py-md font-label-md text-on-surface-variant bg-transparent border border-outline-variant rounded-lg hover:bg-white transition-colors flex items-center gap-2">
<span class="material-symbols-outlined text-sm" data-icon="close">close</span>
                        Cancel
                    </button>
<div class="flex gap-4">
<button class="px-xl py-md font-label-md text-primary bg-transparent border border-primary rounded-lg hover:bg-primary/5 transition-colors disabled:opacity-50" disabled="">
                            Back
                        </button>
                            <a href="{{ route('admin.clinic.add.subscriptions')}}">
<button class="px-xl py-md font-label-md text-on-primary bg-primary rounded-lg hover:bg-primary/90 shadow-md transition-all flex items-center gap-2">
                            Next: Subscriptions
                            <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
</button>
                            </a>
</div>
</div>
</div>
<!-- Secondary Info / Bento Section -->
<div class="mt-xl grid grid-cols-3 gap-lg">
<div class="bg-blue-50 border border-blue-100 p-lg rounded-xl flex gap-md items-start">
<div class="bg-blue-600/10 p-sm rounded-lg">
<span class="material-symbols-outlined text-primary" data-icon="security">security</span>
</div>
<div>
<h4 class="font-label-md text-primary">Secure Data Hosting</h4>
<p class="text-body-sm text-slate-600 mt-1">All patient records are encrypted using AES-256 standard and hosted in HIPAA-compliant zones.</p>
</div>
</div>
<div class="bg-emerald-50 border border-emerald-100 p-lg rounded-xl flex gap-md items-start">
<div class="bg-emerald-600/10 p-sm rounded-lg">
<span class="material-symbols-outlined text-secondary" data-icon="verified_user">verified_user</span>
</div>
<div>
<h4 class="font-label-md text-secondary">Verified Enterprise</h4>
<p class="text-body-sm text-slate-600 mt-1">This clinic will be onboarded to the DentaFlow Enterprise network with full auditing capabilities.</p>
</div>
</div>
<div class="bg-amber-50 border border-amber-100 p-lg rounded-xl flex gap-md items-start">
<div class="bg-amber-600/10 p-sm rounded-lg">
<span class="material-symbols-outlined text-tertiary" data-icon="support">support</span>
</div>
<div>
<h4 class="font-label-md text-tertiary">24/7 Deployment Help</h4>
<p class="text-body-sm text-slate-600 mt-1">Need assistance? Our deployment team is ready to help with branch configuration and data migration.</p>
</div>
</div>
</div>
<!-- Preview Card -->
<div class="mt-xl">
<div class="bg-slate-900 rounded-xl p-xl flex items-center justify-between text-white overflow-hidden relative">
<div class="relative z-10">
<h3 class="font-h3">Enterprise Dashboard Preview</h3>
<p class="text-slate-400 mt-2 max-w-lg">Once completed, the clinic will gain access to the full DentaFlow suite including inventory management, automated scheduling, and real-time analytics.</p>
</div>
<div class="relative z-10">
<button class="bg-white text-slate-900 px-lg py-md rounded-lg font-label-md hover:bg-slate-100 transition-colors">
                            View Demo Dashboard
                        </button>
</div>
<!-- Decorative abstract graphic -->
<div class="absolute right-0 top-0 w-1/3 h-full opacity-20 pointer-events-none">
<div class="absolute inset-0 bg-gradient-to-l from-blue-500 to-transparent"></div>
<img alt="Technology Interface" class="h-full w-full object-cover" data-alt="A futuristic medical technology interface showing holographic dental data and patient health metrics. The color scheme is a professional combination of deep navy blues, bright cyan glows, and crisp white lines. The lighting is low-key, emphasizing the high-tech, digital nature of the platform. The mood is advanced, reliable, and precise." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCjOMpn1bGjZoX9xEh4m-BCWxuEQq4S4ZGYh0RcprkeGalOMPfBdzrO_t4XelsFrTLp8aRCtEGV5F_iU5wvLp4zyRbGnv2_lWpuA1kGhsF5EfslwmzQdKBIlApQ_ljDF3pxrDqqCRHji_5xre5_K2_ydCp0oYnSf4rCaFk__YfXfene_gjwDkk3HUCijP0hlUh_SfL-v1fIar6pMAF7ZQ3rAaaScKJgwpv0bUv3dndXgehqmF1GnvkW6b6C5dUjHjt0KrYxFit_PEM"/>
</div>
</div>
</div>
</div>
</main>
<!-- FAB for quick actions (Contextual check: should be on main dashboard, but adding one here for 'Save Draft' since it's a long form) -->
<button class="fixed bottom-lg right-lg w-14 h-14 bg-primary text-on-primary rounded-full shadow-2xl flex items-center justify-center hover:scale-105 active:scale-95 transition-all group z-50">
<span class="material-symbols-outlined" data-icon="save">save</span>
<span class="absolute right-full mr-4 px-3 py-1 bg-slate-900 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">Save Draft</span>
</button>
</body></html>
