<?php
// Only start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Determine if current page is homepage
$isHomepage = (basename($_SERVER['PHP_SELF']) == 'index.php');
?>

<nav class="sub-menu <?php echo $isHomepage ? 'homepage-nav' : 'page-nav'; ?>" role="navigation" aria-label="Main Navigation">

    <ul class="nav-links" id="nav-links">
        <li><a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">HOME</a></li>
        <li><a href="about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">ABOUT</a></li>
        <li><a href="tours.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'tours.php' ? 'active' : ''; ?>">TOURS</a></li>
        <li><a href="gallery.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'gallery.php' ? 'active' : ''; ?>">GALLERY</a></li>
        <li><a href="booking.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'booking.php' ? 'active' : ''; ?>">BOOKING</a></li>
        <li><a href="island.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'island.php' ? 'active' : ''; ?>">ISLAND</a></li>
        <li><a href="faq.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'faq.php' ? 'active' : ''; ?>">FAQ</a></li>
        <li><a href="contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">CONTACT</a></li>
        
        <?php if(isset($_SESSION['username'])): ?>
            <li class="auth-link"><a href="logout.php">LOGOUT (<?php echo htmlspecialchars($_SESSION['username']); ?>)</a></li>
        <?php else: ?>
            <li class="auth-link"><a href="login.php">LOGIN</a></li>
        <?php endif; ?>
    </ul>
    
    <div class="nav-overlay" id="nav-overlay"></div>
</nav>

<script src="js/navigation.js"></script>