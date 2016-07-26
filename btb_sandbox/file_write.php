<?php

$file = 'filetest.txt';

if ($handle = fopen($file,'w')){  // overwrite

    fwrite($handle, 'abc');
    $content = "123\n456";  // double quotes matter with \n or any special control characters
    fwrite($handle, $content);



    fclose($handle);
} else {
    echo "Unable to open {$file} for writing.";
}


//file put contents, short for the above, and overwrites existing file be default:

$file = 'filetest.txt';
$content = "111\n222\n333";
if ($size = file_put_contents($file, $content)) {
    echo "A file of {$size} bytes was created.";
}




?>
