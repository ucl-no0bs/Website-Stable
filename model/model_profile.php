<?php

function checkUploadSpace($username) {
    echo $username;
    if (!file_exists("../images/$username")) {
        echo "Test<br>";
        mkdir("../images/$username", 0777, true);
    } else {
        echo "No<br>";
    }
}

?>