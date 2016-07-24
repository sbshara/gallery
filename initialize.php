<?php

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);
defined("SIT_ROT") ? null : define("SIT_ROT", __DIR__);

defined("PUB_DIR") ? null : define("PUB_DIR", SIT_ROT.DS."public_html");
defined("INC_DIR") ? null : define("INC_DIR", SIT_ROT.DS."includes");

require_once(INC_DIR.DS."config.php");

require_once(INC_DIR.DS."functions.php");

require_once(INC_DIR.DS."session.php");
require_once(INC_DIR.DS."database.php");
require_once(INC_DIR.DS."databaseobject.php");

require_once(INC_DIR.DS."user.php");


?>
