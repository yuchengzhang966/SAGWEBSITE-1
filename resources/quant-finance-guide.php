<?php
// Enable error reporting during development
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Page title
$page_title = "Quant Finance Guide | SageArk";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <meta name="description" content="Essential introduction to quantitative finance fundamentals and career preparation, part of the SageArk Career Program">
</head>

<body class="preload resource-detail-page">
    <!-- Include the navigation -->
    <?php include '../includes/nav.php'; ?>
    
    <div class="hero-section bg-primary text-white py-5 mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <span class="badge bg-accent text-white mb-3">GUIDE</span>
                    <h1 class="display-4 fw-bold mb-3">Quant Finance Guide</h1>
                    <p class="lead mb-4">A concise introduction to quantitative finance fundamentals and career preparation</p>
                    <div class="d-flex justify-content-center align-items-center small text-white-50">
                        <div class="me-3">
                            <i class="bi bi-clock me-1"></i> Last updated: November 2023
                        </div>
                        <div>
                            <i class="bi bi-book me-1"></i> 15 min read
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
                    <h2 class="fw-bold mb-4">Introduction to Quantitative Finance</h2>
                    <p>Quantitative finance applies mathematical and statistical methods to understand financial markets and develop trading strategies. This guide introduces key concepts, methodologies, and career preparation steps for aspiring quantitative finance professionals.</p>
                    
                    <div class="alert alert-primary my-4">
                        <div class="d-flex">
                            <div class="me-3">
                                <i class="bi bi-info-circle-fill fs-4"></i>
                            </div>
                            <div>
                                <strong>Note:</strong> This guide is part of the SageArk Career Program, providing specialized content for quantitative finance careers while complementing our broader career development resources.
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Guide Components</h2>
                    
                    <div class="row row-cols-1 g-4 mb-4">
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-1-circle text-primary me-2"></i>
                                        Financial Markets Overview
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>An introduction to the structure of financial markets, including equities, fixed income, derivatives, and their interconnections. This section helps you understand the ecosystem where quantitative finance professionals operate.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-2-circle text-primary me-2"></i>
                                        Mathematical Foundations
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Overview of the essential mathematical tools used in quantitative finance, including probability theory, stochastic calculus, linear algebra, and numerical methods that form the foundation of financial modeling.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-3-circle text-primary me-2"></i>
                                        Quantitative Trading Strategies
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Introduction to common trading approaches in quantitative finance, including statistical arbitrage, trend following, mean reversion, and high-frequency trading. Learn the logic behind systematic investment strategies.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-4-circle text-primary me-2"></i>
                                        Risk Management Frameworks
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Overview of risk measurement and management techniques, including Value at Risk (VaR), stress testing, and portfolio optimization methods. Understand how quantitative professionals approach risk control.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-5-circle text-primary me-2"></i>
                                        Career Development Roadmap
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>A structured approach to preparing for careers in quantitative finance, from academic foundations to technical skills and interview preparation. This section outlines the path to roles in hedge funds, investment banks, and trading firms.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Key Quantitative Finance Concepts</h2>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Concept</th>
                                    <th>Description</th>
                                    <th>Application</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Brownian Motion</strong></td>
                                    <td>Mathematical model describing random movement of asset prices</td>
                                    <td>Foundation for options pricing models and stochastic differential equations</td>
                                </tr>
                                <tr>
                                    <td><strong>Black-Scholes Model</strong></td>
                                    <td>Framework for determining theoretical price of European options</td>
                                    <td>Derivatives pricing and understanding of implied volatility</td>
                                </tr>
                                <tr>
                                    <td><strong>Factor Models</strong></td>
                                    <td>Statistical approach to explain asset returns using common factors</td>
                                    <td>Portfolio construction, risk decomposition, and performance attribution</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Technical Skills Overview</h2>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="h5 fw-bold mb-0">Programming Languages</h3>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="bi bi-code-square text-primary me-2"></i>
                                            <span><strong>Python:</strong> Data analysis, backtesting, and model building</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="bi bi-code-square text-primary me-2"></i>
                                            <span><strong>R:</strong> Statistical analysis and time series modeling</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="bi bi-code-square text-primary me-2"></i>
                                            <span><strong>C++:</strong> High-performance trading systems</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="h5 fw-bold mb-0">Data Analysis</h3>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="bi bi-graph-up text-primary me-2"></i>
                                            <span><strong>Time Series Analysis:</strong> ARIMA, GARCH models</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="bi bi-graph-up text-primary me-2"></i>
                                            <span><strong>Machine Learning:</strong> Classification, regression, clustering</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="bi bi-graph-up text-primary me-2"></i>
                                            <span><strong>Big Data:</strong> Processing large financial datasets</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">SageArk Career Program Integration</h2>
                    <p>This Quant Finance Guide is a cornerstone resource within our comprehensive Career Program.</p>
                    
                    <div class="accordion" id="careerProgramAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Academic Foundation
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#careerProgramAccordion">
                                <div class="accordion-body">
                                    <p>This guide helps students understand the educational background required for quantitative finance careers. It connects with our academic planning resources to help students select appropriate coursework in mathematics, statistics, computer science, and finance.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Technical Skill Building
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#careerProgramAccordion">
                                <div class="accordion-body">
                                    <p>Integrates with our broader skill development resources, providing guidance on acquiring the programming, statistical, and financial modeling skills needed for quant roles. The guide connects technical competencies with practical learning resources.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Interview Preparation
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#careerProgramAccordion">
                                <div class="accordion-body">
                                    <p>Connects with our specialized interview preparation modules for quantitative roles, including brainteaser questions, technical coding challenges, and financial modeling exercises commonly used in quant interviews.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Industry Networking
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#careerProgramAccordion">
                                <div class="accordion-body">
                                    <p>Works alongside our networking resources to help students connect with professionals in quantitative finance. The guide includes insights into industry events, professional associations, and effective networking strategies specific to this field.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Student Success Stories</h2>
                    
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="bi bi-quote fs-1 text-primary opacity-50"></i>
                                </div>
                                <div>
                                    <p class="mb-2">The Quant Finance Guide helped me understand what skills I needed to develop during my mathematics degree. It provided a clear roadmap that helped me secure a summer internship at a top quantitative trading firm, which led to a full-time offer.</p>
                                    <p class="fst-italic mb-0">— Maya R., SageArk Career Program Graduate</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Frequently Asked Questions</h2>
                    
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                    What academic background is needed for quantitative finance?
                                </button>
                            </h3>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Most quantitative finance roles require strong mathematical skills. Degrees in mathematics, statistics, physics, computer science, or engineering are common entry points. Some roles may require advanced degrees (Master's or PhD), while others accept strong undergraduate backgrounds with demonstrated quantitative abilities.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                    How does this guide integrate with the SageArk Career Program?
                                </button>
                            </h3>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>The Quant Finance Guide is one of several industry-specific resources in our Career Program. It provides specialized content for quantitative finance careers while complementing our broader career development resources, including technical skill building, interview preparation, and networking opportunities.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                    What types of roles does this guide cover?
                                </button>
                            </h3>
                            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>This guide covers various quantitative finance roles, including quantitative analyst, quantitative trader, quantitative developer, risk manager, and quantitative researcher positions across investment banks, hedge funds, proprietary trading firms, and asset management companies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Related Resources</h2>
                    
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="h5 card-title">
                                        <i class="bi bi-book text-primary me-2"></i>
                                        <a href="/resources/python-finance.php" class="text-decoration-none">Python for Finance</a>
                                    </h3>
                                    <p class="card-text">Practical programming skills for financial data analysis and algorithmic trading.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="h5 card-title">
                                        <i class="bi bi-journal-text text-primary me-2"></i>
                                        <a href="/resources/risk-management.php" class="text-decoration-none">Financial Risk Management</a>
                                    </h3>
                                    <p class="card-text">Comprehensive overview of risk assessment and management techniques in financial markets.</p>
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