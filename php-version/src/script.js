document.addEventListener('DOMContentLoaded', () => {
    document.documentElement.classList.add('js');
    const prefersReducedMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mobileNav = document.querySelector('#mobileNav');
    const mobileNavOverlay = document.querySelector('[data-mobile-nav-overlay]');
    const mobileNavClose = document.querySelector('[data-mobile-nav-close]');

    const closeMobileNav = () => {
        if (!mobileNav) return;
        mobileNav.classList.remove('is-open');
        mobileNavOverlay?.classList.remove('is-open');
        document.body.classList.remove('is-locked');
        mobileMenuBtn?.setAttribute('aria-expanded', 'false');
        mobileNav.setAttribute('aria-hidden', 'true');
    };

    const openMobileNav = () => {
        if (!mobileNav) return;
        mobileNav.classList.add('is-open');
        mobileNavOverlay?.classList.add('is-open');
        document.body.classList.add('is-locked');
        mobileMenuBtn?.setAttribute('aria-expanded', 'true');
        mobileNav.setAttribute('aria-hidden', 'false');
    };

    mobileMenuBtn?.addEventListener('click', () => {
        if (!mobileNav) return;
        const isOpen = mobileNav.classList.contains('is-open');
        if (isOpen) closeMobileNav();
        else openMobileNav();
    });

    mobileNavClose?.addEventListener('click', closeMobileNav);
    mobileNavOverlay?.addEventListener('click', closeMobileNav);
    mobileNav?.querySelectorAll('a[href^="#"]').forEach(a => {
        a.addEventListener('click', closeMobileNav);
    });

    window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeMobileNav();
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                const headerOffset = 80;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: prefersReducedMotion ? "auto" : "smooth"
                });
            }
        });
    });

    // FAQ Accordion functionality
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            // Close other items
            faqItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                    otherItem.querySelector('.faq-answer').style.maxHeight = null;
                }
            });
            
            // Toggle current item
            item.classList.toggle('active');
            const answer = item.querySelector('.faq-answer');
            
            if (item.classList.contains('active')) {
                answer.style.maxHeight = answer.scrollHeight + "px";
            } else {
                answer.style.maxHeight = null;
            }
        });
    });

    // Header scroll effect
    const header = document.querySelector('.header');
    const hero = document.querySelector('.hero');
    const updateHeader = () => {
        const y = window.scrollY || 0;
        const switchAt = hero ? Math.max(120, hero.offsetHeight - 120) : 200;
        header.classList.toggle('is-scrolled', y > 10);
        header.classList.toggle('is-light', y > switchAt);
    };
    updateHeader();
    window.addEventListener('scroll', updateHeader);

    document.querySelectorAll('[data-year]').forEach(el => {
        el.textContent = String(new Date().getFullYear());
    });

    if (!prefersReducedMotion && 'IntersectionObserver' in window) {
        const revealEls = document.querySelectorAll('.step, .compare-row, .benefit-item, .card, .cta-card, .beta-container');
        const io = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-inview');
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -10% 0px' });

        revealEls.forEach(el => io.observe(el));
    } else {
        document.querySelectorAll('.step, .compare-row, .benefit-item, .card, .cta-card, .beta-container').forEach(el => {
            el.classList.add('is-inview');
        });
    }

    document.querySelectorAll('[data-carousel]').forEach(carousel => {
        const track = carousel.querySelector('.app-carousel-track');
        const slides = Array.from(carousel.querySelectorAll('.app-slide'));
        const dots = Array.from(carousel.querySelectorAll('.app-dot'));
        const prevBtn = carousel.querySelector('.app-carousel-btn.is-prev');
        const nextBtn = carousel.querySelector('.app-carousel-btn.is-next');

        if (!track || slides.length <= 1) return;

        let index = 0;
        let timer = null;

        const setActive = (nextIndex) => {
            index = (nextIndex + slides.length) % slides.length;
            track.style.transform = `translateX(-${index * 100}%)`;
            slides.forEach((s, i) => s.classList.toggle('is-active', i === index));
            dots.forEach((d, i) => d.classList.toggle('is-active', i === index));
        };

        const start = () => {
            if (prefersReducedMotion) return;
            stop();
            timer = window.setInterval(() => setActive(index + 1), 6000);
        };

        const stop = () => {
            if (timer) window.clearInterval(timer);
            timer = null;
        };

        prevBtn?.addEventListener('click', () => {
            setActive(index - 1);
            start();
        });

        nextBtn?.addEventListener('click', () => {
            setActive(index + 1);
            start();
        });

        dots.forEach((dot, i) => {
            dot.addEventListener('click', () => {
                setActive(i);
                start();
            });
        });

        carousel.addEventListener('mouseenter', stop);
        carousel.addEventListener('mouseleave', start);

        setActive(0);
        start();
    });
});
