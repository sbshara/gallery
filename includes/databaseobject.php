<?php

require_once(INC_DIR.DS.'database.php');

class DatabaseObject {

    // Common DB methods
    public static function find_by_sql($sql="") {
        global $database;
        $result_set = $database->query($sql);
        $object_array = array();
        while ($row = $database->fetch_array($result_set)) {
            $object_array[] = static::instantiate($row);
        }
        return $object_array;
    }

    public static function find_all () {
        return static::find_by_sql("SELECT * FROM " . static::$table_name);
    }

    public static function find_by_id($id=0) {
        global $database;
        $result_array = static::find_by_sql("SELECT * FROM " . static::$table_name . " WHERE id={$id}");
        return !empty($result_array) ? array_shift($result_array) : false;
    }

    private static function instantiate ($record) {
//        // long-form approach
        $object             =   new static;
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
