<x-auth-layout>
<!-- Abstract Background Elements -->
<div class="absolute top-[-10%] left-[-5%] w-96 h-96 bg-primary-fixed-dim/20 rounded-full blur-3xl"></div>
<div class="absolute bottom-[-10%] right-[-5%] w-96 h-96 bg-secondary-fixed-dim/20 rounded-full blur-3xl"></div>
<div class="w-full max-w-5xl grid md:grid-cols-2 gap-0 shadow-2xl rounded-[2rem] overflow-hidden bg-surface-container-lowest">
<!-- Left Side: Visual/Branding -->
<div class="hidden md:flex flex-col justify-center p-12 bg-gradient-to-br from-primary to-primary-container text-on-primary relative">
<div class="relative z-10">
<h1 class="font-headline text-4xl font-extrabold tracking-tight mb-6 leading-tight">
                        Precision Care, <br/>Ethereal Experience.
                    </h1>
<p class="text-lg opacity-90 font-light mb-8 max-w-sm">
                        Join our digital dental ecosystem designed for calm, clinical excellence and streamlined practice management.
                    </p>
<div class="space-y-4">
<div class="flex items-center gap-4 bg-white/10 p-4 rounded-xl backdrop-blur-sm">
<span class="material-symbols-outlined text-secondary-fixed">verified_user</span>
<span class="text-sm font-medium">Secure HIPAA-compliant data storage</span>
</div>
<div class="flex items-center gap-4 bg-white/10 p-4 rounded-xl backdrop-blur-sm">
<span class="material-symbols-outlined text-secondary-fixed">clinical_notes</span>
<span class="text-sm font-medium">Real-time clinical charting &amp; patient history</span>
</div>
</div>
</div>
<!-- Decorative Image Component -->
<div class="absolute inset-0 opacity-20 mix-blend-overlay">
<img alt="Clinical environment" class="w-full h-full object-cover" data-alt="Modern dental office with soft blue lighting, high-tech equipment, and clean minimalist architectural lines" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0iG-AfbID6N2SO-atdmQF6TJ4debLZkgG4-Z0Oi8LOWF8Gs-01FhgUXO98_1G0Qe9SesvycixyOSr3-Z_VBEVbUl5hmqMuUoxn1dJVGSy3ccSl1e0Qte4hFUTwfIgihjEUTUeNedRPU3k7AW-64bz0aX11MKVpO4O6UXZp5Jq4-cBlmd8cfa79rTahSdCsGzgiI9APzavmwHmQm3rZk0koOgJxX1nwAK6SKu3oKCzmj3b7xq5hD7FecV-Gs-8weal-BU33X2gYMk"/>
</div>
</div>
<!-- Right Side: Form -->
<div class="p-8 md:p-12 bg-surface-container-lowest">
<div class="max-w-md mx-auto">
<div class="mb-10">
<h2 class="font-headline text-3xl font-bold text-on-surface tracking-tight mb-2">Create Account</h2>
<p class="text-on-surface-variant font-medium">Enter your details to begin your journey.</p>
</div>
<form class="space-y-6">
<!-- Role Selection -->
<div class="grid grid-cols-2 gap-4 mb-8">
<label class="relative flex flex-col items-center justify-center p-4 rounded-2xl border-2 border-surface-container-high cursor-pointer hover:bg-surface-container-low transition-all group has-[:checked]:border-primary has-[:checked]:bg-primary-fixed/30">
<input checked="" class="sr-only" name="role" type="radio" value="patient"/>
<span class="material-symbols-outlined mb-2 text-primary group-has-[:checked]:scale-110 transition-transform">person</span>
<span class="text-xs font-bold uppercase tracking-wider text-on-surface-variant">New Patient</span>
</label>
<label class="relative flex flex-col items-center justify-center p-4 rounded-2xl border-2 border-surface-container-high cursor-pointer hover:bg-surface-container-low transition-all group has-[:checked]:border-primary has-[:checked]:bg-primary-fixed/30">
<input class="sr-only" name="role" type="radio" value="clinician"/>
<span class="material-symbols-outlined mb-2 text-primary group-has-[:checked]:scale-110 transition-transform">medical_services</span>
<span class="text-xs font-bold uppercase tracking-wider text-on-surface-variant">Clinician/Staff</span>
</label>
</div>
<!-- Full Name -->
<div class="relative">
<label class="block text-xs font-bold text-primary uppercase tracking-widest mb-1 px-1">Full Name</label>
<div class="flex items-center bg-surface-container-highest/30 rounded-t-lg ghost-border px-4 py-3 group focus-within:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined text-outline mr-3">badge</span>
<input class="bg-transparent border-none focus:ring-0 w-full text-on-surface font-body placeholder:text-outline-variant" placeholder="Johnathan Doe" type="text"/>
</div>
</div>
<!-- Email -->
<div class="relative">
<label class="block text-xs font-bold text-primary uppercase tracking-widest mb-1 px-1">Email Address</label>
<div class="flex items-center bg-surface-container-highest/30 rounded-t-lg ghost-border px-4 py-3 group focus-within:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined text-outline mr-3">mail</span>
<input class="bg-transparent border-none focus:ring-0 w-full text-on-surface font-body placeholder:text-outline-variant" placeholder="john@example.com" type="email"/>
</div>
</div>
<!-- Password -->
<div class="relative">
<label class="block text-xs font-bold text-primary uppercase tracking-widest mb-1 px-1">Password</label>
<div class="flex items-center bg-surface-container-highest/30 rounded-t-lg ghost-border px-4 py-3 group focus-within:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined text-outline mr-3">lock</span>
<input class="bg-transparent border-none focus:ring-0 w-full text-on-surface font-body placeholder:text-outline-variant" placeholder="••••••••" type="password"/>
<button class="material-symbols-outlined text-outline hover:text-primary transition-colors" type="button">visibility</button>
</div>
</div>
<!-- Phone Number -->
<div class="relative">
<label class="block text-xs font-bold text-primary uppercase tracking-widest mb-1 px-1">Phone Number</label>
<div class="flex items-center bg-surface-container-highest/30 rounded-t-lg ghost-border px-4 py-3 group focus-within:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined text-outline mr-3">phone</span>
<input class="bg-transparent border-none focus:ring-0 w-full text-on-surface font-body placeholder:text-outline-variant" placeholder="+1 (555) 000-0000" type="tel"/>
</div>
</div>
<!-- Action -->
<div class="pt-4">
<button class="w-full bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold py-4 rounded-full shadow-lg hover:shadow-primary/20 hover:scale-[1.02] transition-all duration-200 active:scale-[0.98]" type="submit">
                                Create Account
                            </button>
</div>
<div class="text-center pt-4">
<p class="text-on-surface-variant text-sm font-medium">
                                Already have an account? 
                                <a class="text-primary font-bold hover:underline transition-all" href="{{ route('login') }}">Log In</a>
</p>
</div>
</form>
</div>
</div>
</div>
</x-auth-layout>
