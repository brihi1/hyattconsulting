/**
 * Hyatt Consulting Theme JavaScript
 * 
 * @package Hyatt_Consulting
 */

(function() {
    'use strict';

    // ===== MOBILE MENU =====
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIconOpen = document.getElementById('menu-icon-open');
    const menuIconClose = document.getElementById('menu-icon-close');

    if (mobileMenuToggle && mobileMenu) {
        mobileMenuToggle.addEventListener('click', function() {
            const isOpen = mobileMenu.classList.toggle('active');
            
            if (menuIconOpen && menuIconClose) {
                menuIconOpen.style.display = isOpen ? 'none' : 'block';
                menuIconClose.style.display = isOpen ? 'block' : 'none';
            }
        });

        // Close menu when clicking a link
        mobileMenu.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() {
                mobileMenu.classList.remove('active');
                if (menuIconOpen && menuIconClose) {
                    menuIconOpen.style.display = 'block';
                    menuIconClose.style.display = 'none';
                }
            });
        });
    }

    // ===== CONTACT FORM =====
    const auditForm = document.getElementById('audit-form');

    if (auditForm) {
        auditForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            // Show loading
            submitBtn.disabled = true;
            submitBtn.innerHTML = 'Submitting...';

            // Get form data
            const formData = new FormData(this);
            formData.append('action', 'hyatt_contact_form');
            formData.append('nonce', hyattAjax.nonce);

            fetch(hyattAjax.ajaxurl, {
                method: 'POST',
                body: formData
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                if (data.success) {
                    alert('Thank you! Your audit request has been submitted. We will be in touch shortly.');
                    auditForm.reset();
                } else {
                    alert('There was an error submitting your request. Please try again or contact us directly.');
                }
            })
            .catch(function(error) {
                alert('Connection error. Please try again later.');
            })
            .finally(function() {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
            });
        });
    }

    // ===== SMOOTH SCROLL =====
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            if (href === '#') return;
            
            const target = document.querySelector(href);
            
            if (target) {
                e.preventDefault();
                
                const navbarHeight = 80;
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navbarHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ===== NAVBAR SCROLL EFFECT =====
    const navbar = document.querySelector('.navbar');
    
    if (navbar) {
        let lastScroll = 0;
        
        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 100) {
                navbar.style.background = 'rgba(10, 10, 10, 0.95)';
            } else {
                navbar.style.background = 'rgba(10, 10, 10, 0.6)';
            }
            
            lastScroll = currentScroll;
        });
    }

    // ===== INTERSECTION OBSERVER FOR ANIMATIONS =====
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

    // Observe service cards
    document.querySelectorAll('.service-card').forEach(function(card) {
        observer.observe(card);
    });

    // Observe stat items
    document.querySelectorAll('.stat-item').forEach(function(item) {
        observer.observe(item);
    });

})();
