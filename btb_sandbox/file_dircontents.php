<?php


$dir = ".";

if(is_dir($dir)) {
    if($dir_handle = opendir($dir)){
        while ($filename = readdir($dir_handle)) {
            echo "File Name: {$filename}<br/>";
        }

        // use rewinddir($dir_handle) to start over
        closedir($dir_handle);
    }
}

echo "<hr/>";

// Different way:
if(is_dir($dir)){
    $dir_array = scandir($dir);
    foreach($dir_array as $file) {
        if(stripos($file, '.') > 0) {
            echo "File Name: {$file}<br/>";
        }
    }
}



?>
