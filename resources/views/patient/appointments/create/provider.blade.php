<html lang="en"><head>
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
            "h1": ["Inter"],
            "body-sm": ["Inter"],
            "label-sm": ["Inter"],
            "body-md": ["Inter"],
            "body-lg": ["Inter"],
            "h3": ["Inter"],
            "label-md": ["Inter"],
            "h2": ["Inter"]
          }
        }
      }
    }
  </script>
<style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }
    body {
      background-color: #f8f9ff;
    }
  </style>
</head>
<body class="font-body-md text-on-background antialiased">
<!-- Top Navigation Shell -->
<header class="bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 shadow-sm dark:shadow-none sticky top-0 z-50">
<div class="flex justify-between items-center w-full px-6 py-4 max-w-7xl mx-auto">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-2xl">dentistry</span>
<span class="text-xl font-bold tracking-tight text-slate-900 dark:text-white font-['Inter']">DentaFlow</span>
</div>
<div class="flex items-center gap-6">
<nav class="hidden md:flex gap-8 items-center font-['Inter'] text-sm font-medium">
<span class="text-slate-500 dark:text-slate-400 hover:text-blue-600 cursor-pointer transition-colors">Dashboard</span>
<span class="text-blue-600 dark:text-blue-400 border-b-2 border-blue-600 transition-colors cursor-pointer">Appointments</span>
<span class="text-slate-500 dark:text-slate-400 hover:text-blue-600 cursor-pointer transition-colors">History</span>
</nav>
<div class="flex items-center gap-3 border-l border-slate-200 pl-6 ml-2">
<span class="material-symbols-outlined text-slate-600 cursor-pointer">account_circle</span>
<span class="hidden sm:inline font-label-md text-on-surface-variant">Patient Profile</span>
</div>
</div>
</div>
</header>
<main class="max-w-7xl mx-auto px-6 py-8">
<!-- Progress Stepper Component -->
<div class="mb-12">
<div class="flex items-center justify-between max-w-3xl mx-auto relative">
<!-- Connecting Line -->
<div class="absolute top-1/2 left-0 w-full h-0.5 bg-surface-container-high -translate-y-1/2 z-0"></div>
<div class="absolute top-1/2 left-0 w-1/3 h-0.5 bg-primary -translate-y-1/2 z-0"></div>
<!-- Step 1: Services (Complete) -->
<div class="relative z-10 flex flex-col items-center gap-2 group">
<div class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center shadow-md">
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">check_circle</span>
</div>
<span class="font-label-md text-primary">Services</span>
</div>
<!-- Step 2: Provider (Active) -->
<div class="relative z-10 flex flex-col items-center gap-2">
<div class="w-10 h-10 rounded-full bg-white border-2 border-primary text-primary flex items-center justify-center shadow-lg">
<span class="font-bold">2</span>
</div>
<span class="font-label-md text-on-surface font-bold">Provider</span>
</div>
<!-- Step 3: Time (Pending) -->
<div class="relative z-10 flex flex-col items-center gap-2">
<div class="w-10 h-10 rounded-full bg-surface-container-lowest border-2 border-surface-container-high text-outline flex items-center justify-center">
<span class="font-bold">3</span>
</div>
<span class="font-label-md text-outline">Time</span>
</div>
<!-- Step 4: Review (Pending) -->
<div class="relative z-10 flex flex-col items-center gap-2">
<div class="w-10 h-10 rounded-full bg-surface-container-lowest border-2 border-surface-container-high text-outline flex items-center justify-center">
<span class="font-bold">4</span>
</div>
<span class="font-label-md text-outline">Review</span>
</div>
</div>
</div>
<!-- Selection Grid -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
<!-- Left Sidebar: Branch Selection -->
<aside class="lg:col-span-4 space-y-6">
<div class="bg-white border border-slate-200 rounded-xl p-6 shadow-sm">
<h2 class="font-h3 text-on-surface mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">location_on</span>
            Select Branch
          </h2>
<div class="space-y-4">
<!-- Branch 1: Downtown (Active) -->
<div class="group cursor-pointer p-4 rounded-lg border-2 border-primary bg-primary-fixed-dim/10 transition-all">
<div class="flex justify-between items-start">
<div>
<div class="font-h3 text-primary text-base">Downtown</div>
<div class="font-body-sm text-on-surface-variant mt-1">124 Medical Plaza, Central District</div>
</div>
<div class="w-5 h-5 rounded-full border-2 border-primary flex items-center justify-center">
<div class="w-2.5 h-2.5 rounded-full bg-primary"></div>
</div>
</div>
</div>
<!-- Branch 2: Westside -->
<div class="group cursor-pointer p-4 rounded-lg border border-outline-variant hover:border-primary/40 hover:bg-surface-container-low transition-all">
<div class="flex justify-between items-start">
<div>
<div class="font-h3 text-on-surface text-base">Westside</div>
<div class="font-body-sm text-on-surface-variant mt-1">45 Commerce Blvd, Suite 200</div>
</div>
<div class="w-5 h-5 rounded-full border-2 border-outline-variant"></div>
</div>
</div>
<!-- Branch 3: North Hill -->
<div class="group cursor-pointer p-4 rounded-lg border border-outline-variant hover:border-primary/40 hover:bg-surface-container-low transition-all">
<div class="flex justify-between items-start">
<div>
<div class="font-h3 text-on-surface text-base">North Hill</div>
<div class="font-body-sm text-on-surface-variant mt-1">899 Skyline Drive, Heights Mall</div>
</div>
<div class="w-5 h-5 rounded-full border-2 border-outline-variant"></div>
</div>
</div>
</div>
</div>
<!-- Mini Info Card -->
<div class="bg-secondary-container/10 border border-secondary/20 p-5 rounded-xl">
<div class="flex gap-3">
<span class="material-symbols-outlined text-secondary">info</span>
<div>
<p class="font-label-md text-on-secondary-container">Clinical Standards</p>
<p class="font-body-sm text-on-secondary-container/80 mt-1">All Downtown providers are board-certified and follow our rigorous 12-point hygiene protocol.</p>
</div>
</div>
</div>
</aside>
<!-- Right Side: Provider List -->
<section class="lg:col-span-8 space-y-6">
<div class="flex justify-between items-end mb-2">
<div>
<h1 class="font-h2 text-on-surface">Available Dentists</h1>
<p class="font-body-md text-on-surface-variant">Choose your preferred provider for Downtown branch.</p>
</div>
<div class="flex gap-2">
<button class="p-2 border border-outline-variant rounded hover:bg-surface-container-low transition-colors">
<span class="material-symbols-outlined text-on-surface-variant">filter_list</span>
</button>
<button class="p-2 border border-outline-variant rounded hover:bg-surface-container-low transition-colors">
<span class="material-symbols-outlined text-on-surface-variant">sort</span>
</button>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- Provider Card 1 -->
<div class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all group cursor-pointer border-l-4 border-l-transparent hover:border-l-primary">
<div class="p-5">
<div class="flex gap-4 items-start">
<img alt="Dr. James Sterling" class="w-20 h-20 rounded-lg object-cover shadow-sm" data-alt="A professional headshot of a middle-aged male dentist with a warm, confident smile, wearing a clean white clinical lab coat with a subtle logo. The background is a blurred, high-end dental clinic with soft blue and white tones, creating a sterile yet welcoming medical atmosphere. High-key clinical lighting emphasizes a bright and trustworthy professional image." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAVcUBt5jIGGv-PBB8qEUv-DPoICdcJVi-_Z9Xxl6szBepBPnubXeXXHkSJjVvXXX_qkBGn8hH0y7N2QvHH8mVnoSNBknDKRSYlR1rL4ssSw8oD3XG-uFww4tNTgRJnuQXLo5-HjN8-OLqpIE8LR_CczRLIYVZ0J_mjQkCeeJoOz276be_ELXGaZt-iyqr8OpKoyF660uq363ZjowvSlqdndColemV6YX9ySRDEAawsDNkcIwVuQqCFFtmSjSa4q_VzWTUvw8oH9fs"/>
<div class="flex-1">
<div class="flex justify-between items-start">
<h3 class="font-h3 text-on-surface">Dr. James Sterling</h3>
<div class="flex items-center gap-1 text-primary">
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="font-label-md">4.9</span>
</div>
</div>
<p class="font-body-sm text-on-surface-variant">General Dentistry</p>
<div class="mt-3 flex items-center gap-2 text-primary font-label-md bg-primary/5 p-1.5 rounded w-fit">
<span class="material-symbols-outlined text-[16px]">calendar_today</span>
                    Next: Oct 24, 9:00 AM
                  </div>
</div>
</div>
<div class="mt-5 pt-4 border-t border-slate-100 flex justify-end">
<button class="px-4 py-2 bg-primary text-on-primary rounded font-label-md hover:bg-on-primary-fixed-variant transition-colors">Select Provider</button>
</div>
</div>
</div>
<!-- Provider Card 2 -->
<div class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all group cursor-pointer border-l-4 border-l-transparent hover:border-l-primary">
<div class="p-5">
<div class="flex gap-4 items-start">
<img alt="Dr. Sarah Jenkins" class="w-20 h-20 rounded-lg object-cover shadow-sm" data-alt="A professional portrait of a female dentist in her late 30s with light brown hair tied back, wearing a navy blue medical scrub. She is looking directly at the camera with a gentle and competent expression. The environment is a modern, sunlit dental office with metallic accents and white minimalist walls. Soft shadows and clean lines maintain a corporate healthcare aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBZOTosYT4krvX9lowNR9gUAYXGrOag1Zc-xKz_VWmS-oSjrnwPjYVWMtSxtm792kmnibJ4U05fJttTBUc1b3bBHb1Otua_JnVxDRGOdP-CAYKxJPwLZqAgxGr7GABKbjadnVLEENFHKgwakwdEKxRbAIMLNRartqys8Te7cMakQjzwpYbzNNLW3iX3J37Pf_QN80FkDdoPrl6h9gNoS3QbZm72TmkSZtf_nkk-Y-F_41n_pNMLqEia8HHK7uXtQo1Imde_7D4YJHc"/>
<div class="flex-1">
<div class="flex justify-between items-start">
<h3 class="font-h3 text-on-surface">Dr. Sarah Jenkins</h3>
<div class="flex items-center gap-1 text-primary">
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="font-label-md">4.8</span>
</div>
</div>
<p class="font-body-sm text-on-surface-variant">General Dentistry</p>
<div class="mt-3 flex items-center gap-2 text-primary font-label-md bg-primary/5 p-1.5 rounded w-fit">
<span class="material-symbols-outlined text-[16px]">calendar_today</span>
                    Next: Oct 23, 2:30 PM
                  </div>
</div>
</div>
<div class="mt-5 pt-4 border-t border-slate-100 flex justify-end">
<button class="px-4 py-2 bg-primary text-on-primary rounded font-label-md hover:bg-on-primary-fixed-variant transition-colors">Select Provider</button>
</div>
</div>
</div>
<!-- Provider Card 3 -->
<div class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all group cursor-pointer border-l-4 border-l-transparent hover:border-l-primary">
<div class="p-5">
<div class="flex gap-4 items-start">
<img alt="Dr. Robert Chen" class="w-20 h-20 rounded-lg object-cover shadow-sm" data-alt="A male dentist of Asian descent in a professional medical setting, wearing light gray scrubs. He has a calm, reassuring demeanor and is holding a digital tablet. The background features high-tech dental equipment out of focus, with cool clinical lighting. The overall visual style is crisp, clean, and highly professional, reflecting a high-tech modern dental practice." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFIcRbqCgPD7Cjl1TUkj13QpxgEDgdAZYH45ez5-btAfLZ_Oiy4ZPB6nzMc9VRQH4wcTZaCFCadH3u8M6NirxXPc_5dtlAdWKGCo2sAgA7-RP-lklZpaFrIK3OnU4LQmgA19TZs7RpiNAEpEcWo7O_UwUF3xqgQfayjXon2yaZbnfj4tFuMhQF4ckVu0AYka8knwGM0dJVLges5hC1t9Pdx257nprdhzh4ikA5ITSCk7H2SMuk9Rx8D1J22QT13qSzPtApw8AbsVk"/>
<div class="flex-1">
<div class="flex justify-between items-start">
<h3 class="font-h3 text-on-surface">Dr. Robert Chen</h3>
<div class="flex items-center gap-1 text-primary">
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="font-label-md">5.0</span>
</div>
</div>
<p class="font-body-sm text-on-surface-variant">General Dentistry</p>
<div class="mt-3 flex items-center gap-2 text-primary font-label-md bg-primary/5 p-1.5 rounded w-fit">
<span class="material-symbols-outlined text-[16px]">calendar_today</span>
                    Next: Oct 25, 11:15 AM
                  </div>
</div>
</div>
<div class="mt-5 pt-4 border-t border-slate-100 flex justify-end">
<button class="px-4 py-2 bg-primary text-on-primary rounded font-label-md hover:bg-on-primary-fixed-variant transition-colors">Select Provider</button>
</div>
</div>
</div>
<!-- Provider Card 4 -->
<div class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all group cursor-pointer border-l-4 border-l-transparent hover:border-l-primary">
<div class="p-5">
<div class="flex gap-4 items-start">
<img alt="Dr. Elena Rodriguez" class="w-20 h-20 rounded-lg object-cover shadow-sm" data-alt="A professional Hispanic female doctor with an approachable smile, wearing a white lab coat over a professional blouse. She is standing in a brightly lit dental corridor with glass walls and minimalist furniture. The lighting is soft and even, highlighting a clean, contemporary clinical environment. The aesthetic is bright and trustworthy, using a palette of whites and blues." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCraagJmjTaAqgCf0k7xnKOUqxAT4x23HQllkvYhh00vQmJ52qk6SdLi8DQH7ZTwXV61y0007kNN1jVHVuCIGA9QFJYgidErJTwX2v_YiWHEJmtwgNhv7BrlOfQb7IHqBdbF_dK9F6wbFcScSb7dQ6HPXWkADTJ_CnBc4ycrvsTgQJ4KO3QU0IawexjJX56PWiq7Z4yA_05EI-VZ1awM4vD4SPXXKtjNB44BxGOLh_K65hDgSBqvM0T6QEbocKl6rlAzlVoorXwUfE"/>
<div class="flex-1">
<div class="flex justify-between items-start">
<h3 class="font-h3 text-on-surface">Dr. Elena Rodriguez</h3>
<div class="flex items-center gap-1 text-primary">
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="font-label-md">4.7</span>
</div>
</div>
<p class="font-body-sm text-on-surface-variant">General Dentistry</p>
<div class="mt-3 flex items-center gap-2 text-primary font-label-md bg-primary/5 p-1.5 rounded w-fit">
<span class="material-symbols-outlined text-[16px]">calendar_today</span>
                    Next: Oct 23, 10:00 AM
                  </div>
</div>
</div>
<div class="mt-5 pt-4 border-t border-slate-100 flex justify-end">
<button class="px-4 py-2 bg-primary text-on-primary rounded font-label-md hover:bg-on-primary-fixed-variant transition-colors">Select Provider</button>
</div>
</div>
</div>
</div>
</section>
</div>
<!-- Navigation Actions -->
<div class="mt-12 pt-8 border-t border-slate-200 flex justify-between items-center max-w-7xl mx-auto">
<button class="flex items-center gap-2 px-6 py-3 border border-outline-variant text-on-surface font-label-md rounded-xl hover:bg-surface-container-low transition-all">
<span class="material-symbols-outlined text-[20px]">arrow_back</span>
        Back
      </button>
<div class="flex items-center gap-4">
<p class="hidden sm:block font-body-sm text-on-surface-variant italic">Please select a provider to continue.</p>
<button class="flex items-center gap-2 px-8 py-3 bg-primary text-on-primary font-label-md rounded-xl shadow-lg opacity-50 cursor-not-allowed">
          Next Step
          <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
</button>
</div>
</div>
</main>
<!-- Footer Shell -->
<footer class="bg-slate-50 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800 mt-20">
<div class="w-full py-12 px-6 flex flex-col md:flex-row justify-between items-center gap-4 max-w-7xl mx-auto">
<div class="flex flex-col gap-1 items-center md:items-start">
<span class="font-bold text-slate-900 dark:text-white font-['Inter']">DentaFlow</span>
<span class="font-['Inter'] text-xs text-slate-500 dark:text-slate-400">© 2024 DentaFlow. Clinical Excellence in Dental Care.</span>
</div>
<div class="flex gap-8">
<span class="font-['Inter'] text-xs text-slate-500 dark:text-slate-400 cursor-pointer hover:text-slate-900 underline">Support</span>
<span class="font-['Inter'] text-xs text-slate-500 dark:text-slate-400 cursor-pointer hover:text-slate-900 underline">Privacy Policy</span>
<span class="font-['Inter'] text-xs text-slate-500 dark:text-slate-400 cursor-pointer hover:text-slate-900 underline">Terms of Service</span>
</div>
</div>
</footer>
</body></html>
