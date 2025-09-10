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

    <div class="chatgpt-login-container">
        <div class="login-box">
            <div class="logo-container">
                <img src="/images/logo/sageark-logo.png" alt="SageArk" class="login-logo">
            </div>
            <h1 class="login-title">Welcome back</h1>
            
            <div id="loginMessage" class="alert alert-warning mt-3" style="display: none;"></div>
            
            <form id="loginForm" novalidate>
                <div class="mb-3">
                    <label for="email" class="form-label visually-hidden">Email Address</label>
                    <input type="email" class="form-control form-control-lg" id="email" name="email" required placeholder="Email address">
                </div>
                <!-- Password field is hidden to mimic ChatGPT's two-step login -->
                <div class="mb-4" style="display: none;">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="••••••••">
                </div>
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary btn-lg d-flex align-items-center justify-content-center">
                        <span class="login-text">Continue</span>
                        <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true" style="display: none;"></span>
                    </button>
                </div>
            </form>
            
            <div class="signup-prompt text-center">
                <span>Don't have an account?</span> <a href="contact.php">Sign up</a>
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
                    loginButtonText.textContent = 'Continue';
                    loginButtonSpinner.style.display = 'none';
                    loginButton.disabled = false;

                    if (emailInput.value) {
                        // Display the message as requested
                        loginMessage.innerHTML = 'It looks like this email isn\'t registered yet. To get started, please <a href="contact.php" class="alert-link">contact our team</a> for a personalized demo.';
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