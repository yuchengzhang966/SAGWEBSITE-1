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
            <!-- Category Tabs -->
       

       
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
                
                <!-- Career Resources -->
                <div class="resource-card" data-category="careers" data-type="practice">
                    <div class="resource-card-image">
                        <img src="images/resources/consulting-case.jpg" alt="Consulting Cases">
                        <div class="resource-type">PRACTICE SET</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Consulting Case Interview Pack</h3>
                        <p>Collection of 20 practice cases with detailed solutions and frameworks for consulting interviews.</p>
                        <a href="resources/consulting-cases.php" class="resource-link">View Resource →</a>
                    </div>
                </div>
                
                <div class="resource-card" data-category="careers" data-type="guide">
                    <div class="resource-card-image">
                        <img src="images/resources/linkedin.jpg" alt="LinkedIn Profile">
                        <div class="resource-type">GUIDE</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>LinkedIn Profile Optimization</h3>
                        <p>Step-by-step guide to create a standout LinkedIn profile that attracts recruiters and opportunities.</p>
                        <a href="resources/linkedin-guide.php" class="resource-link">View Resource →</a>
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
                
                <!-- Downloads -->
                <div class="resource-card" data-category="downloads" data-type="template">
                    <div class="resource-card-image">
                        <img src="images/resources/resume.jpg" alt="Resume Templates">
                        <div class="resource-type">TEMPLATE</div>
                    </div>
                    <div class="resource-card-content"data-category="downloads" data-type="template">
                        <h3>Resume Red flags</h3>
                        <p>Professional templates optimized for students and recent graduates.</p>
                        <a href="resources/resume-templates.php" class="resource-link">Download Resource →</a>
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

    <!-- Scripts -->
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle category tab clicks
            const tabs = document.querySelectorAll('.resource-tab');
            const resourceCards = document.querySelectorAll('.resource-card');
            
            // Function to filter resources
            function filterResources() {
                const selectedCategory = document.querySelector('.resource-tab.active').getAttribute('data-category');
                
                resourceCards.forEach(card => {
                    const cardCategory = card.getAttribute('data-category');
                    
                    if (selectedCategory === 'all' || cardCategory === selectedCategory) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }
            
            // Initialize filters based on URL parameters
            filterResources();
            
            // Set up event listeners
            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    tabs.forEach(t => t.classList.remove('active'));
                    tab.classList.add('active');
                    filterResources();
                    
                    // This keeps the base URL without parameters
                    window.history.pushState({}, '', window.location.pathname);
                });
            });
        });
    </script>
</body>
</html>