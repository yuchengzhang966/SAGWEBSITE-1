<?php
// Enable error reporting during development
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Page title
$page_title = "SAT Math Problem Set | SageArk";
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
</head>

<body class="preload resource-detail-page">

<?php include('../includes/nav.php'); ?>

<div class="hero-section bg-primary text-white py-5 mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-accent text-white mb-3">PRACTICE SET</span>
                <h1 class="display-4 fw-bold mb-3">SAT Math Problem Set</h1>
                <p class="lead mb-4">Master key concepts, identify common pitfalls, and boost your SAT math score</p>
                <div class="d-flex justify-content-center align-items-center small text-white-50">
                    <div class="me-3">
                        <i class="bi bi-clock me-1"></i> Last updated: July 2023
                    </div>
                    <div>
                        <i class="bi bi-book me-1"></i> 12 min read
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
                <h2 class="fw-bold mb-4">Why SAT Math Demands Strategic Preparation</h2>
                <p>The SAT Mathematics section tests more than just your knowledge of formulas — it evaluates your ability to apply mathematical concepts to solve unfamiliar problems under time pressure. While many students focus solely on content review, the highest-performing test-takers also develop strategic approaches to navigate the unique challenges of standardized math testing.</p>
                <p>Understanding the core content areas, recognizing question patterns, and developing efficient problem-solving strategies are essential for maximizing your score. This practice set provides a framework for identifying your specific challenge areas and understanding the key dimensions of SAT math success.</p>
                
                <div class="alert alert-primary my-4">
                    <div class="d-flex">
                        <div class="me-3">
                            <i class="bi bi-info-circle-fill fs-4"></i>
                        </div>
                        <div>
                            <strong>Note:</strong> This resource provides an overview of critical SAT math concepts and example problems. For comprehensive preparation, personalized practice, and detailed strategy training, explore our full SAT preparation program.
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mb-5">
                <h2 class="fw-bold mb-4">Critical Challenges in SAT Mathematics</h2>
                <p>Many students face similar obstacles when preparing for the SAT Math section. Identifying your specific challenges is the first step toward targeted improvement.</p>
                
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Challenge</th>
                                <th>Description</th>
                                <th>Impact</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Time Pressure Paralysis</strong></td>
                                <td>Struggling to complete sections within the allocated time, leading to rushed work or unanswered questions</td>
                                <td>Loss of 5-8 points due to incomplete sections or careless errors</td>
                            </tr>
                            <tr>
                                <td><strong>Translation Gap</strong></td>
                                <td>Difficulty converting word problems into mathematical equations or models</td>
                                <td>Consistent errors on problem-solving and data analysis questions</td>
                            </tr>
                            <tr>
                                <td><strong>Concept Application Disconnect</strong></td>
                                <td>Understanding individual concepts but struggling to identify which to apply in multi-step problems</td>
                                <td>Underperformance on medium to difficult questions</td>
                            </tr>
                            <tr>
                                <td><strong>Careless Error Pattern</strong></td>
                                <td>Making systematic mistakes in calculation, negative signs, or unit conversion</td>
                                <td>Loss of 3-5 "easy" points that should be guaranteed</td>
                            </tr>
                            <tr>
                                <td><strong>Question Trap Vulnerability</strong></td>
                                <td>Repeatedly falling for common misdirection and deliberately placed incorrect answer choices</td>
                                <td>Consistent selection of tempting but incorrect options</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="mb-5">
                <h2 class="fw-bold mb-4">Common Misconceptions About SAT Math</h2>
                
                <div class="accordion" id="misconceptionsAccordion">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="misconception1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                "You need to know advanced math concepts to score well"
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="misconception1" data-bs-parent="#misconceptionsAccordion">
                            <div class="accordion-body">
                                <p><strong>Reality:</strong> The SAT Math test primarily covers concepts from Algebra I, Algebra II, and basic Geometry. There are no Calculus or advanced Trigonometry questions. The challenge lies not in the complexity of the math but in how basic concepts are applied in unfamiliar contexts.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="misconception2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                "Memorizing formulas is enough for a high score"
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="misconception2" data-bs-parent="#misconceptionsAccordion">
                            <div class="accordion-body">
                                <p><strong>Reality:</strong> While knowing key formulas is necessary, most SAT math questions require problem-solving skills, critical thinking, and the ability to interpret what the question is asking. The SAT tests mathematical reasoning more than rote memorization.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="misconception3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                "You should solve every problem the 'traditional' way"
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="misconception3" data-bs-parent="#misconceptionsAccordion">
                            <div class="accordion-body">
                                <p><strong>Reality:</strong> Many SAT math problems can be solved using multiple approaches. Strategic methods like plugging in answer choices, working backward, or making educated estimates are often more efficient than traditional solving methods, especially under time constraints.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="misconception4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                "The calculator is always necessary for SAT math"
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="misconception4" data-bs-parent="#misconceptionsAccordion">
                            <div class="accordion-body">
                                <p><strong>Reality:</strong> While a calculator is allowed on portions of the test, many problems are designed to be solved more quickly without one. Over-reliance on calculators can actually slow you down and lead to input errors. Developing mental math skills and recognizing when to use your calculator strategically is more valuable.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mb-5">
                <h2 class="fw-bold mb-4">Core Dimensions of SAT Math</h2>
                <p>The SAT Math section tests four primary content areas. Understanding the concepts within each area and how they're typically presented is essential for targeted preparation.</p>
                
                <div class="row row-cols-1 row-cols-md-2 g-4 mb-4">
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">
                                    <i class="bi bi-graph-up text-primary me-2"></i>
                                    Heart of Algebra
                                </h3>
                                <ul class="card-text">
                                    <li>Linear equations and inequalities</li>
                                    <li>Systems of equations</li>
                                    <li>Linear function graphs and features</li>
                                    <li>Modeling with linear equations</li>
                                </ul>
                                <p><strong>Proportion of test:</strong> ~33%</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">
                                    <i class="bi bi-calculator text-primary me-2"></i>
                                    Problem Solving and Data Analysis
                                </h3>
                                <ul class="card-text">
                                    <li>Ratios, proportions, and percentages</li>
                                    <li>Units and measurement</li>
                                    <li>Data interpretation and statistics</li>
                                    <li>Probability and experimental design</li>
                                </ul>
                                <p><strong>Proportion of test:</strong> ~29%</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">
                                    <i class="bi bi-bezier2 text-primary me-2"></i>
                                    Passport to Advanced Math
                                </h3>
                                <ul class="card-text">
                                    <li>Quadratic equations and functions</li>
                                    <li>Higher-order polynomials</li>
                                    <li>Rational and radical equations</li>
                                    <li>Exponential functions</li>
                                </ul>
                                <p><strong>Proportion of test:</strong> ~28%</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">
                                    <i class="bi bi-triangle text-primary me-2"></i>
                                    Additional Topics
                                </h3>
                                <ul class="card-text">
                                    <li>Geometry and trigonometry</li>
                                    <li>Complex numbers</li>
                                    <li>Arc lengths and sector areas</li>
                                    <li>Volume and coordinate geometry</li>
                                </ul>
                                <p><strong>Proportion of test:</strong> ~10%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mb-5">
                <h2 class="fw-bold mb-4">Example SAT Math Problems</h2>
                <p>Below are representative problems from each content area. These examples illustrate the types of questions you'll encounter and strategic approaches to solving them.</p>
                
                <div class="card mb-4">
                    <div class="card-header bg-light">
                        <h3 class="h5 mb-0">Example 1: Heart of Algebra</h3>
                    </div>
                    <div class="card-body">
                        <p><strong>Problem:</strong> A car rental company charges $45 per day plus $0.25 per mile driven. If Tom paid $95 for a one-day rental, how many miles did he drive?</p>
                        
                        <div class="mt-3">
                            <button class="btn btn-outline-primary mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#solution1" aria-expanded="false" aria-controls="solution1">
                                Show Solution
                            </button>
                            <div class="collapse" id="solution1">
                                <div class="card card-body bg-light">
                                    <p><strong>Solution approach:</strong></p>
                                    <ol>
                                        <li>Let's call the number of miles driven m.</li>
                                        <li>The daily charge is $45.</li>
                                        <li>The mileage charge is $0.25 × m.</li>
                                        <li>The total cost is $45 + $0.25m = $95</li>
                                        <li>$0.25m = $95 - $45 = $50</li>
                                        <li>m = $50 ÷ $0.25 = 200 miles</li>
                                    </ol>
                                    <p><strong>Answer:</strong> Tom drove 200 miles.</p>
                                    <p><strong>Key insight:</strong> This is a linear equation problem where you need to identify the variable and set up an equation based on the given information.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card mb-4">
                    <div class="card-header bg-light">
                        <h3 class="h5 mb-0">Example 2: Problem Solving and Data Analysis</h3>
                    </div>
                    <div class="card-body">
                        <p><strong>Problem:</strong> The table below shows the results of a survey asking 200 students about their favorite school subject.</p>
                        
                        <div class="table-responsive mb-3">
                            <table class="table table-sm table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Subject</th>
                                        <th>Math</th>
                                        <th>Science</th>
                                        <th>English</th>
                                        <th>History</th>
                                        <th>Art</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Number of Students</td>
                                        <td>56</td>
                                        <td>48</td>
                                        <td>40</td>
                                        <td>36</td>
                                        <td>20</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <p>If a student is selected at random from those surveyed, what is the probability that the student's favorite subject is either Math or English?</p>
                        
                        <div class="mt-3">
                            <button class="btn btn-outline-primary mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#solution2" aria-expanded="false" aria-controls="solution2">
                                Show Solution
                            </button>
                            <div class="collapse" id="solution2">
                                <div class="card card-body bg-light">
                                    <p><strong>Solution approach:</strong></p>
                                    <ol>
                                        <li>Identify the total number of students: 200</li>
                                        <li>Find the number of students who prefer Math: 56</li>
                                        <li>Find the number of students who prefer English: 40</li>
                                        <li>Add these numbers: 56 + 40 = 96 students</li>
                                        <li>Calculate the probability: 96 ÷ 200 = 0.48 = 48%</li>
                                    </ol>
                                    <p><strong>Answer:</strong> The probability is 0.48 or 48%.</p>
                                    <p><strong>Key insight:</strong> This problem tests your ability to calculate probability from a frequency table by identifying the favorable outcomes and dividing by the total number of outcomes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card mb-4">
                    <div class="card-header bg-light">
                        <h3 class="h5 mb-0">Example 3: Passport to Advanced Math</h3>
                    </div>
                    <div class="card-body">
                        <p><strong>Problem:</strong> If f(x) = 2x² + 5x - 3, what is the value of f(-2)?</p>
                        
                        <div class="mt-3">
                            <button class="btn btn-outline-primary mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#solution3" aria-expanded="false" aria-controls="solution3">
                                Show Solution
                            </button>
                            <div class="collapse" id="solution3">
                                <div class="card card-body bg-light">
                                    <p><strong>Solution approach:</strong></p>
                                    <ol>
                                        <li>Substitute x = -2 into the function f(x) = 2x² + 5x - 3</li>
                                        <li>f(-2) = 2(-2)² + 5(-2) - 3</li>
                                        <li>f(-2) = 2(4) + 5(-2) - 3</li>
                                        <li>f(-2) = 8 - 10 - 3</li>
                                        <li>f(-2) = -5</li>
                                    </ol>
                                    <p><strong>Answer:</strong> f(-2) = -5</p>
                                    <p><strong>Key insight:</strong> This problem tests your ability to evaluate a polynomial function at a specific value. Be careful with the negative signs when substituting and calculating.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card mb-4">
                    <div class="card-header bg-light">
                        <h3 class="h5 mb-0">Example 4: Additional Topics</h3>
                    </div>
                    <div class="card-body">
                        <p><strong>Problem:</strong> In triangle ABC, angle A measures 30°, angle B measures 45°, and side AB = 6 units. What is the length of side AC?</p>
                        
                        <div class="mt-3">
                            <button class="btn btn-outline-primary mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#solution4" aria-expanded="false" aria-controls="solution4">
                                Show Solution
                            </button>
                            <div class="collapse" id="solution4">
                                <div class="card card-body bg-light">
                                    <p><strong>Solution approach:</strong></p>
                                    <ol>
                                        <li>First, find angle C: 180° - 30° - 45° = 105°</li>
                                        <li>Use the Law of Sines: sin(A)/a = sin(B)/b = sin(C)/c</li>
                                        <li>We want to find AC, which is side b in this case</li>
                                        <li>sin(B)/b = sin(C)/c, so b = c × sin(B)/sin(C)</li>
                                        <li>We know c = AB = 6, B = 45°, and C = 105°</li>
                                        <li>b = 6 × sin(45°)/sin(105°)</li>
                                        <li>b = 6 × (√2/2)/(sin(105°))</li>
                                        <li>b = 6 × (√2/2)/(cos(15°))</li>
                                        <li>b = 6 × (√2/2)/(0.9659...)</li>
                                        <li>b ≈ 4.41 units</li>
                                    </ol>
                                    <p><strong>Answer:</strong> AC ≈ 4.41 units</p>
                                    <p><strong>Key insight:</strong> This problem requires applying the Law of Sines to find an unknown side in a non-right triangle. Remember that trigonometric ratios are available for all triangles, not just right triangles.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mb-5">
                <h2 class="fw-bold mb-4">Self-Assessment: Identifying Your SAT Math Strengths and Weaknesses</h2>
                <p>Use the following questions to identify your specific areas for improvement in SAT Math preparation.</p>
                
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="mb-4">
                                <p class="fw-bold">1. When solving word problems, I typically:</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1" id="q1a" value="option1">
                                    <label class="form-check-label" for="q1a">Feel confident translating them into mathematical equations</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1" id="q1b" value="option2">
                                    <label class="form-check-label" for="q1b">Sometimes struggle to identify what the question is asking</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1" id="q1c" value="option3">
                                    <label class="form-check-label" for="q1c">Often get confused by the wording and make translation errors</label>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <p class="fw-bold">2. When working with graphs and visual data:</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q2" id="q2a" value="option1">
                                    <label class="form-check-label" for="q2a">I can quickly extract relevant information and identify trends</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q2" id="q2b" value="option2">
                                    <label class="form-check-label" for="q2b">I sometimes miss important details or misinterpret what's shown</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q2" id="q2c" value="option3">
                                    <label class="form-check-label" for="q2c">I frequently struggle to understand what the graph is showing</label>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <p class="fw-bold">3. When timed, I typically:</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3" id="q3a" value="option1">
                                    <label class="form-check-label" for="q3a">Complete all problems with time to spare for checking work</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3" id="q3b" value="option2">
                                    <label class="form-check-label" for="q3b">Finish most problems but feel rushed toward the end</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3" id="q3c" value="option3">
                                    <label class="form-check-label" for="q3c">Frequently leave several problems unanswered due to time constraints</label>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <p class="fw-bold">4. When it comes to careless errors:</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q4" id="q4a" value="option1">
                                    <label class="form-check-label" for="q4a">I rarely make calculation or sign errors</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q4" id="q4b" value="option2">
                                    <label class="form-check-label" for="q4b">I occasionally make minor errors despite knowing the correct approach</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q4" id="q4c" value="option3">
                                    <label class="form-check-label" for="q4c">I frequently lose points due to calculation errors or misreading questions</label>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <p class="fw-bold">5. With advanced math topics (quadratics, functions, etc.):</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5" id="q5a" value="option1">
                                    <label class="form-check-label" for="q5a">I feel confident and can tackle complex problems effectively</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5" id="q5b" value="option2">
                                    <label class="form-check-label" for="q5b">I understand the basic concepts but sometimes struggle with applications</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5" id="q5c" value="option3">
                                    <label class="form-check-label" for="q5c">I consistently struggle with these topics and often guess on such questions</label>
                                </div>
                            </div>
                            
                            <div class="alert alert-primary">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <i class="bi bi-lightbulb-fill fs-4"></i>
                                    </div>
                                    <div>
                                        <strong>Interpretation:</strong> If you selected mostly third options, focus on foundational skills and concept mastery. If you selected mostly second options, develop targeted practice in those specific areas. If you selected mostly first options, focus on advanced strategies and timed practice to maximize your score.
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="mb-5">
                <h2 class="fw-bold mb-4">Warning Signs: When Your SAT Math Approach Needs Upgrading</h2>
                <p>Watch for these indicators that your current preparation strategy may need revision:</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-group mb-4">
                            <li class="list-group-item d-flex">
                                <i class="bi bi-exclamation-triangle text-warning me-3 fs-4"></i>
                                <span>Your score plateaus despite continued practice</span>
                            </li>
                            <li class="list-group-item d-flex">
                                <i class="bi bi-exclamation-triangle text-warning me-3 fs-4"></i>
                                <span>You consistently miss questions on the same topics</span>
                            </li>
                            <li class="list-group-item d-flex">
                                <i class="bi bi-exclamation-triangle text-warning me-3 fs-4"></i>
                                <span>You can solve problems untimed but struggle during timed practice</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-group mb-4">
                            <li class="list-group-item d-flex">
                                <i class="bi bi-exclamation-triangle text-warning me-3 fs-4"></i>
                                <span>You frequently select answer choices that "look right" without verifying</span>
                            </li>
                            <li class="list-group-item d-flex">
                                <i class="bi bi-exclamation-triangle text-warning me-3 fs-4"></i>
                                <span>You know formulas but struggle to identify which ones to apply</span>
                            </li>
                            <li class="list-group-item d-flex">
                                <i class="bi bi-exclamation-triangle text-warning me-3 fs-4"></i>
                                <span>You spend too much time on difficult problems at the expense of easier ones</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="mb-5">
                <h2 class="fw-bold mb-4">Next Steps</h2>
                <p>Ready to take your SAT Math preparation to the next level? Consider these approaches:</p>
                
                <div class="alert alert-success mb-4">
                    <div class="d-flex">
                        <div class="me-3">
                            <i class="bi bi-check-circle-fill fs-4"></i>
                        </div>
                        <div>
                            <strong>Strategic Approach:</strong> Focus on understanding problem types rather than memorizing solutions. The SAT tests your ability to apply concepts in new contexts, so developing flexible problem-solving skills is essential.
                        </div>
                    </div>
                </div>
                
                <div class="alert alert-success mb-4">
                    <div class="d-flex">
                        <div class="me-3">
                            <i class="bi bi-check-circle-fill fs-4"></i>
                        </div>
                        <div>
                            <strong>Targeted Practice:</strong> Based on your self-assessment, create a personalized study plan that addresses your specific challenge areas. Quality of practice matters more than quantity.
                        </div>
                    </div>
                </div>
                
                <div class="alert alert-success mb-4">
                    <div class="d-flex">
                        <div class="me-3">
                            <i class="bi bi-check-circle-fill fs-4"></i>
                        </div>
                        <div>
                            <strong>Timed Simulation:</strong> Regular practice under timed conditions builds the mental stamina needed for test day. Start with extended time and gradually reduce it as you become more confident.
                        </div>
                    </div>
                </div>
                
                <p>For comprehensive preparation that addresses all these dimensions, explore our complete SAT preparation program, which includes personalized coaching, adaptive practice materials, and proven strategies for maximizing your score.</p>
            </div>
            
            <div class="mb-5">
                <h2 class="fw-bold mb-4">Related Resources</h2>
                
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="h5 card-title">
                                    <i class="bi bi-book text-primary me-2"></i>
                                    <a href="/resources/time-management.php" class="text-decoration-none">Time Management System</a>
                                </h3>
                                <p class="card-text">Optimize your study schedule and maximize productive learning time with effective time management strategies.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="h5 card-title">
                                    <i class="bi bi-journal-text text-primary me-2"></i>
                                    <a href="/resources/reading-techniques.php" class="text-decoration-none">Advanced Reading Techniques</a>
                                </h3>
                                <p class="card-text">Improve your reading comprehension and efficiency for the SAT Reading section.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../includes/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> 