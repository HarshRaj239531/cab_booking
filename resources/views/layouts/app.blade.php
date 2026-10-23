<!DOCTYPE html>
<html lang="en" class="h-full antialiased scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Safe, clean, and reliable cab booking. Book city rides, airport transfers, and outstation trips with fixed fares and verified drivers.">
    <meta name="theme-color" content="#1A3320">

    <title>@yield('title', 'Quick & Reliable Cab Booking') | Veloce Cabs</title>

    <!-- Google Fonts: Plus Jakarta Sans & Playfair Display -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles & Scripts via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F5F7F3] text-[#14291B] font-sans min-h-full flex flex-col selection:bg-emerald-200 selection:text-emerald-950 overflow-x-hidden relative">

    <!-- Scroll Progress Indicator (Top Bar) -->
    <div id="scrollProgress" class="fixed top-0 left-0 h-1 bg-[#059669] z-[200] transition-all duration-150" style="width: 0%;"></div>

    <!-- Subtle Texture Overlay -->
    <div class="fixed inset-0 z-[90] pointer-events-none opacity-[0.025] mix-blend-multiply" style="background-image: url(&quot;data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E&quot;);"></div>

    <!-- Top Announcement Strip -->
    <div class="bg-[#1A3320] text-emerald-100 text-xs py-2 px-4 z-[95] text-center font-medium flex items-center justify-center gap-2">
        <span class="inline-block w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
        <span>24/7 Available across all major airports & city centers • Use code <strong class="text-white underline cursor-pointer" onclick="window.showToast('Code RIDE10 copied!')">RIDE10</strong> for 10% off your first trip</span>
    </div>

    <!-- Floating Pill Glassmorphic Header (Yoga Inspired & 2x Better) -->
    <div class="fixed top-9 inset-x-0 z-[100] flex justify-center px-4 pointer-events-none">
        <nav id="floatingNav" class="pointer-events-auto flex items-center justify-between transition-all duration-500 ease-in-out w-full max-w-6xl bg-white/90 backdrop-blur-xl border border-[#D8E2D5] rounded-full py-3 px-6 sm:px-8 shadow-lg shadow-[#1A3320]/5">
            
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-full bg-[#1A3320] text-white flex items-center justify-center font-bold text-lg shadow-sm group-hover:scale-105 transition-transform">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17a2 2 0 100 4 2 2 0 000-4zm8 0a2 2 0 100 4 2 2 0 000-4zM5 11l1.5-4.5A2 2 0 018.4 5h7.2a2 2 0 011.9 1.5L19 11m-14 0h14m-14 0a2 2 0 00-2 2v3a1 1 0 001 1h1m14-6a2 2 0 012 2v3a1 1 0 01-1 1h-1"/>
                    </svg>
                </div>
                <div>
                    <span class="font-serif font-bold text-xl text-[#1A3320] tracking-tight">Veloce</span>
                    <span class="text-xs text-emerald-700 font-semibold tracking-wider uppercase ml-1">Cabs</span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <div class="hidden md:flex items-center gap-8 text-xs font-bold tracking-[0.15em] uppercase text-[#355E3B]">
                <a href="{{ route('home') }}" class="nav-link-underline transition-colors hover:text-[#1A3320] {{ request()->routeIs('home') ? 'active text-[#1A3320]' : '' }}">
                    Home
                </a>
                <a href="{{ route('fleet') }}" class="nav-link-underline transition-colors hover:text-[#1A3320] {{ request()->routeIs('fleet') ? 'active text-[#1A3320]' : '' }}">
                    Our Cabs
                </a>
                <a href="{{ route('booking') }}" class="nav-link-underline transition-colors hover:text-[#1A3320] {{ request()->routeIs('booking') ? 'active text-[#1A3320]' : '' }}">
                    Book Ride
                </a>
                <a href="{{ route('safety') }}" class="nav-link-underline transition-colors hover:text-[#1A3320] {{ request()->routeIs('safety') ? 'active text-[#1A3320]' : '' }}">
                    Safety & Drivers
                </a>
                <a href="{{ route('contact') }}" class="nav-link-underline transition-colors hover:text-[#1A3320] {{ request()->routeIs('contact') ? 'active text-[#1A3320]' : '' }}">
                    Contact
                </a>
            </div>

            <!-- Action Button -->
            <div class="hidden sm:flex items-center gap-3">
                <a href="{{ route('booking') }}" class="btn-primary text-xs font-semibold px-6 py-2.5 flex items-center gap-2 group">
                    <span>Book a Cab</span>
                    <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>

            <!-- Mobile Hamburger -->
            <div class="md:hidden flex items-center">
                <button id="mobileMenuBtn" type="button" class="p-2 rounded-xl text-[#1A3320] hover:bg-[#EAF0E5] transition-colors" aria-label="Toggle Menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

        </nav>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div id="mobileMenu" class="hidden md:hidden fixed top-24 inset-x-4 z-[99] bg-white/95 backdrop-blur-2xl border border-[#D8E2D5] rounded-3xl p-6 shadow-2xl space-y-3 font-semibold text-sm">
        <a href="{{ route('home') }}" class="block px-4 py-2.5 rounded-xl hover:bg-[#EAF0E5] text-[#1A3320]">Home</a>
        <a href="{{ route('fleet') }}" class="block px-4 py-2.5 rounded-xl hover:bg-[#EAF0E5] text-[#1A3320]">Our Cabs</a>
        <a href="{{ route('booking') }}" class="block px-4 py-2.5 rounded-xl hover:bg-[#EAF0E5] text-[#1A3320]">Book a Ride</a>
        <a href="{{ route('safety') }}" class="block px-4 py-2.5 rounded-xl hover:bg-[#EAF0E5] text-[#1A3320]">Safety & Drivers</a>
        <a href="{{ route('contact') }}" class="block px-4 py-2.5 rounded-xl hover:bg-[#EAF0E5] text-[#1A3320]">Contact & Support</a>
        <div class="pt-2">
            <a href="{{ route('booking') }}" class="w-full btn-primary text-center py-3 block text-sm">Book a Cab Now</a>
        </div>
    </div>

    <!-- Main Content -->
    <main class="flex-grow pt-24 z-10">
        @yield('content')
    </main>

    <!-- Yoga-Style Clean Footer -->
    <footer class="bg-[#14291B] text-[#D4E2D2] border-t border-[#254A2E] pt-16 pb-12 z-10 relative mt-20">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
                
                <!-- Col 1 -->
                <div class="md:col-span-2 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-emerald-600 text-white flex items-center justify-center font-bold text-base">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17a2 2 0 100 4 2 2 0 000-4zm8 0a2 2 0 100 4 2 2 0 000-4zM5 11l1.5-4.5A2 2 0 018.4 5h7.2a2 2 0 011.9 1.5L19 11m-14 0h14m-14 0a2 2 0 00-2 2v3a1 1 0 001 1h1m14-6a2 2 0 012 2v3a1 1 0 01-1 1h-1"/>
                            </svg>
                        </div>
                        <span class="font-serif font-bold text-2xl text-white">Veloce Cabs</span>
                    </div>
                    <p class="text-sm text-[#A7C2A3] max-w-sm leading-relaxed font-light">
                        Simple, clean, and reliable cab service. No surge surprises, verified courteous drivers, and spotless clean cars for daily commutes, airport trips, and outstation travel.
                    </p>
                    <div class="flex items-center gap-4 text-xs text-emerald-400 font-semibold pt-1">
                        <span>✓ Verified Drivers</span>
                        <span>✓ Fixed Fares</span>
                        <span>✓ 24/7 Support</span>
                    </div>
                </div>

                <!-- Col 2: Quick Links -->
                <div>
                    <h4 class="font-serif text-white font-semibold text-base mb-4">Quick Links</h4>
                    <ul class="space-y-2.5 text-xs text-[#A7C2A3]">
                        <li><a href="{{ route('home') }}" class="hover:text-emerald-400 transition-colors">Home</a></li>
                        <li><a href="{{ route('fleet') }}" class="hover:text-emerald-400 transition-colors">Our Cabs & Pricing</a></li>
                        <li><a href="{{ route('booking') }}" class="hover:text-emerald-400 transition-colors">Book a Ride Online</a></li>
                        <li><a href="{{ route('safety') }}" class="hover:text-emerald-400 transition-colors">Safety Standards</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-emerald-400 transition-colors">Help & Contact</a></li>
                    </ul>
                </div>

                <!-- Col 3: Need Help -->
                <div>
                    <h4 class="font-serif text-white font-semibold text-base mb-4">24/7 Helpline</h4>
                    <p class="text-xs text-[#A7C2A3] mb-3 leading-relaxed">
                        Need immediate assistance or special booking request?
                    </p>
                    <div class="space-y-2">
                        <a href="tel:+18008356231" class="text-sm font-bold text-white block hover:text-emerald-400 transition-colors">
                            📞 1800-835-6231 (Toll-Free)
                        </a>
                        <p class="text-xs text-[#A7C2A3]">
                            ✉️ support@velocecabs.com
                        </p>
                        <p class="text-xs text-[#A7C2A3] pt-1">
                            🕒 Average cab pickup time: <strong>4 mins</strong>
                        </p>
                    </div>
                </div>

            </div>

            <!-- Bottom Line -->
            <div class="border-t border-[#254A2E] pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-[#7A9C76] gap-3">
                <p>&copy; {{ date('Y') }} Veloce Cabs. Designed for pure comfort and reliability.</p>
                <div class="flex items-center gap-6">
                    <a href="{{ route('safety') }}" class="hover:text-white transition-colors">Safety Guide</a>
                    <a href="{{ route('booking') }}" class="hover:text-white transition-colors">Instant Booking</a>
                    <a href="{{ route('contact') }}" class="hover:text-white transition-colors">Contact Support</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Toast Notifications Container -->
    <div id="toastContainer" class="fixed bottom-6 right-6 z-[150] flex flex-col gap-3 pointer-events-none max-w-sm w-full"></div>

    @stack('scripts')
</body>
</html>
