@extends('layouts.app')

@section('title', 'Help & Contact | 24/7 Cab Support')

@section('content')
<!-- CONTACT HERO -->
<section class="py-16 px-6 bg-[#EAF0E5] border-b border-[#D8E2D5] text-center">
    <div class="max-w-4xl mx-auto">
        <span class="inline-block px-4 py-1.5 rounded-full bg-white/80 border border-[#D8E2D5] text-[#355E3B] text-xs font-semibold uppercase tracking-wider mb-4 shadow-sm">
            We Are Here For You 24/7
        </span>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-serif text-[#1A3320] mb-4">
            Help & <span class="text-emerald-700 italic">Support Center</span>
        </h1>
        <p class="text-[#4A6350] text-sm sm:text-base max-w-xl mx-auto font-light leading-relaxed">
            Need help with an ongoing ride, corporate monthly cab billing, or lost an item in a cab? Contact our 24/7 dedicated support team.
        </p>
    </div>
</section>

<!-- MAIN CONTENT -->
<section class="py-16 px-6 bg-[#F5F7F3]">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            <!-- LEFT: 24/7 HOTLINE & CORPORATE FLEET ESTIMATOR -->
            <div class="lg:col-span-5 space-y-6">
                
                <!-- Quick Contact Card -->
                <div class="bg-white rounded-[2rem] p-6 sm:p-8 border border-[#D8E2D5] shadow-sm space-y-4">
                    <h3 class="font-serif text-2xl font-bold text-[#1A3320]">Get in Touch</h3>
                    <p class="text-xs text-[#4A6350] leading-relaxed">
                        For immediate cab dispatch or trip inquiries, call our direct helpline.
                    </p>

                    <div class="space-y-3 pt-2">
                        <div class="p-4 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] flex items-center gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xl shrink-0">
                                📞
                            </div>
                            <div>
                                <span class="text-[10px] text-[#7A9C76] uppercase font-bold block">TOLL-FREE HELPLINE</span>
                                <a href="tel:+18008356231" class="text-base font-bold text-[#1A3320] hover:text-emerald-700">1800-835-6231</a>
                            </div>
                        </div>

                        <div class="p-4 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] flex items-center gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xl shrink-0">
                                💬
                            </div>
                            <div>
                                <span class="text-[10px] text-[#7A9C76] uppercase font-bold block">WHATSAPP BOOKING SUPPORT</span>
                                <a href="#" onclick="window.showToast('Connecting to WhatsApp support...')" class="text-base font-bold text-[#1A3320] hover:text-emerald-700">+91 98765 43210</a>
                            </div>
                        </div>

                        <div class="p-4 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] flex items-center gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xl shrink-0">
                                ✉️
                            </div>
                            <div>
                                <span class="text-[10px] text-[#7A9C76] uppercase font-bold block">EMAIL SUPPORT</span>
                                <a href="mailto:support@velocecabs.com" class="text-base font-bold text-[#1A3320] hover:text-emerald-700">support@velocecabs.com</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Corporate Bulk Booking Estimator -->
                <div class="bg-white rounded-[2rem] p-6 sm:p-8 border border-[#D8E2D5] shadow-sm space-y-4">
                    <span class="text-xs font-bold text-emerald-700 uppercase tracking-wider block">Office & Events</span>
                    <h3 class="font-serif text-xl font-bold text-[#1A3320]">Corporate Fleet Booking</h3>
                    <p class="text-xs text-[#4A6350]">Need multiple cabs for an event, wedding, or daily employee commute?</p>

                    <div class="space-y-3">
                        <div>
                            <label class="block text-xs font-semibold text-[#4A6350] mb-1">Number of Cabs</label>
                            <select id="corpCabs" onchange="calcCorpQuote()" class="w-full px-4 py-2.5 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] text-xs text-[#1A3320] font-medium">
                                <option value="2">2 Cabs</option>
                                <option value="5" selected>5 Cabs (Team Travel)</option>
                                <option value="10">10 Cabs (Event Fleet)</option>
                                <option value="20">20+ Cabs (Corporate Event)</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-[#4A6350] mb-1">Number of Days</label>
                            <select id="corpDays" onchange="calcCorpQuote()" class="w-full px-4 py-2.5 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] text-xs text-[#1A3320] font-medium">
                                <option value="1">1 Day</option>
                                <option value="3" selected>3 Days (Weekend Event)</option>
                                <option value="7">7 Days (Full Week)</option>
                                <option value="30">Monthly Ongoing Contract</option>
                            </select>
                        </div>

                        <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-200 flex items-center justify-between">
                            <div>
                                <span class="text-[10px] text-[#5C7562] uppercase font-bold block">Estimated Package Price</span>
                                <span class="text-xl font-serif font-bold text-emerald-800" id="corpPriceDisplay">$1,275.00</span>
                            </div>
                            <button type="button" onclick="window.showToast('Corporate quote generated! We will call you shortly.')" class="btn-emerald px-5 py-2 text-xs font-semibold">
                                Request Deal
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- RIGHT: DIRECT MESSAGE / INQUIRY FORM -->
            <div class="lg:col-span-7">
                <div class="bg-white rounded-[2.5rem] p-6 sm:p-10 border border-[#D8E2D5] shadow-xl space-y-6">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-emerald-700 block">Fast Response</span>
                        <h2 class="font-serif text-2xl font-bold text-[#1A3320]">Send Us a Message</h2>
                        <p class="text-xs text-[#4A6350] mt-1">Our support team usually replies within 10 minutes.</p>
                    </div>

                    <form onsubmit="handleContactSubmit(event)" class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-[#4A6350] mb-1.5">Your Name</label>
                                <input type="text" required placeholder="e.g. Priya Sharma" class="w-full px-4 py-3 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] text-sm text-[#14291B] font-medium focus:outline-none focus:border-emerald-600 focus:bg-white">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-[#4A6350] mb-1.5">Phone Number</label>
                                <input type="tel" required placeholder="+91 98765 00000" class="w-full px-4 py-3 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] text-sm text-[#14291B] font-medium focus:outline-none focus:border-emerald-600 focus:bg-white">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-[#4A6350] mb-1.5">Email Address</label>
                            <input type="email" required placeholder="yourname@gmail.com" class="w-full px-4 py-3 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] text-sm text-[#14291B] font-medium focus:outline-none focus:border-emerald-600 focus:bg-white">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-[#4A6350] mb-1.5">Inquiry Type</label>
                                <select class="w-full px-4 py-3 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] text-xs text-[#14291B] font-medium focus:outline-none focus:border-emerald-600">
                                    <option>Ride Booking Inquiry</option>
                                    <option>Airport Pickup Question</option>
                                    <option>Corporate / Monthly Cabs</option>
                                    <option>Lost Item in Cab</option>
                                    <option>Driver Feedback & Rating</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-[#4A6350] mb-1.5">Your City</label>
                                <select class="w-full px-4 py-3 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] text-xs text-[#14291B] font-medium focus:outline-none focus:border-emerald-600">
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
                            <label class="block text-xs font-semibold uppercase tracking-wider text-[#4A6350] mb-1.5">Your Message or Booking Details</label>
                            <textarea rows="4" required placeholder="Tell us about your date, stops, passenger count, or any question..." class="w-full p-4 rounded-2xl bg-[#F8FAF6] border border-[#DCE5D9] text-sm text-[#14291B] focus:outline-none focus:border-emerald-600 focus:bg-white leading-relaxed"></textarea>
                        </div>

                        <button type="submit" class="w-full btn-emerald py-3.5 text-xs font-bold uppercase tracking-wider shadow-lg">
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
    
    // Simple honest rate: $100 per cab per day (inclusive of fuel and driver) with 15% discount
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
