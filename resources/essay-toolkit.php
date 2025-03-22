<?php
// Enable error reporting during development
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Essay Toolkit - SageArk</title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/resources.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="preload resource-detail-page">
    <!-- Include the navigation -->
    <?php include '../includes/nav.php'; ?>

    <!-- Hero Section -->
    <section class="page-hero">
        <div class="container">
            <div class="hero-content text-center">
                <div class="resource-type-badge">TOOLKIT</div>
                <h1>College Essay Toolkit</h1>
                <p class="resources-subtitle">Everything you need to craft compelling college application essays that stand out and showcase your unique strengths and personality.</p>
                
                <!-- Metadata moved inside hero section -->
                <div class="resource-metadata">
                    <div class="metadata-item">
                        <i class="far fa-calendar-alt"></i> Last Updated: May 2023
                    </div>
                    <div class="metadata-item">
                        <i class="far fa-clock"></i> Reading Time: 15 minutes
                    </div>
                    <div class="metadata-item">
                        <i class="fas fa-tag"></i> Category: College Admission
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resource Content Section -->
    <section class="resource-content section-padding active">
        <div class="container">
            <div class="resource-metadata">
                <div class="metadata-item">
                    <i class="far fa-calendar-alt"></i> Last Updated: May 2023
                </div>
                <div class="metadata-item">
                    <i class="far fa-clock"></i> Reading Time: 15 minutes
                </div>
                <div class="metadata-item">
                    <i class="fas fa-tag"></i> Category: College Admission
                </div>
            </div>
            
            <div class="resource-main-content">
                <h2>The Ultimate College Essay Toolkit</h2>
                
                <p>Your college essay can be the difference between a rejection letter and an acceptance letter. This comprehensive toolkit provides everything you need to craft powerful, authentic essays that showcase your unique voice and experiences.</p>

                <!-- Placeholder for actual content as mentioned by the user that we can skip this step -->
                <p>This toolkit includes templates, examples, and step-by-step guidance for creating compelling college application essays.</p>
                
                <div class="resource-download-box">
                    <h3>Download the Complete Essay Toolkit</h3>
                    <p>Get our comprehensive essay writing guide with templates, examples, and expert tips.</p>
                    <a href="../downloads/college-essay-toolkit.pdf" class="btn btn-primary"><i class="fas fa-download"></i> Download PDF</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Resources Section -->
    <section class="related-resources section-padding bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Related Resources</h2>
            
            <div class="resource-grid">
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="../images/resources/college-timeline.jpg" alt="College Application Timeline">
                        <div class="resource-type">GUIDE</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>College Application Timeline</h3>
                        <p>A month-by-month guide for juniors and seniors to stay on track with college applications.</p>
                        <a href="college-timeline.php" class="resource-link">View Resource →</a>
                    </div>
                </div>
                
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="../images/resources/recommendation.jpg" alt="Recommendation Letters">
                        <div class="resource-type">TEMPLATE</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Recommendation Letter Guide</h3>
                        <p>How to request and secure powerful recommendation letters from teachers and mentors.</p>
                        <a href="recommendation-guide.php" class="resource-link">View Resource →</a>
                    </div>
                </div>
                
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="../images/resources/college-interview.jpg" alt="College Interviews">
                        <div class="resource-type">CHECKLIST</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Interview Preparation Checklist</h3>
                        <p>Comprehensive preparation guide with common questions and strategies for college interviews.</p>
                        <a href="interview-prep.php" class="resource-link">View Resource →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include the footer -->
    <?php include '../includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="../script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 