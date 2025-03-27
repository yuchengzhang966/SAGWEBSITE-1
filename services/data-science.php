<?php
// Page variables
$page_title = "Data Science Program | SageArk";
$meta_description = "Master machine learning, statistical analysis, and data visualization with SageArk's Data Science Program to secure roles at top technology and analytics companies.";

// Set hero section variables
$resourceType = "CAREER PROGRAM";
$title = "Data Science";
$subtitle = "Master machine learning, statistical analysis, and data-driven decision making";
$difficulty = "Intermediate";
$duration = "35";
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
    <?php include '../includes/nav.php'; ?>
    <?php include '../includes/hero-service.php'; ?>
    
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                
                <!-- Program Overview -->
                <div class="mb-5">
                    <h2 class="fw-bold mb-4">Program Overview</h2>
                    <p>The SageArk Data Science Program equips students and professionals with the analytical skills, statistical knowledge, and technical expertise needed to extract valuable insights from complex datasets. This comprehensive program prepares you for roles at leading technology companies, consulting firms, financial institutions, and innovative startups that leverage data for competitive advantage.</p>
                    
                    <div class="alert alert-primary my-4">
                        <div class="d-flex">
                            <div class="me-3">
                                <i class="bi bi-info-circle-fill fs-4"></i>
                            </div>
                            <div>
                                <strong>Program Highlights:</strong> Our graduates have secured data science positions at companies like Google, Facebook, Amazon, McKinsey, Goldman Sachs, and numerous AI-focused startups, with a placement rate exceeding 80% for those who complete all program components.
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
                                        Statistical Methods & Machine Learning
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Develop a strong foundation in statistical analysis and machine learning algorithms. Learn to implement supervised and unsupervised learning techniques, deep learning models, and advanced statistical methods to extract meaningful patterns from data and build predictive models.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-2-circle text-primary me-2"></i>
                                        Data Processing & Engineering
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Master techniques for collecting, cleaning, transforming, and organizing structured and unstructured data. Learn to build efficient data pipelines, implement ETL processes, and work with various data storage systems including SQL and NoSQL databases.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-3-circle text-primary me-2"></i>
                                        Data Visualization & Communication
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Develop the skills to create compelling visual representations of data that tell a story and drive decision-making. Learn to use visualization tools like Tableau, PowerBI, and Python libraries to effectively communicate complex findings to both technical and non-technical stakeholders.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-4-circle text-primary me-2"></i>
                                        Domain-Specific Applications
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Apply data science methodologies to real-world business problems across various industries including finance, healthcare, technology, and e-commerce. Learn how to translate business requirements into analytical frameworks and develop solutions that deliver measurable impact.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h3 class="card-title fw-bold mb-0">
                                        <i class="bi bi-5-circle text-primary me-2"></i>
                                        Data Science Career Preparation
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p>Navigate the data science job market with confidence through resume optimization, portfolio development, and interview preparation. Learn to showcase your technical skills through impactful projects, excel in technical assessments, and effectively communicate your problem-solving approach.</p>
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
                                    Module 1: Foundations of Data Science
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="moduleOne" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Python programming for data analysis (NumPy, Pandas)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Exploratory data analysis techniques</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Probability and statistical inference</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Data cleaning and preprocessing methodologies</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Module 2: Machine Learning Techniques
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="moduleTwo" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Supervised learning (regression, classification, decision trees)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Unsupervised learning (clustering, dimensionality reduction)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Model evaluation and validation techniques</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Feature engineering and selection strategies</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Module 3: Advanced Analytics & Deep Learning
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="moduleThree" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Neural networks and deep learning fundamentals</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Natural language processing techniques</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Computer vision applications</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Time series analysis and forecasting</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Module 4: Data Engineering & Big Data
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="moduleFour" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Database systems and SQL for data scientists</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Big data processing frameworks (Spark)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Data pipeline development and optimization</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Cloud platforms for data science (AWS, GCP)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="moduleFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Module 5: Applied Data Science & Career Development
                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="moduleFive" data-bs-parent="#programStructureAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> End-to-end data science projects in various domains</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Ethical considerations and responsible AI</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Technical interview preparation for data roles</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Portfolio development and presentation skills</li>
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
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> STEM graduates (statistics, math, CS)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Analysts and researchers seeking advancement</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Software engineers transitioning to data roles</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> Professionals with quantitative backgrounds</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h3 class="h5 card-title mb-3"><i class="bi bi-award-fill text-primary me-2"></i>What You'll Receive</h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> 12 live workshop sessions (2 hours each)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> 4 one-on-one project mentoring sessions</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> 3 technical mock interviews with feedback</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> Access to capstone project database</li>
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
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> 14-week structured program</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Twice-weekly sessions (evenings/weekends)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Flexible scheduling for mentoring sessions</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> New cohorts start quarterly</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h3 class="h5 card-title mb-3"><i class="bi bi-mortarboard-fill text-primary me-2"></i>Prerequisites</h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Basic programming knowledge (preferably Python)</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Undergraduate-level mathematics</li>
                                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i> Comfort with statistical concepts</li>
                                        <li><i class="bi bi-check-circle text-primary me-2"></i> Analytical thinking capabilities</li>
                                    </ul>
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
                                    <p class="mb-2">As a financial analyst with solid Excel skills but limited programming experience, I was intimidated by the technical requirements of data science roles. The SageArk Data Science Program provided a structured approach that built my confidence from foundational concepts to advanced techniques. The project-based learning was incredibly effective - my capstone project analyzing customer churn patterns became a centerpiece of my portfolio. Within two months of completing the program, I secured a data scientist position at Capital One with a 40% salary increase.</p>
                                    <p class="fst-italic mb-0">— Maya H., Data Scientist, Capital One</p>
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
                                    <p class="mb-2">I had a computer science degree and decent coding skills, but struggled with the statistical foundations and practical implementation of machine learning models. The SageArk program filled these gaps perfectly with a balance of theory and hands-on application. The mentorship from industry professionals was invaluable - my mentor provided detailed feedback on my projects and connected me with their network. The mock interviews prepared me thoroughly for the actual interview process. I'm now working at Airbnb as a Machine Learning Engineer, applying the exact skills I learned in the program.</p>
                                    <p class="fst-italic mb-0">— Raj P., Machine Learning Engineer, Airbnb</p>
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
                                    How much math and statistics background do I need?
                                </button>
                            </h3>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">We recommend comfort with college-level mathematics including calculus, linear algebra, and probability. However, we've designed the program to include refreshers on key mathematical concepts as needed. The most important prerequisite is an analytical mindset and willingness to engage with quantitative concepts. If you're rusty on specific topics, we provide pre-program materials to help you prepare. Many successful graduates have come from non-traditional backgrounds but demonstrated strong logical reasoning abilities.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                    How does this program compare to online data science courses?
                                </button>
                            </h3>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">While online courses can provide theoretical knowledge, our program offers several significant advantages: 1) Direct mentorship from industry practitioners who have led data science teams at top companies, 2) Project-based learning with real-world datasets and business problems, 3) Personalized feedback on your portfolio projects, 4) Community learning with a cohort of motivated peers, and 5) Comprehensive career preparation including resume reviews, mock interviews, and networking strategies. Our curriculum is constantly updated to reflect current industry demands, tools, and techniques.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                    What types of projects will I complete during the program?
                                </button>
                            </h3>
                            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">Throughout the program, you'll work on 4-5 mini-projects and one comprehensive capstone project. These include: a predictive modeling challenge using structured data, a natural language processing application, a computer vision implementation, a time-series forecasting project, and a final capstone tailored to your industry interests. The capstone is designed to showcase your end-to-end data science skills from problem formulation to deployment. You'll select from a range of real-world datasets or can propose your own project with instructor approval.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                                    What is the typical career progression for program graduates?
                                </button>
                            </h3>
                            <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0">Most graduates initially secure roles as Data Scientists, Data Analysts, or Machine Learning Engineers, depending on their background and interests. Within 1-2 years, many progress to Senior Data Scientist or specialized roles in areas like NLP, computer vision, or machine learning operations. After 3-5 years, some graduates move into leadership positions such as Lead Data Scientist or Data Science Manager. Others specialize further into research-oriented roles or transition to adjacent fields like AI product management. Throughout the program, we provide career coaching to help you identify and pursue the path that best aligns with your goals and strengths.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Move the CTA section outside of the container -->
    <?php include '../includes/cta.php'; ?>
    
    <!-- Re-open the default container for Related Programs -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Related Services -->
                <div class="mb-5 mt-5">
                    <h2 class="fw-bold mb-4">Related Programs & Services</h2>
                    
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="h5 card-title">
                                        <i class="bi bi-code-slash text-primary me-2"></i>
                                        <a href="software-engineer.php" class="text-decoration-none">Software Engineering Program</a>
                                    </h3>
                                    <p class="card-text">Master programming fundamentals, algorithms, and system design for software engineering roles at top tech companies.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="h5 card-title">
                                        <i class="bi bi-currency-exchange text-primary me-2"></i>
                                        <a href="quant-finance.php" class="text-decoration-none">Quantitative Finance Program</a>
                                    </h3>
                                    <p class="card-text">Develop advanced quantitative skills for roles in trading, risk management, and financial modeling.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Include the footer -->
    <?php include '../includes/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html> 