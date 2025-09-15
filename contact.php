<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact SageArk | Career & Education Coaching</title>
    <meta name="description" content="Get in touch with the SageArk team to discuss your educational and career goals. Schedule a free consultation for our coaching programs and services.">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/dark-mode.css">
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
    <div class="hero-section bg-primary text-white py-5 mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-3">Contact Us</h1>
                    <p class="lead text-white opacity-90">Reach out to discuss how we can help you achieve your educational and career goals</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form Section -->
    <section class="contact-form-section py-5">
        <div class="container">
            <!-- Contact Form -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4 p-md-5">
                            <h2 class="h4 fw-bold mb-4 text-center">Send Us a Message</h2>
                            <form action="process-contact.php" method="post">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label small fw-medium">Full Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="email" class="form-label small fw-medium">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label small fw-medium">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone">
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="service" class="form-label small fw-medium">Service of Interest</label>
                                        <select class="form-select" id="service" name="service">
                                            <option value="" disabled selected>Select a service</option>
                                            <option value="Career Programs">Career Programs</option>
                                            <option value="College Admission">College Admission</option>
                                            <option value="MBA Admission">MBA Admission</option>
                                            <option value="High School Admission">High School Admission</option>
                                            <option value="K-12 Solutions">K-12 Solutions</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-12">
                                        <label for="message" class="form-label small fw-medium">Your Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                    </div>
                                    
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary px-5">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center">
                    <span class="badge bg-primary-subtle text-primary mb-3">FAQS</span>
                    <h2 class="display-6 fw-bold mb-3">Frequently Asked Questions</h2>
                    <p class="text-secondary">Find answers to common questions about our services and process.</p>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <!-- FAQ Item 1 -->
                        <div class="accordion-item border-0 mb-3 rounded shadow-sm">
                            <h3 class="accordion-header">
                                <button class="accordion-button rounded fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                    How do your programs differ from traditional career counseling?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-secondary">
                                    Unlike traditional career counseling that focuses primarily on assessments and general advice, our programs provide structured, industry-specific training with a strong emphasis on practical skills development. We combine personalized mentorship from industry veterans with targeted resources and practice opportunities designed to prepare you for specific roles in competitive industries.
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 2 -->
                        <div class="accordion-item border-0 mb-3 rounded shadow-sm">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed rounded fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    What is the average timeline for your career programs?
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-secondary">
                                    Our career programs typically range from 4 to 12 weeks, depending on the intensity level you select and your prior experience. Each program includes:
                                    <ul class="mt-3">
                                        <li>Personalized assessment phase</li>
                                        <li>Focused skill-building modules</li>
                                        <li>Interview preparation</li>
                                        <li>Ongoing job search support</li>
                                    </ul>
                                    Most clients see significant results within 8 weeks.
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 3 -->
                        <div class="accordion-item border-0 mb-3 rounded shadow-sm">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed rounded fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Do you offer personalized consultation before enrollment?
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-secondary">
                                    Yes, we offer a complimentary 30-minute consultation to understand your goals, assess your needs, and recommend the most suitable program. This allows us to create a tailored learning path that aligns with your career objectives.
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 4 -->
                        <div class="accordion-item border-0 mb-3 rounded shadow-sm">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed rounded fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                    What support is available after program completion?
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-secondary">
                                    Program graduates receive ongoing access to:
                                    <ul class="mt-3">
                                        <li>Alumni network and events</li>
                                        <li>Job opportunity notifications</li>
                                        <li>Resource library updates</li>
                                        <li>Career coaching sessions at preferred rates</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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