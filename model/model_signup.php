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

// echo "model_signup included"."<br />";

function user_exists($username){
    global $conn;
    // echo "the values passed are ".$username." and ".$password." <br />";
    //$sql_query = "SELECT count(username) FROM users WHERE username='$username' AND password='$password'";
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        //echo "User already exists...<br>";
        return True;
    } else{
        //echo "New user...<br>Creating account...";
        return False;
    }

}

 ?>
