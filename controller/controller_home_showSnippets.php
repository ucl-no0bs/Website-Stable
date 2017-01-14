<?php

include_once('../model/db_connection.php');

include_once('../model/model_home.php');

// Gets all your private snippets
$private_snippets = get_snippets($_SESSION["current_user"], '0');
$count = 1;
while($row = mysqli_fetch_assoc($private_snippets)){
    echo '<li>
            <div class="collapsible-header active">Note ' . $count++ . ':</div>
            <div class="collapsible-body">' . $row['snippet'] . '</div>
          </li>';
}

echo "<h4>Public Notes:</h4>";
$public_snippets = get_snippets($_SESSION["current_user"], '1');
while($row2 = mysqli_fetch_assoc($public_snippets)){
    echo '<li>
            <div class="collapsible-header active">Note from: ' . $row2['username'] . '</div>
            <div class="collapsible-body">' . $row2['snippet'] . '</div>
          </li>';
}

/* for prepared stuff
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    // do something with $row
}
*/

// Gets all the public snippets out there:


 ?>
