<?php
// Enable error reporting during development
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SageArk</title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/dark-mode.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="preload">
    <!-- Include the navigation -->
    <?php include 'includes/nav.php'; ?>

    <div class="login-container">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <!-- Left Side: How it works -->
                <div class="col-lg-6 login-info-panel d-flex flex-column justify-content-center">
                    <div class="p-md-5 p-4">
                        <h2 class="display-5 fw-bold text-white mb-4">Access Your Student Portal</h2>
                        <p class="lead text-white-50 mb-5">Our student portal is an exclusive resource for enrolled students. Here’s how to gain access:</p>
                        
                        <div class="d-flex align-items-start mb-4">
                            <div class="flex-shrink-0">
                                <div class="step-icon">1</div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h4 class="text-white">Consult with Our Team</h4>
                                <p class="text-white-50">Begin by scheduling a consultation with our sales representatives. We'll discuss your goals and find the perfect course for you.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-5">
                            <div class="flex-shrink-0">
                                <div class="step-icon">2</div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h4 class="text-white">Enroll and Log In</h4>
                                <p class="text-white-50">Once you've purchased a course, you'll receive credentials to log in and access all your course materials, resources, and scheduling tools.</p>
                            </div>
                        </div>

                        <a href="contact.php" class="btn btn-light btn-lg px-5">Contact Sales</a>
                    </div>
                </div>

                <!-- Right Side: Login Form -->
                <div class="col-lg-6 login-form-panel d-flex align-items-center justify-content-center">
                    <div class="login-form-wrapper">
                        <h3 class="fw-bold mb-4 text-center">Student Login</h3>
                        <div id="loginMessage" class="alert alert-warning mt-3" style="display: none;"></div>
                        <form id="loginForm" novalidate>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email" required placeholder="you@example.com">
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control form-control-lg" id="password" name="password" required placeholder="••••••••">
                            </div>
                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary btn-lg d-flex align-items-center justify-content-center">
                                    <span class="login-text">Log In</span>
                                    <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true" style="display: none;"></span>
                                </button>
                            </div>
                            <div class="text-center">
                                <a href="#" class="text-muted small">Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include the footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginForm = document.getElementById('loginForm');
            const loginMessage = document.getElementById('loginMessage');
            const loginButton = loginForm.querySelector('button[type="submit"]');
            const loginButtonText = loginButton.querySelector('.login-text');
            const loginButtonSpinner = loginButton.querySelector('.spinner-border');

            loginForm.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the form from actually submitting

                const emailInput = document.getElementById('email');
                
                // Hide any previous messages
                loginMessage.style.display = 'none';

                // Show loading state
                loginButtonText.textContent = 'Logging In...';
                loginButtonSpinner.style.display = 'inline-block';
                loginButton.disabled = true;

                // Simulate a delay for checking credentials
                setTimeout(() => {
                    // Restore button state
                    loginButtonText.textContent = 'Log In';
                    loginButtonSpinner.style.display = 'none';
                    loginButton.disabled = false;

                    if (emailInput.value) {
                        // Display the message as requested
                        loginMessage.innerHTML = 'You have not signed up with our classes. Please <a href="contact.php" class="alert-link">leave your contact information</a> and we will give you a demo.';
                        loginMessage.style.display = 'block';
                    } else {
                        // Optional: handle empty email case
                        loginMessage.innerHTML = 'Please enter your email address.';
                        loginMessage.style.display = 'block';
                    }
                }, 1500); // 1.5 second delay
            });
        });
    </script>
</body>
</html>