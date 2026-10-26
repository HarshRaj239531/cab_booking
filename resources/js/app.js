import { animate, inView, stagger, scroll } from 'motion';

// Export motion primitives globally for easy inspection & page scripts
window.framerMotion = { animate, inView, stagger, scroll };
window.animate = animate;
window.inView = inView;
window.stagger = stagger;
window.scroll = scroll;

// Global Toast Notifications with Framer Motion Spring Pop-in
window.showToast = function(message, type = 'success') {
    const container = document.getElementById('toastContainer');
    if (!container) return;

    const toast = document.createElement('div');
    toast.className = `flex items-center gap-3 px-5 py-3.5 rounded-2xl border shadow-2xl backdrop-blur-xl pointer-events-auto transition-none ${
        type === 'success' 
            ? 'bg-[#0B172A] text-white border-amber-400/40 shadow-black/30' 
            : 'bg-rose-950 text-white border-rose-500/40 shadow-rose-950/40'
    }`;
    
    const iconSvg = type === 'success' 
        ? `<div class="w-6 h-6 rounded-full bg-amber-400/20 text-amber-300 flex items-center justify-center shrink-0 text-xs font-bold">✓</div>`
        : `<div class="w-6 h-6 rounded-full bg-rose-500/30 text-rose-300 flex items-center justify-center shrink-0 text-xs font-bold">✕</div>`;

    toast.innerHTML = `
        ${iconSvg}
        <div class="text-sm font-medium pr-2 text-white">${message}</div>
        <button class="ml-auto text-slate-400 hover:text-white text-xs pl-2 transition-colors" onclick="this.parentElement.remove()">✕</button>
    `;

    container.appendChild(toast);

    // Framer Motion spring pop-in
    animate(toast, { opacity: [0, 1], y: [25, 0], scale: [0.85, 1.03, 1] }, { duration: 0.45, ease: [0.16, 1, 0.3, 1] });

    setTimeout(() => {
        animate(toast, { opacity: [1, 0], y: [0, -12], scale: [1, 0.92] }, { duration: 0.3 }).then(() => {
            toast.remove();
        });
    }, 3500);
};

// Main Framer Motion Initialization
function initFramerMotion() {
    console.log('%c🚀 [Framer Motion] Initialized successfully on Veloce Cabs', 'color: #38bdf8; font-weight: bold; font-size: 13px;');

    // 1. Hardware-Accelerated Scroll Progress Bar (Framer Motion scroll)
    const progressBar = document.getElementById('scrollProgress');
    if (progressBar) {
        scroll((info) => {
            progressBar.style.width = `${info.y.progress * 100}%`;
        });
    }

    // 2. Floating Navbar Entrance & Scroll Morphing (Framer Motion)
    const floatingNav = document.getElementById('floatingNav');
    const navContainer = document.getElementById('navContainer');
    const mobileMenu = document.getElementById('mobileMenu');
    if (floatingNav) {
        animate(floatingNav, { y: [-20, 0], opacity: [0, 1] }, { duration: 0.6, ease: [0.16, 1, 0.3, 1] });

        window.addEventListener('scroll', () => {
            const scrollTop = window.scrollY;
            if (scrollTop > 35) {
                if (navContainer) {
                    navContainer.classList.remove('top-11');
                    navContainer.classList.add('top-3');
                }
                if (mobileMenu) {
                    mobileMenu.classList.remove('top-24');
                    mobileMenu.classList.add('top-16');
                }
                floatingNav.classList.add('shadow-2xl', 'shadow-sky-950/20', 'py-2.5');
                floatingNav.classList.remove('py-3');
            } else {
                if (navContainer) {
                    navContainer.classList.remove('top-3');
                    navContainer.classList.add('top-11');
                }
                if (mobileMenu) {
                    mobileMenu.classList.remove('top-16');
                    mobileMenu.classList.add('top-24');
                }
                floatingNav.classList.remove('shadow-2xl', 'shadow-sky-950/20', 'py-2.5');
                floatingNav.classList.add('py-3');
            }
        }, { passive: true });
    }

    // 3. Mobile Menu Toggle with Spring Motion
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                animate(mobileMenu, { opacity: [0, 1], y: [-15, 0], scale: [0.95, 1] }, { duration: 0.28, ease: [0.16, 1, 0.3, 1] });
            } else {
                animate(mobileMenu, { opacity: [1, 0], y: [0, -10], scale: [1, 0.95] }, { duration: 0.2 }).then(() => {
                    mobileMenu.classList.add('hidden');
                });
            }
        });
    }

    // 4. Hero / Page Header Staggered Entrance Animations
    const heroSection = document.querySelector('section');
    if (heroSection) {
        // Tag Pill Badge
        const heroPill = heroSection.querySelector('.motion-float-badge') || heroSection.querySelector('.inline-flex');
        if (heroPill) {
            animate(heroPill, { opacity: [0, 1], y: [-20, 0], scale: [0.9, 1] }, { duration: 0.7, ease: [0.16, 1, 0.3, 1] }).then(() => {
                // Continuous Gentle Floating Levitation Loop
                animate(heroPill, { y: [-4, 4, -4] }, { duration: 3.5, repeat: Infinity, ease: 'easeInOut' });
            });
        }

        // Headline
        const heroTitle = heroSection.querySelector('h1');
        if (heroTitle) {
            animate(heroTitle, { opacity: [0, 1], y: [35, 0] }, { duration: 0.85, delay: 0.12, ease: [0.16, 1, 0.3, 1] });
        }

        // Subtitle
        const heroSubtitle = heroSection.querySelector('p');
        if (heroSubtitle) {
            animate(heroSubtitle, { opacity: [0, 1], y: [25, 0] }, { duration: 0.75, delay: 0.25, ease: [0.16, 1, 0.3, 1] });
        }

        // CTA Buttons
        const heroButtonsContainer = heroSection.querySelector('.flex.flex-wrap.items-center.justify-center');
        if (heroButtonsContainer) {
            const heroButtons = heroButtonsContainer.querySelectorAll('a, button');
            if (heroButtons.length > 0) {
                animate(
                    Array.from(heroButtons),
                    { opacity: [0, 1], y: [20, 0], scale: [0.93, 1] },
                    { delay: stagger(0.1, { startDelay: 0.38 }), duration: 0.6, ease: [0.16, 1, 0.3, 1] }
                );
            }
        }

        // Highlights Cards Grid
        const heroCardsContainer = heroSection.querySelector('.grid');
        if (heroCardsContainer && heroCardsContainer.children.length > 0) {
            animate(
                Array.from(heroCardsContainer.children),
                { opacity: [0, 1], y: [35, 0], scale: [0.92, 1] },
                { delay: stagger(0.12, { startDelay: 0.5 }), duration: 0.7, ease: [0.16, 1, 0.3, 1] }
            );
        }

        // Ambient Background Glow Pulses (Framer Motion Keyframe Loop)
        const ambientGlows = document.querySelectorAll('.motion-glow, .blur-3xl');
        ambientGlows.forEach((glow, idx) => {
            animate(
                glow,
                { scale: [1, 1.2, 1], opacity: [0.12, 0.28, 0.12] },
                { duration: 5 + idx * 2, repeat: Infinity, ease: 'easeInOut' }
            );
        });
    }

    // 5. Scroll In-View Animations across Sections
    document.querySelectorAll('section').forEach((section, index) => {
        if (index === 0) return; // Skip hero since it animated on entrance

        inView(section, () => {
            // Title & Subtitle block
            const titleBlock = section.querySelector('.text-center, .sm\\:items-end');
            if (titleBlock) {
                animate(titleBlock, { opacity: [0, 1], y: [30, 0] }, { duration: 0.75, ease: [0.16, 1, 0.3, 1] });
            }

            // Cards Grid
            const grid = section.querySelector('.grid');
            if (grid && grid.children.length > 0) {
                animate(
                    Array.from(grid.children),
                    { opacity: [0, 1], y: [40, 0], scale: [0.94, 1] },
                    { delay: stagger(0.09, { startDelay: 0.1 }), duration: 0.65, ease: [0.16, 1, 0.3, 1] }
                );
            }

            // CTA Boxes
            const ctaBox = section.querySelector('.bg-gradient-to-r');
            if (ctaBox) {
                animate(ctaBox, { opacity: [0, 1], scale: [0.94, 1], y: [25, 0] }, { duration: 0.8, ease: [0.16, 1, 0.3, 1] });
            }

            // FAQ Items
            const faqItems = section.querySelectorAll('.border.rounded-2xl');
            if (faqItems.length > 0) {
                animate(
                    Array.from(faqItems),
                    { opacity: [0, 1], y: [25, 0] },
                    { delay: stagger(0.08, { startDelay: 0.1 }), duration: 0.55, ease: [0.16, 1, 0.3, 1] }
                );
            }
        }, { margin: '0px 0px -60px 0px' });
    });

    // 6. Interactive Button Spring Micro-Interactions
    document.querySelectorAll('.btn-gold, .btn-blue, .btn-outline-blue').forEach((btn) => {
        btn.addEventListener('mouseenter', () => {
            animate(btn, { scale: 1.04 }, { duration: 0.22, ease: [0.16, 1, 0.3, 1] });
        });
        btn.addEventListener('mouseleave', () => {
            animate(btn, { scale: 1 }, { duration: 0.25, ease: [0.16, 1, 0.3, 1] });
        });
        btn.addEventListener('mousedown', () => {
            animate(btn, { scale: 0.95 }, { duration: 0.1 });
        });
        btn.addEventListener('mouseup', () => {
            animate(btn, { scale: 1.04 }, { duration: 0.15 });
        });
    });

    // 7. Interactive Vehicle Cards & Highlights Spring Micro-Interactions
    document.querySelectorAll('.card-clean, .cab-card').forEach((card) => {
        card.addEventListener('mouseenter', () => {
            animate(card, { y: -8, scale: 1.01 }, { duration: 0.3, ease: [0.16, 1, 0.3, 1] });
        });
        card.addEventListener('mouseleave', () => {
            animate(card, { y: 0, scale: 1 }, { duration: 0.3, ease: [0.16, 1, 0.3, 1] });
        });
    });
}

// Guarantee execution whether DOM is loading or already loaded
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initFramerMotion);
} else {
    initFramerMotion();
}
