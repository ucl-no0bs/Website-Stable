<?php


include_once('model_safety.php');

function retrieve_password($username) {
    global $conn;
    $sql = "SELECT password FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    echo $user;
    
    if(mysqli_num_rows($result) > 0){
        $output = mysqli_fetch_assoc($result);
        return $output['password'];
    } else{
        // echo "no result: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// checks if the user duo is in the database
function check_user($username, $password){
    global $conn;
    echo "the values passed are ".$username." and ".$password." <br />";
    $retrieved_pw = retrieve_password($username);
    
    if ($retrieved_pw && password_verify($password, $retrieved_pw)) {
        return TRUE;
    } else {
        return FALSE;
    }
    //$sql_query = "SELECT count(username) FROM users WHERE username='$username' AND password='$password'";
    // $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    // $result = mysqli_query($conn, $sql);
}




// for ref, what a sql query looked like in my previous project:
// $sql = "INSERT INTO objects (name,id,OS) VALUES ('$name_','$id_','$os_')";
/*
$result = mysql_query('SELECT username, password FROM database WHERE username=input_username && password=input_password');
if (!$result) {
die('Incorrect Login details, try again.');
}
*/

?>