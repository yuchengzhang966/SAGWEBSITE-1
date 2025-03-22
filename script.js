document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mainNav = document.querySelector('.main-nav');
    
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', function() {
            mainNav.classList.toggle('active');
            this.classList.toggle('active');
        });
    }
    
    // Testimonial Slider
    const testimonials = document.querySelectorAll('.testimonial');
    const dots = document.querySelectorAll('.dot');
    
    if (testimonials.length > 0 && dots.length > 0) {
        let currentSlide = 0;
        
        // Function to show selected testimonial
        function showSlide(index) {
            testimonials.forEach((testimonial, i) => {
                testimonial.style.display = i === index ? 'block' : 'none';
            });
            
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
            
            currentSlide = index;
        }
        
        // Show first testimonial by default
        showSlide(0);
        
        // Add click event to dots
        dots.forEach((dot, i) => {
            dot.addEventListener('click', () => {
                showSlide(i);
            });
        });
        
        // Auto slide functionality
        setInterval(() => {
            let nextSlide = (currentSlide + 1) % testimonials.length;
            showSlide(nextSlide);
        }, 5000);
    }
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
                
                // Close mobile menu if open
                if (mainNav.classList.contains('active')) {
                    mainNav.classList.remove('active');
                    mobileMenuBtn.classList.remove('active');
                }
            }
        });
    });
    
    // Sticky header on scroll
    const header = document.querySelector('.header');
    const heroSection = document.querySelector('.hero');
    
    if (header && heroSection) {
        const headerHeight = header.offsetHeight;
        const heroHeight = heroSection.offsetHeight;
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > headerHeight) {
                header.classList.add('sticky');
            } else {
                header.classList.remove('sticky');
            }
        });
    }
    
    // Animate elements on scroll
    const animateElements = document.querySelectorAll('.animate-on-scroll');
    
    if (animateElements.length > 0) {
        function checkScroll() {
            animateElements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight * 0.8;
                
                if (elementPosition < screenPosition) {
                    element.classList.add('animated');
                }
            });
        }
        
        window.addEventListener('scroll', checkScroll);
        checkScroll(); // Check on initial load
    }
    
    // Tab functionality for services section
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    if (tabBtns.length > 0 && tabContents.length > 0) {
        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons and contents
                tabBtns.forEach(b => b.classList.remove('active'));
                tabContents.forEach(content => content.classList.remove('active'));
                
                // Add active class to clicked button
                btn.classList.add('active');
                
                // Show corresponding content
                const targetId = btn.getAttribute('data-target');
                document.getElementById(targetId).classList.add('active');
            });
        });
    }
    
    // Page load animation
    document.body.classList.add('loaded');
    
    const animateHero = () => {
        const heroTitle = document.querySelector('.hero-content h1');
        const heroSubtitle = document.querySelector('.hero-content h2');
        const heroDesc = document.querySelector('.hero-description');
        const heroButtons = document.querySelector('.hero-buttons');
        const clientsBanner = document.querySelector('.clients-banner');
        
        if (heroTitle) heroTitle.classList.add('animate-fade-in');
        if (heroSubtitle) {
            heroSubtitle.classList.add('animate-fade-in');
            heroSubtitle.classList.add('delay-200');
        }
        if (heroDesc) {
            heroDesc.classList.add('animate-fade-in');
            heroDesc.classList.add('delay-300');
        }
        if (heroButtons) {
            heroButtons.classList.add('animate-fade-in');
            heroButtons.classList.add('delay-400');
        }
        if (clientsBanner) {
            clientsBanner.classList.add('animate-fade-in');
            clientsBanner.classList.add('delay-500');
        }
    };
    
    // Call hero animation immediately
    animateHero();
    
    // Animate elements when scrolled into view
    const scrollAnimations = () => {
        const elements = document.querySelectorAll('.section-header, .service-card, .feature, .testimonial');
        
        elements.forEach(element => {
            const position = element.getBoundingClientRect();
            
            // Check if element is in viewport
            if(position.top < window.innerHeight * 0.9) {
                if (element.classList.contains('section-header')) {
                    element.classList.add('animate-fade-in');
                } else if (element.classList.contains('service-card')) {
                    element.classList.add('animate-scale-in');
                } else if (element.classList.contains('feature')) {
                    element.classList.add('animate-slide-right');
                } else if (element.classList.contains('testimonial')) {
                    element.classList.add('animate-fade-in');
                }
            }
        });
    };
    
    // Call once on load to animate elements already in view
    scrollAnimations();
    
    // Call on scroll
    window.addEventListener('scroll', scrollAnimations);
    
    // Add service card hover classes
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach(card => {
        card.classList.add('hover-lift');
    });
    
    // Add feature card hover classes
    const features = document.querySelectorAll('.feature');
    features.forEach(feature => {
        feature.classList.add('hover-scale');
    });
    
    // Add scroll-to-top button
    const createScrollTopButton = () => {
        const scrollBtn = document.createElement('div');
        scrollBtn.className = 'scroll-top-btn';
        scrollBtn.innerHTML = '<i class="fas fa-chevron-up"></i>';
        document.body.appendChild(scrollBtn);
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                scrollBtn.classList.add('visible');
            } else {
                scrollBtn.classList.remove('visible');
            }
        });
        
        scrollBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    };
    
    createScrollTopButton();
    
    // Add tab switching animation
    const enhanceTabSwitching = () => {
        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // First remove active class from all contents (but don't hide yet)
                tabContents.forEach(content => {
                    if (content.classList.contains('active')) {
                        content.classList.add('fade-out');
                        setTimeout(() => {
                            content.classList.remove('active');
                            content.classList.remove('fade-out');
                        }, 300);
                    }
                });
                
                // Remove active class from all buttons
                tabBtns.forEach(b => b.classList.remove('active'));
                
                // Add active class to clicked button
                btn.classList.add('active');
                
                // Show corresponding content with animation
                const targetId = btn.getAttribute('data-target');
                setTimeout(() => {
                    const targetContent = document.getElementById(targetId);
                    targetContent.classList.add('active');
                    targetContent.classList.add('fade-in');
                    setTimeout(() => {
                        targetContent.classList.remove('fade-in');
                    }, 500);
                }, 300);
            });
        });
    };
    
    if (tabBtns.length > 0 && tabContents.length > 0) {
        enhanceTabSwitching();
    }
    
    // Dynamic counters for Why Choose Us section
    const startCounters = () => {
        const counters = document.querySelectorAll('.counter');
        
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            const duration = 2000; // 2 seconds
            const increment = target / (duration / 16); // Update every ~16ms (60fps)
            
            let current = 0;
            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    counter.textContent = Math.floor(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };
            
            const position = counter.getBoundingClientRect();
            if (position.top < window.innerHeight) {
                updateCounter();
            } else {
                window.addEventListener('scroll', function scrollHandler() {
                    const position = counter.getBoundingClientRect();
                    if (position.top < window.innerHeight) {
                        updateCounter();
                        window.removeEventListener('scroll', scrollHandler);
                    }
                });
            }
        });
    };
    
    startCounters();
    
    // Enhanced carousel navigation with left/right arrows
    const setupCarousels = () => {
        document.querySelectorAll('.services-carousel-container').forEach(container => {
            const carousel = container.querySelector('.services-carousel');
            const nextBtn = container.querySelector('.carousel-arrow.next');
            const prevBtn = container.querySelector('.carousel-arrow.prev');
            
            // Set a standard sliding distance (show 2 cards at a time)
            const getSlideDistance = () => {
                const cardWidth = carousel.querySelector('.service-card').offsetWidth + 20; // card width + gap
                return cardWidth * 2;
            };
            
            // Update arrow visibility based on scroll position
            const updateArrowVisibility = () => {
                // Show left arrow if not at the beginning
                if (carousel.scrollLeft > 50) {
                    prevBtn.classList.add('visible');
                } else {
                    prevBtn.classList.remove('visible');
                }
                
                // Hide right arrow at the end (optional, we're keeping it for loop functionality)
                /*if (carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth - 50) {
                    nextBtn.classList.add('hidden');
                } else {
                    nextBtn.classList.remove('hidden');
                }*/
            };
            
            // Initially check arrow visibility
            updateArrowVisibility();
            
            // Listen for scroll events to update arrow visibility
            carousel.addEventListener('scroll', updateArrowVisibility);
            
            // Right arrow click - advance forward
            if (nextBtn) {
                nextBtn.addEventListener('click', () => {
                    const distance = getSlideDistance();
                    carousel.scrollBy({ left: distance, behavior: 'smooth' });
                    
                    // If we've scrolled to the end, loop back to start
                    setTimeout(() => {
                        if (carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth - 50) {
                            carousel.scrollTo({ left: 0, behavior: 'smooth' });
                            setTimeout(() => updateArrowVisibility(), 500);
                        }
                    }, 500);
                });
            }
            
            // Left arrow click - go back
            if (prevBtn) {
                prevBtn.addEventListener('click', () => {
                    const distance = getSlideDistance();
                    
                    // If we're near the beginning, loop to the end
                    if (carousel.scrollLeft < distance) {
                        carousel.scrollTo({ left: carousel.scrollWidth, behavior: 'smooth' });
                    } else {
                        carousel.scrollBy({ left: -distance, behavior: 'smooth' });
                    }
                    
                    setTimeout(() => updateArrowVisibility(), 500);
                });
            }
        });
    };
    
    // Setup carousels
    setupCarousels();
    
    // Add mentor map functionality
    const setupMentorMap = () => {
        const mentorPins = document.querySelectorAll('.mentor-pin');
        
        mentorPins.forEach(pin => {
            // For mobile devices, use click instead of hover
            if (window.innerWidth <= 768) {
                // Close all tooltips when clicking elsewhere
                document.addEventListener('click', (e) => {
                    if (!e.target.closest('.mentor-pin')) {
                        document.querySelectorAll('.mentor-tooltip').forEach(tooltip => {
                            tooltip.style.visibility = 'hidden';
                            tooltip.style.opacity = '0';
                        });
                    }
                });
                
                // Toggle tooltip on pin click
                pin.addEventListener('click', (e) => {
                    e.stopPropagation();
                    const tooltip = pin.querySelector('.mentor-tooltip');
                    const isVisible = tooltip.style.visibility === 'visible';
                    
                    // First hide all tooltips
                    document.querySelectorAll('.mentor-tooltip').forEach(t => {
                        t.style.visibility = 'hidden';
                        t.style.opacity = '0';
                    });
                    
                    // Then show the clicked one if it wasn't visible
                    if (!isVisible) {
                        tooltip.style.visibility = 'visible';
                        tooltip.style.opacity = '1';
                    }
                });
            }
        });
    };
    
    // Setup mentor map
    setupMentorMap();
    
    // Optimize by removing unnecessary data loading
    const setupD3WorldMap = () => {
        // Check if the map element exists
        const mapContainer = document.getElementById('d3-world-map');
        if (!mapContainer) return;
        
        // Clear any previous content
        mapContainer.innerHTML = '';
        
        // Set background image for the map container
        mapContainer.style.backgroundImage = 'url("images/worldmap.png")';
        mapContainer.style.backgroundSize = 'cover';
        mapContainer.style.backgroundPosition = 'center';
        mapContainer.style.backgroundRepeat = 'no-repeat';
        
        // Define map dimensions
        const width = mapContainer.clientWidth;
        const height = 550;
        
        // Create SVG element (keep this for the mentor pins)
        const svg = d3.select('#d3-world-map')
            .append('svg')
            .attr('width', width)
            .attr('height', height)
            .attr('viewBox', `0 0 ${width} ${height}`)
            .attr('preserveAspectRatio', 'xMidYMid meet');
        
        // Create a group for the map elements
        const g = svg.append('g');
        
        // Define map projection (still needed for pin positioning)
        const projection = d3.geoMercator()
            .scale((width - 3) / (2 * Math.PI))
            .translate([width / 2, height / 1.7]);
        
        // Mentor data with coordinates
        const mentors = [
            {
                name: "Sarah Johnson",
                title: "Former Senior Consultant",
                firm: "McKinsey & Company",
                location: "New York, USA",
                image: "images/mentors/mentor-1.jpg",
                coordinates: [-74.0060, 40.7128]
            },
            {
                name: "Thomas Weber",
                title: "Investment Banking VP",
                firm: "ex-Deutsche Bank",
                location: "London, UK",
                image: "images/mentors/mentor-2.jpg",
                coordinates: [-0.1278, 51.5074]
            },
            {
                name: "Mei Zhang",
                title: "Data Science Lead",
                firm: "Tencent",
                location: "Shanghai, China",
                image: "images/mentors/mentor-3.jpg",
                coordinates: [121.4737, 31.2304]
            },
            {
                name: "Hiroshi Tanaka",
                title: "Software Engineer",
                firm: "ex-Google",
                location: "Tokyo, Japan",
                image: "images/mentors/mentor-4.jpg",
                coordinates: [139.6917, 35.6895]
            },
            {
                name: "Anna Petrova",
                title: "Product Manager",
                firm: "Microsoft",
                location: "Berlin, Germany",
                image: "images/mentors/mentor-5.jpg",
                coordinates: [13.4050, 52.5200]
            },
            {
                name: "Carlos Mendez",
                title: "Quantitative Researcher",
                firm: "ex-JPMorgan Chase",
                location: "São Paulo, Brazil",
                image: "images/mentors/mentor-6.jpg",
                coordinates: [-46.6333, -23.5505]
            },
            {
                name: "Priya Sharma",
                title: "Project Lead",
                firm: "Infosys",
                location: "Bangalore, India",
                image: "images/mentors/mentor-7.jpg",
                coordinates: [77.5946, 12.9716]
            },
            {
                name: "James Wilson",
                title: "Education Consultant",
                firm: "ex-Melbourne University",
                location: "Sydney, Australia",
                image: "images/mentors/mentor-8.jpg",
                coordinates: [151.2093, -33.8688]
            },
            {
                name: "David Rodriguez",
                title: "Software Engineer",
                firm: "Verkada",
                location: "San Francisco, USA",
                image: "images/mentors/mentor-9.jpg",
                coordinates: [-122.4194, 37.7749]
            },
            {
                name: "Emily Chen",
                title: "Product Strategy Director",
                firm: "ex-Amazon",
                location: "Seattle, USA",
                image: "images/mentors/mentor-10.jpg",
                coordinates: [-122.3321, 47.6062]
            },
            {
                name: "Marcus Johnson",
                title: "Quantitative Researcher",
                firm: "Akuna Capital",
                location: "Chicago, USA",
                image: "images/mentors/mentor-11.jpg",
                coordinates: [-87.6298, 41.8781]
            },
            {
                name: "Rebecca Williams",
                title: "Biotech Research Lead",
                firm: "ex-Genentech",
                location: "Boston, USA",
                image: "images/mentors/mentor-12.jpg",
                coordinates: [-71.0589, 42.3601]
            },
            {
                name: "Michael Torres",
                title: "ML Engineering Manager",
                firm: "Meta",
                location: "Austin, USA",
                image: "images/mentors/mentor-13.jpg",
                coordinates: [-97.7431, 30.2672]
            }
        ];
        
        // Directly create mentor pins without loading GeoJSON
        const mentorGroups = g.selectAll('.mentor-group')
            .data(mentors)
            .enter()
            .append('g')
            .attr('class', 'mentor-group')
            .attr('transform', d => `translate(${projection(d.coordinates)[0]}, ${projection(d.coordinates)[1]})`);
        
        // Add the pins to the map
        mentorGroups.append('circle')
            .attr('r', 8)
            .attr('class', 'mentor-point')
            .attr('fill', '#0056D2')
            .attr('stroke', 'white')
            .attr('stroke-width', 2)
            .attr('data-id', (d, i) => `mentor-${i}`);
        
        // Add pulsing animation to pins
        mentorGroups.select('circle')
            .append('animate')
            .attr('attributeName', 'r')
            .attr('values', '8;10;8')
            .attr('dur', '2s')
            .attr('repeatCount', 'indefinite');
        
        // Create HTML overlays for the mentor cards
        // Get the map container for positioning
        const mapRect = mapContainer.getBoundingClientRect();
        
        // Clear any existing cards first
        document.querySelectorAll('.mentor-overlay-card').forEach(card => card.remove());
        
        // Create HTML cards and append to the map container
        mentors.forEach((mentor, index) => {
            // Get the projected position
            const pos = projection(mentor.coordinates);
            
            // Create card element
            const card = document.createElement('div');
            card.className = 'mentor-overlay-card';
            card.id = `mentor-card-${index}`;
            card.innerHTML = `
                <div class="mentor-pin-card">
                    <img src="${mentor.image}" alt="${mentor.name}" class="mentor-pin-avatar">
                    <div class="mentor-pin-info">
                        <h4>${mentor.name}</h4>
                        <p class="mentor-pin-title">${mentor.title}</p>
                        <p class="mentor-pin-firm">${mentor.firm}</p>
                    </div>
                </div>
            `;
            
            // Position the card
            card.style.position = 'absolute';
            card.style.left = `${pos[0]}px`;
            card.style.top = `${pos[1] - 65}px`;
            card.style.transform = 'translateX(-50%)';
            card.style.zIndex = '100';
            card.style.opacity = '0'; // Start hidden
            card.style.visibility = 'hidden'; // Start hidden
            
            // Append to the map container
            mapContainer.appendChild(card);
            
            // Add hover events to the pins
            const pinElement = g.selectAll(`[data-id="mentor-${index}"]`).node();
            if (pinElement) {
                pinElement.addEventListener('mouseenter', () => {
                    card.style.opacity = '1';
                    card.style.visibility = 'visible';
                });
                
                pinElement.addEventListener('mouseleave', () => {
                    card.style.opacity = '0';
                    card.style.visibility = 'hidden';
                });
            }
        });
        
        // Create and add the stats box
        const createMentorStats = () => {
            // Create stats element with hardcoded values
            const statsBox = document.createElement('div');
            statsBox.className = 'mentor-map-stats-box';
            statsBox.innerHTML = `
                <h3>Global Mentor Network</h3>
                <div class="stats-rows">
                    <div class="stat-row">
                        <span class="stat-label">Number of mentors:</span>
                        <span class="stat-number">223</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Number of countries:</span>
                        <span class="stat-number">8</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Avg salary of mentors(US):</span>
                        <span class="stat-number">219K</span>
                    </div>
                </div>
            `;
            
            // Position the stats box at top right instead of bottom left
            statsBox.style.top = '20px';
            statsBox.style.right = '20px';
            statsBox.style.bottom = 'auto'; // Clear the bottom property
            statsBox.style.left = 'auto';   // Clear the left property
            
            // Append to the map container
            mapContainer.appendChild(statsBox);
        };
        
        // Call the function to create the stats box
        createMentorStats();
    };
    
    // Setup D3 world map
    setupD3WorldMap();
    
    // Handle window resize to redraw the map
    window.addEventListener('resize', () => {
        setupD3WorldMap();
    });
    
    // Improved carousel initialization
    setTimeout(function() {
        document.body.classList.remove('preload');
    }, 100);
}); 