<x-patient-layout>
<!-- Top Navigation (Shared Component Integration) -->
<header class="h-20 bg-surface/80 backdrop-blur-md border-b border-outline-variant/15 px-8 flex items-center justify-between sticky top-0 z-40">
<div class="flex-1 max-w-md">
<div class="relative group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">search</span>
<input class="w-full bg-surface-container-low border-none rounded-full pl-12 pr-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 transition-all" placeholder="Search treatments, doctors, records..." type="text"/>
</div>
</div>
<div class="flex items-center gap-6">
<button class="relative p-2 text-on-surface-variant hover:bg-surface-container-low rounded-full transition-all">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 size-2 bg-error rounded-full border-2 border-surface"></span>
</button>
<div class="h-8 w-px bg-outline-variant/30"></div>
<div class="flex items-center gap-3 cursor-pointer group">
<div class="text-right">
<p class="text-sm font-bold text-on-surface">Alex Johnson</p>
<p class="text-xs text-on-surface-variant">Patient ID: #88219</p>
</div>
<div class="size-10 rounded-full border-2 border-primary-container p-0.5 overflow-hidden">
<img class="w-full h-full rounded-full object-cover" data-alt="Professional portrait of a middle-aged man with a friendly smile, clean studio lighting, high-end corporate style" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBAGlGJk9cT3oh2nRWL-5QqwwhrujBda7p7GyL_4xIps2uhL68kCtRBCWhau1ofZ3_GK7cbYoVGVR3F9oSNTfs67KBIxTJctqCBYvgwNmKlFOgv5xwoxJb_g8W6-n8GwlDZEiUXTagY6lFb_Uh2v69FQIbkVGueOV2pksQ_kC2Q8s0YXTl25SfUGAFZ-0yN3Ov_qGOFvMJlud5xudvA-G18Y0QrkNQoFoPxsPqb7jI2qEsboSTzxRlfw8dcsBFDMtiEJh6IQOjW8_8"/>
</div>
</div>
</div>
</header>
<div class="p-8 space-y-8">
<!-- Welcome Section -->
<div class="flex flex-col lg:flex-row justify-between items-start lg:items-end gap-6">
<div>
<h2 class="text-4xl font-black tracking-tight text-on-surface">Welcome back, Alex Johnson</h2>
<p class="text-on-surface-variant text-lg mt-1 font-body">Maintain your healthy smile. Here's your clinic overview.</p>
</div>
<button class="primary-gradient text-white px-8 py-4 rounded-full font-bold shadow-lg shadow-primary/20 flex items-center gap-2 hover:scale-[1.02] active:scale-[0.98] transition-all">
<span class="material-symbols-outlined">add</span>
                        Book New Appointment
                    </button>
</div>
<!-- Alert Section / Countdown -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<div class="lg:col-span-2 glass-card rounded-3xl p-6 flex flex-col md:flex-row gap-6 items-center shadow-xl shadow-surface-container-high/40 border border-white">
<div class="size-32 rounded-2xl primary-gradient flex flex-col items-center justify-center text-white shrink-0">
<span class="text-xs font-bold uppercase tracking-widest opacity-80">Days Left</span>
<span class="text-5xl font-black">02</span>
</div>
<div class="flex-1 text-center md:text-left">
<div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container text-xs font-bold mb-3 uppercase">
<span class="size-2 rounded-full bg-secondary"></span>
                                Next Visit
                            </div>
<h3 class="text-2xl font-bold text-on-surface">Routine Dental Hygiene &amp; Polishing</h3>
<p class="text-on-surface-variant mt-1">with <span class="font-semibold text-primary">Dr. Sarah Miller</span> • Tuesday, Oct 24th at 10:00 AM</p>
</div>
<div class="flex flex-col gap-2 w-full md:w-auto">
<button class="px-6 py-2.5 rounded-full bg-surface-container-highest text-on-surface font-bold text-sm hover:bg-surface-dim transition-all">Reschedule</button>
<button class="px-6 py-2.5 rounded-full text-error font-bold text-sm hover:bg-error/5 transition-all">Cancel</button>
</div>
</div>
<div class="bg-primary text-white rounded-3xl p-6 flex flex-col justify-between overflow-hidden relative">
<div class="relative z-10">
<p class="text-sm font-medium opacity-80 uppercase tracking-wider">Clinical Status</p>
<h4 class="text-xl font-bold mt-1">Active Treatment Plan</h4>
<p class="text-xs opacity-70 mt-2">Upper Incisor Alignment Phase 2 of 4</p>
</div>
<div class="relative z-10 mt-6 flex items-end justify-between">
<div class="flex -space-x-3">
<img class="size-8 rounded-full border-2 border-primary object-cover" data-alt="Small circular profile avatar of female dentist in medical scrub" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCF29-0NOl9KARCnnaUWO7RmLwc6DSdNLMa4SAVbcV2TnJWYv1lziWGvEKZgqrwqvLwu4wSXOfkyujcxsDRf5P5Z5XcYKxekA-pJlYD-TL2TA342CDD1oer_nfrzYyMB9ZrbSwBoluvuNg-b5HKKQWsdEZT8nkE6CtP4QzpS07iQVDruPqhN5fGZy01UYXHJ6Fj0z0EuQAr7lqFW82uGnChh42UgNzbf_YnyK080KqkPNeKJ8Fvs9FJDhWuHRZxr0XYMmua2MuLc0s"/>
<img class="size-8 rounded-full border-2 border-primary object-cover" data-alt="Small circular profile avatar of dental assistant" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCYs9_LYIZ6zm41KnHsm75Pt9uFjEnJYKfjdsBk-bfqkAcnbpLqi1FoaCAZ947-AR6xi2_y_hZ_BjKP4owOIxe8Maogm4lnEpfV4oaFa6Fw-O_lx0CTYNq5eFM7LuJVi4pE3XZQ9sZyqHf4tDNxooG5Z3eJURhuMia44zFB1HTW1AKCqEQdU_Qd1c7PZ9zok6bzm7EIsxhABF25OhGnYo8CY1qcVjMvMK698e1YSdq7WPUO7SKZNR3KS2uAGnFTnwt26MXn8XD1CNU"/>
</div>
<span class="text-3xl font-bold">65% <span class="text-sm font-normal opacity-60">Complete</span></span>
</div>
<div class="absolute -right-8 -bottom-8 size-40 bg-white/10 rounded-full blur-3xl"></div>
</div>
</div>
<!-- Main Grid: Calendar and Sidebar -->
<div class="grid grid-cols-1 xl:grid-cols-4 gap-8">
<!-- Calendar Section -->
<div class="xl:col-span-3 space-y-6">
<div class="flex items-center justify-between">
<h3 class="text-2xl font-bold text-on-surface">Appointment Scheduler</h3>
<div class="flex items-center bg-surface-container-low rounded-full p-1 border border-outline-variant/10">
<button class="px-4 py-1.5 rounded-full text-sm font-bold bg-white shadow-sm text-primary">Week</button>
<button class="px-4 py-1.5 rounded-full text-sm font-medium text-on-surface-variant hover:text-on-surface">Month</button>
<button class="px-4 py-1.5 rounded-full text-sm font-medium text-on-surface-variant hover:text-on-surface">Day</button>
</div>
</div>
<!-- Weekly Calendar Grid -->
<div class="bg-surface-container-lowest rounded-[2rem] shadow-sm border border-outline-variant/10 overflow-hidden">
<div class="grid grid-cols-8 border-b border-outline-variant/10">
<div class="p-4 bg-surface-container-low"></div>
<div class="p-4 text-center border-l border-outline-variant/10">
<p class="text-xs font-bold text-on-surface-variant uppercase tracking-tighter">Mon</p>
<p class="text-xl font-black text-on-surface">23</p>
</div>
<div class="p-4 text-center border-l border-outline-variant/10 bg-primary/5">
<p class="text-xs font-bold text-primary uppercase tracking-tighter">Tue</p>
<p class="text-xl font-black text-primary">24</p>
</div>
<div class="p-4 text-center border-l border-outline-variant/10">
<p class="text-xs font-bold text-on-surface-variant uppercase tracking-tighter">Wed</p>
<p class="text-xl font-black text-on-surface">25</p>
</div>
<div class="p-4 text-center border-l border-outline-variant/10">
<p class="text-xs font-bold text-on-surface-variant uppercase tracking-tighter">Thu</p>
<p class="text-xl font-black text-on-surface">26</p>
</div>
<div class="p-4 text-center border-l border-outline-variant/10">
<p class="text-xs font-bold text-on-surface-variant uppercase tracking-tighter">Fri</p>
<p class="text-xl font-black text-on-surface">27</p>
</div>
<div class="p-4 text-center border-l border-outline-variant/10">
<p class="text-xs font-bold text-on-surface-variant uppercase tracking-tighter">Sat</p>
<p class="text-xl font-black text-on-surface">28</p>
</div>
<div class="p-4 text-center border-l border-outline-variant/10">
<p class="text-xs font-bold text-on-surface-variant uppercase tracking-tighter">Sun</p>
<p class="text-xl font-black text-on-surface">29</p>
</div>
</div>
<div class="grid grid-cols-8 h-[500px] overflow-y-auto">
<!-- Time Column -->
<div class="flex flex-col bg-surface-container-low">
<div class="h-20 border-b border-outline-variant/5 px-3 py-2 text-[10px] font-bold text-on-surface-variant">08:00 AM</div>
<div class="h-20 border-b border-outline-variant/5 px-3 py-2 text-[10px] font-bold text-on-surface-variant">09:00 AM</div>
<div class="h-20 border-b border-outline-variant/5 px-3 py-2 text-[10px] font-bold text-on-surface-variant">10:00 AM</div>
<div class="h-20 border-b border-outline-variant/5 px-3 py-2 text-[10px] font-bold text-on-surface-variant">11:00 AM</div>
<div class="h-20 border-b border-outline-variant/5 px-3 py-2 text-[10px] font-bold text-on-surface-variant">12:00 PM</div>
<div class="h-20 border-b border-outline-variant/5 px-3 py-2 text-[10px] font-bold text-on-surface-variant">01:00 PM</div>
<div class="h-20 border-b border-outline-variant/5 px-3 py-2 text-[10px] font-bold text-on-surface-variant">02:00 PM</div>
</div>
<!-- Day Columns -->
<div class="border-l border-outline-variant/5 relative"></div>
<div class="border-l border-outline-variant/5 relative bg-primary/5">
<!-- Draggable Appointment Card -->
<div class="absolute top-[160px] left-2 right-2 h-36 bg-white border-l-4 border-primary rounded-xl shadow-md p-3 cursor-grab active:cursor-grabbing hover:shadow-lg transition-shadow">
<p class="text-[10px] font-bold text-primary uppercase">Hygiene</p>
<p class="text-xs font-bold text-on-surface leading-tight mt-1">Dr. Sarah Miller</p>
<div class="mt-4 flex items-center gap-2">
<span class="material-symbols-outlined text-sm text-outline">schedule</span>
<span class="text-[10px] font-medium text-on-surface-variant">10:00 - 11:30</span>
</div>
</div>
</div>
<div class="border-l border-outline-variant/5 relative"></div>
<div class="border-l border-outline-variant/5 relative">
<div class="absolute top-[320px] left-2 right-2 h-20 bg-secondary/10 border-l-4 border-secondary rounded-xl p-3 cursor-grab hover:shadow-lg transition-shadow">
<p class="text-[10px] font-bold text-secondary uppercase">Consult</p>
<p class="text-xs font-bold text-on-surface leading-tight mt-1">Braces Check</p>
</div>
</div>
<div class="border-l border-outline-variant/5 relative"></div>
<div class="border-l border-outline-variant/5 relative"></div>
<div class="border-l border-outline-variant/5 relative"></div>
</div>
</div>
</div>
<!-- Sidebar Panel -->
<div class="space-y-8">
<div>
<div class="flex items-center justify-between mb-4">
<h4 class="text-lg font-bold text-on-surface">Recent Treatments</h4>
<a class="text-primary text-xs font-bold hover:underline" href="#">View All</a>
</div>
<div class="space-y-4">
<div class="p-4 bg-surface-container-low rounded-2xl flex items-start gap-4 hover:bg-surface-container-high transition-colors cursor-pointer">
<div class="size-10 rounded-full bg-secondary-container flex items-center justify-center text-secondary shrink-0">
<span class="material-symbols-outlined">health_and_safety</span>
</div>
<div>
<p class="text-sm font-bold text-on-surface">Cavity Filling (Lower Left)</p>
<p class="text-xs text-on-surface-variant mt-0.5">Oct 12, 2023 • Dr. West</p>
</div>
</div>
<div class="p-4 bg-surface-container-low rounded-2xl flex items-start gap-4 hover:bg-surface-container-high transition-colors cursor-pointer">
<div class="size-10 rounded-full bg-primary-fixed flex items-center justify-center text-primary-fixed-dim shrink-0">
<span class="material-symbols-outlined">visibility</span>
</div>
<div>
<p class="text-sm font-bold text-on-surface">Digital Panoramic X-Ray</p>
<p class="text-xs text-on-surface-variant mt-0.5">Sep 28, 2023 • Radiology Dept</p>
</div>
</div>
<div class="p-4 bg-surface-container-low rounded-2xl flex items-start gap-4 hover:bg-surface-container-high transition-colors cursor-pointer">
<div class="size-10 rounded-full bg-tertiary-fixed flex items-center justify-center text-tertiary shrink-0">
<span class="material-symbols-outlined">cleaning_services</span>
</div>
<div>
<p class="text-sm font-bold text-on-surface">Scaling &amp; Root Planing</p>
<p class="text-xs text-on-surface-variant mt-0.5">Aug 15, 2023 • Dr. Miller</p>
</div>
</div>
</div>
</div>
<div class="bg-surface-container-highest rounded-3xl p-6 border border-outline-variant/20 relative overflow-hidden">
<h4 class="text-lg font-bold text-on-surface relative z-10">Care Reminders</h4>
<div class="mt-4 space-y-4 relative z-10">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<p class="text-sm text-on-surface-variant">Switch to soft-bristle brush</p>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<p class="text-sm text-on-surface-variant">Morning saline rinse</p>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-outline">circle</span>
<p class="text-sm text-on-surface-variant">Finalize whitening kit setup</p>
</div>
</div>
<div class="absolute top-0 right-0 p-4 opacity-5">
<span class="material-symbols-outlined text-9xl">medication</span>
</div>
</div>
</div>
</div>
</div>
</x-patient-layout>
