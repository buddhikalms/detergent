<?php 
$pageTitle = "Contact Us - Rainbow Detergents by Ceylon Trading";
$currentPage = "contact";

// Form handling
$success = false;
$error = false;
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Basic form validation
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $user_message = htmlspecialchars(trim($_POST['message'] ?? ''));
    
    // Validation
    if (empty($name) || empty($email) || empty($phone) || empty($user_message)) {
        $error = true;
        $message = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $message = 'Please enter a valid email address.';
    } else {
        // In a real application, you would send an email here
        // For now, we'll just set success to true
        $success = true;
        $message = 'Thank you for contacting us! We will get back to you within 24 hours.';
        
        // Clear form data on success
        $name = $email = $phone = $subject = $user_message = '';
    }
}

include 'includes/header.php'; 
?>

<!-- Page Header -->
<section class="bg-gradient-to-br from-blue-600 to-teal-500 text-white py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Get In Touch</h1>
            <p class="text-xl text-blue-100">
                We're here to help with all your cleaning solution needs
            </p>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <!-- Phone -->
                <div class="text-center p-6 bg-blue-50 rounded-xl hover:shadow-lg transition-all">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Call Us</h3>
                    <a href="tel:+94113473473" class="text-blue-600 hover:text-blue-700 font-medium text-lg">
                        +94 113 473 473
                    </a>
                    <p class="text-gray-600 text-sm mt-2">Mon - Sat: 8:00 AM - 6:00 PM</p>
                </div>

                <!-- Email -->
                <div class="text-center p-6 bg-green-50 rounded-xl hover:shadow-lg transition-all">
                    <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Email Us</h3>
                    <a href="mailto:info@ceylontrading.lk" class="text-green-600 hover:text-green-700 font-medium">
                        info@ceylontrading.lk
                    </a>
                    <p class="text-gray-600 text-sm mt-2">We'll respond within 24 hours</p>
                </div>

                <!-- Location -->
                <div class="text-center p-6 bg-teal-50 rounded-xl hover:shadow-lg transition-all">
                    <div class="w-16 h-16 bg-teal-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Visit Us</h3>
                    <p class="text-gray-700">
                        No.61, Sri Soratha Mw,<br>
                        Gangodawila, Nugegoda,<br>
                        Sri Lanka
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Map -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Send Us a Message</h2>
                    
                    <?php if ($success): ?>
                        <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <?php echo $message; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($error): ?>
                        <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                </svg>
                                <?php echo $message; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <form method="POST" action="" class="space-y-6">
                        <div>
                            <label for="name" class="block text-gray-700 font-medium mb-2">Full Name *</label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                value="<?php echo $name ?? ''; ?>"
                                required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                placeholder="John Doe"
                            >
                        </div>

                        <div>
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email Address *</label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                value="<?php echo $email ?? ''; ?>"
                                required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                placeholder="john@example.com"
                            >
                        </div>

                        <div>
                            <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number *</label>
                            <input 
                                type="tel" 
                                id="phone" 
                                name="phone" 
                                value="<?php echo $phone ?? ''; ?>"
                                required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                placeholder="+94 XX XXX XXXX"
                            >
                        </div>

                        <div>
                            <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                            <select 
                                id="subject" 
                                name="subject" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                            >
                                <option value="">Select a subject</option>
                                <option value="product-inquiry" <?php echo (isset($subject) && $subject === 'product-inquiry') ? 'selected' : ''; ?>>Product Inquiry</option>
                                <option value="bulk-order" <?php echo (isset($subject) && $subject === 'bulk-order') ? 'selected' : ''; ?>>Bulk Order</option>
                                <option value="custom-solution" <?php echo (isset($subject) && $subject === 'custom-solution') ? 'selected' : ''; ?>>Custom Solution</option>
                                <option value="technical-support" <?php echo (isset($subject) && $subject === 'technical-support') ? 'selected' : ''; ?>>Technical Support</option>
                                <option value="other" <?php echo (isset($subject) && $subject === 'other') ? 'selected' : ''; ?>>Other</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-gray-700 font-medium mb-2">Message *</label>
                            <textarea 
                                id="message" 
                                name="message" 
                                required 
                                rows="5" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all resize-none"
                                placeholder="Tell us how we can help you..."
                            ><?php echo $user_message ?? ''; ?></textarea>
                        </div>

                        <button 
                            type="submit" 
                            class="w-full bg-blue-600 text-white py-4 rounded-lg font-semibold hover:bg-blue-700 transition-all transform hover:scale-105 shadow-lg"
                        >
                            Send Message
                        </button>

                        <p class="text-sm text-gray-500 text-center">
                            Fields marked with * are required
                        </p>
                    </form>
                </div>

                <!-- Map & Additional Info -->
                <div>
                    <!-- Google Map Embed -->
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-8">
                        <div class="h-96">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2227453!2d79.8886!3d6.8649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNTEnNTMuNiJOIDc5wrA1Mycy1.9!5e0!3m2!1sen!2slk!4v1234567890" 
                                width="100%" 
                                height="100%" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"
                                class="grayscale"
                            ></iframe>
                        </div>
                    </div>

                    <!-- Business Hours -->
                    <div class="bg-white rounded-2xl shadow-xl p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Business Hours</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center py-3 border-b border-gray-200">
                                <span class="font-medium text-gray-700">Monday - Friday</span>
                                <span class="text-gray-600">8:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center py-3 border-b border-gray-200">
                                <span class="font-medium text-gray-700">Saturday</span>
                                <span class="text-gray-600">8:00 AM - 2:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center py-3">
                                <span class="font-medium text-gray-700">Sunday</span>
                                <span class="text-red-600 font-medium">Closed</span>
                            </div>
                        </div>

                        <div class="mt-8 p-4 bg-blue-50 rounded-lg">
                            <p class="text-sm text-gray-700">
                                <strong>Note:</strong> For urgent inquiries outside business hours, please email us at 
                                <a href="mailto:info@ceylontrading.lk" class="text-blue-600 hover:text-blue-700">info@ceylontrading.lk</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-600">Quick answers to common questions</p>
            </div>

            <div class="space-y-6">
                <!-- FAQ 1 -->
                <div class="bg-gray-50 rounded-xl p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">What is the minimum order quantity?</h3>
                    <p class="text-gray-600">
                        Our standard minimum order is one 5L or 25L container per product. For bulk orders (25kg or 25L+), we offer special pricing. Contact us for custom requirements.
                    </p>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-gray-50 rounded-xl p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Do you offer delivery services?</h3>
                    <p class="text-gray-600">
                        Yes! We provide island-wide delivery across Sri Lanka. Delivery charges vary based on location and order size. Free delivery is available for bulk orders above a certain value.
                    </p>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-gray-50 rounded-xl p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Are your products environmentally friendly?</h3>
                    <p class="text-gray-600">
                        Absolutely! All Rainbow Detergents products are fully biodegradable and formulated with environmental responsibility in mind. We are committed to sustainability.
                    </p>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-gray-50 rounded-xl p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Can I request custom formulations?</h3>
                    <p class="text-gray-600">
                        Yes, we offer custom formulation services and private labeling for qualifying bulk orders. Contact our team to discuss your specific requirements.
                    </p>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-gray-50 rounded-xl p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">What payment methods do you accept?</h3>
                    <p class="text-gray-600">
                        We accept bank transfers, cash on delivery (for qualifying orders), and for established clients, we offer flexible payment terms. Contact us for details.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-gradient-to-br from-blue-600 to-teal-500 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Still Have Questions?
            </h2>
            <p class="text-xl text-blue-100 mb-8">
                Our team is always ready to help. Don't hesitate to reach out!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:+94113473473" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-blue-50 transition-all transform hover:scale-105">
                    Call +94 113 473 473
                </a>
                <a href="mailto:info@ceylontrading.lk" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-all">
                    Email Us Directly
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
