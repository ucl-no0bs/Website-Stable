<?php
session_start();

include_once('../model/db_connection.php');

include_once('../model/model_login.php');

//include_once('../view/import_materialize.php');

// Satinitizes the input (in the safe version)
$sanitized_username = sanitize($_GET['username']);
$sanitized_pw = sanitize($_GET['password']);

if(check_user($sanitized_username, $sanitized_pw)) {
    echo "Login successful.."."<br />";
    echo "Redirecting..";

    $_SESSION["current_user"] = $sanitized_username;
    echo "<script> window.location.assign('../view/view_home.php'); </script>";
    // echo "<a href='../view/view_home.php'>Go to home page</a>";
    //echo "<a href = '../view/view_home.php'><button class='btn waves-effect waves-light'>Home Page</button></a>";
} else {
    echo "user/password doesn't exist";
    echo "<script> window.location.assign('../view/view_login.php'); </script>";
}

// if it s correct: set the global $_SESSION username, and then redirect to view_home.php
// else, redirect to index.php
// note: don't redirect to login.php directly !

 ?>
