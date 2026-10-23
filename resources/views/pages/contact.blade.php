@extends('layouts.app')

@section('title', 'Help & Contact | 24/7 Cab Support')

@section('content')
<!-- CONTACT HERO (Light Blue & Golden Radiant Atmosphere) -->
<section class="py-16 px-6 bg-gradient-to-b from-[#E2EEFB] via-[#F0F6FD] to-[#F0F6FD] border-b border-[#C7E0FA] text-center relative overflow-hidden">
    <!-- Ambient Glows -->
    <div class="absolute top-0 left-1/4 w-80 h-80 bg-sky-400/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-10 right-1/4 w-72 h-72 bg-amber-400/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-4xl mx-auto relative z-10">
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/90 border border-[#C7E0FA] text-[#0369A1] text-xs font-bold uppercase tracking-wider mb-4 shadow-sm">
            <span class="w-2 h-2 rounded-full bg-amber-400"></span>
            We Are Here For You 24/7
        </span>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-serif text-[#0B172A] mb-4">
            Help & <span class="text-amber-500 italic">Support Center</span>
        </h1>
        <p class="text-[#475569] text-sm sm:text-base max-w-xl mx-auto font-light leading-relaxed">
            Need help with an ongoing ride, corporate monthly cab billing, or lost an item in a cab? Contact our 24/7 dedicated support team.
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
                    <h3 class="font-serif text-2xl font-bold text-[#0B172A]">Get in Touch</h3>
                    <p class="text-xs text-[#475569] leading-relaxed">
                        For immediate cab dispatch or trip inquiries, call our direct helpline.
                    </p>

                    <div class="space-y-3 pt-2">
                        <div class="p-4 rounded-2xl bg-[#F0F6FD] border border-[#C7E0FA] flex items-center gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-sky-100 text-[#0284C7] flex items-center justify-center font-bold text-xl shrink-0 shadow-sm">
                                📞
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] uppercase font-bold block">TOLL-FREE HELPLINE</span>
                                <a href="tel:+18008356231" class="text-base font-bold text-[#0B172A] hover:text-[#0284C7] transition-colors">1800-835-6231</a>
                            </div>
                        </div>

                        <div class="p-4 rounded-2xl bg-[#F0F6FD] border border-[#C7E0FA] flex items-center gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center font-bold text-xl shrink-0 shadow-sm">
                                💬
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] uppercase font-bold block">WHATSAPP BOOKING SUPPORT</span>
                                <a href="#" onclick="window.showToast('Connecting to WhatsApp support...')" class="text-base font-bold text-[#0B172A] hover:text-[#0284C7] transition-colors">+91 98765 43210</a>
                            </div>
                        </div>

                        <div class="p-4 rounded-2xl bg-[#F0F6FD] border border-[#C7E0FA] flex items-center gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-sky-100 text-[#0284C7] flex items-center justify-center font-bold text-xl shrink-0 shadow-sm">
                                ✉️
                            </div>
                            <div>
                                <span class="text-[10px] text-[#64748B] uppercase font-bold block">EMAIL SUPPORT</span>
                                <a href="mailto:support@velocecabs.com" class="text-base font-bold text-[#0B172A] hover:text-[#0284C7] transition-colors">support@velocecabs.com</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Corporate Bulk Booking Estimator -->
                <div class="bg-white rounded-[2rem] p-6 sm:p-8 border-2 border-[#C7E0FA] shadow-lg space-y-4">
                    <span class="text-xs font-bold text-amber-600 uppercase tracking-wider block">Office & Events</span>
                    <h3 class="font-serif text-xl font-bold text-[#0B172A]">Corporate Fleet Booking</h3>
                    <p class="text-xs text-[#475569]">Need multiple cabs for an event, wedding, or daily employee commute?</p>

                    <div class="space-y-3">
                        <div>
                            <label class="block text-xs font-semibold text-[#475569] mb-1">Number of Cabs</label>
                            <select id="corpCabs" onchange="calcCorpQuote()" class="input-clean w-full px-4 py-2.5 text-xs text-[#0B172A] font-medium">
                                <option value="2">2 Cabs</option>
                                <option value="5" selected>5 Cabs (Team Travel)</option>
                                <option value="10">10 Cabs (Event Fleet)</option>
                                <option value="20">20+ Cabs (Corporate Event)</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-[#475569] mb-1">Number of Days</label>
                            <select id="corpDays" onchange="calcCorpQuote()" class="input-clean w-full px-4 py-2.5 text-xs text-[#0B172A] font-medium">
                                <option value="1">1 Day</option>
                                <option value="3" selected>3 Days (Weekend Event)</option>
                                <option value="7">7 Days (Full Week)</option>
                                <option value="30">Monthly Ongoing Contract</option>
                            </select>
                        </div>

                        <div class="p-4 rounded-2xl bg-[#E1EFFD] border border-[#C7E0FA] flex items-center justify-between">
                            <div>
                                <span class="text-[10px] text-[#64748B] uppercase font-bold block">Estimated Package Price</span>
                                <span class="text-2xl font-serif font-bold text-amber-600" id="corpPriceDisplay">$1,275.00</span>
                            </div>
                            <button type="button" onclick="window.showToast('Corporate quote generated! We will call you shortly.')" class="btn-gold px-5 py-2 text-xs font-bold shadow-md">
                                Request Deal
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- RIGHT: DIRECT MESSAGE / INQUIRY FORM -->
            <div class="lg:col-span-7">
                <div class="bg-white rounded-[2.5rem] p-6 sm:p-10 border-2 border-[#C7E0FA] shadow-xl space-y-6">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-600 block">Fast Response</span>
                        <h2 class="font-serif text-2xl font-bold text-[#0B172A]">Send Us a Message</h2>
                        <p class="text-xs text-[#475569] mt-1">Our support team usually replies within 10 minutes.</p>
                    </div>

                    <form onsubmit="handleContactSubmit(event)" class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-[#475569] mb-1.5">Your Name</label>
                                <input type="text" required placeholder="e.g. Priya Sharma" class="input-clean w-full px-4 py-3 text-sm font-medium">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-[#475569] mb-1.5">Phone Number</label>
                                <input type="tel" required placeholder="+91 98765 00000" class="input-clean w-full px-4 py-3 text-sm font-medium">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-[#475569] mb-1.5">Email Address</label>
                            <input type="email" required placeholder="yourname@gmail.com" class="input-clean w-full px-4 py-3 text-sm font-medium">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-[#475569] mb-1.5">Inquiry Type</label>
                                <select class="input-clean w-full px-4 py-3 text-xs font-medium">
                                    <option>Ride Booking Inquiry</option>
                                    <option>Airport Pickup Question</option>
                                    <option>Corporate / Monthly Cabs</option>
                                    <option>Lost Item in Cab</option>
                                    <option>Driver Feedback & Rating</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-[#475569] mb-1.5">Your City</label>
                                <select class="input-clean w-full px-4 py-3 text-xs font-medium">
                                    <option>New Delhi / NCR</option>
                                    <option>Mumbai</option>
                                    <option>Bengaluru</option>
                                    <option>Hyderabad</option>
                                    <option>Kolkata</option>
                                    <option>Other City</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-[#475569] mb-1.5">Your Message or Booking Details</label>
                            <textarea rows="4" required placeholder="Tell us about your date, stops, passenger count, or any question..." class="input-clean w-full p-4 text-sm leading-relaxed"></textarea>
                        </div>

                        <button type="submit" class="w-full btn-gold py-3.5 text-xs font-bold uppercase tracking-wider shadow-xl">
                            Send Message to Support Team
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
    
    // Clear transparent rate: $100 per cab per day with 15% discount
    let total = cabs * days * 100 * 0.85;

    document.getElementById('corpPriceDisplay').innerText = `$${total.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;
}

function handleContactSubmit(e) {
    e.preventDefault();
    window.showToast('Thank you! Your message has been received. Our team will contact you within 10 minutes.');
    e.target.reset();
}
</script>
@endpush
