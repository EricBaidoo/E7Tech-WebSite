<?php /* E7 Technology Solutions - Professional Header */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' | E7 Technology Solutions' : 'E7 Technology Solutions - Innovation Through Technology'; ?></title>
    <meta name="description" content="E7 Technology Solutions provides cutting-edge cybersecurity, cloud computing, AI/ML, and technology consulting services across Africa.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="assets/header.css?v=5">
    <?php if(isset($page_styles)) echo $page_styles; ?>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-content">
                <div class="top-bar-left">
                    <a href="tel:+233243838490" class="top-bar-link">
                        <i class="fas fa-phone"></i>
                        <span>+233 243 838 490</span>
                    </a>
                    <a href="mailto:connect@e7world.tech" class="top-bar-link">
                        <i class="fas fa-envelope"></i>
                        <span>connect@e7world.tech</span>
                    </a>
                </div>
                <div class="top-bar-right">
                    <a href="https://www.linkedin.com/company/93869752/" class="social-icon" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://web.facebook.com/profile.php?id=61564106101270" class="social-icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://x.com/E7Technologies" class="social-icon" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/e7_technology_solutions/" class="social-icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="site-header" id="siteHeader">
        <div class="container">
            <div class="header-wrapper">
                <!-- Logo -->
                <div class="site-logo">
                    <a href="index.php">
                        <img src="assets/images/e7-logo1.png" alt="E7 Technology Solutions">
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <nav class="main-nav">
                    <a href="index.php" class="nav-link">Home</a>
                    
                    <div class="nav-item has-dropdown">
                        <a href="about.php" class="nav-link">
                            About Us
                            <i class="fas fa-chevron-down dropdown-icon"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a href="about.php" class="dropdown-item">
                                <i class="fas fa-building"></i>
                                <div class="dropdown-item-content">
                                    <span class="dropdown-item-title">About E7</span>
                                    <span class="dropdown-item-desc">Our story and mission</span>
                                </div>
                            </a>
                            <a href="about.php#leadership" class="dropdown-item">
                                <i class="fas fa-users"></i>
                                <div class="dropdown-item-content">
                                    <span class="dropdown-item-title">Leadership Team</span>
                                    <span class="dropdown-item-desc">Meet our experts</span>
                                </div>
                            </a>
                            <a href="about.php#gallery" class="dropdown-item">
                                <i class="fas fa-images"></i>
                                <div class="dropdown-item-content">
                                    <span class="dropdown-item-title">Gallery</span>
                                    <span class="dropdown-item-desc">Our workspace & events</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="nav-item has-dropdown">
                        <a href="services.php" class="nav-link">
                            Services
                            <i class="fas fa-chevron-down dropdown-icon"></i>
                        </a>
                        <div class="dropdown-menu mega-menu">
                            <div class="mega-menu-grid">
                                <a href="services.php#cybersecurity" class="dropdown-item">
                                    <i class="fas fa-shield-alt"></i>
                                    <div class="dropdown-item-content">
                                        <span class="dropdown-item-title">Cybersecurity</span>
                                        <span class="dropdown-item-desc">Advanced threat protection</span>
                                    </div>
                                </a>
                                <a href="services.php#cloud" class="dropdown-item">
                                    <i class="fas fa-cloud"></i>
                                    <div class="dropdown-item-content">
                                        <span class="dropdown-item-title">Cloud Solutions</span>
                                        <span class="dropdown-item-desc">Scalable infrastructure</span>
                                    </div>
                                </a>
                                <a href="services.php#analytics" class="dropdown-item">
                                    <i class="fas fa-chart-line"></i>
                                    <div class="dropdown-item-content">
                                        <span class="dropdown-item-title">Data Analytics</span>
                                        <span class="dropdown-item-desc">Actionable insights</span>
                                    </div>
                                </a>
                                <a href="services.php#ai" class="dropdown-item">
                                    <i class="fas fa-brain"></i>
                                    <div class="dropdown-item-content">
                                        <span class="dropdown-item-title">AI & Machine Learning</span>
                                        <span class="dropdown-item-desc">Intelligent automation</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <a href="solutions.php" class="nav-link">Solutions</a>
                    <a href="academy.php" class="nav-link">E7 Academy</a>
                    <a href="news.php" class="nav-link">News</a>
                    <a href="contact.php" class="btn-contact">
                        <span>Get Started</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </nav>
                
                <!-- Mobile Menu Toggle -->
                <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle navigation">
                    <span class="toggle-line"></span>
                    <span class="toggle-line"></span>
                    <span class="toggle-line"></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Navigation -->
    <div class="mobile-nav" id="mobileNav">
        <div class="mobile-nav-header">
            <img src="assets/images/e7-logo1.png" alt="E7 Tech">
            <button class="mobile-close" id="mobileClose" aria-label="Close navigation">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <div class="mobile-nav-content">
            <a href="index.php" class="mobile-nav-link">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>
            
            <div class="mobile-nav-item">
                <button class="mobile-nav-link mobile-dropdown-trigger">
                    <div class="mobile-nav-link-content">
                        <i class="fas fa-building"></i>
                        <span>About Us</span>
                    </div>
                    <i class="fas fa-chevron-down mobile-dropdown-icon"></i>
                </button>
                <div class="mobile-dropdown-content">
                    <a href="about.php" class="mobile-dropdown-link">About E7</a>
                    <a href="about.php#leadership" class="mobile-dropdown-link">Leadership Team</a>
                    <a href="about.php#gallery" class="mobile-dropdown-link">Gallery</a>
                </div>
            </div>
            
            <div class="mobile-nav-item">
                <button class="mobile-nav-link mobile-dropdown-trigger">
                    <div class="mobile-nav-link-content">
                        <i class="fas fa-cog"></i>
                        <span>Services</span>
                    </div>
                    <i class="fas fa-chevron-down mobile-dropdown-icon"></i>
                </button>
                <div class="mobile-dropdown-content">
                    <a href="services.php#cybersecurity" class="mobile-dropdown-link">Cybersecurity</a>
                    <a href="services.php#cloud" class="mobile-dropdown-link">Cloud Solutions</a>
                    <a href="services.php#analytics" class="mobile-dropdown-link">Data Analytics</a>
                    <a href="services.php#ai" class="mobile-dropdown-link">AI & Machine Learning</a>
                </div>
            </div>
            
            <a href="solutions.php" class="mobile-nav-link">
                <i class="fas fa-lightbulb"></i>
                <span>Solutions</span>
            </a>
            
            <a href="academy.php" class="mobile-nav-link">
                <i class="fas fa-graduation-cap"></i>
                <span>E7 Academy</span>
            </a>
            
            <a href="news.php" class="mobile-nav-link">
                <i class="fas fa-newspaper"></i>
                <span>News</span>
            </a>
            
            <a href="/E7 TECH/contact.php" class="mobile-nav-link mobile-nav-cta">
                <i class="fas fa-paper-plane"></i>
                <span>Contact Us</span>
            </a>
        </div>
        
        <div class="mobile-nav-footer">
            <div class="mobile-contact-info">
                <a href="tel:+233243838490"><i class="fas fa-phone"></i> +233 243 838 490</a>
                <a href="mailto:connect@e7world.tech"><i class="fas fa-envelope"></i> connect@e7world.tech</a>
            </div>
            <div class="mobile-social">
                <a href="https://www.linkedin.com/company/93869752/" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://web.facebook.com/profile.php?id=61564106101270" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://x.com/E7Technologies" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/e7_technology_solutions/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <!-- Mobile Overlay -->
    <div class="mobile-overlay" id="mobileOverlay"></div>

    <script>
    // Header scroll effect
    let lastScroll = 0;
    const header = document.getElementById('siteHeader');
    
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        
        lastScroll = currentScroll;
    });

    // Mobile menu functionality
    const mobileToggle = document.getElementById('mobileToggle');
    const mobileClose = document.getElementById('mobileClose');
    const mobileNav = document.getElementById('mobileNav');
    const mobileOverlay = document.getElementById('mobileOverlay');
    const body = document.body;

    function openMobileMenu() {
        mobileNav.classList.add('active');
        mobileOverlay.classList.add('active');
        body.style.overflow = 'hidden';
    }

    function closeMobileMenu() {
        mobileNav.classList.remove('active');
        mobileOverlay.classList.remove('active');
        body.style.overflow = '';
    }

    mobileToggle.addEventListener('click', openMobileMenu);
    mobileClose.addEventListener('click', closeMobileMenu);
    mobileOverlay.addEventListener('click', closeMobileMenu);

    // Mobile dropdown toggles
    const dropdownTriggers = document.querySelectorAll('.mobile-dropdown-trigger');
    
    dropdownTriggers.forEach(trigger => {
        trigger.addEventListener('click', function() {
            const parent = this.parentElement;
            const wasActive = parent.classList.contains('active');
            
            // Close all dropdowns
            document.querySelectorAll('.mobile-nav-item').forEach(item => {
                item.classList.remove('active');
            });
            
            // Toggle current dropdown
            if (!wasActive) {
                parent.classList.add('active');
            }
        });
    });

    // Close mobile menu on link click
    const mobileLinks = document.querySelectorAll('.mobile-dropdown-link, .mobile-nav-link:not(.mobile-dropdown-trigger)');
    mobileLinks.forEach(link => {
        if (!link.classList.contains('mobile-dropdown-trigger')) {
            link.addEventListener('click', closeMobileMenu);
        }
    });
    </script>
