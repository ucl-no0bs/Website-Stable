<?php

include_once('../model/db_connection.php');

include_once('../model/model_admin.php');

$users = getUsers();

while($user = mysqli_fetch_assoc($users)) {
    // $snippetsOpen = get_snippets($user, 'True');
    $snippets = get_snippets($user['username']);
    
    if(mysqli_num_rows($snippets) > 0){
        echo "<h4>".$user['username']."</h4>";
        echo '<ul class="collection">';
        while($row = mysqli_fetch_assoc($snippets)){
            echo '<a class="collection-item">' . $row['snippet'] . '</a>';
        }
        echo '</ul>';
    }
}

?>