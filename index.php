<?php 
$page_title = "Trusted Technology, Intelligent Transformation";
$meta_description = "E7 Technology Solutions helps organizations across Africa become smarter, safer, and highly efficient through Artificial Intelligence, Cybersecurity, and Cloud Solutions.";
include 'header.php'; 
?>

<!-- ==============================================
     HERO SECTION (Single High-Impact Static Hero)
     ============================================== -->
<style>
@keyframes heroFadeUp {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
}
.hero-reveal { opacity: 0; animation: heroFadeUp 0.9s cubic-bezier(0.16,1,0.3,1) forwards; }
.hero-delay-1 { animation-delay: 80ms; }
.hero-delay-2 { animation-delay: 180ms; }
.hero-delay-3 { animation-delay: 280ms; }
.hero-delay-4 { animation-delay: 420ms; }
</style>

<section class="pt-24 md:pt-40 pb-0 bg-white relative overflow-hidden z-0">
    <!-- Subtle ambient glow -->
    <div class="absolute top-[-15%] left-1/2 -translate-x-1/2 w-[900px] h-[500px] bg-brand-blue/8 blur-[120px] rounded-full -z-10 pointer-events-none"></div>

    <div class="max-w-6xl mx-auto px-4 text-center relative z-10 flex flex-col items-center">



        <!-- Headline -->
        <h1 class="hero-reveal hero-delay-1 text-5xl md:text-[5.5rem] lg:text-[6.5rem] font-black text-slate-900 tracking-tighter mb-6 leading-[1.02] max-w-5xl">
            Smarter. Safer.<br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue to-cyan-500">More Efficient.</span>
        </h1>

        <!-- Subtext -->
        <p class="hero-reveal hero-delay-2 text-lg md:text-2xl text-slate-500 mb-12 max-w-2xl font-light leading-relaxed tracking-tight">
            E7 Technology Solutions helps organizations across Africa transform with advanced AI, Enterprise Cybersecurity, and Custom Software Development — built for the real world.
        </p>

        <!-- Dual CTAs -->
        <div class="hero-reveal hero-delay-3 flex flex-col sm:flex-row items-center justify-center gap-4 mb-14 w-full sm:w-auto">
            <a href="solutions" class="w-full sm:w-auto px-6 py-3.5 sm:px-8 sm:py-4 rounded-xl bg-slate-900 text-white font-semibold tracking-tight hover:bg-slate-800 transition-all shadow-[0_10px_40px_rgba(0,0,0,0.18)] hover:shadow-[0_15px_50px_rgba(0,0,0,0.28)] hover:-translate-y-0.5">
                Explore Our Solutions
            </a>
            <a href="contact" class="w-full sm:w-auto px-6 py-3.5 sm:px-8 sm:py-4 rounded-xl bg-white text-slate-700 font-semibold tracking-tight hover:bg-slate-50 transition-all border border-slate-200 shadow-sm hover:shadow-md">
                <i class="fas fa-calendar-alt text-brand-blue mr-2"></i>Book a Free Strategy Call
            </a>
        </div>

        <!-- Stats Bar -->
        <div class="hero-reveal hero-delay-4 grid grid-cols-2 md:grid-cols-4 divide-y md:divide-y-0 md:divide-x divide-slate-200 border border-slate-200 rounded-2xl bg-slate-50/80 backdrop-blur mb-20 shadow-sm w-full md:w-auto">
            <div class="p-4 md:px-8 md:py-4 text-center">
                <div class="text-2xl font-black text-slate-900 tracking-tighter">50+</div>
                <div class="text-[10px] font-bold text-slate-500 uppercase tracking-[0.15em] mt-0.5">Organizations Served</div>
            </div>
            <div class="p-4 md:px-8 md:py-4 text-center">
                <div class="text-2xl font-black text-slate-900 tracking-tighter">3</div>
                <div class="text-[10px] font-bold text-slate-500 uppercase tracking-[0.15em] mt-0.5">Flagship Platforms</div>
            </div>
            <div class="p-4 md:px-8 md:py-4 text-center">
                <div class="text-2xl font-black text-slate-900 tracking-tighter">99.9%</div>
                <div class="text-[10px] font-bold text-slate-500 uppercase tracking-[0.15em] mt-0.5">Uptime Guaranteed</div>
            </div>
            <div class="p-4 md:px-8 md:py-4 text-center">
                <div class="text-2xl font-black text-slate-900 tracking-tighter">5+</div>
                <div class="text-[10px] font-bold text-slate-500 uppercase tracking-[0.15em] mt-0.5">Years in Africa</div>
            </div>
        </div>

    </div>
</section>







<!-- ==============================================
     CLIENT LOGOS (Social Proof Marquee)
     ============================================== -->
<style>
@keyframes infinite-scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
.animate-infinite-scroll {
    animation: infinite-scroll 40s linear infinite;
    width: max-content;
}
.animate-infinite-scroll:hover {
    animation-play-state: paused;
}
</style>
<section class="py-16 bg-white border-b border-slate-200 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-12">
        <p class="text-sm font-semibold text-slate-500 uppercase tracking-wider">Trusted by innovative enterprise organizations</p>
    </div>
    
    <div class="relative w-full overflow-hidden">
        <div class="flex w-max animate-infinite-scroll">
            
            <!-- ================= HALF 1 ================= -->
            <div class="flex items-center gap-16 md:gap-24 pr-16 md:pr-24">
                <!-- Group A -->
                <img src="assets/images/logos/cardinal%20business.webp" alt="Cardinal Business" class="h-14 md:h-24 object-contain">
                <img src="assets/images/logos/cardinal%20security.webp" alt="Cardinal Security" class="h-14 md:h-24 object-contain">
                <img src="assets/images/logos/cce%20consut.png" alt="CCE Consult" class="h-14 md:h-24 object-contain">
                <img src="assets/images/logos/cce.webp" alt="CCE" class="h-14 md:h-24 object-contain">
                <img src="assets/images/logos/salba.webp" alt="Salba" class="h-14 md:h-24 object-contain">
                <img src="assets/images/logos/dnr.webp" alt="DNR" class="h-14 md:h-24 object-contain">
                
                <!-- Group B -->
                <img src="assets/images/logos/cardinal%20business.webp" alt="Cardinal Business" class="h-14 md:h-24 object-contain">
                <img src="assets/images/logos/cardinal%20security.webp" alt="Cardinal Security" class="h-14 md:h-24 object-contain">
                <img src="assets/images/logos/cce%20consut.png" alt="CCE Consult" class="h-14 md:h-24 object-contain">
                <img src="assets/images/logos/cce.webp" alt="CCE" class="h-14 md:h-24 object-contain">
                <img src="assets/images/logos/salba.webp" alt="Salba" class="h-14 md:h-24 object-contain">
                <img src="assets/images/logos/dnr.webp" alt="DNR" class="h-14 md:h-24 object-contain">
            </div>

            <!-- ================= HALF 2 (Exact Duplicate) ================= -->
            <div class="flex items-center gap-16 md:gap-24 pr-16 md:pr-24">
                <!-- Group A -->
                <img src="assets/images/logos/cardinal%20business.webp" alt="Cardinal Business" class="h-14 md:h-24 object-contain">
                <img src="assets/images/logos/cardinal%20security.webp" alt="Cardinal Security" class="h-14 md:h-24 object-contain">
                <img src="assets/images/logos/cce%20consut.png" alt="CCE Consult" class="h-14 md:h-24 object-contain">
                <img src="assets/images/logos/cce.webp" alt="CCE" class="h-14 md:h-24 object-contain">
                <img src="assets/images/logos/salba.webp" alt="Salba" class="h-14 md:h-24 object-contain">
                <img src="assets/images/logos/dnr.webp" alt="DNR" class="h-14 md:h-24 object-contain">
                
                <!-- Group B -->
                <img src="assets/images/logos/cardinal%20business.webp" alt="Cardinal Business" class="h-14 md:h-24 object-contain">
                <img src="assets/images/logos/cardinal%20security.webp" alt="Cardinal Security" class="h-14 md:h-24 object-contain">
                <img src="assets/images/logos/cce%20consut.png" alt="CCE Consult" class="h-14 md:h-24 object-contain">
                <img src="assets/images/logos/cce.webp" alt="CCE" class="h-14 md:h-24 object-contain">
                <img src="assets/images/logos/salba.webp" alt="Salba" class="h-14 md:h-24 object-contain">
                <img src="assets/images/logos/dnr.webp" alt="DNR" class="h-14 md:h-24 object-contain">
            </div>
            
        </div>
    </div>
</section>



<!-- ==============================================
     FLAGSHIP SOLUTIONS
     ============================================== -->

<section class="py-16 md:py-24 bg-[#FAFAFA] border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-5xl font-black text-slate-900 tracking-tighter mb-5 leading-[1.1]">One partner.<br>Every technology need.</h2>
            <p class="text-base md:text-lg text-slate-500 font-light leading-relaxed">Whether you need to secure your systems, make smarter decisions with data, or build world-class software — E7 has a solution purpose-built for you.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- E7Shield -->
            <a href="solutions/e7shield" class="group bg-white border border-slate-200 rounded-3xl p-6 md:p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col">
                <div class="w-14 h-14 rounded-2xl bg-slate-100 flex items-center justify-center mb-6 group-hover:bg-slate-900 transition-all duration-300">
                    <i class="fas fa-shield-alt text-2xl text-slate-600 group-hover:text-white transition-all duration-300"></i>
                </div>
                <div class="text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em] mb-2">Cybersecurity</div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight mb-3">E7Shield™</h3>
                <p class="text-slate-500 text-sm leading-relaxed flex-1 mb-6">Protect your organization, data, and reputation. From risk assessments to zero-trust architecture, we keep you secure against any threat.</p>
                <div class="flex items-center gap-2 text-brand-blue font-semibold text-sm">
                    Protect Your Business <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                </div>
            </a>

            <!-- E7Insight (Dark Highlighted) -->
            <a href="solutions/e7insight" class="group bg-slate-900 border border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-[0_20px_40px_-15px_rgba(0,0,0,0.3)] hover:-translate-y-1 transition-all duration-300 flex flex-col relative overflow-hidden">
                <div class="absolute top-0 right-0 w-48 h-48 bg-brand-blue/20 rounded-full blur-3xl pointer-events-none"></div>
                <div class="w-14 h-14 rounded-2xl bg-white/10 border border-white/20 flex items-center justify-center mb-6 relative z-10">
                    <i class="fas fa-brain text-2xl text-white"></i>
                </div>
                <div class="text-[10px] font-bold text-brand-blue uppercase tracking-[0.2em] mb-2 relative z-10">AI & Data</div>
                <h3 class="text-2xl font-black text-white tracking-tight mb-3 relative z-10">E7Insight™</h3>
                <p class="text-slate-400 text-sm leading-relaxed flex-1 mb-6 relative z-10">Stop guessing. Start knowing. Turn your raw data into powerful business intelligence and automated decision-making that drives real ROI.</p>
                <div class="flex items-center gap-2 text-brand-blue font-semibold text-sm relative z-10">
                    Unlock Your Data <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                </div>
            </a>

            <!-- E7Build -->
            <a href="solutions/e7build" class="group bg-white border border-slate-200 rounded-3xl p-6 md:p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col">
                <div class="w-14 h-14 rounded-2xl bg-slate-100 flex items-center justify-center mb-6 group-hover:bg-slate-900 transition-all duration-300">
                    <i class="fas fa-laptop-code text-2xl text-slate-600 group-hover:text-white transition-all duration-300"></i>
                </div>
                <div class="text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em] mb-2">Software & Digital</div>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight mb-3">E7Build™</h3>
                <p class="text-slate-500 text-sm leading-relaxed flex-1 mb-6">From school management systems to enterprise platforms — we design, build, and deploy software that transforms how your organization operates.</p>
                <div class="flex items-center gap-2 text-brand-blue font-semibold text-sm">
                    Build Your Future <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                </div>
            </a>
            
        </div>
    </div>
</section>



<!-- ==============================================
     WHY E7 (Icon-Led Capabilities)
     ============================================== -->
<section class="py-24 bg-white border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tighter mb-5">Powered by elite expertise.</h2>
            <p class="text-lg text-slate-500 font-light max-w-2xl mx-auto">10 core capabilities. One trusted partner. Built to solve real-world challenges across Africa.</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 text-center hover:shadow-md hover:bg-white transition-all">
                <i class="fas fa-brain text-brand-blue text-2xl mb-3"></i>
                <div class="font-bold text-slate-800 text-sm tracking-tight">Artificial Intelligence</div>
            </div>
            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 text-center hover:shadow-md hover:bg-white transition-all">
                <i class="fas fa-chart-bar text-brand-blue text-2xl mb-3"></i>
                <div class="font-bold text-slate-800 text-sm tracking-tight">Data Analytics</div>
            </div>
            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 text-center hover:shadow-md hover:bg-white transition-all">
                <i class="fas fa-shield-alt text-brand-blue text-2xl mb-3"></i>
                <div class="font-bold text-slate-800 text-sm tracking-tight">Cybersecurity</div>
            </div>
            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 text-center hover:shadow-md hover:bg-white transition-all">
                <i class="fas fa-code text-brand-blue text-2xl mb-3"></i>
                <div class="font-bold text-slate-800 text-sm tracking-tight">Software Development</div>
            </div>
            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 text-center hover:shadow-md hover:bg-white transition-all">
                <i class="fas fa-mobile-alt text-brand-blue text-2xl mb-3"></i>
                <div class="font-bold text-slate-800 text-sm tracking-tight">Web & Mobile Apps</div>
            </div>
            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 text-center hover:shadow-md hover:bg-white transition-all">
                <i class="fas fa-school text-brand-blue text-2xl mb-3"></i>
                <div class="font-bold text-slate-800 text-sm tracking-tight">School & Enterprise Systems</div>
            </div>
            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 text-center hover:shadow-md hover:bg-white transition-all">
                <i class="fas fa-cloud text-brand-blue text-2xl mb-3"></i>
                <div class="font-bold text-slate-800 text-sm tracking-tight">Cloud & Integration</div>
            </div>
            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 text-center hover:shadow-md hover:bg-white transition-all">
                <i class="fas fa-lightbulb text-brand-blue text-2xl mb-3"></i>
                <div class="font-bold text-slate-800 text-sm tracking-tight">Digital Consulting</div>
            </div>
            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 text-center hover:shadow-md hover:bg-white transition-all">
                <i class="fas fa-headset text-brand-blue text-2xl mb-3"></i>
                <div class="font-bold text-slate-800 text-sm tracking-tight">Managed Tech Services</div>
            </div>
            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 text-center hover:shadow-md hover:bg-white transition-all">
                <i class="fas fa-graduation-cap text-brand-blue text-2xl mb-3"></i>
                <div class="font-bold text-slate-800 text-sm tracking-tight">Tech Training</div>
            </div>
        </div>
    </div>
</section>

<!-- ==============================================
     FINAL CTA (Cinematic Dark)
     ============================================== -->
<section class="py-20 md:py-32 bg-slate-950 text-white text-center relative overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[400px] bg-brand-blue/20 rounded-[100%] blur-[100px] pointer-events-none"></div>
    <div class="max-w-4xl mx-auto px-4 relative z-10 flex flex-col items-center">
        <h2 class="text-4xl md:text-7xl font-black mb-8 tracking-tighter leading-tight">Ready to transform<br class="hidden md:block">your organization?</h2>
        <p class="text-lg md:text-xl text-slate-400 mb-12 font-light max-w-2xl mx-auto tracking-tight leading-relaxed">Join 50+ organizations across Africa that trust E7 to protect, empower, and grow their operations with trusted technology.</p>
        <div class="flex flex-col sm:flex-row gap-4 items-center w-full sm:w-auto">
            <a href="contact" class="w-full sm:w-auto justify-center inline-flex items-center gap-3 px-6 py-4 md:px-10 md:py-5 rounded-2xl bg-white text-slate-950 text-lg md:text-xl font-bold hover:bg-slate-100 transition-all tracking-tight shadow-[0_0_40px_rgba(255,255,255,0.08)] hover:shadow-[0_0_60px_rgba(255,255,255,0.15)]">
                Book a Free Strategy Call <i class="fas fa-arrow-right text-brand-blue"></i>
            </a>
            <a href="solutions" class="w-full sm:w-auto justify-center inline-flex items-center gap-3 px-6 py-4 md:px-8 md:py-5 rounded-2xl border border-white/20 text-white font-semibold hover:bg-white/10 transition-all tracking-tight text-base md:text-lg">
                Explore Our Solutions
            </a>
        </div>
    </div>
</section>



<?php include 'footer.php'; ?>


