<?php /* E7 Technology Solutions - Microsoft/Google Aesthetic Header */ 
// Detect base path for assets - works whether called from root or subdirectories
$assetBasePath = (strpos($_SERVER['PHP_SELF'], '/solutions/') !== false) ? '../assets' : 'assets';
$navBasePath = (strpos($_SERVER['PHP_SELF'], '/solutions/') !== false) ? '../' : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' | E7 Technology Solutions' : 'E7 Technology Solutions - Trusted AI, Data & Security Solutions'; ?></title>
    <meta name="description" content="E7 Technology Solutions provides cutting-edge cybersecurity, cloud computing, AI/ML, and technology consulting services across Africa.">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: {
                            800: '#16224A',
                            900: '#0A1128',
                        },
                        cyan: {
                            400: '#4FACFE',
                            500: '#00F2FE',
                        },
                        brand: {
                            blue: '#0052cc',
                            light: '#FAFAFA'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        /* Essential utility CSS for transitions that Tailwind can't handle purely in HTML without Alpine.js */
        .group:hover .mega-menu { opacity: 1; visibility: visible; transform: translateY(0); }
        .mega-menu { opacity: 0; visibility: hidden; transform: translateY(10px); transition: all 0.2s ease; }
        .mobile-menu-active { overflow: hidden; }
    </style>
</head>
<body class="font-sans antialiased text-slate-800 bg-brand-light selection:bg-brand-blue selection:text-white">

    <!-- Top Bar (Clean, Light Gray) -->
    <div class="bg-slate-50 text-slate-500 py-2 text-xs border-b border-slate-200 hidden md:block relative z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <div class="flex items-center gap-6">
                <a href="tel:+233243838490" class="hover:text-brand-blue transition-colors flex items-center gap-2 font-medium">
                    <i class="fas fa-phone text-slate-400"></i> +233 243 838 490
                </a>
                <a href="mailto:connect@e7world.tech" class="hover:text-brand-blue transition-colors flex items-center gap-2 font-medium">
                    <i class="fas fa-envelope text-slate-400"></i> connect@e7world.tech
                </a>
            </div>
            <div class="flex items-center gap-4">
                <a href="https://www.linkedin.com/company/93869752/" class="hover:text-brand-blue transition-colors" aria-label="LinkedIn"><i class="fab fa-linkedin-in text-slate-400"></i></a>
                <a href="https://web.facebook.com/profile.php?id=61564106101270" class="hover:text-brand-blue transition-colors" aria-label="Facebook"><i class="fab fa-facebook-f text-slate-400"></i></a>
                <a href="https://x.com/E7Technologies" class="hover:text-brand-blue transition-colors" aria-label="Twitter"><i class="fab fa-twitter text-slate-400"></i></a>
                <a href="https://www.instagram.com/e7_technology_solutions/" class="hover:text-brand-blue transition-colors" aria-label="Instagram"><i class="fab fa-instagram text-slate-400"></i></a>
            </div>
        </div>
    </div>

    <!-- Main Navigation (Solid White, No Blur) -->
    <header id="siteHeader" class="fixed w-full z-40 transition-all duration-200 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-[72px]">
                <!-- Logo -->
                <a href="<?php echo $navBasePath; ?>index.php" class="flex-shrink-0">
                    <img src="<?php echo $assetBasePath; ?>/images/E7_Technology_Solutions_logo1.jpeg" alt="E7 Technology Solutions" class="h-10 w-auto object-contain">
                </a>
                
                <!-- Desktop Nav -->
                <nav class="hidden md:flex items-center gap-8">
                    <a href="<?php echo $navBasePath; ?>index.php" class="text-slate-700 font-medium hover:text-brand-blue transition-colors text-sm">Home</a>
                    
                    <div class="relative group h-[72px] flex items-center">
                        <a href="<?php echo $navBasePath; ?>about.php" class="text-slate-700 font-medium hover:text-brand-blue transition-colors flex items-center gap-1 cursor-pointer text-sm">
                            About Us <i class="fas fa-chevron-down text-[10px] text-slate-400 transition-transform group-hover:rotate-180"></i>
                        </a>
                        <!-- Standard Dropdown -->
                        <div class="mega-menu absolute top-[72px] left-0 w-64 bg-white rounded-lg shadow-lg border border-slate-100 p-2">
                            <a href="<?php echo $navBasePath; ?>about.php" class="flex items-start gap-3 p-3 rounded-md hover:bg-slate-50 transition-colors group/item">
                                <i class="fas fa-building text-slate-400 mt-1"></i>
                                <div>
                                    <div class="font-semibold text-slate-800 group-hover/item:text-brand-blue transition-colors text-sm">About E7</div>
                                    <div class="text-xs text-slate-500">Our story and mission</div>
                                </div>
                            </a>
                            <a href="<?php echo $navBasePath; ?>about.php#leadership" class="flex items-start gap-3 p-3 rounded-md hover:bg-slate-50 transition-colors group/item">
                                <i class="fas fa-users text-slate-400 mt-1"></i>
                                <div>
                                    <div class="font-semibold text-slate-800 group-hover/item:text-brand-blue transition-colors text-sm">Leadership Team</div>
                                    <div class="text-xs text-slate-500">Meet our experts</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Solutions Mega Menu -->
                    <div class="relative group h-[72px] flex items-center">
                        <a href="<?php echo $navBasePath; ?>solutions.php" class="text-slate-700 font-medium hover:text-brand-blue transition-colors flex items-center gap-1 cursor-pointer text-sm">
                            Solutions <i class="fas fa-chevron-down text-[10px] text-slate-400 transition-transform group-hover:rotate-180"></i>
                        </a>
                        <div class="mega-menu absolute top-[72px] -left-[100px] w-[500px] bg-white rounded-lg shadow-xl border border-slate-100 p-4 flex gap-4">
                            <div class="flex-1">
                                <div class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-2 px-2">Core Platforms</div>
                                <div class="flex flex-col gap-1">
                                    <a href="<?php echo $navBasePath; ?>solutions/e7shield.php" class="flex items-start gap-4 p-3 rounded-md hover:bg-slate-50 transition-colors group/item">
                                        <div class="w-8 h-8 rounded bg-slate-100 flex items-center justify-center flex-shrink-0 group-hover/item:bg-brand-blue group-hover/item:text-white transition-colors">
                                            <i class="fas fa-shield-alt text-slate-600 group-hover/item:text-white transition-colors"></i>
                                        </div>
                                        <div>
                                            <div class="font-semibold text-slate-800 text-sm mb-0.5 group-hover/item:text-brand-blue transition-colors">E7Shield™</div>
                                            <div class="text-xs text-slate-500">Cybersecurity & Risk Management</div>
                                        </div>
                                    </a>
                                    <a href="<?php echo $navBasePath; ?>solutions/e7insight.php" class="flex items-start gap-4 p-3 rounded-md hover:bg-slate-50 transition-colors group/item">
                                        <div class="w-8 h-8 rounded bg-slate-100 flex items-center justify-center flex-shrink-0 group-hover/item:bg-brand-blue group-hover/item:text-white transition-colors">
                                            <i class="fas fa-brain text-slate-600 group-hover/item:text-white transition-colors"></i>
                                        </div>
                                        <div>
                                            <div class="font-semibold text-slate-800 text-sm mb-0.5 group-hover/item:text-brand-blue transition-colors">E7Insight™</div>
                                            <div class="text-xs text-slate-500">Data Analytics & Artificial Intelligence</div>
                                        </div>
                                    </a>
                                    <a href="<?php echo $navBasePath; ?>solutions/e7build.php" class="flex items-start gap-4 p-3 rounded-md hover:bg-slate-50 transition-colors group/item">
                                        <div class="w-8 h-8 rounded bg-slate-100 flex items-center justify-center flex-shrink-0 group-hover/item:bg-brand-blue group-hover/item:text-white transition-colors">
                                            <i class="fas fa-cogs text-slate-600 group-hover/item:text-white transition-colors"></i>
                                        </div>
                                        <div>
                                            <div class="font-semibold text-slate-800 text-sm mb-0.5 group-hover/item:text-brand-blue transition-colors">E7Build™</div>
                                            <div class="text-xs text-slate-500">Custom Software & Cloud Systems</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <a href="<?php echo $navBasePath; ?>academy.php" class="text-slate-700 font-medium hover:text-brand-blue transition-colors text-sm">E7 Academy</a>
                    <a href="<?php echo $navBasePath; ?>news.php" class="text-slate-700 font-medium hover:text-brand-blue transition-colors text-sm">News</a>
                    
                    <a href="<?php echo $navBasePath; ?>contact.php" class="px-5 py-2 rounded border border-brand-blue bg-brand-blue text-white font-medium hover:bg-blue-700 hover:border-blue-700 transition-colors flex items-center gap-2 text-sm">
                        Contact Us
                    </a>
                </nav>

                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" class="md:hidden p-2 text-slate-700 focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Navigation Menu -->
    <div id="mobileMenu" class="fixed inset-0 z-50 bg-white transition-transform duration-200 translate-x-full overflow-y-auto">
        <div class="px-4 pt-4 pb-12">
            <div class="flex justify-between items-center mb-8 pb-4 border-b border-slate-100">
                <img src="<?php echo $assetBasePath; ?>/images/E7_Technology_Solutions_logo1.jpeg" alt="E7 Tech" class="h-8 w-auto">
                <button id="mobileCloseBtn" class="p-2 text-slate-500 hover:text-slate-800 rounded-md">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <div class="flex flex-col gap-4 text-base font-medium text-slate-800">
                <a href="<?php echo $navBasePath; ?>index.php" class="hover:text-brand-blue py-2">Home</a>
                <a href="<?php echo $navBasePath; ?>about.php" class="hover:text-brand-blue py-2">About Us</a>
                
                <div class="pt-2">
                    <div class="text-slate-400 text-xs uppercase tracking-wider mb-2">Our Solutions</div>
                    <div class="flex flex-col gap-2 pl-4 border-l-2 border-slate-100">
                        <a href="<?php echo $navBasePath; ?>solutions/e7shield.php" class="flex items-center gap-3 text-slate-600 hover:text-brand-blue py-2">
                            <i class="fas fa-shield-alt text-slate-400 w-5"></i> E7Shield™
                        </a>
                        <a href="<?php echo $navBasePath; ?>solutions/e7insight.php" class="flex items-center gap-3 text-slate-600 hover:text-brand-blue py-2">
                            <i class="fas fa-brain text-slate-400 w-5"></i> E7Insight™
                        </a>
                        <a href="<?php echo $navBasePath; ?>solutions/e7build.php" class="flex items-center gap-3 text-slate-600 hover:text-brand-blue py-2">
                            <i class="fas fa-cogs text-slate-400 w-5"></i> E7Build™
                        </a>
                    </div>
                </div>
                
                <a href="<?php echo $navBasePath; ?>academy.php" class="hover:text-brand-blue py-2 pt-4 border-t border-slate-100">E7 Academy</a>
                <a href="<?php echo $navBasePath; ?>news.php" class="hover:text-brand-blue py-2">News</a>
                <a href="<?php echo $navBasePath; ?>contact.php" class="hover:text-brand-blue py-2 text-brand-blue font-semibold">Contact Us</a>
            </div>
        </div>
    </div>

    <script>
        // Simple Header Shadow on Scroll
        const header = document.getElementById('siteHeader');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                header.classList.add('shadow-sm');
            } else {
                header.classList.remove('shadow-sm');
            }
        });

        // Mobile Menu Logic
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileCloseBtn = document.getElementById('mobileCloseBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('translate-x-full');
            document.body.classList.add('mobile-menu-active');
        });

        mobileCloseBtn.addEventListener('click', () => {
            mobileMenu.classList.add('translate-x-full');
            document.body.classList.remove('mobile-menu-active');
        });
    </script>
