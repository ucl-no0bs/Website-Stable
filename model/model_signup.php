<?php


include_once('model_safety.php');


// add user and password to database
function add_user ($username, $password){
    global $conn;


    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if(mysqli_query($conn, $sql)){
        echo "user added successfully !"."<br />";
    } else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

echo "model_signup included"."<br />";

 ?>
