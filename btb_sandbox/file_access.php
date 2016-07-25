<?php

$file = 'filetest.txt';

if ($handle = fopen($file,'w')){  // can use 'w+' 'wb' 'wt'
    fclose($handle);
} else {
    echo "Unable to open {$file} for writing.";
}


/*
    from terminal:
    browse to the location of the folder (where you want to save filetest.txt)
    >    cd ~/Sites/gallery/btb_sandbox
    to view files and folders and view their permissions
    >   ls -la
    change file permissions (on current folder, represented by "."):
    >   sudo chmod 777 .
*/

?>
