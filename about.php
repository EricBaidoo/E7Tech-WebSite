<?php 
$page_title = "About Us";
include 'header.php'; 
?>

<!-- ==============================================
     HERO SECTION
     ============================================== -->
<section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden bg-navy-900">
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-[20%] -right-[10%] w-[50%] h-[50%] rounded-full bg-cyan-500/10 blur-[120px]"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCI+PGRlZnM+PHBhdHRlcm4gaWQ9ImEiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTTAgNDBoNDBWMEgwem0zOS0zOXYzOEgxdjM4em0wIDBWMWgzOHYzOHoiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4wMykiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNhKSIvPjwvc3ZnPg==')] opacity-20"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 backdrop-blur-md mb-6">
                    <span class="w-2 h-2 rounded-full bg-cyan-500 animate-pulse"></span>
                    <span class="text-cyan-400 text-xs font-bold tracking-widest uppercase">The E7 Story</span>
                </div>
                <h1 class="text-5xl md:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                    Trust is our <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-cyan-500">Algorithm.</span>
                </h1>
                <p class="text-xl text-slate-300 font-light leading-relaxed mb-8">
                    We don’t just implement technology. We engineer trust. By combining cutting-edge artificial intelligence, unyielding cybersecurity, and precision data analytics, we build the digital foundations of Africa's most ambitious organizations.
                </p>
                <div class="flex items-center gap-6">
                    <div class="flex flex-col">
                        <span class="text-4xl font-bold text-white">200+</span>
                        <span class="text-sm text-cyan-500 font-semibold uppercase tracking-wider">Enterprise Clients</span>
                    </div>
                    <div class="w-px h-12 bg-white/10"></div>
                    <div class="flex flex-col">
                        <span class="text-4xl font-bold text-white">15+</span>
                        <span class="text-sm text-cyan-500 font-semibold uppercase tracking-wider">Countries Served</span>
                    </div>
                </div>
            </div>
            
            <div class="relative hidden lg:block">
                <div class="absolute inset-0 bg-gradient-to-tr from-cyan-500/20 to-transparent rounded-3xl blur-2xl transform rotate-3"></div>
                <img src="assets/images/ABOUT PAGE.png" alt="E7 Innovation" class="relative z-10 w-full h-auto rounded-3xl shadow-2xl border border-white/10 object-cover aspect-[4/3]" onerror="this.src='https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=1000';">
            </div>
        </div>
    </div>
</section>

<!-- ==============================================
     BENTO BOX: VISION, MISSION, PROMISE
     ============================================== -->
<section class="py-24 bg-slate-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-cyan-500 font-bold tracking-wide uppercase text-sm mb-3">Our Core Philosophy</h2>
            <h3 class="text-4xl font-extrabold text-navy-900 mb-6">The framework driving our innovation.</h3>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
            <!-- Vision -->
            <div class="bg-white rounded-[2rem] p-10 md:col-span-2 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 hover:shadow-[0_8px_30px_rgba(0,242,254,0.1)] transition-all duration-300">
                <div class="w-14 h-14 rounded-2xl bg-cyan-50 flex items-center justify-center mb-6">
                    <i class="fas fa-eye text-xl text-cyan-500"></i>
                </div>
                <h4 class="text-2xl font-bold text-navy-900 mb-4">Our Vision</h4>
                <p class="text-lg text-slate-600 leading-relaxed font-light">
                    To become one of Africa’s most trusted technology companies, leading the continent’s digital transformation through Artificial Intelligence, impenetrable cybersecurity, and unyielding innovation.
                </p>
            </div>

            <!-- Promise -->
            <div class="bg-navy-900 rounded-[2rem] p-10 shadow-[0_8px_30px_rgba(10,17,40,0.2)] border border-navy-800 hover:shadow-[0_8px_30px_rgba(0,242,254,0.2)] transition-all duration-300 relative overflow-hidden">
                <div class="absolute -bottom-10 -right-10 text-[120px] text-white/5 font-black leading-none pointer-events-none">E7</div>
                <div class="w-14 h-14 rounded-2xl bg-white/10 flex items-center justify-center mb-6 relative z-10">
                    <i class="fas fa-handshake text-xl text-cyan-400"></i>
                </div>
                <h4 class="text-2xl font-bold text-white mb-4 relative z-10">Our Promise</h4>
                <p class="text-lg text-cyan-400 font-semibold mb-2 relative z-10">Trusted Technology.</p>
                <p class="text-lg text-cyan-400 font-semibold relative z-10">Intelligent Transformation.</p>
            </div>

            <!-- Mission -->
            <div class="bg-white rounded-[2rem] p-10 md:col-span-3 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 hover:shadow-[0_8px_30px_rgba(0,242,254,0.1)] transition-all duration-300 flex flex-col md:flex-row gap-10 items-center">
                <div class="w-16 h-16 rounded-2xl bg-cyan-50 flex-shrink-0 flex items-center justify-center">
                    <i class="fas fa-bullseye text-2xl text-cyan-500"></i>
                </div>
                <div>
                    <h4 class="text-2xl font-bold text-navy-900 mb-4">Our Mission</h4>
                    <p class="text-xl text-slate-600 leading-relaxed font-light">
                        To help organizations across Africa become smarter, safer, and more efficient by delivering trusted AI, data pipelines, cybersecurity frameworks, and digital transformation solutions that solve complex, real-world challenges.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==============================================
     LEADERSHIP TEAM
     ============================================== -->
<section id="leadership" class="py-24 bg-white border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-cyan-500 font-bold tracking-wide uppercase text-sm mb-3">Our Leadership</h2>
            <h3 class="text-4xl font-extrabold text-navy-900 mb-6">World-class minds driving digital transformation.</h3>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- CEO -->
            <div class="group">
                <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100 hover:shadow-xl transition-all duration-300 hover:border-cyan-100 h-full">
                    <div class="w-20 h-20 rounded-full bg-navy-900 text-white flex items-center justify-center text-3xl mb-6 shadow-lg group-hover:scale-110 group-hover:bg-cyan-500 transition-all duration-300">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h4 class="text-xl font-bold text-navy-900 mb-1">Dr. Kwame Mensah</h4>
                    <p class="text-cyan-500 font-semibold text-sm mb-4">Chief Executive Officer</p>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6">20+ years in technology leadership, specializing in AI and digital transformation. Former executive at leading global tech firms.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full bg-slate-200 text-slate-700 text-xs font-semibold">AI Strategy</span>
                        <span class="px-3 py-1 rounded-full bg-slate-200 text-slate-700 text-xs font-semibold">Leadership</span>
                    </div>
                </div>
            </div>
            
            <!-- CTO -->
            <div class="group">
                <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100 hover:shadow-xl transition-all duration-300 hover:border-cyan-100 h-full">
                    <div class="w-20 h-20 rounded-full bg-navy-900 text-white flex items-center justify-center text-3xl mb-6 shadow-lg group-hover:scale-110 group-hover:bg-cyan-500 transition-all duration-300">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h4 class="text-xl font-bold text-navy-900 mb-1">Amina Osei</h4>
                    <p class="text-cyan-500 font-semibold text-sm mb-4">Chief Technology Officer</p>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6">Expert in cloud architecture and cybersecurity with 15+ years building enterprise systems. AWS & Azure certified architect.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full bg-slate-200 text-slate-700 text-xs font-semibold">Cloud Architecture</span>
                        <span class="px-3 py-1 rounded-full bg-slate-200 text-slate-700 text-xs font-semibold">Security</span>
                    </div>
                </div>
            </div>

            <!-- CDO -->
            <div class="group">
                <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100 hover:shadow-xl transition-all duration-300 hover:border-cyan-100 h-full">
                    <div class="w-20 h-20 rounded-full bg-navy-900 text-white flex items-center justify-center text-3xl mb-6 shadow-lg group-hover:scale-110 group-hover:bg-cyan-500 transition-all duration-300">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h4 class="text-xl font-bold text-navy-900 mb-1">Emmanuel Addo</h4>
                    <p class="text-cyan-500 font-semibold text-sm mb-4">Chief Data Officer</p>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6">Data science pioneer with expertise in machine learning and predictive analytics. PhD in Computer Science.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full bg-slate-200 text-slate-700 text-xs font-semibold">Data Science</span>
                        <span class="px-3 py-1 rounded-full bg-slate-200 text-slate-700 text-xs font-semibold">ML/AI</span>
                    </div>
                </div>
            </div>

            <!-- VP Cyber -->
            <div class="group">
                <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100 hover:shadow-xl transition-all duration-300 hover:border-cyan-100 h-full">
                    <div class="w-20 h-20 rounded-full bg-navy-900 text-white flex items-center justify-center text-3xl mb-6 shadow-lg group-hover:scale-110 group-hover:bg-cyan-500 transition-all duration-300">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h4 class="text-xl font-bold text-navy-900 mb-1">Sarah Owusu</h4>
                    <p class="text-cyan-500 font-semibold text-sm mb-4">VP of Cybersecurity</p>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6">Certified security expert protecting critical infrastructure. CISSP & CEH certified with global risk management experience.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full bg-slate-200 text-slate-700 text-xs font-semibold">Cybersecurity</span>
                        <span class="px-3 py-1 rounded-full bg-slate-200 text-slate-700 text-xs font-semibold">Compliance</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==============================================
     CTA
     ============================================== -->
<section class="py-20 bg-navy-900 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/10 to-transparent"></div>
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
        <h2 class="text-4xl font-extrabold text-white mb-6">Ready to Transform Your Organization?</h2>
        <p class="text-xl text-slate-300 mb-10 font-light">Join the 200+ enterprise clients who trust E7 Technology Solutions.</p>
        <a href="contact.php" class="inline-block px-10 py-5 rounded-full bg-gradient-to-r from-cyan-500 to-cyan-400 text-navy-900 font-bold text-lg hover:shadow-[0_0_30px_rgba(0,242,254,0.4)] transition-all duration-300 hover:-translate-y-1">
            Get Started Today <i class="fas fa-arrow-right ml-2"></i>
        </a>
    </div>
</section>

<?php include 'footer.php'; ?>
