<?php


echo getcwd() . "<br/>";   // CWD: Current Working Directory


mkdir('new', 0777);   //  0777 is PHP default

// new dir did not have 0777 as permissions, due to default system setup
// umask() to change default permissions settings
// default maybe 0022 (substracted from 0777)


// recursive dir creating

mkdir('new/test/test2', 0777, true); //true is to confirm recursively create folders


// Changing dirs

chdir('new');
echo getcwd();


rmdir('test/test2');





?>
