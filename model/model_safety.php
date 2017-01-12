<?php
// The functions here will be used in the "safe" version of the website. Empty for now.

function sanitize ($data) {
    return strip_tags(trim($data));
}



function hashPassword ($user_pw) {
    return password_hash($user_pw, PASSWORD_DEFAULT);
}




 ?>
