@extends('layouts.app')

@section('title', 'Book a Cab Online | Instant Fare Calculator')

@section('content')
<section class="py-12 px-4 sm:px-6 lg:px-8 bg-[#F5F7F3] min-h-screen">
    <div class="max-w-4xl mx-auto">
        
        <!-- Page Title -->
        <div class="text-center mb-10">
            <span class="inline-block px-4 py-1.5 rounded-full bg-white border border-[#D8E2D5] text-[#355E3B] text-xs font-semibold uppercase tracking-wider mb-3 shadow-sm">
                Fast & Transparent Booking
            </span>
            <h1 class="text-3xl sm:text-5xl font-serif text-[#1A3320]">
                Book Your <span class="text-emerald-700 italic">Cab in 60 Seconds</span>
            </h1>
            <p class="text-[#4A6350] text-sm sm:text-base mt-2 font-light">
                Fixed prices, verified drivers, and live ride tracking.
            </p>
        </div>

        <!-- 4-Step Progress Pill Strip -->
        <div class="grid grid-cols-4 gap-2 text-center text-xs mb-10 font-medium">
            <div id="stepTab1" class="py-3 px-2 rounded-2xl bg-[#1A3320] text-white shadow-md">
                <span class="block text-[10px] text-emerald-300">STEP 1</span>
                <span>Route & Time</span>
            </div>
            <div id="stepTab2" class="py-3 px-2 rounded-2xl bg-white border border-[#D8E2D5] text-[#5C7562]">
                <span class="block text-[10px] text-[#7A9C76]">STEP 2</span>
                <span>Choose Cab</span>
            </div>
            <div id="stepTab3" class="py-3 px-2 rounded-2xl bg-white border border-[#D8E2D5] text-[#5C7562]">
                <span class="block text-[10px] text-[#7A9C76]">STEP 3</span>
                <span>Rider Info</span>
            </div>
            <div id="stepTab4" class="py-3 px-2 rounded-2xl bg-white border border-[#D8E2D5] text-[#5C7562]">
                <span class="block text-[10px] text-[#7A9C76]">STEP 4</span>
                <span>Ride Pass</span>
            </div>
        </div>

        <!-- STEP 1: ROUTE & TIME -->
        <div id="step1Box" class="bg-white rounded-[2.5rem] p-6 sm:p-10 border border-[#D8E2D5] shadow-xl space-y-6">
            <div class="border-b border-[#EAF0E5] pb-4">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-700 block">Step 1 of 4</span>
                <h2 class="font-serif text-2xl font-bold text-[#1A3320]">Enter Your Pickup & Drop Location</h2>
            </div>

            <!-- Ride Mode Pills -->
            <div class="flex gap-2 bg-[#F5F7F3] p-1.5 rounded-2xl border border-[#DCE5D9] text-xs font-semibold">
                <button type="button" onclick="setMode('city')" id="btnModeCity" class="flex-1 py-2.5 rounded-xl bg-[#1A3320] text-white transition-all">City Ride</button>
                <button type="button" onclick="setMode('airport')" id="btnModeAirport" class="flex-1 py-2.5 rounded-xl text-[#4A6350] hover:text-[#1A3320] transition-all">Airport Transfer</button>
                <button type="button" onclick="setMode('hourly')" id="btnModeHourly" class="flex-1 py-2.5 rounded-xl text-[#4A6350] hover:text-[#1A3320] transition-all">Hourly Rental</button>
            </div>

            <div class="space-y-4">
                <!-- Pickup -->
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#4A6350] mb-1.5">Pickup Location</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-emerald-600">📍</span>
                        <input type="text" id="bPickup" required value="{{ request('pickup') ?? 'Connaught Place, Central City' }}" class="w-full pl-10 pr-4 py-3 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] text-sm text-[#14291B] font-medium focus:outline-none focus:border-emerald-600 focus:bg-white">
                    </div>
                </div>

                <!-- Dropoff -->
                <div id="bDropoffContainer">
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#4A6350] mb-1.5">Drop-off Destination</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-emerald-600">🏁</span>
                        <input type="text" id="bDropoff" required value="{{ request('dropoff') ?? 'International Airport Terminal 3' }}" class="w-full pl-10 pr-4 py-3 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] text-sm text-[#14291B] font-medium focus:outline-none focus:border-emerald-600 focus:bg-white">
                    </div>
                </div>

                <!-- Hourly Dropdown (Hidden unless hourly) -->
                <div id="bHourlyContainer" class="hidden">
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#4A6350] mb-1.5">Hours on Standby</label>
                    <select id="bHourlyHours" onchange="calculateFare()" class="w-full px-4 py-3 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] text-sm text-[#14291B] font-medium focus:outline-none focus:border-emerald-600">
                        <option value="2">2 Hours Dedicated Standby</option>
                        <option value="4" selected>4 Hours Standby (Popular for meetings)</option>
                        <option value="8">8 Hours Full Day Standby</option>
                        <option value="12">12 Hours Full Day City Tour</option>
                    </select>
                </div>

                <!-- Date & Time -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-[#4A6350] mb-1.5">Pickup Date & Time</label>
                        <input type="datetime-local" id="bDatetime" value="{{ date('Y-m-d\TH:i', strtotime('+1 hour')) }}" class="w-full px-4 py-2.5 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] text-sm text-[#14291B] font-medium focus:outline-none focus:border-emerald-600">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-[#4A6350] mb-1.5">Flight Number (Optional for Airport)</label>
                        <input type="text" id="bFlight" placeholder="e.g. AI 102 / 6E 543" class="w-full px-4 py-2.5 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] text-sm text-[#14291B] font-medium uppercase placeholder-slate-400 focus:outline-none focus:border-emerald-600">
                    </div>
                </div>

                <!-- Estimated Route Strip -->
                <div class="p-4 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] flex items-center justify-between text-xs text-[#4A6350]">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                        <span>Estimated Route Distance: <strong class="text-[#1A3320]">~24.5 km</strong></span>
                    </div>
                    <div>
                        <span>Estimated Travel Time: <strong class="text-emerald-700">~32 mins</strong></span>
                    </div>
                </div>
            </div>

            <div class="flex justify-end pt-4">
                <button type="button" onclick="goToStep(2)" class="btn-emerald px-8 py-3.5 text-xs font-bold uppercase tracking-wider flex items-center gap-2">
                    <span>Continue to Choose Cab</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </button>
            </div>
        </div>

        <!-- STEP 2: CHOOSE CAB -->
        <div id="step2Box" class="bg-white rounded-[2.5rem] p-6 sm:p-10 border border-[#D8E2D5] shadow-xl space-y-6 hidden">
            <div class="flex items-center justify-between border-b border-[#EAF0E5] pb-4">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-emerald-700 block">Step 2 of 4</span>
                    <h2 class="font-serif text-2xl font-bold text-[#1A3320]">Select Your Preferred Cab</h2>
                </div>
                <button type="button" onclick="goToStep(1)" class="text-xs font-semibold text-emerald-700 hover:underline">← Change Route</button>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                
                <!-- Sedan -->
                <div onclick="pickCab('sedan', 35, 'Comfort Prime Sedan', 'hero_sedan.jpg')" id="cabCardSedan" class="p-5 rounded-3xl border-2 border-emerald-600 bg-emerald-50/40 cursor-pointer transition-all hover:shadow-md">
                    <div class="flex items-center justify-between mb-2">
                        <span class="px-3 py-1 rounded-full bg-white border border-[#D8E2D5] text-[10px] font-bold text-[#1A3320]">POPULAR</span>
                        <span class="text-xl font-bold text-emerald-700">$35.00</span>
                    </div>
                    <div class="h-28 rounded-2xl overflow-hidden mb-3">
                        <img src="{{ asset('images/hero_sedan.jpg') }}" alt="Sedan" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-serif font-bold text-lg text-[#1A3320]">Comfort Prime Sedan</h3>
                    <p class="text-xs text-[#4A6350]">4 Passengers • 3 Bags • Clean AC</p>
                    <span class="text-xs font-bold text-emerald-700 mt-2 block" id="selectedBadgeSedan">Selected ✓</span>
                </div>

                <!-- SUV -->
                <div onclick="pickCab('suv', 55, 'Spacious Family SUV', 'fleet_suv.jpg')" id="cabCardSuv" class="p-5 rounded-3xl border border-[#DCE5D9] bg-white cursor-pointer transition-all hover:border-emerald-600 hover:shadow-md">
                    <div class="flex items-center justify-between mb-2">
                        <span class="px-3 py-1 rounded-full bg-[#F5F7F3] border border-[#D8E2D5] text-[10px] font-bold text-[#5C7562]">EXTRA ROOM</span>
                        <span class="text-xl font-bold text-[#1A3320]">$55.00</span>
                    </div>
                    <div class="h-28 rounded-2xl overflow-hidden mb-3">
                        <img src="{{ asset('images/fleet_suv.jpg') }}" alt="SUV" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-serif font-bold text-lg text-[#1A3320]">Spacious Family SUV</h3>
                    <p class="text-xs text-[#4A6350]">6 Passengers • 5 Bags • Big Trunk</p>
                    <span class="text-xs text-[#7A9C76] mt-2 block" id="selectedBadgeSuv">Click to Select</span>
                </div>

                <!-- Electric -->
                <div onclick="pickCab('electric', 40, 'Eco Green Electric Cab', 'fleet_electric.jpg')" id="cabCardElectric" class="p-5 rounded-3xl border border-[#DCE5D9] bg-white cursor-pointer transition-all hover:border-emerald-600 hover:shadow-md">
                    <div class="flex items-center justify-between mb-2">
                        <span class="px-3 py-1 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-bold">100% GREEN</span>
                        <span class="text-xl font-bold text-[#1A3320]">$40.00</span>
                    </div>
                    <div class="h-28 rounded-2xl overflow-hidden mb-3">
                        <img src="{{ asset('images/fleet_electric.jpg') }}" alt="Electric" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-serif font-bold text-lg text-[#1A3320]">Eco Green Electric Cab</h3>
                    <p class="text-xs text-[#4A6350]">4 Passengers • 3 Bags • Silent Ride</p>
                    <span class="text-xs text-[#7A9C76] mt-2 block" id="selectedBadgeElectric">Click to Select</span>
                </div>

                <!-- Van -->
                <div onclick="pickCab('van', 75, 'Executive Travel Van', 'fleet_van.jpg')" id="cabCardVan" class="p-5 rounded-3xl border border-[#DCE5D9] bg-white cursor-pointer transition-all hover:border-emerald-600 hover:shadow-md">
                    <div class="flex items-center justify-between mb-2">
                        <span class="px-3 py-1 rounded-full bg-[#F5F7F3] border border-[#D8E2D5] text-[10px] font-bold text-[#5C7562]">GROUP TOUR</span>
                        <span class="text-xl font-bold text-[#1A3320]">$75.00</span>
                    </div>
                    <div class="h-28 rounded-2xl overflow-hidden mb-3">
                        <img src="{{ asset('images/fleet_van.jpg') }}" alt="Van" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-serif font-bold text-lg text-[#1A3320]">Executive Travel Van</h3>
                    <p class="text-xs text-[#4A6350]">7 Passengers • 10 Bags • High Roof</p>
                    <span class="text-xs text-[#7A9C76] mt-2 block" id="selectedBadgeVan">Click to Select</span>
                </div>

            </div>

            <div class="flex items-center justify-between pt-4 border-t border-[#EAF0E5]">
                <button type="button" onclick="goToStep(1)" class="btn-outline px-6 py-2.5 text-xs">Back</button>
                <button type="button" onclick="goToStep(3)" class="btn-emerald px-8 py-3 text-xs font-bold uppercase tracking-wider">
                    Next: Rider Details →
                </button>
            </div>
        </div>

        <!-- STEP 3: RIDER DETAILS & SIMPLE PREFERENCES -->
        <div id="step3Box" class="bg-white rounded-[2.5rem] p-6 sm:p-10 border border-[#D8E2D5] shadow-xl space-y-6 hidden">
            <div class="flex items-center justify-between border-b border-[#EAF0E5] pb-4">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-emerald-700 block">Step 3 of 4</span>
                    <h2 class="font-serif text-2xl font-bold text-[#1A3320]">Passenger & Trip Details</h2>
                </div>
                <button type="button" onclick="goToStep(2)" class="text-xs font-semibold text-emerald-700 hover:underline">← Change Cab</button>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#4A6350] mb-1.5">Passenger Full Name</label>
                    <input type="text" id="rName" required value="Aditya Sharma" class="w-full px-4 py-3 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] text-sm text-[#14291B] font-medium focus:outline-none focus:border-emerald-600 focus:bg-white">
                </div>
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-[#4A6350] mb-1.5">Mobile Phone (For Driver Updates)</label>
                    <input type="tel" id="rPhone" required value="+91 98765 43210" class="w-full px-4 py-3 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] text-sm text-[#14291B] font-medium focus:outline-none focus:border-emerald-600 focus:bg-white">
                </div>
            </div>

            <!-- Optional Add-ons -->
            <div class="space-y-3">
                <label class="block text-xs font-semibold uppercase tracking-wider text-[#4A6350]">Trip Options</label>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
                    <label class="flex items-center gap-3 p-4 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] cursor-pointer hover:border-emerald-600 transition-all">
                        <input type="checkbox" id="addMeet" onchange="calculateFare()" class="w-4 h-4 accent-emerald-600 rounded">
                        <div>
                            <span class="font-bold text-[#1A3320] block">Airport Nameboard Pickup (+$10)</span>
                            <span class="text-[#5C7562]">Driver waits inside airport arrivals hall with your name</span>
                        </div>
                    </label>

                    <label class="flex items-center gap-3 p-4 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] cursor-pointer hover:border-emerald-600 transition-all">
                        <input type="checkbox" id="addChild" onchange="calculateFare()" class="w-4 h-4 accent-emerald-600 rounded">
                        <div>
                            <span class="font-bold text-[#1A3320] block">Child Safety Seat (+$8)</span>
                            <span class="text-[#5C7562]">Sanitized child car seat securely installed in rear</span>
                        </div>
                    </label>
                </div>
            </div>

            <!-- Fare Summary Box -->
            <div class="p-6 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] space-y-2.5 text-xs text-[#4A6350]">
                <div class="flex justify-between">
                    <span>Base Fare (<span id="sumCabName">Comfort Prime Sedan</span>):</span>
                    <span id="sumBaseFare" class="font-bold text-[#1A3320]">$35.00</span>
                </div>
                <div class="flex justify-between">
                    <span>Selected Options:</span>
                    <span id="sumAddons" class="font-bold text-[#1A3320]">$0.00</span>
                </div>
                <div class="flex justify-between text-emerald-700" id="discountRow" style="display: none;">
                    <span>Promo Discount (<span id="appliedCodeText">RIDE10</span>):</span>
                    <span id="sumDiscount" class="font-bold">-$3.50</span>
                </div>
                <div class="flex justify-between text-base font-bold text-[#1A3320] pt-2 border-t border-[#DCE5D9]">
                    <span>Total Estimated Fare:</span>
                    <span id="sumTotal" class="text-xl text-emerald-700 font-serif">$35.00</span>
                </div>
            </div>

            <!-- Promo Code Input -->
            <div class="flex gap-2">
                <input type="text" id="promoInput" placeholder="Try Promo Code: RIDE10" class="flex-grow px-4 py-2.5 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] text-xs uppercase placeholder-slate-400 focus:outline-none focus:border-emerald-600">
                <button type="button" onclick="applyPromo()" class="btn-outline px-6 py-2.5 text-xs font-semibold">Apply Code</button>
            </div>

            <div class="flex items-center justify-between pt-4 border-t border-[#EAF0E5]">
                <button type="button" onclick="goToStep(2)" class="btn-outline px-6 py-2.5 text-xs">Back</button>
                <button type="button" onclick="confirmAndIssuePass()" class="btn-emerald px-8 py-3 text-xs font-bold uppercase tracking-wider shadow-lg">
                    Confirm & Dispatch Cab ✓
                </button>
            </div>
        </div>

        <!-- STEP 4: CONFIRMED RIDE PASS & LIVE ROUTE (Clean Yoga Style & 2x Better) -->
        <div id="step4Box" class="hidden space-y-6">
            <div class="bg-white rounded-[2.5rem] p-6 sm:p-10 border-2 border-emerald-600/60 shadow-2xl space-y-6">
                
                <!-- Pass Header -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between border-b border-[#EAF0E5] pb-5 gap-3">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-emerald-600 text-white flex items-center justify-center font-bold text-lg">
                            ✓
                        </div>
                        <div>
                            <span class="text-xs font-bold text-emerald-700 uppercase tracking-wider">Ride Confirmed</span>
                            <h3 class="font-serif text-2xl font-bold text-[#1A3320]">Your Cab is on the way!</h3>
                        </div>
                    </div>
                    <div class="text-left sm:text-right">
                        <span class="text-[11px] text-[#7A9C76] block">BOOKING ID</span>
                        <span class="text-lg font-bold text-[#1A3320] font-mono">VC-9824-DEL</span>
                    </div>
                </div>

                <!-- Driver & Car Card -->
                <div class="p-5 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 rounded-full overflow-hidden border-2 border-emerald-600 shrink-0">
                            <img src="{{ asset('images/vip_chauffeur.jpg') }}" alt="Driver Photo" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <div class="flex items-center gap-2">
                                <h4 class="font-bold text-base text-[#1A3320]">Ramesh Kumar</h4>
                                <span class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-2 py-0.5 rounded-full">4.9 ★ (3,120 Trips)</span>
                            </div>
                            <p class="text-xs text-[#5C7562]" id="passCabDisplay">Comfort Prime Sedan • Plate: DL 01 AB 8890</p>
                        </div>
                    </div>
                    <div class="sm:text-right">
                        <span class="text-[11px] text-[#7A9C76] block">DRIVER ETA</span>
                        <span class="text-base font-bold text-emerald-700">Arriving in 3 Mins</span>
                    </div>
                </div>

                <!-- Live Route Progress Bar -->
                <div class="p-6 rounded-2xl bg-[#F5F7F3] border border-[#DCE5D9] space-y-4">
                    <div class="flex justify-between text-xs text-[#5C7562]">
                        <span class="font-bold text-[#1A3320]">📍 Pickup: <span id="passPickupText">Connaught Place</span></span>
                        <span class="font-bold text-emerald-700">🏁 Destination: <span id="passDropoffText">Airport T3</span></span>
                    </div>

                    <!-- Moving Cab Line -->
                    <div class="relative h-2.5 rounded-full bg-[#DCE5D9] my-6">
                        <div id="cabProgressBar" class="h-full bg-emerald-600 rounded-full transition-all duration-700" style="width: 35%;"></div>
                        <div id="cabMovingIcon" class="absolute -top-3.5 transform -translate-x-1/2 transition-all duration-700 text-lg" style="left: 35%;">
                            🚖
                        </div>
                    </div>

                    <div class="flex justify-between text-[11px] text-[#7A9C76]">
                        <span>Status: Driver on the way to pickup</span>
                        <span>Direct Call: <strong>+91 98765 00112</strong></span>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-wrap items-center justify-between gap-4 pt-4 border-t border-[#EAF0E5]">
                    <button type="button" onclick="window.print()" class="btn-outline px-6 py-2.5 text-xs">
                        🖨️ Print Receipt
                    </button>
                    <button type="button" onclick="resetWizard()" class="btn-primary px-8 py-2.5 text-xs font-semibold">
                        Book Another Cab
                    </button>
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
    cabKey: 'sedan',
    cabName: 'Comfort Prime Sedan',
    baseFare: 35,
    pickup: 'Connaught Place, Central City',
    dropoff: 'International Airport Terminal 3',
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
        document.getElementById(b).className = 'flex-1 py-2.5 rounded-xl text-[#4A6350] hover:text-[#1A3320] transition-all';
    });

    const dropoffBox = document.getElementById('bDropoffContainer');
    const hourlyBox = document.getElementById('bHourlyContainer');

    if (mode === 'city') {
        document.getElementById('btnModeCity').className = 'flex-1 py-2.5 rounded-xl bg-[#1A3320] text-white transition-all';
        dropoffBox.classList.remove('hidden');
        hourlyBox.classList.add('hidden');
    } else if (mode === 'airport') {
        document.getElementById('btnModeAirport').className = 'flex-1 py-2.5 rounded-xl bg-[#1A3320] text-white transition-all';
        dropoffBox.classList.remove('hidden');
        hourlyBox.classList.add('hidden');
    } else if (mode === 'hourly') {
        document.getElementById('btnModeHourly').className = 'flex-1 py-2.5 rounded-xl bg-[#1A3320] text-white transition-all';
        dropoffBox.classList.add('hidden');
        hourlyBox.classList.remove('hidden');
    }

    calculateFare();
}

function goToStep(step) {
    for (let i = 1; i <= 4; i++) {
        const box = document.getElementById(`step${i}Box`);
        if (box) box.classList.add('hidden');

        const tab = document.getElementById(`stepTab${i}`);
        if (tab) {
            tab.className = 'py-3 px-2 rounded-2xl bg-white border border-[#D8E2D5] text-[#5C7562]';
        }
    }

    const activeBox = document.getElementById(`step${step}Box`);
    if (activeBox) activeBox.classList.remove('hidden');

    const activeTab = document.getElementById(`stepTab${step}`);
    if (activeTab) {
        activeTab.className = 'py-3 px-2 rounded-2xl bg-[#1A3320] text-white shadow-md';
    }

    calculateFare();
    window.scrollTo({ top: 180, behavior: 'smooth' });
}

function pickCab(key, fare, name, img) {
    bookingState.cabKey = key;
    bookingState.baseFare = fare;
    bookingState.cabName = name;

    const cards = ['cabCardSedan', 'cabCardSuv', 'cabCardElectric', 'cabCardVan'];
    cards.forEach(c => {
        const el = document.getElementById(c);
        if (el) {
            el.className = 'p-5 rounded-3xl border border-[#DCE5D9] bg-white cursor-pointer transition-all hover:border-emerald-600 hover:shadow-md';
        }
    });

    const badges = {
        sedan: document.getElementById('selectedBadgeSedan'),
        suv: document.getElementById('selectedBadgeSuv'),
        electric: document.getElementById('selectedBadgeElectric'),
        van: document.getElementById('selectedBadgeVan'),
    };
    Object.keys(badges).forEach(k => {
        if (badges[k]) {
            badges[k].innerText = 'Click to Select';
            badges[k].className = 'text-xs text-[#7A9C76] mt-2 block';
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
        activeEl.className = 'p-5 rounded-3xl border-2 border-emerald-600 bg-emerald-50/40 cursor-pointer transition-all hover:shadow-md';
    }
    if (badges[key]) {
        badges[key].innerText = 'Selected ✓';
        badges[key].className = 'text-xs font-bold text-emerald-700 mt-2 block';
    }

    window.showToast(`Selected: ${name}`);
    calculateFare();
}

function calculateFare() {
    let base = bookingState.baseFare;

    if (bookingState.mode === 'hourly') {
        const h = parseInt(document.getElementById('bHourlyHours')?.value || 4);
        base = bookingState.baseFare * (h / 2);
    }

    let addonTotal = 0;
    if (document.getElementById('addMeet')?.checked) addonTotal += 10;
    if (document.getElementById('addChild')?.checked) addonTotal += 8;

    let subtotal = base + addonTotal;
    let discount = 0;
    if (bookingState.promoApplied) {
        discount = subtotal * 0.10;
    }

    const total = subtotal - discount;

    const nameEl = document.getElementById('sumCabName');
    if (nameEl) nameEl.innerText = bookingState.cabName;

    const baseEl = document.getElementById('sumBaseFare');
    if (baseEl) baseEl.innerText = `$${base.toFixed(2)}`;

    const addonsEl = document.getElementById('sumAddons');
    if (addonsEl) addonsEl.innerText = `$${addonTotal.toFixed(2)}`;

    const totalEl = document.getElementById('sumTotal');
    if (totalEl) totalEl.innerText = `$${total.toFixed(2)}`;

    const discountRow = document.getElementById('discountRow');
    const discountEl = document.getElementById('sumDiscount');
    if (discountRow && discountEl) {
        if (bookingState.promoApplied) {
            discountRow.style.display = 'flex';
            discountEl.innerText = `-$${discount.toFixed(2)}`;
        } else {
            discountRow.style.display = 'none';
        }
    }
}

function applyPromo() {
    const code = document.getElementById('promoInput')?.value.trim().toUpperCase();
    if (code === 'RIDE10' || code === 'LUXE10') {
        bookingState.promoApplied = true;
        document.getElementById('appliedCodeText').innerText = code;
        calculateFare();
        window.showToast(`Promo ${code} applied: 10% discount!`);
    } else {
        window.showToast('Please enter code: RIDE10', 'error');
    }
}

function confirmAndIssuePass() {
    window.showToast('Cab confirmed! Driver assigned.');

    document.getElementById('step3Box').classList.add('hidden');
    document.getElementById('step4Box').classList.remove('hidden');

    document.getElementById('passCabDisplay').innerText = `${bookingState.cabName} • Plate: DL 01 AB 8890`;
    document.getElementById('passPickupText').innerText = document.getElementById('bPickup')?.value || 'City Center';
    document.getElementById('passDropoffText').innerText = document.getElementById('bDropoff')?.value || 'Destination';

    const tab4 = document.getElementById('stepTab4');
    if (tab4) tab4.className = 'py-3 px-2 rounded-2xl bg-[#1A3320] text-white shadow-md';

    // Animate moving cab icon along route line
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

    window.scrollTo({ top: 150, behavior: 'smooth' });
}

function resetWizard() {
    document.getElementById('step4Box').classList.add('hidden');
    goToStep(1);
    window.showToast('Ready for new ride booking.');
}

document.addEventListener('DOMContentLoaded', () => {
    const p = new URLSearchParams(window.location.search);
    const v = p.get('vehicle');
    if (v === 'sedan') pickCab('sedan', 35, 'Comfort Prime Sedan', 'hero_sedan.jpg');
    if (v === 'suv') pickCab('suv', 55, 'Spacious Family SUV', 'fleet_suv.jpg');
    if (v === 'electric') pickCab('electric', 40, 'Eco Green Electric Cab', 'fleet_electric.jpg');
    if (v === 'van') pickCab('van', 75, 'Executive Travel Van', 'fleet_van.jpg');
});
</script>
@endpush
