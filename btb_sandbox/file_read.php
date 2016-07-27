<?php

$file = 'filetest.txt';

if ($handle = fopen($file,'r')){  // read

    $content = fread($handle, 6); // each char is 1 byte (en)

    fclose($handle);

}


echo $content;
echo "<hr/>";

echo nl2br($content);
echo "<hr/>";


// filesize to know how many bytes the file contains
$file = 'filetest.txt';
if ($handle = fopen($file, 'r')) {
    $content = fread($handle, filesize($file));
    fclose($handle);
}


echo nl2br($content);
echo "<hr/>";


$content = file_get_contents($file);
echo nl2br($content);
echo "<hr/>";



?>
