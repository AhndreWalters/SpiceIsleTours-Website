<?php
include 'config/database.php';
require_once 'auth_check.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery | Spice Isle Tours</title>
    <link rel="shortcut icon" href="https://symphony.cdn.tambourine.com/spice-island-redesign/files/spiceisland-favicon-68d55fc21ca1c.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/navigation.css">
</head>
<body>
    <?php include 'includes/navigation.php'; ?>
    
    <main class="content">
        <section class="intro-content">
            <div class="container">
                <h1>Gallery</h1>
                <h2>Discover the Beauty of Grenada</h2>
                <p>Explore breathtaking moments from our island tours, showcasing the natural beauty, culture, and warmth of Grenada.</p>
            </div>
        </section>
    </main>
    
    <section class="gallery-section fade-in">
        <div class="masonry-gallery" id="gallery">
            <img src="images/gnd-photo1.jpg" alt="">
            <img src="images/gnd-photo2.jpg" alt="">
            <img src="images/gnd-photo3.jpg" alt="">
            <img src="images/gnd-photo4.jpg" alt="">
            <img src="images/gnd-photo8.jpg" alt="">
            <img src="images/gnd-photo9.jpg" alt="">
            <img src="images/gnd-photo10.jpg" alt="">
            <img src="images/gnd-photo11.jpg" alt="">
            <img src="images/gnd-photo12.jpg" alt="">
            <img src="images/gnd-photo13.jpg" alt="">
            <img src="images/gnd-photo14.jpg" alt="">
            <img src="images/gnd-photo15.jpg" alt="">
            <img src="images/gnd-photo16.jpg" alt="">
            <img src="images/gnd-photo17.jpg" alt="">
            <img src="images/gnd-photo18.jpg" alt="">
            <img src="images/gnd-photo19.jpg" alt="">
            <img src="images/gnd-photo20.jpg" alt="">
            <img src="images/gnd-photo21.jpg" alt="">
            <img src="images/gnd-photo22.jpg" alt="">
            <img src="images/gnd-photo23.jpg" alt="">
            <img src="images/gnd-photo24.jpg" alt="">
            <img src="images/gnd-photo25.jpg" alt="">
        </div>
    </section>
    
    <div id="lightbox" class="lightbox">
        <span class="close">&times;</span>
        <img class="lightbox-content" id="lightbox-img" alt="Expanded image">
    </div>
    
    <script src="js/gallery.js"></script>
</body>
</html>