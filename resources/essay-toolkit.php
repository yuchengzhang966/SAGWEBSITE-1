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
    <link rel="stylesheet" href="../css/dark-mode.css">
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
                <div class="resource-type-badge">GUIDE</div>
                <h1>College Essay Writing Guide</h1>
                <p class="resources-subtitle fw-medium opacity-90">A comprehensive guide to crafting compelling college application essays that showcase your unique strengths and personality.</p>
                
                <!-- Metadata inside hero section -->
                <div class="resource-metadata">
                    <div class="metadata-item">
                        <i class="far fa-calendar-alt"></i> Last Updated: August 2025
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
            <div class="resource-main-content">
                <h2>Essential Elements of a Strong College Essay</h2>
                
                <p>Your college essay is a crucial component of your application that allows admissions officers to understand who you are beyond your grades and test scores. This guide provides comprehensive strategies and insights to help you craft essays that authentically represent your experiences, aspirations, and potential.</p>

                <div class="alert alert-primary my-4">
                    <div class="d-flex">
                        <div class="me-3">
                            <i class="bi bi-info-circle-fill fs-4"></i>
                        </div>
                        <div>
                            <strong>Key Insight:</strong> The most compelling college essays combine authentic storytelling with meaningful reflection, showing both who you are and how you think.
                        </div>
                    </div>
                </div>

                <!-- Replace download box with content sections -->
                <h3>Core Components of an Effective Essay</h3>
                
                <div class="row row-cols-1 g-4 mb-4">
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-header bg-light">
                                <h4 class="card-title fw-bold mb-0">
                                    <i class="bi bi-1-circle text-primary me-2"></i>
                                    Personal Narrative
                                </h4>
                            </div>
                            <div class="card-body">
                                <p>Share specific experiences that shaped your perspective, values, or goals. Focus on moments that reveal your character and potential impact on the campus community.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Add more sections for essay components -->
                    // ... continue with detailed content sections instead of downloadable resources ...
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