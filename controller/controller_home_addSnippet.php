<?php
session_start();

include_once('../model/db_connection.php');

include_once('../model/model_home.php');

add_snippet($_SESSION['current_user'], $_POST['snippet']);

echo "<script> window.location.assign('../view/view_home.php'); </script>";


 ?>
