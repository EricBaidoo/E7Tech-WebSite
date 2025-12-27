<?php
$page_title = "E7 Academy - Professional Tech Training & Upskilling";
include('header.php');
?>
<link rel="stylesheet" href="assets/academy.css?v=4">

<!-- Hero Section -->
<section class="academy-hero">
    <div class="hero-background"></div>
    <div class="container">
        <div class="hero-content">
            <span class="hero-badge">E7 ACADEMY</span>
            <h1 class="hero-title">Transform Your Career with <br><span class="gradient-text">World-Class Tech Training</span></h1>
            <p class="hero-subtitle">Africa's premier technology training institute empowering professionals and organizations with cutting-edge skills in AI, cybersecurity, data science, and cloud computing.</p>
            <div class="hero-actions">
                <a href="#programs" class="btn-primary">Explore Programs <i class="fas fa-arrow-down"></i></a>
                <a href="#corporate" class="btn-secondary">Corporate Training</a>
            </div>
            <div class="hero-achievements">
                <div class="achievement-item">
                    <div class="achievement-value">5,000+</div>
                    <div class="achievement-label">Professionals Trained</div>
                </div>
                <div class="achievement-item">
                    <div class="achievement-value">92%</div>
                    <div class="achievement-label">Job Placement Rate</div>
                </div>
                <div class="achievement-item">
                    <div class="achievement-value">50+</div>
                    <div class="achievement-label">Industry Partners</div>
                </div>
                <div class="achievement-item">
                    <div class="achievement-value">15+</div>
                    <div class="achievement-label">Countries</div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-wave">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0L60 10C120 20 240 40 360 46.7C480 53 600 47 720 43.3C840 40 960 40 1080 46.7C1200 53 1320 67 1380 73.3L1440 80V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V0Z" fill="#ffffff"/>
        </svg>
    </div>
</section>

<!-- Mission & Vision -->
<section class="mission-vision">
    <div class="container">
        <div class="mission-vision-grid">
            <div class="mission-card">
                <div class="mv-icon">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h2 class="mv-title">Our Mission</h2>
                <p class="mv-description">To democratize access to world-class technology education across Africa, empowering individuals and organizations with the skills needed to thrive in the digital economy. We bridge the gap between theoretical knowledge and practical industry demands through hands-on, project-based learning.</p>
            </div>
            <div class="vision-card">
                <div class="mv-icon">
                    <i class="fas fa-eye"></i>
                </div>
                <h2 class="mv-title">Our Vision</h2>
                <p class="mv-description">To become Africa's leading technology training institution, recognized globally for producing highly skilled professionals who drive innovation, digital transformation, and economic growth across the continent. We envision a future where African tech talent competes and leads on the world stage.</p>
            </div>
        </div>
    </div>
</section>

<!-- Who We Serve -->
<section class="who-we-serve">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">WHO WE SERVE</span>
            <h2 class="section-title">Tailored Training Solutions</h2>
            <p class="section-subtitle">Comprehensive programs designed for individuals seeking career advancement and organizations building high-performing tech teams</p>
        </div>

        <div class="serve-grid">
            <!-- Individual Professionals -->
            <div class="serve-card">
                <div class="serve-header">
                    <div class="serve-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="serve-title">Individual Professionals</h3>
                </div>
                <p class="serve-description">Accelerate your career with industry-relevant skills and recognized certifications</p>
                
                <div class="serve-category">
                    <h4 class="category-title"><i class="fas fa-rocket"></i> Career Starters</h4>
                    <p>Launch your tech career with foundational training in software development, data analysis, or cybersecurity. Perfect for recent graduates and career switchers.</p>
                </div>

                <div class="serve-category">
                    <h4 class="category-title"><i class="fas fa-chart-line"></i> Professional Upskilling</h4>
                    <p>Stay competitive with advanced training in AI, machine learning, cloud architecture, and emerging technologies. Enhance your expertise and increase your market value.</p>
                </div>

                <div class="serve-category">
                    <h4 class="category-title"><i class="fas fa-trophy"></i> Leadership Development</h4>
                    <p>Transition into technical leadership roles with specialized programs in DevOps, solution architecture, and tech team management.</p>
                </div>

                <ul class="serve-benefits">
                    <li><i class="fas fa-check-circle"></i>Flexible learning schedules (evening & weekend options)</li>
                    <li><i class="fas fa-check-circle"></i>Hands-on projects for portfolio building</li>
                    <li><i class="fas fa-check-circle"></i>Industry-recognized certifications</li>
                    <li><i class="fas fa-check-circle"></i>Career counseling and job placement support</li>
                    <li><i class="fas fa-check-circle"></i>Access to exclusive hiring network</li>
                    <li><i class="fas fa-check-circle"></i>Lifetime learning community membership</li>
                </ul>

                <a href="contact.php" class="serve-cta">Start Your Journey <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Corporate Training -->
            <div class="serve-card featured" id="corporate">
                <div class="serve-header">
                    <div class="serve-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 class="serve-title">Corporate & Enterprise</h3>
                </div>
                <p class="serve-description">Build high-performing tech teams aligned with your business objectives</p>
                
                <div class="serve-category">
                    <h4 class="category-title"><i class="fas fa-users-cog"></i> Team Upskilling Programs</h4>
                    <p>Close skill gaps across your organization with customized training programs. Keep your teams current with the latest technologies and methodologies.</p>
                </div>

                <div class="serve-category">
                    <h4 class="category-title"><i class="fas fa-lightbulb"></i> Digital Transformation Training</h4>
                    <p>Equip your workforce with the skills needed for successful digital transformation initiatives. From cloud migration to AI implementation.</p>
                </div>

                <div class="serve-category">
                    <h4 class="category-title"><i class="fas fa-graduation-cap"></i> Graduate Trainee Programs</h4>
                    <p>Develop fresh graduates into productive team members with structured onboarding programs tailored to your technology stack and business needs.</p>
                </div>

                <ul class="serve-benefits">
                    <li><i class="fas fa-check-circle"></i>Customized curriculum aligned with business goals</li>
                    <li><i class="fas fa-check-circle"></i>On-site or virtual delivery options</li>
                    <li><i class="fas fa-check-circle"></i>Dedicated account management</li>
                    <li><i class="fas fa-check-circle"></i>Progress tracking and performance analytics</li>
                    <li><i class="fas fa-check-circle"></i>Post-training support and consultation</li>
                    <li><i class="fas fa-check-circle"></i>Volume discounts for team enrollments</li>
                </ul>

                <a href="contact.php" class="serve-cta">Request Corporate Proposal <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Training Programs -->
<section id="programs" class="programs-section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">OUR PROGRAMS</span>
            <h2 class="section-title">Comprehensive Training Tracks</h2>
            <p class="section-subtitle">Intensive, project-based programs designed by industry experts with real-world applications</p>
        </div>

        <div class="programs-grid">
            <!-- AI & ML Program -->
            <div class="program-card featured">
                <span class="program-badge">Most Popular</span>
                <div class="program-icon">
                    <i class="fas fa-robot"></i>
                </div>
                <h3 class="program-title">Artificial Intelligence & Machine Learning Professional</h3>
                <p class="program-description">Master AI/ML fundamentals, deep learning, neural networks, and practical implementation. Build production-ready AI solutions.</p>
                <div class="program-details">
                    <div class="detail-item">
                        <i class="fas fa-clock"></i>
                        <span>12 Weeks Intensive</span>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-signal"></i>
                        <span>Advanced Level</span>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-certificate"></i>
                        <span>Industry Certification</span>
                    </div>
                </div>
                <ul class="program-features">
                    <li><i class="fas fa-check"></i>Python programming & ML libraries (TensorFlow, PyTorch)</li>
                    <li><i class="fas fa-check"></i>Deep learning & neural network architectures</li>
                    <li><i class="fas fa-check"></i>Computer vision & natural language processing</li>
                    <li><i class="fas fa-check"></i>Model deployment and MLOps practices</li>
                    <li><i class="fas fa-check"></i>Capstone project: Build production AI system</li>
                    <li><i class="fas fa-check"></i>Job placement assistance & interview prep</li>
                </ul>
                <div class="program-footer">
                    <div class="program-price">From $2,500</div>
                    <a href="contact.php" class="program-link">Enroll Now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Cybersecurity -->
            <div class="program-card">
                <div class="program-icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                <h3 class="program-title">Cybersecurity Professional Bootcamp</h3>
                <p class="program-description">Comprehensive security training from fundamentals to advanced threat hunting, ethical hacking, and security operations.</p>
                <div class="program-details">
                    <div class="detail-item">
                        <i class="fas fa-clock"></i>
                        <span>10 Weeks Intensive</span>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-signal"></i>
                        <span>Intermediate</span>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-certificate"></i>
                        <span>CISSP/CEH Prep</span>
                    </div>
                </div>
                <ul class="program-features">
                    <li><i class="fas fa-check"></i>Network security & infrastructure protection</li>
                    <li><i class="fas fa-check"></i>Ethical hacking & penetration testing</li>
                    <li><i class="fas fa-check"></i>Security operations center (SOC) training</li>
                    <li><i class="fas fa-check"></i>Incident response & digital forensics</li>
                    <li><i class="fas fa-check"></i>Live penetration testing labs</li>
                    <li><i class="fas fa-check"></i>Certification exam preparation</li>
                </ul>
                <div class="program-footer">
                    <div class="program-price">From $2,200</div>
                    <a href="contact.php" class="program-link">Enroll Now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Data Science -->
            <div class="program-card">
                <div class="program-icon">
                    <i class="fas fa-database"></i>
                </div>
                <h3 class="program-title">Data Science & Analytics Specialist</h3>
                <p class="program-description">Transform data into insights with Python, SQL, statistical analysis, and advanced visualization techniques.</p>
                <div class="program-details">
                    <div class="detail-item">
                        <i class="fas fa-clock"></i>
                        <span>10 Weeks Intensive</span>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-signal"></i>
                        <span>Intermediate</span>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-certificate"></i>
                        <span>Professional Cert</span>
                    </div>
                </div>
                <ul class="program-features">
                    <li><i class="fas fa-check"></i>Python, SQL, and R programming</li>
                    <li><i class="fas fa-check"></i>Statistical analysis & hypothesis testing</li>
                    <li><i class="fas fa-check"></i>Data visualization (Tableau, Power BI)</li>
                    <li><i class="fas fa-check"></i>Machine learning for business analytics</li>
                    <li><i class="fas fa-check"></i>Real-world business case studies</li>
                    <li><i class="fas fa-check"></i>Portfolio project development</li>
                </ul>
                <div class="program-footer">
                    <div class="program-price">From $2,000</div>
                    <a href="contact.php" class="program-link">Enroll Now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Cloud Solutions -->
            <div class="program-card">
                <div class="program-icon">
                    <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <h3 class="program-title">Cloud Solutions Architect</h3>
                <p class="program-description">Master AWS, Azure, and GCP for enterprise cloud deployments, migration, and infrastructure management.</p>
                <div class="program-details">
                    <div class="detail-item">
                        <i class="fas fa-clock"></i>
                        <span>8 Weeks Intensive</span>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-signal"></i>
                        <span>Advanced</span>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-certificate"></i>
                        <span>AWS/Azure Cert</span>
                    </div>
                </div>
                <ul class="program-features">
                    <li><i class="fas fa-check"></i>Multi-cloud platform expertise (AWS, Azure, GCP)</li>
                    <li><i class="fas fa-check"></i>Cloud architecture & design patterns</li>
                    <li><i class="fas fa-check"></i>Infrastructure as Code (Terraform, CloudFormation)</li>
                    <li><i class="fas fa-check"></i>Cloud security & compliance</li>
                    <li><i class="fas fa-check"></i>DevOps and CI/CD pipelines</li>
                    <li><i class="fas fa-check"></i>Cost optimization strategies</li>
                </ul>
                <div class="program-footer">
                    <div class="program-price">From $1,800</div>
                    <a href="contact.php" class="program-link">Enroll Now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Full Stack Development -->
            <div class="program-card">
                <div class="program-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="program-title">Full Stack Web Development</h3>
                <p class="program-description">Build modern web applications from frontend to backend with React, Node.js, databases, and deployment.</p>
                <div class="program-details">
                    <div class="detail-item">
                        <i class="fas fa-clock"></i>
                        <span>14 Weeks</span>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-signal"></i>
                        <span>Beginner-Friendly</span>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-certificate"></i>
                        <span>Professional Cert</span>
                    </div>
                </div>
                <ul class="program-features">
                    <li><i class="fas fa-check"></i>HTML, CSS, JavaScript fundamentals</li>
                    <li><i class="fas fa-check"></i>React & modern frontend frameworks</li>
                    <li><i class="fas fa-check"></i>Backend development with Node.js/Express</li>
                    <li><i class="fas fa-check"></i>Database design (MongoDB, PostgreSQL)</li>
                    <li><i class="fas fa-check"></i>RESTful APIs & authentication</li>
                    <li><i class="fas fa-check"></i>Deploy full-stack applications</li>
                </ul>
                <div class="program-footer">
                    <div class="program-price">From $1,500</div>
                    <a href="contact.php" class="program-link">Enroll Now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- DevOps Engineering -->
            <div class="program-card">
                <div class="program-icon">
                    <i class="fas fa-infinity"></i>
                </div>
                <h3 class="program-title">DevOps Engineering Professional</h3>
                <p class="program-description">Learn CI/CD, containerization, orchestration, and automated deployment workflows for modern applications.</p>
                <div class="program-details">
                    <div class="detail-item">
                        <i class="fas fa-clock"></i>
                        <span>8 Weeks</span>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-signal"></i>
                        <span>Intermediate</span>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-certificate"></i>
                        <span>Professional Cert</span>
                    </div>
                </div>
                <ul class="program-features">
                    <li><i class="fas fa-check"></i>Docker & Kubernetes container orchestration</li>
                    <li><i class="fas fa-check"></i>CI/CD pipeline automation (Jenkins, GitLab)</li>
                    <li><i class="fas fa-check"></i>Infrastructure automation (Ansible, Terraform)</li>
                    <li><i class="fas fa-check"></i>Monitoring & logging (Prometheus, ELK)</li>
                    <li><i class="fas fa-check"></i>Cloud platform integration</li>
                    <li><i class="fas fa-check"></i>Security & compliance practices</li>
                </ul>
                <div class="program-footer">
                    <div class="program-price">From $1,800</div>
                    <a href="contact.php" class="program-link">Enroll Now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Learning Approach -->
<section class="learning-approach">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">OUR METHODOLOGY</span>
            <h2 class="section-title">How We Train World-Class Professionals</h2>
            <p class="section-subtitle">A proven learning methodology that combines theory, practice, and real-world application</p>
        </div>

        <div class="approach-grid">
            <div class="approach-item">
                <div class="approach-number">01</div>
                <div class="approach-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3 class="approach-title">Expert-Led Instruction</h3>
                <p class="approach-description">Learn from industry practitioners with 10+ years of experience at leading tech companies. Our instructors bring real-world insights and best practices into every session.</p>
            </div>

            <div class="approach-item">
                <div class="approach-number">02</div>
                <div class="approach-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3 class="approach-title">Project-Based Learning</h3>
                <p class="approach-description">Apply concepts immediately through hands-on projects that mirror real industry challenges. Build a professional portfolio that showcases your skills to potential employers.</p>
            </div>

            <div class="approach-item">
                <div class="approach-number">03</div>
                <div class="approach-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="approach-title">Collaborative Environment</h3>
                <p class="approach-description">Work in teams, participate in code reviews, and engage in peer learning. Develop the collaboration and communication skills essential for modern tech teams.</p>
            </div>

            <div class="approach-item">
                <div class="approach-number">04</div>
                <div class="approach-icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h3 class="approach-title">Industry Mentorship</h3>
                <p class="approach-description">Get paired with a professional mentor from our network of industry leaders. Receive personalized guidance, career advice, and networking opportunities.</p>
            </div>

            <div class="approach-item">
                <div class="approach-number">05</div>
                <div class="approach-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3 class="approach-title">Certification Path</h3>
                <p class="approach-description">Earn industry-recognized certifications that validate your skills. We prepare you for major certification exams including AWS, Azure, CISSP, and more.</p>
            </div>

            <div class="approach-item">
                <div class="approach-number">06</div>
                <div class="approach-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3 class="approach-title">Career Support</h3>
                <p class="approach-description">Access our extensive hiring network, receive resume reviews, interview coaching, and job placement assistance. We're invested in your long-term success.</p>
            </div>
        </div>
    </div>
</section>

<!-- Success Stats -->
<section class="success-stats">
    <div class="container">
        <div class="stats-content">
            <div class="stats-text">
                <h2 class="stats-title">Proven Track Record of Success</h2>
                <p class="stats-description">Our commitment to excellence has positioned E7 Academy as Africa's premier tech training institution, with graduates working at leading companies across the globe.</p>
                <div class="stats-highlights">
                    <div class="highlight-item">
                        <i class="fas fa-award"></i>
                        <p>Recognized by <strong>Tech Africa Awards</strong> as Best Training Institute 2024</p>
                    </div>
                    <div class="highlight-item">
                        <i class="fas fa-star"></i>
                        <p>Average student rating: <strong>4.9/5</strong> across all programs</p>
                    </div>
                    <div class="highlight-item">
                        <i class="fas fa-chart-line"></i>
                        <p>Alumni report average salary increase of <strong>45%</strong> post-graduation</p>
                    </div>
                </div>
            </div>
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="stat-number">5,000+</div>
                    <div class="stat-label">Successful Graduates</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="stat-number">92%</div>
                    <div class="stat-label">Job Placement Rate</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="stat-number">200+</div>
                    <div class="stat-label">Corporate Partners</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-globe-africa"></i>
                    </div>
                    <div class="stat-number">15+</div>
                    <div class="stat-label">Countries Served</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enrollment Process -->
<section class="enrollment-process">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">GET STARTED</span>
            <h2 class="section-title">Simple Enrollment Process</h2>
            <p class="section-subtitle">Start your transformation journey in just four easy steps</p>
        </div>

        <div class="process-steps">
            <div class="process-step">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h3 class="step-title">Choose Your Program</h3>
                    <p class="step-description">Browse our comprehensive training programs and select the one that aligns with your career goals. Not sure? Book a free consultation with our advisors.</p>
                </div>
            </div>

            <div class="process-step">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h3 class="step-title">Application & Assessment</h3>
                    <p class="step-description">Complete a brief online application. Some advanced programs include a technical assessment to ensure you have the prerequisites for success.</p>
                </div>
            </div>

            <div class="process-step">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h3 class="step-title">Enrollment & Onboarding</h3>
                    <p class="step-description">Once accepted, complete your enrollment, choose your payment plan, and receive access to our learning platform and pre-course materials.</p>
                </div>
            </div>

            <div class="process-step">
                <div class="step-number">4</div>
                <div class="step-content">
                    <h3 class="step-title">Begin Your Journey</h3>
                    <p class="step-description">Join your cohort, meet your instructors and mentors, and start building the skills that will transform your career. Your success story starts here.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Ready to Transform Your Career?</h2>
            <p class="cta-subtitle">Join thousands of professionals who have advanced their careers with E7 Academy. Start your journey today.</p>
            <div class="cta-actions">
                <a href="contact.php" class="btn-cta-primary">Apply Now</a>
                <a href="contact.php" class="btn-cta-secondary">Schedule Consultation</a>
            </div>
            <div class="cta-note">
                <i class="fas fa-info-circle"></i>
                <p>Next cohort starts January 15, 2026. Limited seats available. Early bird discount: 15% off</p>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
