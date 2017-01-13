<?php
session_start();

include_once('../model/db_connection.php');

include_once('../model/model_home.php');

$sanitized_snippet = sanitize($_POST['snippet']);

add_snippet($_SESSION['current_user'], $sanitized_snippet, $_POST['isPublic']);

echo "<script> window.location.assign('../view/view_home.php'); </script>";
//echo "<a href='../view/view_home.php'>Go to home page</a>";

 ?>
