<?php

require_once('../../initialize.php');

if (!$session->is_logged_in()) { redirect_to("login.php"); }
?>

<html>
    <head>
        <title>Photo Gallery</title>
        <link href="../css/styles.css" media="all" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="header">
            <h1>Photo Gallery</h1>
        </div>

        <div id="main">
            <h2>Menu</h2>
        </div>

    </body>
    <footer>
        <div id="footer">Copyright <?php echo date("Y", time()); ?>, Shiblie Bshara</div>
    </footer>
</html>
