<!-- Professional Footer -->
<link rel="stylesheet" href="assets/footer.css?v=5">

<footer class="site-footer">
    <!-- Main Footer -->
    <div class="footer-main">
        <div class="container">
            <div class="footer-grid">
                <!-- Company Info -->
                <div class="footer-column footer-about">
                    <img src="assets/images/E7-logo1.png" alt="E7 Technology Solutions" class="footer-logo">
                    <p class="footer-description">Empowering organizations across Africa with innovative technology solutions, cybersecurity excellence, and transformative digital strategies. Building the future of technology, today.</p>
                    <div class="footer-social">
                        <a href="#" class="social-link" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Company Links -->
                <div class="footer-column">
                    <h4 class="footer-title">Company</h4>
                    <ul class="footer-links">
                        <li><a href="about.php"><i class="fas fa-chevron-right"></i> About E7</a></li>
                        <li><a href="about.php#leadership"><i class="fas fa-chevron-right"></i> Leadership Team</a></li>
                        <li><a href="news.php"><i class="fas fa-chevron-right"></i> News & Insights</a></li>
                        <li><a href="academy.php"><i class="fas fa-chevron-right"></i> E7 Academy</a></li>
                        <li><a href="about.php#gallery"><i class="fas fa-chevron-right"></i> Gallery</a></li>
                        <li><a href="contact.php"><i class="fas fa-chevron-right"></i> Careers</a></li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div class="footer-column">
                    <h4 class="footer-title">Services</h4>
                    <ul class="footer-links">
                        <li><a href="services.php#cybersecurity"><i class="fas fa-chevron-right"></i> Cybersecurity</a></li>
                        <li><a href="services.php#cloud"><i class="fas fa-chevron-right"></i> Cloud Solutions</a></li>
                        <li><a href="services.php#analytics"><i class="fas fa-chevron-right"></i> Data Analytics</a></li>
                        <li><a href="services.php#ai"><i class="fas fa-chevron-right"></i> AI & Machine Learning</a></li>
                        <li><a href="services.php#consulting"><i class="fas fa-chevron-right"></i> IT Consulting</a></li>
                        <li><a href="services.php#blockchain"><i class="fas fa-chevron-right"></i> Blockchain</a></li>
                    </ul>
                </div>
                
                <!-- Solutions -->
                <div class="footer-column">
                    <h4 class="footer-title">Solutions</h4>
                    <ul class="footer-links">
                        <li><a href="solutions.php#insightai"><i class="fas fa-chevron-right"></i> InsightAI™</a></li>
                        <li><a href="solutions.php#datahub"><i class="fas fa-chevron-right"></i> DataHub™</a></li>
                        <li><a href="solutions.php#secureshield"><i class="fas fa-chevron-right"></i> SecureShield™</a></li>
                        <li><a href="solutions.php#cloudcore"><i class="fas fa-chevron-right"></i> CloudCore™</a></li>
                        <li><a href="solutions.php#blockchain"><i class="fas fa-chevron-right"></i> BlockChain™</a></li>
                        <li><a href="solutions.php#iot"><i class="fas fa-chevron-right"></i> IoT Connect™</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div class="footer-column">
                    <h4 class="footer-title">Get In Touch</h4>
                    <ul class="footer-contact">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="contact-content">
                                <strong>Head Office</strong>
                                <span>1234 Technology Drive<br>Suite 500, Tech City, TX 75001</span>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <div class="contact-content">
                                <strong>Phone</strong>
                                <a href="tel:+15551234567">+1 (555) 123-4567</a>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <div class="contact-content">
                                <strong>Email</strong>
                                <a href="mailto:info@e7tech.com">info@e7tech.com</a>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <div class="contact-content">
                                <strong>Business Hours</strong>
                                <span>Mon - Fri: 7:00 AM - 5:00 PM CT</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Newsletter -->
            <div class="footer-newsletter">
                <div class="newsletter-content">
                    <div class="newsletter-text">
                        <h3 class="newsletter-title">Stay Updated</h3>
                        <p class="newsletter-desc">Subscribe to our newsletter for the latest tech insights and updates</p>
                    </div>
                    <form class="newsletter-form" onsubmit="return false;">
                        <input type="email" placeholder="Enter your email address" required>
                        <button type="submit">
                            <span>Subscribe</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-content">
                <p class="copyright">
                    &copy; <?php echo date('Y'); ?> E7 Technology Solutions. All rights reserved.
                </p>
                <div class="footer-bottom-links">
                    <a href="privacy.php">Privacy Policy</a>
                    <span class="separator">|</span>
                    <a href="terms.php">Terms of Service</a>
                    <span class="separator">|</span>
                    <a href="security.php">Security</a>
                    <span class="separator">|</span>
                    <a href="sitemap.php">Sitemap</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<button class="back-to-top" id="backToTop" aria-label="Back to top">
    <i class="fas fa-arrow-up"></i>
</button>

<script>
// Back to top button
const backToTop = document.getElementById('backToTop');

window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        backToTop.classList.add('visible');
    } else {
        backToTop.classList.remove('visible');
    }
});

backToTop.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Newsletter form
const newsletterForm = document.querySelector('.newsletter-form');
if (newsletterForm) {
    newsletterForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const email = this.querySelector('input[type="email"]').value;
        alert('Thank you for subscribing! We\'ll send updates to ' + email);
        this.reset();
    });
}
</script>

</body>
</html>
