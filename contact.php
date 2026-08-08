<?php
$page_title = "Contact Us";
$meta_description = "Connect with the E7 Technology Solutions engineering team. Schedule an architecture review or discuss your enterprise technology requirements.";
$assetBasePath = 'assets';
$navBasePath = '';
include('header.php');
?>

<!-- HERO SECTION -->
<section class="pt-40 pb-24 bg-white border-b border-slate-100 text-center">
    <div class="max-w-4xl mx-auto px-4">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-slate-100 border border-slate-200 mb-8">
            <i class="fas fa-paper-plane text-brand-blue text-xs"></i>
            <span class="text-slate-600 text-xs font-semibold uppercase tracking-wide">Get In Touch</span>
        </div>
        
        <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 tracking-tight mb-6">
            Let's build something <span class="text-brand-blue">great.</span>
        </h1>
        
        <p class="text-xl text-slate-500 leading-relaxed max-w-2xl mx-auto">
            Have a project in mind? Our team is ready to help you transform your vision into reality with cutting-edge technology solutions.
        </p>
    </div>
</section>

<!-- CONTACT SECTION -->
<section class="py-24 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <!-- Contact Form -->
            <div class="bg-white p-8 md:p-12 rounded-2xl shadow-sm border border-slate-200">
                <div class="mb-8">
                    <h2 class="text-3xl font-extrabold text-slate-900 mb-2">Send Us a Message</h2>
                    <p class="text-slate-500">Fill out the form below and we'll get back to you within 24 hours.</p>
                </div>
                
                <form class="space-y-6" method="post" action="#">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-bold text-slate-700 mb-2">Full Name *</label>
                            <input type="text" id="name" name="name" required placeholder="John Doe" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-brand-blue focus:border-brand-blue outline-none transition-all">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-bold text-slate-700 mb-2">Email Address *</label>
                            <input type="email" id="email" name="email" required placeholder="john@company.com" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-brand-blue focus:border-brand-blue outline-none transition-all">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="phone" class="block text-sm font-bold text-slate-700 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="+233 243 838 490" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-brand-blue focus:border-brand-blue outline-none transition-all">
                        </div>
                        <div>
                            <label for="company" class="block text-sm font-bold text-slate-700 mb-2">Company</label>
                            <input type="text" id="company" name="company" placeholder="Your Company" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-brand-blue focus:border-brand-blue outline-none transition-all">
                        </div>
                    </div>

                    <div>
                        <label for="service" class="block text-sm font-bold text-slate-700 mb-2">Service of Interest</label>
                        <select id="service" name="service" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-brand-blue focus:border-brand-blue outline-none transition-all bg-white">
                            <option value="">Select a service...</option>
                            <option value="ai-ml">AI & Machine Learning</option>
                            <option value="data">Data Engineering & Analytics</option>
                            <option value="security">Cybersecurity & Compliance</option>
                            <option value="software">Custom Software Development</option>
                            <option value="infrastructure">IT Infrastructure & Cloud</option>
                            <option value="training">E7 Academy Training</option>
                            <option value="consulting">Technology Consulting</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-bold text-slate-700 mb-2">Your Message *</label>
                        <textarea id="message" name="message" rows="5" required placeholder="Tell us about your project or inquiry..." class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-brand-blue focus:border-brand-blue outline-none transition-all"></textarea>
                    </div>

                    <button type="submit" class="w-full py-4 rounded-lg bg-brand-blue text-white font-bold text-lg hover:bg-blue-700 transition-colors shadow-sm flex items-center justify-center gap-2">
                        <span>Send Message</span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="flex flex-col justify-center">
                <div class="mb-10">
                    <h2 class="text-3xl font-extrabold text-slate-900 mb-2">Contact Information</h2>
                    <p class="text-slate-500">Get in touch with our team through any of these channels.</p>
                </div>

                <div class="space-y-8 mb-12">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-white rounded-xl shadow-sm border border-slate-200 flex flex-shrink-0 items-center justify-center">
                            <i class="fas fa-map-marker-alt text-brand-blue text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Our Location</h4>
                            <p class="text-slate-600">Accra, Ghana<br>West Africa</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-white rounded-xl shadow-sm border border-slate-200 flex flex-shrink-0 items-center justify-center">
                            <i class="fas fa-envelope text-brand-blue text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Email Us</h4>
                            <a href="mailto:connect@e7world.tech" class="text-brand-blue hover:underline block">connect@e7world.tech</a>
                            <a href="mailto:sales@e7world.tech" class="text-brand-blue hover:underline block">sales@e7world.tech</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-white rounded-xl shadow-sm border border-slate-200 flex flex-shrink-0 items-center justify-center">
                            <i class="fas fa-phone text-brand-blue text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Call Us</h4>
                            <p class="text-slate-600">+233 243 838 490</p>
                            <p class="text-sm text-slate-400 mt-1">Mon-Fri: 8:00 AM - 6:00 PM GMT</p>
                        </div>
                    </div>
                </div>

                <div>
                    <h4 class="font-bold text-slate-900 mb-4">Follow Us</h4>
                    <div class="flex gap-4">
                        <a href="https://www.linkedin.com/company/93869752/" class="w-10 h-10 rounded bg-white shadow-sm border border-slate-200 flex items-center justify-center text-slate-500 hover:text-brand-blue hover:border-brand-blue transition-colors"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://web.facebook.com/profile.php?id=61564106101270" class="w-10 h-10 rounded bg-white shadow-sm border border-slate-200 flex items-center justify-center text-slate-500 hover:text-brand-blue hover:border-brand-blue transition-colors"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/E7Technologies" class="w-10 h-10 rounded bg-white shadow-sm border border-slate-200 flex items-center justify-center text-slate-500 hover:text-brand-blue hover:border-brand-blue transition-colors"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/e7_technology_solutions/" class="w-10 h-10 rounded bg-white shadow-sm border border-slate-200 flex items-center justify-center text-slate-500 hover:text-brand-blue hover:border-brand-blue transition-colors"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- QUICK ASSISTANCE -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-6">Need Immediate Assistance?</h2>
            <p class="text-xl text-slate-500">Choose the best way to reach us based on your needs.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-slate-50 p-8 rounded-2xl border border-slate-200 text-center hover:shadow-md transition-shadow">
                <div class="w-16 h-16 bg-white rounded-xl shadow-sm border border-slate-200 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-comments text-2xl text-brand-blue"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Live Chat Support</h3>
                <p class="text-slate-600 mb-6 text-sm">Chat with our technical experts in real-time via Facebook Messenger.</p>
                <a href="https://web.facebook.com/profile.php?id=61564106101270" target="_blank" class="font-bold text-brand-blue hover:underline">Start Chat <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
            
            <div class="bg-slate-50 p-8 rounded-2xl border border-slate-200 text-center hover:shadow-md transition-shadow">
                <div class="w-16 h-16 bg-white rounded-xl shadow-sm border border-slate-200 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-calendar-alt text-2xl text-brand-blue"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Schedule a Consultation</h3>
                <p class="text-slate-600 mb-6 text-sm">Book a free 30-minute technical discovery call with our architecture team.</p>
                <a href="mailto:connect@e7world.tech?subject=Schedule%20Consultation" class="font-bold text-brand-blue hover:underline">Book Now <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
            
            <div class="bg-slate-50 p-8 rounded-2xl border border-slate-200 text-center hover:shadow-md transition-shadow">
                <div class="w-16 h-16 bg-white rounded-xl shadow-sm border border-slate-200 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-question-circle text-2xl text-brand-blue"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Support Center</h3>
                <p class="text-slate-600 mb-6 text-sm">Browse our comprehensive knowledge base and technical FAQs.</p>
                <a href="#" class="font-bold text-brand-blue hover:underline">Visit FAQ <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>


