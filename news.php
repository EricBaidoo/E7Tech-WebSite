<?php
$page_title = "Engineering Insights & Research";
$meta_description = "Technical research, cybersecurity briefs, and AI engineering insights from E7 Technology Solutions — Africa's leading enterprise technology company in Accra, Ghana.";
$assetBasePath = 'assets';
$navBasePath = '';
include('header.php');

// Data Array for Recent Updates (Sidebar)
$recentUpdates = [
    [
        'category' => 'E7 Academy',
        'title' => 'E7 Academy graduates 200+ Cloud Architects in its most competitive cohort to date.',
        'image' => 'sliders/slide7.png',
        'link' => '#'
    ],
    [
        'category' => 'Cybersecurity',
        'title' => 'Annual Enterprise Threat Landscape Report 2025: Zero Trust becomes mandatory.',
        'image' => 'sliders/slide2.png',
        'link' => '#'
    ],
    [
        'category' => 'Partnerships',
        'title' => 'E7 announces strategic cloud infrastructure partnership with leading regional banks.',
        'image' => 'sliders/slide4.png',
        'link' => '#'
    ]
];

// Data Array for Latest Research & Articles (Grid)
$articles = [
    [
        'type' => 'Zero Trust Security',
        'type_color' => 'bg-slate-800',
        'title' => 'Implementing Zero Trust Architecture in African Financial Institutions',
        'excerpt' => 'A technical deep-dive into deploying identity-first, Zero Trust network access for banks and fintechs across Ghana and Nigeria — covering IAM, microsegmentation, and continuous verification.',
        'image' => 'sliders/slide2.png',
        'date' => 'Dec 12, 2025',
        'read_time' => '10 Min Read',
        'link' => '#'
    ],
    [
        'type' => 'AI Engineering',
        'type_color' => 'bg-brand-blue',
        'title' => 'Scaling AI Data Pipelines for Low-Bandwidth African Markets',
        'excerpt' => 'How E7Insight™ optimizes ML model training and inference in connectivity-constrained environments — edge inference, model compression, and efficient data ingestion patterns.',
        'image' => 'sliders/slide5.png',
        'date' => 'Dec 8, 2025',
        'read_time' => '8 Min Read',
        'link' => '#'
    ],
    [
        'type' => 'Enterprise Software',
        'type_color' => 'bg-blue-500',
        'title' => 'The ROI of a School Management System: EduCore Case Study',
        'excerpt' => 'Quantifying the operational and financial impact of deploying a cloud-based School Management System versus legacy on-premise solutions across 10 Ghanaian institutions.',
        'image' => 'sliders/slide3.png',
        'date' => 'Dec 1, 2025',
        'read_time' => '7 Min Read',
        'link' => '#'
    ]
];
?>

<!-- Article JSON-LD Structured Data -->
<script type="application/ld+json">
[
  {
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "Implementing Zero Trust Architecture in African Financial Institutions",
    "description": "A technical deep-dive into deploying identity-first, Zero Trust network access for banks and fintechs across Ghana and Nigeria.",
    "datePublished": "2025-12-12",
    "publisher": {
      "@type": "Organization",
      "name": "E7 Technology Solutions",
      "logo": "https://e7world.tech/assets/images/logos/E7_Technology_Solutions_logo1.jpeg"
    }
  },
  {
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "Scaling AI Data Pipelines for Low-Bandwidth African Markets",
    "description": "How E7Insight™ optimizes ML model training and inference in connectivity-constrained environments.",
    "datePublished": "2025-12-08",
    "publisher": {
      "@type": "Organization",
      "name": "E7 Technology Solutions",
      "logo": "https://e7world.tech/assets/images/logos/E7_Technology_Solutions_logo1.jpeg"
    }
  },
  {
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "The ROI of a School Management System: EduCore Case Study",
    "description": "Quantifying the operational and financial impact of deploying a cloud-based School Management System versus legacy on-premise solutions.",
    "datePublished": "2025-12-01",
    "publisher": {
      "@type": "Organization",
      "name": "E7 Technology Solutions",
      "logo": "https://e7world.tech/assets/images/logos/E7_Technology_Solutions_logo1.jpeg"
    }
  }
]
</script>

<!-- HERO SECTION -->
<section class="pt-32 pb-20 lg:pt-32 lg:pb-32 bg-slate-900 overflow-hidden relative min-h-[31.25rem] flex items-center">
    <div class="absolute inset-0 z-0">
        <img src="assets/images/sliders/slide5.png" alt="Technology News" class="w-full h-full object-cover opacity-20 mix-blend-luminosity">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/80 to-transparent"></div>
    </div>
    
    <div class="relative w-full max-w-7xl mx-auto h-full px-4 sm:px-6 lg:px-8 z-10 text-center" data-aos="fade-up">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-white/10 border border-white/20 mb-6 backdrop-blur-sm">
            <i class="fas fa-satellite-dish text-brand-blue text-xs"></i>
            <span class="text-white text-xs font-semibold uppercase tracking-wide">News & Insights</span>
        </div>
        
        <h1 class="text-4xl md:text-7xl font-extrabold text-white tracking-tight leading-[1.1] mb-6">
            Engineering Insights &amp; <span class="text-brand-blue">Research.</span>
        </h1>
        
        <p class="text-lg md:text-xl text-slate-300 leading-relaxed max-w-2xl mx-auto">
            Technical research, cybersecurity briefs, and AI engineering deep-dives from E7 Technology Solutions — Africa's leading enterprise technology company.
        </p>
    </div>
</section>

<!-- FEATURED ARTICLE SECTION -->
<section class="py-24 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-12">
            
            <!-- Featured Main (Large Visual) -->
            <div class="xl:col-span-2 group cursor-pointer" data-aos="fade-right">
                <div class="relative rounded-2xl overflow-hidden shadow-lg h-[31.25rem] mb-8">
                    <img src="assets/images/sliders/slide3.png" alt="E7 Expands AI Capabilities" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
                    
                    <div class="absolute bottom-0 left-0 w-full p-10 flex flex-col justify-end">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="bg-brand-blue text-white text-[0.625rem] font-bold uppercase tracking-wider px-3 py-1 rounded-full">Strategic Expansion</span>
                            <span class="text-sm text-slate-300 font-medium"><i class="fas fa-calendar mr-1"></i> December 20, 2025</span>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4 leading-tight group-hover:text-blue-200 transition-colors">
                            E7 Technology Solutions Expands AI Data Architecture Capabilities Across 5 New Markets
                        </h2>
                    </div>
                </div>
                <p class="text-lg text-slate-600 mb-6 leading-relaxed max-w-3xl">
                    We're excited to announce our strategic expansion into Ghana, Tanzania, Uganda, Zambia, and Botswana. This move brings our proprietary AI engineering and machine learning deployment capabilities to critical enterprise sectors across the continent.
                </p>
                <a href="#" class="inline-flex items-center gap-2 text-brand-blue font-bold hover:underline">
                    Read the Executive Brief <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <!-- Recent Updates Sidebar -->
            <div data-aos="fade-left" data-aos-delay="100">
                <h3 class="text-xl font-extrabold text-slate-900 mb-6 flex items-center gap-2">
                    <i class="fas fa-bolt text-brand-blue"></i> Fast Reading
                </h3>
                
                <div class="flex flex-col gap-8">
                    <?php foreach ($recentUpdates as $update): ?>
                    <!-- Sidebar Item -->
                    <a href="<?php echo $update['link']; ?>" class="group flex gap-4">
                        <div class="w-24 h-24 rounded-lg overflow-hidden flex-shrink-0 bg-slate-100">
                            <img src="assets/images/<?php echo $update['image']; ?>" alt="<?php echo htmlspecialchars($update['title']); ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div>
                            <span class="text-[0.625rem] font-bold text-brand-blue uppercase tracking-wider block mb-1"><?php echo htmlspecialchars($update['category']); ?></span>
                            <h4 class="font-bold text-slate-900 group-hover:text-brand-blue transition-colors line-clamp-3 text-sm">
                                <?php echo htmlspecialchars($update['title']); ?>
                            </h4>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- THE GRID (Highly Visual Article Cards) -->
<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-end mb-12" data-aos="fade-up">
            <div>
                <span class="text-brand-blue font-bold tracking-wide uppercase text-sm mb-2 block">Latest Research & Articles</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900">Engineering Insights</h2>
            </div>
            <a href="#" class="hidden md:flex items-center gap-2 text-slate-500 hover:text-brand-blue font-bold transition-colors">
                View All Articles <i class="fas fa-arrow-right text-sm"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($articles as $index => $article): ?>
            <!-- Article Card -->
            <a href="<?php echo $article['link']; ?>" class="group bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-200 hover:shadow-xl transition-all duration-300 flex flex-col" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                <div class="h-56 overflow-hidden relative">
                    <img src="assets/images/<?php echo $article['image']; ?>" alt="<?php echo htmlspecialchars($article['title']); ?>" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute top-4 left-4 <?php echo $article['type_color']; ?> text-white text-[0.625rem] font-bold uppercase tracking-wider px-3 py-1 rounded-full z-10 shadow-sm"><?php echo htmlspecialchars($article['type']); ?></div>
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-brand-blue transition-colors leading-snug"><?php echo htmlspecialchars($article['title']); ?></h3>
                    <p class="text-slate-500 text-sm leading-relaxed flex-1"><?php echo htmlspecialchars($article['excerpt']); ?></p>
                    <div class="mt-6 pt-6 border-t border-slate-100 flex items-center justify-between text-xs font-medium text-slate-400">
                        <span><?php echo $article['date']; ?></span>
                        <span><?php echo $article['read_time']; ?></span>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
        
        <div class="mt-12 text-center md:hidden" data-aos="fade-up">
            <a href="#" class="inline-flex items-center gap-2 text-slate-500 hover:text-brand-blue font-bold transition-colors">
                View All Articles <i class="fas fa-arrow-right text-sm"></i>
            </a>
        </div>
    </div>
</section>

<!-- NEWSLETTER SECTION (Minimalist) -->
<section class="py-24 bg-white border-t border-slate-200" data-aos="zoom-in">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <i class="fas fa-envelope-open-text text-4xl text-brand-blue mb-6"></i>
        <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Intelligence, delivered directly.</h2>
        <p class="text-lg text-slate-500 mb-10 max-w-2xl mx-auto">Join CTOs and engineering leaders across the continent receiving our bi-weekly dispatch of technical briefs and ecosystem analysis.</p>
        
        <form action="#" method="post" class="flex flex-col sm:flex-row gap-4 max-w-xl mx-auto">
            <input type="email" placeholder="Enter your corporate email" required class="flex-1 px-6 py-4 rounded bg-slate-50 border border-slate-200 text-slate-900 focus:outline-none focus:ring-2 focus:ring-brand-blue focus:border-transparent transition-all">
            <button type="submit" class="px-8 py-4 rounded bg-slate-900 text-white font-bold hover:bg-brand-blue transition-colors shadow-sm whitespace-nowrap">
                Subscribe
            </button>
        </form>
    </div>
</section>

<?php include('footer.php'); ?>


