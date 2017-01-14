<?php
session_start();

include_once('../model/db_connection.php');

include_once('../model/model_home.php');

$sanitized_snippet = sanitize($_POST['snippet']);

if (isset($_POST["csrf"]) && $_POST["csrf"] == $_SESSION["token"])
    add_snippet($_SESSION['current_user'], $_POST['snippet'], $_POST['isPublic']);
else
    echo "ohohoh no csrf in here boy";

//echo "<script> window.location.assign('../view/view_home.php'); </script>";
echo "<a href='../view/view_home.php'>Go to home page</a>";

 ?>
