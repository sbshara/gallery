<?php
echo "<hr/>";
//==========================================================
// CH07_03
/*
    ===Change file permissions(UNIX systems)===
    sudo (do this command with highest level of permission)
    > sudo chown www file_permissions.php
    > sudo chmod 777 file_permissions.php
    > sudo chmod 644 file_permissions.php
    > sudo chmod 600 file_permissions.php
    > sudo chmod 666 file_permissions.php
*/

echo "<hr/>";
//==========================================================
// CH07_02
/*
            ====  Symbolic notation: rwxrw-r--    ====
                    User        Group       Other
    Read (r)        Yes         Yes         Yes
    Write (w)       Yes         Yes         No
    Execute (x)     Yes         No          No

                    rwx         rw-         r--



            ====  Octal notation: 764    ====
            r   =   4
            w   =   2
            x   =   1
            -   =   0

            rwx =   7
            rw  =   6
            r   =   4

==View files in a folder (UNIX Systems)==
> ls
> ls -la
sample: -rw-r--r--@      Owner       Group

==Search for webserver, and get username for it==
> ps aux | grep httpd
*/

echo "<hr/>";
//==========================================================
// CH07_01
echo __FILE__;
echo "<br/>";
echo __LINE__;
echo "<br/>";
echo dirname(__FILE__);
echo "<br/>";
echo __DIR__;
echo "<br/>";
echo file_exists(__FILE__) ? 'yes' : 'no';
echo "<br/>";
echo file_exists(dirname(__FILE__)."/basic.html") ? 'yes' : 'no';
echo "<br/>";
echo file_exists(dirname(__FILE__)) ? 'yes' : 'no';
echo "<br/>";
echo is_file(dirname(__FILE__)."/file_basics.php") ? 'yes' : 'no';
echo "<br/>";
echo is_file(dirname(__FILE__)) ? 'yes' : 'no';
echo "<br/>";
echo is_dir(dirname(__FILE__)."/file_basics.php") ? 'yes' : 'no';
echo "<br/>";
echo is_dir(dirname(__FILE__)) ? 'yes' : 'no';
echo "<br/>";
echo is_dir('..') ? 'yes' : 'no';
echo "<br/>";

echo "<hr/>";
?>
