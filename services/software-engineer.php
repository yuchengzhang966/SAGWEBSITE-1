<?php
// Page variables
$page_title = "Software Engineering Program | SageArk";
$meta_description = "Master coding skills, algorithms, system design, and technical interviews with SageArk's Software Engineering Program to secure roles at top tech companies.";
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
    
    <!-- Hero Section -->
    <div class="hero-section bg-primary text-white py-5 mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <span class="badge bg-accent text-white mb-3">CAREER PROGRAM</span>
                    <h1 class="display-4 fw-bold mb-3">Software Engineering</h1>
                    <p class="lead mb-4">Master coding, algorithms, and system design to succeed at top tech companies</p>
                    <div class="d-flex justify-content-center align-items-center small text-white-50 mb-4">
                        <div class="me-3">
                            <i class="bi bi-signal me-1"></i> Intermediate
                        </div>
                        <div>
                            <i class="bi bi-clock me-1"></i> 30 hours
                        </div>
                    </div>
                    <a href="#contact" class="btn btn-accent btn-lg">Enroll Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                
                <!-- Program Overview -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Program Overview</h2>
                    <p>The SageArk Software Engineering Program prepares students and career-switchers for successful roles at leading tech companies including Google, Amazon, Microsoft, and high-growth startups. This comprehensive program covers critical technical skills, practical project development, and the specialized interview preparation needed to excel in today's competitive tech recruitment landscape.</p>
                    
                    <div class="alert alert-primary my-4">
                        <div class="d-flex">
                            <div class="me-3">
                                <i class="bi bi-info-circle-fill fs-4"></i>
                            </div>
                            <div>
                                <strong>Program Highlights:</strong> Our students have secured software engineering positions at FAANG companies, high-growth startups, and established tech firms with a placement rate exceeding 85% for program graduates who complete all components.
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
                                        Data Structures & Algorithms
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Master essential data structures (arrays, linked lists, trees, graphs, hash tables) and algorithms (sorting, searching, dynamic programming) with practical implementations. Learn to analyze time and space complexity to optimize your solutions for technical interviews.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-2-circle text-primary me-2"></i>
                                        System Design
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Develop the skills to design scalable, distributed systems and services. Learn architecture principles, database selection, caching strategies, load balancing, and microservices concepts that are essential for both interviews and real-world engineering.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-3-circle text-primary me-2"></i>
                                        Coding Interview Excellence
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Practice whiteboard coding and problem-solving techniques through extensive mock interviews. Master the art of approaching complex problems, communicating your thought process, and delivering clean, efficient code solutions under pressure.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-4-circle text-primary me-2"></i>
                                        Project Development
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Build impressive portfolio projects using modern tech stacks and development practices. Learn to plan, implement, test, and deploy applications while applying software engineering best practices like version control, CI/CD, and code reviews.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-5-circle text-primary me-2"></i>
                                        Tech Career Strategy
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Navigate the tech recruitment process strategically with guidance on resume optimization, technical profiles (GitHub, LinkedIn), behavioral interviews, and offer negotiation. Develop a personalized roadmap for targeting companies that align with your goals.</p>
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
                                    Module 1: Technical Foundations
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="moduleOne" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Core programming concepts and language proficiency</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Essential data structures implementation and applications</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Algorithm design strategies and problem-solving frameworks</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Time and space complexity analysis</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Module 2: Advanced Algorithms
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="moduleTwo" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Dynamic programming and memoization techniques</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Graph algorithms and network flow problems</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Advanced tree structures and traversal techniques</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Pattern matching and combinatorial optimization</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Module 3: System Design Principles
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="moduleThree" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Scalable architecture patterns and distributed systems</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Database design (SQL, NoSQL) and data modeling</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Caching strategies, load balancing, and fault tolerance</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Case studies of real-world system architectures</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Module 4: Modern Development Practices
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="moduleFour" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Software development lifecycle and Agile methodologies</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Version control best practices with Git</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Testing strategies (unit, integration, end-to-end)</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> CI/CD pipelines and deployment automation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Module 5: Technical Interview Preparation
                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="moduleFive" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Coding interview strategies and question patterns</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> System design interview preparation</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Behavioral interview techniques for tech roles</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Negotiation strategies and tech career planning</li>
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
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> CS/Engineering students & graduates</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Coding bootcamp graduates</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Self-taught programmers</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> Career-switchers with technical aptitude</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h3 class="h5 card-title mb-3"><i class="bi bi-award-fill text-primary me-2"></i>What You'll Receive</h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> 10 live coding sessions (2 hours each)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> 5 one-on-one mock interviews with feedback</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> GitHub portfolio review and optimization</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> Resume and LinkedIn profile review</li>
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
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Weekly sessions (evenings/weekends)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Flexible scheduling for mock interviews</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> Cohorts start every two months</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h3 class="h5 card-title mb-3"><i class="bi bi-mortarboard-fill text-primary me-2"></i>Prerequisites</h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Programming fundamentals in any language</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Basic understanding of data structures</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Problem-solving aptitude</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> Commitment to consistent practice</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Meet Your Instructors -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Meet Your Instructors</h2>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex mb-3">
                                        <div class="flex-shrink-0">
                                            <img src="../images/instructor-5.jpg" alt="Michael Zhang" class="rounded-circle" width="80" height="80">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h3 class="h5 mb-1">Michael Zhang</h3>
                                            <p class="text-muted mb-0">Former Senior Engineer, Google</p>
                                        </div>
                                    </div>
                                    <p>Michael spent 7 years at Google working on search infrastructure and cloud services. He has conducted over 200 technical interviews and mentored dozens of engineers. He holds a master's degree in Computer Science from Stanford and specializes in distributed systems and algorithms.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex mb-3">
                                        <div class="flex-shrink-0">
                                            <img src="../images/instructor-6.jpg" alt="Aisha Johnson" class="rounded-circle" width="80" height="80">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h3 class="h5 mb-1">Aisha Johnson</h3>
                                            <p class="text-muted mb-0">Former Tech Lead, Amazon</p>
                                        </div>
                                    </div>
                                    <p>Aisha was a Tech Lead at Amazon for 5 years, working on e-commerce platforms and recommendation systems. She has extensive experience in system design and software architecture. With a background in Computer Science from MIT, she now focuses on helping aspiring software engineers master technical interviews.</p>
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
                                    <p class="mb-2">After completing a coding bootcamp, I still struggled with data structures and algorithms required for technical interviews. The SageArk Software Engineering Program transformed my interview skills through its structured curriculum and rigorous practice. The mock interviews were incredibly realistic and prepared me for exactly what I faced at top companies. I'm now a full-stack engineer at Microsoft, something I couldn't have achieved without this program.</p>
                                    <p class="fst-italic mb-0">— Jason K., Software Engineer, Microsoft</p>
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
                                    <p class="mb-2">As a Computer Science student, I had theoretical knowledge but lacked practical experience and interview preparation. The SageArk program bridged this gap perfectly. The system design sessions were particularly valuable, teaching me architectural concepts not covered in my university courses. My instructor's feedback on my GitHub projects completely transformed my portfolio, making it much more impressive to recruiters. I received offers from three major tech companies and accepted a position at Stripe.</p>
                                    <p class="fst-italic mb-0">— Emma R., Software Engineer, Stripe</p>
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
                                    What programming languages does the program focus on?
                                </button>
                            </h3>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">Our program primarily supports Python, Java, JavaScript, and C++ as these are the most commonly used languages in technical interviews. You can choose your preferred language for the coding exercises and mock interviews. The algorithmic concepts we teach are language-agnostic, focusing on problem-solving approaches rather than syntax. If you're proficient in a different language, our instructors can still provide guidance, though example solutions may need to be adapted.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                    How does this program compare to online coding platforms?
                                </button>
                            </h3>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">While platforms like LeetCode provide problem sets, our program offers several advantages: 1) Personalized guidance from experienced engineers who've actually conducted interviews at top companies, 2) A structured curriculum that systematically builds your skills, 3) Live coding sessions where instructors demonstrate their approach to problems, 4) Real-time feedback on not just your code, but your communication and problem-solving approach, and 5) Mock interviews that simulate the actual interview experience, including system design and behavioral components often neglected on coding platforms.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                    What is the success rate for program graduates?
                                </button>
                            </h3>
                            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">Over 85% of students who complete our full program receive at least one offer from a tech company, with approximately 70% securing positions at FAANG-level companies or well-funded startups. However, outcomes vary based on factors including prior coding experience, educational background, and location flexibility. Our program significantly improves your technical skills and interview performance, but success also depends on your dedication to practicing consistently between sessions and implementing the feedback provided.</p>
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
                                    <p class="mb-0">For optimal results, we recommend dedicating 10-15 hours per week to the program. This includes 2-3 hours for live sessions, 6-8 hours for individual practice and completing assignments, and 2-4 hours for project work. Consistent practice is crucial for internalizing algorithmic patterns and developing the problem-solving intuition needed for technical interviews. The program is designed to be compatible with full-time studies or work, with evening and weekend scheduling options.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- CTA Section -->
                <div id="contact" class="mb-5 p-5 bg-light rounded">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold mb-3">Ready to Launch Your Software Engineering Career?</h2>
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
                                    <option value="cs_student">Computer Science Student</option>
                                    <option value="bootcamp">Bootcamp Graduate</option>
                                    <option value="self_taught">Self-Taught Programmer</option>
                                    <option value="professional">Working Professional</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <div class="col-12">
                                <label for="message" class="form-label">What are your career goals in software engineering?</label>
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
                                        <i class="bi bi-graph-up text-primary me-2"></i>
                                        <a href="data-science.php" class="text-decoration-none">Data Science Program</a>
                                    </h3>
                                    <p class="card-text">Master data analysis, machine learning, and AI with our comprehensive data science training program.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="h5 card-title">
                                        <i class="bi bi-kanban text-primary me-2"></i>
                                        <a href="product-management.php" class="text-decoration-none">Product Management Program</a>
                                    </h3>
                                    <p class="card-text">Develop the skills to lead product development and strategy at technology companies.</p>
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