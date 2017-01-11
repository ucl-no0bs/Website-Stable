<?php

// include model_safety.php
include_once('model_safety.php');

/* function
returns all snippets from a user
*/
function get_snippets ($username){
    global $conn;

    //echo "in get_snippets function with username parameter: ". $username ."<br />";
    $sql = "SELECT snippet from snippets WHERE username='$username'";
    
    $result = mysqli_query($conn, $sql);
    if($result){
        //echo "snippets successfully retrieved !"."<br />";
        return $result;
    } else{
        ///echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

function add_snippet($username, $snippet){
    global $conn;

    echo "in add_snippet function with parameters: ".$username." ".$snippet."<br />";

    //INSERT INTO snippets (username, snippet) VALUES ('akselcc', 'some text here')
    $sql = "INSERT INTO snippets (username, snippet) VALUES ('$username', '$snippet')";
    if(mysqli_query($conn, $sql)){
        echo "snippet added successfully !"."<br />";
    } else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}


/* function
adds a snippet from a certain user
*/

//echo "model_home successfully included !"."<br />";

 ?>
