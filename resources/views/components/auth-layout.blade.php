<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-secondary-fixed": "#00201d",
                    "secondary": "#006a63",
                    "on-secondary-container": "#006f67",
                    "on-primary": "#ffffff",
                    "primary-container": "#005fb8",
                    "on-tertiary-fixed-variant": "#334a55",
                    "on-tertiary-fixed": "#051e28",
                    "outline-variant": "#c2c6d4",
                    "surface-container-lowest": "#ffffff",
                    "error-container": "#ffdad6",
                    "on-error-container": "#93000a",
                    "surface-dim": "#d8dae2",
                    "on-tertiary-container": "#c5deec",
                    "tertiary-fixed-dim": "#b1cad7",
                    "on-primary-container": "#cadcff",
                    "surface-container-low": "#f2f3fb",
                    "on-secondary-fixed-variant": "#00504a",
                    "on-error": "#ffffff",
                    "on-surface": "#191c21",
                    "surface-container-highest": "#e1e2ea",
                    "on-primary-fixed-variant": "#00468b",
                    "surface-tint": "#005db5",
                    "error": "#ba1a1a",
                    "on-tertiary": "#ffffff",
                    "outline": "#727783",
                    "surface-container": "#ecedf6",
                    "tertiary-fixed": "#cde6f4",
                    "inverse-on-surface": "#eff0f8",
                    "on-secondary": "#ffffff",
                    "tertiary-container": "#4c636e",
                    "surface": "#f9f9ff",
                    "on-primary-fixed": "#001b3d",
                    "inverse-surface": "#2e3036",
                    "tertiary": "#344b56",
                    "secondary-fixed-dim": "#71d7cd",
                    "on-surface-variant": "#424752",
                    "primary": "#00488d",
                    "primary-fixed": "#d6e3ff",
                    "on-background": "#191c21",
                    "background": "#f9f9ff",
                    "primary-fixed-dim": "#a8c8ff",
                    "surface-container-high": "#e7e8f0",
                    "secondary-fixed": "#8ef4e9",
                    "surface-variant": "#e1e2ea",
                    "secondary-container": "#8bf1e6",
                    "inverse-primary": "#a8c8ff",
                    "surface-bright": "#f9f9ff"
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
            display: inline-block;
            vertical-align: middle;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .ghost-border {
            border-bottom: 2px solid rgba(194, 198, 212, 0.2);
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body selection:bg-primary-fixed selection:text-on-primary-fixed">
<!-- TopAppBar -->
<header class="bg-[#f9f9ff] dark:bg-slate-950 font-['Manrope'] antialiased docked full-width top-0 no-border tonal-shift-bg flat no shadows flex justify-between items-center px-8 py-4 w-full sticky z-50">
<a href="/" class="text-2xl font-bold tracking-tight text-[#191c21] dark:text-slate-100">Dentalfow</a>
<div class="hidden md:flex gap-8 items-center">
<nav class="flex gap-6">
<!-- Navigation is suppressed for transactional page per Shell Visibility & Relevance -->
</nav>
<div class="flex items-center gap-4 text-[#005FB8] dark:text-blue-400">
<button class="material-symbols-outlined hover:bg-[#f2f3fb] p-2 rounded-full transition-colors Active: scale-95 duration-150">help_outline</button>
<button class="material-symbols-outlined hover:bg-[#f2f3fb] p-2 rounded-full transition-colors Active: scale-95 duration-150">language</button>
</div>
</div>
</header>
<main class="min-h-[calc(100vh-160px)] flex items-center justify-center py-12 px-4 md:px-8 relative overflow-hidden">
{{ $slot }}
</main>
<!-- Footer -->
<footer class="bg-[#f2f3fb] dark:bg-slate-900 font-['Inter'] text-sm text-[#191c21] dark:text-slate-400 docked full-width bottom-0 tonal-shift-from-white flat no shadows w-full py-8 px-12 flex flex-col md:flex-row justify-between items-center gap-4">
<div class="text-lg font-semibold text-[#005FB8]">Dentalfow</div>
<div class="flex flex-wrap justify-center gap-6">
<a class="no-underline text-slate-500 hover:text-[#005FB8] dark:hover:text-blue-300 Transition-opacity duration-200" href="#">Privacy Policy</a>
<a class="no-underline text-slate-500 hover:text-[#005FB8] dark:hover:text-blue-300 Transition-opacity duration-200" href="#">Terms of Service</a>
<a class="no-underline text-slate-500 hover:text-[#005FB8] dark:hover:text-blue-300 Transition-opacity duration-200" href="#">Security Standards</a>
<a class="no-underline text-slate-500 hover:text-[#005FB8] dark:hover:text-blue-300 Transition-opacity duration-200" href="#">Support</a>
</div>
<div class="opacity-70 text-center md:text-right">
            © {{ date('Y') }} Dentalflow Practice Management. All rights reserved.
        </div>
</footer>
</body></html>
