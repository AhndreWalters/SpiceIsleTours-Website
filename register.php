<?php
include 'config/database.php';
include 'includes/functions.php';

if (isLoggedIn()) {
    header("Location: index.php.php");
    exit;
}

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    if (empty($username) || empty($email) || empty($password)) {
        $error = "All fields are required!";
    } elseif ($password !== $confirm_password) {
        $error = "Passwords do not match!";
    } elseif (strlen($password) < 6) {
        $error = "Password must be at least 6 characters!";
    } else {
        $result = registerUser($username, $email, $password);
        if ($result === true) {
            $success = "Registration successful! You can now login.";
        } else {
            $error = $result;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register | Spice Isle Tours</title>
    <link rel="shortcut icon" href="https://symphony.cdn.tambourine.com/spice-island-redesign/files/spiceisland-favicon-68d55fc21ca1c.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="auth-page">
    <div class="top-content__video">
        <video autoplay loop muted playsinline>
            <source src="video/spiceislandbeachresort-video.mp4" type="video/mp4">
        </video>
    <div class="video-overlay"></div>


    </div>
    <div class="auth-container">
        <div class="auth-form">
            <h2>Create Account</h2>
            <p>Join Spice Isle Tours today</p>
            
            <?php if ($error): ?>
                <div class="error-msg"><?php echo $error; ?></div>
            <?php endif; ?>
            
            <?php if ($success): ?>
                <div class="success-msg"><?php echo $success; ?></div>
            <?php endif; ?>
            
            <form method="POST" action="">
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="username" value="" required>
                </div>
                
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" value="" required>
                </div>
                
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" name="password" required>
                </div>
                
                <div class="form-group">
                    <label>Confirm Password:</label>
                    <input type="password" name="confirm_password" required>
                </div>
                
                <button type="submit" class="btn">Create Account</button>
            </form>
            
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>
</body>
</html>