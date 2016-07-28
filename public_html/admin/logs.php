<?php
require_once('../../initialize.php');

if (!$session->is_logged_in()) {
    redirect_to('login.php');
}

$logfile = SIT_ROT.DS.'logs'.DS.'logs.txt';

if(isset($_GET['clear'])) {
    if($_GET['clear'] == 'true') {
        file_put_contents($logfile, '');
        log_action("File Clear", "User ID: {$session->user_id}; Cleared the log file");
        redirect_to('logs.php');
    }
}

include_layout_template('adminheader.php');
?>

<a href='index.php'>&laquo; Back</a>
<br/>
<h2>Log File</h2>
<p><a href='logs.php?clear=true'>Clear Logs</a></p>



<?php
if(file_exists($logfile) && is_readable($logfile) && $handle = fopen($logfile, 'r')) {
    //log_action("File Read", "User ID: {$session->user_id}; Viewed the logfile");
    echo "<ul>";
    while(!feof($handle)) {
        $entry = fgets($handle);
        if(trim($entry) != '') {
            echo "<li> {$entry}</li>";
        }
    }
    echo "</ul>";
    fclose($handle);
} else {
    echo "Could not read from {$logfile}";
}


include_layout_template('footer.php');

?>
