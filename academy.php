<?php
$page_title = "E7 Academy - Professional Tech Training & Upskilling";
$meta_description = "Africa's premier technology institute. We empower individuals and enterprises with production-ready skills in Artificial Intelligence, Cybersecurity, and Cloud Architecture.";
$assetBasePath = 'assets';
$navBasePath = '';
include('header.php');

$courses = [
    [
        'title' => 'AI & Machine Learning',
        'desc' => 'Engineer neural networks and deploy predictive language models. Master Python, TensorFlow, and MLOps.',
        'image' => 'solutions/InsightAIPageHero.png',
        'badge' => 'High Demand',
        'badge_color' => 'bg-brand-blue',
        'duration' => '12 Weeks',
        'link' => 'contact.php'
    ],
    [
        'title' => 'Cybersecurity & Ethical Hacking',
        'desc' => 'Master penetration testing, threat hunting, and SOC operations. Prepares you for CEH and CISSP certifications.',
        'image' => 'solutions/SecureShieldHero.png',
        'badge' => '',
        'badge_color' => '',
        'duration' => '10 Weeks',
        'link' => 'contact.php'
    ],
    [
        'title' => 'Cloud Solutions Architect',
        'desc' => 'Orchestrate AWS and Azure environments. Learn Infrastructure-as-Code (Terraform) and serverless deployment.',
        'image' => 'sliders/slide5.png',
        'badge' => '',
        'badge_color' => '',
        'duration' => '8 Weeks',
        'link' => 'contact.php'
    ],
    [
        'title' => 'Full Stack Engineering',
        'desc' => 'Build enterprise-grade web applications. Master React, Node.js, microservices architecture, and scalable databases.',
        'image' => 'solutions/SecureCorePageHero.png',
        'badge' => '',
        'badge_color' => '',
        'duration' => '14 Weeks',
        'link' => 'contact.php'
    ],
    [
        'title' => 'Data Science & BI',
        'desc' => 'Transform raw data into business intelligence. Master SQL, advanced statistical modeling, and Tableau visualization.',
        'image' => 'sliders/slide3.png',
        'badge' => '',
        'badge_color' => '',
        'duration' => '10 Weeks',
        'link' => 'contact.php'
    ],
    [
        'title' => 'DevOps & CI/CD Pipeline',
        'desc' => 'Automate deployment workflows. Master Docker containerization, Kubernetes orchestration, and Jenkins pipelines.',
        'image' => 'sliders/slide6.png',
        'badge' => '',
        'badge_color' => '',
        'duration' => '8 Weeks',
        'link' => 'contact.php'
    ]
];
?>

<!-- HERO SECTION -->
<section class="pt-32 pb-20 lg:pt-32 lg:pb-32 bg-white overflow-hidden border-b border-slate-100 relative min-h-[37.5rem] flex items-center">
    <div class="relative w-full max-w-7xl mx-auto h-full px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 w-full items-center">
            <div class="max-w-2xl" data-aos="fade-right">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-blue-50 border border-blue-100 mb-6">
                    <i class="fas fa-graduation-cap text-brand-blue text-xs"></i>
                    <span class="text-brand-blue text-xs font-semibold uppercase tracking-wide">E7 Academy</span>
                </div>
                
                <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 tracking-tight leading-[1.1] mb-6">
                    Elite Talent.<br>
                    <span class="text-brand-blue">Global Capability.</span>
                </h1>
                
                <p class="text-xl text-slate-500 leading-relaxed max-w-3xl mb-8">
                    Africa's premier technology institute. We empower individuals and enterprises with production-ready skills in Artificial Intelligence, Cybersecurity, and Cloud Architecture.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#programs" class="px-8 py-4 rounded bg-brand-blue text-white font-bold text-center hover:bg-blue-700 transition-colors shadow-sm">Explore Curriculum</a>
                </div>
            </div>
            <div class="relative hidden lg:flex items-center justify-center h-full" data-aos="fade-left" data-aos-delay="200">
                <img src="assets/images/sliders/slide7.png" alt="E7 Academy Students" class="w-full max-w-lg rounded-xl shadow-[0_20px_50px_rgba(0,0,0,0.15)] relative z-10 transform lg:translate-x-12">
                <div class="absolute top-10 right-0 w-64 h-64 bg-blue-50 rounded-full blur-3xl -z-10"></div>
            </div>
        </div>
    </div>
</section>

<!-- WHO WE SERVE (Highly Visual Split) -->
<section class="py-24 bg-slate-50 border-b border-slate-200 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="text-brand-blue font-bold tracking-wide uppercase text-sm mb-4 block">Who We Serve</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-slate-900 mb-6">Built for scale. Designed for you.</h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <!-- Individual Professionals -->
            <div class="group relative bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-200 hover:shadow-xl transition-all duration-300 flex flex-col h-full" data-aos="fade-up" data-aos-delay="100">
                <div class="h-64 overflow-hidden relative">
                    <img src="assets/images/sliders/slide4.png" alt="Individual Training" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-white via-white/50 to-transparent"></div>
                </div>
                
                <div class="p-10 pt-0 relative z-10 flex-1 flex flex-col">
                    <div class="w-16 h-16 bg-white rounded-2xl shadow-md flex items-center justify-center border border-slate-100 text-brand-blue text-2xl mb-6 -mt-8 relative z-20">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-slate-900 mb-4">Individual Professionals</h3>
                    <p class="text-slate-600 mb-8 font-medium text-lg flex-1">Accelerate your career trajectory with industry-recognized certifications and rigorous, project-based engineering portfolios.</p>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3 text-slate-700 font-medium">
                            <i class="fas fa-check-circle text-brand-blue mt-1"></i> Career Switchers & Graduates
                        </li>
                        <li class="flex items-start gap-3 text-slate-700 font-medium">
                            <i class="fas fa-check-circle text-brand-blue mt-1"></i> Senior Developer Upskilling
                        </li>
                        <li class="flex items-start gap-3 text-slate-700 font-medium">
                            <i class="fas fa-check-circle text-brand-blue mt-1"></i> Tech Leadership Development
                        </li>
                    </ul>

                    <a href="contact" class="w-full text-center py-4 rounded bg-slate-100 text-slate-900 font-bold hover:bg-brand-blue hover:text-white transition-colors">
                        Start Your Journey
                    </a>
                </div>
            </div>

            <!-- Corporate & Enterprise -->
            <div class="group relative bg-brand-blue rounded-2xl overflow-hidden shadow-md border-2 border-brand-blue hover:shadow-2xl transition-all duration-300 flex flex-col h-full" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute top-4 right-4 bg-white text-brand-blue text-[0.625rem] font-bold uppercase tracking-wider px-3 py-1 rounded-full z-20 shadow-sm">Enterprise Preferred</div>
                
                <div class="h-64 overflow-hidden relative">
                    <img src="assets/images/sliders/slide1.png" alt="Corporate Training" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 opacity-90 mix-blend-overlay">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-blue via-brand-blue/80 to-transparent"></div>
                </div>
                
                <div class="p-10 pt-0 relative z-10 flex-1 flex flex-col">
                    <div class="w-16 h-16 bg-white rounded-2xl shadow-md flex items-center justify-center text-brand-blue text-2xl mb-6 -mt-8 relative z-20">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-white mb-4">Corporate Capacity Building</h3>
                    <p class="text-blue-100 mb-8 font-medium text-lg flex-1">Deploy bespoke upskilling frameworks to close internal skill gaps and accelerate your organization's digital transformation initiatives.</p>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3 text-white font-medium">
                            <i class="fas fa-check-circle text-white mt-1"></i> Customized Curriculum Design
                        </li>
                        <li class="flex items-start gap-3 text-white font-medium">
                            <i class="fas fa-check-circle text-white mt-1"></i> Dedicated Enterprise Instructors
                        </li>
                        <li class="flex items-start gap-3 text-white font-medium">
                            <i class="fas fa-check-circle text-white mt-1"></i> Corporate Volume Licensing
                        </li>
                    </ul>

                    <a href="contact" class="w-full text-center py-4 rounded bg-white text-brand-blue font-bold hover:bg-slate-100 transition-colors shadow-sm">
                        Request Corporate Proposal
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- OUR PROGRAMS (Visual Grid) -->
<section id="programs" class="py-24 bg-white border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="text-brand-blue font-bold tracking-wide uppercase text-sm mb-4 block">Curriculum</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-slate-900 mb-6">Industry-Validated Tracks</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <?php foreach($courses as $index => $course): ?>
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-200 hover:shadow-xl transition-all duration-300 flex flex-col group" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                <div class="h-48 bg-slate-100 relative overflow-hidden">
                    <img src="assets/images/<?php echo $course['image']; ?>" alt="<?php echo htmlspecialchars($course['title']); ?>" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <?php if(!empty($course['badge'])): ?>
                    <div class="absolute top-4 left-4 <?php echo $course['badge_color']; ?> text-white text-[0.625rem] font-bold uppercase tracking-wider px-3 py-1 rounded-full z-10"><?php echo htmlspecialchars($course['badge']); ?></div>
                    <?php endif; ?>
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <h3 class="text-2xl font-bold text-slate-900 mb-3"><?php echo htmlspecialchars($course['title']); ?></h3>
                    <p class="text-sm text-slate-500 mb-6 flex-1"><?php echo htmlspecialchars($course['desc']); ?></p>
                    <div class="flex items-center justify-between pt-6 border-t border-slate-100">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider"><i class="fas fa-clock mr-1"></i> <?php echo htmlspecialchars($course['duration']); ?></span>
                        <a href="<?php echo htmlspecialchars($course['link']); ?>" class="text-brand-blue font-bold hover:underline">Enroll <i class="fas fa-arrow-right text-xs"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="py-24 bg-slate-50 text-center" data-aos="zoom-in">
    <div class="max-w-3xl mx-auto px-4">
        <h2 class="text-4xl font-extrabold text-slate-900 mb-6">Begin Your Engineering Journey</h2>
        <p class="text-xl text-slate-500 mb-10">Admissions are highly selective. Speak with our Academy Directors to align your career objectives with our technical curriculum.</p>
        
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="contact" class="px-8 py-4 rounded bg-brand-blue text-white font-bold text-lg hover:bg-blue-700 transition-colors shadow-sm">
                Request Interview
            </a>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>


