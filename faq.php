<?php
$page_title = "FAQ - E7 Technology Solutions";
include('header.php');
?>
<link rel="stylesheet" href="<?php echo $assetBasePath; ?>/faq.css">

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <span class="badge">HELP & SUPPORT</span>
            <h1 class="hero-title">Frequently Asked Questions</h1>
            <p class="hero-subtitle">Find answers to common questions about our services, pricing, and support</p>
        </div>
    </div>
    <div class="hero-overlay"></div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="faq-content">
            <h2>Everything You Need to Know</h2>

            <div class="faq-item">
                <div class="faq-header">
                    <h3>What services does E7 offer?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-body">
                    <p>E7 Technology Solutions provides comprehensive enterprise technology services including cybersecurity, data analytics, AI & machine learning, cloud solutions, software development, and professional training programs tailored to help organizations achieve digital transformation.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-header">
                    <h3>How can I schedule a consultation?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-body">
                    <p>You can schedule a free 30-minute consultation by filling out our contact form, clicking the "Schedule a Consultation" button, or emailing <strong>connect@e7world.tech</strong>. Our team will reach out within 24 hours to confirm your meeting time.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-header">
                    <h3>What industries do you serve?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-body">
                    <p>We serve finance, healthcare, education, manufacturing, e-commerce, telecommunications, and government sectors. Our enterprise-grade solutions are scalable and adaptable to any industry's specific needs and compliance requirements.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-header">
                    <h3>Do you provide 24/7 support?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-body">
                    <p>Yes, we offer 24/7 technical support for enterprise clients. Depending on your service level agreement, you'll have access to our global support team via phone, email, or live chat. Contact us to discuss support options tailored to your needs.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-header">
                    <h3>What is your typical project timeline?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-body">
                    <p>Project timelines vary based on scope and complexity. A typical engagement begins with an assessment phase (2-4 weeks), followed by strategy development and implementation. We'll provide a detailed timeline during your initial consultation.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-header">
                    <h3>Can you customize solutions for us?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-body">
                    <p>Absolutely! All our solutions are customizable to meet your organization's unique challenges and objectives. We begin with a comprehensive assessment of your environment and goals, then design solutions that align perfectly with your business requirements.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-header">
                    <h3>Do you offer training programs?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-body">
                    <p>Yes, E7 Academy provides comprehensive training in cybersecurity, data science, AI/ML, cloud computing, and digital governance. We offer individual courses and corporate training packages. Visit <a href="academy.php">academy.php</a> for more details about enrollment.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-header">
                    <h3>How do you ensure data security?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-body">
                    <p>Data security is core to everything we do. Our solutions follow international standards including ISO 27001, GDPR, and industry-specific compliance requirements. We implement security-first architecture throughout all engagements.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-header">
                    <h3>Still have questions?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-body">
                    <p>Contact us directly! Call <strong>+233 243 838 490</strong>, email <strong>connect@e7world.tech</strong>, or <a href="contact.php">visit our contact page</a>. Our team is ready to answer any questions and discuss how we can help your organization succeed.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>

<script>
document.querySelectorAll('.faq-header').forEach(header => {
    header.addEventListener('click', function() {
        const item = this.parentElement;
        const body = this.nextElementSibling;
        const toggle = this.querySelector('.faq-toggle');
        
        // Close all other items
        document.querySelectorAll('.faq-item').forEach(faq => {
            if (faq !== item) {
                faq.classList.remove('open');
                faq.querySelector('.faq-body').style.display = 'none';
                faq.querySelector('.faq-toggle').textContent = '+';
            }
        });
        
        // Toggle current item
        item.parentElement.classList.toggle('open');
        
        if (item.parentElement.classList.contains('open')) {
            body.style.display = 'block';
            toggle.textContent = '-';
        } else {
            body.style.display = 'none';
            toggle.textContent = '+';
        }
    });
});
</script>
