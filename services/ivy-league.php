<?php
// Page variables
$page_title = "Ivy League Admissions Package | SageArk";
$meta_description = "Gain a competitive edge in Ivy League and top-tier university admissions with SageArk's comprehensive admissions consulting, essay development, and interview preparation.";

// Set hero section variables
$resourceType = "SPECIALIZED SERVICE";
$title = "Ivy League Admissions";
$subtitle = "Strategic guidance for gaining admission to elite universities";
$difficulty = "Top-tier Support";
$duration = "Comprehensive Strategy";
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

<body class="preload service-detail-page">
    <!-- Include the navigation -->
    <?php include '../includes/nav.php'; ?>
    <?php include '../includes/hero-service.php'; ?>

    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                
                <!-- Program Overview -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Program Overview</h2>
                    <p>The SageArk Ivy League Admissions Package provides comprehensive, personalized guidance for students aspiring to gain admission to Ivy League universities and other elite institutions. Our approach combines strategic planning, deep expertise in the admissions process, and personalized mentorship from former admissions officers and successful alumni from these prestigious institutions.</p>
                    
                    <div class="alert alert-primary my-4">
                        <div class="d-flex">
                            <div class="me-3">
                                <i class="bi bi-info-circle-fill fs-4"></i>
                            </div>
                            <div>
                                <strong>Results That Speak:</strong> Our students have achieved a 95% success rate in securing admission to at least one Ivy League or equivalent top-10 university, with placements at Harvard, Princeton, Yale, Stanford, MIT, Columbia, and other elite institutions. This is compared to the average acceptance rate of under 5% at these universities.
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- What's Included -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">What's Included in Your Package</h2>
                    
                    <div class="row row-cols-1 g-4 mb-4">
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-1-circle text-primary me-2"></i>
                                        Strategic Admissions Planning
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Develop a customized roadmap for your admissions journey. We'll help you select the right universities based on your profile, strengths, and goals, create a strategic timeline for applications, and identify key opportunities to differentiate yourself in a competitive applicant pool.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-2-circle text-primary me-2"></i>
                                        Personal Narrative Development
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Craft a compelling personal story that connects your experiences, achievements, and aspirations. Our experts will help you identify and articulate your unique strengths, passions, and contributions in ways that resonate with admissions committees and stand out among thousands of applications.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-3-circle text-primary me-2"></i>
                                        Essay Excellence Program
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Master the art of writing powerful admissions essays through our structured process. Receive unlimited essay reviews, detailed feedback, and guidance from expert writers and former admissions officers who understand what makes essays compelling at elite institutions.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-4-circle text-primary me-2"></i>
                                        Interview Preparation & Coaching
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Build confidence and polish your interview skills with comprehensive preparation. Participate in multiple mock interviews with detailed feedback, learn strategies for answering common and challenging questions, and develop techniques to showcase your strengths authentically.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-5-circle text-primary me-2"></i>
                                        Extracurricular & Leadership Enhancement
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Strategically strengthen your profile through targeted extracurricular activities and leadership development. We'll help you identify meaningful opportunities that align with your interests, make an impact, and demonstrate your potential to contribute to campus communities.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Program Structure -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Our Approach: The SageArk Method</h2>
                    
                    <div class="accordion" id="programStructureAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="phaseOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Phase 1: Discovery & Strategy (Months 1-2)
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="phaseOne" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Comprehensive student assessment and profile evaluation</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Personality and strengths identification</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> University selection and application strategy</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Development of personalized admissions roadmap</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="phaseTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Phase 2: Personal Narrative & Profile Building (Months 3-5)
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="phaseTwo" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Development of personal narrative framework</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Extracurricular activity selection and enhancement</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Leadership project planning and execution</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Early preparation for standardized tests (if applicable)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="phaseThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Phase 3: Application Development (Months 6-8)
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="phaseThree" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Common Application and supplemental application guidance</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Essay brainstorming, drafting, and revision workshops</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Activity list and resume optimization</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Letter of recommendation strategy</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="phaseFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Phase 4: Final Preparation & Submission (Months 9-10)
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="phaseFour" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Final essay polishing and application review</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Interview preparation and multiple mock interviews</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Application submission strategy and timeline</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Early decision/early action guidance</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="phaseFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Phase 5: Decision & Enrollment Optimization (Months 11-12)
                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="phaseFive" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Waitlist and deferral strategies (if needed)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Financial aid and scholarship application guidance</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Decision evaluation and university selection</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Pre-matriculation preparation and guidance</li>
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
                                    <h3 class="h5 card-title mb-3"><i class="bi bi-people-fill text-primary me-2"></i>Ideal For</h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> High school students (sophomores, juniors, seniors)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Transfer students seeking admission to elite universities</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> International students applying to US universities</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> Gap year students with exceptional potential</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h3 class="h5 card-title mb-3"><i class="bi bi-award-fill text-primary me-2"></i>What You'll Receive</h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> 24 one-on-one mentoring sessions</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Unlimited essay reviews and application support</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> 5 mock interviews with detailed feedback</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> Direct access to advisors via email/messaging</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h3 class="h5 card-title mb-3"><i class="bi bi-calendar-check text-primary me-2"></i>Program Timeline</h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Comprehensive 8-12 month program</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Ideal start: Junior year or earlier</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Accelerated options available for seniors</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> Year-round enrollment</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h3 class="h5 card-title mb-3"><i class="bi bi-mortarboard-fill text-primary me-2"></i>Target Universities</h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> All Ivy League universities</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Stanford, MIT, Caltech, UChicago</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Top liberal arts colleges</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> Other elite institutions worldwide</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Meet Your Advisors -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Meet Your Advisors</h2>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex mb-3">
                                        <div class="flex-shrink-0">
                                            <img src="../images/advisor-1.jpg" alt="Dr. Emily Chen" class="rounded-circle" width="80" height="80">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h3 class="h5 mb-1">Dr. Emily Chen</h3>
                                            <p class="text-muted mb-0">Former Admissions Officer, Harvard University</p>
                                        </div>
                                    </div>
                                    <p>Dr. Chen spent 8 years evaluating applications for Harvard's undergraduate admissions office, where she reviewed thousands of applications and served on the admissions committee. She holds a Ph.D. in Education from Harvard and specializes in helping students develop authentic narratives that stand out in competitive applicant pools.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex mb-3">
                                        <div class="flex-shrink-0">
                                            <img src="../images/advisor-2.jpg" alt="Jonathan Rivera" class="rounded-circle" width="80" height="80">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h3 class="h5 mb-1">Jonathan Rivera</h3>
                                            <p class="text-muted mb-0">Yale Alumni Interviewer & Education Consultant</p>
                                        </div>
                                    </div>
                                    <p>Jonathan graduated from Yale with honors and has since conducted over 200 admissions interviews for his alma mater. With a background in both education and management consulting, he brings analytical rigor to the admissions process and specializes in interview preparation and personal narrative development.</p>
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
                                    <p class="mb-2">Working with SageArk completely transformed my application journey. As a student from a public high school without many resources, I needed guidance navigating the complex Ivy League admissions process. My advisor helped me identify unique aspects of my background and experiences that I hadn't even considered highlighting. Through countless draft reviews and brainstorming sessions, we crafted essays that genuinely reflected who I am. When I received acceptance letters from both Yale and Princeton, I knew it was because I had presented my authentic self. I'm now finishing my sophomore year at Princeton and still use the communication skills I developed during my time with SageArk.</p>
                                    <p class="fst-italic mb-0">— Maya J., Princeton University, Class of 2025</p>
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
                                    <p class="mb-2">As an international student, I found the American university application process overwhelming and confusing. My SageArk advisor not only explained every step clearly but also helped me understand the cultural context behind the application components. The essay development process was invaluable—we went through 11 drafts of my personal statement, and each iteration better captured my voice and story. The mock interviews were incredibly realistic and prepared me for everything I encountered in my actual alumni interviews. I ultimately received offers from Stanford, Columbia, and Penn, and I'm now studying Computer Science at Stanford. I recommend SageArk to anyone serious about attending a top university in the United States.</p>
                                    <p class="fst-italic mb-0">— Raj P., Stanford University, Class of 2024</p>
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
                                    When should we ideally begin the program?
                                </button>
                            </h3>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">For optimal results, we recommend beginning the program during sophomore or junior year of high school. This timeline allows ample opportunity to develop a strategic plan, enhance extracurricular activities, prepare for standardized tests, and craft exceptional essays without rushing. However, we also offer accelerated programs for seniors and transfer students who are closer to application deadlines. The earlier you begin, the more comprehensive our approach can be, particularly for profile-building activities that may take months to develop meaningfully.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                    How is your program different from other admissions consulting services?
                                </button>
                            </h3>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">Our program distinguishes itself in several key ways: 1) Our advisors have direct experience in Ivy League admissions offices or as alumni interviewers, providing insider perspectives; 2) We take a holistic approach that begins with deep personal discovery rather than simply packaging existing achievements; 3) We limit each advisor's client load to ensure personalized attention; 4) Our essay development process involves unlimited revisions with guidance from both admissions experts and professional writers; and 5) We focus on authenticity rather than trying to mold students into what we think colleges want. Additionally, our 95% success rate for placement at top-tier universities significantly exceeds industry averages.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                    Do you write essays for students?
                                </button>
                            </h3>
                            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">No, we never write essays for students, as this would be both unethical and counterproductive to the admissions process. Universities want to hear authentic student voices, and admissions officers are skilled at identifying essays written by others. Instead, we guide students through a structured process of reflection, brainstorming, drafting, and revision. Our advisors provide detailed feedback, ask thought-provoking questions, and help students refine their ideas and writing style. This collaborative approach ensures essays remain genuine while helping students present themselves in the most compelling way possible. The final product is always 100% the student's own work—just the best version of it.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                                    What if I'm not accepted to an Ivy League school?
                                </button>
                            </h3>
                            <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">While our track record demonstrates exceptional success, we recognize that Ivy League admissions remain highly competitive and no outcome can be guaranteed. Our program includes creating a balanced portfolio of reach, target, and safety schools to ensure multiple excellent options. If a student is not accepted to their top-choice institutions, we provide comprehensive support for evaluating alternatives, pursuing waitlist opportunities, considering gap years, or planning transfer applications. Many students who initially attend other universities successfully transfer to Ivy League institutions with our continued guidance. Additionally, the skills and personal growth developed through our program benefit students regardless of where they ultimately enroll.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- CTA Section -->
                <div id="contact" class="mb-5 p-5 bg-light rounded">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold mb-3">Begin Your Ivy League Journey</h2>
                        <p class="mb-4">Schedule a free 30-minute consultation to discuss your goals and learn how our program can help you achieve them.</p>
                    </div>
                    
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="parentName" class="form-label">Parent/Guardian Name</label>
                                <input type="text" class="form-control" id="parentName" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="studentName" class="form-label">Student Name</label>
                                <input type="text" class="form-control" id="studentName" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="phone">
                            </div>
                            
                            <div class="col-md-6">
                                <label for="grade" class="form-label">Current Grade Level</label>
                                <select class="form-select" id="grade" required>
                                    <option value="" selected disabled>Select grade level</option>
                                    <option value="freshman">High School Freshman</option>
                                    <option value="sophomore">High School Sophomore</option>
                                    <option value="junior">High School Junior</option>
                                    <option value="senior">High School Senior</option>
                                    <option value="gap">Gap Year Student</option>
                                    <option value="transfer">College Transfer Student</option>
                                </select>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="timeline" class="form-label">Application Timeline</label>
                                <select class="form-select" id="timeline" required>
                                    <option value="" selected disabled>Select timeline</option>
                                    <option value="year_plus">More than 1 year before applying</option>
                                    <option value="within_year">Within 1 year of applying</option>
                                    <option value="current">Currently applying</option>
                                </select>
                            </div>
                            
                            <div class="col-12">
                                <label for="message" class="form-label">Tell us about your college aspirations</label>
                                <textarea class="form-control" id="message" rows="3" required></textarea>
                            </div>
                            
                            <div class="col-12 text-center mt-4">
                                <button class="btn btn-primary btn-lg px-5" type="submit">Request Consultation</button>
                            </div>
                        </div>
                    </form>
                </div>
                
                <!-- Related Services -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Related Services</h2>
                    
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="h5 card-title">
                                        <i class="bi bi-journal-text text-primary me-2"></i>
                                        <a href="essay-development.php" class="text-decoration-none">Essay Development Package</a>
                                    </h3>
                                    <p class="card-text">Focused guidance on crafting standout application essays for elite universities and scholarship applications.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="h5 card-title">
                                        <i class="bi bi-mortarboard-fill text-primary me-2"></i>
                                        <a href="scholarship-coaching.php" class="text-decoration-none">Scholarship Coaching</a>
                                    </h3>
                                    <p class="card-text">Strategic guidance to identify and secure prestigious scholarships and financial aid opportunities.</p>
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