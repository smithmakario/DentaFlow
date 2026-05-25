<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
<div class="w-full max-w-md">
<div class="bg-white rounded-xl shadow-sm border border-outline-variant p-8 md:p-10">
<div class="text-center mb-10">
<h1 class="font-h1 text-h2 text-on-surface mb-2">Welcome Back</h1>
<p class="font-body-md text-on-surface-variant">Clinical Practice Management Access</p>
</div>
<form class="space-y-6" action="{{ route('auth.login' ) }}" method="POST">
@csrf
<div>
<label class="block font-label-md text-on-surface-variant mb-2" for="username">Username</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline" data-icon="mail">person</span>
<input class="w-full pl-10 pr-4 py-3 bg-surface-container-lowest border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all font-body-md" id="username" name="username" placeholder="practitioner" required="" type="text"/>
</div>
</div>
<div>
<div class="flex justify-between items-center mb-2">
<label class="block font-label-md text-on-surface-variant" for="password">Password</label>
<a class="font-label-md text-primary hover:underline" href="#">Forgot Password?</a>
</div>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline" data-icon="lock">lock</span>
<input class="w-full pl-10 pr-4 py-3 bg-surface-container-lowest border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all font-body-md" id="password" name="password" placeholder="••••••••" required="" type="password"/>
</div>
</div>
<div class="flex items-center">
<input class="w-4 h-4 text-primary border-outline-variant rounded focus:ring-primary" id="remember" name="remember" type="checkbox"/>
<label class="ml-2 font-body-sm text-on-surface-variant" for="remember">Keep me signed in for 30 days</label>
</div>
<button class="w-full py-3.5 px-6 bg-primary text-on-primary font-label-md rounded-lg shadow-md hover:bg-primary-container transition-all active:opacity-80 duration-150 flex justify-center items-center gap-2" type="submit">
<span>Sign In</span>
<span class="material-symbols-outlined text-[20px]" data-icon="arrow_forward">arrow_forward</span>
</button>
</form>
<div class="relative my-8">
<div class="absolute inset-0 flex items-center">
<div class="w-full border-t border-outline-variant"></div>
</div>
<div class="relative flex justify-center text-sm">
<span class="px-4 bg-white font-body-sm text-outline">Or continue with</span>
</div>
</div>
<div class="grid grid-cols-2 gap-4">
<button class="flex items-center justify-center gap-2 py-3 px-4 bg-white border border-outline-variant rounded-lg hover:bg-surface-container-low transition-colors font-label-md text-on-surface">
<img alt="Google" class="w-5 h-5" data-alt="A clean, isolated graphic of a colorful Google logo representing modern integration and cloud connectivity. The image is crisp and centered against a soft light-mode background, matching a corporate medical software aesthetic. The lighting is even and flat to maintain professionalism." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDCvB8putYaRYajyivSt9-ge-eW-idGFZ4QqtyphSeVHP5WxyeKHBwfKEbmcC09huJ5ocBZMojrQQZtKD6P2fhHxKA7MVeoD-KFmsDJWb4MKXKfDpoNWjN6tc1BFidTHI_Qe3LZY6wHMG_jobYs6tV2wlXPKowGkQmVub9RZMoT4svS64gN1M_Z22f622Mlk7INLSLrRwOGbG6Gbfl-2TUmktydMrGijg9RdbZyXFDwgCpIOw2G5D5Hza4cfKhP4AkgP5JCEnEPYk"/>
<span>Google</span>
</button>
<button class="flex items-center justify-center gap-2 py-3 px-4 bg-white border border-outline-variant rounded-lg hover:bg-surface-container-low transition-colors font-label-md text-on-surface">
<span class="material-symbols-outlined text-outline" data-icon="hub">hub</span>
<span>SSO</span>
</button>
</div>
</div>
<p class="text-center mt-8 font-body-sm text-on-surface-variant">
                Don't have an account? <a class="text-primary font-label-md hover:underline" href="#">Contact Administration</a>
</p>
</div>
</main>
<div class="hidden lg:block fixed bottom-12 right-12 opacity-10">
<img class="w-64 h-64 grayscale" data-alt="A macro photograph of clean, professional dental tools arranged precisely on a sterile white surface. The composition uses soft, cool-toned studio lighting to emphasize clinical precision and hygiene. A shallow depth of field creates a sophisticated architectural blur in the background. The overall mood is one of medical reliability and technological advancement." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCSD-81VESdM9otyntyOTqFMxMYieyYmfv2Ie4MV6gLNcfC1EggHY4bsScr9CdTB2rJZGW1YdJG9jU2KXx7NBkfgq4dYqz8ElLBFmq1jQ4rxpcdlF37e-88Z8pzywyhwJoibiN8uZcCjaDby-yGDIXgpkKSyE8kh-WCZL_5cFcbOP3Ajngyn4EDe8OSgpLe2PUK3L1g-ZV7CfTmxeNnigtLWhLhJfriKpkJ_CFIjNLHWM3WR-pxyFcA_B1dLAwGyiw4odpaHLzn-dA"/>
</div>
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
</body></html>
