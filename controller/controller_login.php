<?php session_start();

include_once('../model/db_connection.php');

include_once('../model/model_login.php');

//include_once('../view/import_materialize.php');

// Satinitizes the input (in the safe version)
$sanitized_username = sanitize($_GET['username']);
$sanitized_pw = sanitize($_GET['password']);

if(check_user($sanitized_username, $sanitized_pw)) {
    include_once ('../securimage/securimage.php');
    $securimage = new Securimage();
    echo "The code given was: ". $_GET['captcha_code']."<br />";
    if ($securimage->check($_GET['captcha_code']) == false) {
        echo "The security code entered was incorrect.<br /><br />";
        echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
        exit;
    }

    $_SESSION["current_user"] = $sanitized_username;
    echo "<script> window.location.assign('../view/view_home.php'); </script>";
    // echo "<a href='../view/view_home.php'>Go to home page</a>";

} else {
    echo "user/password doesn't exist";
    echo "<a href='../index.php'>Go to index page</a>";
    //echo "<script> window.location.assign('../index.php'); </script>";
}

// if it s correct: set the global $_SESSION username, and then redirect to view_home.php
// else, redirect to index.php
// note: don't redirect to login.php directly !

 ?>
