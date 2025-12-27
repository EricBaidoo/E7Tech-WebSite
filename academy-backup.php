<?php
$page_title = "E7 Academy - E7 Technology Solutions";
include('header.php');
?>
<link rel="stylesheet" href="assets/academy.css?v=3">

<!-- Hero Section -->
<section class="academy-hero">
    <div class="hero-background"></div>
    <div class="container">
        <div class="hero-content">
            <span class="hero-badge">E7 ACADEMY</span>
            <h1 class="hero-title">Empowering Africa's <br><span class="gradient-text">Next-Gen Tech Leaders</span></h1>
            <p class="hero-subtitle">World-class training programs in AI, cybersecurity, data science, and cloud technologies. Build the skills driving Africa's digital future.</p>
            <div class="hero-actions">
                <a href="#programs" class="btn-primary">Explore Programs <i class="fas fa-arrow-down"></i></a>
                <a href="contact.php" class="btn-secondary">Contact Admissions</a>
            </div>
            <div class="hero-achievements">
                <div class="achievement-item">
                    <div class="achievement-value">5,000+</div>
                    <div class="achievement-label">Students Trained</div>
                </div>
                <div class="achievement-item">
                    <div class="achievement-value">92%</div>
                    <div class="achievement-label">Job Placement Rate</div>
                </div>
                <div class="achievement-item">
                    <div class="achievement-value">50+</div>
                    <div class="achievement-label">Industry Partners</div>
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

<!-- Programs Section -->
<section id="programs" class="programs-section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">TRAINING PROGRAMS</span>
            <h2 class="section-title">Comprehensive Learning Paths</h2>
            <p class="section-subtitle">Intensive, project-based programs designed by industry experts with real-world applications</p>
        </div>

        <div class="programs-grid">
            <!-- AI & ML Program -->
            <div class="program-card featured">
                <span class="program-badge">Most Popular</span>
                <div class="program-icon">
                    <i class="fas fa-robot"></i>
                </div>
                <h3 class="program-title">Artificial Intelligence & Machine Learning</h3>
                <p class="program-description">Master AI/ML fundamentals, deep learning, neural networks, and practical implementation with hands-on projects.</p>
                <div class="program-details">
                    <div class="detail-item">
                        <i class="fas fa-clock"></i>
                        <span>12 Weeks</span>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-signal"></i>
                        <span>Advanced Level</span>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-certificate"></i>
                        <span>Certification</span>
                    </div>
                </div>
                <ul class="program-features">
                    <li><i class="fas fa-check"></i>Python Programming & Libraries</li>
                    <li><i class="fas fa-check"></i>Deep Learning & Neural Networks</li>
                    <li><i class="fas fa-check"></i>Computer Vision & NLP</li>
                    <li><i class="fas fa-check"></i>Real-world AI Projects</li>
                    <li><i class="fas fa-check"></i>Job Placement Support</li>
                </ul>
                <a href="contact.php" class="program-link">Enroll Now <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Cybersecurity -->
            <div class="program-card">
                <div class="program-icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                <h3 class="program-title">Cybersecurity Professional</h3>
                <p class="program-description">Comprehensive security training from fundamentals to advanced threat hunting and penetration testing.</p>
                <div class="program-details">
                    <div class="detail-item">
                        <i class="fas fa-clock"></i>
                        <span>10 Weeks</span>
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
                    <li><i class="fas fa-check"></i>Network Security Fundamentals</li>
                    <li><i class="fas fa-check"></i>Ethical Hacking & Pen Testing</li>
                    <li><i class="fas fa-check"></i>Security Operations & SIEM</li>
                    <li><i class="fas fa-check"></i>Incident Response</li>
                    <li><i class="fas fa-check"></i>Live Lab Environment</li>
                </ul>
                <a href="contact.php" class="program-link">Enroll Now <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Data Science -->
            <div class="program-card">
                <div class="program-icon">
                    <i class="fas fa-database"></i>
                </div>
                <h3 class="program-title">Data Science & Analytics</h3>
                <p class="program-description">Transform data into insights with Python, SQL, statistical analysis, and visualization tools.</p>
                <div class="program-details">
                    <div class="detail-item">
                        <i class="fas fa-clock"></i>
                        <span>10 Weeks</span>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-signal"></i>
                        <span>Intermediate</span>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-certificate"></i>
                        <span>Certification</span>
                    </div>
                </div>
                <ul class="program-features">
                    <li><i class="fas fa-check"></i>Python & SQL Mastery</li>
                    <li><i class="fas fa-check"></i>Statistical Analysis</li>
                    <li><i class="fas fa-check"></i>Data Visualization (Tableau, Power BI)</li>
                    <li><i class="fas fa-check"></i>Business Intelligence</li>
                    <li><i class="fas fa-check"></i>Portfolio Projects</li>
                </ul>
                <a href="contact.php" class="program-link">Enroll Now <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Cloud Solutions -->
            <div class="program-card">
                <div class="program-icon">
                    <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <h3 class="program-title">Cloud Solutions Architect</h3>
                <p class="program-description">Master AWS, Azure, and GCP for enterprise cloud deployments and infrastructure management.</p>
                <div class="program-details">
                    <div class="detail-item">
                        <i class="fas fa-clock"></i>
                        <span>8 Weeks</span>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-signal"></i>
                        <span>Advanced</span>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-certificate"></i>
                        <span>AWS/Azure Prep</span>
                    </div>
                </div>
                <ul class="program-features">
                    <li><i class="fas fa-check"></i>Multi-Cloud Platform Mastery</li>
                    <li><i class="fas fa-check"></i>Infrastructure as Code</li>
                    <li><i class="fas fa-check"></i>Cloud Security & Compliance</li>
                    <li><i class="fas fa-check"></i>DevOps Integration</li>
                    <li><i class="fas fa-check"></i>Cost Optimization</li>
                </ul>
                <a href="contact.php" class="program-link">Enroll Now <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Full Stack Development -->
            <div class="program-card">
                <div class="program-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="program-title">Full Stack Web Development</h3>
                <p class="program-description">Build modern web applications with React, Node.js, databases, and deployment strategies.</p>
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
                        <span>Certification</span>
                    </div>
                </div>
                <ul class="program-features">
                    <li><i class="fas fa-check"></i>HTML, CSS, JavaScript</li>
                    <li><i class="fas fa-check"></i>React & Modern Frameworks</li>
                    <li><i class="fas fa-check"></i>Backend with Node.js</li>
                    <li><i class="fas fa-check"></i>Database Design & APIs</li>
                    <li><i class="fas fa-check"></i>Real Application Projects</li>
                </ul>
                <a href="contact.php" class="program-link">Enroll Now <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- DevOps Engineering -->
            <div class="program-card">
                <div class="program-icon">
                    <i class="fas fa-infinity"></i>
                </div>
                <h3 class="program-title">DevOps Engineering</h3>
                <p class="program-description">Learn CI/CD, containerization, orchestration, and automated deployment workflows.</p>
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
                        <span>Certification</span>
                    </div>
                </div>
                <ul class="program-features">
                    <li><i class="fas fa-check"></i>Docker & Kubernetes</li>
                    <li><i class="fas fa-check"></i>CI/CD Pipelines</li>
                    <li><i class="fas fa-check"></i>Infrastructure Automation</li>
                    <li><i class="fas fa-check"></i>Monitoring & Logging</li>
                    <li><i class="fas fa-check"></i>Git & Version Control</li>
                </ul>
                <a href="contact.php" class="program-link">Enroll Now <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Why E7 Academy -->
<section class="why-academy">
    <div class="container">
        <div class="why-content">
            <div class="why-text">
                <span class="section-badge">WHY CHOOSE US</span>
                <h2 class="section-title">Learn from Industry Experts</h2>
                <p class="section-description">E7 Academy combines cutting-edge curriculum with practical, hands-on experience to prepare you for real-world challenges in the tech industry.</p>
                <div class="why-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Expert Instructors</h4>
                            <p>Learn from professionals with 10+ years of industry experience in leading tech companies.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Hands-On Projects</h4>
                            <p>Build a professional portfolio with real-world projects that showcase your skills to employers.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Career Support</h4>
                            <p>Access our network of 50+ hiring partners and receive personalized job placement assistance.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="why-stats">
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
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="stat-number">4.9/5</div>
                    <div class="stat-label">Student Satisfaction</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="stat-number">50+</div>
                    <div class="stat-label">Hiring Partners</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Ready to Start Your Tech Career?</h2>
            <p class="cta-subtitle">Join thousands of successful graduates who transformed their careers with E7 Academy</p>
            <div class="cta-actions">
                <a href="contact.php" class="btn-cta-primary">Apply Now</a>
                <a href="contact.php" class="btn-cta-secondary">Request Information</a>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
