<?php
// Enable error reporting during development
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Page title
$page_title = "Consulting 101 Guide | SageArk";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/dark-mode.css">
    <link rel="stylesheet" href="../css/resources.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <meta name="description" content="Essential introduction to management consulting fundamentals and career preparation, part of the SageArk Career Program">
</head>

<body class="preload resource-detail-page">
    <!-- Include the navigation -->
    <?php include '../includes/nav.php'; ?>
    
    <!-- Hero Section -->
    <section class="page-hero">
        <div class="container">
            <div class="hero-content text-center">
                <div class="resource-type-badge">GUIDE</div>
                <h1>Consulting 101</h1>
                <p class="resources-subtitle">A concise introduction to management consulting fundamentals and career preparation</p>
                <div class="resource-metadata">
                    <div class="metadata-item">
                        <i class="far fa-calendar-alt"></i> Last Updated: August 2025
                    </div>
                    <div class="metadata-item">
                        <i class="far fa-clock"></i> Reading Time: 12 minutes
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Introduction to Management Consulting</h2>
                    <p>Management consulting helps organizations improve performance through analysis of business problems and development of improvement plans. This guide introduces key consulting concepts, frameworks, and career preparation steps for aspiring consultants.</p>
                    
                    <div class="alert alert-primary my-4">
                        <div class="d-flex">
                            <div class="me-3">
                                <i class="bi bi-info-circle-fill fs-4"></i>
                            </div>
                            <div>
                                <strong>Note:</strong> This guide is part of the SageArk Career Program, providing specialized content for consulting careers while complementing our broader career development resources.
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Guide Components</h2>
                    
                    <div class="row row-cols-1 g-4 mb-4">
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-1-circle text-primary me-2"></i>
                                        Consulting Industry Overview
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>A brief introduction to consulting firm types (MBB, Big 4, boutique), common practice areas, and industry trends. This section helps you understand the landscape of the consulting industry and identify potential career paths.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-2-circle text-primary me-2"></i>
                                        Essential Consulting Frameworks
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Introduction to key analytical tools used by consultants, including strategic frameworks (Porter's Five Forces, BCG Matrix), operational analysis methods, and financial models that form the foundation of consulting work.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-3-circle text-primary me-2"></i>
                                        Core Consulting Skills
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Overview of the fundamental skills every consultant needs: structured problem-solving, data analysis, business communication, and client management. This section focuses on the professional capabilities that differentiate successful consultants.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-4-circle text-primary me-2"></i>
                                        Case Interview Basics
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Introduction to case interview formats, basic frameworks, and preparation strategies with sample cases. Learn how to approach the unique consulting interview process and demonstrate your problem-solving abilities.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-5-circle text-primary me-2"></i>
                                        Career Development Roadmap
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>A structured approach to consulting career preparation, from initial industry exploration to application strategy. This section provides a timeline and actionable steps for positioning yourself as a strong consulting candidate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Key Consulting Concepts</h2>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Concept</th>
                                    <th>Description</th>
                                    <th>Application</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Structured Problem-Solving</strong></td>
                                    <td>MECE principle (Mutually Exclusive, Collectively Exhaustive) and issue trees</td>
                                    <td>Breaking down complex business problems into manageable components without gaps or overlaps</td>
                                </tr>
                                <tr>
                                    <td><strong>Hypothesis-Driven Approach</strong></td>
                                    <td>Forming initial hypotheses and testing them through targeted analysis</td>
                                    <td>Efficiently solving business problems by focusing analysis on the most likely causes</td>
                                </tr>
                                <tr>
                                    <td><strong>Pyramid Principle</strong></td>
                                    <td>Communication framework that structures information hierarchically</td>
                                    <td>Creating clear, concise presentations that start with key messages followed by supporting points</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">SageArk Career Program Integration</h2>
                    <p>This Consulting 101 Guide is a cornerstone resource within our comprehensive Career Program.</p>
                    
                    <div class="accordion" id="careerProgramAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Career Exploration
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#careerProgramAccordion">
                                <div class="accordion-body">
                                    <p>This guide helps students determine if consulting aligns with their interests and strengths, as the first step in the SageArk career discovery process. You'll gain insights into the day-to-day work of consultants and the various specializations within the field.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Skill Development
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#careerProgramAccordion">
                                <div class="accordion-body">
                                    <p>Integrates with our broader skill-building resources, providing industry-specific applications for the fundamental professional skills taught in the Career Program. The guide connects core consulting competencies with practical development exercises.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Interview Preparation
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#careerProgramAccordion">
                                <div class="accordion-body">
                                    <p>Connects with our comprehensive interview preparation modules, with specialized focus on consulting's unique case interview format. You'll learn structured approaches to case interviews and practice with sample cases.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Career Launch
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#careerProgramAccordion">
                                <div class="accordion-body">
                                    <p>Works alongside our career coaching and networking resources to provide a complete preparation system for consulting recruitment. The guide includes strategies for building relationships with target firms and standing out in the application process.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Student Success Stories</h2>
                    
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="bi bi-quote fs-1 text-primary opacity-50"></i>
                                </div>
                                <div>
                                    <p class="mb-2">The Consulting 101 Guide gave me a clear understanding of the industry and what to expect. Combined with the SageArk Career Program resources, I was fully prepared for my interviews and landed my dream consulting role.</p>
                                    <p class="fst-italic mb-0">— Alex T., SageArk Career Program Graduate</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Frequently Asked Questions</h2>
                    
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                    How does this guide fit into the SageArk Career Program?
                                </button>
                            </h3>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>The Consulting 101 Guide is one of several industry-specific resources in our Career Program. It provides specialized content for consulting careers while complementing our broader career development resources.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                    Is this guide suitable for beginners?
                                </button>
                            </h3>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Absolutely. We've designed the guide to be accessible to students with no prior consulting or business background, while still providing valuable insights for those with some industry knowledge.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                    Can I purchase just this guide without the full Career Program?
                                </button>
                            </h3>
                            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Yes, the Digital Edition provides the complete Consulting 101 Guide as a standalone resource. However, for comprehensive career preparation, we recommend the Career Program Bundle.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Related Resources</h2>
                    
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="h5 card-title">
                                        <i class="bi bi-book text-primary me-2"></i>
                                        <a href="/resources/case-interview.php" class="text-decoration-none">Case Interview Mastery</a>
                                    </h3>
                                    <p class="card-text">Advanced strategies and practice cases for consulting interviews.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="h5 card-title">
                                        <i class="bi bi-journal-text text-primary me-2"></i>
                                        <a href="/resources/networking.php" class="text-decoration-none">Professional Networking Guide</a>
                                    </h3>
                                    <p class="card-text">Build meaningful professional relationships to advance your consulting career.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Include the CTA Section -->
    <?php include '../includes/cta.php'; ?>

    <!-- Include the footer -->
    <?php include '../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html> 