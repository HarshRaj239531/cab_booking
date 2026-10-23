@extends('layouts.app')

@section('title', 'Safety Standards & Verified Drivers')

@section('content')
<!-- SAFETY HEADER (Light Blue & Golden Atmosphere) -->
<section class="py-16 px-6 bg-gradient-to-b from-[#E2EEFB] via-[#F0F6FD] to-[#F0F6FD] border-b border-[#C7E0FA] text-center relative overflow-hidden">
    <!-- Ambient Glows -->
    <div class="absolute top-0 left-1/4 w-80 h-80 bg-sky-400/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-10 right-1/4 w-72 h-72 bg-amber-400/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-4xl mx-auto relative z-10">
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/90 border border-[#C7E0FA] text-[#0369A1] text-xs font-bold uppercase tracking-wider mb-4 shadow-sm">
            <span class="w-2 h-2 rounded-full bg-amber-400"></span>
            Your Safety is Our Top Priority
        </span>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-[#0B172A] mb-4">
            Safe, Clean & <span class="text-amber-500">Trusted Rides</span>
        </h1>
        <p class="text-[#475569] text-sm sm:text-base max-w-xl mx-auto font-light leading-relaxed">
            Every driver is background-checked, every cab is inspected daily, and your live ride details are tracked 24/7 for total peace of mind.
        </p>
    </div>
</section>

<!-- 4 SAFETY PILLARS -->
<section class="py-20 px-6 bg-white border-b border-[#C7E0FA]">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Pillar 1 -->
            <div class="bg-[#F0F6FD] border border-[#C7E0FA] p-8 rounded-[2rem] hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 bg-sky-100 text-[#0284C7] rounded-2xl flex items-center justify-center mb-6 shadow-sm">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-xl font-serif font-semibold text-[#0B172A] mb-2">Verified Drivers</h3>
                <p class="text-[#475569] text-xs sm:text-sm font-light leading-relaxed">
                    100% police background verified, commercial driving license checked, and trained for courteous behavior and safe driving.
                </p>
            </div>

            <!-- Pillar 2 -->
            <div class="bg-[#F0F6FD] border border-[#C7E0FA] p-8 rounded-[2rem] hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 bg-amber-100 text-amber-700 rounded-2xl flex items-center justify-center mb-6 shadow-sm">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-xl font-serif font-semibold text-[#0B172A] mb-2">24/7 Live GPS</h3>
                <p class="text-[#475569] text-xs sm:text-sm font-light leading-relaxed">
                    Every trip is tracked live on satellite maps. You can share your live ride link with family via WhatsApp with one tap.
                </p>
            </div>

            <!-- Pillar 3 -->
            <div class="bg-[#F0F6FD] border border-[#C7E0FA] p-8 rounded-[2rem] hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 bg-sky-100 text-[#0284C7] rounded-2xl flex items-center justify-center mb-6 shadow-sm">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                </div>
                <h3 class="text-xl font-serif font-semibold text-[#0B172A] mb-2">Daily Sanitization</h3>
                <p class="text-[#475569] text-xs sm:text-sm font-light leading-relaxed">
                    Cabs are vacuumed, cleaned, and air-sanitized before starting duties. Working AC and clean upholstery guaranteed on every trip.
                </p>
            </div>

            <!-- Pillar 4 -->
            <div class="bg-[#F0F6FD] border border-[#C7E0FA] p-8 rounded-[2rem] hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 bg-amber-100 text-amber-700 rounded-2xl flex items-center justify-center mb-6 shadow-sm">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                </div>
                <h3 class="text-xl font-serif font-semibold text-[#0B172A] mb-2">Emergency Support</h3>
                <p class="text-[#475569] text-xs sm:text-sm font-light leading-relaxed">
                    Direct access to our 24/7 emergency response team. One-click SOS button in driver app and passenger SMS alerts.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- COMPARISON MATRIX: REGULAR LOCAL CAB VS VELOCE CABS -->
<section class="py-20 px-6 bg-[#F0F6FD] border-b border-[#C7E0FA]">
    <div class="max-w-5xl mx-auto">
        <div class="text-center mb-12">
            <span class="text-amber-600 font-bold text-xs tracking-[0.3em] uppercase mb-2 block">Why Choose Us</span>
            <h2 class="text-3xl sm:text-4xl font-serif text-[#0B172A]">How We Are Different</h2>
        </div>

        <div class="bg-white rounded-[2rem] border-2 border-[#C7E0FA] overflow-hidden shadow-lg">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs sm:text-sm">
                    <thead class="bg-[#E1EFFD] border-b border-[#C7E0FA] text-[#0B172A] font-bold">
                        <tr>
                            <th class="p-4 sm:p-5">Service Feature</th>
                            <th class="p-4 sm:p-5 text-[#64748B]">Ordinary Taxi / Rickshaw</th>
                            <th class="p-4 sm:p-5 text-[#0284C7] bg-[#E1EFFD]/80 border-l border-[#C7E0FA]">VELOCE GOLD CABS</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#E1EFFD] text-[#475569]">
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-[#0B172A]">Pricing & Fares</td>
                            <td class="p-4 sm:p-5 text-[#64748B]">Bargaining or sudden surge multipliers</td>
                            <td class="p-4 sm:p-5 text-[#0284C7] bg-sky-50/50 border-l border-[#C7E0FA] font-bold">Fixed price quote (Zero surge)</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-[#0B172A]">Driver Background</td>
                            <td class="p-4 sm:p-5 text-[#64748B]">Not verified, unknown driver identity</td>
                            <td class="p-4 sm:p-5 text-[#0284C7] bg-sky-50/50 border-l border-[#C7E0FA] font-bold">100% Police & Document Verified</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-[#0B172A]">AC & Car Cleanliness</td>
                            <td class="p-4 sm:p-5 text-[#64748B]">Often unwashed, AC refusal common</td>
                            <td class="p-4 sm:p-5 text-[#0284C7] bg-sky-50/50 border-l border-[#C7E0FA] font-bold">Clean interior & AC always switched on</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-[#0B172A]">Airport Delay Support</td>
                            <td class="p-4 sm:p-5 text-[#64748B]">Driver leaves or charges heavy extra wait</td>
                            <td class="p-4 sm:p-5 text-[#0284C7] bg-sky-50/50 border-l border-[#C7E0FA] font-bold">Flight tracked with 60 mins free wait</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-[#0B172A]">Cancellations</td>
                            <td class="p-4 sm:p-5 text-[#64748B]">Frequent cancellations by drivers</td>
                            <td class="p-4 sm:p-5 text-[#0284C7] bg-sky-50/50 border-l border-[#C7E0FA] font-bold">Guaranteed confirmed ride dispatch</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- TOP DRIVERS GALLERY -->
<section class="py-20 px-6 bg-white">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-14">
            <span class="text-amber-600 font-bold text-xs tracking-[0.3em] uppercase mb-2 block">Our People</span>
            <h2 class="text-3xl sm:text-4xl font-serif text-[#0B172A]">Meet Our Top-Rated Drivers</h2>
            <p class="text-[#475569] text-sm max-w-md mx-auto mt-2 font-light">Experienced, respectful, and verified professionals who care for your comfort.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="card-clean p-6 text-center space-y-3">
                <div class="w-20 h-20 rounded-full overflow-hidden mx-auto border-2 border-amber-400 p-0.5 shadow-sm">
                    <img src="{{ asset('images/vip_chauffeur.jpg') }}" alt="Ramesh Kumar" class="w-full h-full object-cover rounded-full">
                </div>
                <div>
                    <h3 class="font-serif font-bold text-lg text-[#0B172A]">Ramesh Kumar</h3>
                    <p class="text-xs text-[#0284C7] font-semibold">City & Airport Specialist</p>
                </div>
                <p class="text-xs text-[#64748B] leading-relaxed">
                    8 years with Veloce Cabs. Known for polite driving, punctuality, and route knowledge.
                </p>
                <div class="pt-2 border-t border-[#E1EFFD] text-xs font-bold text-[#0B172A]">
                    <span class="text-amber-500">★ 4.96</span> Rating • 3,420 Trips
                </div>
            </div>

            <div class="card-clean p-6 text-center space-y-3">
                <div class="w-20 h-20 rounded-full overflow-hidden mx-auto border-2 border-amber-400 p-0.5 shadow-sm">
                    <img src="{{ asset('images/vip_chauffeur.jpg') }}" alt="Sunil Verma" class="w-full h-full object-cover rounded-full filter saturate-150">
                </div>
                <div>
                    <h3 class="font-serif font-bold text-lg text-[#0B172A]">Sunil Verma</h3>
                    <p class="text-xs text-[#0284C7] font-semibold">Outstation Highway Senior Driver</p>
                </div>
                <p class="text-xs text-[#64748B] leading-relaxed">
                    12 years experience on mountain and highway routes. Expert in defensive driving.
                </p>
                <div class="pt-2 border-t border-[#E1EFFD] text-xs font-bold text-[#0B172A]">
                    <span class="text-amber-500">★ 4.98</span> Rating • 4,110 Trips
                </div>
            </div>

            <div class="card-clean p-6 text-center space-y-3">
                <div class="w-20 h-20 rounded-full overflow-hidden mx-auto border-2 border-amber-400 p-0.5 shadow-sm">
                    <img src="{{ asset('images/vip_chauffeur.jpg') }}" alt="Mohammad Aslam" class="w-full h-full object-cover rounded-full filter contrast-125">
                </div>
                <div>
                    <h3 class="font-serif font-bold text-lg text-[#0B172A]">Mohammad Aslam</h3>
                    <p class="text-xs text-[#0284C7] font-semibold">Executive & Corporate Chauffeur</p>
                </div>
                <p class="text-xs text-[#64748B] leading-relaxed">
                    Specialist for business delegations and silent, comfortable executive rides.
                </p>
                <div class="pt-2 border-t border-[#E1EFFD] text-xs font-bold text-[#0B172A]">
                    <span class="text-amber-500">★ 4.99</span> Rating • 2,890 Trips
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
