@extends('layouts.app')

@section('title', 'Book a Cab Online | Instant Fare & Live Ride Tracking')

@section('content')
<section class="py-12 px-4 sm:px-6 lg:px-8 bg-[#F0F6FD] min-h-screen relative overflow-hidden">
    
    <!-- Ambient Blue & Gold Glow Elements -->
    <div class="absolute top-10 left-1/4 w-96 h-96 bg-sky-400/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-40 right-1/4 w-80 h-80 bg-amber-400/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-4xl mx-auto relative z-10">
        
        <!-- Page Header -->
        <div class="text-center mb-10">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white border border-[#C7E0FA] text-[#0369A1] text-xs font-bold uppercase tracking-wider mb-3 shadow-sm">
                <span class="w-2 h-2 rounded-full bg-amber-400 animate-ping"></span>
                ✦ Guaranteed Cab Dispatch & Fixed Fares
            </span>
            <h1 class="text-3xl sm:text-5xl font-bold text-[#0B172A]">
                Book Your Cab <span class="text-amber-500">in 3 Simple Steps</span>
            </h1>
            <p class="text-[#475569] text-sm sm:text-base mt-2 font-light">
                Fixed clear pricing, verified courteous drivers, and real-time live ride tracking.
            </p>
        </div>

        <!-- 4-Step Progress Indicator -->
        <div class="mb-10 max-w-3xl mx-auto px-2">
            <div class="relative flex items-center justify-between">
                <!-- Background Connection Track -->
                <div class="absolute left-6 right-6 top-1/2 -translate-y-1/2 h-1 bg-[#D2E4F7] z-0"></div>
                <!-- Active Fill Line -->
                <div id="stepLineProgress" class="absolute left-6 top-1/2 -translate-y-1/2 h-1 bg-gradient-to-r from-sky-400 via-sky-600 to-amber-400 z-0 transition-all duration-500" style="width: 0%;"></div>

                <!-- Step 1 Marker -->
                <div onclick="goToStep(1)" class="relative z-10 flex flex-col items-center cursor-pointer group">
                    <div id="stepMarker1" class="w-10 h-10 rounded-full bg-[#0B172A] text-white flex items-center justify-center font-bold text-sm shadow-md ring-4 ring-sky-100 transition-all">
                        1
                    </div>
                    <span class="text-[11px] font-bold text-[#0B172A] mt-2 whitespace-nowrap">Route & Time</span>
                </div>

                <!-- Step 2 Marker -->
                <div onclick="goToStep(2)" class="relative z-10 flex flex-col items-center cursor-pointer group">
                    <div id="stepMarker2" class="w-10 h-10 rounded-full bg-white border-2 border-[#C7E0FA] text-[#64748B] flex items-center justify-center font-bold text-sm transition-all group-hover:border-[#0284C7]">
                        2
                    </div>
                    <span class="text-[11px] font-medium text-[#64748B] mt-2 whitespace-nowrap" id="stepLabel2">Choose Cab</span>
                </div>

                <!-- Step 3 Marker -->
                <div onclick="goToStep(3)" class="relative z-10 flex flex-col items-center cursor-pointer group">
                    <div id="stepMarker3" class="w-10 h-10 rounded-full bg-white border-2 border-[#C7E0FA] text-[#64748B] flex items-center justify-center font-bold text-sm transition-all group-hover:border-[#0284C7]">
                        3
                    </div>
                    <span class="text-[11px] font-medium text-[#64748B] mt-2 whitespace-nowrap" id="stepLabel3">Rider Info</span>
                </div>

                <!-- Step 4 Marker -->
                <div class="relative z-10 flex flex-col items-center">
                    <div id="stepMarker4" class="w-10 h-10 rounded-full bg-white border-2 border-[#C7E0FA] text-[#64748B] flex items-center justify-center font-bold text-sm transition-all">
                        4
                    </div>
                    <span class="text-[11px] font-medium text-[#64748B] mt-2 whitespace-nowrap" id="stepLabel4">Ride Pass</span>
                </div>
            </div>
        </div>

        <!-- MAIN WIZARD CONTAINER -->
        <div>
            
            <!-- STEP 1: ROUTE & TRIP TIMING -->
            <div id="step1Box" class="bg-white rounded-[2.5rem] p-6 sm:p-10 border-2 border-[#C7E0FA] shadow-xl space-y-6">
                
                <div class="flex flex-wrap items-center justify-between border-b border-[#E1EFFD] pb-4 gap-3">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-600 block">Step 01 of 03</span>
                        <h2 class="font-serif text-2xl font-bold text-[#0B172A]">Where are you traveling?</h2>
                    </div>
                    
                    <!-- Trip Mode Selector -->
                    <div class="flex gap-1.5 bg-[#F0F6FD] p-1 rounded-full border border-[#C7E0FA] text-xs font-semibold">
                        <button type="button" onclick="setMode('city')" id="btnModeCity" class="px-4 py-2 rounded-full bg-[#0284C7] text-white transition-all shadow-sm">City Ride</button>
                        <button type="button" onclick="setMode('airport')" id="btnModeAirport" class="px-4 py-2 rounded-full text-[#1E3A5F] hover:text-[#0284C7] transition-all">Airport Transfer</button>
                        <button type="button" onclick="setMode('hourly')" id="btnModeHourly" class="px-4 py-2 rounded-full text-[#1E3A5F] hover:text-[#0284C7] transition-all">Hourly Rental</button>
                    </div>
                </div>

                <div class="space-y-5">
                    
                    <!-- Pickup Location Input -->
                    <div>
                        <div class="flex items-center justify-between mb-1.5">
                            <label class="text-xs font-semibold uppercase tracking-wider text-[#475569]">Pickup Address in Patna</label>
                            <!-- Quick Landmark Chips -->
                            <div class="hidden sm:flex items-center gap-2 text-xs">
                                <span class="text-[#64748B]">Quick Pick:</span>
                                <button type="button" onclick="fillLocation('pickup', 'Boring Road Crossing, Patna')" class="text-[#004E92] hover:underline font-bold">📍 Boring Road</button>
                                <span class="text-slate-300">•</span>
                                <button type="button" onclick="fillLocation('pickup', 'Jay Prakash Narayan Airport (PAT)')" class="text-[#004E92] hover:underline font-bold">✈️ Patna Airport</button>
                                <span class="text-slate-300">•</span>
                                <button type="button" onclick="fillLocation('pickup', 'Patna Junction Railway Station')" class="text-[#004E92] hover:underline font-bold">🚂 Patna Jn</button>
                            </div>
                        </div>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-sky-600 text-lg">📍</span>
                            <input type="text" id="bPickup" required value="{{ request('pickup') ?? 'Boring Road, Patna' }}" class="input-clean w-full pl-11 pr-4 py-3.5 text-sm font-medium">
                        </div>
                    </div>

                    <!-- Destination Input -->
                    <div id="bDropoffContainer">
                        <div class="flex items-center justify-between mb-1.5">
                            <label class="text-xs font-semibold uppercase tracking-wider text-[#475569]">Drop-off Destination</label>
                            <!-- Quick Landmark Chips -->
                            <div class="hidden sm:flex items-center gap-2 text-xs">
                                <span class="text-[#64748B]">Popular Drops:</span>
                                <button type="button" onclick="fillLocation('dropoff', 'Jay Prakash Narayan Airport (PAT), Patna')" class="text-[#004E92] hover:underline font-bold">✈️ Patna Airport (PAT)</button>
                                <span class="text-slate-300">•</span>
                                <button type="button" onclick="fillLocation('dropoff', 'Bodh Gaya, Bihar')" class="text-[#004E92] hover:underline font-bold">🏛️ Bodh Gaya</button>
                                <span class="text-slate-300">•</span>
                                <button type="button" onclick="fillLocation('dropoff', 'Rajgir, Bihar')" class="text-[#004E92] hover:underline font-bold">⛰️ Rajgir</button>
                            </div>
                        </div>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-amber-500 text-lg">🏁</span>
                            <input type="text" id="bDropoff" required value="{{ request('dropoff') ?? 'Jay Prakash Narayan Airport (PAT), Patna' }}" class="input-clean w-full pl-11 pr-4 py-3.5 text-sm font-medium">
                        </div>
                    </div>

                    <!-- Hourly Standby Option (shown when Hourly is selected) -->
                    <div id="bHourlyContainer" class="hidden">
                        <label class="block text-xs font-semibold uppercase tracking-wider text-[#475569] mb-1.5">Dedicated Standby Duration</label>
                        <select id="bHourlyHours" onchange="calculateFare()" class="input-clean w-full px-4 py-3 text-sm font-medium">
                            <option value="2">2 Hours Dedicated Standby (Local shopping & clinic visit)</option>
                            <option value="4" selected>4 Hours Standby (Perfect for city meetings)</option>
                            <option value="8">8 Hours Full Day Standby (Patna local sightseeing)</option>
                            <option value="12">12 Hours Full Day Outstation Tour</option>
                        </select>
                    </div>

                    <!-- Timing Options: Leave Now vs Schedule -->
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-[#475569] mb-2">When do you need the cab?</label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-3">
                            <button type="button" onclick="setTimingOption('now')" id="btnTimeNow" class="p-3.5 rounded-2xl border-2 border-[#004E92] bg-[#E1EFFD] text-[#0B172A] flex items-center gap-3 text-left font-semibold text-xs shadow-sm">
                                <span class="w-8 h-8 rounded-full bg-[#004E92] text-white flex items-center justify-center text-sm shrink-0 shadow">⚡</span>
                                <div>
                                    <div class="text-sm font-bold text-[#0B172A]">Leave Right Now</div>
                                    <div class="text-[11px] text-[#475569] font-normal">Nearest cab arrives in ~3-5 mins from Boring Road</div>
                                </div>
                            </button>

                            <button type="button" onclick="setTimingOption('later')" id="btnTimeLater" class="p-3.5 rounded-2xl border border-[#C7E0FA] bg-white text-[#475569] flex items-center gap-3 text-left font-semibold text-xs hover:border-[#004E92] transition-all">
                                <span class="w-8 h-8 rounded-full bg-[#F0F6FD] text-[#0B172A] flex items-center justify-center text-sm shrink-0">📅</span>
                                <div>
                                    <div class="text-sm font-bold text-[#0B172A]">Schedule for Later</div>
                                    <div class="text-[11px] text-[#64748B] font-normal">Guaranteed on-time pickup</div>
                                </div>
                            </button>
                        </div>

                        <!-- Schedule Date/Time Picker -->
                        <div id="scheduleTimeGroup" class="hidden pt-1">
                            <input type="datetime-local" id="bDatetime" value="{{ date('Y-m-d\TH:i', strtotime('+2 hours')) }}" class="input-clean w-full px-4 py-3 text-sm font-medium">
                        </div>
                    </div>

                    <!-- Dynamic Route & Travel Information Banner -->
                    <div class="p-5 rounded-2xl bg-[#F0F6FD] border border-[#C7E0FA] flex flex-col sm:flex-row sm:items-center justify-between gap-3 text-xs">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-2xl bg-sky-100 text-[#004E92] flex items-center justify-center font-bold text-lg shadow-sm">
                                🗺️
                            </div>
                            <div>
                                <span class="text-[10px] uppercase font-bold text-[#64748B] block">DISPATCH ORIGIN</span>
                                <span class="text-sm font-bold text-[#0B172A]">Boring Road Dispatch Hub • Patna</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 text-amber-700 bg-amber-50 px-3.5 py-1.5 rounded-full border border-amber-200 text-[11px] font-bold self-start sm:self-auto shadow-xs">
                            <span>✨ Zero Surge Guarantee • Fixed Fares</span>
                        </div>
                    </div>

                </div>

                <div class="flex justify-end pt-4 border-t border-[#E1EFFD]">
                    <button type="button" onclick="goToStep(2)" class="btn-gold px-8 py-3.5 text-xs font-bold uppercase tracking-wider flex items-center gap-2 shadow-lg">
                        <span>Continue to Choose Cab</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                </div>
            </div>

            <!-- STEP 2: CHOOSE CAB (Visual Cards with Badges & Amenities) -->
            <div id="step2Box" class="bg-white rounded-[2.5rem] p-6 sm:p-10 border-2 border-[#C7E0FA] shadow-xl space-y-6 hidden">
                
                <div class="flex items-center justify-between border-b border-[#E1EFFD] pb-4">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-600 block">Step 02 of 03</span>
                        <h2 class="text-2xl font-bold text-[#0B172A]">Select Your Cab Type</h2>
                    </div>
                    <button type="button" onclick="goToStep(1)" class="text-xs font-semibold text-[#004E92] hover:underline">← Modify Route</button>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    
                    <!-- Cab 1: Maruti Dzire -->
                    <div onclick="pickCab('sedan', 899, 'Maruti Suzuki Dzire', 'hero_sedan.jpg')" id="cabCardSedan" class="p-5 rounded-3xl border-2 border-[#004E92] bg-[#E1EFFD]/60 cursor-pointer transition-all hover:shadow-lg relative group">
                        <div class="flex items-center justify-between mb-2">
                            <span class="px-3 py-1 rounded-full bg-white border border-[#C7E0FA] text-[10px] font-bold text-[#0B172A] shadow-sm">
                                ⭐ MOST POPULAR
                            </span>
                            <span class="text-2xl font-bold text-amber-600">₹899</span>
                        </div>
                        <div class="h-32 rounded-2xl overflow-hidden mb-3">
                            <img src="{{ asset('images/hero_sedan.jpg') }}" alt="Maruti Dzire" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <h3 class="font-bold text-lg text-[#0B172A]">Maruti Suzuki Dzire</h3>
                        <p class="text-xs text-[#475569] mt-0.5">AC Sedan for Patna Airport, station drops & daily city commutes.</p>
                        
                        <div class="flex items-center gap-3 text-xs text-[#64748B] mt-3 pt-2.5 border-t border-[#C7E0FA]/60">
                            <span>👤 4 Seats</span>
                            <span>🧳 3 Bags</span>
                            <span>❄️ ₹11/KM</span>
                        </div>
                        <span class="text-xs font-bold text-[#004E92] mt-2 block" id="selectedBadgeSedan">Selected ✓</span>
                    </div>

                    <!-- Cab 2: Mahindra Scorpio -->
                    <div onclick="pickCab('suv', 1499, 'Mahindra Scorpio Classic', 'fleet_suv.jpg')" id="cabCardSuv" class="p-5 rounded-3xl border border-[#C7E0FA] bg-white cursor-pointer transition-all hover:border-[#004E92] hover:shadow-lg relative group">
                        <div class="flex items-center justify-between mb-2">
                            <span class="px-3 py-1 rounded-full bg-[#F0F6FD] border border-[#C7E0FA] text-[10px] font-bold text-[#475569]">
                                👑 HIGHWAY KING
                            </span>
                            <span class="text-2xl font-bold text-[#0B172A]">₹1,499</span>
                        </div>
                        <div class="h-32 rounded-2xl overflow-hidden mb-3">
                            <img src="{{ asset('images/fleet_suv.jpg') }}" alt="Mahindra Scorpio" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <h3 class="font-bold text-lg text-[#0B172A]">Mahindra Scorpio</h3>
                        <p class="text-xs text-[#475569] mt-0.5">High clearance SUV for outstation trips across Bihar and weddings.</p>
                        
                        <div class="flex items-center gap-3 text-xs text-[#64748B] mt-3 pt-2.5 border-t border-[#C7E0FA]/60">
                            <span>👤 7 Seats</span>
                            <span>🧳 5 Bags</span>
                            <span>🏔️ ₹16/KM</span>
                        </div>
                        <span class="text-xs text-[#64748B] mt-2 block" id="selectedBadgeSuv">Click to Select</span>
                    </div>

                    <!-- Cab 3: Maruti Ertiga -->
                    <div onclick="pickCab('electric', 1299, 'Maruti Suzuki Ertiga (7-Seater)', 'fleet_electric.jpg')" id="cabCardElectric" class="p-5 rounded-3xl border border-[#C7E0FA] bg-white cursor-pointer transition-all hover:border-[#004E92] hover:shadow-lg relative group">
                        <div class="flex items-center justify-between mb-2">
                            <span class="px-3 py-1 rounded-full bg-amber-100 text-amber-800 text-[10px] font-bold">
                                👥 7-SEATER MPV
                            </span>
                            <span class="text-2xl font-bold text-[#0B172A]">₹1,299</span>
                        </div>
                        <div class="h-32 rounded-2xl overflow-hidden mb-3">
                            <img src="{{ asset('images/fleet_electric.jpg') }}" alt="Maruti Ertiga" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <h3 class="font-bold text-lg text-[#0B172A]">Maruti Suzuki Ertiga</h3>
                        <p class="text-xs text-[#475569] mt-0.5">Comfortable 7-seater MPV with dual AC. Perfect for family airport trips.</p>
                        
                        <div class="flex items-center gap-3 text-xs text-[#64748B] mt-3 pt-2.5 border-t border-[#C7E0FA]/60">
                            <span>👤 7 Seats</span>
                            <span>🧳 4 Bags</span>
                            <span>❄️ ₹14/KM</span>
                        </div>
                        <span class="text-xs text-[#64748B] mt-2 block" id="selectedBadgeElectric">Click to Select</span>
                    </div>

                    <!-- Cab 4: Toyota Innova Crysta -->
                    <div onclick="pickCab('van', 1699, 'Toyota Innova Crysta', 'fleet_van.jpg')" id="cabCardVan" class="p-5 rounded-3xl border border-[#C7E0FA] bg-white cursor-pointer transition-all hover:border-[#004E92] hover:shadow-lg relative group">
                        <div class="flex items-center justify-between mb-2">
                            <span class="px-3 py-1 rounded-full bg-[#F0F6FD] border border-[#C7E0FA] text-[10px] font-bold text-[#475569]">
                                💼 VIP CHAUFFEUR
                            </span>
                            <span class="text-2xl font-bold text-[#0B172A]">₹1,699</span>
                        </div>
                        <div class="h-32 rounded-2xl overflow-hidden mb-3">
                            <img src="{{ asset('images/fleet_van.jpg') }}" alt="Innova Crysta" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <h3 class="font-bold text-lg text-[#0B172A]">Toyota Innova Crysta</h3>
                        <p class="text-xs text-[#475569] mt-0.5">Plush captain seats, supreme legroom, and refined highway cruise.</p>
                        
                        <div class="flex items-center gap-3 text-xs text-[#64748B] mt-3 pt-2.5 border-t border-[#C7E0FA]/60">
                            <span>👤 7 Seats</span>
                            <span>🧳 6 Bags</span>
                            <span>👑 ₹18/KM</span>
                        </div>
                        <span class="text-xs text-[#64748B] mt-2 block" id="selectedBadgeVan">Click to Select</span>
                    </div>

                </div>

                <div class="flex items-center justify-between pt-4 border-t border-[#E1EFFD]">
                    <button type="button" onclick="goToStep(1)" class="btn-outline-blue px-6 py-2.5 text-xs">Back</button>
                    <button type="button" onclick="goToStep(3)" class="btn-gold px-8 py-3 text-xs font-bold uppercase tracking-wider flex items-center gap-2 shadow-lg">
                        <span>Continue to Passenger Info</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                </div>
            </div>

            <!-- STEP 3: PASSENGER INFO & TRIP OPTIONS -->
            <div id="step3Box" class="bg-white rounded-[2.5rem] p-6 sm:p-10 border-2 border-[#C7E0FA] shadow-xl space-y-6 hidden">
                
                <div class="flex items-center justify-between border-b border-[#E1EFFD] pb-4">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-600 block">Step 03 of 03</span>
                        <h2 class="text-2xl font-bold text-[#0B172A]">Passenger & Trip Details</h2>
                    </div>
                    <button type="button" onclick="goToStep(2)" class="text-xs font-semibold text-[#004E92] hover:underline">← Change Cab</button>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-[#475569] mb-1.5">Passenger Full Name</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400">👤</span>
                            <input type="text" id="rName" required value="Aditya Sharma" class="input-clean w-full pl-10 pr-4 py-3 text-sm font-medium">
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-[#475569] mb-1.5">Mobile Phone (For Driver Updates)</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400">📱</span>
                            <input type="tel" id="rPhone" required value="+91 98765 43210" class="input-clean w-full pl-10 pr-4 py-3 text-sm font-medium">
                        </div>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#475569] mb-1.5">Email Address (For Instant Receipt)</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400">✉️</span>
                        <input type="email" id="rEmail" value="aditya.sharma@gmail.com" class="input-clean w-full pl-10 pr-4 py-3 text-sm font-medium">
                    </div>
                </div>

                <!-- Privacy & Data Encryption Assurance Box -->
                <div class="p-3.5 rounded-2xl bg-sky-50 border border-sky-100 flex items-center gap-3">
                    <span class="text-[#004E92] text-lg">🔒</span>
                    <p class="text-xs text-sky-950 leading-relaxed font-medium">
                        Your contact details are encrypted and shared only with your assigned Patna Transport driver for immediate pickup coordination.
                    </p>
                </div>

                <!-- Trip Options Checkboxes -->
                <div class="space-y-3">
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#475569]">Helpful Ride Options</label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
                        <label class="flex items-center gap-3 p-4 rounded-2xl bg-[#F0F6FD] border border-[#C7E0FA] cursor-pointer hover:border-[#004E92] transition-all">
                            <input type="checkbox" id="addMeet" onchange="calculateFare()" class="w-4 h-4 accent-[#004E92] rounded">
                            <div>
                                <span class="font-bold text-[#0B172A] block">Patna Airport Nameboard (+₹150)</span>
                                <span class="text-[#64748B]">Driver waits in PAT arrival terminal with your name</span>
                            </div>
                        </label>

                        <label class="flex items-center gap-3 p-4 rounded-2xl bg-[#F0F6FD] border border-[#C7E0FA] cursor-pointer hover:border-[#004E92] transition-all">
                            <input type="checkbox" id="addChild" onchange="calculateFare()" class="w-4 h-4 accent-[#004E92] rounded">
                            <div>
                                <span class="font-bold text-[#0B172A] block">Child Seat / Extra Boot (+₹100)</span>
                                <span class="text-[#64748B]">Clean child car seat or luggage carrier</span>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Itemized Fare Summary Box -->
                <div class="p-6 rounded-2xl bg-[#F0F6FD] border border-[#C7E0FA] space-y-2.5 text-xs text-[#475569]">
                    <div class="flex justify-between">
                        <span>Base Ride Fare (<span id="sumCabName">Maruti Suzuki Dzire</span>):</span>
                        <span id="sumBaseFare" class="font-bold text-[#0B172A]">₹899</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Selected Options:</span>
                        <span id="sumAddons" class="font-bold text-[#0B172A]">₹0</span>
                    </div>
                    <div class="flex justify-between text-amber-600 font-bold" id="discountRow" style="display: none;">
                        <span>Discount Code (<span id="appliedCodeText">PATNA10</span>):</span>
                        <span id="sumDiscount">-₹89</span>
                    </div>
                    <div class="flex justify-between text-slate-500 pt-1 text-[11px] border-t border-[#C7E0FA]/60">
                        <span>Tolls, Taxes & Driver Allowance:</span>
                        <span class="text-[#004E92] font-semibold">Included • No Surprise Fees</span>
                    </div>
                    <div class="flex justify-between text-base font-bold text-[#0B172A] pt-2 border-t border-[#C7E0FA]">
                        <span>Guaranteed Total Fare:</span>
                        <span id="sumTotal" class="text-3xl text-amber-600 font-bold">₹899</span>
                    </div>
                </div>

                <!-- Promo Code Box -->
                <div class="flex gap-2">
                    <input type="text" id="promoInput" placeholder="Try Promo Code: PATNA10" class="input-clean flex-grow px-4 py-3 text-xs uppercase placeholder-slate-400 font-mono">
                    <button type="button" onclick="applyPromo()" class="btn-outline-blue px-6 py-2.5 text-xs font-semibold">Apply Code</button>
                </div>

                <!-- Payment Simulator Selector -->
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#475569] mb-2">How would you like to pay?</label>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 text-xs">
                        <label class="p-3 rounded-2xl border-2 border-[#004E92] bg-[#E1EFFD] font-bold text-[#0B172A] flex flex-col items-center justify-center text-center cursor-pointer shadow-sm">
                            <input type="radio" name="payMethod" checked class="hidden">
                            <span>Cash to Driver</span>
                            <span class="text-[10px] text-[#475569] font-normal">Pay after trip</span>
                        </label>
                        <label class="p-3 rounded-2xl border border-[#C7E0FA] bg-white text-[#475569] flex flex-col items-center justify-center text-center cursor-pointer hover:border-[#004E92] transition-all">
                            <input type="radio" name="payMethod" class="hidden">
                            <span>UPI / QR Scan</span>
                            <span class="text-[10px] text-[#64748B] font-normal">GPay / PhonePe / Paytm</span>
                        </label>
                        <label class="p-3 rounded-2xl border border-[#C7E0FA] bg-white text-[#475569] flex flex-col items-center justify-center text-center cursor-pointer hover:border-[#004E92] transition-all">
                            <input type="radio" name="payMethod" class="hidden">
                            <span>Credit/Debit Card</span>
                            <span class="text-[10px] text-[#64748B] font-normal">Visa / Mastercard</span>
                        </label>
                        <label class="p-3 rounded-2xl border border-[#C7E0FA] bg-white text-[#475569] flex flex-col items-center justify-center text-center cursor-pointer hover:border-[#004E92] transition-all">
                            <input type="radio" name="payMethod" class="hidden">
                            <span>Net Banking</span>
                            <span class="text-[10px] text-[#64748B] font-normal">All Major Banks</span>
                        </label>
                    </div>
                </div>

                <div class="flex items-center justify-between pt-4 border-t border-[#E1EFFD]">
                    <button type="button" onclick="goToStep(2)" class="btn-outline-blue px-6 py-2.5 text-xs">Back</button>
                    <button type="button" onclick="confirmAndIssuePass()" class="btn-gold px-10 py-3.5 text-xs font-bold uppercase tracking-wider shadow-xl flex items-center gap-2">
                        <span>Confirm Ride & Dispatch Cab</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                    </button>
                </div>
            </div>

            <!-- STEP 4: CONFIRMED RIDE PASS & LIVE ROUTE -->
            <div id="step4Box" class="hidden space-y-6">
                <div class="bg-white rounded-[2.5rem] p-6 sm:p-10 border-2 border-[#004E92] shadow-2xl space-y-6 relative overflow-hidden">
                    <div class="absolute top-0 inset-x-0 h-1.5 bg-gradient-to-r from-sky-400 via-amber-400 to-[#004E92]"></div>

                    <!-- Pass Header -->
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between border-b border-[#E1EFFD] pb-5 gap-3">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-[#004E92] to-amber-500 text-white flex items-center justify-center font-bold text-xl shadow-md">
                                ✓
                            </div>
                            <div>
                                <span class="text-xs font-bold text-[#004E92] uppercase tracking-wider">Patna Transport • Dispatched</span>
                                <h3 class="text-2xl font-bold text-[#0B172A]">Your Cab is on the way!</h3>
                            </div>
                        </div>
                        <div class="text-left sm:text-right">
                            <span class="text-[11px] text-[#64748B] block">BOOKING REFERENCE</span>
                            <span class="text-xl font-bold text-[#0B172A] font-mono">PT-9824-PAT</span>
                        </div>
                    </div>

                    <!-- Assigned Driver & Vehicle Card -->
                    <div class="p-5 rounded-2xl bg-[#F0F6FD] border border-[#C7E0FA] flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 rounded-full overflow-hidden border-2 border-amber-400 shrink-0 shadow-sm">
                                <img src="{{ asset('images/vip_chauffeur.jpg') }}" alt="Driver Photo" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <div class="flex items-center gap-2">
                                    <h4 class="font-bold text-lg text-[#0B172A]">Ramesh Kumar</h4>
                                    <span class="bg-amber-100 text-amber-800 text-[10px] font-bold px-2 py-0.5 rounded-full">4.96 ★ Patna Transport</span>
                                </div>
                                <p class="text-xs text-[#475569]" id="passCabDisplay">Maruti Suzuki Dzire • White • Plate: BR 01 PB 8877</p>
                                <p class="text-xs text-[#64748B] mt-1">24x7 Helpline / Driver: <a href="tel:8877177161" class="text-[#004E92] font-bold hover:underline">📞 8877177161</a></p>
                            </div>
                        </div>
                        <div class="sm:text-right">
                            <span class="text-[11px] text-[#64748B] block">ESTIMATED ARRIVAL</span>
                            <span class="text-lg font-bold text-amber-600 flex items-center gap-1.5 sm:justify-end">
                                <span class="w-2.5 h-2.5 rounded-full bg-amber-500 animate-ping"></span>
                                Arriving in 3-5 Mins
                            </span>
                        </div>
                    </div>

                    <!-- Live Route Progress Bar with Moving Cab -->
                    <div class="p-6 rounded-2xl bg-[#F0F6FD] border border-[#C7E0FA] space-y-4">
                        <div class="flex justify-between text-xs text-[#475569]">
                            <span class="font-bold text-[#0B172A]">📍 Pickup: <span id="passPickupText">Boring Road, Patna</span></span>
                            <span class="font-bold text-[#004E92]">🏁 Destination: <span id="passDropoffText">Patna Airport (PAT)</span></span>
                        </div>

                        <!-- Moving Cab Line -->
                        <div class="relative h-3 rounded-full bg-[#C7E0FA] my-7">
                            <div id="cabProgressBar" class="h-full bg-gradient-to-r from-sky-500 to-amber-400 rounded-full transition-all duration-700" style="width: 35%;"></div>
                            <div id="cabMovingIcon" class="absolute -top-4 transform -translate-x-1/2 transition-all duration-700 text-2xl" style="left: 35%;">
                                🚕
                            </div>
                        </div>

                        <div class="flex justify-between text-[11px] text-[#64748B]">
                            <span>Driver Status: <strong class="text-[#0B172A]">En route from Boring Road Dispatch</strong></span>
                            <span class="text-[#004E92] font-semibold">Live GPS Link sent via SMS</span>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-wrap items-center justify-between gap-4 pt-4 border-t border-[#E1EFFD]">
                        <button type="button" onclick="window.print()" class="btn-outline-blue px-6 py-2.5 text-xs">
                            🖨️ Print / Save Receipt
                        </button>
                        <div class="flex gap-3">
                            <a href="tel:8877177161" class="btn-outline-blue px-6 py-2.5 text-xs text-[#004E92] border-[#004E92]/50 font-bold">
                                📞 Call 8877177161
                            </a>
                            <button type="button" onclick="resetWizard()" class="btn-gold px-8 py-2.5 text-xs font-bold shadow-md">
                                Book Another Cab
                            </button>
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
let bookingState = {
    mode: 'city',
    timing: 'now',
    cabKey: 'sedan',
    cabName: 'Maruti Suzuki Dzire',
    baseFare: 899,
    pickup: 'Boring Road, Patna',
    dropoff: 'Jay Prakash Narayan Airport (PAT), Patna',
    addons: {
        meet: false,
        child: false
    },
    promoApplied: false
};

function setMode(mode) {
    bookingState.mode = mode;
    const btns = ['btnModeCity', 'btnModeAirport', 'btnModeHourly'];
    btns.forEach(b => {
        const el = document.getElementById(b);
        if (el) el.className = 'px-4 py-2 rounded-full text-[#1E3A5F] hover:text-[#004E92] transition-all';
    });

    const dropoffBox = document.getElementById('bDropoffContainer');
    const hourlyBox = document.getElementById('bHourlyContainer');

    if (mode === 'city') {
        document.getElementById('btnModeCity').className = 'px-4 py-2 rounded-full bg-[#004E92] text-white transition-all shadow-sm';
        dropoffBox.classList.remove('hidden');
        hourlyBox.classList.add('hidden');
    } else if (mode === 'airport') {
        document.getElementById('btnModeAirport').className = 'px-4 py-2 rounded-full bg-[#004E92] text-white transition-all shadow-sm';
        dropoffBox.classList.remove('hidden');
        hourlyBox.classList.add('hidden');
    } else if (mode === 'hourly') {
        document.getElementById('btnModeHourly').className = 'px-4 py-2 rounded-full bg-[#004E92] text-white transition-all shadow-sm';
        dropoffBox.classList.add('hidden');
        hourlyBox.classList.remove('hidden');
    }

    calculateFare();
}

function fillLocation(field, text) {
    if (field === 'pickup') {
        document.getElementById('bPickup').value = text;
        window.showToast(`Pickup set to: ${text}`);
    } else {
        document.getElementById('bDropoff').value = text;
        window.showToast(`Destination set to: ${text}`);
    }
}

function setTimingOption(option) {
    bookingState.timing = option;
    const nowBtn = document.getElementById('btnTimeNow');
    const laterBtn = document.getElementById('btnTimeLater');
    const scheduleBox = document.getElementById('scheduleTimeGroup');

    if (option === 'now') {
        nowBtn.className = 'p-3.5 rounded-2xl border-2 border-[#004E92] bg-[#E1EFFD] text-[#0B172A] flex items-center gap-3 text-left font-semibold text-xs shadow-sm';
        laterBtn.className = 'p-3.5 rounded-2xl border border-[#C7E0FA] bg-white text-[#475569] flex items-center gap-3 text-left font-semibold text-xs hover:border-[#004E92] transition-all';
        scheduleBox.classList.add('hidden');
    } else {
        laterBtn.className = 'p-3.5 rounded-2xl border-2 border-[#004E92] bg-[#E1EFFD] text-[#0B172A] flex items-center gap-3 text-left font-semibold text-xs shadow-sm';
        nowBtn.className = 'p-3.5 rounded-2xl border border-[#C7E0FA] bg-white text-[#475569] flex items-center gap-3 text-left font-semibold text-xs hover:border-[#004E92] transition-all';
        scheduleBox.classList.remove('hidden');
    }
}

function goToStep(step) {
    for (let i = 1; i <= 4; i++) {
        const box = document.getElementById(`step${i}Box`);
        if (box) box.classList.add('hidden');

        const marker = document.getElementById(`stepMarker${i}`);
        const label = document.getElementById(`stepLabel${i}`);
        if (marker && i > 1) {
            marker.className = 'w-10 h-10 rounded-full bg-white border-2 border-[#C7E0FA] text-[#64748B] flex items-center justify-center font-bold text-sm transition-all';
        }
        if (label) label.className = 'text-[11px] font-medium text-[#64748B] mt-2 whitespace-nowrap';
    }

    const activeBox = document.getElementById(`step${step}Box`);
    if (activeBox) {
        activeBox.classList.remove('hidden');
        if (window.animate) {
            window.animate(activeBox, { opacity: [0, 1], y: [25, 0], scale: [0.97, 1] }, { duration: 0.38, ease: [0.16, 1, 0.3, 1] });
        }
    }

    // Update active marker & connecting line
    const activeMarker = document.getElementById(`stepMarker${step}`);
    const activeLabel = document.getElementById(`stepLabel${step}`);
    if (activeMarker) {
        activeMarker.className = 'w-10 h-10 rounded-full bg-[#0B172A] text-white flex items-center justify-center font-bold text-sm shadow-md ring-4 ring-sky-100 transition-all';
        if (window.animate) {
            window.animate(activeMarker, { scale: [0.85, 1.15, 1] }, { duration: 0.35, ease: [0.16, 1, 0.3, 1] });
        }
    }
    if (activeLabel) {
        activeLabel.className = 'text-[11px] font-bold text-[#0B172A] mt-2 whitespace-nowrap';
    }

    const progressPercent = ((step - 1) / 3) * 100;
    const line = document.getElementById('stepLineProgress');
    if (line) line.style.width = `${progressPercent}%`;

    calculateFare();
    window.scrollTo({ top: 160, behavior: 'smooth' });
}

function pickCab(key, fare, name, img) {
    bookingState.cabKey = key;
    bookingState.baseFare = fare;
    bookingState.cabName = name;

    const cards = ['cabCardSedan', 'cabCardSuv', 'cabCardElectric', 'cabCardVan'];
    cards.forEach(c => {
        const el = document.getElementById(c);
        if (el) {
            el.className = 'p-5 rounded-3xl border border-[#C7E0FA] bg-white cursor-pointer transition-all hover:border-[#004E92] hover:shadow-lg relative group';
        }
    });

    const activeCardId = `cabCard${key.charAt(0).toUpperCase() + key.slice(1)}`;
    const selectedEl = document.getElementById(activeCardId);
    if (selectedEl && window.animate) {
        window.animate(selectedEl, { scale: [0.96, 1.03, 1] }, { duration: 0.3, ease: [0.16, 1, 0.3, 1] });
    }

    const badges = {
        sedan: document.getElementById('selectedBadgeSedan'),
        suv: document.getElementById('selectedBadgeSuv'),
        electric: document.getElementById('selectedBadgeElectric'),
        van: document.getElementById('selectedBadgeVan'),
    };
    Object.keys(badges).forEach(k => {
        if (badges[k]) {
            badges[k].innerText = 'Click to Select';
            badges[k].className = 'text-xs text-[#64748B] mt-2 block';
        }
    });

    const activeMap = {
        sedan: 'cabCardSedan',
        suv: 'cabCardSuv',
        electric: 'cabCardElectric',
        van: 'cabCardVan',
    };
    const activeEl = document.getElementById(activeMap[key]);
    if (activeEl) {
        activeEl.className = 'p-5 rounded-3xl border-2 border-[#004E92] bg-[#E1EFFD]/60 cursor-pointer transition-all hover:shadow-lg relative group';
    }
    if (badges[key]) {
        badges[key].innerText = 'Selected ✓';
        badges[key].className = 'text-xs font-bold text-[#004E92] mt-2 block';
    }

    window.showToast(`Selected: ${name}`);
    calculateFare();
}

function calculateFare() {
    let base = bookingState.baseFare;

    if (bookingState.mode === 'hourly') {
        const h = parseInt(document.getElementById('bHourlyHours')?.value || 4);
        base = Math.round(bookingState.baseFare * (h / 2.5));
    }

    let addonTotal = 0;
    if (document.getElementById('addMeet')?.checked) addonTotal += 150;
    if (document.getElementById('addChild')?.checked) addonTotal += 100;

    let subtotal = base + addonTotal;
    let discount = 0;
    if (bookingState.promoApplied) {
        discount = Math.round(subtotal * 0.10);
    }

    const total = subtotal - discount;

    const nameEl = document.getElementById('sumCabName');
    if (nameEl) nameEl.innerText = bookingState.cabName;

    const baseEl = document.getElementById('sumBaseFare');
    if (baseEl) baseEl.innerText = `₹${base.toLocaleString('en-IN')}`;

    const addonsEl = document.getElementById('sumAddons');
    if (addonsEl) addonsEl.innerText = `₹${addonTotal.toLocaleString('en-IN')}`;

    const totalEl = document.getElementById('sumTotal');
    if (totalEl) totalEl.innerText = `₹${total.toLocaleString('en-IN')}`;

    const discountRow = document.getElementById('discountRow');
    const discountEl = document.getElementById('sumDiscount');
    if (discountRow && discountEl) {
        if (bookingState.promoApplied) {
            discountRow.style.display = 'flex';
            discountEl.innerText = `-₹${discount.toLocaleString('en-IN')}`;
        } else {
            discountRow.style.display = 'none';
        }
    }
}

function applyPromo() {
    const code = document.getElementById('promoInput')?.value.trim().toUpperCase();
    if (code === 'PATNA10' || code === 'GOLD10' || code === 'RIDE10') {
        bookingState.promoApplied = true;
        document.getElementById('appliedCodeText').innerText = code;
        calculateFare();
        window.showToast(`Promo ${code} applied: 10% discount!`);
    } else {
        window.showToast('Please enter coupon: PATNA10', 'error');
    }
}

function confirmAndIssuePass() {
    window.showToast('Cab confirmed! Patna Transport driver dispatched.');

    document.getElementById('step3Box').classList.add('hidden');
    document.getElementById('step4Box').classList.remove('hidden');

    document.getElementById('passCabDisplay').innerText = `${bookingState.cabName} • White • Plate: BR 01 PB 8877`;
    document.getElementById('passPickupText').innerText = document.getElementById('bPickup')?.value || 'Boring Road, Patna';
    document.getElementById('passDropoffText').innerText = document.getElementById('bDropoff')?.value || 'Patna Airport (PAT)';

    const marker4 = document.getElementById('stepMarker4');
    const label4 = document.getElementById('stepLabel4');
    if (marker4) marker4.className = 'w-10 h-10 rounded-full bg-[#004E92] text-white flex items-center justify-center font-bold text-sm shadow-md ring-4 ring-sky-100';
    if (label4) label4.className = 'text-[11px] font-bold text-[#004E92] mt-2 whitespace-nowrap';

    const line = document.getElementById('stepLineProgress');
    if (line) line.style.width = '100%';

    // Moving cab animation
    let p = 35;
    const interval = setInterval(() => {
        p += 5;
        if (p > 85) clearInterval(interval);
        const bar = document.getElementById('cabProgressBar');
        const icon = document.getElementById('cabMovingIcon');
        if (bar && icon) {
            bar.style.width = `${p}%`;
            icon.style.left = `${p}%`;
        }
    }, 900);

    window.scrollTo({ top: 140, behavior: 'smooth' });
}

function resetWizard() {
    document.getElementById('step4Box').classList.add('hidden');
    goToStep(1);
    window.showToast('Ready for new ride booking.');
}

document.addEventListener('DOMContentLoaded', () => {
    const p = new URLSearchParams(window.location.search);
    const v = p.get('vehicle');
    if (v === 'sedan') pickCab('sedan', 899, 'Maruti Suzuki Dzire', 'hero_sedan.jpg');
    if (v === 'suv') pickCab('suv', 1499, 'Mahindra Scorpio Classic', 'fleet_suv.jpg');
    if (v === 'van') pickCab('electric', 1299, 'Maruti Suzuki Ertiga (7-Seater)', 'fleet_electric.jpg');
    if (v === 'innova') pickCab('van', 1699, 'Toyota Innova Crysta', 'fleet_van.jpg');
    if (v === 'electric') pickCab('sedan', 999, 'Tata Tigor EV', 'electric_hyper.jpg');
    if (v === 'traveler') pickCab('van', 2499, 'Executive Tour Traveler', 'fleet_van.jpg');
});
</script>
@endpush
