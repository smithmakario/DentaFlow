<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>DentaFlow - Billing &amp; Financial Dashboard</title>
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
                        "inverse-surface": "#213145",
                        "tertiary-fixed": "#ffdbd0",
                        "tertiary": "#a33200",
                        "surface-container-highest": "#d3e4fe",
                        "on-secondary-fixed-variant": "#00504c",
                        "background": "#f8f9ff",
                        "on-surface-variant": "#424656",
                        "on-primary": "#ffffff",
                        "surface-bright": "#f8f9ff",
                        "on-secondary": "#ffffff",
                        "primary-container": "#0066ff",
                        "surface-variant": "#d3e4fe",
                        "surface-container-high": "#dce9ff",
                        "outline-variant": "#c2c6d8",
                        "inverse-primary": "#b3c5ff",
                        "tertiary-fixed-dim": "#ffb59d",
                        "tertiary-container": "#cc4204",
                        "surface-dim": "#cbdbf5",
                        "secondary-fixed": "#6ff7ee",
                        "on-tertiary-container": "#fff6f4",
                        "primary-fixed-dim": "#b3c5ff",
                        "surface-container-low": "#eff4ff",
                        "on-tertiary-fixed-variant": "#832600",
                        "error": "#ba1a1a",
                        "error-container": "#ffdad6",
                        "primary-fixed": "#dae1ff",
                        "on-background": "#0b1c30",
                        "secondary-fixed-dim": "#4edbd2",
                        "secondary": "#006a65",
                        "on-secondary-fixed": "#00201e",
                        "primary": "#0050cb",
                        "on-error-container": "#93000a",
                        "secondary-container": "#6ff7ee",
                        "on-secondary-container": "#00716b",
                        "on-primary-fixed": "#001849",
                        "on-error": "#ffffff",
                        "inverse-on-surface": "#eaf1ff",
                        "on-primary-fixed-variant": "#003fa4",
                        "surface-tint": "#0054d6",
                        "surface-container-lowest": "#ffffff",
                        "outline": "#727687",
                        "on-tertiary-fixed": "#390c00",
                        "on-surface": "#0b1c30",
                        "on-primary-container": "#f8f7ff",
                        "on-tertiary": "#ffffff",
                        "surface-container": "#e5eeff",
                        "surface": "#f8f9ff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "unit": "4px",
                        "xs": "4px",
                        "xl": "32px",
                        "container-max": "1440px",
                        "lg": "24px",
                        "sidebar-width": "260px",
                        "md": "16px",
                        "gutter": "20px",
                        "sm": "8px"
                    },
                    "fontFamily": {
                        "body-lg": ["Inter"],
                        "label-sm": ["Inter"],
                        "label-md": ["Inter"],
                        "h3": ["Inter"],
                        "body-md": ["Inter"],
                        "h2": ["Inter"],
                        "h1": ["Inter"],
                        "body-sm": ["Inter"]
                    },
                    "fontSize": {
                        "body-lg": ["16px", {"lineHeight": "24px", "letterSpacing": "0", "fontWeight": "400"}],
                        "label-sm": ["11px", {"lineHeight": "14px", "letterSpacing": "0.05em", "fontWeight": "700"}],
                        "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600"}],
                        "h3": ["20px", {"lineHeight": "28px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "body-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0", "fontWeight": "400"}],
                        "h2": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "h1": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-sm": ["13px", {"lineHeight": "18px", "letterSpacing": "0", "fontWeight": "400"}]
                    }
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-surface text-on-surface">
<!-- SideNavBar (Authority: Shared Components JSON) -->
<aside class="h-screen w-64 fixed left-0 top-0 border-r border-slate-800 bg-slate-900 flex flex-col justify-between py-6 shadow-xl z-50">
<div class="flex flex-col gap-sm">
<div class="px-6 mb-xl flex items-center gap-sm">
<div class="w-8 h-8 bg-blue-600 rounded flex items-center justify-center">
<span class="material-symbols-outlined text-white" data-icon="dentistry">dentistry</span>
</div>
<div class="flex flex-col">
<span class="text-xl font-bold text-white tracking-tight">DentalFlow</span>
<span class="text-[10px] text-slate-400 font-medium tracking-widest uppercase">Billing Portal</span>
</div>
</div>
<nav class="flex flex-col px-3 space-y-1">
<a class="flex items-center gap-3 px-3 py-2 text-slate-400 hover:text-slate-100 hover:bg-slate-800 transition-colors duration-200 font-inter text-sm font-medium tracking-tight rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span>Overview</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-400 hover:text-slate-100 hover:bg-slate-800 transition-colors duration-200 font-inter text-sm font-medium tracking-tight rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="group">group</span>
<span>Patients</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-400 hover:text-slate-100 hover:bg-slate-800 transition-colors duration-200 font-inter text-sm font-medium tracking-tight rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="calendar_today">calendar_today</span>
<span>Appointments</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-400 hover:text-slate-100 hover:bg-slate-800 transition-colors duration-200 font-inter text-sm font-medium tracking-tight rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
<span>Inventory</span>
</a>
<!-- Active Item: Billing -->
<a class="flex items-center gap-3 px-3 py-2 text-white bg-blue-600/10 border-l-4 border-blue-600 font-semibold font-inter text-sm tracking-tight rounded-r-lg" href="#">
<span class="material-symbols-outlined" data-icon="payments">payments</span>
<span>Billing</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-400 hover:text-slate-100 hover:bg-slate-800 transition-colors duration-200 font-inter text-sm font-medium tracking-tight rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="analytics">analytics</span>
<span>Reports</span>
</a>
</nav>
</div>
<div class="flex flex-col px-3 space-y-1">
<a class="flex items-center gap-3 px-3 py-2 text-slate-400 hover:text-slate-100 hover:bg-slate-800 transition-colors duration-200 font-inter text-sm font-medium tracking-tight rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span>Settings</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-400 hover:text-slate-100 hover:bg-slate-800 transition-colors duration-200 font-inter text-sm font-medium tracking-tight rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="contact_support">contact_support</span>
<span>Support</span>
</a>
</div>
</aside>
<!-- TopAppBar -->
<header class="fixed top-0 right-0 left-64 h-16 border-b border-slate-200 bg-white/80 backdrop-blur-md z-40 flex items-center justify-between px-8 w-full">
<div class="flex items-center gap-md">
<div class="relative group">
<span class="absolute inset-y-0 left-0 flex items-center pl-3 text-slate-400">
<span class="material-symbols-outlined text-[20px]" data-icon="search">search</span>
</span>
<input class="bg-surface-container-low border-none rounded-lg pl-10 pr-4 py-2 text-body-sm w-80 focus:ring-2 focus:ring-blue-500 transition-all outline-none" placeholder="Search invoices or patients..." type="text"/>
</div>
<h1 class="font-h2 text-blue-600 font-bold ml-lg">Financial Overview</h1>
</div>
<div class="flex items-center gap-lg">
<div class="flex items-center gap-md">
<button class="p-2 text-slate-500 hover:bg-slate-50 rounded-lg transition-colors relative">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
</button>
<button class="p-2 text-slate-500 hover:bg-slate-50 rounded-lg transition-colors">
<span class="material-symbols-outlined" data-icon="chat_bubble">chat_bubble</span>
</button>
<button class="p-2 text-slate-500 hover:bg-slate-50 rounded-lg transition-colors">
<span class="material-symbols-outlined" data-icon="account_balance_wallet">account_balance_wallet</span>
</button>
</div>
<div class="h-8 w-px bg-slate-200 mx-sm"></div>
<div class="flex items-center gap-sm cursor-pointer hover:bg-slate-50 p-1 rounded-lg transition-colors">
<img alt="Accountant profile" class="w-8 h-8 rounded-full border border-slate-200" data-alt="A professional close-up portrait of a senior accountant in a clean, brightly lit corporate office environment. The person has a friendly but professional expression, wearing high-quality business attire. The background is slightly blurred, showing a modern clinic's administrative wing with soft blue and white tones. The lighting is crisp and natural, highlighting technical competence and reliability." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXbhJ4cJFaJtpqhUUthFcS2zCRy-koyYFQzWSHbt_Pt3cpwBak4WsOOysDUJXDC8ndSkKfnHQwMT-v2CKkmngCEN53-Wx1ZOBtKhJv-FkuurRa58K0kna_uCIEOusLWcMRsW1ZvMnGX9INlblGrYS22O3iAQ1PHK-2_ogqrtwU6cj87y1jLPSghqYiI0sK-PQWGdLfVVxMcIWgJ_0ys7IdZcpybF_4Ajf2s8vlzfLZ9_vfIMF7acRFmYKa7MYAZ-urKxB1CWXQRrM"/>
<div class="flex flex-col">
<span class="text-label-md text-on-surface">Alex Thompson</span>
<span class="text-label-sm text-slate-500">Senior Accountant</span>
</div>
</div>
</div>
</header>
<!-- Main Content -->
<main class="ml-64 mt-16 p-8 min-h-screen">
<div class="max-w-container-max mx-auto space-y-lg">
<!-- Quick Actions Banner -->
<section class="flex items-center justify-between bg-blue-600 p-lg rounded-xl text-white shadow-lg overflow-hidden relative">
<div class="relative z-10">
<h2 class="font-h2 text-white">Billing Dashboard</h2>
<p class="text-body-md text-blue-100 opacity-90">Manage patient invoices, insurance claims, and monthly financial performance.</p>
</div>
<div class="flex gap-md relative z-10">
<button class="flex items-center gap-2 bg-white text-blue-600 px-md py-2 rounded-lg font-label-md hover:bg-blue-50 transition-transform active:scale-95">
<span class="material-symbols-outlined text-[20px]" data-icon="add_circle">add_circle</span>
                        Create New Invoice
                    </button>
<button class="flex items-center gap-2 bg-blue-500 text-white px-md py-2 rounded-lg font-label-md border border-blue-400 hover:bg-blue-400 transition-transform active:scale-95">
<span class="material-symbols-outlined text-[20px]" data-icon="description">description</span>
                        Run Financial Report
                    </button>
<button class="flex items-center gap-2 bg-blue-500 text-white px-md py-2 rounded-lg font-label-md border border-blue-400 hover:bg-blue-400 transition-transform active:scale-95">
<span class="material-symbols-outlined text-[20px]" data-icon="autonomy">automation</span>
                        Process Insurance Batch
                    </button>
</div>
<!-- Abstract decorative element -->
<div class="absolute -right-16 -top-16 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
</section>
<!-- Financial Overview Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-lg">
<div class="bg-white p-lg rounded-xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-md">
<div class="p-2 bg-primary-container/10 rounded-lg">
<span class="material-symbols-outlined text-primary" data-icon="account_balance">account_balance</span>
</div>
<span class="text-success text-label-sm flex items-center gap-1 text-green-600">
<span class="material-symbols-outlined text-[14px]" data-icon="trending_up">trending_up</span> 8.4%
                        </span>
</div>
<span class="text-label-md text-slate-500 block mb-1">Total Revenue</span>
<span class="font-h1 text-on-surface">$142,580.00</span>
<div class="mt-4 h-1 bg-slate-100 rounded-full overflow-hidden">
<div class="h-full bg-primary w-3/4"></div>
</div>
</div>
<div class="bg-white p-lg rounded-xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-md">
<div class="p-2 bg-tertiary-fixed/30 rounded-lg">
<span class="material-symbols-outlined text-tertiary" data-icon="clinical_notes">clinical_notes</span>
</div>
<span class="text-label-sm text-slate-400">12 Pending</span>
</div>
<span class="text-label-md text-slate-500 block mb-1">Pending Claims</span>
<span class="font-h1 text-on-surface">$24,840.00</span>
<div class="mt-4 flex gap-1">
<div class="h-1 bg-tertiary w-1/3 rounded-full"></div>
<div class="h-1 bg-slate-200 w-2/3 rounded-full"></div>
</div>
</div>
<div class="bg-white p-lg rounded-xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-md">
<div class="p-2 bg-error-container/20 rounded-lg">
<span class="material-symbols-outlined text-error" data-icon="pending_actions">pending_actions</span>
</div>
<span class="text-error text-label-sm font-semibold">Critical</span>
</div>
<span class="text-label-md text-slate-500 block mb-1">Outstanding Invoices</span>
<span class="font-h1 text-on-surface">$12,305.50</span>
<div class="mt-4 h-1 bg-error/10 rounded-full overflow-hidden">
<div class="h-full bg-error w-1/2"></div>
</div>
</div>
<div class="bg-white p-lg rounded-xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-md">
<div class="p-2 bg-secondary-container/30 rounded-lg">
<span class="material-symbols-outlined text-secondary" data-icon="query_stats">query_stats</span>
</div>
<span class="text-success text-label-sm text-green-600">Goal: 95%</span>
</div>
<span class="text-label-md text-slate-500 block mb-1">Monthly Collection Rate</span>
<span class="font-h1 text-on-surface">92.4%</span>
<div class="mt-4 h-1 bg-slate-100 rounded-full overflow-hidden">
<div class="h-full bg-secondary w-[92.4%]"></div>
</div>
</div>
</div>
<!-- Bento Grid Section -->
<div class="grid grid-cols-12 gap-lg">
<!-- Revenue Trends Chart (Authority: Corporate Modernism / Charts) -->
<div class="col-span-12 lg:col-span-8 bg-white p-lg rounded-xl border border-outline-variant shadow-sm">
<div class="flex items-center justify-between mb-xl">
<div>
<h3 class="font-h3 text-on-surface">Revenue Trends</h3>
<p class="text-body-sm text-slate-500">Gross revenue comparison over the last 6 months</p>
</div>
<div class="flex gap-sm">
<select class="bg-surface-container-low border-outline-variant rounded-lg text-label-md px-3 py-1 focus:ring-primary">
<option>Last 6 Months</option>
<option>Year to Date</option>
</select>
<button class="p-2 hover:bg-slate-50 rounded-lg text-slate-400">
<span class="material-symbols-outlined" data-icon="download">download</span>
</button>
</div>
</div>
<!-- Custom Chart Visualizer (Simulated) -->
<div class="h-64 flex items-end justify-between px-4 pb-8 border-b border-slate-100">
<div class="flex flex-col items-center gap-2 group w-full">
<div class="w-12 bg-slate-100 group-hover:bg-primary-container transition-all rounded-t-lg h-24 relative">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-900 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">$18k</div>
</div>
<span class="text-label-sm text-slate-400">Jan</span>
</div>
<div class="flex flex-col items-center gap-2 group w-full">
<div class="w-12 bg-slate-100 group-hover:bg-primary-container transition-all rounded-t-lg h-32 relative">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-900 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">$22k</div>
</div>
<span class="text-label-sm text-slate-400">Feb</span>
</div>
<div class="flex flex-col items-center gap-2 group w-full">
<div class="w-12 bg-slate-100 group-hover:bg-primary-container transition-all rounded-t-lg h-40 relative">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-900 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">$28k</div>
</div>
<span class="text-label-sm text-slate-400">Mar</span>
</div>
<div class="flex flex-col items-center gap-2 group w-full">
<div class="w-12 bg-slate-100 group-hover:bg-primary-container transition-all rounded-t-lg h-36 relative">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-900 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">$25k</div>
</div>
<span class="text-label-sm text-slate-400">Apr</span>
</div>
<div class="flex flex-col items-center gap-2 group w-full">
<div class="w-12 bg-slate-100 group-hover:bg-primary-container transition-all rounded-t-lg h-44 relative">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-900 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">$31k</div>
</div>
<span class="text-label-sm text-slate-400">May</span>
</div>
<div class="flex flex-col items-center gap-2 group w-full">
<div class="w-12 bg-primary group-hover:bg-primary-container transition-all rounded-t-lg h-48 relative">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-900 text-white text-[10px] px-2 py-1 rounded opacity-100 transition-opacity">$34k</div>
</div>
<span class="text-label-sm text-slate-900 font-bold">Jun</span>
</div>
</div>
</div>
<!-- Claims Status Section -->
<div class="col-span-12 lg:col-span-4 bg-white p-lg rounded-xl border border-outline-variant shadow-sm flex flex-col">
<h3 class="font-h3 text-on-surface mb-xl">Insurance Claims Status</h3>
<div class="space-y-md flex-grow">
<div class="p-md bg-surface-container-low rounded-lg flex items-center justify-between">
<div class="flex items-center gap-md">
<div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
<span class="material-symbols-outlined" data-icon="send">send</span>
</div>
<div>
<span class="text-label-md block">Submitted</span>
<span class="text-body-sm text-slate-500">42 Claims</span>
</div>
</div>
<span class="font-h3 text-on-surface">$12,400</span>
</div>
<div class="p-md bg-surface-container-low rounded-lg flex items-center justify-between">
<div class="flex items-center gap-md">
<div class="w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center text-amber-600">
<span class="material-symbols-outlined" data-icon="visibility">visibility</span>
</div>
<div>
<span class="text-label-md block">In-Review</span>
<span class="text-body-sm text-slate-500">18 Claims</span>
</div>
</div>
<span class="font-h3 text-on-surface">$5,200</span>
</div>
<div class="p-md bg-surface-container-low rounded-lg flex items-center justify-between">
<div class="flex items-center gap-md">
<div class="w-10 h-10 rounded-full bg-error-container/30 flex items-center justify-center text-error">
<span class="material-symbols-outlined" data-icon="cancel">cancel</span>
</div>
<div>
<span class="text-label-md block">Denied</span>
<span class="text-body-sm text-slate-500">5 Claims</span>
</div>
</div>
<span class="font-h3 text-on-surface">$1,450</span>
</div>
<div class="p-md bg-secondary-container/20 rounded-lg flex items-center justify-between">
<div class="flex items-center gap-md">
<div class="w-10 h-10 rounded-full bg-secondary-container/40 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined" data-icon="check_circle">check_circle</span>
</div>
<div>
<span class="text-label-md block">Paid</span>
<span class="text-body-sm text-slate-500">88 Claims</span>
</div>
</div>
<span class="font-h3 text-on-surface">$28,900</span>
</div>
</div>
</div>
<!-- Recent Invoices Table (Authority: Clinical Precision / Tables) -->
<div class="col-span-12 bg-white rounded-xl border border-outline-variant shadow-sm overflow-hidden">
<div class="p-lg border-b border-slate-100 flex items-center justify-between">
<h3 class="font-h3 text-on-surface">Recent Invoices</h3>
<div class="flex gap-sm">
<button class="px-3 py-1 border border-slate-200 rounded-lg text-label-md hover:bg-slate-50">Filter</button>
<button class="px-3 py-1 bg-slate-900 text-white rounded-lg text-label-md hover:bg-slate-800">Export CSV</button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead class="bg-surface-container-low border-b border-slate-200">
<tr>
<th class="px-6 py-4 text-label-sm text-slate-500 uppercase tracking-wider">Invoice ID</th>
<th class="px-6 py-4 text-label-sm text-slate-500 uppercase tracking-wider">Patient Name</th>
<th class="px-6 py-4 text-label-sm text-slate-500 uppercase tracking-wider">Date</th>
<th class="px-6 py-4 text-label-sm text-slate-500 uppercase tracking-wider">Amount</th>
<th class="px-6 py-4 text-label-sm text-slate-500 uppercase tracking-wider">Status</th>
<th class="px-6 py-4 text-label-sm text-slate-500 uppercase tracking-wider">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100">
<tr class="hover:bg-blue-50/30 transition-colors">
<td class="px-6 py-4 font-label-md text-primary">#INV-8821</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 text-xs font-bold">SM</div>
<span class="text-body-md text-on-surface font-medium">Sarah Miller</span>
</div>
</td>
<td class="px-6 py-4 text-body-sm text-slate-500">Oct 24, 2023</td>
<td class="px-6 py-4 font-bold text-on-surface">$1,240.00</td>
<td class="px-6 py-4">
<span class="px-3 py-1 rounded-full text-label-sm bg-green-100 text-green-700">Paid</span>
</td>
<td class="px-6 py-4">
<button class="text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined" data-icon="more_vert">more_vert</span>
</button>
</td>
</tr>
<tr class="hover:bg-blue-50/30 transition-colors">
<td class="px-6 py-4 font-label-md text-primary">#INV-8822</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 text-xs font-bold">JD</div>
<span class="text-body-md text-on-surface font-medium">John Davis</span>
</div>
</td>
<td class="px-6 py-4 text-body-sm text-slate-500">Oct 23, 2023</td>
<td class="px-6 py-4 font-bold text-on-surface">$3,850.00</td>
<td class="px-6 py-4">
<span class="px-3 py-1 rounded-full text-label-sm bg-amber-100 text-amber-700">Partial</span>
</td>
<td class="px-6 py-4">
<button class="text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined" data-icon="more_vert">more_vert</span>
</button>
</td>
</tr>
<tr class="hover:bg-blue-50/30 transition-colors">
<td class="px-6 py-4 font-label-md text-primary">#INV-8823</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 text-xs font-bold">EB</div>
<span class="text-body-md text-on-surface font-medium">Elena Brooks</span>
</div>
</td>
<td class="px-6 py-4 text-body-sm text-slate-500">Oct 20, 2023</td>
<td class="px-6 py-4 font-bold text-on-surface">$920.00</td>
<td class="px-6 py-4">
<span class="px-3 py-1 rounded-full text-label-sm bg-error-container/40 text-error font-bold">Overdue</span>
</td>
<td class="px-6 py-4">
<button class="text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined" data-icon="more_vert">more_vert</span>
</button>
</td>
</tr>
<tr class="hover:bg-blue-50/30 transition-colors">
<td class="px-6 py-4 font-label-md text-primary">#INV-8824</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 text-xs font-bold">RW</div>
<span class="text-body-md text-on-surface font-medium">Robert White</span>
</div>
</td>
<td class="px-6 py-4 text-body-sm text-slate-500">Oct 19, 2023</td>
<td class="px-6 py-4 font-bold text-on-surface">$1,150.00</td>
<td class="px-6 py-4">
<span class="px-3 py-1 rounded-full text-label-sm bg-green-100 text-green-700">Paid</span>
</td>
<td class="px-6 py-4">
<button class="text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined" data-icon="more_vert">more_vert</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="p-md bg-slate-50 border-t border-slate-100 flex items-center justify-between">
<span class="text-body-sm text-slate-500">Showing 4 of 248 invoices</span>
<div class="flex gap-2">
<button class="p-2 border border-slate-200 rounded-lg text-slate-400 hover:bg-white disabled:opacity-50" disabled="">
<span class="material-symbols-outlined text-[18px]" data-icon="chevron_left">chevron_left</span>
</button>
<button class="p-2 border border-slate-200 rounded-lg text-slate-400 hover:bg-white">
<span class="material-symbols-outlined text-[18px]" data-icon="chevron_right">chevron_right</span>
</button>
</div>
</div>
</div>
</div>
</div>
</main>
</body></html>
