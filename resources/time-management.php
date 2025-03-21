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
    <title>Time Management System - SageArk</title>
    
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
                <div class="resource-type-badge">WORKBOOK</div>
                <h1>Time Management System</h1>
                <p class="resources-subtitle">Understanding the critical challenges and essential approaches to managing time effectively as a student balancing academics, extracurriculars, and applications.</p>
                
                <!-- Metadata inside hero section -->
                <div class="resource-metadata">
                    <div class="metadata-item">
                        <i class="far fa-calendar-alt"></i> Last Updated: July 2023
                    </div>
                    <div class="metadata-item">
                        <i class="far fa-clock"></i> Reading Time: 13 minutes
                    </div>
                    <div class="metadata-item">
                        <i class="fas fa-tag"></i> Category: Personal Growth
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resource Content Section -->
    <section class="resource-content section-padding active">
        <div class="container">
            <div class="resource-main-content">
                <h2>The Time Management Crisis Among Students</h2>
                
                <p>Time management consistently ranks as one of the most significant challenges facing today's students. In a world of constant digital distractions, increasing academic demands, and pressure to build impressive extracurricular profiles, many students find themselves overwhelmed, stressed, and unable to perform at their best.</p>

                <p>This resource highlights the core time management challenges that students face and introduces key concepts from our comprehensive time management system, which is taught in-depth as part of our career development program. By understanding these challenges, you can begin to identify which areas need the most attention in your own time management practice.</p>

                <div class="alert alert-primary" role="alert">
                    <strong>Note:</strong> The SageArk Time Management System is taught comprehensively in our career development program, where students receive personalized coaching and implementation support. This resource introduces key concepts and challenges to help you begin identifying your time management obstacles.
                </div>

                <h3>The Five Critical Time Management Challenges</h3>
                
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0">Why Time Management Fails for Most Students</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Challenge</th>
                                                <th>Common Symptoms</th>
                                                <th>Core Issue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Unrealistic Planning</strong></td>
                                                <td>Consistently underestimating how long tasks will take; feeling perpetually behind schedule</td>
                                                <td>Failure to account for transition time, interruptions, and the natural variability in task completion</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Decision Fatigue</strong></td>
                                                <td>Exhaustion from too many small decisions; difficulty starting important work</td>
                                                <td>Depletion of mental energy from constant prioritization without proper systems</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Digital Distraction</strong></td>
                                                <td>Constant app-switching; "just checking" behavior; difficulty sustaining focus</td>
                                                <td>Absence of technological boundaries and dopamine-driven attention patterns</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Perfectionism Paralysis</strong></td>
                                                <td>Spending too much time on low-value tasks; procrastination on important projects</td>
                                                <td>Fear of imperfection preventing timely execution and appropriate effort allocation</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Reactive Mode</strong></td>
                                                <td>Feeling constantly "busy" but not productive; responding primarily to external demands</td>
                                                <td>Lack of proactive systems that protect time for high-priority, long-term goals</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Time Management Myths That Derail Students</h3>
                
                <div class="case-section mb-5 p-4 bg-light rounded">
                    <p>Before developing effective time management strategies, it's crucial to address common misconceptions that lead students astray:</p>
                    
                    <div class="accordion" id="accordionMyths">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <strong>Myth #1: Multitasking increases productivity</strong>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionMyths">
                                <div class="accordion-body">
                                    <p><strong>Why this myth persists:</strong> Switching between tasks creates an illusion of accomplishment and provides momentary dopamine hits that feel rewarding.</p>
                                    <p><strong>The reality:</strong> Research consistently shows that multitasking reduces cognitive performance by up to 40%, increases errors, and extends the time needed to complete tasks. What feels like simultaneous processing is actually rapid task-switching that taxes the brain's executive function.</p>
                                    <p><strong>The core problem:</strong> Students who attempt to study while texting, checking social media, or watching videos are effectively studying at a significantly reduced cognitive capacity.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <strong>Myth #2: More hours equals more productivity</strong>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionMyths">
                                <div class="accordion-body">
                                    <p><strong>Why this myth persists:</strong> Time input is easily measurable and visible to others, creating the appearance of dedication and hard work.</p>
                                    <p><strong>The reality:</strong> Productivity follows a curve where returns diminish significantly after certain thresholds. Research shows that optimal cognitive performance requires appropriate rest cycles, and extended work periods lead to decreased quality and creativity.</p>
                                    <p><strong>The core problem:</strong> Students who pride themselves on "all-nighters" or excessive study hours often produce lower quality work while building unsustainable habits that lead to burnout.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>Myth #3: Willpower is the primary factor in time management</strong>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionMyths">
                                <div class="accordion-body">
                                    <p><strong>Why this myth persists:</strong> Cultural narratives celebrate individual discipline and grit, suggesting that success is primarily a function of personal willpower.</p>
                                    <p><strong>The reality:</strong> Willpower is a limited resource that depletes throughout the day. Effective time management relies more on environmental design, systems, and habit formation than on constant self-discipline.</p>
                                    <p><strong>The core problem:</strong> Students who rely solely on willpower to manage their time often experience cycles of productivity followed by complete breakdowns in their systems.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <strong>Myth #4: The perfect planning system exists</strong>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionMyths">
                                <div class="accordion-body">
                                    <p><strong>Why this myth persists:</strong> The productivity industry promotes countless planners, apps, and systems, suggesting that finding the "right" one will solve all time management problems.</p>
                                    <p><strong>The reality:</strong> Effective time management systems are personalized and must align with individual cognitive styles, values, and specific challenges. No universal system works for everyone.</p>
                                    <p><strong>The core problem:</strong> Students often bounce between different planning systems, spending more time on organizational tools than on actual work, and becoming discouraged when popular systems don't work for them.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>The Four Dimensions of Effective Time Management</h3>
                
                <div class="row mb-5">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0"><i class="fas fa-check-square me-2"></i> Priority Management</h4>
                            </div>
                            <div class="card-body">
                                <h5>Core Challenge:</h5>
                                <p>Distinguishing between what is urgent and what is important, and allocating time accordingly.</p>
                                
                                <h5>Common Problems:</h5>
                                <ul>
                                    <li>Spending time on urgent but low-importance tasks</li>
                                    <li>Neglecting important but non-urgent activities (e.g., long-term projects, health, relationships)</li>
                                    <li>Failure to regularly reassess priorities as circumstances change</li>
                                    <li>Allowing others' priorities to consistently override your own</li>
                                </ul>
                                
                                <h5>Critical Question:</h5>
                                <p>How do I ensure that my most important goals receive adequate time and attention, even when they don't have immediate deadlines?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0"><i class="fas fa-hourglass-half me-2"></i> Energy Management</h4>
                            </div>
                            <div class="card-body">
                                <h5>Core Challenge:</h5>
                                <p>Aligning tasks with your natural energy rhythms and maintaining sustainable productivity.</p>
                                
                                <h5>Common Problems:</h5>
                                <ul>
                                    <li>Ignoring natural productivity peaks and valleys throughout the day</li>
                                    <li>Attempting high-cognitive tasks when mentally depleted</li>
                                    <li>Insufficient recovery periods leading to diminishing returns</li>
                                    <li>Neglecting physical factors that influence cognitive performance</li>
                                </ul>
                                
                                <h5>Critical Question:</h5>
                                <p>How can I structure my day to leverage my periods of peak mental energy for my most demanding tasks?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0"><i class="fas fa-focus me-2"></i> Attention Management</h4>
                            </div>
                            <div class="card-body">
                                <h5>Core Challenge:</h5>
                                <p>Developing the ability to direct and sustain focus in an increasingly distracting environment.</p>
                                
                                <h5>Common Problems:</h5>
                                <ul>
                                    <li>Digital interruptions fragmenting attention</li>
                                    <li>Difficulty achieving "deep work" states necessary for complex learning</li>
                                    <li>Mental context-switching costs between different subjects or projects</li>
                                    <li>Environmental distractions that prevent sustained concentration</li>
                                </ul>
                                
                                <h5>Critical Question:</h5>
                                <p>How can I create the conditions necessary for sustained, high-quality focus on my most intellectually demanding tasks?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0"><i class="fas fa-cog me-2"></i> System Management</h4>
                            </div>
                            <div class="card-body">
                                <h5>Core Challenge:</h5>
                                <p>Creating reliable frameworks that reduce cognitive load and automate recurring decisions.</p>
                                
                                <h5>Common Problems:</h5>
                                <ul>
                                    <li>Reinventing processes for recurring tasks</li>
                                    <li>Information scattered across multiple platforms and notebooks</li>
                                    <li>Inconsistent review and reflection practices</li>
                                    <li>Systems that are too complex to maintain long-term</li>
                                </ul>
                                
                                <h5>Critical Question:</h5>
                                <p>How can I develop streamlined systems that capture, organize, and review all my commitments with minimal friction?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Academic-Specific Time Management Challenges</h3>
                
                <div class="accordion mb-5" id="accordionAcademic">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingAcademic1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAcademic1" aria-expanded="true" aria-controls="collapseAcademic1">
                                <strong>The Procrastination-Cramming Cycle</strong>
                            </button>
                        </h2>
                        <div id="collapseAcademic1" class="accordion-collapse collapse show" aria-labelledby="headingAcademic1" data-bs-parent="#accordionAcademic">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="text-danger">Why It's Destructive</h5>
                                        <ul>
                                            <li>Creates unnecessary stress and anxiety</li>
                                            <li>Leads to superficial rather than deep learning</li>
                                            <li>Reduces information retention after exams</li>
                                            <li>Prevents the development of complex understanding</li>
                                            <li>Builds harmful habits that affect future academic and professional work</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Root Causes to Address</h5>
                                        <ul>
                                            <li>Fear of failure or perfectionism that prevents starting</li>
                                            <li>Insufficient breakdown of large projects into manageable tasks</li>
                                            <li>Lack of interim milestones and accountability</li>
                                            <li>Associating studying with negative emotions</li>
                                            <li>Adrenaline addiction from last-minute completion</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingAcademic2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAcademic2" aria-expanded="false" aria-controls="collapseAcademic2">
                                <strong>Ineffective Study Time Allocation</strong>
                            </button>
                        </h2>
                        <div id="collapseAcademic2" class="accordion-collapse collapse" aria-labelledby="headingAcademic2" data-bs-parent="#accordionAcademic">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="text-danger">Why It's Destructive</h5>
                                        <ul>
                                            <li>Misaligns effort with academic impact and grade weighting</li>
                                            <li>Creates imbalance between subjects requiring different approaches</li>
                                            <li>Leads to diminishing returns from over-studying comfortable subjects</li>
                                            <li>Neglects courses that might need more attention</li>
                                            <li>Results in poor performance despite significant time investment</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Root Causes to Address</h5>
                                        <ul>
                                            <li>Studying what's enjoyable rather than what's necessary</li>
                                            <li>Avoidance of challenging subjects that create discomfort</li>
                                            <li>Failure to strategically analyze course requirements and grading structures</li>
                                            <li>Absence of concrete study time allocation plan across subjects</li>
                                            <li>Lack of data-driven adjustment based on performance feedback</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingAcademic3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAcademic3" aria-expanded="false" aria-controls="collapseAcademic3">
                                <strong>Extracurricular Overcommitment</strong>
                            </button>
                        </h2>
                        <div id="collapseAcademic3" class="accordion-collapse collapse" aria-labelledby="headingAcademic3" data-bs-parent="#accordionAcademic">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="text-danger">Why It's Destructive</h5>
                                        <ul>
                                            <li>Creates schedule conflicts that force impossible choices</li>
                                            <li>Prevents deep engagement in any single activity</li>
                                            <li>Leads to burnout and declining performance in all areas</li>
                                            <li>Results in superficial participation rather than meaningful contribution</li>
                                            <li>Undermines the quality of college applications despite appearing impressive</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Root Causes to Address</h5>
                                        <ul>
                                            <li>Misconception that quantity outweighs quality in college applications</li>
                                            <li>FOMO (fear of missing out) on opportunities</li>
                                            <li>Difficulty declining new commitments</li>
                                            <li>Failure to realistically estimate time requirements</li>
                                            <li>Absence of clear personal priorities and strategic focus</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Self-Assessment: Identifying Your Time Management Weaknesses</h3>
                
                <div class="case-container p-4 mb-5 bg-light rounded">
                    <p>Use this assessment to identify your primary time management challenges. Rate yourself on each dimension:</p>
                    
                    <form>
                        <div class="mb-4">
                            <label class="form-label"><strong>1. Task Completion</strong></label>
                            <div class="form-text mb-2">How frequently do you complete tasks by their intended deadlines?</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="completion" id="completion1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="completion1">Rarely</label>
                                
                                <input type="radio" class="btn-check" name="completion" id="completion2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="completion2">Sometimes</label>
                                
                                <input type="radio" class="btn-check" name="completion" id="completion3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="completion3">Usually</label>
                                
                                <input type="radio" class="btn-check" name="completion" id="completion4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="completion4">Almost Always</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label"><strong>2. Focus Duration</strong></label>
                            <div class="form-text mb-2">How long can you typically maintain focused work without checking devices or switching tasks?</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="focus" id="focus1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="focus1">Less than 10 minutes</label>
                                
                                <input type="radio" class="btn-check" name="focus" id="focus2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="focus2">10-25 minutes</label>
                                
                                <input type="radio" class="btn-check" name="focus" id="focus3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="focus3">25-50 minutes</label>
                                
                                <input type="radio" class="btn-check" name="focus" id="focus4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="focus4">50+ minutes</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label"><strong>3. Planning Effectiveness</strong></label>
                            <div class="form-text mb-2">How accurately do you estimate the time needed for tasks and assignments?</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="planning" id="planning1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="planning1">Very inaccurate</label>
                                
                                <input type="radio" class="btn-check" name="planning" id="planning2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="planning2">Somewhat inaccurate</label>
                                
                                <input type="radio" class="btn-check" name="planning" id="planning3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="planning3">Somewhat accurate</label>
                                
                                <input type="radio" class="btn-check" name="planning" id="planning4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="planning4">Very accurate</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label"><strong>4. Project Approach</strong></label>
                            <div class="form-text mb-2">How do you typically approach long-term projects and assignments?</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="projects" id="projects1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="projects1">Last minute rush</label>
                                
                                <input type="radio" class="btn-check" name="projects" id="projects2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="projects2">Some early work, mostly end-loaded</label>
                                
                                <input type="radio" class="btn-check" name="projects" id="projects3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="projects3">Somewhat distributed effort</label>
                                
                                <input type="radio" class="btn-check" name="projects" id="projects4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="projects4">Consistent work throughout</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label"><strong>5. Decision Clarity</strong></label>
                            <div class="form-text mb-2">How clear are you about what to work on at any given time?</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="clarity" id="clarity1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="clarity1">Usually uncertain</label>
                                
                                <input type="radio" class="btn-check" name="clarity" id="clarity2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="clarity2">Sometimes uncertain</label>
                                
                                <input type="radio" class="btn-check" name="clarity" id="clarity3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="clarity3">Mostly clear</label>
                                
                                <input type="radio" class="btn-check" name="clarity" id="clarity4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="clarity4">Very clear</label>
                            </div>
                        </div>
                        
                        <div class="text-center mt-4">
                            <button type="button" class="btn btn-primary" id="resetAssessment">Reset Assessment</button>
                        </div>
                    </form>
                </div>

                <h3>Signs That Your Time Management System Needs Revision</h3>
                
                <div class="alert alert-warning mb-5" role="alert">
                    <h5><i class="fas fa-exclamation-triangle me-2"></i> Warning Signs</h5>
                    <p>If you experience several of these indicators, your time management approach likely requires significant restructuring:</p>
                    <ul class="mb-0">
                        <li>Frequently missing deadlines or completing work at the last minute</li>
                        <li>Feeling perpetually behind despite working long hours</li>
                        <li>Difficulty recalling what you've accomplished at the end of a busy day</li>
                        <li>Regular stress dreams about forgetting assignments or obligations</li>
                        <li>Finding yourself surprised by deadlines you didn't have on your radar</li>
                        <li>Sacrificing sleep regularly to complete necessary work</li>
                        <li>Canceling social activities or personal time due to unexpected academic crises</li>
                        <li>Feeling that you're working harder but not seeing proportionate results</li>
                    </ul>
                </div>

                <div class="alert alert-info mb-5" role="alert">
                    <h5><i class="fas fa-lightbulb me-2"></i> Next Steps</h5>
                    <p class="mb-0">Understanding your time management challenges is the first step toward improvement. Our comprehensive Time Management System, taught in the SageArk Career Development Program, provides personalized strategies to address these challenges through one-on-one coaching and structured implementation. Contact us to learn more about how our program can help you develop sustainable time management practices tailored to your unique needs.</p>
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
                        <img src="../images/resources/mindfulness.jpg" alt="Mindfulness">
                        <div class="resource-type">TOOLKIT</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Student Mindfulness Toolkit</h3>
                        <p>Techniques and exercises to manage stress, improve focus, and maintain mental well-being during high-pressure academic periods.</p>
                        <a href="mindfulness.php" class="resource-link">View Resource →</a>
                    </div>
                </div>
                
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="../images/resources/goal-setting.jpg" alt="Goal Setting">
                        <div class="resource-type">FRAMEWORK</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Goal Setting & Achievement System</h3>
                        <p>Structured approach to setting meaningful goals and developing actionable plans to achieve them.</p>
                        <a href="goal-setting.php" class="resource-link">View Resource →</a>
                    </div>
                </div>
                
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="../images/resources/test-anxiety.jpg" alt="Test Anxiety">
                        <div class="resource-type">TOOLKIT</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Test Anxiety Management</h3>
                        <p>Strategies and techniques to overcome test anxiety and perform at your best on exam day.</p>
                        <a href="test-anxiety.php" class="resource-link">View Resource →</a>
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