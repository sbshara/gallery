<?php

require_once('../includes/database.php');
require_once('../includes/classes.php');

$record = User::find_by_id(1);


echo $user->full_name();

echo '<hr/>';

//$user_set = User::find_all();
//while ($user = $database->fetch_array($user_set)) {
//    echo "User: " . $user['username'] . "<br/>";
//    echo "Name: " . $user['first_name'] . " " . $user['last_name'] . "<br/><br/>";
//}


?>
