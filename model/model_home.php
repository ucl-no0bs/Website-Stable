<?php

// include model_safety.php
include_once('model_safety.php');

/* function
returns all snippets from a user
*/
function get_snippets ($username, $isPublic){
    global $conn;

    //echo "in get_snippets function with username parameter: ". $username ."<br />";
    // queries either your own private stuff or public snippets:
    if ($isPublic === 'True')
        $sql = "SELECT username, snippet FROM snippets WHERE isPublic=".$isPublic;
    else
        $sql = "SELECT username, snippet from snippets WHERE username='$username' AND isPublic=".$isPublic;

    $result = mysqli_query($conn, $sql);
    if($result){
        //echo "snippets successfully retrieved !"."<br />";
        return $result;
    } else{
        ///echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

function add_snippet($username, $snippet, $isPublic){
    global $conn;

    echo "in add_snippet function with parameters: ".$username."; ".$snippet. "; ". $isPublic ."<br />";

    //INSERT INTO snippets (username, snippet) VALUES ('akselcc', 'some text here')
    $sql = "INSERT INTO snippets (username, snippet, isPublic) VALUES ('$username', '$snippet', '$isPublic')";
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
