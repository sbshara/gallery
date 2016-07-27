<?php

$filename = 'filetest.txt';

echo filesize($filename) . "<br/>";  // in bytes

// filemtime: last modified (changed)
// filectime: last changed (changed content or metadata)
// fileatime: last accessed (any read or write actions)

echo strftime('%Y-%m-%d %H:%M', filemtime($filename)) . "<br/>";
echo strftime('%Y-%m-%d %H:%M', filectime($filename)) . "<br/>";
echo strftime('%Y-%m-%d %H:%M', fileatime($filename)) . "<br/>";

echo "<hr/>";

touch($filename); // make sure you have write access to the folder containing the file

echo strftime('%Y-%m-%d %H:%M', filemtime($filename)) . "<br/>";
echo strftime('%Y-%m-%d %H:%M', filectime($filename)) . "<br/>";
echo strftime('%Y-%m-%d %H:%M', fileatime($filename)) . "<br/>";



$path_parts = pathinfo(__FILE__);

print_r($path_parts);

?>
