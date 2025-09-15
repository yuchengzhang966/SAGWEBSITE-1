<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SageArk - Coaching for High-Impact Careers</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/dark-mode.css">
    <link rel="stylesheet" href="css/resources.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <script src="https://unpkg.com/topojson@3"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Additional styles for resource database page */
        .resource-database-grid {
            min-height: 400px;
        }
    </style>
</head>

<body class="preload">
    <!-- Include the navigation -->
    <?php include 'includes/nav.php'; ?>

    <!-- Hero Section -->
    <section class="page-hero resources-hero">
        <div class="container">
            <div class="hero-content text-center">
                <h1>Resources Database</h1>
                <p class="resources-subtitle">Access our complete collection of educational and career resources</p>
            </div>
        </div>
    </section>

    <!-- Resources Database Section -->
    <section class="resource-database section-padding">
        <div class="container">
            <!-- Resources Grid -->
            <div class="resource-grid resource-database-grid">
                <!-- College Resources -->
                <div class="resource-card" data-category="college" data-type="guide">
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
                
                <div class="resource-card" data-category="college" data-type="template">
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
                
                <div class="resource-card" data-category="college" data-type="guide">
                    <div class="resource-card-image">
                        <img src="images/resources/essay-writing.jpg" alt="Essay Writing">
                        <div class="resource-type">GUIDE</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>College Essay Writing Guide</h3>
                        <p>A comprehensive approach to crafting compelling personal statements and supplemental essays.</p>
                        <a href="resources/college-essay-guide.php" class="resource-link">View Resource →</a>
                    </div>
                </div>

                <div class="resource-card" data-category="college" data-type="database">
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

                <div class="resource-card" data-category="college" data-type="worksheet">
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

                <!-- Career Resources -->
                <div class="resource-card" data-category="careers" data-type="practice">
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
                
                <div class="resource-card" data-category="careers" data-type="guide">
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

                <div class="resource-card" data-category="careers" data-type="practice">
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

                <div class="resource-card" data-category="careers" data-type="template">
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

                <div class="resource-card" data-category="careers" data-type="template">
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

                <div class="resource-card" data-category="careers" data-type="strategy">
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
                
                <!-- Personal Growth Resources -->
                <div class="resource-card" data-category="personal" data-type="toolkit">
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

                <div class="resource-card" data-category="personal" data-type="workbook">
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

                <div class="resource-card" data-category="personal" data-type="course">
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

                <div class="resource-card" data-category="personal" data-type="framework">
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

                <div class="resource-card" data-category="personal" data-type="guide">
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

                <div class="resource-card" data-category="personal" data-type="framework">
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
                
                <!-- Test Prep Resources -->
                <div class="resource-card" data-category="test-prep" data-type="practice">
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

                <div class="resource-card" data-category="test-prep" data-type="review">
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

                <div class="resource-card" data-category="test-prep" data-type="flashcards">
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

                <div class="resource-card" data-category="test-prep" data-type="strategy">
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

                <div class="resource-card" data-category="test-prep" data-type="study-plan">
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

                <div class="resource-card" data-category="test-prep" data-type="toolkit">
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

                <!-- Interview Preparation Checklist -->
                <div class="resource-card" data-category="college" data-type="checklist">
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

                <div class="resource-card" data-category="college" data-type="toolkit">
                    <div class="resource-card-image">
                        <img src="images/resources/essay-writing.jpg" alt="Essay Writing">
                        <div class="resource-type">TOOLKIT</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>College Essay Toolkit</h3>
                        <p>Templates, examples, and step-by-step guidance for crafting standout college application essays.</p>
                        <a href="resources/essay-toolkit.php" class="resource-link">View Resource →</a>
                    </div>
                </div>
                
                <!-- Blog Resources -->
                <div class="resource-card" data-category="blog" data-type="article">
                    <div class="resource-card-image">
                        <img src="images/blog/college-trend.jpg" alt="College Admissions Trends">
                        <div class="resource-type">ARTICLE</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>5 College Admissions Trends to Watch in 2024</h3>
                        <p>How test-optional policies, holistic review, and other emerging trends are reshaping college admissions.</p>
                        <a href="blog/admissions-trends-2024.php" class="resource-link">Read Article →</a>
                    </div>
                </div>
                
                <div class="resource-card" data-category="blog" data-type="article">
                    <div class="resource-card-image">
                        <img src="images/blog/ai-careers.jpg" alt="AI Careers">
                        <div class="resource-type">ARTICLE</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>The Rise of AI: Career Opportunities for Recent Graduates</h3>
                        <p>Exploring the growing demand for AI talent and how students can position themselves for these roles.</p>
                        <a href="blog/ai-careers.php" class="resource-link">Read Article →</a>
                    </div>
                </div>
                
                <div class="resource-card" data-category="blog" data-type="article">
                    <div class="resource-card-image">
                        <img src="images/blog/interview-mistakes.jpg" alt="Interview Mistakes">
                        <div class="resource-type">ARTICLE</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Top 7 Interview Mistakes and How to Avoid Them</h3>
                        <p>Common pitfalls that candidates make during interviews and strategies to present your best self.</p>
                        <a href="blog/interview-mistakes.php" class="resource-link">Read Article →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Include the CTA Section -->
    <?php include 'includes/cta.php'; ?>

    <!-- Include the footer -->
    <?php include 'includes/footer.php'; ?>

</body>
</html>