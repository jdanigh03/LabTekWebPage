// assets/js/main.js

document.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector('header');
    const mobileToggle = document.querySelector('.mobile-toggle');
    const navLinks = document.querySelector('.nav-links');
    const navElement = document.querySelector('header nav');
    const heroSection = document.querySelector('.hero-section');

    // =============================
    // SCROLL DETECTION FOR NAVBAR
    // =============================
    function handleScroll() {
        // If there's a hero section, use it as reference
        if (heroSection) {
            const heroHeight = heroSection.offsetHeight;
            const scrollPosition = window.scrollY;

            // Add scrolled class when past 100px or when hero is 20% scrolled
            if (scrollPosition > Math.min(100, heroHeight * 0.2)) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        } else {
            // If no hero section, always show solid header
            header.classList.add('scrolled');
        }
    }

    // Run on scroll
    window.addEventListener('scroll', handleScroll);
    // Run on page load to set initial state
    handleScroll();

    // =============================
    // MOBILE MENU TOGGLE
    // =============================
    if (mobileToggle && navLinks && navElement) {
        mobileToggle.addEventListener('click', function () {
            navLinks.classList.toggle('nav-open');
            navElement.classList.toggle('nav-open');
            mobileToggle.classList.toggle('active');

            // Toggle icon between hamburger and X
            const icon = mobileToggle.querySelector('i');
            if (icon) {
                if (navLinks.classList.contains('nav-open')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                } else {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            }
        });

        // Close menu when clicking on a link
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', function () {
                navLinks.classList.remove('nav-open');
                navElement.classList.remove('nav-open');
                mobileToggle.classList.remove('active');
                const icon = mobileToggle.querySelector('i');
                if (icon) {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });
        });
    }

    // =============================
    // SMOOTH SCROLL FOR ANCHOR LINKS
    // =============================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId !== '#') {
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    e.preventDefault();
                    const headerHeight = header.offsetHeight;
                    const targetPosition = targetElement.offsetTop - headerHeight;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    console.log('LABTEK website loaded');
});
