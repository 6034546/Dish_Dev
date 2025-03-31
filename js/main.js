/**
 * Main JavaScript file for Saffraan & Sahara website
 */

document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', function() {
            menuToggle.classList.toggle('active');
            navMenu.classList.toggle('active');
        });
    }
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        if (navMenu.classList.contains('active') && 
            !event.target.closest('.nav-menu') && 
            !event.target.closest('.menu-toggle')) {
            menuToggle.classList.remove('active');
            navMenu.classList.remove('active');
        }
    });
    
    // Menu Tabs for Lunch and Dinner
    const menuTabs = document.querySelectorAll('.menu-tab');
    const menuContent = document.querySelectorAll('.menu-content');
    
    if (menuTabs.length && menuContent.length) {
        menuTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs
                menuTabs.forEach(tab => tab.classList.remove('active'));
                
                // Add active class to clicked tab
                tab.classList.add('active');
                
                // Show the corresponding content
                const target = tab.getAttribute('data-target');
                
                menuContent.forEach(content => {
                    if (content.getAttribute('id') === target) {
                        content.style.display = 'block';
                    } else {
                        content.style.display = 'none';
                    }
                });
            });
        });
    }
    
    // Font Size Accessibility
    const increaseFontBtn = document.querySelector('.increase-font');
    const decreaseFontBtn = document.querySelector('.decrease-font');
    const resetFontBtn = document.querySelector('.reset-font');
    
    if (increaseFontBtn && decreaseFontBtn && resetFontBtn) {
        // Get the default font size
        const defaultFontSize = parseFloat(
            getComputedStyle(document.documentElement).fontSize
        );
        
        // Check for saved font size preference
        const savedFontSize = localStorage.getItem('fontSize');
        if (savedFontSize) {
            document.documentElement.style.fontSize = savedFontSize;
        }
        
        increaseFontBtn.addEventListener('click', () => {
            const currentSize = parseFloat(
                getComputedStyle(document.documentElement).fontSize
            );
            const newSize = currentSize * 1.1;
            document.documentElement.style.fontSize = `${newSize}px`;
            localStorage.setItem('fontSize', `${newSize}px`);
        });
        
        decreaseFontBtn.addEventListener('click', () => {
            const currentSize = parseFloat(
                getComputedStyle(document.documentElement).fontSize
            );
            const newSize = currentSize * 0.9;
            document.documentElement.style.fontSize = `${newSize}px`;
            localStorage.setItem('fontSize', `${newSize}px`);
        });
        
        resetFontBtn.addEventListener('click', () => {
            document.documentElement.style.fontSize = `${defaultFontSize}px`;
            localStorage.setItem('fontSize', `${defaultFontSize}px`);
        });
    }
    
    // Image Gallery Lightbox
    const galleryItems = document.querySelectorAll('.gallery-item img');
    
    if (galleryItems.length) {
        galleryItems.forEach(item => {
            item.addEventListener('click', () => {
                const lightbox = document.createElement('div');
                lightbox.className = 'lightbox';
                document.body.appendChild(lightbox);
                
                const lightboxImg = document.createElement('img');
                lightboxImg.src = item.src;
                lightboxImg.alt = item.alt;
                lightbox.appendChild(lightboxImg);
                
                lightbox.addEventListener('click', () => {
                    lightbox.remove();
                });
                
                // Close on escape key
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') {
                        lightbox.remove();
                    }
                });
            });
        });
    }
});