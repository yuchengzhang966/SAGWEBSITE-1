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
    <title>Consulting Case Interview Example - SageArk</title>
    
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
                <div class="resource-type-badge">PRACTICE SET</div>
                <h1>Consulting Case Interview Example</h1>
                <p class="resources-subtitle">A comprehensive practice case with step-by-step guidance to help you prepare for management consulting interviews.</p>
                
                <!-- Metadata inside hero section -->
                <div class="resource-metadata">
                    <div class="metadata-item">
                        <i class="far fa-calendar-alt"></i> Last Updated: May 2025
                    </div>
                    <div class="metadata-item">
                        <i class="far fa-clock"></i> Practice Time: 45-60 minutes
                    </div>
                    <div class="metadata-item">
                        <i class="fas fa-tag"></i> Category: Career Preparation
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resource Content Section -->
    <section class="resource-content section-padding active">
        <div class="container">
            <div class="resource-main-content">
                <h2>Understanding Consulting Case Interviews</h2>
                
                <p>Case interviews are a critical component of the consulting recruitment process. They assess your problem-solving abilities, business acumen, numerical skills, and communication style under pressure. Success in case interviews requires both structured thinking and creative insight.</p>

                <p>This practice case simulates a typical management consulting interview scenario. Work through it to develop your case-solving skills and prepare for actual interviews with top consulting firms.</p>

                <div class="alert alert-primary" role="alert">
                    <strong>Note:</strong> For the best experience, try to solve this case as if you were in an actual interview. Set a timer, speak your thoughts aloud, and work through the analysis without jumping ahead to the solution.
                </div>

                <h3>Case Interview Fundamentals</h3>
                
                <p>Before diving into the case, remember these key principles:</p>
                
                <div class="row mb-5">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title"><i class="fas fa-sitemap text-primary me-2"></i> Structure</h4>
                                <p class="card-text">Begin with a framework that organizes your approach. Clearly communicate your structure before diving into analysis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title"><i class="fas fa-calculator text-primary me-2"></i> Calculation</h4>
                                <p class="card-text">Show your math clearly. Be comfortable with mental math and sanity-check your calculations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title"><i class="fas fa-lightbulb text-primary me-2"></i> Insight</h4>
                                <p class="card-text">Don't just analyze—interpret. Connect your findings to the client's core question and provide actionable recommendations.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="case-container p-4 mb-5 bg-light rounded">
                    <h3 class="text-center mb-4">GreenGrow Organic Foods: Market Expansion Strategy</h3>
                    
                    <div class="case-section mb-4">
                        <h4>Background Information</h4>
                        <p>Our client is GreenGrow Organic Foods, a mid-sized producer of organic packaged foods with annual revenue of $250 million. They currently operate primarily on the West Coast of the United States, with a product portfolio including organic snacks, frozen meals, and breakfast items.</p>
                        
                        <p>After five years of steady growth in their current markets, GreenGrow is considering expanding into the East Coast market. The CEO has asked our consulting team to determine whether this expansion makes strategic sense and, if so, how they should approach it.</p>
                    </div>
                    
                    <div class="case-section mb-4">
                        <h4>Key Question</h4>
                        <div class="alert alert-secondary">
                            <p class="mb-0"><strong>Should GreenGrow expand to the East Coast market? If yes, what should their expansion strategy be?</strong></p>
                        </div>
                    </div>
                    
                    <div class="case-section mb-4">
                        <h4>Available Information</h4>
                        <ul>
                            <li>GreenGrow's current manufacturing facilities are located in California and Oregon</li>
                            <li>Their highest-margin products are their organic snack lines (40% gross margin)</li>
                            <li>Frozen meals have 25% gross margin but require specialized transportation and storage</li>
                            <li>Breakfast items have 30% gross margin</li>
                            <li>The company has $40 million available for investment in this expansion</li>
                            <li>Their target customers are health-conscious consumers, primarily ages 25-45 with above-average income</li>
                            <li>The East Coast organic food market is estimated at $5 billion annually and growing at 8% per year</li>
                            <li>Three major organic food competitors already have established presence on the East Coast</li>
                        </ul>
                    </div>
                </div>

                <h3>Step 1: Structure Your Approach</h3>
                
                <p>Begin by creating a structured framework to analyze this market expansion question. A good framework for this case might include:</p>
                
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">Market Attractiveness</h4>
                                <ul class="mb-0">
                                    <li>Market size and growth rate</li>
                                    <li>Customer demographics and preferences</li>
                                    <li>Competitive landscape</li>
                                    <li>Regulatory environment</li>
                                    <li>Pricing dynamics</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">Company Capabilities</h4>
                                <ul class="mb-0">
                                    <li>Supply chain considerations</li>
                                    <li>Manufacturing capacity</li>
                                    <li>Distribution channels</li>
                                    <li>Brand recognition</li>
                                    <li>Financial resources</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">Expansion Approach</h4>
                                <ul class="mb-0">
                                    <li>Build vs. acquire facilities</li>
                                    <li>Product portfolio selection</li>
                                    <li>Pricing strategy</li>
                                    <li>Distribution strategy</li>
                                    <li>Marketing approach</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">Financial Implications</h4>
                                <ul class="mb-0">
                                    <li>Investment requirements</li>
                                    <li>Expected revenue</li>
                                    <li>Profitability projections</li>
                                    <li>Payback period</li>
                                    <li>Risks and mitigation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="alert alert-info mb-5">
                    <h5><i class="fas fa-lightbulb me-2"></i> Framework Tip</h5>
                    <p class="mb-0">When structuring your approach, remember to customize standard frameworks to fit the specific case. Don't simply recite a memorized framework—adapt it to address the unique aspects of GreenGrow's situation.</p>
                </div>

                <h3>Step 2: Analyze Market Attractiveness</h3>
                
                <p>Let's start by examining the East Coast market opportunity:</p>

                <div class="case-section mb-5">
                    <h4>Market Size and Potential</h4>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Metric</th>
                                    <th>Data</th>
                                    <th>Analysis</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Current market size</td>
                                    <td>$5 billion annually</td>
                                    <td>Significantly larger than West Coast market ($3.2 billion)</td>
                                </tr>
                                <tr>
                                    <td>Growth rate</td>
                                    <td>8% annually</td>
                                    <td>Strong growth compared to overall food industry (2-3%)</td>
                                </tr>
                                <tr>
                                    <td>Addressable market</td>
                                    <td>~$2 billion (segments where GreenGrow competes)</td>
                                    <td>Focusing on snacks, frozen meals, and breakfast categories</td>
                                </tr>
                                <tr>
                                    <td>Market share needed for success</td>
                                    <td>3-5% of addressable market</td>
                                    <td>Would represent $60-100 million in annual revenue</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="mt-4">
                        <p><strong>Key insight:</strong> The East Coast market represents a significant growth opportunity, with a larger addressable market than GreenGrow's current regions. Even capturing a modest market share would meaningfully impact company revenue.</p>
                    </div>
                </div>

                <div class="case-section mb-5">
                    <h4>Competitive Analysis</h4>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Competitor</th>
                                    <th>Estimated Market Share</th>
                                    <th>Key Strengths</th>
                                    <th>Key Weaknesses</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>NatureFirst Foods</td>
                                    <td>22%</td>
                                    <td>Strong brand recognition, extensive distribution</td>
                                    <td>Higher price points, limited product innovation</td>
                                </tr>
                                <tr>
                                    <td>EarthWise Organics</td>
                                    <td>15%</td>
                                    <td>Local sourcing emphasis, loyal customer base</td>
                                    <td>Manufacturing capacity constraints, limited frozen options</td>
                                </tr>
                                <tr>
                                    <td>PureHealth Foods</td>
                                    <td>13%</td>
                                    <td>Innovative products, strong social media presence</td>
                                    <td>Recent quality control issues, premium pricing</td>
                                </tr>
                                <tr>
                                    <td>Other smaller competitors</td>
                                    <td>30%</td>
                                    <td>Specialty focus, regional loyalty</td>
                                    <td>Limited scale, distribution challenges</td>
                                </tr>
                                <tr>
                                    <td>Conventional food companies with organic lines</td>
                                    <td>20%</td>
                                    <td>Strong distribution, competitive pricing</td>
                                    <td>Less authentic brand positioning, limited selection</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="mt-4">
                        <p><strong>Key insight:</strong> While the East Coast market has established competitors, there appears to be no single dominant player. The market remains fragmented, with approximately 30% held by smaller regional players, suggesting room for a new entrant with the right strategy.</p>
                    </div>
                </div>

                <h3>Step 3: Evaluate Company Capabilities</h3>
                
                <div class="case-section mb-5">
                    <h4>Supply Chain Considerations</h4>
                    
                    <p>GreenGrow must determine how to efficiently serve the East Coast market given their current manufacturing footprint on the West Coast:</p>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Option</th>
                                    <th>Pros</th>
                                    <th>Cons</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ship from existing West Coast facilities</td>
                                    <td>
                                        <ul class="mb-0">
                                            <li>Lower initial investment</li>
                                            <li>Faster market entry</li>
                                            <li>Maintain centralized operations</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="mb-0">
                                            <li>High transportation costs</li>
                                            <li>Longer lead times</li>
                                            <li>Challenges with frozen products</li>
                                            <li>Higher carbon footprint</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Build new East Coast facility</td>
                                    <td>
                                        <ul class="mb-0">
                                            <li>Lower long-term logistics costs</li>
                                            <li>Fresher products for East Coast customers</li>
                                            <li>Increased overall capacity</li>
                                            <li>Potential local sourcing benefits</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="mb-0">
                                            <li>High capital investment ($30-35 million)</li>
                                            <li>12-18 months to operational status</li>
                                            <li>Operational complexity of multiple facilities</li>
                                            <li>Risk if expansion unsuccessful</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Acquire existing East Coast manufacturer</td>
                                    <td>
                                        <ul class="mb-0">
                                            <li>Immediate production capability</li>
                                            <li>Existing workforce and supplier relationships</li>
                                            <li>Potential to acquire market share</li>
                                            <li>Reduced execution risk</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="mb-0">
                                            <li>Higher acquisition cost potentially</li>
                                            <li>Integration challenges</li>
                                            <li>Potential equipment/facility incompatibilities</li>
                                            <li>Limited suitable acquisition targets</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Contract manufacturing partnership</td>
                                    <td>
                                        <ul class="mb-0">
                                            <li>Lower initial investment</li>
                                            <li>Faster market entry</li>
                                            <li>Flexibility to scale based on performance</li>
                                            <li>Reduced risk</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="mb-0">
                                            <li>Lower margins</li>
                                            <li>Quality control challenges</li>
                                            <li>Less operational control</li>
                                            <li>Intellectual property risks</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="alert alert-warning mb-5">
                    <h5><i class="fas fa-exclamation-triangle me-2"></i> Case Note</h5>
                    <p class="mb-0">In a real case interview, you would need to conduct a more detailed cost-benefit analysis of these options using data provided by the interviewer. Be prepared to ask for relevant information and make reasonable assumptions when necessary.</p>
                </div>

                <h3>Step 4: Financial Analysis</h3>
                
                <p>Let's analyze the financial implications of a potential East Coast expansion, focusing on the option to build a new facility:</p>
                
                <div class="case-section mb-5">
                    <h4>Investment and Revenue Projections</h4>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Item</th>
                                    <th>Value</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Initial facility investment</td>
                                    <td>$32 million</td>
                                    <td>Manufacturing facility, equipment, initial setup</td>
                                </tr>
                                <tr>
                                    <td>Working capital</td>
                                    <td>$5 million</td>
                                    <td>Inventory, initial production runs</td>
                                </tr>
                                <tr>
                                    <td>Marketing launch</td>
                                    <td>$3 million</td>
                                    <td>Brand awareness campaign, trade promotions, sampling</td>
                                </tr>
                                <tr>
                                    <td>Total initial investment</td>
                                    <td>$40 million</td>
                                    <td>Aligns with available investment budget</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="table-light"><strong>Year 1 Projections</strong></td>
                                </tr>
                                <tr>
                                    <td>Target market share</td>
                                    <td>1%</td>
                                    <td>Conservative initial entry</td>
                                </tr>
                                <tr>
                                    <td>Year 1 revenue</td>
                                    <td>$20 million</td>
                                    <td>Based on $2 billion addressable market</td>
                                </tr>
                                <tr>
                                    <td>Gross profit (30% avg margin)</td>
                                    <td>$6 million</td>
                                    <td>Weighted average across product lines</td>
                                </tr>
                                <tr>
                                    <td>Operating expenses</td>
                                    <td>$8 million</td>
                                    <td>Includes SG&A and facility operating costs</td>
                                </tr>
                                <tr>
                                    <td>Year 1 operating profit</td>
                                    <td>($2 million)</td>
                                    <td>Expected first-year loss</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="table-light"><strong>5-Year Outlook</strong></td>
                                </tr>
                                <tr>
                                    <td>Year 5 target market share</td>
                                    <td>5%</td>
                                    <td>Growth through distribution expansion and brand building</td>
                                </tr>
                                <tr>
                                    <td>Year 5 revenue</td>
                                    <td>$117 million</td>
                                    <td>Including market growth at 8% annually</td>
                                </tr>
                                <tr>
                                    <td>Year 5 operating profit</td>
                                    <td>$15 million</td>
                                    <td>13% operating margin after scale efficiencies</td>
                                </tr>
                                <tr>
                                    <td>Payback period</td>
                                    <td>4.2 years</td>
                                    <td>Within company's 5-year target for strategic initiatives</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h3>Step 5: Recommendations and Implementation</h3>
                
                <div class="case-section mb-5">
                    <h4>Strategic Recommendation</h4>
                    
                    <div class="alert alert-success">
                        <p><strong>Recommendation:</strong> GreenGrow should proceed with East Coast expansion by building a new manufacturing facility, focusing initially on their high-margin snack products, followed by a phased introduction of breakfast items and then frozen meals.</p>
                    </div>
                    
                    <p>Key supporting points:</p>
                    <ul>
                        <li>The East Coast market represents a significant growth opportunity with strong demand for organic products</li>
                        <li>The market is large enough to accommodate a new entrant, with fragmentation among smaller players</li>
                        <li>Building a dedicated facility offers the best long-term economics and operational control</li>
                        <li>Phased product introduction mitigates risk and allows for learning and adaptation</li>
                        <li>Financial projections indicate acceptable returns within the company's strategic timeframe</li>
                    </ul>
                </div>
                
                <div class="case-section mb-5">
                    <h4>Implementation Plan</h4>
                    
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-month">Months 1-3</div>
                            <p><strong>Market Research and Location Selection</strong></p>
                            <ul>
                                <li>Conduct detailed market research in target East Coast regions</li>
                                <li>Evaluate potential facility locations based on logistics, labor availability, and incentives</li>
                                <li>Finalize facility requirements and specifications</li>
                            </ul>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-month">Months 4-9</div>
                            <p><strong>Facility Development</strong></p>
                            <ul>
                                <li>Acquire land and begin facility construction</li>
                                <li>Order and install manufacturing equipment</li>
                                <li>Develop East Coast supply chain relationships</li>
                                <li>Begin recruiting key personnel</li>
                            </ul>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-month">Months 10-12</div>
                            <p><strong>Pre-Launch Preparation</strong></p>
                            <ul>
                                <li>Complete staffing and training</li>
                                <li>Finalize distributor and retailer relationships</li>
                                <li>Begin test production runs</li>
                                <li>Develop marketing and launch materials</li>
                            </ul>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-month">Months 13-15</div>
                            <p><strong>Phase 1 Launch: Snack Products</strong></p>
                            <ul>
                                <li>Begin production and distribution of organic snack lines</li>
                                <li>Implement regional marketing campaign</li>
                                <li>Establish retail presence in priority chains</li>
                                <li>Gather customer feedback and market response data</li>
                            </ul>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-month">Months 16-24</div>
                            <p><strong>Expansion and Optimization</strong></p>
                            <ul>
                                <li>Introduce breakfast product lines</li>
                                <li>Expand distribution footprint</li>
                                <li>Optimize production and supply chain</li>
                                <li>Begin frozen meal line installation and preparation</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="case-section mb-5">
                    <h4>Key Risks and Mitigation Strategies</h4>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Risk</th>
                                    <th>Mitigation Strategy</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lower than projected market acceptance</td>
                                    <td>
                                        <ul class="mb-0">
                                            <li>Phased approach limits initial exposure</li>
                                            <li>Aggressive sampling and trial generation</li>
                                            <li>Flexibility to adjust product offerings based on feedback</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Competitive response from established players</td>
                                    <td>
                                        <ul class="mb-0">
                                            <li>Differentiated positioning focusing on freshness and West Coast heritage</li>
                                            <li>Strategic relationship building with key retailers</li>
                                            <li>Reserve marketing funds for competitive response if needed</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Supply chain disruptions</td>
                                    <td>
                                        <ul class="mb-0">
                                            <li>Develop relationships with multiple suppliers</li>
                                            <li>Maintain safety stock of key ingredients</li>
                                            <li>Create contingency production plans</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Production quality issues in new facility</td>
                                    <td>
                                        <ul class="mb-0">
                                            <li>Transfer experienced staff from West Coast operations</li>
                                            <li>Implement comprehensive training programs</li>
                                            <li>Rigorous quality control processes and testing</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Economic downturn impacting premium food segment</td>
                                    <td>
                                        <ul class="mb-0">
                                            <li>Ensure portfolio includes value-priced options</li>
                                            <li>Develop contingency plans for production scaling</li>
                                            <li>Maintain financial flexibility with phased investment</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="case-section mb-5">
                    <h4>Key Success Metrics</h4>
                    
                    <p>To evaluate the success of the expansion, GreenGrow should track these key metrics:</p>
                    
                    <ol>
                        <li><strong>Market penetration:</strong> Retail distribution points, market share percentage</li>
                        <li><strong>Financial performance:</strong> Revenue growth, gross margin, operating profit</li>
                        <li><strong>Operational efficiency:</strong> Capacity utilization, production costs, inventory turns</li>
                        <li><strong>Brand awareness:</strong> Aided and unaided brand recognition in East Coast markets</li>
                        <li><strong>Customer satisfaction:</strong> Net Promoter Score, repeat purchase rates</li>
                    </ol>
                </div>

                <div class="resource-download-box">
                    <h3>Download the Complete Case Study Guide</h3>
                    <p>Get our comprehensive guide with more practice cases, frameworks, and detailed solutions to help you ace your consulting interviews.</p>
                    <a href="../downloads/consulting-case-guide.pdf" class="btn btn-primary"><i class="fas fa-download"></i> Download PDF</a>
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
                        <img src="../images/resources/interview-prep.jpg" alt="Interview Preparation">
                        <div class="resource-type">CHECKLIST</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Interview Preparation Checklist</h3>
                        <p>A comprehensive guide to preparing for job and graduate school interviews across various industries.</p>
                        <a href="interview-prep.php" class="resource-link">View Resource →</a>
                    </div>
                </div>
                
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="../images/resources/resume-guide.jpg" alt="Resume Guide">
                        <div class="resource-type">TEMPLATE</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Resume & Cover Letter Guide</h3>
                        <p>Professional templates and guidance for creating standout application documents.</p>
                        <a href="resume-guide.php" class="resource-link">View Resource →</a>
                    </div>
                </div>
                
                <div class="resource-card">
                    <div class="resource-card-image">
                        <img src="../images/resources/networking.jpg" alt="Networking Guide">
                        <div class="resource-type">GUIDE</div>
                    </div>
                    <div class="resource-card-content">
                        <h3>Professional Networking Guide</h3>
                        <p>Strategies and templates for building meaningful professional connections in your target industry.</p>
                        <a href="networking-guide.php" class="resource-link">View Resource →</a>
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