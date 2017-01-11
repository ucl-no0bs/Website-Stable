<?php

include_once('../model/db_connection.php');

include_once('../model/model_home.php');


$snippets = get_snippets($_SESSION["current_user"]);
$count = 1;
while($row = mysqli_fetch_assoc($snippets)){
    echo '<li>
            <div class="collapsible-header active">Snippet ' . $count++ . '</div>
            <div class="collapsible-body">' . $row['snippet'] . '</div>
          </li>';
}

// queries all the snippets (using the functions defined in model)
// puts the results in a variable

 ?>
