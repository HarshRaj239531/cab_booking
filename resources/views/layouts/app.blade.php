<!DOCTYPE html>
<html lang="en" class="h-full antialiased scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Safe, clean, and reliable cab booking in Patna. Book city rides, airport transfers (PAT), and outstation trips with fixed fares and verified drivers.">
    <meta name="theme-color" content="#003B73">

    <title>@yield('title', 'Safe & Reliable Cab Booking') | Patna Transport</title>

    <!-- Google Fonts: Plus Jakarta Sans (Clean, Modern, Simple) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles & Scripts via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F0F6FD] text-[#0B172A] font-sans min-h-full flex flex-col selection:bg-sky-200 selection:text-sky-950 overflow-x-hidden relative">

    <!-- Radiant Top Scroll Progress (Light Blue to Gold Gradient - Powered by Framer Motion scroll) -->
    <div id="scrollProgress" class="fixed top-0 left-0 h-1.5 bg-gradient-to-r from-sky-400 via-sky-600 to-amber-400 z-[200] pointer-events-none" style="width: 0%;"></div>

    <!-- Top Announcement Strip (Details from Poster: Phone, Location, Services) -->
    <div class="bg-gradient-to-r from-[#002244] via-[#003B73] to-[#004E92] text-sky-100 text-xs py-2 px-4 z-[95] font-medium border-b border-sky-400/20 shadow-sm">
        <div class="max-w-6xl mx-auto flex flex-wrap items-center justify-between gap-2">
            <div class="flex items-center gap-3">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-white/15 text-white text-[11px] font-bold">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    24x7 Active
                </span>
                <span class="hidden sm:inline text-sky-200">📍 <strong>Our Location:</strong> Boring Road, Patna</span>
                <span class="text-sky-200 hidden md:inline">• 24x7 Cab Service | Outstation | Local | Airport Pickup</span>
            </div>
            <div class="flex items-center gap-4 text-xs font-bold ml-auto sm:ml-0">
                <a href="tel:8877177161" class="flex items-center gap-1.5 bg-amber-400 hover:bg-amber-300 text-slate-900 px-3 py-1 rounded-full transition-transform hover:scale-105 shadow-sm">
                    <span>📞 CALL NOW 24x7:</span>
                    <span class="tracking-wider">8877177161</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Floating Pill Glassmorphic Header -->
    <div id="navContainer" class="fixed top-11 inset-x-0 z-[100] flex justify-center px-4 pointer-events-none">
        <nav id="floatingNav" class="pointer-events-auto flex items-center justify-between w-full max-w-6xl bg-white/95 backdrop-blur-xl border border-white/60 rounded-full py-3 px-5 sm:px-7 shadow-xl shadow-sky-950/10">
            
            <!-- Brand Logo (Airplane in Circle) -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-full bg-[#004E92] text-white flex items-center justify-center font-bold text-base shadow-md ring-2 ring-white group-hover:scale-105 transition-transform">
                    <svg class="w-5 h-5 text-white transform -rotate-45" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="font-extrabold text-lg text-[#003B73] tracking-tight leading-none">Patna Transport</span>
                    <span class="text-[10px] text-slate-500 font-semibold tracking-tight mt-0.5 hidden xs:block">Safe • Reliable • On-Time Travel Since Years</span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <div class="hidden md:flex items-center gap-7 text-xs font-bold tracking-[0.12em] uppercase text-[#1B365D]">
                <a href="{{ route('home') }}" class="nav-link-underline transition-colors hover:text-[#004E92] {{ request()->routeIs('home') ? 'active text-[#004E92]' : '' }}">
                    Home
                </a>
                <a href="{{ route('fleet') }}" class="nav-link-underline transition-colors hover:text-[#004E92] {{ request()->routeIs('fleet') ? 'active text-[#004E92]' : '' }}">
                    Our Cabs
                </a>
                <a href="{{ route('safety') }}" class="nav-link-underline transition-colors hover:text-[#004E92] {{ request()->routeIs('safety') ? 'active text-[#004E92]' : '' }}">
                    Safety & Drivers
                </a>
                <a href="{{ route('contact') }}" class="nav-link-underline transition-colors hover:text-[#004E92] {{ request()->routeIs('contact') ? 'active text-[#004E92]' : '' }}">
                    Contact
                </a>
            </div>

            <!-- Action Buttons: Phone Call -->
            <div class="hidden sm:flex items-center gap-3">
                <a href="tel:8877177161" class="btn-gold text-xs font-bold px-5 py-2.5 flex items-center gap-2 shadow-md">
                    <svg class="w-4 h-4 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span>CALL: 8877177161</span>
                </a>
            </div>

            <!-- Mobile Hamburger -->
            <div class="md:hidden flex items-center">
                <button id="mobileMenuBtn" type="button" class="p-2 rounded-xl text-[#0B172A] hover:bg-[#E1EFFD] transition-colors" aria-label="Toggle Menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

        </nav>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div id="mobileMenu" class="hidden md:hidden fixed top-24 inset-x-4 z-[99] bg-white/95 backdrop-blur-2xl border border-[#C7E0FA] rounded-3xl p-6 shadow-2xl space-y-3 font-semibold text-sm">
        <a href="{{ route('home') }}" class="block px-4 py-2.5 rounded-xl hover:bg-[#E1EFFD] text-[#0B172A]">Home</a>
        <a href="{{ route('fleet') }}" class="block px-4 py-2.5 rounded-xl hover:bg-[#E1EFFD] text-[#0B172A]">Our Cabs</a>
        <a href="{{ route('safety') }}" class="block px-4 py-2.5 rounded-xl hover:bg-[#E1EFFD] text-[#0B172A]">Safety & Drivers</a>
        <a href="{{ route('contact') }}" class="block px-4 py-2.5 rounded-xl hover:bg-[#E1EFFD] text-[#0B172A]">Contact & Location</a>
        
        <div class="pt-3 border-t border-slate-100 space-y-2">
            <a href="tel:8877177161" class="w-full btn-gold text-center py-3 block text-sm shadow-md font-bold">
                📞 Call 8877177161 (24x7)
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <main class="flex-grow z-10">
        @yield('content')
    </main>

    <!-- Refined Footer (Patna Transport Details) -->
    <footer class="bg-gradient-to-b from-[#002244] to-[#001326] text-slate-300 border-t border-[#003B73] pt-16 pb-12 z-10 relative mt-20">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
                
                <!-- Col 1: Brand Info -->
                <div class="md:col-span-2 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-11 h-11 rounded-full bg-[#004E92] text-white flex items-center justify-center font-bold text-base shadow-lg ring-2 ring-white/20">
                            <svg class="w-6 h-6 text-white transform -rotate-45" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="font-bold text-2xl text-white tracking-tight">Patna Transport</span>
                            <span class="text-xs text-sky-300 font-semibold block">Safe • Reliable • On-Time Travel Since Years</span>
                        </div>
                    </div>
                    <p class="text-sm text-slate-300 max-w-sm leading-relaxed font-light">
                        Patna's premier cab service based at Boring Road. Delivering reliable 24x7 local rides, on-time airport pickups at Jay Prakash Narayan Airport (PAT), and smooth outstation journeys across Bihar and Jharkhand.
                    </p>
                    <div class="flex flex-wrap items-center gap-4 text-xs text-amber-400 font-semibold pt-1">
                        <span>✨ 24x7 Cab Service</span>
                        <span>✨ Outstation Trips</span>
                        <span>✨ Airport Pickup</span>
                        <span>✨ Boring Road, Patna</span>
                    </div>
                </div>

                <!-- Col 2: Quick Links -->
                <div>
                    <h4 class="text-white font-bold text-base mb-4">Quick Links</h4>
                    <ul class="space-y-2.5 text-xs text-slate-300">
                        <li><a href="{{ route('home') }}" class="hover:text-amber-400 transition-colors">Home</a></li>
                        <li><a href="{{ route('fleet') }}" class="hover:text-amber-400 transition-colors">Our Cabs & Pricing</a></li>
                        <li><a href="{{ route('safety') }}" class="hover:text-amber-400 transition-colors">Safety & Drivers</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-amber-400 transition-colors">Contact & Office Location</a></li>
                    </ul>
                </div>

                <!-- Col 3: Direct Contact Details -->
                <div>
                    <h4 class="text-white font-bold text-base mb-4">Contact & Location</h4>
                    <div class="space-y-3 text-xs">
                        <div class="bg-white/10 p-3.5 rounded-2xl border border-white/10">
                            <span class="text-[10px] uppercase font-bold text-amber-300 tracking-wider block mb-1">CALL NOW 24x7</span>
                            <a href="tel:8877177161" class="text-lg font-black text-white hover:text-amber-300 transition-colors block">
                                📞 8877177161
                            </a>
                        </div>
                        <div class="text-slate-300">
                            <strong class="text-white block">📍 Office Location:</strong>
                            Boring Road, Patna, Bihar - 800001
                        </div>
                        <div class="text-slate-300">
                            <strong class="text-white block">✈️ Airport Desk:</strong>
                            Jay Prakash Narayan Airport (PAT), Patna
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom Line -->
            <div class="border-t border-sky-900/60 pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-400 gap-3">
                <p>&copy; {{ date('Y') }} Patna Transport. Safe • Reliable • On-Time Travel Since Years. Boring Road, Patna.</p>
                <div class="flex items-center gap-6">
                    <a href="tel:8877177161" class="text-amber-300 font-bold hover:underline">📞 8877177161</a>
                    <a href="{{ route('safety') }}" class="hover:text-amber-300 transition-colors">Safety Standards</a>
                    <a href="{{ route('contact') }}" class="hover:text-amber-300 transition-colors">Contact Us</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Toast Notifications Container -->
    <div id="toastContainer" class="fixed bottom-6 right-6 z-[150] flex flex-col gap-3 pointer-events-none max-w-sm w-full"></div>

    @stack('scripts')
</body>
</html>
