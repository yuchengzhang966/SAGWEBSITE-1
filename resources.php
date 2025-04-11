<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources - SageArk</title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/dark-mode.css">
    <link rel="stylesheet" href="css/resources.css">
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
    <?php
   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);
   ?>


    <!-- Hero Section -->
    <section class="page-hero resources-hero">
        <div class="container">
            <div class="hero-content text-center">
                <h1>Educational Resources</h1>
                <p class="resources-subtitle">Curated guides, tools, and insights to support your educational journey and career development</p>
            </div>
        </div>
    </section>

    <!-- Quick Links Section -->
    <section class="quick-links section-padding">
        <div class="container">
            <div class="section-header text-center">
                <div class="section-tag">QUICK ACCESS</div>
                <h2>Popular <span class="highlight">Resources</span></h2>
                <p>Direct links to our most valuable and frequently accessed resources.</p>
            </div>
            
            <div class="quick-links-container">
                <a href="resources/consulting-101.php" class="quick-link-card">
                    <div class="quick-link-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3>Consulting 101</h3>
                </a>
                
                <a href="resources/quant-finance-guide.php" class="quick-link-card">
                    <div class="quick-link-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Quant Finance Guide</h3>
                </a>
                
                <a href="resources/college-essay-guide.php" class="quick-link-card">
                    <div class="quick-link-icon">
                        <i class="fas fa-edit"></i>
                    </div>
                    <h3>College Essay Guide</h3>
                </a>
                
                <a href="resources/tech-interview-prep.php" class="quick-link-card">
                    <div class="quick-link-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Tech Interview Prep</h3>
                </a>
                
                <a href="resources/sat-act-strategies.php" class="quick-link-card">
                    <div class="quick-link-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>SAT/ACT Strategies</h3>
                </a>
                
                <a href="resources/resume-templates.php" class="quick-link-card">
                    <div class="quick-link-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Resume Templates</h3>
                </a>
            </div>
        </div>
    </section>

    <!-- Resource Categories Section -->
    <section class="resource-categories section-padding bg-light">
        <div class="container">
            <div class="resource-nav-container">
                <div class="resource-nav">
                    <button class="resource-tab active" data-tab="college">College Admission</button>
                    <button class="resource-tab" data-tab="careers">Careers</button>
                    <button class="resource-tab" data-tab="personal">Personal Growth</button>
                    <button class="resource-tab" data-tab="test-prep">Test Preparation</button>
                </div>
            </div>
            
            <!-- College Admission Resources -->
            <div class="resource-content active" id="college">
                <div class="section-header">
                    <h2>College Admission <span class="highlight">Resources</span></h2>
                    <p>Comprehensive guides and tools to navigate the college application process.</p>
                </div>
                
                <div class="resource-grid">
                    <!-- College Resource 1 -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/college-timeline.jpg" alt="Application Timeline">
                            <div class="resource-type">GUIDE</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>College Application Timeline</h3>
                            <p>A month-by-month guide for juniors and seniors to stay on track with college applications.</p>
                            <a href="resources/college-timeline.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                    
                    <!-- College Resource 2 -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="../images/resources/essay-writing.jpg" alt="Essay Writing">
                            <div class="resource-type">GUIDE</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>College Essay Writing Guide</h3>
                            <p>Expert strategies and step-by-step guidance for crafting standout college application essays.</p>
                            <a href="essay-writing-guide.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                    
                    <!-- College Resource 3 -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/recommendation.jpg" alt="Recommendation Letters">
                            <div class="resource-type">TEMPLATE</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>Recommendation Letter Guide</h3>
                            <p>How to request and secure powerful recommendation letters from teachers and mentors.</p>
                            <a href="resources/recommendation-guide.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                    
                    <!-- College Resource 4 -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/college-interview.jpg" alt="College Interviews">
                            <div class="resource-type">CHECKLIST</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>Interview Preparation Checklist</h3>
                            <p>Comprehensive preparation guide with common questions and strategies for college interviews.</p>
                            <a href="resources/interview-prep.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                    
                    <!-- College Resource 5 -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/scholarship.jpg" alt="Scholarships">
                            <div class="resource-type">DATABASE</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>Scholarship Finder</h3>
                            <p>Curated database of scholarships organized by eligibility criteria, amount, and deadline.</p>
                            <a href="resources/scholarship-finder.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                    
                    <!-- College Resource 6 -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/college-comparison.jpg" alt="College Comparison">
                            <div class="resource-type">WORKSHEET</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>College Comparison Tool</h3>
                            <p>Interactive worksheet to help evaluate and compare different universities based on your priorities.</p>
                            <a href="resources/college-comparison.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-5">
                    <a href="resources-database.php?category=college" class="btn btn-primary">View All College Resources</a>
                </div>
            </div>
            
            <!-- Career Resources -->
            <div class="resource-content" id="careers">
                <div class="section-header">
                    <h2>Career Development <span class="highlight">Resources</span></h2>
                    <p>Tools and guides to help you build your career path and secure top positions.</p>
                </div>
                
                <div class="resource-grid">
                    <!-- Career Resource 1 -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/consulting-case.jpg" alt="Consulting Cases">
                            <div class="resource-type">PRACTICE SET</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>Consulting Case Interview Example</h3>
                            <p>A detailed walkthrough of a sample business case with frameworks, analysis techniques, and structured solution approach.</p>
                            <a href="resources/consulting-cases.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                    
                    <!-- Career Resource 2 -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/tech-interview.jpg" alt="Tech Interviews">
                            <div class="resource-type">PRACTICE SET</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>Technical Interview Questions</h3>
                            <p>Comprehensive set of coding challenges and system design questions for software engineering roles.</p>
                            <a href="resources/tech-questions.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                    
                    <!-- Career Resource 3 -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/linkedin.jpg" alt="LinkedIn Profile">
                            <div class="resource-type">GUIDE</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>LinkedIn Profile Diagnostic</h3>
                            <p>Identify common problems in your LinkedIn profile and understand what may be holding back your professional presence online.</p>
                            <a href="resources/linkedin-guide.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                    
                    <!-- Career Resource 4 -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/financial-models.jpg" alt="Financial Modeling">
                            <div class="resource-type">TEMPLATE</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>Financial Modeling Essentials</h3>
                            <p>A comprehensive overview of key financial modeling frameworks used in investment banking, private equity, and corporate finance careers.</p>
                            <a href="resources/financial-models.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                    
                    <!-- Career Resource 5 -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/resume.jpg" alt="Resume Building">
                            <div class="resource-type">TEMPLATE</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>Resume Red Flags</h3>
                            <p>Identify and fix the critical issues that could be preventing your resume from making it past applicant tracking systems and recruiters.</p>
                            <a href="resources/resume-templates.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                    
                    <!-- Career Resource 6 -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/networking.jpg" alt="Networking">
                            <div class="resource-type">STRATEGY</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>Networking Strategy Framework</h3>
                            <p>Comprehensive approach to build a professional network and leverage connections effectively.</p>
                            <a href="resources/networking-strategy.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-5">
    <a href="resources-database.php?category=careers" class="btn btn-primary">View All Career Resources</a>

            </div>
            </div>
     
            <!-- Personal Growth Resources -->
            <div class="resource-content" id="personal">
                <div class="section-header">
                    <h2>Personal Growth <span class="highlight">Resources</span></h2>
                    <p>Tools to enhance your skills, productivity, and personal development.</p>
                </div>
                
                <div class="resource-grid">
                    <!-- Personal Resource 1 -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/time-management.jpg" alt="Time Management">
                            <div class="resource-type">WORKBOOK</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>Time Management System</h3>
                            <p>Comprehensive time management framework designed specifically for students balancing academics, extracurriculars, and applications.</p>
                            <a href="resources/time-management.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                    
                    <!-- Personal Resource 2 -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/mindfulness.jpg" alt="Mindfulness">
                            <div class="resource-type">TOOLKIT</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>Student Mindfulness Toolkit</h3>
                            <p>Techniques and exercises to manage stress, improve focus, and maintain mental well-being during high-pressure academic periods.</p>
                            <a href="resources/mindfulness.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                    
                    <!-- Personal Resource 3 -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/public-speaking.jpg" alt="Public Speaking">
                            <div class="resource-type">COURSE</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>Public Speaking Fundamentals</h3>
                            <p>Step-by-step course to build confidence and develop compelling presentation skills for academic and professional settings.</p>
                            <a href="resources/public-speaking.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                    
                    <!-- Personal Resource 4 -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/goal-setting.jpg" alt="Goal Setting">
                            <div class="resource-type">FRAMEWORK</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>Goal Setting & Achievement System</h3>
                            <p>Structured approach to setting meaningful goals and developing actionable plans to achieve them.</p>
                            <a href="resources/goal-setting.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                    
                    <!-- Personal Resource 5 -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/reading.jpg" alt="Reading">
                            <div class="resource-type">GUIDE</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>Advanced Reading Techniques</h3>
                            <p>Methods to improve reading speed, comprehension, and retention for academic and professional literature.</p>
                            <a href="resources/reading-techniques.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                    
                    <!-- Personal Resource 6 -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/leadership.jpg" alt="Leadership">
                            <div class="resource-type">FRAMEWORK</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>Student Leadership Development</h3>
                            <p>Framework for developing leadership skills through campus organizations, community service, and team projects.</p>
                            <a href="resources/leadership.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-5">
    <a href="resources-database.php?category=personal" class="btn btn-primary">View All Personal Growth Resources</a>
</div>
            </div>
           
            <!-- Test Prep Resources -->
            <div class="resource-content" id="test-prep">
                <div class="section-header">
                    <h2>Test Preparation <span class="highlight">Resources</span></h2>
                    <p>Materials to help you excel in standardized tests and assessments.</p>
                </div>
                
                <div class="resource-grid">
                    <!-- AP Calculus Card -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/ap-calc.jpg" alt="AP Calculus">
                            <div class="resource-type">REVIEW</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>AP Calculus Review Package</h3>
                            <p>Structured review materials with practice problems and FRQ strategies for AP Calculus AB/BC.</p>
                            <a href="resources/ap-calculus.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>

                    <!-- Vocabulary Builder Card -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/vocab.jpg" alt="Vocabulary">
                            <div class="resource-type">FLASHCARDS</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>SAT/ACT Vocabulary Builder</h3>
                            <p>Interactive digital flashcards with spaced repetition system for optimal vocabulary retention.</p>
                            <a href="resources/vocabulary.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                    
                    <!-- Test Prep Resource 1 -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/sat-math.jpg" alt="SAT Math">
                            <div class="resource-type">PRACTICE SET</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>SAT Math Problem Set</h3>
                            <p>Comprehensive collection of practice problems covering all SAT math topics with detailed explanations.</p>
                            <a href="resources/sat-math.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                    
                    <!-- Test Prep Resource 2 -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/act-science.jpg" alt="ACT Science">
                            <div class="resource-type">STRATEGY</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>ACT Science Strategy Guide</h3>
                            <p>Effective approaches for tackling the ACT Science section with practice passages and questions.</p>
                            <a href="resources/act-science.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                    
                    <!-- Test Prep Resource 3 -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/gmat.jpg" alt="GMAT">
                            <div class="resource-type">STUDY PLAN</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>GMAT 8-Week Study Plan</h3>
                            <p>Week-by-week study schedule with resources and practice tests to maximize your GMAT score.</p>
                            <a href="resources/gmat-plan.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                    
                    <!-- Test Prep Resource 4 -->
                    <div class="resource-card">
                        <div class="resource-card-image">
                            <img src="images/resources/test-anxiety.jpg" alt="Test Anxiety">
                            <div class="resource-type">TOOLKIT</div>
                        </div>
                        <div class="resource-card-content">
                            <h3>Test Anxiety Management</h3>
                            <p>Strategies and techniques to overcome test anxiety and perform at your best on exam day.</p>
                            <a href="resources/test-anxiety.php" class="resource-link">View Resource →</a>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-5">
    <a href="resources-database.php?category=test-prep" class="btn btn-primary">View All Test Prep Resources</a>
</div>
            </div>
        </div>
    </section>

    <!-- Resource Blog Section -->
    <section class="resource-blog section-padding bg-light">
        <div class="container">
            <div class="section-header text-center">
                <div class="section-tag">INSIGHTS</div>
                <h2>Latest from Our <span class="highlight">Resource Blog</span></h2>
                <p>Expert insights, tips, and advice from our education and career specialists.</p>
            </div>
            
            <div class="blog-grid">
                <!-- Blog Post 1 -->
                <div class="blog-card">
                    <div class="blog-image">
                        <img src="images/blog/college-trend.jpg" alt="College Admissions Trends">
                    </div>
                    <div class="blog-content">
                        <div class="blog-date">May 15, 2023</div>
                        <h3>5 College Admissions Trends to Watch in 2024</h3>
                        <p>How test-optional policies, holistic review, and other emerging trends are reshaping college admissions.</p>
                        <a href="blog/admissions-trends-2024.php" class="blog-link">Read Article →</a>
                    </div>
                </div>
                
                <!-- Blog Post 2 -->
                <div class="blog-card">
                    <div class="blog-image">
                        <img src="images/blog/ai-careers.jpg" alt="AI Careers">
                    </div>
                    <div class="blog-content">
                        <div class="blog-date">April 28, 2023</div>
                        <h3>The Rise of AI: Career Opportunities for Recent Graduates</h3>
                        <p>Exploring the growing demand for AI talent and how students can position themselves for these roles.</p>
                        <a href="blog/ai-careers.php" class="blog-link">Read Article →</a>
                    </div>
                </div>
                
                <!-- Blog Post 3 -->
                <div class="blog-card">
                    <div class="blog-image">
                        <img src="images/blog/interview-mistakes.jpg" alt="Interview Mistakes">
                    </div>
                    <div class="blog-content">
                        <div class="blog-date">April 10, 2023</div>
                        <h3>Top 7 Interview Mistakes and How to Avoid Them</h3>
                        <p>Common pitfalls that candidates make during interviews and strategies to present your best self.</p>
                        <a href="blog/interview-mistakes.php" class="blog-link">Read Article →</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
    <a href="resources-database.php?category=blog" class="btn btn-primary">View All Articles</a>
</div>
        </div>
    </section>

    <!-- Resource Newsletter -->
    <section class="resource-newsletter section-padding">
        <div class="container">
            <div class="newsletter-container">
                <div class="newsletter-content">
                    <h2>Stay Updated with Our Resource Newsletter</h2>
                    <p>Subscribe to receive the latest educational resources, guides, and insights directly to your inbox.</p>
                    <ul class="newsletter-benefits">
                        <li><i class="fas fa-check-circle"></i> Monthly curated resources</li>
                        <li><i class="fas fa-check-circle"></i> Exclusive downloadable content</li>
                        <li><i class="fas fa-check-circle"></i> Expert tips and strategies</li>
                        <li><i class="fas fa-check-circle"></i> Early access to webinars</li>
                    </ul>
                </div>
                <div class="newsletter-form">
                    <form action="subscribe.php" method="post">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <select name="interest" required>
                                <option value="" disabled selected>Primary Interest</option>
                                <option value="college">College Admissions</option>
                                <option value="career">Career Development</option>
                                <option value="test-prep">Test Preparation</option>
                                <option value="personal">Personal Growth</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Subscribe Now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Include the CTA Section -->
    <?php include 'includes/cta.php'; ?>

    <!-- Include the footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Tab functionality for resource categories
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.resource-tab');
            const contents = document.querySelectorAll('.resource-content');
            
            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    // Remove active class from all tabs and contents
                    tabs.forEach(t => t.classList.remove('active'));
                    contents.forEach(c => c.classList.remove('active'));
                    
                    // Add active class to clicked tab
                    tab.classList.add('active');
                    
                    // Show corresponding content
                    const tabId = tab.getAttribute('data-tab');
                    document.getElementById(tabId).classList.add('active');
                });
            });
        });
    </script>
</body>
</html> 