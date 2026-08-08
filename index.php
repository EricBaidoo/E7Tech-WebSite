<?php 
$page_title = "Trusted AI, Data & Security Solutions";
include 'header.php'; 
?>

<!-- ==============================================
     HERO SECTION (Google/Microsoft Style Slider - 7 Slides)
     ============================================== -->
<section class="pt-32 pb-20 lg:pt-32 lg:pb-32 bg-white overflow-hidden border-b border-slate-100 relative min-h-[600px] lg:h-[700px] flex items-center">
    <div id="hero-slider" class="relative w-full max-w-7xl mx-auto h-full">
        
        <!-- Slide 1: Enterprise Solutions -->
        <div class="slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-100 z-20 flex items-center px-4 sm:px-6 lg:px-8 h-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 w-full items-center">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-slate-100 border border-slate-200 mb-6">
                        <span class="w-2 h-2 rounded-full bg-brand-blue animate-pulse"></span>
                        <span class="text-slate-600 text-xs font-semibold uppercase tracking-wide">Enterprise Solutions</span>
                    </div>
                    <h1 class="text-5xl md:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.1] mb-6">
                        Trusted Technology.<br>
                        <span class="text-brand-blue">Intelligent Transformation.</span>
                    </h1>
                    <p class="text-lg text-slate-500 leading-relaxed mb-8">
                        Empowering organizations across Africa to become smarter, safer, and more efficient. We deliver enterprise-grade AI, data, and cybersecurity solutions.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="solutions.php" class="px-8 py-3 rounded bg-brand-blue text-white font-medium text-center hover:bg-blue-700 transition-colors shadow-sm">Explore Solutions</a>
                    </div>
                </div>
                <div class="relative hidden lg:flex items-center justify-center h-full">
                    <div class="w-full max-w-lg bg-white rounded-xl shadow-[0_20px_50px_rgba(0,0,0,0.05)] border border-slate-200 overflow-hidden relative z-10 transform lg:translate-x-12">
                        <div class="h-12 border-b border-slate-100 flex items-center px-4 gap-2 bg-slate-50">
                            <div class="w-3 h-3 rounded-full bg-red-400"></div><div class="w-3 h-3 rounded-full bg-amber-400"></div><div class="w-3 h-3 rounded-full bg-green-400"></div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-6">
                                <h3 class="font-semibold text-slate-800 text-sm">System Health</h3>
                                <span class="px-2 py-1 bg-green-100 text-green-700 text-xs font-bold rounded">100% SECURE</span>
                            </div>
                            <div class="flex items-end gap-2 h-32 mb-6">
                                <div class="w-full bg-brand-blue/20 rounded-t h-12"></div><div class="w-full bg-brand-blue/40 rounded-t h-16"></div><div class="w-full bg-brand-blue/60 rounded-t h-20"></div><div class="w-full bg-brand-blue/80 rounded-t h-24"></div><div class="w-full bg-brand-blue rounded-t h-32"></div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute top-10 right-0 w-64 h-64 bg-blue-50 rounded-full blur-3xl -z-10"></div>
                </div>
            </div>
        </div>

        <!-- Slide 2: Cybersecurity (E7Shield) -->
        <div class="slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0 z-10 flex items-center px-4 sm:px-6 lg:px-8 h-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 w-full items-center">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-slate-100 border border-slate-200 mb-6">
                        <i class="fas fa-shield-alt text-slate-600 text-xs"></i>
                        <span class="text-slate-600 text-xs font-semibold uppercase tracking-wide">E7Shield™ Architecture</span>
                    </div>
                    <h1 class="text-5xl md:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.1] mb-6">
                        Zero Trust.<br>
                        <span class="text-slate-700">Absolute Security.</span>
                    </h1>
                    <p class="text-lg text-slate-500 leading-relaxed mb-8">
                        Protect your digital assets with our comprehensive risk management and security frameworks. We don't just find vulnerabilities—we engineer resilience.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="solutions/e7shield.php" class="px-8 py-3 rounded bg-slate-800 text-white font-medium text-center hover:bg-slate-900 transition-colors shadow-sm">View Cybersecurity</a>
                    </div>
                </div>
                <div class="relative hidden lg:flex items-center justify-center h-full">
                    <div class="w-full max-w-lg bg-white rounded-xl shadow-[0_20px_50px_rgba(0,0,0,0.05)] border border-slate-200 overflow-hidden relative z-10 transform lg:translate-x-12 flex flex-col items-center justify-center p-12">
                        <i class="fas fa-lock text-6xl text-slate-800 mb-6"></i>
                        <h3 class="font-bold text-slate-800 text-xl mb-2">Network Encrypted</h3>
                        <p class="text-slate-500 text-sm text-center">AES-256 Multi-Layer Protection Active.</p>
                        <div class="w-full h-2 bg-slate-100 rounded-full mt-6 overflow-hidden">
                            <div class="h-full bg-green-500 w-[100%]"></div>
                        </div>
                    </div>
                    <div class="absolute bottom-10 left-10 w-48 h-48 bg-slate-100 rounded-full blur-2xl -z-10"></div>
                </div>
            </div>
        </div>

        <!-- Slide 3: AI & Data (E7Insight) -->
        <div class="slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0 z-10 flex items-center px-4 sm:px-6 lg:px-8 h-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 w-full items-center">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-blue-50 border border-blue-100 mb-6">
                        <i class="fas fa-brain text-brand-blue text-xs"></i>
                        <span class="text-brand-blue text-xs font-semibold uppercase tracking-wide">E7Insight™ Analytics</span>
                    </div>
                    <h1 class="text-5xl md:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.1] mb-6">
                        Predict the future.<br>
                        <span class="text-brand-blue">Control your data.</span>
                    </h1>
                    <p class="text-lg text-slate-500 leading-relaxed mb-8">
                        Transform raw data into governed, decision-ready intelligence. Leverage enterprise dashboards and predictive AI models to scale your operations rapidly.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="solutions/e7insight.php" class="px-8 py-3 rounded bg-brand-blue text-white font-medium text-center hover:bg-blue-700 transition-colors shadow-sm">View AI Solutions</a>
                    </div>
                </div>
                <div class="relative hidden lg:flex items-center justify-center h-full">
                    <div class="w-full max-w-lg bg-white rounded-xl shadow-[0_20px_50px_rgba(0,0,0,0.05)] border border-slate-200 overflow-hidden relative z-10 transform lg:translate-x-12 p-8">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="font-bold text-slate-800">Revenue Prediction Model</h3>
                            <i class="fas fa-chart-line text-brand-blue"></i>
                        </div>
                        <div class="relative h-40 w-full mb-4">
                            <svg class="w-full h-full" viewBox="0 0 100 40" preserveAspectRatio="none">
                                <path d="M0 40 Q 20 30, 40 20 T 80 10 T 100 5 L 100 40 Z" fill="rgba(0, 82, 204, 0.1)"></path>
                                <path d="M0 40 Q 20 30, 40 20 T 80 10 T 100 5" fill="none" stroke="#0052cc" stroke-width="2"></path>
                            </svg>
                        </div>
                        <div class="flex justify-between text-xs font-bold text-slate-500">
                            <span>Q1</span><span>Q2</span><span>Q3</span><span class="text-brand-blue">Q4 (Forecast)</span>
                        </div>
                    </div>
                    <div class="absolute top-10 right-0 w-64 h-64 bg-blue-50 rounded-full blur-3xl -z-10"></div>
                </div>
            </div>
        </div>

        <!-- Slide 4: Custom Software (E7Build) -->
        <div class="slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0 z-10 flex items-center px-4 sm:px-6 lg:px-8 h-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 w-full items-center">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-slate-100 border border-slate-200 mb-6">
                        <i class="fas fa-cogs text-slate-600 text-xs"></i>
                        <span class="text-slate-600 text-xs font-semibold uppercase tracking-wide">E7Build™ Engineering</span>
                    </div>
                    <h1 class="text-5xl md:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.1] mb-6">
                        Build your<br>
                        <span class="text-brand-blue">digital future.</span>
                    </h1>
                    <p class="text-lg text-slate-500 leading-relaxed mb-8">
                        Custom software development, seamless API integrations, and enterprise platform engineering built to solve complex operational challenges.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="solutions/e7build.php" class="px-8 py-3 rounded bg-slate-800 text-white font-medium text-center hover:bg-slate-900 transition-colors shadow-sm">View Software Engineering</a>
                    </div>
                </div>
                <div class="relative hidden lg:flex items-center justify-center h-full">
                    <div class="w-full max-w-lg bg-slate-900 rounded-xl shadow-[0_20px_50px_rgba(0,0,0,0.15)] overflow-hidden relative z-10 transform lg:translate-x-12">
                        <div class="h-10 border-b border-slate-700 flex items-center px-4 gap-2 bg-slate-800">
                            <div class="w-3 h-3 rounded-full bg-red-400"></div><div class="w-3 h-3 rounded-full bg-amber-400"></div><div class="w-3 h-3 rounded-full bg-green-400"></div>
                            <span class="text-[10px] text-slate-400 ml-4 font-mono">app.ts - E7Build</span>
                        </div>
                        <div class="p-6 font-mono text-sm leading-relaxed">
                            <div class="text-pink-400">import <span class="text-slate-300">{ EnterpriseApp }</span> from <span class="text-green-300">'@e7/core'</span>;</div>
                            <br>
                            <div class="text-brand-blue">const</div> <span class="text-blue-300">system</span> = <span class="text-brand-blue">new</span> <span class="text-yellow-200">EnterpriseApp</span>({<br>
                            &nbsp;&nbsp;<span class="text-blue-300">scalable</span>: <span class="text-orange-300">true</span>,<br>
                            &nbsp;&nbsp;<span class="text-blue-300">secure</span>: <span class="text-orange-300">true</span>,<br>
                            &nbsp;&nbsp;<span class="text-blue-300">architecture</span>: <span class="text-green-300">'microservices'</span><br>
                            });<br>
                            <br>
                            <span class="text-blue-300">system</span>.<span class="text-yellow-200">deploy</span>(); <span class="text-slate-500">// Deploying to production...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 5: Cloud Solutions -->
        <div class="slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0 z-10 flex items-center px-4 sm:px-6 lg:px-8 h-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 w-full items-center">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-blue-50 border border-blue-100 mb-6">
                        <i class="fas fa-cloud text-brand-blue text-xs"></i>
                        <span class="text-brand-blue text-xs font-semibold uppercase tracking-wide">Cloud Infrastructure</span>
                    </div>
                    <h1 class="text-5xl md:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.1] mb-6">
                        Limitless Scale.<br>
                        <span class="text-brand-blue">Infinite Reliability.</span>
                    </h1>
                    <p class="text-lg text-slate-500 leading-relaxed mb-8">
                        Modernize your infrastructure with seamless cloud migration, secure hosting, and scalable DevOps architecture designed for maximum uptime.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="solutions.php" class="px-8 py-3 rounded bg-brand-blue text-white font-medium text-center hover:bg-blue-700 transition-colors shadow-sm">Explore Cloud Services</a>
                    </div>
                </div>
                <div class="relative hidden lg:flex items-center justify-center h-full">
                    <div class="w-full max-w-lg bg-white rounded-xl shadow-[0_20px_50px_rgba(0,0,0,0.05)] border border-slate-200 p-8 relative z-10 transform lg:translate-x-12">
                        <div class="flex flex-col gap-4">
                            <!-- Server Block 1 -->
                            <div class="bg-slate-50 border border-slate-200 rounded-lg p-4 flex justify-between items-center">
                                <div class="flex items-center gap-4">
                                    <i class="fas fa-server text-slate-400 text-2xl"></i>
                                    <div><div class="font-bold text-slate-700 text-sm">Node cluster_alpha</div><div class="text-xs text-slate-500">us-east-1</div></div>
                                </div>
                                <div class="w-3 h-3 rounded-full bg-green-500 animate-pulse"></div>
                            </div>
                            <!-- Server Block 2 -->
                            <div class="bg-slate-50 border border-slate-200 rounded-lg p-4 flex justify-between items-center">
                                <div class="flex items-center gap-4">
                                    <i class="fas fa-database text-slate-400 text-2xl"></i>
                                    <div><div class="font-bold text-slate-700 text-sm">Main Database DB_01</div><div class="text-xs text-slate-500">us-east-1</div></div>
                                </div>
                                <div class="w-3 h-3 rounded-full bg-green-500 animate-pulse"></div>
                            </div>
                            <!-- Server Block 3 -->
                            <div class="bg-slate-50 border border-slate-200 rounded-lg p-4 flex justify-between items-center">
                                <div class="flex items-center gap-4">
                                    <i class="fas fa-network-wired text-slate-400 text-2xl"></i>
                                    <div><div class="font-bold text-slate-700 text-sm">Load Balancer (Active)</div><div class="text-xs text-slate-500">Global</div></div>
                                </div>
                                <div class="w-3 h-3 rounded-full bg-green-500 animate-pulse"></div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-10 right-10 w-64 h-64 bg-blue-50 rounded-full blur-3xl -z-10"></div>
                </div>
            </div>
        </div>

        <!-- Slide 6: Digital Transformation Consulting -->
        <div class="slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0 z-10 flex items-center px-4 sm:px-6 lg:px-8 h-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 w-full items-center">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-slate-100 border border-slate-200 mb-6">
                        <i class="fas fa-lightbulb text-slate-600 text-xs"></i>
                        <span class="text-slate-600 text-xs font-semibold uppercase tracking-wide">IT Consulting</span>
                    </div>
                    <h1 class="text-5xl md:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.1] mb-6">
                        Strategic Vision.<br>
                        <span class="text-slate-700">Flawless Execution.</span>
                    </h1>
                    <p class="text-lg text-slate-500 leading-relaxed mb-8">
                        Our experts guide your organization through comprehensive digital transformation, aligning technology investments with core business objectives.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="contact.php" class="px-8 py-3 rounded bg-slate-800 text-white font-medium text-center hover:bg-slate-900 transition-colors shadow-sm">Talk to an Expert</a>
                    </div>
                </div>
                <div class="relative hidden lg:flex items-center justify-center h-full">
                    <div class="w-full max-w-lg bg-white rounded-xl shadow-[0_20px_50px_rgba(0,0,0,0.05)] border border-slate-200 p-8 relative z-10 transform lg:translate-x-12">
                        <!-- Simple Flowchart Mockup -->
                        <div class="flex flex-col items-center gap-4">
                            <div class="px-6 py-3 bg-brand-blue text-white rounded-lg font-bold shadow-sm w-48 text-center">Assess Phase</div>
                            <div class="h-6 border-l-2 border-slate-300 border-dashed"></div>
                            <div class="px-6 py-3 bg-blue-50 border border-brand-blue text-brand-blue rounded-lg font-bold w-48 text-center">Design Architecture</div>
                            <div class="h-6 border-l-2 border-slate-300 border-dashed"></div>
                            <div class="px-6 py-3 bg-slate-100 border border-slate-300 text-slate-700 rounded-lg font-bold w-48 text-center">Implementation</div>
                            <div class="h-6 border-l-2 border-slate-300 border-dashed"></div>
                            <div class="px-6 py-3 bg-green-500 text-white rounded-lg font-bold shadow-sm w-48 text-center"><i class="fas fa-check-circle mr-2"></i>Go Live</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 7: E7 Academy -->
        <div class="slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0 z-10 flex items-center px-4 sm:px-6 lg:px-8 h-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 w-full items-center">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-blue-50 border border-blue-100 mb-6">
                        <i class="fas fa-graduation-cap text-brand-blue text-xs"></i>
                        <span class="text-brand-blue text-xs font-semibold uppercase tracking-wide">E7 Academy</span>
                    </div>
                    <h1 class="text-5xl md:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.1] mb-6">
                        Empowering Talent.<br>
                        <span class="text-brand-blue">Building Capacity.</span>
                    </h1>
                    <p class="text-lg text-slate-500 leading-relaxed mb-8">
                        World-class technology training programs designed to upskill your workforce in AI, cybersecurity, and modern software engineering.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="academy.php" class="px-8 py-3 rounded bg-brand-blue text-white font-medium text-center hover:bg-blue-700 transition-colors shadow-sm">View Training Programs</a>
                    </div>
                </div>
                <div class="relative hidden lg:flex items-center justify-center h-full">
                    <div class="w-full max-w-lg bg-white rounded-xl shadow-[0_20px_50px_rgba(0,0,0,0.05)] border border-slate-200 p-8 relative z-10 transform lg:translate-x-12 text-center">
                        <div class="w-20 h-20 mx-auto bg-blue-50 rounded-full flex items-center justify-center mb-6">
                            <i class="fas fa-certificate text-4xl text-brand-blue"></i>
                        </div>
                        <h3 class="text-2xl font-serif font-bold text-slate-800 mb-2">Certificate of Excellence</h3>
                        <p class="text-slate-500 text-sm mb-6 pb-6 border-b border-slate-100">Awarded for mastery in Full-Stack Engineering</p>
                        <div class="flex justify-between items-center px-8">
                            <div class="w-24 h-1 bg-slate-200 rounded"></div>
                            <img src="assets/images/E7_Technology_Solutions_logo1.jpeg" alt="Logo" class="h-6 grayscale opacity-50">
                            <div class="w-24 h-1 bg-slate-200 rounded"></div>
                        </div>
                    </div>
                    <div class="absolute top-0 right-10 w-48 h-48 bg-cyan-50 rounded-full blur-2xl -z-10"></div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- Slider Controls -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex gap-2 z-30">
        <button class="slide-dot w-8 h-1.5 rounded-full bg-brand-blue transition-all" onclick="goToSlide(0)" aria-label="Slide 1"></button>
        <button class="slide-dot w-2.5 h-1.5 rounded-full bg-slate-300 transition-all hover:bg-slate-400" onclick="goToSlide(1)" aria-label="Slide 2"></button>
        <button class="slide-dot w-2.5 h-1.5 rounded-full bg-slate-300 transition-all hover:bg-slate-400" onclick="goToSlide(2)" aria-label="Slide 3"></button>
        <button class="slide-dot w-2.5 h-1.5 rounded-full bg-slate-300 transition-all hover:bg-slate-400" onclick="goToSlide(3)" aria-label="Slide 4"></button>
        <button class="slide-dot w-2.5 h-1.5 rounded-full bg-slate-300 transition-all hover:bg-slate-400" onclick="goToSlide(4)" aria-label="Slide 5"></button>
        <button class="slide-dot w-2.5 h-1.5 rounded-full bg-slate-300 transition-all hover:bg-slate-400" onclick="goToSlide(5)" aria-label="Slide 6"></button>
        <button class="slide-dot w-2.5 h-1.5 rounded-full bg-slate-300 transition-all hover:bg-slate-400" onclick="goToSlide(6)" aria-label="Slide 7"></button>
    </div>
</section>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.slide-dot');
    const slideCount = slides.length;
    let slideInterval;

    function goToSlide(index) {
        slides[currentSlide].classList.remove('opacity-100', 'z-20');
        slides[currentSlide].classList.add('opacity-0', 'z-10');
        dots[currentSlide].classList.remove('w-8', 'bg-brand-blue');
        dots[currentSlide].classList.add('w-2.5', 'bg-slate-300');

        currentSlide = index;

        slides[currentSlide].classList.remove('opacity-0', 'z-10');
        slides[currentSlide].classList.add('opacity-100', 'z-20');
        dots[currentSlide].classList.remove('w-2.5', 'bg-slate-300');
        dots[currentSlide].classList.add('w-8', 'bg-brand-blue');

        resetInterval();
    }

    function nextSlide() {
        goToSlide((currentSlide + 1) % slideCount);
    }

    function resetInterval() {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 6000); // 6 seconds per slide
    }

    // Initialize
    resetInterval();
</script>

<!-- ==============================================
     CLIENT LOGOS (Social Proof)
     ============================================== -->
<section class="py-10 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-sm font-semibold text-slate-500 uppercase tracking-wider mb-6">Trusted by innovative organizations</p>
        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-50 grayscale">
            <!-- Placeholders for client logos -->
            <div class="text-xl font-bold font-serif">Enterprise<span class="text-brand-blue">Corp</span></div>
            <div class="text-xl font-bold">Global<span class="font-light">Tech</span></div>
            <div class="text-xl font-bold tracking-tighter">FINANCE<span class="text-brand-blue">PRO</span></div>
            <div class="text-xl font-bold italic">Edu<span class="not-italic">Systems</span></div>
        </div>
    </div>
</section>

<!-- ==============================================
     FLAGSHIP SOLUTIONS (Bento Box)
     ============================================== -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Three platforms. Infinite possibilities.</h2>
            <p class="text-lg text-slate-500">Comprehensive solutions engineered to protect your assets, analyze your data, and build your digital infrastructure.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- E7Shield -->
            <div class="bg-white border border-slate-200 rounded-xl p-8 hover:shadow-lg transition-shadow duration-300 flex flex-col">
                <div class="w-12 h-12 rounded bg-slate-100 flex items-center justify-center mb-6">
                    <i class="fas fa-shield-alt text-xl text-slate-700"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">E7Shield™</h3>
                <p class="text-slate-500 text-sm mb-6 flex-1">Protect your digital world with enterprise-grade cybersecurity, risk management, and zero-trust architecture.</p>
                
                <img src="assets/images/SecureShieldHero.png" alt="E7Shield" class="w-full h-32 object-cover rounded mb-6 border border-slate-100">
                
                <a href="solutions/e7shield.php" class="text-brand-blue font-medium text-sm hover:underline flex items-center gap-1">
                    Explore E7Shield <i class="fas fa-arrow-right text-[10px]"></i>
                </a>
            </div>

            <!-- E7Insight (Highlighted) -->
            <div class="bg-brand-blue border border-brand-blue rounded-xl p-8 shadow-md flex flex-col relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl transform translate-x-1/2 -translate-y-1/2"></div>
                <div class="w-12 h-12 rounded bg-white/20 flex items-center justify-center mb-6">
                    <i class="fas fa-brain text-xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">E7Insight™</h3>
                <p class="text-blue-100 text-sm mb-6 flex-1">Turn data into intelligent decisions. Advanced AI, predictive analytics, and enterprise data architecture.</p>
                
                <img src="assets/images/InsightAIPageHero.png" alt="E7Insight" class="w-full h-32 object-cover rounded mb-6 border border-white/20">
                
                <a href="solutions/e7insight.php" class="text-white font-medium text-sm hover:underline flex items-center gap-1">
                    Explore E7Insight <i class="fas fa-arrow-right text-[10px]"></i>
                </a>
            </div>

            <!-- E7Build -->
            <div class="bg-white border border-slate-200 rounded-xl p-8 hover:shadow-lg transition-shadow duration-300 flex flex-col">
                <div class="w-12 h-12 rounded bg-slate-100 flex items-center justify-center mb-6">
                    <i class="fas fa-cogs text-xl text-slate-700"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">E7Build™</h3>
                <p class="text-slate-500 text-sm mb-6 flex-1">Build your digital future. Custom software development, cloud systems integration, and enterprise platforms.</p>
                
                <img src="assets/images/SecureCorePageHero.png" alt="E7Build" class="w-full h-32 object-cover rounded mb-6 border border-slate-100">
                
                <a href="solutions/e7build.php" class="text-brand-blue font-medium text-sm hover:underline flex items-center gap-1">
                    Explore E7Build <i class="fas fa-arrow-right text-[10px]"></i>
                </a>
            </div>
            
        </div>
    </div>
</section>

<!-- ==============================================
     VISUAL FEATURE SECTION (Self-Communicative)
     ============================================== -->
<section class="py-24 bg-slate-50 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Visual -->
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm flex flex-col justify-center items-center text-center">
                    <i class="fas fa-server text-3xl text-brand-blue mb-4"></i>
                    <h4 class="font-bold text-slate-800">Cloud Integration</h4>
                </div>
                <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm flex flex-col justify-center items-center text-center mt-8">
                    <i class="fas fa-shield-alt text-3xl text-slate-700 mb-4"></i>
                    <h4 class="font-bold text-slate-800">Zero Trust</h4>
                </div>
                <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm flex flex-col justify-center items-center text-center -mt-8">
                    <i class="fas fa-code text-3xl text-slate-700 mb-4"></i>
                    <h4 class="font-bold text-slate-800">Custom Dev</h4>
                </div>
                <div class="bg-brand-blue p-6 rounded-xl shadow-md flex flex-col justify-center items-center text-center">
                    <i class="fas fa-chart-pie text-3xl text-white mb-4"></i>
                    <h4 class="font-bold text-white">Data Analytics</h4>
                </div>
            </div>
            
            <!-- Text -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-6">Expertise across the entire digital spectrum.</h2>
                <p class="text-slate-500 mb-8 leading-relaxed">
                    We don't operate in silos. E7 Technology Solutions brings together specialized engineering teams to build cohesive, secure, and intelligent systems that scale with your ambitions.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check text-brand-blue mt-1"></i>
                        <span class="text-slate-700 font-medium">End-to-End Security Architecture</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check text-brand-blue mt-1"></i>
                        <span class="text-slate-700 font-medium">Predictive AI & Machine Learning Models</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check text-brand-blue mt-1"></i>
                        <span class="text-slate-700 font-medium">Scalable Enterprise Software Development</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ==============================================
     FINAL CTA
     ============================================== -->
<section class="py-20 bg-white border-t border-slate-200 text-center">
    <div class="max-w-3xl mx-auto px-4">
        <h2 class="text-3xl font-extrabold text-slate-900 mb-6">Ready to upgrade your infrastructure?</h2>
        <a href="contact.php" class="inline-block px-8 py-3 rounded bg-brand-blue text-white font-medium hover:bg-blue-700 transition-colors shadow-sm">
            Contact Our Team
        </a>
    </div>
</section>

<?php include 'footer.php'; ?>
