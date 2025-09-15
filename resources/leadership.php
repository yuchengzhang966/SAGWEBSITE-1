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
    <title>Student Leadership Development - SageArk</title>
    
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
                <div class="resource-type-badge">FRAMEWORK</div>
                <h1>Student Leadership Development</h1>
                <p class="resources-subtitle">Understanding the core challenges, essential competencies, and developmental pathways for emerging student leaders in academic and extracurricular contexts.</p>
                
                <!-- Metadata inside hero section -->
                <div class="resource-metadata">
                    <div class="metadata-item">
                        <i class="far fa-calendar-alt"></i> Last Updated: November 2024
                    </div>
                    <div class="metadata-item">
                        <i class="far fa-clock"></i> Reading Time: 15 minutes
                    </div>
                    <div class="metadata-item">
                        <i class="fas fa-tag"></i> Category: Professional Development
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resource Content Section -->
    <section class="resource-content section-padding active">
        <div class="container">
            <div class="resource-main-content">
                <h2>The Student Leadership Gap</h2>
                
                <p>While most educational institutions emphasize the importance of leadership development, there exists a striking gap between this stated priority and the structured developmental pathways available to students. As a result, many students acquire leadership positions without the foundational skills, mindsets, and frameworks necessary for effectiveness—leading to suboptimal experiences for both leaders and their organizations.</p>

                <p>This resource introduces the core challenges and essential frameworks for student leadership development. The complete Student Leadership Development curriculum is taught in-depth as part of our career development program, where students receive personalized assessment, coaching, and practical leadership opportunities. By understanding these challenges, you can begin identifying which areas require the most attention in your own leadership journey.</p>

                <div class="alert alert-primary" role="alert">
                    <strong>Note:</strong> The SageArk Student Leadership Development framework is taught comprehensively in our career development program, with personalized leadership assessments, mentoring relationships, and practical application experiences. This resource introduces key concepts to help you understand the foundations of effective student leadership.
                </div>

                <h3>The Five Critical Student Leadership Challenges</h3>
                
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0">Why Many Student Leaders Struggle</h4>
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
                                                <td><strong>Authority-Relationship Tension</strong></td>
                                                <td>Discomfort with directing peers; oscillation between over-assertiveness and passivity; avoiding necessary confrontation</td>
                                                <td>Unresolved conflict between maintaining peer relationships and exercising legitimate authority in student leadership contexts</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Vision-Execution Gap</strong></td>
                                                <td>Ambitious ideas without implementation pathways; underestimating operational demands; frustration with practical constraints</td>
                                                <td>Insufficient understanding of the planning, process design, and resource management required to translate aspirations into tangible outcomes</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Motivation Misalignment</strong></td>
                                                <td>Difficulty sustaining team engagement; uneven participation; resistance to initiatives; declining enthusiasm</td>
                                                <td>Failure to recognize and address diverse motivational drivers, creating engagement strategies that resonate with only a segment of the team</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Feedback Avoidance</strong></td>
                                                <td>Limited performance conversations; delayed addressing of issues; defensive responses to input; continued problematic behaviors</td>
                                                <td>Discomfort with giving direct feedback in peer contexts and underdeveloped skills for facilitating growth-oriented conversations</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Leadership Identity Conflict</strong></td>
                                                <td>Imposter feelings in leadership roles; emulating inappropriate models; inconsistent leadership behavior; authenticity struggles</td>
                                                <td>Underdeveloped personal leadership philosophy and insufficient integration of leadership identity with authentic self-concept</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Leadership Misconceptions That Undermine Student Leaders</h3>
                
                <div class="case-section mb-5 p-4 bg-light rounded">
                    <p>Many students have internalized leadership myths that create significant obstacles to effectiveness:</p>
                    
                    <div class="accordion" id="accordionMisconceptions">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <strong>Misconception #1: "Leaders are born, not made"</strong>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionMisconceptions">
                                <div class="accordion-body">
                                    <p><strong>Why this misconception persists:</strong> Cultural narratives often emphasize innate charisma and natural authority in leadership figures, reinforced by limited visibility into the developmental journey of effective leaders.</p>
                                    <p><strong>The reality:</strong> Research consistently demonstrates that leadership effectiveness stems primarily from learnable skills, developed mindsets, and acquired knowledge. While certain traits may create predispositions, the vast majority of leadership capability is developed through structured learning, reflective experience, and deliberate practice.</p>
                                    <p><strong>The core problem:</strong> Students who view leadership as an inherent quality rather than a developmental process often avoid growth opportunities, fail to seek necessary skill development, and either exclude themselves from leadership roles or approach them without appropriate preparation.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <strong>Misconception #2: "The leader should have all the answers"</strong>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionMisconceptions">
                                <div class="accordion-body">
                                    <p><strong>Why this misconception persists:</strong> Traditional educational models that reward individual knowledge mastery create expectations that authority figures should possess comprehensive knowledge, which transfers to leadership contexts.</p>
                                    <p><strong>The reality:</strong> Effective leadership, particularly in complex environments, requires facilitating collective intelligence rather than individual omniscience. The most successful leaders excel at asking powerful questions, synthesizing diverse perspectives, and creating environments where the best thinking emerges from the group.</p>
                                    <p><strong>The core problem:</strong> Student leaders who feel pressured to provide all solutions often become bottlenecks in decision-making, underutilize team capabilities, experience unnecessary stress, and model problematic leadership approaches for other emerging leaders.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>Misconception #3: "Leadership is about the position"</strong>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionMisconceptions">
                                <div class="accordion-body">
                                    <p><strong>Why this misconception persists:</strong> Visible leadership roles (president, captain, etc.) receive disproportionate attention, creating the impression that leadership is synonymous with formal authority positions.</p>
                                    <p><strong>The reality:</strong> Leadership fundamentally involves mobilizing people toward shared objectives, which can occur from any position within an organization. Positional authority may provide certain tools, but authentic leadership influence stems from credibility, relationships, and the ability to create value—accessible at all organizational levels.</p>
                                    <p><strong>The core problem:</strong> Students who equate leadership with positions often pursue roles for resume-building rather than impact, underinvest in developing influence skills, and miss opportunities to practice leadership throughout their student experience.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <strong>Misconception #4: "Good leaders are naturally confident"</strong>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionMisconceptions">
                                <div class="accordion-body">
                                    <p><strong>Why this misconception persists:</strong> Visible confidence is often confused with competence, and public leadership performances rarely reveal the private doubts experienced by most leaders.</p>
                                    <p><strong>The reality:</strong> Research on effective leadership shows that appropriate self-doubt and reflection are crucial for leadership development. Many outstanding leaders experience significant uncertainty and leverage these feelings to promote careful decision-making, incorporate diverse perspectives, and remain open to learning.</p>
                                    <p><strong>The core problem:</strong> Students who believe leadership requires unwavering confidence often either avoid leadership opportunities due to normal self-doubt or project artificial certainty that undermines authentic connection and limits necessary adaptation based on feedback.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>The Four Dimensions of Effective Student Leadership</h3>
                
                <div class="row mb-5">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0"><i class="fas fa-compass me-2"></i> Purpose Alignment</h4>
                            </div>
                            <div class="card-body">
                                <h5>Core Challenge:</h5>
                                <p>Developing and communicating compelling visions that connect individual motivations to collective objectives.</p>
                                
                                <h5>Common Problems:</h5>
                                <ul>
                                    <li>Unclear or uninspiring organizational purpose</li>
                                    <li>Misalignment between stated goals and actual activities</li>
                                    <li>Disconnection between member interests and team direction</li>
                                    <li>Difficulty translating abstract mission into concrete priorities</li>
                                </ul>
                                
                                <h5>Critical Questions:</h5>
                                <p>How can I articulate a compelling purpose that genuinely motivates diverse team members? How do I ensure our day-to-day activities remain connected to our larger mission?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0"><i class="fas fa-users me-2"></i> Interpersonal Effectiveness</h4>
                            </div>
                            <div class="card-body">
                                <h5>Core Challenge:</h5>
                                <p>Building authentic relationships that balance connection with appropriate boundaries in peer leadership contexts.</p>
                                
                                <h5>Common Problems:</h5>
                                <ul>
                                    <li>Difficulty navigating dual roles as peer and leader</li>
                                    <li>Unproductive conflict avoidance or management</li>
                                    <li>Ineffective communication during pressure or disagreement</li>
                                    <li>Resistance to necessary accountability conversations</li>
                                </ul>
                                
                                <h5>Critical Questions:</h5>
                                <p>How can I maintain authentic connections while exercising appropriate authority? What communication approaches build both psychological safety and performance accountability?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0"><i class="fas fa-cogs me-2"></i> Execution Intelligence</h4>
                            </div>
                            <div class="card-body">
                                <h5>Core Challenge:</h5>
                                <p>Designing systems and processes that reliably transform intentions into outcomes despite resource constraints.</p>
                                
                                <h5>Common Problems:</h5>
                                <ul>
                                    <li>Ineffective delegation and work distribution</li>
                                    <li>Inconsistent follow-through on commitments</li>
                                    <li>Disorganized meetings and decision processes</li>
                                    <li>Inadequate planning and resource allocation</li>
                                </ul>
                                
                                <h5>Critical Questions:</h5>
                                <p>How can I create systems that enable consistent execution despite member turnover and limited resources? What operational approaches maximize our impact given our constraints?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0"><i class="fas fa-user-cog me-2"></i> Personal Leadership Identity</h4>
                            </div>
                            <div class="card-body">
                                <h5>Core Challenge:</h5>
                                <p>Developing an authentic leadership approach aligned with personal values, strengths, and growth edges.</p>
                                
                                <h5>Common Problems:</h5>
                                <ul>
                                    <li>Impostor syndrome in leadership roles</li>
                                    <li>Emulating inappropriate leadership models</li>
                                    <li>Limited self-awareness about impact on others</li>
                                    <li>Difficulty balancing authenticity with growth</li>
                                </ul>
                                
                                <h5>Critical Questions:</h5>
                                <p>How can I develop a leadership approach that leverages my authentic strengths while addressing development needs? What practices help me maintain balance and sustainability as a leader?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Context-Specific Leadership Challenges for Students</h3>
                
                <div class="accordion mb-5" id="accordionContexts">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingContext1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContext1" aria-expanded="true" aria-controls="collapseContext1">
                                <strong>Student Organization Leadership</strong>
                            </button>
                        </h2>
                        <div id="collapseContext1" class="accordion-collapse collapse show" aria-labelledby="headingContext1" data-bs-parent="#accordionContexts">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="text-danger">Key Challenges</h5>
                                        <ul>
                                            <li>Engaging members with varying commitment levels</li>
                                            <li>Maintaining organizational knowledge through transitions</li>
                                            <li>Balancing innovation with established traditions</li>
                                            <li>Managing conflicting stakeholder expectations</li>
                                            <li>Developing leadership pipeline for sustainability</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Essential Approaches</h5>
                                        <ul>
                                            <li>Motivational mapping: aligning roles with individual drivers</li>
                                            <li>Knowledge transfer: creating systems for institutional memory</li>
                                            <li>Decision architecture: designing inclusive processes for change</li>
                                            <li>Stakeholder management: balancing diverse expectations</li>
                                            <li>Leadership cultivation: identifying and developing potential</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingContext2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContext2" aria-expanded="false" aria-controls="collapseContext2">
                                <strong>Project and Initiative Leadership</strong>
                            </button>
                        </h2>
                        <div id="collapseContext2" class="accordion-collapse collapse" aria-labelledby="headingContext2" data-bs-parent="#accordionContexts">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="text-danger">Key Challenges</h5>
                                        <ul>
                                            <li>Scoping projects appropriately for resources</li>
                                            <li>Maintaining momentum without formal authority</li>
                                            <li>Adapting to unexpected obstacles and setbacks</li>
                                            <li>Balancing competing priorities from team members</li>
                                            <li>Creating equitable work distribution</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Essential Approaches</h5>
                                        <ul>
                                            <li>Resource-based planning: aligning ambition with capacity</li>
                                            <li>Influence cultivation: leading without positional authority</li>
                                            <li>Agile adaptation: responding effectively to change</li>
                                            <li>Priority negotiation: creating shared commitment</li>
                                            <li>Team contracting: establishing explicit agreements</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingContext3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContext3" aria-expanded="false" aria-controls="collapseContext3">
                                <strong>Peer Mentorship and Teaching Roles</strong>
                            </button>
                        </h2>
                        <div id="collapseContext3" class="accordion-collapse collapse" aria-labelledby="headingContext3" data-bs-parent="#accordionContexts">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="text-danger">Key Challenges</h5>
                                        <ul>
                                            <li>Establishing credibility without creating distance</li>
                                            <li>Providing challenging feedback constructively</li>
                                            <li>Adapting support to different learning needs</li>
                                            <li>Maintaining appropriate boundaries</li>
                                            <li>Balancing guidance with promoting independence</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Essential Approaches</h5>
                                        <ul>
                                            <li>Developmental coaching: tailoring support to growth stage</li>
                                            <li>Feedback framing: constructive communication that builds</li>
                                            <li>Learning differentiation: adapting to individual needs</li>
                                            <li>Boundary management: creating appropriate structures</li>
                                            <li>Guided autonomy: balancing direction with independence</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Self-Assessment: Leadership Development Priorities</h3>
                
                <div class="case-container p-4 mb-5 bg-light rounded">
                    <p>Use this assessment to identify your primary leadership development needs. Rate each statement based on how frequently you experience it:</p>
                    
                    <form>
                        <div class="mb-4">
                            <label class="form-label"><strong>1. Vision and Purpose</strong></label>
                            <div class="form-text mb-2">"I struggle to articulate compelling visions that genuinely inspire others to commit their energy."</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="vision" id="vision1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="vision1">Rarely</label>
                                
                                <input type="radio" class="btn-check" name="vision" id="vision2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="vision2">Sometimes</label>
                                
                                <input type="radio" class="btn-check" name="vision" id="vision3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="vision3">Often</label>
                                
                                <input type="radio" class="btn-check" name="vision" id="vision4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="vision4">Very Frequently</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label"><strong>2. Relational Leadership</strong></label>
                            <div class="form-text mb-2">"I find it difficult to balance maintaining positive relationships with exercising necessary authority."</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="relational" id="relational1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="relational1">Rarely</label>
                                
                                <input type="radio" class="btn-check" name="relational" id="relational2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="relational2">Sometimes</label>
                                
                                <input type="radio" class="btn-check" name="relational" id="relational3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="relational3">Often</label>
                                
                                <input type="radio" class="btn-check" name="relational" id="relational4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="relational4">Very Frequently</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label"><strong>3. Execution Management</strong></label>
                            <div class="form-text mb-2">"I have difficulty creating systems that reliably turn ideas into completed initiatives with consistent quality."</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="execution" id="execution1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="execution1">Rarely</label>
                                
                                <input type="radio" class="btn-check" name="execution" id="execution2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="execution2">Sometimes</label>
                                
                                <input type="radio" class="btn-check" name="execution" id="execution3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="execution3">Often</label>
                                
                                <input type="radio" class="btn-check" name="execution" id="execution4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="execution4">Very Frequently</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label"><strong>4. Leadership Identity</strong></label>
                            <div class="form-text mb-2">"I experience uncertainty about my authentic leadership style or feel like an impostor in leadership positions."</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="identity" id="identity1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="identity1">Rarely</label>
                                
                                <input type="radio" class="btn-check" name="identity" id="identity2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="identity2">Sometimes</label>
                                
                                <input type="radio" class="btn-check" name="identity" id="identity3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="identity3">Often</label>
                                
                                <input type="radio" class="btn-check" name="identity" id="identity4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="identity4">Very Frequently</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label"><strong>5. Adaptability</strong></label>
                            <div class="form-text mb-2">"I struggle to adjust my leadership approach to different situations, team dynamics, or unexpected challenges."</div>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="adaptability" id="adaptability1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="adaptability1">Rarely</label>
                                
                                <input type="radio" class="btn-check" name="adaptability" id="adaptability2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="adaptability2">Sometimes</label>
                                
                                <input type="radio" class="btn-check" name="adaptability" id="adaptability3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="adaptability3">Often</label>
                                
                                <input type="radio" class="btn-check" name="adaptability" id="adaptability4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="adaptability4">Very Frequently</label>
                            </div>
                        </div>
                        
                        <div class="text-center mt-4">
                            <button type="button" class="btn btn-primary" id="resetAssessment">Reset Assessment</button>
                        </div>
                    </form>
                </div>

                <h3>Warning Signs: Leadership Development Priorities</h3>
                
                <div class="alert alert-warning mb-5" role="alert">
                    <h5><i class="fas fa-exclamation-triangle me-2"></i> Leadership Effectiveness Indicators</h5>
                    <p>If you experience several of these signs in your leadership roles, prioritizing leadership development may be particularly valuable:</p>
                    <ul class="mb-0">
                        <li>Team members showing decreased engagement or increasing turnover</li>
                        <li>Consistent execution gaps between plans and outcomes</li>
                        <li>Recurring interpersonal conflicts or communication breakdowns</li>
                        <li>Personal stress, overwhelm or burnout in leadership positions</li>
                        <li>Difficulty recruiting members or participants for initiatives</li>
                        <li>Limited progress on organizational goals despite sufficient resources</li>
                        <li>Feedback indicating issues with your leadership approach</li>
                        <li>Declining personal satisfaction from leadership experiences</li>
                    </ul>
                </div>

                <div class="alert alert-info mb-5" role="alert">
                    <h5><i class="fas fa-lightbulb me-2"></i> Next Steps</h5>
                    <p class="mb-0">Understanding your leadership development needs is the first step toward building greater effectiveness. Our comprehensive Student Leadership Development curriculum, taught as part of the SageArk Career Development Program, provides personalized assessment, coaching relationships, and practical application opportunities. Contact us to learn more about how our program can help you transform your leadership capacity and create more meaningful impact.</p>
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
                        <img src="../images/resources/public-speaking.jpg" alt="Public Speaking">
                        <div class="resource-type">COURSE</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Public Speaking Fundamentals</h3>
                        <p>Essential techniques for developing powerful communication skills crucial for effective leadership.</p>
                        <a href="public-speaking.php" class="resource-link">View Resource →</a>
                    </div>
                </div>
                
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="../images/resources/conflict-resolution.jpg" alt="Conflict Resolution">
                        <div class="resource-type">GUIDE</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Conflict Resolution Frameworks</h3>
                        <p>Approaches for navigating disagreements and transforming conflict into productive outcomes.</p>
                        <a href="conflict-resolution.php" class="resource-link">View Resource →</a>
                    </div>
                </div>
                
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="../images/resources/executive-presence.jpg" alt="Executive Presence">
                        <div class="resource-type">FRAMEWORK</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Executive Presence Development</h3>
                        <p>Understanding the elements of presence that create credibility and influence as a leader.</p>
                        <a href="executive-presence.php" class="resource-link">View Resource →</a>
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