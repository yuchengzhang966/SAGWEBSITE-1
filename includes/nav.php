<!-- Navigation -->
<header class="main-header">
    <div class="container-fluid px-5">
        <nav class="navbar navbar-expand-lg py-3">
            <a class="navbar-brand ms-3" href="/index.php">
                <img src="/images/logo/sageark-logo.png" alt="SageArk" class="d-inline-block align-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center gap-3">
                    <li class="nav-item">
                        <a class="nav-link px-3 <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>" href="/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 <?php echo (basename($_SERVER['PHP_SELF']) == 'services.php') ? 'active' : ''; ?>" href="/services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 <?php echo (basename($_SERVER['PHP_SELF']) == 'success-stories.php') ? 'active' : ''; ?>" href="/success-stories.php">Success Stories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 <?php echo (basename($_SERVER['PHP_SELF']) == 'resources.php') ? 'active' : ''; ?>" href="/resources.php">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active' : ''; ?>" href="/contact.php">Contact</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary nav-btn px-4 py-2" href="/log_in.php">Log in</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header> 