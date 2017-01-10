<?php
include_once('../model/db_connection.php');
include_once('../model/model_login.php');

// gets input from the form in the global variable called $_GET
// Satinitizes the input (in the safe version)

// Checks the database if username/pw exist by using the functions in model/model_login.php

// if it s correct: set the global $_SESSION username, and then redirect to view_home.php
// else, redirect to view_login.php

 ?>
