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
    <title>Resume Red Flags - SageArk</title>
    
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
                <div class="resource-type-badge">TEMPLATE</div>
                <h1>Resume Red Flags</h1>
                <p class="resources-subtitle">Identify and fix the critical issues that could be preventing your resume from making it past applicant tracking systems and recruiters.</p>
                
                <!-- Metadata inside hero section -->
                <div class="resource-metadata">
                    <div class="metadata-item">
                        <i class="far fa-calendar-alt"></i> Last Updated: June 2023
                    </div>
                    <div class="metadata-item">
                        <i class="far fa-clock"></i> Reading Time: 12 minutes
                    </div>
                    <div class="metadata-item">
                        <i class="fas fa-tag"></i> Category: Career Development
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resource Content Section -->
    <section class="resource-content section-padding active">
        <div class="container">
            <div class="resource-main-content">
                <h2>The Resume Danger Zones: What's Keeping You From Getting Interviews</h2>
                
                <p>Your resume is often the first impression a recruiter or hiring manager has of you. In today's competitive job market, where recruiters spend an average of just 6-7 seconds scanning a resume, even small mistakes can cost you an interview opportunity. Additionally, with roughly 75% of resumes being filtered out by Applicant Tracking Systems (ATS) before a human even sees them, it's critical to avoid common red flags.</p>

                <p>This resource will help you identify and fix the most common resume problems across different industries, ensuring your application makes it past automated systems and captures the attention of recruiters.</p>

                <div class="alert alert-warning" role="alert">
                    <strong>Important:</strong> This resource focuses on problems to avoid rather than providing templates. For a successful job search, first eliminate these red flags, then customize your resume for each position you apply to.
                </div>

                <h3>Universal Resume Red Flags</h3>
                
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-header bg-danger text-white">
                                <h4 class="mb-0">Format & Structure Problems</h4>
                            </div>
                            <div class="card-body">
                                <ul class="mb-0">
                                    <li><strong>Inappropriate length</strong> - Exceeding two pages for most professionals (or one page for recent graduates)</li>
                                    <li><strong>Inconsistent formatting</strong> - Mixing fonts, alignments, or bullet styles</li>
                                    <li><strong>Poor organization</strong> - Illogical order of sections or information</li>
                                    <li><strong>Dense text blocks</strong> - Lack of white space making content difficult to scan</li>
                                    <li><strong>Non-standard file format</strong> - Using formats other than .docx or .pdf</li>
                                    <li><strong>Complex templates</strong> - Using designs with tables, columns, or graphics that confuse ATS systems</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-header bg-danger text-white">
                                <h4 class="mb-0">Content & Language Issues</h4>
                            </div>
                            <div class="card-body">
                                <ul class="mb-0">
                                    <li><strong>Typos and grammatical errors</strong> - Even a single mistake can signal carelessness</li>
                                    <li><strong>Generic objectives</strong> - Vague statements that could apply to any job seeker</li>
                                    <li><strong>Lack of quantifiable achievements</strong> - Statements without metrics or results</li>
                                    <li><strong>Outdated information</strong> - Including obsolete skills or very old experience</li>
                                    <li><strong>Unprofessional email address</strong> - Using casual or inappropriate email handles</li>
                                    <li><strong>Excessive jargon</strong> - Overuse of industry terminology without substantive content</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Industry-Specific Red Flags</h3>
                
                <div class="accordion mb-5" id="accordionIndustry">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <strong>Consulting & Business</strong>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionIndustry">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="text-danger">Major Red Flags</h5>
                                        <ul>
                                            <li><strong>Lack of measurable impact</strong> - Missing quantifiable results or business outcomes</li>
                                            <li><strong>Absence of leadership examples</strong> - Not highlighting team leadership or project management</li>
                                            <li><strong>Vague problem-solving claims</strong> - Statements about analytical skills without specific examples</li>
                                            <li><strong>Missing case competition experience</strong> - For entry-level consulting roles</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>What to Include Instead</h5>
                                        <ul>
                                            <li>Specific metrics showing business impact (e.g., "Reduced operational costs by 15%")</li>
                                            <li>Structured problem-solving examples using frameworks</li>
                                            <li>Client interaction experience, even if from other industries</li>
                                            <li>Evidence of quick learning and adaptability across industries</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <strong>Technology & Engineering</strong>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionIndustry">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="text-danger">Major Red Flags</h5>
                                        <ul>
                                            <li><strong>Outdated technical skills</strong> - Listing obsolete languages or technologies prominently</li>
                                            <li><strong>Missing GitHub/portfolio links</strong> - No proof of coding ability or project work</li>
                                            <li><strong>Vague technical descriptions</strong> - Ambiguous statements about technical work</li>
                                            <li><strong>Emphasis on coursework over projects</strong> - For recent graduates or entry-level positions</li>
                                            <li><strong>Listing every technology ever used</strong> - Including tools with only basic familiarity</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>What to Include Instead</h5>
                                        <ul>
                                            <li>Specific technical contributions to projects</li>
                                            <li>Clear categorization of skills by proficiency level</li>
                                            <li>Metrics on code quality, performance improvements, or user impact</li>
                                            <li>Problem-solving examples specific to technical challenges</li>
                                            <li>Evidence of staying current with industry developments</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <strong>Finance & Banking</strong>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionIndustry">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="text-danger">Major Red Flags</h5>
                                        <ul>
                                            <li><strong>Ambiguity about financial expertise</strong> - Vague descriptions of financial analysis work</li>
                                            <li><strong>Missing technical financial skills</strong> - Not specifying experience with specific models or analyses</li>
                                            <li><strong>Unexplained employment gaps</strong> - Particularly concerning in financial sectors</li>
                                            <li><strong>Lack of regulatory knowledge</strong> - No mention of relevant regulations or compliance</li>
                                            <li><strong>Insufficient attention to detail</strong> - Any numerical inconsistencies or errors</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>What to Include Instead</h5>
                                        <ul>
                                            <li>Specific financial models and analyses performed</li>
                                            <li>Transaction sizes or portfolio values (where appropriate)</li>
                                            <li>Relevant certifications (CFA progress, Series exams, etc.)</li>
                                            <li>Quantitative achievements with precise metrics</li>
                                            <li>Knowledge of specific financial software and systems</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <strong>Marketing & Creative Fields</strong>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionIndustry">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="text-danger">Major Red Flags</h5>
                                        <ul>
                                            <li><strong>Overly creative formatting</strong> - Sacrificing readability for design</li>
                                            <li><strong>Missing portfolio links</strong> - No examples of creative work</li>
                                            <li><strong>Subjective claims about creativity</strong> - Without supporting evidence or results</li>
                                            <li><strong>Focusing on tools over outcomes</strong> - Listing software without showing results</li>
                                            <li><strong>Omitting performance metrics</strong> - No data on campaign success or engagement</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>What to Include Instead</h5>
                                        <ul>
                                            <li>Performance metrics for campaigns or projects</li>
                                            <li>Specific audience growth or engagement numbers</li>
                                            <li>Examples of successful content or campaigns (with links)</li>
                                            <li>Evidence of strategic thinking, not just execution</li>
                                            <li>Balance of creative and analytical skills</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Applicant Tracking System (ATS) Killers</h3>
                
                <div class="case-section mb-5 p-4 bg-light rounded">
                    <p>Before your resume reaches human eyes, it typically must pass through an Applicant Tracking System. These systems reject approximately 75% of resumes before a recruiter ever sees them. Here are the critical red flags that can cause your resume to be filtered out:</p>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-danger">
                                <tr>
                                    <th>ATS Red Flag</th>
                                    <th>Why It's a Problem</th>
                                    <th>How to Fix It</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Non-standard section headings</strong></td>
                                    <td>ATS systems look for standard headings like "Experience," "Education," and "Skills"</td>
                                    <td>Use conventional section headers instead of creative alternatives</td>
                                </tr>
                                <tr>
                                    <td><strong>Graphics, charts, or images</strong></td>
                                    <td>ATS cannot read information presented in visual formats</td>
                                    <td>Present all information in plain text format</td>
                                </tr>
                                <tr>
                                    <td><strong>Headers/footers with important info</strong></td>
                                    <td>Many ATS systems cannot read text in headers or footers</td>
                                    <td>Place all critical information in the main body of the document</td>
                                </tr>
                                <tr>
                                    <td><strong>Tables or multi-column layouts</strong></td>
                                    <td>ATS may read across rows rather than down columns</td>
                                    <td>Use a single-column format for most of the resume</td>
                                </tr>
                                <tr>
                                    <td><strong>Missing keywords from job description</strong></td>
                                    <td>ATS screens for specific terms relevant to the position</td>
                                    <td>Incorporate relevant keywords from the job posting naturally</td>
                                </tr>
                                <tr>
                                    <td><strong>Unconventional file formats</strong></td>
                                    <td>Some systems can only process specific file types</td>
                                    <td>Submit as .docx or .pdf unless otherwise specified</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h3>Red Flags Based on Career Stage</h3>
                
                <div class="row mb-5">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-secondary text-white">
                                <h4 class="card-title mb-0">Entry-Level/Recent Graduates</h4>
                            </div>
                            <div class="card-body">
                                <h5 class="text-danger">Common Red Flags</h5>
                                <ul>
                                    <li>Focusing too much on coursework rather than projects and internships</li>
                                    <li>Including high school information when you have college experience</li>
                                    <li>Using an objective statement instead of a summary</li>
                                    <li>Only listing technical skills without showing application</li>
                                    <li>Emphasizing GPA when it's below 3.5</li>
                                </ul>
                                <hr>
                                <h5>Better Approach</h5>
                                <ul>
                                    <li>Highlight relevant projects, internships, and extracurriculars</li>
                                    <li>Focus on transferable skills with concrete examples</li>
                                    <li>Demonstrate leadership in student organizations</li>
                                    <li>Include relevant coursework only if directly applicable</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-secondary text-white">
                                <h4 class="card-title mb-0">Mid-Career Professionals</h4>
                            </div>
                            <div class="card-body">
                                <h5 class="text-danger">Common Red Flags</h5>
                                <ul>
                                    <li>Including every job without focusing on relevant experience</li>
                                    <li>Job descriptions that focus on duties rather than achievements</li>
                                    <li>Lack of career progression or skill development</li>
                                    <li>Outdated skills prominently featured</li>
                                    <li>Unexplained employment gaps or job-hopping</li>
                                </ul>
                                <hr>
                                <h5>Better Approach</h5>
                                <ul>
                                    <li>Emphasize achievements with quantifiable results</li>
                                    <li>Show progression in responsibility or expertise</li>
                                    <li>Highlight current, relevant skills and continuing education</li>
                                    <li>Focus on the last 10-15 years of experience</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-secondary text-white">
                                <h4 class="card-title mb-0">Senior-Level Executives</h4>
                            </div>
                            <div class="card-body">
                                <h5 class="text-danger">Common Red Flags</h5>
                                <ul>
                                    <li>Too tactical rather than strategic focus</li>
                                    <li>Excessive detail on older positions</li>
                                    <li>Lack of executive presence in language</li>
                                    <li>Missing evidence of leadership impact</li>
                                    <li>No indication of business vision or organizational development</li>
                                </ul>
                                <hr>
                                <h5>Better Approach</h5>
                                <ul>
                                    <li>Focus on organizational impact and transformation</li>
                                    <li>Emphasize leadership philosophy and team development</li>
                                    <li>Include key business metrics and enterprise-level achievements</li>
                                    <li>Demonstrate strategic vision and industry insight</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Self-Assessment: Is Your Resume Raising Red Flags?</h3>
                
                <div class="case-container p-4 mb-5 bg-light rounded">
                    <p>Use this checklist to identify potential red flags in your resume. Review each statement and honestly assess if your resume meets these standards.</p>
                    
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="check1">
                                    <label class="form-check-label" for="check1">
                                        My resume is tailored to the specific job I'm applying for
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="check2">
                                    <label class="form-check-label" for="check2">
                                        Each achievement includes quantifiable results where possible
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="check3">
                                    <label class="form-check-label" for="check3">
                                        My formatting is consistent throughout the document
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="check4">
                                    <label class="form-check-label" for="check4">
                                        I've eliminated generic phrases like "team player" or "detail-oriented"
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="check5">
                                    <label class="form-check-label" for="check5">
                                        My resume uses standard section headings (Experience, Education, Skills)
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="check6">
                                    <label class="form-check-label" for="check6">
                                        I've had at least one other person proofread for errors
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="check7">
                                    <label class="form-check-label" for="check7">
                                        My resume file is saved as a .docx or .pdf
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="check8">
                                    <label class="form-check-label" for="check8">
                                        I've included relevant keywords from the job description
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="check9">
                                    <label class="form-check-label" for="check9">
                                        My resume is appropriately concise for my career stage
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="check10">
                                    <label class="form-check-label" for="check10">
                                        I've eliminated unnecessary personal information (age, marital status, photo)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <button type="button" class="btn btn-primary" id="resetChecklist">Reset Checklist</button>
                        </div>
                    </form>
                </div>

                <h3>Final Tips: Beyond the Red Flags</h3>
                
                <div class="alert alert-info mb-5" role="alert">
                    <h5><i class="fas fa-lightbulb me-2"></i> Remember</h5>
                    <p>Eliminating red flags is only the first step. To create a truly exceptional resume:</p>
                    <ul class="mb-0">
                        <li>Customize your resume for every significant application</li>
                        <li>Focus on achievements rather than responsibilities</li>
                        <li>Use strong action verbs to start bullet points</li>
                        <li>Create a consistent personal brand across all job search materials</li>
                        <li>Update your resume regularly, even when not actively job hunting</li>
                    </ul>
                </div>

                <div class="download-box mb-5">
                    <div class="download-content">
                        <h4>Resume Review Checklist</h4>
                        <p>Download our comprehensive checklist for identifying and fixing resume red flags across all industries.</p>
                        <a href="../downloads/resume-red-flags-checklist.pdf" class="btn btn-primary"><i class="fas fa-download me-2"></i>Download PDF</a>
                    </div>
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
                        <img src="../images/resources/linkedin.jpg" alt="LinkedIn Profile">
                        <div class="resource-type">GUIDE</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>LinkedIn Profile Diagnostic</h3>
                        <p>Identify common problems in your LinkedIn profile and understand what may be holding back your professional presence online.</p>
                        <a href="linkedin-guide.php" class="resource-link">View Resource →</a>
                    </div>
                </div>
                
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="../images/resources/interview-prep.jpg" alt="Interview Preparation">
                        <div class="resource-type">CHECKLIST</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Interview Preparation Checklist</h3>
                        <p>Comprehensive guide to preparing for job interviews, from research to follow-up.</p>
                        <a href="interview-prep.php" class="resource-link">View Resource →</a>
                    </div>
                </div>
                
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="../images/resources/networking.jpg" alt="Networking Strategy">
                        <div class="resource-type">STRATEGY</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Networking Strategy Framework</h3>
                        <p>A structured approach to building and leveraging professional connections effectively.</p>
                        <a href="networking-strategy.php" class="resource-link">View Resource →</a>
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
    <script>
        // Simple script to reset the checklist
        document.getElementById('resetChecklist').addEventListener('click', function() {
            const checkboxes = document.querySelectorAll('.form-check-input');
            checkboxes.forEach(checkbox => {
                checkbox.checked = false;
            });
        });
    </script>
</body>
</html> 