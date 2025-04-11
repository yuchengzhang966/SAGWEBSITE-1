// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Remove preload class to enable transitions
    document.body.classList.remove('preload');
    
    // Navigation scroll effect
    const header = document.querySelector('.main-header');
    const scrollThreshold = 50;
    
    // Function to handle scroll events
    function handleScroll() {
        if (window.scrollY > scrollThreshold) {
            header.classList.add('nav-scrolled');
        } else {
            header.classList.remove('nav-scrolled');
        }
    }
    
    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);
    
    // Initial check for page load
    handleScroll();
    
    // Mobile menu toggle behavior
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    if (navbarToggler) {
        navbarToggler.addEventListener('click', function() {
            document.body.classList.toggle('menu-open');
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const isClickInside = navbarToggler.contains(event.target) || 
                                  navbarCollapse.contains(event.target);
            
            if (!isClickInside && navbarCollapse.classList.contains('show')) {
                // Using Bootstrap's collapse API to hide the menu
                bootstrap.Collapse.getInstance(navbarCollapse).hide();
                document.body.classList.remove('menu-open');
            }
        });
    }
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                // Close mobile menu if open
                if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                    bootstrap.Collapse.getInstance(navbarCollapse).hide();
                    document.body.classList.remove('menu-open');
                }
                
                // Smooth scroll to target
                window.scrollTo({
                    top: targetElement.offsetTop - header.offsetHeight,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Dark Mode Toggle Functionality
    setupDarkModeToggle();
});

// Function to set up dark mode toggle
function setupDarkModeToggle() {
    // Check for saved user preference
    const savedDarkMode = localStorage.getItem('darkMode') === 'true';
    
    // Check if system preference is for dark mode
    const prefersDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
    
    // Set initial mode based on saved preference (or system preference if no saved preference)
    if (savedDarkMode || (prefersDarkMode && savedDarkMode !== false)) {
        document.body.classList.add('dark-mode');
    }
    
    // Create dark mode toggle button
    let darkModeToggle = document.createElement('button');
    darkModeToggle.setAttribute('id', 'dark-mode-toggle');
    darkModeToggle.innerHTML = getCurrentMode() ? '☀️' : '🌙';
    darkModeToggle.setAttribute('aria-label', getCurrentMode() ? 'Switch to Light Mode' : 'Switch to Dark Mode');
    darkModeToggle.classList.add('dark-mode-toggle');
    
    // Style the button
    darkModeToggle.style.position = 'fixed';
    darkModeToggle.style.bottom = '20px';
    darkModeToggle.style.right = '20px';
    darkModeToggle.style.zIndex = '1000';
    darkModeToggle.style.width = '40px';
    darkModeToggle.style.height = '40px';
    darkModeToggle.style.borderRadius = '50%';
    darkModeToggle.style.backgroundColor = 'var(--card-bg)';
    darkModeToggle.style.border = '1px solid var(--border-color)';
    darkModeToggle.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
    darkModeToggle.style.cursor = 'pointer';
    darkModeToggle.style.fontSize = '20px';
    darkModeToggle.style.display = 'flex';
    darkModeToggle.style.alignItems = 'center';
    darkModeToggle.style.justifyContent = 'center';
    darkModeToggle.style.transition = 'all 0.3s ease';
    
    // Add event listener to toggle dark mode
    darkModeToggle.addEventListener('click', toggleDarkMode);
    
    // Add to document
    document.body.appendChild(darkModeToggle);
    
    // Listen for system preference changes
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
        if (localStorage.getItem('darkMode') === null) {
            if (e.matches) {
                document.body.classList.add('dark-mode');
            } else {
                document.body.classList.remove('dark-mode');
            }
            updateDarkModeToggle();
        }
    });
    
    // Function to check current mode
    function getCurrentMode() {
        return document.body.classList.contains('dark-mode');
    }
    
    // Function to toggle between light and dark mode
    function toggleDarkMode() {
        const isDarkMode = getCurrentMode();
        
        if (isDarkMode) {
            document.body.classList.remove('dark-mode');
            localStorage.setItem('darkMode', 'false');
        } else {
            document.body.classList.add('dark-mode');
            localStorage.setItem('darkMode', 'true');
        }
        
        updateDarkModeToggle();
    }
    
    // Update button appearance based on current mode
    function updateDarkModeToggle() {
        const isDarkMode = getCurrentMode();
        darkModeToggle.innerHTML = isDarkMode ? '☀️' : '🌙';
        darkModeToggle.setAttribute('aria-label', isDarkMode ? 'Switch to Light Mode' : 'Switch to Dark Mode');
    }
} 