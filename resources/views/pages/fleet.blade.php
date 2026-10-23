@extends('layouts.app')

@section('title', 'The 2026 Fleet | Ultra-Luxury Chauffeur Vehicles')

@section('content')
<!-- FLEET HERO HEADER -->
<section class="py-20 relative overflow-hidden border-b border-white/[0.08] bg-[#07080D]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/15 border border-amber-500/30 text-amber-300 text-xs font-mono font-semibold uppercase tracking-wider mb-4">
            Curated 2026 Collection
        </div>
        <h1 class="font-display font-extrabold text-4xl sm:text-6xl text-white tracking-tight mb-6">
            The Veloce <span class="text-gold-gradient font-serif italic">Fleet Portfolio</span>
        </h1>
        <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto font-light leading-relaxed">
            Every vehicle in our collection is an engineered sanctuary of silence, craftsmanship, and state-of-the-art telematics. Aged under 12 months, sanitized with hospital-grade UV-C protocols before each dispatch.
        </p>

        <!-- Fleet Category Filter Buttons -->
        <div class="flex flex-wrap items-center justify-center gap-2.5 pt-8">
            <button type="button" onclick="filterFleet('all')" id="btnFilterAll" class="px-5 py-2.5 rounded-full text-xs font-bold font-mono uppercase tracking-wider transition-all bg-amber-500 text-black shadow-lg shadow-amber-500/20">
                All Vehicles (6)
            </button>
            <button type="button" onclick="filterFleet('sedan')" id="btnFilterSedan" class="px-5 py-2.5 rounded-full text-xs font-bold font-mono uppercase tracking-wider transition-all glass-card text-slate-300 hover:text-white hover:border-amber-400">
                Presidential Sedans
            </button>
            <button type="button" onclick="filterFleet('suv')" id="btnFilterSuv" class="px-5 py-2.5 rounded-full text-xs font-bold font-mono uppercase tracking-wider transition-all glass-card text-slate-300 hover:text-white hover:border-amber-400">
                Luxury SUVs
            </button>
            <button type="button" onclick="filterFleet('electric')" id="btnFilterElectric" class="px-5 py-2.5 rounded-full text-xs font-bold font-mono uppercase tracking-wider transition-all glass-card text-slate-300 hover:text-white hover:border-amber-400">
                Clean EV Hyper-Cabs
            </button>
            <button type="button" onclick="filterFleet('van')" id="btnFilterVan" class="px-5 py-2.5 rounded-full text-xs font-bold font-mono uppercase tracking-wider transition-all glass-card text-slate-300 hover:text-white hover:border-amber-400">
                Executive Jet Vans
            </button>
        </div>
    </div>
</section>

<!-- FLEET CATALOG GRID -->
<section class="py-20 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="fleetGrid">
            
            <!-- CAR 1: Mercedes-Maybach S 680 -->
            <div class="fleet-item sedan glass-card rounded-3xl overflow-hidden group hover:border-amber-500/50 transition-all duration-500 flex flex-col justify-between">
                <div>
                    <div class="relative h-60 overflow-hidden">
                        <img src="{{ asset('images/hero_sedan.jpg') }}" alt="Mercedes-Maybach S 680" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0B0D15] via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 px-3 py-1 rounded-full bg-black/80 backdrop-blur-md border border-amber-500/40 text-amber-300 text-[10px] font-mono font-bold">
                            PRESIDENTIAL FIRST CLASS
                        </span>
                        <div class="absolute top-4 right-4 text-right">
                            <span class="text-lg font-display font-bold text-white">$165<span class="text-xs text-slate-400">/hr</span></span>
                        </div>
                    </div>

                    <div class="p-6 space-y-4">
                        <div>
                            <div class="flex items-center justify-between mb-1">
                                <h3 class="font-display font-bold text-xl text-white">Mercedes-Maybach S 680</h3>
                                <span class="text-amber-400 text-xs font-mono">621 HP</span>
                            </div>
                            <p class="text-slate-400 text-xs leading-relaxed">
                                Flagship executive limousine with first-class reclining seats, champagne refrigerator, and acoustic privacy partition.
                            </p>
                        </div>

                        <!-- Technical Specs Matrix -->
                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-white/[0.08] text-center text-xs font-mono">
                            <div>
                                <span class="text-slate-500 block text-[9px]">CAPACITY</span>
                                <span class="text-white font-bold">3 Pax</span>
                            </div>
                            <div>
                                <span class="text-slate-500 block text-[9px]">LUGGAGE</span>
                                <span class="text-white font-bold">3 Bags</span>
                            </div>
                            <div>
                                <span class="text-slate-500 block text-[9px]">0-100 KM/H</span>
                                <span class="text-amber-300 font-bold">4.4s</span>
                            </div>
                        </div>

                        <!-- Amenities Chips -->
                        <div class="flex flex-wrap gap-1.5">
                            <span class="px-2 py-0.5 rounded bg-white/[0.04] text-[10px] text-slate-300 border border-white/[0.06]">Acoustic Double Glass</span>
                            <span class="px-2 py-0.5 rounded bg-white/[0.04] text-[10px] text-slate-300 border border-white/[0.06]">Champagne Flutes</span>
                            <span class="px-2 py-0.5 rounded bg-white/[0.04] text-[10px] text-slate-300 border border-white/[0.06]">Wi-Fi 7</span>
                        </div>
                    </div>
                </div>

                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openSpecModal('maybach')" class="w-full py-2.5 rounded-xl glass-card hover:bg-white/[0.1] text-xs font-mono font-bold text-slate-300 hover:text-white uppercase tracking-wider transition-all">
                        View 360° Specifications
                    </button>
                    <a href="{{ route('booking') }}?vehicle=maybach" class="w-full btn-gold py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider text-center block shadow-md">
                        Reserve This Vehicle
                    </a>
                </div>
            </div>

            <!-- CAR 2: Range Rover SV Autobiography -->
            <div class="fleet-item suv glass-card rounded-3xl overflow-hidden group hover:border-amber-500/50 transition-all duration-500 flex flex-col justify-between">
                <div>
                    <div class="relative h-60 overflow-hidden">
                        <img src="{{ asset('images/fleet_suv.jpg') }}" alt="Range Rover SV Autobiography" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0B0D15] via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 px-3 py-1 rounded-full bg-black/80 backdrop-blur-md border border-cyan-500/40 text-cyan-300 text-[10px] font-mono font-bold">
                            LUXURY COMMAND SUV
                        </span>
                        <div class="absolute top-4 right-4 text-right">
                            <span class="text-lg font-display font-bold text-white">$190<span class="text-xs text-slate-400">/hr</span></span>
                        </div>
                    </div>

                    <div class="p-6 space-y-4">
                        <div>
                            <div class="flex items-center justify-between mb-1">
                                <h3 class="font-display font-bold text-xl text-white">Range Rover SV LWB</h3>
                                <span class="text-amber-400 text-xs font-mono">530 HP</span>
                            </div>
                            <p class="text-slate-400 text-xs leading-relaxed">
                                Long-wheelbase executive SUV with electrically deployable club tables, rear footrests, and commanding road presence.
                            </p>
                        </div>

                        <!-- Technical Specs Matrix -->
                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-white/[0.08] text-center text-xs font-mono">
                            <div>
                                <span class="text-slate-500 block text-[9px]">CAPACITY</span>
                                <span class="text-white font-bold">4 Pax</span>
                            </div>
                            <div>
                                <span class="text-slate-500 block text-[9px]">LUGGAGE</span>
                                <span class="text-white font-bold">5 Bags</span>
                            </div>
                            <div>
                                <span class="text-slate-500 block text-[9px]">ALL-TERRAIN</span>
                                <span class="text-cyan-300 font-bold">AWD Air Susp.</span>
                            </div>
                        </div>

                        <!-- Amenities Chips -->
                        <div class="flex flex-wrap gap-1.5">
                            <span class="px-2 py-0.5 rounded bg-white/[0.04] text-[10px] text-slate-300 border border-white/[0.06]">Motorized Club Tables</span>
                            <span class="px-2 py-0.5 rounded bg-white/[0.04] text-[10px] text-slate-300 border border-white/[0.06]">Hot Stone Massage</span>
                            <span class="px-2 py-0.5 rounded bg-white/[0.04] text-[10px] text-slate-300 border border-white/[0.06]">Meridian 3D Sound</span>
                        </div>
                    </div>
                </div>

                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openSpecModal('suv')" class="w-full py-2.5 rounded-xl glass-card hover:bg-white/[0.1] text-xs font-mono font-bold text-slate-300 hover:text-white uppercase tracking-wider transition-all">
                        View 360° Specifications
                    </button>
                    <a href="{{ route('booking') }}?vehicle=suv" class="w-full btn-gold py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider text-center block shadow-md">
                        Reserve This Vehicle
                    </a>
                </div>
            </div>

            <!-- CAR 3: Lucid Air Sapphire EV -->
            <div class="fleet-item electric glass-card rounded-3xl overflow-hidden group hover:border-amber-500/50 transition-all duration-500 flex flex-col justify-between">
                <div>
                    <div class="relative h-60 overflow-hidden">
                        <img src="{{ asset('images/fleet_electric.jpg') }}" alt="Lucid Air Sapphire" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0B0D15] via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 px-3 py-1 rounded-full bg-black/80 backdrop-blur-md border border-emerald-500/40 text-emerald-300 text-[10px] font-mono font-bold">
                            ZERO-EMISSION HYPER-LIMO
                        </span>
                        <div class="absolute top-4 right-4 text-right">
                            <span class="text-lg font-display font-bold text-white">$145<span class="text-xs text-slate-400">/hr</span></span>
                        </div>
                    </div>

                    <div class="p-6 space-y-4">
                        <div>
                            <div class="flex items-center justify-between mb-1">
                                <h3 class="font-display font-bold text-xl text-white">Lucid Air Sapphire</h3>
                                <span class="text-emerald-400 text-xs font-mono">1,234 HP</span>
                            </div>
                            <p class="text-slate-400 text-xs leading-relaxed">
                                The world's fastest ultra-luxury electric sedan. Glass canopy cockpit, carbon-ceramic brakes, and active sound suppression.
                            </p>
                        </div>

                        <!-- Technical Specs Matrix -->
                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-white/[0.08] text-center text-xs font-mono">
                            <div>
                                <span class="text-slate-500 block text-[9px]">CAPACITY</span>
                                <span class="text-white font-bold">3 Pax</span>
                            </div>
                            <div>
                                <span class="text-slate-500 block text-[9px]">LUGGAGE</span>
                                <span class="text-white font-bold">3 Bags</span>
                            </div>
                            <div>
                                <span class="text-slate-500 block text-[9px]">0-100 KM/H</span>
                                <span class="text-emerald-300 font-bold">1.89s</span>
                            </div>
                        </div>

                        <!-- Amenities Chips -->
                        <div class="flex flex-wrap gap-1.5">
                            <span class="px-2 py-0.5 rounded bg-white/[0.04] text-[10px] text-slate-300 border border-white/[0.06]">Panoramic Glass Canopy</span>
                            <span class="px-2 py-0.5 rounded bg-white/[0.04] text-[10px] text-slate-300 border border-white/[0.06]">Active Road Noise Cancel</span>
                            <span class="px-2 py-0.5 rounded bg-white/[0.04] text-[10px] text-slate-300 border border-white/[0.06]">100% Green Energy</span>
                        </div>
                    </div>
                </div>

                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openSpecModal('lucid')" class="w-full py-2.5 rounded-xl glass-card hover:bg-white/[0.1] text-xs font-mono font-bold text-slate-300 hover:text-white uppercase tracking-wider transition-all">
                        View 360° Specifications
                    </button>
                    <a href="{{ route('booking') }}?vehicle=lucid" class="w-full btn-gold py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider text-center block shadow-md">
                        Reserve This Vehicle
                    </a>
                </div>
            </div>

            <!-- CAR 4: Maybach VIP Executive Jet Van -->
            <div class="fleet-item van glass-card rounded-3xl overflow-hidden group hover:border-amber-500/50 transition-all duration-500 flex flex-col justify-between">
                <div>
                    <div class="relative h-60 overflow-hidden">
                        <img src="{{ asset('images/fleet_van.jpg') }}" alt="Maybach VIP Executive Jet Van" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0B0D15] via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 px-3 py-1 rounded-full bg-black/80 backdrop-blur-md border border-purple-500/40 text-purple-300 text-[10px] font-mono font-bold">
                            BOARDROOM JET VAN
                        </span>
                        <div class="absolute top-4 right-4 text-right">
                            <span class="text-lg font-display font-bold text-white">$240<span class="text-xs text-slate-400">/hr</span></span>
                        </div>
                    </div>

                    <div class="p-6 space-y-4">
                        <div>
                            <div class="flex items-center justify-between mb-1">
                                <h3 class="font-display font-bold text-xl text-white">Maybach VIP Executive Jet Van</h3>
                                <span class="text-purple-400 text-xs font-mono">Custom Coach</span>
                            </div>
                            <p class="text-slate-400 text-xs leading-relaxed">
                                Complete private jet experience on wheels. 6 rotating captain chairs, 4K teleconference screen, private dressing suite, and Nespresso bar.
                            </p>
                        </div>

                        <!-- Technical Specs Matrix -->
                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-white/[0.08] text-center text-xs font-mono">
                            <div>
                                <span class="text-slate-500 block text-[9px]">CAPACITY</span>
                                <span class="text-white font-bold">7 Pax</span>
                            </div>
                            <div>
                                <span class="text-slate-500 block text-[9px]">LUGGAGE</span>
                                <span class="text-white font-bold">12 Bags</span>
                            </div>
                            <div>
                                <span class="text-slate-500 block text-[9px]">INTERIOR</span>
                                <span class="text-purple-300 font-bold">Standing Room</span>
                            </div>
                        </div>

                        <!-- Amenities Chips -->
                        <div class="flex flex-wrap gap-1.5">
                            <span class="px-2 py-0.5 rounded bg-white/[0.04] text-[10px] text-slate-300 border border-white/[0.06]">43" OLED Telepresence</span>
                            <span class="px-2 py-0.5 rounded bg-white/[0.04] text-[10px] text-slate-300 border border-white/[0.06]">Artisan Espresso Bar</span>
                            <span class="px-2 py-0.5 rounded bg-white/[0.04] text-[10px] text-slate-300 border border-white/[0.06]">Armored Driver Divider</span>
                        </div>
                    </div>
                </div>

                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openSpecModal('van')" class="w-full py-2.5 rounded-xl glass-card hover:bg-white/[0.1] text-xs font-mono font-bold text-slate-300 hover:text-white uppercase tracking-wider transition-all">
                        View 360° Specifications
                    </button>
                    <a href="{{ route('booking') }}?vehicle=van" class="w-full btn-gold py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider text-center block shadow-md">
                        Reserve This Vehicle
                    </a>
                </div>
            </div>

            <!-- CAR 5: Rolls-Royce Spectre EV -->
            <div class="fleet-item electric sedan glass-card rounded-3xl overflow-hidden group hover:border-amber-500/50 transition-all duration-500 flex flex-col justify-between">
                <div>
                    <div class="relative h-60 overflow-hidden">
                        <img src="{{ asset('images/luxe_interior.jpg') }}" alt="Rolls-Royce Spectre Bespoke" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0B0D15] via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 px-3 py-1 rounded-full bg-black/80 backdrop-blur-md border border-amber-500/40 text-amber-300 text-[10px] font-mono font-bold">
                            ULTRA-LUXURY COUPE-LIMOUSINE
                        </span>
                        <div class="absolute top-4 right-4 text-right">
                            <span class="text-lg font-display font-bold text-white">$275<span class="text-xs text-slate-400">/hr</span></span>
                        </div>
                    </div>

                    <div class="p-6 space-y-4">
                        <div>
                            <div class="flex items-center justify-between mb-1">
                                <h3 class="font-display font-bold text-xl text-white">Rolls-Royce Spectre Bespoke</h3>
                                <span class="text-amber-400 text-xs font-mono">577 HP EV</span>
                            </div>
                            <p class="text-slate-400 text-xs leading-relaxed">
                                The pinnacle of quiet authority. Illuminated fascia with 5,500 starlight clusters and magic carpet planar suspension.
                            </p>
                        </div>

                        <!-- Technical Specs Matrix -->
                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-white/[0.08] text-center text-xs font-mono">
                            <div>
                                <span class="text-slate-500 block text-[9px]">CAPACITY</span>
                                <span class="text-white font-bold">3 Pax</span>
                            </div>
                            <div>
                                <span class="text-slate-500 block text-[9px]">LUGGAGE</span>
                                <span class="text-white font-bold">3 Bags</span>
                            </div>
                            <div>
                                <span class="text-slate-500 block text-[9px]">STARLIGHT</span>
                                <span class="text-amber-300 font-bold">Door Clusters</span>
                            </div>
                        </div>

                        <!-- Amenities Chips -->
                        <div class="flex flex-wrap gap-1.5">
                            <span class="px-2 py-0.5 rounded bg-white/[0.04] text-[10px] text-slate-300 border border-white/[0.06]">Spirit of Ecstasy Chauffeur</span>
                            <span class="px-2 py-0.5 rounded bg-white/[0.04] text-[10px] text-slate-300 border border-white/[0.06]">Wool Carpet Inlays</span>
                            <span class="px-2 py-0.5 rounded bg-white/[0.04] text-[10px] text-slate-300 border border-white/[0.06]">18-Speaker Bespoke Audio</span>
                        </div>
                    </div>
                </div>

                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openSpecModal('maybach')" class="w-full py-2.5 rounded-xl glass-card hover:bg-white/[0.1] text-xs font-mono font-bold text-slate-300 hover:text-white uppercase tracking-wider transition-all">
                        View 360° Specifications
                    </button>
                    <a href="{{ route('booking') }}?vehicle=maybach" class="w-full btn-gold py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider text-center block shadow-md">
                        Reserve This Vehicle
                    </a>
                </div>
            </div>

            <!-- CAR 6: Armored Escalade Presidential VR8 -->
            <div class="fleet-item suv glass-card rounded-3xl overflow-hidden group hover:border-amber-500/50 transition-all duration-500 flex flex-col justify-between">
                <div>
                    <div class="relative h-60 overflow-hidden">
                        <img src="{{ asset('images/fleet_suv.jpg') }}" alt="Armored Escalade Presidential VR8" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0B0D15] via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 px-3 py-1 rounded-full bg-black/80 backdrop-blur-md border border-red-500/40 text-red-300 text-[10px] font-mono font-bold">
                            BALLISTIC VR8 SECURITY
                        </span>
                        <div class="absolute top-4 right-4 text-right">
                            <span class="text-lg font-display font-bold text-white">$320<span class="text-xs text-slate-400">/hr</span></span>
                        </div>
                    </div>

                    <div class="p-6 space-y-4">
                        <div>
                            <div class="flex items-center justify-between mb-1">
                                <h3 class="font-display font-bold text-xl text-white">Armored Escalade VR8 Escort</h3>
                                <span class="text-red-400 text-xs font-mono">Ballistic Armor</span>
                            </div>
                            <p class="text-slate-400 text-xs leading-relaxed">
                                Certified protection against rifle rounds and underbody fragmentation grenades. Run-flat military tires and siren intercom.
                            </p>
                        </div>

                        <!-- Technical Specs Matrix -->
                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-white/[0.08] text-center text-xs font-mono">
                            <div>
                                <span class="text-slate-500 block text-[9px]">CAPACITY</span>
                                <span class="text-white font-bold">4 VIP Pax</span>
                            </div>
                            <div>
                                <span class="text-slate-500 block text-[9px]">LUGGAGE</span>
                                <span class="text-white font-bold">6 Bags</span>
                            </div>
                            <div>
                                <span class="text-slate-500 block text-[9px]">PROTECTION</span>
                                <span class="text-red-400 font-bold">VR8 / CEN B6</span>
                            </div>
                        </div>

                        <!-- Amenities Chips -->
                        <div class="flex flex-wrap gap-1.5">
                            <span class="px-2 py-0.5 rounded bg-white/[0.04] text-[10px] text-slate-300 border border-white/[0.06]">Run-Flat Tires</span>
                            <span class="px-2 py-0.5 rounded bg-white/[0.04] text-[10px] text-slate-300 border border-white/[0.06]">Aux Oxygen Air Supply</span>
                            <span class="px-2 py-0.5 rounded bg-white/[0.04] text-[10px] text-slate-300 border border-white/[0.06]">Tactical Escort Trained</span>
                        </div>
                    </div>
                </div>

                <div class="p-6 pt-0 space-y-2">
                    <button type="button" onclick="openSpecModal('suv')" class="w-full py-2.5 rounded-xl glass-card hover:bg-white/[0.1] text-xs font-mono font-bold text-slate-300 hover:text-white uppercase tracking-wider transition-all">
                        View 360° Specifications
                    </button>
                    <a href="{{ route('booking') }}?vehicle=suv" class="w-full btn-gold py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider text-center block shadow-md">
                        Reserve This Vehicle
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- INTERACTIVE 360° SPEC MODAL -->
<div id="specModal" class="fixed inset-0 z-50 bg-black/90 backdrop-blur-2xl flex items-center justify-center p-4 hidden">
    <div class="glass-card-gold rounded-3xl max-w-3xl w-full p-6 sm:p-8 relative max-h-[90vh] overflow-y-auto">
        <button type="button" onclick="closeSpecModal()" class="absolute top-6 right-6 text-slate-400 hover:text-white text-xl font-mono">✕</button>
        
        <div class="space-y-6">
            <div>
                <span id="modalCategory" class="text-xs font-mono uppercase tracking-widest text-amber-400 font-semibold">Vehicle Technical Dossier</span>
                <h3 id="modalName" class="font-display font-extrabold text-3xl text-white mt-1">Mercedes-Maybach S 680</h3>
            </div>

            <div class="relative h-64 sm:h-80 rounded-2xl overflow-hidden border border-white/[0.1]">
                <img id="modalImg" src="{{ asset('images/hero_sedan.jpg') }}" alt="Vehicle Specs" class="w-full h-full object-cover">
                <div class="absolute bottom-3 left-3 bg-black/80 px-3 py-1 rounded-full text-xs font-mono text-amber-300 border border-amber-500/30">
                    360° Telemetry Verified
                </div>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-center font-mono">
                <div class="p-3 rounded-xl bg-white/[0.04] border border-white/[0.08]">
                    <div class="text-[10px] text-slate-400">POWERTRAIN</div>
                    <div id="modalPower" class="text-sm font-bold text-white mt-1">Twin-Turbo V12</div>
                </div>
                <div class="p-3 rounded-xl bg-white/[0.04] border border-white/[0.08]">
                    <div class="text-[10px] text-slate-400">ACCELERATION</div>
                    <div id="modalAccel" class="text-sm font-bold text-amber-300 mt-1">4.4s (0-100)</div>
                </div>
                <div class="p-3 rounded-xl bg-white/[0.04] border border-white/[0.08]">
                    <div class="text-[10px] text-slate-400">MAX CAPACITY</div>
                    <div id="modalSeats" class="text-sm font-bold text-white mt-1">3 VIP + Chauffeur</div>
                </div>
                <div class="p-3 rounded-xl bg-white/[0.04] border border-white/[0.08]">
                    <div class="text-[10px] text-slate-400">ACOUSTIC RATING</div>
                    <div id="modalNoise" class="text-sm font-bold text-emerald-300 mt-1">&lt; 49 dB at 120km/h</div>
                </div>
            </div>

            <div class="space-y-3">
                <h4 class="text-sm font-bold text-white uppercase tracking-wider font-mono">Standard First-Class Inclusions:</h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs text-slate-300">
                    <div class="flex items-center gap-2">✓ Electrochromic Private Partitions</div>
                    <div class="flex items-center gap-2">✓ Thermoelectric Chilled Beverage Cooler</div>
                    <div class="flex items-center gap-2">✓ Burmester High-End 4D Surround Sound</div>
                    <div class="flex items-center gap-2">✓ HEPA Ionization Medical Air Purification</div>
                    <div class="flex items-center gap-2">✓ Starlink Satellite Encrypted Wi-Fi</div>
                    <div class="flex items-center gap-2">✓ Chauffeur Armed / Diplomatic Certification</div>
                </div>
            </div>

            <div class="flex items-center justify-between pt-4 border-t border-white/[0.08]">
                <div>
                    <span class="text-xs text-slate-400 font-mono block">Hourly Standby</span>
                    <span id="modalPrice" class="font-display font-bold text-2xl text-amber-300">$165 / hour</span>
                </div>
                <a id="modalBookBtn" href="{{ route('booking') }}?vehicle=maybach" class="btn-gold px-8 py-3 rounded-full text-xs font-bold uppercase tracking-wider shadow-lg">
                    Book This Specific Model
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
// Filter Fleet by Category
function filterFleet(category) {
    const buttons = {
        all: document.getElementById('btnFilterAll'),
        sedan: document.getElementById('btnFilterSedan'),
        suv: document.getElementById('btnFilterSuv'),
        electric: document.getElementById('btnFilterElectric'),
        van: document.getElementById('btnFilterVan'),
    };

    // Reset button styles
    Object.keys(buttons).forEach(key => {
        if (buttons[key]) {
            buttons[key].className = 'px-5 py-2.5 rounded-full text-xs font-bold font-mono uppercase tracking-wider transition-all glass-card text-slate-300 hover:text-white hover:border-amber-400';
        }
    });

    // Highlight active button
    if (buttons[category]) {
        buttons[category].className = 'px-5 py-2.5 rounded-full text-xs font-bold font-mono uppercase tracking-wider transition-all bg-amber-500 text-black shadow-lg shadow-amber-500/20';
    }

    const items = document.querySelectorAll('.fleet-item');
    items.forEach(item => {
        if (category === 'all' || item.classList.contains(category)) {
            item.style.display = 'flex';
        } else {
            item.style.display = 'none';
        }
    });

    window.showToast(`Fleet filtered by: ${category.toUpperCase()}`);
}

// 360° Specs Modal Logic
function openSpecModal(type) {
    const modal = document.getElementById('specModal');
    const name = document.getElementById('modalName');
    const img = document.getElementById('modalImg');
    const power = document.getElementById('modalPower');
    const accel = document.getElementById('modalAccel');
    const seats = document.getElementById('modalSeats');
    const noise = document.getElementById('modalNoise');
    const price = document.getElementById('modalPrice');
    const bookBtn = document.getElementById('modalBookBtn');

    if (type === 'maybach') {
        name.innerText = 'Mercedes-Maybach S 680 First Class';
        img.src = '{{ asset("images/hero_sedan.jpg") }}';
        power.innerText = '6.0L Twin-Turbo V12 (621 HP)';
        accel.innerText = '4.4s (0-100 km/h)';
        seats.innerText = '3 VIP + Chauffeur';
        noise.innerText = '< 49 dB at 120km/h';
        price.innerText = '$165 / hour';
        bookBtn.href = '{{ route("booking") }}?vehicle=maybach';
    } else if (type === 'suv') {
        name.innerText = 'Range Rover SV Long Wheelbase';
        img.src = '{{ asset("images/fleet_suv.jpg") }}';
        power.innerText = '4.4L Twin-Turbo V8 (530 HP)';
        accel.innerText = '4.6s (0-100 km/h)';
        seats.innerText = '4 VIP + Chauffeur';
        noise.innerText = '< 51 dB at 120km/h';
        price.innerText = '$190 / hour';
        bookBtn.href = '{{ route("booking") }}?vehicle=suv';
    } else if (type === 'lucid') {
        name.innerText = 'Lucid Air Sapphire Hyper-EV';
        img.src = '{{ asset("images/fleet_electric.jpg") }}';
        power.innerText = 'Tri-Motor Electric (1,234 HP)';
        accel.innerText = '1.89s (0-100 km/h)';
        seats.innerText = '3 VIP + Chauffeur';
        noise.innerText = '< 48 dB (Active Noise Cancel)';
        price.innerText = '$145 / hour';
        bookBtn.href = '{{ route("booking") }}?vehicle=lucid';
    } else if (type === 'van') {
        name.innerText = 'Maybach VIP Executive Jet Van';
        img.src = '{{ asset("images/fleet_van.jpg") }}';
        power.innerText = 'Custom 3.0L Turbo Diesel';
        accel.innerText = 'Smooth Limousine Spec';
        seats.innerText = '7 VIP + 2 Crew';
        noise.innerText = 'Acoustic Partition Wall';
        price.innerText = '$240 / hour';
        bookBtn.href = '{{ route("booking") }}?vehicle=van';
    }

    modal.classList.remove('hidden');
}

function closeSpecModal() {
    document.getElementById('specModal').classList.add('hidden');
}
</script>
@endpush
