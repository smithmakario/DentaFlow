<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>DentaFlow | Clinic Management</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-background text-on-surface">
<!-- TopNavBar -->
<header class="sticky top-0 z-50 flex justify-between items-center h-16 px-6 w-full bg-white/80 backdrop-blur-md border-b border-slate-200">
<div class="flex items-center gap-8">
<h1 class="text-xl font-bold tracking-tight text-slate-900">DentaFlow</h1>
<div class="hidden md:flex relative group">
<span class="absolute inset-y-0 left-3 flex items-center text-slate-400">
<span class="material-symbols-outlined">search</span>
</span>
<input class="pl-10 pr-4 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-transparent outline-none w-64 transition-all" placeholder="Search clinics..." type="text"/>
</div>
</div>
<div class="flex items-center gap-4">
<button class="p-2 text-slate-500 hover:bg-slate-50 rounded-full transition-colors">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="p-2 text-slate-500 hover:bg-slate-50 rounded-full transition-colors">
<span class="material-symbols-outlined">help</span>
</button>
<button class="p-2 text-slate-500 hover:bg-slate-50 rounded-full transition-colors">
<span class="material-symbols-outlined">settings</span>
</button>
<div class="h-8 w-8 rounded-full overflow-hidden border border-slate-200">
<img alt="User profile" data-alt="A professional studio portrait of a corporate male administrator in his 40s. The lighting is clean and high-key, reflecting a modern healthcare administrative environment. The background is a soft, out-of-focus clinical office with neutral blue and white tones. He has a friendly yet authoritative expression suitable for a platform's Super Admin." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBarNVBSid_Asr-RYiIULQLZEwqrXIhIm9S1O_uzpRId6oEzA6r0BgAyglKjrLEtANHJ4mwY29SNyrWRgHUnVJ02yBFzTtM-h8suCrpJOdeqBBhOHD7r1x1wMDiyJiEKLsC51CKq4eLrCICWGBFnFjQgYKLkmKvx1c2De0mpKMd7o9A4rxfza7QIkvoUcTKu0xQdZ9u7X5dfirAs38KJrbuZE9Gm9m7wvUTSddHPhYhulE_GXPNQv9ErkbPWlwdcCkHF7ab0GPPmwY"/>
</div>
</div>
</header>
<div class="flex min-h-screen">
<!-- SideNavBar -->
<aside class="fixed left-0 top-0 h-full w-64 bg-slate-900 flex flex-col py-6 z-40">
<div class="px-6 mb-8">
<div class="flex items-center gap-3">
<div class="w-8 h-8 bg-blue-600 rounded flex items-center justify-center">
<span class="material-symbols-outlined text-white" style="font-variation-settings: 'FILL' 1;">medical_services</span>
</div>
<div>
<div class="text-lg font-black text-white">DentaFlow</div>
<div class="text-[10px] uppercase tracking-widest text-slate-400 font-bold">Enterprise Admin</div>
</div>
</div>
</div>
<nav class="flex-1 space-y-1">
<a class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white mx-2 hover:bg-slate-800 transition-all duration-200" href="{{ route('admin.dashboard.index') }}">
<span class="material-symbols-outlined">dashboard</span>
<span class="font-sans text-sm font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-white bg-blue-600 rounded-lg mx-2 border-l-4 border-white transition-all duration-200 translate-x-1" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">medical_services</span>
<span class="font-sans text-sm font-medium">Clinics</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white mx-2 hover:bg-slate-800 transition-all duration-200" href="#">
<span class="material-symbols-outlined">payments</span>
<span class="font-sans text-sm font-medium">Subscription</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white mx-2 hover:bg-slate-800 transition-all duration-200" href="#">
<span class="material-symbols-outlined">monitoring</span>
<span class="font-sans text-sm font-medium">Analytics</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white mx-2 hover:bg-slate-800 transition-all duration-200" href="#">
<span class="material-symbols-outlined">group</span>
<span class="font-sans text-sm font-medium">Staff</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white mx-2 hover:bg-slate-800 transition-all duration-200" href="#">
<span class="material-symbols-outlined">history</span>
<span class="font-sans text-sm font-medium">Audit Log</span>
</a>
</nav>
<div class="px-4 mt-auto">
<button class="w-full py-3 bg-slate-800 hover:bg-slate-700 text-white rounded-lg flex items-center justify-center gap-2 transition-colors text-sm font-medium">
<span class="material-symbols-outlined text-sm">support_agent</span>
                    Support Portal
                </button>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 ml-64 p-8">
<div class="max-w-7xl mx-auto">
<!-- Header Section -->
<div class="flex justify-between items-end mb-8">
<div>
<h2 class="font-h1 text-h1 text-on-surface mb-2">Clinic Management</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Oversee and manage all active dental networks and individual practices on the platform.</p>
</div>
<a href="{{ route('admin.clinic.add') }}" class="flex items-center gap-2 bg-primary text-on-primary px-6 py-2.5 rounded-lg font-label-md text-label-md hover:opacity-90 transition-opacity shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-[18px]">add</span>
                        Onboard New Clinic
                    </a>
</div>
<!-- Bento Stats (Overview) -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
<div class="bg-surface-container-lowest border border-outline-variant p-6 rounded-xl shadow-sm">
<div class="flex items-center justify-between mb-4">
<span class="p-2 bg-blue-50 text-blue-600 rounded-lg material-symbols-outlined">corporate_fare</span>
<span class="text-green-600 font-label-sm text-label-sm">+12%</span>
</div>
<div class="text-2xl font-bold text-on-surface">1,284</div>
<div class="text-on-surface-variant text-body-sm font-body-sm">Total Clinics</div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant p-6 rounded-xl shadow-sm">
<div class="flex items-center justify-between mb-4">
<span class="p-2 bg-secondary-container/20 text-secondary rounded-lg material-symbols-outlined">account_tree</span>
<span class="text-green-600 font-label-sm text-label-sm">+5%</span>
</div>
<div class="text-2xl font-bold text-on-surface">4,592</div>
<div class="text-on-surface-variant text-body-sm font-body-sm">Total Branches</div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant p-6 rounded-xl shadow-sm">
<div class="flex items-center justify-between mb-4">
<span class="p-2 bg-tertiary-fixed text-tertiary rounded-lg material-symbols-outlined">workspace_premium</span>
<span class="text-blue-600 font-label-sm text-label-sm">82%</span>
</div>
<div class="text-2xl font-bold text-on-surface">Premium</div>
<div class="text-on-surface-variant text-body-sm font-body-sm">Dominant Tier</div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant p-6 rounded-xl shadow-sm">
<div class="flex items-center justify-between mb-4">
<span class="p-2 bg-error-container text-error rounded-lg material-symbols-outlined">credit_card_off</span>
<span class="text-error font-label-sm text-label-sm">-2%</span>
</div>
<div class="text-2xl font-bold text-on-surface">14</div>
<div class="text-on-surface-variant text-body-sm font-body-sm">Failed Payments</div>
</div>
</div>
<!-- Table Card -->
<div class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm">
<!-- Filters -->
<div class="p-6 border-b border-slate-100 flex flex-wrap gap-4 items-center justify-between bg-slate-50/50">
<div class="flex gap-4 items-center">
<div class="relative">
<span class="absolute inset-y-0 left-3 flex items-center text-slate-400">
<span class="material-symbols-outlined text-[20px]">filter_list</span>
</span>
<select class="pl-10 pr-8 py-2 bg-white border border-slate-200 rounded-lg text-sm appearance-none focus:ring-2 focus:ring-primary focus:border-transparent outline-none cursor-pointer">
<option>All Tiers</option>
<option>Enterprise</option>
<option>Professional</option>
<option>Standard</option>
</select>
</div>
<div class="relative">
<select class="pl-4 pr-8 py-2 bg-white border border-slate-200 rounded-lg text-sm appearance-none focus:ring-2 focus:ring-primary focus:border-transparent outline-none cursor-pointer">
<option>Any Status</option>
<option>Active</option>
<option>Inactive</option>
<option>Suspended</option>
</select>
</div>
</div>
<div class="text-body-sm font-body-sm text-on-surface-variant">
                            Showing <span class="font-bold">1-10</span> of <span class="font-bold">1,284</span> clinics
                        </div>
</div>
<!-- Data Table -->
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-slate-50 border-b border-slate-200">
<th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Clinic Name</th>
<th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Primary Admin</th>
<th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Branch Count</th>
<th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Subscription Tier</th>
<th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Status</th>
<th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100">
<!-- Row 1 -->
<tr class="hover:bg-slate-50 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center text-blue-600 font-bold">SM</div>
<div>
<div class="font-medium text-slate-900">Smile Makers Dental</div>
<div class="text-xs text-slate-500">ID: DF-90210</div>
</div>
</div>
</td>
<td class="px-6 py-4">
<div class="text-sm text-slate-900">Dr. Sarah Jenkins</div>
<div class="text-xs text-slate-500">sarah.j@smilemakers.com</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-800">
                                            12 Branches
                                        </span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-blue-500 text-[18px]" style="font-variation-settings: 'FILL' 1;">diamond</span>
<span class="text-sm font-semibold text-slate-900">Enterprise</span>
</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md text-xs font-bold bg-green-50 text-green-700 border border-green-200">
<span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                            ACTIVE
                                        </span>
</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-2">
<button class="p-2 text-slate-400 hover:text-primary hover:bg-blue-50 rounded-lg transition-all" title="Edit Clinic">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-2 text-slate-400 hover:text-primary hover:bg-blue-50 rounded-lg transition-all" title="Manage Branches">
<span class="material-symbols-outlined text-[20px]">account_tree</span>
</button>
<button class="p-2 text-slate-400 hover:text-primary hover:bg-blue-50 rounded-lg transition-all" title="View Billing">
<span class="material-symbols-outlined text-[20px]">receipt_long</span>
</button>
</div>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-slate-50 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-teal-100 flex items-center justify-center text-teal-600 font-bold">OP</div>
<div>
<div class="font-medium text-slate-900">Omni-Pearl Ortho</div>
<div class="text-xs text-slate-500">ID: DF-44821</div>
</div>
</div>
</td>
<td class="px-6 py-4">
<div class="text-sm text-slate-900">Michael Chen</div>
<div class="text-xs text-slate-500">m.chen@omnipearl.org</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-800">
                                            3 Branches
                                        </span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-slate-400 text-[18px]">workspace_premium</span>
<span class="text-sm font-semibold text-slate-900">Professional</span>
</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md text-xs font-bold bg-green-50 text-green-700 border border-green-200">
<span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                            ACTIVE
                                        </span>
</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-2">
<button class="p-2 text-slate-400 hover:text-primary hover:bg-blue-50 rounded-lg transition-all">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-2 text-slate-400 hover:text-primary hover:bg-blue-50 rounded-lg transition-all">
<span class="material-symbols-outlined text-[20px]">account_tree</span>
</button>
<button class="p-2 text-slate-400 hover:text-primary hover:bg-blue-50 rounded-lg transition-all">
<span class="material-symbols-outlined text-[20px]">receipt_long</span>
</button>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-slate-50 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-orange-100 flex items-center justify-center text-orange-600 font-bold">DC</div>
<div>
<div class="font-medium text-slate-900">DentaCare Partners</div>
<div class="text-xs text-slate-500">ID: DF-11234</div>
</div>
</div>
</td>
<td class="px-6 py-4">
<div class="text-sm text-slate-900">Emily Rodriguez</div>
<div class="text-xs text-slate-500">admin@dentacare.com</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-800">
                                            1 Branch
                                        </span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-slate-400 text-[18px]">verified</span>
<span class="text-sm font-semibold text-slate-900">Standard</span>
</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md text-xs font-bold bg-red-50 text-red-700 border border-red-200">
<span class="w-1.5 h-1.5 rounded-full bg-red-500"></span>
                                            INACTIVE
                                        </span>
</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-2">
<button class="p-2 text-slate-400 hover:text-primary hover:bg-blue-50 rounded-lg transition-all">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-2 text-slate-400 hover:text-primary hover:bg-blue-50 rounded-lg transition-all">
<span class="material-symbols-outlined text-[20px]">account_tree</span>
</button>
<button class="p-2 text-slate-400 hover:text-primary hover:bg-blue-50 rounded-lg transition-all">
<span class="material-symbols-outlined text-[20px]">receipt_long</span>
</button>
</div>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-slate-50 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold">BM</div>
<div>
<div class="font-medium text-slate-900">BrightMouth Group</div>
<div class="text-xs text-slate-500">ID: DF-55678</div>
</div>
</div>
</td>
<td class="px-6 py-4">
<div class="text-sm text-slate-900">Julian Thorne</div>
<div class="text-xs text-slate-500">j.thorne@brightmouth.co</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-800">
                                            24 Branches
                                        </span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-blue-500 text-[18px]" style="font-variation-settings: 'FILL' 1;">diamond</span>
<span class="text-sm font-semibold text-slate-900">Enterprise</span>
</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md text-xs font-bold bg-green-50 text-green-700 border border-green-200">
<span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                            ACTIVE
                                        </span>
</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-2">
<button class="p-2 text-slate-400 hover:text-primary hover:bg-blue-50 rounded-lg transition-all">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-2 text-slate-400 hover:text-primary hover:bg-blue-50 rounded-lg transition-all">
<span class="material-symbols-outlined text-[20px]">account_tree</span>
</button>
<button class="p-2 text-slate-400 hover:text-primary hover:bg-blue-50 rounded-lg transition-all">
<span class="material-symbols-outlined text-[20px]">receipt_long</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="p-6 border-t border-slate-100 flex items-center justify-between">
<button class="flex items-center gap-1 px-4 py-2 border border-slate-200 rounded-lg text-sm text-slate-600 hover:bg-slate-50 transition-colors disabled:opacity-50" disabled="">
<span class="material-symbols-outlined text-[18px]">chevron_left</span>
                            Previous
                        </button>
<div class="flex gap-1">
<button class="w-10 h-10 flex items-center justify-center rounded-lg bg-blue-600 text-white text-sm font-bold">1</button>
<button class="w-10 h-10 flex items-center justify-center rounded-lg hover:bg-slate-100 text-slate-600 text-sm">2</button>
<button class="w-10 h-10 flex items-center justify-center rounded-lg hover:bg-slate-100 text-slate-600 text-sm">3</button>
<span class="w-10 h-10 flex items-center justify-center text-slate-400">...</span>
<button class="w-10 h-10 flex items-center justify-center rounded-lg hover:bg-slate-100 text-slate-600 text-sm">128</button>
</div>
<button class="flex items-center gap-1 px-4 py-2 border border-slate-200 rounded-lg text-sm text-slate-600 hover:bg-slate-50 transition-colors">
                            Next
                            <span class="material-symbols-outlined text-[18px]">chevron_right</span>
</button>
</div>
</div>
</div>
</main>
</div>
</body></html>
