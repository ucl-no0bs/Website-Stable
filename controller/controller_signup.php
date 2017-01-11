<?php

include_once('../model/db_connection.php');

include_once('../model/model_signup.php');

// in safe version: check if user already exists before adding

// add user/pw to database (with hash in safe version)
add_user($_POST['username'], $_POST['password']);

// store the username during this session, and redirect to home page.
$_SESSION['username'] = $_POST['username'];
echo "<script> window.location.assign('../view/view_home.php'); </script>";

// for convenience to us, just redirect to login_view.php page
 ?>
