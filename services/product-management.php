<?php
// Page variables
$page_title = "Product Management Program | SageArk";
$meta_description = "Master product strategy, user-centered design, and technical implementation with SageArk's Product Management Program to secure roles at top technology companies.";

// Set hero section variables
$resourceType = "CAREER PROGRAM";
$title = "Product Management";
$subtitle = "Master product strategy, user experience, and execution to lead successful tech products";
$difficulty = "Intermediate";
$duration = "32";
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
    <!-- Include the navigation -->
    <?php include '../includes/nav.php'; ?>
    <?php include '../includes/hero-service.php'; ?>

    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                
                <!-- Program Overview -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Program Overview</h2>
                    <p>The SageArk Product Management Program prepares ambitious professionals to excel in the multifaceted role of product management at leading technology companies. This comprehensive program combines strategic thinking, user-centered design, technical understanding, and business acumen to equip you with the skills needed to drive product development from concept to launch and beyond.</p>
                    
                    <div class="alert alert-primary my-4">
                        <div class="d-flex">
                            <div class="me-3">
                                <i class="bi bi-info-circle-fill fs-4"></i>
                            </div>
                            <div>
                                <strong>Program Highlights:</strong> Our graduates have secured product management positions at companies including Google, Amazon, Microsoft, Uber, Airbnb, and numerous high-growth startups, with a placement rate exceeding 80% for those who complete all program components.
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
                                        Product Strategy & Roadmapping
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Develop the skills to craft compelling product visions and translate them into executable roadmaps. Learn frameworks for market analysis, opportunity sizing, competitive positioning, and prioritization. Master the art of balancing business goals with user needs and technical constraints.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-2-circle text-primary me-2"></i>
                                        User Experience & Design Thinking
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Master the principles of user-centered design and learn to identify user pain points and needs. Develop skills in user research, persona development, journey mapping, and rapid prototyping. Learn to collaborate effectively with designers and translate user insights into product requirements.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-3-circle text-primary me-2"></i>
                                        Technical Fluency
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Build the technical understanding needed to work effectively with engineering teams. Learn the fundamentals of software development, data structures, APIs, and system design. Develop the ability to make informed technical trade-offs and communicate effectively with developers.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-4-circle text-primary me-2"></i>
                                        Product Analytics & Experimentation
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Learn to leverage data to drive product decisions. Master the skills of defining metrics, building dashboards, and designing experiments. Develop proficiency in A/B testing, funnel analysis, cohort analysis, and feature evaluation to make data-informed product improvements.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-5-circle text-primary me-2"></i>
                                        Product Execution & Leadership
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Develop the skills to effectively lead cross-functional teams and drive product execution. Learn stakeholder management, effective communication, project management, and decision-making frameworks. Master the art of influencing without authority and mobilizing teams around a shared vision.</p>
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
                                    Module 1: Product Management Foundations
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="moduleOne" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> The product management role and career path</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Product lifecycles and development methodologies</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Market research and competitive analysis</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Building a compelling product vision</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Module 2: User-Centered Product Design
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="moduleTwo" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> User research methods and interview techniques</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Creating personas and user journey maps</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Wireframing, prototyping, and usability testing</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Writing effective user stories and requirements</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Module 3: Product Strategy & Roadmapping
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="moduleThree" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Strategies for identifying market opportunities</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Prioritization frameworks (RICE, Kano, etc.)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Building and communicating product roadmaps</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Go-to-market planning and execution</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Module 4: Technical Product Management
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="moduleFour" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Software development fundamentals for PMs</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> APIs, databases, and system architecture</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Working with engineering teams effectively</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Making technical trade-offs and managing technical debt</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Module 5: Data-Driven Product Management
                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="moduleFive" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Defining and tracking product metrics</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> A/B testing and experimentation frameworks</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Analytics tools and dashboards</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Using data to inform product decisions</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Module 6: Product Leadership & Career Development
                                </button>
                            </h3>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="moduleSix" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Stakeholder management and communication</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> PM interview preparation and case studies</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Building your PM portfolio and resume</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Career progression and specializations in product</li>
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
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Early-career professionals looking to transition to PM</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Engineers, designers, and analysts seeking PM roles</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Recent graduates with technical or business backgrounds</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> Junior PMs looking to advance their careers</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h3 class="h5 card-title mb-3"><i class="bi bi-award-fill text-primary me-2"></i>What You'll Receive</h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> 12 live workshop sessions (2 hours each)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> 4 product case study exercises with feedback</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> 3 mock PM interviews with industry veterans</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> Resume and portfolio review</li>
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
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> 12-week structured program</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Weekly sessions (weekday evenings)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Flexible scheduling for case studies and interviews</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> New cohorts start quarterly</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h3 class="h5 card-title mb-3"><i class="bi bi-mortarboard-fill text-primary me-2"></i>Prerequisites</h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Bachelor's degree or equivalent experience</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Basic understanding of technology products</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Problem-solving and analytical thinking skills</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> Passion for creating user-focused products</li>
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
                                    <p class="mb-2">As a software engineer, I had technical skills but struggled to articulate product thinking in PM interviews. The SageArk Product Management Program transformed my approach by teaching me how to structure product solutions around user needs and business outcomes. The case study exercises were challenging but incredibly effective at developing my strategic thinking. The mock interviews were spot-on—the questions and feedback prepared me perfectly for the real thing. I'm now a PM at Microsoft working on Azure, and I use frameworks from the program daily.</p>
                                    <p class="fst-italic mb-0">— David L., Product Manager, Microsoft</p>
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
                                    <p class="mb-2">I came from a marketing background and was worried about the technical aspects of product management. The program's technical module provided exactly the right level of engineering knowledge needed to collaborate effectively with developers. The roadmapping and prioritization frameworks completely changed how I approach product decisions. Most importantly, the instructors provided personalized guidance that helped me craft a compelling narrative around my transferable skills. After completing the program, I received PM offers from three companies and joined Airbnb, where I'm now leading a team working on host experience features.</p>
                                    <p class="fst-italic mb-0">— Michelle K., Product Manager, Airbnb</p>
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
                                    Do I need a technical background to succeed in this program?
                                </button>
                            </h3>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">While a technical background can be helpful, it's not required. Our program is designed to provide the technical foundation necessary for product managers, regardless of your starting point. We've had successful graduates from diverse backgrounds including marketing, consulting, design, and business. What's most important is your ability to think critically, understand user needs, and communicate effectively. That said, participants with non-technical backgrounds should be prepared to put in extra effort during the technical modules to build their fluency in these areas.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                    How is this program different from other PM courses?
                                </button>
                            </h3>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">Our program differentiates itself in several key ways: 1) It's led by instructors with extensive PM experience at top tech companies who bring real-world case studies and scenarios, 2) We focus on hands-on application through case studies and projects rather than just theory, 3) We provide personalized feedback and coaching throughout the program, including resume and portfolio reviews, 4) Our curriculum covers both the strategic and technical aspects of product management, and 5) We place special emphasis on interview preparation, providing multiple mock interviews with detailed feedback. Additionally, our alumni network provides ongoing support and connections after program completion.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                    How difficult is it to transition into product management?
                                </button>
                            </h3>
                            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">Transitioning into product management can be challenging, particularly at top tech companies, but it's definitely achievable with the right preparation. The difficulty varies depending on your background, target companies, and location. Those coming from adjacent roles (engineering, design, data analysis) typically find the transition smoother than those from unrelated fields. The key challenges include: demonstrating product thinking without PM experience, competing with experienced PMs, and navigating complex interview processes. Our program addresses these challenges by helping you leverage your existing skills, build a product portfolio, and master the interview process. With our structured approach, over 80% of our career-switching graduates successfully transition into PM roles.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                                    What types of projects will I work on during the program?
                                </button>
                            </h3>
                            <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">Throughout the program, you'll work on a variety of projects that mirror real-world product management responsibilities. These include: 1) Market analysis and opportunity sizing for a new product area, 2) User research and persona development for a specific user segment, 3) Creating a product roadmap with prioritized features and initiatives, 4) Defining metrics and an experimentation plan for a product launch, and 5) A comprehensive capstone project where you'll develop a complete product strategy and specification for a new feature or product. These projects are designed to build your PM portfolio and provide concrete examples to discuss in interviews. You'll receive detailed feedback on each project from instructors who have evaluated similar work in their roles at tech companies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Move the CTA section outside of the container -->
    <?php include '../includes/cta.php'; ?>
    
    <!-- Re-open the default container for Related Programs -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Related Services -->
                <div class="mb-5 mt-5">
                    <h2 class="fw-bold mb-4">Related Programs & Services</h2>
                    
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="h5 card-title">
                                        <i class="bi bi-code-slash text-primary me-2"></i>
                                        <a href="software-engineer.php" class="text-decoration-none">Software Engineering Program</a>
                                    </h3>
                                    <p class="card-text">Master programming fundamentals, algorithms, and system design for software engineering roles at top tech companies.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="h5 card-title">
                                        <i class="bi bi-graph-up text-primary me-2"></i>
                                        <a href="data-science.php" class="text-decoration-none">Data Science Program</a>
                                    </h3>
                                    <p class="card-text">Develop the analytical and technical skills needed for roles in data science and analytics.</p>
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