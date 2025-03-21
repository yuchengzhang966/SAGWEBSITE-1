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
    <title>Goal Setting & Achievement System - SageArk</title>
    
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
                <div class="resource-type-badge">FRAMEWORK</div>
                <h1>Goal Setting & Achievement System</h1>
                <p class="resources-subtitle">Understanding the psychological barriers, common pitfalls, and essential elements of effective goal setting for academic and career success.</p>
                
                <!-- Metadata inside hero section -->
                <div class="resource-metadata">
                    <div class="metadata-item">
                        <i class="far fa-calendar-alt"></i> Last Updated: November 2023
                    </div>
                    <div class="metadata-item">
                        <i class="far fa-clock"></i> Reading Time: 14 minutes
                    </div>
                    <div class="metadata-item">
                        <i class="fas fa-tag"></i> Category: Personal Development
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resource Content Section -->
    <section class="resource-content section-padding active">
        <div class="container">
            <div class="resource-main-content">
                <h2>The Goal-Setting Disconnect</h2>
                
                <p>Despite widespread agreement about the importance of goal setting, research shows that up to 92% of people fail to achieve their ambitious goals. This striking disconnect—between our intentions and outcomes—is more than a matter of motivation or willpower. It reveals fundamental flaws in conventional approaches to goal setting and achievement.</p>

                <p>This resource introduces the core challenges and essential frameworks for effective goal setting. The complete Goal Setting & Achievement System is taught in-depth as part of our career development program, where students receive personalized coaching and structured implementation support. By understanding these challenges, you can begin identifying which areas require the most attention in your own goal-setting practice.</p>

                <div class="alert alert-primary" role="alert">
                    <strong>Note:</strong> The SageArk Goal Setting & Achievement System is taught comprehensively in our career development program, with personalized planning tools, accountability systems, and structured review processes. This resource introduces key concepts to help you understand the foundations of effective goal setting.
                </div>

                <h3>The Five Critical Goal-Setting Challenges</h3>
                
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0">Why Most Goal-Setting Fails</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Challenge</th>
                                                <th>Common Symptoms</th>
                                                <th>Root Issue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Goal Misalignment</strong></td>
                                                <td>Pursuing goals that feel externally imposed; lack of intrinsic motivation; rapid enthusiasm loss</td>
                                                <td>Disconnection between stated goals and core values or authentic interests leading to motivational deficits</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Implementation Planning Gap</strong></td>
                                                <td>Setting aspirational targets without concrete action plans; repeated false starts; unclear next steps</td>
                                                <td>Failure to bridge the intention-action gap through specific implementation strategies and environmental design</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Feedback Vacuum</strong></td>
                                                <td>Working in isolation; unclear progress metrics; irregular performance review; persistent blind spots</td>
                                                <td>Absence of structured feedback mechanisms that provide actionable data for course correction and skill development</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Psychological Interference</strong></td>
                                                <td>Self-sabotage; procrastination; imposter syndrome; persistent limiting beliefs; comfort zone entrenchment</td>
                                                <td>Unaddressed psychological barriers creating unconscious resistance to success and change</td>
                                            </tr>
                                            <tr>
                                                <td><strong>System Overwhelm</strong></td>
                                                <td>Too many simultaneous goals; competing priorities; scattered focus; goal abandonment under pressure</td>
                                                <td>Cognitive overload from excessive commitments without adequate prioritization and sequencing frameworks</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Goal-Setting Misconceptions That Undermine Students</h3>
                
                <div class="case-section mb-5 p-4 bg-light rounded">
                    <p>Many students have internalized conventional goal-setting wisdom that actually creates obstacles to achievement:</p>
                    
                    <div class="accordion" id="accordionMisconceptions">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <strong>Misconception #1: "The more ambitious the goal, the better"</strong>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionMisconceptions">
                                <div class="accordion-body">
                                    <p><strong>Why this misconception persists:</strong> Motivational culture celebrates "shooting for the stars" and "dreaming big," creating the impression that setting extreme goals is essential for significant achievement.</p>
                                    <p><strong>The reality:</strong> Research in goal-setting theory shows that while challenging goals increase performance compared to easy goals, there's an optimal challenge point beyond which goals become demotivating. When goals feel unattainable, motivation decreases and performance suffers.</p>
                                    <p><strong>The core problem:</strong> Students often set unrealistic initial goals, experience inevitable failure, and then incorrectly attribute this to personal inadequacy rather than flawed goal parameters. This creates a negative cycle that damages self-efficacy and future goal commitment.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <strong>Misconception #2: "Willpower is the most important factor in goal achievement"</strong>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionMisconceptions">
                                <div class="accordion-body">
                                    <p><strong>Why this misconception persists:</strong> Cultural narratives often emphasize stories of extraordinary determination and grit, suggesting that success is primarily a function of willpower rather than strategy or systems.</p>
                                    <p><strong>The reality:</strong> Psychological research consistently shows that willpower is a limited resource that depletes with use. Environment design, habit formation, and strategic implementation planning are much stronger predictors of goal achievement than raw willpower.</p>
                                    <p><strong>The core problem:</strong> Students who rely primarily on willpower create unsustainable achievement systems that eventually collapse under pressure, leading to goal abandonment and reinforcing beliefs about personal failure rather than process failure.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>Misconception #3: "Keep your goals to yourself"</strong>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionMisconceptions">
                                <div class="accordion-body">
                                    <p><strong>Why this misconception persists:</strong> Certain studies suggest that premature identity satisfaction can occur when sharing goals, and fear of public failure makes private goals seem safer.</p>
                                    <p><strong>The reality:</strong> While indiscriminate goal broadcasting can be counterproductive, strategic accountability partners and structured support systems dramatically increase achievement rates. The key is selecting the right accountability format and partners.</p>
                                    <p><strong>The core problem:</strong> Students who keep their goals entirely private miss critical opportunities for feedback, support, and accountability that would increase their probability of success, particularly for complex or long-term goals.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <strong>Misconception #4: "Focus exclusively on outcome goals"</strong>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionMisconceptions">
                                <div class="accordion-body">
                                    <p><strong>Why this misconception persists:</strong> Outcome goals (e.g., achieving a specific GPA, weight, or career position) are concrete and easily measurable, making them attractive focal points for goal-setting efforts.</p>
                                    <p><strong>The reality:</strong> Research shows that exclusive focus on outcome goals often undermines performance because many outcomes are influenced by factors beyond personal control. Process goals (focusing on behaviors and systems) create more sustainable progress and psychological well-being.</p>
                                    <p><strong>The core problem:</strong> Students who fixate solely on outcomes often experience anxiety, engage in counterproductive behaviors when falling short, and miss the opportunity to develop the fundamental processes and systems that actually produce desired results.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>The Four Dimensions of Effective Goal Achievement</h3>
                
                <div class="row mb-5">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0"><i class="fas fa-compass me-2"></i> Strategic Alignment</h4>
                            </div>
                            <div class="card-body">
                                <h5>Core Challenge:</h5>
                                <p>Creating coherence between goals, values, and authentic interests to ensure sustainable motivation.</p>
                                
                                <h5>Common Problems:</h5>
                                <ul>
                                    <li>Pursuing goals based primarily on external expectations</li>
                                    <li>Setting contradictory goals that create internal conflict</li>
                                    <li>Failure to connect daily actions to meaningful purpose</li>
                                    <li>Insufficient clarity about personal values and priorities</li>
                                </ul>
                                
                                <h5>Critical Questions:</h5>
                                <p>How can I ensure my goals authentically reflect my values and interests? How do I create a coherent system where my various goals reinforce rather than compete with each other?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0"><i class="fas fa-sitemap me-2"></i> Implementation Architecture</h4>
                            </div>
                            <div class="card-body">
                                <h5>Core Challenge:</h5>
                                <p>Translating aspirational targets into concrete action systems and environmental design.</p>
                                
                                <h5>Common Problems:</h5>
                                <ul>
                                    <li>Vague or abstract goal formulation without specific metrics</li>
                                    <li>Missing implementation plans for overcoming obstacles</li>
                                    <li>Environments that contradict rather than support goals</li>
                                    <li>Inadequate chunking of large goals into manageable steps</li>
                                </ul>
                                
                                <h5>Critical Questions:</h5>
                                <p>How can I design specific implementation systems that bridge the intention-action gap? What environmental modifications would make my desired behaviors more automatic and default?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0"><i class="fas fa-sync-alt me-2"></i> Feedback Integration</h4>
                            </div>
                            <div class="card-body">
                                <h5>Core Challenge:</h5>
                                <p>Creating systematic review processes that enable continuous improvement and course correction.</p>
                                
                                <h5>Common Problems:</h5>
                                <ul>
                                    <li>Inadequate tracking of progress and key metrics</li>
                                    <li>Avoidance of honest self-assessment</li>
                                    <li>Difficulty interpreting feedback constructively</li>
                                    <li>Irregular or absent review processes</li>
                                </ul>
                                
                                <h5>Critical Questions:</h5>
                                <p>What specific data would help me evaluate progress toward my goals? How can I create regular review processes that promote honest reflection and strategic adjustment?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0"><i class="fas fa-brain me-2"></i> Psychological Management</h4>
                            </div>
                            <div class="card-body">
                                <h5>Core Challenge:</h5>
                                <p>Identifying and addressing the subconscious barriers and limiting beliefs that create resistance to achievement.</p>
                                
                                <h5>Common Problems:</h5>
                                <ul>
                                    <li>Unexamined limiting beliefs about capability or worthiness</li>
                                    <li>Fear-based procrastination and self-sabotage</li>
                                    <li>Identity conflicts with goal requirements</li>
                                    <li>Perfectionism preventing action and progress</li>
                                </ul>
                                
                                <h5>Critical Questions:</h5>
                                <p>What unconscious beliefs or fears might be creating resistance to my goals? How can I develop psychological strategies to navigate discomfort, setbacks, and internal barriers?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Context-Specific Goal Achievement Challenges for Students</h3>
                
                <div class="accordion mb-5" id="accordionContexts">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingContext1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContext1" aria-expanded="true" aria-controls="collapseContext1">
                                <strong>Academic Performance Goals</strong>
                            </button>
                        </h2>
                        <div id="collapseContext1" class="accordion-collapse collapse show" aria-labelledby="headingContext1" data-bs-parent="#accordionContexts">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="text-danger">Key Challenges</h5>
                                        <ul>
                                            <li>Outcome fixation without process development</li>
                                            <li>Ineffective study strategies despite increased effort</li>
                                            <li>Performance anxiety interfering with execution</li>
                                            <li>Goal conflict between different courses or requirements</li>
                                            <li>Difficulty balancing depth versus breadth of understanding</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Essential Approaches</h5>
                                        <ul>
                                            <li>Performance-process balance: linking desired outcomes to specific study behaviors</li>
                                            <li>Strategic time allocation: differentiating high-leverage learning activities</li>
                                            <li>Metacognitive planning: selecting appropriate strategies for different subjects</li>
                                            <li>Progress tracking: monitoring leading indicators of academic success</li>
                                            <li>Feedback utilization: extracting actionable insights from assessments</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingContext2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContext2" aria-expanded="false" aria-controls="collapseContext2">
                                <strong>Career Development Goals</strong>
                            </button>
                        </h2>
                        <div id="collapseContext2" class="accordion-collapse collapse" aria-labelledby="headingContext2" data-bs-parent="#accordionContexts">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="text-danger">Key Challenges</h5>
                                        <ul>
                                            <li>Decision paralysis from too many potential options</li>
                                            <li>Difficulty balancing exploration versus commitment</li>
                                            <li>Limited visibility into actual job requirements and realities</li>
                                            <li>Unclear connection between current actions and long-term goals</li>
                                            <li>Comparison-driven goals rather than interest-driven focus</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Essential Approaches</h5>
                                        <ul>
                                            <li>Experience sampling: testing career assumptions through direct exposure</li>
                                            <li>Skills inventory: identifying transferable capabilities and development gaps</li>
                                            <li>Network leverage: utilizing relationships for opportunity and insight</li>
                                            <li>Decision architecture: creating frameworks for career path evaluation</li>
                                            <li>Micro-experimentation: designing small tests of potential directions</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingContext3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContext3" aria-expanded="false" aria-controls="collapseContext3">
                                <strong>Personal Development Goals</strong>
                            </button>
                        </h2>
                        <div id="collapseContext3" class="accordion-collapse collapse" aria-labelledby="headingContext3" data-bs-parent="#accordionContexts">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="text-danger">Key Challenges</h5>
                                        <ul>
                                            <li>Poor prioritization among competing developmental areas</li>
                                            <li>Difficulty sustaining motivation without external structure</li>
                                            <li>Inadequate feedback mechanisms for personal growth</li>
                                            <li>Inconsistent practice due to schedule fluctuations</li>
                                            <li>Unclear metrics for measuring progress in subjective areas</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Essential Approaches</h5>
                                        <ul>
                                            <li>Keystone identification: focusing on high-leverage habits with cascading effects</li>
                                            <li>Environment design: creating contexts that make desired behaviors easier</li>
                                            <li>Implementation intention: planning specific when-then contingencies</li>
                                            <li>Progress markers: establishing concrete indicators for subjective growth</li>
                                            <li>Trigger management: identifying and modifying behavior cue patterns</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Self-Assessment: Goal Achievement Obstacles</h3>
                
                <div class="case-container p-4 mb-5 bg-light rounded">
                    <p>Use this assessment to identify your primary goal-setting challenges. Rate each statement based on how frequently you experience it:</p>
                    
                    <form>
                        <div class="mb-4">
                            <label class="form-label"><strong>1. Value Alignment</strong></label>
                            <div class="form-text mb-2">"I often pursue goals that feel more obligatory than personally meaningful."</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="alignment" id="alignment1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="alignment1">Rarely</label>
                                
                                <input type="radio" class="btn-check" name="alignment" id="alignment2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="alignment2">Sometimes</label>
                                
                                <input type="radio" class="btn-check" name="alignment" id="alignment3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="alignment3">Often</label>
                                
                                <input type="radio" class="btn-check" name="alignment" id="alignment4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="alignment4">Very Frequently</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label"><strong>2. Implementation Planning</strong></label>
                            <div class="form-text mb-2">"I set ambitious goals but struggle to translate them into specific, actionable steps."</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="implementation" id="implementation1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="implementation1">Rarely</label>
                                
                                <input type="radio" class="btn-check" name="implementation" id="implementation2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="implementation2">Sometimes</label>
                                
                                <input type="radio" class="btn-check" name="implementation" id="implementation3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="implementation3">Often</label>
                                
                                <input type="radio" class="btn-check" name="implementation" id="implementation4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="implementation4">Very Frequently</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label"><strong>3. Feedback Integration</strong></label>
                            <div class="form-text mb-2">"I rarely track my progress or have objective ways to measure advancement toward my goals."</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="feedback" id="feedback1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="feedback1">Rarely</label>
                                
                                <input type="radio" class="btn-check" name="feedback" id="feedback2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="feedback2">Sometimes</label>
                                
                                <input type="radio" class="btn-check" name="feedback" id="feedback3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="feedback3">Often</label>
                                
                                <input type="radio" class="btn-check" name="feedback" id="feedback4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="feedback4">Very Frequently</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label"><strong>4. Psychological Barriers</strong></label>
                            <div class="form-text mb-2">"I experience self-sabotage, procrastination, or fear that interferes with pursuing my important goals."</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="psychological" id="psychological1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="psychological1">Rarely</label>
                                
                                <input type="radio" class="btn-check" name="psychological" id="psychological2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="psychological2">Sometimes</label>
                                
                                <input type="radio" class="btn-check" name="psychological" id="psychological3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="psychological3">Often</label>
                                
                                <input type="radio" class="btn-check" name="psychological" id="psychological4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="psychological4">Very Frequently</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label"><strong>5. Goal Overload</strong></label>
                            <div class="form-text mb-2">"I try to pursue too many goals simultaneously, resulting in scattered focus and limited progress."</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="overload" id="overload1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="overload1">Rarely</label>
                                
                                <input type="radio" class="btn-check" name="overload" id="overload2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="overload2">Sometimes</label>
                                
                                <input type="radio" class="btn-check" name="overload" id="overload3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="overload3">Often</label>
                                
                                <input type="radio" class="btn-check" name="overload" id="overload4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="overload4">Very Frequently</label>
                            </div>
                        </div>
                        
                        <div class="text-center mt-4">
                            <button type="button" class="btn btn-primary" id="resetAssessment">Reset Assessment</button>
                        </div>
                    </form>
                </div>

                <h3>Warning Signs: When Your Goal-Setting Approach Needs Revision</h3>
                
                <div class="alert alert-warning mb-5" role="alert">
                    <h5><i class="fas fa-exclamation-triangle me-2"></i> System Failure Indicators</h5>
                    <p>If you experience several of these signs, your goal-setting approach likely requires significant restructuring:</p>
                    <ul class="mb-0">
                        <li>Repeatedly setting the same goals without meaningful progress</li>
                        <li>Initial enthusiasm followed by rapid motivation decline</li>
                        <li>Feelings of overwhelm without clear next steps</li>
                        <li>Persistent procrastination on high-priority goals</li>
                        <li>Achieving goals but feeling dissatisfied with the outcomes</li>
                        <li>Difficulty translating intentions into consistent action</li>
                        <li>Goal conflict creating stress and divided attention</li>
                        <li>Success in one area consistently undermining another important area</li>
                    </ul>
                </div>

                <div class="alert alert-info mb-5" role="alert">
                    <h5><i class="fas fa-lightbulb me-2"></i> Next Steps</h5>
                    <p class="mb-0">Understanding your goal achievement challenges is the first step toward developing more effective approaches. Our comprehensive Goal Setting & Achievement System, taught as part of the SageArk Career Development Program, provides personalized frameworks, implementation planning, and ongoing support. Contact us to learn more about how our program can help you transform your aspirations into achievements through strategic goal-setting practices.</p>
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
                        <img src="../images/resources/time-management.jpg" alt="Time Management">
                        <div class="resource-type">WORKBOOK</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Time Management System</h3>
                        <p>Essential strategies for managing time effectively as a student balancing academics, extracurriculars, and applications.</p>
                        <a href="time-management.php" class="resource-link">View Resource →</a>
                    </div>
                </div>
                
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="../images/resources/mindfulness.jpg" alt="Mindfulness Toolkit">
                        <div class="resource-type">TOOLKIT</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Student Mindfulness Toolkit</h3>
                        <p>Understanding the mental wellness challenges facing students and the foundational mindfulness concepts to address them.</p>
                        <a href="mindfulness.php" class="resource-link">View Resource →</a>
                    </div>
                </div>
                
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="../images/resources/productivity.jpg" alt="Productivity System">
                        <div class="resource-type">FRAMEWORK</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Student Productivity System</h3>
                        <p>Core principles and practices for maximizing output while maintaining balance and well-being.</p>
                        <a href="productivity.php" class="resource-link">View Resource →</a>
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