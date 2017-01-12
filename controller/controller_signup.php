<?php
session_start();

include_once('../model/db_connection.php');

include_once('../model/model_signup.php');

// in safe version: check if user already exists before adding
if (isset($_POST['username'])) {
    
    
    $sanitized_username = sanitize($_POST['username']);
    $hashed_pw = hashPassword(sanitize($_POST['password']));
    
    if (!user_exists($sanitized_username)) {
        
        // Add sanitized username and hashed password to database
        add_user($sanitized_username, $hashed_pw);
        
        // store the username during this session, and redirect to home page.
        $_SESSION['current_user'] = $sanitized_username;
        echo "<script> window.location.assign('../view/view_home.php'); </script>";
    } else {
        echo "<script> window.location.assign('../view/view_signup.php'); </script>";
    }
} else die;


// echo "<a href='../view/view_home.php'>Go to home page</a>";

// for convenience to us, just redirect to login_view.php page
?>