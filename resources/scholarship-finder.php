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
    <title>Scholarship Finder - SageArk</title>
    
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
                <div class="resource-type-badge">DATABASE</div>
                <h1>Scholarship Finder</h1>
                <p class="resources-subtitle">Search and filter through thousands of scholarships to find the perfect funding opportunities for your education.</p>
                
                <!-- Metadata inside hero section -->
                <div class="resource-metadata">
                    <div class="metadata-item">
                        <i class="far fa-calendar-alt"></i> Last Updated: April 2023
                    </div>
                    <div class="metadata-item">
                        <i class="far fa-clock"></i> Updated Monthly
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
                <h2>Finding the Right Scholarships for Your Educational Journey</h2>
                
                <p>Navigating the vast landscape of scholarships can be overwhelming. With thousands of opportunities available, finding the ones that match your profile and needs requires strategy and knowledge. Our scholarship database and search system helps you identify the most relevant opportunities based on your academic background, interests, financial needs, and demographics.</p>

                <h3>Understanding Scholarship Types</h3>
                
                <p>Before diving into our database, it's helpful to understand the different types of scholarships available:</p>
                
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title"><i class="fas fa-medal text-primary me-2"></i> Merit-Based</h4>
                                <p class="card-text">Awarded based on academic, athletic, artistic, or other achievements. These typically require strong GPAs, test scores, or demonstrated talent.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title"><i class="fas fa-hand-holding-usd text-primary me-2"></i> Need-Based</h4>
                                <p class="card-text">Awarded based on financial need. These often require detailed financial information and FAFSA completion.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title"><i class="fas fa-users text-primary me-2"></i> Identity-Based</h4>
                                <p class="card-text">Targeted toward specific demographics, including ethnicity, gender, religion, or LGBTQ+ identity.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title"><i class="fas fa-flask text-primary me-2"></i> Field of Study</h4>
                                <p class="card-text">Specific to certain majors or career paths, often funded by industry organizations or companies seeking future talent.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title"><i class="fas fa-globe-americas text-primary me-2"></i> Location-Based</h4>
                                <p class="card-text">Available to students from specific geographic regions or planning to attend schools in particular areas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title"><i class="fas fa-briefcase text-primary me-2"></i> Career-Specific</h4>
                                <p class="card-text">Aimed at students pursuing particular career paths, often with a commitment to work in certain fields after graduation.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Scholarship Search Filters</h3>
                
                <p>Use our comprehensive filter system to narrow down scholarships that best match your profile:</p>
                
                <div class="resource-filters mb-5">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="award-amount" class="form-label">Award Amount</label>
                            <select id="award-amount" class="form-select">
                                <option value="any">Any Amount</option>
                                <option value="under5k">Under $5,000</option>
                                <option value="5k-10k">$5,000 - $10,000</option>
                                <option value="10k-25k">$10,000 - $25,000</option>
                                <option value="25kplus">Over $25,000</option>
                                <option value="fullride">Full Ride</option>
                            </select>
                        </div>
                        
                        <div class="col-md-4 mb-3">
                            <label for="deadline" class="form-label">Deadline</label>
                            <select id="deadline" class="form-select">
                                <option value="any">Any Time</option>
                                <option value="1month">Within 1 Month</option>
                                <option value="3months">Within 3 Months</option>
                                <option value="6months">Within 6 Months</option>
                                <option value="fall">Fall Deadlines</option>
                                <option value="spring">Spring Deadlines</option>
                            </select>
                        </div>
                        
                        <div class="col-md-4 mb-3">
                            <label for="education-level" class="form-label">Education Level</label>
                            <select id="education-level" class="form-select">
                                <option value="any">Any Level</option>
                                <option value="high-school">High School</option>
                                <option value="undergraduate">Undergraduate</option>
                                <option value="graduate">Graduate</option>
                                <option value="phd">PhD/Doctoral</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="field-of-study" class="form-label">Field of Study</label>
                            <select id="field-of-study" class="form-select">
                                <option value="any">Any Field</option>
                                <option value="business">Business</option>
                                <option value="stem">STEM</option>
                                <option value="humanities">Humanities</option>
                                <option value="arts">Arts</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="education">Education</option>
                                <option value="social-sciences">Social Sciences</option>
                            </select>
                        </div>
                        
                        <div class="col-md-4 mb-3">
                            <label for="scholarship-type" class="form-label">Scholarship Type</label>
                            <select id="scholarship-type" class="form-select">
                                <option value="any">All Types</option>
                                <option value="merit">Merit-Based</option>
                                <option value="need">Need-Based</option>
                                <option value="identity">Identity-Based</option>
                                <option value="athletic">Athletic</option>
                                <option value="creative">Creative/Artistic</option>
                                <option value="first-gen">First-Generation</option>
                            </select>
                        </div>
                        
                        <div class="col-md-4 mb-3">
                            <label for="citizenship" class="form-label">Citizenship Requirement</label>
                            <select id="citizenship" class="form-select">
                                <option value="any">Any Status</option>
                                <option value="us-citizen">US Citizens Only</option>
                                <option value="permanent-resident">Permanent Residents Eligible</option>
                                <option value="international">International Students Eligible</option>
                                <option value="daca">DACA Recipients Eligible</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12 text-center mt-3">
                            <button id="search-scholarships" class="btn btn-primary">Search Scholarships</button>
                            <button id="reset-filters" class="btn btn-secondary ms-2">Reset Filters</button>
                        </div>
                    </div>
                </div>
                
                <!-- Sample Scholarship Results -->
                <div id="scholarship-results">
                    <h3>Featured Scholarships</h3>
                    <p class="text-muted mb-4">Here are some highlighted scholarship opportunities updated for the current academic year. Use the filters above to refine your search.</p>
                    
                    <div class="scholarship-list">
                        <!-- Scholarship 1 -->
                        <div class="scholarship-item">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>The Gates Scholarship</h4>
                                    <div class="scholarship-details">
                                        <span class="badge bg-primary">Full Ride</span>
                                        <span class="badge bg-info">Need-Based</span>
                                        <span class="badge bg-secondary">Undergraduate</span>
                                    </div>
                                    <p>Provides full funding for outstanding, minority, high school seniors from low-income households who have demonstrated leadership abilities and exceptional academic promise.</p>
                                    <div class="scholarship-meta">
                                        <span><i class="far fa-calendar-alt me-1"></i> Deadline: September 15, 2023</span>
                                        <span><i class="fas fa-globe me-1"></i> US Citizens/Permanent Residents</span>
                                    </div>
                                </div>
                                <div class="col-md-4 text-md-end d-flex flex-column justify-content-center">
                                    <a href="#" class="btn btn-outline-primary mb-2">View Details</a>
                                    <a href="#" class="text-primary"><small>Save to Favorites <i class="far fa-heart"></i></small></a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Scholarship 2 -->
                        <div class="scholarship-item">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>Coca-Cola Scholars Program</h4>
                                    <div class="scholarship-details">
                                        <span class="badge bg-primary">$20,000</span>
                                        <span class="badge bg-info">Merit-Based</span>
                                        <span class="badge bg-secondary">Undergraduate</span>
                                    </div>
                                    <p>Achievement-based scholarship awarded to graduating high school seniors with a demonstrated capacity to lead and serve, and a commitment to making a significant impact on their schools and communities.</p>
                                    <div class="scholarship-meta">
                                        <span><i class="far fa-calendar-alt me-1"></i> Deadline: October 31, 2023</span>
                                        <span><i class="fas fa-globe me-1"></i> US Citizens/Permanent Residents/DACA</span>
                                    </div>
                                </div>
                                <div class="col-md-4 text-md-end d-flex flex-column justify-content-center">
                                    <a href="#" class="btn btn-outline-primary mb-2">View Details</a>
                                    <a href="#" class="text-primary"><small>Save to Favorites <i class="far fa-heart"></i></small></a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Scholarship 3 -->
                        <div class="scholarship-item">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>Women in STEM Scholarship</h4>
                                    <div class="scholarship-details">
                                        <span class="badge bg-primary">$5,000</span>
                                        <span class="badge bg-info">Identity-Based</span>
                                        <span class="badge bg-secondary">Undergraduate/Graduate</span>
                                    </div>
                                    <p>Supports women pursuing degrees in science, technology, engineering, and mathematics who demonstrate academic excellence and a passion for advancing women's representation in STEM fields.</p>
                                    <div class="scholarship-meta">
                                        <span><i class="far fa-calendar-alt me-1"></i> Deadline: March 15, 2024</span>
                                        <span><i class="fas fa-globe me-1"></i> All Citizenship Statuses</span>
                                    </div>
                                </div>
                                <div class="col-md-4 text-md-end d-flex flex-column justify-content-center">
                                    <a href="#" class="btn btn-outline-primary mb-2">View Details</a>
                                    <a href="#" class="text-primary"><small>Save to Favorites <i class="far fa-heart"></i></small></a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Scholarship 4 -->
                        <div class="scholarship-item">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>Jack Kent Cooke Foundation Scholarship</h4>
                                    <div class="scholarship-details">
                                        <span class="badge bg-primary">Up to $55,000/year</span>
                                        <span class="badge bg-info">Need-Based</span>
                                        <span class="badge bg-secondary">Undergraduate</span>
                                    </div>
                                    <p>Provides funding for high-achieving students with financial need to attend the nation's top colleges and universities. Includes personalized advising and access to a network of scholars.</p>
                                    <div class="scholarship-meta">
                                        <span><i class="far fa-calendar-alt me-1"></i> Deadline: November 30, 2023</span>
                                        <span><i class="fas fa-globe me-1"></i> US Citizens/Permanent Residents/DACA</span>
                                    </div>
                                </div>
                                <div class="col-md-4 text-md-end d-flex flex-column justify-content-center">
                                    <a href="#" class="btn btn-outline-primary mb-2">View Details</a>
                                    <a href="#" class="text-primary"><small>Save to Favorites <i class="far fa-heart"></i></small></a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Scholarship 5 -->
                        <div class="scholarship-item">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>Fulbright Foreign Student Program</h4>
                                    <div class="scholarship-details">
                                        <span class="badge bg-primary">Full Funding</span>
                                        <span class="badge bg-info">Merit-Based</span>
                                        <span class="badge bg-secondary">Graduate</span>
                                    </div>
                                    <p>Enables graduate students, young professionals, and artists from abroad to research and study in the United States for one year or longer at U.S. universities or other institutions.</p>
                                    <div class="scholarship-meta">
                                        <span><i class="far fa-calendar-alt me-1"></i> Deadline: Varies by Country</span>
                                        <span><i class="fas fa-globe me-1"></i> International Students</span>
                                    </div>
                                </div>
                                <div class="col-md-4 text-md-end d-flex flex-column justify-content-center">
                                    <a href="#" class="btn btn-outline-primary mb-2">View Details</a>
                                    <a href="#" class="text-primary"><small>Save to Favorites <i class="far fa-heart"></i></small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-4 mb-5">
                        <button class="btn btn-primary">Load More Scholarships</button>
                    </div>
                </div>

                <h3>Scholarship Application Tips</h3>
                
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">Start Early</h4>
                                <p class="card-text">Begin your scholarship search at least 12 months before you need the funding. Many scholarships have deadlines 6-9 months before the academic year starts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">Apply Widely</h4>
                                <p class="card-text">Don't limit yourself to only large or well-known scholarships. Smaller, local scholarships often have less competition and can add up significantly.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">Follow Instructions Precisely</h4>
                                <p class="card-text">Many applications are rejected simply because applicants didn't follow all instructions. Pay close attention to requirements, word counts, and formatting guidelines.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">Personalize Your Applications</h4>
                                <p class="card-text">Tailor your essays and personal statements to each scholarship. Generic applications are easy to spot and rarely successful.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">Proofread Everything</h4>
                                <p class="card-text">Spelling and grammar errors can disqualify even the strongest candidates. Have multiple people review your applications before submission.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">Track Your Applications</h4>
                                <p class="card-text">Create a spreadsheet to track deadlines, requirements, submission dates, and follow-ups for each scholarship you apply to.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Scholarship Application Timeline</h3>
                
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-month">Junior Year - Fall</div>
                        <p>Begin researching scholarship opportunities and creating a list of potential options. Start building your resume and collecting recommendation letters that can be used for multiple applications.</p>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-month">Junior Year - Spring</div>
                        <p>Apply for scholarships with early deadlines. Research local opportunities through community organizations, employers, and religious institutions. Request letters of recommendation.</p>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-month">Summer Before Senior Year</div>
                        <p>Draft and refine essays that can be adapted for different applications. Prepare a scholarship application calendar with all deadlines. Apply for scholarships with summer and early fall deadlines.</p>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-month">Senior Year - Fall</div>
                        <p>Submit applications for major national scholarships. Complete the FAFSA as soon as possible after October 1st. Apply for college-specific scholarships as you submit your college applications.</p>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-month">Senior Year - Winter</div>
                        <p>Continue applying for scholarships with winter deadlines. Follow up on submitted applications if you haven't received confirmation. Apply for scholarships from professional organizations in your field of interest.</p>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-month">Senior Year - Spring</div>
                        <p>Apply for final round of scholarships with spring deadlines. Compare financial aid and scholarship offers from colleges. Negotiate with colleges if needed based on other offers received.</p>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-month">Summer After Senior Year</div>
                        <p>Continue applying for scholarships—many are available for students who have already enrolled in college. Research and apply for departmental scholarships at your chosen institution.</p>
                    </div>
                </div>

                <div class="resource-download-box">
                    <h3>Download the Complete Scholarship Guide</h3>
                    <p>Get our comprehensive guide with detailed strategies, a scholarship tracking template, and essay writing tips to maximize your chances of winning funding.</p>
                    <a href="../downloads/scholarship-guide.pdf" class="btn btn-primary"><i class="fas fa-download"></i> Download PDF</a>
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
                        <img src="../images/resources/essay-writing.jpg" alt="Essay Writing">
                        <div class="resource-type">TOOLKIT</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>College Essay Toolkit</h3>
                        <p>Templates, examples, and step-by-step guidance for crafting standout college application essays.</p>
                        <a href="essay-toolkit.php" class="resource-link">View Resource →</a>
                    </div>
                </div>
                
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="../images/resources/college-comparison.jpg" alt="College Comparison">
                        <div class="resource-type">WORKSHEET</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>College Comparison Tool</h3>
                        <p>Interactive worksheet to help evaluate and compare different universities based on your priorities.</p>
                        <a href="college-comparison.php" class="resource-link">View Resource →</a>
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
    
    <!-- Scholarship Finder Interactive Features -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Scholarship search functionality
            const searchButton = document.getElementById('search-scholarships');
            const resetButton = document.getElementById('reset-filters');
            
            searchButton.addEventListener('click', function() {
                // This would typically make an AJAX request to a backend database
                // For now, we'll just show a message
                alert('In a live implementation, this would search our database using your selected criteria. The results shown below are sample scholarships.');
            });
            
            resetButton.addEventListener('click', function() {
                // Reset all select elements to first option
                document.querySelectorAll('.resource-filters select').forEach(select => {
                    select.selectedIndex = 0;
                });
            });
            
            // Favorite scholarship functionality
            document.querySelectorAll('.scholarship-item .text-primary').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const icon = this.querySelector('i');
                    if (icon.classList.contains('far')) {
                        icon.classList.remove('far');
                        icon.classList.add('fas');
                        this.innerHTML = this.innerHTML.replace('Save to Favorites', 'Saved');
                    } else {
                        icon.classList.remove('fas');
                        icon.classList.add('far');
                        this.innerHTML = this.innerHTML.replace('Saved', 'Save to Favorites');
                    }
                });
            });
        });
    </script>
</body>
</html> 