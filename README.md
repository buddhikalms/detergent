# Rainbow Detergents Website
## Professional Corporate Website for Ceylon Trading and Plantation (Pvt) Ltd

---

## 📋 Overview

A complete, modern, responsive company website for **Rainbow Detergents by Ceylon Trading**, a leading manufacturer and distributor of cleaning chemicals in Sri Lanka. The website showcases their comprehensive product range backed by 40+ years of industry expertise under Mr. Keith Sumanasena's guidance.

---

## ✨ Features

### Design & UX
- ✅ Modern, clean corporate design
- ✅ Fully responsive (mobile-first approach)
- ✅ Blue, green, and white color palette
- ✅ Professional gradient effects
- ✅ Smooth hover animations
- ✅ Sticky navigation header
- ✅ Mobile hamburger menu
- ✅ Scroll-to-top button

### Pages
1. **Home** (`index.php`)
   - Hero section with strong call-to-action
   - Company introduction
   - Featured product categories
   - Why choose us section
   - Trust & statistics
   - Client testimonials area

2. **About Us** (`about.php`)
   - Company background
   - Partnership with industry veteran Keith Sumanasena
   - Mission & Vision statements
   - Core values and strengths
   - Company commitment

3. **Products** (`products.php`)
   - Comprehensive product catalog
   - Category filters (sticky navigation)
   - 50+ products across multiple categories:
     - Housekeeping Detergents
     - Specialty Chemicals
     - Dishwashing Products
     - Oven & Grill Cleaners
     - Laundry Chemicals (Liquid & Powder)
   - Product cards with pricing, sizes, and descriptions
   - Product code references

4. **Services** (`services.php`)
   - Distribution services
   - Bulk & wholesale supply
   - Equipment supply (laundry & kitchen)
   - Custom & contract solutions
   - Industry-specific solutions
   - Service advantages

5. **Contact** (`contact.php`)
   - Contact form with PHP validation
   - Contact information cards
   - Google Maps integration
   - Business hours
   - FAQ section
   - Form success/error messages

### Technical Features
- ✅ PHP templating with reusable components
- ✅ Structured file organization
- ✅ SEO-friendly HTML markup
- ✅ Contact form with server-side validation
- ✅ Active page highlighting in navigation
- ✅ Accessible navigation
- ✅ Clean, commented code

---

## 🛠️ Technology Stack

- **Frontend**: HTML5, Tailwind CSS (via CDN)
- **Backend**: PHP (no framework, pure PHP)
- **Fonts**: Google Fonts (Inter)
- **Icons**: Heroicons (via Tailwind)
- **JavaScript**: Vanilla JS for interactivity

---

## 📁 File Structure

```
rainbow-detergents/
│
├── index.php              # Home page
├── about.php              # About us page
├── products.php           # Products catalog
├── services.php           # Services page
├── contact.php            # Contact page with form
│
├── includes/
│   ├── header.php         # Header with navigation
│   └── footer.php         # Footer with company info
│
└── README.md              # This file
```

---

## 🚀 Installation & Setup

### Requirements
- PHP 7.4 or higher
- Web server (Apache/Nginx) or PHP built-in server
- Modern web browser

### Local Development Setup

1. **Clone or download the project files**
   ```bash
   # If using a local server, place files in your web root
   # For XAMPP: C:/xampp/htdocs/rainbow-detergents/
   # For MAMP: /Applications/MAMP/htdocs/rainbow-detergents/
   ```

2. **Using PHP Built-in Server** (Recommended for testing)
   ```bash
   cd rainbow-detergents
   php -S localhost:8000
   ```

3. **Access the website**
   ```
   Open your browser and navigate to:
   http://localhost:8000
   ```

### Production Deployment

1. **Upload files** to your web hosting via FTP/cPanel
2. **Ensure PHP is enabled** on your hosting
3. **Set proper permissions**
   ```bash
   chmod 755 *.php
   chmod 755 includes/
   ```

4. **Configure contact form email** (Optional)
   - Edit `contact.php`
   - Add email sending functionality using PHP `mail()` or SMTP
   - Update the form handler section

---

## 📧 Contact Form Setup

The contact form currently displays success messages. To enable email sending:

### Option 1: Using PHP mail()
```php
// In contact.php, replace the success section with:
$to = "info@ceylontrading.lk";
$email_subject = "Contact Form: " . $subject;
$email_body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$user_message";
$headers = "From: $email";

if (mail($to, $email_subject, $email_body, $headers)) {
    $success = true;
    $message = 'Thank you! We will get back to you soon.';
}
```

### Option 2: Using PHPMailer (Recommended)
Install PHPMailer via Composer and configure SMTP settings.

---

## 🎨 Customization

### Colors
Main colors are defined in Tailwind classes:
- **Primary Blue**: `blue-600`, `blue-700`
- **Secondary Teal**: `teal-500`, `teal-600`
- **Accent Green**: `green-500`, `green-600`

To change colors, modify the Tailwind class names throughout the PHP files.

### Company Information
Update company details in:
- `includes/header.php` - Top bar contact info
- `includes/footer.php` - Footer contact details
- `contact.php` - Contact page information

### Products
Add or modify products in `products.php`:
- Each product is a card with title, description, sizes, and pricing
- Follow the existing HTML structure for consistency

---

## 📱 Browser Support

- ✅ Chrome (latest)
- ✅ Firefox (latest)
- ✅ Safari (latest)
- ✅ Edge (latest)
- ✅ Mobile browsers (iOS Safari, Chrome Mobile)

---

## 🔒 Security Considerations

1. **Form Validation**: Basic validation is implemented
2. **XSS Protection**: All user inputs are sanitized with `htmlspecialchars()`
3. **Email Validation**: Uses PHP's `filter_var()` with `FILTER_VALIDATE_EMAIL`

### Recommended Security Enhancements
- Add CSRF protection tokens
- Implement rate limiting for contact form
- Use prepared statements if connecting to a database
- Enable HTTPS in production
- Add honeypot field for spam prevention

---

## 📊 Performance Optimization

Current optimizations:
- Tailwind CSS loaded via CDN (cached by browsers)
- Minimal JavaScript
- Optimized images (recommend using WebP format)
- Clean, semantic HTML

Recommended improvements:
- Add lazy loading for images
- Minify CSS/JS for production
- Enable Gzip compression on server
- Use CDN for static assets

---

## 🎯 SEO Features

- Semantic HTML5 structure
- Meta descriptions on all pages
- Proper heading hierarchy (H1, H2, H3)
- Alt text ready for images
- Clean, readable URLs
- Mobile-responsive design
- Fast page load times

To enhance SEO further:
- Add Open Graph meta tags
- Implement structured data (Schema.org)
- Create XML sitemap
- Add robots.txt file

---

## 📞 Support & Contact

**Rainbow Detergents**
Ceylon Trading and Plantation (Pvt) Ltd

- **Phone**: +94 113 473 473
- **Email**: info@ceylontrading.lk
- **Address**: No.61, Sri Soratha Mw, Gangodawila, Nugegoda, Sri Lanka
- **Website**: www.ceylontrading.lk

---

## 📄 License

This website is created for Rainbow Detergents by Ceylon Trading and Plantation (Pvt) Ltd.
All rights reserved © 2024 Ceylon Trading and Plantation (Pvt) Ltd.

---

## 🙏 Acknowledgments

- **Expert Guidance**: Mr. Keith Sumanasena (40+ years industry experience)
- **Design Framework**: Tailwind CSS
- **Icons**: Heroicons
- **Fonts**: Google Fonts (Inter)

---

## 📝 Changelog

### Version 1.0.0 (Current)
- Initial release
- Complete website with 5 pages
- Responsive design
- Contact form with validation
- Product catalog (50+ products)
- Service descriptions
- About company section

---

## 🔮 Future Enhancements

Potential features for future versions:
- [ ] Product search functionality
- [ ] Online ordering system
- [ ] Customer portal/login
- [ ] Product comparison tool
- [ ] Live chat support
- [ ] Multi-language support (Sinhala, Tamil)
- [ ] Blog section
- [ ] Customer testimonials
- [ ] Case studies
- [ ] Newsletter subscription
- [ ] Social media feed integration

---

**Built with 💙 for Rainbow Detergents**
