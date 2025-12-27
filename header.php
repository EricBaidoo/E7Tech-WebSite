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
    <!-- Header -->
    <header class="site-header">
        <div class="container">
            <div class="header-content">
                <!-- Logo -->
                <div class="site-logo">
                    <a href="index.php">
                        <img src="assets/images/E7-logo1.png" alt="E7 Technology Solutions">
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <nav class="main-nav">
                    <a href="index.php">Home</a>
                    <div class="dropdown">
                        <a href="about.php" class="dropdown-btn">About Us <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-content">
                            <a href="about.php#about-e7">About E7</a>
                            <a href="about.php#leadership">Leadership</a>
                            <a href="about.php#gallery">Gallery</a>
                        </div>
                    </div>
                    <a href="services.php">Services</a>
                    <a href="solutions.php">Solutions</a>
                    <a href="academy.php">E7 Academy</a>
                    <a href="news.php">News</a>
                    <a href="contact.php" class="btn-contact">Contact Us</a>
                </nav>
                
                <!-- Mobile Toggle -->
                <button class="nav-toggle" onclick="toggleMobileMenu()">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div class="mobile-nav" id="mobileNav">
            <a href="index.php">Home</a>
            <div class="mobile-dropdown">
                <a href="#" onclick="toggleDropdown(event)">About Us <i class="fas fa-chevron-down"></i></a>
                <div class="mobile-dropdown-content">
                    <a href="about.php#about-e7">About E7</a>
                    <a href="about.php#leadership">Leadership</a>
                    <a href="about.php#gallery">Gallery</a>
                </div>
            </div>
            <a href="services.php">Services</a>
            <a href="solutions.php">Solutions</a>
            <a href="academy.php">E7 Academy</a>
            <a href="news.php">News</a>
            <a href="contact.php" class="btn-contact">Contact Us</a>
        </div>
    </header>

    <script>
    function toggleMobileMenu() {
        const mobileNav = document.getElementById('mobileNav');
        const toggle = document.querySelector('.nav-toggle');
        mobileNav.classList.toggle('active');
        toggle.classList.toggle('active');
        document.body.classList.toggle('nav-open');
    }
    
    function toggleDropdown(e) {
        e.preventDefault();
        e.target.parentElement.classList.toggle('active');
    }
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
        const mobileNav = document.getElementById('mobileNav');
        const toggle = document.querySelector('.nav-toggle');
        if (!e.target.closest('.site-header') && mobileNav.classList.contains('active')) {
            mobileNav.classList.remove('active');
            toggle.classList.remove('active');
            document.body.classList.remove('nav-open');
        }
    });
    </script>