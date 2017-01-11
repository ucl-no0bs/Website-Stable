<?php
session_start(); 

include_once('../model/db_connection.php');

include_once('../model/model_login.php');

//include_once('../view/import_materialize.php');

// Satinitizes the input (in the safe version)

// Checks the database if username/pw exist by using the functions in model/model_login.php
$user_exists = check_user($_GET['username'], $_GET['password']);

if($user_exists) {
    echo "user exists"."<br />";
    $_SESSION["current_user"] = $_GET['username'];
    echo "<script> window.location.assign('../view/view_home.php'); </script>";
    //echo "<a href = '../view/view_home.php'><button class='btn waves-effect waves-light'>Home Page</button></a>";
} else {
    echo "user doesn't exist";
}

// if it s correct: set the global $_SESSION username, and then redirect to view_home.php
// else, redirect to index.php
// note: don't redirect to login.php directly !

 ?>
