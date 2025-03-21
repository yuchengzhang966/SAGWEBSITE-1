<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - SageArk</title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/contact.css">
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
    <section class="page-hero contact-hero">
        <div class="container">
            <div class="hero-content text-center">
                <h1>Contact Us</h1>
                <p class="contact-subtitle">Reach out to discuss how we can help you achieve your educational and career goals</p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h2>Get in Touch</h2>
                        <p>We're here to answer any questions you have about our services and how we can help you achieve your goals.</p>
                        
                        <div class="contact-details">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-text">
                                    <h3>Visit Us</h3>
                                    <p>333 S Wabash Ave, Chicago, IL</p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-text">
                                    <h3>Call Us</h3>
                                    <p>(646) 468-9846</p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-text">
                                    <h3>Email Us</h3>
                                    <p>info@sageark.com</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="contact-social">
                            <h3>Connect With Us</h3>
                            <div class="social-icons">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="contact-form">
                        <h2>Send Us a Message</h2>
                        
                        <form action="process-contact.php" method="post">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone">
                            </div>
                            
                            <div class="form-group">
                                <label for="service">Service of Interest</label>
                                <select id="service" name="service">
                                    <option value="" disabled selected>Select a service</option>
                                    <option value="Career Programs">Career Programs</option>
                                    <option value="College Admission">College Admission</option>
                                    <option value="MBA Admission">MBA Admission</option>
                                    <option value="High School Admission">High School Admission</option>
                                    <option value="K-12 Solutions">K-12 Solutions</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Your Message</label>
                                <textarea id="message" name="message" rows="5" required></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section section-padding bg-light">
        <div class="container">
            <div class="section-header text-center">
                <div class="section-tag">FAQS</div>
                <h2>Frequently Asked <span class="highlight">Questions</span></h2>
                <p>Find answers to common questions about our services and process.</p>
            </div>
            
            <div class="faq-container">
                <div class="accordion" id="faqAccordion">
                    <!-- FAQ Item 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How do your programs differ from traditional career counseling?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Unlike traditional career counseling that focuses primarily on assessments and general advice, our programs provide structured, industry-specific training with a strong emphasis on practical skills development. We combine personalized mentorship from industry veterans with targeted resources and practice opportunities designed to prepare you for specific roles in competitive industries.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What is the average timeline for your career programs?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Our career programs typically range from 4 to 12 weeks, depending on the intensity level you select and your prior experience. Each program includes a personalized assessment phase, focused skill-building modules, and interview preparation. Most clients see significant results within 8 weeks, with continued support available throughout their job search.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- More FAQ items as needed -->
                </div>
            </div>
        </div>
    </section>

    <!-- Include the footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 