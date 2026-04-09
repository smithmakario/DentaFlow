<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Molaris Pro - Clinician's Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;family=Inter:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary-fixed": "#d6e3ff",
                        "tertiary-container": "#4c636e",
                        "on-secondary": "#ffffff",
                        "background": "#f9f9ff",
                        "error-container": "#ffdad6",
                        "on-primary-fixed": "#001b3d",
                        "error": "#ba1a1a",
                        "primary-fixed-dim": "#a8c8ff",
                        "outline-variant": "#c2c6d4",
                        "secondary-fixed-dim": "#71d7cd",
                        "on-tertiary-fixed": "#051e28",
                        "on-secondary-fixed": "#00201d",
                        "on-surface-variant": "#424752",
                        "on-secondary-container": "#006f67",
                        "surface-dim": "#d8dae2",
                        "surface": "#f9f9ff",
                        "outline": "#727783",
                        "on-surface": "#191c21",
                        "on-error-container": "#93000a",
                        "on-tertiary": "#ffffff",
                        "surface-container": "#ecedf6",
                        "on-primary-container": "#cadcff",
                        "inverse-on-surface": "#eff0f8",
                        "on-secondary-fixed-variant": "#00504a",
                        "on-background": "#191c21",
                        "surface-container-highest": "#e1e2ea",
                        "tertiary": "#344b56",
                        "on-tertiary-fixed-variant": "#334a55",
                        "surface-container-low": "#f2f3fb",
                        "tertiary-fixed": "#cde6f4",
                        "primary": "#00488d",
                        "surface-tint": "#005db5",
                        "tertiary-fixed-dim": "#b1cad7",
                        "on-error": "#ffffff",
                        "secondary-fixed": "#8ef4e9",
                        "surface-container-high": "#e7e8f0",
                        "primary-container": "#005fb8",
                        "surface-container-lowest": "#ffffff",
                        "surface-bright": "#f9f9ff",
                        "surface-variant": "#e1e2ea",
                        "inverse-surface": "#2e3036",
                        "secondary-container": "#8bf1e6",
                        "on-tertiary-container": "#c5deec",
                        "on-primary": "#ffffff",
                        "secondary": "#006a63",
                        "on-primary-fixed-variant": "#00468b",
                        "inverse-primary": "#a8c8ff"
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
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, .font-headline { font-family: 'Manrope', sans-serif; }
        .glass-panel {
            background-color: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            box-shadow: 0 10px 32px rgba(25, 28, 33, 0.04);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background text-on-background min-h-screen flex overflow-hidden">
<!-- SideNavBar Component -->
<aside class="hidden md:flex flex-col h-full py-4 px-3 h-screen w-64 border-r border-slate-100 dark:border-slate-800 bg-slate-50 dark:bg-slate-950 font-manrope text-sm font-semibold shrink-0">
<div class="mb-8 px-4 flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center text-on-primary">
<span class="material-symbols-outlined">medical_services</span>
</div>
<div>
<h2 class="text-lg font-black text-blue-800 dark:text-blue-300 leading-tight">Clinical Serenity</h2>
<p class="text-xs text-slate-500 font-normal">Dental Suite A</p>
</div>
</div>
<nav class="flex-1 space-y-1">
<a class="flex items-center gap-3 px-4 py-3 bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300 rounded-lg group transition-all" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span>Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:text-blue-600 hover:bg-blue-50 dark:hover:bg-blue-900/10 rounded-lg transition-all group" href="#">
<span class="material-symbols-outlined" data-icon="group">group</span>
<span>Patient Queue</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:text-blue-600 hover:bg-blue-50 dark:hover:bg-blue-900/10 rounded-lg transition-all group" href="#">
<span class="material-symbols-outlined" data-icon="medical_services">medical_services</span>
<span>Clinical Records</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:text-blue-600 hover:bg-blue-50 dark:hover:bg-blue-900/10 rounded-lg transition-all group" href="#">
<span class="material-symbols-outlined" data-icon="radiology">radiology</span>
<span>Imaging</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:text-blue-600 hover:bg-blue-50 dark:hover:bg-blue-900/10 rounded-lg transition-all group" href="#">
<span class="material-symbols-outlined" data-icon="person_search">person_search</span>
<span>Staff Management</span>
</a>
</nav>
<div class="mt-auto px-2">
<button class="w-full mb-6 bg-gradient-to-br from-primary to-primary-container text-white py-3 rounded-full font-bold shadow-md shadow-primary/20 flex items-center justify-center gap-2 scale-95 active:scale-90 transition-transform">
<span class="material-symbols-outlined text-sm">add</span>
                New Appointment
            </button>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:text-error rounded-lg transition-all group" href="#">
<span class="material-symbols-outlined" data-icon="logout">logout</span>
<span>Log Out</span>
</a>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 flex flex-col min-w-0 overflow-y-auto">
<!-- TopNavBar Component -->
<header class="flex justify-between items-center px-6 w-full sticky top-0 z-40 bg-white dark:bg-slate-900 h-16 border-b border-slate-100 dark:border-slate-800 shadow-sm dark:shadow-none font-manrope tracking-tight font-medium">
<div class="flex items-center gap-8 flex-1">
<span class="text-xl font-bold text-blue-700 dark:text-blue-400">Molaris Pro</span>
<div class="relative w-full max-w-md">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">search</span>
<input class="w-full bg-surface-container-low border-none rounded-full py-2 pl-10 pr-4 text-sm focus:ring-2 focus:ring-primary/20" placeholder="Search patients, records, or images..." type="text"/>
</div>
</div>
<div class="flex items-center gap-4">
<button class="p-2 text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors rounded-full relative">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full border-2 border-white"></span>
</button>
<button class="p-2 text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors rounded-full">
<span class="material-symbols-outlined" data-icon="help">help</span>
</button>
<button class="p-2 text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors rounded-full">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
</button>
<div class="h-8 w-[1px] bg-slate-200 mx-2"></div>
<div class="flex items-center gap-3 pl-2">
<img alt="Dr. Smith's Profile" class="w-10 h-10 rounded-full object-cover border-2 border-primary-fixed" data-alt="professional portrait of a confident male dentist in a clean white medical coat, soft clinical background lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDgsk4lo8Yd6mgHPUMVNd7LfuUltgN_w2HxHmRiM3sLXi0sa6EGwQ916QpwpHzzbdL9Yg1FlWgNad0laumGwC9_gewfcWDa2i3B1a0sXvEv79KJdpqT7zOzFYPEFv5W4yZz-f5WNSECyywC4noC8X5ZD_jz1Nz7Amu6pMFgyj3NUHyv_vD9YZxtTopOujLl9Bj07PcDqOCtJXK6CnxtWuV4pVqiw-_ktVXg17aq9bmrSwSuOAHJfaIGEZ-UDC42JGbnxPONUAKQ3o"/>
<div class="hidden lg:block">
<p class="text-sm font-bold text-on-surface">Dr. Julian Smith</p>
<p class="text-[10px] text-slate-500 uppercase tracking-widest">Senior Orthodontist</p>
</div>
</div>
</div>
</header>
<!-- Dashboard Canvas -->
<div class="p-8 space-y-8 max-w-[1600px] mx-auto w-full">
<!-- Page Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
<div>
<h1 class="text-3xl font-extrabold tracking-tight text-on-surface">Clinician's Dashboard</h1>
<p class="text-slate-500 font-medium">Wednesday, October 25, 2023 • Good Morning, Dr. Smith</p>
</div>
<div class="flex gap-3">
<div class="flex -space-x-2">
<img alt="Staff 1" class="w-8 h-8 rounded-full border-2 border-white" data-alt="professional medical assistant female smiling gently in blue scrubs" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA91GUYmMpQn9gg9Ky_NibSMDeMP5N64rj42-3bwUCeSrlwLKdrqraGVnsUxFCsDe-Ekmiz2_KVJJJeLntDCESwbuVf4JyWjEgbgydZB04ru2foH_CenNyOeWqWBbWvcOx2lORJwLttsu8Mi50im3fhR4Rcn8N9rCxi5FdXg0SM55I1THMd5ZMdfSWBQJTyTwDFxyKqF3L1xdHzAUhh-9hbHi6_2jLCn4YnJJ4ArH2iPWbxSyhkJTHd0DkPwOzKLcMenNyfuR-gq9E"/>
<img alt="Staff 2" class="w-8 h-8 rounded-full border-2 border-white" data-alt="professional male healthcare worker in a modern dental clinic setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAec7EeWvJL_eqs5zIC90FrvPE80sJyFs8-M5zRfsbqie4Wed9t8mkGCv6enAp6g0QT-CYuRNvWS-AB7M7KDUetxyJJXihoEH7uAxCTQMedlXYx_L4L2aURB9opTAMjtA3jGNb4C1hdFoMp97zB_oyaPJIjsomyHpCh3vMk1EPkOOTWWDfgxKvx2WU7wbup2QX6Jhft4DM0po6yl9uVaNwfd9rpWWnRYdFVd4xxJsKEiVHnhVr183wZ3ZArv_aRtY8lBF4YepEWqqA"/>
<div class="w-8 h-8 rounded-full border-2 border-white bg-secondary-container flex items-center justify-center text-[10px] font-bold text-on-secondary-container">+3</div>
</div>
<p class="text-xs self-center font-semibold text-secondary">4 Staff On-duty</p>
</div>
</div>
<!-- Bento Grid Layout -->
<div class="grid grid-cols-1 md:grid-cols-12 gap-6">
<!-- Clinical Alerts - Priority 1 -->
<section class="col-span-12 lg:col-span-4 space-y-4">
<h2 class="text-sm font-bold uppercase tracking-widest text-error flex items-center gap-2">
<span class="material-symbols-outlined text-base">warning</span> Clinical Alerts
                    </h2>
<div class="space-y-3">
<div class="p-4 rounded-xl bg-error-container/30 border-l-4 border-error flex gap-4">
<span class="material-symbols-outlined text-error" style="font-variation-settings: 'FILL' 1;">emergency</span>
<div>
<p class="text-sm font-bold text-on-error-container">Critical Allergy: Penicillin</p>
<p class="text-xs text-on-error-container/80">Patient #8821 • Marcus Thorne</p>
</div>
</div>
<div class="p-4 rounded-xl bg-secondary-container/20 border-l-4 border-secondary flex gap-4">
<span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">lab_panel</span>
<div>
<p class="text-sm font-bold text-on-secondary-container">Stat Lab Result Ready</p>
<p class="text-xs text-on-secondary-container/80">Case #442: Full Porcelain Crown</p>
</div>
</div>
</div>
</section>
<!-- Quick Stats -->
<section class="col-span-12 lg:col-span-8 grid grid-cols-2 md:grid-cols-4 gap-4">
<div class="bg-surface-container-lowest p-5 rounded-xl border border-outline-variant/10">
<p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Patients Today</p>
<p class="text-3xl font-black text-primary">14</p>
<div class="mt-2 text-[10px] text-secondary font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-xs">trending_up</span> 2 more than yesterday
                        </div>
</div>
<div class="bg-surface-container-lowest p-5 rounded-xl border border-outline-variant/10">
<p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Urgent Tasks</p>
<p class="text-3xl font-black text-error">03</p>
<div class="mt-2 text-[10px] text-error font-bold">Requires attention</div>
</div>
<div class="bg-primary p-5 rounded-xl text-white">
<p class="text-xs font-semibold opacity-80 uppercase tracking-wider mb-1">Next Appt</p>
<p class="text-3xl font-black">12:40</p>
<p class="text-[10px] font-bold mt-2 opacity-90 uppercase">In 14 Minutes</p>
</div>
<div class="bg-surface-container-lowest p-5 rounded-xl border border-outline-variant/10">
<p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Pending Lab</p>
<p class="text-3xl font-black text-on-surface">08</p>
<div class="mt-2 text-[10px] text-slate-400 font-bold">4 Due Tomorrow</div>
</div>
</section>
<!-- Live Patient Queue -->
<section class="col-span-12 lg:col-span-8 space-y-4">
<div class="flex items-center justify-between">
<h2 class="text-lg font-bold text-on-surface flex items-center gap-2">
<span class="material-symbols-outlined text-primary">format_list_bulleted</span> Live Patient Queue
                        </h2>
<button class="text-xs font-bold text-primary hover:underline">View All Queue</button>
</div>
<div class="bg-surface-container-lowest rounded-xl overflow-hidden border border-outline-variant/10">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low text-[10px] uppercase tracking-widest font-bold text-slate-500">
<th class="px-6 py-4">Patient</th>
<th class="px-6 py-4">Status</th>
<th class="px-6 py-4">Room/OP</th>
<th class="px-6 py-4">Procedure</th>
<th class="px-6 py-4">Wait</th>
</tr>
</thead>
<tbody class="text-sm">
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center text-xs font-bold text-slate-600">SM</div>
<span class="font-bold text-on-surface">Sarah Miller</span>
</div>
</td>
<td class="px-6 py-4">
<span class="px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container text-[10px] font-bold">IN CHAIR</span>
</td>
<td class="px-6 py-4 font-medium text-slate-600">OP-01</td>
<td class="px-6 py-4 font-medium text-slate-600">Root Canal (Endo)</td>
<td class="px-6 py-4 text-slate-400">--</td>
</tr>
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center text-xs font-bold text-slate-600">JB</div>
<span class="font-bold text-on-surface">James Baxter</span>
</div>
</td>
<td class="px-6 py-4">
<span class="px-3 py-1 rounded-full bg-tertiary-container/20 text-tertiary-container text-[10px] font-bold uppercase">Checked-in</span>
</td>
<td class="px-6 py-4 font-medium text-slate-600">Lobby</td>
<td class="px-6 py-4 font-medium text-slate-600">Annual Checkup</td>
<td class="px-6 py-4 text-error font-bold">12 min</td>
</tr>
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center text-xs font-bold text-slate-600">EL</div>
<span class="font-bold text-on-surface">Elena Lopez</span>
</div>
</td>
<td class="px-6 py-4">
<span class="px-3 py-1 rounded-full bg-slate-100 text-slate-500 text-[10px] font-bold uppercase">Recovery</span>
</td>
<td class="px-6 py-4 font-medium text-slate-600">Rec-02</td>
<td class="px-6 py-4 font-medium text-slate-600">Wisdom Extraction</td>
<td class="px-6 py-4 text-slate-400">--</td>
</tr>
</tbody>
</table>
</div>
</section>
<!-- Daily Timeline -->
<section class="col-span-12 lg:col-span-4 space-y-4">
<h2 class="text-lg font-bold text-on-surface flex items-center gap-2">
<span class="material-symbols-outlined text-primary">schedule</span> Daily Schedule
                    </h2>
<div class="bg-surface-container-low rounded-2xl p-6 relative h-[400px] overflow-y-auto">
<div class="absolute left-10 top-0 bottom-0 w-[1px] bg-outline-variant/30"></div>
<div class="space-y-8">
<div class="relative flex gap-6">
<span class="text-[10px] font-bold text-slate-400 mt-1 shrink-0 w-8">09:00</span>
<div class="bg-white p-4 rounded-xl shadow-sm border-l-4 border-slate-300 w-full">
<p class="text-xs font-bold text-on-surface">Morning Huddle</p>
<p class="text-[10px] text-slate-500">Staff Conference Room</p>
</div>
</div>
<div class="relative flex gap-6">
<span class="text-[10px] font-bold text-slate-400 mt-1 shrink-0 w-8">10:30</span>
<div class="bg-primary-fixed p-4 rounded-xl shadow-sm border-l-4 border-primary w-full">
<p class="text-xs font-bold text-on-primary-fixed">Sarah Miller</p>
<p class="text-[10px] text-on-primary-fixed/70">Root Canal • OP-01</p>
</div>
</div>
<div class="relative flex gap-6">
<div class="absolute -left-2 top-1 w-4 h-4 bg-error rounded-full border-2 border-white z-10"></div>
<span class="text-[10px] font-bold text-error mt-1 shrink-0 w-8">NOW</span>
<div class="bg-white p-4 rounded-xl shadow-sm border-l-4 border-error w-full ring-2 ring-error/20">
<p class="text-xs font-bold text-error">Current: Procedure Active</p>
<p class="text-[10px] text-slate-500">Finishing Esthetic Crown</p>
</div>
</div>
<div class="relative flex gap-6">
<span class="text-[10px] font-bold text-slate-400 mt-1 shrink-0 w-8">12:40</span>
<div class="bg-white p-4 rounded-xl shadow-sm border-l-4 border-secondary w-full">
<p class="text-xs font-bold text-on-surface">David Vance</p>
<p class="text-[10px] text-slate-500">Consultation • OP-03</p>
</div>
</div>
</div>
</div>
</section>
<!-- Recent Records & Imaging -->
<section class="col-span-12 space-y-4">
<h2 class="text-lg font-bold text-on-surface flex items-center gap-2">
<span class="material-symbols-outlined text-primary">history</span> Recently Viewed Records
                    </h2>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
<!-- Record Card 1 -->
<div class="bg-surface-container-lowest p-4 rounded-xl border border-outline-variant/10 flex items-center gap-4 hover:shadow-md transition-shadow group cursor-pointer">
<div class="w-16 h-16 rounded-lg bg-surface-container overflow-hidden shrink-0">
<img alt="Dental X-ray" class="w-full h-full object-cover grayscale" data-alt="monochrome dental x-ray of human teeth showing clear roots and jaw structure, medical imaging aesthetic" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDBH3P0C6rIr70_G0uhMP0t7WLw56KYYvaNeSbOEwG7EeuwQHJfoYMEUdIZNGSkxVKiHQXQsMgHYmY7zkO9WsoA0ukLeWIs9JMALskKB4_ucehh44V5leO1hizmPx51yRapZYrENjVzO3UceE0ZhwIGpyYTJcfZeBNQT6GoDT3FO6vYSnIWH-Jw53xZX2N5HDUz7-SkWlDkQuhU213FfUzehFQgpM4WtSogKMUiSKmyFNFrCLDhQyGINm_GUTEV3Uj_ZfbDstXlUSk"/>
</div>
<div class="min-w-0">
<p class="text-sm font-bold text-on-surface truncate">Robert Chen</p>
<p class="text-[10px] text-slate-400 font-medium">Last opened 2h ago</p>
<div class="mt-1 flex gap-1">
<span class="px-2 py-0.5 rounded-full bg-primary-fixed text-on-primary-fixed text-[8px] font-black">X-RAY</span>
</div>
</div>
</div>
<!-- Record Card 2 -->
<div class="bg-surface-container-lowest p-4 rounded-xl border border-outline-variant/10 flex items-center gap-4 hover:shadow-md transition-shadow group cursor-pointer">
<div class="w-16 h-16 rounded-lg bg-surface-container overflow-hidden shrink-0">
<img alt="Dental Scan" class="w-full h-full object-cover" data-alt="3D digital intraoral scan of upper dental arch with neon blue topography lines, high tech medical equipment" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAcyzvoCY4J0Ms6y1Uzx_Jo5nOZgDurT-iGAY2O2mjoEWJyD-fZjIoH6NXDT9P5dZ87pYMmkS9vTaEM7kI732tLP-IGgcxmplPsAjLEXZN4joWtezdqQTSZc5Yo86EmJRn7ycpgBPICF4DD-swVohi0IM7bNhueFCmb1OIo-gHHIb4JPFZzMiITGdeIwxSn93MmCfw_Tt2_GsfXGDW5FL_-MAopa2QTsAT1-_d1Qk3xh1k8YRyoPRg1modXxE_TqP67loQXRgjdiC8"/>
</div>
<div class="min-w-0">
<p class="text-sm font-bold text-on-surface truncate">Anita Desai</p>
<p class="text-[10px] text-slate-400 font-medium">Last opened 4h ago</p>
<div class="mt-1 flex gap-1">
<span class="px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container text-[8px] font-black">3D SCAN</span>
</div>
</div>
</div>
<!-- Record Card 3 -->
<div class="bg-surface-container-lowest p-4 rounded-xl border border-outline-variant/10 flex items-center gap-4 hover:shadow-md transition-shadow group cursor-pointer">
<div class="w-16 h-16 rounded-lg bg-surface-container overflow-hidden shrink-0">
<img alt="Panoramic X-ray" class="w-full h-full object-cover grayscale opacity-80" data-alt="full dental panoramic radiograph showing complete jaw and all teeth, standard clinical diagnostic image" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAesSjx-nBRacMb18v59G6vsr6PBJkBkIEkWihIYwUsBVx2X7MUj92bJoQTDi5AAvw98_zjJPmQEhgVS7rhjlgpYRDj4CdoGSrRR4UxamPylSEmJIhYee_Rd6PIPbk9c49WSB50XcxY44gCDCnanZ1zyVuPDxd32fHIv6HEuKOJLboJbxr8Hn9GI1p3amcpMv1u5poaiuvQGqqovzuJAlIL1HLAUjG3CPPCGDLjZOqpzf89C2qLhshbbQXBZkLs3phk2j7VCjd3kvQ"/>
</div>
<div class="min-w-0">
<p class="text-sm font-bold text-on-surface truncate">Thomas Wright</p>
<p class="text-[10px] text-slate-400 font-medium">Last opened 1d ago</p>
<div class="mt-1 flex gap-1">
<span class="px-2 py-0.5 rounded-full bg-primary-fixed text-on-primary-fixed text-[8px] font-black">PANORAMIC</span>
</div>
</div>
</div>
<!-- Record Card 4 -->
<div class="bg-surface-container-lowest p-4 rounded-xl border border-outline-variant/10 flex items-center gap-4 hover:shadow-md transition-shadow group cursor-pointer">
<div class="w-16 h-16 rounded-lg bg-surface-container overflow-hidden shrink-0 flex items-center justify-center bg-slate-50">
<span class="material-symbols-outlined text-slate-300 text-3xl">add</span>
</div>
<div class="min-w-0">
<p class="text-sm font-bold text-primary truncate">Open Patient File</p>
<p class="text-[10px] text-slate-400 font-medium">Search the database</p>
</div>
</div>
</div>
</section>
</div>
</div>
</main>
<!-- FAB Suppression logic: Suppressed on Dashboard to prioritize main canvas -->
</body></html>/div>
