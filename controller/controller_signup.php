<?php
session_start();

include_once('../model/db_connection.php');

include_once('../model/model_signup.php');

// in safe version: check if user already exists before adding
if (isset($_POST['username'])) {


    $sanitized_username = sanitize($_POST['username']);
    $hashed_pw = hashPassword(sanitize($_POST['password']));

    if (!user_exists($sanitized_username)) {
        // Captcha code:
        include_once ('../securimage/securimage.php');
        $securimage = new Securimage();
        if ($securimage->check($_POST['captcha_code']) == false) {
            echo "The security code entered was incorrect.<br /><br />";
            echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
            exit;
        }
        echo "ksksks";
        // Add sanitized username and hashed password to database
        add_user($sanitized_username, $hashed_pw);

        echo "ejejej";
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
