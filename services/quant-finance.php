<?php
// Page variables
$page_title = "Quantitative Finance Program | SageArk";
$meta_description = "Master mathematical modeling, financial engineering, and algorithmic trading with SageArk's Quantitative Finance Program to secure roles at top financial institutions and hedge funds.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/services.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body class="preload service-detail-page">
    <!-- Include the navigation -->
    <?php include '../includes/nav.php'; ?>
    
    <!-- Hero Section -->
    <div class="hero-section bg-primary text-white py-5 mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <span class="badge bg-accent text-white mb-3">CAREER PROGRAM</span>
                    <h1 class="display-4 fw-bold mb-3">Quantitative Finance</h1>
                    <p class="lead mb-4">Master financial modeling, stochastic calculus, and algorithmic trading strategies</p>
                    <div class="d-flex justify-content-center align-items-center small text-white-50 mb-4">
                        <div class="me-3">
                            <i class="bi bi-signal me-1"></i> Advanced
                        </div>
                        <div>
                            <i class="bi bi-clock me-1"></i> 40 hours
                        </div>
                    </div>
                    <a href="#contact" class="btn btn-accent btn-lg">Enroll Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                
                <!-- Program Overview -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Program Overview</h2>
                    <p>The SageArk Quantitative Finance Program is designed for mathematically inclined students and professionals seeking to enter the challenging and rewarding field of quantitative finance. This rigorous program equips participants with the advanced mathematical, statistical, and computational skills needed to succeed in roles at investment banks, hedge funds, proprietary trading firms, and asset management companies.</p>
                    
                    <div class="alert alert-primary my-4">
                        <div class="d-flex">
                            <div class="me-3">
                                <i class="bi bi-info-circle-fill fs-4"></i>
                            </div>
                            <div>
                                <strong>Program Highlights:</strong> Our graduates have secured quantitative positions at prestigious firms including Jane Street, Two Sigma, Citadel, Goldman Sachs, and D.E. Shaw, with a placement rate exceeding 75% for those completing all program components.
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- What You'll Learn -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">What You'll Learn</h2>
                    
                    <div class="row row-cols-1 g-4 mb-4">
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-1-circle text-primary me-2"></i>
                                        Mathematical Foundations
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Build a strong foundation in the mathematical concepts essential for quantitative finance, including advanced calculus, linear algebra, differential equations, probability theory, and stochastic calculus. Learn how these concepts form the backbone of modern financial theory and pricing models.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-2-circle text-primary me-2"></i>
                                        Derivatives Pricing & Risk Management
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Master the principles and techniques for pricing complex financial derivatives including options, swaps, and structured products. Understand risk-neutral valuation, Black-Scholes-Merton framework, Monte Carlo methods, and approaches for managing market, credit, and liquidity risks.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-3-circle text-primary me-2"></i>
                                        Statistical Analysis & Machine Learning
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Apply statistical methods and machine learning algorithms to financial time series data. Learn techniques for market prediction, pattern recognition, sentiment analysis, and creating alpha-generating strategies. Develop skills in feature engineering and model validation specific to financial applications.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-4-circle text-primary me-2"></i>
                                        Algorithmic Trading
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Design and implement algorithmic trading strategies across various asset classes and timeframes. Learn market microstructure, order book dynamics, execution algorithms, and strategy backtesting methodologies. Understand high-frequency trading considerations and regulatory constraints.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-5-circle text-primary me-2"></i>
                                        Programming for Quants
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Develop strong programming skills in Python, R, and C++ with a focus on financial applications. Learn to implement pricing models, optimization techniques, risk metrics, and trading systems. Master data manipulation, numerical methods, and visualization tools used in quantitative finance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Program Structure -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Program Structure</h2>
                    
                    <div class="accordion" id="programStructureAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Module 1: Mathematical & Statistical Foundations
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="moduleOne" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Probability theory and stochastic processes</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Stochastic calculus and Itô's lemma</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Time series analysis for financial data</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Statistical inference and hypothesis testing</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Module 2: Financial Derivatives & Pricing Models
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="moduleTwo" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Options theory and the Black-Scholes model</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Interest rate models and fixed income derivatives</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Monte Carlo simulation for option pricing</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Numerical methods for PDE solving</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Module 3: Portfolio Theory & Risk Management
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="moduleThree" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Modern portfolio theory and asset allocation</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Factor models and risk premia</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Value-at-Risk and expected shortfall methodologies</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Hedging strategies and optimization techniques</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Module 4: Algorithmic Trading & Market Microstructure
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="moduleFour" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Market microstructure and liquidity dynamics</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Statistical arbitrage and pairs trading</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Execution algorithms and order types</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Backtesting frameworks and performance metrics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Module 5: Quant Interview Preparation & Career Development
                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="moduleFive" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Quantitative interview problem solving</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Brainteasers and probability puzzles</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Mock trading and case interviews</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Resume optimization and networking strategies</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Program Details -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Program Details</h2>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h3 class="h5 card-title mb-3"><i class="bi bi-people-fill text-primary me-2"></i>Who This Program Is For</h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Mathematics/Physics/Engineering graduates</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Computer Science students with strong math</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Finance professionals seeking quant skills</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> Ph.D. candidates transitioning to finance</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h3 class="h5 card-title mb-3"><i class="bi bi-award-fill text-primary me-2"></i>What You'll Receive</h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> 15 interactive workshop sessions (2 hours each)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> 5 one-on-one problem-solving sessions</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> 3 mock quant interviews with detailed feedback</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> Access to proprietary strategy backtesting platform</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h3 class="h5 card-title mb-3"><i class="bi bi-calendar-check text-primary me-2"></i>Program Schedule</h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> 16-week intensive program</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Twice-weekly sessions (evenings/weekends)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Flexible scheduling for one-on-one sessions</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> New cohorts start twice per year</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h3 class="h5 card-title mb-3"><i class="bi bi-mortarboard-fill text-primary me-2"></i>Prerequisites</h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Strong mathematical background (calculus, linear algebra)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Programming experience (Python, R, or C++)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Basic understanding of financial markets</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> Aptitude for analytical problem-solving</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Meet Your Instructors -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Meet Your Instructors</h2>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex mb-3">
                                        <div class="flex-shrink-0">
                                            <img src="../images/instructor-9.jpg" alt="Dr. Michael Chen" class="rounded-circle" width="80" height="80">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h3 class="h5 mb-1">Dr. Michael Chen</h3>
                                            <p class="text-muted mb-0">Former Quantitative Researcher, Two Sigma</p>
                                        </div>
                                    </div>
                                    <p>Dr. Chen spent 7 years developing statistical arbitrage strategies at Two Sigma after earning his Ph.D. in Applied Mathematics from MIT. He specializes in machine learning applications for high-frequency trading and has published research in computational finance journals. He has mentored dozens of aspiring quants who now work at top firms.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex mb-3">
                                        <div class="flex-shrink-0">
                                            <img src="../images/instructor-10.jpg" alt="Dr. Sophia Rodriguez" class="rounded-circle" width="80" height="80">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h3 class="h5 mb-1">Dr. Sophia Rodriguez</h3>
                                            <p class="text-muted mb-0">Former VP of Quantitative Research, Goldman Sachs</p>
                                        </div>
                                    </div>
                                    <p>Dr. Rodriguez led a team of quantitative researchers at Goldman Sachs' securities division for 6 years. With a Ph.D. in Financial Engineering from Columbia University, she specializes in derivatives pricing, fixed income models, and algorithmic execution strategies. She brings extensive experience in both model development and practical implementation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Success Stories -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Success Stories</h2>
                    
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="bi bi-quote fs-1 text-primary opacity-50"></i>
                                </div>
                                <div>
                                    <p class="mb-2">Coming from a physics background, I had strong mathematical skills but lacked the specific knowledge needed for quantitative finance. The SageArk program provided exactly what I needed – a perfect blend of theoretical foundations and practical implementation. The stochastic calculus and derivatives pricing modules were particularly challenging but incredibly valuable. The mock interviews were spot-on – almost identical in difficulty and style to what I experienced in actual quant interviews. I'm now working as a Quantitative Researcher at Jane Street, and directly apply concepts from the program daily.</p>
                                    <p class="fst-italic mb-0">— Alex T., Quantitative Researcher, Jane Street</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="bi bi-quote fs-1 text-primary opacity-50"></i>
                                </div>
                                <div>
                                    <p class="mb-2">I was working as a software engineer but wanted to transition to algorithmic trading. Despite having programming skills, I struggled with the mathematical and financial aspects of quantitative interviews. The SageArk Quantitative Finance Program transformed my understanding of financial markets and gave me the tools to develop and backtest trading strategies. The one-on-one problem-solving sessions were invaluable – my instructor identified gaps in my knowledge and provided targeted exercises to strengthen those areas. After completing the program, I received offers from three trading firms and accepted a position at Citadel Securities.</p>
                                    <p class="fst-italic mb-0">— Priya M., Algorithmic Trading Developer, Citadel Securities</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Section -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Frequently Asked Questions</h2>
                    
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                    How advanced does my math background need to be?
                                </button>
                            </h3>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">We recommend a strong foundation in multivariable calculus, linear algebra, differential equations, and probability theory – typically equivalent to upper-level undergraduate mathematics courses. You should be comfortable with concepts like partial derivatives, matrix operations, and probability distributions. While we provide refreshers on key concepts, this is an advanced program that builds on existing mathematical knowledge. If you're unsure about your preparation, we offer a pre-assessment to identify any areas that might need strengthening before the program begins.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                    How does this program compare to a Master's in Financial Engineering?
                                </button>
                            </h3>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">While a Master's in Financial Engineering (MFE) provides comprehensive academic training over 1-2 years, our program is more focused on practical skills and interview preparation for specific quant roles. The key differences are: 1) Our curriculum concentrates on the most relevant topics for quant interviews and industry applications, 2) We emphasize hands-on implementation and problem-solving rather than theoretical derivations, 3) Our program includes extensive interview preparation and career development components, and 4) At 16 weeks part-time, our program requires significantly less time and financial investment than a full MFE. Many of our students have found this program to be an excellent complement to their existing technical degrees.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                    What types of quant roles do graduates typically secure?
                                </button>
                            </h3>
                            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">Our graduates secure a variety of quantitative roles depending on their backgrounds and interests. These include: Quantitative Researcher (developing trading signals and investment strategies), Quantitative Developer (implementing models and building trading systems), Quantitative Trader (executing algorithmic strategies with discretionary oversight), Risk Quant (developing and implementing risk models), and Quantitative Analyst (supporting trading desks with pricing models and analytics). During the program, we help you identify which quant paths best match your skills and interests, and tailor parts of the curriculum accordingly.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                                    How challenging are the quant interviews I should expect?
                                </button>
                            </h3>
                            <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">Quantitative finance interviews are among the most challenging in any industry. You can expect multiple rounds of technical interviews that test mathematical problem-solving, programming skills, financial knowledge, and quick thinking. Questions typically include probability puzzles, stochastic calculus problems, algorithm development, mental math challenges, market-based scenarios, and brainteasers. Our program prepares you for this intensity through extensive practice with realistic problems, timed assessments, and mock interviews that simulate the pressure of actual quant interviews. We've compiled questions from hundreds of real interviews to ensure our preparation is aligned with current industry practices.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- CTA Section -->
                <div id="contact" class="mb-5 p-5 bg-light rounded">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold mb-3">Ready to Launch Your Quantitative Finance Career?</h2>
                        <p class="mb-4">Enroll now to secure your spot in our next cohort. Space is limited to ensure personalized attention.</p>
                    </div>
                    
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="phone">
                            </div>
                            
                            <div class="col-12">
                                <label for="background" class="form-label">Academic Background</label>
                                <select class="form-select" id="background" required>
                                    <option value="" selected disabled>Select your background</option>
                                    <option value="mathematics">Mathematics</option>
                                    <option value="physics">Physics</option>
                                    <option value="engineering">Engineering</option>
                                    <option value="computer_science">Computer Science</option>
                                    <option value="finance">Finance/Economics</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <div class="col-12">
                                <label for="message" class="form-label">What interests you about quantitative finance?</label>
                                <textarea class="form-control" id="message" rows="3" required></textarea>
                            </div>
                            
                            <div class="col-12 text-center mt-4">
                                <button class="btn btn-primary btn-lg px-5" type="submit">Enroll Now</button>
                            </div>
                        </div>
                    </form>
                </div>
                
                <!-- Related Services -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Related Programs & Services</h2>
                    
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="h5 card-title">
                                        <i class="bi bi-graph-up text-primary me-2"></i>
                                        <a href="data-science.php" class="text-decoration-none">Data Science Program</a>
                                    </h3>
                                    <p class="card-text">Master data analysis, machine learning, and statistical modeling for roles in data science and analytics.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="h5 card-title">
                                        <i class="bi bi-briefcase-fill text-primary me-2"></i>
                                        <a href="investment-banking.php" class="text-decoration-none">Investment Banking Program</a>
                                    </h3>
                                    <p class="card-text">Prepare for a career in investment banking with our comprehensive training program.</p>
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
    <script src="../js/main.js"></script>
</body>
</html> 