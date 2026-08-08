<?php
$page_title = "EduCore - School Operating System | E7 Technology";
$meta_description = "EduCore is a comprehensive, cloud-based School Operating System designed by E7 Technology to automate modern educational institutions.";
include('../header.php');
?>

<!-- WORLD-CLASS SAAS HERO SECTION -->
<section class="pt-32 pb-24 bg-white relative overflow-hidden">
    <!-- Ultra-soft Background Gradients -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none flex justify-center">
        <div class="absolute top-[0%] w-[60rem] h-[30rem] bg-gradient-to-r from-blue-100/50 via-indigo-100/40 to-purple-100/50 blur-[80px] rounded-full opacity-70"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10 text-center flex flex-col items-center">
        <!-- Modern Pill Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-slate-50 text-slate-700 text-xs font-bold tracking-wide mb-8 border border-slate-200/60 shadow-sm hover:shadow-md transition-shadow cursor-default">
            <span class="flex h-2 w-2 relative">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-blue opacity-75"></span>
              <span class="relative inline-flex rounded-full h-2 w-2 bg-brand-blue"></span>
            </span>
            Meet the E7Build Platform
        </div>
        
        <!-- High-Impact Typography -->
        <h1 class="text-5xl md:text-7xl lg:text-[5.5rem] font-extrabold text-slate-900 tracking-tighter mb-8 leading-[1.05] max-w-4xl">
            Run your entire school <br class="hidden md:block">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue via-indigo-600 to-purple-600">from a single dashboard.</span>
        </h1>
        
        <p class="text-xl md:text-2xl text-slate-500 mb-12 max-w-2xl font-light leading-relaxed">
            EduCore is the enterprise-grade operating system for modern African institutions. Automate finance, academics, and HR instantly.
        </p>
        
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-20 w-full sm:w-auto">
            <a href="../contact" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-slate-900 text-white font-bold hover:bg-slate-800 transition-all shadow-xl hover:shadow-2xl hover:-translate-y-0.5">
                Request a Live Demo
            </a>
            <a href="#features" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-white text-slate-700 font-bold hover:bg-slate-50 transition-all border border-slate-200 shadow-sm hover:shadow-md">
                Explore Modules
            </a>
        </div>

        <!-- Seamless Dashboard Image Mockup -->
        <div class="relative w-full max-w-5xl mx-auto">
            <!-- Glow behind image -->
            <div class="absolute inset-0 bg-gradient-to-b from-brand-blue/20 to-transparent blur-3xl opacity-50 rounded-[3rem]"></div>
            
            <div class="relative z-20">
                <img src="<?php echo $assetBasePath; ?>/images/products/educore_dashboard.png" alt="EduCore Dashboard Mockup" class="w-full h-auto rounded-2xl shadow-2xl border border-slate-200/50">
            </div>
            
            <!-- Fade out bottom of image into the next section -->
            <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-white to-transparent z-30"></div>
        </div>
    </div>
</section>

<!-- SOCIAL PROOF LOGO STRIP -->
<section class="py-12 bg-white relative z-40 border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <p class="text-[0.65rem] font-bold text-slate-400 uppercase tracking-[0.2em] mb-8">Trusted by innovative schools across Africa</p>
        <div class="flex flex-wrap justify-center items-center gap-10 md:gap-20 opacity-40 grayscale hover:grayscale-0 transition-all duration-700">
            <div class="text-xl font-bold text-slate-800 tracking-tight">Crescent <span class="text-brand-blue">Academy</span></div>
            <div class="text-xl font-extrabold text-slate-800 tracking-tighter">OAK<span class="font-light">INTERNATIONAL</span></div>
            <div class="text-xl font-serif text-slate-800 italic">St. Peters College</div>
            <div class="text-xl font-black text-slate-800 tracking-tighter">GLOBAL<span class="text-indigo-600">PREP</span></div>
        </div>
    </div>
</section>

<!-- REFINED BENTO BOX FEATURE GRID -->
<section id="features" class="py-32 bg-slate-50/50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="mb-20 text-center md:text-left flex flex-col md:flex-row md:items-end justify-between gap-8">
            <div class="max-w-2xl">
                <h2 class="text-xs font-bold text-brand-blue uppercase tracking-[0.15em] mb-4">Everything You Need</h2>
                <h3 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tighter leading-tight">Stop juggling 5 different apps. Meet the unified OS.</h3>
            </div>
        </div>

        <!-- The Bento Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Bento Item 1: Large Finance -->
            <div class="md:col-span-2 bg-white rounded-[2rem] p-10 border border-slate-200/60 shadow-sm hover:shadow-xl transition-all duration-500 relative overflow-hidden group">
                <div class="absolute -top-32 -right-32 w-96 h-96 bg-green-50 rounded-full blur-3xl group-hover:bg-green-100/80 transition-colors duration-700"></div>
                <div class="relative z-10 h-full flex flex-col">
                    <div class="w-14 h-14 bg-green-50 border border-green-100 rounded-2xl flex items-center justify-center mb-8 text-green-600 shadow-sm">
                        <i class="fas fa-file-invoice-dollar text-2xl"></i>
                    </div>
                    <h4 class="text-3xl font-bold text-slate-900 tracking-tight mb-4">Enterprise Bursary & Finance</h4>
                    <p class="text-slate-500 text-base leading-relaxed mb-8 max-w-lg flex-grow">
                        Eliminate manual ledgers. Generate invoices instantly, track fixed vs class-based fees, manage term budgets, and record payments with zero friction.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-auto">
                        <div class="flex items-center gap-3 bg-slate-50 px-4 py-3 rounded-xl border border-slate-100">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span class="text-sm font-semibold text-slate-700">Digital Receipts</span>
                        </div>
                        <div class="flex items-center gap-3 bg-slate-50 px-4 py-3 rounded-xl border border-slate-100">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span class="text-sm font-semibold text-slate-700">Expense Ledgers</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bento Item 2: Small Attendance -->
            <div class="bg-slate-900 rounded-[2rem] p-10 shadow-xl hover:shadow-2xl transition-all duration-500 relative overflow-hidden group">
                <div class="absolute inset-0 bg-gradient-to-br from-slate-800 to-slate-950 opacity-50"></div>
                <div class="absolute -top-32 -right-32 w-96 h-96 bg-brand-blue/20 rounded-full blur-3xl group-hover:bg-brand-blue/30 transition-colors duration-700"></div>
                <div class="relative z-10 flex flex-col h-full">
                    <div class="w-14 h-14 bg-white/10 border border-white/10 rounded-2xl flex items-center justify-center mb-8 text-white backdrop-blur-md">
                        <i class="fas fa-clock text-2xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-white tracking-tight mb-4">Smart Attendance</h4>
                    <p class="text-slate-400 text-sm leading-relaxed mb-8 flex-grow">
                        Track exact check-in/out times with device location tracking and hardware integrations.
                    </p>
                    <div class="flex flex-col gap-3 mt-auto">
                        <span class="inline-flex items-center text-xs font-bold text-blue-300 uppercase tracking-wider"><i class="fas fa-fingerprint mr-2 text-brand-blue"></i> RFID Ready</span>
                        <span class="inline-flex items-center text-xs font-bold text-blue-300 uppercase tracking-wider"><i class="fas fa-map-marker-alt mr-2 text-brand-blue"></i> GPS Clock-ins</span>
                    </div>
                </div>
            </div>

            <!-- Bento Item 3: Academics -->
            <div class="bg-white rounded-[2rem] p-10 border border-slate-200/60 shadow-sm hover:shadow-xl transition-all duration-500 relative overflow-hidden group">
                <div class="absolute -bottom-24 -right-24 w-64 h-64 bg-blue-50 rounded-full blur-3xl group-hover:bg-blue-100/80 transition-colors duration-700"></div>
                <div class="relative z-10 flex flex-col h-full">
                    <div class="w-14 h-14 bg-blue-50 border border-blue-100 rounded-2xl flex items-center justify-center mb-8 text-brand-blue shadow-sm">
                        <i class="fas fa-book-open text-2xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-slate-900 tracking-tight mb-4">Digital Academics</h4>
                    <p class="text-slate-500 text-sm leading-relaxed mb-4">
                        Empower teachers with digital grading, lesson plans, and automated terminal report generation.
                    </p>
                </div>
            </div>

            <!-- Bento Item 4: HR & Payroll -->
            <div class="bg-white rounded-[2rem] p-10 border border-slate-200/60 shadow-sm hover:shadow-xl transition-all duration-500 relative overflow-hidden group">
                <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-purple-50 rounded-full blur-3xl group-hover:bg-purple-100/80 transition-colors duration-700"></div>
                <div class="relative z-10 flex flex-col h-full">
                    <div class="w-14 h-14 bg-purple-50 border border-purple-100 rounded-2xl flex items-center justify-center mb-8 text-purple-600 shadow-sm">
                        <i class="fas fa-users-cog text-2xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-slate-900 tracking-tight mb-4">HR & Payroll</h4>
                    <p class="text-slate-500 text-sm leading-relaxed mb-4">
                        Run monthly payroll, track allowances, and conduct structured performance appraisals.
                    </p>
                </div>
            </div>

            <!-- Bento Item 5: Cashless Campus -->
            <div class="bg-gradient-to-br from-brand-blue to-indigo-600 rounded-[2rem] p-10 shadow-xl hover:shadow-2xl transition-all duration-500 relative overflow-hidden group text-white">
                <div class="absolute -top-24 -right-24 w-64 h-64 bg-white/10 rounded-full blur-3xl group-hover:bg-white/20 transition-colors duration-700"></div>
                <div class="relative z-10 flex flex-col h-full">
                    <div class="w-14 h-14 bg-white/10 border border-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center mb-8 shadow-sm">
                        <i class="fas fa-wallet text-2xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold tracking-tight mb-4">The Cashless Campus</h4>
                    <p class="text-blue-100 text-sm leading-relaxed mb-4">
                        Parents top up a digital wallet. Students buy food with NFC wristbands. Zero cash theft.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- RICH MICRO-UI DEEP DIVE SECTION -->
<section class="py-32 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4">
        
        <!-- Feature 1 -->
        <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24 mb-40">
            <!-- Left: Micro-UI Graphic -->
            <div class="w-full lg:w-1/2 relative">
                <div class="absolute inset-0 bg-gradient-to-tr from-green-100 to-emerald-50 rounded-[3rem] transform -rotate-3 scale-105 opacity-50 blur-xl"></div>
                <div class="bg-gradient-to-br from-slate-50 to-slate-100 rounded-[2rem] border border-slate-200 p-8 md:p-12 relative shadow-2xl overflow-hidden group">
                    <!-- Decorative Background elements -->
                    <div class="absolute -right-10 -top-10 text-green-500/10 text-[10rem] transform rotate-12 transition-transform duration-700 group-hover:rotate-45"><i class="fas fa-file-invoice"></i></div>
                    
                    <!-- CSS Mini Invoice UI -->
                    <div class="bg-white rounded-xl shadow-xl border border-slate-100 p-6 relative z-10 transform transition-transform duration-500 group-hover:-translate-y-2">
                        <div class="flex justify-between items-center mb-6 border-b border-slate-50 pb-4">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center text-green-600 text-xs"><i class="fas fa-check"></i></div>
                                <div>
                                    <div class="text-sm font-bold text-slate-800">Invoice #INV-2024-001</div>
                                    <div class="text-[10px] text-slate-400">Paid on May 12, 2024</div>
                                </div>
                            </div>
                            <span class="px-2 py-1 bg-green-50 text-green-600 rounded text-[10px] font-bold uppercase tracking-wider">Paid</span>
                        </div>
                        <div class="space-y-3 mb-6">
                            <div class="flex justify-between items-center text-xs">
                                <span class="text-slate-500">First Term Tuition Fee</span>
                                <span class="font-bold text-slate-800">GHS 1,200.00</span>
                            </div>
                            <div class="flex justify-between items-center text-xs">
                                <span class="text-slate-500">PTA Dues</span>
                                <span class="font-bold text-slate-800">GHS 50.00</span>
                            </div>
                            <div class="flex justify-between items-center text-xs">
                                <span class="text-slate-500">Bus Fee</span>
                                <span class="font-bold text-slate-800">GHS 300.00</span>
                            </div>
                        </div>
                        <div class="pt-4 border-t border-slate-100 flex justify-between items-center">
                            <span class="text-sm font-bold text-slate-400">Total Amount</span>
                            <span class="text-lg font-extrabold text-green-600">GHS 1,550.00</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right: Text Content -->
            <div class="w-full lg:w-1/2">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-green-50 text-green-600 text-xs font-bold uppercase tracking-widest mb-6 border border-green-100">
                    <i class="fas fa-chart-pie"></i> Stop Revenue Leakage
                </div>
                <h3 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tighter mb-6 leading-tight">Absolute control over every penny.</h3>
                <p class="text-lg text-slate-500 mb-8 leading-relaxed font-light">
                    Say goodbye to messy Excel sheets. EduCore tracks fixed fees, class-based fees, and special categorizations automatically. Instantly see which students owe money, and generate digital receipts that are securely logged in our immutable audit trail.
                </p>
                <a href="../contact" class="inline-flex items-center font-bold text-green-600 hover:text-green-700 transition-colors group">
                    Learn about our billing engine 
                    <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

        <!-- Feature 2 -->
        <div class="flex flex-col lg:flex-row-reverse items-center gap-16 lg:gap-24">
            <!-- Right: Micro-UI Graphic -->
            <div class="w-full lg:w-1/2 relative">
                <div class="absolute inset-0 bg-gradient-to-tl from-purple-100 to-indigo-50 rounded-[3rem] transform rotate-3 scale-105 opacity-50 blur-xl"></div>
                <div class="bg-gradient-to-bl from-slate-50 to-slate-100 rounded-[2rem] border border-slate-200 p-8 md:p-12 relative shadow-2xl overflow-hidden group">
                    <!-- Decorative Background elements -->
                    <div class="absolute -left-10 -bottom-10 text-purple-500/10 text-[10rem] transform -rotate-12 transition-transform duration-700 group-hover:-rotate-45"><i class="fas fa-graduation-cap"></i></div>
                    
                    <!-- CSS Mini Report Card UI -->
                    <div class="bg-white rounded-xl shadow-xl border border-slate-100 p-6 relative z-10 transform transition-transform duration-500 group-hover:-translate-y-2">
                        <div class="flex items-center gap-4 mb-6 border-b border-slate-50 pb-4">
                            <div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center text-slate-400 text-lg"><i class="fas fa-user"></i></div>
                            <div>
                                <div class="text-base font-bold text-slate-800">David Mensah</div>
                                <div class="text-xs text-slate-400">Class: Basic 6 • Term 3</div>
                            </div>
                            <div class="ml-auto text-right">
                                <div class="text-2xl font-black text-purple-600">A</div>
                                <div class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Overall</div>
                            </div>
                        </div>
                        
                        <!-- Grading Grid -->
                        <div class="space-y-2">
                            <div class="flex items-center justify-between p-2 rounded-lg bg-slate-50 text-xs">
                                <span class="font-bold text-slate-700 w-24">Mathematics</span>
                                <div class="flex-grow mx-4 h-1.5 bg-slate-200 rounded-full overflow-hidden"><div class="h-full bg-purple-500 w-[95%] rounded-full"></div></div>
                                <span class="font-bold text-slate-900 w-8 text-right">95%</span>
                            </div>
                            <div class="flex items-center justify-between p-2 rounded-lg bg-slate-50 text-xs">
                                <span class="font-bold text-slate-700 w-24">Science</span>
                                <div class="flex-grow mx-4 h-1.5 bg-slate-200 rounded-full overflow-hidden"><div class="h-full bg-brand-blue w-[88%] rounded-full"></div></div>
                                <span class="font-bold text-slate-900 w-8 text-right">88%</span>
                            </div>
                            <div class="flex items-center justify-between p-2 rounded-lg bg-slate-50 text-xs">
                                <span class="font-bold text-slate-700 w-24">English</span>
                                <div class="flex-grow mx-4 h-1.5 bg-slate-200 rounded-full overflow-hidden"><div class="h-full bg-teal-500 w-[92%] rounded-full"></div></div>
                                <span class="font-bold text-slate-900 w-8 text-right">92%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Left: Text Content -->
            <div class="w-full lg:w-1/2">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-50 text-purple-600 text-xs font-bold uppercase tracking-widest mb-6 border border-purple-100">
                    <i class="fas fa-magic"></i> The Teacher's Best Friend
                </div>
                <h3 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tighter mb-6 leading-tight">Generate 500 report cards in 1 second.</h3>
                <p class="text-lg text-slate-500 mb-8 leading-relaxed font-light">
                    Teachers input their continuous assessment scores and exam results. EduCore does the rest. It calculates positions, generates remarks, and prints perfectly formatted terminal report cards for the entire school with a single click.
                </p>
                <a href="../contact" class="inline-flex items-center font-bold text-purple-600 hover:text-purple-700 transition-colors group">
                    See how much time you save
                    <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- THE COMPLETE ECOSYSTEM MARKETING CALLOUT -->
<section class="py-32 bg-slate-900 text-white relative overflow-hidden">
    <!-- Abstract Tech Background -->
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.15) 1px, transparent 0); background-size: 32px 32px;"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-6 tracking-tighter">The Complete Ecosystem</h2>
        <p class="text-slate-400 text-xl mb-16 max-w-3xl mx-auto leading-relaxed">
            EduCore is not just a school management system. It is a true Enterprise Resource Planning (ERP) platform featuring 11 massive modules built to run every aspect of your institution.
        </p>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-left">
            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-sm hover:bg-brand-blue/20 hover:border-brand-blue/50 transition-all cursor-default">
                <h4 class="font-bold text-base mb-1">1. Admissions</h4>
                <p class="text-slate-400 text-xs">Digital enrollment & tracking.</p>
            </div>
            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-sm hover:bg-brand-blue/20 hover:border-brand-blue/50 transition-all cursor-default">
                <h4 class="font-bold text-base mb-1">2. Finance & Bursary</h4>
                <p class="text-slate-400 text-xs">Invoicing, receipts & ledgers.</p>
            </div>
            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-sm hover:bg-brand-blue/20 hover:border-brand-blue/50 transition-all cursor-default">
                <h4 class="font-bold text-base mb-1">3. Digital Academics</h4>
                <p class="text-slate-400 text-xs">C.A., grading & report cards.</p>
            </div>
            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-sm hover:bg-brand-blue/20 hover:border-brand-blue/50 transition-all cursor-default">
                <h4 class="font-bold text-base mb-1">4. Smart Attendance</h4>
                <p class="text-slate-400 text-xs">Biometrics & absentee SMS.</p>
            </div>
            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-sm hover:bg-brand-blue/20 hover:border-brand-blue/50 transition-all cursor-default">
                <h4 class="font-bold text-base mb-1">5. Fleet Management</h4>
                <p class="text-slate-400 text-xs">Live bus tracking & routes.</p>
            </div>
            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-sm hover:bg-brand-blue/20 hover:border-brand-blue/50 transition-all cursor-default">
                <h4 class="font-bold text-base mb-1">6. Inventory (POS)</h4>
                <p class="text-slate-400 text-xs">Stationery & uniform sales.</p>
            </div>
            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-sm hover:bg-brand-blue/20 hover:border-brand-blue/50 transition-all cursor-default">
                <h4 class="font-bold text-base mb-1">7. Hostel Management</h4>
                <p class="text-slate-400 text-xs">Room allocation & exeats.</p>
            </div>
            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-sm hover:bg-brand-blue/20 hover:border-brand-blue/50 transition-all cursor-default">
                <h4 class="font-bold text-base mb-1">8. Library Center</h4>
                <p class="text-slate-400 text-xs">Book cataloging & fines.</p>
            </div>
            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-sm hover:bg-brand-blue/20 hover:border-brand-blue/50 transition-all cursor-default">
                <h4 class="font-bold text-base mb-1">9. AI Timetable</h4>
                <p class="text-slate-400 text-xs">Automated clash-free scheduling.</p>
            </div>
            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-sm hover:bg-brand-blue/20 hover:border-brand-blue/50 transition-all cursor-default">
                <h4 class="font-bold text-base mb-1">10. HR & Payroll</h4>
                <p class="text-slate-400 text-xs">Staff records & PAYE taxes.</p>
            </div>
            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-sm hover:bg-brand-blue/20 hover:border-brand-blue/50 transition-all cursor-default col-span-2 md:col-span-2">
                <h4 class="font-bold text-base mb-1">11. Unified Communications (WhatsApp API)</h4>
                <p class="text-slate-400 text-xs">Instantly send PDF reports directly to parents via WhatsApp.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-32 bg-brand-blue text-white text-center relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
    <div class="max-w-4xl mx-auto px-4 relative z-10 flex flex-col items-center">
        <h2 class="text-5xl md:text-7xl font-extrabold mb-8 tracking-tighter leading-tight">Ready to upgrade your institution?</h2>
        <p class="text-xl md:text-2xl text-blue-100 mb-12 leading-relaxed font-light max-w-2xl">Join the most innovative schools across the continent. Deployment is rapid, training is included, and the transition is seamless.</p>
        <a href="../contact" class="inline-flex items-center justify-center px-10 py-5 rounded-2xl bg-white text-brand-blue text-lg font-extrabold hover:bg-slate-50 transition-all shadow-2xl hover:shadow-white/20 hover:-translate-y-1">
            Request EduCore Deployment <i class="fas fa-arrow-right ml-3"></i>
        </a>
    </div>
</section>

<?php include('../footer.php'); ?>
