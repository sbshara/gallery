<?php

echo fileowner('file_permissions.php');
echo "<br/>";
// if Posix installed:
//$owner_id = fileowner('file_permissions.php');
//$owner_array = posix_getpwuid($owner_id);
//echo $owner_array['name'];

chown('file_permissions.php', 'Shiblie');
// does not work on windows, and require super user access on UNIX

echo fileperms('file_permissions.php');
echo "<br/>";
echo decoct(fileperms('file_permissions.php'));
echo "<br/>";

chmod('file_permissions.php', 0777); // still not working on windows system
echo decoct(fileperms('file_permissions.php'));
echo "<br/>";
echo is_readable('file_permissions.php') ? 'yes' : 'no';
echo "<br/>";
echo is_writable('file_permissions.php') ? 'yes' : 'no';
echo "<br/>";




?>
