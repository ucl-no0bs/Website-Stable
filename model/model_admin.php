<?php

function getUsers() {
    global $conn;
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0){
        return $result;
    } else{
        // echo "no result: " . $sql . "<br>" . mysqli_error($conn);
    }
}

function get_snippets ($username){
    global $conn;
    
    $sql = "SELECT username, snippet from snippets WHERE username='$username'";
    
    $result = mysqli_query($conn, $sql);
    if($result){
        // echo "snippets successfully retrieved !"."<br />";
        return $result;
    } else{
        // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>