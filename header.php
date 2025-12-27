<?php /* E7 Technology Solutions Header */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E7 Technology Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="assets/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/mobile.css?v=<?php echo time(); ?>">
</head>
<body>
    <!-- Main Header -->
    <header class="header-main">
        <div class="container">
            <div class="header-wrapper">
                <div class="header-logo">
                    <a href="index.php">
                        <img src="assets/images/E7-logo1.png" alt="E7 Technology Solutions" class="logo-img">
                    </a>
                </div>
                
                <nav class="header-nav" id="headerNav">
                    <ul class="nav-menu">
                        <li><a href="index.php" class="nav-link">Home</a></li>
                        <li class="nav-dropdown">
                            <a href="about.php" class="nav-link dropdown-toggle">
                                About Us <i class="fas fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="about.php#about-e7">About E7</a></li>
                                <li><a href="about.php#leadership">Leadership</a></li>
                                <li><a href="about.php#gallery">Gallery</a></li>
                            </ul>
                        </li>
                        <li><a href="services.php" class="nav-link">Services</a></li>
                        <li><a href="solutions.php" class="nav-link">Solutions</a></li>
                        <li><a href="academy.php" class="nav-link">E7 Academy</a></li>
                        <li><a href="news.php" class="nav-link">News</a></li>
                        <li><a href="contact.php" class="nav-link nav-link-primary">Contact Us</a></li>
                    </ul>
                </nav>
                
                <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle Menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
        </div>
    </header>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileToggle = document.getElementById('mobileToggle');
        const headerNav = document.getElementById('headerNav');
        const body = document.body;
        
        // Mobile menu toggle
        if (mobileToggle) {
            mobileToggle.addEventListener('click', function() {
                this.classList.toggle('active');
                headerNav.classList.toggle('active');
                body.classList.toggle('menu-open');
            });
        }
        
        // Dropdown functionality
        const dropdowns = document.querySelectorAll('.nav-dropdown');
        dropdowns.forEach(dropdown => {
            const toggle = dropdown.querySelector('.dropdown-toggle');
            
            // Desktop hover
            dropdown.addEventListener('mouseenter', function() {
                if (window.innerWidth > 991) {
                    this.classList.add('active');
                }
            });
            
            dropdown.addEventListener('mouseleave', function() {
                if (window.innerWidth > 991) {
                    this.classList.remove('active');
                }
            });
            
            // Mobile click
            if (toggle) {
                toggle.addEventListener('click', function(e) {
                    if (window.innerWidth <= 991) {
                        e.preventDefault();
                        dropdown.classList.toggle('active');
                    }
                });
            }
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.header-main') && headerNav.classList.contains('active')) {
                mobileToggle.classList.remove('active');
                headerNav.classList.remove('active');
                body.classList.remove('menu-open');
            }
        });
        
        // Close mobile menu when clicking nav link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 991) {
                    mobileToggle.classList.remove('active');
                    headerNav.classList.remove('active');
                    body.classList.remove('menu-open');
                }
            });
        });
    });
    </script>