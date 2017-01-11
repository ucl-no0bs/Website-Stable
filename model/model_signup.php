<?php

// include module_safety.php
include_once('model_safety.php');


// add user and password to database
function add_user ($username, $password){
    global $conn;
    //$sql_query = "INSERT INTO users (username, password) VALUES ('". $username ."'," ."'".$password."')";
    $sql_query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if(mysqli_query($conn, $sql_query)){
        echo "user added successfully !"."<br />";
    } else{
        echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
    }
}

echo "model_signup successfully included !"."<br />";

 ?>
