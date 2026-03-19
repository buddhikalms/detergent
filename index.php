<?php 
$pageTitle = "Home - Rainbow Detergents by Ceylon Trading";
$currentPage = "home";
$heroSlides = [
    [
        'image' => 'images/01.png',
        'heading' => 'Cleaner Kitchen, Healthier food.',
    ],
    [
        'image' => 'images/02.png',
        'heading' => 'Cleaner floors, confident steps',
    ],
    [
        'image' => 'images/03.png',
        'heading' => 'Clean ovens, pure bakes.',
    ],
    [
        'image' => 'images/04.png',
        'heading' => 'Spotless power under the hood.',
    ],
];
include 'includes/header.php'; 
?>

<!-- Hero Section -->
<section id="home-hero-slider" class="relative overflow-hidden bg-slate-950 text-white">
    <div class="absolute inset-0">
        <?php foreach ($heroSlides as $index => $slide): ?>
            <div
                class="absolute inset-0 transition-opacity duration-1000 ease-out <?php echo ($index === 0) ? 'opacity-100' : 'opacity-0'; ?>"
                data-slide="<?php echo $index; ?>"
                aria-hidden="<?php echo ($index === 0) ? 'false' : 'true'; ?>"
            >
                <img
                    src="<?php echo htmlspecialchars($slide['image']); ?>"
                    alt="<?php echo htmlspecialchars($slide['heading']); ?>"
                    class="h-full w-full object-cover"
                    loading="<?php echo ($index === 0) ? 'eager' : 'lazy'; ?>"
                    fetchpriority="<?php echo ($index === 0) ? 'high' : 'low'; ?>"
                >
                <div class="absolute inset-0 bg-slate-950/55"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/65 to-slate-950/20"></div>
                <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-slate-950/80 to-transparent"></div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="relative z-10">
        <div class="container mx-auto px-4">
            <div class="flex min-h-[70vh] items-center py-20 md:py-28">
                <div class="max-w-3xl">
                    <span class="mb-6 inline-flex items-center rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-semibold uppercase tracking-[0.28em] text-blue-100 backdrop-blur-sm">
                        Rainbow Detergents by Ceylon Trading
                    </span>

                    <div class="relative min-h-64 md:min-h-72">
                        <?php foreach ($heroSlides as $index => $slide): ?>
                            <div
                                class="absolute inset-0 flex flex-col justify-center transition-all duration-700 ease-out <?php echo ($index === 0) ? 'translate-y-0 opacity-100' : 'translate-y-6 opacity-0'; ?>"
                                data-slide-copy="<?php echo $index; ?>"
                                aria-hidden="<?php echo ($index === 0) ? 'false' : 'true'; ?>"
                            >
                                <h1 class="max-w-2xl text-4xl font-bold leading-tight sm:text-5xl md:text-6xl">
                                    <?php echo htmlspecialchars($slide['heading']); ?>
                                </h1>
                                <p class="mt-6 max-w-2xl text-lg text-slate-100 md:text-xl">
                                    Premium quality detergents and cleaning chemicals backed by 40+ years of industry expertise.
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                        <a href="products.php" class="inline-flex items-center justify-center rounded-lg bg-white px-8 py-4 font-semibold text-blue-700 shadow-lg transition-all hover:scale-105 hover:bg-slate-100">
                            View Products
                        </a>
                        <a href="contact.php" class="inline-flex items-center justify-center rounded-lg border-2 border-white/80 px-8 py-4 font-semibold text-white transition-all hover:scale-105 hover:bg-white hover:text-slate-900">
                            Contact Us
                        </a>
                    </div>

                    <div class="mt-10 flex items-center gap-3">
                        <?php foreach ($heroSlides as $index => $slide): ?>
                            <button
                                type="button"
                                class="h-3 w-10 rounded-full bg-white/35 transition-all duration-300 hover:bg-white/70 <?php echo ($index === 0) ? 'scale-110 bg-white' : ''; ?>"
                                data-slide-trigger="<?php echo $index; ?>"
                                aria-label="Show slide <?php echo $index + 1; ?>"
                                aria-current="<?php echo ($index === 0) ? 'true' : 'false'; ?>"
                            ></button>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V120Z" fill="white"/>
        </svg>
    </div>
</section>

<!-- About Company Short Intro -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                        Welcome to Rainbow Detergents
                    </h2>
                    <p class="text-lg text-gray-600 mb-4">
                        Rainbow Detergents is the dynamic and innovative brand of Ceylon Trading and Plantation Private Limited, a rapidly emerging chemical manufacturer and distributor in Sri Lanka.
                    </p>
                    <p class="text-lg text-gray-600 mb-6">
                        Under the expert guidance of Mr. Keith Sumanasena, with over 40 years of industry experience, we deliver exceptional chemical solutions that maintain the highest standards of quality, safety, and environmental responsibility.
                    </p>
                    <a href="about.php" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-all">
                        Learn More About Us
                    </a>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-blue-100 to-green-100 rounded-lg p-8 shadow-xl">
                        <div class="space-y-4">
                            <div class="flex items-center gap-4">
                                <div class="bg-blue-600 text-white p-3 rounded-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">40+ Years Expertise</h3>
                                    <p class="text-gray-600">Industry veteran guidance</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="bg-green-600 text-white p-3 rounded-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Eco-Friendly</h3>
                                    <p class="text-gray-600">Biodegradable formulations</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="bg-teal-600 text-white p-3 rounded-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Comprehensive Range</h3>
                                    <p class="text-gray-600">50+ premium products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Featured Products</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Discover our range of high-quality cleaning solutions for every need
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Product Card 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all transform hover:-translate-y-2">
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-6 text-white">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold">Housekeeping</h3>
                </div>
                <div class="p-6">
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-gray-700">
                            <span class="text-green-500 mr-2">✓</span> All Purpose Cleaner
                        </li>
                        <li class="flex items-center text-gray-700">
                            <span class="text-green-500 mr-2">✓</span> Floor Care
                        </li>
                        <li class="flex items-center text-gray-700">
                            <span class="text-green-500 mr-2">✓</span> Disinfectant
                        </li>
                        <li class="flex items-center text-gray-700">
                            <span class="text-green-500 mr-2">✓</span> Glass Cleaner
                        </li>
                    </ul>
                    <a href="products.php#housekeeping" class="block text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        View Details
                    </a>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all transform hover:-translate-y-2">
                <div class="bg-gradient-to-br from-teal-500 to-teal-600 p-6 text-white">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold">Laundry Chemicals</h3>
                </div>
                <div class="p-6">
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-gray-700">
                            <span class="text-green-500 mr-2">✓</span> Liquid Detergent
                        </li>
                        <li class="flex items-center text-gray-700">
                            <span class="text-green-500 mr-2">✓</span> Fabric Softener
                        </li>
                        <li class="flex items-center text-gray-700">
                            <span class="text-green-500 mr-2">✓</span> Liquid Bleach
                        </li>
                        <li class="flex items-center text-gray-700">
                            <span class="text-green-500 mr-2">✓</span> Powder Range
                        </li>
                    </ul>
                    <a href="products.php#laundry" class="block text-center bg-teal-600 text-white py-2 rounded-lg hover:bg-teal-700 transition-colors">
                        View Details
                    </a>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all transform hover:-translate-y-2">
                <div class="bg-gradient-to-br from-green-500 to-green-600 p-6 text-white">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold">Dishwashing</h3>
                </div>
                <div class="p-6">
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-gray-700">
                            <span class="text-green-500 mr-2">✓</span> Supra Fine
                        </li>
                        <li class="flex items-center text-gray-700">
                            <span class="text-green-500 mr-2">✓</span> Ultra Fine
                        </li>
                        <li class="flex items-center text-gray-700">
                            <span class="text-green-500 mr-2">✓</span> Rinsa Adida
                        </li>
                        <li class="flex items-center text-gray-700">
                            <span class="text-green-500 mr-2">✓</span> De-Scaler
                        </li>
                    </ul>
                    <a href="products.php#dishwashing" class="block text-center bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition-colors">
                        View Details
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="products.php" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-all transform hover:scale-105">
                View All Products
            </a>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Why Choose Rainbow Detergents</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Our commitment to excellence is backed by decades of expertise and innovation
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
            <!-- Feature 1 -->
            <div class="text-center p-6 rounded-xl hover:bg-blue-50 transition-all">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Quality Assurance</h3>
                <p class="text-gray-600">
                    Top-tier, effective, and reliable chemical solutions meeting the highest standards
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="text-center p-6 rounded-xl hover:bg-green-50 transition-all">
                <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Sustainability</h3>
                <p class="text-gray-600">
                    Environmentally friendly and biodegradable products that protect our planet
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="text-center p-6 rounded-xl hover:bg-teal-50 transition-all">
                <div class="w-20 h-20 bg-gradient-to-br from-teal-500 to-teal-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Innovation</h3>
                <p class="text-gray-600">
                    Continuous development of formulas to meet evolving market demands
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="text-center p-6 rounded-xl hover:bg-blue-50 transition-all">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-600 to-teal-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Customer-Centric</h3>
                <p class="text-gray-600">
                    Dedicated to understanding and fulfilling your unique requirements
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Trust & Statistics Section -->
<section class="py-16 bg-gradient-to-br from-blue-600 to-teal-500 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div class="p-6">
                    <div class="text-5xl font-bold mb-2">40+</div>
                    <div class="text-xl text-blue-100">Years of Expertise</div>
                </div>
                <div class="p-6">
                    <div class="text-5xl font-bold mb-2">50+</div>
                    <div class="text-xl text-blue-100">Premium Products</div>
                </div>
                <div class="p-6">
                    <div class="text-5xl font-bold mb-2">100%</div>
                    <div class="text-xl text-blue-100">Quality Guaranteed</div>
                </div>
                <div class="p-6">
                    <div class="text-5xl font-bold mb-2">24/7</div>
                    <div class="text-xl text-blue-100">Customer Support</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-xl p-8 md:p-12 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                Ready to Experience Superior Cleaning Solutions?
            </h2>
            <p class="text-xl text-gray-600 mb-8">
                Contact us today for bulk orders, custom solutions, or to learn more about our products
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="contact.php" class="bg-blue-600 text-white px-8 py-4 rounded-lg font-semibold hover:bg-blue-700 transition-all transform hover:scale-105">
                    Get in Touch
                </a>
                <a href="products.php" class="bg-gray-200 text-gray-800 px-8 py-4 rounded-lg font-semibold hover:bg-gray-300 transition-all">
                    Browse Catalogue
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    (function() {
        const slider = document.getElementById('home-hero-slider');

        if (!slider) {
            return;
        }

        const slides = slider.querySelectorAll('[data-slide]');
        const slideCopies = slider.querySelectorAll('[data-slide-copy]');
        const triggers = slider.querySelectorAll('[data-slide-trigger]');

        if (!slides.length || slides.length !== slideCopies.length || slides.length !== triggers.length) {
            return;
        }

        let activeIndex = 0;
        let autoplayId = null;

        const setActiveSlide = (nextIndex) => {
            activeIndex = nextIndex;

            slides.forEach((slide, index) => {
                const isActive = index === activeIndex;
                slide.classList.toggle('opacity-100', isActive);
                slide.classList.toggle('opacity-0', !isActive);
                slide.setAttribute('aria-hidden', isActive ? 'false' : 'true');
            });

            slideCopies.forEach((copy, index) => {
                const isActive = index === activeIndex;
                copy.classList.toggle('opacity-100', isActive);
                copy.classList.toggle('opacity-0', !isActive);
                copy.classList.toggle('translate-y-0', isActive);
                copy.classList.toggle('translate-y-6', !isActive);
                copy.setAttribute('aria-hidden', isActive ? 'false' : 'true');
            });

            triggers.forEach((trigger, index) => {
                const isActive = index === activeIndex;
                trigger.classList.toggle('bg-white', isActive);
                trigger.classList.toggle('bg-white/35', !isActive);
                trigger.classList.toggle('scale-110', isActive);
                trigger.setAttribute('aria-current', isActive ? 'true' : 'false');
            });
        };

        const startAutoplay = () => {
            window.clearInterval(autoplayId);
            autoplayId = window.setInterval(() => {
                setActiveSlide((activeIndex + 1) % slides.length);
            }, 5000);
        };

        triggers.forEach((trigger, index) => {
            trigger.addEventListener('click', () => {
                setActiveSlide(index);
                startAutoplay();
            });
        });

        slider.addEventListener('mouseenter', () => window.clearInterval(autoplayId));
        slider.addEventListener('mouseleave', startAutoplay);

        setActiveSlide(0);
        startAutoplay();
    })();
</script>

<?php include 'includes/footer.php'; ?>
