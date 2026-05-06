<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>DentaFlow - Patient Record: Sarah Mitchell</title>
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
                        "on-primary-container": "#f8f7ff",
                        "surface-container-high": "#dce9ff",
                        "outline-variant": "#c2c6d8",
                        "on-secondary": "#ffffff",
                        "surface-variant": "#d3e4fe",
                        "surface": "#f8f9ff",
                        "secondary-fixed-dim": "#4edbd2",
                        "on-tertiary-fixed": "#390c00",
                        "on-secondary-container": "#00716b",
                        "on-tertiary-container": "#fff6f4",
                        "secondary": "#006a65",
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed-variant": "#832600",
                        "on-secondary-fixed-variant": "#00504c",
                        "secondary-container": "#6ff7ee",
                        "inverse-surface": "#213145",
                        "inverse-primary": "#b3c5ff",
                        "background": "#f8f9ff",
                        "secondary-fixed": "#6ff7ee",
                        "error": "#ba1a1a",
                        "primary-fixed-dim": "#b3c5ff",
                        "on-secondary-fixed": "#00201e",
                        "surface-bright": "#f8f9ff",
                        "tertiary-fixed": "#ffdbd0",
                        "primary": "#0050cb",
                        "on-primary-fixed-variant": "#003fa4",
                        "surface-tint": "#0054d6",
                        "error-container": "#ffdad6",
                        "on-primary-fixed": "#001849",
                        "surface-container-highest": "#d3e4fe",
                        "inverse-on-surface": "#eaf1ff",
                        "tertiary-fixed-dim": "#ffb59d",
                        "outline": "#727687",
                        "surface-container": "#e5eeff",
                        "on-surface-variant": "#424656",
                        "surface-dim": "#cbdbf5",
                        "on-background": "#0b1c30",
                        "on-error-container": "#93000a",
                        "primary-fixed": "#dae1ff",
                        "on-error": "#ffffff",
                        "tertiary-container": "#cc4204",
                        "on-surface": "#0b1c30",
                        "tertiary": "#a33200",
                        "surface-container-low": "#eff4ff",
                        "primary-container": "#0066ff",
                        "on-tertiary": "#ffffff",
                        "surface-container-lowest": "#ffffff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "md": "16px",
                        "unit": "4px",
                        "sm": "8px",
                        "sidebar-width": "260px",
                        "lg": "24px",
                        "gutter": "20px",
                        "xl": "32px",
                        "xs": "4px",
                        "container-max": "1440px"
                    },
                    "fontFamily": {
                        "label-md": ["Inter"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-sm": ["Inter"],
                        "h3": ["Inter"],
                        "h2": ["Inter"],
                        "h1": ["Inter"],
                        "body-sm": ["Inter"]
                    },
                    "fontSize": {
                        "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600"}],
                        "body-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0", "fontWeight": "400"}],
                        "body-lg": ["16px", {"lineHeight": "24px", "letterSpacing": "0", "fontWeight": "400"}],
                        "label-sm": ["11px", {"lineHeight": "14px", "letterSpacing": "0.05em", "fontWeight": "700"}],
                        "h3": ["20px", {"lineHeight": "28px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "h2": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "h1": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-sm": ["13px", {"lineHeight": "18px", "letterSpacing": "0", "fontWeight": "400"}]
                    }
                }
            }
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body { font-family: 'Inter', sans-serif; background-color: #f8f9ff; }
        .dental-tooth { aspect-ratio: 1/1.5; border: 1px solid #c2c6d8; border-radius: 2px; }
        .tooth-active { background-color: #0066ff; border-color: #0050cb; }
        .tooth-warning { background-color: #a33200; border-color: #832600; }
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #d3e4fe; border-radius: 10px; }
    </style>
</head>
<body class="text-on-surface">
<!-- Sidebar Navigation -->
<aside class="fixed left-0 top-0 h-full w-64 bg-slate-50 border-r border-slate-200 flex flex-col z-40">
<div class="p-6">
<div class="flex items-center gap-3">
<div class="w-10 h-10 bg-primary-container rounded-xl flex items-center justify-center text-white">
<span class="material-symbols-outlined" data-icon="dentistry">dentistry</span>
</div>
<div>
<h1 class="text-lg font-bold text-slate-900 tracking-tight">Clinic Central</h1>
<p class="text-[10px] uppercase tracking-wider font-bold text-slate-500">Standard Plan</p>
</div>
</div>
</div>
<nav class="flex-1 px-4 space-y-1">
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 rounded-md transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="analytics">analytics</span>
<span class="font-sans text-sm font-medium">Overview</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-blue-700 bg-blue-50 rounded-md border-r-4 border-blue-600 font-medium" href="#">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="font-sans text-sm">Patients</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 rounded-md transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="calendar_today">calendar_today</span>
<span class="font-sans text-sm">Appointments</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 rounded-md transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
<span class="font-sans text-sm">Inventory</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 rounded-md transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
<span class="font-sans text-sm">Billing</span>
</a>
</nav>
<div class="p-4 border-t border-slate-200">
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 rounded-md transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span class="font-sans text-sm">Settings</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 rounded-md transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="logout">logout</span>
<span class="font-sans text-sm">Logout</span>
</a>
</div>
</aside>
<!-- Main View Container -->
<main class="ml-64 min-h-screen flex flex-col">
<!-- Top Navigation Bar -->
<header class="sticky top-0 z-50 flex justify-between items-center h-16 px-6 w-full bg-white/80 backdrop-blur-md border-b border-slate-200">
<div class="flex items-center gap-4">
<span class="text-xl font-bold tracking-tight text-slate-900">DentaFlow</span>
<div class="h-6 w-px bg-slate-200"></div>
<div class="flex items-center gap-2 text-slate-500">
<span class="font-sans text-sm font-medium">Patients</span>
<span class="material-symbols-outlined text-sm">chevron_right</span>
<span class="font-sans text-sm font-semibold text-blue-600">Sarah Mitchell</span>
</div>
</div>
<div class="flex items-center gap-4">
<button class="p-2 text-slate-500 hover:bg-slate-50 rounded-full transition-colors">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<button class="p-2 text-slate-500 hover:bg-slate-50 rounded-full transition-colors">
<span class="material-symbols-outlined" data-icon="help">help</span>
</button>
<div class="w-8 h-8 rounded-full overflow-hidden border border-slate-200">
<img class="w-full h-full object-cover" data-alt="A professional dental surgeon in clinical scrubs with a friendly and competent expression, set against a clean, modern medical office background with soft daylight. The image is high-definition, reflecting a professional medical atmosphere with professional lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0XJxTmbth_2Az0L6W8IlY8VU6XPvKgc9BkU-wuBvKKcf8_AZu79Td7OdCVsOs5jABKhrfYTBGQrnW6BUk0ne7pVrufCYVBL5p0TINjfrDWClFbrn6p3jVwwYoN7yIxiYOuRx8-VVltKG74XEe5-sVN45eYFNzJSfiYRJOmFUFDL0Kocndm9ktNVrUnhBKGE5pdqvW1mM44_ph6qExDWuGd_5rmjFag8x-PSYi0zl-Qb4MltogKRO-n5Aag5Be6BtqOnMxU1MVLUQ"/>
</div>
</div>
</header>
<!-- Patient Header Summary -->
<div class="bg-white border-b border-slate-200 px-8 py-6">
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6">
<div class="flex items-center gap-6">
<div class="relative">
<img class="w-20 h-20 rounded-full object-cover border-2 border-primary-container" data-alt="A professional portrait of a woman in her late 20s with a warm, natural smile, representing Sarah Mitchell. The background is a clean, minimalist clinical studio with soft, diffused lighting and a high-key aesthetic that feels bright and healthy. The image quality is high-end and corporate modern." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWHg2BsbyTFBrhjgmY3R6Lo2ZLkPAx3Rnz5SKPU5mRQPh66vKLMBV2M55xOnWat_i7UUplxen2BvHah4attkbrG1p8dTpiJ4Cu-IonsQiGQINnytja_JIujHP0XYqJrYrnn-C7vflnRS9VIvJ2zbCEzYOtTWu559Fxq-5juHdLiUd38qqBPG0TOCQ3Zz4yQRJ1MqM5rXsEyr8C3Cv5VtRK5OpJCrXgNshxNTaYQ1aJTk_Luk5NA12dazaBIjtE7Pr6LFzLt6RMjh0"/>
<div class="absolute bottom-0 right-0 w-6 h-6 bg-green-500 border-2 border-white rounded-full flex items-center justify-center">
<span class="material-symbols-outlined text-[14px] text-white" data-icon="check" data-weight="fill">check</span>
</div>
</div>
<div>
<h2 class="text-h2 font-h2 text-on-surface">Sarah Mitchell</h2>
<div class="flex flex-wrap gap-4 mt-1">
<div class="flex items-center gap-1 text-slate-500">
<span class="material-symbols-outlined text-md">cake</span>
<span class="text-body-sm">28 years old</span>
</div>
<div class="flex items-center gap-1 text-slate-500">
<span class="material-symbols-outlined text-md">female</span>
<span class="text-body-sm">Female</span>
</div>
<div class="flex items-center gap-1 text-slate-500">
<span class="material-symbols-outlined text-md">call</span>
<span class="text-body-sm">+1 (555) 012-3456</span>
</div>
</div>
</div>
</div>
<div class="flex flex-wrap items-center gap-3">
<div class="bg-error-container text-on-error-container px-3 py-2 rounded-lg flex items-center gap-2 border border-error/20">
<span class="material-symbols-outlined" data-icon="warning">warning</span>
<span class="font-label-md text-label-md">ALLERGIC TO PENICILLIN</span>
</div>
<div class="bg-surface-container text-on-surface-variant px-3 py-2 rounded-lg flex items-center gap-2 border border-outline-variant/30">
<span class="material-symbols-outlined" data-icon="history">history</span>
<span class="font-label-md text-label-md">Last Visit: 14 Days Ago</span>
</div>
</div>
</div>
</div>
<!-- Content Grid -->
<div class="flex-1 p-8 grid grid-cols-12 gap-6">
<!-- Left Clinical Sidebar -->
<div class="col-span-12 md:col-span-3 lg:col-span-2 flex flex-col gap-4">
<h3 class="font-label-sm text-label-sm text-slate-400 uppercase tracking-widest px-2">Clinical Files</h3>
<div class="space-y-1">
<button class="w-full flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-all group">
<span class="material-symbols-outlined" data-icon="medical_information">medical_information</span>
<span class="font-body-md text-body-md font-medium">Medical History</span>
</button>
<button class="w-full flex items-center gap-3 px-4 py-3 bg-white text-blue-600 border border-blue-100 shadow-sm rounded-lg transition-all">
<span class="material-symbols-outlined" data-icon="table_chart">table_chart</span>
<span class="font-body-md text-body-md font-bold">Dental Chart</span>
</button>
<button class="w-full flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-all group">
<span class="material-symbols-outlined" data-icon="assignment">assignment</span>
<span class="font-body-md text-body-md font-medium">Treatment Plans</span>
</button>
<button class="w-full flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-all group">
<span class="material-symbols-outlined" data-icon="radiology">radiology</span>
<span class="font-body-md text-body-md font-medium">Imaging / X-rays</span>
</button>
<button class="w-full flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-all group">
<span class="material-symbols-outlined" data-icon="biotech">biotech</span>
<span class="font-body-md text-body-md font-medium">Lab Work</span>
</button>
</div>
<div class="mt-6 p-4 bg-primary text-white rounded-xl shadow-lg shadow-primary/20">
<div class="flex items-center justify-between mb-4">
<h4 class="font-label-md text-label-md">Adult Dental Chart</h4>
<span class="material-symbols-outlined text-sm">open_in_full</span>
</div>
<div class="grid grid-cols-8 gap-1.5">
<!-- Simplified Teeth Representation -->
<div class="dental-tooth tooth-active"></div>
<div class="dental-tooth tooth-active"></div>
<div class="dental-tooth"></div>
<div class="dental-tooth tooth-warning"></div>
<div class="dental-tooth"></div>
<div class="dental-tooth"></div>
<div class="dental-tooth"></div>
<div class="dental-tooth"></div>
<!-- Row 2 -->
<div class="dental-tooth"></div>
<div class="dental-tooth"></div>
<div class="dental-tooth"></div>
<div class="dental-tooth"></div>
<div class="dental-tooth tooth-active"></div>
<div class="dental-tooth tooth-active"></div>
<div class="dental-tooth"></div>
<div class="dental-tooth"></div>
</div>
<p class="text-[10px] mt-4 opacity-80 leading-tight">2 Active treatments indicated in blue. 1 Critical issue at #14.</p>
</div>
</div>
<!-- Main Content Area -->
<div class="col-span-12 md:col-span-9 lg:col-span-7 flex flex-col gap-6">
<!-- Active Treatment Plan -->
<section class="bg-white rounded-xl border border-slate-200 overflow-hidden shadow-sm">
<div class="px-6 py-4 border-b border-slate-100 flex justify-between items-center">
<h3 class="text-h3 font-h3 text-on-surface">Active Treatment Plan</h3>
<span class="bg-blue-50 text-blue-700 px-2 py-1 rounded text-[10px] font-bold uppercase tracking-wider">Plan ID: #9902</span>
</div>
<div class="p-6">
<div class="flex flex-col md:flex-row gap-6">
<div class="flex-1">
<div class="flex justify-between items-end mb-2">
<span class="font-body-md text-body-md text-slate-900 font-semibold">Upper Left Molar Root Canal (Tooth #14)</span>
<span class="font-label-md text-label-md text-blue-600">65% Complete</span>
</div>
<div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
<div class="bg-primary h-full w-[65%] rounded-full"></div>
</div>
<p class="text-body-sm text-slate-500 mt-3 italic">Next phase: Crown preparation and impressions.</p>
</div>
<div class="w-px bg-slate-100 hidden md:block"></div>
<div class="md:w-48">
<p class="text-label-sm font-label-sm text-slate-400 uppercase">Estimated Total</p>
<p class="text-h2 font-h2 text-on-surface mt-1">$1,240.00</p>
<button class="mt-2 text-primary font-semibold text-body-sm flex items-center gap-1 hover:underline">
                                    View Breakdown <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
</div>
</div>
</div>
</section>
<!-- Visit Timeline -->
<section class="space-y-4">
<div class="flex items-center justify-between">
<h3 class="text-h3 font-h3 text-on-surface">Clinical Timeline</h3>
<div class="flex items-center gap-2">
<button class="p-2 bg-white border border-slate-200 rounded-lg text-slate-600 hover:bg-slate-50">
<span class="material-symbols-outlined">filter_list</span>
</button>
<button class="p-2 bg-white border border-slate-200 rounded-lg text-slate-600 hover:bg-slate-50">
<span class="material-symbols-outlined">search</span>
</button>
</div>
</div>
<div class="relative space-y-6 before:absolute before:left-6 before:top-4 before:bottom-4 before:w-px before:bg-slate-200">
<!-- Visit Card 1 -->
<div class="relative pl-12">
<div class="absolute left-[20px] top-4 w-2 h-2 rounded-full bg-primary ring-4 ring-blue-50"></div>
<div class="bg-white p-5 rounded-xl border border-slate-200 hover:border-primary/30 transition-all shadow-sm">
<div class="flex justify-between items-start mb-3">
<div>
<span class="text-label-sm font-label-sm text-slate-400">OCTOBER 12, 2023</span>
<h4 class="font-body-md text-body-md font-bold text-slate-900">Root Canal Debridement - Tooth #14</h4>
</div>
<span class="bg-green-50 text-green-700 px-2 py-1 rounded text-[10px] font-bold">COMPLETED</span>
</div>
<p class="text-body-sm text-slate-600 leading-relaxed">
                                    Patient reported relief from sharp pain. Local anesthesia (articaine 4% with epi) administered. Canal accessed, debrided, and shaped to #30. Irrigation with NaOCl. Temporary filling (Cavit) placed.
                                </p>
<div class="mt-4 flex items-center justify-between border-t border-slate-50 pt-4">
<div class="flex items-center gap-2">
<img class="w-6 h-6 rounded-full object-cover" data-alt="Close-up portrait of a male dentist with a professional and reassuring gaze, wearing a clinical white coat. The lighting is crisp and bright, matching a professional healthcare environment. High-end clinical photography style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDC4qRMqq3SC-RSG45wTAVMnAPU3i53wPrd8PjXIONMek8oFZswm9BFdRUPuyNTxh9ga1QxktIxmrOuI0Xxa6iD3-EF_IWVD7KUGrfKkidOytJ6_lE5SVDC-YedxUADv0CJomysk-nXRLqye4QDWGAELX5KmUItRl5GMStmGJNfHNAgIlOoe4bZnFy2KBRECS0aHQ1fmNxYhkiaD-qOXu4d4Wu_mjqxpdV7fZhpUeArnjiQh4E4QgcRghUDtEVq1esSqJkwReTIvUg"/>
<span class="text-body-sm text-slate-500 font-medium">Dr. James Sterling</span>
</div>
<button class="text-primary text-body-sm font-semibold hover:underline">Full Report</button>
</div>
</div>
</div>
<!-- Visit Card 2 -->
<div class="relative pl-12">
<div class="absolute left-[20px] top-4 w-2 h-2 rounded-full bg-slate-300 ring-4 ring-slate-50"></div>
<div class="bg-white p-5 rounded-xl border border-slate-200 hover:border-primary/30 transition-all shadow-sm">
<div class="flex justify-between items-start mb-3">
<div>
<span class="text-label-sm font-label-sm text-slate-400">SEPTEMBER 28, 2023</span>
<h4 class="font-body-md text-body-md font-bold text-slate-900">Initial Assessment &amp; Emergency Palliative</h4>
</div>
<span class="bg-slate-100 text-slate-600 px-2 py-1 rounded text-[10px] font-bold uppercase">Archive</span>
</div>
<p class="text-body-sm text-slate-600 leading-relaxed">
                                    Emergency visit for spontaneous pain Upper Left. X-ray revealed deep caries approaching pulp chamber on #14. Sensitivity to percussion (+) and cold (delayed). Diagnosis: Irreversible Pulpitis.
                                </p>
<div class="mt-4 flex items-center gap-4 border-t border-slate-50 pt-4">
<div class="flex items-center gap-1.5 px-3 py-1 bg-slate-50 rounded text-slate-500 text-body-sm">
<span class="material-symbols-outlined text-sm">image</span>
                                        PA_Radiograph_14.png
                                    </div>
<div class="flex items-center gap-1.5 px-3 py-1 bg-slate-50 rounded text-slate-500 text-body-sm">
<span class="material-symbols-outlined text-sm">description</span>
                                        Consent_Form.pdf
                                    </div>
</div>
</div>
</div>
</div>
</section>
</div>
<!-- Right Column - Quick Actions -->
<div class="col-span-12 lg:col-span-3 flex flex-col gap-6">
<section class="bg-white rounded-xl border border-slate-200 p-6 shadow-sm">
<h3 class="font-label-sm text-label-sm text-slate-400 uppercase tracking-widest mb-4">Quick Actions</h3>
<div class="grid grid-cols-1 gap-3">
<button class="flex items-center gap-3 w-full px-4 py-3 bg-primary text-white rounded-lg font-semibold hover:bg-on-primary-fixed-variant transition-colors group">
<span class="material-symbols-outlined group-active:scale-95 transition-transform" data-icon="add_notes">add_notes</span>
<span class="text-body-md">New Clinical Note</span>
</button>
<button class="flex items-center gap-3 w-full px-4 py-3 bg-white border border-primary text-primary rounded-lg font-semibold hover:bg-blue-50 transition-colors group">
<span class="material-symbols-outlined group-active:scale-95 transition-transform" data-icon="playlist_add">playlist_add</span>
<span class="text-body-md">Add Treatment</span>
</button>
<button class="flex items-center gap-3 w-full px-4 py-3 bg-white border border-slate-200 text-slate-700 rounded-lg font-semibold hover:bg-slate-50 transition-colors group">
<span class="material-symbols-outlined group-active:scale-95 transition-transform" data-icon="prescriptions">prescriptions</span>
<span class="text-body-md">Prescribe Medication</span>
</button>
<button class="flex items-center gap-3 w-full px-4 py-3 bg-white border border-slate-200 text-slate-700 rounded-lg font-semibold hover:bg-slate-50 transition-colors group">
<span class="material-symbols-outlined group-active:scale-95 transition-transform" data-icon="upload_file">upload_file</span>
<span class="text-body-md">Upload Image</span>
</button>
</div>
</section>
<section class="bg-slate-900 rounded-xl p-6 text-white shadow-xl">
<div class="flex items-center gap-2 mb-4 text-secondary-container">
<span class="material-symbols-outlined text-md">notifications_active</span>
<h4 class="font-label-sm text-label-sm uppercase">Medical Alert</h4>
</div>
<p class="text-body-sm font-medium mb-4 leading-relaxed">Patient has indicated severe Penicillin allergy. Avoid Amoxicillin or similar derivatives in prescriptions.</p>
<div class="p-3 bg-white/10 rounded-lg border border-white/10">
<p class="text-[11px] text-slate-400 uppercase font-bold mb-1">Emergency Contact</p>
<p class="text-body-sm">Mark Mitchell (Husband)</p>
<p class="text-body-sm text-secondary-container">+1 (555) 012-3499</p>
</div>
</section>
<section class="bg-white rounded-xl border border-slate-200 p-6 shadow-sm overflow-hidden">
<h3 class="font-label-sm text-label-sm text-slate-400 uppercase tracking-widest mb-4">Recent Imaging</h3>
<div class="grid grid-cols-2 gap-2">
<div class="aspect-square bg-slate-100 rounded-lg overflow-hidden relative group cursor-zoom-in">
<img class="w-full h-full object-cover grayscale opacity-80 group-hover:opacity-100 transition-opacity" data-alt="A high-contrast dental X-ray showing a close-up of human molars and jawbone structure. The image is rendered in clinical grayscale with digital markers indicating bone density and root structure, styled like a professional radiologist interface." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqbMlWTB-QxPwyAF-mVNpgBXGNkd9uSwccWBHMbqKW1Qv4UMoPJIgp_pHCWOyC1LljyX_ZU4iiTQFb6HtbyWiB2DNB6lVpCL1wXpxhH1bzWYT7QuA_AAWgFrwHAC7_iybB6dz7_2WpRH2v2UArENbThaCCWCE1eW01bQDHs5UtMtTDlFKJT77QWk77zAnqUiMpmTDH1-Ru4v0Hw_kTNaVcEoOPT7KxJQ_ZKCdHiL3G9qkpPca5ipvPzPw25oBJ9Ji6rG_0acrLsg4"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-2 opacity-0 group-hover:opacity-100 transition-opacity">
<span class="text-[10px] font-bold text-white uppercase">PANORAMIC</span>
</div>
</div>
<div class="aspect-square bg-slate-100 rounded-lg overflow-hidden relative group cursor-zoom-in">
<img class="w-full h-full object-cover grayscale opacity-80 group-hover:opacity-100 transition-opacity" data-alt="A macro photograph of professional dental tools and a clinical setup, featuring sharp focus on chrome instruments and high-tech imaging screens. The lighting is clean and clinical, utilizing a palette of cool blues and bright whites to emphasize hygiene and precision." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAApx0kSrKe117FOZa5i5grBjQ3q9lAFOchB7QtAWumoFW7t94nCQIggWeOKxat9aG9MRXA9f7AfOF08GYlyw5QQo7zkSrA5g7N0nNExDJeJzrzTQPrP9vFGA2KgknsnWcRCV4fHdrxwfHMuBXomlOQaUQWSqGapsyjXn4YV4-Y6vHa0LH-Yre6PufKEfW-kQjm7q0bONqrR0SMVym2J0AY-XcOmXhyh-gInGm9pgxS69KqrWdU_-mqCKwUpUMD0_f80UO-uKjKTw"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-2 opacity-0 group-hover:opacity-100 transition-opacity">
<span class="text-[10px] font-bold text-white uppercase">BITEWING</span>
</div>
</div>
</div>
<button class="w-full mt-4 py-2 text-body-sm font-semibold text-slate-600 border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors">
                        View Imaging History
                    </button>
</section>
</div>
</div>
</main>
</body></html>
