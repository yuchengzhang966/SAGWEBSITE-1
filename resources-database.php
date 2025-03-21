<?php
// Get the selected category from URL parameter (if provided)
$selectedCategory = isset($_GET['category']) ? $_GET['category'] : 'all';
$selectedType = isset($_GET['type']) ? $_GET['type'] : 'all';

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources Database - SageArk</title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/resources.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Fonts and Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        /* Additional styles for resource database page */
        .resource-filters {
            display: flex;
            justify-content: space-between;
            margin: 20px 0 30px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
        }

        .filter-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .filter-group label {
            font-weight: 500;
            margin-bottom: 0;
        }

        .filter-group select {
            padding: 8px 15px;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            background-color: white;
        }

        #clear-filters {
            padding: 8px 15px;
        }

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
            <div class="resource-nav-container">
                <div class="resource-nav">
                    <button class="resource-tab <?php echo $selectedCategory == 'all' ? 'active' : ''; ?>" data-category="all">All Resources</button>
                    <button class="resource-tab <?php echo $selectedCategory == 'college' ? 'active' : ''; ?>" data-category="college">College Admission</button>
                    <button class="resource-tab <?php echo $selectedCategory == 'careers' ? 'active' : ''; ?>" data-category="careers">Careers</button>
                    <button class="resource-tab <?php echo $selectedCategory == 'personal' ? 'active' : ''; ?>" data-category="personal">Personal Growth</button>
                    <button class="resource-tab <?php echo $selectedCategory == 'test-prep' ? 'active' : ''; ?>" data-category="test-prep">Test Preparation</button>
                    <button class="resource-tab <?php echo $selectedCategory == 'downloads' ? 'active' : ''; ?>" data-category="downloads">Downloads</button>
                    <button class="resource-tab <?php echo $selectedCategory == 'blog' ? 'active' : ''; ?>" data-category="blog">Blog</button>
                </div>
            </div>
            
            <!-- Filter Options -->
            <div class="resource-filters">
                <div class="filter-group">
                    <label>Resource Type:</label>
                    <select id="resource-type-filter">
                        <option value="all" <?php echo $selectedType == 'all' ? 'selected' : ''; ?>>All Types</option>
                        <option value="guide" <?php echo $selectedType == 'guide' ? 'selected' : ''; ?>>Guide</option>
                        <option value="template" <?php echo $selectedType == 'template' ? 'selected' : ''; ?>>Template</option>
                        <option value="toolkit" <?php echo $selectedType == 'toolkit' ? 'selected' : ''; ?>>Toolkit</option>
                        <option value="checklist" <?php echo $selectedType == 'checklist' ? 'selected' : ''; ?>>Checklist</option>
                        <option value="practice" <?php echo $selectedType == 'practice' ? 'selected' : ''; ?>>Practice Set</option>
                        <option value="worksheet" <?php echo $selectedType == 'worksheet' ? 'selected' : ''; ?>>Worksheet</option>
                        <option value="database" <?php echo $selectedType == 'database' ? 'selected' : ''; ?>>Database</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <button id="clear-filters" class="btn btn-sm btn-outline-secondary">Clear Filters</button>
                </div>
            </div>
            
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
                    <div class="resource-card-content">
                        <h3>Resume & Cover Letter Templates</h3>
                        <p>Professional templates optimized for students and recent graduates.</p>
                        <a href="downloads/resume-pack.zip" class="resource-link">Download Resource →</a>
                    </div>
                </div>
                
                <!-- Add more resource cards for each category -->
            </div>
        </div>
    </section>

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
            const typeFilter = document.getElementById('resource-type-filter');
            const clearFiltersBtn = document.getElementById('clear-filters');
            
            // Function to filter resources
            function filterResources() {
                const selectedCategory = document.querySelector('.resource-tab.active').getAttribute('data-category');
                const selectedType = typeFilter.value;
                
                resourceCards.forEach(card => {
                    const cardCategory = card.getAttribute('data-category');
                    const cardType = card.getAttribute('data-type');
                    
                    const categoryMatch = selectedCategory === 'all' || cardCategory === selectedCategory;
                    const typeMatch = selectedType === 'all' || cardType === selectedType;
                    
                    if (categoryMatch && typeMatch) {
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
                    
                    // Update URL without reloading the page
                    const category = tab.getAttribute('data-category');
                    const url = new URL(window.location);
                    url.searchParams.set('category', category);
                    window.history.pushState({}, '', url);
                });
            });
            
            typeFilter.addEventListener('change', () => {
                filterResources();
                
                // Update URL without reloading the page
                const url = new URL(window.location);
                url.searchParams.set('type', typeFilter.value);
                window.history.pushState({}, '', url);
            });
            
            clearFiltersBtn.addEventListener('click', () => {
                // Reset to all categories and types
                tabs.forEach(t => t.classList.remove('active'));
                document.querySelector('[data-category="all"]').classList.add('active');
                typeFilter.value = 'all';
                filterResources();
                
                // Update URL without reloading the page
                window.history.pushState({}, '', window.location.pathname);
            });
        });
    </script>
</body>
</html>