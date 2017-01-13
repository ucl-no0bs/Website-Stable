<?php

function checkUploadSpace($username) {
    if (!file_exists("../images/$username")) {
        mkdir("../images/$username", 0777, true);
    } else {
        echo "No<br>";
    }
}

?>