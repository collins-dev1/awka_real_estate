<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features - Awka Real Estate Agents Association</title>
    <link rel="stylesheet" href="{{ asset('realestate/css/feature.css') }}">
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
            <h1>Platform Features</h1>
            <p>Comprehensive tools and systems designed for agents, landlords, tenants, and the general public</p>
        </div>
    </section>

    <!-- Tabs Navigation -->
    <div class="tabs-nav">
        <div class="tabs-container">
            <button class="tab-btn active" data-tab="agents">For Agents</button>
            <button class="tab-btn" data-tab="landlords">For Landlords</button>
            <button class="tab-btn" data-tab="public">For Public</button>
            <button class="tab-btn" data-tab="admin">Admin Tools</button>
            <button class="tab-btn" data-tab="all">All Features</button>
        </div>
    </div>

    <!-- Features Content -->
    <section class="features-content">
        <!-- For Agents Tab -->
        <div class="tab-content active" id="agents">
            <div class="content-container">
                <div class="feature-section">
                    <div class="feature-header">
                        <div class="feature-icon-large">👤</div>
                        <div class="feature-header-text">
                            <h2>Member Registration & Verification</h2>
                            <p>Complete registration system with official credentials</p>
                        </div>
                    </div>
                    <div class="feature-details">
                        <div class="feature-item">
                            <div class="feature-item-icon">🆔</div>
                            <div class="feature-item-content">
                                <h3>Official Membership ID</h3>
                                <p>Every registered agent receives a unique membership ID for official identification
                                    and verification purposes.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-item-icon">📋</div>
                            <div class="feature-item-content">
                                <h3>Complete Profile System</h3>
                                <p>Maintain detailed profile including name, phone, address, passport photo, and
                                    professional information.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-item-icon">✓</div>
                            <div class="feature-item-content">
                                <h3>Verified Badge</h3>
                                <p>Display your verified status to build trust with clients and differentiate from
                                    unregistered agents.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-item-icon">📱</div>
                            <div class="feature-item-content">
                                <h3>Digital ID Card with QR Code</h3>
                                <p>Download your digital ID card with QR code for instant verification. Anyone can scan
                                    to confirm your status.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="feature-section">
                    <div class="feature-header">
                        <div class="feature-icon-large">📊</div>
                        <div class="feature-header-text">
                            <h2>Agent Dashboard</h2>
                            <p>Centralized control center for all your activities</p>
                        </div>
                    </div>
                    <div class="feature-details">
                        <div class="feature-item">
                            <div class="feature-item-icon">✏️</div>
                            <div class="feature-item-content">
                                <h3>Profile Management</h3>
                                <p>Update your personal information, contact details, and professional credentials
                                    anytime.</p>
                                <ul class="feature-list">
                                    <li>Edit contact information</li>
                                    <li>Upload passport photo</li>
                                    <li>Update business address</li>
                                    <li>Manage professional certifications</li>
                                </ul>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-item-icon">🏠</div>
                            <div class="feature-item-content">
                                <h3>Property Management</h3>
                                <p>List and manage your properties efficiently with full control over listings.</p>
                                <ul class="feature-list">
                                    <li>Add new property listings</li>
                                    <li>Upload multiple property images</li>
                                    <li>Edit property details</li>
                                    <li>Track property views and inquiries</li>
                                </ul>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-item-icon">🔄</div>
                            <div class="feature-item-content">
                                <h3>Membership Renewal</h3>
                                <p>Renew your annual membership online with automatic renewal reminders and easy payment
                                    options.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-item-icon">📄</div>
                            <div class="feature-item-content">
                                <h3>Constitution & Guidelines</h3>
                                <p>Access association constitution, rules, regulations, and professional guidelines
                                    anytime.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="feature-section">
                    <div class="feature-header">
                        <div class="feature-icon-large">💳</div>
                        <div class="feature-header-text">
                            <h2>Payment System</h2>
                            <p>Secure online payments with automatic receipts</p>
                        </div>
                    </div>
                    <div class="feature-grid">
                        <div class="grid-card">
                            <div class="grid-card-icon">💰</div>
                            <h3>Pay Dues</h3>
                            <p>Pay annual membership dues securely online via Paystack or Flutterwave</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">🎫</div>
                            <h3>ID Card Payment</h3>
                            <p>Pay for ID card generation and replacement with instant processing</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">📧</div>
                            <h3>Auto Receipts</h3>
                            <p>Automatic generation and email delivery of payment receipts</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">📜</div>
                            <h3>Payment History</h3>
                            <p>View complete payment history and download past receipts</p>
                        </div>
                    </div>
                </div>

                <div class="feature-section">
                    <div class="feature-header">
                        <div class="feature-icon-large">🎓</div>
                        <div class="feature-header-text">
                            <h2>Training & Certification</h2>
                            <p>Professional development courses and official certifications</p>
                        </div>
                    </div>
                    <div class="feature-details">
                        <div class="feature-item">
                            <div class="feature-item-icon">📚</div>
                            <div class="feature-item-content">
                                <h3>Online Courses</h3>
                                <p>Access comprehensive courses on property laws, real estate ethics, fraud prevention,
                                    and professional conduct.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-item-icon">🏆</div>
                            <div class="feature-item-content">
                                <h3>Official Certificates</h3>
                                <p>Earn downloadable certificates upon course completion to enhance your professional
                                    credibility.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cta-box">
                    <h3>Ready to Join?</h3>
                    <p>Register as a verified member and gain access to all agent features</p>
                    <a href="{{route('login')}}" class="btn-secondary">Register Now</a>
                </div>
            </div>
        </div>

        <!-- For Landlords Tab -->
        <div class="tab-content" id="landlords">
            <div class="content-container">
                <div class="feature-section">
                    <div class="feature-header">
                        <div class="feature-icon-large">🏢</div>
                        <div class="feature-header-text">
                            <h2>Landlord Portal</h2>
                            <p>Comprehensive tools for property owners</p>
                        </div>
                    </div>
                    <div class="feature-details">
                        <div class="feature-item">
                            <div class="feature-item-icon">✓</div>
                            <div class="feature-item-content">
                                <h3>Verify Agent Status</h3>
                                <p>Check if an agent is a registered, verified member before engaging their services.
                                    View their status, membership ID, and credentials.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-item-icon">🏠</div>
                            <div class="feature-item-content">
                                <h3>Submit Properties</h3>
                                <p>Submit your properties for listing through verified agents. Maintain full control
                                    while leveraging professional agent services.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-item-icon">👥</div>
                            <div class="feature-item-content">
                                <h3>Choose Approved Agents</h3>
                                <p>Select from our pool of verified agents to manage your property rentals and sales
                                    with confidence.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-item-icon">⚠️</div>
                            <div class="feature-item-content">
                                <h3>Report Fraudulent Agents</h3>
                                <p>Report fake agents or misconduct directly through the platform. Help us maintain
                                    integrity in the industry.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-item-icon">📊</div>
                            <div class="feature-item-content">
                                <h3>Track Activity</h3>
                                <p>Monitor your property management activities and view detailed history of agent
                                    interactions.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="feature-section">
                    <div class="feature-header">
                        <div class="feature-icon-large">🔒</div>
                        <div class="feature-header-text">
                            <h2>Security & Protection</h2>
                            <p>Your properties are protected by our verification system</p>
                        </div>
                    </div>
                    <div class="feature-grid">
                        <div class="grid-card">
                            <div class="grid-card-icon">🛡️</div>
                            <h3>Fraud Prevention</h3>
                            <p>Work only with verified agents to eliminate fraud risks</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">📜</div>
                            <h3>Legal Protection</h3>
                            <p>All agents bound by association rules and regulations</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">💼</div>
                            <h3>Professional Standards</h3>
                            <p>Agents follow strict professional and ethical guidelines</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">📞</div>
                            <h3>24/7 Support</h3>
                            <p>Access support and assistance whenever you need it</p>
                        </div>
                    </div>
                </div>

                <div class="cta-box">
                    <h3>List Your Property</h3>
                    <p>Connect with verified agents to manage your properties safely and professionally</p>
                    <a href="{{route('login')}}" class="btn-secondary">Get Started</a>
                </div>
            </div>
        </div>

        <!-- For Public Tab -->
        <div class="tab-content" id="public">
            <div class="content-container">
                <div class="feature-section">
                    <div class="feature-header">
                        <div class="feature-icon-large">🔍</div>
                        <div class="feature-header-text">
                            <h2>Public Agent Verification Tool</h2>
                            <p>Protect yourself from fraud - verify any agent instantly</p>
                        </div>
                    </div>
                    <div class="feature-details">
                        <div class="feature-item">
                            <div class="feature-item-icon">🆔</div>
                            <div class="feature-item-content">
                                <h3>Search by Multiple Criteria</h3>
                                <p>Verify an agent using their Membership ID, Phone Number, or Registration Number.</p>
                                <ul class="feature-list">
                                    <li>Enter Agent ID for instant results</li>
                                    <li>Search by phone number</li>
                                    <li>Look up membership number</li>
                                    <li>Scan QR code from ID card</li>
                                </ul>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-item-icon">🟢</div>
                            <div class="feature-item-content">
                                <h3>Real-Time Status Check</h3>
                                <p>See agent status instantly:</p>
                                <ul class="feature-list">
                                    <li>🟢 Verified & Active - Safe to work with</li>
                                    <li>🟡 Suspended - Caution advised</li>
                                    <li>🔴 Banned - Do not engage</li>
                                    <li>⚫ Not Registered - Potential fraud</li>
                                </ul>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-item-icon">📋</div>
                            <div class="feature-item-content">
                                <h3>View Agent Details</h3>
                                <p>Access verified agent information including name, membership ID, registration date,
                                    and contact information.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="feature-section">
                    <div class="feature-header">
                        <div class="feature-icon-large">🏘️</div>
                        <div class="feature-header-text">
                            <h2>Property Search</h2>
                            <p>Browse properties listed by verified agents only</p>
                        </div>
                    </div>
                    <div class="feature-grid">
                        <div class="grid-card">
                            <div class="grid-card-icon">🔎</div>
                            <h3>Advanced Search</h3>
                            <p>Filter properties by location, price, type, and features</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">📍</div>
                            <h3>Map View</h3>
                            <p>View properties on interactive maps with exact locations</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">📸</div>
                            <h3>Photo Galleries</h3>
                            <p>Browse high-quality images of properties</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">👤</div>
                            <h3>Agent Contact</h3>
                            <p>Contact verified agents directly for property inquiries</p>
                        </div>
                    </div>
                </div>

                <div class="feature-section">
                    <div class="feature-header">
                        <div class="feature-icon-large">⚠️</div>
                        <div class="feature-header-text">
                            <h2>Report Fraud</h2>
                            <p>Help us keep the community safe</p>
                        </div>
                    </div>
                    <div class="feature-details">
                        <div class="feature-item">
                            <div class="feature-item-icon">📝</div>
                            <div class="feature-item-content">
                                <h3>Easy Reporting System</h3>
                                <p>Report suspected fraudulent agents or misconduct through our simple online form. Your
                                    report helps protect others.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-item-icon">🔒</div>
                            <div class="feature-item-content">
                                <h3>Anonymous Reporting</h3>
                                <p>Submit reports anonymously if desired. Your privacy is protected while helping
                                    maintain industry integrity.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cta-box">
                    <h3>Verify an Agent Now</h3>
                    <p>Protect yourself from fraud by verifying agent credentials before engaging their services</p>
                    <a href="{{route('login')}}" class="btn-secondary">Start Verification</a>
                </div>
            </div>
        </div>

        <!-- Admin Tools Tab -->
        <div class="tab-content" id="admin">
            <div class="content-container">
                <div class="feature-section">
                    <div class="feature-header">
                        <div class="feature-icon-large">🛡️</div>
                        <div class="feature-header-text">
                            <h2>Admin Dashboard</h2>
                            <p>Complete control and management system for association leadership</p>
                        </div>
                    </div>
                    <div class="feature-details">
                        <div class="feature-item">
                            <div class="feature-item-icon">✅</div>
                            <div class="feature-item-content">
                                <h3>Member Approval System</h3>
                                <p>Review and approve new member applications. Verify credentials and documentation
                                    before granting membership.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-item-icon">⚖️</div>
                            <div class="feature-item-content">
                                <h3>Disciplinary Actions</h3>
                                <p>Suspend or ban members for violations. Manage disciplinary procedures and maintain
                                    member status records.</p>
                                <ul class="feature-list">
                                    <li>Issue warnings</li>
                                    <li>Suspend memberships</li>
                                    <li>Permanent bans for serious violations</li>
                                    <li>Track disciplinary history</li>
                                </ul>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-item-icon">🏠</div>
                            <div class="feature-item-content">
                                <h3>Property Verification</h3>
                                <p>Review and verify property listings before publication. Ensure all listings meet
                                    quality and authenticity standards.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-item-icon">✏️</div>
                            <div class="feature-item-content">
                                <h3>Member Management</h3>
                                <p>Edit member information, update statuses, manage profiles, and maintain accurate
                                    records for all registered agents.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="feature-section">
                    <div class="feature-header">
                        <div class="feature-icon-large">📊</div>
                        <div class="feature-header-text">
                            <h2>Reporting & Analytics</h2>
                            <p>Data-driven insights for better decision making</p>
                        </div>
                    </div>
                    <div class="feature-grid">
                        <div class="grid-card">
                            <div class="grid-card-icon">📈</div>
                            <h3>Membership Stats</h3>
                            <p>Track total members, new registrations, and growth trends</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">💰</div>
                            <h3>Payment Reports</h3>
                            <p>Monitor dues collection, renewals, and revenue analytics</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">⚠️</div>
                            <h3>Fraud Reports</h3>
                            <p>Review and investigate fraud reports and complaints</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">🏘️</div>
                            <h3>Property Analytics</h3>
                            <p>Track property listings, views, and activity metrics</p>
                        </div>
                    </div>
                </div>

                <div class="feature-section">
                    <div class="feature-header">
                        <div class="feature-icon-large">📢</div>
                        <div class="feature-header-text">
                            <h2>Communication Tools</h2>
                            <p>Reach all members instantly</p>
                        </div>
                    </div>
                    <div class="feature-details">
                        <div class="feature-item">
                            <div class="feature-item-icon">📣</div>
                            <div class="feature-item-content">
                                <h3>Announcements System</h3>
                                <p>Send important announcements to all members via the portal, email, and SMS
                                    notifications.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-item-icon">📧</div>
                            <div class="feature-item-content">
                                <h3>Email Broadcasts</h3>
                                <p>Send targeted emails to specific member groups or entire membership base.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-item-icon">🔔</div>
                            <div class="feature-item-content">
                                <h3>Push Notifications</h3>
                                <p>Send instant push notifications for urgent matters, meetings, and important updates.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cta-box">
                    <h3>Admin Access Required</h3>
                    <p>These features are exclusively available to association leadership and authorized administrators
                    </p>
                    <a href="{{route('login')}}" class="btn-secondary">Admin Login</a>
                </div>
            </div>
        </div>

        <!-- All Features Tab -->
        <div class="tab-content" id="all">
            <div class="content-container">
                <div class="feature-section">
                    <div class="feature-header">
                        <div class="feature-icon-large">⭐</div>
                        <div class="feature-header-text">
                            <h2>Complete Feature List</h2>
                            <p>Everything the platform offers in one place</p>
                        </div>
                    </div>

                    <h3 style="margin: 2rem 0 1rem; color: var(--primary); font-size: 1.5rem;">🧑‍💼 For Agents</h3>
                    <div class="feature-grid">
                        <div class="grid-card">
                            <div class="grid-card-icon">👤</div>
                            <h3>Member Registration</h3>
                            <p>Complete registration with ID, verification, and digital credentials</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">📊</div>
                            <h3>Personal Dashboard</h3>
                            <p>Manage profile, properties, and membership</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">🏠</div>
                            <h3>Property Listings</h3>
                            <p>List and manage properties with full control</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">💳</div>
                            <h3>Payment System</h3>
                            <p>Pay dues, renewals, and fees online</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">🎓</div>
                            <h3>Training & Certification</h3>
                            <p>Access courses and earn certificates</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">🆔</div>
                            <h3>Digital ID Card</h3>
                            <p>QR code enabled ID for instant verification</p>
                        </div>
                    </div>

                    <h3 style="margin: 2rem 0 1rem; color: var(--primary); font-size: 1.5rem;">🏢 For Landlords</h3>
                    <div class="feature-grid">
                        <div class="grid-card">
                            <div class="grid-card-icon">✓</div>
                            <h3>Agent Verification</h3>
                            <p>Verify agent credentials before engagement</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">🏘️</div>
                            <h3>Property Submission</h3>
                            <p>Submit properties for agent management</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">👥</div>
                            <h3>Agent Selection</h3>
                            <p>Choose from pool of verified agents</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">⚠️</div>
                            <h3>Fraud Reporting</h3>
                            <p>Report fake agents and misconduct</p>
                        </div>
                    </div>

                    <h3 style="margin: 2rem 0 1rem; color: var(--primary); font-size: 1.5rem;">🌍 For Public</h3>
                    <div class="feature-grid">
                        <div class="grid-card">
                            <div class="grid-card-icon">🔍</div>
                            <h3>Public Verification</h3>
                            <p>Check any agent's status and credentials</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">🏠</div>
                            <h3>Property Search</h3>
                            <p>Browse verified property listings</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">📝</div>
                            <h3>Report System</h3>
                            <p>Report suspicious agents or fraud</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">📞</div>
                            <h3>Contact Agents</h3>
                            <p>Connect with verified agents directly</p>
                        </div>
                    </div>

                    <h3 style="margin: 2rem 0 1rem; color: var(--primary); font-size: 1.5rem;">🛡️ Admin Features</h3>
                    <div class="feature-grid">
                        <div class="grid-card">
                            <div class="grid-card-icon">✅</div>
                            <h3>Member Approval</h3>
                            <p>Review and approve new registrations</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">⚖️</div>
                            <h3>Disciplinary Control</h3>
                            <p>Suspend or ban members for violations</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">📊</div>
                            <h3>Analytics Dashboard</h3>
                            <p>View detailed reports and statistics</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">📢</div>
                            <h3>Announcements</h3>
                            <p>Send updates to all members instantly</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">💰</div>
                            <h3>Payment Tracking</h3>
                            <p>Monitor all financial transactions</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">🔧</div>
                            <h3>System Settings</h3>
                            <p>Configure portal settings and rules</p>
                        </div>
                    </div>
                </div>

                <div class="feature-section"
                    style="background: linear-gradient(135deg, var(--light), white); border: 2px solid var(--secondary);">
                    <h2 style="text-align: center; color: var(--primary); margin-bottom: 2rem; font-size: 2rem;">🎯
                        Platform Benefits</h2>
                    <div class="feature-grid">
                        <div class="grid-card">
                            <div class="grid-card-icon">🛡️</div>
                            <h3>Fraud Prevention</h3>
                            <p>98% reduction in real estate fraud cases</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">✓</div>
                            <h3>Trust Building</h3>
                            <p>Government-recognized verification system</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">📈</div>
                            <h3>Professional Growth</h3>
                            <p>Training and certification opportunities</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">🤝</div>
                            <h3>Community Building</h3>
                            <p>Connect with verified professionals</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">📱</div>
                            <h3>Digital Transformation</h3>
                            <p>Modern, mobile-friendly platform</p>
                        </div>
                        <div class="grid-card">
                            <div class="grid-card-icon">🌟</div>
                            <h3>Industry Standards</h3>
                            <p>Setting professional benchmarks</p>
                        </div>
                    </div>
                </div>

                <div class="cta-box">
                    <h3>Experience All Features</h3>
                    <p>Join thousands of verified agents, landlords, and property seekers on Nigeria's most trusted real
                        estate platform</p>
                    <a href="{{route('login')}}" class="btn-secondary" style="margin-right: 1rem;">Register as Agent</a>
                    <a href="{{route('login')}}" class="btn-secondary">Create Landlord Account</a>
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

        // Tab functionality
        const tabBtns = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const targetTab = btn.getAttribute('data-tab');

                // Remove active class from all tabs and contents
                tabBtns.forEach(b => b.classList.remove('active'));
                tabContents.forEach(c => c.classList.remove('active'));

                // Add active class to clicked tab and corresponding content
                btn.classList.add('active');
                document.getElementById(targetTab).classList.add('active');

                // Scroll to tabs nav smoothly
                document.querySelector('.tabs-nav').scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
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

        // Animate feature cards on scroll
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

        // Observe all feature sections and cards
        document.querySelectorAll('.feature-section, .grid-card, .feature-item').forEach((element, index) => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(20px)';
            element.style.transition = `all 0.6s ease ${index * 0.05}s`;
            observer.observe(element);
        });
    </script>
</body>

</html>
