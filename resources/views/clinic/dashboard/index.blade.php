<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
        body { font-family: 'Inter', sans-serif; background-color: #f8f9ff; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .active-nav-indicator { border-right: 4px solid #0050cb; }
    </style>
</head>
<body class="bg-surface text-on-surface">
<!-- Sidebar Navigation -->
<aside class="fixed left-0 top-0 h-full flex flex-col w-64 bg-slate-50 border-r border-slate-200 z-50">
<div class="px-6 py-8">
<div class="flex items-center gap-2 mb-2">
<span class="material-symbols-outlined text-primary text-2xl" data-icon="medical_services">medical_services</span>
<h1 class="text-lg font-bold text-slate-900">Clinic Central</h1>
</div>
<p class="text-label-sm text-outline px-1">Standard Plan</p>
</div>
<nav class="flex-1 space-y-1">
<!-- Overview (Active) -->
<a class="flex items-center gap-3 px-4 py-3 text-blue-700 bg-blue-50 border-r-4 border-blue-600 font-medium" href="#">
<span class="material-symbols-outlined" data-icon="analytics">analytics</span>
<span class="font-body-md text-body-md">Overview</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 transition-all" href="#">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="font-body-md text-body-md">Patients</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 transition-all" href="#">
<span class="material-symbols-outlined" data-icon="calendar_today">calendar_today</span>
<span class="font-body-md text-body-md">Appointments</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 transition-all" href="#">
<span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
<span class="font-body-md text-body-md">Inventory</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 transition-all" href="#">
<span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
<span class="font-body-md text-body-md">Billing</span>
</a>
</nav>
<div class="mt-auto border-t border-slate-200 p-4 space-y-1">
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 rounded-md" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span class="font-body-md text-body-md">Settings</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 rounded-md" href="#">
<span class="material-symbols-outlined" data-icon="logout">logout</span>
<span class="font-body-md text-body-md">Logout</span>
</a>
</div>
</aside>
<!-- Main Content Canvas -->
<main class="ml-64 min-h-screen p-xl">
<!-- Header -->
<header class="flex justify-between items-center mb-xl">
<div>
<h2 class="font-h1 text-h1 text-on-surface">Practice Dashboard</h2>
<p class="text-body-md text-on-surface-variant">Welcome back, Dr. Julian. Here's what's happening today.</p>
</div>
<div class="flex items-center gap-md">
<div class="relative">
<span class="material-symbols-outlined p-2 bg-white rounded-full border border-outline-variant text-on-surface-variant cursor-pointer" data-icon="notifications">notifications</span>
<span class="absolute top-0 right-0 w-3 h-3 bg-error rounded-full border-2 border-surface"></span>
</div>
<div class="flex items-center gap-sm bg-white border border-outline-variant px-3 py-1.5 rounded-full">
<img alt="User profile" class="w-8 h-8 rounded-full object-cover" data-alt="Professional headshot of a male dentist in a clean white clinical coat, smiling warmly in a bright, modern dental office with soft blue accents and professional lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjsC8ySwpbuSDvMdp_zTs-F9K8dXwBGqodB98fkOsc1EiRntfsyOVsWQbqgEUZsX9yMqh7JKQOEW0XEUFsH6FCilsPn8_nkLuBZRqHBHF1-Z1oA63dfpSYC6uIOkLHDEZt4sXnRCS7lki8PnsvrIhyeBpuX4ePSAVFu8FK1ewXeqXT4PgQcsKbDMHPHYVHHW_2NlH3XYBXRxMo2U0HMUvYEJt4OWYRp2cqNix1mqIrngjmMNzHYNOP0sCh_jXw6sjfeFsYERrwt1g"/>
<span class="text-label-md text-on-surface">Dr. Julian</span>
</div>
</div>
</header>
<!-- Metrics Grid (Bento Style) -->
<div class="grid grid-cols-12 gap-lg mb-xl">
<!-- Appointments Today -->
<div class="col-span-12 md:col-span-4 bg-white p-lg rounded-xl border border-slate-200 shadow-sm relative overflow-hidden group">
<div class="flex justify-between items-start mb-md">
<div>
<p class="text-label-sm text-outline uppercase tracking-wider mb-1">Appointments Today</p>
<h3 class="text-h1 font-h1 text-primary">24</h3>
</div>
<div class="p-2 bg-primary-fixed-dim/30 rounded-lg text-primary">
<span class="material-symbols-outlined" data-icon="event_available">event_available</span>
</div>
</div>
<div class="flex items-center gap-1 text-secondary font-medium">
<span class="material-symbols-outlined text-sm" data-icon="trending_up">trending_up</span>
<span class="text-label-md">+12% from yesterday</span>
</div>
<div class="absolute bottom-0 left-0 w-full h-1 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
</div>
<!-- New Patients -->
<div class="col-span-12 md:col-span-4 bg-white p-lg rounded-xl border border-slate-200 shadow-sm relative overflow-hidden group">
<div class="flex justify-between items-start mb-md">
<div>
<p class="text-label-sm text-outline uppercase tracking-wider mb-1">New Patients This Week</p>
<h3 class="text-h1 font-h1 text-secondary">08</h3>
</div>
<div class="p-2 bg-secondary-container/30 rounded-lg text-secondary">
<span class="material-symbols-outlined" data-icon="person_add">person_add</span>
</div>
</div>
<div class="flex items-center gap-1 text-secondary font-medium">
<span class="material-symbols-outlined text-sm" data-icon="trending_up">trending_up</span>
<span class="text-label-md">+2 active inquiries</span>
</div>
<div class="absolute bottom-0 left-0 w-full h-1 bg-secondary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
</div>
<!-- Billing Summary -->
<div class="col-span-12 md:col-span-4 bg-white p-lg rounded-xl border border-slate-200 shadow-sm relative overflow-hidden group">
<div class="flex justify-between items-start mb-md">
<div>
<p class="text-label-sm text-outline uppercase tracking-wider mb-1">Weekly Revenue</p>
<h3 class="text-h1 font-h1 text-on-surface">$12,450</h3>
</div>
<div class="p-2 bg-surface-container-highest rounded-lg text-on-surface">
<span class="material-symbols-outlined" data-icon="account_balance_wallet">account_balance_wallet</span>
</div>
</div>
<div class="w-full bg-slate-100 h-2 rounded-full mb-2">
<div class="bg-primary h-2 rounded-full w-[82%]"></div>
</div>
<p class="text-label-md text-on-surface-variant">82% of monthly goal reached</p>
</div>
</div>
<!-- Inventory Alerts & Main Analytics -->
<div class="grid grid-cols-12 gap-lg mb-xl">
<!-- Inventory Alerts Section -->
<div class="col-span-12 lg:col-span-4 bg-white rounded-xl border border-slate-200 shadow-sm flex flex-col">
<div class="p-lg border-b border-slate-100 flex justify-between items-center">
<h4 class="font-h3 text-h3 text-on-surface">Inventory Alerts</h4>
<span class="material-symbols-outlined text-error" data-icon="warning">warning</span>
</div>
<div class="p-md space-y-md">
<div class="flex items-center justify-between p-md bg-error-container/20 rounded-lg border border-error-container">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-error" data-icon="inventory">inventory</span>
<div>
<p class="text-body-md font-semibold text-on-error-container">Latex Gloves (M)</p>
<p class="text-label-sm text-error">Critical: 2 boxes left</p>
</div>
</div>
<button class="bg-error text-white px-3 py-1 rounded-md text-label-md font-bold">Order</button>
</div>
<div class="flex items-center justify-between p-md bg-surface-container-low rounded-lg border border-outline-variant">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-tertiary" data-icon="colorize">colorize</span>
<div>
<p class="text-body-md font-semibold text-on-surface">Fluoride Gel</p>
<p class="text-label-sm text-on-surface-variant">Low: 12 units remaining</p>
</div>
</div>
<button class="bg-primary text-white px-3 py-1 rounded-md text-label-md font-bold">Order</button>
</div>
<div class="flex items-center justify-between p-md bg-surface-container-low rounded-lg border border-outline-variant">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-tertiary" data-icon="healing">healing</span>
<div>
<p class="text-body-md font-semibold text-on-surface">Dental Gauze</p>
<p class="text-label-sm text-on-surface-variant">Low: 5 packs left</p>
</div>
</div>
<button class="bg-primary text-white px-3 py-1 rounded-md text-label-md font-bold">Order</button>
</div>
</div>
<div class="mt-auto p-md">
<button class="w-full text-center text-primary text-label-md font-bold py-2 border border-primary rounded-lg hover:bg-primary/5 transition-colors">View All Inventory</button>
</div>
</div>
<!-- Practice Growth Chart -->
<div class="col-span-12 lg:col-span-8 bg-white rounded-xl border border-slate-200 shadow-sm p-lg">
<div class="flex justify-between items-center mb-xl">
<div>
<h4 class="font-h3 text-h3 text-on-surface">Patient Growth &amp; Retention</h4>
<p class="text-body-md text-on-surface-variant">Quarterly performance overview</p>
</div>
<select class="border border-outline-variant rounded-lg text-label-md px-4 py-2 focus:ring-primary focus:border-primary">
<option>Last 6 Months</option>
<option>Last Year</option>
</select>
</div>
<!-- Abstract Chart Mockup -->
<div class="h-64 flex items-end justify-between gap-2 px-4">
<div class="w-full bg-surface-container-low rounded-t-lg relative group h-[40%]">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">120</div>
<div class="bg-primary-container w-full rounded-t-lg absolute bottom-0 h-[60%]"></div>
</div>
<div class="w-full bg-surface-container-low rounded-t-lg relative group h-[55%]">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">145</div>
<div class="bg-primary-container w-full rounded-t-lg absolute bottom-0 h-[70%]"></div>
</div>
<div class="w-full bg-surface-container-low rounded-t-lg relative group h-[45%]">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">130</div>
<div class="bg-primary-container w-full rounded-t-lg absolute bottom-0 h-[65%]"></div>
</div>
<div class="w-full bg-surface-container-low rounded-t-lg relative group h-[70%]">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">180</div>
<div class="bg-primary-container w-full rounded-t-lg absolute bottom-0 h-[80%]"></div>
</div>
<div class="w-full bg-surface-container-low rounded-t-lg relative group h-[85%]">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">210</div>
<div class="bg-primary-container w-full rounded-t-lg absolute bottom-0 h-[85%]"></div>
</div>
<div class="w-full bg-surface-container-low rounded-t-lg relative group h-[60%]">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">160</div>
<div class="bg-primary-container w-full rounded-t-lg absolute bottom-0 h-[75%]"></div>
</div>
</div>
<div class="flex justify-between px-4 mt-md text-label-sm text-outline">
<span>JAN</span><span>FEB</span><span>MAR</span><span>APR</span><span>MAY</span><span>JUN</span>
</div>
</div>
</div>
<!-- Branch Overview Section -->
<section class="mb-xl">
<div class="flex justify-between items-end mb-lg">
<div>
<h4 class="font-h2 text-h2 text-on-surface">Branch Overview</h4>
<p class="text-body-md text-on-surface-variant">Real-time performance across all locations</p>
</div>
<button class="bg-primary text-white font-bold px-lg py-md rounded-xl flex items-center gap-2">
<span class="material-symbols-outlined" data-icon="add">add</span>
<span>Add New Branch</span>
</button>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-lg">
<!-- Branch Card 1 -->
<div class="bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg transition-shadow">
<div class="h-32 bg-slate-100 relative">
<img alt="Downtown Branch" class="w-full h-full object-cover" data-alt="Modern high-end dental clinic interior with minimalist architectural design, clean white walls, and professional ambient lighting. The space looks sterile yet welcoming with soft blue accent chairs and glass partitions." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDS0XOAsggsq6QF9ltNy7JaOuw01SQ2sQcqiWZbY8mg_br8qS115b9QjqfyeCEMHuVAeuLgATQ5GSJWh4puZl-7MLR5k7heTioMKFVVIHX_dkxQhXtV95TiYpHLbaZVMwwy_5ncprrOHqDWxo_5GeemhmiE87AMiq-0EcmREH-RfSi5CcCybNkRx8nBCrA8MzBjHTZpxHCkK5OCxQLuMVZnK2nLRCZXZzQt6ZW8zHTtjoYEEljVuZJ9lufQLWOThUiarZ6GatyhVjg"/>
<div class="absolute top-3 right-3 bg-secondary text-white text-label-sm px-2 py-1 rounded-full uppercase">Operational</div>
</div>
<div class="p-lg">
<h5 class="font-h3 text-h3 mb-1">Downtown Clinic</h5>
<p class="text-body-sm text-outline mb-4">421 Main St, Central Plaza</p>
<div class="grid grid-cols-2 gap-md border-t border-slate-100 pt-4">
<div>
<p class="text-label-sm text-outline uppercase">Today's Cap</p>
<p class="text-body-lg font-bold text-on-surface">18/20 Slots</p>
</div>
<div>
<p class="text-label-sm text-outline uppercase">Staff Active</p>
<p class="text-body-lg font-bold text-on-surface">12 Members</p>
</div>
</div>
</div>
</div>
<!-- Branch Card 2 -->
<div class="bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg transition-shadow">
<div class="h-32 bg-slate-100 relative">
<img alt="Northside Branch" class="w-full h-full object-cover" data-alt="A futuristic medical office waiting area with high-tech displays, minimalist white furniture, and a tranquil atmosphere. Large windows allow soft natural light to illuminate the space, emphasizing hygiene and clinical precision." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBiV2Y-2EzyJkNzYZVdHr0L5EXpDeGAHIhmzFYLuUrtFmqL3U4JHaYgezfrMEZfXMOHScdRJmpA6cqTC0npnTggRWgm_KOy-A9nPU9ouIIa9VLR0ZL6IfG4gO0YbZ_oJS1rizlG84-zBlgEN1fcwY-TBKk0Ea0pDmY0lBqxsWtg98WMlQP8_CK3hiXEo9vjIoX9WSFlW4ulNeJXH_2uKLybAp_O8AdMjeDoVKVU5nk6poGfKjyWkevzpDnUCBIDnYOORTu-53UPsh4"/>
<div class="absolute top-3 right-3 bg-secondary text-white text-label-sm px-2 py-1 rounded-full uppercase">Operational</div>
</div>
<div class="p-lg">
<h5 class="font-h3 text-h3 mb-1">Northside Dental</h5>
<p class="text-body-sm text-outline mb-4">88 Skyview Dr, North Heights</p>
<div class="grid grid-cols-2 gap-md border-t border-slate-100 pt-4">
<div>
<p class="text-label-sm text-outline uppercase">Today's Cap</p>
<p class="text-body-lg font-bold text-on-surface">11/15 Slots</p>
</div>
<div>
<p class="text-label-sm text-outline uppercase">Staff Active</p>
<p class="text-body-lg font-bold text-on-surface">6 Members</p>
</div>
</div>
</div>
</div>
<!-- Branch Card 3 (Status Alert) -->
<div class="bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg transition-shadow">
<div class="h-32 bg-slate-100 relative">
<img alt="Westside Branch" class="w-full h-full object-cover grayscale" data-alt="A clean, minimalist dental consultation room with a sleek white chair and advanced medical imaging displays. The room is designed with corporate modernism in mind, featuring muted tones and high-precision equipment." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD05v1lx6Qz_t1CIstby5CZCg6bVsTQP7HVmMEvw9EeJozMDtz0P-XoOlI0VPUbXjYf8_Jw_OJnSjGRlI_hE9hYoSJnzHvZ1NsykSUcj81lecpt4dcKkuQ8_vHhOt6EgxrC6TmeAlVA8lRFAXazgtiXg_ac3YMu7AUp6iGA67-Zd7nqlGhX6dSgCDcRxdB--aoiKjr0xnZSj0KA6uNIowBxsx2oSmRcRtqwa2fkrW4qVBPzxCMtuoBS8pX3d8f9LepFT6lPwbzWaXI"/>
<div class="absolute top-3 right-3 bg-tertiary text-white text-label-sm px-2 py-1 rounded-full uppercase">Maintenance</div>
</div>
<div class="p-lg">
<h5 class="font-h3 text-h3 mb-1">Westside Smiles</h5>
<p class="text-body-sm text-outline mb-4">12 Bayview Ave, Westside</p>
<div class="grid grid-cols-2 gap-md border-t border-slate-100 pt-4">
<div>
<p class="text-label-sm text-outline uppercase">Today's Cap</p>
<p class="text-body-lg font-bold text-on-surface">0/15 Slots</p>
</div>
<div>
<p class="text-label-sm text-outline uppercase">Status</p>
<p class="text-body-lg font-bold text-tertiary">Closed</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Detailed Appointments List (Table) -->
<section class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
<div class="p-lg border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
<h4 class="font-h3 text-h3 text-on-surface">Recent Activity</h4>
<div class="flex gap-sm">
<button class="p-2 border border-outline-variant rounded-lg hover:bg-slate-100 transition-colors">
<span class="material-symbols-outlined text-on-surface-variant" data-icon="filter_list">filter_list</span>
</button>
<button class="p-2 border border-outline-variant rounded-lg hover:bg-slate-100 transition-colors">
<span class="material-symbols-outlined text-on-surface-variant" data-icon="download">download</span>
</button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-slate-50 border-b border-slate-200">
<th class="px-lg py-md text-label-sm text-outline uppercase">Patient</th>
<th class="px-lg py-md text-label-sm text-outline uppercase">Treatment</th>
<th class="px-lg py-md text-label-sm text-outline uppercase">Branch</th>
<th class="px-lg py-md text-label-sm text-outline uppercase text-center">Status</th>
<th class="px-lg py-md text-label-sm text-outline uppercase text-right">Amount</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100">
<tr class="hover:bg-slate-50 transition-colors">
<td class="px-lg py-md">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-primary-container text-white flex items-center justify-center font-bold text-xs">SM</div>
<div>
<p class="text-body-md font-semibold text-on-surface">Sarah Mitchell</p>
<p class="text-label-sm text-on-surface-variant">#P-9902</p>
</div>
</div>
</td>
<td class="px-lg py-md text-body-md text-on-surface">Root Canal Therapy</td>
<td class="px-lg py-md text-body-md text-on-surface-variant">Downtown</td>
<td class="px-lg py-md text-center">
<span class="bg-secondary-container/30 text-secondary px-3 py-1 rounded-full text-label-sm font-bold">COMPLETED</span>
</td>
<td class="px-lg py-md text-right font-bold text-on-surface">$850.00</td>
</tr>
<tr class="hover:bg-slate-50 transition-colors">
<td class="px-lg py-md">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-surface-dim text-on-surface flex items-center justify-center font-bold text-xs">JR</div>
<div>
<p class="text-body-md font-semibold text-on-surface">James Rodriguez</p>
<p class="text-label-sm text-on-surface-variant">#P-9903</p>
</div>
</div>
</td>
<td class="px-lg py-md text-body-md text-on-surface">Dental Cleaning</td>
<td class="px-lg py-md text-body-md text-on-surface-variant">Northside</td>
<td class="px-lg py-md text-center">
<span class="bg-primary-container/20 text-primary px-3 py-1 rounded-full text-label-sm font-bold">IN PROGRESS</span>
</td>
<td class="px-lg py-md text-right font-bold text-on-surface">$120.00</td>
</tr>
<tr class="hover:bg-slate-50 transition-colors">
<td class="px-lg py-md">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-surface-dim text-on-surface flex items-center justify-center font-bold text-xs">AL</div>
<div>
<p class="text-body-md font-semibold text-on-surface">Anna Lee</p>
<p class="text-label-sm text-on-surface-variant">#P-9895</p>
</div>
</div>
</td>
<td class="px-lg py-md text-body-md text-on-surface">Invisalign Checkup</td>
<td class="px-lg py-md text-body-md text-on-surface-variant">Downtown</td>
<td class="px-lg py-md text-center">
<span class="bg-surface-container-highest text-on-surface-variant px-3 py-1 rounded-full text-label-sm font-bold">SCHEDULED</span>
</td>
<td class="px-lg py-md text-right font-bold text-on-surface">$450.00</td>
</tr>
</tbody>
</table>
</div>
<div class="p-md bg-slate-50 border-t border-slate-100 flex justify-center">
<button class="text-primary text-label-md font-bold hover:underline">View All Transactions</button>
</div>
</section>
</main>
<!-- Contextual FAB for adding appointment -->
<button class="fixed bottom-xl right-xl bg-primary text-on-primary w-14 h-14 rounded-full shadow-2xl flex items-center justify-center hover:scale-105 transition-transform group">
<span class="material-symbols-outlined text-3xl" data-icon="calendar_add_on">calendar_add_on</span>
<span class="absolute right-full mr-4 bg-on-surface text-white px-3 py-1 rounded text-label-sm opacity-0 group-hover:opacity-100 whitespace-nowrap transition-opacity">Quick Appointment</span>
</button>
</body></html>
