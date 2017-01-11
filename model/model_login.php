<?php

include_once('db_connection.php');

// include module_safety.php
include_once('model_safety.php');

function check_user($username, $password){
    global $conn;
    echo "the values passed are ".$username." and ".$password." <br />";
    //$sql_query = "SELECT count(username) FROM users WHERE username='$username' AND password='$password'";
    $sql_query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql_querry);

    if($result || mysqli_num_rows($result) > 0){
        echo "some result !";
    } else{
        echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
        return False;
    }

}


// for ref, what a sql query looked like in my previous project:
// $sql = "INSERT INTO objects (name,id,OS) VALUES ('$name_','$id_','$os_')";


echo "model_login successfully included !"."<br />";

 ?>
