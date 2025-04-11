<?php
// Enable error reporting during development
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Page title
$page_title = "SAT/ACT Strategies Guide | SageArk";
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
    
    <meta name="description" content="Comprehensive strategies for SAT and ACT test preparation, part of the SageArk Career Program">
</head>

<body class="preload resource-detail-page">
    <!-- Include the navigation -->
    <?php include '../includes/nav.php'; ?>
    
    <div class="hero-section bg-primary text-white py-5 mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <span class="badge bg-accent text-white mb-3">GUIDE</span>
                    <h1 class="display-4 fw-bold mb-3">SAT/ACT Strategies</h1>
                    <p class="lead mb-4 text-white opacity-90">Proven approaches to maximize your scores on college entrance exams</p>
                    <div class="d-flex justify-content-center align-items-center small text-white-50">
                        <div class="me-3">
                            <i class="bi bi-clock me-1"></i> Last updated: November 2023
                        </div>
                        <div>
                            <i class="bi bi-book me-1"></i> 15 min read
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Understanding Standardized Tests</h2>
                    <p>The SAT and ACT are standardized tests used by colleges and universities to assess academic readiness for higher education. These tests evaluate your knowledge and skills in key areas while providing colleges with a common data point for comparing applicants. This guide introduces effective strategies for both tests and provides a structured preparation approach to help you achieve your target scores.</p>
                    
                    <div class="alert alert-primary my-4">
                        <div class="d-flex">
                            <div class="me-3">
                                <i class="bi bi-info-circle-fill fs-4"></i>
                            </div>
                            <div>
                                <strong>Note:</strong> This guide is part of the SageArk Career Program, providing specialized content for college admissions while complementing our broader educational resources.
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Test Comparison: SAT vs. ACT</h2>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Feature</th>
                                    <th>SAT</th>
                                    <th>ACT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Sections</strong></td>
                                    <td>Reading, Writing and Language, Math (No Calculator & Calculator)</td>
                                    <td>English, Math, Reading, Science, Writing (optional)</td>
                                </tr>
                                <tr>
                                    <td><strong>Total Time</strong></td>
                                    <td>3 hours</td>
                                    <td>2 hours, 55 minutes (without Writing)<br>3 hours, 35 minutes (with Writing)</td>
                                </tr>
                                <tr>
                                    <td><strong>Scoring</strong></td>
                                    <td>400-1600 scale (200-800 per section)</td>
                                    <td>1-36 scale (average of 4 section scores)</td>
                                </tr>
                                <tr>
                                    <td><strong>Math Content</strong></td>
                                    <td>Stronger focus on algebra and data analysis</td>
                                    <td>More comprehensive, includes trigonometry</td>
                                </tr>
                                <tr>
                                    <td><strong>Science</strong></td>
                                    <td>No dedicated science section</td>
                                    <td>Dedicated science section focusing on interpretation of data</td>
                                </tr>
                                <tr>
                                    <td><strong>Pacing</strong></td>
                                    <td>More time per question</td>
                                    <td>Faster pace, more questions in less time</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Core Content Areas</h2>
                    
                    <div class="row row-cols-1 g-4 mb-4">
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-1-circle text-primary me-2"></i>
                                        Reading Comprehension
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Both tests assess your ability to understand, analyze, and draw conclusions from complex passages. You'll encounter different text types including literature, social science, humanities, and natural science. Key skills include identifying main ideas, understanding relationships, and interpreting evidence.</p>
                                    <div class="alert alert-light border mt-3">
                                        <strong>Strategy Focus:</strong> Develop active reading techniques and learn to efficiently extract key information from passages without getting bogged down in details.
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-2-circle text-primary me-2"></i>
                                        Grammar & Writing
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>The SAT Writing and Language section and ACT English section test your understanding of standard written English. Questions focus on grammar rules, punctuation, sentence structure, rhetorical skills, and organization of ideas within paragraphs and essays.</p>
                                    <div class="alert alert-light border mt-3">
                                        <strong>Strategy Focus:</strong> Master the fundamental grammar rules that appear most frequently, and practice identifying common error patterns in sentence construction.
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-3-circle text-primary me-2"></i>
                                        Mathematics
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Both tests cover algebra, problem-solving, data analysis, and some geometry. The ACT includes more advanced math concepts like trigonometry and matrices. The SAT has a no-calculator section in addition to a calculator-permitted section.</p>
                                    <div class="alert alert-light border mt-3">
                                        <strong>Strategy Focus:</strong> Build computational fluency, learn to recognize problem types, and develop multiple solution approaches for efficiency.
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-4-circle text-primary me-2"></i>
                                        Science (ACT)
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>The ACT Science section tests your ability to interpret, analyze, and evaluate scientific information. It focuses on data representation, research summaries, and conflicting viewpoints rather than specific scientific knowledge.</p>
                                    <div class="alert alert-light border mt-3">
                                        <strong>Strategy Focus:</strong> Practice analyzing graphs, tables, and research descriptions without getting distracted by complex terminology.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Preparation Strategy</h2>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="h5 fw-bold mb-0">Diagnostic Phase</h3>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="bi bi-check-circle text-primary me-2"></i>
                                            <span><strong>Take practice tests</strong> for both SAT and ACT</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="bi bi-check-circle text-primary me-2"></i>
                                            <span><strong>Analyze your results</strong> to identify strengths and weaknesses</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="bi bi-check-circle text-primary me-2"></i>
                                            <span><strong>Decide which test</strong> better suits your strengths</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="h5 fw-bold mb-0">Targeted Learning</h3>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="bi bi-check-circle text-primary me-2"></i>
                                            <span><strong>Study content areas</strong> where you scored lowest</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="bi bi-check-circle text-primary me-2"></i>
                                            <span><strong>Learn test-specific strategies</strong> for each section</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="bi bi-check-circle text-primary me-2"></i>
                                            <span><strong>Use official materials</strong> to understand question formats</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row g-4 mt-1">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="h5 fw-bold mb-0">Practice Phase</h3>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="bi bi-check-circle text-primary me-2"></i>
                                            <span><strong>Complete section-specific drills</strong> to build skills</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="bi bi-check-circle text-primary me-2"></i>
                                            <span><strong>Take timed practice sections</strong> to improve pacing</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="bi bi-check-circle text-primary me-2"></i>
                                            <span><strong>Review every mistake</strong> to understand error patterns</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="h5 fw-bold mb-0">Full Test Simulation</h3>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="bi bi-check-circle text-primary me-2"></i>
                                            <span><strong>Take full-length practice tests</strong> under test-day conditions</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="bi bi-check-circle text-primary me-2"></i>
                                            <span><strong>Build mental endurance</strong> for the full test duration</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="bi bi-check-circle text-primary me-2"></i>
                                            <span><strong>Track progress</strong> to identify areas for final review</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Test-Taking Framework</h2>
                    
                    <div class="accordion" id="testTakingAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="stepOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1. Strategic Pacing
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="stepOne" data-bs-parent="#testTakingAccordion">
                                <div class="accordion-body">
                                    <p>Develop a section-specific pacing strategy that accounts for your strengths and weaknesses. Know how much time to allocate per question or passage, and practice with a timer until this pacing becomes second nature.</p>
                                    <div class="bg-light p-3 rounded">
                                        <p class="mb-0"><strong>Tip:</strong> If you struggle with time management, practice answering easier questions first, then return to more challenging ones with your remaining time.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="stepTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Question Triage
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="stepTwo" data-bs-parent="#testTakingAccordion">
                                <div class="accordion-body">
                                    <p>Learn to quickly identify question difficulty and make strategic decisions about which questions to tackle first, which to spend more time on, and which might be better to skip and return to later if time permits.</p>
                                    <div class="bg-light p-3 rounded">
                                        <p class="mb-0"><strong>Strategy:</strong> Mark questions you're unsure about and return to them after completing the ones you're confident in. This ensures you don't miss out on "easy points" due to time constraints.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="stepThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. Process of Elimination
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="stepThree" data-bs-parent="#testTakingAccordion">
                                <div class="accordion-body">
                                    <p>Systematically eliminate incorrect answer choices to increase your odds of selecting the correct answer. Even partial knowledge can help you narrow down options and make educated guesses when necessary.</p>
                                    <div class="bg-light p-3 rounded">
                                        <p class="mb-0"><strong>Best practice:</strong> Cross out eliminated answer choices directly on your test booklet to reduce confusion and prevent reconsidering options you've already determined are incorrect.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="stepFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. Strategic Guessing
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="stepFour" data-bs-parent="#testTakingAccordion">
                                <div class="accordion-body">
                                    <p>Since there's no penalty for wrong answers on either the SAT or ACT, always provide an answer for every question, even if you need to guess. Develop strategic guessing techniques to maximize your chances of selecting correct answers.</p>
                                    <div class="bg-light p-3 rounded">
                                        <p class="mb-0"><strong>Remember:</strong> If you have no idea, choose a consistent letter for all guesses, which statistically may yield better results than random guessing across different letters.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="stepFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    5. Error Prevention
                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="stepFive" data-bs-parent="#testTakingAccordion">
                                <div class="accordion-body">
                                    <p>Develop routines to prevent careless errors, such as misreading questions, calculating incorrectly, or filling in the wrong bubble on your answer sheet. These simple mistakes can significantly impact your score.</p>
                                    <div class="bg-light p-3 rounded">
                                        <p class="mb-0"><strong>Tip:</strong> Periodically check that your question number matches your answer sheet location, especially after skipping questions or starting a new section.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">SageArk Career Program Integration</h2>
                    <p>This SAT/ACT Strategies Guide is a foundational resource within our comprehensive Career Program.</p>
                    
                    <div class="accordion" id="careerProgramAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cpCollapseOne" aria-expanded="true" aria-controls="cpCollapseOne">
                                    College Planning
                                </button>
                            </h3>
                            <div id="cpCollapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#careerProgramAccordion">
                                <div class="accordion-body">
                                    <p>This guide integrates with our college planning resources, helping you understand how test scores factor into admissions decisions at different institutions. You'll develop a testing timeline that aligns with your college application strategy.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cpCollapseTwo" aria-expanded="false" aria-controls="cpCollapseTwo">
                                    Personalized Study Plans
                                </button>
                            </h3>
                            <div id="cpCollapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#careerProgramAccordion">
                                <div class="accordion-body">
                                    <p>Connects with our diagnostic assessment tools to create customized study plans based on your starting point and target scores. The SageArk program provides structured practice materials and progress tracking to keep your preparation on track.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cpCollapseThree" aria-expanded="false" aria-controls="cpCollapseThree">
                                    Subject-Specific Support
                                </button>
                            </h3>
                            <div id="cpCollapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#careerProgramAccordion">
                                <div class="accordion-body">
                                    <p>Works alongside our academic resources in math, reading, writing, and science to strengthen the underlying knowledge and skills tested on the SAT and ACT. This integrated approach ensures you're building both test-taking techniques and content mastery.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cpCollapseFour" aria-expanded="false" aria-controls="cpCollapseFour">
                                    Holistic Admissions Preparation
                                </button>
                            </h3>
                            <div id="cpCollapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#careerProgramAccordion">
                                <div class="accordion-body">
                                    <p>Connects with our college essay and extracurricular planning resources to help you develop a balanced approach to college admissions. You'll learn how to use your test scores as one component of a compelling overall application package.</p>
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
                                    <p class="mb-2">Before using SageArk's SAT preparation strategies, I was scoring in the low 1200s and feeling overwhelmed by the test. The structured approach helped me identify exactly where I was losing points and develop targeted strategies for each section. After three months of focused preparation, I increased my score to 1480 and secured admission to my dream school with a merit scholarship.</p>
                                    <p class="fst-italic mb-0">— Mia K., Undergraduate at Stanford University</p>
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
                                    Which test should I take: SAT or ACT?
                                </button>
                            </h3>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>The best approach is to take a practice test for each and compare your results. Consider both your scores and your comfort level with each test's format. The SAT may be better for students who prefer more time per question and enjoy math and evidence-based reading. The ACT might suit students who work quickly, excel in science, and prefer straightforward questions. Remember that all colleges accept either test equally.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                    How many times should I take the test?
                                </button>
                            </h3>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Most students benefit from taking the test 2-3 times. The first attempt gives you real testing experience and identifies areas for improvement. With focused preparation, many students see significant gains on their second attempt. A third attempt can be worthwhile if you're still below your target score and have specific strategies for improvement. Beyond three attempts, score increases typically diminish unless your preparation approach significantly changes.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                    How do I deal with test anxiety?
                                </button>
                            </h3>
                            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Test anxiety is common and can be managed with proper preparation. First, ensure you're well-prepared through consistent practice, which builds confidence. Second, simulate test conditions during practice tests to build familiarity with the testing environment. Third, develop specific relaxation techniques (deep breathing, positive visualization) to use during the test. Finally, maintain perspective—remember that you can retake the test if necessary, and it's just one component of your application.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                                    What if my target school is test-optional?
                                </button>
                            </h3>
                            <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>For test-optional schools, strong test scores can still strengthen your application, especially if they're above the school's published middle 50% range. If your scores are below this range, you might choose not to submit them and instead focus on strengthening other application components. Consider your entire application profile when deciding whether to submit scores. For students with strong academics but limited extracurricular opportunities, good test scores can be particularly valuable.</p>
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
                                        <a href="/resources/college-essay-guide.php" class="text-decoration-none">College Essay Guide</a>
                                    </h3>
                                    <p class="card-text">Strategies for writing compelling personal statements and supplemental essays for college applications.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="h5 card-title">
                                        <i class="bi bi-journal-text text-primary me-2"></i>
                                        <a href="/resources/college-admissions-timeline.php" class="text-decoration-none">College Admissions Timeline</a>
                                    </h3>
                                    <p class="card-text">A comprehensive schedule for managing all aspects of the college application process, including test preparation.</p>
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