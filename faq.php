<?php
include 'config/database.php';
require_once 'auth_check.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>FAQ | Spice Isle Tours</title>
    <link rel="shortcut icon" href="https://symphony.cdn.tambourine.com/spice-island-redesign/files/spiceisland-favicon-68d55fc21ca1c.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/navigation.php'; ?>
    
    <main class="content">
        <section class="intro-content">
            <div class="container">
                <h1 class="page-title">Frequently Asked Questions</h1>
                <h2 class="subheading">Everything You Need to Know About Your Grenada Adventure</h2>
                <p class="intro-text">Planning your trip to Grenada? We've compiled answers to the most common questions about our tours, booking process, and what to expect during your visit to the Spice Isle.</p>
            </div>
        </section>

        <section class="faq-list">
            <div class="faq-item">
                <h3 class="faq-question">What is included in your tour packages?</h3>
                <p class="faq-answer">All our standard tours include transportation in air-conditioned vehicles, a knowledgeable local guide, bottled water, and entrance fees to attractions mentioned in the tour description. Some specialty tours may include meals or additional activities.</p>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">How far in advance should I book my tour?</h3>
                <p class="faq-answer">We recommend booking at least 2-3 weeks in advance, especially during peak season (December to April). For private tours and large groups, we suggest booking 4-6 weeks ahead to ensure availability.</p>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">What is your cancellation policy?</h3>
                <p class="faq-answer">Cancellations made 48 hours or more before the tour receive a full refund. Cancellations within 48 hours receive a 50% refund. No refunds are provided for no-shows or cancellations within 24 hours of the tour start time.</p>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">Do you offer hotel pickup and drop-off?</h3>
                <p class="faq-answer">Yes, we provide complimentary pickup and drop-off at most hotels and accommodations in the St. George's, Grand Anse, and Lance aux Epines areas. For other locations, additional charges may apply.</p>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">What should I bring on a tour?</h3>
                <p class="faq-answer">We recommend comfortable walking shoes, sunscreen, a hat, swimwear (for tours including beach stops), a camera, and local currency for souvenirs or additional purchases.</p>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">Are your tours suitable for children and seniors?</h3>
                <p class="faq-answer">Most of our tours are family-friendly and suitable for all ages. However, some hiking tours may have age or fitness restrictions. Please check individual tour descriptions or contact us for specific recommendations based on your group's needs.</p>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">What happens if it rains during my tour?</h3>
                <p class="faq-answer">Grenada's tropical climate means brief showers are common. Tours typically proceed as planned, but in cases of severe weather, we may modify the itinerary or reschedule. Your safety is our top priority.</p>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">Do you offer custom or private tours?</h3>
                <p class="faq-answer">Absolutely! We specialize in creating personalized experiences. Contact us with your interests, group size, and preferred dates, and we'll design a custom itinerary just for you.</p>
            </div>
        </section>
    </main>
    <script src="js/faq.js"></script>
</body>
</html>
