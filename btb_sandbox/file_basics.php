<?php



//==========================================================
// CH07_02

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
