<?php
include 'config/database.php';
require_once 'auth_check.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Island | Spice Isle Tours</title>
    <link rel="shortcut icon" href="https://symphony.cdn.tambourine.com/spice-island-redesign/files/spiceisland-favicon-68d55fc21ca1c.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <?php include 'includes/navigation.php'; ?>
    
    <section class="intro-content">
            <h1>Island</h1>
    </section>
    
    <section class="island-section">
        <div class="section-text">
            <h3>About Grenada</h3>
            <h2>History</h2>
            <p>Long before the 1800s saw shiploads of cinnamon, clove, and nutmeg leaving our shores, Grenada's encounter with zest had already unfolded.</p>
            <p>African and Amerindian stories, told in English and Creole dialects, began blending with rhythmic beats of drum and dance to form a cultural melting pot. Today, it offers a glimpse into a centuries-old history through the warm lens of our people.</p>
            <div class="section-link">
                <a href="https://en.wikipedia.org/wiki/History_of_Grenada" target="_blank">Explore Grenada's History</a>
            </div>
        </div>
        <div class="section-img">
            <img src="images/gnd-photo7.jpg" alt="Grenada history" />
        </div>
    </section>
    
    <section class="island-section reverse">
        <div class="section-text">
            <h3>About Grenada</h3>
            <h2>This is the Spice Island</h2>
            <p>Awake to new beauty every morning as you marvel at the ever-changing kaleidoscope of colors outside your window. Breathe in the fragrance of spice and simply drift away in the glow of island life.</p>
            <div class="section-link">
                <a href="https://www.britannica.com/place/Grenada" target="_blank">Discover Spice Island Culture</a>
            </div>
        </div>
        <div class="section-img">
            <img src="images/gnd-photo5.jpg" alt="Grenada nature" />
        </div>
    </section>
    
    <section class="island-section">
        <div class="section-text">
            <h3>About Grenada</h3>
            <h2>Our Island</h2>
            <p>Beyond its postcard-perfect beaches, Grenada is a sprawling island playground where surprise awaits at every turn. Venture beyond the capital of St. George's and witness the roar of majestic waterfalls. Come face-to-face with mona monkeys under the canopy of a humming rainforest. Sample the decadent cocoa and nutmeg that earned the "Spice Island" name all in one afternoon across our twenty-one miles of adventure.</p>
            <div class="section-link">
                <a href="https://www.cia.gov/the-world-factbook/countries/grenada/" target="_blank">View Island Facts & Statistics</a>
            </div>
        </div>
        <div class="section-img">
            <img src="images/gnd-photo6.jpg" alt="Grenada landscape" />
        </div>
    </section>
</body>
</html>