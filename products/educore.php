<?php
$page_title = "EduCore - School Operating System | E7 Technology";
$meta_description = "EduCore is a comprehensive, cloud-based School Operating System designed by E7 Technology to automate modern educational institutions.";
include('../header.php');
?>

<style>
/* Modern Cinematic Animations */
@keyframes fadeUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}
@keyframes fadeZoom {
    from { opacity: 0; transform: scale(0.95) translateY(20px); }
    to { opacity: 1; transform: scale(1) translateY(0); }
}
.reveal-up { opacity: 0; animation: fadeUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
.reveal-zoom { opacity: 0; animation: fadeZoom 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
.delay-100 { animation-delay: 100ms; }
.delay-200 { animation-delay: 200ms; }
.delay-300 { animation-delay: 300ms; }
.delay-500 { animation-delay: 500ms; }

/* Custom Scrollbar for Bento Box (if needed on mobile) */
.hide-scrollbar::-webkit-scrollbar { display: none; }
.hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

/* Scroll-triggered reveal */
.scroll-reveal {
    opacity: 0;
    transform: translateY(28px);
    transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}
.scroll-reveal.visible {
    opacity: 1;
    transform: translateY(0);
}
.scroll-reveal-left {
    opacity: 0;
    transform: translateX(-30px);
    transition: opacity 0.9s cubic-bezier(0.16, 1, 0.3, 1), transform 0.9s cubic-bezier(0.16, 1, 0.3, 1);
}
.scroll-reveal-left.visible {
    opacity: 1;
    transform: translateX(0);
}
.scroll-reveal-right {
    opacity: 0;
    transform: translateX(30px);
    transition: opacity 0.9s cubic-bezier(0.16, 1, 0.3, 1), transform 0.9s cubic-bezier(0.16, 1, 0.3, 1);
}
.scroll-reveal-right.visible {
    opacity: 1;
    transform: translateX(0);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const revealEls = document.querySelectorAll('.scroll-reveal, .scroll-reveal-left, .scroll-reveal-right');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                // Stagger children within same parent
                const delay = entry.target.dataset.delay || 0;
                setTimeout(() => entry.target.classList.add('visible'), parseInt(delay));
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });
    revealEls.forEach(el => observer.observe(el));
});
</script>

<!-- ==============================================
     1. THE CINEMATIC HERO
     ============================================== -->
<section class="pt-24 md:pt-40 pb-0 bg-white relative overflow-hidden z-0">
    <!-- Ambient Background Lighting -->
    <div class="absolute top-[-10%] left-1/2 -translate-x-1/2 w-full max-w-[1000px] h-[500px] bg-brand-blue/10 blur-[100px] rounded-full -z-10 pointer-events-none"></div>

    <div class="max-w-6xl mx-auto px-4 relative z-10 text-center flex flex-col items-center">

        
        <!-- Hero Headline -->
        <h1 class="reveal-up delay-100 text-5xl md:text-[6.5rem] font-black text-slate-900 tracking-tighter mb-6 leading-[1] max-w-5xl">
            Run your entire school. <br class="hidden md:block">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-slate-400 to-slate-900">Beautifully.</span>
        </h1>
        
        <p class="reveal-up delay-200 text-lg md:text-2xl text-slate-500 mb-12 max-w-2xl font-light leading-relaxed tracking-tight">
            The enterprise-grade School Management System for modern African institutions. Finance, academics, and logistics, unified perfectly in a secure Cloud ERP.
        </p>
        
        <div class="reveal-up delay-300 flex flex-col sm:flex-row items-center justify-center gap-4 mb-20 w-full sm:w-auto">
            <a href="../contact" class="w-full sm:w-auto px-6 py-3.5 sm:px-8 sm:py-4 rounded-xl bg-slate-900 text-white font-semibold tracking-tight hover:bg-slate-800 transition-all shadow-[0_10px_40px_rgba(0,0,0,0.2)] hover:shadow-[0_15px_50px_rgba(0,0,0,0.3)] hover:-translate-y-0.5">
                Request a Live Demo
            </a>
            <a href="#ecosystem" class="w-full sm:w-auto px-6 py-3.5 sm:px-8 sm:py-4 rounded-xl bg-white text-slate-700 font-semibold tracking-tight hover:bg-slate-50 transition-all border border-slate-200 shadow-sm hover:shadow-md">
                Explore the Platform
            </a>
        </div>

        <!-- Bleeding Dashboard Mockup -->
        <div class="relative w-full max-w-5xl mx-auto reveal-zoom delay-500">
            <!-- Glow behind image -->
            <div class="absolute inset-0 bg-brand-blue/20 blur-[80px] rounded-full scale-90 -z-10 transform translate-y-10"></div>
            
            <div class="relative z-20 overflow-hidden rounded-t-3xl border-t border-l border-r border-slate-200/80 shadow-[0_-20px_80px_-20px_rgba(0,0,0,0.15)] bg-white/50 backdrop-blur-3xl p-2 md:p-3 pb-0">
                <img src="<?php echo $assetBasePath; ?>/images/products/educore_dashboard.png" alt="EduCore Dashboard" class="w-full h-auto rounded-t-[1rem] shadow-inner border border-slate-200">
                <!-- Fade out bottom into the next section -->
                <div class="absolute bottom-0 left-0 right-0 h-48 bg-gradient-to-t from-white via-white/80 to-transparent z-30"></div>
            </div>
        </div>
    </div>
</section>

<!-- ==============================================
     2. IMMEDIATE SOCIAL PROOF
     ============================================== -->
<section class="py-12 bg-white relative z-40 border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <p class="text-[9px] font-bold text-slate-400 uppercase tracking-[0.3em] mb-8">Trusted by Africa's most innovative institutions</p>
        <div class="flex flex-wrap justify-center items-center gap-10 md:gap-20 opacity-40 grayscale transition-all duration-700">
            <div class="text-xl font-bold text-slate-800 tracking-tight">Crescent <span class="text-brand-blue">Academy</span></div>
            <div class="text-xl font-extrabold text-slate-800 tracking-tighter">OAK<span class="font-light">INTERNATIONAL</span></div>
            <div class="text-xl font-serif text-slate-800 italic">St. Peters College</div>
            <div class="text-xl font-black text-slate-800 tracking-tighter">GLOBAL<span class="text-indigo-600">PREP</span></div>
        </div>
    </div>
</section>

<!-- ==============================================
     3. THE ECOSYSTEM (True Bento Grid) Moved UP!
     ============================================== -->
<section id="ecosystem" class="py-16 md:py-32 bg-[#FAFAFA] relative">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16 md:mb-20">
            <h2 class="text-3xl md:text-5xl font-black mb-6 tracking-tighter text-slate-900">11 Modules. 1 Subscription.</h2>
            <p class="text-lg md:text-xl text-slate-500 max-w-2xl mx-auto leading-relaxed font-light tracking-tight">
                Stop juggling 5 different subscriptions. EduCore is a true Enterprise Resource Planning (ERP) platform built to run every single aspect of your institution seamlessly.
            </p>
        </div>
        
        <!-- The Asymmetrical Bento Grid — Fixed Layout -->
        <style>
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: auto;
            gap: 1rem;
        }
        @media (max-width: 1023px) { .bento-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 767px)  { .bento-grid { grid-template-columns: 1fr; } }

        .bento-card {
            background: white;
            border-radius: 1.5rem;
            padding: 1.75rem;
            border: 1px solid #e2e8f0;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            transition: box-shadow 0.3s, transform 0.3s;
            min-height: 180px;
        }
        .bento-card:hover { box-shadow: 0 10px 40px -10px rgba(0,0,0,0.12); transform: translateY(-2px); }
        .bento-icon {
            width: 3rem; height: 3rem;
            border-radius: 0.875rem;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.2rem;
            border: 1px solid rgba(0,0,0,0.06);
            flex-shrink: 0;
        }
        .bento-label { font-weight: 700; font-size: 1rem; tracking: -0.025em; color: #0f172a; }
        .bento-desc  { font-size: 0.8rem; color: #64748b; line-height: 1.5; font-weight: 500; }

        /* === FEATURE CARDS (col-span-2) === */
        .bento-finance  { grid-column: span 2; background: linear-gradient(135deg, #ecfdf5, #d1fae5); border-color: #a7f3d0; }
        .bento-comms    { grid-column: span 2; background: #0f172a; border-color: #1e293b; }
        .bento-library  { grid-column: span 2; background: linear-gradient(135deg, #f1f5f9, #e2e8f0); border-color: #cbd5e1; }
        .bento-academics { grid-row: span 2; }

        @media (max-width: 1023px) {
            .bento-finance, .bento-comms, .bento-library { grid-column: span 2; }
            .bento-academics { grid-row: span 1; }
        }
        @media (max-width: 767px) {
            .bento-finance, .bento-comms, .bento-library, .bento-academics { grid-column: span 1; grid-row: span 1; }
        }
        </style>

        <div class="bento-grid">

            <!-- 1: Admissions -->
            <div class="bento-card">
                <div class="bento-icon bg-slate-100 text-slate-600"><i class="fas fa-user-plus"></i></div>
                <div>
                    <div class="bento-label">Admissions</div>
                    <div class="bento-desc">Digital enrollment funnels, document uploads & student profiling.</div>
                </div>
            </div>

            <!-- 2: Finance (spans 2 cols) -->
            <div class="bento-card bento-finance relative overflow-hidden">
                <div class="absolute right-[-10%] bottom-[-20%] text-emerald-200 text-[130px] opacity-25 -rotate-12 pointer-events-none"><i class="fas fa-wallet"></i></div>
                <div class="bento-icon bg-white text-emerald-600 shadow-sm relative z-10"><i class="fas fa-file-invoice-dollar"></i></div>
                <div class="relative z-10">
                    <div class="bento-label text-emerald-900">Finance & Bursary</div>
                    <div class="bento-desc text-emerald-700">Automated invoicing, fee structures, receipts, and expense ledgers. Absolute control over every penny of revenue.</div>
                </div>
            </div>

            <!-- 3: AI Timetable -->
            <div class="bento-card">
                <div class="bento-icon bg-slate-100 text-slate-600"><i class="fas fa-calendar-alt"></i></div>
                <div>
                    <div class="bento-label">AI Timetable</div>
                    <div class="bento-desc">Automated, clash-free scheduling algorithms for all classes and teachers.</div>
                </div>
            </div>

            <!-- 4: Academics (spans 2 rows) -->
            <div class="bento-card bento-academics">
                <div class="bento-icon bg-indigo-50 text-indigo-600"><i class="fas fa-graduation-cap"></i></div>
                <!-- Abstract score bar UI -->
                <div class="flex-grow bg-slate-50 rounded-xl border border-slate-100 flex flex-col justify-center px-4 gap-3 py-4">
                    <div class="w-full h-2 bg-slate-200 rounded-full overflow-hidden"><div class="w-[92%] h-full bg-indigo-500 rounded-full"></div></div>
                    <div class="w-full h-2 bg-slate-200 rounded-full overflow-hidden"><div class="w-[74%] h-full bg-indigo-400 rounded-full"></div></div>
                    <div class="w-full h-2 bg-slate-200 rounded-full overflow-hidden"><div class="w-[88%] h-full bg-indigo-300 rounded-full"></div></div>
                    <div class="w-full h-2 bg-slate-200 rounded-full overflow-hidden"><div class="w-[60%] h-full bg-indigo-200 rounded-full"></div></div>
                </div>
                <div>
                    <div class="bento-label">Digital Academics</div>
                    <div class="bento-desc">Continuous assessments, grading scales, and PDF report cards generated in one click.</div>
                </div>
            </div>

            <!-- 5: WhatsApp Comms (spans 2 cols, dark) -->
            <div class="bento-card bento-comms relative overflow-hidden group">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-600/15 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                <div class="bento-icon bg-white/10 border border-white/20 text-white relative z-10"><i class="fab fa-whatsapp"></i></div>
                <div class="relative z-10">
                    <div class="bento-label text-white">Unified Communications</div>
                    <div class="bento-desc text-slate-400">Deep WhatsApp Business API integration. Instantly send PDF report cards and bus alerts. Goodbye expensive SMS.</div>
                </div>
            </div>

            <!-- 6: HR & Payroll -->
            <div class="bento-card">
                <div class="bento-icon bg-cyan-50 text-cyan-600"><i class="fas fa-users-cog"></i></div>
                <div>
                    <div class="bento-label">HR & Payroll</div>
                    <div class="bento-desc">Staff records, GPS clock-ins, and automated PAYE/SSNIT deductions.</div>
                </div>
            </div>

            <!-- 7: Fleet Tracking -->
            <div class="bento-card">
                <div class="bento-icon bg-yellow-50 text-yellow-600"><i class="fas fa-bus"></i></div>
                <div>
                    <div class="bento-label">Fleet Tracking</div>
                    <div class="bento-desc">Live GPS bus routes, zones, and vehicle maintenance logs.</div>
                </div>
            </div>

            <!-- 8: Inventory POS -->
            <div class="bento-card">
                <div class="bento-icon bg-orange-50 text-orange-600"><i class="fas fa-store"></i></div>
                <div>
                    <div class="bento-label">Inventory (POS)</div>
                    <div class="bento-desc">Stationery store & uniform sales with cashless NFC wristbands.</div>
                </div>
            </div>

            <!-- 9: Smart Attendance -->
            <div class="bento-card">
                <div class="bento-icon bg-blue-50 text-brand-blue"><i class="fas fa-fingerprint"></i></div>
                <div>
                    <div class="bento-label">Smart Attendance</div>
                    <div class="bento-desc">Biometric RFID integrations with automated absentee parent alerts.</div>
                </div>
            </div>

            <!-- 10: Hostel Management -->
            <div class="bento-card">
                <div class="bento-icon bg-purple-50 text-purple-600"><i class="fas fa-bed"></i></div>
                <div>
                    <div class="bento-label">Hostel Mgt</div>
                    <div class="bento-desc">Boarding room allocation, fees, and digital exeat passes.</div>
                </div>
            </div>

            <!-- 11: Library (spans 2 cols) -->
            <div class="bento-card bento-library relative overflow-hidden">
                <div class="absolute right-[-5%] bottom-[-10%] text-slate-300 text-[110px] opacity-30 -rotate-12 pointer-events-none"><i class="fas fa-book-open"></i></div>
                <div class="bento-icon bg-white text-teal-600 shadow-sm relative z-10"><i class="fas fa-book"></i></div>
                <div class="relative z-10">
                    <div class="bento-label text-slate-800">Library Management</div>
                    <div class="bento-desc">Barcode book cataloging, checkout tracking, late return reminders, and automated fine collection.</div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==============================================
     4. DEEP DIVE: REVENUE (Cinematic Dark Theme)
     ============================================== -->
<section class="py-32 bg-slate-950 text-white relative overflow-hidden">
    <!-- Glowing background elements -->
    <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-emerald-500/10 blur-[120px] rounded-full pointer-events-none transform translate-x-1/3 -translate-y-1/3"></div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            
            <!-- Left: High Impact Typography -->
            <div>
                <h3 class="text-5xl md:text-6xl font-black tracking-tighter mb-8 leading-[1.1]">Absolute control <br>over every penny.</h3>
                <p class="text-xl text-slate-400 mb-10 leading-relaxed font-light tracking-tight">
                    Say goodbye to messy Excel ledgers. EduCore tracks fixed fees, class-based fees, and special categorizations automatically. Generate 1,000+ invoices in a single click, and allow students to make cashless purchases.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="bg-slate-900/50 p-6 rounded-2xl border border-slate-800">
                        <i class="fas fa-file-invoice-dollar text-emerald-500 text-2xl mb-4"></i>
                        <h4 class="font-bold text-lg mb-2">Automated Billing</h4>
                        <p class="text-slate-500 text-sm">Instant digital receipts and bulk invoicing.</p>
                    </div>
                    <div class="bg-slate-900/50 p-6 rounded-2xl border border-slate-800">
                        <i class="fas fa-wifi text-emerald-500 text-2xl mb-4"></i>
                        <h4 class="font-bold text-lg mb-2">Cashless Campus</h4>
                        <p class="text-slate-500 text-sm">NFC wristbands tied to parent digital wallets.</p>
                    </div>
                </div>
            </div>

            <!-- Right: Abstract / Clean UI representation -->
            <div class="relative w-full h-[500px] bg-slate-900 rounded-[2rem] border border-slate-800 shadow-2xl flex items-center justify-center overflow-hidden">
                <!-- Data Visualization Concept -->
                <div class="absolute bottom-0 left-0 right-0 h-1/2 bg-gradient-to-t from-emerald-900/40 to-transparent"></div>
                <div class="w-64 bg-slate-950/80 backdrop-blur border border-slate-800 p-6 rounded-2xl shadow-2xl relative z-10 transform -rotate-6 transition-transform hover:rotate-0 duration-500">
                    <div class="text-[10px] text-slate-500 font-bold uppercase tracking-widest mb-1">Total Revenue Collected</div>
                    <div class="text-3xl font-black text-white tracking-tighter mb-4">GHS 485,200</div>
                    <div class="h-2 w-full bg-slate-800 rounded-full overflow-hidden mb-2">
                        <div class="h-full bg-emerald-500 w-[75%] rounded-full"></div>
                    </div>
                    <div class="flex justify-between text-[9px] text-slate-500 font-bold uppercase">
                        <span>75% Collected</span>
                        <span>Term 3</span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- ==============================================
     5. DEEP DIVE: ACADEMICS (Pristine White)
     ============================================== -->
<section class="py-32 bg-white relative overflow-hidden border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            
            <!-- Left: Abstract UI -->
            <div class="order-2 lg:order-1 relative w-full h-[500px] bg-slate-50 rounded-[2rem] border border-slate-200 shadow-sm flex items-center justify-center p-8">
                <!-- Report Card Concept Stack -->
                <div class="w-full max-w-sm relative">
                    <div class="absolute inset-0 bg-indigo-200 rounded-2xl transform rotate-6 scale-95 opacity-50 blur-sm"></div>
                    <div class="absolute inset-0 bg-indigo-100 rounded-2xl transform rotate-3 scale-100 shadow-sm"></div>
                    <div class="bg-white border border-slate-200 p-8 rounded-2xl shadow-xl relative z-10">
                        <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-full flex items-center justify-center text-xl mb-6"><i class="fas fa-file-pdf"></i></div>
                        <h4 class="font-black text-2xl text-slate-900 tracking-tighter mb-2">Terminal Report</h4>
                        <p class="text-slate-500 text-sm mb-6">Generated instantly for 500+ students. 100% accurate.</p>
                        <div class="space-y-3">
                            <div class="h-3 w-full bg-slate-100 rounded-full"></div>
                            <div class="h-3 w-5/6 bg-slate-100 rounded-full"></div>
                            <div class="h-3 w-4/6 bg-slate-100 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Typography -->
            <div class="order-1 lg:order-2">
                <h3 class="text-5xl md:text-6xl font-black tracking-tighter text-slate-900 mb-8 leading-[1.1]">Generate 500 reports <br>in 1 second.</h3>
                <p class="text-xl text-slate-500 mb-10 leading-relaxed font-light tracking-tight">
                    Transform the classroom. Teachers submit digital lesson plans for Headmaster approval. When the term ends, they simply input continuous assessment scores; EduCore calculates positions, assigns remarks, and prints perfectly formatted PDF report cards.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-center gap-4 text-slate-700 font-medium text-lg"><i class="fas fa-check text-indigo-500"></i> Digital Lesson Plans & Approvals</li>
                    <li class="flex items-center gap-4 text-slate-700 font-medium text-lg"><i class="fas fa-check text-indigo-500"></i> Automated Grading & Positioning</li>
                    <li class="flex items-center gap-4 text-slate-700 font-medium text-lg"><i class="fas fa-check text-indigo-500"></i> Immutable Grade Security (Anti-Bribery)</li>
                </ul>
            </div>
            
        </div>
    </div>
</section>

<!-- ==============================================
     5b. DEEP DIVE: LOGISTICS & COMMUNICATION (Brand Blue)
     ============================================== -->
<section class="py-32 bg-white relative overflow-hidden border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">

            <!-- Left: Typography -->
            <div class="scroll-reveal-left">
                <h3 class="text-5xl md:text-6xl font-black tracking-tighter text-slate-900 mb-8 leading-[1.1]">Total visibility. <br>Happy parents.</h3>
                <p class="text-xl text-slate-500 mb-10 leading-relaxed font-light tracking-tight">
                    Stop the endless phone calls to the receptionist. EduCore integrates directly with the WhatsApp Business API to send automated alerts — from live bus locations to instant PDF report card delivery.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-center gap-4 text-slate-700 font-medium text-lg"><i class="fas fa-check-circle text-brand-blue text-xl"></i> Live GPS School Bus Tracking</li>
                    <li class="flex items-center gap-4 text-slate-700 font-medium text-lg"><i class="fas fa-check-circle text-brand-blue text-xl"></i> Automated WhatsApp Alerts & Notifications</li>
                    <li class="flex items-center gap-4 text-slate-700 font-medium text-lg"><i class="fas fa-check-circle text-brand-blue text-xl"></i> PDF Report Cards delivered to WhatsApp</li>
                    <li class="flex items-center gap-4 text-slate-700 font-medium text-lg"><i class="fas fa-check-circle text-brand-blue text-xl"></i> Canteen Cashless Ordering via Wristband</li>
                </ul>
            </div>

            <!-- Right: Feature Cards -->  
            <div class="scroll-reveal-right grid grid-cols-2 gap-4">
                <div class="bg-brand-blue/5 border border-brand-blue/15 rounded-3xl p-6 hover:shadow-lg hover:bg-brand-blue/10 transition-all">
                    <i class="fab fa-whatsapp text-green-500 text-3xl mb-4"></i>
                    <h4 class="font-bold text-slate-900 text-base mb-2 tracking-tight">WhatsApp API</h4>
                    <p class="text-slate-500 text-xs leading-relaxed">Zero-cost messaging directly to parents. No extra SMS bundle.</p>
                </div>
                <div class="bg-slate-50 border border-slate-200 rounded-3xl p-6 hover:shadow-lg transition-all">
                    <i class="fas fa-bus text-yellow-500 text-3xl mb-4"></i>
                    <h4 class="font-bold text-slate-900 text-base mb-2 tracking-tight">Live Bus GPS</h4>
                    <p class="text-slate-500 text-xs leading-relaxed">Parents track the school bus in real-time on their phones.</p>
                </div>
                <div class="bg-slate-50 border border-slate-200 rounded-3xl p-6 hover:shadow-lg transition-all">
                    <i class="fas fa-brain text-purple-500 text-3xl mb-4"></i>
                    <h4 class="font-bold text-slate-900 text-base mb-2 tracking-tight">AI Predictions</h4>
                    <p class="text-slate-500 text-xs leading-relaxed">Flags at-risk students weeks before exams using performance trends.</p>
                </div>
                <div class="bg-brand-blue/5 border border-brand-blue/15 rounded-3xl p-6 hover:shadow-lg hover:bg-brand-blue/10 transition-all">
                    <i class="fas fa-bell text-brand-blue text-3xl mb-4"></i>
                    <h4 class="font-bold text-slate-900 text-base mb-2 tracking-tight">Smart Alerts</h4>
                    <p class="text-slate-500 text-xs leading-relaxed">Automate absence reports, fee reminders, and emergency broadcasts.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==============================================
     6. TRANSITION WITH CONFIDENCE (Objection Handling)
     ============================================== -->
<section class="py-32 bg-[#FAFAFA] border-b border-slate-200/60">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-20 scroll-reveal">
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tighter mb-6">Transition with Confidence.</h2>
            <p class="text-slate-500 text-xl max-w-2xl mx-auto font-light tracking-tight">We understand that changing software is scary. That's why we engineered our onboarding process to eliminate all risk.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="scroll-reveal bg-white p-8 rounded-3xl border border-slate-200 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all" data-delay="0">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 text-brand-blue flex items-center justify-center text-xl mb-6"><i class="fas fa-database"></i></div>
                <h3 class="font-bold text-slate-900 text-xl mb-3 tracking-tight">White-Glove Migration</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Our team handles the entire migration from your old Excel sheets. You go live in 7 days with zero data lost.</p>
            </div>
            <div class="scroll-reveal bg-white p-8 rounded-3xl border border-slate-200 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all" data-delay="100">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 text-brand-blue flex items-center justify-center text-xl mb-6"><i class="fas fa-lock"></i></div>
                <h3 class="font-bold text-slate-900 text-xl mb-3 tracking-tight">Your Data. Only Yours.</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Your school's data lives in its own private, isolated database — never shared or mixed with any other institution. Ever.</p>
            </div>
            <div class="scroll-reveal bg-white p-8 rounded-3xl border border-slate-200 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all" data-delay="200">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 text-brand-blue flex items-center justify-center text-xl mb-6"><i class="fas fa-chalkboard-teacher"></i></div>
                <h3 class="font-bold text-slate-900 text-xl mb-3 tracking-tight">Guaranteed Adoption</h3>
                <p class="text-slate-500 text-sm leading-relaxed">As easy to use as WhatsApp. We provide comprehensive on-site training for all teachers and staff on day one.</p>
            </div>
            <div class="scroll-reveal bg-white p-8 rounded-3xl border border-slate-200 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all" data-delay="300">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 text-brand-blue flex items-center justify-center text-xl mb-6"><i class="fas fa-cloud"></i></div>
                <h3 class="font-bold text-slate-900 text-xl mb-3 tracking-tight">99.9% Uptime</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Hosted on world-class, globally redundant cloud infrastructure. Your school stays operational 24/7. Zero crashes.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==============================================
     7. TESTIMONIAL
     ============================================== -->
<section class="py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <!-- Star Rating -->
        <div class="flex items-center justify-center gap-1 mb-6">
            <i class="fas fa-star text-yellow-400 text-xl"></i>
            <i class="fas fa-star text-yellow-400 text-xl"></i>
            <i class="fas fa-star text-yellow-400 text-xl"></i>
            <i class="fas fa-star text-yellow-400 text-xl"></i>
            <i class="fas fa-star text-yellow-400 text-xl"></i>
        </div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tighter mb-10 leading-tight">
            "EduCore completely transformed our operations. We eliminated cash theft at the canteen, and our parents are thrilled that they can track the school bus live on their phones."
        </h2>
        <div class="flex items-center justify-center gap-4">
            <div class="w-12 h-12 bg-slate-200 rounded-full overflow-hidden shadow-sm">
                <img src="<?php echo $assetBasePath; ?>/images/testimonials/dr_osei.png" alt="Dr. Emmanuel Osei" class="w-full h-full object-cover">
            </div>
            <div class="text-left">
                <div class="font-bold text-slate-900 text-sm uppercase tracking-wider">Dr. Emmanuel Osei</div>
                <div class="text-xs text-slate-500">Proprietor, Oak International Academy</div>
            </div>
        </div>
    </div>
</section>


<!-- ==============================================
     8. FINAL CTA (Cinematic Dark)
     ============================================== -->
<section class="py-32 bg-slate-950 text-white text-center relative overflow-hidden">
    <!-- Ambient glow -->
    <div class="absolute bottom-[-200px] left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-brand-blue/30 rounded-[100%] blur-[100px] pointer-events-none"></div>
    
    <div class="max-w-4xl mx-auto px-4 relative z-10 flex flex-col items-center">
        <h2 class="text-5xl md:text-7xl font-black mb-8 tracking-tighter leading-tight">Ready to upgrade your institution?</h2>
        <p class="text-xl md:text-2xl text-slate-400 mb-10 leading-relaxed font-light max-w-2xl tracking-tight">Join the most innovative schools across the continent. Deployment is rapid, training is included, and the transition is seamless.</p>
        
        <div class="mb-12 text-emerald-400 text-sm font-bold tracking-widest uppercase">
            Guaranteed ROI in Term 1
        </div>
        
        <!-- Pricing Anchor -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-3 mb-10">
            <div class="inline-flex items-center gap-3 px-6 py-3 rounded-xl bg-white/10 border border-white/20 backdrop-blur-md text-white">
                <i class="fas fa-tag text-emerald-400 text-lg"></i>
                <div class="text-left">
                    <div class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">Starting From</div>
                    <div class="font-black text-white text-lg tracking-tight">GHS 800 <span class="font-light text-slate-400 text-sm">/ term</span></div>
                </div>
            </div>
            <div class="text-slate-600 text-sm font-medium hidden sm:block">·</div>
            <div class="text-slate-400 text-sm font-medium">No setup fees. No long-term lock-in.</div>
        </div>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="../contact" class="inline-flex items-center justify-center px-10 py-5 rounded-2xl bg-white text-slate-950 text-xl font-bold hover:bg-slate-100 transition-all shadow-[0_0_40px_rgba(255,255,255,0.1)] hover:shadow-[0_0_60px_rgba(255,255,255,0.2)] tracking-tight">
                Request EduCore Deployment <i class="fas fa-arrow-right ml-4"></i>
            </a>
            <a href="#ecosystem" class="inline-flex items-center gap-2 px-8 py-5 rounded-2xl border border-white/20 text-white font-semibold hover:bg-white/10 transition-all tracking-tight text-lg">
                <i class="fas fa-play-circle text-brand-blue"></i> Watch 2-Min Overview
            </a>
        </div>
    </div>
</section>

<?php include('../footer.php'); ?>
