<?php
session_start();
include 'config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Spice Isle Tours | Grenada | Official Site</title>
    <link rel="shortcut icon" href="https://symphony.cdn.tambourine.com/spice-island-redesign/files/spiceisland-favicon-68d55fc21ca1c.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body class="homepage">
    <?php include 'includes/navigation.php'; ?>
    
    <div class="top-content__video">
        <video id="video" autoplay="autoplay" loop="" muted="muted" playsinline="">
            <source width="700px" src="video/spiceislandbeachresort-video.mp4" type="video/mp4">
        </video>
    </div>
    
    <div class="top-content__uvp"><br><br>
        <span class="top">Grenada</span>
        <span>Spice Isle Tours</span>
        
        <?php if(isset($_SESSION['username'])): ?>
            <div style="text-align: center; margin: 20px 0; font-size: 18px; color: white;">
                Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!
            </div>
        <?php endif; ?>

        <br><br><br><br>
        <span class="sub-btm">© 2025 All Rights Reserved</span>
    </div>
</body>
</html>