/**
 * Hyatt Consulting Theme - Main JavaScript
 *
 * @package Hyatt_Consulting
 */

(function() {
    'use strict';

    // Mobile Menu Toggle
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mobileNav = document.querySelector('.mobile-nav');

    if (mobileMenuBtn && mobileNav) {
        mobileMenuBtn.addEventListener('click', function() {
            this.classList.toggle('active');
            mobileNav.classList.toggle('active');
        });

        // Close mobile menu when clicking a link
        mobileNav.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() {
                mobileMenuBtn.classList.remove('active');
                mobileNav.classList.remove('active');
            });
        });
    }

    // Smooth Scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;

            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                const offsetTop = target.offsetTop - 80; // Account for fixed navbar
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Contact Form Handler
    const contactForm = document.getElementById('contact-form');
    const formMessage = document.getElementById('form-message');

    if (contactForm && typeof hyattAjax !== 'undefined') {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const submitBtn = this.querySelector('.form-submit');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;

            // Gather form data
            const formData = new FormData(this);
            formData.append('action', 'hyatt_contact');
            formData.append('nonce', hyattAjax.nonce);

            // Get checked services
            const services = [];
            this.querySelectorAll('input[name="services[]"]:checked').forEach(function(checkbox) {
                services.push(checkbox.value);
            });
            formData.delete('services[]');
            services.forEach(function(service) {
                formData.append('services[]', service);
            });

            fetch(hyattAjax.ajaxurl, {
                method: 'POST',
                body: formData,
                credentials: 'same-origin'
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                if (formMessage) {
                    formMessage.style.display = 'block';
                    if (data.success) {
                        formMessage.className = 'form-message success';
                        formMessage.textContent = data.data.message;
                        contactForm.reset();
                    } else {
                        formMessage.className = 'form-message error';
                        formMessage.textContent = data.data.message || 'An error occurred. Please try again.';
                    }
                }
            })
            .catch(function(error) {
                console.error('Form submission error:', error);
                if (formMessage) {
                    formMessage.style.display = 'block';
                    formMessage.className = 'form-message error';
                    formMessage.textContent = 'An error occurred. Please try again.';
                }
            })
            .finally(function() {
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            });
        });
    }

    // Navbar scroll effect
    const navbar = document.querySelector('.navbar');
    if (navbar) {
        let lastScroll = 0;
        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 100) {
                navbar.style.background = 'rgba(0, 0, 0, 0.95)';
            } else {
                navbar.style.background = 'rgba(0, 0, 0, 0.8)';
            }
            
            lastScroll = currentScroll;
        });
    }

    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.method-card, .service-card, .stat-item').forEach(function(el) {
        el.style.opacity = '0';
        observer.observe(el);
    });

})();
