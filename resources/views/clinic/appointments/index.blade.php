<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
    </style>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "on-secondary-fixed-variant": "#00504c",
                      "inverse-surface": "#213145",
                      "error": "#ba1a1a",
                      "surface-container-low": "#eff4ff",
                      "outline": "#727687",
                      "secondary-fixed-dim": "#4edbd2",
                      "on-tertiary-fixed-variant": "#832600",
                      "surface-container": "#e5eeff",
                      "primary-fixed": "#dae1ff",
                      "surface-container-high": "#dce9ff",
                      "surface": "#f8f9ff",
                      "on-secondary": "#ffffff",
                      "on-primary-container": "#f8f7ff",
                      "on-primary-fixed": "#001849",
                      "tertiary-container": "#cc4204",
                      "tertiary": "#a33200",
                      "primary-container": "#0066ff",
                      "on-background": "#0b1c30",
                      "background": "#f8f9ff",
                      "on-secondary-fixed": "#00201e",
                      "surface-container-highest": "#d3e4fe",
                      "secondary": "#006a65",
                      "primary": "#0050cb",
                      "on-error": "#ffffff",
                      "primary-fixed-dim": "#b3c5ff",
                      "on-surface": "#0b1c30",
                      "inverse-on-surface": "#eaf1ff",
                      "on-primary": "#ffffff",
                      "error-container": "#ffdad6",
                      "on-error-container": "#93000a",
                      "on-tertiary-fixed": "#390c00",
                      "surface-dim": "#cbdbf5",
                      "secondary-fixed": "#6ff7ee",
                      "inverse-primary": "#b3c5ff",
                      "on-tertiary": "#ffffff",
                      "tertiary-fixed": "#ffdbd0",
                      "tertiary-fixed-dim": "#ffb59d",
                      "surface-bright": "#f8f9ff",
                      "on-secondary-container": "#00716b",
                      "on-primary-fixed-variant": "#003fa4",
                      "outline-variant": "#c2c6d8",
                      "surface-tint": "#0054d6",
                      "surface-container-lowest": "#ffffff",
                      "on-surface-variant": "#424656",
                      "on-tertiary-container": "#fff6f4",
                      "surface-variant": "#d3e4fe",
                      "secondary-container": "#6ff7ee"
              },
              "borderRadius": {
                      "DEFAULT": "0.125rem",
                      "lg": "0.25rem",
                      "xl": "0.5rem",
                      "full": "0.75rem"
              },
              "spacing": {
                      "sidebar-width": "260px",
                      "container-max": "1440px",
                      "xl": "32px",
                      "sm": "8px",
                      "xs": "4px",
                      "unit": "4px",
                      "md": "16px",
                      "gutter": "20px",
                      "lg": "24px"
              },
              "fontFamily": {
                      "label-sm": ["Inter"],
                      "h2": ["Inter"],
                      "body-sm": ["Inter"],
                      "body-md": ["Inter"],
                      "label-md": ["Inter"],
                      "body-lg": ["Inter"],
                      "h3": ["Inter"],
                      "h1": ["Inter"]
              },
              "fontSize": {
                      "label-sm": ["11px", {"lineHeight": "14px", "letterSpacing": "0.05em", "fontWeight": "700"}],
                      "h2": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                      "body-sm": ["13px", {"lineHeight": "18px", "letterSpacing": "0", "fontWeight": "400"}],
                      "body-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0", "fontWeight": "400"}],
                      "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600"}],
                      "body-lg": ["16px", {"lineHeight": "24px", "letterSpacing": "0", "fontWeight": "400"}],
                      "h3": ["20px", {"lineHeight": "28px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                      "h1": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}]
              }
            },
          },
        }
      </script>
</head>
<body class="bg-surface text-on-surface">
<!-- SideNavBar (Authority: JSON & Strategy) -->
<aside class="fixed left-0 top-0 h-full w-64 flex flex-col bg-slate-50 dark:bg-slate-950 border-r border-slate-200 dark:border-slate-800 z-50 pt-16">
<div class="px-6 py-4 flex items-center gap-3">
<div class="w-8 h-8 bg-primary rounded flex items-center justify-center">
<span class="material-symbols-outlined text-white" style="font-variation-settings: 'FILL' 1;">dentistry</span>
</div>
<div>
<h2 class="text-lg font-black text-blue-600">City Dental</h2>
<p class="text-xs text-slate-500 font-medium">Main Branch</p>
</div>
</div>
<nav class="flex-1 mt-4">
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 border-l-4 border-transparent hover:text-slate-900 dark:hover:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800 transition-all duration-200 ease-in-out" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span class="font-sans text-sm font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 border-l-4 border-transparent hover:text-slate-900 dark:hover:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800 transition-all duration-200 ease-in-out" href="#">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="font-sans text-sm font-medium">Patients</span>
</a>
<!-- Active State: Appointments -->
<a class="flex items-center gap-3 px-4 py-3 text-blue-600 dark:text-blue-400 bg-blue-50/50 dark:bg-blue-900/20 border-l-4 border-blue-600 transition-all duration-200 ease-in-out" href="#">
<span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span>
<span class="font-sans text-sm font-medium">Appointments</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 border-l-4 border-transparent hover:text-slate-900 dark:hover:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800 transition-all duration-200 ease-in-out" href="#">
<span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
<span class="font-sans text-sm font-medium">Inventory</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 border-l-4 border-transparent hover:text-slate-900 dark:hover:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800 transition-all duration-200 ease-in-out" href="#">
<span class="material-symbols-outlined" data-icon="payments">payments</span>
<span class="font-sans text-sm font-medium">Billing</span>
</a>
</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<a class="flex items-center gap-3 px-4 py-2 text-slate-500 dark:text-slate-400 hover:text-slate-900 transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="help">help</span>
<span class="font-sans text-sm font-medium">Help Center</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 text-slate-500 dark:text-slate-400 hover:text-red-600 transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="logout">logout</span>
<span class="font-sans text-sm font-medium">Logout</span>
</a>
</div>
</aside>
<!-- TopNavBar (Authority: JSON) -->
<header class="sticky top-0 z-50 flex items-center justify-between px-6 py-3 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 shadow-sm ml-64">
<div class="flex items-center gap-6">
<div class="flex items-center gap-2">
<span class="text-xl font-bold text-slate-900 dark:text-white">DentaFlow</span>
</div>
<div class="relative">
<select class="appearance-none bg-surface-container-low border-none rounded-xl px-4 py-2 pr-10 text-sm font-semibold text-on-surface focus:ring-2 focus:ring-primary-container cursor-pointer">
<option>Downtown Branch</option>
<option>Northside Clinic</option>
<option>West End Surgery</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-slate-500">expand_more</span>
</div>
<div class="relative w-80">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">search</span>
<input class="w-full bg-slate-50 border-none rounded-full pl-10 pr-4 py-2 text-sm focus:ring-2 focus:ring-blue-100" placeholder="Search patients, charts, or records..." type="text"/>
</div>
</div>
<div class="flex items-center gap-4">
<button class="p-2 text-slate-600 dark:text-slate-400 hover:bg-slate-50 rounded-full transition-colors relative">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
</button>
<button class="p-2 text-slate-600 dark:text-slate-400 hover:bg-slate-50 rounded-full transition-colors">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
</button>
<div class="h-8 w-[1px] bg-slate-200 mx-2"></div>
<div class="flex items-center gap-3">
<div class="text-right">
<p class="text-xs font-bold text-slate-900">Sarah Jenkins</p>
<p class="text-[10px] text-slate-500 uppercase tracking-wider">Lead Receptionist</p>
</div>
<img alt="Receptionist profile" class="w-10 h-10 rounded-full object-cover border-2 border-primary-container shadow-sm" data-alt="A professional headshot of a friendly female dental receptionist with a warm smile, wearing a modern navy blue medical scrub. She is in a brightly lit, high-end dental clinic lobby with minimalist decor and soft clinical lighting. The image quality is crisp, corporate-style photography with a shallow depth of field." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDm7SQsU7X_Ysov8OIfMnAdjzMEjP5hj55V-jvU2VWy0HK2lkCQ4mI_tZWEUL61z1Y-NmLYYap-RztE3JIZf7dhKqueevqb5FBcj5HePVTQB5on85RmGQ4dJ1I3Jcz8GYTVzZf-uR4kFykeQIIzlsnyJ9No17MFS-VGdI6SewIuhlUS3YZra2neRm07A3nbJCeOtc9PIoW9i4R3CDLRvVW4sV33bk-BktJQGCoOy6XAvKfD3VwKDfAXd6vEvB3oUnqjLvQLehWskKw"/>
</div>
</div>
</header>
<!-- Main Canvas -->
<main class="ml-64 p-6 min-h-screen">
<div class="grid grid-cols-12 gap-6">
<!-- Scheduling Board (Day View) -->
<div class="col-span-9">
<div class="bg-white rounded-xl border border-outline-variant shadow-sm overflow-hidden">
<!-- Calendar Header -->
<div class="flex items-center justify-between p-4 border-b border-outline-variant">
<div class="flex items-center gap-4">
<h1 class="font-h1 text-h2 text-on-surface">Today, Oct 24</h1>
<div class="flex bg-slate-100 rounded-lg p-1">
<button class="px-3 py-1 text-xs font-semibold bg-white shadow-sm rounded-md">Day</button>
<button class="px-3 py-1 text-xs font-semibold text-slate-500">Week</button>
</div>
</div>
<div class="flex items-center gap-2">
<button class="p-2 hover:bg-slate-50 rounded border border-slate-200"><span class="material-symbols-outlined text-sm">chevron_left</span></button>
<button class="px-4 py-2 text-sm font-semibold text-primary border border-primary/20 rounded hover:bg-primary/5">Today</button>
<button class="p-2 hover:bg-slate-50 rounded border border-slate-200"><span class="material-symbols-outlined text-sm">chevron_right</span></button>
</div>
</div>
<!-- Column Headers (Dentists) -->
<div class="grid grid-cols-10 border-b border-outline-variant bg-slate-50/50">
<div class="col-span-1 border-r border-outline-variant py-3 text-center">
<span class="text-[11px] font-bold text-slate-400 uppercase tracking-tighter">Time</span>
</div>
<div class="col-span-3 border-r border-outline-variant py-3 px-4 flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-xs">DS</div>
<div>
<p class="text-sm font-bold">Dr. Sterling</p>
<p class="text-[10px] text-slate-500">General Dentistry</p>
</div>
</div>
<div class="col-span-3 border-r border-outline-variant py-3 px-4 flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-teal-100 text-teal-700 flex items-center justify-center font-bold text-xs">AM</div>
<div>
<p class="text-sm font-bold">Dr. Miller</p>
<p class="text-[10px] text-slate-500">Orthodontics</p>
</div>
</div>
<div class="col-span-3 py-3 px-4 flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-indigo-100 text-indigo-700 flex items-center justify-center font-bold text-xs">LC</div>
<div>
<p class="text-sm font-bold">Dr. Chen</p>
<p class="text-[10px] text-slate-500">Periodontics</p>
</div>
</div>
</div>
<!-- Time Slots & Appointments -->
<div class="relative h-[800px] overflow-y-auto custom-scrollbar">
<!-- Grid Lines -->
<div class="absolute inset-0 grid grid-cols-10 pointer-events-none">
<div class="col-span-1 border-r border-slate-100"></div>
<div class="col-span-3 border-r border-slate-100"></div>
<div class="col-span-3 border-r border-slate-100"></div>
<div class="col-span-3"></div>
</div>
<!-- Time Rows -->
<div class="relative">
<!-- 8:00 AM Row -->
<div class="grid grid-cols-10 h-20 border-b border-slate-50">
<div class="col-span-1 text-center py-2">
<span class="text-[10px] font-bold text-slate-400">08:00</span>
</div>
<div class="col-span-3 p-1 relative">
<div class="bg-blue-50 border-l-4 border-primary rounded-r p-2 h-full shadow-sm">
<div class="flex justify-between items-start">
<p class="text-xs font-bold text-primary">Emma Thompson</p>
<span class="px-1.5 py-0.5 rounded bg-green-100 text-green-700 text-[9px] font-black uppercase">Checked In</span>
</div>
<p class="text-[10px] text-slate-600">Routine Check-up</p>
</div>
</div>
<div class="col-span-3 p-1"></div>
<div class="col-span-3 p-1">
<div class="bg-indigo-50 border-l-4 border-indigo-600 rounded-r p-2 h-[160px] z-10 relative shadow-sm">
<div class="flex justify-between items-start">
<p class="text-xs font-bold text-indigo-900">Robert Vance</p>
<span class="px-1.5 py-0.5 rounded bg-blue-100 text-blue-700 text-[9px] font-black uppercase">Confirmed</span>
</div>
<p class="text-[10px] text-slate-600">Complex Root Canal</p>
<div class="mt-2 flex gap-1">
<span class="material-symbols-outlined text-xs text-slate-400">attach_file</span>
<span class="material-symbols-outlined text-xs text-slate-400">history</span>
</div>
</div>
</div>
</div>
<!-- 9:00 AM Row -->
<div class="grid grid-cols-10 h-20 border-b border-slate-50">
<div class="col-span-1 text-center py-2">
<span class="text-[10px] font-bold text-slate-400">09:00</span>
</div>
<div class="col-span-3 p-1">
<div class="bg-slate-50 border-l-4 border-slate-300 rounded-r p-2 h-full opacity-60">
<p class="text-xs font-bold text-slate-500">Available Slot</p>
</div>
</div>
<div class="col-span-3 p-1">
<div class="bg-teal-50 border-l-4 border-secondary rounded-r p-2 h-full shadow-sm">
<div class="flex justify-between items-start">
<p class="text-xs font-bold text-secondary">Liam O'Brien</p>
<span class="px-1.5 py-0.5 rounded bg-amber-100 text-amber-700 text-[9px] font-black uppercase">Arrived</span>
</div>
<p class="text-[10px] text-slate-600">Braces Adjustment</p>
</div>
</div>
<div class="col-span-3"></div>
</div>
<!-- 10:00 AM Row -->
<div class="grid grid-cols-10 h-20 border-b border-slate-50">
<div class="col-span-1 text-center py-2">
<span class="text-[10px] font-bold text-slate-400">10:00</span>
</div>
<div class="col-span-3 p-1">
<div class="bg-blue-50 border-l-4 border-primary rounded-r p-2 h-full shadow-sm">
<div class="flex justify-between items-start">
<p class="text-xs font-bold text-primary">Sarah Miller</p>
<span class="px-1.5 py-0.5 rounded bg-blue-100 text-blue-700 text-[9px] font-black uppercase">Confirmed</span>
</div>
<p class="text-[10px] text-slate-600">Whitening Session</p>
</div>
</div>
<div class="col-span-3 p-1">
<div class="bg-slate-50 border-l-4 border-slate-300 rounded-r p-2 h-full opacity-60">
<p class="text-xs font-bold text-slate-500">Available Slot</p>
</div>
</div>
<div class="col-span-3 p-1">
<div class="bg-indigo-50 border-l-4 border-indigo-600 rounded-r p-2 h-full shadow-sm">
<p class="text-xs font-bold text-indigo-900">Dr. Chen - Admin</p>
</div>
</div>
</div>
<!-- Additional empty rows for demonstration -->
<div class="grid grid-cols-10 h-20 border-b border-slate-50">
<div class="col-span-1 text-center py-2"><span class="text-[10px] font-bold text-slate-400">11:00</span></div>
<div class="col-span-3"></div><div class="col-span-3"></div><div class="col-span-3"></div>
</div>
<div class="grid grid-cols-10 h-20 border-b border-slate-50">
<div class="col-span-1 text-center py-2"><span class="text-[10px] font-bold text-slate-400">12:00</span></div>
<div class="col-span-3 bg-red-50/20 flex items-center justify-center"><p class="text-[10px] font-bold text-red-300 uppercase tracking-widest">Lunch Break</p></div>
<div class="col-span-3 bg-red-50/20 flex items-center justify-center border-l border-r border-red-50"><p class="text-[10px] font-bold text-red-300 uppercase tracking-widest">Lunch Break</p></div>
<div class="col-span-3 bg-red-50/20 flex items-center justify-center"><p class="text-[10px] font-bold text-red-300 uppercase tracking-widest">Lunch Break</p></div>
</div>
</div>
</div>
</div>
</div>
<!-- Side Panels -->
<div class="col-span-3 space-y-6">
<!-- Quick Check-in -->
<section class="bg-white rounded-xl border border-outline-variant shadow-sm p-5">
<div class="flex items-center gap-2 mb-4">
<span class="material-symbols-outlined text-primary">how_to_reg</span>
<h3 class="font-h3 text-body-lg font-bold">Quick Check-in</h3>
</div>
<div class="space-y-4">
<div class="relative">
<input class="w-full text-sm border-slate-200 rounded-lg py-2 focus:ring-primary focus:border-primary" placeholder="Patient Name or ID" type="text"/>
<button class="absolute right-2 top-1/2 -translate-y-1/2 text-primary">
<span class="material-symbols-outlined">search</span>
</button>
</div>
<div class="p-3 border border-dashed border-slate-300 rounded-lg bg-slate-50">
<p class="text-[11px] text-slate-500 text-center">Scan patient card or QR code</p>
</div>
<button class="w-full bg-primary text-white py-2.5 rounded-lg font-bold text-sm shadow-md hover:bg-on-primary-fixed-variant transition-colors">
                            Check-in Patient
                        </button>
</div>
</section>
<!-- Next Up / Waiting Room -->
<section class="bg-white rounded-xl border border-outline-variant shadow-sm overflow-hidden">
<div class="p-4 border-b border-outline-variant flex justify-between items-center">
<h3 class="font-h3 text-body-lg font-bold">Lobby Queue</h3>
<span class="bg-error text-white text-[10px] font-bold px-2 py-0.5 rounded-full">4 Waiting</span>
</div>
<div class="divide-y divide-slate-100">
<!-- Patient Row -->
<div class="p-4 hover:bg-slate-50 transition-colors cursor-pointer group">
<div class="flex items-center justify-between">
<div>
<p class="text-sm font-bold group-hover:text-primary transition-colors">Marcus Holloway</p>
<p class="text-[10px] text-slate-500">Appt: 10:15 AM · Dr. Miller</p>
</div>
<div class="text-right">
<p class="text-[11px] font-black text-amber-600 bg-amber-50 px-2 py-0.5 rounded">12m wait</p>
</div>
</div>
</div>
<!-- Patient Row -->
<div class="p-4 hover:bg-slate-50 transition-colors cursor-pointer group">
<div class="flex items-center justify-between">
<div>
<p class="text-sm font-bold group-hover:text-primary transition-colors">Julianne Foster</p>
<p class="text-[10px] text-slate-500">Appt: 10:30 AM · Dr. Sterling</p>
</div>
<div class="text-right">
<p class="text-[11px] font-black text-slate-400 bg-slate-100 px-2 py-0.5 rounded">Just Arrived</p>
</div>
</div>
</div>
<!-- Patient Row -->
<div class="p-4 hover:bg-slate-50 transition-colors cursor-pointer group">
<div class="flex items-center justify-between">
<div>
<p class="text-sm font-bold group-hover:text-primary transition-colors">Victor Grant</p>
<p class="text-[10px] text-slate-500">Appt: 10:30 AM · Dr. Chen</p>
</div>
<div class="text-right">
<p class="text-[11px] font-black text-slate-400 bg-slate-100 px-2 py-0.5 rounded">Just Arrived</p>
</div>
</div>
</div>
</div>
<div class="p-3 bg-slate-50 text-center">
<button class="text-[11px] font-bold text-primary uppercase tracking-widest hover:underline">View Full Queue</button>
</div>
</section>
<!-- Branch Stats Mini Card -->
<section class="bg-primary-container rounded-xl p-5 text-on-primary-container relative overflow-hidden">
<div class="relative z-10">
<p class="text-[10px] font-bold uppercase tracking-widest opacity-80">Today's Capacity</p>
<h4 class="text-2xl font-black mt-1">78% Full</h4>
<div class="mt-4 bg-white/20 h-1.5 rounded-full w-full overflow-hidden">
<div class="bg-white h-full" style="width: 78%"></div>
</div>
<p class="text-[11px] mt-3 font-medium">32 appointments completed today.</p>
</div>
<span class="material-symbols-outlined absolute -bottom-4 -right-4 text-8xl text-white/10 select-none">analytics</span>
</section>
</div>
</div>
</main>
<!-- Floating Action Button -->
<button class="fixed bottom-8 right-8 flex items-center gap-3 bg-primary text-white px-6 py-4 rounded-full shadow-2xl hover:scale-105 active:scale-95 transition-all group z-[60]">
<span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">add</span>
<span class="font-bold text-sm">New Appointment</span>
</button>
</body></html>
