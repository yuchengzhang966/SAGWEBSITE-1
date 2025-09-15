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
    <title>College Comparison Tool - SageArk</title>
    
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
                <div class="resource-type-badge">WORKSHEET</div>
                <h1>College Comparison Tool</h1>
                <p class="resources-subtitle">A comprehensive framework to evaluate and compare different universities based on factors that matter most to your educational goals.</p>
                
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
                <h2>Making the Right College Choice: A Systematic Approach</h2>
                
                <p>Choosing the right college is one of the most significant decisions you'll make in your educational journey. With thousands of institutions offering varying programs, campus cultures, and financial aid packages, it's essential to have a structured way to compare your options. This comparison tool provides a framework to evaluate colleges based on factors that matter most to you.</p>

                <h3>Why a Systematic Comparison Matters</h3>
                
                <p>Many students make college decisions based primarily on reputation or emotional reactions to campus visits. While these factors are important, a more comprehensive approach can help you:</p>
                
                <ul>
                    <li>Identify which schools truly align with your academic, personal, and professional goals</li>
                    <li>Make more objective decisions based on data rather than impressions</li>
                    <li>Consider factors you might otherwise overlook</li>
                    <li>Justify your decision when discussing with family members or counselors</li>
                    <li>Reduce decision regret by ensuring all important aspects were considered</li>
                </ul>
                
                <h3>How to Use This Comparison Tool</h3>
                
                <p>This worksheet is designed to help you evaluate up to four colleges at once across multiple dimensions. Here's how to use it effectively:</p>
                
                <ol>
                    <li><strong>Download the worksheet</strong> at the end of this guide</li>
                    <li><strong>Weight each category</strong> based on its importance to you (1-10)</li>
                    <li><strong>Research each college</strong> and score them in each category (1-10)</li>
                    <li><strong>Multiply the weight by the score</strong> to get weighted scores</li>
                    <li><strong>Calculate the total</strong> for each college to see how they compare</li>
                </ol>
                
                <p>Remember, this tool is meant to supplement—not replace—other aspects of your decision-making process such as campus visits, conversations with current students, and guidance from counselors.</p>
                
                <h3>Key Categories for Comparison</h3>
                
                <div class="comparison-section mb-5">
                    <h4><i class="fas fa-graduation-cap text-primary me-2"></i> Academic Factors</h4>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Category</th>
                                    <th>What to Consider</th>
                                    <th>Where to Find Information</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Program Strength</strong></td>
                                    <td>Rankings, faculty credentials, research opportunities, specialized facilities for your intended major</td>
                                    <td>US News Rankings, college websites, faculty publications, department pages</td>
                                </tr>
                                <tr>
                                    <td><strong>Class Size</strong></td>
                                    <td>Average class size, student-to-faculty ratio, availability of small seminars vs. large lectures</td>
                                    <td>College websites, Common Data Set, campus tours</td>
                                </tr>
                                <tr>
                                    <td><strong>Teaching Quality</strong></td>
                                    <td>Who teaches undergraduate courses (professors vs. TAs), teaching awards, student evaluations</td>
                                    <td>Student review sites, talking to current students, departmental websites</td>
                                </tr>
                                <tr>
                                    <td><strong>Academic Support</strong></td>
                                    <td>Tutoring services, writing centers, academic advising, support for students with disabilities</td>
                                    <td>Student services websites, conversations with support staff during visits</td>
                                </tr>
                                <tr>
                                    <td><strong>Research Opportunities</strong></td>
                                    <td>Undergraduate research programs, funding for student projects, lab/research facilities</td>
                                    <td>Undergraduate research office websites, conversations with faculty</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="comparison-section mb-5">
                    <h4><i class="fas fa-dollar-sign text-primary me-2"></i> Financial Factors</h4>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Category</th>
                                    <th>What to Consider</th>
                                    <th>Where to Find Information</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Total Cost of Attendance</strong></td>
                                    <td>Tuition, fees, room and board, books, travel expenses, personal expenses</td>
                                    <td>College financial aid websites, Net Price Calculator</td>
                                </tr>
                                <tr>
                                    <td><strong>Financial Aid</strong></td>
                                    <td>Grant/scholarship offers, need-based aid, merit scholarships, loan expectations</td>
                                    <td>Financial aid award letters, conversations with financial aid officers</td>
                                </tr>
                                <tr>
                                    <td><strong>Net Price</strong></td>
                                    <td>Actual out-of-pocket cost after grants and scholarships</td>
                                    <td>Financial aid award letters, school-specific net price calculators</td>
                                </tr>
                                <tr>
                                    <td><strong>Debt Projection</strong></td>
                                    <td>Estimated total student loan debt at graduation, average debt of graduates</td>
                                    <td>College Navigator, financial aid offices, College Scorecard</td>
                                </tr>
                                <tr>
                                    <td><strong>Work-Study Options</strong></td>
                                    <td>Availability of on-campus jobs, typical hours and pay rates</td>
                                    <td>Financial aid websites, student employment offices</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="comparison-section mb-5">
                    <h4><i class="fas fa-users text-primary me-2"></i> Campus Life & Culture</h4>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Category</th>
                                    <th>What to Consider</th>
                                    <th>Where to Find Information</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Housing Options</strong></td>
                                    <td>Dorm quality, guaranteed housing years, off-campus options, living-learning communities</td>
                                    <td>Housing websites, campus tours, student reviews</td>
                                </tr>
                                <tr>
                                    <td><strong>Campus Diversity</strong></td>
                                    <td>Ethnic, geographic, socioeconomic diversity; inclusion initiatives; support for specific groups</td>
                                    <td>College Navigator, diversity office websites, campus climate surveys</td>
                                </tr>
                                <tr>
                                    <td><strong>Student Activities</strong></td>
                                    <td>Number and variety of clubs, Greek life, campus traditions, weekend activities</td>
                                    <td>Student affairs websites, campus visits, conversations with current students</td>
                                </tr>
                                <tr>
                                    <td><strong>Safety</strong></td>
                                    <td>Crime statistics, campus security measures, emergency response systems, neighborhood safety</td>
                                    <td>Campus safety reports, Clery Act data, campus security websites</td>
                                </tr>
                                <tr>
                                    <td><strong>Wellness Resources</strong></td>
                                    <td>Mental health services, recreation facilities, health center quality, counseling availability</td>
                                    <td>Student health websites, recreation center information, student reviews</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="comparison-section mb-5">
                    <h4><i class="fas fa-briefcase text-primary me-2"></i> Career Outcomes</h4>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Category</th>
                                    <th>What to Consider</th>
                                    <th>Where to Find Information</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Career Services</strong></td>
                                    <td>Quality of career center, internship placement rates, career fairs, alumni network access</td>
                                    <td>Career services websites, conversations with career counselors during visits</td>
                                </tr>
                                <tr>
                                    <td><strong>Internship Opportunities</strong></td>
                                    <td>Internship programs, corporate partnerships, co-op opportunities, internship credit policies</td>
                                    <td>Career services websites, academic department pages, current student testimonials</td>
                                </tr>
                                <tr>
                                    <td><strong>Employment Outcomes</strong></td>
                                    <td>Job placement rates, starting salaries, graduate school acceptance rates, employers who recruit</td>
                                    <td>Career outcomes reports, College Scorecard, academic department data</td>
                                </tr>
                                <tr>
                                    <td><strong>Alumni Network</strong></td>
                                    <td>Size and engagement of alumni network, alumni mentoring programs, geographic distribution</td>
                                    <td>Alumni office websites, LinkedIn data, alumni events during campus visits</td>
                                </tr>
                                <tr>
                                    <td><strong>Industry Connections</strong></td>
                                    <td>Corporate partnerships, industry-sponsored projects, executive speakers, company visits</td>
                                    <td>Academic department websites, career services, student organization activities</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="comparison-section mb-5">
                    <h4><i class="fas fa-map-marker-alt text-primary me-2"></i> Location & Setting</h4>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Category</th>
                                    <th>What to Consider</th>
                                    <th>Where to Find Information</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Geographic Location</strong></td>
                                    <td>Distance from home, climate, urban/suburban/rural setting, surrounding community</td>
                                    <td>Google Maps, campus websites, climate data, personal visits</td>
                                </tr>
                                <tr>
                                    <td><strong>Transportation</strong></td>
                                    <td>Public transportation, campus shuttle systems, parking availability, airport access</td>
                                    <td>Campus transportation websites, local transit authority sites, student reviews</td>
                                </tr>
                                <tr>
                                    <td><strong>Off-Campus Opportunities</strong></td>
                                    <td>Cultural attractions, outdoor recreation, restaurants, shopping, entertainment</td>
                                    <td>Local tourism websites, campus tours, conversations with students</td>
                                </tr>
                                <tr>
                                    <td><strong>Job Market</strong></td>
                                    <td>Local industry presence, part-time job opportunities, summer employment options</td>
                                    <td>Local chamber of commerce, Bureau of Labor Statistics, career services</td>
                                </tr>
                                <tr>
                                    <td><strong>Cost of Living</strong></td>
                                    <td>Housing costs, food expenses, transportation expenses if living off-campus</td>
                                    <td>Cost of living calculators, off-campus housing websites, student budgeting resources</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h3>Example Comparison Worksheet</h3>
                
                <p>Below is an example of how you might complete the worksheet for three hypothetical schools. Note how weighting the categories based on personal priorities affects the total scores.</p>
                
                <div class="table-responsive mb-5">
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Category</th>
                                <th>Weight (1-10)</th>
                                <th>College A<br>Score (1-10)</th>
                                <th>College A<br>Weighted</th>
                                <th>College B<br>Score (1-10)</th>
                                <th>College B<br>Weighted</th>
                                <th>College C<br>Score (1-10)</th>
                                <th>College C<br>Weighted</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Program Strength</strong></td>
                                <td class="text-center">10</td>
                                <td class="text-center">7</td>
                                <td class="text-center">70</td>
                                <td class="text-center">9</td>
                                <td class="text-center">90</td>
                                <td class="text-center">8</td>
                                <td class="text-center">80</td>
                            </tr>
                            <tr>
                                <td><strong>Class Size</strong></td>
                                <td class="text-center">8</td>
                                <td class="text-center">9</td>
                                <td class="text-center">72</td>
                                <td class="text-center">6</td>
                                <td class="text-center">48</td>
                                <td class="text-center">8</td>
                                <td class="text-center">64</td>
                            </tr>
                            <tr>
                                <td><strong>Financial Aid</strong></td>
                                <td class="text-center">9</td>
                                <td class="text-center">6</td>
                                <td class="text-center">54</td>
                                <td class="text-center">8</td>
                                <td class="text-center">72</td>
                                <td class="text-center">7</td>
                                <td class="text-center">63</td>
                            </tr>
                            <tr>
                                <td><strong>Campus Culture</strong></td>
                                <td class="text-center">7</td>
                                <td class="text-center">9</td>
                                <td class="text-center">63</td>
                                <td class="text-center">7</td>
                                <td class="text-center">49</td>
                                <td class="text-center">8</td>
                                <td class="text-center">56</td>
                            </tr>
                            <tr>
                                <td><strong>Career Outcomes</strong></td>
                                <td class="text-center">9</td>
                                <td class="text-center">7</td>
                                <td class="text-center">63</td>
                                <td class="text-center">9</td>
                                <td class="text-center">81</td>
                                <td class="text-center">8</td>
                                <td class="text-center">72</td>
                            </tr>
                            <tr>
                                <td><strong>Location</strong></td>
                                <td class="text-center">6</td>
                                <td class="text-center">8</td>
                                <td class="text-center">48</td>
                                <td class="text-center">7</td>
                                <td class="text-center">42</td>
                                <td class="text-center">9</td>
                                <td class="text-center">54</td>
                            </tr>
                            <tr class="table-light fw-bold">
                                <td><strong>TOTAL</strong></td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                                <td class="text-center">370</td>
                                <td class="text-center">-</td>
                                <td class="text-center">382</td>
                                <td class="text-center">-</td>
                                <td class="text-center">389</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <p>In this example, College C has the highest overall score due to its balanced performance across categories. However, if you value specific factors more strongly than others, your personal results may differ. This is why the weighting process is so important.</p>

                <h3>Tips for Making Your Final Decision</h3>
                
                <div class="row mb-5">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title"><i class="fas fa-balance-scale text-primary me-2"></i> Trust the Process, But Listen to Your Gut</h4>
                                <p class="card-text">While systematic comparison is valuable, pay attention to your intuitive feelings about each school. If a school scores well on paper but doesn't feel right when you visit, that's important information.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title"><i class="fas fa-chart-pie text-primary me-2"></i> Identify Deal-Breakers</h4>
                                <p class="card-text">Some factors may be non-negotiable for you. If a school fails to meet these critical requirements, it might be wise to remove it from consideration regardless of its overall score.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-5">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title"><i class="fas fa-comments text-primary me-2"></i> Gather Multiple Perspectives</h4>
                                <p class="card-text">Discuss your comparison results with parents, counselors, and current students at each institution. They may highlight factors you've overlooked or help you refine your priorities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title"><i class="fas fa-road text-primary me-2"></i> Consider Your Future Self</h4>
                                <p class="card-text">Think about who you want to become during college, not just who you are now. The right school should help you grow in your desired direction, not just cater to your current preferences.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Common Comparison Pitfalls to Avoid</h3>
                
                <ul>
                    <li><strong>Overemphasizing prestige:</strong> Name recognition doesn't always translate to the best educational experience or outcomes for every student.</li>
                    <li><strong>Focusing only on sticker price:</strong> The published cost often differs dramatically from what students actually pay after financial aid.</li>
                    <li><strong>Following friends or family:</strong> Choosing a school because someone you know went there or is going there may lead to a mismatch with your unique needs.</li>
                    <li><strong>Ignoring fit:</strong> A prestigious program that doesn't match your learning style may lead to poorer outcomes than a less renowned program where you'll thrive.</li>
                    <li><strong>Overlooking graduation rates:</strong> A school's four-year and six-year graduation rates can indicate how well it supports student success.</li>
                </ul>

                <div class="resource-download-box">
                    <h3>Download the College Comparison Worksheet</h3>
                    <p>Get our comprehensive worksheet template to systematically compare your college options and make a data-driven decision.</p>
                    <a href="../downloads/college-comparison-worksheet.pdf" class="btn btn-primary"><i class="fas fa-download"></i> Download PDF</a>
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
                        <img src="../images/resources/scholarship.jpg" alt="Scholarship Finder">
                        <div class="resource-type">DATABASE</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Scholarship Finder</h3>
                        <p>Curated database of scholarships organized by eligibility criteria, amount, and deadline.</p>
                        <a href="scholarship-finder.php" class="resource-link">View Resource →</a>
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