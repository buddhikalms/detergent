<?php 
$pageTitle = "Products - Rainbow Detergents by Ceylon Trading";
$currentPage = "products";
$productImageMap = [];
$productImageDirectory = __DIR__ . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'products';

if (is_dir($productImageDirectory)) {
    foreach (scandir($productImageDirectory) as $productImageFile) {
        $productImagePath = $productImageDirectory . DIRECTORY_SEPARATOR . $productImageFile;
        $productImageExtension = strtolower(pathinfo($productImagePath, PATHINFO_EXTENSION));

        if (!is_file($productImagePath) || !in_array($productImageExtension, ['jpg', 'jpeg', 'png'], true)) {
            continue;
        }

        $productName = strtolower(pathinfo($productImagePath, PATHINFO_FILENAME));
        $productImageMap[$productName] = 'images/products/' . basename($productImagePath);
    }
}

include 'includes/header.php'; 
?>

<!-- Page Header -->
<section class="bg-gradient-to-br from-blue-600 to-teal-500 text-white py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Products</h1>
            <p class="text-xl text-blue-100">
                Comprehensive range of premium cleaning solutions for every need
            </p>
        </div>
    </div>
</section>

<!-- Product Categories Filter -->
<section class="py-8 bg-white sticky top-20 z-40 shadow-md">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center gap-3">
            <a href="#housekeeping" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-600 hover:text-white transition-all font-medium">
                Housekeeping
            </a>
            <a href="#specialty" class="px-4 py-2 bg-teal-100 text-teal-700 rounded-lg hover:bg-teal-600 hover:text-white transition-all font-medium">
                Specialty Chemicals
            </a>
            <a href="#dishwashing" class="px-4 py-2 bg-green-100 text-green-700 rounded-lg hover:bg-green-600 hover:text-white transition-all font-medium">
                Dishwashing
            </a>
            <a href="#oven" class="px-4 py-2 bg-orange-100 text-orange-700 rounded-lg hover:bg-orange-600 hover:text-white transition-all font-medium">
                Oven & Grill
            </a>
            <a href="#laundry" class="px-4 py-2 bg-purple-100 text-purple-700 rounded-lg hover:bg-purple-600 hover:text-white transition-all font-medium">
                Laundry
            </a>
        </div>
    </div>
</section>

<!-- Housekeeping Products -->
<section id="housekeeping" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Housekeeping Detergents</h2>
                <p class="text-xl text-gray-600">Professional cleaning solutions for all surfaces</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- All Purpose -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-4 text-white">
                        <h3 class="text-xl font-bold">Rainbow All Purpose</h3>
                        <p class="text-sm text-blue-100">RB-AP</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Concentrated, semi-viscous liquid for cleaning floors, showers, tubs, washbasins, toilet bowls, sinks, and drains. Removes greasy soils, protein, carbohydrates, and dirt.
                        </p>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Available in:</span>
                            <div class="flex gap-2 mt-1">
                                <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded text-sm">5L</span>
                                <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded text-sm">25L</span>
                            </div>
                        </div>
                        <div class="text-lg font-bold text-gray-800">
                            LKR 275/L
                        </div>
                    </div>
                </div>

                <!-- Floor Care -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                    <div class="bg-gradient-to-br from-teal-500 to-teal-600 p-4 text-white">
                        <h3 class="text-xl font-bold">Rainbow Floor Care</h3>
                        <p class="text-sm text-teal-100">RB-FC</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Concentrated cleaner with attractive fragrance for effective cleaning of all floor types - tiles, wood, cement, vinyl, linoleum, rubber, porous and non-porous surfaces.
                        </p>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Available in:</span>
                            <div class="flex gap-2 mt-1">
                                <span class="px-3 py-1 bg-teal-100 text-teal-700 rounded text-sm">5L</span>
                                <span class="px-3 py-1 bg-teal-100 text-teal-700 rounded text-sm">25L</span>
                            </div>
                        </div>
                        <div class="text-lg font-bold text-gray-800">
                            LKR 312/L
                        </div>
                    </div>
                </div>

                <!-- Disinfectant -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                    <div class="bg-gradient-to-br from-green-500 to-green-600 p-4 text-white">
                        <h3 class="text-xl font-bold">Rainbow Disinfectant</h3>
                        <p class="text-sm text-green-100">RB-DIS</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Concentrated detergent & disinfectant cleaner formulated with quaternary ammonium compound for general cleaning and disinfection of common areas.
                        </p>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Available in:</span>
                            <div class="flex gap-2 mt-1">
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded text-sm">5L</span>
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded text-sm">25L</span>
                            </div>
                        </div>
                        <div class="text-lg font-bold text-gray-800">
                            LKR 312/L
                        </div>
                    </div>
                </div>

                <!-- Toilet Bowl Cleaner -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                    <div class="bg-gradient-to-br from-indigo-500 to-indigo-600 p-4 text-white">
                        <h3 class="text-xl font-bold">Rainbow Toilet Bowl Cleaner</h3>
                        <p class="text-sm text-indigo-100">RB-TBC</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Effective solution for cleaning, disinfecting, and deodorizing toilet bowls in hotels, offices, homes, schools, hospitals, and more.
                        </p>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Available in:</span>
                            <div class="flex gap-2 mt-1">
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded text-sm">5L</span>
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded text-sm">25L</span>
                            </div>
                        </div>
                        <div class="text-lg font-bold text-gray-800">
                            LKR 395/L
                        </div>
                    </div>
                </div>

                <!-- Liquid Hand Soap -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                    <div class="bg-gradient-to-br from-orange-500 to-orange-600 p-4 text-white">
                        <h3 class="text-xl font-bold">Rainbow Liquid Hand Soap</h3>
                        <p class="text-sm text-orange-100">RB-LHS</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Concentrated bacterial rinse aid formula to thoroughly clean hands, prevent microbial activity, and inhibit the spread of germs and pathogens.
                        </p>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Available in:</span>
                            <div class="flex gap-2 mt-1">
                                <span class="px-3 py-1 bg-orange-100 text-orange-700 rounded text-sm">5L</span>
                                <span class="px-3 py-1 bg-orange-100 text-orange-700 rounded text-sm">25L</span>
                            </div>
                        </div>
                        <div class="text-lg font-bold text-gray-800">
                            LKR 420/L
                        </div>
                    </div>
                </div>

                <!-- Glass Cleaner -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                    <div class="bg-gradient-to-br from-sky-500 to-sky-600 p-4 text-white">
                        <h3 class="text-xl font-bold">Rainbow Glass Cleaner</h3>
                        <p class="text-sm text-sky-100">RB-GC</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Advanced performance cleaner that eliminates streaks and smears, quickly lifting grime from windows, mirrors, windscreens, glass, chrome, stainless steel, and lighting fixtures.
                        </p>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Available in:</span>
                            <div class="flex gap-2 mt-1">
                                <span class="px-3 py-1 bg-sky-100 text-sky-700 rounded text-sm">5L</span>
                                <span class="px-3 py-1 bg-sky-100 text-sky-700 rounded text-sm">25L</span>
                            </div>
                        </div>
                        <div class="text-lg font-bold text-gray-800">
                            LKR 430/L
                        </div>
                    </div>
                </div>

                <!-- Tile Cleaner -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 p-4 text-white">
                        <h3 class="text-xl font-bold">Rainbow Tile Cleaner</h3>
                        <p class="text-sm text-purple-100">RB-TC</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Acidic cleaner specially formulated to remove stubborn stains such as grout, soap scum, lime scale, and rust from mosaic tiles.
                        </p>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Available in:</span>
                            <div class="flex gap-2 mt-1">
                                <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded text-sm">5L</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded text-sm">25L</span>
                            </div>
                        </div>
                        <div class="text-lg font-bold text-gray-800">
                            LKR 545/L
                        </div>
                    </div>
                </div>

                <!-- Carpet Shampoo -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                    <div class="bg-gradient-to-br from-rose-500 to-rose-600 p-4 text-white">
                        <h3 class="text-xl font-bold">Rainbow Carpet Shampoo</h3>
                        <p class="text-sm text-rose-100">RB-CS</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Specially formulated for carpet cleaning systems, effectively cleaning any carpet type with safe solvents to ensure quick drying.
                        </p>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Available in:</span>
                            <div class="flex gap-2 mt-1">
                                <span class="px-3 py-1 bg-rose-100 text-rose-700 rounded text-sm">5L</span>
                                <span class="px-3 py-1 bg-rose-100 text-rose-700 rounded text-sm">25L</span>
                            </div>
                        </div>
                        <div class="text-lg font-bold text-gray-800">
                            LKR 635/L
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Specialty Chemicals -->
<section id="specialty" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Specialty Chemicals</h2>
                <p class="text-xl text-gray-600">Specialized solutions for specific cleaning needs</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Drain Cleaner -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all border-2 border-gray-100">
                    <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 p-4 text-white">
                        <h3 class="text-xl font-bold">Rainbow Drain Cleaner</h3>
                        <p class="text-sm text-yellow-100">RB-DC</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Concentrated, semi-viscous liquid designed to dissolve grease, food waste, sanitary pads, soap deposits, and similar blockages.
                        </p>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Available in:</span>
                            <div class="flex gap-2 mt-1">
                                <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded text-sm">5L</span>
                                <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded text-sm">25L</span>
                            </div>
                        </div>
                        <div class="text-lg font-bold text-gray-800">
                            LKR 400/L
                        </div>
                    </div>
                </div>

                <!-- Stainless Steel Polish -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all border-2 border-gray-100">
                    <div class="bg-gradient-to-br from-gray-500 to-gray-600 p-4 text-white">
                        <h3 class="text-xl font-bold">Rainbow Stainless Steel Polish</h3>
                        <p class="text-sm text-gray-100">RB-SSP</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Effectively removes smears, fingerprint marks, and light soil deposits from all stainless-steel equipment.
                        </p>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Available in:</span>
                            <div class="flex gap-2 mt-1">
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded text-sm">5L</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded text-sm">25L</span>
                            </div>
                        </div>
                        <div class="text-sm text-gray-500 italic">
                            Contact for pricing
                        </div>
                    </div>
                </div>

                <!-- Fresh Guard -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all border-2 border-gray-100">
                    <div class="bg-gradient-to-br from-lime-500 to-lime-600 p-4 text-white">
                        <h3 class="text-xl font-bold">Rainbow Fresh Guard</h3>
                        <p class="text-sm text-lime-100">RB-FG</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Fast-acting sanitizer for raw fruits and vegetables. Eliminates 99.99% of germs, gentle on produce while preserving taste and texture.
                        </p>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Available in:</span>
                            <div class="flex gap-2 mt-1">
                                <span class="px-3 py-1 bg-lime-100 text-lime-700 rounded text-sm">5L</span>
                                <span class="px-3 py-1 bg-lime-100 text-lime-700 rounded text-sm">25L</span>
                            </div>
                        </div>
                        <div class="text-sm text-gray-500 italic">
                            Contact for pricing
                        </div>
                    </div>
                </div>

                <!-- EcoGel -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all border-2 border-gray-100">
                    <div class="bg-gradient-to-br from-emerald-500 to-emerald-600 p-4 text-white">
                        <h3 class="text-xl font-bold">Rainbow EcoGel</h3>
                        <p class="text-sm text-emerald-100">RB-EG</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Gentle, broad-spectrum antimicrobial hand gel cleanser that kills 99.9% of common germs within 15 seconds. Waterless formula.
                        </p>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Available in:</span>
                            <div class="flex gap-2 mt-1">
                                <span class="px-3 py-1 bg-emerald-100 text-emerald-700 rounded text-sm">5L</span>
                                <span class="px-3 py-1 bg-emerald-100 text-emerald-700 rounded text-sm">25L</span>
                            </div>
                        </div>
                        <div class="text-sm text-gray-500 italic">
                            Contact for pricing
                        </div>
                    </div>
                </div>

                <!-- Detarnisher -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all border-2 border-gray-100">
                    <div class="bg-gradient-to-br from-red-500 to-red-600 p-4 text-white">
                        <h3 class="text-xl font-bold">Rainbow Detarnisher</h3>
                        <p class="text-sm text-red-100">RB-DT</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Specially formulated acidic solution designed to remove tarnish from silverware rapidly and effectively, restoring original shine.
                        </p>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Available in:</span>
                            <div class="flex gap-2 mt-1">
                                <span class="px-3 py-1 bg-red-100 text-red-700 rounded text-sm">5L</span>
                                <span class="px-3 py-1 bg-red-100 text-red-700 rounded text-sm">25L</span>
                            </div>
                        </div>
                        <div class="text-sm text-gray-500 italic">
                            Contact for pricing
                        </div>
                    </div>
                </div>

                <!-- Special Activator -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all border-2 border-gray-100">
                    <div class="bg-gradient-to-br from-cyan-500 to-cyan-600 p-4 text-white">
                        <h3 class="text-xl font-bold">Rainbow Special Activator</h3>
                        <p class="text-sm text-cyan-100">RB-SA</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Optimizes and maintains bacterial and pH levels in sewage systems. Minimizes sludge buildup and reduces unpleasant odors.
                        </p>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Available in:</span>
                            <div class="flex gap-2 mt-1">
                                <span class="px-3 py-1 bg-cyan-100 text-cyan-700 rounded text-sm">2kg</span>
                            </div>
                        </div>
                        <div class="text-lg font-bold text-gray-800">
                            LKR 4,855/kg
                        </div>
                    </div>
                </div>

                <!-- De-stainer -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all border-2 border-gray-100">
                    <div class="bg-gradient-to-br from-slate-500 to-slate-600 p-4 text-white">
                        <h3 class="text-xl font-bold">Rainbow De-stainer</h3>
                        <p class="text-sm text-slate-100">RB-DST</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Free-flowing chlorinated powder for soaking, destaining, and sanitizing tea/coffee pots, cups, chopping boards, and food handling equipment.
                        </p>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Available in:</span>
                            <div class="flex gap-2 mt-1">
                                <span class="px-3 py-1 bg-slate-100 text-slate-700 rounded text-sm">25kg</span>
                            </div>
                        </div>
                        <div class="text-lg font-bold text-gray-800">
                            LKR 850/kg
                        </div>
                    </div>
                </div>

                <!-- Air Freshener -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all border-2 border-gray-100">
                    <div class="bg-gradient-to-br from-pink-500 to-pink-600 p-4 text-white">
                        <h3 class="text-xl font-bold">Rainbow Air Freshener</h3>
                        <p class="text-sm text-pink-100">RB-AF</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Designed to effectively deodorize various enclosed spaces including offices, bathrooms, bedrooms, kitchens, and classrooms.
                        </p>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Available in:</span>
                            <div class="flex gap-2 mt-1">
                                <span class="px-3 py-1 bg-pink-100 text-pink-700 rounded text-sm">5L</span>
                                <span class="px-3 py-1 bg-pink-100 text-pink-700 rounded text-sm">25L</span>
                            </div>
                        </div>
                        <div class="text-lg font-bold text-gray-800">
                            LKR 315/L
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Dishwashing Products -->
<section id="dishwashing" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Dishwashing Products</h2>
                <p class="text-xl text-gray-600">Complete dishwashing solutions for manual and machine operations</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Supra Fine -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-4 text-white">
                        <h3 class="text-xl font-bold">Rainbow Supra Fine</h3>
                        <p class="text-sm text-blue-100">RB-SF</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Specially formulated for manual dishwashing and pre-soak detergent. Ideal for cleaning pots, pans, and kitchen utensils. Loosens food soils effectively.
                        </p>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Available in:</span>
                            <div class="flex gap-2 mt-1">
                                <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded text-sm">5L</span>
                                <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded text-sm">25L</span>
                            </div>
                        </div>
                        <div class="text-lg font-bold text-gray-800">
                            LKR 312/L
                        </div>
                    </div>
                </div>

                <!-- Ultra Fine -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                    <div class="bg-gradient-to-br from-green-500 to-green-600 p-4 text-white">
                        <h3 class="text-xl font-bold">Rainbow Ultra Fine</h3>
                        <p class="text-sm text-green-100">RB-UF</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Chlorinated formulation with alkaline base for maximum detergent action. Exclusively for machine dishwashing with deflocculating, emulsification, and solubilization.
                        </p>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Available in:</span>
                            <div class="flex gap-2 mt-1">
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded text-sm">5L</span>
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded text-sm">25L</span>
                            </div>
                        </div>
                        <div class="text-lg font-bold text-gray-800">
                            LKR 745/L
                        </div>
                    </div>
                </div>

                <!-- Rinsa Adida -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 p-4 text-white">
                        <h3 class="text-xl font-bold">Rainbow Rinsa Adida</h3>
                        <p class="text-sm text-purple-100">RB-RA</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Formulated with safe solvents and pre-rinse agents for single/twin tank dishwashers. Removes water deposits, leaving dishes sparkling clean.
                        </p>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Available in:</span>
                            <div class="flex gap-2 mt-1">
                                <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded text-sm">5L</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded text-sm">25L</span>
                            </div>
                        </div>
                        <div class="text-lg font-bold text-gray-800">
                            LKR 1,070/L
                        </div>
                    </div>
                </div>

                <!-- De-Scaler -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                    <div class="bg-gradient-to-br from-teal-500 to-teal-600 p-4 text-white">
                        <h3 class="text-xl font-bold">Rainbow De-Scaler</h3>
                        <p class="text-sm text-teal-100">RB-DSC</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Concentrated solution to remove lime scale, stains, and film from all types of dishwashing machines, enhancing performance and longevity.
                        </p>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Available in:</span>
                            <div class="flex gap-2 mt-1">
                                <span class="px-3 py-1 bg-teal-100 text-teal-700 rounded text-sm">5L</span>
                                <span class="px-3 py-1 bg-teal-100 text-teal-700 rounded text-sm">25L</span>
                            </div>
                        </div>
                        <div class="text-lg font-bold text-gray-800">
                            LKR 1,295/L
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Oven & Grill Cleaners -->
<section id="oven" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Oven | Grill | Hotplate Cleaners</h2>
                <p class="text-xl text-gray-600">Heavy-duty solutions for tough cooking equipment</p>
            </div>

            <div class="max-w-md mx-auto">
                <!-- Oven Cleaner -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all border-2 border-gray-100">
                    <div class="bg-gradient-to-br from-orange-500 to-red-500 p-4 text-white">
                        <h3 class="text-xl font-bold">Rainbow Oven Cleaner</h3>
                        <p class="text-sm text-orange-100">RB-OC</p>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Highly efficient modern formula combining penetrates, surface active agents, and alkalis to react with stubborn foods, soils, grease, carbon deposits, and oxidized oils.
                        </p>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Available in:</span>
                            <div class="flex gap-2 mt-1">
                                <span class="px-3 py-1 bg-orange-100 text-orange-700 rounded text-sm">5L</span>
                                <span class="px-3 py-1 bg-orange-100 text-orange-700 rounded text-sm">25L</span>
                            </div>
                        </div>
                        <div class="text-lg font-bold text-gray-800">
                            LKR 420/L
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Laundry Chemicals -->
<section id="laundry" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Laundry Chemicals</h2>
                <p class="text-xl text-gray-600">Complete laundry solutions - liquid and powder range</p>
            </div>

            <!-- Liquid Range -->
            <div class="mb-12">
                <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Liquid Range</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Liquid Bleach -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                        <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 p-4 text-white">
                            <h3 class="text-xl font-bold">Rainbow Liquid Bleach</h3>
                            <p class="text-sm text-yellow-100">RB-LB</p>
                        </div>
                        <div class="p-6">
                            <p class="text-gray-600 mb-4">
                                Concentrated liquid chlorine bleach with high chlorine content. Ideal for bleaching white fabrics and enhancing cleaning power.
                            </p>
                            <div class="mb-4">
                                <span class="text-sm text-gray-500">Available in:</span>
                                <div class="flex gap-2 mt-1">
                                    <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded text-sm">5L</span>
                                    <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded text-sm">25L</span>
                                </div>
                            </div>
                            <div class="text-lg font-bold text-gray-800">
                                LKR 475/L
                            </div>
                        </div>
                    </div>

                    <!-- Fabric Softener -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                        <div class="bg-gradient-to-br from-pink-500 to-pink-600 p-4 text-white">
                            <h3 class="text-xl font-bold">Rainbow Softener</h3>
                            <p class="text-sm text-pink-100">RB-FS</p>
                        </div>
                        <div class="p-6">
                            <p class="text-gray-600 mb-4">
                                Concentrated liquid fabric softener with cationic agents and fragrance. Reduces drying time, rolling on ironers, and fabric static.
                            </p>
                            <div class="mb-4">
                                <span class="text-sm text-gray-500">Available in:</span>
                                <div class="flex gap-2 mt-1">
                                    <span class="px-3 py-1 bg-pink-100 text-pink-700 rounded text-sm">5L</span>
                                    <span class="px-3 py-1 bg-pink-100 text-pink-700 rounded text-sm">25L</span>
                                </div>
                            </div>
                            <div class="text-lg font-bold text-gray-800">
                                LKR 500/L
                            </div>
                        </div>
                    </div>

                    <!-- Liquid Detergent -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                        <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-4 text-white">
                            <h3 class="text-xl font-bold">Rainbow Liquid Detergent</h3>
                            <p class="text-sm text-blue-100">RB-LD</p>
                        </div>
                        <div class="p-6">
                            <p class="text-gray-600 mb-4">
                                Heavy-duty liquid detergent with surfactants, sequestering agents, and optical brighteners for exceptional cleaning results.
                            </p>
                            <div class="mb-4">
                                <span class="text-sm text-gray-500">Available in:</span>
                                <div class="flex gap-2 mt-1">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded text-sm">5L</span>
                                    <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded text-sm">25L</span>
                                </div>
                            </div>
                            <div class="text-lg font-bold text-gray-800">
                                LKR 530/L
                            </div>
                        </div>
                    </div>

                    <!-- Delight Emulsifier -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                        <div class="bg-gradient-to-br from-green-500 to-green-600 p-4 text-white">
                            <h3 class="text-xl font-bold">Rainbow Delight</h3>
                            <p class="text-sm text-green-100">RB-DE</p>
                        </div>
                        <div class="p-6">
                            <p class="text-gray-600 mb-4">
                                Highly concentrated liquid emulsifier with surface-active agents. Breaks down and disperses heavy oils, grease, and stains.
                            </p>
                            <div class="mb-4">
                                <span class="text-sm text-gray-500">Available in:</span>
                                <div class="flex gap-2 mt-1">
                                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded text-sm">5L</span>
                                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded text-sm">25L</span>
                                </div>
                            </div>
                            <div class="text-lg font-bold text-gray-800">
                                LKR 865/L
                            </div>
                        </div>
                    </div>

                    <!-- Sour -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                        <div class="bg-gradient-to-br from-purple-500 to-purple-600 p-4 text-white">
                            <h3 class="text-xl font-bold">Rainbow Sour</h3>
                            <p class="text-sm text-purple-100">RB-SR1</p>
                        </div>
                        <div class="p-6">
                            <p class="text-gray-600 mb-4">
                                Concentrated liquid laundry sour to neutralize pH in finished wash. Minimizes greying and yellowing of fabrics, prolonging life cycle.
                            </p>
                            <div class="mb-4">
                                <span class="text-sm text-gray-500">Available in:</span>
                                <div class="flex gap-2 mt-1">
                                    <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded text-sm">5L</span>
                                    <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded text-sm">25L</span>
                                </div>
                            </div>
                            <div class="text-lg font-bold text-gray-800">
                                LKR 920/L
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Powder Range -->
            <div>
                <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Powder Range</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Luminous -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                        <div class="bg-gradient-to-br from-indigo-500 to-indigo-600 p-4 text-white">
                            <h3 class="text-xl font-bold">Rainbow Luminous</h3>
                            <p class="text-sm text-indigo-100">RB-LMS</p>
                        </div>
                        <div class="p-6">
                            <p class="text-gray-600 mb-4">
                                High-grade powdered one-shot detergent with alkaline components, wetting agents, optical brighteners, and bluing agent.
                            </p>
                            <div class="mb-4">
                                <span class="text-sm text-gray-500">Available in:</span>
                                <div class="flex gap-2 mt-1">
                                    <span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded text-sm">25kg</span>
                                </div>
                            </div>
                            <div class="text-lg font-bold text-gray-800">
                                LKR 560/kg
                            </div>
                        </div>
                    </div>

                    <!-- Plaina -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                        <div class="bg-gradient-to-br from-teal-500 to-teal-600 p-4 text-white">
                            <h3 class="text-xl font-bold">Rainbow Plaina</h3>
                            <p class="text-sm text-teal-100">RB-PLN</p>
                        </div>
                        <div class="p-6">
                            <p class="text-gray-600 mb-4">
                                Alkaline laundry detergent for soiled linen. Suitable for washing whites, colors, cottons, and synthetics with optical brighteners.
                            </p>
                            <div class="mb-4">
                                <span class="text-sm text-gray-500">Available in:</span>
                                <div class="flex gap-2 mt-1">
                                    <span class="px-3 py-1 bg-teal-100 text-teal-700 rounded text-sm">25kg</span>
                                </div>
                            </div>
                            <div class="text-lg font-bold text-gray-800">
                                LKR 620/kg
                            </div>
                        </div>
                    </div>

                    <!-- Oxy Bleach -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                        <div class="bg-gradient-to-br from-cyan-500 to-cyan-600 p-4 text-white">
                            <h3 class="text-xl font-bold">Rainbow Oxy Bleach</h3>
                            <p class="text-sm text-teal-100">RB-OB</p>
                        </div>
                        <div class="p-6">
                            <p class="text-gray-600 mb-4">
                                Perborate-based laundry bleach for mild, color-safe bleaching of synthetic blend garments and fabrics.
                            </p>
                            <div class="mb-4">
                                <span class="text-sm text-gray-500">Available in:</span>
                                <div class="flex gap-2 mt-1">
                                    <span class="px-3 py-1 bg-cyan-100 text-cyan-700 rounded text-sm">25kg</span>
                                </div>
                            </div>
                            <div class="text-lg font-bold text-gray-800">
                                LKR 660/kg
                            </div>
                        </div>
                    </div>

                    <!-- Supra Glamer -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                        <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-4 text-white">
                            <h3 class="text-xl font-bold">Rainbow Supra Glamer</h3>
                            <p class="text-sm text-blue-100">RB-SG</p>
                        </div>
                        <div class="p-6">
                            <p class="text-gray-600 mb-4">
                                Extra heavy-duty alkaline detergent for badly soiled linen. Formulated with optical brighteners and pleasant fragrance.
                            </p>
                            <div class="mb-4">
                                <span class="text-sm text-gray-500">Available in:</span>
                                <div class="flex gap-2 mt-1">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded text-sm">25kg</span>
                                </div>
                            </div>
                            <div class="text-lg font-bold text-gray-800">
                                LKR 670/kg
                            </div>
                        </div>
                    </div>

                    <!-- Supra Radiance -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                        <div class="bg-gradient-to-br from-violet-500 to-violet-600 p-4 text-white">
                            <h3 class="text-xl font-bold">Rainbow Supra Radiance</h3>
                            <p class="text-sm text-violet-100">RB-SR2</p>
                        </div>
                        <div class="p-6">
                            <p class="text-gray-600 mb-4">
                                High-grade concentrated alkaline detergent with wetting agents, optical brighteners, and bluing agent for superior cleaning.
                            </p>
                            <div class="mb-4">
                                <span class="text-sm text-gray-500">Available in:</span>
                                <div class="flex gap-2 mt-1">
                                    <span class="px-3 py-1 bg-violet-100 text-violet-700 rounded text-sm">25kg</span>
                                </div>
                            </div>
                            <div class="text-lg font-bold text-gray-800">
                                LKR 765/kg
                            </div>
                        </div>
                    </div>

                    <!-- Supra Bleach -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                        <div class="bg-gradient-to-br from-amber-500 to-amber-600 p-4 text-white">
                            <h3 class="text-xl font-bold">Rainbow Supra Bleach</h3>
                            <p class="text-sm text-amber-100">RB-SB</p>
                        </div>
                        <div class="p-6">
                            <p class="text-gray-600 mb-4">
                                Chlorine-based laundry bleach for maximum bleaching efficiency. Ideal for white cotton garments and colorfast cottons.
                            </p>
                            <div class="mb-4">
                                <span class="text-sm text-gray-500">Available in:</span>
                                <div class="flex gap-2 mt-1">
                                    <span class="px-3 py-1 bg-amber-100 text-amber-700 rounded text-sm">25kg</span>
                                </div>
                            </div>
                            <div class="text-lg font-bold text-gray-800">
                                LKR 1,395/kg
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto bg-gradient-to-br from-blue-600 to-teal-500 rounded-2xl shadow-xl p-8 md:p-12 text-white text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Need Help Choosing the Right Product?
            </h2>
            <p class="text-xl text-blue-100 mb-8">
                Our team of experts is ready to assist you in selecting the perfect cleaning solutions for your needs
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="contact.php" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-blue-50 transition-all transform hover:scale-105">
                    Contact Our Team
                </a>
                <a href="tel:+94113473473" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-all">
                    Call +94 113 473 473
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    (function() {
        const productImageMap = <?php echo json_encode($productImageMap, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;
        const productTitles = document.querySelectorAll('section[id] h3.text-xl.font-bold');

        productTitles.forEach((title) => {
            const productName = title.textContent.trim();
            const imagePath = productImageMap[productName.toLowerCase()];
            const card = title.closest('.bg-white.rounded-xl.shadow-lg');
            const cardHeader = title.closest('div[class*="bg-gradient-to-br"]');

            if (!productName || !imagePath || !card || !cardHeader || card.querySelector('[data-product-image]')) {
                return;
            }

            const imageWrapper = document.createElement('div');
            imageWrapper.className = 'border-b border-gray-100 bg-white';
            imageWrapper.setAttribute('data-product-image', 'true');

            const imageFrame = document.createElement('div');
            imageFrame.className = 'flex h-64 items-center justify-center px-6 py-5 sm:h-72 sm:px-8';

            const image = document.createElement('img');
            image.src = imagePath;
            image.alt = productName;
            image.loading = 'lazy';
            image.decoding = 'async';
            image.className = 'h-full w-full object-contain object-center';

            imageFrame.appendChild(image);
            imageWrapper.appendChild(imageFrame);
            cardHeader.insertAdjacentElement('afterend', imageWrapper);
        });
    })();
</script>

<?php include 'includes/footer.php'; ?>
