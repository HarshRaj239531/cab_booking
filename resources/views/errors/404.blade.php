@extends('layouts.app')

@section('title', 'Page Not Found (404) | Patna Transport')

@section('content')
<section class="min-h-[75vh] pt-36 pb-20 px-6 flex flex-col items-center justify-center text-center bg-gradient-to-b from-[#E2EEFB] via-[#F0F6FD] to-[#F0F6FD] relative overflow-hidden">
    <!-- Ambient Glows -->
    <div class="absolute top-1/4 left-1/4 w-80 h-80 bg-sky-400/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-1/3 right-1/4 w-72 h-72 bg-amber-400/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-xl mx-auto relative z-10 space-y-6">
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/90 border border-[#C7E0FA] text-[#004E92] text-xs font-bold uppercase tracking-wider shadow-sm">
            <span>⚠️ Error 404 • Page Not Found</span>
        </span>

        <h1 class="text-5xl sm:text-7xl font-extrabold text-[#0B172A] tracking-tight">
            4<span class="text-amber-500">0</span>4
        </h1>

        <p class="text-[#475569] text-base sm:text-lg leading-relaxed">
            Aap jis page ko dhoondh rahe hain woh hata diya gaya hai ya uska link badal gaya hai. Cab booking ke liye hamare 24x7 helpline par call karein ya home page par jayein.
        </p>

        <div class="flex flex-wrap items-center justify-center gap-4 pt-4">
            <a href="{{ route('home') }}" class="btn-blue text-sm font-bold px-7 py-3.5 flex items-center gap-2 shadow-md hover:scale-105 transition-transform">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                <span>Back to Home</span>
            </a>
            <a href="tel:8877177161" class="btn-gold text-sm font-bold px-7 py-3.5 flex items-center gap-2 shadow-md hover:scale-105 transition-transform">
                <span>📞 Call 24x7: 8877177161</span>
            </a>
            <a href="{{ route('fleet') }}" class="btn-outline-blue text-sm font-bold px-6 py-3.5">
                <span>View Our Cabs</span>
            </a>
        </div>
    </div>
</section>
@endsection
