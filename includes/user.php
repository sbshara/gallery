<?php

require_once('database.php');

class User {

    // User class Attributes
    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;

    public static function find_by_sql($sql="") {
        global $database;
        $result_set = $database->query($sql);
        $object_array = array();
        while ($row = $database->fetch_array($result_set)) {
            $object_array[] = self::instantiate($row);
        }
        return $object_array;
    }

    public static function find_all () {
        return self::find_by_sql("SELECT * FROM users");
    }

    public static function find_by_id($id=0) {
        global $database;
        $result_array = self::find_by_sql("SELECT * FROM users WHERE id={$id}");
        return !empty($result_array) ? array_shift($result_array) : false;
    }

    public function full_name () {
        if (isset($this->first_name) && isset($this->last_name) ) {
            return $this->first_name . " " . $this->last_name;
        } else {
            return "";
        }
    }

    private static function instantiate ($record) {
//        // long-form approach
        $object             =   new self;
//        $object->id         =   $record['id'];
//        $object->username   =   $record['username'];
//        $object->password   =   $record['password'];
//        $object->first_name =   $record['first_name'];
//        $object->last_name  =   $record['last_name'];
//        // end of long-form approach


        // short-form approach (dynamic for larger tables)
        foreach($record as $attribute=>$value) {
            if($object->has_attribute($attribute)) {
                $object->$attribute = $value;
            }
        }
        // end of short-form approach


        return $object;
    }

    private function has_attribute($attribute) {
        // Object Vards returns an assoc array with all attributes (including private ones!)
        $object_vars = get_object_vars($this);
        // returns boolean (true or false)
        return array_key_exists($attribute, $object_vars);
    }


}

?>
