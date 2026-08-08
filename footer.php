<!-- Professional Footer (Microsoft/Google Clean Aesthetic) -->
<?php
// Use the same base path variable from header.php
if (!isset($assetBasePath)) {
    $assetBasePath = (strpos($_SERVER['PHP_SELF'], '/solutions/') !== false) ? '../assets' : 'assets';
}
if (!isset($navBasePath)) {
    $navBasePath = (strpos($_SERVER['PHP_SELF'], '/solutions/') !== false) ? '../' : '';
}
?>

<footer class="bg-slate-50 text-slate-600 border-t border-slate-200 pt-16 pb-8 font-sans">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 mb-12">
            
            <!-- Company Info -->
            <div class="lg:col-span-2 pr-0 lg:pr-8">
                <img src="<?php echo $assetBasePath; ?>/images/logos/E7_Technology_Solutions_logo2.jpeg" alt="E7 Technology Solutions" class="h-8 w-auto mb-6 object-contain" onerror="this.src='<?php echo $assetBasePath; ?>/images/logos/E7_Technology_Solutions_logo1.jpeg'">
                <p class="text-sm text-slate-500 leading-relaxed mb-6">
                    Empowering organizations across Africa with innovative technology solutions, cybersecurity excellence, and transformative digital strategies. Building the future of technology, today.
                </p>
                <div class="flex gap-4">
                    <a href="https://www.linkedin.com/company/93869752/" class="w-8 h-8 flex items-center justify-center text-slate-400 hover:text-brand-blue transition-colors" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in text-lg"></i>
                    </a>
                    <a href="https://web.facebook.com/profile.php?id=61564106101270" class="w-8 h-8 flex items-center justify-center text-slate-400 hover:text-brand-blue transition-colors" aria-label="Facebook">
                        <i class="fab fa-facebook-f text-lg"></i>
                    </a>
                    <a href="https://x.com/E7Technologies" class="w-8 h-8 flex items-center justify-center text-slate-400 hover:text-brand-blue transition-colors" aria-label="Twitter">
                        <i class="fab fa-twitter text-lg"></i>
                    </a>
                    <a href="https://www.instagram.com/e7_technology_solutions/" class="w-8 h-8 flex items-center justify-center text-slate-400 hover:text-brand-blue transition-colors" aria-label="Instagram">
                        <i class="fab fa-instagram text-lg"></i>
                    </a>
                </div>
            </div>
            
            <!-- Company Links -->
            <div>
                <h4 class="text-slate-900 font-semibold text-sm mb-4">Company</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="<?php echo $navBasePath; ?>about" class="hover:text-brand-blue transition-colors">About E7</a></li>
                    <li><a href="<?php echo $navBasePath; ?>about#leadership" class="hover:text-brand-blue transition-colors">Leadership Team</a></li>
                    <li><a href="<?php echo $navBasePath; ?>news" class="hover:text-brand-blue transition-colors">News & Insights</a></li>
                    <li><a href="<?php echo $navBasePath; ?>academy" class="hover:text-brand-blue transition-colors">E7 Academy</a></li>
                    <li><a href="<?php echo $navBasePath; ?>about#gallery" class="hover:text-brand-blue transition-colors">Gallery</a></li>
                    <li><a href="<?php echo $navBasePath; ?>contact" class="hover:text-brand-blue transition-colors">Careers</a></li>
                </ul>
            </div>
            
            <!-- Solutions -->
            <div>
                <h4 class="text-slate-900 font-semibold text-sm mb-4">Solutions</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="<?php echo $navBasePath; ?>solutions/e7shield" class="hover:text-brand-blue transition-colors">E7Shield™</a></li>
                    <li><a href="<?php echo $navBasePath; ?>solutions/e7insight" class="hover:text-brand-blue transition-colors">E7Insight™</a></li>
                    <li><a href="<?php echo $navBasePath; ?>solutions/e7build" class="hover:text-brand-blue transition-colors">E7Build™</a></li>
                    <li><a href="<?php echo $navBasePath; ?>solutions" class="hover:text-brand-blue transition-colors flex items-center gap-1 font-medium mt-2">View All <i class="fas fa-angle-right text-xs"></i></a></li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div>
                <h4 class="text-slate-900 font-semibold text-sm mb-4">Contact</h4>
                <ul class="space-y-4 text-sm text-slate-500">
                    <li class="flex items-start gap-2">
                        <i class="fas fa-map-marker-alt mt-1 text-slate-400 w-4 text-center"></i>
                        <span>Accra, Ghana<br>West Africa</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-phone text-slate-400 w-4 text-center"></i>
                        <a href="tel:+233243838490" class="hover:text-brand-blue transition-colors">+233 243 838 490</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-envelope text-slate-400 w-4 text-center"></i>
                        <a href="mailto:connect@e7world.tech" class="hover:text-brand-blue transition-colors">connect@e7world.tech</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Bottom Footer -->
        <div class="pt-8 border-t border-slate-200 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-slate-400">
            <p>&copy; <?php echo date('Y'); ?> E7 Technology Solutions. All Rights Reserved.</p>
            <div class="flex gap-4">
                <a href="<?php echo $navBasePath; ?>privacy-policy" class="hover:text-slate-700 transition-colors">Privacy Policy</a>
                <a href="<?php echo $navBasePath; ?>terms" class="hover:text-slate-700 transition-colors">Terms of Service</a>
                <a href="<?php echo $navBasePath; ?>cookie-policy" class="hover:text-slate-700 transition-colors">Cookie Policy</a>
            </div>
        </div>
    </div>
</footer>

<!-- WhatsApp Floating Button (Global) -->
<a href="https://wa.me/233243838490?text=Hi%2C%20I'd%20like%20to%20learn%20more%20about%20E7%20Technology%20Solutions."
   target="_blank"
   rel="noopener noreferrer"
   id="whatsapp-float"
   aria-label="Chat with us on WhatsApp"
   class="fixed bottom-8 left-8 z-50 flex items-center gap-3 bg-[#25D366] text-white pl-4 pr-5 py-3 rounded-full shadow-[0_8px_30px_rgba(37,211,102,0.4)] hover:shadow-[0_12px_40px_rgba(37,211,102,0.55)] hover:-translate-y-1 transition-all duration-300 group">
    <i class="fab fa-whatsapp text-2xl"></i>
    <span class="text-sm font-semibold tracking-tight max-w-0 overflow-hidden group-hover:max-w-[120px] transition-all duration-300 whitespace-nowrap">Chat with us</span>
</a>

<!-- Minimalist Back to Top -->
<button id="backToTop" class="fixed bottom-8 right-8 w-10 h-10 rounded bg-white text-slate-600 border border-slate-200 flex items-center justify-center shadow-sm opacity-0 invisible transition-all duration-200 hover:bg-slate-50 hover:text-brand-blue z-50">
    <i class="fas fa-chevron-up text-sm"></i>
</button>

<script>
const backToTopButton = document.getElementById('backToTop');
window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        backToTopButton.classList.remove('opacity-0', 'invisible');
        backToTopButton.classList.add('opacity-100', 'visible');
    } else {
        backToTopButton.classList.add('opacity-0', 'invisible');
        backToTopButton.classList.remove('opacity-100', 'visible');
    }
});
backToTopButton.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});
</script>

<!-- AOS JS for Micro-Animations -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
        offset: 50,
    });
</script>
</body>
</html>


