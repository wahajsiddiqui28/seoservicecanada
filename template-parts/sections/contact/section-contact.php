<?php

/**
 * Section: Contact
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>


<style>
    /* Basic Resets */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Roboto', sans-serif; /* You can use Google Fonts for Roboto or your preferred font */
    line-height: 1.6;
    color: #333;
    background-color: #f8f9fa; /* Light background for the overall page */
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

a {
    text-decoration: none;
    color: inherit;
}

ul {
    list-style: none;
}

/* --- Utility Buttons --- */
.btn {
    display: inline-block;
    padding: 12px 25px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.primary-btn {
    background-color: #5c6bc0; /* Darker blue */
    color: #fff;
}

.primary-btn:hover {
    background-color: #3f51b5; /* Slightly darker on hover */
}

.whatsapp-btn {
    background-color: #25d366; /* WhatsApp green */
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    width: 100%; /* Take full width of its container */
    margin-top: 20px;
}

.whatsapp-btn:hover {
    background-color: #1da851; /* Darker green on hover */
}

/* --- Header Section --- */
.top-bar {
    background-color: #2c3e50; /* Dark blue/black from your image */
    color: #fff;
    padding: 10px 0;
    font-size: 14px;
}

.top-bar-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap; /* For responsiveness */
}

.top-bar-left, .top-bar-right {
    display: flex;
    align-items: center;
    gap: 20px;
}

.top-bar-right a {
    color: #fff;
    display: flex;
    align-items: center;
    gap: 8px;
}

.limited-offer-pill {
    background-color: #5c6bc0; /* Darker blue */
    padding: 5px 10px;
    border-radius: 20px;
    font-weight: 600;
    margin-right: 10px;
}

.main-nav {
    background-color: #fff;
    padding: 15px 0;
    border-bottom: 1px solid #eee;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
}

.nav-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    display: flex;
    align-items: center;
    font-size: 24px;
    font-weight: 700;
    color: #2c3e50; /* Dark text for logo */
    gap: 10px;
}

.logo-icon {
    height: 40px;
    width: 40px;
    border-radius: 50%; /* If it's a circular logo */
    background-color: #5c6bc0; /* Background for placeholder logo */
    display: flex;
    justify-content: center;
    align-items: center;
    color: white; /* Text color for placeholder */
    font-size: 1.2em;
}


.nav-links {
    display: flex;
    gap: 30px;
}

.nav-links a {
    color: #555;
    font-weight: 500;
    padding: 5px 0;
    position: relative;
}

.nav-links a:hover,
.nav-links a.active {
    color: #5c6bc0; /* Darker blue for active/hover */
}

.nav-links a.active::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -5px;
    width: 100%;
    height: 2px;
    background-color: #5c6bc0; /* Indicator for active page */
}

/* --- Hero Section - Contact Page --- */
.hero-contact {
    background-color: #f0f4f8; /* Light grey/blue background, similar to homepage */
    padding: 80px 0;
    text-align: center;
}

.hero-contact h1 {
    font-size: 3.5em;
    color: #2c3e50;
    margin-bottom: 20px;
    font-weight: 700;
}

.hero-contact p {
    font-size: 1.2em;
    color: #555;
    max-width: 800px;
    margin: 0 auto;
}

/* --- Contact Content Section --- */
.contact-section {
    padding: 60px 0;
    background-color: #fff;
}

.contact-container {
    display: flex;
    gap: 40px;
    flex-wrap: wrap; /* Allows columns to stack on smaller screens */
}

.contact-form-column,
.contact-info-column {
    flex: 1; /* Both columns take equal width */
    min-width: 300px; /* Minimum width before wrapping */
    background-color: #fcfcfc;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}

.contact-form-column h2,
.contact-info-column h2 {
    font-size: 2em;
    color: #2c3e50;
    margin-bottom: 30px;
    font-weight: 600;
}

/* Form Styling */
.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    color: #555;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group input[type="tel"],
.form-group textarea {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1em;
    color: #333;
    transition: border-color 0.3s ease;
}

.form-group input:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #5c6bc0;
    box-shadow: 0 0 0 3px rgba(92, 107, 192, 0.2);
}

.form-group textarea {
    resize: vertical; /* Allow vertical resizing */
    min-height: 120px;
}

.submit-btn {
    width: 100%;
    margin-top: 10px;
}

/* Contact Info Styling */
.contact-item {
    display: flex;
    align-items: flex-start; /* Align icon and text at the top */
    gap: 15px;
    margin-bottom: 25px;
}

.contact-item i {
    font-size: 1.5em;
    color: #5c6bc0;
    min-width: 30px; /* Ensure icon has consistent width */
    text-align: center;
}

.contact-item span {
    display: block;
    font-weight: 600;
    color: #2c3e50;
    font-size: 1.1em;
}

.contact-item p {
    font-size: 0.95em;
    color: #777;
    margin-top: 5px;
}

.contact-item a {
    color: #2c3e50; /* Link color for phone/email */
}

.contact-item a:hover {
    color: #5c6bc0;
}

.map-container {
    margin-top: 30px;
    height: 300px; /* Fixed height for the map */
    border-radius: 8px;
    overflow: hidden; /* Ensures map corners are rounded */
    border: 1px solid #ddd;
}

.map-container iframe {
    width: 100%;
    height: 100%;
    border: 0;
}

/* --- Footer --- */
footer {
    background-color: #2c3e50; /* Dark blue/black */
    color: #fff;
    padding: 30px 0;
    text-align: center;
    font-size: 0.9em;
}

/* Screen Reader Only (for accessibility) */
.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
}

/* --- Responsive Design --- */
@media (max-width: 992px) {
    .contact-container {
        flex-direction: column; /* Stack columns on smaller screens */
    }
    .contact-form-column,
    .contact-info-column {
        min-width: auto; /* Remove min-width when stacking */
    }
}

@media (max-width: 768px) {
    .top-bar-content {
        flex-direction: column;
        gap: 10px;
    }
    .top-bar-left, .top-bar-right {
        gap: 10px;
        justify-content: center;
        width: 100%;
    }
    .limited-offer-pill {
        margin-right: 0; /* Adjust margin for stacking */
    }

    .nav-content {
        flex-direction: column;
        gap: 20px;
    }
    .nav-links {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
    .main-nav .btn {
        width: 100%;
    }
    .hero-contact h1 {
        font-size: 2.5em;
    }
    .hero-contact p {
        font-size: 1em;
    }
    .contact-form-column,
    .contact-info-column {
        padding: 20px;
    }
    .contact-form-column h2,
    .contact-info-column h2 {
        font-size: 1.5em;
        margin-bottom: 20px;
    }
    .contact-item {
        flex-direction: column; /* Stack icon and text */
        align-items: center;
        text-align: center;
        margin-bottom: 20px;
    }
    .contact-item i {
        margin-bottom: 5px;
    }
    .map-container {
        height: 250px;
    }
}

@media (max-width: 480px) {
    .hero-contact {
        padding: 50px 0;
    }
    .hero-contact h1 {
        font-size: 2em;
    }
    .top-bar-left span:not(.limited-offer-pill),
    .top-bar-right a {
        font-size: 12px;
        white-space: nowrap; /* Prevent breaking on very small screens */
    }
    .top-bar-left {
        flex-direction: column;
    }
    .top-bar-right {
        flex-direction: column;
        align-items: flex-start;
    }
    .top-bar-right a i {
        display: none; /* Hide icons to save space if needed */
    }
}
</style>



  <!-- Hero Section -->
        <section class="hero-contact">
            <div class="container">
                <h1>Get In Touch With Us</h1>
                <p>We're here to help you drive real leads and boost your online presence. Feel free to reach out with any questions or to discuss your SEO needs.</p>
            </div>
        </section>

        <!-- Contact Content Section -->
        <section class="contact-section">
            <div class="container contact-container">
                <div class="contact-form-column">
                    <h2>Send Us A Message</h2>
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="fullName" class="sr-only">Full Name</label>
                            <input type="text" id="fullName" name="fullName" placeholder="Your Full Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="Your Email Address" required>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="sr-only">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="Phone Number (Optional)">
                        </div>
                        <div class="form-group">
                            <label for="subject" class="sr-only">Subject</label>
                            <input type="text" id="subject" name="subject" placeholder="Subject of your inquiry" required>
                        </div>
                        <div class="form-group">
                            <label for="message" class="sr-only">Your Message</label>
                            <textarea id="message" name="message" rows="6" placeholder="Tell us about your project or question..." required></textarea>
                        </div>
                        <button type="submit" class="btn primary-btn submit-btn">Send Message</button>
                    </form>
                </div>

                <div class="contact-info-column">
                    <h2>Our Contact Details</h2>
                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <span><a href="tel:+15550000000">+1 (555) 000-0000</a></span>
                            <p>Call us during business hours</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <span><a href="mailto:info@seoservicecanada.com">info@seoservicecanada.com</a></span>
                            <p>We typically respond within 24 hours</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <span>123 SEO Boulevard, Suite 400,</span>
                            <span>Toronto, ON M5A 1B1, Canada</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <span>Monday - Friday:</span>
                            <span>9:00 AM - 5:00 PM EST</span>
                        </div>
                    </div>

                    <div class="map-container">
                        <!-- Replace with your actual Google Maps embed code -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.7262402120017!2d-79.3871279845012!3d43.65322677912389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb7c0e8a719f%3A0x6a0c5c7d2e4b3c7!2sToronto%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sin!4v1678888888888!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                    <a href="https://wa.me/15550000000" class="btn whatsapp-btn" target="_blank">
                        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                    </a>
                </div>
            </div>
        </section>