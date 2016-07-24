<?php

require_once('../../initialize.php');

if (!$session->is_logged_in()) { redirect_to("login.php"); }


include_layout_template('adminheader.php');
?>

<h2>Menu</h2>


<?php include_layout_template('footer.php'); ?>
