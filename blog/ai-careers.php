<?php
// Enable error reporting during development
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Page title
$page_title = "The Rise of AI: Career Opportunities for Recent Graduates | SageArk";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <meta name="description" content="Explore emerging career opportunities in AI and how recent graduates can position themselves for success in this rapidly growing field">
</head>

<body class="preload resource-detail-page">
    <!-- Include the navigation -->
    <?php include '../includes/nav.php'; ?>
    
    <div class="hero-section bg-primary text-white py-5 mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <span class="badge bg-accent text-white mb-3">CAREER INSIGHTS</span>
                    <h1 class="display-4 fw-bold mb-3">The Rise of AI: Career Opportunities for Recent Graduates</h1>
                    <p class="lead mb-4">Exploring the growing demand for AI talent and how students can position themselves for these roles</p>
                    <div class="d-flex justify-content-center align-items-center small text-white-50">
                        <div class="me-3">
                            <i class="bi bi-clock me-1"></i> Last updated: April 28, 2023
                        </div>
                        <div>
                            <i class="bi bi-book me-1"></i> 10 min read
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
                    <h2 class="fw-bold mb-4">Introduction</h2>
                    <p>As artificial intelligence continues to transform industries, the demand for AI talent is skyrocketing. This guide explores the emerging opportunities for recent graduates and the skills needed to succeed in this dynamic field.</p>
                    
                    <div class="alert alert-primary my-4">
                        <div class="d-flex">
                            <div class="me-3">
                                <i class="bi bi-info-circle-fill fs-4"></i>
                            </div>
                            <div>
                                <strong>Key Takeaway:</strong> AI careers extend beyond traditional tech roles, offering opportunities across various sectors for graduates with the right skill set.
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Emerging AI Career Paths</h2>
                    
                    <div class="row row-cols-1 g-4 mb-4">
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-1-circle text-primary me-2"></i>
                                        Machine Learning Engineer
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Design and implement AI algorithms and systems, focusing on model development and deployment. Required skills include Python, deep learning frameworks, and strong mathematics foundation.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-2-circle text-primary me-2"></i>
                                        AI Product Manager
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Bridge technical and business aspects of AI products, requiring both technical understanding and strong business acumen.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-3-circle text-primary me-2"></i>
                                        AI Ethics Specialist
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Focus on ethical implications of AI systems, ensuring responsible development and deployment while considering societal impact.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-4-circle text-primary me-2"></i>
                                        AI Research Scientist
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Advance the field through research and development of new AI technologies and methodologies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Essential Skills for AI Careers</h2>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Skill Category</th>
                                    <th>Core Components</th>
                                    <th>Learning Resources</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Technical Skills</strong></td>
                                    <td>Python, TensorFlow, PyTorch</td>
                                    <td>Online courses, bootcamps</td>
                                </tr>
                                <tr>
                                    <td><strong>Mathematics</strong></td>
                                    <td>Linear Algebra, Calculus, Statistics</td>
                                    <td>University courses, MOOCs</td>
                                </tr>
                                <tr>
                                    <td><strong>Soft Skills</strong></td>
                                    <td>Problem-solving, Communication</td>
                                    <td>Project work, Internships</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Industry Expert Perspective</h2>
                    
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="bi bi-quote fs-1 text-primary opacity-50"></i>
                                </div>
                                <div>
                                    <p class="mb-2">The most successful AI professionals combine strong technical skills with an understanding of real-world applications and ethical considerations.</p>
                                    <p class="fst-italic mb-0">— Dr. Michael Zhang, AI Research Director</p>
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
                                        <i class="bi bi-laptop text-primary me-2"></i>
                                        <a href="/resources/tech-interview-prep.php" class="text-decoration-none">Tech Interview Preparation</a>
                                    </h3>
                                    <p class="card-text">Comprehensive guide to technical interviews in AI and ML roles.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="h5 card-title">
                                        <i class="bi bi-graph-up text-primary me-2"></i>
                                        <a href="/resources/data-science.php" class="text-decoration-none">Data Science Program</a>
                                    </h3>
                                    <p class="card-text">Learn the fundamentals of data science and machine learning.</p>
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