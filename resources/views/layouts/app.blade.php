<!DOCTYPE html>
<html lang="en" class="h-full antialiased scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Safe, clean, and reliable cab booking. Book city rides, airport transfers, and outstation trips with fixed fares and verified drivers.">
    <meta name="theme-color" content="#0284C7">

    <title>@yield('title', 'Quick & Reliable Cab Booking') | Veloce Cabs</title>

    <!-- Google Fonts: Plus Jakarta Sans (Clean, Modern, Simple) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles & Scripts via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F0F6FD] text-[#0B172A] font-sans min-h-full flex flex-col selection:bg-sky-200 selection:text-sky-950 overflow-x-hidden relative">

    <!-- Radiant Top Scroll Progress (Light Blue to Gold Gradient) -->
    <div id="scrollProgress" class="fixed top-0 left-0 h-1 bg-gradient-to-r from-sky-400 via-sky-600 to-amber-400 z-[200] transition-all duration-150" style="width: 0%;"></div>

    <!-- Top Announcement Strip (Light Blue & Golden Touch) -->
    <div class="bg-gradient-to-r from-[#0C2340] via-[#0F3057] to-[#0C2340] text-sky-100 text-xs py-2 px-4 z-[95] text-center font-medium flex items-center justify-center gap-2 border-b border-amber-500/20">
        <span class="inline-block w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
        <span>✨ 24/7 Available across all major airports & city hubs • Use coupon <strong class="text-amber-300 underline cursor-pointer font-bold" onclick="window.showToast('Coupon GOLD10 copied to clipboard!')">GOLD10</strong> for 10% off your ride</span>
    </div>

    <!-- Floating Pill Glassmorphic Header -->
    <div class="fixed top-9 inset-x-0 z-[100] flex justify-center px-4 pointer-events-none">
        <nav id="floatingNav" class="pointer-events-auto flex items-center justify-between transition-all duration-500 ease-in-out w-full max-w-6xl bg-white/92 backdrop-blur-xl border border-[#C7E0FA] rounded-full py-3 px-6 sm:px-8 shadow-xl shadow-sky-600/8">
            
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-[#0284C7] to-[#0369A1] text-white flex items-center justify-center font-bold text-lg shadow-md group-hover:scale-105 transition-transform">
                    <svg class="w-5 h-5 text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17a2 2 0 100 4 2 2 0 000-4zm8 0a2 2 0 100 4 2 2 0 000-4zM5 11l1.5-4.5A2 2 0 018.4 5h7.2a2 2 0 011.9 1.5L19 11m-14 0h14m-14 0a2 2 0 00-2 2v3a1 1 0 001 1h1m14-6a2 2 0 012 2v3a1 1 0 01-1 1h-1"/>
                    </svg>
                </div>
                <div>
                    <span class="font-bold text-xl text-[#0B172A] tracking-tight">Veloce</span>
                    <span class="text-xs text-amber-600 font-bold tracking-wider uppercase ml-1">Gold</span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <div class="hidden md:flex items-center gap-8 text-xs font-bold tracking-[0.15em] uppercase text-[#1B365D]">
                <a href="{{ route('home') }}" class="nav-link-underline transition-colors hover:text-[#0284C7] {{ request()->routeIs('home') ? 'active text-[#0284C7]' : '' }}">
                    Home
                </a>
                <a href="{{ route('fleet') }}" class="nav-link-underline transition-colors hover:text-[#0284C7] {{ request()->routeIs('fleet') ? 'active text-[#0284C7]' : '' }}">
                    Our Cabs
                </a>
                <a href="{{ route('booking') }}" class="nav-link-underline transition-colors hover:text-[#0284C7] {{ request()->routeIs('booking') ? 'active text-[#0284C7]' : '' }}">
                    Book Ride
                </a>
                <a href="{{ route('safety') }}" class="nav-link-underline transition-colors hover:text-[#0284C7] {{ request()->routeIs('safety') ? 'active text-[#0284C7]' : '' }}">
                    Safety & Drivers
                </a>
                <a href="{{ route('contact') }}" class="nav-link-underline transition-colors hover:text-[#0284C7] {{ request()->routeIs('contact') ? 'active text-[#0284C7]' : '' }}">
                    Support
                </a>
            </div>

            <!-- Action Button: Golden Shine Button -->
            <div class="hidden sm:flex items-center gap-3">
                <a href="{{ route('booking') }}" class="btn-gold text-xs font-bold px-6 py-2.5 flex items-center gap-2 group shadow-lg">
                    <span>Book a Cab</span>
                    <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
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
        <a href="{{ route('booking') }}" class="block px-4 py-2.5 rounded-xl hover:bg-[#E1EFFD] text-[#0B172A]">Book a Ride</a>
        <a href="{{ route('safety') }}" class="block px-4 py-2.5 rounded-xl hover:bg-[#E1EFFD] text-[#0B172A]">Safety & Drivers</a>
        <a href="{{ route('contact') }}" class="block px-4 py-2.5 rounded-xl hover:bg-[#E1EFFD] text-[#0B172A]">Contact & Support</a>
        <div class="pt-2">
            <a href="{{ route('booking') }}" class="w-full btn-gold text-center py-3 block text-sm shadow-md">Book a Cab Now</a>
        </div>
    </div>

    <!-- Main Content -->
    <main class="flex-grow pt-24 z-10">
        @yield('content')
    </main>

    <!-- Refined Footer (Deep Royal Navy + Golden Glow + Sky Blue Details) -->
    <footer class="bg-gradient-to-b from-[#0B172A] to-[#060E1A] text-slate-300 border-t border-[#1E3A5F] pt-16 pb-12 z-10 relative mt-20">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
                
                <!-- Col 1 -->
                <div class="md:col-span-2 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-[#0284C7] to-amber-500 text-white flex items-center justify-center font-bold text-base shadow-md">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17a2 2 0 100 4 2 2 0 000-4zm8 0a2 2 0 100 4 2 2 0 000-4zM5 11l1.5-4.5A2 2 0 018.4 5h7.2a2 2 0 011.9 1.5L19 11m-14 0h14m-14 0a2 2 0 00-2 2v3a1 1 0 001 1h1m14-6a2 2 0 012 2v3a1 1 0 01-1 1h-1"/>
                            </svg>
                        </div>
                        <span class="font-bold text-2xl text-white">Veloce <span class="text-amber-400">Cabs</span></span>
                    </div>
                    <p class="text-sm text-slate-400 max-w-sm leading-relaxed font-light">
                        Premium comfort, crystal-clear pricing, and courteous drivers. Dedicated to providing smooth airport transfers, city travel, and outstation holiday journeys.
                    </p>
                    <div class="flex items-center gap-4 text-xs text-amber-400 font-semibold pt-1">
                        <span>✨ Verified Drivers</span>
                        <span>✨ Fixed Transparent Rates</span>
                        <span>✨ 24/7 Support</span>
                    </div>
                </div>

                <!-- Col 2: Quick Links -->
                <div>
                    <h4 class="text-white font-bold text-base mb-4">Quick Links</h4>
                    <ul class="space-y-2.5 text-xs text-slate-400">
                        <li><a href="{{ route('home') }}" class="hover:text-amber-400 transition-colors">Home</a></li>
                        <li><a href="{{ route('fleet') }}" class="hover:text-amber-400 transition-colors">Our Fleet & Pricing</a></li>
                        <li><a href="{{ route('booking') }}" class="hover:text-amber-400 transition-colors">Book a Cab Online</a></li>
                        <li><a href="{{ route('safety') }}" class="hover:text-amber-400 transition-colors">Safety Standards</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-amber-400 transition-colors">Help & Contact</a></li>
                    </ul>
                </div>

                <!-- Col 3: Need Help -->
                <div>
                    <h4 class="text-white font-bold text-base mb-4">24/7 Helpline</h4>
                    <p class="text-xs text-slate-400 mb-3 leading-relaxed">
                        Need immediate assistance or have a special ride inquiry?
                    </p>
                    <div class="space-y-2">
                        <a href="tel:+18008356231" class="text-sm font-bold text-amber-300 block hover:text-white transition-colors">
                            📞 1800-835-6231 (Toll-Free)
                        </a>
                        <p class="text-xs text-slate-400">
                            ✉️ support@velocecabs.com
                        </p>
                        <p class="text-xs text-sky-300 pt-1">
                            🕒 Average cab pickup time: <strong>3-4 mins</strong>
                        </p>
                    </div>
                </div>

            </div>

            <!-- Bottom Line -->
            <div class="border-t border-[#1E3A5F] pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-3">
                <p>&copy; {{ date('Y') }} Veloce Cabs. Designed for supreme comfort and reliable arrival.</p>
                <div class="flex items-center gap-6">
                    <a href="{{ route('safety') }}" class="hover:text-amber-300 transition-colors">Safety Guide</a>
                    <a href="{{ route('booking') }}" class="hover:text-amber-300 transition-colors">Instant Booking</a>
                    <a href="{{ route('contact') }}" class="hover:text-amber-300 transition-colors">Contact Support</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Toast Notifications Container -->
    <div id="toastContainer" class="fixed bottom-6 right-6 z-[150] flex flex-col gap-3 pointer-events-none max-w-sm w-full"></div>

    @stack('scripts')
</body>
</html>
