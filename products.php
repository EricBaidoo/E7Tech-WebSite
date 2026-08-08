<?php
$page_title = "Ready-to-Deploy Products | E7 Technology";
$meta_description = "Explore E7 Technology's portfolio of ready-to-deploy enterprise software products including EduCore, FaithOS, and E7 LMS.";
include('header.php');
?>

<!-- HERO SECTION -->
<section class="pt-40 pb-24 bg-white border-b border-slate-100 text-center relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute top-0 right-0 w-[50rem] h-[50rem] bg-blue-50 rounded-full blur-[6.25rem] opacity-60 translate-x-1/3 -translate-y-1/3"></div>
        <div class="absolute bottom-0 left-0 w-[37.5rem] h-[37.5rem] bg-slate-100 rounded-full blur-[5rem] opacity-60 -translate-x-1/3 translate-y-1/3"></div>
    </div>
    
    <div class="max-w-5xl mx-auto px-4 relative z-10">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-slate-100 border border-slate-200 mb-8 shadow-sm">
            <i class="fas fa-box-open text-brand-blue text-xs"></i>
            <span class="text-slate-600 text-xs font-bold uppercase tracking-wide">Ready-to-Deploy</span>
        </div>
        
        <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 tracking-tight mb-8 leading-[1.1]">
            Enterprise Software.<br>
            <span class="text-brand-blue">Ready on Day One.</span>
        </h1>
        
        <p class="text-xl text-slate-600 leading-relaxed max-w-3xl mx-auto">
            Skip the lengthy development cycles. Our proprietary software platforms are engineered for absolute scale, rigorously tested, and ready to be deployed instantly into your operational workflow.
        </p>
    </div>
</section>

<!-- PRODUCTS GRID -->
<section class="py-24 bg-slate-50 border-b border-slate-200 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- E7BUILD PRODUCTS -->
        <div class="mb-20">
            <div class="flex items-center gap-4 mb-10 pb-4 border-b border-slate-200">
                <div class="w-12 h-12 rounded-xl bg-slate-900 flex items-center justify-center">
                    <i class="fas fa-cogs text-white text-xl"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-extrabold text-slate-900">E7Build™ Platforms</h2>
                    <p class="text-sm text-slate-500 font-medium">Core Enterprise Management Systems</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- EduCore -->
                <div class="bg-white rounded-3xl p-8 border border-slate-200 hover:shadow-xl hover:border-brand-blue transition-all duration-300 group flex flex-col h-full relative">
                    <div class="absolute top-6 right-6 text-[0.625rem] font-bold text-brand-blue uppercase tracking-widest px-3 py-1 rounded-full bg-blue-50 border border-blue-100">Flagship</div>
                    <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-blue transition-colors duration-300">
                        <i class="fas fa-graduation-cap text-3xl text-brand-blue group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-2xl font-extrabold text-slate-900 mb-2">EduCore</h3>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-4 pb-4 border-b border-slate-100">School Operating System</p>
                    <p class="text-slate-600 leading-relaxed flex-1 mb-8">
                        A comprehensive, cloud-based management system designed to automate admissions, academic records, fee collections, and parent communications for modern educational institutions.
                    </p>
                    <a href="contact" class="flex items-center justify-center w-full py-3 rounded-xl bg-slate-100 text-slate-900 font-bold group-hover:bg-slate-900 group-hover:text-white transition-colors">
                        Request Demo <i class="fas fa-arrow-right ml-2 text-[0.625rem]"></i>
                    </a>
                </div>

                <!-- FaithOS -->
                <div class="bg-white rounded-3xl p-8 border border-slate-200 hover:shadow-xl hover:border-brand-blue transition-all duration-300 group flex flex-col h-full relative">
                    <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-blue transition-colors duration-300">
                        <i class="fas fa-church text-3xl text-brand-blue group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-2xl font-extrabold text-slate-900 mb-2">FaithOS</h3>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-4 pb-4 border-b border-slate-100">Church Operating System</p>
                    <p class="text-slate-600 leading-relaxed flex-1 mb-8">
                        The ultimate digital hub for modern ministries. Manage member databases, automate donations and tithes, schedule events, and broadcast communications seamlessly from one dashboard.
                    </p>
                    <a href="contact" class="flex items-center justify-center w-full py-3 rounded-xl bg-slate-100 text-slate-900 font-bold group-hover:bg-slate-900 group-hover:text-white transition-colors">
                        Request Demo <i class="fas fa-arrow-right ml-2 text-[0.625rem]"></i>
                    </a>
                </div>

                <!-- E7 LMS -->
                <div class="bg-white rounded-3xl p-8 border border-slate-200 hover:shadow-xl hover:border-brand-blue transition-all duration-300 group flex flex-col h-full relative">
                    <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-blue transition-colors duration-300">
                        <i class="fas fa-book-reader text-3xl text-brand-blue group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-2xl font-extrabold text-slate-900 mb-2">E7 LMS</h3>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-4 pb-4 border-b border-slate-100">Learning Operating System</p>
                    <p class="text-slate-600 leading-relaxed flex-1 mb-8">
                        A robust virtual learning environment designed for universities and corporate training programs. Deliver video courses, manage assessments, and track learning analytics securely.
                    </p>
                    <a href="contact" class="flex items-center justify-center w-full py-3 rounded-xl bg-slate-100 text-slate-900 font-bold group-hover:bg-slate-900 group-hover:text-white transition-colors">
                        Request Demo <i class="fas fa-arrow-right ml-2 text-[0.625rem]"></i>
                    </a>
                </div>

                <!-- Luke7 -->
                <div class="bg-white rounded-3xl p-8 border border-slate-200 hover:shadow-xl hover:border-brand-blue transition-all duration-300 group flex flex-col h-full relative">
                    <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-blue transition-colors duration-300">
                        <i class="fas fa-project-diagram text-3xl text-brand-blue group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-2xl font-extrabold text-slate-900 mb-2">Luke7</h3>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-4 pb-4 border-b border-slate-100">AI Church Presentation</p>
                    <p class="text-slate-600 leading-relaxed flex-1 mb-8">
                        An intelligent presentation system for modern ministries. Seamlessly manage Bible verses, sermon slides, and media with AI-powered cueing for flawless church services.
                    </p>
                    <a href="contact" class="flex items-center justify-center w-full py-3 rounded-xl bg-slate-100 text-slate-900 font-bold group-hover:bg-slate-900 group-hover:text-white transition-colors">
                        Request Demo <i class="fas fa-arrow-right ml-2 text-[0.625rem]"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- E7INSIGHT & E7SHIELD -->
        <div>
            <div class="flex items-center gap-4 mb-10 pb-4 border-b border-slate-200">
                <div class="w-12 h-12 rounded-xl bg-brand-blue flex items-center justify-center">
                    <i class="fas fa-shield-alt text-white text-xl"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-extrabold text-slate-900">Security & Intelligence Products</h2>
                    <p class="text-sm text-slate-500 font-medium">Standalone components of the E7Shield™ & E7Insight™ architectures</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- ZeroTrust -->
                <div class="bg-white rounded-3xl p-8 border border-slate-200 hover:shadow-xl hover:border-brand-blue transition-all duration-300 group flex flex-col h-full relative">
                    <div class="w-16 h-16 bg-slate-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-slate-900 transition-colors duration-300">
                        <i class="fas fa-user-lock text-3xl text-slate-700 group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-2xl font-extrabold text-slate-900 mb-2">E7 ZeroTrust</h3>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-4 pb-4 border-b border-slate-100">Identity & Access Manager</p>
                    <p class="text-slate-600 leading-relaxed flex-1 mb-8">
                        A turnkey identity platform that enforces strict zero-trust access policies across your entire organization. Eliminate lateral movement and secure your data perimeter instantly.
                    </p>
                    <a href="contact" class="flex items-center justify-center w-full py-3 rounded-xl bg-slate-100 text-slate-900 font-bold group-hover:bg-brand-blue group-hover:text-white transition-colors">
                        Learn More <i class="fas fa-arrow-right ml-2 text-[0.625rem]"></i>
                    </a>
                </div>

                <!-- FraudDetect AI -->
                <div class="bg-white rounded-3xl p-8 border border-slate-200 hover:shadow-xl hover:border-brand-blue transition-all duration-300 group flex flex-col h-full relative">
                    <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-blue transition-colors duration-300">
                        <i class="fas fa-search-dollar text-3xl text-brand-blue group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-2xl font-extrabold text-slate-900 mb-2">FraudDetect AI</h3>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-4 pb-4 border-b border-slate-100">Machine Learning Anomaly Engine</p>
                    <p class="text-slate-600 leading-relaxed flex-1 mb-8">
                        A pre-trained AI pipeline that plugs into your financial datasets to detect anomalous transactions and behavioral patterns in real-time, preventing financial loss before it occurs.
                    </p>
                    <a href="contact" class="flex items-center justify-center w-full py-3 rounded-xl bg-slate-100 text-slate-900 font-bold group-hover:bg-brand-blue group-hover:text-white transition-colors">
                        Learn More <i class="fas fa-arrow-right ml-2 text-[0.625rem]"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="py-24 bg-slate-900 text-center relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('assets/images/sliders/slide6.png')] opacity-10 bg-cover bg-center mix-blend-overlay"></div>
    <div class="max-w-3xl mx-auto px-4 relative z-10">
        <h2 class="text-4xl font-extrabold text-white mb-6">Need a custom build instead?</h2>
        <p class="text-xl text-slate-400 mb-10 font-light">If our off-the-shelf platforms don't fit your unique operational workflows, our expert engineering team will build exactly what you need from scratch.</p>
        <a href="solutions" class="inline-block px-10 py-4 rounded-xl border border-slate-700 bg-transparent text-white font-bold text-lg hover:bg-slate-800 transition-colors">
            Explore Bespoke Engineering
        </a>
    </div>
</section>

<?php include('footer.php'); ?>
