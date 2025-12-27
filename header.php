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
    
</head>
<body>
    <header class="header-main">
        <div class="container header-amazon">
            <div class="header-logo">
                <img src="assets/images/E7-logo1.png" alt="E7 Technology Solutions Logo" style="display:block;">
            </div>
            <button class="header-toggle" aria-label="Toggle navigation">
                <span class="toggle-icon"><i class="fa fa-bars"></i></span>
                <span class="close-icon" style="display:none;"><i class="fa fa-times"></i></span>
            </button>
            <nav class="header-nav">
                <a href="index.php">Home</a>
                <div class="nav-dropdown">
                    <span class="dropdown-toggle">About Us</span>
                    <div class="dropdown-menu">
                        <a href="about.php#about-e7">About E7</a>
                        <a href="about.php#leadership">Leadership</a>
                        <a href="about.php#gallery">Gallery</a>
                    </div>
                </div>
                <a href="services.php">Services</a>
                <a href="solutions.php">Solutions</a>
                <a href="academy.php">E7 Academy</a>
                <a href="news.php">News</a>
                <a href="contact.php">Contact</a>
            </nav>
        </div>
    </header>
    <script>
    // Mobile nav toggle with icon switch
    document.addEventListener('DOMContentLoaded', function() {
        const toggle = document.querySelector('.header-toggle');
        const nav = document.querySelector('.header-nav');
        const bars = document.querySelector('.toggle-icon');
        const close = document.querySelector('.close-icon');
        if (toggle && nav && bars && close) {
            toggle.addEventListener('click', function() {
                nav.classList.toggle('nav-open');
                if (nav.classList.contains('nav-open')) {
                    bars.style.display = 'none';
                    close.style.display = 'inline';
                } else {
                    bars.style.display = 'inline';
                    close.style.display = 'none';
                }
            });
        }
        
        // Dropdown functionality
        const dropdowns = document.querySelectorAll('.nav-dropdown');
        console.log('Found dropdowns:', dropdowns.length);
        
        dropdowns.forEach(dropdown => {
            const toggleLink = dropdown.querySelector('.dropdown-toggle');
            const menu = dropdown.querySelector('.dropdown-menu');
            
            console.log('Toggle:', toggleLink, 'Menu:', menu);
            
            if (toggleLink && menu) {
                // Click functionality for mobile
                toggleLink.addEventListener('click', function(e) {
                    e.preventDefault();
                    console.log('Dropdown clicked!');
                    dropdown.classList.toggle('active');
                    console.log('Active class:', dropdown.classList.contains('active'));
                });
                
                // Hover functionality for desktop
                dropdown.addEventListener('mouseenter', function() {
                    console.log('Mouse enter, width:', window.innerWidth);
                    if (window.innerWidth > 768) {
                        dropdown.classList.add('active');
                        console.log('Added active on hover');
                    }
                });
                
                dropdown.addEventListener('mouseleave', function() {
                    if (window.innerWidth > 768) {
                        dropdown.classList.remove('active');
                        console.log('Removed active on leave');
                    }
                });
                
                // Close dropdown when clicking outside
                document.addEventListener('click', function(e) {
                    if (!dropdown.contains(e.target)) {
                        dropdown.classList.remove('active');
                    }
                });
            }
        });
    });
    </script>