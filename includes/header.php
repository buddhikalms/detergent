<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Rainbow Detergents - Ceylon Trading'; ?></title>
    <meta name="description" content="Rainbow Detergents by Ceylon Trading - Premium quality cleaning chemicals, laundry detergents, and industrial cleaning solutions backed by 40+ years of expertise.">
    <meta name="keywords" content="detergents, cleaning chemicals, laundry products, dishwashing, housekeeping, Ceylon Trading, Sri Lanka">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Favicon / Site logo -->
    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="apple-touch-icon" href="images/logo.png">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .mobile-menu.active {
            max-height: 500px;
        }

        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 50%;
            background-color: #3B82F6;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        .scroll-shadow {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-white">
    <!-- Header -->
    <header class="sticky top-0 z-50 bg-white" id="header">
        <!-- Top Bar -->
        <div class="bg-gradient-to-r from-blue-600 to-teal-500 text-white py-2">
            <div class="container mx-auto px-4">
                <div class="flex flex-col sm:flex-row justify-between items-center text-sm">
                    <div class="flex items-center gap-4 mb-2 sm:mb-0">
                        <a href="tel:+94113473473" class="flex items-center hover:text-blue-100 transition-colors">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            +94 113 473 473
                        </a>
                        <a href="mailto:info@ceylontrading.lk" class="flex items-center hover:text-blue-100 transition-colors">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            info@ceylontrading.lk
                        </a>
                    </div>
                    <div class="text-xs">
                        Backed by 40+ years of industry expertise
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="bg-white border-b border-gray-200">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center py-4">
                    <!-- Logo -->
                    <a href="index.php" class="flex items-center">
                        <div class="flex items-center">
                            <img src="images/logo.png" alt="Rainbow Detergents" class="w-12 h-12 rounded-lg object-cover mr-3">
                            <div>
                                <div class="text-xl font-bold text-gray-800 leading-tight">Rainbow Detergents</div>
                                <div class="text-xs text-gray-500">by Ceylon Trading</div>
                            </div>
                        </div>
                    </a>

                    <!-- Desktop Menu -->
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="index.php" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition-colors <?php echo ($currentPage == 'home') ? 'active text-blue-600' : ''; ?>">
                            Home
                        </a>
                        <a href="about.php" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition-colors <?php echo ($currentPage == 'about') ? 'active text-blue-600' : ''; ?>">
                            About Us
                        </a>
                        <a href="about.php#partners" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition-colors">
                            Partners
                        </a>
                        <a href="products.php" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition-colors <?php echo ($currentPage == 'products') ? 'active text-blue-600' : ''; ?>">
                            Products
                        </a>
                        <a href="services.php" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition-colors <?php echo ($currentPage == 'services') ? 'active text-blue-600' : ''; ?>">
                            Services
                        </a>
                        <a href="contact.php" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-all transform hover:scale-105">
                            Contact Us
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button class="md:hidden text-gray-700 hover:text-blue-600 focus:outline-none" id="mobile-menu-button">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu -->
                <div class="mobile-menu md:hidden pb-4" id="mobile-menu">
                    <div class="flex flex-col space-y-3">
                        <a href="index.php" class="text-gray-700 hover:text-blue-600 py-2 px-4 rounded <?php echo ($currentPage == 'home') ? 'bg-blue-50 text-blue-600' : ''; ?>">
                            Home
                        </a>
                        <a href="about.php" class="text-gray-700 hover:text-blue-600 py-2 px-4 rounded <?php echo ($currentPage == 'about') ? 'bg-blue-50 text-blue-600' : ''; ?>">
                            About Us
                        </a>
                        <a href="about.php#partners" class="text-gray-700 hover:text-blue-600 py-2 px-4 rounded">
                            Partners
                        </a>
                        <a href="products.php" class="text-gray-700 hover:text-blue-600 py-2 px-4 rounded <?php echo ($currentPage == 'products') ? 'bg-blue-50 text-blue-600' : ''; ?>">
                            Products
                        </a>
                        <a href="services.php" class="text-gray-700 hover:text-blue-600 py-2 px-4 rounded <?php echo ($currentPage == 'services') ? 'bg-blue-50 text-blue-600' : ''; ?>">
                            Services
                        </a>
                        <a href="contact.php" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 text-center">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('active');
        });

        // Add shadow on scroll
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 10) {
                header.classList.add('scroll-shadow');
            } else {
                header.classList.remove('scroll-shadow');
            }
        });
    </script>