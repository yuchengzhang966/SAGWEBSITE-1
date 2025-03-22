<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SageArk - Coaching for High-Impact Careers</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <script src="https://unpkg.com/topojson@3"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="preload">
    <!-- Include the navigation -->
    <?php include 'includes/nav.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-bg">
            <!-- SVG code was here -->
        </div> 
        
        <!-- Content Container -->
        <div class="container">
            <div class="hero-content text-center">
                <h1>Your All-in-One Platform<br>for Personal Growth.</h1>
                <h2>Structured Courses & Personalized Education Solutions</h2>
                <div class="hero-buttons">
                    <a href="services.php" class="btn btn-primary">Explore Services</a>
                    <a href="#how-it-works" class="btn-text">
                        <span class="icon"><i class="fas fa-play-circle"></i></span>
                        See how it works
                    </a>
                </div>
                <div class="clients-banner">
                    <p>Join students who secured positions at companies like</p>
                    <!-- Continuous Logo Slider (replacing Bootstrap Carousel) -->
                    <div class="continuous-slider-container">
                        <div class="continuous-slider">
                            <!-- Logos set 1 -->
                            <div class="logo-group">
                                <!-- <img src="images/companies/logo-mckinsey.png" alt="McKinsey"> -->
                                <img src="images/companies/logo-goldman.png" alt="Goldman Sachs">
                                <img src="images/companies/logo-google.png" alt="Google">
                                <img src="images/companies/logo-meta.png" alt="Meta">
                                <img src="images/companies/logo-amazon.png" alt="Amazon">
                                <img src="images/companies/logo-bain.png" alt="Bain & Company">
                                <img src="images/companies/logo-jpmorgan.png" alt="JPMorgan">
                                <img src="images/companies/logo-microsoft.png" alt="Microsoft">
                                <img src="images/companies/logo-palantir.png" alt="Palantir">
                                <img src="images/companies/logo-janestreet.png" alt="Jane Street">
                                <img src="images/companies/logo-airbnb.png" alt="Airbnb">
                            </div>
                            <!-- Duplicate set for seamless looping -->
                            <div class="logo-group">
                                <!-- <img src="images/companies/logo-mckinsey.png" alt="McKinsey"> -->
                                <img src="images/companies/logo-goldman.png" alt="Goldman Sachs">
                                <img src="images/companies/logo-google.png" alt="Google">
                                <img src="images/companies/logo-meta.png" alt="Meta">
                                <img src="images/companies/logo-amazon.png" alt="Amazon">
                                <img src="images/companies/logo-bain.png" alt="Bain & Company">
                                <img src="images/companies/logo-jpmorgan.png" alt="JPMorgan">
                                <img src="images/companies/logo-microsoft.png" alt="Microsoft">
                                <img src="images/companies/logo-palantir.png" alt="Palantir">
                                <img src="images/companies/logo-janestreet.png" alt="Jane Street">
                                <img src="images/companies/logo-airbnb.png" alt="Airbnb">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Middle content sections remain unchanged -->
    <!-- Mission Statement Section -->
    <section class="mission-statement">
        <div class="mission-content">
            <div class="mission-text">
                <p>We empower you to launch<br>lucrative careers in finance,<br>tech, and <span class="highlight-box">business</span></p>
                <p style="font-size: 1.8rem; margin-top: 20px;">regardless of age, experience, or background.</p>
            </div>
        </div>
    </section>

    <!-- Keep the rest of your existing content here -->
        <!-- Services Section -->
        <section class="services" id="services">
        <div class="container">
            <div class="bigtitle-header">
                <h3>OUR SERVICES</h3>
                <h2>Premium Solutions for <span class="highlight">Your Needs</span></h2>
                <p>From structured career programs to personalized education solutions tailored to your goals.</p>
            </div>
            
            <!-- Service Tabs -->
            <div class="service-tabs">
                <button class="tab-btn active" data-target="career-consulting">Career Programs</button>
                <button class="tab-btn" data-target="college-admission">College Admission</button>
                <button class="tab-btn" data-target="mba-admission">MBA Admission</button>
                <button class="tab-btn" data-target="high-school-admission">High School Admission</button>
                <button class="tab-btn" data-target="k12-education">K-12 Solutions</button>
            </div>
            
            <!-- Career Consulting Tab Content -->
            <div class="tab-content active" id="career-consulting">
                <div class="services-carousel-container">
                    <button class="carousel-arrow prev">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <div class="services-carousel">
                        <div class="service-card">
                            <div class="card-badge">PROGRAM</div>
                            <div class="service-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <h3>Consulting Careers</h3>
                            <p>Prepare for case interviews, develop problem-solving skills, and learn strategic frameworks used by top consulting firms.</p>
                            <div class="card-meta">
                                <span class="difficulty"><i class="fas fa-signal"></i> Intermediate</span>
                                <span class="duration"><i class="far fa-clock"></i> 20 hours</span>
                            </div>
                            <a href="services.php#consulting" class="read-more">Learn More</a>
                        </div>
                        
                        <div class="service-card">
                            <div class="card-badge">PROGRAM</div>
                            <div class="service-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3>Investment Banking</h3>
                            <p>Master financial modeling, valuation techniques, and industry knowledge to break into prestigious investment banks.</p>
                            <div class="card-meta">
                                <span class="difficulty"><i class="fas fa-signal"></i> Intermediate</span>
                                <span class="duration"><i class="far fa-clock"></i> 25 hours</span>
                            </div>
                            <a href="services.php#investment-banking" class="read-more">Learn More</a>
                        </div>
                        
                        <div class="service-card">
                            <div class="card-badge">PROGRAM</div>
                            <div class="service-icon">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <h3>Software Engineer</h3>
                            <p>Develop strong coding skills, ace technical interviews, and build projects that impress top tech employers.</p>
                            <div class="card-meta">
                                <span class="difficulty"><i class="fas fa-signal"></i> Advanced</span>
                                <span class="duration"><i class="far fa-clock"></i> 30 hours</span>
                            </div>
                            <a href="services.php#software-engineer" class="read-more">Learn More</a>
                        </div>
                        
                        <div class="service-card">
                            <div class="card-badge">PROGRAM</div>
                            <div class="service-icon">
                                <i class="fas fa-database"></i>
                            </div>
                            <h3>Data Science</h3>
                            <p>Build your analytical toolkit with statistics, programming, and machine learning skills needed for data science roles.</p>
                            <div class="card-meta">
                                <span class="difficulty"><i class="fas fa-signal"></i> Intermediate</span>
                                <span class="duration"><i class="far fa-clock"></i> 40 hours</span>
                            </div>
                            <a href="services.php#data-science" class="read-more">Learn More</a>
                        </div>
                        
                        <div class="service-card">
                            <div class="card-badge">PROGRAM</div>
                            <div class="service-icon">
                                <i class="fas fa-calculator"></i>
                            </div>
                            <h3>Quantitative Finance</h3>
                            <p>Develop expertise in mathematical modeling, algorithmic trading, and risk management for quant roles at top firms.</p>
                            <div class="card-meta">
                                <span class="difficulty"><i class="fas fa-signal"></i> Advanced</span>
                                <span class="duration"><i class="far fa-clock"></i> 35 hours</span>
                            </div>
                            <a href="services.php#quant-finance" class="read-more">Learn More</a>
                        </div>
                        
                        <div class="service-card">
                            <div class="card-badge">PROGRAM</div>
                            <div class="service-icon">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <h3>Product Management</h3>
                            <p>Learn how to build products users love, prioritize features, and collaborate effectively with engineers and designers.</p>
                            <div class="card-meta">
                                <span class="difficulty"><i class="fas fa-signal"></i> Intermediate</span>
                                <span class="duration"><i class="far fa-clock"></i> 28 hours</span>
                            </div>
                            <a href="services.php#product-management" class="read-more">Learn More</a>
                        </div>
                    </div>
                    <button class="carousel-arrow next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
            
            <!-- College Admission Tab Content -->
            <div class="tab-content" id="college-admission">
                
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="images/services/college-admission-icon.jpg" alt="College Admission Services" class="service-image">
                        </div>
                        <h3>College Admission Services</h3>
                        <p>Comprehensive guidance through every step of the college application process with personalized strategy.</p>
                        <a href="/services/college-admission.php" class="read-more">Learn More</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="images/services/ivy-league-icon.jpg" alt="Ivy League Package" class="service-image">
                        </div>
                        <h3>Ivy League Package</h3>
                        <p>Comprehensive support for students targeting Harvard, Yale, Princeton and other elite institutions.</p>
                        <a href="/services/ivy-league.php" class="read-more">Learn More</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="images/services/essay-excellence-icon.jpg" alt="Essay Excellence" class="service-image">
                        </div>
                        <h3>Essay Excellence</h3>
                        <p>Personalized guidance to craft compelling personal statements and supplemental essays that stand out.</p>
                        <a href="/services/essay-excellence.php" class="read-more">Learn More</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="images/services/interview-prep-icon.jpg" alt="Interview Preparation" class="service-image">
                        </div>
                        <h3>Interview Preparation</h3>
                        <p>Mock interviews and coaching to help you confidently navigate college admissions interviews.</p>
                        <a href="/services/interview-prep.php" class="read-more">Learn More</a>
                    </div>
                </div>
            </div>
            
            <!-- MBA Admission Tab Content -->
            <div class="tab-content" id="mba-admission">
               
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="images/services/m7-mba-icon.jpg" alt="M7 MBA Package" class="service-image">
                        </div>
                        <h3>M7 MBA Package</h3>
                        <p>Comprehensive guidance for applicants targeting Harvard, Stanford, Wharton and other elite business schools.</p>
                        <a href="services.php#elite-mba" class="read-more">Learn More</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="images/services/mba-essays-icon.jpg" alt="MBA Essays & Resume" class="service-image">
                        </div>
                        <h3>MBA Essays & Resume</h3>
                        <p>Expert help crafting compelling MBA application essays and professional resumes that highlight your achievements.</p>
                        <a href="services.php#mba-essays" class="read-more">Learn More</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="images/services/mba-interview-icon.jpg" alt="MBA Interview Coaching" class="service-image">
                        </div>
                        <h3>MBA Interview Coaching</h3>
                        <p>Personalized preparation for business school interviews, including realistic mock interviews with detailed feedback.</p>
                        <a href="services.php#mba-interview" class="read-more">Learn More</a>
                    </div>
                </div>
            </div>
            
            <!-- High School Admission Tab Content -->
            <div class="tab-content" id="high-school-admission">
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="images/services/boarding-school-icon.jpg" alt="Boarding School Prep" class="service-image">
                        </div>
                        <h3>Boarding School Prep</h3>
                        <p>Complete guidance for applications to elite boarding schools like Phillips Exeter, Andover, and Choate.</p>
                        <a href="services.php#boarding-school" class="read-more">Learn More</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="images/services/application-strategy-icon.jpg" alt="Application Strategy" class="service-image">
                        </div>
                        <h3>Application Strategy</h3>
                        <p>Personalized strategy to highlight your strengths and create a compelling application narrative.</p>
                        <a href="services.php#application-strategy" class="read-more">Learn More</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="images/services/test-prep-icon.jpg" alt="SSAT/ISEE Test Prep" class="service-image">
                        </div>
                        <h3>SSAT/ISEE Test Prep</h3>
                        <p>Specialized tutoring for the SSAT and ISEE exams to maximize your score potential.</p>
                        <a href="services.php#test-prep" class="read-more">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Add new K-12 Solutions Tab Content -->
            <div class="tab-content" id="k12-education">
                <div class="services-carousel-container">
                    <button class="carousel-arrow prev">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <div class="services-carousel">
                        <div class="service-card">
                            <div class="card-badge">CUSTOM</div>
                            <div class="service-icon">
                                <img src="images/services/private-tutoring-icon.jpg" alt="Private Tutoring" class="service-image">
                            </div>
                            <h3>Private Tutoring</h3>
                            <p>One-on-one instruction with Ivy League-educated tutors across all academic subjects, tailored to your child's learning style.</p>
                            <div class="card-meta">
                                <span class="difficulty"><i class="fas fa-star"></i> Personalized</span>
                                <span class="duration"><i class="far fa-calendar-alt"></i> Flexible</span>
                            </div>
                            <a href="services.php#private-tutoring" class="read-more">Learn More</a>
                        </div>
                        
                        <div class="service-card">
                            <div class="card-badge">ADAPTIVE</div>
                            <div class="service-icon">
                                <img src="images/services/academic-roadmapping-icon.jpg" alt="Academic Roadmapping" class="service-image">
                            </div>
                            <h3>Academic Roadmapping</h3>
                            <p>Comprehensive educational planning from elementary through high school, designed to maximize your child's potential.</p>
                            <div class="card-meta">
                                <span class="difficulty"><i class="fas fa-star"></i> Strategic</span>
                                <span class="duration"><i class="far fa-calendar-alt"></i> Long-term</span>
                            </div>
                            <a href="services.php#roadmapping" class="read-more">Learn More</a>
                        </div>
                        
                        <div class="service-card">
                            <div class="card-badge">CUSTOM</div>
                            <div class="service-icon">
                                <img src="images/services/international-curriculum-icon.jpg" alt="International Curriculum" class="service-image">
                            </div>
                            <h3>International Curriculum</h3>
                            <p>Expert guidance on international education systems, including IB, A-Levels, and European curricula for globally-minded families.</p>
                            <div class="card-meta">
                                <span class="difficulty"><i class="fas fa-star"></i> Global</span>
                                <span class="duration"><i class="far fa-calendar-alt"></i> Ongoing</span>
                            </div>
                            <a href="services.php#international" class="read-more">Learn More</a>
                        </div>
                        
                        <div class="service-card">
                            <div class="card-badge">CUSTOM</div>
                            <div class="service-icon">
                                <img src="images/services/specialized-enrichment-icon.jpg" alt="Specialized Enrichment" class="service-image">
                            </div>
                            <h3>Specialized Enrichment</h3>
                            <p>Curated extracurricular programs in arts, STEM, entrepreneurship, and leadership for well-rounded development.</p>
                            <div class="card-meta">
                                <span class="difficulty"><i class="fas fa-star"></i> Enriching</span>
                                <span class="duration"><i class="far fa-calendar-alt"></i> Custom</span>
                            </div>
                            <a href="services.php#enrichment" class="read-more">Learn More</a>
                        </div>
                    </div>
                    <button class="carousel-arrow next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Global Mentor Network Map Section -->
    <section class="mentor-map-section">
        <div class="container">
            <div class="bigtitle-header">
                <h3>OUR NETWORK</h3>
                <h2>Reach Professionals <span class="highlight">Like Never Before</span></h2>
                <p>Connect with industry veterans and expert educators worldwide.</p>
            </div>
            
            <div class="map-container">
                <!-- D3.js map will be rendered here -->
                <div id="d3-world-map" class="world-map"></div>
            </div>
        </div>
    </section>

 

    <!-- Feature items in Educative.io style -->
    <section class="edu-features">
       
        <div class="container">
            <!-- Elite Experts -->
            <!-- Removed Elite Experts section -->
            <div class="bigtitle-header">
                <h3>WHY WE STAND OUT</h3>
                <h2>Transformative Outcomes, <span class="highlight">Guaranteed</span></h2>
                <p>Experience measurable career growth through our unique mentorship approach.</p>
            </div>
            <!-- Premium Personalization (1st - odd row - image on right) -->
            <div class="edu-feature-row">
                <div class="edu-feature-text">
                    <div class="bigtitle-header">
                        <h3>ADAPTIVE SOLUTIONS</h3>
                        <h2>Personalized Education <span class="highlight">Architecture</span></h2>
                        <p>Custom-crafted learning solutions that adapt to each student's unique background, goals, and aspirations - whether targeting elite institutions or building competitive career foundations.</p>
                    </div>
                    <a href="services.php#personalized" class="edu-feature-link">See customization examples <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="edu-feature-image">
                    <!-- Replacing image placeholder with actual image -->
                    <img src="images/features/personalized-education.jpg" alt="Personalized Education Architecture" class="feature-image">
                </div>
            </div>

            <!-- Proven Best Practices (2nd - even row - image on left) -->
            <div class="edu-feature-row">
                <!-- Image first in DOM order for even rows -->
                <div class="edu-feature-image">
                    <!-- Replacing image placeholder with actual image -->
                    <img src="images/features/best-practices.jpg" alt="Proven Best Practices" class="feature-image">
                </div>
                <div class="edu-feature-text">
                    <div class="bigtitle-header">
                        <h3>DATA-DRIVEN APPROACH</h3>
                        <h2>Proven Best <span class="highlight">Practices</span></h2>
                        <p>Our methods are built on detailed analysis of thousands of professionals' career tracks and outcomes, creating a proven system that consistently delivers exceptional results for our students.</p>
                    </div>
                    <a href="services.php#methodology" class="edu-feature-link">Learn about our methodology <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Global Perspective (3rd - odd row - image on right) -->
            <div class="edu-feature-row">
                <div class="edu-feature-text">
                    <div class="bigtitle-header">
                        <h3>INTERNATIONAL REACH</h3>
                        <h2>Global <span class="highlight">Perspective</span></h2>
                        <p>International network and expertise to provide world-class educational solutions for globally-minded families.</p>
                    </div>
                    <a href="services.php#global" class="edu-feature-link">Learn about our global approach <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="edu-feature-image">
                    <!-- Replacing image placeholder with actual image -->
                    <img src="images/features/global-perspective.jpg" alt="Global Perspective" class="feature-image">
                </div>
            </div>

            <!-- Powerful Network -->
            <!-- Removed Powerful Network section -->
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="bigtitle-header">
                <h3>SUCCESS STORIES</h3>
                <h2>Career Breakthroughs That <span class="highlight">Inspire</span></h2>
                <p>Hear from professionals who transformed their careers through our mentorship programs.</p>
            </div>
            <div class="testimonial-slider">
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"SageArk's consulting coaching program was instrumental in helping me land my dream job at Bain & Company. The mock interviews and personalized feedback made all the difference."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="images/testimonial-1.jpg" alt="Michael S.">
                        <div class="author-details">
                            <h4>Michael S.</h4>
                            <p>Associate Consultant, Bain & Company</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"The investment banking program gave me the competitive edge I needed. I went from having no finance background to securing an analyst position at Goldman Sachs."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="images/testimonial-2.jpg" alt="Sophia L.">
                        <div class="author-details">
                            <h4>Sophia L.</h4>
                            <p>Investment Banking Analyst, Goldman Sachs</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"Thanks to SageArk's college admissions coaching, I was accepted to all of my top-choice schools, including Harvard and Stanford. Their guidance on essays and interviews was invaluable."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="images/testimonial-3.jpg" alt="James K.">
                        <div class="author-details">
                            <h4>James K.</h4>
                            <p>Harvard University, Class of 2025</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-dots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </section>



    <!-- Comparison Section -->
    <section class="comparison-section">
        <div class="container">
            <div class="comparison-header">
                <h3>COMPARE</h3>
                <h2>Premium quality, <span class="highlight">half the price</span></h2>
                <p>Get comprehensive education solutions without the premium agency markup.</p>
            </div>

            <div class="comparison-table">
                <div class="comparison-row comparison-header-row">
                    <div class="comparison-category"></div>
                    <div class="comparison-option">Traditional Agencies</div>
                    <div class="comparison-option">SageArk</div>
                </div>
                
                <div class="comparison-row">
                    <div class="comparison-category">Value for money</div>
                    <div class="comparison-option">
                        <span class="comparison-icon negative"><i class="fas fa-times"></i></span>
                        $10,000+
                    </div>
                    <div class="comparison-option">
                        <span class="comparison-icon positive"><i class="fas fa-check"></i></span>
                        $3,000-5,000
                    </div>
                </div>
                
                <div class="comparison-row">
                    <div class="comparison-category">Time to results</div>
                    <div class="comparison-option">
                        <span class="comparison-icon negative"><i class="fas fa-times"></i></span>
                        3-6 months
                    </div>
                    <div class="comparison-option">
                        <span class="comparison-icon positive"><i class="fas fa-check"></i></span>
                        4-8 weeks
                    </div>
                </div>
                
                <div class="comparison-row">
                    <div class="comparison-category">Expert access</div>
                    <div class="comparison-option">
                        <span class="comparison-icon negative"><i class="fas fa-times"></i></span>
                        Junior consultants
                    </div>
                    <div class="comparison-option">
                        <span class="comparison-icon positive"><i class="fas fa-check"></i></span>
                        Direct industry veterans
                    </div>
                </div>
                
                <div class="comparison-row">
                    <div class="comparison-category">Resource network</div>
                    <div class="comparison-option">
                        <span class="comparison-icon negative"><i class="fas fa-times"></i></span>
                        Limited partners
                    </div>
                    <div class="comparison-option">
                        <span class="comparison-icon positive"><i class="fas fa-check"></i></span>
                        Extensive global network
                    </div>
                </div>
                
                <div class="comparison-row">
                    <div class="comparison-category">Personalization</div>
                    <div class="comparison-option">
                        <span class="comparison-icon negative"><i class="fas fa-times"></i></span>
                        Cookie-cutter approach
                    </div>
                    <div class="comparison-option">
                        <span class="comparison-icon positive"><i class="fas fa-check"></i></span>
                        Fully customized plans
                    </div>
                </div>
            </div>
            
            <div class="comparison-cta">
                <a href="services.php" class="btn btn-primary">See Our Services</a>
            </div>
        </div>
    </section>
        <!-- Include the CTA Section -->
        <?php include 'includes/cta.php'; ?>

    <!--
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <h2>Sage<span>Ark</span></h2>
                    <p>Expert coaching for high-impact careers</p>
                </div>
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="success-stories.html">Success Stories</a></li>
                        <li><a href="resources.html">Resources</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-services">
                    <h3>Our Services</h3>
                    <ul>
                        <li><a href="services.php#consulting">Consulting</a></li>
                        <li><a href="services.php#investment-banking">Investment Banking</a></li>
                        <li><a href="services.php#data-science">Data Science</a></li>
                        <li><a href="services.php#computer-science">Computer Science</a></li>
                        <li><a href="services.php#college-admissions">College Admissions</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h3>Contact Us</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Education Ave, New York, NY 10001</p>
                    <p><i class="fas fa-phone"></i> (555) 123-4567</p>
                    <p><i class="fas fa-envelope"></i> info@sageark.com</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-about">
                    <h3>About SageArk</h3>
                    <p>SageArk is your all-in-one platform for personal growth, offering structured career programs and personalized education solutions for high net worth families. Powered by our vast network of professionals, educational institutions, and NGO partnerships, we connect students with the exact resources they need to thrive. Our mission is to unlock every individual's full potential through expert guidance, tailored learning experiences, and strategic connections.</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 SageArk. All rights reserved.</p>
            </div>
        </div>
    </footer>
 Footer -->

    <!-- Include the footer -->
    <?php include 'includes/footer.php'; ?>

    <script src="script.js"></script>
    <!-- Add this before closing body tag (after your current script.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 