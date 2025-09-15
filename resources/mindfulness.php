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
    <title>Student Mindfulness Toolkit - SageArk</title>
    
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
                <div class="resource-type-badge">TOOLKIT</div>
                <h1>Student Mindfulness Toolkit</h1>
                <p class="resources-subtitle">Understanding the mental wellness challenges facing students and the foundational mindfulness concepts to address them.</p>
                
                <!-- Metadata inside hero section -->
                <div class="resource-metadata">
                    <div class="metadata-item">
                        <i class="far fa-calendar-alt"></i> Last Updated: August 2025
                    </div>
                    <div class="metadata-item">
                        <i class="far fa-clock"></i> Reading Time: 12 minutes
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
                <h2>The Mental Wellness Crisis in Education</h2>
                
                <p>Students today face unprecedented mental wellness challenges. With increasing academic pressure, constant digital connectivity, and heightened competition for opportunities, it's no surprise that anxiety, burnout, and attention difficulties are at record levels among college and high school students.</p>

                <p>This resource introduces the core mindfulness concepts and challenges that students encounter. Mindfulness practices are a cornerstone of our comprehensive Student Success Framework, which we teach in-depth as part of our career development courses. By understanding these challenges, you can begin identifying where mindfulness practices might be most beneficial in your own academic journey.</p>

                <div class="alert alert-primary" role="alert">
                    <strong>Note:</strong> The SageArk Mindfulness Toolkit is taught comprehensively in our career development program, with guided practices, personalized implementation strategies, and ongoing support. This resource introduces key concepts to help you understand the foundations of effective mindfulness practice.
                </div>

                <h3>The Five Mental Challenges of Today's Students</h3>
                
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0">Why Students Struggle with Mental Clarity</h4>
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
                                                <td><strong>Digital Fragmentation</strong></td>
                                                <td>Difficulty sustaining attention; feeling scattered; constant device-checking</td>
                                                <td>Rewiring of neural pathways due to constant notifications and interruptions</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Performance Anxiety</strong></td>
                                                <td>Test anxiety; procrastination; perfectionism; impostor syndrome</td>
                                                <td>Attaching self-worth to achievement and external validation</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Future Uncertainty</strong></td>
                                                <td>Rumination; worrying about career prospects; difficulty focusing on present tasks</td>
                                                <td>Economic and professional landscape uncertainty creating threat response</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Sleep Disruption</strong></td>
                                                <td>Poor quality sleep; difficulty falling asleep; daytime fatigue; reliance on caffeine</td>
                                                <td>Screen exposure, irregular schedules, and stress hormones disrupting natural sleep cycles</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Social Comparison</strong></td>
                                                <td>FOMO (fear of missing out); inadequacy feelings; heightened self-consciousness</td>
                                                <td>Constant exposure to curated social media highlights creating distorted reality perception</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Mindfulness Misconceptions That Hinder Students</h3>
                
                <div class="case-section mb-5 p-4 bg-light rounded">
                    <p>Many students have encountered mindfulness concepts but misunderstandings prevent effective implementation:</p>
                    
                    <div class="accordion" id="accordionMisconceptions">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <strong>Misconception #1: Mindfulness is about emptying your mind</strong>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionMisconceptions">
                                <div class="accordion-body">
                                    <p><strong>Why this misconception persists:</strong> Popular depictions of meditation often show people in serene states, suggesting thought-free mental bliss.</p>
                                    <p><strong>The reality:</strong> Mindfulness is about noticing thoughts without attachment, not eliminating them. The mind naturally produces thoughts, and mindfulness practices develop the ability to observe them without being carried away by them.</p>
                                    <p><strong>The core problem:</strong> Students who believe they've "failed" at mindfulness when thoughts arise often abandon practices before experiencing benefits, or develop additional frustration around their supposed inability to "clear their mind."</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <strong>Misconception #2: Mindfulness requires long meditation sessions</strong>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionMisconceptions">
                                <div class="accordion-body">
                                    <p><strong>Why this misconception persists:</strong> Traditional meditation retreats and formal practices often emphasize extended sitting periods, creating the impression that "real" mindfulness requires significant time investment.</p>
                                    <p><strong>The reality:</strong> Brief, consistent mindfulness practices (even 2-5 minutes) can create meaningful benefits, especially when integrated into daily activities and transitions. For students, small practices throughout the day are often more sustainable and effective than attempting lengthy sessions.</p>
                                    <p><strong>The core problem:</strong> Students with packed schedules dismiss mindfulness as impractical, missing opportunities to integrate smaller practices that could substantially improve their focus and mental well-being.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>Misconception #3: Mindfulness is primarily for stress reduction</strong>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionMisconceptions">
                                <div class="accordion-body">
                                    <p><strong>Why this misconception persists:</strong> Mindfulness is often marketed as a wellness or stress management tool, positioning it primarily as a remedy for negative emotional states.</p>
                                    <p><strong>The reality:</strong> While stress reduction is a common benefit, mindfulness also enhances cognitive functions crucial for academic success, including sustained attention, task switching ability, working memory, and cognitive flexibility.</p>
                                    <p><strong>The core problem:</strong> Students often turn to mindfulness only when experiencing significant stress, rather than integrating it proactively as a performance-enhancing practice that can improve learning and information processing.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <strong>Misconception #4: Mindfulness should feel pleasant or relaxing</strong>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionMisconceptions">
                                <div class="accordion-body">
                                    <p><strong>Why this misconception persists:</strong> Mindfulness marketing often features images of peaceful, smiling people, creating expectations of immediate tranquility.</p>
                                    <p><strong>The reality:</strong> Mindfulness practice sometimes involves confronting uncomfortable thoughts, emotions, or sensations. Particularly for beginners, mindfulness can initially increase awareness of mental chatter or physical tension before developing the capacity to work skillfully with these experiences.</p>
                                    <p><strong>The core problem:</strong> Students who expect immediate calming effects may interpret challenging experiences during practice as evidence of failure or lack of aptitude, abandoning potentially beneficial practices before developing proficiency.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Core Dimensions of Effective Mindfulness Practice</h3>
                
                <div class="row mb-5">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0"><i class="fas fa-bell me-2"></i> Attention Training</h4>
                            </div>
                            <div class="card-body">
                                <h5>Core Challenge:</h5>
                                <p>Developing the capacity to intentionally direct and sustain attention despite distractions.</p>
                                
                                <h5>Common Problems:</h5>
                                <ul>
                                    <li>Attention constantly hijacked by digital notifications</li>
                                    <li>Mind wandering during lectures or while reading</li>
                                    <li>Difficulty transitioning between tasks</li>
                                    <li>Scattered focus preventing deep learning</li>
                                </ul>
                                
                                <h5>Critical Questions:</h5>
                                <p>How can I strengthen my ability to notice when my attention has wandered and gently redirect it? What conditions help me maintain focused attention on demanding academic tasks?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0"><i class="fas fa-brain me-2"></i> Metacognitive Awareness</h4>
                            </div>
                            <div class="card-body">
                                <h5>Core Challenge:</h5>
                                <p>Developing the ability to observe your own thought patterns and cognitive habits objectively.</p>
                                
                                <h5>Common Problems:</h5>
                                <ul>
                                    <li>Unrecognized cognitive distortions affecting academic confidence</li>
                                    <li>Getting entangled in unproductive thought spirals</li>
                                    <li>Limited awareness of personal learning patterns</li>
                                    <li>Difficulty recognizing when overwhelm is affecting performance</li>
                                </ul>
                                
                                <h5>Critical Questions:</h5>
                                <p>How can I develop the ability to recognize unhelpful thought patterns in real-time? What strategies help me observe my thoughts without being completely absorbed by them?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0"><i class="fas fa-heart me-2"></i> Emotional Regulation</h4>
                            </div>
                            <div class="card-body">
                                <h5>Core Challenge:</h5>
                                <p>Developing adaptive responses to academic stress and performance pressure.</p>
                                
                                <h5>Common Problems:</h5>
                                <ul>
                                    <li>Test anxiety interfering with recall and performance</li>
                                    <li>Procrastination driven by emotional avoidance</li>
                                    <li>Burnout from inability to manage ongoing stress</li>
                                    <li>Impulsive decisions during emotional reactivity</li>
                                </ul>
                                
                                <h5>Critical Questions:</h5>
                                <p>How can I develop the capacity to experience challenging emotions without being overwhelmed by them? What strategies help me respond thoughtfully rather than react automatically to academic pressure?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0"><i class="fas fa-hands-helping me-2"></i> Self-Compassion</h4>
                            </div>
                            <div class="card-body">
                                <h5>Core Challenge:</h5>
                                <p>Cultivating a supportive rather than critical relationship with yourself amid academic challenges.</p>
                                
                                <h5>Common Problems:</h5>
                                <ul>
                                    <li>Harsh self-judgment after academic setbacks</li>
                                    <li>Perfectionism preventing risk-taking and growth</li>
                                    <li>Impostor syndrome undermining confidence</li>
                                    <li>Difficulty bouncing back from mistakes</li>
                                </ul>
                                
                                <h5>Critical Questions:</h5>
                                <p>How can I respond to my academic struggles with the same kindness I would offer a friend? What approaches help me accept imperfection as part of the learning process while still maintaining high standards?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Context-Specific Mindfulness Challenges for Students</h3>
                
                <div class="accordion mb-5" id="accordionContexts">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingContext1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContext1" aria-expanded="true" aria-controls="collapseContext1">
                                <strong>Exam Preparation and Test-Taking</strong>
                            </button>
                        </h2>
                        <div id="collapseContext1" class="accordion-collapse collapse show" aria-labelledby="headingContext1" data-bs-parent="#accordionContexts">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="text-danger">Key Challenges</h5>
                                        <ul>
                                            <li>Racing thoughts and anxiety interfering with information retrieval</li>
                                            <li>Physical symptoms of stress (rapid heartbeat, shallow breathing) affecting performance</li>
                                            <li>Catastrophic thinking ("I'll fail") creating self-fulfilling prophecies</li>
                                            <li>Distraction and mind-wandering during study sessions</li>
                                            <li>Difficulty maintaining focus during extended exams</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Mindfulness Applications</h5>
                                        <ul>
                                            <li>Present-moment awareness to notice early signs of anxiety</li>
                                            <li>Attention anchoring techniques when focus wavers</li>
                                            <li>Thought labeling practices to reduce rumination</li>
                                            <li>Strategic micro-mindfulness practices during study sessions</li>
                                            <li>Pre-exam centering routines to optimize cognitive state</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingContext2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContext2" aria-expanded="false" aria-controls="collapseContext2">
                                <strong>Digital Learning Environments</strong>
                            </button>
                        </h2>
                        <div id="collapseContext2" class="accordion-collapse collapse" aria-labelledby="headingContext2" data-bs-parent="#accordionContexts">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="text-danger">Key Challenges</h5>
                                        <ul>
                                            <li>Continuous partial attention across multiple browser tabs</li>
                                            <li>Social media and entertainment temptations one click away</li>
                                            <li>Zoom fatigue and digital exhaustion</li>
                                            <li>Reduced engagement without physical classroom cues</li>
                                            <li>Blurred boundaries between study and relaxation spaces</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Mindfulness Applications</h5>
                                        <ul>
                                            <li>Digital context setting and intention practices</li>
                                            <li>Environmental design for attention management</li>
                                            <li>Mindful transitions between digital activities</li>
                                            <li>Screen break protocols to prevent cognitive depletion</li>
                                            <li>Present-moment anchors in virtual learning environments</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingContext3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContext3" aria-expanded="false" aria-controls="collapseContext3">
                                <strong>Long-Term Projects and Thesis Work</strong>
                            </button>
                        </h2>
                        <div id="collapseContext3" class="accordion-collapse collapse" aria-labelledby="headingContext3" data-bs-parent="#accordionContexts">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="text-danger">Key Challenges</h5>
                                        <ul>
                                            <li>Motivation fluctuations during extended projects</li>
                                            <li>Perfectionism paralysis when facing significant work</li>
                                            <li>Overwhelm from ambiguous or ill-defined parameters</li>
                                            <li>Difficulty transitioning between different project phases</li>
                                            <li>Sustaining momentum without immediate feedback</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Mindfulness Applications</h5>
                                        <ul>
                                            <li>Present-moment goal setting and intention practices</li>
                                            <li>Acceptance approaches for uncertainty and ambiguity</li>
                                            <li>Self-compassion practices during progress plateaus</li>
                                            <li>Mindful work initiation routines to overcome resistance</li>
                                            <li>Meta-awareness of perfectionist thought patterns</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Self-Assessment: Mindfulness Needs Identification</h3>
                
                <div class="case-container p-4 mb-5 bg-light rounded">
                    <p>Use this assessment to identify your primary mindfulness challenges. Rate each statement based on how frequently you experience it:</p>
                    
                    <form>
                        <div class="mb-4">
                            <label class="form-label"><strong>1. Attention Management</strong></label>
                            <div class="form-text mb-2">"My mind wanders to unrelated thoughts when I'm trying to focus on academic work."</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="attention" id="attention1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="attention1">Rarely</label>
                                
                                <input type="radio" class="btn-check" name="attention" id="attention2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="attention2">Sometimes</label>
                                
                                <input type="radio" class="btn-check" name="attention" id="attention3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="attention3">Often</label>
                                
                                <input type="radio" class="btn-check" name="attention" id="attention4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="attention4">Very Frequently</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label"><strong>2. Digital Distraction</strong></label>
                            <div class="form-text mb-2">"I check my phone or switch to social media/email during study sessions without intending to."</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="digital" id="digital1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="digital1">Rarely</label>
                                
                                <input type="radio" class="btn-check" name="digital" id="digital2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="digital2">Sometimes</label>
                                
                                <input type="radio" class="btn-check" name="digital" id="digital3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="digital3">Often</label>
                                
                                <input type="radio" class="btn-check" name="digital" id="digital4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="digital4">Very Frequently</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label"><strong>3. Stress Response</strong></label>
                            <div class="form-text mb-2">"When facing academic pressure, I experience physical symptoms like tension, racing heart, or shallow breathing."</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="stress" id="stress1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="stress1">Rarely</label>
                                
                                <input type="radio" class="btn-check" name="stress" id="stress2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="stress2">Sometimes</label>
                                
                                <input type="radio" class="btn-check" name="stress" id="stress3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="stress3">Often</label>
                                
                                <input type="radio" class="btn-check" name="stress" id="stress4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="stress4">Very Frequently</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label"><strong>4. Self-Critical Thinking</strong></label>
                            <div class="form-text mb-2">"I'm harsh on myself when I make mistakes or perform below my expectations academically."</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="critical" id="critical1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="critical1">Rarely</label>
                                
                                <input type="radio" class="btn-check" name="critical" id="critical2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="critical2">Sometimes</label>
                                
                                <input type="radio" class="btn-check" name="critical" id="critical3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="critical3">Often</label>
                                
                                <input type="radio" class="btn-check" name="critical" id="critical4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="critical4">Very Frequently</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label"><strong>5. Present Moment Awareness</strong></label>
                            <div class="form-text mb-2">"I find myself worrying about future outcomes or ruminating on past events rather than focusing on current tasks."</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="present" id="present1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="present1">Rarely</label>
                                
                                <input type="radio" class="btn-check" name="present" id="present2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="present2">Sometimes</label>
                                
                                <input type="radio" class="btn-check" name="present" id="present3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="present3">Often</label>
                                
                                <input type="radio" class="btn-check" name="present" id="present4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="present4">Very Frequently</label>
                            </div>
                        </div>
                        
                        <div class="text-center mt-4">
                            <button type="button" class="btn btn-primary" id="resetAssessment">Reset Assessment</button>
                        </div>
                    </form>
                </div>

                <h3>Warning Signs: When Mindfulness Practice May Be Particularly Beneficial</h3>
                
                <div class="alert alert-warning mb-5" role="alert">
                    <h5><i class="fas fa-exclamation-triangle me-2"></i> Warning Indicators</h5>
                    <p>If you experience several of these signs regularly, structured mindfulness practice may be especially valuable:</p>
                    <ul class="mb-0">
                        <li>Reading multiple pages of text before realizing you haven't absorbed any of it</li>
                        <li>Finding yourself unable to remember what a professor said moments after they've explained a concept</li>
                        <li>Feeling physically present in class but mentally elsewhere</li>
                        <li>Experiencing sleep disruption due to racing thoughts about academic concerns</li>
                        <li>Noticing increased irritability or emotional reactivity during high-pressure academic periods</li>
                        <li>Struggling to transition between different subjects or tasks</li>
                        <li>Finding yourself constantly checking digital devices without clear purpose</li>
                        <li>Experiencing "autopilot" mode where you complete tasks without conscious awareness</li>
                    </ul>
                </div>

                <div class="alert alert-info mb-5" role="alert">
                    <h5><i class="fas fa-lightbulb me-2"></i> Next Steps</h5>
                    <p class="mb-0">Understanding your mindfulness challenges is the first step toward developing effective practices. Our comprehensive Student Mindfulness Toolkit, taught as part of the SageArk Career Development Program, provides structured guidance, personalized practice recommendations, and ongoing support. Contact us to learn more about how our program can help you develop sustainable mindfulness practices designed specifically for student success.</p>
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
                        <p>Comprehensive time management framework designed specifically for students balancing academics, extracurriculars, and applications.</p>
                        <a href="time-management.php" class="resource-link">View Resource →</a>
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