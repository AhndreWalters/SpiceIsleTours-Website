<?php
include 'config/database.php';
require_once 'auth_check.php';

$success_message = '';
$error_messages = [];
$form_data = [];

if (isset($_SESSION['booking_success'])) {
    $success_message = $_SESSION['booking_success'];
    unset($_SESSION['booking_success']);
}

if (isset($_SESSION['booking_errors'])) {
    $error_messages = $_SESSION['booking_errors'];
    unset($_SESSION['booking_errors']);
}

if (isset($_SESSION['form_data'])) {
    $form_data = $_SESSION['form_data'];
    unset($_SESSION['form_data']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Booking | Spice Isle Tours</title>
    <link rel="shortcut icon" href="https://symphony.cdn.tambourine.com/spice-island-redesign/files/spiceisland-favicon-68d55fc21ca1c.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="booking-page">
    <?php include 'includes/navigation.php'; ?>
    
    <main class="content">
        <section class="intro-content">
            <div class="container">
                <h1 class="page-title">Booking</h1>
                <h2>Secure Your Island Adventure</h2>
                <p>Reserve your spot on one of our unforgettable Spice Isle Tours below. Fill out the booking form with your details and preferred tour selection, and we'll get back to you promptly to confirm your reservation and provide all the necessary details for your Grenadian adventure.</p>
            </div>
        </section>
        
        <div id="form-messages">
            <?php if ($success_message): ?>
                <div class="alert-success" style="max-width: 600px; margin: 20px auto; padding: 15px; background: #d4edda; color: #155724; border-radius: 8px; border: 1px solid #c3e6cb;">
                    <?php echo htmlspecialchars($success_message); ?>
                </div>
                
                <?php endif; ?>
                
                <?php if (!empty($error_messages)): ?>
                    <div class="alert-error" style="max-width: 600px; margin: 20px auto; padding: 15px; background: #f8d7da; color: #721c24; border-radius: 8px; border: 1px solid #f5c6cb;">
                        <h4>Please fix the following errors:</h4>
                        <ul style="margin: 10px 0; padding-left: 20px;">
                            <?php foreach ($error_messages as $error): ?>
                                <li><?php echo htmlspecialchars($error); ?></li>
                                <?php endforeach; ?>
                            </ul>
                </div>
            <?php endif; ?>
        </div>
        
        <script src="js/booking.js"></script>

        <section class="booking-form">
            <div class="form-container">
                <form action="process_booking.php" method="post">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Full Name" value="<?php echo isset($form_data['name']) ? htmlspecialchars($form_data['name']) : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="you@example.com" value="<?php echo isset($form_data['email']) ? htmlspecialchars($form_data['email']) : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="+1 (473) 555-0123" value="<?php echo isset($form_data['phone']) ? htmlspecialchars($form_data['phone']) : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="tour">Select Tour</label>
                        <select id="tour" name="tour" required>
                            <option value="">-- Select a Tour --</option>
                            <option value="cruisers" <?php echo (isset($form_data['tour']) && $form_data['tour'] == 'cruisers') ? 'selected' : ''; ?>>Cruisers Scenic Tour</option>
                            <option value="spice-isle" <?php echo (isset($form_data['tour']) && $form_data['tour'] == 'spice-isle') ? 'selected' : ''; ?>>Spice Isle Tour</option>
                            <option value="scootquest" <?php echo (isset($form_data['tour']) && $form_data['tour'] == 'scootquest') ? 'selected' : ''; ?>>St. George ScootQuest</option>
                            <option value="spice-scoot" <?php echo (isset($form_data['tour']) && $form_data['tour'] == 'spice-scoot') ? 'selected' : ''; ?>>Spice Isle ScootQuest</option>
                            <option value="authentic" <?php echo (isset($form_data['tour']) && $form_data['tour'] == 'authentic') ? 'selected' : ''; ?>>Authentic Speciality Tour</option>
                            <option value="garden" <?php echo (isset($form_data['tour']) && $form_data['tour'] == 'garden') ? 'selected' : ''; ?>>Spice Isle Garden Tour</option>
                            <option value="waterfalls" <?php echo (isset($form_data['tour']) && $form_data['tour'] == 'waterfalls') ? 'selected' : ''; ?>>Waterfalls Flash Hikes</option>
                            <option value="island-wide" <?php echo (isset($form_data['tour']) && $form_data['tour'] == 'island-wide') ? 'selected' : ''; ?>>Island Wide Scenic Tour</option>
                            <option value="mid-island" <?php echo (isset($form_data['tour']) && $form_data['tour'] == 'mid-island') ? 'selected' : ''; ?>>Mid Island Spice Tour & Falls</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="date">Preferred Date</label>
                        <input type="date" id="date" name="date" value="<?php echo isset($form_data['date']) ? htmlspecialchars($form_data['date']) : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Additional Notes</label>
                        <textarea id="message" name="message" rows="4" placeholder="Add any special requests or questions"><?php echo isset($form_data['message']) ? htmlspecialchars($form_data['message']) : ''; ?></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">Submit Booking</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>