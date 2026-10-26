@extends('layouts.app')

@section('title', 'Our Cabs & Transparent Fares | Patna Transport | Boring Road, Patna')

@section('content')
<!-- FLEET HERO HEADER (Light Blue Atmosphere with Golden Accents) -->
<section class="pt-32 sm:pt-36 pb-16 px-6 bg-gradient-to-b from-[#E2EEFB] via-[#F0F6FD] to-[#F0F6FD] border-b border-[#C7E0FA] text-center relative overflow-hidden">
    <!-- Ambient Glows -->
    <div class="absolute top-0 left-1/4 w-80 h-80 bg-sky-400/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-10 right-1/4 w-72 h-72 bg-amber-400/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-4xl mx-auto relative z-10">
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/90 border border-[#C7E0FA] text-[#004E92] text-xs font-bold uppercase tracking-wider mb-4 shadow-sm">
            <span class="w-2 h-2 rounded-full bg-amber-400"></span>
            Safe • Reliable • On-Time Travel Since Years
        </span>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-[#0B172A] mb-4">
            Our Cabs & <span class="text-amber-500">Fixed Fares</span>
        </h1>
        <p class="text-[#475569] text-sm sm:text-base max-w-xl mx-auto font-normal leading-relaxed">
            Patna Transport fleet based at <strong>Boring Road, Patna</strong>. Clean air-conditioned cabs, polite verified drivers, and 100% transparent rates in Indian Rupees with zero hidden surge.
        </p>

        <!-- Category Filter Buttons (Light Blue Pill Style) -->
        <div class="flex flex-wrap items-center justify-center gap-2 pt-8">
            <button type="button" onclick="filterCabs('all')" id="btnFilterAll" class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-[#004E92] text-white shadow-md">
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
                7-Seaters & Vans
            </button>
        </div>
    </div>
</section>

<!-- FLEET CATALOG GRID -->
<section class="py-16 px-6 bg-[#F0F6FD]">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="fleetContainer">
            
            <!-- CAB 1: Maruti Suzuki Dzire -->
            <div class="cab-card sedan card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/hero_sedan.jpg') }}" alt="Maruti Suzuki Dzire" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-white/95 border border-[#C7E0FA] px-3 py-1 rounded-full text-xs font-bold text-[#0B172A] shadow-sm">
                            ⭐ CITY & AIRPORT FAVORITE
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-xl font-bold text-[#0B172A]">Maruti Suzuki Dzire</h3>
                            <span class="text-xl font-bold text-amber-600">₹11 <span class="text-xs text-slate-500 font-sans">/ KM</span></span>
                        </div>
                        <p class="text-xs text-[#475569] mb-4">Quiet, air-conditioned sedan. Ideal for Patna Airport (PAT) transfers, Boring Road, and daily city travel.</p>

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
                                <span class="text-[10px] text-[#64748B] block">BASE FARE</span>
                                <span class="font-bold text-[#004E92]">₹899</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Chilled AC</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Bottled Water</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Phone Charger</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('sedan')" class="btn-outline-blue w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="tel:8877177161" class="btn-gold w-full py-2.5 text-xs block text-center font-bold shadow-md">
                        📞 Call to Book Dzire
                    </a>
                </div>
            </div>

            <!-- CAB 2: Mahindra Scorpio Classic -->
            <div class="cab-card suv card-clean overflow-hidden flex flex-col justify-between border-2 border-sky-300">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/fleet_suv.jpg') }}" alt="Mahindra Scorpio Classic" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-[#004E92] text-white px-3 py-1 rounded-full text-xs font-bold shadow-md">
                            👑 HIGHWAY KING
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-xl font-bold text-[#0B172A]">Mahindra Scorpio</h3>
                            <span class="text-xl font-bold text-amber-600">₹16 <span class="text-xs text-slate-500 font-sans">/ KM</span></span>
                        </div>
                        <p class="text-xs text-[#475569] mb-4">Commanding presence and high road clearance. Perfect for outstation Bihar trips, Bodh Gaya, and weddings.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#E1EFFD] text-center text-xs text-[#475569]">
                            <div>
                                <span class="text-[10px] text-[#64748B] block">SEATING</span>
                                <span class="font-bold text-[#0B172A]">7 Seats</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">LUGGAGE</span>
                                <span class="font-bold text-[#0B172A]">5 Bags</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">BASE FARE</span>
                                <span class="font-bold text-[#004E92]">₹1,499</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Rear AC Vents</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Rugged Suspension</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Highway Certified</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('suv')" class="btn-outline-blue w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="tel:8877177161" class="btn-gold w-full py-2.5 text-xs block text-center font-bold shadow-md">
                        📞 Call to Book Scorpio
                    </a>
                </div>
            </div>

            <!-- CAB 3: Maruti Suzuki Ertiga -->
            <div class="cab-card van card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/fleet_electric.jpg') }}" alt="Maruti Suzuki Ertiga" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-amber-500 text-slate-900 px-3 py-1 rounded-full text-xs font-bold shadow-sm">
                            👥 7-SEATER FAMILY
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-xl font-bold text-[#0B172A]">Maruti Suzuki Ertiga</h3>
                            <span class="text-xl font-bold text-amber-600">₹14 <span class="text-xs text-slate-500 font-sans">/ KM</span></span>
                        </div>
                        <p class="text-xs text-[#475569] mb-4">Comfortable 7-seater MPV with dual AC. Ideal for family airport runs and group travel in Bihar.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#E1EFFD] text-center text-xs text-[#475569]">
                            <div>
                                <span class="text-[10px] text-[#64748B] block">SEATING</span>
                                <span class="font-bold text-[#0B172A]">7 Seats</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">LUGGAGE</span>
                                <span class="font-bold text-[#0B172A]">4 Bags</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">BASE FARE</span>
                                <span class="font-bold text-[#004E92]">₹1,299</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Dual Blower AC</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Flexible Seats</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Smooth Ride</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('van')" class="btn-outline-blue w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="tel:8877177161" class="btn-gold w-full py-2.5 text-xs block text-center font-bold shadow-md">
                        📞 Call to Book Ertiga
                    </a>
                </div>
            </div>

            <!-- CAB 4: Toyota Innova Crysta -->
            <div class="cab-card suv card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/luxe_interior.jpg') }}" alt="Toyota Innova Crysta" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-white/95 border border-[#C7E0FA] px-3 py-1 rounded-full text-xs font-bold text-[#0B172A] shadow-sm">
                            💼 VIP CHAUFFEUR
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-xl font-bold text-[#0B172A]">Toyota Innova Crysta</h3>
                            <span class="text-xl font-bold text-amber-600">₹18 <span class="text-xs text-slate-500 font-sans">/ KM</span></span>
                        </div>
                        <p class="text-xs text-[#475569] mb-4">Plush captain seats, supreme legroom, and refined highway cruise for VIP corporate and wedding travel.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#E1EFFD] text-center text-xs text-[#475569]">
                            <div>
                                <span class="text-[10px] text-[#64748B] block">SEATING</span>
                                <span class="font-bold text-[#0B172A]">7 Seats</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">LUGGAGE</span>
                                <span class="font-bold text-[#0B172A]">6 Bags</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">BASE FARE</span>
                                <span class="font-bold text-[#004E92]">₹1,699</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Captain Chairs</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Individual AC</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Top-Rated Driver</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('innova')" class="btn-outline-blue w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="tel:8877177161" class="btn-gold w-full py-2.5 text-xs block text-center font-bold shadow-md">
                        📞 Call to Book Innova
                    </a>
                </div>
            </div>

            <!-- CAB 5: Tata Tigor EV -->
            <div class="cab-card electric card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/electric_hyper.jpg') }}" alt="Tata Tigor EV" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-emerald-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-sm">
                            ⚡ GREEN ELECTRIC
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-xl font-bold text-[#0B172A]">Tata Tigor EV (Electric)</h3>
                            <span class="text-xl font-bold text-amber-600">₹12 <span class="text-xs text-slate-500 font-sans">/ KM</span></span>
                        </div>
                        <p class="text-xs text-[#475569] mb-4">Zero noise, eco-friendly electric cab for smooth travel across Patna city streets with instant climate AC.</p>

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
                                <span class="text-[10px] text-[#64748B] block">BASE FARE</span>
                                <span class="font-bold text-[#004E92]">₹999</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Silent Drive</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Eco Friendly</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Instant AC</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('electric')" class="btn-outline-blue w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="tel:8877177161" class="btn-gold w-full py-2.5 text-xs block text-center font-bold shadow-md">
                        📞 Call to Book Electric
                    </a>
                </div>
            </div>

            <!-- CAB 6: Executive Tour Traveler / Van -->
            <div class="cab-card van card-clean overflow-hidden flex flex-col justify-between">
                <div>
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/fleet_van.jpg') }}" alt="Executive Tour Traveler" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-white/95 border border-[#C7E0FA] px-3 py-1 rounded-full text-xs font-bold text-[#0B172A] shadow-sm">
                            🚌 GROUP & WEDDINGS
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-xl font-bold text-[#0B172A]">Executive Tour Traveler</h3>
                            <span class="text-xl font-bold text-amber-600">₹22 <span class="text-xs text-slate-500 font-sans">/ KM</span></span>
                        </div>
                        <p class="text-xs text-[#475569] mb-4">High roof, spacious seats, and huge boot space. Built for family tours to Bodh Gaya, Rajgir, and wedding parties.</p>

                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-[#E1EFFD] text-center text-xs text-[#475569]">
                            <div>
                                <span class="text-[10px] text-[#64748B] block">SEATING</span>
                                <span class="font-bold text-[#0B172A]">12 Seats</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">LUGGAGE</span>
                                <span class="font-bold text-[#0B172A]">10+ Bags</span>
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] block">BASE FARE</span>
                                <span class="font-bold text-[#004E92]">₹2,499</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1.5 pt-3">
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">High Ceiling</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Huge Luggage Boot</span>
                            <span class="px-2.5 py-1 rounded-full bg-[#F0F6FD] text-[11px] text-[#334155] border border-[#C7E0FA]">Bihar Tour Special</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openDetailsModal('traveler')" class="btn-outline-blue w-full py-2.5 text-xs block text-center">
                        View Details & Features
                    </button>
                    <a href="tel:8877177161" class="btn-gold w-full py-2.5 text-xs block text-center font-bold shadow-md">
                        📞 Call to Book Traveler
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
            <h4 class="text-xs font-bold uppercase tracking-wider text-[#0B172A]">What's Included with Patna Transport:</h4>
            <ul class="text-xs text-[#475569] space-y-1.5 font-medium">
                <li>✓ 100% Sanitized and cleaned interior before every trip</li>
                <li>✓ Verified, background-checked polite commercial driver</li>
                <li>✓ Working Chilled AC guaranteed on every ride</li>
                <li>✓ Free cancellation up to 1 hour before pickup</li>
            </ul>
        </div>

        <div class="flex items-center justify-between pt-4 border-t border-[#E1EFFD]">
            <button type="button" onclick="closeDetailsModal()" class="btn-outline-blue px-6 py-2.5 text-xs">Close</button>
            <a id="modalBookLink" href="tel:8877177161" class="btn-gold px-8 py-2.5 text-xs font-bold shadow-md">
                📞 Call to Book Now: 8877177161
            </a>
        </div>
    </div>
</div>

<!-- CALL & BOOKING STRIP -->
<section class="py-16 px-6 bg-white border-t border-[#C7E0FA]">
    <div class="max-w-5xl mx-auto p-8 sm:p-12 rounded-[2.5rem] bg-gradient-to-r from-[#002244] via-[#003B73] to-[#004E92] text-white flex flex-col sm:flex-row items-center justify-between gap-6 shadow-xl border border-sky-400/20">
        <div class="text-center sm:text-left space-y-2">
            <span class="text-amber-400 text-xs font-bold uppercase tracking-wider block">Safe • Reliable • On-Time Travel Since Years</span>
            <h3 class="text-2xl sm:text-3xl font-bold">Need a Cab in Patna Right Now?</h3>
            <p class="text-xs sm:text-sm text-sky-200">Local rides, Jay Prakash Narayan Airport (PAT) transfers, or outstation tours across Bihar.</p>
            <div class="flex flex-wrap items-center gap-3 text-xs text-sky-200 font-semibold pt-1">
                <span>📍 Boring Road, Patna</span>
                <span>•</span>
                <span>⚡ 3-5 Min Pickup</span>
                <span>•</span>
                <span>₹ Fixed Fares</span>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row items-center gap-3 shrink-0">
            <a href="tel:8877177161" class="btn-gold px-8 py-4 text-xs font-bold flex items-center gap-2 shadow-lg">
                <span>📞 CALL 24x7: 8877177161</span>
            </a>
            <a href="{{ route('contact') }}" class="btn-outline-blue border-white/30 text-white hover:text-slate-900 px-6 py-4 text-xs font-bold">
                <span>Contact & Office</span>
            </a>
        </div>
    </div>
</section>
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
        buttons[category].className = 'px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-[#004E92] text-white shadow-md';
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
        title.innerText = 'Maruti Suzuki Dzire';
        img.src = '{{ asset("images/hero_sedan.jpg") }}';
        pax.innerText = '4 Persons';
        bags.innerText = '3 Bags';
        fare.innerText = '₹899 Base (₹11/KM)';
    link.href = 'tel:8877177161';
    }

    modal.classList.remove('hidden');
}

function closeDetailsModal() {
    document.getElementById('detailsModal').classList.add('hidden');
}
</script>
@endpush
