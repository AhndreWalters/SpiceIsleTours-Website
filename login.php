<?php
session_start();
include 'config/database.php';
include 'includes/functions.php';

if (isLoggedIn()) {
    header("Location: index.php");
    exit;
}

$error = '';
$username = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    
    if (empty($username) || empty($password)) {
        $error = "Both fields are required!";
    } else {
        $result = loginUser($username, $password);
        if ($result === true) {
            header("Location: index.php");
            exit;
        } else {
            $error = $result;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login | Spice Isle Tours</title>
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
    </div>
    <div class="video-overlay"></div>

    <div class="auth-container">
        <div class="auth-form">
            <h2>Login to Spice Isle Tours</h2>
            <p>Welcome back! Please enter your credentials.</p>
            
            <?php if ($error): ?>
                <div class="error-msg"><?php echo $error; ?></div>
            <?php endif; ?>
            
            <form method="POST" action="">
                <div class="form-group">
                    <label>Username or Email:</label>
                    <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" required>
                </div>
                
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" name="password" required>
                </div>
                
                <button type="submit" class="btn">Login</button>
            </form>
            
            <p>Don't have an account? <a href="register.php">Register here</a></p>
        </div>
    </div>
</body>
</html>