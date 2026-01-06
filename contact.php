<?php
$page_title = "Contact Us - E7 Technology Solutions";
$assetBasePath = 'assets';
$navBasePath = '';
include('header.php');
?>
<link rel="stylesheet" href="<?php echo $assetBasePath; ?>/contact.css?v=13">

<!-- Hero Section -->
<section class="contact-hero">
    <div class="container">
        <div class="contact-hero-content">
            <span class="contact-badge">GET IN TOUCH</span>
            <h1 class="contact-hero-title">Let's Build Something Great Together</h1>
            <p class="contact-hero-subtitle">Have a project in mind? Our team is ready to help you transform your vision into reality with cutting-edge technology solutions</p>
        </div>
    </div>
    <div class="hero-overlay"></div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-wrapper">
            <!-- Contact Form -->
            <div class="form-container">
                <div class="form-header">
                    <h2>Send Us a Message</h2>
                    <p>Fill out the form below and we'll get back to you within 24 hours</p>
                </div>
                <form class="contact-form" method="post" action="#">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required placeholder="John Doe">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required placeholder="john@company.com">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="+233 243 838 490">
                        </div>
                        <div class="form-group">
                            <label for="company">Company/Organization</label>
                            <input type="text" id="company" name="company" placeholder="Your Company">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="service">Service of Interest</label>
                        <select id="service" name="service">
                            <option value="">Select a service...</option>
                            <option value="ai-ml">AI & Machine Learning</option>
                            <option value="data">Data Engineering & Analytics</option>
                            <option value="security">Cybersecurity & Compliance</option>
                            <option value="software">Custom Software Development</option>
                            <option value="infrastructure">IT Infrastructure & Cloud</option>
                            <option value="training">E7 Academy Training</option>
                            <option value="consulting">Technology Consulting</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Your Message *</label>
                        <textarea id="message" name="message" rows="6" required placeholder="Tell us about your project or inquiry..."></textarea>
                    </div>

                    <button type="submit" class="btn-submit">
                        <span>Send Message</span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="info-container">
                <div class="info-header">
                    <h2>Contact Information</h2>
                    <p>Get in touch with our team through any of these channels</p>
                </div>

                <div class="contact-info-list">
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <h4>Our Location</h4>
                            <p>Accra, Ghana<br>West Africa</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h4>Email Us</h4>
                            <p>
                                <a href="mailto:connect@e7world.tech">connect@e7world.tech</a><br>
                                <a href="mailto:sales@e7world.tech">sales@e7world.tech</a>
                            </p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info-content">
                            <h4>Call Us</h4>
                            <p>+233 243 838 490<br><small>Mon-Fri: 8:00 AM - 6:00 PM GMT</small></p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info-content">
                            <h4>Business Hours</h4>
                            <p>Monday - Friday: 8:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 2:00 PM<br>Sunday: Closed</p>
                        </div>
                    </div>
                </div>

                <div class="social-section">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="https://www.linkedin.com/company/93869752/" class="social-icon" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://web.facebook.com/profile.php?id=61564106101270" class="social-icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/E7Technologies" class="social-icon" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/e7_technology_solutions/" class="social-icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Contact Cards -->
<section class="quick-contact">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Need Immediate Assistance?</h2>
            <p class="section-subtitle">Choose the best way to reach us based on your needs</p>
        </div>
        <div class="quick-cards">
            <div class="quick-card">
                <div class="card-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <h3>Live Chat Support</h3>
                <p>Chat with our technical experts in real-time</p>
                <a href="javascript:void(0)" onclick="window.open('https://web.facebook.com/profile.php?id=61564106101270', '_blank')" class="card-link">Start Chat <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="quick-card">
                <div class="card-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h3>Schedule a Consultation</h3>
                <p>Book a free 30-minute discovery call with our team</p>
                <a href="mailto:connect@e7world.tech?subject=Schedule%20Consultation&body=Hi%20E7%20Team,%0A%0AI'd%20like%20to%20schedule%20a%20free%20consultation%20call.%0A%0AThank%20you" class="card-link">Book Now <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="quick-card">
                <div class="card-icon">
                    <i class="fas fa-question-circle"></i>
                </div>
                <h3>Support Center</h3>
                <p>Browse our knowledge base and FAQs</p>
                <a href="faq.php" class="card-link">Visit FAQ <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
    });
});
</script>
