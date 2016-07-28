<?php

require_once('../../initialize.php');

if (!$session->is_logged_in()) { redirect_to("login.php"); }





include_layout_template('adminheader.php');
?>

<h2>Menu</h2>

<a href='logs.php'>View Logs</a>
<br/>
<a href='logout.php'>Logout</a>


<?php include_layout_template('footer.php'); ?>
