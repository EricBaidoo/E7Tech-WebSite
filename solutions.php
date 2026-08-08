<?php
$page_title = "Enterprise Solutions | E7 Technology Solutions";
$meta_description = "Three heavily integrated engineering platforms designed for enterprise environments. We replace fragmented IT with a unified architecture of Cybersecurity, Artificial Intelligence, and Cloud Software Engineering.";
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
            <i class="fas fa-layer-group text-brand-blue text-xs"></i>
            <span class="text-slate-600 text-xs font-bold uppercase tracking-wide">The E7 Ecosystem</span>
        </div>
        
        <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 tracking-tight mb-8 leading-[1.1]">
            Secure Perimeter.<br>
            Governed Data.<br>
            <span class="text-brand-blue">Infinite Scale.</span>
        </h1>
        
        <p class="text-xl text-slate-600 leading-relaxed max-w-3xl mx-auto">
            Three heavily integrated engineering platforms designed for enterprise environments. We replace fragmented IT with a unified architecture of Cybersecurity (E7Shield™), Artificial Intelligence (E7Insight™), and Cloud Software Engineering (E7Build™).
        </p>
    </div>
</section>

<!-- SOLUTIONS BENTO BOX -->
<section class="py-24 bg-slate-50 relative border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- E7Shield -->
            <div class="group bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-200 hover:shadow-xl transition-all duration-300 flex flex-col relative z-10">
                <div class="h-56 overflow-hidden bg-slate-900 relative flex items-center justify-center">
                    <img src="assets/images/sliders/slide2.png" alt="E7Shield Cybersecurity Architecture" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 opacity-60">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent"></div>
                    <div class="absolute bottom-4 left-6 text-white font-bold tracking-widest uppercase text-xs opacity-50">Infrastructure Security</div>
                </div>
                
                <div class="p-8 flex-1 flex flex-col relative bg-white">
                    <div class="w-14 h-14 rounded-xl bg-slate-900 flex items-center justify-center mb-6 absolute -top-7 right-8 shadow-lg border-2 border-white">
                        <i class="fas fa-shield-check text-2xl text-white"></i>
                    </div>
                    
                    <h3 class="text-3xl font-extrabold text-slate-900 mb-2 group-hover:text-brand-blue transition-colors">E7Shield™</h3>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-6 pb-6 border-b border-slate-100">Zero-Trust Perimeter Defense</p>
                    
                    <p class="text-slate-600 mb-8 flex-1 leading-relaxed">
                        Legacy firewalls cannot protect distributed workforces. E7Shield™ implements strict zero-trust identity architectures, continuous vulnerability scanning, and deep penetration testing to harden your critical assets against sophisticated threat actors.
                    </p>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3 text-sm text-slate-700 font-medium">
                            <i class="fas fa-check-circle text-brand-blue mt-0.5"></i> Comprehensive Vulnerability Audits
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-700 font-medium">
                            <i class="fas fa-check-circle text-brand-blue mt-0.5"></i> Red Team Penetration Testing
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-700 font-medium">
                            <i class="fas fa-check-circle text-brand-blue mt-0.5"></i> Regulatory Compliance (ISO 27001)
                        </li>
                    </ul>
                    
                    <a href="solutions/e7shield" class="w-full block text-center py-4 rounded-xl bg-slate-100 text-slate-900 font-bold group-hover:bg-slate-900 group-hover:text-white transition-all duration-300">
                        Review Security Specs <i class="fas fa-arrow-right ml-2 opacity-50"></i>
                    </a>
                </div>
            </div>

            <!-- E7Insight -->
            <div class="group bg-brand-blue rounded-3xl overflow-hidden shadow-2xl border-4 border-white hover:shadow-blue-900/20 transition-all duration-300 flex flex-col lg:-mt-6 lg:mb-6 relative z-20">
                <div class="absolute top-6 left-6 bg-white text-brand-blue text-[0.625rem] font-black uppercase tracking-widest px-4 py-1.5 rounded-full z-30 shadow-md">Flagship Platform</div>
                
                <div class="h-64 overflow-hidden relative flex items-center justify-center">
                    <img src="assets/images/sliders/slide3.png" alt="E7Insight AI Analytics" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 opacity-80 mix-blend-overlay">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-blue via-brand-blue/80 to-transparent"></div>
                </div>
                
                <div class="p-8 pt-0 flex-1 flex flex-col relative z-20">
                    <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center mb-6 absolute -top-8 right-8 shadow-xl">
                        <i class="fas fa-brain text-2xl text-brand-blue"></i>
                    </div>
                    
                    <h3 class="text-3xl font-extrabold text-white mb-2">E7Insight™</h3>
                    <p class="text-xs font-bold text-blue-200 uppercase tracking-wider mb-6 pb-6 border-b border-blue-400/30">Predictive Data Analytics</p>
                    
                    <p class="text-blue-50 mb-8 flex-1 leading-relaxed">
                        Data without governance is a liability. E7Insight™ centralizes unstructured data into secure enterprise lakes, applying sophisticated machine learning models to extract predictive insights, automate decisions, and render real-time BI dashboards.
                    </p>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3 text-sm text-white font-medium">
                            <i class="fas fa-check-circle text-blue-300 mt-0.5"></i> Custom Machine Learning Pipelines
                        </li>
                        <li class="flex items-start gap-3 text-sm text-white font-medium">
                            <i class="fas fa-check-circle text-blue-300 mt-0.5"></i> Enterprise Data Warehousing
                        </li>
                        <li class="flex items-start gap-3 text-sm text-white font-medium">
                            <i class="fas fa-check-circle text-blue-300 mt-0.5"></i> Algorithmic Business Intelligence
                        </li>
                    </ul>
                    
                    <a href="solutions/e7insight" class="w-full block text-center py-4 rounded-xl bg-white text-brand-blue font-extrabold hover:bg-slate-50 transition-all duration-300 shadow-sm">
                        Deploy Intelligence <i class="fas fa-arrow-right ml-2 opacity-50"></i>
                    </a>
                </div>
            </div>

            <!-- E7Build -->
            <div class="group bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-200 hover:shadow-xl transition-all duration-300 flex flex-col relative z-10">
                <div class="h-56 overflow-hidden bg-slate-900 relative flex items-center justify-center">
                    <img src="assets/images/sliders/slide4.png" alt="E7Build Software Engineering" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 opacity-60">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent"></div>
                    <div class="absolute bottom-4 left-6 text-white font-bold tracking-widest uppercase text-xs opacity-50">Cloud Engineering</div>
                </div>
                
                <div class="p-8 flex-1 flex flex-col relative bg-white">
                    <div class="w-14 h-14 rounded-xl bg-slate-100 flex items-center justify-center mb-6 absolute -top-7 right-8 shadow-lg border-2 border-white">
                        <i class="fas fa-layer-group text-2xl text-slate-700"></i>
                    </div>
                    
                    <h3 class="text-3xl font-extrabold text-slate-900 mb-2 group-hover:text-brand-blue transition-colors">E7Build™</h3>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-6 pb-6 border-b border-slate-100">Bespoke Enterprise Software</p>
                    
                    <p class="text-slate-600 mb-8 flex-1 leading-relaxed">
                        Transition from rigid on-premise hardware to elastic cloud architecture. We orchestrate AWS and Azure environments using advanced Infrastructure-as-Code (IaC), delivering custom software solutions built for massive transaction volumes.
                    </p>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3 text-sm text-slate-700 font-medium">
                            <i class="fas fa-check-circle text-brand-blue mt-0.5"></i> Full-Stack Cloud Native Development
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-700 font-medium">
                            <i class="fas fa-check-circle text-brand-blue mt-0.5"></i> Legacy Systems Modernization
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-700 font-medium">
                            <i class="fas fa-check-circle text-brand-blue mt-0.5"></i> High-Availability API Gateways
                        </li>
                    </ul>
                    
                    <a href="solutions/e7build" class="w-full block text-center py-4 rounded-xl bg-slate-100 text-slate-900 font-bold group-hover:bg-slate-900 group-hover:text-white transition-all duration-300">
                        Architect Software <i class="fas fa-arrow-right ml-2 opacity-50"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- THE E7 DELIVERY MODEL -->
<section class="py-24 bg-white border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-blue font-bold tracking-wide uppercase text-sm mb-4 block">How We Deliver</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-slate-900 mb-6">The Hybrid Delivery Model</h2>
            <p class="text-lg text-slate-500">Every organization is unique. We provide two distinct pathways to deploy our technology, ensuring you get exactly what you need, exactly when you need it.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Ready-to-Deploy -->
            <div class="bg-slate-50 rounded-3xl p-10 border border-slate-200 hover:shadow-xl transition-all duration-300 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-32 h-32 bg-blue-100 rounded-full blur-[3rem] opacity-50 group-hover:bg-brand-blue transition-colors duration-500"></div>
                <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mb-8 shadow-sm relative z-10 border border-slate-100">
                    <span class="text-3xl">📦</span>
                </div>
                <h3 class="text-2xl font-extrabold text-slate-900 mb-4 relative z-10">Ready-to-Deploy Platforms</h3>
                <p class="text-slate-600 mb-6 leading-relaxed relative z-10">Fast, proven, and highly scalable. We deploy our proprietary, pre-built platforms configured perfectly for your immediate operational needs.</p>
                <div class="space-y-3 mb-8 relative z-10">
                    <a href="products/educore" class="flex items-center justify-between p-3 rounded-xl bg-white border border-slate-200 hover:border-brand-blue hover:shadow-md transition-all group/item">
                        <div class="flex items-center gap-3">
                            <span class="text-xl">🎓</span>
                            <div>
                                <div class="font-bold text-slate-900 group-hover/item:text-brand-blue transition-colors text-sm">EduCore</div>
                                <div class="text-[0.625rem] text-slate-500 uppercase tracking-wider">School OS</div>
                            </div>
                        </div>
                        <i class="fas fa-arrow-right text-slate-400 group-hover/item:text-brand-blue transition-colors text-xs"></i>
                    </a>
                    <a href="products/faithos" class="flex items-center justify-between p-3 rounded-xl bg-white border border-slate-200 hover:border-brand-blue hover:shadow-md transition-all group/item">
                        <div class="flex items-center gap-3">
                            <span class="text-xl">⛪</span>
                            <div>
                                <div class="font-bold text-slate-900 group-hover/item:text-brand-blue transition-colors text-sm">FaithOS</div>
                                <div class="text-[0.625rem] text-slate-500 uppercase tracking-wider">Church OS</div>
                            </div>
                        </div>
                        <i class="fas fa-arrow-right text-slate-400 group-hover/item:text-brand-blue transition-colors text-xs"></i>
                    </a>
                    <a href="products/lms" class="flex items-center justify-between p-3 rounded-xl bg-white border border-slate-200 hover:border-brand-blue hover:shadow-md transition-all group/item">
                        <div class="flex items-center gap-3">
                            <span class="text-xl">📚</span>
                            <div>
                                <div class="font-bold text-slate-900 group-hover/item:text-brand-blue transition-colors text-sm">E7 LMS</div>
                                <div class="text-[0.625rem] text-slate-500 uppercase tracking-wider">Learning OS</div>
                            </div>
                        </div>
                        <i class="fas fa-arrow-right text-slate-400 group-hover/item:text-brand-blue transition-colors text-xs"></i>
                    </a>
                    <a href="products/luke7" class="flex items-center justify-between p-3 rounded-xl bg-white border border-slate-200 hover:border-brand-blue hover:shadow-md transition-all group/item">
                        <div class="flex items-center gap-3">
                            <span class="text-xl">📽️</span>
                            <div>
                                <div class="font-bold text-slate-900 group-hover/item:text-brand-blue transition-colors text-sm">Luke7</div>
                                <div class="text-[0.625rem] text-slate-500 uppercase tracking-wider">AI Church Presentation</div>
                            </div>
                        </div>
                        <i class="fas fa-arrow-right text-slate-400 group-hover/item:text-brand-blue transition-colors text-xs"></i>
                    </a>
                </div>
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 text-brand-blue text-xs font-bold uppercase tracking-widest relative z-10 border border-blue-100">
                    Best for: Rapid Deployment
                </div>
            </div>

            <!-- Bespoke Engineering -->
            <div class="bg-slate-50 rounded-3xl p-10 border border-slate-200 hover:shadow-xl transition-all duration-300 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-32 h-32 bg-slate-200 rounded-full blur-[3rem] opacity-50 group-hover:bg-slate-400 transition-colors duration-500"></div>
                <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mb-8 shadow-sm relative z-10 border border-slate-100">
                    <span class="text-3xl">🛠️</span>
                </div>
                <h3 class="text-2xl font-extrabold text-slate-900 mb-4 relative z-10">Bespoke Engineering</h3>
                <p class="text-slate-600 mb-6 leading-relaxed relative z-10">Got a complex, unique challenge? Our expert architects and developers will build a custom software solution from the ground up, tailored perfectly to your highly specialized workflows and exact business logic.</p>
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-slate-200 text-slate-700 text-xs font-bold uppercase tracking-widest relative z-10 border border-slate-300">
                    Best for: Unique Complex Workflows
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CAPABILITIES -->
<section id="capabilities" class="py-24 bg-white border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-blue font-bold tracking-wide uppercase text-sm mb-4 block">The Sub-Systems</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-slate-900">10 Core Engineering Capabilities</h2>
            <p class="text-lg text-slate-500 mt-6">Our three flagship platforms are powered by deep, highly specialized technical competencies. We maintain dedicated practice leads for each of the following capabilities.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <?php
            $capabilities = [
                ['icon' => 'fa-robot', 'title' => 'Artificial Intelligence'],
                ['icon' => 'fa-chart-pie', 'title' => 'Data Analytics & Business Intelligence'],
                ['icon' => 'fa-lock', 'title' => 'Cybersecurity'],
                ['icon' => 'fa-code', 'title' => 'Software Development'],
                ['icon' => 'fa-mobile-alt', 'title' => 'Web & Mobile Application Development'],
                ['icon' => 'fa-building', 'title' => 'School & Enterprise Management Systems'],
                ['icon' => 'fa-cloud', 'title' => 'Cloud Solutions & Systems Integration'],
                ['icon' => 'fa-lightbulb', 'title' => 'Digital Transformation Consulting'],
                ['icon' => 'fa-server', 'title' => 'Managed Technology Services'],
                ['icon' => 'fa-chalkboard-teacher', 'title' => 'Technology Training & Capacity Building']
            ];

            foreach ($capabilities as $cap): ?>
                <div class="bg-white rounded-2xl p-6 border border-slate-200 hover:border-brand-blue hover:shadow-lg hover:-translate-y-1 transition-all duration-300 text-center group cursor-pointer flex flex-col items-center justify-center min-h-[10rem]">
                    <div class="w-14 h-14 rounded-xl bg-slate-50 flex items-center justify-center mb-4 group-hover:bg-brand-blue transition-colors border border-slate-100">
                        <i class="fas <?php echo $cap['icon']; ?> text-slate-400 group-hover:text-white text-2xl transition-colors"></i>
                    </div>
                    <h4 class="text-sm font-extrabold text-slate-700 group-hover:text-slate-900 leading-tight"><?php echo $cap['title']; ?></h4>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-24 bg-slate-900 text-center relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('assets/images/sliders/slide6.png')] opacity-10 bg-cover bg-center mix-blend-overlay"></div>
    <div class="max-w-3xl mx-auto px-4 relative z-10">
        <h2 class="text-4xl font-extrabold text-white mb-6">Require a custom technical architecture?</h2>
        <p class="text-xl text-slate-400 mb-10 font-light">Deploying enterprise technology requires absolute precision. Speak directly with our Lead Engineers to draft a secure, scalable blueprint for your organization.</p>
        <a href="contact" class="inline-block px-10 py-4 rounded-xl bg-brand-blue text-white font-bold text-lg hover:bg-blue-600 transition-colors shadow-lg shadow-brand-blue/20">
            Schedule Architecture Review
        </a>
    </div>
</section>

<?php include('footer.php'); ?>


