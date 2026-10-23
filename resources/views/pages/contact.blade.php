@extends('layouts.app')

@section('title', 'VIP Concierge Desk & Corporate Fleet Management')

@section('content')
<!-- CONCIERGE HERO -->
<section class="py-20 relative overflow-hidden border-b border-white/[0.08] bg-[#07080E]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/15 border border-amber-500/30 text-amber-300 text-xs font-mono font-semibold uppercase tracking-wider mb-4">
            24/7 Global Dispatch & Bespoke Liaison
        </div>
        <h1 class="font-display font-extrabold text-4xl sm:text-6xl text-white tracking-tight mb-6">
            The Veloce <span class="text-gold-gradient font-serif italic">Concierge Desk</span>
        </h1>
        <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto font-light leading-relaxed">
            Direct coordination for executive roadshows, private aviation charters, and multi-vehicle diplomatic delegations worldwide.
        </p>
    </div>
</section>

<!-- MAIN CONTENT GRID -->
<section class="py-20 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- LEFT: INTERACTIVE CORPORATE FLEET ESTIMATOR & GLOBAL HUBS -->
            <div class="lg:col-span-6 space-y-8">
                
                <!-- Corporate Fleet Estimator Card -->
                <div class="glass-card-gold rounded-3xl p-6 sm:p-8 space-y-6">
                    <div class="flex items-center justify-between border-b border-white/[0.08] pb-4">
                        <div>
                            <span class="text-xs font-mono uppercase tracking-widest text-amber-400 font-semibold">Institutional Accounts</span>
                            <h2 class="font-display font-bold text-2xl text-white">Corporate Fleet Estimator</h2>
                        </div>
                        <span class="px-2.5 py-1 rounded bg-amber-500/20 text-amber-300 text-[10px] font-mono font-bold">
                            NET-30 AVAILABLE
                        </span>
                    </div>

                    <div class="space-y-4">
                        <div>
                            <label class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-1.5">Event or Mission Classification</label>
                            <select id="corpEventType" onchange="calculateCorporateQuote()" class="w-full px-4 py-3 rounded-xl bg-black/60 border border-white/[0.12] text-xs text-white focus:outline-none focus:border-amber-400 font-mono">
                                <option value="summit">Global Executive Summit / Davos Protocol</option>
                                <option value="aviation">Private Aviation & Jet Roadshow Multi-City</option>
                                <option value="premiere">Red Carpet / Film Festival / Met Gala Delegation</option>
                                <option value="diplomatic">Diplomatic State Visit & Motorcade Escort</option>
                                <option value="wedding">Royal Wedding & Private Island Transport</option>
                            </select>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-1.5">Fleet Vehicles Count</label>
                                <select id="corpCarCount" onchange="calculateCorporateQuote()" class="w-full px-4 py-3 rounded-xl bg-black/60 border border-white/[0.12] text-xs text-white focus:outline-none focus:border-amber-400 font-mono">
                                    <option value="2">2 Vehicles (Sedan + SUV)</option>
                                    <option value="5" selected>5 Vehicles (Fleet Squad)</option>
                                    <option value="10">10 Vehicles (Motorcade)</option>
                                    <option value="20">20+ Vehicles (Institutional)</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-1.5">Charter Duration</label>
                                <select id="corpDays" onchange="calculateCorporateQuote()" class="w-full px-4 py-3 rounded-xl bg-black/60 border border-white/[0.12] text-xs text-white focus:outline-none focus:border-amber-400 font-mono">
                                    <option value="1">1 Day (12h Dedicated)</option>
                                    <option value="3" selected>3 Days Summit Retainer</option>
                                    <option value="7">7 Days Full Week</option>
                                    <option value="30">Monthly Dedicated Standby</option>
                                </select>
                            </div>
                        </div>

                        <!-- Live Corporate Quote Result -->
                        <div class="p-5 rounded-2xl bg-black/80 border border-amber-500/30 flex items-center justify-between">
                            <div>
                                <span class="text-[10px] font-mono text-slate-400 uppercase tracking-wider block">Estimated Corporate Retainer</span>
                                <div class="font-display font-extrabold text-2xl text-amber-300" id="corpPriceResult">$11,250.00</div>
                                <span class="text-[10px] text-emerald-400 font-mono">Volume Discount (15%) Applied</span>
                            </div>
                            <button type="button" onclick="window.showToast('Corporate proposal drafted. Please complete form to receive PDF proposal.')" class="btn-gold px-5 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider">
                                Request Quote
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Global City Lounges & Direct Lines -->
                <div class="space-y-4">
                    <h3 class="font-display font-bold text-xl text-white">Global Metropolises & Concierge Lounges</h3>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- NY Hub -->
                        <div class="glass-card p-4 rounded-2xl border border-white/[0.08] space-y-1">
                            <span class="text-amber-400 text-xs font-mono font-bold">NEW YORK CITY</span>
                            <h4 class="text-white text-sm font-semibold">General Motors Building</h4>
                            <p class="text-slate-400 text-xs">767 5th Avenue, Manhattan, NY</p>
                            <p class="text-xs font-mono text-slate-300 pt-1">Direct: <span class="text-amber-300 font-bold">+1 (212) 835-6200</span></p>
                        </div>

                        <!-- London Hub -->
                        <div class="glass-card p-4 rounded-2xl border border-white/[0.08] space-y-1">
                            <span class="text-amber-400 text-xs font-mono font-bold">LONDON</span>
                            <h4 class="text-white text-sm font-semibold">Mayfair Private Lounge</h4>
                            <p class="text-slate-400 text-xs">14 Berkeley Square, London W1J</p>
                            <p class="text-xs font-mono text-slate-300 pt-1">Direct: <span class="text-amber-300 font-bold">+44 20 7946 0991</span></p>
                        </div>

                        <!-- Paris Hub -->
                        <div class="glass-card p-4 rounded-2xl border border-white/[0.08] space-y-1">
                            <span class="text-amber-400 text-xs font-mono font-bold">PARIS</span>
                            <h4 class="text-white text-sm font-semibold">Place Vendôme Suite</h4>
                            <p class="text-slate-400 text-xs">15 Place Vendôme, 75001 Paris</p>
                            <p class="text-xs font-mono text-slate-300 pt-1">Direct: <span class="text-amber-300 font-bold">+33 1 42 68 55 00</span></p>
                        </div>

                        <!-- Dubai Hub -->
                        <div class="glass-card p-4 rounded-2xl border border-white/[0.08] space-y-1">
                            <span class="text-amber-400 text-xs font-mono font-bold">DUBAI</span>
                            <h4 class="text-white text-sm font-semibold">DIFC Gate Precinct</h4>
                            <p class="text-slate-400 text-xs">Gate Village 04, DIFC, Dubai</p>
                            <p class="text-xs font-mono text-slate-300 pt-1">Direct: <span class="text-amber-300 font-bold">+971 4 362 7000</span></p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- RIGHT: DIRECT INQUIRY & LIAISON FORM -->
            <div class="lg:col-span-6">
                <div class="glass-card rounded-3xl p-6 sm:p-10 border border-white/[0.1] shadow-2xl space-y-6">
                    <div>
                        <span class="text-xs font-mono uppercase tracking-widest text-amber-400 font-semibold">Confidential Transmission</span>
                        <h2 class="font-display font-bold text-2xl text-white">Direct Concierge Communication</h2>
                        <p class="text-slate-400 text-xs sm:text-sm mt-1">Our Senior Duty Officer will respond within 8 minutes.</p>
                    </div>

                    <form id="conciergeInquiryForm" class="space-y-4" onsubmit="handleConciergeSubmit(event)">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-1.5">Your Full Name & Title</label>
                                <input type="text" required placeholder="e.g. Ambassador H. Vance" class="w-full px-4 py-3 rounded-xl bg-black/60 border border-white/[0.12] text-sm text-white placeholder-slate-500 focus:outline-none focus:border-amber-400 font-medium">
                            </div>
                            <div>
                                <label class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-1.5">Direct Phone / Signal</label>
                                <input type="tel" required placeholder="+1 (555) 000-0000" class="w-full px-4 py-3 rounded-xl bg-black/60 border border-white/[0.12] text-sm text-white placeholder-slate-500 focus:outline-none focus:border-amber-400 font-mono">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-1.5">Official Executive / Private Email</label>
                            <input type="email" required placeholder="office@organization.com" class="w-full px-4 py-3 rounded-xl bg-black/60 border border-white/[0.12] text-sm text-white placeholder-slate-500 focus:outline-none focus:border-amber-400">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-1.5">Service Category</label>
                                <select class="w-full px-4 py-3 rounded-xl bg-black/60 border border-white/[0.12] text-xs text-white focus:outline-none focus:border-amber-400 font-mono">
                                    <option>Private Aviation / FBO Liaison</option>
                                    <option>Multi-Car Corporate Roadshow</option>
                                    <option>Diplomatic Armored Security Detail</option>
                                    <option>Weddings & High-Society Gala</option>
                                    <option>Long-Term Monthly Chauffeur Retainer</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-1.5">Primary Metropolis</label>
                                <select class="w-full px-4 py-3 rounded-xl bg-black/60 border border-white/[0.12] text-xs text-white focus:outline-none focus:border-amber-400 font-mono">
                                    <option>New York City (JFK/EWR/TEB)</option>
                                    <option>London (LHR/LCY/FAB)</option>
                                    <option>Paris (CDG/LBG)</option>
                                    <option>Dubai (DXB/DWC)</option>
                                    <option>Tokyo (HND/NRT)</option>
                                    <option>Zurich / Geneva</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-mono text-slate-300 uppercase tracking-wider mb-1.5">Itinerary & Special Security Requirements</label>
                            <textarea rows="4" required placeholder="Provide flight tail numbers, scheduled stops, passenger counts, security clearance requirements, or dietary preferences..." class="w-full p-4 rounded-xl bg-black/60 border border-white/[0.12] text-xs text-white placeholder-slate-500 focus:outline-none focus:border-amber-400 leading-relaxed"></textarea>
                        </div>

                        <div class="flex items-center gap-2 text-xs font-mono text-slate-400">
                            <input type="checkbox" checked required class="w-4 h-4 accent-amber-400 rounded">
                            <span>I require legally binding Non-Disclosure Agreement (NDA) compliance.</span>
                        </div>

                        <button type="submit" class="w-full btn-gold py-4 rounded-xl text-xs font-black uppercase tracking-widest flex items-center justify-center gap-2 shadow-xl">
                            <span>Transmit To Senior Duty Officer</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                        </button>
                    </form>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection

@push('scripts')
<script>
function calculateCorporateQuote() {
    const cars = parseInt(document.getElementById('corpCarCount').value);
    const days = parseInt(document.getElementById('corpDays').value);
    
    // Base rate per car per day (12h standard): $900
    let total = cars * days * 900;
    
    // Volume discount
    if (cars >= 5) total *= 0.85;
    if (days >= 7) total *= 0.90;

    document.getElementById('corpPriceResult').innerText = `$${total.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;
}

function handleConciergeSubmit(e) {
    e.preventDefault();
    window.showToast('Priority transmission received by Senior Dispatch Officer. Encrypted confirmation sent to your email.');
    e.target.reset();
}
</script>
@endpush
