<?php
$page_title = "Services - E7 Technology Solutions";
$assetBasePath = 'assets';
$navBasePath = '';
include('header.php');
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $assetBasePath; ?>/services.css?v=6">

<!-- Hero Section -->
<section class="services-hero">
    <div class="container">
        <div class="services-hero-content">
            <span class="services-badge">OUR SERVICES</span>
            <h1 class="services-hero-title">Expert Technology Services Built for Your Success</h1>
            <p class="services-hero-subtitle">Comprehensive cybersecurity, data analytics, AI advisory, software development, and training solutions</p>
        </div>
    </div>
    <div class="hero-overlay"></div>
</section>

<!-- Detailed Services Section -->
<section class="detailed-services">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">IN-DEPTH</span>
            <h2 class="section-title">Detailed Service Offerings</h2>
        </div>

        <!-- Cybersecurity Details -->
        <!-- Cybersecurity Details -->
        <div class="service-detail-card" id="cybersecurity" data-aos="fade-up">
            <div class="service-detail-visual">
                <img src="assets/images/Cybersecurity___Data_Protection_Icon-removebg-preview.png" alt="Cybersecurity">
            </div>
            <div class="service-detail-content">
                <div class="detail-header">
                    <span class="detail-badge">SECURITY FIRST</span>
                    <h3>Cybersecurity & Data Protection Services</h3>
                </div>
                <p class="detail-intro">
                    In today's digital landscape, cybersecurity isn't optional—it's essential. Our comprehensive cybersecurity services help organizations identify vulnerabilities, strengthen defenses, and protect critical assets through structured risk assessments and proven security frameworks.
                </p>
                <div class="detail-offerings">
                    <h4><i class="fas fa-cog"></i> What We Deliver</h4>
                    <div class="offerings-grid">
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Comprehensive risk and threat assessments</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Security architecture review and design</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Access control and identity management</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Data protection and privacy compliance</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Vulnerability scanning and remediation</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Security governance frameworks</span>
                        </div>
                    </div>
                </div>
                <div class="detail-target">
                    <div class="target-icon"><i class="fas fa-bullseye"></i></div>
                    <div class="target-content">
                        <strong>Ideal For:</strong>
                        <p>Organizations seeking to reduce cyber risk, ensure regulatory compliance, strengthen data governance, or prepare for security audits and certifications.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Analytics Details -->
        <div class="service-detail-card reverse" id="data-analytics" data-aos="fade-up">
            <div class="service-detail-content">
                <div class="detail-header">
                    <span class="detail-badge">DATA DRIVEN</span>
                    <h3>Data, Analytics & AI Services</h3>
                </div>
                <p class="detail-intro">
                    Data holds immense potential, but only when properly structured, analyzed, and visualized. We transform scattered data into unified insights, enabling confident decision-making through advanced analytics, business intelligence, and responsible AI integration.
                </p>
                <div class="detail-offerings">
                    <h4><i class="fas fa-cog"></i> What We Deliver</h4>
                    <div class="offerings-grid">
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Analytics maturity assessments</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Data integration and warehousing</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Interactive dashboards and reporting</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Predictive analytics and forecasting</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Machine learning model development</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Analytics governance and security</span>
                        </div>
                    </div>
                </div>
                <div class="detail-target">
                    <div class="target-icon"><i class="fas fa-bullseye"></i></div>
                    <div class="target-content">
                        <strong>Ideal For:</strong>
                        <p>Organizations wanting to improve decision visibility, reduce manual reporting, leverage AI responsibly, and transform data into strategic competitive advantage.</p>
                    </div>
                </div>
            </div>
            <div class="service-detail-visual">
                <img src="assets/images/Data__Analytics___AI_icon-removebg.png" alt="Data Analytics">
            </div>
        </div>

        <!-- AI Advisory Details -->
        <div class="service-detail-card" id="ai-advisory" data-aos="fade-up">
            <div class="service-detail-visual">
                <img src="assets/images/AI Advisory icon.png" alt="AI Advisory">
            </div>
            <div class="service-detail-content">
                <div class="detail-header">
                    <span class="detail-badge">RESPONSIBLE AI</span>
                    <h3>AI Advisory & Responsible AI Enablement</h3>
                </div>
                <p class="detail-intro">
                    Artificial intelligence offers transformative potential but requires careful governance. We provide strategic AI advisory services that balance innovation with ethics, security, and practical business value—helping you adopt AI confidently and responsibly.
                </p>
                <div class="detail-offerings">
                    <h4><i class="fas fa-cog"></i> What We Deliver</h4>
                    <div class="offerings-grid">
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>AI readiness and capability assessments</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Use case identification and validation</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Responsible AI framework development</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>AI ethics and governance guidance</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Risk assessment and mitigation</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>AI integration strategy and roadmap</span>
                        </div>
                    </div>
                </div>
                <div class="detail-target">
                    <div class="target-icon"><i class="fas fa-bullseye"></i></div>
                    <div class="target-content">
                        <strong>Ideal For:</strong>
                        <p>Organizations exploring AI adoption, seeking to understand opportunities and risks, or needing governance frameworks to ensure ethical and secure AI implementation.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Software Development Details -->
        <div class="service-detail-card reverse" id="software-systems" data-aos="fade-up">
            <div class="service-detail-content">
                <div class="detail-header">
                    <span class="detail-badge">BUILD SECURE</span>
                    <h3>Secure Software & Digital Systems Delivery</h3>
                </div>
                <p class="detail-intro">
                    Every digital system should be built on a foundation of security and scalability. We design and deliver custom software solutions with security embedded from architecture to deployment, ensuring your systems are reliable, maintainable, and future-proof.
                </p>
                <div class="detail-offerings">
                    <h4><i class="fas fa-cog"></i> What We Deliver</h4>
                    <div class="offerings-grid">
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Secure system architecture and design</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Custom application development</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>API development and integration</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Legacy system modernization</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Access control implementation</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Documentation and knowledge transfer</span>
                        </div>
                    </div>
                </div>
                <div class="detail-target">
                    <div class="target-icon"><i class="fas fa-bullseye"></i></div>
                    <div class="target-content">
                        <strong>Ideal For:</strong>
                        <p>Organizations building new digital platforms, modernizing legacy systems, or requiring mission-critical applications with enterprise-grade security and reliability.</p>
                    </div>
                </div>
            </div>
            <div class="service-detail-visual">
                <img src="assets/images/icon-service-e0c0a990-removebg.png" alt="Software Development">
            </div>
        </div>

        <!-- Infrastructure Details -->
        <div class="service-detail-card" id="infrastructure" data-aos="fade-up">
            <div class="service-detail-visual">
                <img src="assets/images/IT_Infrastructure_icon-removebg.png" alt="Infrastructure">
            </div>
            <div class="service-detail-content">
                <div class="detail-header">
                    <span class="detail-badge">RELIABLE SYSTEMS</span>
                    <h3>IT & Digital Infrastructure Support</h3>
                </div>
                <p class="detail-intro">
                    Robust infrastructure is the backbone of digital operations. We provide comprehensive infrastructure services that ensure your systems are performant, secure, and aligned with business objectives—whether cloud, on-premise, or hybrid.
                </p>
                <div class="detail-offerings">
                    <h4><i class="fas fa-cog"></i> What We Deliver</h4>
                    <div class="offerings-grid">
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Cloud infrastructure setup and migration</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Performance monitoring and optimization</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Infrastructure security hardening</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Disaster recovery planning</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>24/7 technical support</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Infrastructure cost optimization</span>
                        </div>
                    </div>
                </div>
                <div class="detail-target">
                    <div class="target-icon"><i class="fas fa-bullseye"></i></div>
                    <div class="target-content">
                        <strong>Ideal For:</strong>
                        <p>Organizations needing reliable IT environments, cloud migration support, infrastructure optimization, or ongoing technical advisory without unnecessary complexity.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- E7 Academy / IT Training Details -->
        <div class="service-detail-card reverse" id="academy" data-aos="fade-up">
            <div class="service-detail-content">
                <div class="detail-header">
                    <span class="detail-badge">CAPACITY BUILDING</span>
                    <h3>E7 Academy - IT Training & Development</h3>
                </div>
                <p class="detail-intro">
                    Building internal capability is essential for long-term digital success. E7 Academy delivers practical, hands-on IT training programs in cybersecurity, data analytics, AI, and digital transformation—tailored to empower your teams with the skills needed for today's technology landscape.
                </p>
                <div class="detail-offerings">
                    <h4><i class="fas fa-cog"></i> What We Deliver</h4>
                    <div class="offerings-grid">
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Cybersecurity awareness and certification prep</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Data analytics and BI training</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>AI fundamentals and responsible AI workshops</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Cloud technology and DevOps training</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Custom corporate training programs</span>
                        </div>
                        <div class="offering-item">
                            <i class="fas fa-check"></i>
                            <span>Certification pathway guidance</span>
                        </div>
                    </div>
                </div>
                <div class="detail-target">
                    <div class="target-icon"><i class="fas fa-bullseye"></i></div>
                    <div class="target-content">
                        <strong>Ideal For:</strong>
                        <p>Organizations investing in workforce development, teams transitioning to new technologies, or companies building long-term digital capabilities through employee upskilling.</p>
                    </div>
                </div>
                <div style="margin-top: 2rem;">
                    <a href="academy.php" class="btn-primary" style="display: inline-flex; align-items: center; gap: 0.75rem; padding: 1rem 2rem; background: var(--gradient-gold); color: var(--gray-900); border-radius: 50px; text-decoration: none; font-weight: 600;">
                        <i class="fas fa-graduation-cap"></i> Explore E7 Academy
                    </a>
                </div>
            </div>
            <div class="service-detail-visual">
                <img src="assets/images/training_removebg.png" alt="E7 Academy IT Training">
            </div>
        </div>
    </div>
</section>

<!-- Our Approach Section -->
<section class="service-approach">
    <div class="container">
        <div class="approach-content">
            <div class="approach-text" data-aos="fade-right">
                <span class="section-badge">OUR METHODOLOGY</span>
                <h2 class="section-title">A Consistent Service Philosophy</h2>
                <p class="approach-description">
                    Across all our services, E7 follows a proven delivery approach that prioritizes security, clarity, and long-term value. We don't believe in one-size-fits-all solutions—our methodology adapts to your organization's unique context while maintaining core principles.
                </p>
            </div>
            <div class="approach-principles" data-aos="fade-left">
                <div class="principle-item">
                    <div class="principle-icon">
                        <i class="fas fa-shield-check"></i>
                    </div>
                    <div class="principle-content">
                        <h4>Security by Design</h4>
                        <p>Security and data protection embedded from the start, not added as an afterthought.</p>
                    </div>
                </div>
                <div class="principle-item">
                    <div class="principle-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <div class="principle-content">
                        <h4>Clarity Before Complexity</h4>
                        <p>Solutions your teams can understand, use, and maintain without external dependencies.</p>
                    </div>
                </div>
                <div class="principle-item">
                    <div class="principle-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="principle-content">
                        <h4>Business-Driven Technology</h4>
                        <p>Every technical decision guided by organizational goals, not technology trends.</p>
                    </div>
                </div>
                <div class="principle-item">
                    <div class="principle-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <div class="principle-content">
                        <h4>Partnership Over Projects</h4>
                        <p>Long-term success through knowledge transfer and capability building.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Solutions Connection -->
<section class="solutions-connection">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">INTEGRATED SOLUTIONS</span>
            <h2 class="section-title">How Services Connect to Our Solutions</h2>
            <p class="section-description">
                Our services are the foundation of our comprehensive solution frameworks,<br class="d-none d-md-block"> 
                designed to address your most critical technology challenges.
            </p>
        </div>
        
        <div class="solutions-grid">
            <div class="solution-card" data-aos="flip-left" data-aos-delay="100">
                <div class="solution-icon-wrapper">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>SecureShield™</h3>
                <p class="solution-description">
                    Enterprise-grade cybersecurity framework built on our data protection and security assessment services.
                </p>
                <ul class="solution-features">
                    <li><i class="fas fa-check"></i> Risk Assessment</li>
                    <li><i class="fas fa-check"></i> Threat Detection</li>
                    <li><i class="fas fa-check"></i> Compliance Management</li>
                </ul>
                <a href="solutions/secureshield.php" class="solution-link">
                    Explore SecureShield <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="solution-card" data-aos="flip-left" data-aos-delay="200">
                <div class="solution-icon-wrapper">
                    <i class="fas fa-brain"></i>
                </div>
                <h3>InsightAI™</h3>
                <p class="solution-description">
                    Advanced analytics and AI platform powered by our data engineering and AI advisory expertise.
                </p>
                <ul class="solution-features">
                    <li><i class="fas fa-check"></i> Predictive Analytics</li>
                    <li><i class="fas fa-check"></i> Real-time Dashboards</li>
                    <li><i class="fas fa-check"></i> AI-Driven Insights</li>
                </ul>
                <a href="solutions/insightai.php" class="solution-link">
                    Explore InsightAI <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="solution-card" data-aos="flip-left" data-aos-delay="300">
                <div class="solution-icon-wrapper">
                    <i class="fas fa-cubes"></i>
                </div>
                <h3>SecureCore™</h3>
                <p class="solution-description">
                    Comprehensive digital systems platform leveraging our secure software development and infrastructure services.
                </p>
                <ul class="solution-features">
                    <li><i class="fas fa-check"></i> Secure Architecture</li>
                    <li><i class="fas fa-check"></i> Scalable Infrastructure</li>
                    <li><i class="fas fa-check"></i> API Integration</li>
                </ul>
                <a href="solutions/securecore.php" class="solution-link">
                    Explore SecureCore <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="services-cta">
    <div class="cta-overlay"></div>
    <div class="container">
        <div class="cta-content" data-aos="zoom-in">
            <h2 class="cta-title">Ready to Transform Your Technology Journey?</h2>
            <p class="cta-subtitle">
                Let's discuss how our comprehensive services can help you achieve your digital transformation goals<br class="d-none d-md-block"> 
                with clarity, security, and long-term value.
            </p>
            <div class="cta-buttons">
                <a href="contact.php" class="btn-primary">
                    <i class="fas fa-calendar-check"></i> Request Consultation
                </a>
                <a href="solutions.php" class="btn-secondary">
                    <i class="fas fa-rocket"></i> Explore Solutions
                </a>
            </div>
            <div class="cta-trust">
                <div class="trust-item">
                    <i class="fas fa-users"></i>
                    <span>Trusted by Leading Organizations</span>
                </div>
                <div class="trust-divider"></div>
                <div class="trust-item">
                    <i class="fas fa-certificate"></i>
                    <span>Industry-Certified Experts</span>
                </div>
                <div class="trust-divider"></div>
                <div class="trust-item">
                    <i class="fas fa-headset"></i>
                    <span>24/7 Support Available</span>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 100
    });
</script>

<?php include('footer.php'); ?>

