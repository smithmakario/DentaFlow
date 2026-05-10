<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-secondary-fixed": "#00201e",
                    "background": "#f8f9ff",
                    "secondary-fixed": "#6ff7ee",
                    "on-secondary": "#ffffff",
                    "tertiary-fixed": "#ffdbd0",
                    "error-container": "#ffdad6",
                    "inverse-surface": "#213145",
                    "tertiary-fixed-dim": "#ffb59d",
                    "on-primary-fixed": "#001849",
                    "surface-bright": "#f8f9ff",
                    "on-secondary-container": "#00716b",
                    "tertiary": "#a33200",
                    "primary-fixed-dim": "#b3c5ff",
                    "outline": "#727687",
                    "on-tertiary-fixed-variant": "#832600",
                    "on-tertiary-container": "#fff6f4",
                    "primary": "#0050cb",
                    "secondary-fixed-dim": "#4edbd2",
                    "on-primary-fixed-variant": "#003fa4",
                    "inverse-on-surface": "#eaf1ff",
                    "error": "#ba1a1a",
                    "on-primary-container": "#f8f7ff",
                    "on-primary": "#ffffff",
                    "surface-container-low": "#eff4ff",
                    "surface-container-highest": "#d3e4fe",
                    "on-tertiary-fixed": "#390c00",
                    "surface-dim": "#cbdbf5",
                    "inverse-primary": "#b3c5ff",
                    "surface-variant": "#d3e4fe",
                    "surface-container-lowest": "#ffffff",
                    "surface-tint": "#0054d6",
                    "primary-container": "#0066ff",
                    "surface": "#f8f9ff",
                    "on-surface-variant": "#424656",
                    "on-background": "#0b1c30",
                    "surface-container-high": "#dce9ff",
                    "on-error-container": "#93000a",
                    "secondary": "#006a65",
                    "on-secondary-fixed-variant": "#00504c",
                    "outline-variant": "#c2c6d8",
                    "on-tertiary": "#ffffff",
                    "on-surface": "#0b1c30",
                    "on-error": "#ffffff",
                    "secondary-container": "#6ff7ee",
                    "primary-fixed": "#dae1ff",
                    "tertiary-container": "#cc4204",
                    "surface-container": "#e5eeff"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "md": "16px",
                    "xs": "4px",
                    "lg": "24px",
                    "container-max": "1440px",
                    "xl": "32px",
                    "unit": "4px",
                    "sidebar-width": "260px",
                    "gutter": "20px",
                    "sm": "8px"
            },
            "fontFamily": {
                    "body-md": ["Inter"],
                    "h3": ["Inter"],
                    "h2": ["Inter"],
                    "label-sm": ["Inter"],
                    "h1": ["Inter"],
                    "body-sm": ["Inter"],
                    "body-lg": ["Inter"],
                    "label-md": ["Inter"]
            },
            "fontSize": {
                    "body-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0", "fontWeight": "400"}],
                    "h3": ["20px", {"lineHeight": "28px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "h2": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "label-sm": ["11px", {"lineHeight": "14px", "letterSpacing": "0.05em", "fontWeight": "700"}],
                    "h1": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "body-sm": ["13px", {"lineHeight": "18px", "letterSpacing": "0", "fontWeight": "400"}],
                    "body-lg": ["16px", {"lineHeight": "24px", "letterSpacing": "0", "fontWeight": "400"}],
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
<body class="bg-background text-on-background min-h-screen flex flex-col">
<!-- TopNavBar -->
<nav class="bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 shadow-sm flex justify-between items-center w-full px-6 py-3 h-16 fixed top-0 z-50 font-inter antialiased">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-blue-600 dark:text-blue-400" style="font-variation-settings: 'FILL' 1;">dentistry</span>
<span class="text-xl font-bold tracking-tight text-slate-900 dark:text-white">DentaFlow</span>
</div>
<div class="flex items-center gap-6">
<div class="hidden md:flex gap-6 items-center">
<a class="text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors px-3 py-1 rounded" href="#">Dashboard</a>
<a class="text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors px-3 py-1 rounded" href="#">Patients</a>
<a class="text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors px-3 py-1 rounded text-blue-600 dark:text-blue-400 font-semibold" href="#">Support</a>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-slate-500 dark:text-slate-400 cursor-pointer" data-icon="help_outline">help_outline</span>
<button class="bg-primary text-on-primary px-4 py-2 rounded-lg text-sm font-medium hover:opacity-90 transition-all">Support</button>
</div>
</div>
</nav>
<!-- Main Content Canvas -->
<main class="flex-grow flex items-center justify-center pt-16 px-6">
<div class="max-w-4xl w-full grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
<!-- Illustration Column -->
<div class="relative group order-2 md:order-1">
<div class="absolute -inset-4 bg-primary/5 rounded-full blur-3xl group-hover:bg-primary/10 transition-colors duration-500"></div>
<div class="relative bg-white p-8 rounded-xl border border-outline-variant shadow-sm overflow-hidden">
<img alt="Clinical dental tools illustration" class="w-full h-auto rounded-lg grayscale-[20%] opacity-90 transition-transform duration-700 group-hover:scale-105" data-alt="A clean, clinical 3D render of a stylized dental mirror and explorer tool resting on a pristine white surface. The lighting is soft and high-key, using a palette of clinical blues and crisp whites. The composition is minimalist and professional, reflecting the technical precision of a modern dental surgery. The mood is calm and professional, intended to reassure the user during a digital error." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqcO3rZAyOSno0VlJwtaPWlTXH5cv_NqKY02e6k0MOBB9MDWNoxeo6Ki0dmTI2MlRE3kokN86tl77q8qly2zn_yolKnFoF91z1-2f1t_Z1fpwM-vAuuNvdXjDO1f7-NF4bbZVbcWGDioFZKpPgTLDToidSSOlmKaTILlNnPXlkzXO_2rXIj_2xw78MJWOAE9Qi3OWmoK62TXmVdChkcQ8Onu86J0A_BTjJtk4YSwLZIIZA06NPWxOhbFzELU5IRX9mwnboaErSNkk"/>
<!-- Decorative dental icon overlay -->
<div class="absolute top-4 right-4 bg-surface-container-low p-3 rounded-full border border-outline-variant/30">
<span class="material-symbols-outlined text-primary text-3xl" data-icon="error_med">error_med</span>
</div>
</div>
</div>
<!-- Text Content Column -->
<div class="flex flex-col space-y-6 order-1 md:order-2">
<div class="space-y-2">
<span class="font-label-md text-label-md text-primary tracking-widest bg-primary/10 px-3 py-1 rounded-full inline-block">ERROR 404</span>
<h1 class="font-h1 text-h1 text-on-background leading-tight">
                        Case Not Found.
                    </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-md">
                        We couldn't find the page you're looking for. It might have been moved, archived, or the patient record link has expired.
                    </p>
</div>
<div class="flex flex-col sm:flex-row gap-4 pt-4">
<a class="bg-primary text-on-primary font-label-md text-body-md px-8 py-3 rounded-xl flex items-center justify-center gap-2 hover:shadow-lg hover:shadow-primary/20 active:scale-[0.98] transition-all" href="#">
<span class="material-symbols-outlined text-lg" data-icon="dashboard">dashboard</span>
                        Return to Dashboard
                    </a>
<a class="border border-outline-variant text-on-surface font-label-md text-body-md px-8 py-3 rounded-xl flex items-center justify-center gap-2 hover:bg-surface-container-low transition-colors" href="#">
<span class="material-symbols-outlined text-lg" data-icon="contact_support">contact_support</span>
                        Contact Support
                    </a>
</div>
<div class="pt-8 border-t border-outline-variant/50">
<p class="font-label-sm text-label-sm text-outline uppercase tracking-wider mb-3">Quick Navigation</p>
<div class="grid grid-cols-2 gap-y-2 gap-x-4">
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary flex items-center gap-2" href="#">
<span class="material-symbols-outlined text-sm" data-icon="calendar_today">calendar_today</span>
                            Appointments
                        </a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary flex items-center gap-2" href="#">
<span class="material-symbols-outlined text-sm" data-icon="person">person</span>
                            Patient Directory
                        </a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary flex items-center gap-2" href="#">
<span class="material-symbols-outlined text-sm" data-icon="receipt_long">receipt_long</span>
                            Billing &amp; Records
                        </a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary flex items-center gap-2" href="#">
<span class="material-symbols-outlined text-sm" data-icon="settings">settings</span>
                            Clinic Settings
                        </a>
</div>
</div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-slate-50 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800 w-full py-8 px-6 flex flex-col md:flex-row justify-between items-center gap-4 text-sm font-inter text-slate-500">
<div class="flex flex-col md:flex-row items-center gap-4 md:gap-8">
<span class="font-medium text-slate-900 dark:text-white">© 2024 DentaFlow Systems. Clinical Precision Guaranteed.</span>
<div class="flex gap-6">
<a class="text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 duration-200 ease-in-out" href="#">Privacy Policy</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 duration-200 ease-in-out" href="#">Terms of Service</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 duration-200 ease-in-out" href="#">Security</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 duration-200 ease-in-out" href="#">Status</a>
</div>
</div>
<div class="flex items-center gap-4">
<div class="flex items-center gap-1">
<span class="w-2 h-2 bg-green-500 rounded-full"></span>
<span class="text-xs uppercase tracking-widest font-bold">All Systems Operational</span>
</div>
</div>
</footer>
</body></html>
