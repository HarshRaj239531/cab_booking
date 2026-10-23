@extends('layouts.app')

@section('title', 'Platinum Safety & Master Chauffeur Standards')

@section('content')
<!-- SAFETY HERO -->
<section class="py-20 relative overflow-hidden border-b border-white/[0.08] bg-[#07080E]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-cyan-500/15 border border-cyan-500/30 text-cyan-300 text-xs font-mono font-semibold uppercase tracking-wider mb-4">
            Security & Discretion Protocol
        </div>
        <h1 class="font-display font-extrabold text-4xl sm:text-6xl text-white tracking-tight mb-6">
            The Platinum <span class="text-gold-gradient font-serif italic">Safety Standard</span>
        </h1>
        <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto font-light leading-relaxed">
            Where luxury meets tactical defense. Engineered for diplomats, high-net-worth travelers, and families who require uncompromising peace of mind.
        </p>
    </div>
</section>

<!-- 4 PILLARS OF PLATINUM SAFETY -->
<section class="py-20 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Pillar 1 -->
            <div class="glass-card p-6 sm:p-8 rounded-3xl border border-white/[0.08] hover:border-amber-500/40 transition-all duration-300 space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-amber-500/10 border border-amber-500/30 flex items-center justify-center text-amber-400 font-serif font-black text-xl">
                    01
                </div>
                <h3 class="font-display font-bold text-xl text-white">Elite Chauffeur Academy</h3>
                <p class="text-slate-400 text-xs leading-relaxed font-light">
                    Only 1.4% of applicants pass our rigorous academy. Master certified in skid recovery, counter-surveillance, high-speed evasive maneuvering, and executive diplomacy.
                </p>
                <div class="pt-2 text-[11px] font-mono text-amber-300 flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
                    <span>Continuous Biometric Audits</span>
                </div>
            </div>

            <!-- Pillar 2 -->
            <div class="glass-card p-6 sm:p-8 rounded-3xl border border-white/[0.08] hover:border-cyan-500/40 transition-all duration-300 space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-cyan-500/10 border border-cyan-500/30 flex items-center justify-center text-cyan-400 font-serif font-black text-xl">
                    02
                </div>
                <h3 class="font-display font-bold text-xl text-white">120-Point Inspection</h3>
                <p class="text-slate-400 text-xs leading-relaxed font-light">
                    Every vehicle undergoes laser sensor tire diagnostics, braking performance calibration, and suspension telemetry before departing central dispatch.
                </p>
                <div class="pt-2 text-[11px] font-mono text-cyan-300 flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>
                    <span>Zero Tolerance Mechanical Rule</span>
                </div>
            </div>

            <!-- Pillar 3 -->
            <div class="glass-card p-6 sm:p-8 rounded-3xl border border-white/[0.08] hover:border-emerald-500/40 transition-all duration-300 space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center text-emerald-400 font-serif font-black text-xl">
                    03
                </div>
                <h3 class="font-display font-bold text-xl text-white">Hospital-Grade Air & Purity</h3>
                <p class="text-slate-400 text-xs leading-relaxed font-light">
                    Cabin environments sanitized using certified UV-C sterilization and dual medical HEPA H14 filtration that neutralizes 99.97% of airborne pathogens.
                </p>
                <div class="pt-2 text-[11px] font-mono text-emerald-300 flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                    <span>Medical Ionizer Active</span>
                </div>
            </div>

            <!-- Pillar 4 -->
            <div class="glass-card p-6 sm:p-8 rounded-3xl border border-white/[0.08] hover:border-purple-500/40 transition-all duration-300 space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-purple-500/10 border border-purple-500/30 flex items-center justify-center text-purple-400 font-serif font-black text-xl">
                    04
                </div>
                <h3 class="font-display font-bold text-xl text-white">Encrypted Privacy & NDAs</h3>
                <p class="text-slate-400 text-xs leading-relaxed font-light">
                    Soundproof privacy divider partitions, electrochromic frosted glass, encrypted satellite telemetry, and legally binding non-disclosure agreements.
                </p>
                <div class="pt-2 text-[11px] font-mono text-purple-300 flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>
                    <span>Full Privacy Inviolable</span>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- COMPARISON MATRIX: STANDARD CAB VS APP BLACK VS VELOCE LUXE -->
<section class="py-20 relative z-10 bg-[#06070B] border-y border-white/[0.08]">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-12 space-y-3">
            <span class="text-xs font-mono uppercase tracking-widest text-amber-400 font-semibold">Analytical Benchmark</span>
            <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-white">How Veloce Transcends Alternatives</h2>
        </div>

        <div class="glass-card rounded-3xl overflow-hidden border border-white/[0.1] shadow-2xl">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs font-mono">
                    <thead class="bg-black/80 border-b border-white/[0.08] text-slate-300 uppercase">
                        <tr>
                            <th class="p-4 sm:p-5">Security & Service Metric</th>
                            <th class="p-4 sm:p-5 text-slate-500">Traditional Metered Cab</th>
                            <th class="p-4 sm:p-5 text-slate-400">Standard Ride-Hailing Black</th>
                            <th class="p-4 sm:p-5 text-amber-300 bg-amber-500/10 border-l border-amber-500/30 font-bold">VELOCE LUXE PLATINUM</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/[0.06] text-slate-300">
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-white">Chauffeur Vetting Standard</td>
                            <td class="p-4 sm:p-5 text-slate-500">Basic Municipal Check</td>
                            <td class="p-4 sm:p-5 text-slate-400">Online Database Screening</td>
                            <td class="p-4 sm:p-5 text-amber-300 bg-amber-500/5 border-l border-amber-500/30 font-bold">5-Tier Tactical & Biometric Audits</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-white">Flight Delay Tracking</td>
                            <td class="p-4 sm:p-5 text-slate-500">None (Passenger Waits)</td>
                            <td class="p-4 sm:p-5 text-slate-400">Wait Fees After 5 Mins</td>
                            <td class="p-4 sm:p-5 text-amber-300 bg-amber-500/5 border-l border-amber-500/30 font-bold">Live Radar Sync (90m Free Wait)</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-white">Vehicle Age Guarantee</td>
                            <td class="p-4 sm:p-5 text-slate-500">Up to 8 Years Old</td>
                            <td class="p-4 sm:p-5 text-slate-400">Up to 6 Years Old</td>
                            <td class="p-4 sm:p-5 text-amber-300 bg-amber-500/5 border-l border-amber-500/30 font-bold">Strictly &lt; 12 Months Factory Spec</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-white">Surge Pricing Multipliers</td>
                            <td class="p-4 sm:p-5 text-slate-500">Peak Hour Metred Surcharge</td>
                            <td class="p-4 sm:p-5 text-slate-400">Up to 3.5x Dynamic Surge</td>
                            <td class="p-4 sm:p-5 text-amber-300 bg-amber-500/5 border-l border-amber-500/30 font-bold">0% Surge Guarantee (Fixed Quote)</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-white">In-Cabin Hospitality</td>
                            <td class="p-4 sm:p-5 text-slate-500">None</td>
                            <td class="p-4 sm:p-5 text-slate-400">Generic Water Bottle</td>
                            <td class="p-4 sm:p-5 text-amber-300 bg-amber-500/5 border-l border-amber-500/30 font-bold">Chilled Evian, Wi-Fi 7, Starlight Roof</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-white">Close Protection / Armored Options</td>
                            <td class="p-4 sm:p-5 text-slate-500">Not Available</td>
                            <td class="p-4 sm:p-5 text-slate-400">Not Available</td>
                            <td class="p-4 sm:p-5 text-amber-300 bg-amber-500/5 border-l border-amber-500/30 font-bold">Ballistic VR8 + Armed Officer Options</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

<!-- MASTER CHAUFFEUR SPOTLIGHT -->
<section class="py-24 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
            <span class="text-xs font-mono uppercase tracking-widest text-amber-400 font-semibold">The People Behind The Wheel</span>
            <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-white">Meet Our Senior Master Chauffeurs</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Chauffeur 1 -->
            <div class="glass-card rounded-3xl p-6 text-center space-y-4 border border-white/[0.08] hover:border-amber-500/40 transition-all">
                <div class="w-24 h-24 rounded-full overflow-hidden mx-auto border-2 border-amber-400/60 p-1">
                    <img src="{{ asset('images/vip_chauffeur.jpg') }}" alt="Alexander Vance" class="w-full h-full object-cover rounded-full">
                </div>
                <div>
                    <h3 class="font-display font-bold text-lg text-white">Alexander Vance</h3>
                    <p class="text-xs text-amber-300 font-mono">Senior Master Chauffeur • NYC Hub</p>
                </div>
                <p class="text-slate-400 text-xs leading-relaxed font-light">
                    Former dignitary transport officer with 11 years commanding presidential motorcades. Fluent in English, French, and German.
                </p>
                <div class="pt-2 border-t border-white/[0.06] flex items-center justify-between text-[11px] font-mono text-slate-400">
                    <span>Rating: <strong class="text-amber-400">4.99 ★</strong></span>
                    <span>2,840 VIP Trips</span>
                </div>
            </div>

            <!-- Chauffeur 2 -->
            <div class="glass-card rounded-3xl p-6 text-center space-y-4 border border-white/[0.08] hover:border-amber-500/40 transition-all">
                <div class="w-24 h-24 rounded-full overflow-hidden mx-auto border-2 border-cyan-400/60 p-1">
                    <img src="{{ asset('images/vip_chauffeur.jpg') }}" alt="Elena Rostova" class="w-full h-full object-cover rounded-full filter grayscale-[30%]">
                </div>
                <div>
                    <h3 class="font-display font-bold text-lg text-white">Elena Rostova</h3>
                    <p class="text-xs text-cyan-300 font-mono">Tactical Security Specialist • London Hub</p>
                </div>
                <p class="text-slate-400 text-xs leading-relaxed font-light">
                    Certified in skid evasion and counter-kidnap security driving. Specialist for high-profile film premieres and royal family transfers.
                </p>
                <div class="pt-2 border-t border-white/[0.06] flex items-center justify-between text-[11px] font-mono text-slate-400">
                    <span>Rating: <strong class="text-amber-400">5.00 ★</strong></span>
                    <span>1,920 VIP Trips</span>
                </div>
            </div>

            <!-- Chauffeur 3 -->
            <div class="glass-card rounded-3xl p-6 text-center space-y-4 border border-white/[0.08] hover:border-amber-500/40 transition-all">
                <div class="w-24 h-24 rounded-full overflow-hidden mx-auto border-2 border-purple-400/60 p-1">
                    <img src="{{ asset('images/vip_chauffeur.jpg') }}" alt="Tariq Al-Mansoor" class="w-full h-full object-cover rounded-full filter sepia-[20%]">
                </div>
                <div>
                    <h3 class="font-display font-bold text-lg text-white">Tariq Al-Mansoor</h3>
                    <p class="text-xs text-purple-300 font-mono">Diplomatic Protocol Lead • Dubai Hub</p>
                </div>
                <p class="text-slate-400 text-xs leading-relaxed font-light">
                    14 years orchestrating aviation tarmac escorts for international delegations and Fortune 50 corporate summits in the UAE and Switzerland.
                </p>
                <div class="pt-2 border-t border-white/[0.06] flex items-center justify-between text-[11px] font-mono text-slate-400">
                    <span>Rating: <strong class="text-amber-400">4.98 ★</strong></span>
                    <span>3,410 VIP Trips</span>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- CALL TO ACTION -->
<section class="py-16 text-center relative z-10 border-t border-white/[0.08]">
    <div class="max-w-4xl mx-auto px-4">
        <h2 class="font-display font-bold text-2xl sm:text-3xl text-white mb-4">Experience Total Peace of Mind</h2>
        <p class="text-slate-400 text-sm max-w-xl mx-auto mb-6">Reserve a tested, certified chauffeur for your upcoming private flight or urban itinerary.</p>
        <a href="{{ route('booking') }}" class="btn-gold px-8 py-3.5 rounded-full text-xs font-bold uppercase tracking-wider inline-flex items-center gap-2 shadow-xl">
            <span>Book With Platinum Security</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
    </div>
</section>
@endsection
