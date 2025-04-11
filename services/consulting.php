<?php
// Page variables
$page_title = "Consulting Careers Program | SageArk";
$meta_description = "Master case interviews, business frameworks, and structured problem-solving techniques used by top consulting firms with SageArk's Consulting Careers Program.";

// Set hero section variables
$resourceType = "CAREER PROGRAM";
$title = "Consulting Careers";
$subtitle = "Master case interviews and structured problem-solving techniques for top consulting roles";
$difficulty = "Intermediate";
$duration = "125";
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
    <link rel="stylesheet" href="../css/dark-mode.css">
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

<body class="preload service-detail-page">
    <?php include '../includes/nav.php'; ?>
    
    <!-- Include hero section template -->
    <?php include '../includes/hero-service.php'; ?>

    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                
                <!-- Program Overview -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Program Overview</h2>
                    <p>The SageArk Consulting Careers Program is designed to prepare students and early-career professionals for roles at top consulting firms including McKinsey, Bain, BCG, and other strategic consulting companies. This comprehensive program covers all aspects of the consulting recruitment process with a special focus on case interviews, the most challenging component of consulting applications.</p>
                    
                    <div class="alert alert-primary my-4">
                        <div class="d-flex">
                            <div class="me-3">
                                <i class="bi bi-info-circle-fill fs-4"></i>
                            </div>
                            <div>
                                <strong>Program Highlights:</strong> Our students have received offers from all MBB firms (McKinsey, Bain, BCG) and other top consultancies with a placement rate over 85% for those who complete the full program.
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- What You'll Learn -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">What You'll Learn</h2>
                    
                    <div class="row row-cols-1 g-4 mb-4">
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-1-circle text-primary me-2"></i>
                                        Case Interview Mastery
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Develop a structured approach to solving complex business cases. Learn frameworks for different case types (market entry, profitability, growth strategy, etc.) and practice applying them to real consulting scenarios.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-2-circle text-primary me-2"></i>
                                        Quantitative Analysis
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Sharpen your quantitative skills with training in mental math, business metrics, financial analysis, and data interpretation. Learn to perform calculations quickly while maintaining accuracy under pressure.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-3-circle text-primary me-2"></i>
                                        Communication Skills
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Refine your ability to communicate complex ideas clearly and concisely. Master techniques for presenting recommendations, crafting compelling narratives, and engaging clients effectively.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-4-circle text-primary me-2"></i>
                                        Behavioral Interview Preparation
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Prepare for fit interviews with coaching on how to showcase leadership, teamwork, problem-solving, and entrepreneurial qualities. Develop compelling stories from your experience that demonstrate consulting-relevant skills.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-5-circle text-primary me-2"></i>
                                        Industry Knowledge
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Build your understanding of key consulting concepts, industry terminology, and current business trends. Learn about the different types of consulting firms, their specialized areas, and how to align your application with their focus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Program Structure -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Program Structure</h2>
                    
                    <div class="accordion" id="programStructureAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Module 1: Foundations of Consulting
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="moduleOne" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Introduction to the consulting industry and career paths</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Overview of different consulting firms and their specializations</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> The consultant's toolkit: Essential frameworks and analytical approaches</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Building your consulting application strategy</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Module 2: Case Interview Fundamentals
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="moduleTwo" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Understanding case interview formats and evaluation criteria</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Structured problem-solving methodology</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Essential business frameworks (Profitability, Market Sizing, etc.)</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Communication techniques for case interviews</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Module 3: Quantitative Excellence
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="moduleThree" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Mental math techniques and practice drills</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Financial analysis for consultants</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Data interpretation and visualization</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Quantitative case practice with real-time feedback</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Module 4: Advanced Case Strategies
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="moduleFour" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Specialized case types (M&A, Operations, Digital Strategy)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Advanced frameworks and when to use them</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Handling ambiguity and unusual case scenarios</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Synthesis and recommendation development</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Module 5: Personal Branding & Interview Skills
                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="moduleFive" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Crafting a consulting-focused resume and cover letter</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Behavioral interview preparation (leadership, teamwork, impact)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Personal narrative development</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Networking strategies for consulting recruitment</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Program Details -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Program Details</h2>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h3 class="h5 card-title mb-3"><i class="bi bi-people-fill text-primary me-2"></i>Who This Program Is For</h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> College students & recent graduates</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> MBA candidates & graduate students</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Early-career professionals seeking to transition</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> Those with 0-5 years of work experience</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h3 class="h5 card-title mb-3"><i class="bi bi-award-fill text-primary me-2"></i>What You'll Receive</h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> 6 live group sessions (2 hours each)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> 4 one-on-one mock interviews with feedback</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Comprehensive case interview materials</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> Resume and cover letter review</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h3 class="h5 card-title mb-3"><i class="bi bi-calendar-check text-primary me-2"></i>Program Schedule</h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> 8-week structured program</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Weekly group sessions (weekday evenings)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Flexible scheduling for 1:1 sessions</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> Next cohort starts: Monthly</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h3 class="h5 card-title mb-3"><i class="bi bi-mortarboard-fill text-primary me-2"></i>Prerequisites</h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Bachelor's degree or current student</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Strong academic record</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Basic business knowledge (preferred)</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> Commitment to full program participation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Success Stories -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Success Stories</h2>
                    
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="bi bi-quote fs-1 text-primary opacity-50"></i>
                                </div>
                                <div>
                                    <p class="mb-2">The SageArk Consulting Careers Program transformed my interview preparation. The structured approach to case interviews and personalized feedback on my performance were invaluable. After completing the program, I felt confident handling any case thrown at me, which showed in my interviews. I'm thrilled to be joining Bain as an Associate Consultant!</p>
                                    <p class="fst-italic mb-0">— Michael S., Associate Consultant, Bain & Company</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="bi bi-quote fs-1 text-primary opacity-50"></i>
                                </div>
                                <div>
                                    <p class="mb-2">As someone transitioning from engineering to consulting, I was concerned about my lack of business background. The SageArk program provided exactly what I needed—a solid foundation in business concepts, rigorous case practice, and honest feedback about my strengths and areas for improvement. Within three months, I secured offers from two top-tier consulting firms.</p>
                                    <p class="fst-italic mb-0">— Jennifer R., Consultant, Strategy&</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Section -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Frequently Asked Questions</h2>
                    
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                    Do I need prior consulting knowledge to join this program?
                                </button>
                            </h3>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">No, prior consulting knowledge is not required. Our program is designed to take you from the fundamentals to advanced case interview skills. While some basic business understanding is helpful, we've successfully worked with students from various backgrounds including liberal arts, engineering, and sciences. If you're completely new to business concepts, we recommend reviewing some basic business terminology before starting the program.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                    How is this program different from using case interview books?
                                </button>
                            </h3>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">While books provide theoretical knowledge, our program offers personalized feedback and real-time coaching that books simply cannot. The live practice with experienced consultants who have conducted actual interviews at top firms allows you to refine your approach, correct bad habits early, and learn the subtle elements of successful case interviews. Our structured curriculum also ensures you systematically build your skills rather than practicing randomly.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                    What is your success rate for placements?
                                </button>
                            </h3>
                            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">Over 85% of students who complete our full program receive at least one offer from a consulting firm, with about 60% receiving offers from MBB firms (McKinsey, Bain, BCG). However, outcomes depend significantly on factors including academic background, work experience, and target firms. Our program significantly improves your chances, but success ultimately depends on your dedication to the preparation process and how well you implement the feedback provided.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                                    How much time should I commit to this program weekly?
                                </button>
                            </h3>
                            <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">For optimal results, we recommend dedicating 8-10 hours per week to the program. This includes attending live sessions (2-3 hours), individual practice (3-4 hours), and completing assignments (2-3 hours). Students who put in consistent practice throughout the program see the best results. The program is designed to be compatible with full-time studies or work, with evening and weekend scheduling options.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- CTA Section -->
                <div id="contact" class="mb-5 p-5 bg-light rounded">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold mb-3">Ready to Launch Your Consulting Career?</h2>
                        <p class="mb-4">Enroll now to secure your spot in our next cohort. Space is limited to ensure personalized attention.</p>
                    </div>
                    
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="phone">
                            </div>
                            
                            <div class="col-12">
                                <label for="background" class="form-label">Current Status</label>
                                <select class="form-select" id="background" required>
                                    <option value="" selected disabled>Select your current status</option>
                                    <option value="undergraduate">Undergraduate Student</option>
                                    <option value="graduate">Graduate Student</option>
                                    <option value="professional">Working Professional</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <div class="col-12">
                                <label for="message" class="form-label">Why are you interested in consulting?</label>
                                <textarea class="form-control" id="message" rows="3" required></textarea>
                            </div>
                            
                            <div class="col-12 text-center mt-4">
                                <button class="btn btn-primary btn-lg px-5" type="submit">Enroll Now</button>
                            </div>
                        </div>
                    </form>
                </div>
                
                <!-- Related Services -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Related Programs & Services</h2>
                    
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="h5 card-title">
                                        <i class="bi bi-briefcase-fill text-primary me-2"></i>
                                        <a href="investment-banking.php" class="text-decoration-none">Investment Banking Program</a>
                                    </h3>
                                    <p class="card-text">Prepare for a career in investment banking with our comprehensive training program.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="h5 card-title">
                                        <i class="bi bi-people-fill text-primary me-2"></i>
                                        <a href="../resources/consulting-101.php" class="text-decoration-none">Consulting 101 Resource Guide</a>
                                    </h3>
                                    <p class="card-text">Access our free resource guide on consulting fundamentals and interview preparation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include('../includes/footer.php'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html> 