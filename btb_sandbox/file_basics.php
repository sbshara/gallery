<?php
echo "<hr/>";
//==========================================================
// CH07_05
/*
    fopen(filename, mode);
    Modes:
                                                    read + write
        -   r   (reading mode)                          r+
                read from start of file
                file must exist

        -   w   (writing mode)                          w+
                truncate / write from start of file

        -   a   (writing mode)                          a+
                append / write from end of
                existing content

        -   x   (writing mode)                          x+
                write from the start
                file can't not exist to start with

        -   t   Translate Windows line endings
                Use \r\n

        -   b   Binary mode
                Don't translate anything


    b is PHP default mode since PHP 4.3.2


    Line Endings:
    Windows:                \r\n
    Linux, UNIX, MAC:       \n

*/
echo "<hr/>";
//==========================================================
// CH07_04
/*
    safe_mode status (from my_phpinfo.php)
    you can change from php.ini (then restart your apache server)

    > ls -la | grep file_
    --this will show files that include the syntax file_ in the name

*/
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
