<?php
include 'config/database.php';

session_start();

$success_message = '';
$error_messages = [];
$form_data = [];

if (isset($_SESSION['contact_success'])) {
    $success_message = $_SESSION['contact_success'];
    unset($_SESSION['contact_success']);
}

if (isset($_SESSION['contact_errors'])) {
    $error_messages = $_SESSION['contact_errors'];
    unset($_SESSION['contact_errors']);
}

if (isset($_SESSION['contact_form_data'])) {
    $form_data = $_SESSION['contact_form_data'];
    unset($_SESSION['contact_form_data']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact | Spice Isle Tours</title>
    <link rel="shortcut icon" href="https://symphony.cdn.tambourine.com/spice-island-redesign/files/spiceisland-favicon-68d55fc21ca1c.ico" type="image/x-icon">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <?php include 'includes/navigation.php'; ?>
    
    <main class="content">
        <section class="intro-content">
            <div class="container">
                <h1 class="page-title">Contact Us</h1>
                
                <div id="form-messages">
                    <?php if ($success_message): ?>
                        <div class="alert-success" style="max-width: 600px; margin: 20px auto; padding: 15px; background: #d4edda; color: #155724; border-radius: 8px; border: 1px solid #c3e6cb;">
                            <?php echo htmlspecialchars($success_message); ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($error_messages)): ?>
                        <div class="alert-error" style="max-width: 600px; margin: 20px auto; padding: 15px; background: #f8d7da; color: #721c24; border-radius: 8px; border: 1px solid #f5c6cb;">
                            <h4 style="margin: 0 0 10px 0;">Please fix the following errors:</h4>
                            <ul style="margin: 10px 0; padding-left: 20px;">
                                <?php foreach ($error_messages as $error): ?>
                                    <li><?php echo htmlspecialchars($error); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>

                <script src="js/contact.js"></script>

                <p>We'd love to hear from you. Feel free to reach out using the details below or send us a message directly through the form.</p>
            </div>
        </section>

        <section class="contact-section">
            <div class="contact-card">
                <h2>Address</h2>
                <p>Grand Anse, Saint George,<br>Grenada</p>
            </div>

            <div class="contact-card">
                <h2>Contact</h2>
                <p>Tel: +1 (473) 405-4696<br>Email: <a href="mailto:info@spiceisletours.com">info@spiceisletours.com</a></p>
            </div>
        </section>
        
        <section class="contact-form-section">
            <div class="form-container">
                <form action="process_contact.php" method="POST" class="contact-form">
                    <div class="form-row">
                        <div class="form-group half-width">
                            <label for="first-name">First Name</label>
                            <input type="text" id="first-name" name="first_name" placeholder="First name" value="<?php echo isset($form_data['first_name']) ? htmlspecialchars($form_data['first_name']) : ''; ?>" required>
                        </div>

                        <div class="form-group half-width">
                            <label for="last-name">Last Name</label>
                            <input type="text" id="last-name" name="last_name" placeholder="Last name" value="<?php echo isset($form_data['last_name']) ? htmlspecialchars($form_data['last_name']) : ''; ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="+1 (473) 555-0123" value="<?php echo isset($form_data['phone']) ? htmlspecialchars($form_data['phone']) : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="you@example.com" value="<?php echo isset($form_data['email']) ? htmlspecialchars($form_data['email']) : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" rows="6" placeholder="Write your message here..."><?php echo isset($form_data['message']) ? htmlspecialchars($form_data['message']) : ''; ?></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">Submit</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>