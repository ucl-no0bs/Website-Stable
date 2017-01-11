<?php


include_once('model_safety.php');


// checks if the user/password duo is in the database
function check_user($username, $password){
    global $conn;
    echo "the values passed are ".$username." and ".$password." <br />";
    //$sql_query = "SELECT count(username) FROM users WHERE username='$username' AND password='$password'";
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        echo "some result !";
        return True;
    } else{
        echo "no result: " . $sql . "<br>" . mysqli_error($conn);
        return False;
    }

}


// for ref, what a sql query looked like in my previous project:
// $sql = "INSERT INTO objects (name,id,OS) VALUES ('$name_','$id_','$os_')";


echo "model_login successfully included !"."<br />";

 ?>
