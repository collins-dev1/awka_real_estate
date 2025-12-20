<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Awka Real Estate Agents Association</title>
    <link rel="stylesheet" href="{{ asset('realestate/css/contact.css') }}">
    <link rel="icon" href="{{ asset('realestate/img/WhatsApp Image 2025-12-12 at 8.39.38 AM.jpeg') }}">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader">
            <div class="loader-ring"></div>
            <div class="loader-ring"></div>
            <div class="loader-text">LOADING</div>
        </div>
    </div>

    <!-- Navigation -->
    <nav id="navbar">
        <div class="nav-container">
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('realestate/img/realestate-removebg-preview.png') }}" alt="">
            </a>
            <div class="menu-toggle" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-links" id="navLinks">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('verify_agent') }}">Verify Agent</a></li>
                <li><a href="{{ route('features') }}">Features</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="{{ route('login') }}"><button class="btn-primary">Member Login</button></a></li>
            </ul>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="page-header">
        <div class="page-header-content">
            <h1>Contact Us</h1>
            <p>Get in touch with us for inquiries, support, or to report any issues</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="contact-container">
            <!-- Contact Form -->
            <div class="contact-form-card">
                <div class="success-message" id="successMessage">
                    <h3>✓ Message Sent Successfully!</h3>
                    <p>Thank you for contacting us. We'll get back to you within 24 hours.</p>
                </div>

                <h2>Send Us a Message</h2>
                <p>Fill out the form below and we'll respond as soon as possible</p>

                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" required placeholder="Enter your full name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" required placeholder="your.email@example.com">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" id="phone" required placeholder="0803 456 7890">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <select id="subject" required>
                            <option value="">Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="membership">Membership Application</option>
                            <option value="verification">Agent Verification Issue</option>
                            <option value="fraud">Report Fraud</option>
                            <option value="property">Property Listing</option>
                            <option value="complaint">Complaint</option>
                            <option value="technical">Technical Support</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Your Message *</label>
                        <textarea id="message" required placeholder="Write your message here..."></textarea>
                    </div>

                    <button type="submit" class="submit-btn">
                        <span id="btnText">Send Message</span>
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="contact-info-card">
                <h2>Contact Information</h2>

                <div class="info-item">
                    <div class="info-icon">📍</div>
                    <div class="info-content">
                        <h3>Office Address</h3>
                        <p>123 Real Estate Avenue,<br>Awka, Anambra State,<br>Nigeria</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">📞</div>
                    <div class="info-content">
                        <h3>Phone Numbers</h3>
                        <p>Main Office: <a href="tel:+2348012345678">+234 801 234 5678</a></p>
                        <p>Support Line: <a href="tel:+2348087654321">+234 808 765 4321</a></p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">✉️</div>
                    <div class="info-content">
                        <h3>Email Addresses</h3>
                        <p>General: <a href="mailto:info@reaa.ng">info@reaa.ng</a></p>
                        <p>Support: <a href="mailto:support@reaa.ng">support@reaa.ng</a></p>
                        <p>Fraud Reports: <a href="mailto:fraud@reaa.ng">fraud@reaa.ng</a></p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">🕐</div>
                    <div class="info-content">
                        <h3>Working Hours</h3>
                        <p>Monday - Friday: 8:00 AM - 5:00 PM</p>
                        <p>Saturday: 9:00 AM - 2:00 PM</p>
                        <p>Sunday: Closed</p>
                    </div>
                </div>

                <div class="office-hours">
                    <h3>📱 Social Media</h3>
                    <p style="color: var(--gray); margin-top: 0.5rem;">
                        Follow us on social media for updates and announcements
                    </p>
                    <div style="display: flex; gap: 1rem; margin-top: 1rem;">
                        <a href="#" style="color: var(--secondary); font-size: 1.5rem;">📘</a>
                        <a href="#" style="color: var(--secondary); font-size: 1.5rem;">🐦</a>
                        <a href="#" style="color: var(--secondary); font-size: 1.5rem;">📷</a>
                        <a href="#" style="color: var(--secondary); font-size: 1.5rem;">💼</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="map-section">
            <h2>Find Us</h2>
            <div class="map-placeholder">
                <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="50" cy="50" r="40" fill="#d4af37" opacity="0.2" />
                    <path d="M50 20 L50 45 L65 55 Z" fill="#0a1628" />
                    <circle cx="50" cy="50" r="5" fill="#d4af37" />
                </svg>
                <p>REAA Office Location - Awka, Anambra State</p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="faq-container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Quick answers to common questions</p>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>How quickly will I get a response?</span>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        We typically respond to all inquiries within 24 hours during business days. Urgent matters
                        regarding fraud reports are prioritized and handled immediately.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>Can I visit your office without an appointment?</span>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Yes, you can visit during our working hours. However, we recommend scheduling an appointment for
                        more complex matters to ensure the appropriate staff member is available to assist you.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>How do I report a fraudulent agent?</span>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        You can report fraud through this contact form by selecting "Report Fraud" as the subject, or
                        email us directly at fraud@reaa.ng. You can also call our hotline for immediate assistance.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>Do you offer in-person consultations?</span>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Yes, we offer in-person consultations at our Awka office. Please contact us to schedule an
                        appointment with the appropriate department.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>Is there an emergency contact number?</span>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        For urgent fraud reports or emergencies related to real estate transactions, please call our
                        emergency hotline at +234 808 765 4321 (available 24/7).
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <div class="footer-logo">
                    <img src="{{ asset('realestate/img/realestate-removebg-preview.png') }}" alt="">
                </div>
                <p>The official Real Estate Agents Association is a government-recognized body regulating agents in
                    Anambra State, fighting fraud and building trust.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <a href="{{ route('verify_agent') }}">Verify Agent</a>
                <a href="{{ route('login') }}">Register Member</a>
                <a href="{{ route('login') }}">List Property</a>
                <a href="#">Report Fraud</a>
            </div>
            <div class="footer-section">
                <h3>For Members</h3>
                <a href="{{ route('login') }}">Member Login</a>
                <a href="{{ route('login') }}">Renew Membership</a>
                <a href="{{ route('login') }}">Download ID Card</a>
                <a href="{{ route('login') }}">Pay Dues</a>
            </div>
            <div class="footer-section">
                <h3>Resources</h3>
                <a href="#">Constitution</a>
                <a href="#">Rules & Regulations</a>
                <a href="#">Training Portal</a>
                <a href="{{ route('contact') }}">Contact Support</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Real Estate Agents Association Anambra State. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Preloader
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.getElementById('preloader').classList.add('hide');
            }, 1000);
        });

        // Mobile menu toggle
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // Contact Form Submission
        const contactForm = document.getElementById('contactForm');
        const successMessage = document.getElementById('successMessage');
        const btnText = document.getElementById('btnText');

        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();

            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;

            // Validate form
            if (!name || !email || !phone || !subject || !message) {
                alert('Please fill in all required fields');
                return;
            }

            // Show loading state
            btnText.textContent = 'Sending...';
            contactForm.querySelector('.submit-btn').disabled = true;

            // Simulate API call
            setTimeout(() => {
                // Show success message
                successMessage.classList.add('show');

                // Reset form
                contactForm.reset();

                // Reset button
                btnText.textContent = 'Send Message';
                contactForm.querySelector('.submit-btn').disabled = false;

                // Scroll to success message
                successMessage.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });

                // Hide success message after 5 seconds
                setTimeout(() => {
                    successMessage.classList.remove('show');
                }, 5000);

                // In production, this would send data to backend
                console.log('Form submitted:', {
                    name,
                    email,
                    phone,
                    subject,
                    message
                });
            }, 1500);
        });

        // FAQ Accordion
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');

            question.addEventListener('click', () => {
                // Close other items
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }
                });

                // Toggle current item
                item.classList.toggle('active');
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    navLinks.classList.remove('active');
                }
            });
        });

        // Animate elements on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe contact cards and info items
        document.querySelectorAll('.contact-form-card, .contact-info-card, .info-item, .faq-item, .map-section').forEach((
            element, index) => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(20px)';
            element.style.transition = `all 0.6s ease ${index * 0.1}s`;
            observer.observe(element);
        });

        // Phone number formatting
        const phoneInput = document.getElementById('phone');
        phoneInput.addEventListener('input', (e) => {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 0) {
                if (value.length <= 4) {
                    value = value;
                } else if (value.length <= 7) {
                    value = value.slice(0, 4) + ' ' + value.slice(4);
                } else {
                    value = value.slice(0, 4) + ' ' + value.slice(4, 7) + ' ' + value.slice(7, 11);
                }
            }
            e.target.value = value;
        });

        // Email validation
        const emailInput = document.getElementById('email');
        emailInput.addEventListener('blur', (e) => {
            const email = e.target.value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (email && !emailRegex.test(email)) {
                e.target.style.borderColor = '#ef4444';
                alert('Please enter a valid email address');
            } else {
                e.target.style.borderColor = '';
            }
        });

        // Character counter for message textarea
        const messageTextarea = document.getElementById('message');
        const charCounter = document.createElement('div');
        charCounter.style.cssText = 'text-align: right; color: var(--gray); font-size: 0.9rem; margin-top: 0.5rem;';
        messageTextarea.parentElement.appendChild(charCounter);

        messageTextarea.addEventListener('input', (e) => {
            const length = e.target.value.length;
            charCounter.textContent = `${length} characters`;

            if (length > 500) {
                charCounter.style.color = '#ef4444';
            } else {
                charCounter.style.color = 'var(--gray)';
            }
        });

        // Add visual feedback on form field focus
        const formInputs = document.querySelectorAll('.form-group input, .form-group select, .form-group textarea');

        formInputs.forEach(input => {
            input.addEventListener('focus', (e) => {
                e.target.parentElement.style.transform = 'translateX(5px)';
                e.target.parentElement.style.transition = 'transform 0.3s ease';
            });

            input.addEventListener('blur', (e) => {
                e.target.parentElement.style.transform = 'translateX(0)';
            });
        });

        // Add quick contact buttons functionality
        const createQuickContactButton = () => {
            const quickContactBtn = document.createElement('div');
            quickContactBtn.style.cssText = `
                position: fixed;
                bottom: 30px;
                right: 30px;
                z-index: 999;
                display: flex;
                flex-direction: column;
                gap: 10px;
            `;

            // WhatsApp button
            const whatsappBtn = document.createElement('a');
            whatsappBtn.href = 'https://wa.me/2348012345678';
            whatsappBtn.target = '_blank';
            whatsappBtn.style.cssText = `
                width: 60px;
                height: 60px;
                background: #25D366;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 2rem;
                text-decoration: none;
                box-shadow: 0 5px 20px rgba(37, 211, 102, 0.4);
                transition: transform 0.3s ease;
            `;
            whatsappBtn.innerHTML = '💬';
            whatsappBtn.title = 'Chat on WhatsApp';

            whatsappBtn.addEventListener('mouseenter', () => {
                whatsappBtn.style.transform = 'scale(1.1)';
            });
            whatsappBtn.addEventListener('mouseleave', () => {
                whatsappBtn.style.transform = 'scale(1)';
            });

            // Call button
            const callBtn = document.createElement('a');
            callBtn.href = 'tel:+2348012345678';
            callBtn.style.cssText = `
                width: 60px;
                height: 60px;
                background: linear-gradient(135deg, var(--primary), var(--secondary));
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 2rem;
                text-decoration: none;
                box-shadow: 0 5px 20px rgba(212, 175, 55, 0.4);
                transition: transform 0.3s ease;
            `;
            callBtn.innerHTML = '📞';
            callBtn.title = 'Call Us';

            callBtn.addEventListener('mouseenter', () => {
                callBtn.style.transform = 'scale(1.1)';
            });
            callBtn.addEventListener('mouseleave', () => {
                callBtn.style.transform = 'scale(1)';
            });

            quickContactBtn.appendChild(whatsappBtn);
            quickContactBtn.appendChild(callBtn);
            document.body.appendChild(quickContactBtn);

            // Hide on mobile scroll
            let lastScroll = 0;
            window.addEventListener('scroll', () => {
                const currentScroll = window.pageYOffset;
                if (window.innerWidth <= 768) {
                    if (currentScroll > lastScroll) {
                        quickContactBtn.style.transform = 'translateX(100px)';
                    } else {
                        quickContactBtn.style.transform = 'translateX(0)';
                    }
                }
                lastScroll = currentScroll;
            });
        };

        // Initialize quick contact buttons
        createQuickContactButton();

        // Add form validation messages
        const addValidationMessage = (input, message) => {
            const existingMessage = input.parentElement.querySelector('.validation-message');
            if (existingMessage) {
                existingMessage.remove();
            }

            if (message) {
                const validationMsg = document.createElement('div');
                validationMsg.className = 'validation-message';
                validationMsg.style.cssText = 'color: #ef4444; font-size: 0.9rem; margin-top: 0.3rem;';
                validationMsg.textContent = message;
                input.parentElement.appendChild(validationMsg);
            }
        };

        // Real-time validation
        document.getElementById('name').addEventListener('blur', (e) => {
            if (e.target.value.length < 2) {
                addValidationMessage(e.target, 'Name must be at least 2 characters long');
                e.target.style.borderColor = '#ef4444';
            } else {
                addValidationMessage(e.target, '');
                e.target.style.borderColor = '';
            }
        });

        phoneInput.addEventListener('blur', (e) => {
            const digits = e.target.value.replace(/\D/g, '');
            if (digits.length < 10) {
                addValidationMessage(e.target, 'Please enter a valid phone number');
                e.target.style.borderColor = '#ef4444';
            } else {
                addValidationMessage(e.target, '');
                e.target.style.borderColor = '';
            }
        });

        messageTextarea.addEventListener('blur', (e) => {
            if (e.target.value.length < 10) {
                addValidationMessage(e.target, 'Message must be at least 10 characters long');
                e.target.style.borderColor = '#ef4444';
            } else {
                addValidationMessage(e.target, '');
                e.target.style.borderColor = '';
            }
        });
    </script>
</body>

</html>
