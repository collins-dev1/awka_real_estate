<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register - Awka Real Estate Agents Association</title>
    <link rel="stylesheet" href="{{asset('realestate/css/login.css')}}">
    <link rel="icon" href="{{asset('realestate/img/WhatsApp Image 2025-12-12 at 8.39.38 AM.jpeg')}}">
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
        <a href="{{url('/')}}" class="logo">
            <img src="{{asset('realestate/img/realestate-removebg-preview.png')}}" alt="">
        </a>
    </div>

    <!-- Back to Home -->
    <div class="back-home">
        <a href="{{url('/')}}">← Home</a>
    </div>

    <!-- Auth Container -->
    <div class="auth-container">
        <div class="auth-wrapper">
            <!-- Left Side - Info Panel -->
            <div class="info-panel">
                <div class="info-content">
                    <h2>Welcome to AREAA</h2>
                    <p>Join the official Real Estate Agents Association and become part of Nigeria's most trusted platform for verified agents.</p>

                    <ul class="info-features">
                        <li>Verified membership credentials</li>
                        <li>Digital ID card with QR code</li>
                        <li>Access to exclusive training</li>
                        <li>Property listing platform</li>
                        <li>Government recognition</li>
                        <li>24/7 member support</li>
                    </ul>
                </div>
            </div>

            <!-- Right Side - Forms -->
            <div class="forms-panel">
                <!-- Toggle Buttons -->
                <div class="toggle-buttons">
                    <button class="toggle-btn active" id="loginToggle">Login</button>
                    <button class="toggle-btn" id="registerToggle">Register</button>
                </div>

                <!-- Login Form -->
                <div class="form-section active" id="loginForm">
                    <div class="form-header">
                        <h2>Welcome Back</h2>
                        <p>Login to access your account</p>
                    </div>

                    <form id="loginFormSubmit" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label>Email address</label>
                            <div class="input-wrapper">
                                <span class="input-icon">📧</span>
                                <input type="email" id="loginEmail" placeholder="Enter email address" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-wrapper">
                                <span class="input-icon">🔒</span>
                                <input type="password" id="loginPassword" placeholder="Enter your password" required>
                                <button type="button" class="password-toggle" onclick="togglePassword('loginPassword')">👁️</button>
                            </div>
                        </div>

                        <div class="checkbox-group">
                            <input type="checkbox" id="rememberMe">
                            <label for="rememberMe">Remember me</label>
                        </div>

                        <button type="submit" class="submit-btn">
                            <span id="loginBtnText">Login to Account</span>
                        </button>

                        <div class="forgot-password">
                            <a href="#" onclick="showForgotPassword(); return false;">Forgot Password?</a>
                        </div>
                    </form>
                </div>

                <!-- Register Form -->
                <div class="form-section" id="registerForm">
                    <div class="form-header">
                        <h2>Create Account</h2>
                        <p>Register as a new member</p>
                    </div>

                    <div class="success-message" id="registerSuccess">
                        <h3>✓ Registration Successful!</h3>
                        <p>Please check your email to verify your account.</p>
                    </div>

                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <!-- User Type Selection -->
                        <div class="user-type-selection">
                            <div class="user-type-card" onclick="selectUserType('tenant')">
                                <div class="user-type-icon">👨‍💼</div>
                                <div class="user-type-label" name="user_select">Tenant</div>
                            </div>
                            <div class="user-type-card" onclick="selectUserType('agent')">
                                <div class="user-type-icon">👨‍💼</div>
                                <div class="user-type-label" name="user_select">Agent</div>
                            </div>
                            <div class="user-type-card" onclick="selectUserType('landlord')">
                                <div class="user-type-icon">🏢</div>
                                <div class="user-type-label" name="user_select">Landlord</div>
                            </div>
                        </div>
                        <input type="hidden" id="userType" name="user_select" required>

                        <div class="form-group">
                            <label>Full Name</label>
                            <div class="input-wrapper">
                                <span class="input-icon">👤</span>
                                <input type="text" id="regName" name="name" placeholder="Enter your full name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Email Address</label>
                            <div class="input-wrapper">
                                <span class="input-icon">📧</span>
                                <input type="email" id="regEmail" name="email" placeholder="your.email@example.com" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Phone Number</label>
                            <div class="input-wrapper">
                                <span class="input-icon">📱</span>
                                <input type="tel" id="regPhone" name="phone_no" placeholder="0803 456 7890" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label>Date of Birth</label>
                            <div class="input-wrapper">
                                <span class="input-icon">📅</span>
                                <input type="date" id="regPhone" name="dob" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label>Gender</label>
                            <div class="input-wrapper">
                                <span class="input-icon">🚻</span>
                                <select name="gender" id="">
                                    <option>--Select your Gender--</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>

                         <div class="form-group">
                            <label>Nationality</label>
                            <div class="input-wrapper">
                                <span class="input-icon">🌍</span>
                                <input type="text" id="regName" name="nationality" placeholder="Enter your Nationality" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>State of Residence</label>
                            <div class="input-wrapper">
                                <span class="input-icon">🌍</span>
                                <input type="text" id="regName" name="state_of_residence" placeholder="Enter your State of Residence" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Town</label>
                            <div class="input-wrapper">
                                <span class="input-icon">🌍</span>
                                <input type="text" id="regName" name="town" placeholder="Enter your Town" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Street Address</label>
                            <div class="input-wrapper">
                                <span class="input-icon">🌍</span>
                                <input type="text" id="regName" name="street_address" placeholder="Enter your street Address" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Religion</label>
                            <div class="input-wrapper">
                                <span class="input-icon">🛐</span>
                                <input type="text" id="regName" name="religion" placeholder="Enter your Religion" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Father Name</label>
                            <div class="input-wrapper">
                                <span class="input-icon">🌍</span>
                                <input type="text" id="regName" name="father_name" placeholder="Enter your Father Name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Mother Name</label>
                            <div class="input-wrapper">
                                <span class="input-icon">🌍</span>
                                <input type="text" id="regName" name="mother_name" placeholder="Enter your Mother Name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Next of Kin Name</label>
                            <div class="input-wrapper">
                                <span class="input-icon">🌍</span>
                                <input type="text" id="regName" name="next_of_kin_name" placeholder="Enter your Next of Kin Name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Next of Kin Relationship</label>
                            <div class="input-wrapper">
                                <span class="input-icon">🌍</span>
                                <input type="text" id="regName" name="next_of_kin_relationship" placeholder="Enter your Next of Kin Relationship" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Next of Kin Address</label>
                            <div class="input-wrapper">
                                <span class="input-icon">🌍</span>
                                <input type="text" id="regName" name="next_of_kin_address" placeholder="Enter your Next of Kin Address" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label>Phone Number of Next of Kin</label>
                            <div class="input-wrapper">
                                <span class="input-icon">📱</span>
                                <input type="tel" id="regPhone" name="phone_no_of_next_of_kin" placeholder="0803 456 7890" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Language(you speak)</label>
                            <div class="input-wrapper">
                                <span class="input-icon">🗣️</span>
                                <input type="text" id="regName" name="language" placeholder="Enter your Language you speak" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label>NIN</label>
                            <div class="input-wrapper">
                                <span class="input-icon">🪪</span>
                                <input type="text" id="regName" name="nin" placeholder="Enter your NIN" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Business/Company Name</label>
                            <div class="input-wrapper">
                                <span class="input-icon">🏢</span>
                                <input type="text" id="regName" name="company_name" placeholder="Enter your Business/Company Name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Office State of Residence</label>
                            <div class="input-wrapper">
                                <span class="input-icon">🏢</span>
                                <input type="text" id="regName" name="office_state_of_residence" placeholder="Enter Office State of Residence" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Office Town of Residence</label>
                            <div class="input-wrapper">
                                <span class="input-icon">🏢</span>
                                <input type="text" id="regName" name="office_town_of_residence" placeholder="Enter Office Town of Residence" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Office Address</label>
                            <div class="input-wrapper">
                                <span class="input-icon">🏢</span>
                                <input type="text" id="regName" name="office_address" placeholder="Enter Office Address" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-wrapper">
                                <span class="input-icon">🔒</span>
                                <input type="password" id="regPassword" placeholder="Create a strong password" required>
                                <button type="button" class="password-toggle" onclick="togglePassword('regPassword')">👁️</button>
                            </div>
                            <div class="validation-message" id="passwordStrength"></div>
                        </div>

                        <div class="form-group">
                            <label>Confirm Password</label>
                            <div class="input-wrapper">
                                <span class="input-icon">🔒</span>
                                <input type="password" id="regConfirmPassword" placeholder="Confirm your password" required>
                                <button type="button" class="password-toggle" onclick="togglePassword('regConfirmPassword')">👁️</button>
                            </div>
                            <div class="validation-message" id="passwordMatch"></div>
                        </div>

                        <div class="checkbox-group">
                            <input type="checkbox" id="agreeTerms" required>
                            <label for="agreeTerms">I agree to the <a href="#" style="color: var(--secondary);">Terms & Conditions</a></label>
                        </div>

                        <button type="submit" class="submit-btn">
                            <span>Create Account</span>
                        </button>
                    </form>
                </div>
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

        // Toggle between Login and Register
        const loginToggle = document.getElementById('loginToggle');
        const registerToggle = document.getElementById('registerToggle');
        const loginForm = document.getElementById('loginForm');
        const registerForm = document.getElementById('registerForm');

        loginToggle.addEventListener('click', () => {
            loginToggle.classList.add('active');
            registerToggle.classList.remove('active');
            loginForm.classList.add('active');
            registerForm.classList.remove('active');
        });

        registerToggle.addEventListener('click', () => {
            registerToggle.classList.add('active');
            loginToggle.classList.remove('active');
            registerForm.classList.add('active');
            loginForm.classList.remove('active');
        });

        // Password Toggle
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            if (input.type === 'password') {
                input.type = 'text';
            } else {
                input.type = 'password';
            }
        }

        // User Type Selection
        let selectedUserType = '';
        function selectUserType(type) {
            selectedUserType = type;
            document.getElementById('userType').value = type;

            document.querySelectorAll('.user-type-card').forEach(card => {
                card.classList.remove('selected');
            });
            event.target.closest('.user-type-card').classList.add('selected');
        }

        // Login Form Submission
        document.getElementById('loginFormSubmit').addEventListener('submit', (e) => {
            e.preventDefault();

            const email = document.getElementById('loginEmail').value;
            const password = document.getElementById('loginPassword').value;
            const btnText = document.getElementById('loginBtnText');
            const submitBtn = e.target.querySelector('.submit-btn');

            btnText.textContent = 'Logging in...';
            submitBtn.disabled = true;

            // Simulate API call
            setTimeout(() => {
                console.log('Login:', { email, password });
                alert('Login successful! Redirecting to dashboard...');
                // window.location.href = 'dashboard.html';

                btnText.textContent = 'Login to Account';
                submitBtn.disabled = false;
            }, 1500);
        });

        // Register Form Submission
        document.getElementById('registerFormSubmit').addEventListener('submit', (e) => {
            e.preventDefault();

            const userType = document.getElementById('userType').value;
            const name = document.getElementById('regName').value;
            const email = document.getElementById('regEmail').value;
            const phone = document.getElementById('regPhone').value;
            const password = document.getElementById('regPassword').value;
            const confirmPassword = document.getElementById('regConfirmPassword').value;
            const agreeTerms = document.getElementById('agreeTerms').checked;

            // Validation
            if (!userType) {
                alert('Please select a user type (Agent or Landlord)');
                return;
            }

            if (password !== confirmPassword) {
                alert('Passwords do not match!');
                return;
            }

            if (!agreeTerms) {
                alert('Please agree to the Terms & Conditions');
                return;
            }

            const btnText = document.getElementById('registerBtnText');
            const submitBtn = e.target.querySelector('.submit-btn');

            btnText.textContent = 'Creating Account...';
            submitBtn.disabled = true;

            // Simulate API call
            setTimeout(() => {
                console.log('Register:', { userType, name, email, phone, password });

                // Show success message
                document.getElementById('registerSuccess').classList.add('show');
                e.target.reset();
                document.querySelectorAll('.user-type-card').forEach(card => {
                    card.classList.remove('selected');
                });

                btnText.textContent = 'Create Account';
                submitBtn.disabled = false;

                // Hide success message after 5 seconds
                setTimeout(() => {
                    document.getElementById('registerSuccess').classList.remove('show');
                }, 5000);
            }, 1500);
        });

        // Password Strength Checker
        document.getElementById('regPassword').addEventListener('input', (e) => {
            const password = e.target.value;
            const strengthIndicator = document.getElementById('passwordStrength');

            let strength = 0;
            if (password.length >= 8) strength++;
            if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength++;
            if (/[0-9]/.test(password)) strength++;
            if (/[^a-zA-Z0-9]/.test(password)) strength++;

            strengthIndicator.classList.add('show');
            if (strength === 0) {
                strengthIndicator.textContent = '';
                strengthIndicator.classList.remove('show');
            } else if (strength <= 2) {
                strengthIndicator.textContent = '⚠️ Weak password';
                strengthIndicator.style.color = 'var(--danger)';
            } else if (strength === 3) {
                strengthIndicator.textContent = '✓ Medium strength';
                strengthIndicator.style.color = '#f59e0b';
            } else {
                strengthIndicator.textContent = '✓ Strong password';
                strengthIndicator.style.color = 'var(--success)';
            }
        });

        // Password Match Checker
        document.getElementById('regConfirmPassword').addEventListener('input', (e) => {
            const password = document.getElementById('regPassword').value;
            const confirmPassword = e.target.value;
            const matchIndicator = document.getElementById('passwordMatch');

            if (confirmPassword) {
                matchIndicator.classList.add('show');
                if (password === confirmPassword) {
                    matchIndicator.textContent = '✓ Passwords match';
                    matchIndicator.style.color = 'var(--success)';
                } else {
                    matchIndicator.textContent = '✗ Passwords do not match';
                    matchIndicator.style.color = 'var(--danger)';
                }
            } else {
                matchIndicator.classList.remove('show');
            }
        });

        // Phone Number Formatting
        document.getElementById('regPhone').addEventListener('input', (e) => {
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

        // Forgot Password
        function showForgotPassword() {
            const email = prompt('Enter your email address to reset password:');
            if (email) {
                alert('Password reset link has been sent to ' + email);
            }
        }

        // Email Validation
        document.getElementById('regEmail').addEventListener('blur', (e) => {
            const email = e.target.value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (email && !emailRegex.test(email)) {
                e.target.style.borderColor = 'var(--danger)';
            } else {
                e.target.style.borderColor = '';
            }
        });

        // Form Field Animation
        const formInputs = document.querySelectorAll('input, select');

        formInputs.forEach(input => {
            input.addEventListener('focus', (e) => {
                e.target.parentElement.style.transform = 'scale(1.02)';
                e.target.parentElement.style.transition = 'transform 0.2s ease';
            });

            input.addEventListener('blur', (e) => {
                e.target.parentElement.style.transform = 'scale(1)';
            });
        });

        // Social Login Handlers
        document.querySelectorAll('.social-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const platform = e.currentTarget.textContent.trim();
                alert(`${platform} login will be integrated soon!`);
            });
        });

        // Keyboard Navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' && e.target.tagName !== 'TEXTAREA' && e.target.tagName !== 'BUTTON') {
                e.preventDefault();
                const form = e.target.closest('form');
                if (form) {
                    const inputs = Array.from(form.querySelectorAll('input, select'));
                    const index = inputs.indexOf(e.target);
                    if (index < inputs.length - 1) {
                        inputs[index + 1].focus();
                    }
                }
            }
        });

        // Auto-focus first input on load
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.getElementById('loginEmail').focus();
            }, 500);
        });

        // Prevent form resubmission on refresh
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>
</html>
