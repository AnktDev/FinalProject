<?php
// Start session
session_start();

// Check if user is logged in, if not, redirect to login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your home page HTML and CSS here -->
    
</head>
<body>
    <h1>Welcome to Your Website!</h1>
    <p>This is your home page content.</p>
    <p>Feel free to explore more <a href="#">here</a>.</p>
    <p><a href="source.html">Logout</a></p>
</body>
</html>
