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

    //$stmt = $conn->prepare("SELECT username, snippet FROM snippets WHERE isPublic=?");
    //$stmt = $conn->prepare("SELECT username, snippet FROM snippets WHERE username=? AND isPublic=?");
    //$stmt->bind_param("ss", $username, $isPublic);
    //$stmt->execute();
    //$result = $stmt->get_result();

    if ($isPublic === '1'){
        $stmt = $conn->prepare("SELECT username, snippet FROM snippets WHERE isPublic=?");
        $stmt->bind_param("s", $isPublic);
    } else{
        $stmt = $conn->prepare("SELECT username, snippet FROM snippets WHERE username=? AND isPublic=?");
        $stmt->bind_param("ss", $username, $isPublic);
    }

    $stmt->execute();
    $result = $stmt->get_result();

    if($result){
        //echo "snippets successfully retrieved !"."<br />";
        return $result;
    } else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

function add_snippet($username, $snippet, $isPublic){
    global $conn;

    echo "in add_snippet function with parameters: ".$username."; ".$snippet. "; ". $isPublic ."<br />";

    $stmt = $conn->prepare("INSERT INTO snippets (username, snippet, isPublic) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $snippet, $isPublic);

    if($stmt->execute()){
        echo "snippet added successfully !"."<br />";
    } else{
        echo "Error: " . $stmt . "<br>" . mysqli_error($conn);
    }

    $stmt->close();

}


/* function
adds a snippet from a certain user
*/

//echo "model_home successfully included !"."<br />";

?>
