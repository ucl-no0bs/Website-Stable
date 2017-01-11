<?php

// include module_safety.php
include_once('model_safety.php');

function check_user($username, $password){
    echo "the values passed are ".$username." and ".$password." <br />";
    return True;
}


// for ref, what a sql query looked like in my previous project:
// $sql = "INSERT INTO objects (name,id,OS) VALUES ('$name_','$id_','$os_')";


echo "model_login successfully included !"."<br />";

 ?>
