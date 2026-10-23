// Clean & Modern Cab Booking Controller

document.addEventListener('DOMContentLoaded', () => {
    // 1. Scroll Progress Bar
    const progressBar = document.getElementById('scrollProgress');
    const floatingNav = document.getElementById('floatingNav');

    window.addEventListener('scroll', () => {
        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const scrollPercent = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
        
        if (progressBar) {
            progressBar.style.width = `${scrollPercent}%`;
        }

        // Floating Navbar morphing on scroll
        if (floatingNav) {
            if (scrollTop > 40) {
                floatingNav.classList.add('bg-white/95', 'shadow-xl', 'shadow-[#1A3320]/8', 'border-[#D8E2D5]', 'py-2.5');
                floatingNav.classList.remove('bg-white/80', 'py-3.5');
            } else {
                floatingNav.classList.remove('bg-white/95', 'shadow-xl', 'shadow-[#1A3320]/8', 'border-[#D8E2D5]', 'py-2.5');
                floatingNav.classList.add('bg-white/80', 'py-3.5');
            }
        }
    });

    // 2. Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // 3. Global Toast Notifications
    window.showToast = function(message, type = 'success') {
        const container = document.getElementById('toastContainer');
        if (!container) return;

        const toast = document.createElement('div');
        toast.className = `flex items-center gap-3 px-5 py-3.5 rounded-2xl border shadow-xl backdrop-blur-xl transition-all duration-300 transform translate-y-4 opacity-0 pointer-events-auto ${
            type === 'success' 
                ? 'bg-[#1A3320] text-white border-emerald-500/30' 
                : 'bg-rose-900 text-white border-rose-500/30'
        }`;
        
        const iconSvg = type === 'success' 
            ? `<div class="w-6 h-6 rounded-full bg-emerald-500/30 text-emerald-400 flex items-center justify-center shrink-0 text-xs font-bold">✓</div>`
            : `<div class="w-6 h-6 rounded-full bg-rose-500/30 text-rose-300 flex items-center justify-center shrink-0 text-xs font-bold">✕</div>`;

        toast.innerHTML = `
            ${iconSvg}
            <div class="text-sm font-medium pr-2">${message}</div>
            <button class="ml-auto text-slate-300 hover:text-white text-xs pl-2" onclick="this.parentElement.remove()">✕</button>
        `;

        container.appendChild(toast);

        requestAnimationFrame(() => {
            toast.classList.remove('translate-y-4', 'opacity-0');
            toast.classList.add('translate-y-0', 'opacity-100');
        });

        setTimeout(() => {
            toast.classList.remove('translate-y-0', 'opacity-100');
            toast.classList.add('translate-y-4', 'opacity-0');
            setTimeout(() => toast.remove(), 300);
        }, 3500);
    };
});
