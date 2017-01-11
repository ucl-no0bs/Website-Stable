<?php

// include model_safety.php
include_once('model_safety.php');

/* function
returns all snippets from a user
*/
function get_snippets ($username){
    global $conn;

    echo "in get_snippets function with username parameter: ". $username ."<br />";
    $sql = "SELECT snippet from snippets WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "snippets successfully retrieved !"."<br />";
        return $result;
    } else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


// SELECT snippet from snippets WHERE username='user123'

/*
$result = mysql_query('SELECT * WHERE username=session_username');
if (!$result) {
    die('Invalid query: ' . mysql_error());
}
*/

/* function
adds a snippet from a certain user
*/

echo "model_home successfully included !"."<br />";

 ?>
