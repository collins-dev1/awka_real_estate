<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Awka Real Estate Agents Association</title>
    <link rel="stylesheet" href="{{asset('realestate/css/signup.css')}}">
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

    <!-- Logo Header -->
    <div class="logo-header">
        <a href="{{ url('/') }}" class="logo">
            <img src="{{ asset('realestate/img/realestate-removebg-preview.png') }}" alt="">
        </a>
    </div>

    <!-- Back to Home -->
    <div class="back-home">
        <a href="/">← Home</a>
    </div>

    <!-- Registration Container -->
    <div class="registration-container">
        <!-- Progress Bar -->
        <div class="progress-container">
            <div class="progress-steps">
                <div class="progress-line" id="progressLine"></div>

                <div class="step active" data-step="1">
                    <div class="step-circle">1</div>
                    <div class="step-label">Basic Info</div>
                </div>

                <div class="step" data-step="2">
                    <div class="step-circle">2</div>
                    <div class="step-label">Details</div>
                </div>

                <div class="step" data-step="3">
                    <div class="step-circle">3</div>
                    <div class="step-label">Security</div>
                </div>
            </div>
        </div>

        <!-- Form Container -->
        <div class="form-container">
            <form id="registrationForm">
                <!-- Step 1: Basic Information -->
                <div class="form-step active" data-step="1">
                    <div class="step-header">
                        <h2>Create Your Account</h2>
                        <p>Let's start with your basic information</p>
                    </div>

                    <div class="form-group">
                        <label>Full Name *</label>
                        <div class="input-wrapper">
                            <span class="input-icon">👤</span>
                            <input type="text" id="fullName" required placeholder="Enter your full name">
                        </div>
                        <div class="validation-message" id="nameError"></div>
                    </div>

                    <div class="form-group">
                        <label>Email Address *</label>
                        <div class="input-wrapper">
                            <span class="input-icon">📧</span>
                            <input type="email" id="email" required placeholder="your.email@example.com">
                        </div>
                        <div class="validation-message" id="emailError"></div>
                    </div>

                    <div class="form-group">
                        <label>Phone Number *</label>
                        <div class="input-wrapper">
                            <span class="input-icon">📱</span>
                            <input type="tel" id="phone" required placeholder="0803 456 7890">
                        </div>
                        <div class="validation-message" id="phoneError"></div>
                    </div>

                    <div class="form-group">
                        <label>Account Type *</label>
                        <div class="user-type-grid">
                            <div class="user-type-card" onclick="selectAccountType('agent')">
                                <div class="user-type-icon">👨‍💼</div>
                                <div class="user-type-label">Agent</div>
                            </div>
                            <div class="user-type-card" onclick="selectAccountType('landlord')">
                                <div class="user-type-icon">🏢</div>
                                <div class="user-type-label">Landlord</div>
                            </div>
                            <div class="user-type-card" onclick="selectAccountType('tenant')">
                                <div class="user-type-icon">🔑</div>
                                <div class="user-type-label">Tenant</div>
                            </div>
                        </div>
                        <input type="hidden" id="accountType" required>
                        <div class="validation-message" id="accountTypeError"></div>
                    </div>

                    <div class="form-buttons">
                        <button type="button" class="btn btn-primary" onclick="nextStep()">Next Step →</button>
                    </div>
                </div>

                <!-- Step 2: Additional Details -->
                <div class="form-step" data-step="2">
                    <div class="step-header">
                        <h2>Additional Information</h2>
                        <p>Help us know you better</p>
                    </div>

                    <div class="form-group">
                        <label>Address *</label>
                        <div class="input-wrapper">
                            <span class="input-icon">📍</span>
                            <input type="text" id="address" required placeholder="Enter your address">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>City *</label>
                        <div class="input-wrapper">
                            <span class="input-icon">🏙️</span>
                            <input type="text" id="city" required placeholder="e.g., Awka">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>State *</label>
                        <div class="input-wrapper">
                            <span class="input-icon">🗺️</span>
                            <select id="state" required>
                                <option value="">Select State</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Abuja">Abuja</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Kano">Kano</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" id="agentFields" style="display: none;">
                        <label>Years of Experience</label>
                        <div class="input-wrapper">
                            <span class="input-icon">📅</span>
                            <input type="number" id="experience" min="0" placeholder="e.g., 5">
                        </div>
                    </div>

                    <div class="form-buttons">
                        <button type="button" class="btn btn-secondary" onclick="prevStep()">← Back</button>
                        <button type="button" class="btn btn-primary" onclick="nextStep()">Next Step →</button>
                    </div>
                </div>

                <!-- Step 3: Security -->
                <div class="form-step" data-step="3">
                    <div class="step-header">
                        <h2>Secure Your Account</h2>
                        <p>Create a strong password</p>
                    </div>

                    <div class="form-group">
                        <label>Password *</label>
                        <div class="input-wrapper">
                            <span class="input-icon">🔒</span>
                            <input type="password" id="password" required placeholder="Create a strong password">
                            <button type="button" class="password-toggle" onclick="togglePassword('password')">👁️</button>
                        </div>
                        <div class="password-strength">
                            <div class="strength-bar">
                                <div class="strength-fill" id="strengthFill"></div>
                            </div>
                            <div class="strength-text" id="strengthText"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Confirm Password *</label>
                        <div class="input-wrapper">
                            <span class="input-icon">🔒</span>
                            <input type="password" id="confirmPassword" required placeholder="Confirm your password">
                            <button type="button" class="password-toggle" onclick="togglePassword('confirmPassword')">👁️</button>
                        </div>
                        <div class="validation-message" id="passwordMatchError"></div>
                    </div>

                    <div class="form-group">
                        <label style="display: flex; align-items: center; gap: 0.5rem; font-weight: 400;">
                            <input type="checkbox" id="agreeTerms" required style="width: auto; padding: 0;">
                            <span>I agree to the <a href="#" style="color: var(--secondary); font-weight: 600;">Terms & Conditions</a></span>
                        </label>
                    </div>

                    <div class="form-buttons">
                        <button type="button" class="btn btn-secondary" onclick="prevStep()">← Back</button>
                        <button type="submit" class="btn btn-primary" id="submitBtn">
                            <span id="submitText">Create Account</span>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Success Screen -->
            <div class="success-screen" id="successScreen">
                <div class="success-icon">✓</div>
                <h2>Registration Successful!</h2>
                <p>Your account has been created successfully. Please check your email to verify your account.</p>
                <button class="btn btn-primary" onclick="window.location.href='login.html'">Go to Login</button>
            </div>
        </div>
    </div>

    <script>
        // Preloader
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.getElementById('preloader').classList.add('hide');
            }, 1500);
        });

        let currentStep = 1;
        const totalSteps = 3;

        // Update Progress Bar
        function updateProgress() {
            const progressLine = document.getElementById('progressLine');
            const percentage = ((currentStep - 1) / (totalSteps - 1)) * 100;
            progressLine.style.width = percentage + '%';

            // Update step indicators
            document.querySelectorAll('.step').forEach((step, index) => {
                const stepNum = index + 1;
                step.classList.remove('active', 'completed');

                if (stepNum < currentStep) {
                    step.classList.add('completed');
                    step.querySelector('.step-circle').textContent = '✓';
                } else if (stepNum === currentStep) {
                    step.classList.add('active');
                    step.querySelector('.step-circle').textContent = stepNum;
                } else {
                    step.querySelector('.step-circle').textContent = stepNum;
                }
            });
        }

        // Navigate to next step
        function nextStep() {
            if (validateCurrentStep()) {
                if (currentStep < totalSteps) {
                    // Hide current step
                    document.querySelector(`.form-step[data-step="${currentStep}"]`).classList.remove('active');

                    currentStep++;

                    // Show next step
                    document.querySelector(`.form-step[data-step="${currentStep}"]`).classList.add('active');

                    updateProgress();
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                }
            }
        }

        // Navigate to previous step
        function prevStep() {
            if (currentStep > 1) {
                // Hide current step
                document.querySelector(`.form-step[data-step="${currentStep}"]`).classList.remove('active');

                currentStep--;

                // Show previous step
                document.querySelector(`.form-step[data-step="${currentStep}"]`).classList.add('active');

                updateProgress();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        }

        // Validate current step
        function validateCurrentStep() {
            if (currentStep === 1) {
                const fullName = document.getElementById('fullName').value.trim();
                const email = document.getElementById('email').value.trim();
                const phone = document.getElementById('phone').value.trim();
                const accountType = document.getElementById('accountType').value;

                if (!fullName || fullName.length < 3) {
                    showError('nameError', 'Please enter your full name (minimum 3 characters)');
                    return false;
                }

                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!email || !emailRegex.test(email)) {
                    showError('emailError', 'Please enter a valid email address');
                    return false;
                }

                if (!phone || phone.replace(/\D/g, '').length < 10) {
                    showError('phoneError', 'Please enter a valid phone number');
                    return false;
                }

                if (!accountType) {
                    showError('accountTypeError', 'Please select an account type');
                    return false;
                }

                return true;
            }

            if (currentStep === 2) {
                const address = document.getElementById('address').value.trim();
                const city = document.getElementById('city').value.trim();
                const state = document.getElementById('state').value;

                if (!address) {
                    alert('Please enter your address');
                    return false;
                }

                if (!city) {
                    alert('Please enter your city');
                    return false;
                }

                if (!state) {
                    alert('Please select your state');
                    return false;
                }

                return true;
            }

            return true;
        }

        // Show error message
        function showError(elementId, message) {
            const errorElement = document.getElementById(elementId);
            errorElement.textContent = message;
            errorElement.classList.add('show');

            setTimeout(() => {
                errorElement.classList.remove('show');
            }, 3000);
        }

        // Select account type
        function selectAccountType(type) {
            document.querySelectorAll('.user-type-card').forEach(card => {
                card.classList.remove('selected');
            });
            event.target.closest('.user-type-card').classList.add('selected');
            document.getElementById('accountType').value = type;

            // Show agent-specific fields
            const agentFields = document.getElementById('agentFields');
            if (type === 'agent') {
                agentFields.style.display = 'block';
                document.getElementById('experience').required = true;
            } else {
                agentFields.style.display = 'none';
                document.getElementById('experience').required = false;
            }
        }

        // Toggle password visibility
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            input.type = input.type === 'password' ? 'text' : 'password';
        }

        // Password strength checker
        document.getElementById('password').addEventListener('input', (e) => {
            const password = e.target.value;
            const strengthFill = document.getElementById('strengthFill');
            const strengthText = document.getElementById('strengthText');

            let strength = 0;
            if (password.length >= 8) strength++;
            if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength++;
            if (/[0-9]/.test(password)) strength++;
            if (/[^a-zA-Z0-9]/.test(password)) strength++;

            const colors = ['#ef4444', '#f59e0b', '#f59e0b', '#10b981', '#10b981'];
            const texts = ['', 'Weak', 'Fair', 'Good', 'Strong'];
            const widths = [0, 25, 50, 75, 100];

            strengthFill.style.width = widths[strength] + '%';
            strengthFill.style.background = colors[strength];
            strengthText.textContent = texts[strength];
            strengthText.style.color = colors[strength];
        });

        // Password match validation
        document.getElementById('confirmPassword').addEventListener('input', (e) => {
            const password = document.getElementById('password').value;
            const confirmPassword = e.target.value;
            const errorElement = document.getElementById('passwordMatchError');

            if (confirmPassword && password !== confirmPassword) {
                errorElement.textContent = '✗ Passwords do not match';
                errorElement.classList.add('show');
            } else if (confirmPassword && password === confirmPassword) {
                errorElement.textContent = '✓ Passwords match';
                errorElement.style.color = '#10b981';
                errorElement.classList.add('show');
            } else {
                errorElement.classList.remove('show');
            }
        });

        // Phone number formatting
        document.getElementById('phone').addEventListener('input', (e) => {
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

        // Form submission
        document.getElementById('registrationForm').addEventListener('submit', (e) => {
            e.preventDefault();

            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const agreeTerms = document.getElementById('agreeTerms').checked;

            if (password !== confirmPassword) {
                alert('Passwords do not match!');
                return;
            }

            if (!agreeTerms) {
                alert('Please agree to the Terms & Conditions');
                return;
            }

            // Show loading
            const submitBtn = document.getElementById('submitBtn');
            const submitText = document.getElementById('submitText');
            submitText.textContent = 'Creating Account...';
            submitBtn.disabled = true;

            // Simulate registration
            setTimeout(() => {
                // Hide form and show success
                document.querySelector('.form-container form').style.display = 'none';
                document.getElementById('successScreen').classList.add('show');

                submitText.textContent = 'Create Account';
                submitBtn.disabled = false;
            }, 2000);
        });

        // Initialize progress
        updateProgress();
    </script>
</body>
</html>
