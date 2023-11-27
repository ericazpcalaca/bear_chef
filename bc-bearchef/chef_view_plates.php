<?php

include 'includes/config.php';
include 'views/helpers_user.php';
include 'class/retriveDB.php';
include 'class/plate.php';

// Start the session
session_start();

// Check if the user is logged in as a chef
$user_type = 'chef';
if (!(isset($_SESSION['user_type']) && $_SESSION['user_type'] == $user_type)) {
    // Redirect to login page or handle unauthorized access
    header("Location: login_form.php");
    exit();
}

// Retrieve user information from the session
$userType = $_SESSION['user_type'];
$userId = $_SESSION['id'];

header_USER($user_type);
retrivePlates($conn, $userId);
footer_USER();

?>