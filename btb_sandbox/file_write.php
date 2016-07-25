<?php

$file = 'filetest.txt';

if ($handle = fopen($file,'w')){  // this will overwrite whatever in the file already

    //$message = 'This is a test message to add to the testfile.txt';
    fwrite($handle, 'abc'); // returns number of bytes written, or returns false
    $content = '123\n456';
    fwrite($handle, $content);


    fclose($handle);
} else {
    echo "Unable to open {$file} for writing.";
}


?>
