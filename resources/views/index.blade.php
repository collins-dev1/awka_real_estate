<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Agents Association - Official Portal</title>
    <link rel="stylesheet" href="{{asset('realestate/css/index.css')}}">
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
            <a href="#" class="logo">
                <img src="{{asset('realestate/img/realestate-removebg-preview.png')}}" alt="">
            </a>
            <div class="menu-toggle" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-links" id="navLinks">
                <li><a href="#home">Home</a></li>
                <li><a href="#verify">Verify Agent</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><button class="btn-primary">Member Login</button></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Carousel Section -->
    <section class="hero" id="home">
        <!-- Carousel Slides -->
        <div class="carousel">
            <div class="carousel-slide active">
                <div class="hero-particles" id="particles"></div>
            </div>
            <div class="carousel-slide">
                <div class="hero-particles"></div>
            </div>
            <div class="carousel-slide">
                <div class="hero-particles"></div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <div class="carousel-controls">
            <button class="carousel-btn" id="prevBtn">‹</button>
            <button class="carousel-btn" id="nextBtn">›</button>
        </div>

        <!-- Hero Content -->
        <div class="hero-content">
            <h1>Official Real Estate Agents Association</h1>
            <p>The government-recognized platform for verified real estate agents in Anambra State. Fight fraud, verify agents, manage properties, and build a trusted real estate community.</p>
            <div class="hero-buttons">
                <a href="#verify" class="btn-primary">Verify an Agent</a>
                <a href="#register" class="btn-secondary">Register as Member</a>
            </div>
        </div>

        <!-- Carousel Indicators -->
        <div class="carousel-indicators">
            <span class="indicator active" data-slide="0"></span>
            <span class="indicator" data-slide="1"></span>
            <span class="indicator" data-slide="2"></span>
        </div>
    </section>

    <!-- Quick Actions -->
    <section class="quick-actions" id="verify">
        <div class="quick-actions-container">
            <div class="action-card">
                <div class="action-icon">✓</div>
                <h3>Verify Agent</h3>
                <p>Check if an agent is registered and verified</p>
                <button class="action-btn">Verify Now</button>
            </div>
            <div class="action-card">
                <div class="action-icon">📝</div>
                <h3>Register Member</h3>
                <p>Join our association as a verified agent</p>
                <button class="action-btn">Register</button>
            </div>
            <div class="action-card">
                <div class="action-icon">🏠</div>
                <h3>List Property</h3>
                <p>Landlords can submit properties for listing</p>
                <button class="action-btn">List Now</button>
            </div>
            <div class="action-card">
                <div class="action-icon">⚠️</div>
                <h3>Report Fraud</h3>
                <p>Report fraudulent agents or misconduct</p>
                <button class="action-btn">Report</button>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="section-title">
            <h2>Platform Features</h2>
            <p>Comprehensive tools for agents, landlords, tenants, and the public</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">👤</div>
                <h3>Member Registration</h3>
                <p>Complete registration system with membership ID, verification badges, digital ID cards, and QR codes for instant verification.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔍</div>
                <h3>Agent Verification</h3>
                <p>Public tool to verify any agent's status - Active, Suspended, Banned, or Not Registered. Fight fraud effectively.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h3>Agent Dashboard</h3>
                <p>Manage profile, renew membership, pay dues, list properties, and access constitution and guidelines.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🏘️</div>
                <h3>Property Marketplace</h3>
                <p>Only verified agents can list properties. Landlords can submit properties for agents to manage safely.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🏢</div>
                <h3>Landlord Portal</h3>
                <p>Verify agents, list properties, choose approved agents, report fraud, and track property management.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">⚖️</div>
                <h3>Constitution & Rules</h3>
                <p>Access association constitution, rules, regulations, disciplinary procedures, and membership requirements.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">💳</div>
                <h3>Payment System</h3>
                <p>Secure payments for registration, renewals, ID cards, and fines via Paystack/Flutterwave with automatic receipts.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🎓</div>
                <h3>Training & Certification</h3>
                <p>Online courses on property laws, fraud prevention, and real estate ethics with official certificates.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🎓</div>
                <h3>Training & Certification</h3>
                <p>Online courses on property laws, fraud prevention, and real estate ethics with official certificates.</p>
            </div>
        </div>
    </section>
    <!-- Stats Section -->
<section class="stats">
    <div class="stats-container">
        <div class="stat-item">
            <div class="stat-number">1,247</div>
            <div class="stat-label">Verified Agents</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">3,842</div>
            <div class="stat-label">Listed Properties</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">98%</div>
            <div class="stat-label">Fraud Prevention Rate</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">24/7</div>
            <div class="stat-label">Support Available</div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta">
    <div class="cta-content">
        <h2>Join the Official Association</h2>
        <p>Become a verified member of the Real Estate Agents Association and gain access to exclusive tools, training, and a trusted network. Help us regulate the industry and fight fraud.</p>
        <button class="btn-primary">Apply for Membership</button>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="footer-content">
        <div class="footer-section">
            <div class="footer-logo">
                <img src="{{asset('realestate/img/realestate-removebg-preview.png')}}" alt="">
            </div>
            <p>The official Real Estate Agents Association is a government-recognized body regulating agents in Anambra State, fighting fraud and building trust.</p>
        </div>
        <div class="footer-section">
            <h3>Quick Links</h3>
            <a href="#">Verify Agent</a>
            <a href="#">Register Member</a>
            <a href="#">List Property</a>
            <a href="#">Report Fraud</a>
        </div>
        <div class="footer-section">
            <h3>For Members</h3>
            <a href="#">Member Login</a>
            <a href="#">Renew Membership</a>
            <a href="#">Download ID Card</a>
            <a href="#">Pay Dues</a>
        </div>
        <div class="footer-section">
            <h3>Resources</h3>
            <a href="#">Constitution</a>
            <a href="#">Rules & Regulations</a>
            <a href="#">Training Portal</a>
            <a href="#">Contact Support</a>
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
        }, 1500);
    });

    // Carousel functionality
    let currentSlide = 0;
    const slides = document.querySelectorAll('.carousel-slide');
    const indicators = document.querySelectorAll('.indicator');
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        indicators.forEach(ind => ind.classList.remove('active'));

        currentSlide = (index + totalSlides) % totalSlides;
        slides[currentSlide].classList.add('active');
        indicators[currentSlide].classList.add('active');
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    // Auto-play carousel
    let autoPlay = setInterval(nextSlide, 5000);

    // Carousel controls
    document.getElementById('nextBtn').addEventListener('click', () => {
        nextSlide();
        clearInterval(autoPlay);
        autoPlay = setInterval(nextSlide, 5000);
    });

    document.getElementById('prevBtn').addEventListener('click', () => {
        prevSlide();
        clearInterval(autoPlay);
        autoPlay = setInterval(nextSlide, 5000);
    });

    // Indicators
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            showSlide(index);
            clearInterval(autoPlay);
            autoPlay = setInterval(nextSlide, 5000);
        });
    });

    // Animated particles in hero
    const particlesContainer = document.getElementById('particles');
    for (let i = 0; i < 20; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.width = Math.random() * 10 + 5 + 'px';
        particle.style.height = particle.style.width;
        particle.style.left = Math.random() * 100 + '%';
        particle.style.animationDelay = Math.random() * 15 + 's';
        particle.style.animationDuration = Math.random() * 10 + 10 + 's';
        particlesContainer.appendChild(particle);
    }

    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Mobile menu toggle
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');

    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });

    // Smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
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

    // Feature cards animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    document.querySelectorAll('.feature-card, .action-card').forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = `all 0.6s ease ${index * 0.1}s`;
        observer.observe(card);
    });
</script>
</body>
</html>
