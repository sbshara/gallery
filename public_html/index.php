<?php

require_once('../includes/database.php');

if(isset($database)) { echo 'true'; } else { echo 'false'; }

echo '<hr/>';

echo $database->escape_value("It's working?");

echo '<hr/>';

//$sql  = "INSERT INTO users (id, username, password, first_name, last_name) ";
//$sql .= "VALUES (1, 'sbshara', 'P@ssw0rd', 'Shiblie', 'Bshara')";
//
//$result = $database->query($sql);

echo '<hr/>';

$sql = "SELECT * FROM users WHERE id=1";

$result = $database->query($sql);
$found_user = $database->fetch_array($result);

echo $found_user['username'];


?>
