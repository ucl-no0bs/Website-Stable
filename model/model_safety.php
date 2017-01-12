<?php
// The functions here will be used in the "safe" version of the website. Empty for now.

function sanitizeUsername ($user_name) {
    return strip_tags(trim($user_name));
}



function hashPassword ($user_pw) {
    return password_hash($user_pw, PASSWORD_DEFAULT);
}




 ?>
