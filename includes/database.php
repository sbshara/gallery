<?php

require_once('config.php');

class MySQLDatabase {

    private $connection;

    function __construct () {
        $this->open_connection();
    }

    public function open_connection() {
        // Create the DB connection
        $this->connection = mysqli_connect(DB_SVR, DB_USR, DB_PAS, DB_NAM);
        if(mysqli_connect_errno()) {
            die('Database connection failed: ' .
                mysqli_connect_error() .
                ' (' . mysqli_connect_errno() . ')'
               );
        }
    }

    public function close_connection() {
        if(isset($this->connection)) {
            mysqli_close($this->connection);
            unset($this->connection);
        }
    }
}


$database = new MySQLDatabase();
$db =& $database;

?>
