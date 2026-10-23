@extends('layouts.app')

@section('title', 'Bespoke Chauffeur Reservation & Live Fare Calculator')

@section('content')
<section class="py-16 relative z-10 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
            <span class="px-3.5 py-1.5 rounded-full bg-amber-500/15 border border-amber-500/30 text-amber-300 text-xs font-mono font-semibold uppercase tracking-wider inline-block">
                State-of-the-Art Reservation Engine
            </span>
            <h1 class="font-display font-extrabold text-3xl sm:text-5xl text-white tracking-tight">
                Command Your <span class="text-gold-gradient font-serif italic font-normal">Private Journey</span>
            </h1>
            <p class="text-slate-400 text-sm sm:text-base font-light">
                Transparent guaranteed quotations. No hidden surge pricing. Flight delays monitored automatically.
            </p>
        </div>

        <!-- 4-Step Progress Indicator Bar -->
        <div class="max-w-4xl mx-auto mb-12">
            <div class="grid grid-cols-4 gap-2 text-center text-xs font-mono">
                <div id="stepIndicator1" class="p-3 rounded-xl border border-amber-500 bg-amber-500/20 text-amber-300 font-bold">
                    <span class="block text-[10px] text-amber-400/80">STEP 01</span>
                    Route & Time
                </div>
                <div id="stepIndicator2" class="p-3 rounded-xl border border-white/[0.08] bg-white/[0.02] text-slate-400 font-medium">
                    <span class="block text-[10px] text-slate-500">STEP 02</span>
                    Vehicle Class
                </div>
                <div id="stepIndicator3" class="p-3 rounded-xl border border-white/[0.08] bg-white/[0.02] text-slate-400 font-medium">
                    <span class="block text-[10px] text-slate-500">STEP 03</span>
                    VIP Customization
                </div>
                <div id="stepIndicator4" class="p-3 rounded-xl border border-white/[0.08] bg-white/[0.02] text-slate-400 font-medium">
                    <span class="block text-[10px] text-slate-500">STEP 04</span>
                    Pass & Dispatch
                </div>
            </div>
        </div>

        <!-- WIZARD CONTAINER -->
        <div class="max-w-4xl mx-auto">
            
            <!-- STEP 1: ROUTE & ITINERARY -->
            <div id="step1" class="glass-card-gold rounded-3xl p-6 sm:p-10 space-y-8">
                <div>
                    <h2 class="font-display font-bold text-2xl text-white">01. Define Your Journey Coordinates</h2>
                    <p class="text-slate-400 text-xs sm:text-sm mt-1">Specify your origin, destination, and service format.</p>
                </div>

                <!-- Service Mode Toggle -->
                <div class="grid grid-cols-3 gap-2 bg-black/40 p-1.5 rounded-2xl border border-white/[0.08] text-xs">
                    <button type="button" onclick="setServiceType('point')" id="btnServicePoint" class="py-3 rounded-xl font-bold transition-all bg-amber-500/30 text-amber-200 border border-amber-500/40">
                        Point to Point
                    </button>
                    <button type="button" onclick="setServiceType('hourly')" id="btnServiceHourly" class="py-3 rounded-xl font-bold transition-all text-slate-400 hover:text-white">
                        By-The-Hour Chauffeur
                    </button>
                    <button type="button" onclick="setServiceType('airport')" id="btnServiceAirport" class="py-3 rounded-xl font-bold transition-all text-slate-400 hover:text-white">
                        Airport VIP Tarmac
                    </button>
                </div>

                <div class="space-y-4">
                    <!-- Pickup Location -->
                    <div>
                        <div class="flex items-center justify-between mb-1.5">
                            <label class="text-xs font-mono text-slate-300 uppercase tracking-wider">Pickup Location</label>
                            <div class="flex items-center gap-2 text-[11px] text-amber-400/90 font-mono">
                                <span class="cursor-pointer hover:underline" onclick="applyPresetLocation('pickup', 'JFK Terminal 4 Private FBO')">JFK FBO</span> •
                                <span class="cursor-pointer hover:underline" onclick="applyPresetLocation('pickup', 'The Plaza Hotel 5th Ave')">The Plaza</span> •
                                <span class="cursor-pointer hover:underline" onclick="applyPresetLocation('pickup', 'Wall St Financial Hub')">Wall St</span>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-amber-400">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                            </div>
                            <input type="text" id="bookingPickup" required value="{{ request('pickup') ?? 'The Plaza Hotel, 5th Avenue, New York' }}" class="w-full pl-10 pr-4 py-3 rounded-xl bg-black/60 border border-white/[0.12] text-sm text-white placeholder-slate-500 focus:outline-none focus:border-amber-400 font-medium">
                        </div>
                    </div>

                    <!-- Dropoff Location -->
                    <div id="dropoffGroup">
                        <div class="flex items-center justify-between mb-1.5">
                            <label class="text-xs font-mono text-slate-300 uppercase tracking-wider">Destination</label>
                            <div class="flex items-center gap-2 text-[11px] text-cyan-400/90 font-mono">
                                <span class="cursor-pointer hover:underline" onclick="applyPresetLocation('dropoff', 'Teterboro Private Airport FBO')">Teterboro FBO</span> •
                                <span class="cursor-pointer hover:underline" onclick="applyPresetLocation('dropoff', 'JFK International Airport')">JFK Airport</span> •
                                <span class="cursor-pointer hover:underline" onclick="applyPresetLocation('dropoff', 'The Hamptons Estate')">The Hamptons</span>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-cyan-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                            </div>
                            <input type="text" id="bookingDropoff" required value="{{ request('dropoff') ?? 'JFK International Airport - Terminal 4' }}" class="w-full pl-10 pr-4 py-3 rounded-xl bg-black/60 border border-white/[0.12] text-sm text-white placeholder-slate-500 focus:outline-none focus:border-amber-400 font-medium">
                        </div>
                    </div>

                    <!-- Hourly Duration (Conditional for hourly) -->
                    <div id="hourlyDurationGroup" class="hidden">
                        <label class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-1.5">Service Duration (Hours On Standby)</label>
                        <select id="hourlyHours" onchange="calculateFareBreakdown()" class="w-full px-4 py-3 rounded-xl bg-black/60 border border-white/[0.12] text-sm text-white focus:outline-none focus:border-amber-400 font-mono">
                            <option value="2">2 Hours Dedicated Standby</option>
                            <option value="4" selected>4 Hours Dedicated Standby</option>
                            <option value="8">8 Hours Full Day Mobility</option>
                            <option value="12">12 Hours Diplomatic Escort</option>
                            <option value="24">24 Hours Round-the-Clock Standby</option>
                        </select>
                    </div>

                    <!-- Date & Time Row -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-1.5">Scheduled Date & Time</label>
                            <input type="datetime-local" id="bookingDatetime" value="{{ date('Y-m-d\TH:i', strtotime('+2 hours')) }}" class="w-full px-4 py-3 rounded-xl bg-black/60 border border-white/[0.12] text-sm text-white focus:outline-none focus:border-amber-400 font-mono">
                        </div>
                        <div>
                            <label class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-1.5">Flight Number (Optional for Radar Sync)</label>
                            <input type="text" id="bookingFlight" placeholder="e.g. BA 178 / Emirates EK 201" class="w-full px-4 py-3 rounded-xl bg-black/60 border border-white/[0.12] text-sm text-white placeholder-slate-500 focus:outline-none focus:border-amber-400 font-mono uppercase">
                        </div>
                    </div>

                    <!-- Calculated Route Telemetry Preview -->
                    <div class="p-4 rounded-2xl bg-white/[0.03] border border-white/[0.08] flex items-center justify-between text-xs font-mono">
                        <div class="flex items-center gap-3">
                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-ping"></span>
                            <div>
                                <span class="text-slate-400 block text-[10px]">RADAR DISTANCE</span>
                                <span class="text-white font-bold" id="telemetryDistance">26.8 km (16.6 mi)</span>
                            </div>
                        </div>
                        <div>
                            <span class="text-slate-400 block text-[10px]">TRANSIT ESTIMATE</span>
                            <span class="text-amber-300 font-bold" id="telemetryDuration">~34 mins</span>
                        </div>
                        <div>
                            <span class="text-slate-400 block text-[10px]">ROUTE OPTIMIZATION</span>
                            <span class="text-cyan-400 font-bold">Fastest Express</span>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end pt-4">
                    <button type="button" onclick="goToStep(2)" class="btn-gold px-8 py-3.5 rounded-full text-xs font-bold uppercase tracking-wider flex items-center gap-2 shadow-lg">
                        <span>Continue to Vehicle Selection</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                </div>
            </div>

            <!-- STEP 2: CHOOSE VEHICLE CLASS -->
            <div id="step2" class="glass-card-gold rounded-3xl p-6 sm:p-10 space-y-8 hidden">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="font-display font-bold text-2xl text-white">02. Select Your Vehicle Class</h2>
                        <p class="text-slate-400 text-xs sm:text-sm mt-1">Calculated rates based on current route parameters.</p>
                    </div>
                    <button type="button" onclick="goToStep(1)" class="text-xs font-mono text-amber-300 hover:underline">← Modify Route</button>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    
                    <!-- Vehicle Card 1: Maybach -->
                    <div onclick="selectVehicle('maybach', 165, 'Mercedes-Maybach S 680', 'hero_sedan.jpg')" id="vehCardMaybach" class="veh-select-card p-5 rounded-2xl border border-amber-500/30 bg-white/[0.04] hover:border-amber-400 cursor-pointer transition-all relative overflow-hidden group">
                        <div class="flex items-center justify-between mb-3">
                            <span class="px-2.5 py-0.5 rounded-full bg-amber-500/20 text-amber-300 text-[10px] font-mono font-bold">FIRST CLASS</span>
                            <span class="text-xl font-display font-bold text-amber-300" id="priceDisplayMaybach">$165.00</span>
                        </div>
                        <div class="h-32 rounded-xl overflow-hidden mb-3">
                            <img src="{{ asset('images/hero_sedan.jpg') }}" alt="Mercedes-Maybach" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                        </div>
                        <h3 class="font-display font-bold text-lg text-white">Mercedes-Maybach S 680</h3>
                        <p class="text-slate-400 text-xs mt-1">Twin-Turbo V12 • 3 VIP Passengers • 3 Luggage</p>
                        <div class="mt-3 flex items-center justify-between text-[11px] font-mono text-slate-400 border-t border-white/[0.06] pt-2">
                            <span>Champagne & Wi-Fi 7</span>
                            <span class="text-emerald-400 font-bold" id="badgeMaybach">Selected ✓</span>
                        </div>
                    </div>

                    <!-- Vehicle Card 2: Range Rover SUV -->
                    <div onclick="selectVehicle('suv', 190, 'Range Rover SV Long Wheelbase', 'fleet_suv.jpg')" id="vehCardSuv" class="veh-select-card p-5 rounded-2xl border border-white/[0.08] bg-white/[0.02] hover:border-amber-400 cursor-pointer transition-all relative overflow-hidden group">
                        <div class="flex items-center justify-between mb-3">
                            <span class="px-2.5 py-0.5 rounded-full bg-cyan-500/20 text-cyan-300 text-[10px] font-mono font-bold">EXECUTIVE SUV</span>
                            <span class="text-xl font-display font-bold text-white" id="priceDisplaySuv">$190.00</span>
                        </div>
                        <div class="h-32 rounded-xl overflow-hidden mb-3">
                            <img src="{{ asset('images/fleet_suv.jpg') }}" alt="Range Rover SV" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                        </div>
                        <h3 class="font-display font-bold text-lg text-white">Range Rover SV LWB</h3>
                        <p class="text-slate-400 text-xs mt-1">530 HP AWD • 4 VIP Passengers • 5 Luggage</p>
                        <div class="mt-3 flex items-center justify-between text-[11px] font-mono text-slate-400 border-t border-white/[0.06] pt-2">
                            <span>Club Tables & All-Terrain</span>
                            <span class="text-slate-500" id="badgeSuv">Select</span>
                        </div>
                    </div>

                    <!-- Vehicle Card 3: Lucid Air Sapphire EV -->
                    <div onclick="selectVehicle('lucid', 145, 'Lucid Air Sapphire Hyper-EV', 'fleet_electric.jpg')" id="vehCardLucid" class="veh-select-card p-5 rounded-2xl border border-white/[0.08] bg-white/[0.02] hover:border-amber-400 cursor-pointer transition-all relative overflow-hidden group">
                        <div class="flex items-center justify-between mb-3">
                            <span class="px-2.5 py-0.5 rounded-full bg-emerald-500/20 text-emerald-300 text-[10px] font-mono font-bold">ZERO EMISSION</span>
                            <span class="text-xl font-display font-bold text-white" id="priceDisplayLucid">$145.00</span>
                        </div>
                        <div class="h-32 rounded-xl overflow-hidden mb-3">
                            <img src="{{ asset('images/fleet_electric.jpg') }}" alt="Lucid Air Sapphire" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                        </div>
                        <h3 class="font-display font-bold text-lg text-white">Lucid Air Sapphire</h3>
                        <p class="text-slate-400 text-xs mt-1">1,234 HP Tri-Motor • 3 VIP Passengers • 3 Luggage</p>
                        <div class="mt-3 flex items-center justify-between text-[11px] font-mono text-slate-400 border-t border-white/[0.06] pt-2">
                            <span>Whisper Quiet &lt; 48 dB</span>
                            <span class="text-slate-500" id="badgeLucid">Select</span>
                        </div>
                    </div>

                    <!-- Vehicle Card 4: Maybach Sprinter VIP Van -->
                    <div onclick="selectVehicle('van', 240, 'Maybach VIP Executive Jet Van', 'fleet_van.jpg')" id="vehCardVan" class="veh-select-card p-5 rounded-2xl border border-white/[0.08] bg-white/[0.02] hover:border-amber-400 cursor-pointer transition-all relative overflow-hidden group">
                        <div class="flex items-center justify-between mb-3">
                            <span class="px-2.5 py-0.5 rounded-full bg-purple-500/20 text-purple-300 text-[10px] font-mono font-bold">BOARDROOM JET VAN</span>
                            <span class="text-xl font-display font-bold text-white" id="priceDisplayVan">$240.00</span>
                        </div>
                        <div class="h-32 rounded-xl overflow-hidden mb-3">
                            <img src="{{ asset('images/fleet_van.jpg') }}" alt="Maybach Jet Van" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                        </div>
                        <h3 class="font-display font-bold text-lg text-white">Maybach VIP Executive Van</h3>
                        <p class="text-slate-400 text-xs mt-1">Coachbuilt Jet Interior • 7 VIP Passengers • 12 Luggage</p>
                        <div class="mt-3 flex items-center justify-between text-[11px] font-mono text-slate-400 border-t border-white/[0.06] pt-2">
                            <span>43" OLED & Espresso Bar</span>
                            <span class="text-slate-500" id="badgeVan">Select</span>
                        </div>
                    </div>

                </div>

                <div class="flex items-center justify-between pt-4 border-t border-white/[0.08]">
                    <button type="button" onclick="goToStep(1)" class="px-6 py-3 rounded-full glass-card text-xs font-mono uppercase text-slate-300 hover:text-white">
                        Back to Route
                    </button>
                    <button type="button" onclick="goToStep(3)" class="btn-gold px-8 py-3.5 rounded-full text-xs font-bold uppercase tracking-wider flex items-center gap-2 shadow-lg">
                        <span>Configure In-Cabin Preferences</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                </div>
            </div>

            <!-- STEP 3: BESPOKE PASSENGER CUSTOMIZATION -->
            <div id="step3" class="glass-card-gold rounded-3xl p-6 sm:p-10 space-y-8 hidden">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="font-display font-bold text-2xl text-white">03. In-Cabin Bespoke Preferences</h2>
                        <p class="text-slate-400 text-xs sm:text-sm mt-1">Tailor the sensory environment for your journey.</p>
                    </div>
                    <button type="button" onclick="goToStep(2)" class="text-xs font-mono text-amber-300 hover:underline">← Change Vehicle</button>
                </div>

                <!-- Passenger Identity -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-1.5">Primary Passenger Name</label>
                        <input type="text" id="passengerName" required value="Lord Julian Sterling" class="w-full px-4 py-3 rounded-xl bg-black/60 border border-white/[0.12] text-sm text-white focus:outline-none focus:border-amber-400 font-medium">
                    </div>
                    <div>
                        <label class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-1.5">Direct Mobile Phone / WhatsApp</label>
                        <input type="tel" id="passengerPhone" required value="+1 (555) 782-9901" class="w-full px-4 py-3 rounded-xl bg-black/60 border border-white/[0.12] text-sm text-white focus:outline-none focus:border-amber-400 font-mono">
                    </div>
                </div>

                <!-- Climate Slider -->
                <div class="p-5 rounded-2xl bg-white/[0.03] border border-white/[0.08] space-y-3">
                    <div class="flex items-center justify-between">
                        <label class="text-xs font-mono text-slate-300 uppercase tracking-wider">Cabin Climate Temperature</label>
                        <span id="tempDisplay" class="px-2.5 py-1 rounded-full bg-amber-500/20 text-amber-300 font-mono text-xs font-bold">20.5 °C (69 °F)</span>
                    </div>
                    <input type="range" id="tempSlider" min="18" max="25" step="0.5" value="20.5" oninput="updateTemperature(this.value)" class="w-full accent-amber-400 cursor-pointer">
                    <div class="flex justify-between text-[10px] text-slate-500 font-mono">
                        <span>18°C (Crisp & Cool)</span>
                        <span>21.5°C (Balanced)</span>
                        <span>25°C (Warm & Cozy)</span>
                    </div>
                </div>

                <!-- Beverage Selection & Dress Code -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-1.5">Chilled Beverage Preference</label>
                        <select id="beverageSelect" class="w-full px-4 py-3 rounded-xl bg-black/60 border border-white/[0.12] text-xs text-white focus:outline-none focus:border-amber-400 font-mono">
                            <option value="pellegrino">San Pellegrino Sparkling & Lemon Twist</option>
                            <option value="evian">French Evian Natural Artesian Water</option>
                            <option value="champagne">Vintage Dom Pérignon Champagne Flutes (+$45)</option>
                            <option value="espresso">Hot Nespresso Single-Origin Roast</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-1.5">Chauffeur Attire Protocol</label>
                        <select id="dressCodeSelect" class="w-full px-4 py-3 rounded-xl bg-black/60 border border-white/[0.12] text-xs text-white focus:outline-none focus:border-amber-400 font-mono">
                            <option value="blacktie">Black Tie Tuxedo & White Gloves</option>
                            <option value="business" selected>Executive Business Suit & Tie</option>
                            <option value="casual">Discreet Dark Attire (Undercover)</option>
                        </select>
                    </div>
                </div>

                <!-- VIP Add-ons Checklist -->
                <div class="space-y-3">
                    <label class="block text-xs font-mono text-slate-300 uppercase tracking-wider">Concierge Add-ons</label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
                        
                        <label class="flex items-center gap-3 p-3.5 rounded-xl bg-white/[0.03] border border-white/[0.08] cursor-pointer hover:border-amber-400/50 transition-all">
                            <input type="checkbox" id="addonMeetGreet" onchange="calculateFareBreakdown()" class="w-4 h-4 accent-amber-400 rounded">
                            <div class="flex-grow">
                                <span class="text-white font-semibold block">FBO Tarmac Gate Meet & Greet</span>
                                <span class="text-slate-400 text-[11px]">Chauffeur waits at aircraft steps with nameboard (+$35)</span>
                            </div>
                        </label>

                        <label class="flex items-center gap-3 p-3.5 rounded-xl bg-white/[0.03] border border-white/[0.08] cursor-pointer hover:border-amber-400/50 transition-all">
                            <input type="checkbox" id="addonArmedEscort" onchange="calculateFareBreakdown()" class="w-4 h-4 accent-amber-400 rounded">
                            <div class="flex-grow">
                                <span class="text-white font-semibold block">Armed Close Protection Officer</span>
                                <span class="text-slate-400 text-[11px]">Certified executive security detail liaison (+$180)</span>
                            </div>
                        </label>

                        <label class="flex items-center gap-3 p-3.5 rounded-xl bg-white/[0.03] border border-white/[0.08] cursor-pointer hover:border-amber-400/50 transition-all">
                            <input type="checkbox" id="addonChildSeat" onchange="calculateFareBreakdown()" class="w-4 h-4 accent-amber-400 rounded">
                            <div class="flex-grow">
                                <span class="text-white font-semibold block">Infant / Child Safety Seat</span>
                                <span class="text-slate-400 text-[11px]">Cybex Priam luxury ISOFIX system (+$20)</span>
                            </div>
                        </label>

                        <label class="flex items-center gap-3 p-3.5 rounded-xl bg-white/[0.03] border border-white/[0.08] cursor-pointer hover:border-amber-400/50 transition-all">
                            <input type="checkbox" id="addonLuggageTrailer" onchange="calculateFareBreakdown()" class="w-4 h-4 accent-amber-400 rounded">
                            <div class="flex-grow">
                                <span class="text-white font-semibold block">Extra Baggage Transport Vehicle</span>
                                <span class="text-slate-400 text-[11px]">Secondary shadow vehicle for excess luggage (+$75)</span>
                            </div>
                        </label>

                    </div>
                </div>

                <div class="flex items-center justify-between pt-4 border-t border-white/[0.08]">
                    <button type="button" onclick="goToStep(2)" class="px-6 py-3 rounded-full glass-card text-xs font-mono uppercase text-slate-300 hover:text-white">
                        Back to Vehicles
                    </button>
                    <button type="button" onclick="goToStep(4)" class="btn-gold px-8 py-3.5 rounded-full text-xs font-bold uppercase tracking-wider flex items-center gap-2 shadow-lg">
                        <span>Review & Issue Reservation Pass</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                </div>
            </div>

            <!-- STEP 4: SUMMARY & LIVE DIGITAL PASS DISPATCH -->
            <div id="step4" class="space-y-8 hidden">
                
                <!-- Review Card & Payment Simulator -->
                <div id="reviewCard" class="glass-card-gold rounded-3xl p-6 sm:p-10 space-y-8">
                    <div>
                        <h2 class="font-display font-bold text-2xl text-white">04. Final Authorization & Chauffeur Dispatch</h2>
                        <p class="text-slate-400 text-xs sm:text-sm mt-1">Verify all booking credentials before satellite vehicle lock.</p>
                    </div>

                    <!-- Itemized Invoice Breakdown -->
                    <div class="p-6 rounded-2xl bg-black/60 border border-white/[0.08] space-y-3 font-mono text-xs">
                        <div class="flex justify-between text-slate-300">
                            <span>Base Rate (<span id="invoiceVehicleName">Mercedes-Maybach S 680</span>):</span>
                            <span id="invoiceBaseRate">$165.00</span>
                        </div>
                        <div class="flex justify-between text-slate-300">
                            <span>Distance / Route Surcharge (26.8 km):</span>
                            <span id="invoiceDistanceRate">$18.50</span>
                        </div>
                        <div class="flex justify-between text-slate-300">
                            <span>Selected Concierge Add-ons:</span>
                            <span id="invoiceAddons">$0.00</span>
                        </div>
                        <div class="flex justify-between text-emerald-400" id="invoiceDiscountRow" style="display: none;">
                            <span>Promo Code Discount (LUXE10):</span>
                            <span id="invoiceDiscount">-$18.35</span>
                        </div>
                        <div class="flex justify-between text-slate-400 text-[11px] pt-1 border-t border-white/[0.06]">
                            <span>Tolls, Airport FBO Permit & Tip:</span>
                            <span class="text-emerald-400">Included (100% Guaranteed)</span>
                        </div>
                        <div class="flex justify-between text-white font-bold text-base pt-3 border-t border-amber-500/30">
                            <span class="font-display">Total Guaranteed Fare:</span>
                            <span id="invoiceTotal" class="text-amber-300 text-xl font-display font-black">$183.50</span>
                        </div>
                    </div>

                    <!-- Promo Code Input -->
                    <div class="flex gap-2">
                        <input type="text" id="promoCodeInput" placeholder="Try Promo Code: LUXE10" class="flex-grow px-4 py-3 rounded-xl bg-black/40 border border-white/[0.12] text-xs font-mono text-white uppercase placeholder-slate-500 focus:outline-none focus:border-amber-400">
                        <button type="button" onclick="applyPromoCode()" class="px-6 py-3 rounded-xl glass-card text-xs font-mono font-bold text-amber-300 hover:border-amber-400 uppercase tracking-wider">
                            Apply Code
                        </button>
                    </div>

                    <!-- Payment Simulator Selector -->
                    <div>
                        <label class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-2">Simulated Settlement Method</label>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 text-xs font-mono">
                            <label class="p-3 rounded-xl border border-amber-500/40 bg-amber-500/10 text-amber-300 font-bold flex flex-col items-center justify-center text-center cursor-pointer">
                                <input type="radio" name="paymentMethod" checked class="hidden">
                                <span>Apple Pay</span>
                                <span class="text-[9px] text-slate-400 font-normal">Instant 1-Touch</span>
                            </label>
                            <label class="p-3 rounded-xl border border-white/[0.08] bg-white/[0.02] text-slate-300 flex flex-col items-center justify-center text-center cursor-pointer hover:border-amber-400">
                                <input type="radio" name="paymentMethod" class="hidden">
                                <span>Centurion Black</span>
                                <span class="text-[9px] text-slate-400 font-normal">Amex Direct</span>
                            </label>
                            <label class="p-3 rounded-xl border border-white/[0.08] bg-white/[0.02] text-slate-300 flex flex-col items-center justify-center text-center cursor-pointer hover:border-amber-400">
                                <input type="radio" name="paymentMethod" class="hidden">
                                <span>Corporate Account</span>
                                <span class="text-[9px] text-slate-400 font-normal">Net-30 Invoice</span>
                            </label>
                            <label class="p-3 rounded-xl border border-white/[0.08] bg-white/[0.02] text-slate-300 flex flex-col items-center justify-center text-center cursor-pointer hover:border-amber-400">
                                <input type="radio" name="paymentMethod" class="hidden">
                                <span>USDT Escrow</span>
                                <span class="text-[9px] text-slate-400 font-normal">Web3 Crypto</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between pt-4 border-t border-white/[0.08]">
                        <button type="button" onclick="goToStep(3)" class="px-6 py-3 rounded-full glass-card text-xs font-mono uppercase text-slate-300 hover:text-white">
                            Back
                        </button>
                        <button type="button" onclick="confirmReservationAndGeneratePass()" class="btn-gold px-10 py-4 rounded-full text-xs font-black uppercase tracking-widest flex items-center gap-2 shadow-2xl">
                            <span>Authorize & Dispatch Chauffeur</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </button>
                    </div>
                </div>

                <!-- DIGITAL BOARDING PASS & LIVE TRACKER (Rendered upon confirmation) -->
                <div id="confirmedPassCard" class="hidden space-y-8 animate-fade-in">
                    
                    <!-- Digital VIP Boarding Pass -->
                    <div class="glass-card-gold rounded-3xl p-6 sm:p-10 relative overflow-hidden shadow-2xl border-2 border-amber-400/40">
                        <!-- Top Pass Header -->
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between border-b border-amber-500/30 pb-6 mb-6 gap-4">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-400 via-amber-600 to-amber-700 flex items-center justify-center text-black font-serif font-black text-2xl shadow-lg">
                                    V
                                </div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h3 class="font-display font-extrabold text-2xl text-white">VELOCE LUXE</h3>
                                        <span class="px-2.5 py-0.5 rounded bg-emerald-500/20 text-emerald-400 border border-emerald-500/40 text-[10px] font-mono font-bold">
                                            DISPATCH CONFIRMED
                                        </span>
                                    </div>
                                    <p class="text-xs text-slate-400 font-mono">OFFICIAL DIGITAL BOARDING PASS</p>
                                </div>
                            </div>
                            <div class="text-right font-mono">
                                <span class="text-xs text-slate-400 block">RESERVATION REFERENCE</span>
                                <span id="passRefCode" class="text-xl font-bold text-amber-300 tracking-wider">VL-8492-NYC</span>
                            </div>
                        </div>

                        <!-- Pass Passenger & Route Dossier -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 font-mono text-xs mb-8">
                            <div class="p-4 rounded-xl bg-black/40 border border-white/[0.06]">
                                <span class="text-slate-400 block text-[10px]">PASSENGER NAME</span>
                                <span id="passPassengerName" class="text-sm font-bold text-white mt-1 block">Lord Julian Sterling</span>
                                <span class="text-slate-400 block text-[10px] mt-2">DRESS PROTOCOL</span>
                                <span id="passDress" class="text-amber-300 font-medium">Business Suit & Tie</span>
                            </div>
                            <div class="p-4 rounded-xl bg-black/40 border border-white/[0.06]">
                                <span class="text-slate-400 block text-[10px]">ORIGIN COORDINATES</span>
                                <span id="passPickup" class="text-slate-200 mt-1 block font-medium truncate">The Plaza Hotel 5th Ave</span>
                                <span class="text-slate-400 block text-[10px] mt-2">DESTINATION</span>
                                <span id="passDropoff" class="text-cyan-300 mt-1 block font-medium truncate">JFK Airport Terminal 4</span>
                            </div>
                            <div class="p-4 rounded-xl bg-black/40 border border-white/[0.06]">
                                <span class="text-slate-400 block text-[10px]">VEHICLE ALLOCATED</span>
                                <span id="passVehicle" class="text-sm font-bold text-white mt-1 block">Mercedes-Maybach S 680</span>
                                <span class="text-slate-400 block text-[10px] mt-2">LICENSE PLATE</span>
                                <span class="text-amber-300 font-bold">LUX-777-NY</span>
                            </div>
                        </div>

                        <!-- Chauffeur Profile Ribbon -->
                        <div class="p-4 sm:p-5 rounded-2xl bg-white/[0.03] border border-amber-500/25 flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
                            <div class="flex items-center gap-4">
                                <div class="w-14 h-14 rounded-full overflow-hidden border-2 border-amber-400 shrink-0">
                                    <img src="{{ asset('images/vip_chauffeur.jpg') }}" alt="Master Chauffeur Alexander Vance" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h4 class="text-white font-bold text-sm">Alexander Vance</h4>
                                        <span class="px-2 py-0.5 rounded bg-amber-500/20 text-amber-300 text-[10px] font-mono font-bold">MASTER CHAUFFEUR</span>
                                    </div>
                                    <p class="text-xs text-slate-400">11 Yrs Senior Experience • 4.99 ★ (2,840 VIP Rides)</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <span class="text-[10px] font-mono text-slate-400 block">CURRENT ETA</span>
                                <span class="text-base font-mono font-bold text-emerald-400 flex items-center gap-1 justify-end">
                                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                                    3 Mins Away
                                </span>
                            </div>
                        </div>

                        <!-- Animated Live Route Telemetry Progress Bar -->
                        <div class="p-6 rounded-2xl bg-[#080B12] border border-cyan-500/20 space-y-4">
                            <div class="flex items-center justify-between text-xs font-mono">
                                <div class="flex items-center gap-2 text-amber-300">
                                    <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                                    <span>Origin Pickup</span>
                                </div>
                                <div class="text-slate-400">Live Satellite Telemetry Tracker</div>
                                <div class="flex items-center gap-2 text-cyan-400">
                                    <span>VIP Destination</span>
                                    <span class="w-2 h-2 rounded-full bg-cyan-400"></span>
                                </div>
                            </div>

                            <!-- Animated Moving Car along route line -->
                            <div class="relative h-3 rounded-full bg-white/[0.08] overflow-visible my-6">
                                <div id="liveRouteProgress" class="h-full bg-gradient-to-r from-amber-400 via-amber-500 to-cyan-400 rounded-full transition-all duration-1000" style="width: 38%;"></div>
                                <div id="liveCarIcon" class="absolute -top-3.5 transform -translate-x-1/2 transition-all duration-1000" style="left: 38%;">
                                    <div class="w-8 h-8 rounded-full bg-black border-2 border-amber-400 flex items-center justify-center text-xs shadow-lg shadow-amber-400/50">
                                        🚗
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center justify-between text-[11px] font-mono text-slate-400">
                                <span>Speed: 48 km/h</span>
                                <span class="text-emerald-400 font-bold">Status: En Route to Rendezvous</span>
                                <span>GPS: 40.7645° N, 73.9744° W</span>
                            </div>
                        </div>

                        <!-- Action Buttons on Pass -->
                        <div class="flex flex-wrap items-center justify-between gap-4 pt-6 border-t border-white/[0.08]">
                            <button type="button" onclick="window.showToast('Boarding pass added to Apple Wallet!')" class="px-6 py-3 rounded-full bg-black border border-white/20 text-white text-xs font-mono font-bold flex items-center gap-2 hover:bg-white/[0.05]">
                                <span> Add to Apple Wallet</span>
                            </button>
                            <div class="flex gap-3">
                                <button type="button" onclick="window.print()" class="px-5 py-3 rounded-full glass-card text-xs font-mono text-slate-300 hover:text-white">
                                    Print PDF Itinerary
                                </button>
                                <button type="button" onclick="resetBookingEngine()" class="btn-gold px-6 py-3 rounded-full text-xs font-bold uppercase tracking-wider">
                                    Book Another Ride
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
@endsection

@push('scripts')
<script>
// State Management
let bookingState = {
    serviceType: 'point',
    pickup: 'The Plaza Hotel, 5th Avenue, New York',
    dropoff: 'JFK International Airport - Terminal 4',
    hours: 4,
    vehicleKey: 'maybach',
    vehicleName: 'Mercedes-Maybach S 680',
    vehicleRate: 165,
    vehicleImg: 'hero_sedan.jpg',
    temperature: 20.5,
    beverage: 'San Pellegrino Sparkling',
    dressCode: 'Executive Business Suit & Tie',
    passengerName: 'Lord Julian Sterling',
    passengerPhone: '+1 (555) 782-9901',
    addons: {
        meetGreet: false,
        armedEscort: false,
        childSeat: false,
        luggageTrailer: false
    },
    promoApplied: false,
    promoDiscount: 0
};

// Toggle Service Mode
function setServiceType(type) {
    bookingState.serviceType = type;
    const tabs = ['btnServicePoint', 'btnServiceHourly', 'btnServiceAirport'];
    tabs.forEach(t => {
        document.getElementById(t).className = 'py-3 rounded-xl font-bold transition-all text-slate-400 hover:text-white';
    });

    const dropoffGroup = document.getElementById('dropoffGroup');
    const hourlyGroup = document.getElementById('hourlyDurationGroup');

    if (type === 'point') {
        document.getElementById('btnServicePoint').className = 'py-3 rounded-xl font-bold transition-all bg-amber-500/30 text-amber-200 border border-amber-500/40';
        dropoffGroup.classList.remove('hidden');
        hourlyGroup.classList.add('hidden');
    } else if (type === 'hourly') {
        document.getElementById('btnServiceHourly').className = 'py-3 rounded-xl font-bold transition-all bg-amber-500/30 text-amber-200 border border-amber-500/40';
        dropoffGroup.classList.add('hidden');
        hourlyGroup.classList.remove('hidden');
    } else if (type === 'airport') {
        document.getElementById('btnServiceAirport').className = 'py-3 rounded-xl font-bold transition-all bg-amber-500/30 text-amber-200 border border-amber-500/40';
        dropoffGroup.classList.remove('hidden');
        hourlyGroup.classList.add('hidden');
    }

    calculateFareBreakdown();
}

function applyPresetLocation(field, val) {
    if (field === 'pickup') {
        document.getElementById('bookingPickup').value = val;
        window.showToast(`Pickup updated: ${val}`);
    } else {
        document.getElementById('bookingDropoff').value = val;
        window.showToast(`Destination updated: ${val}`);
    }
    calculateFareBreakdown();
}

// Wizard Step Navigation
function goToStep(step) {
    // Hide all
    for (let i = 1; i <= 4; i++) {
        const el = document.getElementById(`step${i}`);
        if (el) el.classList.add('hidden');

        const indicator = document.getElementById(`stepIndicator${i}`);
        if (indicator) {
            indicator.className = 'p-3 rounded-xl border border-white/[0.08] bg-white/[0.02] text-slate-400 font-medium';
        }
    }

    // Show active
    const active = document.getElementById(`step${step}`);
    if (active) active.classList.remove('hidden');

    const activeIndicator = document.getElementById(`stepIndicator${step}`);
    if (activeIndicator) {
        activeIndicator.className = 'p-3 rounded-xl border border-amber-500 bg-amber-500/20 text-amber-300 font-bold';
    }

    // Read current form values
    bookingState.pickup = document.getElementById('bookingPickup').value;
    bookingState.dropoff = document.getElementById('bookingDropoff').value;
    bookingState.passengerName = document.getElementById('passengerName')?.value || bookingState.passengerName;
    bookingState.passengerPhone = document.getElementById('passengerPhone')?.value || bookingState.passengerPhone;

    calculateFareBreakdown();
    window.scrollTo({ top: 220, behavior: 'smooth' });
}

// Vehicle Selection
function selectVehicle(key, rate, name, img) {
    bookingState.vehicleKey = key;
    bookingState.vehicleRate = rate;
    bookingState.vehicleName = name;
    bookingState.vehicleImg = img;

    const cards = ['vehCardMaybach', 'vehCardSuv', 'vehCardLucid', 'vehCardVan'];
    cards.forEach(c => {
        const el = document.getElementById(c);
        if (el) {
            el.className = 'veh-select-card p-5 rounded-2xl border border-white/[0.08] bg-white/[0.02] hover:border-amber-400 cursor-pointer transition-all relative overflow-hidden group';
        }
    });

    const badges = {
        maybach: document.getElementById('badgeMaybach'),
        suv: document.getElementById('badgeSuv'),
        lucid: document.getElementById('badgeLucid'),
        van: document.getElementById('badgeVan'),
    };
    Object.keys(badges).forEach(k => {
        if (badges[k]) {
            badges[k].innerText = 'Select';
            badges[k].className = 'text-slate-500';
        }
    });

    const activeMap = {
        maybach: 'vehCardMaybach',
        suv: 'vehCardSuv',
        lucid: 'vehCardLucid',
        van: 'vehCardVan',
    };
    const activeCard = document.getElementById(activeMap[key]);
    if (activeCard) {
        activeCard.className = 'veh-select-card p-5 rounded-2xl border-2 border-amber-400 bg-amber-500/10 cursor-pointer transition-all relative overflow-hidden group shadow-lg shadow-amber-500/10';
    }
    if (badges[key]) {
        badges[key].innerText = 'Selected ✓';
        badges[key].className = 'text-emerald-400 font-bold';
    }

    window.showToast(`Selected: ${name}`);
    calculateFareBreakdown();
}

function updateTemperature(val) {
    bookingState.temperature = val;
    document.getElementById('tempDisplay').innerText = `${val} °C (${Math.round((val * 9/5) + 32)} °F)`;
}

// Calculation Engine
function calculateFareBreakdown() {
    let base = bookingState.vehicleRate;
    let distanceCharge = 18.50;

    if (bookingState.serviceType === 'hourly') {
        const hours = parseInt(document.getElementById('hourlyHours')?.value || 4);
        base = bookingState.vehicleRate * hours;
        distanceCharge = 0;
    }

    let addonTotal = 0;
    if (document.getElementById('addonMeetGreet')?.checked) addonTotal += 35;
    if (document.getElementById('addonArmedEscort')?.checked) addonTotal += 180;
    if (document.getElementById('addonChildSeat')?.checked) addonTotal += 20;
    if (document.getElementById('addonLuggageTrailer')?.checked) addonTotal += 75;

    let subtotal = base + distanceCharge + addonTotal;
    let discount = 0;
    if (bookingState.promoApplied) {
        discount = subtotal * 0.10;
    }

    const total = subtotal - discount;

    // Update Invoice Displays
    const nameEl = document.getElementById('invoiceVehicleName');
    if (nameEl) nameEl.innerText = bookingState.vehicleName;

    const baseEl = document.getElementById('invoiceBaseRate');
    if (baseEl) baseEl.innerText = `$${base.toFixed(2)}`;

    const addonsEl = document.getElementById('invoiceAddons');
    if (addonsEl) addonsEl.innerText = `$${addonTotal.toFixed(2)}`;

    const totalEl = document.getElementById('invoiceTotal');
    if (totalEl) totalEl.innerText = `$${total.toFixed(2)}`;

    const discountRow = document.getElementById('invoiceDiscountRow');
    const discountEl = document.getElementById('invoiceDiscount');
    if (discountRow && discountEl) {
        if (bookingState.promoApplied) {
            discountRow.style.display = 'flex';
            discountEl.innerText = `-$${discount.toFixed(2)}`;
        } else {
            discountRow.style.display = 'none';
        }
    }
}

// Promo Code Handler
function applyPromoCode() {
    const input = document.getElementById('promoCodeInput');
    const code = input.value.trim().toUpperCase();

    if (code === 'LUXE10') {
        bookingState.promoApplied = true;
        calculateFareBreakdown();
        window.showToast('VIP Privilege Code LUXE10 Applied: 10% Discount!');
    } else {
        window.showToast('Invalid or expired promo code.', 'error');
    }
}

// Confirmation & Boarding Pass Generator
function confirmReservationAndGeneratePass() {
    window.showToast('Authorizing payment and issuing boarding pass...');

    document.getElementById('reviewCard').classList.add('hidden');
    document.getElementById('confirmedPassCard').classList.remove('hidden');

    // Populate Pass Fields
    document.getElementById('passPassengerName').innerText = document.getElementById('passengerName')?.value || 'Lord Julian Sterling';
    document.getElementById('passPickup').innerText = document.getElementById('bookingPickup')?.value || 'The Plaza Hotel 5th Ave';
    document.getElementById('passDropoff').innerText = document.getElementById('bookingDropoff')?.value || 'JFK Airport Terminal 4';
    document.getElementById('passVehicle').innerText = bookingState.vehicleName;
    
    const dressSelect = document.getElementById('dressCodeSelect');
    if (dressSelect) {
        document.getElementById('passDress').innerText = dressSelect.options[dressSelect.selectedIndex].text;
    }

    // Animate Progress Bar
    let progress = 20;
    const interval = setInterval(() => {
        progress += 4;
        if (progress > 85) {
            clearInterval(interval);
        }
        const bar = document.getElementById('liveRouteProgress');
        const car = document.getElementById('liveCarIcon');
        if (bar && car) {
            bar.style.width = `${progress}%`;
            car.style.left = `${progress}%`;
        }
    }, 800);

    window.scrollTo({ top: 300, behavior: 'smooth' });
}

function resetBookingEngine() {
    document.getElementById('reviewCard').classList.remove('hidden');
    document.getElementById('confirmedPassCard').classList.add('hidden');
    goToStep(1);
    window.showToast('Ready for new reservation.');
}

// Check URL Params for pre-selected vehicle
document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const preVehicle = urlParams.get('vehicle');
    if (preVehicle) {
        if (preVehicle === 'maybach') selectVehicle('maybach', 165, 'Mercedes-Maybach S 680', 'hero_sedan.jpg');
        if (preVehicle === 'suv') selectVehicle('suv', 190, 'Range Rover SV Long Wheelbase', 'fleet_suv.jpg');
        if (preVehicle === 'lucid') selectVehicle('lucid', 145, 'Lucid Air Sapphire Hyper-EV', 'fleet_electric.jpg');
        if (preVehicle === 'van') selectVehicle('van', 240, 'Maybach VIP Executive Jet Van', 'fleet_van.jpg');
    }
});
</script>
@endpush
