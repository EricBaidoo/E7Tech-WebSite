<!-- Footer -->
<link rel="stylesheet" href="assets/footer.css">
<footer class="footer-main">
    <!-- Main Footer Content -->
    <div class="footer-content">
        <div class="container">
            <div class="footer-grid">
                <!-- Company Info -->
                <div class="footer-col footer-about">
                    <img src="assets/images/E7-logo1.png" alt="E7 Technology Solutions" class="footer-logo">
                    <p class="footer-desc">Empowering organizations through innovative technology solutions, cybersecurity excellence, and transformative digital strategies.</p>
                    <div class="footer-social">
                        <a href="#" aria-label="LinkedIn" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Facebook" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="YouTube" class="social-link"><i class="fab fa-youtube"></i></a>
                        <a href="#" aria-label="Instagram" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <!-- Company Links -->
                <div class="footer-col">
                    <h4 class="footer-title">Company</h4>
                    <ul class="footer-links">
                        <li><a href="about.php">About E7</a></li>
                        <li><a href="about.php#leadership">Leadership Team</a></li>
                        <li><a href="news.php">News & Insights</a></li>
                        <li><a href="academy.php">E7 Academy</a></li>
                        <li><a href="about.php#gallery">Gallery</a></li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div class="footer-col">
                    <h4 class="footer-title">Services</h4>
                    <ul class="footer-links">
                        <li><a href="services.php#cybersecurity">Cybersecurity</a></li>
                        <li><a href="services.php#cloud">Cloud Solutions</a></li>
                        <li><a href="services.php#analytics">Data Analytics</a></li>
                        <li><a href="services.php#ai">AI & Machine Learning</a></li>
                        <li><a href="services.php#consulting">IT Consulting</a></li>
                    </ul>
                </div>
                
                <!-- Resources -->
                <div class="footer-col">
                    <h4 class="footer-title">Resources</h4>
                    <ul class="footer-links">
                        <li><a href="solutions.php">Solutions</a></li>
                        <li><a href="capability.php">Capability Statement</a></li>
                        <li><a href="security.php">Security Policy</a></li>
                        <li><a href="privacy.php">Privacy Policy</a></li>
                        <li><a href="terms.php">Terms of Service</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div class="footer-col">
                    <h4 class="footer-title">Get In Touch</h4>
                    <ul class="footer-contact">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>1234 Technology Drive<br>Suite 500, Tech City, TX 75001</span>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <a href="tel:+15551234567">+1 (555) 123-4567</a>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:info@e7tech.com">info@e7tech.com</a>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <span>Mon - Fri: 7AM - 5PM CT</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-content">
                <p class="copyright">&copy; <?php echo date('Y'); ?> E7 Technology Solutions. All rights reserved.</p>
                <div class="footer-bottom-links">
                    <a href="privacy.php">Privacy</a>
                    <a href="terms.php">Terms</a>
                    <a href="security.php">Security</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop" aria-label="Back to top">
        <i class="fas fa-arrow-up"></i>
    </button>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Back to top button
const backToTop = document.getElementById('backToTop');

window.addEventListener('scroll', function() {
    if (window.pageYOffset > 300) {
        backToTop.classList.add('visible');
    } else {
        backToTop.classList.remove('visible');
    }
});

backToTop.addEventListener('click', function() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});
</script>
</body>
</html>
<!-- End Footer -->