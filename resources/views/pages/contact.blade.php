@extends('layouts.app')

@section('title', 'Contact Us | Patna Transport | Boring Road, Patna | 8877177161')

@section('content')
<!-- CONTACT HERO (Light Blue & Golden Radiant Atmosphere) -->
<section class="pt-32 sm:pt-36 pb-16 px-6 bg-gradient-to-b from-[#E2EEFB] via-[#F0F6FD] to-[#F0F6FD] border-b border-[#C7E0FA] text-center relative overflow-hidden">
    <!-- Ambient Glows -->
    <div class="absolute top-0 left-1/4 w-80 h-80 bg-sky-400/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-10 right-1/4 w-72 h-72 bg-amber-400/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-4xl mx-auto relative z-10">
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/90 border border-[#C7E0FA] text-[#004E92] text-xs font-bold uppercase tracking-wider mb-4 shadow-sm">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
            24x7 Dispatch Office: Boring Road, Patna
        </span>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-[#0B172A] mb-4">
            Contact <span class="text-amber-500">Patna Transport</span>
        </h1>
        <p class="text-[#475569] text-sm sm:text-base max-w-xl mx-auto font-light leading-relaxed">
            Need an urgent cab in Patna, planning an outstation trip across Bihar, or looking for airport pickup? Call our 24/7 Boring Road helpline directly.
        </p>
    </div>
</section>

<!-- MAIN CONTENT -->
<section class="py-16 px-6 bg-[#F0F6FD]">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            <!-- LEFT: 24/7 HOTLINE & CORPORATE FLEET ESTIMATOR -->
            <div class="lg:col-span-5 space-y-6">
                
                <!-- Quick Contact Card -->
                <div class="bg-white rounded-[2rem] p-6 sm:p-8 border-2 border-[#C7E0FA] shadow-lg space-y-4">
                    <h3 class="text-2xl font-bold text-[#0B172A]">Get in Touch</h3>
                    <p class="text-xs text-[#475569] leading-relaxed">
                        For instant cab booking or trip inquiries anywhere in Patna, call our direct 24x7 line.
                    </p>

                    <div class="space-y-3 pt-2">
                        <div class="p-4 rounded-2xl bg-[#004E92] text-white flex items-center gap-4 shadow-md">
                            <div class="w-12 h-12 rounded-2xl bg-amber-400 text-slate-900 flex items-center justify-center font-bold text-xl shrink-0 shadow-sm">
                                📞
                            </div>
                            <div>
                                <span class="text-[10px] text-amber-300 uppercase font-black tracking-wider block">CALL NOW 24x7</span>
                                <a href="tel:8877177161" class="text-lg font-black text-white hover:text-amber-300 transition-colors">8877177161</a>
                            </div>
                        </div>

                        <div class="p-4 rounded-2xl bg-[#F0F6FD] border border-[#C7E0FA] flex items-center gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xl shrink-0 shadow-sm">
                                📍
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] uppercase font-bold block">OUR OFFICE LOCATION</span>
                                <span class="text-sm font-bold text-[#0B172A] block">Boring Road, Patna, Bihar - 800001</span>
                            </div>
                        </div>

                        <div class="p-4 rounded-2xl bg-[#F0F6FD] border border-[#C7E0FA] flex items-center gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-sky-100 text-[#004E92] flex items-center justify-center font-bold text-xl shrink-0 shadow-sm">
                                ✈️
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] uppercase font-bold block">AIRPORT DESK</span>
                                <span class="text-sm font-bold text-[#0B172A] block">Jay Prakash Narayan Airport (PAT), Patna</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Corporate / Wedding Bulk Booking Estimator -->
                <div class="bg-white rounded-[2rem] p-6 sm:p-8 border-2 border-[#C7E0FA] shadow-lg space-y-4">
                    <span class="text-xs font-bold text-amber-600 uppercase tracking-wider block">Weddings & Corporate Fleet</span>
                    <h3 class="text-xl font-bold text-[#0B172A]">Bulk Cab Estimator</h3>
                    <p class="text-xs text-[#475569]">Need multiple Scorpio, Dzire, or Ertiga cabs for an event or family wedding in Bihar?</p>

                    <div class="space-y-3">
                        <div>
                            <label class="block text-xs font-semibold text-[#475569] mb-1">Number of Cabs</label>
                            <select id="corpCabs" onchange="calcCorpQuote()" class="input-clean w-full px-4 py-2.5 text-xs text-[#0B172A] font-medium">
                                <option value="2">2 Cabs</option>
                                <option value="5" selected>5 Cabs (Family / Team)</option>
                                <option value="10">10 Cabs (Wedding Fleet)</option>
                                <option value="20">20+ Cabs (Large Event)</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-[#475569] mb-1">Number of Days</label>
                            <select id="corpDays" onchange="calcCorpQuote()" class="input-clean w-full px-4 py-2.5 text-xs text-[#0B172A] font-medium">
                                <option value="1">1 Day</option>
                                <option value="3" selected>3 Days (Wedding Event)</option>
                                <option value="7">7 Days (Full Week Tour)</option>
                                <option value="30">Monthly Ongoing Contract</option>
                            </select>
                        </div>

                        <div class="p-4 rounded-2xl bg-[#E1EFFD] border border-[#C7E0FA] flex items-center justify-between">
                            <div>
                                <span class="text-[10px] text-[#64748B] uppercase font-bold block">Estimated Package Price</span>
                                <span class="text-2xl font-bold text-amber-600" id="corpPriceDisplay">₹30,000</span>
                            </div>
                            <a href="tel:8877177161" class="btn-gold px-5 py-2 text-xs font-bold shadow-md">
                                Call for Deal
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- RIGHT: DIRECT MESSAGE / INQUIRY FORM -->
            <div class="lg:col-span-7">
                <div class="bg-white rounded-[2.5rem] p-6 sm:p-10 border-2 border-[#C7E0FA] shadow-xl space-y-6">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-600 block">Fast Response</span>
                        <h2 class="text-2xl font-bold text-[#0B172A]">Send Patna Transport a Message</h2>
                        <p class="text-xs text-[#475569] mt-1">Our Boring Road dispatch team replies or calls back within 5 minutes.</p>
                    </div>

                    <form onsubmit="handleContactSubmit(event)" class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-[#475569] mb-1.5">Your Name</label>
                                <input type="text" required placeholder="e.g. Ramesh Singh" class="input-clean w-full px-4 py-3 text-sm font-medium">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-[#475569] mb-1.5">Phone Number</label>
                                <input type="tel" required placeholder="e.g. 98765 00000" class="input-clean w-full px-4 py-3 text-sm font-medium">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-[#475569] mb-1.5">Email Address</label>
                            <input type="email" placeholder="yourname@gmail.com" class="input-clean w-full px-4 py-3 text-sm font-medium">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-[#475569] mb-1.5">Inquiry Type</label>
                                <select class="input-clean w-full px-4 py-3 text-xs font-medium">
                                    <option>Local Patna Ride</option>
                                    <option>Patna Airport (PAT) Pickup</option>
                                    <option>Outstation Trip (Bodh Gaya / Rajgir / Varanasi)</option>
                                    <option>Wedding & Corporate Fleet Booking</option>
                                    <option>Other Inquiry</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-[#475569] mb-1.5">Pickup Location in Patna</label>
                                <select class="input-clean w-full px-4 py-3 text-xs font-medium">
                                    <option>Boring Road</option>
                                    <option>Patna Airport (PAT)</option>
                                    <option>Patna Junction</option>
                                    <option>Bailey Road</option>
                                    <option>Kankarbagh</option>
                                    <option>Danapur</option>
                                    <option>Patliputra</option>
                                    <option>Other Patna Location</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-[#475569] mb-1.5">Trip Details or Special Request</label>
                            <textarea rows="4" required placeholder="Tell us about your date, stops, passenger count, or required car (Scorpio, Dzire, Ertiga)..." class="input-clean w-full p-4 text-sm leading-relaxed"></textarea>
                        </div>

                        <button type="submit" class="w-full btn-gold py-3.5 text-xs font-bold uppercase tracking-wider shadow-xl">
                            Send Booking Request to Dispatch
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
function calcCorpQuote() {
    const cabs = parseInt(document.getElementById('corpCabs').value);
    const days = parseInt(document.getElementById('corpDays').value);
    
    // ₹2,000 per cab per day for bulk wedding/corporate booking
    let total = cabs * days * 2000;

    document.getElementById('corpPriceDisplay').innerText = `₹${total.toLocaleString('en-IN')}`;
}

function handleContactSubmit(e) {
    e.preventDefault();
    window.showToast('Thank you! Patna Transport dispatch (8877177161) has received your request and will call you in 5 mins.');
    e.target.reset();
}
</script>
@endpush
