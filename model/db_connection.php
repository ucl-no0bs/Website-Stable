<?php

// This establishes a connection with the database

$servername='localhost';
// username and password might be different on a Windows setting
$username='root';
$password='admin';
$database='sw5';
$conn=New mysqli($servername,$username,$password,$database);

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
