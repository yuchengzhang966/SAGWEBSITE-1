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
    <title>Financial Modeling Templates - SageArk</title>
    
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
                <h1>Financial Modeling Templates</h1>
                <p class="resources-subtitle">An overview of essential financial modeling frameworks used in investment banking, private equity, and corporate finance roles.</p>
                
                <!-- Metadata inside hero section -->
                <div class="resource-metadata">
                    <div class="metadata-item">
                        <i class="far fa-calendar-alt"></i> Last Updated: July 2023
                    </div>
                    <div class="metadata-item">
                        <i class="far fa-clock"></i> Reading Time: 15 minutes
                    </div>
                    <div class="metadata-item">
                        <i class="fas fa-tag"></i> Category: Finance Careers
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resource Content Section -->
    <section class="resource-content section-padding active">
        <div class="container">
            <div class="resource-main-content">
                <h2>Financial Modeling in Business and Finance</h2>
                
                <p>Financial modeling is a fundamental skill for careers in investment banking, private equity, corporate finance, and management consulting. These mathematical representations of a company's past and future performance are used to inform strategic decisions, valuations, and investment choices.</p>

                <p>This resource provides an overview of the most common financial modeling templates used across industries. Understanding these model types and their applications will help prepare you for finance interviews and early career roles.</p>

                <div class="alert alert-primary" role="alert">
                    <strong>Note:</strong> While proficiency in Excel is important, financial modeling is primarily about understanding business fundamentals and how various drivers affect financial outcomes. The best modelers combine technical skills with business insight and critical thinking.
                </div>

                <h3>Three-Statement Financial Models</h3>
                
                <div class="case-container p-4 mb-5 bg-light rounded">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="mb-3">The Foundation of Financial Analysis</h4>
                            <p>The three-statement model links the income statement, balance sheet, and cash flow statement into an integrated financial representation of a company. This is the cornerstone of financial modeling upon which more complex analyses are built.</p>
                            
                            <h5 class="mt-4">Key Components:</h5>
                            <ul>
                                <li><strong>Income Statement:</strong> Projects revenue, expenses, and profitability</li>
                                <li><strong>Balance Sheet:</strong> Models assets, liabilities, and equity positions</li>
                                <li><strong>Cash Flow Statement:</strong> Tracks cash movements across operating, investing, and financing activities</li>
                            </ul>
                            
                            <h5 class="mt-4">Common Applications:</h5>
                            <ul>
                                <li>Budgeting and financial planning</li>
                                <li>Assessing historical performance</li>
                                <li>Foundation for valuation models</li>
                                <li>Scenario and sensitivity analysis</li>
                            </ul>
                        </div>
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <i class="fas fa-chart-line text-primary" style="font-size: 6rem;"></i>
                                <p class="mt-3"><strong>Complexity Level:</strong> Intermediate</p>
                                <p><strong>Typical Users:</strong> Financial analysts, investment bankers, finance managers</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Discounted Cash Flow (DCF) Models</h3>
                
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><i class="fas fa-calculator text-primary me-2"></i> Valuation Standard</h4>
                                <p>The DCF model determines the present value of expected future cash flows to arrive at an enterprise or equity valuation. It's considered one of the most theoretically sound valuation approaches as it focuses on a company's ability to generate cash.</p>
                                
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <h5>Model Structure:</h5>
                                        <ol>
                                            <li>Forecast free cash flows for 5-10 years</li>
                                            <li>Calculate a terminal value beyond the forecast period</li>
                                            <li>Determine an appropriate discount rate (WACC)</li>
                                            <li>Discount all future cash flows to present value</li>
                                            <li>Sum the present values to determine enterprise value</li>
                                            <li>Convert to equity value by adjusting for debt, cash, and other factors</li>
                                        </ol>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Key Assumptions and Drivers:</h5>
                                        <ul>
                                            <li>Revenue growth rates</li>
                                            <li>Profit margins</li>
                                            <li>Capital expenditure requirements</li>
                                            <li>Working capital needs</li>
                                            <li>Weighted Average Cost of Capital (WACC)</li>
                                            <li>Terminal growth rate</li>
                                            <li>Exit multiple</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="mt-4">
                                    <h5>When It's Used:</h5>
                                    <p>DCF models are standard in M&A transactions, equity research, capital raising, and investment decisions. They're particularly valuable for companies with predictable cash flows and when comparing investment alternatives with different timing profiles.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Leveraged Buyout (LBO) Models</h3>
                
                <div class="case-section mb-5 p-4 bg-light rounded">
                    <h4>Private Equity's Core Model</h4>
                    
                    <div class="row mt-3">
                        <div class="col-md-7">
                            <p>LBO models simulate the acquisition of a company using a significant amount of debt. They're designed to project returns to equity investors (typically private equity firms) based on various operating scenarios, debt structures, and exit timelines.</p>
                            
                            <h5 class="mt-4">Model Components:</h5>
                            <ul>
                                <li><strong>Transaction structure:</strong> Sources and uses of funds</li>
                                <li><strong>Debt schedules:</strong> Multiple tranches with different terms</li>
                                <li><strong>Operating projections:</strong> Revenue, margins, working capital</li>
                                <li><strong>Exit analysis:</strong> Typically based on EV/EBITDA multiples</li>
                                <li><strong>Returns analysis:</strong> IRR, MOIC, cash-on-cash returns</li>
                            </ul>
                            
                            <p class="mt-4">The core objective of an LBO model is to determine whether a transaction can generate the target return (typically 20-30% IRR) for the private equity investor. This requires balancing the amount of leverage, operational improvements, and exit timing/valuation.</p>
                        </div>
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="mb-0">Key LBO Metrics</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="mb-0">
                                        <li><strong>Internal Rate of Return (IRR):</strong> Annualized return percentage</li>
                                        <li><strong>Multiple of Invested Capital (MOIC):</strong> Total return multiple (e.g., 2.5x)</li>
                                        <li><strong>Debt/EBITDA:</strong> Leverage ratio at entry and exit</li>
                                        <li><strong>EBITDA Growth:</strong> Compound annual growth rate</li>
                                        <li><strong>Debt Paydown:</strong> Amount of debt reduced during holding period</li>
                                        <li><strong>Exit Multiple:</strong> EV/EBITDA at time of sale</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Merger & Acquisition (M&A) Models</h3>
                
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><i class="fas fa-handshake text-primary me-2"></i> Accretion/Dilution Analysis</h4>
                                <p>M&A models analyze the financial impact of one company acquiring another. The primary goal is to determine whether the transaction will be accretive (increases EPS) or dilutive (decreases EPS) to the acquirer's earnings per share, as well as to assess other financial implications.</p>
                                
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <h5>Key Considerations:</h5>
                                        <ul>
                                            <li>Purchase price and premium to current market value</li>
                                            <li>Transaction financing (cash, stock, debt, or combination)</li>
                                            <li>Synergies (revenue and cost)</li>
                                            <li>Integration costs</li>
                                            <li>Treatment of existing debt</li>
                                            <li>Tax implications</li>
                                            <li>Accounting adjustments (goodwill, write-ups)</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Core Outputs:</h5>
                                        <ul>
                                            <li>Pro forma financial statements</li>
                                            <li>Accretion/dilution to EPS by year</li>
                                            <li>Impact on key financial ratios</li>
                                            <li>Breakeven analysis (synergies needed for accretion)</li>
                                            <li>Sensitivity analysis of key variables</li>
                                            <li>Contribution analysis (% ownership vs. % contribution)</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="alert alert-info mt-4">
                                    <p class="mb-0"><strong>Key Insight:</strong> While EPS accretion/dilution is important, it shouldn't be the only consideration in M&A decisions. Strategic fit, long-term growth potential, and competitive positioning are often more critical factors.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Specialty Financial Models</h3>
                
                <div class="accordion mb-5" id="accordionModels">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <strong>Real Estate Financial Models</strong>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionModels">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p>Real estate models evaluate the potential returns from property investments over time. They're designed to account for the unique aspects of real estate including lease structures, operating expenses, capital expenditures, and financing options.</p>
                                        
                                        <h5 class="mt-3">Key Components:</h5>
                                        <ul>
                                            <li><strong>Property-level projections:</strong> Rental income, vacancy rates, operating expenses</li>
                                            <li><strong>Tenant rollover analysis:</strong> Lease expirations, renewals, and re-leasing</li>
                                            <li><strong>Debt service:</strong> Mortgage payments, refinancing scenarios</li>
                                            <li><strong>Capital expenditures:</strong> Renovations, tenant improvements</li>
                                            <li><strong>Exit analysis:</strong> Terminal cap rate, disposition costs</li>
                                            <li><strong>Returns measures:</strong> Cash-on-cash returns, IRR, equity multiple</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card h-100">
                                            <div class="card-header">Property Types</div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Commercial Office</li>
                                                <li class="list-group-item">Retail</li>
                                                <li class="list-group-item">Industrial/Warehouse</li>
                                                <li class="list-group-item">Multi-family Residential</li>
                                                <li class="list-group-item">Hospitality</li>
                                                <li class="list-group-item">Mixed-use Development</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <strong>Startup Financial Models</strong>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionModels">
                            <div class="accordion-body">
                                <p>Startup financial models project the growth trajectory and funding needs of early-stage companies. They're characterized by high uncertainty, rapid growth assumptions, and often a path to profitability over several years.</p>
                                
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <h5>Unique Considerations:</h5>
                                        <ul>
                                            <li>User/customer acquisition metrics</li>
                                            <li>Unit economics (CAC, LTV, payback period)</li>
                                            <li>Runway calculation</li>
                                            <li>Funding rounds and dilution</li>
                                            <li>Milestone-based projections</li>
                                            <li>Multiple growth scenarios</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Key Metrics:</h5>
                                        <ul>
                                            <li>Monthly Recurring Revenue (MRR)</li>
                                            <li>Customer Acquisition Cost (CAC)</li>
                                            <li>Lifetime Value (LTV)</li>
                                            <li>Churn rate</li>
                                            <li>Burn rate</li>
                                            <li>Months of runway</li>
                                            <li>Gross margin</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <p class="mt-3">Startup models often use a bottom-up approach, starting with granular operational metrics (users, conversion rates, etc.) and building up to financial projections, rather than the top-down approach common in traditional financial modeling.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <strong>Project Finance Models</strong>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionModels">
                            <div class="accordion-body">
                                <p>Project finance models evaluate long-term infrastructure or industrial projects with a defined lifespan. These models are typically very detailed and focus on debt service coverage ratios (DSCR) and other measures important to lenders.</p>
                                
                                <h5 class="mt-3">Typical Applications:</h5>
                                <ul>
                                    <li>Power plants (conventional and renewable)</li>
                                    <li>Transportation infrastructure (toll roads, airports, ports)</li>
                                    <li>Natural resource projects (mines, oil & gas)</li>
                                    <li>Public-private partnerships (PPPs)</li>
                                    <li>Real estate development</li>
                                </ul>
                                
                                <h5 class="mt-3">Key Features:</h5>
                                <ul>
                                    <li>Construction phase modeling</li>
                                    <li>Detailed operating phase projections</li>
                                    <li>Complex debt facilities (senior, mezzanine, etc.)</li>
                                    <li>Reserve accounts</li>
                                    <li>Contractual cashflow waterfall</li>
                                    <li>Multiple debt service coverage ratios</li>
                                    <li>Sponsor returns analysis</li>
                                </ul>
                                
                                <p class="mt-3">Project finance models are characterized by their extreme detail and risk mitigation focus. They typically run monthly for the construction period and quarterly or annually during the operational phase, often spanning 20+ years.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Best Practices in Financial Modeling</h3>
                
                <div class="row mb-5">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h4 class="card-title mb-0">Structure & Organization</h4>
                            </div>
                            <div class="card-body">
                                <ul class="mb-0">
                                    <li><strong>Separate inputs, calculations, and outputs</strong> - Keep assumptions clearly identified and in dedicated areas</li>
                                    <li><strong>Use consistent formatting</strong> - Color-code inputs, formulas, and links</li>
                                    <li><strong>Create a table of contents</strong> - Especially for complex models</li>
                                    <li><strong>Document assumptions</strong> - Include sources and rationale</li>
                                    <li><strong>Build in modularity</strong> - Create sections that can be understood independently</li>
                                    <li><strong>Include error checks</strong> - Balance sheet balancing, cash reconciliation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h4 class="card-title mb-0">Technical Execution</h4>
                            </div>
                            <div class="card-body">
                                <ul class="mb-0">
                                    <li><strong>Minimize hard-coded numbers</strong> - Use cell references to assumptions</li>
                                    <li><strong>Avoid circular references</strong> - Use solver tools if needed</li>
                                    <li><strong>Use descriptive labels</strong> - Make formulas understandable</li>
                                    <li><strong>Build in sensitivity analysis</strong> - Data tables for key variables</li>
                                    <li><strong>Include sanity checks</strong> - Compare results to industry benchmarks</li>
                                    <li><strong>Version control</strong> - Track changes and iterations</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Skills Required for Financial Modeling</h3>
                
                <div class="case-section mb-5">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="card-title"><i class="fas fa-laptop-code text-primary me-2"></i> Technical Skills</h4>
                                    <ul class="mb-0">
                                        <li><strong>Advanced Excel:</strong> Formulas, functions, pivot tables, data tables</li>
                                        <li><strong>Financial statement analysis:</strong> Understanding how the three statements interconnect</li>
                                        <li><strong>Accounting knowledge:</strong> GAAP/IFRS principles and their implications</li>
                                        <li><strong>Valuation methodologies:</strong> Comparables, precedents, DCF</li>
                                        <li><strong>Financial metrics:</strong> Understanding ratios and performance measures</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="card-title"><i class="fas fa-chart-pie text-primary me-2"></i> Analytical Skills</h4>
                                    <ul class="mb-0">
                                        <li><strong>Critical thinking:</strong> Question assumptions and identify inconsistencies</li>
                                        <li><strong>Business acumen:</strong> Understanding industry drivers and trends</li>
                                        <li><strong>Risk assessment:</strong> Identifying key risks and planning scenarios</li>
                                        <li><strong>Data interpretation:</strong> Extracting insights from financial results</li>
                                        <li><strong>Problem-solving:</strong> Troubleshooting models and resolving issues</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="card-title"><i class="fas fa-users text-primary me-2"></i> Communication Skills</h4>
                                    <ul class="mb-0">
                                        <li><strong>Presentation ability:</strong> Explaining complex models to non-technical audiences</li>
                                        <li><strong>Data visualization:</strong> Creating clear charts and dashboards</li>
                                        <li><strong>Executive summaries:</strong> Distilling key insights into concise takeaways</li>
                                        <li><strong>Documentation:</strong> Explaining assumptions and methodologies</li>
                                        <li><strong>Collaboration:</strong> Working with teams to develop and refine models</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Financial Modeling in Different Industries</h3>
                
                <div class="table-responsive mb-5">
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Industry</th>
                                <th>Key Model Types</th>
                                <th>Unique Considerations</th>
                                <th>Important Metrics</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Banking & Financial Services</strong></td>
                                <td>Loan portfolio models, capital adequacy models, stress tests</td>
                                <td>Regulatory requirements, interest rate sensitivity, credit quality</td>
                                <td>Net interest margin, efficiency ratio, ROA, ROE</td>
                            </tr>
                            <tr>
                                <td><strong>Consumer Retail</strong></td>
                                <td>Same-store sales models, inventory turnover models</td>
                                <td>Seasonality, promotional impact, omnichannel metrics</td>
                                <td>Comp sales, sales per square foot, inventory turns</td>
                            </tr>
                            <tr>
                                <td><strong>Technology & SaaS</strong></td>
                                <td>Subscription revenue models, cohort analysis</td>
                                <td>High growth rates, user acquisition costs, scaling economics</td>
                                <td>ARR/MRR, churn rate, LTV/CAC ratio, magic number</td>
                            </tr>
                            <tr>
                                <td><strong>Energy & Utilities</strong></td>
                                <td>Commodity price models, asset utilization models</td>
                                <td>Regulatory environment, long asset lives, commodity price exposure</td>
                                <td>EBITDA margins, reserve replacement ratio, production costs</td>
                            </tr>
                            <tr>
                                <td><strong>Healthcare</strong></td>
                                <td>Patient volume models, reimbursement models</td>
                                <td>Insurance dynamics, regulatory changes, demographic trends</td>
                                <td>Average length of stay, patient acquisition cost, reimbursement rates</td>
                            </tr>
                            <tr>
                                <td><strong>Manufacturing</strong></td>
                                <td>Capacity utilization models, supply chain models</td>
                                <td>Fixed vs. variable costs, capex cycles, working capital needs</td>
                                <td>Gross margin, days inventory, capacity utilization %</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3>Final Thoughts: Beyond the Templates</h3>
                
                <p>Financial models are tools to support decision-making, not replacements for business judgment. The most effective financial modeling goes beyond technical proficiency to incorporate strategic thinking, industry knowledge, and a clear understanding of the model's purpose and limitations.</p>
                
                <p>As you advance in your finance career, focus on developing a balanced skillset that combines technical modeling abilities with business acumen and effective communication. This combination will enable you to create models that not only calculate accurately but also provide meaningful insights that drive better business decisions.</p>
                
                <div class="alert alert-info mb-5">
                    <h5><i class="fas fa-lightbulb me-2"></i> Key Insight</h5>
                    <p class="mb-0">The most valuable financial models aren't necessarily the most complex. Often, simpler models with clear assumptions and thoughtful sensitivity analysis provide more actionable insights than overly complicated models that obscure key drivers and risks.</p>
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
                        <img src="../images/resources/consulting-cases.jpg" alt="Consulting Case Interview">
                        <div class="resource-type">PRACTICE SET</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Consulting Case Interview Example</h3>
                        <p>A comprehensive practice case with step-by-step guidance to help you prepare for management consulting interviews.</p>
                        <a href="consulting-cases.php" class="resource-link">View Resource →</a>
                    </div>
                </div>
                
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="../images/resources/resume-guide.jpg" alt="Resume Guide">
                        <div class="resource-type">TEMPLATE</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Resume & Cover Letter Guide</h3>
                        <p>Professional templates and guidance for creating standout application documents for competitive fields.</p>
                        <a href="resume-guide.php" class="resource-link">View Resource →</a>
                    </div>
                </div>
                
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="../images/resources/tech-questions.jpg" alt="Technical Interview Questions">
                        <div class="resource-type">PRACTICE SET</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Consulting Behavioral Interview Questions</h3>
                        <p>Master the most difficult behavioral questions asked in top consulting firm interviews with expert frameworks.</p>
                        <a href="tech-questions.php" class="resource-link">View Resource →</a>
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
</body>
</html> 