<?php
$page_title = "Contact Us - E7 Technology Solutions";
include('header.php');
?>
<link rel="stylesheet" href="assets/index.css">

<!-- Hero Section -->
<section class="hero-section" style="min-height: 50vh; padding: 5rem 0 3rem;">
    <div class="hero-particles"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="hero-title mb-4">
                    Get In <span class="gradient-text">Touch</span>
                </h1>
                <p class="hero-subtitle mb-4">
                    Let's discuss how we can help transform your business with innovative technology solutions
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-5" style="background: #ffffff;">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5">
                        <h3 class="mb-4">Send Us a Message</h3>
                        <form method="post" action="#">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input type="text" class="form-control form-control-lg" id="name" name="name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control form-control-lg" id="email" name="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control form-control-lg" id="phone" name="phone">
                                </div>
                                <div class="col-md-6">
                                    <label for="company" class="form-label">Company/Organization</label>
                                    <input type="text" class="form-control form-control-lg" id="company" name="company">
                                </div>
                                <div class="col-12">
                                    <label for="service" class="form-label">Service Interest</label>
                                    <select class="form-select form-select-lg" id="service" name="service">
                                        <option value="">Select a service...</option>
                                        <option value="ai-ml">AI & Machine Learning</option>
                                        <option value="data">Data Engineering & Analytics</option>
                                        <option value="security">Cybersecurity</option>
                                        <option value="automation">Intelligent Automation</option>
                                        <option value="infrastructure">IT Infrastructure</option>
                                        <option value="software">Custom Software Development</option>
                                        <option value="cloud">Cloud Solutions</option>
                                        <option value="consulting">Technology Consulting</option>
                                        <option value="training">Training & Capacity Building</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Message *</label>
                                    <textarea class="form-control" id="message" name="message" rows="6" required placeholder="Tell us about your project or inquiry..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">
                                        <i class="fas fa-paper-plane me-2"></i>Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-5">
                <div class="mb-4">
                    <h3 class="mb-4">Contact Information</h3>
                    
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <div class="bg-primary text-white rounded p-3">
                                <i class="fas fa-map-marker-alt fa-lg"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5>Headquarters</h5>
                            <p class="text-muted mb-0">Accra, Ghana<br>West Africa</p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <div class="bg-primary text-white rounded p-3">
                                <i class="fas fa-envelope fa-lg"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5>Email</h5>
                            <p class="text-muted mb-0">
                                <a href="mailto:connect@e7world.tech" class="text-decoration-none">connect@e7world.tech</a><br>
                                <a href="mailto:sales@e7world.tech" class="text-decoration-none">sales@e7world.tech</a>
                            </p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <div class="bg-primary text-white rounded p-3">
                                <i class="fas fa-phone fa-lg"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5>Phone</h5>
                            <p class="text-muted mb-0">
                                +233 243 838 490<br>
                                <small>Mon-Fri: 8:00 AM - 6:00 PM GMT</small>
                            </p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <div class="bg-primary text-white rounded p-3">
                                <i class="fas fa-clock fa-lg"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5>Business Hours</h5>
                            <p class="text-muted mb-0">
                                Monday - Friday: 8:00 AM - 6:00 PM<br>
                                Saturday: 9:00 AM - 2:00 PM<br>
                                Sunday: Closed
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="mb-3">Follow Us</h5>
                        <div class="d-flex gap-3">
                            <a href="#" class="btn btn-outline-primary btn-lg">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-lg">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-lg">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-lg">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Office Locations -->
<section class="py-5" style="background: #f7f9fc;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="mb-3">Our Locations</h2>
            <p class="lead text-muted">Serving clients across Africa</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-building fa-3x text-primary mb-3"></i>
                        <h5>Ghana Office</h5>
                        <p class="text-muted mb-0">Accra, Ghana</p>
                        <p class="small text-muted">Headquarters</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-building fa-3x text-primary mb-3"></i>
                        <h5>Nigeria Office</h5>
                        <p class="text-muted mb-0">Lagos, Nigeria</p>
                        <p class="small text-muted">Regional Hub</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-building fa-3x text-primary mb-3"></i>
                        <h5>Kenya Office</h5>
                        <p class="text-muted mb-0">Nairobi, Kenya</p>
                        <p class="small text-muted">East Africa Hub</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5" style="background: #ffffff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="mb-3">Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                What services does E7 Technology Solutions offer?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We offer comprehensive technology services including AI & Machine Learning, Data Engineering & Analytics, Cybersecurity, Cloud Solutions, Custom Software Development, and IT Infrastructure Management.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Which industries do you serve?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We serve a wide range of industries including Financial Services, Healthcare, Education, Retail, Manufacturing, Energy & Utilities, Government, and Telecommunications across Africa.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                How quickly can you start a project?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Project timelines vary based on scope and complexity. After an initial consultation, we typically provide a detailed proposal within 5-7 business days and can begin work shortly after agreement.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Do you provide ongoing support after project completion?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we offer comprehensive post-deployment support including maintenance, monitoring, updates, and training. Support packages can be customized to meet your specific needs.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5" style="background: linear-gradient(135deg, #1a237e 0%, #5a3fc0 100%);">
    <div class="container text-center text-white">
        <h2 class="mb-4">Ready to Get Started?</h2>
        <p class="lead mb-4">Schedule a free consultation to discuss your technology needs</p>
        <a href="mailto:connect@e7world.tech" class="btn btn-light btn-lg px-5">
            <i class="fas fa-calendar-alt me-2"></i>Book a Consultation
        </a>
    </div>
</section>

<?php include('footer.php'); ?>
