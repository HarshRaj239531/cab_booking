@extends('layouts.app')

@section('title', 'Award-Winning Luxury Chauffeur & Private Mobility')

@section('content')
<!-- HERO SECTION -->
<section class="relative min-h-[92vh] flex items-center justify-center pt-8 pb-20 overflow-hidden">
    <!-- Background Hero Visual with Cinematic Gradient Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/hero_sedan.jpg') }}" alt="Veloce Luxe Mercedes-Maybach Sedan" class="w-full h-full object-cover object-center filter brightness-[0.45] scale-105 transform animate-pulse-subtle">
        <div class="absolute inset-0 bg-gradient-to-t from-[#060709] via-[#060709]/75 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#060709] via-[#060709]/60 to-transparent"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full pt-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Hero Left: Typography & Value Proposition -->
            <div class="lg:col-span-7 space-y-6">
                <!-- Award Tag -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/15 border border-amber-500/30 text-amber-300 text-xs font-semibold tracking-wider uppercase backdrop-blur-md">
                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-ping"></span>
                    <span>Winner: World Luxury Mobility Award 2026</span>
                </div>

                <!-- Main Display Headline -->
                <h1 class="font-display font-extrabold text-4xl sm:text-6xl lg:text-7xl text-white tracking-tight leading-[1.08]">
                    Redefining The <br>
                    <span class="text-gold-gradient font-serif italic font-normal">Art of Arrival</span>
                </h1>

                <!-- Subheadline -->
                <p class="text-slate-300 text-base sm:text-lg max-w-xl leading-relaxed font-light">
                    Step into an oasis of silent electric hyper-sedans, presidential motorcades, and private tarmac aviation transfers. Every reservation is commanded by a certified master chauffeur.
                </p>

                <!-- Key Metrics Ribbon -->
                <div class="grid grid-cols-3 gap-4 pt-4 border-t border-white/[0.1] max-w-lg">
                    <div>
                        <div class="font-display font-bold text-2xl sm:text-3xl text-amber-300">99.98%</div>
                        <div class="text-xs text-slate-400 font-mono uppercase tracking-wider">Punctuality</div>
                    </div>
                    <div>
                        <div class="font-display font-bold text-2xl sm:text-3xl text-white">1,200+</div>
                        <div class="text-xs text-slate-400 font-mono uppercase tracking-wider">Vetted Chauffeurs</div>
                    </div>
                    <div>
                        <div class="font-display font-bold text-2xl sm:text-3xl text-emerald-400">0%</div>
                        <div class="text-xs text-slate-400 font-mono uppercase tracking-wider">Surge Guarantee</div>
                    </div>
                </div>

                <!-- Quick Action Buttons -->
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="{{ route('booking') }}" class="btn-gold px-8 py-3.5 rounded-full text-base font-bold flex items-center gap-3 shadow-xl">
                        <span>Book Instant Chauffeur</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="{{ route('fleet') }}" class="px-6 py-3.5 rounded-full glass-card hover:bg-white/[0.1] text-white text-base font-semibold border border-white/20 transition-all flex items-center gap-2">
                        <span>Explore 2026 Fleet</span>
                        <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            <!-- Hero Right: Interactive Quick-Booking Engine Widget -->
            <div class="lg:col-span-5">
                <div class="glass-card-gold p-6 sm:p-8 rounded-3xl relative overflow-hidden shadow-2xl">
                    <!-- Ambient corner glow -->
                    <div class="absolute -top-16 -right-16 w-40 h-40 bg-amber-500/20 rounded-full blur-3xl pointer-events-none"></div>

                    <!-- Booking Widget Header -->
                    <div class="flex items-center justify-between border-b border-white/[0.08] pb-4 mb-5">
                        <div>
                            <span class="text-xs uppercase font-mono tracking-widest text-amber-400 font-semibold">Immediate Dispatch</span>
                            <h2 class="font-display font-bold text-xl text-white">Instant Chauffeur Quote</h2>
                        </div>
                        <span class="px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 text-xs font-mono font-medium flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-ping"></span>
                            Standby: 4m
                        </span>
                    </div>

                    <!-- Ride Type Selector Tabs -->
                    <div class="grid grid-cols-3 gap-1 bg-black/40 p-1 rounded-xl mb-5 border border-white/[0.06] text-xs">
                        <button type="button" onclick="selectQuickType('point')" id="tabPoint" class="py-2 rounded-lg font-semibold transition-all bg-amber-500/30 text-amber-200 border border-amber-500/40">
                            Point-to-Point
                        </button>
                        <button type="button" onclick="selectQuickType('airport')" id="tabAirport" class="py-2 rounded-lg font-semibold transition-all text-slate-400 hover:text-white">
                            Airport VIP
                        </button>
                        <button type="button" onclick="selectQuickType('hourly')" id="tabHourly" class="py-2 rounded-lg font-semibold transition-all text-slate-400 hover:text-white">
                            By The Hour
                        </button>
                    </div>

                    <!-- Quick Inputs -->
                    <form id="heroBookingForm" class="space-y-4" onsubmit="handleQuickProceed(event)">
                        <!-- Pickup Location -->
                        <div>
                            <label class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-1.5 flex items-center justify-between">
                                <span>Pickup Location</span>
                                <span class="text-[10px] text-amber-400/80 cursor-pointer hover:underline" onclick="setPresetPickup('JFK International Airport Terminal 4')">Use JFK VIP T4</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-amber-400">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                                </div>
                                <input type="text" id="heroPickup" required value="The Plaza Hotel, 5th Avenue, New York" class="w-full pl-10 pr-4 py-2.5 rounded-xl bg-black/50 border border-white/[0.12] text-sm text-white placeholder-slate-500 focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400 transition-all font-medium">
                            </div>
                        </div>

                        <!-- Dropoff Location -->
                        <div>
                            <label class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-1.5 flex items-center justify-between">
                                <span>Destination</span>
                                <span class="text-[10px] text-amber-400/80 cursor-pointer hover:underline" onclick="setPresetDrop('Teterboro Private Airport FBO')">Use Teterboro FBO</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-cyan-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                                </div>
                                <input type="text" id="heroDropoff" required value="JFK International Airport - Terminal 4" class="w-full pl-10 pr-4 py-2.5 rounded-xl bg-black/50 border border-white/[0.12] text-sm text-white placeholder-slate-500 focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400 transition-all font-medium">
                            </div>
                        </div>

                        <!-- Vehicle Tier Quick Dropdown -->
                        <div class="grid grid-cols-2 gap-3">
                            <div>
                                <label class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-1.5">Vehicle Tier</label>
                                <select id="heroVehicleSelect" onchange="updateHeroPriceEstimate()" class="w-full px-3 py-2.5 rounded-xl bg-black/50 border border-white/[0.12] text-xs text-white focus:outline-none focus:border-amber-400 transition-all font-medium">
                                    <option value="maybach" data-price="165">Maybach S-Class ($165)</option>
                                    <option value="lucid" data-price="145">Lucid Air Electric ($145)</option>
                                    <option value="suv" data-price="190">Range Rover SV ($190)</option>
                                    <option value="van" data-price="240">Maybach VIP Van ($240)</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-1.5">Date & Time</label>
                                <input type="datetime-local" id="heroDatetime" value="{{ date('Y-m-d\TH:i', strtotime('+2 hours')) }}" class="w-full px-3 py-2 rounded-xl bg-black/50 border border-white/[0.12] text-xs text-white focus:outline-none focus:border-amber-400 transition-all font-mono">
                            </div>
                        </div>

                        <!-- Live Estimated Fare Display -->
                        <div class="p-3.5 rounded-xl bg-gradient-to-r from-amber-500/10 via-amber-500/5 to-transparent border border-amber-500/25 flex items-center justify-between">
                            <div>
                                <span class="text-[11px] text-slate-400 uppercase tracking-wider font-mono">Guaranteed VIP Quote</span>
                                <div class="flex items-center gap-2">
                                    <span id="heroEstimatedPrice" class="font-display font-bold text-2xl text-amber-300">$165.00</span>
                                    <span class="text-[10px] text-emerald-400 bg-emerald-500/20 px-1.5 py-0.5 rounded font-mono">Toll & Tip Incl.</span>
                                </div>
                            </div>
                            <div class="text-right text-[11px] text-slate-400 font-mono">
                                <div>Est. Distance: ~26.4 km</div>
                                <div>Drive Time: 34 mins</div>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <button type="submit" class="w-full btn-gold py-3.5 rounded-xl text-sm font-bold flex items-center justify-center gap-2 uppercase tracking-wider group shadow-lg">
                            <span>Proceed to Customization</span>
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- LIVE CHAUFFEUR RADAR & SATELLITE DISPATCH SIMULATOR -->
<section class="py-16 relative z-10 border-y border-white/[0.08] bg-[#07090E]/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
            <div>
                <div class="inline-flex items-center gap-2 text-xs font-mono uppercase tracking-widest text-amber-400 mb-2 font-semibold">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                    Global Telematics & Radar Grid
                </div>
                <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-white">Live Metropolitan Chauffeur Radar</h2>
            </div>
            <p class="text-slate-400 text-sm max-w-md">
                Observe live vehicle telemetry across central metropolitan hubs. High-security geofencing and zero-latency GPS dispatch.
            </p>
        </div>

        <!-- Simulated Radar Screen Interface -->
        <div class="glass-card rounded-3xl p-6 lg:p-8 relative overflow-hidden border border-amber-500/20 shadow-2xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                
                <!-- Radar Visual Canvas Simulator -->
                <div class="lg:col-span-7 relative h-72 sm:h-96 rounded-2xl bg-[#090C14] border border-cyan-500/20 overflow-hidden flex items-center justify-center">
                    
                    <!-- Circular Radar Grid Rings -->
                    <div class="absolute w-72 h-72 sm:w-80 sm:h-80 rounded-full border border-cyan-500/20"></div>
                    <div class="absolute w-48 h-48 sm:w-56 sm:h-56 rounded-full border border-cyan-500/25"></div>
                    <div class="absolute w-24 h-24 sm:w-28 sm:h-28 rounded-full border border-cyan-500/30"></div>
                    
                    <!-- Radar Crosshairs -->
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                        <div class="w-full h-px bg-cyan-500/15"></div>
                        <div class="h-full w-px bg-cyan-500/15 absolute"></div>
                    </div>

                    <!-- Rotating Radar Sweep Line -->
                    <div class="absolute w-72 h-72 sm:w-80 sm:h-80 rounded-full overflow-hidden pointer-events-none animate-radar">
                        <div class="w-1/2 h-1/2 bg-gradient-to-br from-cyan-400/25 to-transparent origin-bottom-right"></div>
                    </div>

                    <!-- Center Marker: Client Location -->
                    <div class="relative z-10 flex flex-col items-center">
                        <div class="w-5 h-5 rounded-full bg-amber-400 border-2 border-black flex items-center justify-center shadow-lg shadow-amber-400/50">
                            <span class="w-2 h-2 rounded-full bg-white"></span>
                        </div>
                        <span class="mt-1.5 px-2 py-0.5 rounded bg-black/80 border border-amber-400/40 text-[10px] font-mono text-amber-300 font-bold">VIP CLIENT (YOU)</span>
                    </div>

                    <!-- Simulated Nearby Vehicle Markers with Tooltips -->
                    <div class="absolute top-16 left-24 flex items-center gap-1.5 group cursor-pointer">
                        <div class="w-4 h-4 rounded-full bg-emerald-400 border-2 border-black animate-bounce shadow-md shadow-emerald-400/60"></div>
                        <span class="px-2 py-0.5 rounded bg-black/90 border border-emerald-400/40 text-[10px] font-mono text-emerald-300 whitespace-nowrap">Maybach S-680 • 3m away</span>
                    </div>

                    <div class="absolute bottom-20 right-28 flex items-center gap-1.5 group cursor-pointer">
                        <div class="w-4 h-4 rounded-full bg-emerald-400 border-2 border-black animate-pulse shadow-md shadow-emerald-400/60"></div>
                        <span class="px-2 py-0.5 rounded bg-black/90 border border-emerald-400/40 text-[10px] font-mono text-emerald-300 whitespace-nowrap">Lucid Air EV • 4m away</span>
                    </div>

                    <div class="absolute top-28 right-20 flex items-center gap-1.5 group cursor-pointer">
                        <div class="w-3.5 h-3.5 rounded-full bg-emerald-400/80 border-2 border-black"></div>
                        <span class="px-2 py-0.5 rounded bg-black/90 border border-white/20 text-[10px] font-mono text-slate-300 whitespace-nowrap">Range Rover SV • 6m away</span>
                    </div>

                    <!-- Watermark -->
                    <div class="absolute bottom-3 left-4 text-[10px] font-mono text-cyan-400/60 flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-ping"></span>
                        VELOCE SATELLITE TELEMETRY V4.8 • ENCRYPTED
                    </div>
                </div>

                <!-- Radar Telemetry Stats Feed -->
                <div class="lg:col-span-5 space-y-4">
                    <div class="text-xs font-mono text-slate-400 uppercase tracking-wider">Metropolitan Hub Status</div>
                    <h3 class="font-display font-bold text-2xl text-white">Central Dispatch Ready</h3>
                    
                    <div class="space-y-3 font-mono text-xs">
                        <div class="p-3 rounded-xl bg-white/[0.03] border border-white/[0.08] flex items-center justify-between">
                            <span class="text-slate-400">Average Urban ETA:</span>
                            <span class="text-emerald-400 font-bold">3 mins 48 secs</span>
                        </div>
                        <div class="p-3 rounded-xl bg-white/[0.03] border border-white/[0.08] flex items-center justify-between">
                            <span class="text-slate-400">Active Units on Standby:</span>
                            <span class="text-amber-300 font-bold">142 Luxury Units</span>
                        </div>
                        <div class="p-3 rounded-xl bg-white/[0.03] border border-white/[0.08] flex items-center justify-between">
                            <span class="text-slate-400">Flight Tracked Sync:</span>
                            <span class="text-cyan-400 font-bold">Live FAA / Eurocontrol</span>
                        </div>
                    </div>

                    <p class="text-xs text-slate-400 leading-relaxed font-light">
                        Our private dispatch engine integrates with civil aviation radars to adjust tarmac arrival times automatically if your private or commercial flight arrives early or encounters delay.
                    </p>

                    <a href="{{ route('booking') }}" class="inline-flex items-center gap-2 text-xs font-bold text-amber-300 hover:text-amber-200 uppercase tracking-widest font-mono pt-1">
                        <span>Deploy Chauffeur To Current Coordinates</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- THE 2026 FLEET SHOWCASE -->
<section class="py-24 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <span class="px-3.5 py-1.5 rounded-full bg-amber-500/15 border border-amber-500/30 text-amber-300 text-xs font-mono font-semibold uppercase tracking-wider inline-block">
                Curated Luxury Fleet
            </span>
            <h2 class="font-display font-extrabold text-3xl sm:text-5xl text-white tracking-tight">
                Designed for Discretion & Supreme Comfort
            </h2>
            <p class="text-slate-400 text-base leading-relaxed">
                Handcrafted interiors, acoustic insulation glass, and factory-certified executive appointments. Every vehicle in the Veloce fleet is aged less than 12 months.
            </p>
        </div>

        <!-- 4 Core Showcase Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Fleet Card 1: Mercedes-Maybach S 680 -->
            <div class="glass-card rounded-3xl overflow-hidden group hover:border-amber-500/40 transition-all duration-500 flex flex-col justify-between">
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ asset('images/hero_sedan.jpg') }}" alt="Mercedes-Maybach S 680" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0C0F17] via-transparent to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 rounded-full bg-black/80 backdrop-blur-md border border-amber-500/40 text-amber-300 text-xs font-mono font-semibold">
                            PRESIDENTIAL FIRST CLASS
                        </span>
                    </div>
                    <div class="absolute top-4 right-4 text-right">
                        <span class="text-xs text-slate-300 font-mono block">From</span>
                        <span class="text-xl font-display font-bold text-white">$165<span class="text-xs text-slate-400">/hr</span></span>
                    </div>
                </div>

                <div class="p-6 sm:p-8 space-y-4 flex-grow flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="font-display font-bold text-2xl text-white group-hover:text-amber-300 transition-colors">Mercedes-Maybach S 680</h3>
                            <span class="text-xs text-amber-400 font-mono">Twin-Turbo V12</span>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed mb-4">
                            The gold standard of executive diplomacy. Features executive rear recliners, starlight ceiling, silver champagne flutes, and private intercom.
                        </p>
                        
                        <!-- Specs Badges -->
                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-white/[0.08] text-center text-xs font-mono">
                            <div>
                                <span class="text-slate-400 block text-[10px]">PASSENGERS</span>
                                <span class="text-white font-bold">3 VIP Pax</span>
                            </div>
                            <div>
                                <span class="text-slate-400 block text-[10px]">LUGGAGE</span>
                                <span class="text-white font-bold">3 Cases</span>
                            </div>
                            <div>
                                <span class="text-slate-400 block text-[10px]">CONNECT</span>
                                <span class="text-emerald-400 font-bold">Wi-Fi 7 1Gbps</span>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4 flex items-center justify-between">
                        <a href="{{ route('fleet') }}" class="text-xs font-bold text-slate-300 hover:text-amber-300 transition-colors flex items-center gap-1 font-mono uppercase tracking-wider">
                            <span>Explore Specs</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                        <a href="{{ route('booking') }}?vehicle=maybach" class="btn-gold px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider shadow-md">
                            Reserve Maybach
                        </a>
                    </div>
                </div>
            </div>

            <!-- Fleet Card 2: Range Rover SV Autobiography -->
            <div class="glass-card rounded-3xl overflow-hidden group hover:border-amber-500/40 transition-all duration-500 flex flex-col justify-between">
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ asset('images/fleet_suv.jpg') }}" alt="Range Rover SV Autobiography" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0C0F17] via-transparent to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 rounded-full bg-black/80 backdrop-blur-md border border-cyan-500/40 text-cyan-300 text-xs font-mono font-semibold">
                            EXECUTIVE ESCORT SUV
                        </span>
                    </div>
                    <div class="absolute top-4 right-4 text-right">
                        <span class="text-xs text-slate-300 font-mono block">From</span>
                        <span class="text-xl font-display font-bold text-white">$190<span class="text-xs text-slate-400">/hr</span></span>
                    </div>
                </div>

                <div class="p-6 sm:p-8 space-y-4 flex-grow flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="font-display font-bold text-2xl text-white group-hover:text-amber-300 transition-colors">Range Rover SV Long Wheelbase</h3>
                            <span class="text-xs text-amber-400 font-mono">530 HP Twin-Turbo</span>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed mb-4">
                            Imposing authority with supreme all-weather capability. Equipped with refrigerated center console, motorized club tables, and acoustic privacy glass.
                        </p>
                        
                        <!-- Specs Badges -->
                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-white/[0.08] text-center text-xs font-mono">
                            <div>
                                <span class="text-slate-400 block text-[10px]">PASSENGERS</span>
                                <span class="text-white font-bold">4 VIP Pax</span>
                            </div>
                            <div>
                                <span class="text-slate-400 block text-[10px]">LUGGAGE</span>
                                <span class="text-white font-bold">5 Cases</span>
                            </div>
                            <div>
                                <span class="text-slate-400 block text-[10px]">SECURITY</span>
                                <span class="text-amber-300 font-bold">Level B4 Glass</span>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4 flex items-center justify-between">
                        <a href="{{ route('fleet') }}" class="text-xs font-bold text-slate-300 hover:text-amber-300 transition-colors flex items-center gap-1 font-mono uppercase tracking-wider">
                            <span>Explore Specs</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                        <a href="{{ route('booking') }}?vehicle=suv" class="btn-gold px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider shadow-md">
                            Reserve Range Rover
                        </a>
                    </div>
                </div>
            </div>

            <!-- Fleet Card 3: Lucid Air Sapphire EV -->
            <div class="glass-card rounded-3xl overflow-hidden group hover:border-amber-500/40 transition-all duration-500 flex flex-col justify-between">
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ asset('images/fleet_electric.jpg') }}" alt="Lucid Air Sapphire Electric" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0C0F17] via-transparent to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 rounded-full bg-black/80 backdrop-blur-md border border-emerald-500/40 text-emerald-300 text-xs font-mono font-semibold flex items-center gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                            ZERO EMISSION HYPER-LIMO
                        </span>
                    </div>
                    <div class="absolute top-4 right-4 text-right">
                        <span class="text-xs text-slate-300 font-mono block">From</span>
                        <span class="text-xl font-display font-bold text-white">$145<span class="text-xs text-slate-400">/hr</span></span>
                    </div>
                </div>

                <div class="p-6 sm:p-8 space-y-4 flex-grow flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="font-display font-bold text-2xl text-white group-hover:text-amber-300 transition-colors">Lucid Air Sapphire</h3>
                            <span class="text-xs text-emerald-400 font-mono">1,234 HP Tri-Motor</span>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed mb-4">
                            Whisper-quiet hyper-mobility. 0-100 km/h in 1.89s, active noise cancellation, and sustainably tanned natural grain leather.
                        </p>
                        
                        <!-- Specs Badges -->
                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-white/[0.08] text-center text-xs font-mono">
                            <div>
                                <span class="text-slate-400 block text-[10px]">PASSENGERS</span>
                                <span class="text-white font-bold">3 VIP Pax</span>
                            </div>
                            <div>
                                <span class="text-slate-400 block text-[10px]">RANGE</span>
                                <span class="text-white font-bold">680 km</span>
                            </div>
                            <div>
                                <span class="text-slate-400 block text-[10px]">CABIN NOISE</span>
                                <span class="text-emerald-400 font-bold">&lt; 52 dB Active</span>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4 flex items-center justify-between">
                        <a href="{{ route('fleet') }}" class="text-xs font-bold text-slate-300 hover:text-amber-300 transition-colors flex items-center gap-1 font-mono uppercase tracking-wider">
                            <span>Explore Specs</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                        <a href="{{ route('booking') }}?vehicle=lucid" class="btn-gold px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider shadow-md">
                            Reserve Lucid Air
                        </a>
                    </div>
                </div>
            </div>

            <!-- Fleet Card 4: Maybach VIP Sprinter Jet Van -->
            <div class="glass-card rounded-3xl overflow-hidden group hover:border-amber-500/40 transition-all duration-500 flex flex-col justify-between">
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ asset('images/fleet_van.jpg') }}" alt="Mercedes-Maybach Sprinter VIP Van" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0C0F17] via-transparent to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 rounded-full bg-black/80 backdrop-blur-md border border-purple-500/40 text-purple-300 text-xs font-mono font-semibold">
                            PRIVATE JET ON WHEELS
                        </span>
                    </div>
                    <div class="absolute top-4 right-4 text-right">
                        <span class="text-xs text-slate-300 font-mono block">From</span>
                        <span class="text-xl font-display font-bold text-white">$240<span class="text-xs text-slate-400">/hr</span></span>
                    </div>
                </div>

                <div class="p-6 sm:p-8 space-y-4 flex-grow flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="font-display font-bold text-2xl text-white group-hover:text-amber-300 transition-colors">Maybach VIP Executive Jet Van</h3>
                            <span class="text-xs text-amber-400 font-mono">Custom Coachbuild</span>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed mb-4">
                            Mobile boardroom with 6 captain chairs, 4K video conference display, espresso bar, wardrobe suite, and armored driver divider.
                        </p>
                        
                        <!-- Specs Badges -->
                        <div class="grid grid-cols-3 gap-2 py-3 border-y border-white/[0.08] text-center text-xs font-mono">
                            <div>
                                <span class="text-slate-400 block text-[10px]">PASSENGERS</span>
                                <span class="text-white font-bold">7 VIP Pax</span>
                            </div>
                            <div>
                                <span class="text-slate-400 block text-[10px]">LUGGAGE</span>
                                <span class="text-white font-bold">12 Cases</span>
                            </div>
                            <div>
                                <span class="text-slate-400 block text-[10px]">ENTERTAINMENT</span>
                                <span class="text-purple-300 font-bold">43" OLED Apple TV</span>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4 flex items-center justify-between">
                        <a href="{{ route('fleet') }}" class="text-xs font-bold text-slate-300 hover:text-amber-300 transition-colors flex items-center gap-1 font-mono uppercase tracking-wider">
                            <span>Explore Specs</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                        <a href="{{ route('booking') }}?vehicle=van" class="btn-gold px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider shadow-md">
                            Reserve Jet Van
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center mt-12">
            <a href="{{ route('fleet') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full glass-card hover:border-amber-400 text-sm font-bold uppercase tracking-widest text-amber-300 transition-all">
                <span>View Complete Vehicle Catalog & 360° Specs</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

    </div>
</section>

<!-- THE IN-CABIN SANCTUARY & CHAUFFEUR EXCELLENCE (Interactive Hotspots) -->
<section class="py-24 relative z-10 bg-[#07080C] border-y border-white/[0.08]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left: Interactive Cabin Image with Clickable Hotspots -->
            <div class="lg:col-span-7 relative rounded-3xl overflow-hidden glass-card p-2 group shadow-2xl">
                <img src="{{ asset('images/luxe_interior.jpg') }}" alt="Veloce Luxe First Class Cabin" class="w-full h-auto rounded-2xl object-cover">
                
                <!-- Hotspot 1: Starlight Ceiling -->
                <div class="absolute top-[18%] left-[45%]">
                    <button type="button" onclick="showHotspot('starlight')" class="relative flex items-center justify-center w-8 h-8 rounded-full bg-amber-400 text-black font-bold text-xs shadow-lg shadow-amber-400/50 hover:scale-125 transition-transform" title="Fiber-Optic Starlight Ceiling">
                        <span class="absolute w-12 h-12 rounded-full bg-amber-400/30 animate-ping"></span>
                        ✦
                    </button>
                </div>

                <!-- Hotspot 2: Champagne Bar & Console -->
                <div class="absolute bottom-[28%] right-[32%]">
                    <button type="button" onclick="showHotspot('champagne')" class="relative flex items-center justify-center w-8 h-8 rounded-full bg-amber-400 text-black font-bold text-xs shadow-lg shadow-amber-400/50 hover:scale-125 transition-transform" title="Chilled Champagne & Crystal Flutes">
                        <span class="absolute w-12 h-12 rounded-full bg-amber-400/30 animate-ping"></span>
                        ✦
                    </button>
                </div>

                <!-- Hotspot 3: Infotainment Touchpad -->
                <div class="absolute top-[40%] right-[12%]">
                    <button type="button" onclick="showHotspot('tablet')" class="relative flex items-center justify-center w-8 h-8 rounded-full bg-amber-400 text-black font-bold text-xs shadow-lg shadow-amber-400/50 hover:scale-125 transition-transform" title="Master Climate & Privacy Console">
                        <span class="absolute w-12 h-12 rounded-full bg-amber-400/30 animate-ping"></span>
                        ✦
                    </button>
                </div>

                <!-- Click guidance pill -->
                <div class="absolute bottom-4 left-4 bg-black/80 backdrop-blur-md px-3 py-1.5 rounded-full border border-white/20 text-[11px] font-mono text-amber-300 flex items-center gap-1.5">
                    <span>✦ Tap glowing stars to inspect cabin amenities</span>
                </div>
            </div>

            <!-- Right: Dynamic Details based on Hotspot -->
            <div class="lg:col-span-5 space-y-6">
                <span class="text-xs font-mono uppercase tracking-widest text-amber-400 font-semibold">The Sanctuary Protocol</span>
                <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-white">Every Sensation, Masterfully Orchestrated</h2>

                <!-- Dynamic Hotspot Info Box -->
                <div id="hotspotCard" class="p-6 rounded-2xl bg-white/[0.04] border border-amber-500/30 space-y-3 transition-all duration-300">
                    <div class="flex items-center justify-between">
                        <span id="hotspotBadge" class="px-2.5 py-0.5 rounded-full bg-amber-500/20 text-amber-300 text-[11px] font-mono font-semibold">
                            SIGNATURE FEATURE
                        </span>
                        <span class="text-xs text-slate-400 font-mono">Bespoke In-Cabin</span>
                    </div>
                    <h3 id="hotspotTitle" class="font-display font-bold text-xl text-white">Fiber-Optic Constellation Ceiling</h3>
                    <p id="hotspotDesc" class="text-slate-300 text-sm leading-relaxed">
                        Over 1,340 individually woven fiber-optic lights cast a soothing nocturnal starlight illumination. Configurable with shooting star sequences and bespoke mood tones.
                    </p>
                </div>

                <div class="space-y-4 pt-2">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/30 flex items-center justify-center text-amber-400 shrink-0 font-bold">
                            ✓
                        </div>
                        <div>
                            <h4 class="text-white font-semibold text-sm">Medical-Grade Ionized Air & Acoustic Silence</h4>
                            <p class="text-slate-400 text-xs leading-relaxed">HEPA H14 filtration system circulates clinical-clean air every 90 seconds while acoustic laminated glass eliminates urban decibels.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/30 flex items-center justify-center text-amber-400 shrink-0 font-bold">
                            ✓
                        </div>
                        <div>
                            <h4 class="text-white font-semibold text-sm">Chilled Artisan Beverage Bar</h4>
                            <p class="text-slate-400 text-xs leading-relaxed">Stocked with chilled San Pellegrino, still French Evian, and seasonal Dom Pérignon or Laurent-Perrier flutes upon request.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/30 flex items-center justify-center text-amber-400 shrink-0 font-bold">
                            ✓
                        </div>
                        <div>
                            <h4 class="text-white font-semibold text-sm">Electrically Powered Privacy Divider</h4>
                            <p class="text-slate-400 text-xs leading-relaxed">Electrochromic glass partition switches from crystal transparent to opaque frost with one button for confidential executive briefings.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- MASTER CHAUFFEUR STANDARDS PREVIEW -->
<section class="py-24 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-6 space-y-6">
                <span class="px-3.5 py-1.5 rounded-full bg-cyan-500/15 border border-cyan-500/30 text-cyan-300 text-xs font-mono font-semibold uppercase tracking-wider inline-block">
                    Veloce Academy of Chauffeurs
                </span>
                <h2 class="font-display font-extrabold text-3xl sm:text-5xl text-white tracking-tight">
                    Beyond Drivers: Certified Dignitary Guardians
                </h2>
                <p class="text-slate-300 text-base leading-relaxed font-light">
                    Less than 1.4% of professional drivers qualify for Veloce Luxe. Trained in high-speed evasion techniques, diplomatic protocol, confidentiality non-disclosure, and white-glove etiquette.
                </p>

                <div class="grid grid-cols-2 gap-4 pt-2">
                    <div class="p-4 rounded-2xl glass-card border border-white/[0.08]">
                        <div class="text-amber-400 font-display font-bold text-xl mb-1">5-Tier Background</div>
                        <div class="text-xs text-slate-400 leading-relaxed">Interpol, federal background, and continuous biometric identity audits.</div>
                    </div>
                    <div class="p-4 rounded-2xl glass-card border border-white/[0.08]">
                        <div class="text-cyan-400 font-display font-bold text-xl mb-1">Evasive Driving</div>
                        <div class="text-xs text-slate-400 leading-relaxed">Certified in defensive vehicle dynamics and VIP extraction scenarios.</div>
                    </div>
                </div>

                <div>
                    <a href="{{ route('safety') }}" class="inline-flex items-center gap-2 btn-gold px-6 py-3 rounded-full text-xs font-bold uppercase tracking-widest shadow-lg">
                        <span>Read Our Platinum Safety Protocols</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-6 relative">
                <div class="relative rounded-3xl overflow-hidden glass-card p-2 shadow-2xl">
                    <img src="{{ asset('images/vip_chauffeur.jpg') }}" alt="Veloce Master Chauffeur Service" class="w-full h-auto rounded-2xl object-cover filter brightness-95">
                    
                    <!-- Chauffeur Floating Badge Card -->
                    <div class="absolute bottom-6 left-6 right-6 p-4 rounded-2xl bg-black/85 backdrop-blur-xl border border-amber-500/30 flex items-center justify-between shadow-2xl">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-amber-400 to-amber-600 flex items-center justify-center text-black font-serif font-black text-lg">
                                AV
                            </div>
                            <div>
                                <div class="flex items-center gap-2">
                                    <h4 class="text-white font-bold text-sm">Alexander Vance</h4>
                                    <span class="px-2 py-0.5 rounded bg-amber-500/20 text-amber-300 text-[10px] font-mono font-bold">SENIOR MASTER</span>
                                </div>
                                <p class="text-slate-400 text-xs">11 Yrs Service • English, French, German • 4.99 ★</p>
                            </div>
                        </div>
                        <div class="hidden sm:block text-right">
                            <span class="text-[10px] text-slate-400 font-mono block">Status</span>
                            <span class="text-xs text-emerald-400 font-mono font-bold flex items-center gap-1">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-ping"></span>
                                On Standby JFK
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- PRESS & REPUTATION -->
<section class="py-16 border-t border-white/[0.08] bg-[#06080D]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-xs font-mono uppercase tracking-widest text-slate-500 mb-8">Endorsed By Leading Luxury Publications</p>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center justify-center opacity-70">
            <div class="text-center font-serif text-xl sm:text-2xl text-slate-300 tracking-widest uppercase font-bold hover:text-amber-300 transition-colors">
                Robb Report
            </div>
            <div class="text-center font-display text-xl sm:text-2xl text-slate-300 tracking-wider font-extrabold hover:text-amber-300 transition-colors">
                FORBES LUXURY
            </div>
            <div class="text-center font-serif text-xl sm:text-2xl text-slate-300 italic tracking-wider hover:text-amber-300 transition-colors">
                Financial Times
            </div>
            <div class="text-center font-sans text-xl sm:text-2xl text-slate-300 tracking-widest font-black uppercase hover:text-amber-300 transition-colors">
                BLOOMBERG
            </div>
        </div>
    </div>
</section>

<!-- FREQUENTLY ASKED QUESTIONS ACCORDION -->
<section class="py-24 relative z-10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16 space-y-3">
            <span class="text-xs font-mono uppercase tracking-widest text-amber-400 font-semibold">Concierge Intelligence</span>
            <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-white">Frequently Asked Questions</h2>
            <p class="text-slate-400 text-sm">Everything you need to know about reserving, modifying, and experiencing Veloce Luxe.</p>
        </div>

        <div class="space-y-4">
            <!-- FAQ 1 -->
            <div class="glass-card rounded-2xl border border-white/[0.08] overflow-hidden">
                <button type="button" onclick="toggleFaq(1)" class="w-full p-5 text-left flex items-center justify-between text-white font-semibold text-base hover:text-amber-300 transition-colors">
                    <span>What happens if my private or commercial flight is delayed?</span>
                    <span id="faqIcon1" class="text-amber-400 text-xl font-bold">+</span>
                </button>
                <div id="faqContent1" class="hidden px-5 pb-5 text-sm text-slate-400 leading-relaxed border-t border-white/[0.05] pt-3">
                    We track your flight number in real-time via integrated aviation telemetry. Your chauffeur will automatically adjust arrival coordinates without any penalty or wait fees for up to 90 minutes past the original schedule.
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="glass-card rounded-2xl border border-white/[0.08] overflow-hidden">
                <button type="button" onclick="toggleFaq(2)" class="w-full p-5 text-left flex items-center justify-between text-white font-semibold text-base hover:text-amber-300 transition-colors">
                    <span>Can I request armed or diplomatic security escorts?</span>
                    <span id="faqIcon2" class="text-amber-400 text-xl font-bold">+</span>
                </button>
                <div id="faqContent2" class="hidden px-5 pb-5 text-sm text-slate-400 leading-relaxed border-t border-white/[0.05] pt-3">
                    Yes. We provide certified armed security officers, advance route reconnaissance teams, and armored VR8 / B6 level vehicles for diplomats, celebrities, and corporate leaders upon request through our Concierge Desk.
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="glass-card rounded-2xl border border-white/[0.08] overflow-hidden">
                <button type="button" onclick="toggleFaq(3)" class="w-full p-5 text-left flex items-center justify-between text-white font-semibold text-base hover:text-amber-300 transition-colors">
                    <span>What is the cancellation and itinerary modification policy?</span>
                    <span id="faqIcon3" class="text-amber-400 text-xl font-bold">+</span>
                </button>
                <div id="faqContent3" class="hidden px-5 pb-5 text-sm text-slate-400 leading-relaxed border-t border-white/[0.05] pt-3">
                    Reservations may be cancelled or modified with full 100% refund up to 3 hours prior to scheduled urban pickup, and up to 12 hours prior for long-distance or specialized jet van bookings.
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="glass-card rounded-2xl border border-white/[0.08] overflow-hidden">
                <button type="button" onclick="toggleFaq(4)" class="w-full p-5 text-left flex items-center justify-between text-white font-semibold text-base hover:text-amber-300 transition-colors">
                    <span>Do your chauffeurs sign non-disclosure agreements (NDAs)?</span>
                    <span id="faqIcon4" class="text-amber-400 text-xl font-bold">+</span>
                </button>
                <div id="faqContent4" class="hidden px-5 pb-5 text-sm text-slate-400 leading-relaxed border-t border-white/[0.05] pt-3">
                    Strict confidentiality is legally binding. All Veloce Luxe master chauffeurs have signed comprehensive NDAs. Your conversations, itinerary details, and privacy are inviolable.
                </div>
            </div>
        </div>

    </div>
</section>

<!-- CALL TO ACTION BANNER -->
<section class="py-20 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="glass-card-gold rounded-3xl p-8 sm:p-14 relative overflow-hidden text-center max-w-5xl mx-auto shadow-2xl">
            <div class="absolute -top-20 -left-20 w-60 h-60 bg-amber-500/20 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-20 -right-20 w-60 h-60 bg-cyan-500/20 rounded-full blur-3xl pointer-events-none"></div>

            <span class="text-xs font-mono uppercase tracking-widest text-amber-400 font-bold mb-3 block">
                Privilege of Silent Arrival
            </span>
            <h2 class="font-display font-extrabold text-3xl sm:text-5xl text-white tracking-tight max-w-2xl mx-auto mb-6">
                Your Next Destination Deserves Nothing Less Than Perfection
            </h2>
            <p class="text-slate-300 text-base max-w-xl mx-auto mb-8 font-light leading-relaxed">
                Experience instantaneous dispatch across all major international metropolitan hubs. Zero waiting time, flawless comfort.
            </p>

            <div class="flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('booking') }}" class="btn-gold px-8 py-4 rounded-full text-sm font-bold uppercase tracking-wider flex items-center gap-2 shadow-xl">
                    <span>Initiate Booking Flow</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="{{ route('contact') }}" class="px-8 py-4 rounded-full glass-card hover:bg-white/[0.1] text-white text-sm font-semibold border border-white/20 transition-all">
                    <span>Contact VIP Concierge Desk</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
// Hotspot Switcher Function
function showHotspot(type) {
    const title = document.getElementById('hotspotTitle');
    const desc = document.getElementById('hotspotDesc');
    const badge = document.getElementById('hotspotBadge');

    if (type === 'starlight') {
        badge.innerText = 'STARRY ROOF CEILING';
        title.innerText = 'Fiber-Optic Constellation Ceiling';
        desc.innerText = 'Over 1,340 individually woven fiber-optic lights cast a soothing nocturnal starlight illumination. Configurable with shooting star sequences and bespoke mood tones.';
        window.showToast('Selected: Fiber-Optic Constellation Ceiling');
    } else if (type === 'champagne') {
        badge.innerText = 'BESPOKE HOSPITALITY';
        title.innerText = 'Refrigerated Champagne Cellar';
        desc.innerText = 'Thermoelectric chilled console maintaining 6°C for crystal champagne flutes and artisanal still or sparkling spring waters.';
        window.showToast('Selected: Refrigerated Champagne Console');
    } else if (type === 'tablet') {
        badge.innerText = 'DIGITAL AUTONOMY';
        title.innerText = 'Master Command Touchpad';
        desc.innerText = 'Passenger touchscreen controlling quad-zone climate temperature, massage seat programs, electrochromic partition privacy glass, and Burmester 4D audio.';
        window.showToast('Selected: Master Command Touchpad');
    }
}

// Quick Type Tab Selection
function selectQuickType(type) {
    const tabs = ['tabPoint', 'tabAirport', 'tabHourly'];
    tabs.forEach(t => {
        const el = document.getElementById(t);
        if (el) {
            el.className = 'py-2 rounded-lg font-semibold transition-all text-slate-400 hover:text-white';
        }
    });

    if (type === 'point') {
        document.getElementById('tabPoint').className = 'py-2 rounded-lg font-semibold transition-all bg-amber-500/30 text-amber-200 border border-amber-500/40';
        document.getElementById('heroPickup').value = 'The Plaza Hotel, 5th Avenue, New York';
        document.getElementById('heroDropoff').value = 'JFK International Airport - Terminal 4';
    } else if (type === 'airport') {
        document.getElementById('tabAirport').className = 'py-2 rounded-lg font-semibold transition-all bg-amber-500/30 text-amber-200 border border-amber-500/40';
        document.getElementById('heroPickup').value = 'JFK International Airport - VIP Terminal 4';
        document.getElementById('heroDropoff').value = 'The Mark Hotel, Madison Ave & 77th St';
    } else if (type === 'hourly') {
        document.getElementById('tabHourly').className = 'py-2 rounded-lg font-semibold transition-all bg-amber-500/30 text-amber-200 border border-amber-500/40';
        document.getElementById('heroPickup').value = 'Manhattan Financial District';
        document.getElementById('heroDropoff').value = 'Standby Chauffeur (4 Hours)';
    }
    updateHeroPriceEstimate();
}

function setPresetPickup(val) {
    document.getElementById('heroPickup').value = val;
    window.showToast(`Pickup set to: ${val}`);
    updateHeroPriceEstimate();
}

function setPresetDrop(val) {
    document.getElementById('heroDropoff').value = val;
    window.showToast(`Destination set to: ${val}`);
    updateHeroPriceEstimate();
}

function updateHeroPriceEstimate() {
    const select = document.getElementById('heroVehicleSelect');
    const selectedOption = select.options[select.selectedIndex];
    const basePrice = parseInt(selectedOption.getAttribute('data-price') || 165);
    document.getElementById('heroEstimatedPrice').innerText = `$${basePrice}.00`;
}

function handleQuickProceed(e) {
    e.preventDefault();
    const pickup = encodeURIComponent(document.getElementById('heroPickup').value);
    const dropoff = encodeURIComponent(document.getElementById('heroDropoff').value);
    const vehicle = document.getElementById('heroVehicleSelect').value;
    
    window.showToast('Transferring route to Luxury Booking Engine...');
    setTimeout(() => {
        window.location.href = `{{ route('booking') }}?pickup=${pickup}&dropoff=${dropoff}&vehicle=${vehicle}`;
    }, 400);
}

// FAQ Accordion
function toggleFaq(index) {
    const content = document.getElementById(`faqContent${index}`);
    const icon = document.getElementById(`faqIcon${index}`);
    if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        icon.innerText = '−';
    } else {
        content.classList.add('hidden');
        icon.innerText = '+';
    }
}
</script>
@endpush
