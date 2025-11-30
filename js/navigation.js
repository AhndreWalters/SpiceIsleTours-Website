// Mobile Navigation Toggle
document.addEventListener('DOMContentLoaded', function() {
    const hamburgerMenu = document.getElementById('hamburger-menu');
    const navLinks = document.getElementById('nav-links');
    const navOverlay = document.getElementById('nav-overlay');
    const body = document.body;
    
    // Check if elements exist (for pages without mobile menu)
    if (!hamburgerMenu || !navLinks || !navOverlay) {
        console.log('Navigation elements not found');
        return;
    }
    
    // Toggle mobile menu
    function toggleMobileMenu() {
        const isActive = hamburgerMenu.classList.contains('active');
        
        hamburgerMenu.classList.toggle('active');
        navLinks.classList.toggle('active');
        navOverlay.classList.toggle('active');
        
        // Prevent body scroll when menu is open
        if (!isActive) {
            body.style.overflow = 'hidden';
        } else {
            body.style.overflow = '';
        }
    }
    
    // Close mobile menu
    function closeMobileMenu() {
        hamburgerMenu.classList.remove('active');
        navLinks.classList.remove('active');
        navOverlay.classList.remove('active');
        body.style.overflow = '';
    }
    
    // Event listeners
    hamburgerMenu.addEventListener('click', toggleMobileMenu);
    navOverlay.addEventListener('click', closeMobileMenu);
    
    // Close menu when clicking on navigation links
    const navItems = navLinks.querySelectorAll('a');
    navItems.forEach(item => {
        item.addEventListener('click', function() {
            if (window.innerWidth <= 850) {
                closeMobileMenu();
            }
        });
    });
    
    // Close menu on escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeMobileMenu();
        }
    });
    
    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 850) {
            closeMobileMenu();
        }
    });
    
    console.log('Navigation JavaScript loaded successfully');
});