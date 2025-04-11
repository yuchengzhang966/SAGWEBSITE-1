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
}); 