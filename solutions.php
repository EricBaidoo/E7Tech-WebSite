<?php
$page_title = "Our Solutions";
include('header.php');
?>

<!-- ==============================================
     HERO SECTION
     ============================================== -->
<section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 bg-navy-900 overflow-hidden">
    <!-- Abstract tech background -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCI+PGRlZnM+PHBhdHRlcm4gaWQ9ImEiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTTAgNjBoNjBWMEgwem01OS01OXY1OEgxdjU4em0wIDBWMWg1OHY1OHoiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4wMikiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNhKSIvPjwvc3ZnPg==')] opacity-30"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-cyan-500/10 rounded-full blur-[120px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 backdrop-blur-md mb-8">
            <i class="fas fa-layer-group text-cyan-500 text-sm"></i>
            <span class="text-cyan-400 text-xs font-bold tracking-widest uppercase">The E7 Ecosystem</span>
        </div>
        
        <h1 class="text-5xl md:text-7xl font-extrabold text-white tracking-tight mb-8 leading-tight max-w-4xl mx-auto">
            Secure. Insightful.<br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">Built to Scale.</span>
        </h1>
        
        <p class="text-xl text-slate-300 font-light leading-relaxed max-w-3xl mx-auto mb-10">
            Three focused platforms engineered to meet you where you are. Assess your security posture, monetize your data, and build the custom software that powers your future.
        </p>
    </div>
</section>

<!-- ==============================================
     SOLUTIONS BENTO BOX
     ============================================== -->
<section class="py-24 bg-slate-50 relative z-20 -mt-10 rounded-t-[3rem]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- E7Shield -->
            <div class="group relative bg-white rounded-3xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 hover:shadow-[0_8px_30px_rgba(0,242,254,0.15)] transition-all duration-500 hover:-translate-y-2 flex flex-col">
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-navy-900/40 mix-blend-multiply z-10 group-hover:bg-navy-900/10 transition-all duration-500"></div>
                    <img src="assets/images/SecureShieldHero.png" alt="E7Shield Cybersecurity" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                </div>
                
                <div class="p-8 flex-1 flex flex-col relative z-20 bg-white">
                    <div class="w-14 h-14 rounded-2xl bg-cyan-50 flex items-center justify-center mb-6 absolute -top-7 right-8 shadow-lg border border-white">
                        <i class="fas fa-shield-alt text-2xl text-cyan-500"></i>
                    </div>
                    
                    <span class="text-xs font-bold text-cyan-500 uppercase tracking-wider mb-2">Assessment & Strategy</span>
                    <h3 class="text-2xl font-bold text-navy-900 mb-1 group-hover:text-cyan-500 transition-colors">E7Shield™</h3>
                    <p class="text-sm text-slate-500 font-semibold mb-6 pb-6 border-b border-slate-100">Protect Your Digital World</p>
                    
                    <p class="text-slate-600 mb-8 flex-1 font-light leading-relaxed">
                        Get clear visibility into cybersecurity risks, access controls, and data protection gaps. Act on prioritized remediation plans designed for African operations.
                    </p>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-3 text-sm text-slate-700">
                            <i class="fas fa-check-circle text-cyan-500 mt-0.5"></i> Comprehensive Risk Assessment
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-700">
                            <i class="fas fa-check-circle text-cyan-500 mt-0.5"></i> Penetration Testing & Vulnerability
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-700">
                            <i class="fas fa-check-circle text-cyan-500 mt-0.5"></i> Executive Compliance Reporting
                        </li>
                    </ul>
                    
                    <a href="solutions/e7shield.php" class="w-full block text-center py-4 rounded-xl bg-slate-50 text-navy-900 font-bold group-hover:bg-cyan-500 group-hover:text-white transition-all duration-300">
                        Explore E7Shield <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- E7Insight -->
            <div class="group relative bg-navy-900 rounded-3xl overflow-hidden shadow-[0_8px_30px_rgba(10,17,40,0.2)] border border-navy-800 hover:shadow-[0_8px_30px_rgba(0,242,254,0.3)] transition-all duration-500 hover:-translate-y-2 flex flex-col lg:-mt-4 lg:mb-4">
                <!-- Abstract Glow -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-cyan-500/20 rounded-full blur-[80px] pointer-events-none"></div>
                
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-navy-900/60 mix-blend-multiply z-10 group-hover:bg-navy-900/20 transition-all duration-500"></div>
                    <img src="assets/images/InsightAIPageHero.png" alt="E7Insight AI Analytics" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                </div>
                
                <div class="p-8 flex-1 flex flex-col relative z-20">
                    <div class="w-14 h-14 rounded-2xl bg-cyan-500 flex items-center justify-center mb-6 absolute -top-7 right-8 shadow-lg shadow-cyan-500/30 border border-navy-900">
                        <i class="fas fa-brain text-2xl text-white"></i>
                    </div>
                    
                    <span class="text-xs font-bold text-cyan-400 uppercase tracking-wider mb-2">Most Popular</span>
                    <h3 class="text-2xl font-bold text-white mb-1 group-hover:text-cyan-400 transition-colors">E7Insight™</h3>
                    <p class="text-sm text-slate-400 font-semibold mb-6 pb-6 border-b border-white/10">Turn Data Into Decisions</p>
                    
                    <p class="text-slate-300 mb-8 flex-1 font-light leading-relaxed">
                        Transform raw data into governed, decision-ready intelligence with secure architecture, enterprise dashboards, and responsible Artificial Intelligence.
                    </p>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-3 text-sm text-slate-300">
                            <i class="fas fa-check-circle text-cyan-400 mt-0.5"></i> Predictive Analytics & ML
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-300">
                            <i class="fas fa-check-circle text-cyan-400 mt-0.5"></i> Enterprise Data Architecture
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-300">
                            <i class="fas fa-check-circle text-cyan-400 mt-0.5"></i> Business Intelligence Dashboards
                        </li>
                    </ul>
                    
                    <a href="solutions/e7insight.php" class="w-full block text-center py-4 rounded-xl bg-cyan-500 text-white font-bold hover:bg-cyan-400 shadow-[0_0_20px_rgba(0,242,254,0.3)] transition-all duration-300">
                        Explore E7Insight <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- E7Build -->
            <div class="group relative bg-white rounded-3xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 hover:shadow-[0_8px_30px_rgba(0,242,254,0.15)] transition-all duration-500 hover:-translate-y-2 flex flex-col">
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-navy-900/40 mix-blend-multiply z-10 group-hover:bg-navy-900/10 transition-all duration-500"></div>
                    <img src="assets/images/SecureCorePageHero.png" alt="E7Build Software Development" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                </div>
                
                <div class="p-8 flex-1 flex flex-col relative z-20 bg-white">
                    <div class="w-14 h-14 rounded-2xl bg-cyan-50 flex items-center justify-center mb-6 absolute -top-7 right-8 shadow-lg border border-white">
                        <i class="fas fa-cogs text-2xl text-cyan-500"></i>
                    </div>
                    
                    <span class="text-xs font-bold text-cyan-500 uppercase tracking-wider mb-2">Enterprise Engineering</span>
                    <h3 class="text-2xl font-bold text-navy-900 mb-1 group-hover:text-cyan-500 transition-colors">E7Build™</h3>
                    <p class="text-sm text-slate-500 font-semibold mb-6 pb-6 border-b border-slate-100">Build Your Digital Future</p>
                    
                    <p class="text-slate-600 mb-8 flex-1 font-light leading-relaxed">
                        Delivered via two flexible paths: Ready-to-Deploy Platforms (like our flagship School Management System) or Bespoke Engineering for complex challenges.
                    </p>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-3 text-sm text-slate-700">
                            <i class="fas fa-check-circle text-cyan-500 mt-0.5"></i> Custom Software Development
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-700">
                            <i class="fas fa-check-circle text-cyan-500 mt-0.5"></i> Cloud Migration & DevOps
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-700">
                            <i class="fas fa-check-circle text-cyan-500 mt-0.5"></i> API & Systems Integration
                        </li>
                    </ul>
                    
                    <a href="solutions/e7build.php" class="w-full block text-center py-4 rounded-xl bg-slate-50 text-navy-900 font-bold group-hover:bg-cyan-500 group-hover:text-white transition-all duration-300">
                        Explore E7Build <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==============================================
     CORE CAPABILITIES LIST
     ============================================== -->
<section id="capabilities" class="py-24 bg-white border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-cyan-500 font-bold tracking-wide uppercase text-sm mb-3">Powered by Elite Expertise</h2>
            <h3 class="text-4xl font-extrabold text-navy-900">10 Capabilities driving our platforms</h3>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
            <?php
            $capabilities = [
                ['icon' => 'fa-robot', 'title' => 'Artificial Intelligence'],
                ['icon' => 'fa-chart-pie', 'title' => 'Data Analytics & BI'],
                ['icon' => 'fa-lock', 'title' => 'Cybersecurity'],
                ['icon' => 'fa-code', 'title' => 'Software Development'],
                ['icon' => 'fa-mobile-alt', 'title' => 'Web & Mobile Apps'],
                ['icon' => 'fa-building', 'title' => 'Enterprise Systems'],
                ['icon' => 'fa-cloud', 'title' => 'Cloud Solutions'],
                ['icon' => 'fa-lightbulb', 'title' => 'Digital Consulting'],
                ['icon' => 'fa-server', 'title' => 'Managed IT Services'],
                ['icon' => 'fa-chalkboard-teacher', 'title' => 'Tech Training']
            ];

            foreach ($capabilities as $cap): ?>
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:border-cyan-200 hover:bg-cyan-50/50 transition-colors text-center group cursor-pointer">
                    <div class="w-12 h-12 mx-auto rounded-full bg-white flex items-center justify-center shadow-sm mb-4 group-hover:scale-110 transition-transform">
                        <i class="fas <?php echo $cap['icon']; ?> text-cyan-500 text-lg"></i>
                    </div>
                    <h4 class="text-sm font-bold text-navy-900"><?php echo $cap['title']; ?></h4>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ==============================================
     CTA
     ============================================== -->
<section class="py-20 bg-navy-900 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/10 to-transparent"></div>
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
        <h2 class="text-4xl font-extrabold text-white mb-6">Need a Custom Architecture?</h2>
        <p class="text-xl text-slate-300 mb-10 font-light">Speak with our Lead Engineers to architect a solution that fits your exact requirements.</p>
        <a href="contact.php" class="inline-block px-10 py-5 rounded-full bg-gradient-to-r from-cyan-500 to-cyan-400 text-navy-900 font-bold text-lg hover:shadow-[0_0_30px_rgba(0,242,254,0.4)] transition-all duration-300 hover:-translate-y-1">
            Schedule Architecture Review <i class="fas fa-arrow-right ml-2"></i>
        </a>
    </div>
</section>

<?php include('footer.php'); ?>
