<?php

include_once('../model/db_connection.php');

include_once('../model/model_home.php');

$snippets = get_snippets('user123');

while($row = mysqli_fetch_assoc($snippets)){
    echo "a snippet: ". $row['snippet'] . "<br />";
}

// queries all the snippets (using the functions defined in model)
// puts the results in a variable

 ?>
