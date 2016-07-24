<?php

defined("DS") ? null : define("DS", directoryiterator());

defined("SIT_ROT") ? null : define("SIT_ROT", dirname(__FILE__));

defined("PUB_DIR") ? null : define("PUB_DIR", SIT_ROT.DS."public_html");
defined("INC_DIR") ? null : define("INC_DIR", SIT_ROT.DS."includes");
defined("LIB_DIR") ? null : define("LIB_DIR", SIT_ROT.DS."Libraries");

?>
