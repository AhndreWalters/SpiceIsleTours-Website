<?php
include 'config/database.php';
require_once 'auth_check.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tours | Spice Isle Tours</title>
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
                <h1 class="page-title">Our Tours</h1>
                <h2 class="subheading">Discover Grenada with Spice Isle Tours</h2>
                <p class="intro-text">Explore the Spice Isle through curated experiences that blend adventure, history, and natural beauty.
          Each of our tours is designed to showcase the island’s charm, from waterfalls and cocoa estates
          to cultural landmarks and scenic drives.</p>
            </div>
        </section>
        
        <section class="tours-list">
            <div class="tour">
                <h3>Cruisers Scenic Tour</h3>
                <p>3-hour scenic trip for up to 6 people. Experience Grenada’s breathtaking views and landmarks, perfect for cruise visitors.</p>
                <p><strong>Duration:</strong> 3 Hours &nbsp; | &nbsp; <strong>Price:</strong> $35</p>
            </div>

            <div class="tour">
                <h3>Spice Isle Tour</h3>
                <p>Full-day cultural and adventure tour visiting Carenage, Concord Falls, Victoria Chocolate Factory, Belmont Estate, and Grand Etang Lake.</p>
                <p><strong>Duration:</strong> 7 Hours &nbsp; | &nbsp; <strong>Price:</strong> $163</p>
            </div>

            <div class="tour">
                <h3>St. George ScootQuest</h3>
                <p>Ride through Fort Frederick, the Carenage, and local markets with stops at Grenada Museum and House of Chocolate. Activity level: Moderate.</p>
                <p><strong>Duration:</strong> 4 Hours &nbsp; | &nbsp; <strong>Price:</strong> $180</p>
            </div>

            <div class="tour">
                <h3>Spice Isle ScootQuest</h3>
                <p>Discover St. George’s by scooter, visiting Grand Anse Beach, the Spice Market, and Annandale Falls, a mix of culture, history, and adventure.</p>
                <p><strong>Duration:</strong> 4 Hours &nbsp; | &nbsp; <strong>Price:</strong> $165</p>
            </div>

            <div class="tour">
                <h3>Authentic Specialty Tour</h3>
                <p>Explore St. George’s cultural and historical highlights, including the island’s water channel systems. Ideal for heritage enthusiasts.</p>
                <p><strong>Duration:</strong> 5 Hours &nbsp; | &nbsp; <strong>Price:</strong> $100</p>
            </div>

            <div class="tour">
                <h3>Spice Isle Garden Tours</h3>
                <p>Visit Grenada’s lush botanical gardens, Smithy’s, Tower Estate, Laura Herb & Spices, and more celebrating the island’s floral heritage.</p>
                <p><strong>Duration:</strong> 5 Hours &nbsp; | &nbsp; <strong>Price:</strong> $120</p>
            </div>

            <div class="tour">
                <h3>Waterfalls Flash Hikes</h3>
                <p>Adventure-filled hikes to Annandale Falls, Seven Sisters, and Mt. Carmel. Perfect for nature lovers seeking scenic exercise.</p>
                <p><strong>Duration:</strong> 6 Hours &nbsp; | &nbsp; <strong>Price:</strong> $150</p>
            </div>

            <div class="tour">
                <h3>Island Wide Scenic Tour</h3>
                <p>See it all from Concord Falls and Belmont Estate to River Antoine Rum Distillery and Grand Etang Lake, an immersive full-day island trip.</p>
                <p><strong>Duration:</strong> 8 Hours &nbsp; | &nbsp; <strong>Price:</strong> $190</p>
            </div>

            <div class="tour">
                <h3>Mid Island Spice Tour & Falls</h3>
                <p>Enjoy Grenada’s spice heritage and nature with visits to Tri-Island Chocolate, Annandale Falls, and Seven Sisters Waterfalls.</p>
                <p><strong>Duration:</strong> 5 Hours &nbsp; | &nbsp; <strong>Price:</strong> $123</p>
            </div>
        </section>
    </main>
</body>
</html>