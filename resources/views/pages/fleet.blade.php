@extends('layouts.app')

@section('title', 'Our Cabs & Transparent Fares')

@section('content')
<!-- FLEET HERO HEADER -->
<section class="py-16 px-6 bg-[#EAF0E5] border-b border-[#D8E2D5] text-center">
    <div class="max-w-4xl mx-auto">
        <span class="inline-block px-4 py-1.5 rounded-full bg-white/80 border border-[#D8E2D5] text-[#355E3B] text-xs font-semibold uppercase tracking-wider mb-4 shadow-sm">
            Spotless & Well-Maintained Cabs
        </span>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-serif text-[#1A3320] mb-4">
            Our Cabs & <span class="text-emerald-700 italic">Clear Fares</span>
        </h1>
        <p class="text-[#4A6350] text-sm sm:text-base max-w-xl mx-auto font-light leading-relaxed">
            Choose the right cab for your journey. Clean interiors, working AC, polite verified drivers, and transparent pricing with zero hidden charges.
        </p>

        <!-- Category Filter Buttons (Yoga Pill Style) -->
        <div class="flex flex-wrap items-center justify-center gap-2 pt-8">
            <button type="button" onclick="filterCabs('all')" id="btnFilterAll" class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-[#1A3320] text-white shadow-md">
                All Cabs (6)
            </button>
            <button type="button" onclick="filterCabs('sedan')" id="btnFilterSedan" class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-white border border-[#D8E2D5] text-[#355E3B] hover:bg-[#F5F7F3]">
                Sedans
            </button>
            <button type="button" onclick="filterCabs('suv')" id="btnFilterSuv" class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-white border border-[#D8E2D5] text-[#355E3B] hover:bg-[#F5F7F3]">
                SUVs
            </button>
            <button type="button" onclick="filterCabs('electric')" id="btnFilterElectric" class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-white border border-[#D8E2D5] text-[#355E3B] hover:bg-[#F5F7F3]">
                Electric Cabs
            </button>
            <button type="button" onclick="filterCabs('van')" id="btnFilterVan" class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-white border border-[#D8E2D5] text-[#355E3B] hover:bg-[#F5F7F3]">
                Family Vans
            </button>
        </div>
    </div>
</section>

<!-- FLEET CATALOG GRID -->
<section class="py-16 px-6 bg-[#F5F7F3]">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="fleetContainer">
            
            <!-- CAB 1: Comfort Sedan -->
            <div class="cab-card sedan card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/hero_sedan.jpg') }}" alt="Comfort Sedan" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-white/95 px-3 py-1 rounded-full text-xs font-bold text-[#1A3320] shadow-sm">
                            CITY FAVORITE
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="font-serif text-xl font-bold text-[#1A3320]">Prime Comfort Sedan</h3>
                            <span class="text-xl font-bold text-emerald-700">$35 <span class="text-xs text-[#5C7562]">base</span></span>
                        </div>
                        <p class="text-xs text-[#4A6350] mb-4">Comfortable 4-seater sedan. Perfect for city rides, business commutes, and station drops.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#EAF0E5] text-center text-xs text-[#4A6350]">
                            <div>
                                <span class="text-[10px] text-[#7A9C76] block">SEATING</span>
                                <span class="font-bold text-[#1A3320]">4 Seats</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#7A9C76] block">LUGGAGE</span>
                                <span class="font-bold text-[#1A3320]">3 Bags</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#7A9C76] block">PER KM</span>
                                <span class="font-bold text-emerald-700">$1.20</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F8FAF6] text-[11px] text-[#4A6350] border border-[#DCE5D9]">Dual AC</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F8FAF6] text-[11px] text-[#4A6350] border border-[#DCE5D9]">Clean Bottled Water</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F8FAF6] text-[11px] text-[#4A6350] border border-[#DCE5D9]">USB Mobile Charger</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('sedan')" class="btn-outline w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="{{ route('booking') }}?vehicle=sedan" class="btn-primary w-full py-2.5 text-xs block text-center">
                        Book This Cab
                    </a>
                </div>
            </div>

            <!-- CAB 2: Spacious SUV -->
            <div class="cab-card suv card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/fleet_suv.jpg') }}" alt="Spacious SUV" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-white/95 px-3 py-1 rounded-full text-xs font-bold text-[#1A3320] shadow-sm">
                            FAMILY & AIRPORT
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="font-serif text-xl font-bold text-[#1A3320]">Spacious Family SUV</h3>
                            <span class="text-xl font-bold text-emerald-700">$55 <span class="text-xs text-[#5C7562]">base</span></span>
                        </div>
                        <p class="text-xs text-[#4A6350] mb-4">Big trunk space and ample legroom. Best for airport runs and outstation trips with family.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#EAF0E5] text-center text-xs text-[#4A6350]">
                            <div>
                                <span class="text-[10px] text-[#7A9C76] block">SEATING</span>
                                <span class="font-bold text-[#1A3320]">6 Seats</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#7A9C76] block">LUGGAGE</span>
                                <span class="font-bold text-[#1A3320]">5 Large Bags</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#7A9C76] block">PER KM</span>
                                <span class="font-bold text-emerald-700">$1.60</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F8FAF6] text-[11px] text-[#4A6350] border border-[#DCE5D9]">Rear AC Vents</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F8FAF6] text-[11px] text-[#4A6350] border border-[#DCE5D9]">Reclining Seats</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F8FAF6] text-[11px] text-[#4A6350] border border-[#DCE5D9]">Highway Certified</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('suv')" class="btn-outline w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="{{ route('booking') }}?vehicle=suv" class="btn-primary w-full py-2.5 text-xs block text-center">
                        Book This Cab
                    </a>
                </div>
            </div>

            <!-- CAB 3: Eco Electric Cab -->
            <div class="cab-card electric card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/fleet_electric.jpg') }}" alt="Eco Electric Cab" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-emerald-600 text-white px-3 py-1 rounded-full text-xs font-bold shadow-sm">
                            🌱 ZERO NOISE
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="font-serif text-xl font-bold text-[#1A3320]">Eco Electric Cab</h3>
                            <span class="text-xl font-bold text-emerald-700">$40 <span class="text-xs text-[#5C7562]">base</span></span>
                        </div>
                        <p class="text-xs text-[#4A6350] mb-4">Silent, smooth, and 100% green energy. Glide through traffic with zero tailpipe emissions.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#EAF0E5] text-center text-xs text-[#4A6350]">
                            <div>
                                <span class="text-[10px] text-[#7A9C76] block">SEATING</span>
                                <span class="font-bold text-[#1A3320]">4 Seats</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#7A9C76] block">LUGGAGE</span>
                                <span class="font-bold text-[#1A3320]">3 Bags</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#7A9C76] block">PER KM</span>
                                <span class="font-bold text-emerald-700">$1.30</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F8FAF6] text-[11px] text-[#4A6350] border border-[#DCE5D9]">Zero Engine Noise</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F8FAF6] text-[11px] text-[#4A6350] border border-[#DCE5D9]">Eco Green Ride</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F8FAF6] text-[11px] text-[#4A6350] border border-[#DCE5D9]">Super Fast AC</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('electric')" class="btn-outline w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="{{ route('booking') }}?vehicle=electric" class="btn-primary w-full py-2.5 text-xs block text-center">
                        Book This Cab
                    </a>
                </div>
            </div>

            <!-- CAB 4: Family Group Van -->
            <div class="cab-card van card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/fleet_van.jpg') }}" alt="Family Van" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-white/95 px-3 py-1 rounded-full text-xs font-bold text-[#1A3320] shadow-sm">
                            LARGE GROUP TRAVEL
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="font-serif text-xl font-bold text-[#1A3320]">Executive Travel Van</h3>
                            <span class="text-xl font-bold text-emerald-700">$75 <span class="text-xs text-[#5C7562]">base</span></span>
                        </div>
                        <p class="text-xs text-[#4A6350] mb-4">Travel together with your entire group. Extra luggage space, high roof, and comfortable individual seats.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#EAF0E5] text-center text-xs text-[#4A6350]">
                            <div>
                                <span class="text-[10px] text-[#7A9C76] block">SEATING</span>
                                <span class="font-bold text-[#1A3320]">7 Seats</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#7A9C76] block">LUGGAGE</span>
                                <span class="font-bold text-[#1A3320]">8-10 Bags</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#7A9C76] block">PER KM</span>
                                <span class="font-bold text-emerald-700">$2.10</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F8FAF6] text-[11px] text-[#4A6350] border border-[#DCE5D9]">High Ceiling</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F8FAF6] text-[11px] text-[#4A6350] border border-[#DCE5D9]">Big Luggage Boot</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F8FAF6] text-[11px] text-[#4A6350] border border-[#DCE5D9]">Group Tour Special</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('van')" class="btn-outline w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="{{ route('booking') }}?vehicle=van" class="btn-primary w-full py-2.5 text-xs block text-center">
                        Book This Cab
                    </a>
                </div>
            </div>

            <!-- CAB 5: Executive Business Sedan -->
            <div class="cab-card sedan card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/luxe_interior.jpg') }}" alt="Executive Business Sedan" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-white/95 px-3 py-1 rounded-full text-xs font-bold text-[#1A3320] shadow-sm">
                            BUSINESS EXECUTIVE
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="font-serif text-xl font-bold text-[#1A3320]">Executive Business Class</h3>
                            <span class="text-xl font-bold text-emerald-700">$60 <span class="text-xs text-[#5C7562]">base</span></span>
                        </div>
                        <p class="text-xs text-[#4A6350] mb-4">Premium leather seats, laptop charger ports, and high-speed Wi-Fi. Designed for work on the move.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#EAF0E5] text-center text-xs text-[#4A6350]">
                            <div>
                                <span class="text-[10px] text-[#7A9C76] block">SEATING</span>
                                <span class="font-bold text-[#1A3320]">3-4 Seats</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#7A9C76] block">LUGGAGE</span>
                                <span class="font-bold text-[#1A3320]">3 Bags</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#7A9C76] block">PER KM</span>
                                <span class="font-bold text-emerald-700">$1.80</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F8FAF6] text-[11px] text-[#4A6350] border border-[#DCE5D9]">Free Wi-Fi</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F8FAF6] text-[11px] text-[#4A6350] border border-[#DCE5D9]">Laptop Power</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F8FAF6] text-[11px] text-[#4A6350] border border-[#DCE5D9]">Top-Rated Driver</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('sedan')" class="btn-outline w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="{{ route('booking') }}?vehicle=sedan" class="btn-primary w-full py-2.5 text-xs block text-center">
                        Book This Cab
                    </a>
                </div>
            </div>

            <!-- CAB 6: Outstation Cruiser SUV -->
            <div class="cab-card suv card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/vip_chauffeur.jpg') }}" alt="Outstation Cruiser SUV" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-white/95 px-3 py-1 rounded-full text-xs font-bold text-[#1A3320] shadow-sm">
                            LONG DISTANCE
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="font-serif text-xl font-bold text-[#1A3320]">Outstation Cruiser SUV</h3>
                            <span class="text-xl font-bold text-emerald-700">$65 <span class="text-xs text-[#5C7562]">base</span></span>
                        </div>
                        <p class="text-xs text-[#4A6350] mb-4">Built for long journeys. Extra fuel range, soft suspension, experienced highway drivers.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#EAF0E5] text-center text-xs text-[#4A6350]">
                            <div>
                                <span class="text-[10px] text-[#7A9C76] block">SEATING</span>
                                <span class="font-bold text-[#1A3320]">6 Seats</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#7A9C76] block">LUGGAGE</span>
                                <span class="font-bold text-[#1A3320]">6 Bags</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#7A9C76] block">PER KM</span>
                                <span class="font-bold text-emerald-700">$1.75</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F8FAF6] text-[11px] text-[#4A6350] border border-[#DCE5D9]">Emergency Kit</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F8FAF6] text-[11px] text-[#4A6350] border border-[#DCE5D9]">Highway Toll Pass</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F8FAF6] text-[11px] text-[#4A6350] border border-[#DCE5D9]">Roof Carrier</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('suv')" class="btn-outline w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="{{ route('booking') }}?vehicle=suv" class="btn-primary w-full py-2.5 text-xs block text-center">
                        Book This Cab
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- MODAL: CAB DETAILS MODAL (Yoga Style Modal) -->
<div id="detailsModal" class="fixed inset-0 z-[120] bg-black/50 backdrop-blur-md flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-[2rem] border border-[#D8E2D5] max-w-xl w-full p-6 sm:p-8 relative shadow-2xl space-y-6">
        <button type="button" onclick="closeDetailsModal()" class="absolute top-5 right-5 text-[#5C7562] hover:text-[#1A3320] text-xl font-bold">✕</button>
        
        <div>
            <span id="modalCategoryTag" class="text-xs font-bold uppercase tracking-wider text-emerald-700 block">Cab Specifications</span>
            <h3 id="modalTitle" class="font-serif text-2xl font-bold text-[#1A3320] mt-1">Comfort Prime Sedan</h3>
        </div>

        <div class="h-48 rounded-2xl overflow-hidden border border-[#E1EAE1]">
            <img id="modalImage" src="{{ asset('images/hero_sedan.jpg') }}" alt="Cab Preview" class="w-full h-full object-cover">
        </div>

        <div class="grid grid-cols-3 gap-3 text-center text-xs">
            <div class="p-3 rounded-2xl bg-[#F8FAF6] border border-[#E1EAE1]">
                <span class="text-[#7A9C76] block text-[10px]">PASSENGERS</span>
                <span id="modalPax" class="font-bold text-[#1A3320]">4 Persons</span>
            </div>
            <div class="p-3 rounded-2xl bg-[#F8FAF6] border border-[#E1EAE1]">
                <span class="text-[#7A9C76] block text-[10px]">LUGGAGE</span>
                <span id="modalBags" class="font-bold text-[#1A3320]">3 Large Bags</span>
            </div>
            <div class="p-3 rounded-2xl bg-[#F8FAF6] border border-[#E1EAE1]">
                <span class="text-[#7A9C76] block text-[10px]">BASE FARE</span>
                <span id="modalFare" class="font-bold text-emerald-700 text-sm">$35.00</span>
            </div>
        </div>

        <div class="space-y-2">
            <h4 class="text-xs font-bold uppercase tracking-wider text-[#1A3320]">What's Included:</h4>
            <ul class="text-xs text-[#4A6350] space-y-1.5">
                <li>✓ 100% Sanitized and cleaned interior before every trip</li>
                <li>✓ Verified, background-checked polite driver</li>
                <li>✓ Automatic digital route and live trip tracking</li>
                <li>✓ Free cancellation up to 1 hour before pickup</li>
            </ul>
        </div>

        <div class="flex items-center justify-between pt-4 border-t border-[#E1EAE1]">
            <button type="button" onclick="closeDetailsModal()" class="btn-outline px-6 py-2.5 text-xs">Close</button>
            <a id="modalBookLink" href="{{ route('booking') }}?vehicle=sedan" class="btn-emerald px-8 py-2.5 text-xs font-semibold">
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
            buttons[k].className = 'px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-white border border-[#D8E2D5] text-[#355E3B] hover:bg-[#F5F7F3]';
        }
    });

    if (buttons[category]) {
        buttons[category].className = 'px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-[#1A3320] text-white shadow-md';
    }

    const cards = document.querySelectorAll('.cab-card');
    cards.forEach(c => {
        if (category === 'all' || c.classList.contains(category)) {
            c.style.display = 'flex';
        } else {
            c.style.display = 'none';
        }
    });

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
        title.innerText = 'Eco Green Electric Cab';
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
