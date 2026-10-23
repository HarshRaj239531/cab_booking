@extends('layouts.app')

@section('title', 'Our Cabs & Transparent Fares')

@section('content')
<!-- FLEET HERO HEADER (Light Blue Atmosphere with Golden Accents) -->
<section class="py-16 px-6 bg-gradient-to-b from-[#E2EEFB] via-[#F0F6FD] to-[#F0F6FD] border-b border-[#C7E0FA] text-center relative overflow-hidden">
    <!-- Ambient Glows -->
    <div class="absolute top-0 left-1/4 w-80 h-80 bg-sky-400/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-10 right-1/4 w-72 h-72 bg-amber-400/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-4xl mx-auto relative z-10">
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/90 border border-[#C7E0FA] text-[#0369A1] text-xs font-bold uppercase tracking-wider mb-4 shadow-sm">
            <span class="w-2 h-2 rounded-full bg-amber-400"></span>
            Spotless & Well-Maintained Cabs
        </span>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-[#0B172A] mb-4">
            Our Cabs & <span class="text-amber-500">Clear Fares</span>
        </h1>
        <p class="text-[#475569] text-sm sm:text-base max-w-xl mx-auto font-light leading-relaxed">
            Choose the right cab for your journey. Clean interiors, working AC, polite verified drivers, and transparent pricing with zero hidden charges.
        </p>

        <!-- Category Filter Buttons (Light Blue Pill Style) -->
        <div class="flex flex-wrap items-center justify-center gap-2 pt-8">
            <button type="button" onclick="filterCabs('all')" id="btnFilterAll" class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-[#0284C7] text-white shadow-md">
                All Cabs (6)
            </button>
            <button type="button" onclick="filterCabs('sedan')" id="btnFilterSedan" class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-white border border-[#C7E0FA] text-[#1E3A5F] hover:bg-[#E1EFFD]">
                Sedans
            </button>
            <button type="button" onclick="filterCabs('suv')" id="btnFilterSuv" class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-white border border-[#C7E0FA] text-[#1E3A5F] hover:bg-[#E1EFFD]">
                SUVs
            </button>
            <button type="button" onclick="filterCabs('electric')" id="btnFilterElectric" class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-white border border-[#C7E0FA] text-[#1E3A5F] hover:bg-[#E1EFFD]">
                Electric Cabs
            </button>
            <button type="button" onclick="filterCabs('van')" id="btnFilterVan" class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-white border border-[#C7E0FA] text-[#1E3A5F] hover:bg-[#E1EFFD]">
                Family Vans
            </button>
        </div>
    </div>
</section>

<!-- FLEET CATALOG GRID -->
<section class="py-16 px-6 bg-[#F0F6FD]">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="fleetContainer">
            
            <!-- CAB 1: Comfort Sedan -->
            <div class="cab-card sedan card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/hero_sedan.jpg') }}" alt="Comfort Sedan" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-white/95 border border-[#C7E0FA] px-3 py-1 rounded-full text-xs font-bold text-[#0B172A] shadow-sm">
                            ⭐ CITY FAVORITE
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="font-serif text-xl font-bold text-[#0B172A]">Prime Comfort Sedan</h3>
                            <span class="text-xl font-bold text-amber-600 font-serif">$35 <span class="text-xs text-slate-500 font-sans">base</span></span>
                        </div>
                        <p class="text-xs text-[#475569] mb-4">Comfortable 4-seater sedan. Perfect for city rides, business commutes, and station drops.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#E1EFFD] text-center text-xs text-[#475569]">
                            <div>
                                <span class="text-[10px] text-[#64748B] block">SEATING</span>
                                <span class="font-bold text-[#0B172A]">4 Seats</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">LUGGAGE</span>
                                <span class="font-bold text-[#0B172A]">3 Bags</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">PER KM</span>
                                <span class="font-bold text-[#0284C7]">$1.20</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Dual AC</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Clean Bottled Water</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">USB Mobile Charger</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('sedan')" class="btn-outline-blue w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="{{ route('booking') }}?vehicle=sedan" class="btn-gold w-full py-2.5 text-xs block text-center font-bold shadow-md">
                        Book This Cab
                    </a>
                </div>
            </div>

            <!-- CAB 2: Spacious SUV -->
            <div class="cab-card suv card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/fleet_suv.jpg') }}" alt="Spacious SUV" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-white/95 border border-[#C7E0FA] px-3 py-1 rounded-full text-xs font-bold text-[#0B172A] shadow-sm">
                            🎒 FAMILY & AIRPORT
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="font-serif text-xl font-bold text-[#0B172A]">Spacious Family SUV</h3>
                            <span class="text-xl font-bold text-amber-600 font-serif">$55 <span class="text-xs text-slate-500 font-sans">base</span></span>
                        </div>
                        <p class="text-xs text-[#475569] mb-4">Big trunk space and ample legroom. Best for airport runs and outstation trips with family.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#E1EFFD] text-center text-xs text-[#475569]">
                            <div>
                                <span class="text-[10px] text-[#64748B] block">SEATING</span>
                                <span class="font-bold text-[#0B172A]">6 Seats</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">LUGGAGE</span>
                                <span class="font-bold text-[#0B172A]">5 Large Bags</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">PER KM</span>
                                <span class="font-bold text-[#0284C7]">$1.60</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Rear AC Vents</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Reclining Seats</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Highway Certified</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('suv')" class="btn-outline-blue w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="{{ route('booking') }}?vehicle=suv" class="btn-gold w-full py-2.5 text-xs block text-center font-bold shadow-md">
                        Book This Cab
                    </a>
                </div>
            </div>

            <!-- CAB 3: Eco Silent Electric Cab -->
            <div class="cab-card electric card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/fleet_electric.jpg') }}" alt="Eco Electric Cab" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-amber-500 text-slate-900 px-3 py-1 rounded-full text-xs font-bold shadow-sm">
                            ⚡ ZERO NOISE
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="font-serif text-xl font-bold text-[#0B172A]">Eco Silent Electric Cab</h3>
                            <span class="text-xl font-bold text-amber-600 font-serif">$40 <span class="text-xs text-slate-500 font-sans">base</span></span>
                        </div>
                        <p class="text-xs text-[#475569] mb-4">Silent, smooth, and 100% electric energy. Glide through city traffic with zero tailpipe emissions.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#E1EFFD] text-center text-xs text-[#475569]">
                            <div>
                                <span class="text-[10px] text-[#64748B] block">SEATING</span>
                                <span class="font-bold text-[#0B172A]">4 Seats</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">LUGGAGE</span>
                                <span class="font-bold text-[#0B172A]">3 Bags</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">PER KM</span>
                                <span class="font-bold text-[#0284C7]">$1.30</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Zero Engine Noise</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Fast Charging Tech</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Instant Climate AC</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('electric')" class="btn-outline-blue w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="{{ route('booking') }}?vehicle=electric" class="btn-gold w-full py-2.5 text-xs block text-center font-bold shadow-md">
                        Book This Cab
                    </a>
                </div>
            </div>

            <!-- CAB 4: Family Group Van -->
            <div class="cab-card van card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/fleet_van.jpg') }}" alt="Family Van" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-white/95 border border-[#C7E0FA] px-3 py-1 rounded-full text-xs font-bold text-[#0B172A] shadow-sm">
                            👥 GROUP TRAVEL
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="font-serif text-xl font-bold text-[#0B172A]">Executive Travel Van</h3>
                            <span class="text-xl font-bold text-amber-600 font-serif">$75 <span class="text-xs text-slate-500 font-sans">base</span></span>
                        </div>
                        <p class="text-xs text-[#475569] mb-4">Travel together with your entire group. Extra luggage space, high roof, and comfortable individual seats.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#E1EFFD] text-center text-xs text-[#475569]">
                            <div>
                                <span class="text-[10px] text-[#64748B] block">SEATING</span>
                                <span class="font-bold text-[#0B172A]">7 Seats</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">LUGGAGE</span>
                                <span class="font-bold text-[#0B172A]">8-10 Bags</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">PER KM</span>
                                <span class="font-bold text-[#0284C7]">$2.10</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">High Ceiling</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Big Luggage Boot</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Group Tour Special</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('van')" class="btn-outline-blue w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="{{ route('booking') }}?vehicle=van" class="btn-gold w-full py-2.5 text-xs block text-center font-bold shadow-md">
                        Book This Cab
                    </a>
                </div>
            </div>

            <!-- CAB 5: Executive Business Sedan -->
            <div class="cab-card sedan card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/luxe_interior.jpg') }}" alt="Executive Business Sedan" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-white/95 border border-[#C7E0FA] px-3 py-1 rounded-full text-xs font-bold text-[#0B172A] shadow-sm">
                            💼 BUSINESS CLASS
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="font-serif text-xl font-bold text-[#0B172A]">Executive Business Class</h3>
                            <span class="text-xl font-bold text-amber-600 font-serif">$60 <span class="text-xs text-slate-500 font-sans">base</span></span>
                        </div>
                        <p class="text-xs text-[#475569] mb-4">Premium leather seats, laptop charger ports, and high-speed Wi-Fi. Designed for work on the move.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#E1EFFD] text-center text-xs text-[#475569]">
                            <div>
                                <span class="text-[10px] text-[#64748B] block">SEATING</span>
                                <span class="font-bold text-[#0B172A]">3-4 Seats</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">LUGGAGE</span>
                                <span class="font-bold text-[#0B172A]">3 Bags</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">PER KM</span>
                                <span class="font-bold text-[#0284C7]">$1.80</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Free Wi-Fi</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Laptop Power</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Top-Rated Chauffeur</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('sedan')" class="btn-outline-blue w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="{{ route('booking') }}?vehicle=sedan" class="btn-gold w-full py-2.5 text-xs block text-center font-bold shadow-md">
                        Book This Cab
                    </a>
                </div>
            </div>

            <!-- CAB 6: Outstation Cruiser SUV -->
            <div class="cab-card suv card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/vip_chauffeur.jpg') }}" alt="Outstation Cruiser SUV" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-white/95 border border-[#C7E0FA] px-3 py-1 rounded-full text-xs font-bold text-[#0B172A] shadow-sm">
                            🛣️ LONG DISTANCE
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="font-serif text-xl font-bold text-[#0B172A]">Outstation Cruiser SUV</h3>
                            <span class="text-xl font-bold text-amber-600 font-serif">$65 <span class="text-xs text-slate-500 font-sans">base</span></span>
                        </div>
                        <p class="text-xs text-[#475569] mb-4">Built for long journeys. Extra fuel range, soft suspension, and experienced highway drivers.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#E1EFFD] text-center text-xs text-[#475569]">
                            <div>
                                <span class="text-[10px] text-[#64748B] block">SEATING</span>
                                <span class="font-bold text-[#0B172A]">6 Seats</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">LUGGAGE</span>
                                <span class="font-bold text-[#0B172A]">6 Bags</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">PER KM</span>
                                <span class="font-bold text-[#0284C7]">$1.75</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Emergency Kit</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Highway Toll Pass</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Roof Carrier</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('suv')" class="btn-outline-blue w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="{{ route('booking') }}?vehicle=suv" class="btn-gold w-full py-2.5 text-xs block text-center font-bold shadow-md">
                        Book This Cab
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- MODAL: CAB DETAILS MODAL -->
<div id="detailsModal" class="fixed inset-0 z-[120] bg-black/40 backdrop-blur-md flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-[2rem] border-2 border-[#C7E0FA] max-w-xl w-full p-6 sm:p-8 relative shadow-2xl space-y-6">
        <button type="button" onclick="closeDetailsModal()" class="absolute top-5 right-5 text-slate-400 hover:text-[#0B172A] text-xl font-bold transition-colors">✕</button>
        
        <div>
            <span id="modalCategoryTag" class="text-xs font-bold uppercase tracking-wider text-amber-600 block">Cab Specifications</span>
            <h3 id="modalTitle" class="font-serif text-2xl font-bold text-[#0B172A] mt-1">Comfort Prime Sedan</h3>
        </div>

        <div class="h-48 rounded-2xl overflow-hidden border border-[#C7E0FA]">
            <img id="modalImage" src="{{ asset('images/hero_sedan.jpg') }}" alt="Cab Preview" class="w-full h-full object-cover">
        </div>

        <div class="grid grid-cols-3 gap-3 text-center text-xs">
            <div class="p-3 rounded-2xl bg-[#F0F6FD] border border-[#C7E0FA]">
                <span class="text-[#64748B] block text-[10px]">PASSENGERS</span>
                <span id="modalPax" class="font-bold text-[#0B172A]">4 Persons</span>
            </div>
            <div class="p-3 rounded-2xl bg-[#F0F6FD] border border-[#C7E0FA]">
                <span class="text-[#64748B] block text-[10px]">LUGGAGE</span>
                <span id="modalBags" class="font-bold text-[#0B172A]">3 Large Bags</span>
            </div>
            <div class="p-3 rounded-2xl bg-[#F0F6FD] border border-[#C7E0FA]">
                <span class="text-[#64748B] block text-[10px]">BASE FARE</span>
                <span id="modalFare" class="font-bold text-amber-600 text-sm font-serif">$35.00</span>
            </div>
        </div>

        <div class="space-y-2">
            <h4 class="text-xs font-bold uppercase tracking-wider text-[#0B172A]">What's Included:</h4>
            <ul class="text-xs text-[#475569] space-y-1.5 font-medium">
                <li>✓ 100% Sanitized and cleaned interior before every trip</li>
                <li>✓ Verified, background-checked polite driver</li>
                <li>✓ Automatic digital route and live trip tracking</li>
                <li>✓ Free cancellation up to 1 hour before pickup</li>
            </ul>
        </div>

        <div class="flex items-center justify-between pt-4 border-t border-[#E1EFFD]">
            <button type="button" onclick="closeDetailsModal()" class="btn-outline-blue px-6 py-2.5 text-xs">Close</button>
            <a id="modalBookLink" href="{{ route('booking') }}?vehicle=sedan" class="btn-gold px-8 py-2.5 text-xs font-bold shadow-md">
                Book This Cab Now
            </a>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
function filterCabs(category) {
    const buttons = {
        all: document.getElementById('btnFilterAll'),
        sedan: document.getElementById('btnFilterSedan'),
        suv: document.getElementById('btnFilterSuv'),
        electric: document.getElementById('btnFilterElectric'),
        van: document.getElementById('btnFilterVan'),
    };

    Object.keys(buttons).forEach(k => {
        if (buttons[k]) {
            buttons[k].className = 'px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-white border border-[#C7E0FA] text-[#1E3A5F] hover:bg-[#E1EFFD]';
        }
    });

    if (buttons[category]) {
        buttons[category].className = 'px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-[#0284C7] text-white shadow-md';
        if (window.animate) {
            window.animate(buttons[category], { scale: [0.93, 1.08, 1] }, { duration: 0.35, ease: [0.16, 1, 0.3, 1] });
        }
    }

    const cards = document.querySelectorAll('.cab-card');
    const visibleCards = [];
    cards.forEach(c => {
        if (category === 'all' || c.classList.contains(category)) {
            c.style.display = 'flex';
            visibleCards.push(c);
        } else {
            c.style.display = 'none';
        }
    });

    if (window.animate && visibleCards.length > 0) {
        window.animate(
            visibleCards,
            { opacity: [0, 1], scale: [0.9, 1], y: [15, 0] },
            { delay: window.stagger(0.06), duration: 0.45, ease: [0.16, 1, 0.3, 1] }
        );
    }

    window.showToast(`Showing: ${category.toUpperCase()}`);
}

function openDetailsModal(type) {
    const modal = document.getElementById('detailsModal');
    const title = document.getElementById('modalTitle');
    const img = document.getElementById('modalImage');
    const pax = document.getElementById('modalPax');
    const bags = document.getElementById('modalBags');
    const fare = document.getElementById('modalFare');
    const link = document.getElementById('modalBookLink');

    if (type === 'sedan') {
        title.innerText = 'Comfort Prime Sedan';
        img.src = '{{ asset("images/hero_sedan.jpg") }}';
        pax.innerText = '4 Persons';
        bags.innerText = '3 Large Bags';
        fare.innerText = '$35.00 Base';
        link.href = '{{ route("booking") }}?vehicle=sedan';
    } else if (type === 'suv') {
        title.innerText = 'Spacious Family SUV';
        img.src = '{{ asset("images/fleet_suv.jpg") }}';
        pax.innerText = '6 Persons';
        bags.innerText = '5 Large Bags';
        fare.innerText = '$55.00 Base';
        link.href = '{{ route("booking") }}?vehicle=suv';
    } else if (type === 'electric') {
        title.innerText = 'Eco Silent Electric Cab';
        img.src = '{{ asset("images/fleet_electric.jpg") }}';
        pax.innerText = '4 Persons';
        bags.innerText = '3 Large Bags';
        fare.innerText = '$40.00 Base';
        link.href = '{{ route("booking") }}?vehicle=electric';
    } else if (type === 'van') {
        title.innerText = 'Executive Group Van';
        img.src = '{{ asset("images/fleet_van.jpg") }}';
        pax.innerText = '7 Persons';
        bags.innerText = '8-10 Large Bags';
        fare.innerText = '$75.00 Base';
        link.href = '{{ route("booking") }}?vehicle=van';
    }

    modal.classList.remove('hidden');
}

function closeDetailsModal() {
    document.getElementById('detailsModal').classList.add('hidden');
}
</script>
@endpush
