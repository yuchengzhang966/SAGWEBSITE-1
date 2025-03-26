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
    <title>Networking Strategy Framework - SageArk</title>
    
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
                <div class="resource-type-badge">STRATEGY</div>
                <h1>Networking Strategy Framework</h1>
                <p class="resources-subtitle fw-medium opacity-90">Critical networking problems to address and common mistakes to avoid for more effective professional connections.</p>
                
                <!-- Metadata inside hero section -->
                <div class="resource-metadata">
                    <div class="metadata-item">
                        <i class="far fa-calendar-alt"></i> Last Updated: August 2023
                    </div>
                    <div class="metadata-item">
                        <i class="far fa-clock"></i> Reading Time: 10 minutes
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
                <h2>The Networking Paradox: Why Most People's Approach Fails</h2>
                
                <p>Professional networking is consistently rated as one of the most important career development activities, with studies showing that up to 85% of all jobs are filled through networking. Yet despite this widespread recognition of its importance, most people's networking efforts fall flat.</p>

                <p>This resource identifies the critical problems in networking approaches and highlights the common mistakes that prevent people from building meaningful professional relationships. By understanding what <em>not</em> to do, you can begin to develop a more effective networking strategy.</p>

                <div class="alert alert-warning" role="alert">
                    <strong>Note:</strong> This resource is designed to help you diagnose problems in your networking approach, rather than provide detailed step-by-step guidance. Identifying where your strategy falls short is the first step toward improvement.
                </div>

                <h3>Fundamental Networking Misconceptions</h3>
                
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0">The Five Critical Misunderstandings About Networking</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Misconception</th>
                                                <th>Why It's Problematic</th>
                                                <th>The Reality</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Networking is about collecting as many contacts as possible</strong></td>
                                                <td>Leads to superficial connections and "collection" mentality rather than relationship building</td>
                                                <td>Quality of connections matters far more than quantity</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Networking is primarily for job hunting</strong></td>
                                                <td>Creates transactional relationships that dissolve after immediate needs are met</td>
                                                <td>Effective networking is ongoing and serves multiple purposes beyond just finding employment</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Networking benefits should be immediate</strong></td>
                                                <td>Causes people to abandon relationships that don't yield quick results</td>
                                                <td>The most valuable network connections often develop over months or years</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Networking is mostly for extroverts</strong></td>
                                                <td>Discourages introverts from developing networking strategies that play to their strengths</td>
                                                <td>Different personality types can excel at networking using different approaches</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Networking is primarily about self-promotion</strong></td>
                                                <td>Creates one-sided interactions focused on personal gain rather than mutual benefit</td>
                                                <td>The most effective networking is built on providing value to others first</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Critical Networking Questions Most People Fail to Answer</h3>
                
                <div class="case-section mb-5 p-4 bg-light rounded">
                    <p>Before attending networking events, reaching out to new contacts, or even connecting on LinkedIn, most people fail to answer these essential strategic questions:</p>
                    
                    <div class="accordion" id="accordionQuestions">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <strong>1. What specific value can I offer to others?</strong>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionQuestions">
                                <div class="accordion-body">
                                    <p><strong>Why this question matters:</strong> Networking focused only on what you can get is typically unsuccessful. Without a clear understanding of what you bring to the table, conversations become one-sided requests for help.</p>
                                    <p><strong>Common problem:</strong> Many people, especially students and early career professionals, believe they have "nothing to offer" to more experienced professionals, which creates hesitation and awkward interactions.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <strong>2. What are my specific networking goals?</strong>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionQuestions">
                                <div class="accordion-body">
                                    <p><strong>Why this question matters:</strong> Vague networking goals ("meet interesting people") lead to unfocused conversations and difficulty measuring progress or success.</p>
                                    <p><strong>Common problem:</strong> People attend networking events without clear objectives, resulting in scattered conversations that don't build toward any particular outcome.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>3. How will I systematically maintain relationships?</strong>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionQuestions">
                                <div class="accordion-body">
                                    <p><strong>Why this question matters:</strong> Without a system for following up and nurturing connections, initial meetings rarely develop into meaningful professional relationships.</p>
                                    <p><strong>Common problem:</strong> Many people fail to follow up after initial meetings, or do so in a disorganized manner, causing promising connections to fade over time.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <strong>4. Which networking contexts work best for my personality?</strong>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionQuestions">
                                <div class="accordion-body">
                                    <p><strong>Why this question matters:</strong> Different personality types thrive in different networking environments. Using a one-size-fits-all approach leads to discomfort and ineffectiveness.</p>
                                    <p><strong>Common problem:</strong> Many people force themselves into networking situations that don't match their strengths (e.g., introverts at large mixers, or detail-oriented people in fast-paced speed networking).</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <strong>5. How will I measure networking success?</strong>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionQuestions">
                                <div class="accordion-body">
                                    <p><strong>Why this question matters:</strong> Without clear metrics for success, networking becomes a vague activity with no way to improve or adjust your approach.</p>
                                    <p><strong>Common problem:</strong> Most people evaluate networking success by the number of business cards collected or LinkedIn connections made, rather than meaningful relationship development indicators.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>The Seven Deadly Networking Mistakes</h3>
                
                <div class="row mb-5">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-danger text-white">
                                <h4 class="mb-0"><i class="fas fa-exclamation-triangle me-2"></i> Communication Mistakes</h4>
                            </div>
                            <div class="card-body">
                                <ol class="mb-0">
                                    <li>
                                        <strong>The Elevator Pitch Trap</strong>
                                        <p>Delivering rehearsed, robotic self-introductions that focus exclusively on credentials rather than starting genuine conversations.</p>
                                    </li>
                                    <li>
                                        <strong>The Ask-First Approach</strong>
                                        <p>Beginning relationships with requests for favors or help before establishing rapport or providing value.</p>
                                    </li>
                                    <li>
                                        <strong>The Monologue Problem</strong>
                                        <p>Dominating conversations with your own background, needs, and interests without showing genuine curiosity about others.</p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-danger text-white">
                                <h4 class="mb-0"><i class="fas fa-exclamation-triangle me-2"></i> Strategic Mistakes</h4>
                            </div>
                            <div class="card-body">
                                <ol class="mb-0" start="4">
                                    <li>
                                        <strong>The Scattershot Strategy</strong>
                                        <p>Attempting to network with everyone rather than strategically targeting connections relevant to your specific goals.</p>
                                    </li>
                                    <li>
                                        <strong>The Follow-Up Failure</strong>
                                        <p>Not following up promptly after initial meetings or doing so with generic, unmemorable messages.</p>
                                    </li>
                                    <li>
                                        <strong>The Digital-Only Delusion</strong>
                                        <p>Believing that online connections (LinkedIn, etc.) alone constitute effective networking without developing deeper relationships.</p>
                                    </li>
                                    <li>
                                        <strong>The Crisis-Only Contact</strong>
                                        <p>Reaching out to network contacts only when you need something, creating a pattern of transactional relationships.</p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Industry-Specific Networking Red Flags</h3>
                
                <div class="accordion mb-5" id="accordionIndustry">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingIndustry1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIndustry1" aria-expanded="true" aria-controls="collapseIndustry1">
                                <strong>Consulting & Business</strong>
                            </button>
                        </h2>
                        <div id="collapseIndustry1" class="accordion-collapse collapse show" aria-labelledby="headingIndustry1" data-bs-parent="#accordionIndustry">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="text-danger">Major Pitfalls</h5>
                                        <ul>
                                            <li>Focusing exclusively on senior partners while ignoring analysts and associates</li>
                                            <li>Asking basic questions that demonstrate lack of industry research</li>
                                            <li>Approaching informational interviews as job interviews</li>
                                            <li>Using consultancy-specific terminology incorrectly</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Key Questions Left Unanswered</h5>
                                        <ul>
                                            <li>How does this firm's approach differ from its competitors?</li>
                                            <li>What specific industry expertise would be most valuable for my target role?</li>
                                            <li>Which thought leadership topics align with my background and interests?</li>
                                            <li>How can I demonstrate structured thinking in networking conversations?</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingIndustry2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIndustry2" aria-expanded="false" aria-controls="collapseIndustry2">
                                <strong>Technology & Engineering</strong>
                            </button>
                        </h2>
                        <div id="collapseIndustry2" class="accordion-collapse collapse" aria-labelledby="headingIndustry2" data-bs-parent="#accordionIndustry">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="text-danger">Major Pitfalls</h5>
                                        <ul>
                                            <li>Over-emphasizing technical skills while neglecting communication abilities</li>
                                            <li>Failing to demonstrate genuine interest in the company's technical challenges</li>
                                            <li>Not leveraging open-source contributions or project work in conversations</li>
                                            <li>Neglecting to research a company's tech stack before networking events</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Key Questions Left Unanswered</h5>
                                        <ul>
                                            <li>How does my technical background solve specific problems for this organization?</li>
                                            <li>Which technical communities (online or offline) are most relevant to my interests?</li>
                                            <li>How can I demonstrate both technical depth and communication skills?</li>
                                            <li>What technical side projects would showcase my abilities in this field?</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingIndustry3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIndustry3" aria-expanded="false" aria-controls="collapseIndustry3">
                                <strong>Finance & Banking</strong>
                            </button>
                        </h2>
                        <div id="collapseIndustry3" class="accordion-collapse collapse" aria-labelledby="headingIndustry3" data-bs-parent="#accordionIndustry">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="text-danger">Major Pitfalls</h5>
                                        <ul>
                                            <li>Demonstrating insufficient market knowledge in conversations</li>
                                            <li>Focusing exclusively on compensation and prestige</li>
                                            <li>Lacking awareness of current regulatory environment and industry trends</li>
                                            <li>Missing opportunities to demonstrate quantitative thinking</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Key Questions Left Unanswered</h5>
                                        <ul>
                                            <li>How does my background specifically align with this firm's core business areas?</li>
                                            <li>Which financial publications or resources am I following to stay current?</li>
                                            <li>How can I demonstrate both analytical skills and client relationship potential?</li>
                                            <li>What specific finance sector aligns best with my interests and strengths?</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Networking Self-Assessment: Are You Making These Mistakes?</h3>
                
                <div class="case-container p-4 mb-5 bg-light rounded">
                    <p>Rate yourself on each of the following dimensions to identify your key networking weaknesses:</p>
                    
                    <form>
                        <div class="mb-4">
                            <label class="form-label"><strong>1. Relationship Maintenance</strong></label>
                            <div class="form-text mb-2">How consistently do you maintain contact with your network?</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="maintenance" id="maintenance1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="maintenance1">Only when I need something</label>
                                
                                <input type="radio" class="btn-check" name="maintenance" id="maintenance2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="maintenance2">Sporadically</label>
                                
                                <input type="radio" class="btn-check" name="maintenance" id="maintenance3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="maintenance3">Regularly with key contacts</label>
                                
                                <input type="radio" class="btn-check" name="maintenance" id="maintenance4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="maintenance4">Systematically with all contacts</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label"><strong>2. Value Provision</strong></label>
                            <div class="form-text mb-2">How often do you provide value to your network contacts?</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="value" id="value1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="value1">Rarely think about it</label>
                                
                                <input type="radio" class="btn-check" name="value" id="value2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="value2">Only when asked</label>
                                
                                <input type="radio" class="btn-check" name="value" id="value3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="value3">Sometimes proactively</label>
                                
                                <input type="radio" class="btn-check" name="value" id="value4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="value4">Consistently and proactively</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label"><strong>3. Network Diversity</strong></label>
                            <div class="form-text mb-2">How diverse is your professional network?</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="diversity" id="diversity1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="diversity1">Very homogeneous</label>
                                
                                <input type="radio" class="btn-check" name="diversity" id="diversity2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="diversity2">Somewhat limited</label>
                                
                                <input type="radio" class="btn-check" name="diversity" id="diversity3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="diversity3">Moderately diverse</label>
                                
                                <input type="radio" class="btn-check" name="diversity" id="diversity4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="diversity4">Highly diverse</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label"><strong>4. Strategic Approach</strong></label>
                            <div class="form-text mb-2">How strategic is your approach to building your network?</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="strategy" id="strategy1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="strategy1">Completely random</label>
                                
                                <input type="radio" class="btn-check" name="strategy" id="strategy2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="strategy2">Somewhat opportunistic</label>
                                
                                <input type="radio" class="btn-check" name="strategy" id="strategy3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="strategy3">Generally planned</label>
                                
                                <input type="radio" class="btn-check" name="strategy" id="strategy4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="strategy4">Highly strategic</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label"><strong>5. Relationship Depth</strong></label>
                            <div class="form-text mb-2">How would you characterize the depth of your professional relationships?</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="depth" id="depth1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="depth1">Mostly superficial</label>
                                
                                <input type="radio" class="btn-check" name="depth" id="depth2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="depth2">A few deeper connections</label>
                                
                                <input type="radio" class="btn-check" name="depth" id="depth3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="depth3">Several meaningful relationships</label>
                                
                                <input type="radio" class="btn-check" name="depth" id="depth4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="depth4">Many deep, trusting relationships</label>
                            </div>
                        </div>
                        
                        <div class="text-center mt-4">
                            <button type="button" class="btn btn-primary" id="resetAssessment">Reset Assessment</button>
                        </div>
                    </form>
                </div>

                <h3>Common Signs Your Networking Isn't Working</h3>
                
                <div class="alert alert-danger mb-5" role="alert">
                    <h5><i class="fas fa-exclamation-circle me-2"></i> Warning Signs</h5>
                    <p>If you experience several of these indicators, your networking approach likely needs significant revision:</p>
                    <ul class="mb-0">
                        <li>Your outreach messages and connection requests are frequently ignored</li>
                        <li>Conversations at networking events rarely extend beyond brief introductions</li>
                        <li>You feel uncomfortable or inauthentic when describing your networking goals</li>
                        <li>Your network consists mainly of people very similar to yourself</li>
                        <li>You can't name 5-10 people who would enthusiastically recommend you professionally</li>
                        <li>You rarely receive unsolicited professional opportunities through your network</li>
                        <li>You struggle to articulate the specific value you offer to your connections</li>
                        <li>Your follow-ups don't lead to continuing conversations or relationships</li>
                    </ul>
                </div>

                <div class="alert alert-info mb-5" role="alert">
                    <h5><i class="fas fa-lightbulb me-2"></i> Key Insight</h5>
                    <p class="mb-0">Identifying the problems in your networking approach is the critical first step toward improvement. Without accurately diagnosing where your strategy is falling short, even the best networking tactics will yield limited results.</p>
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
                        <img src="../images/resources/resume.jpg" alt="Resume Red Flags">
                        <div class="resource-type">TEMPLATE</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Resume Red Flags</h3>
                        <p>Identify and fix the critical issues that could be preventing your resume from making it past applicant tracking systems and recruiters.</p>
                        <a href="resume-templates.php" class="resource-link">View Resource →</a>
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
            </div>
        </div>
    </section>

    <!-- Include the footer -->
    <?php include '../includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="../script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple script to reset the self-assessment
        document.getElementById('resetAssessment').addEventListener('click', function() {
            const radioButtons = document.querySelectorAll('.btn-check');
            radioButtons.forEach(radio => {
                radio.checked = false;
            });
        });
    </script>
</body>
</html> 