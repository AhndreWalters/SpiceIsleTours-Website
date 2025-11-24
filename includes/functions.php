<?php
if (!function_exists('secureSessionStart')) {
    function secureSessionStart() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
}

if (!function_exists('isLoggedIn')) {
    function isLoggedIn() {
        return isset($_SESSION['user_id']);
    }
}

if (!function_exists('getUsername')) {
    function getUsername() {
        return isset($_SESSION['username']) ? $_SESSION['username'] : '';
    }
}

if (!function_exists('loginUser')) {
    function loginUser($username, $password) {
        global $pdo;
        
        try {
            $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
            $stmt->execute([$username, $username]);
            $user = $stmt->fetch();
            
            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                return true;
            } else {
                return "Invalid username/email or password!";
            }
        } catch (PDOException $e) {
            return "Database error: " . $e->getMessage();
        }
    }
}

if (!function_exists('registerUser')) {
    function registerUser($username, $email, $password) {
        global $pdo;
        
        try {
            // Check if user exists
            $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
            $stmt->execute([$username, $email]);
            
            if ($stmt->rowCount() > 0) {
                return "Username or email already exists!";
            }
            
            // Hash password and insert user
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            
            if ($stmt->execute([$username, $email, $hashedPassword])) {
                return true;
            } else {
                return "Registration failed!";
            }
        } catch (PDOException $e) {
            return "Database error: " . $e->getMessage();
        }
    }
}

if (!function_exists('logout')) {
    function logout() {
        $_SESSION = array();
        session_destroy();
        header("Location: login.php");
        exit;
    }
}

if (!function_exists('requireLogin')) {
    function requireLogin() {
        // Get the current page filename
        $current_page = basename($_SERVER['PHP_SELF']);
        
        // Pages that don't require login
        $public_pages = ['index.php', 'login.php', 'register.php'];
        
        // If current page is not public and user is not logged in, redirect to login
        if (!in_array($current_page, $public_pages) && !isLoggedIn()) {
            header("Location: login.php");
            exit;
        }
    }
}
?>