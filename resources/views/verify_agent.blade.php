<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Agent - Awka Real Estate Agents Association</title>
    <link rel="stylesheet" href="{{ asset('realestate/css/agent.css') }}">
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
            <h1>Verify Agent Credentials</h1>
            <p>Protect yourself from fraud - verify any real estate agent's status before engaging their services</p>
        </div>
    </section>

    <!-- Verify Section -->
    <section class="verify-section">
        <div class="verify-card">
            <h2>🔍 Search Agent</h2>
            <p>Choose your preferred search method and enter agent information</p>

            <div class="search-methods">
                <div class="method-btn active" data-method="id">
                    <div class="method-icon">🆔</div>
                    <div class="method-label">Membership ID</div>
                </div>
                <div class="method-btn" data-method="phone">
                    <div class="method-icon">📱</div>
                    <div class="method-label">Phone Number</div>
                </div>
                <div class="method-btn" data-method="registration">
                    <div class="method-icon">📋</div>
                    <div class="method-label">Registration No.</div>
                </div>
                <div class="method-btn" data-method="qr">
                    <div class="method-icon">📷</div>
                    <div class="method-label">Scan QR Code</div>
                </div>
            </div>

            <form class="search-form" id="searchForm">
                <div class="form-group">
                    <label for="searchInput" id="searchLabel">Enter Membership ID</label>
                    <input type="text" id="searchInput" placeholder="e.g., REAA-2024-00123" required>
                </div>
                <button type="submit" class="search-btn">
                    <span id="btnText">Verify Agent</span>
                </button>
            </form>
        </div>

        <!-- Result Card (Hidden by default) -->
        <div class="result-card" id="resultCard">
            <!-- Results will be dynamically inserted here -->
        </div>

        <!-- How It Works -->
        <div class="how-it-works">
            <h2>How Agent Verification Works</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Choose Method</h3>
                    <p>Select your preferred verification method: ID, phone number, registration number, or QR code scan
                    </p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Enter Information</h3>
                    <p>Input the agent's information in the search field and click verify</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>View Results</h3>
                    <p>Instantly see the agent's verification status, credentials, and complete profile</p>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <h3>Make Decision</h3>
                    <p>Based on the verification results, decide whether to engage the agent's services</p>
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

        // Search method selection
        const methodBtns = document.querySelectorAll('.method-btn');
        const searchInput = document.getElementById('searchInput');
        const searchLabel = document.getElementById('searchLabel');
        let currentMethod = 'id';

        const methodConfig = {
            id: {
                label: 'Enter Membership ID',
                placeholder: 'e.g., REAA-2024-00123'
            },
            phone: {
                label: 'Enter Phone Number',
                placeholder: 'e.g., 0803 456 7890'
            },
            registration: {
                label: 'Enter Registration Number',
                placeholder: 'e.g., REG-AN-2024-123'
            },
            qr: {
                label: 'Scan QR Code',
                placeholder: 'Position QR code in front of camera'
            }
        };

        methodBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                methodBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                currentMethod = btn.getAttribute('data-method');

                searchLabel.textContent = methodConfig[currentMethod].label;
                searchInput.placeholder = methodConfig[currentMethod].placeholder;
                searchInput.value = '';
            });
        });

        // Sample agent data for demonstration
        const agentDatabase = {
            'REAA-2024-00123': {
                status: 'verified',
                name: 'Chukwuemeka Okafor',
                id: 'REAA-2024-00123',
                phone: '0803 456 7890',
                email: 'c.okafor@realestate.com',
                registrationDate: 'January 15, 2024',
                expiryDate: 'January 14, 2025',
                location: 'Awka, Anambra State',
                properties: '24 Active Listings'
            },
            '08034567890': {
                status: 'verified',
                name: 'Chukwuemeka Okafor',
                id: 'REAA-2024-00123',
                phone: '0803 456 7890',
                email: 'c.okafor@realestate.com',
                registrationDate: 'January 15, 2024',
                expiryDate: 'January 14, 2025',
                location: 'Awka, Anambra State',
                properties: '24 Active Listings'
            },
            'REAA-2023-00456': {
                status: 'suspended',
                name: 'Adaeze Nwankwo',
                id: 'REAA-2023-00456',
                phone: '0806 789 0123',
                email: 'a.nwankwo@properties.com',
                registrationDate: 'March 10, 2023',
                suspendedDate: 'November 20, 2024',
                reason: 'Under investigation for client complaint',
                location: 'Onitsha, Anambra State'
            },
            'REAA-2022-00789': {
                status: 'banned',
                name: 'Okoro Johnson',
                id: 'REAA-2022-00789',
                phone: '0809 012 3456',
                bannedDate: 'August 5, 2024',
                reason: 'Multiple fraud complaints and violation of association ethics',
                location: 'Nnewi, Anambra State'
            }
        };

        // Form submission
        const searchForm = document.getElementById('searchForm');
        const resultCard = document.getElementById('resultCard');
        const btnText = document.getElementById('btnText');

        searchForm.addEventListener('submit', (e) => {
            e.preventDefault();

            const searchValue = searchInput.value.trim();

            if (!searchValue) {
                alert('Please enter a value to search');
                return;
            }

            // Show loading state
            btnText.textContent = 'Searching...';
            searchForm.querySelector('.search-btn').disabled = true;

            // Simulate API call with setTimeout
            setTimeout(() => {
                const agent = agentDatabase[searchValue];

                if (agent) {
                    displayResult(agent);
                } else {
                    displayNotFound();
                }

                // Reset button
                btnText.textContent = 'Verify Agent';
                searchForm.querySelector('.search-btn').disabled = false;

                // Scroll to result
                resultCard.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }, 1500);
        });

        function displayResult(agent) {
            let statusHTML = '';
            let statusClass = '';
            let statusIcon = '';
            let additionalInfo = '';

            if (agent.status === 'verified') {
                statusClass = 'verified';
                statusIcon = '🟢';
                statusHTML = `<div class="status-badge ${statusClass}">${statusIcon} Verified & Active</div>`;
                additionalInfo = `
                    <div class="info-box">
                        <h3>✓ Safe to Work With</h3>
                        <p>This agent is a verified, active member in good standing. They have met all requirements and are authorized to provide real estate services.</p>
                    </div>
                `;
            } else if (agent.status === 'suspended') {
                statusClass = 'suspended';
                statusIcon = '🟡';
                statusHTML = `<div class="status-badge ${statusClass}">${statusIcon} Suspended</div>`;
                additionalInfo = `
                    <div class="warning-box">
                        <h3>⚠️ Caution Advised</h3>
                        <p><strong>Suspension Reason:</strong> ${agent.reason}</p>
                        <p><strong>Suspended Since:</strong> ${agent.suspendedDate}</p>
                        <p>This agent's membership is currently suspended. Exercise caution or consider working with an active agent.</p>
                    </div>
                `;
            } else if (agent.status === 'banned') {
                statusClass = 'banned';
                statusIcon = '🔴';
                statusHTML = `<div class="status-badge ${statusClass}">${statusIcon} Banned - Do Not Engage</div>`;
                additionalInfo = `
                    <div class="warning-box">
                        <h3>⛔ Do Not Engage</h3>
                        <p><strong>Ban Reason:</strong> ${agent.reason}</p>
                        <p><strong>Banned Since:</strong> ${agent.bannedDate}</p>
                        <p><strong>WARNING:</strong> This agent has been permanently banned from the association. Do not engage their services.</p>
                    </div>
                `;
            }

            const profileDetailsHTML = agent.status === 'verified' ? `
                <div class="detail-row">
                    <div class="detail-label">Email:</div>
                    <div class="detail-value">${agent.email}</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Registration Date:</div>
                    <div class="detail-value">${agent.registrationDate}</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Expiry Date:</div>
                    <div class="detail-value">${agent.expiryDate}</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Active Listings:</div>
                    <div class="detail-value">${agent.properties}</div>
                </div>
            ` : `
                <div class="detail-row">
                    <div class="detail-label">Status Date:</div>
                    <div class="detail-value">${agent.suspendedDate || agent.bannedDate}</div>
                </div>
            `;

            const actionButtonsHTML = agent.status === 'verified' ? `
                <div class="action-buttons">
                    <button class="btn-secondary" onclick="contactAgent()">📞 Contact Agent</button>
                    <button class="btn-secondary" onclick="viewProperties()">🏠 View Properties</button>
                    <button class="btn-secondary" onclick="downloadID()">💾 Download ID</button>
                </div>
            ` : agent.status === 'suspended' ? `
                <div class="action-buttons">
                    <button class="btn-secondary" onclick="reportIssue()">⚠️ Report Issue</button>
                    <button class="btn-secondary" onclick="findActiveAgent()">🔍 Find Active Agent</button>
                </div>
            ` : `
                <div class="action-buttons">
                    <button class="btn-secondary" onclick="reportFraud()">🚨 Report Fraud</button>
                    <button class="btn-secondary" onclick="findActiveAgent()">🔍 Find Active Agent</button>
                </div>
            `;

            resultCard.innerHTML = `
                ${statusHTML}

                <div class="agent-profile">
                    <div class="agent-photo">👤</div>
                    <div class="agent-details">
                        <div class="agent-name">${agent.name}</div>
                        <div class="agent-id">ID: ${agent.id}</div>

                        <div class="detail-row">
                            <div class="detail-label">Phone:</div>
                            <div class="detail-value">${agent.phone}</div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">Location:</div>
                            <div class="detail-value">${agent.location}</div>
                        </div>
                        ${profileDetailsHTML}
                    </div>
                </div>

                ${agent.status === 'verified' ? `
                        <div class="qr-code">
                            <h3 style="color: var(--primary); margin-bottom: 1rem;">Verification QR Code</h3>
                            <div class="qr-code-image">
                                <svg width="180" height="180" viewBox="0 0 180 180">
                                    <rect width="180" height="180" fill="white"/>
                                    <g fill="${agent.id === 'REAA-2024-00123' ? '#0a1628' : '#1e3a5f'}">
                                        <rect x="20" y="20" width="20" height="20"/><rect x="40" y="20" width="20" height="20"/>
                                        <rect x="80" y="20" width="20" height="20"/><rect x="120" y="20" width="20" height="20"/>
                                        <rect x="140" y="20" width="20" height="20"/><rect x="20" y="40" width="20" height="20"/>
                                        <rect x="80" y="40" width="20" height="20"/><rect x="100" y="40" width="20" height="20"/>
                                        <rect x="140" y="40" width="20" height="20"/><rect x="20" y="60" width="20" height="20"/>
                                        <rect x="40" y="60" width="20" height="20"/><rect x="60" y="60" width="20" height="20"/>
                                        <rect x="100" y="60" width="20" height="20"/><rect x="120" y="60" width="20" height="20"/>
                                        <rect x="140" y="60" width="20" height="20"/><rect x="20" y="80" width="20" height="20"/>
                                        <rect x="60" y="80" width="20" height="20"/><rect x="80" y="80" width="20" height="20"/>
                                        <rect x="100" y="80" width="20" height="20"/><rect x="140" y="80" width="20" height="20"/>
                                        <rect x="40" y="100" width="20" height="20"/><rect x="60" y="100" width="20" height="20"/>
                                        <rect x="100" y="100" width="20" height="20"/><rect x="120" y="100" width="20" height="20"/>
                                        <rect x="20" y="120" width="20" height="20"/><rect x="60" y="120" width="20" height="20"/>
                                        <rect x="80" y="120" width="20" height="20"/><rect x="120" y="120" width="20" height="20"/>
                                        <rect x="140" y="120" width="20" height="20"/><rect x="20" y="140" width="20" height="20"/>
                                        <rect x="40" y="140" width="20" height="20"/><rect x="100" y="140" width="20" height="20"/>
                                        <rect x="140" y="140" width="20" height="20"/>
                                    </g>
                                </svg>
                            </div>
                            <p style="color: var(--gray); font-size: 0.9rem;">Scan this code to verify agent instantly</p>
                        </div>
                    ` : ''}

                ${additionalInfo}

                ${actionButtonsHTML}

                <div style="text-align: center; margin-top: 2rem; padding-top: 2rem; border-top: 2px solid var(--light);">
                    <button class="btn-secondary" onclick="searchAgain()" style="max-width: 300px;">🔍 Search Another Agent</button>
                </div>
            `;

            resultCard.classList.add('show');
        }

        function displayNotFound() {
            resultCard.innerHTML = `
                <div class="status-badge not-found">⚫ Not Registered</div>

                <div class="agent-profile" style="text-align: center; display: block;">
                    <div class="agent-photo" style="margin: 0 auto 2rem;">❌</div>
                    <div class="agent-name" style="color: var(--gray);">Agent Not Found</div>
                    <p style="color: var(--gray); margin-top: 1rem; font-size: 1.1rem;">
                        No agent found with the provided information in our database.
                    </p>
                </div>

                <div class="warning-box">
                    <h3>⚠️ Potential Fraud Warning</h3>
                    <p>This agent is NOT registered with the Real Estate Agents Association.</p>
                    <p><strong>We strongly advise against engaging their services.</strong></p>
                    <ul style="margin-top: 1rem; padding-left: 2rem;">
                        <li>They may be operating illegally</li>
                        <li>No accountability or oversight</li>
                        <li>Higher risk of fraud or misconduct</li>
                        <li>No recourse if issues arise</li>
                    </ul>
                </div>

                <div class="info-box">
                    <h3>💡 What to Do</h3>
                    <p>If someone claims to be a registered agent but doesn't appear in our system:</p>
                    <ul style="margin-top: 1rem; padding-left: 2rem;">
                        <li>Ask them to provide their valid membership ID</li>
                        <li>Request to see their digital ID card with QR code</li>
                        <li>Report the incident to us immediately</li>
                        <li>Choose a verified agent from our platform</li>
                    </ul>
                </div>

                <div class="action-buttons">
                    <button class="btn-secondary" onclick="reportFraud()">🚨 Report This Person</button>
                    <button class="btn-secondary" onclick="findActiveAgent()">🔍 Find Verified Agent</button>
                </div>

                <div style="text-align: center; margin-top: 2rem; padding-top: 2rem; border-top: 2px solid var(--light);">
                    <button class="btn-secondary" onclick="searchAgain()" style="max-width: 300px;">🔍 Try Another Search</button>
                </div>
            `;

            resultCard.classList.add('show');
        }

        // Action button functions
        function searchAgain() {
            resultCard.classList.remove('show');
            searchInput.value = '';
            searchInput.focus();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        function contactAgent() {
            alert('Contact feature: This would open a contact form or direct messaging system.');
        }

        function viewProperties() {
            alert('View Properties: This would redirect to the agent\'s property listings page.');
        }

        function downloadID() {
            alert('Download ID: This would generate and download the agent\'s digital ID card as a PDF.');
        }

        function reportIssue() {
            alert('Report Issue: This would open a form to report concerns about this agent.');
        }

        function reportFraud() {
            alert('Report Fraud: This would open the fraud reporting form with pre-filled information.');
        }

        function findActiveAgent() {
            alert('Find Active Agent: This would redirect to a page showing all verified, active agents in your area.');
        }

        // Demo button to test different scenarios
        function testVerification(searchValue) {
            searchInput.value = searchValue;
            searchForm.dispatchEvent(new Event('submit'));
        }

        // Add test buttons for demonstration (remove in production)
        window.addEventListener('load', () => {
            const verifyCard = document.querySelector('.verify-card');
            const demoButtons = document.createElement('div');
            demoButtons.style.cssText =
                'margin-top: 2rem; padding: 1.5rem; background: #fff3cd; border-radius: 10px; border: 2px solid #ffc107;';
            demoButtons.innerHTML = `
                <h3 style="margin-bottom: 1rem; color: #856404;">🎮 Demo Mode - Try These:</h3>
                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <button onclick="testVerification('REAA-2024-00123')" style="padding: 0.5rem 1rem; background: #28a745; color: white; border: none; border-radius: 6px; cursor: pointer; font-weight: 600;">✅ Verified Agent</button>
                    <button onclick="testVerification('REAA-2023-00456')" style="padding: 0.5rem 1rem; background: #ffc107; color: #000; border: none; border-radius: 6px; cursor: pointer; font-weight: 600;">⚠️ Suspended Agent</button>
                    <button onclick="testVerification('REAA-2022-00789')" style="padding: 0.5rem 1rem; background: #dc3545; color: white; border: none; border-radius: 6px; cursor: pointer; font-weight: 600;">🚫 Banned Agent</button>
                    <button onclick="testVerification('FAKE-123')" style="padding: 0.5rem 1rem; background: #6c757d; color: white; border: none; border-radius: 6px; cursor: pointer; font-weight: 600;">❌ Not Found</button>
                </div>
                <p style="margin-top: 1rem; font-size: 0.9rem; color: #856404;">Click any button above to see different verification results</p>
            `;
            verifyCard.appendChild(demoButtons);
        });
    </script>
</body>

</html>
