<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Dentalflow | Dental Practice Management</title>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;family=Inter:wght@100..900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-container-high": "#e7e8f0",
                        "secondary-fixed": "#8ef4e9",
                        "primary-fixed-dim": "#a8c8ff",
                        "inverse-primary": "#a8c8ff",
                        "surface-bright": "#f9f9ff",
                        "surface-variant": "#e1e2ea",
                        "secondary-container": "#8bf1e6",
                        "tertiary-container": "#4c636e",
                        "on-primary-fixed": "#001b3d",
                        "inverse-surface": "#2e3036",
                        "surface": "#f9f9ff",
                        "on-secondary": "#ffffff",
                        "primary": "#00488d",
                        "background": "#f9f9ff",
                        "on-background": "#191c21",
                        "primary-fixed": "#d6e3ff",
                        "tertiary": "#344b56",
                        "on-surface-variant": "#424752",
                        "secondary-fixed-dim": "#71d7cd",
                        "outline": "#727783",
                        "inverse-on-surface": "#eff0f8",
                        "tertiary-fixed": "#cde6f4",
                        "surface-container": "#ecedf6",
                        "surface-container-highest": "#e1e2ea",
                        "on-error": "#ffffff",
                        "on-secondary-fixed-variant": "#00504a",
                        "on-surface": "#191c21",
                        "error": "#ba1a1a",
                        "on-tertiary": "#ffffff",
                        "on-primary-fixed-variant": "#00468b",
                        "surface-tint": "#005db5",
                        "on-primary-container": "#cadcff",
                        "tertiary-fixed-dim": "#b1cad7",
                        "surface-container-low": "#f2f3fb",
                        "surface-dim": "#d8dae2",
                        "on-tertiary-container": "#c5deec",
                        "on-tertiary-fixed": "#051e28",
                        "on-tertiary-fixed-variant": "#334a55",
                        "error-container": "#ffdad6",
                        "on-error-container": "#93000a",
                        "outline-variant": "#c2c6d4",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary-fixed": "#00201d",
                        "secondary": "#006a63",
                        "primary-container": "#005fb8",
                        "on-secondary-container": "#006f67",
                        "on-primary": "#ffffff"
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
        body { font-family: 'Inter', sans-serif; background-color: #f9f9ff; color: #191c21; }
        h1, h2, h3, h4 { font-family: 'Manrope', sans-serif; }
        .glass-card { background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(12px); }
        .hero-gradient { background: linear-gradient(135deg, #00488d 0%, #005fb8 100%); }
    </style>
</head>
<body class="bg-background">
<!-- Header / Shared Nav -->
<header class="sticky top-0 z-50 flex items-center justify-between bg-surface/80 backdrop-blur-md px-6 lg:px-40 py-4 border-b border-outline-variant/10">
<div class="flex items-center gap-3 text-primary">
<div class="size-8">
<svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M36.7273 44C33.9891 44 31.6043 39.8386 30.3636 33.69C29.123 39.8386 26.7382 44 24 44C21.2618 44 18.877 39.8386 17.6364 33.69C16.3957 39.8386 14.0109 44 11.2727 44C7.25611 44 4 35.0457 4 24C4 12.9543 7.25611 4 11.2727 4C14.0109 4 16.3957 8.16144 17.6364 14.31C18.877 8.16144 21.2618 4 24 4C26.7382 4 29.123 8.16144 30.3636 14.31C31.6043 8.16144 33.9891 4 36.7273 4C40.7439 4 44 12.9543 44 24C44 35.0457 40.7439 44 36.7273 44Z"></path>
</svg>
</div>
<h2 class="text-on-surface text-xl font-bold tracking-tight">Dental Flow</h2>
</div>
<div class="hidden md:flex items-center gap-8">
<nav class="flex items-center gap-8">
<a class="text-on-surface-variant text-sm font-medium hover:text-primary transition-colors" href="#">Features</a>
<a class="text-on-surface-variant text-sm font-medium hover:text-primary transition-colors" href="#">Testimonials</a>
<a class="text-on-surface-variant text-sm font-medium hover:text-primary transition-colors" href="#">Pricing</a>
<a class="text-on-surface-variant text-sm font-medium hover:text-primary transition-colors" href="#">Contact</a>
</nav>
<a href="{{ route('login') }}" class="bg-primary text-white text-sm font-bold px-6 py-2.5 rounded-full hover:shadow-lg hover:shadow-primary/20 transition-all">
                Register
            </a>
</div>
</header>
<main>
<!-- Hero Section -->
<section class="px-6 lg:px-40 py-16 lg:py-24">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
<div class="flex flex-col gap-8 max-w-xl">
<div class="flex flex-col gap-4">
<h1 class="text-on-surface text-5xl lg:text-6xl font-black leading-tight tracking-tight">
                            Elevate Your Practice with <span class="text-primary">Dentalflow</span>
</h1>
<p class="text-on-surface-variant text-lg lg:text-xl font-normal leading-relaxed">
                            Manage appointments, patient records, and billing in one seamless, high-performance platform designed for modern dentistry.
                        </p>
</div>
<div class="flex flex-wrap gap-4">
<a href="{{ route('register') }}"  class="flex items-center hero-gradient text-white font-bold h-14 px-8 rounded-full shadow-xl shadow-primary/20 hover:scale-[1.02] transition-transform">
                            Register
                        </a>
<button class="bg-surface-container-high text-on-surface font-bold h-14 px-8 rounded-full hover:bg-surface-variant transition-colors">
                            Explore Features
                        </button>
</div>
</div>
<div class="relative">
<div class="absolute -inset-4 bg-secondary-container/20 blur-3xl rounded-full"></div>
<div class="relative w-full aspect-video rounded-xl overflow-hidden shadow-2xl shadow-on-surface/5 border border-white/40">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Modern dental office with sleek equipment, soft natural light, and a high-end minimalist professional atmosphere" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD9zIS6ZUp099OgAk3YXfyJP3-Z41KmFCO5H4epSP3OHaTOFsqcY3PA58oUpy_2JQIgaq_beLnfikQfYuITl8h0lsVTHMZKMv037JAs0wElrV8PG8ORYBRWSUszJWOd6r3MbAhMWUQxYzNMVMQOoQAS0dS-AM3xl7gQstXcFHRJtQn3BUfYISmgaE1jIipBfdanCJ082VOf2wKkVyv4RLYTLLj5q6T_uuKWuKxr0j7WzGoLpT16QSZyZDqRAPIHFBIyxIqi5DO4ATA')"></div>
<div class="absolute bottom-6 left-6 right-6 p-4 glass-card rounded-xl border border-white/50 flex items-center gap-4">
<div class="size-10 rounded-full bg-primary flex items-center justify-center text-white">
<span class="material-symbols-outlined" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
</div>
<div>
<p class="text-sm font-bold text-on-surface">Trusted by 500+ Clinics</p>
<p class="text-xs text-on-surface-variant">HIPAA Compliant &amp; Secure</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Value Proposition Section -->
<section class="bg-surface-container-low py-20 px-6 lg:px-40">
<div class="text-center mb-16">
<h2 class="text-on-surface text-3xl font-bold mb-4">Streamlined Operations for Better Care</h2>
<p class="text-on-surface-variant max-w-2xl mx-auto">Focus on what matters most—your patients—while our intelligent system handles the rest.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- Simplified Scheduling -->
<div class="bg-surface-container-lowest p-8 rounded-3xl transition-all hover:translate-y-[-4px]">
<div class="size-14 rounded-2xl bg-primary-fixed flex items-center justify-center text-primary mb-6">
<span class="material-symbols-outlined" data-icon="calendar_today" style="font-size: 28px;">calendar_today</span>
</div>
<h3 class="text-on-surface text-xl font-bold mb-3">Simplified Scheduling</h3>
<p class="text-on-surface-variant leading-relaxed">
                        Effortlessly manage appointments with drag-and-drop ease and automated conflict detection.
                    </p>
</div>
<!-- Secure Patient Records -->
<div class="bg-surface-container-lowest p-8 rounded-3xl transition-all hover:translate-y-[-4px]">
<div class="size-14 rounded-2xl bg-secondary-container flex items-center justify-center text-on-secondary-container mb-6">
<span class="material-symbols-outlined" data-icon="encrypted" style="font-size: 28px;">encrypted</span>
</div>
<h3 class="text-on-surface text-xl font-bold mb-3">Secure Patient Records</h3>
<p class="text-on-surface-variant leading-relaxed">
                        Keep comprehensive patient data organized, accessible, and protected with military-grade encryption.
                    </p>
</div>
<!-- Integrated Billing -->
<div class="bg-surface-container-lowest p-8 rounded-3xl transition-all hover:translate-y-[-4px]">
<div class="size-14 rounded-2xl bg-tertiary-fixed flex items-center justify-center text-tertiary mb-6">
<span class="material-symbols-outlined" data-icon="payments" style="font-size: 28px;">payments</span>
</div>
<h3 class="text-on-surface text-xl font-bold mb-3">Integrated Billing</h3>
<p class="text-on-surface-variant leading-relaxed">
                        Seamlessly process payments, manage complex insurance claims, and track revenue health.
                    </p>
</div>
</div>
</section>
<!-- Key Features Section -->
<section class="py-24 px-6 lg:px-40 bg-surface">
<h2 class="text-on-surface text-3xl font-bold mb-12">Key Features Designed for Efficiency</h2>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<!-- Feature 1 -->
<div class="group flex flex-col gap-4">
<div class="aspect-square rounded-2xl overflow-hidden bg-surface-variant relative">
<div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-700" data-alt="Person holding a smartphone showing a clean medical notification app icon with soft blue interface" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAV-QPKjG2pmK0GaMc7c1UsaRXtxyobGm3oPwTIJBVo47XGbx5DWlDJs2PaD8rcNNf-dGzstaomHdb8uHUDDn0RYAmh9Nbawo9h6fLQ5q3-JqdAA8ve6zzIudsKpLu7mfHTOUwNh8ZdUVtMewlVpL_VN8SkyytuefvWd0fSaQ0qUcUJkfyPtk_xcPadioGDzITuFsm44mk_lE_7aK2NV3rTEN7G7OYjFYLIczIov6NGZe26tympyhlL2VPQ4FsZoVZEL2Hagx1l-tI')"></div>
<div class="absolute inset-0 bg-gradient-to-t from-on-surface/20 to-transparent"></div>
</div>
<div>
<h4 class="text-on-surface font-bold text-lg mb-1">Automated Reminders</h4>
<p class="text-on-surface-variant text-sm leading-relaxed">Reduce no-shows by up to 40% with automated SMS and email notifications that sync instantly with your calendar.</p>
</div>
</div>
<!-- Feature 2 -->
<div class="group flex flex-col gap-4">
<div class="aspect-square rounded-2xl overflow-hidden bg-surface-variant relative">
<div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-700" data-alt="Clean dashboard with bright blue charts and analytics shown on a modern tablet display with soft studio lighting" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDfLZBayHwd9oi6NBFVvkaotgGf4xc0AKLxKLarnppn1hMzG4czsbH6Cl0PuIJJIopUn2WKkkrh1v95kYg3YcV9NoPxRWxBy7S4wPKQVQbqegj0HuLEXnYahF3s-Pik4ZEAnbP8UDlTIQtbJAbGoiJOZsGqPH-sNa4Jg_aMVa6vRSvshULlBulBloN0gd1yUSxSHF6XArGRamY3gr8ArPR8hcQVqwX84QVovBWwh66jocLDGWu_jR-0PDgKg97SNvrxZh6OeF1Vmqw')"></div>
<div class="absolute inset-0 bg-gradient-to-t from-on-surface/20 to-transparent"></div>
</div>
<div>
<h4 class="text-on-surface font-bold text-lg mb-1">Detailed Analytics</h4>
<p class="text-on-surface-variant text-sm leading-relaxed">Gain deep insights into clinic performance, treatment success rates, and monthly growth trends with intuitive reporting.</p>
</div>
</div>
<!-- Feature 3 -->
<div class="group flex flex-col gap-4">
<div class="aspect-square rounded-2xl overflow-hidden bg-surface-variant relative">
<div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-700" data-alt="Glowing blue server rack lights in a clean white high-tech room representing secure cloud storage" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBvhtjrzvVlZHucMUzwaReDDhKc1rOoFmDEBGK7DKPtpfpsIldnSpE28FM7DYEiHaCfhpxiiokz4LKPDYFSVn7vlJbaWs8xYd2suKQ4X8czjgB7Dl4PANvW6KUS6qh4n7gGFMRzhysGe_eU3Mz8eosd28Kw_1nCVLKvFaEQivqFcxoEPO2zd_rGiJjLjODwCXSc4itcH6Ckx4EYel66ZB3_lQ1RizhiUW13o1HIwgjLn7AnXUByvwvHuUlNhamseX_X3t2uaOc5_iU')"></div>
<div class="absolute inset-0 bg-gradient-to-t from-on-surface/20 to-transparent"></div>
</div>
<div>
<h4 class="text-on-surface font-bold text-lg mb-1">HIPAA-Compliant Cloud</h4>
<p class="text-on-surface-variant text-sm leading-relaxed">Rest easy with secure, scalable storage that meets all regulatory standards and is backed up automatically every hour.</p>
</div>
</div>
</div>
</section>
<!-- Testimonial Section -->
<section class="py-20 bg-surface-container-low px-6 lg:px-40">
<div class="max-w-4xl mx-auto text-center flex flex-col items-center gap-8">
<div class="text-primary opacity-20">
<span class="material-symbols-outlined" data-icon="format_quote" style="font-size: 80px;">format_quote</span>
</div>
<h2 class="text-on-surface text-2xl md:text-4xl font-light italic leading-relaxed">
                    "Clinical Serenity transformed our workflow overnight. The interface is remarkably intuitive, and we've cut our administrative time in half. It’s the first software that actually feels like it was built for dentists."
                </h2>
<div class="flex flex-col items-center gap-2">
<p class="text-on-surface font-bold text-lg">Dr. Julian Thorne, DDS</p>
<p class="text-on-surface-variant text-sm tracking-widest uppercase">Lead Practitioner, Thorne Dental Group</p>
</div>
</div>
</section>
<!-- Inquiry/Contact Section -->
<section class="py-24 px-6 lg:px-40 bg-surface">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
<div class="flex flex-col gap-6">
<h2 class="text-on-surface text-4xl font-bold">Request a Personalized Demo</h2>
<p class="text-on-surface-variant text-lg">See Clinical Serenity in action. Our specialists will show you exactly how our system can fit your specific clinic workflow.</p>
<div class="flex flex-col gap-4 mt-4">
<div class="flex items-center gap-4 text-on-surface">
<span class="material-symbols-outlined text-primary" data-icon="done_all">done_all</span>
<span>Full feature walkthrough</span>
</div>
<div class="flex items-center gap-4 text-on-surface">
<span class="material-symbols-outlined text-primary" data-icon="done_all">done_all</span>
<span>Custom pricing assessment</span>
</div>
<div class="flex items-center gap-4 text-on-surface">
<span class="material-symbols-outlined text-primary" data-icon="done_all">done_all</span>
<span>Migration plan consultation</span>
</div>
</div>
</div>
<div class="bg-surface-container p-8 rounded-3xl border border-outline-variant/10">
<form class="flex flex-col gap-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="text-on-surface text-sm font-semibold">Full Name</label>
<input class="bg-surface-container-lowest border-none border-b-2 border-outline-variant/20 focus:ring-0 focus:border-primary rounded-xl h-12 px-4 transition-all" placeholder="Dr. Sarah Smith" type="text"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-on-surface text-sm font-semibold">Clinic Name</label>
<input class="bg-surface-container-lowest border-none border-b-2 border-outline-variant/20 focus:ring-0 focus:border-primary rounded-xl h-12 px-4 transition-all" placeholder="Serenity Dental" type="text"/>
</div>
</div>
<div class="flex flex-col gap-2">
<label class="text-on-surface text-sm font-semibold">Work Email</label>
<input class="bg-surface-container-lowest border-none border-b-2 border-outline-variant/20 focus:ring-0 focus:border-primary rounded-xl h-12 px-4 transition-all" placeholder="sarah@clinic.com" type="email"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-on-surface text-sm font-semibold">Message (Optional)</label>
<textarea class="bg-surface-container-lowest border-none border-b-2 border-outline-variant/20 focus:ring-0 focus:border-primary rounded-xl p-4 transition-all" placeholder="Tell us about your practice size..." rows="3"></textarea>
</div>
<button class="bg-primary text-white font-bold h-14 rounded-full shadow-lg shadow-primary/20 hover:bg-primary-container transition-colors" type="submit">
                            Schedule My Demo
                        </button>
</form>
</div>
</div>
</section>
<!-- Final CTA Section -->
<section class="px-6 lg:px-40 pb-24">
<div class="hero-gradient rounded-[2rem] p-12 lg:p-20 text-center flex flex-col items-center gap-8 shadow-2xl shadow-primary/10 relative overflow-hidden">
<div class="absolute top-0 right-0 size-64 bg-white/5 blur-3xl rounded-full translate-x-1/2 -translate-y-1/2"></div>
<div class="absolute bottom-0 left-0 size-64 bg-black/5 blur-3xl rounded-full -translate-x-1/2 translate-y-1/2"></div>
<h2 class="text-white text-3xl lg:text-5xl font-bold max-w-3xl leading-tight relative z-10">
                    Ready to modernize your dental practice? Join hundreds of clinics today.
                </h2>
<div class="flex flex-wrap justify-center gap-4 relative z-10">
<button class="bg-white text-primary font-bold h-14 px-10 rounded-full hover:bg-surface-bright transition-colors">
                        Get Started Free
                    </button>
<button class="border-2 border-white/40 text-white font-bold h-14 px-10 rounded-full hover:bg-white/10 transition-colors">
                        View Pricing
                    </button>
</div>
</div>
</section>
</main>
<!-- Simple Footer -->
<footer class="px-6 lg:px-40 py-12 border-t border-outline-variant/10">
<div class="flex flex-col md:flex-row justify-between items-center gap-8">
<div class="flex items-center gap-3 text-on-surface opacity-60">
<div class="size-6">
<svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M36.7273 44C33.9891 44 31.6043 39.8386 30.3636 33.69C29.123 39.8386 26.7382 44 24 44C21.2618 44 18.877 39.8386 17.6364 33.69C16.3957 39.8386 14.0109 44 11.2727 44C7.25611 44 4 35.0457 4 24C4 12.9543 7.25611 4 11.2727 4C14.0109 4 16.3957 8.16144 17.6364 14.31C18.877 8.16144 21.2618 4 24 4C26.7382 4 29.123 8.16144 30.3636 14.31C31.6043 8.16144 33.9891 4 36.7273 4C40.7439 4 44 12.9543 44 24C44 35.0457 40.7439 44 36.7273 44Z"></path>
</svg>
</div>
<h2 class="text-sm font-bold">Dental Flow</h2>
</div>
<div class="flex gap-8">
<a class="text-on-surface-variant text-xs hover:text-primary" href="#">Privacy Policy</a>
<a class="text-on-surface-variant text-xs hover:text-primary" href="#">Terms of Service</a>
<a class="text-on-surface-variant text-xs hover:text-primary" href="#">Security Standards</a>
</div>
<p class="text-on-surface-variant text-xs">© 2024 Clinical Serenity. All rights reserved.</p>
</div>
</footer>
</body></html>
