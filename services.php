<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - SageArk</title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/services.css">
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

  
    <!-- Hero Section -->
    <section class="page-hero services-hero">
        <div class="container">
            <div class="hero-content text-center">
                <h1>Our Services</h1>
                <p class="services-subtitle">Comprehensive education and career solutions designed to transform potential into achievement</p>
            </div>
        </div>
    </section>

    <!-- Career Programs Section -->
    <section id="career-programs" class="section-padding bg-light">
        <div class="container">
            <div class="section-header text-center">
                <div class="section-tag">CAREER PREPARATION</div>
                <h2>Industry-Focused <span class="highlight">Career Programs</span></h2>
                <p>Structured training programs designed by industry experts to prepare you for competitive roles.</p>
            </div>
            
            <div class="program-cards">
                <!-- Consulting Careers -->
                <div class="program-card">
                    <div class="program-icon-wrapper">
                        <div class="program-badge">PROGRAM</div>
                        <div class="program-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                    </div>
                    <h3>Consulting Careers</h3>
                    <p>Master case interviews, business frameworks, and structured problem-solving techniques used by top consulting firms.</p>
                    <div class="program-meta">
                        <div class="difficulty"><i class="fas fa-signal"></i> Intermediate</div>
                        <div class="duration"><i class="far fa-clock"></i> 20 hours</div>
                    </div>
                    <a href="services/consulting.php" class="learn-more">Learn More →</a>
                </div>
                
                <!-- Investment Banking -->
                <div class="program-card">
                    <div class="program-icon-wrapper">
                        <div class="program-badge">PROGRAM</div>
                        <div class="program-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                    </div>
                    <h3>Investment Banking</h3>
                    <p>Develop financial modeling skills, valuation techniques, and industry knowledge required for investment banking roles.</p>
                    <div class="program-meta">
                        <div class="difficulty"><i class="fas fa-signal"></i> Intermediate</div>
                        <div class="duration"><i class="far fa-clock"></i> 25 hours</div>
                    </div>
                    <a href="services/investment-banking.php" class="learn-more">Learn More →</a>
                </div>
                
                <!-- Software Engineer -->
                <div class="program-card">
                    <div class="program-icon-wrapper">
                        <div class="program-badge">PROGRAM</div>
                        <div class="program-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                    </div>
                    <h3>Software Engineer</h3>
                    <p>Strengthen your coding skills, ace technical interviews, and build impressive projects for top tech companies.</p>
                    <div class="program-meta">
                        <div class="difficulty"><i class="fas fa-signal"></i> Advanced</div>
                        <div class="duration"><i class="far fa-clock"></i> 30 hours</div>
                    </div>
                    <a href="services/software-engineer.php" class="learn-more">Learn More →</a>
                </div>
                
                <!-- Data Science -->
                <div class="program-card">
                    <div class="program-icon-wrapper">
                        <div class="program-badge">PROGRAM</div>
                        <div class="program-icon">
                            <i class="fas fa-database"></i>
                        </div>
                    </div>
                    <h3>Data Science</h3>
                    <p>Build analytical expertise in statistics, programming, and machine learning for data science positions.</p>
                    <div class="program-meta">
                        <div class="difficulty"><i class="fas fa-signal"></i> Intermediate</div>
                        <div class="duration"><i class="far fa-clock"></i> 40 hours</div>
                    </div>
                    <a href="services/data-science.php" class="learn-more">Learn More →</a>
                </div>
                
                <!-- Quantitative Finance -->
                <div class="program-card">
                    <div class="program-icon-wrapper">
                        <div class="program-badge">PROGRAM</div>
                        <div class="program-icon">
                            <i class="fas fa-calculator"></i>
                        </div>
                    </div>
                    <h3>Quantitative Finance</h3>
                    <p>Develop skills in mathematical modeling, algorithmic trading, and risk management for quantitative roles.</p>
                    <div class="program-meta">
                        <div class="difficulty"><i class="fas fa-signal"></i> Advanced</div>
                        <div class="duration"><i class="far fa-clock"></i> 35 hours</div>
                    </div>
                    <a href="services/quant-finance.php" class="learn-more">Learn More →</a>
                </div>
                
                <!-- Product Management -->
                <div class="program-card">
                    <div class="program-icon-wrapper">
                        <div class="program-badge">PROGRAM</div>
                        <div class="program-icon">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                    </div>
                    <h3>Product Management</h3>
                    <p>Learn product development strategies and build expertise in user research, roadmapping, and stakeholder management.</p>
                    <div class="program-meta">
                        <div class="difficulty"><i class="fas fa-signal"></i> Intermediate</div>
                        <div class="duration"><i class="far fa-clock"></i> 28 hours</div>
                    </div>
                    <a href="services/product-management.php" class="learn-more">Learn More →</a>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="services/career-programs.php" class="btn btn-primary">View All Career Programs</a>
            </div>
        </div>
    </section>

    <!-- College Admission Section -->
    <section id="college-admission" class="section-padding">
        <div class="container">
            <div class="section-header text-center">
                <div class="section-tag">COLLEGE PREPARATION</div>
                <h2>Elite College <span class="highlight">Admission Support</span></h2>
                <p>Strategic guidance and personalized support for students targeting top universities worldwide.</p>
            </div>
            
            <div class="admission-cards">
                <!-- Ivy League Package -->
                <div class="admission-card">
                    <div class="admission-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Ivy League Package</h3>
                    <p>Comprehensive support for students targeting Harvard, Yale, Princeton, and other elite institutions.</p>
                    <a href="services/ivy-league.php" class="learn-more">Learn More →</a>
                </div>
                
                <!-- Essay Excellence -->
                <div class="admission-card">
                    <div class="admission-icon">
                        <i class="fas fa-edit"></i>
                    </div>
                    <h3>Essay Excellence</h3>
                    <p>Personalized guidance to craft compelling personal statements and supplemental essays that stand out.</p>
                    <a href="services/essay-excellence.php" class="learn-more">Learn More →</a>
                </div>
                
                <!-- Interview Preparation -->
                <div class="admission-card">
                    <div class="admission-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Interview Preparation</h3>
                    <p>Mock interviews and coaching to help you confidently navigate college admissions interviews.</p>
                    <a href="services/interview-prep.php" class="learn-more">Learn More →</a>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="services/college-admission.php" class="btn btn-primary">View All College Admission Services</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials section-padding bg-light">
        <div class="container">
            <div class="section-header text-center">
                <div class="section-tag">SUCCESS STORIES</div>
                <h2>Real Results From <span class="highlight">Real Students</span></h2>
                <p>Hear from those who have transformed their educational and career paths with SageArk.</p>
            </div>
            
            <div class="testimonial-slider">
                <!-- Testimonial 1 -->
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"SageArk's consulting coaching program was instrumental in helping me land my dream job at Bain & Company. The mock interviews and personalized feedback made all the difference."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="images/testimonial/testimonial-1.jpg" alt="Michael S.">
                        <div class="author-details">
                            <h4>Michael S.</h4>
                            <p>Associate Consultant, Bain & Company</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"The investment banking program gave me the competitive edge I needed. I went from having no finance background to securing an analyst position at Goldman Sachs."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="images/testimonial/testimonial-2.jpg" alt="Sophia L.">
                        <div class="author-details">
                            <h4>Sophia L.</h4>
                            <p>Investment Banking Analyst, Goldman Sachs</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"Thanks to SageArk's college admissions coaching, I was accepted to all of my top-choice schools, including Harvard and Stanford. Their guidance on essays and interviews was invaluable."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="images/testimonial/testimonial-3.jpg" alt="James K.">
                        <div class="author-details">
                            <h4>James K.</h4>
                            <p>Harvard University, Class of 2025</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-dots text-center">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta section-padding">
        <div class="container text-center">
            <h2>Ready to Start Your Journey?</h2>
            <p>Book a free 30-minute consultation to discuss your goals and how we can help you achieve them.</p>
            <a href="contact.php" class="btn btn-primary mt-4">Schedule Consultation</a>
        </div>
    </section>


    <!-- Include the footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 