<?php
// Page variables
$page_title = "Career Programs | SageArk";
$meta_description = "Accelerate your career with SageArk's specialized career programs in consulting, investment banking, software engineering, data science, product management, and quantitative finance.";

// Set hero section variables
$resourceType = "CAREER PROGRAMS";
$title = "Career Programs";
$subtitle = "Accelerate your career with industry-focused training programs designed by professionals from top companies";
$difficulty = null; // Not applicable for overview page
$duration = null; // Not applicable for overview page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/services.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body class="preload service-overview-page">
    <?php include '../includes/nav.php'; ?>
    <?php include '../includes/hero-service.php'; ?>

    <div class="container mb-5">
        <!-- Overview Section -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="fw-bold mb-4">Transform Your Career Trajectory</h2>
                <p class="lead">Our career programs are designed to bridge the gap between academic knowledge and industry requirements, giving you the specific skills, interview preparation, and professional network needed to land your dream job.</p>
                
                <div class="row mt-5 g-4 text-center">
                    <div class="col-md-4">
                        <div class="p-3">
                            <div class="display-5 text-primary mb-3">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold">Expert Instructors</h3>
                            <p class="text-muted">Learn from professionals who have worked at industry-leading companies like Google, McKinsey, Goldman Sachs, and more.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="p-3">
                            <div class="display-5 text-primary mb-3">
                                <i class="bi bi-gear-wide-connected"></i>
                            </div>
                            <h3 class="h5 fw-bold">Industry-Relevant Skills</h3>
                            <p class="text-muted">Gain practical skills and knowledge that employers actually look for, not just theoretical concepts.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="p-3">
                            <div class="display-5 text-primary mb-3">
                                <i class="bi bi-person-check-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold">Career Support</h3>
                            <p class="text-muted">Get personalized interview preparation, resume reviews, and networking opportunities to launch your career.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-5">
                    <div class="alert alert-primary">
                        <div class="d-flex">
                            <div class="me-3">
                                <i class="bi bi-graph-up-arrow fs-4"></i>
                            </div>
                            <div class="text-start">
                                <strong>Our Impact:</strong> Over 85% of our program graduates secure roles at leading companies within 3 months of completion. Our approach combines skill-building with intensive interview preparation and industry networking.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Programs Section -->
        <div id="programs" class="mb-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Career Programs</h2>
                <p class="lead">Choose the program that aligns with your career aspirations</p>
            </div>
            
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5">
                <!-- Consulting Careers Card -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <span class="badge bg-primary text-white me-2">Popular</span>
                                <h3 class="h5 card-title mb-0">Consulting Careers</h3>
                            </div>
                            <p class="card-text">Master case interviews and structured problem-solving techniques used by top consulting firms.</p>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Case interview mastery</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Analytical frameworks</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Mock interviews with feedback</li>
                                <li><i class="bi bi-signal text-muted me-2"></i>Intermediate • 125 hours</li>
                            </ul>
                            <div class="text-center">
                                <a href="consulting.php" class="btn btn-outline-primary">Learn More</a>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0 text-center">
                            <small class="text-muted">Placements at: McKinsey, BCG, Bain, Deloitte</small>
                        </div>
                    </div>
                </div>
                
                <!-- Investment Banking Card -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="h5 card-title mb-0">Investment Banking</h3>
                            </div>
                            <p class="card-text">Master financial modeling, valuation techniques, and interview skills for top-tier banks.</p>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Financial modeling</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Valuation methodologies</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Technical interview prep</li>
                                <li><i class="bi bi-signal text-muted me-2"></i>Intermediate • 25 hours</li>
                            </ul>
                            <div class="text-center">
                                <a href="investment-banking.php" class="btn btn-outline-primary">Learn More</a>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0 text-center">
                            <small class="text-muted">Placements at: Goldman Sachs, Morgan Stanley, JP Morgan</small>
                        </div>
                    </div>
                </div>
                
                <!-- Software Engineering Card -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <span class="badge bg-primary text-white me-2">Popular</span>
                                <h3 class="h5 card-title mb-0">Software Engineering</h3>
                            </div>
                            <p class="card-text">Master coding, algorithms, and system design to succeed at top tech companies.</p>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Data structures & algorithms</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>System design principles</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Coding interview excellence</li>
                                <li><i class="bi bi-signal text-muted me-2"></i>Intermediate • 30 hours</li>
                            </ul>
                            <div class="text-center">
                                <a href="software-engineer.php" class="btn btn-outline-primary">Learn More</a>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0 text-center">
                            <small class="text-muted">Placements at: Google, Microsoft, Amazon, Meta</small>
                        </div>
                    </div>
                </div>
                
                <!-- Data Science Card -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="h5 card-title mb-0">Data Science</h3>
                            </div>
                            <p class="card-text">Master machine learning, statistical analysis, and data-driven decision making.</p>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Machine learning techniques</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Data processing & visualization</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Real-world projects</li>
                                <li><i class="bi bi-signal text-muted me-2"></i>Intermediate • 35 hours</li>
                            </ul>
                            <div class="text-center">
                                <a href="data-science.php" class="btn btn-outline-primary">Learn More</a>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0 text-center">
                            <small class="text-muted">Placements at: Google, Facebook, Amazon, Capital One</small>
                        </div>
                    </div>
                </div>
                
                <!-- Product Management Card -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="h5 card-title mb-0">Product Management</h3>
                            </div>
                            <p class="card-text">Master product strategy, user experience, and execution to lead successful tech products.</p>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Product strategy & roadmapping</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>User experience design</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Data-driven decision making</li>
                                <li><i class="bi bi-signal text-muted me-2"></i>Intermediate • 32 hours</li>
                            </ul>
                            <div class="text-center">
                                <a href="product-management.php" class="btn btn-outline-primary">Learn More</a>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0 text-center">
                            <small class="text-muted">Placements at: Google, Amazon, Microsoft, Airbnb</small>
                        </div>
                    </div>
                </div>
                
                <!-- Quantitative Finance Card -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="h5 card-title mb-0">Quantitative Finance</h3>
                            </div>
                            <p class="card-text">Master financial modeling, stochastic calculus, and algorithmic trading strategies.</p>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Advanced mathematical modeling</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Derivatives pricing & risk</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Algorithmic trading strategies</li>
                                <li><i class="bi bi-signal text-muted me-2"></i>Advanced • 40 hours</li>
                            </ul>
                            <div class="text-center">
                                <a href="quant-finance.php" class="btn btn-outline-primary">Learn More</a>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0 text-center">
                            <small class="text-muted">Placements at: Jane Street, Two Sigma, Citadel, D.E. Shaw</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Program Success Section -->
        <div class="row mb-5">
            <div class="col-lg-10 mx-auto">
                <div class="card border-0 bg-light">
                    <div class="card-body p-5">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <h2 class="fw-bold mb-4">Program Success Methodology</h2>
                                <p>Our career programs are built on a proven three-pillar methodology that has helped hundreds of students secure jobs at top companies:</p>
                                
                                <div class="d-flex mb-3">
                                    <div class="me-3">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                            <span class="fw-bold">1</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="h5 fw-bold">Industry-Focused Skill Development</h4>
                                        <p class="mb-0">Curriculum designed with input from hiring managers at top firms to focus on the exact skills they seek.</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex mb-3">
                                    <div class="me-3">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                            <span class="fw-bold">2</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="h5 fw-bold">Intensive Interview Preparation</h4>
                                        <p class="mb-0">Rigorous practice with real interview questions and personalized feedback from industry veterans.</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex">
                                    <div class="me-3">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                            <span class="fw-bold">3</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="h5 fw-bold">Career Coaching & Networking</h4>
                                        <p class="mb-0">Personalized guidance on resume optimization, networking strategies, and developing your professional brand.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="card shadow-sm">
                                    <div class="card-body p-4">
                                        <h3 class="h5 fw-bold mb-4">Placement Success</h3>
                                        
                                        <div class="mb-4">
                                            <h4 class="h6 fw-bold">Overall Placement Rate</h4>
                                            <div class="progress mb-3" style="height: 25px;">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                            </div>
                                            <small class="text-muted">Students who receive at least one job offer within 3 months of program completion.</small>
                                        </div>
                                        
                                        <div class="mb-4">
                                            <h4 class="h6 fw-bold">Top-Tier Company Placements</h4>
                                            <div class="progress mb-3" style="height: 25px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                                            </div>
                                            <small class="text-muted">Students who receive offers from Fortune 500 companies or equivalent-tier employers.</small>
                                        </div>
                                        
                                        <div>
                                            <h4 class="h6 fw-bold">Average Salary Increase</h4>
                                            <div class="progress mb-3" style="height: 25px;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">+60%</div>
                                            </div>
                                            <small class="text-muted">Average increase in compensation compared to pre-program roles.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Testimonials Section -->
        <div class="mb-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold">What Our Graduates Say</h2>
                <p class="lead">Success stories from participants who transformed their careers</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex mb-4">
                                <div class="flex-shrink-0">
                                    <img src="../images/testimonial-1.jpg" alt="Testimonial" class="rounded-circle" width="60" height="60">
                                </div>
                                <div class="ms-3">
                                    <h4 class="h5 mb-1">Jennifer R.</h4>
                                    <p class="text-muted mb-0">Consultant at BCG</p>
                                    <div class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <p>"As someone transitioning from engineering to consulting, I was concerned about my lack of business background. The SageArk Consulting program provided exactly what I needed—a solid foundation in business concepts, rigorous case practice, and honest feedback. Within three months, I secured offers from two top-tier consulting firms."</p>
                            <div class="d-flex align-items-center mt-4">
                                <span class="badge bg-light text-primary me-2">Consulting Program</span>
                                <small class="text-muted">Completed 8 months ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex mb-4">
                                <div class="flex-shrink-0">
                                    <img src="../images/testimonial-2.jpg" alt="Testimonial" class="rounded-circle" width="60" height="60">
                                </div>
                                <div class="ms-3">
                                    <h4 class="h5 mb-1">Jason K.</h4>
                                    <p class="text-muted mb-0">Software Engineer at Microsoft</p>
                                    <div class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <p>"After completing a coding bootcamp, I still struggled with data structures and algorithms required for technical interviews. The SageArk Software Engineering Program transformed my interview skills through its structured curriculum and rigorous practice. The mock interviews were incredibly realistic. I'm now at Microsoft, something I couldn't have achieved without this program."</p>
                            <div class="d-flex align-items-center mt-4">
                                <span class="badge bg-light text-primary me-2">Software Engineering Program</span>
                                <small class="text-muted">Completed 6 months ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- FAQ Section -->
        <div class="mb-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Frequently Asked Questions</h2>
                <p class="lead">Common questions about our career programs</p>
            </div>
            
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                    How are SageArk's programs different from online courses?
                                </button>
                            </h3>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">Unlike generic online courses, our programs offer several key advantages: 1) Live instruction from industry veterans who've worked at top firms, 2) Personalized feedback and coaching throughout your journey, 3) Industry-specific curriculum designed with input from actual hiring managers, 4) Extensive interview preparation with mock interviews and detailed feedback, and 5) Access to our alumni network and recruitment opportunities. Our focus is not just on knowledge transfer but on transforming you into a competitive candidate who can excel in interviews and on the job.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                    What is the time commitment required for these programs?
                                </button>
                            </h3>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">Most of our programs run for 8-16 weeks, with 2-3 hours of live instruction per week. Additionally, you should expect to spend 5-10 hours weekly on assignments, practice, and self-study. Our programs are designed to be compatible with full-time work or study, with sessions typically scheduled on weekday evenings and weekends. We also offer flexible scheduling options for one-on-one sessions and mock interviews. The specific time commitment varies by program, with technical programs like Software Engineering and Quantitative Finance generally requiring more practice time than non-technical programs.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                    Do I need specific prerequisites to join these programs?
                                </button>
                            </h3>
                            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">Prerequisites vary by program. For career transition programs like Consulting and Product Management, we typically look for candidates with strong analytical abilities and communication skills, regardless of background. For technical programs like Software Engineering, Data Science, and Quantitative Finance, some foundational knowledge is typically expected (e.g., basic programming for software engineering, mathematics for quant finance). However, we offer pre-program preparation resources to help you build any necessary foundational skills. Each program page details specific prerequisites, and we're happy to assess your readiness through a brief application or consultation.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                                    Do you offer job guarantees or income share agreements?
                                </button>
                            </h3>
                            <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">While we don't offer formal job guarantees, our track record speaks for itself with over 85% of our graduates securing relevant positions within three months of program completion. We do offer a satisfaction guarantee—if you're not satisfied with the program after the first two sessions, we'll provide a full refund. For financing options, we offer flexible payment plans and, for select programs, income share agreements where you pay a percentage of your salary after securing a job above a certain income threshold. Please contact our admissions team for specific details about financing options for your program of interest.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div id="contact" class="p-5 bg-light rounded">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fw-bold mb-3">Ready to Accelerate Your Career?</h2>
                    <p class="lead mb-4">Schedule a free consultation with our admissions team to find the right program for your career goals.</p>
                    
                    <form class="row g-3 justify-content-center">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-4">
                            <input type="email" class="form-control" placeholder="Email Address" required>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select" required>
                                <option value="" selected disabled>Program of Interest</option>
                                <option value="consulting">Consulting</option>
                                <option value="investment-banking">Investment Banking</option>
                                <option value="software-engineering">Software Engineering</option>
                                <option value="data-science">Data Science</option>
                                <option value="product-management">Product Management</option>
                                <option value="quant-finance">Quantitative Finance</option>
                                <option value="unsure">Not Sure Yet</option>
                            </select>
                        </div>
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-primary btn-lg px-5">Request Consultation</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <?php include('../includes/footer.php'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html> 