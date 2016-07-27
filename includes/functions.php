<?php

function strip_zeros_from_dates($marked_string='') {
    $no_zero = str_replace('*0','', $marked_string);
    $cleaned_string = str_replace('*', '', $no_zero);
    return $cleaned_string;
}

function redirect_to($location = NULL) {
    if ($location != NULL) {
        header("Location: {$location}");
        exit;
    }
}

function output_message ($message="") {
    if (!empty($message)) {
        return "<p class=\"message\">{$message}</p>";
    } else {
        return "";
    }
}

function __autoload ($class_name) {
    $class_name = strtolower($class_name);
    $path = INC_DIR.DS."{$class_name}.php";
    if (file_exists($path)) {
        require_once($path);
    } else {
        die("The file {$class_name}.php could not be found.");
    }
}

function include_layout_template($template="") {
    include(PUB_DIR.DS."layouts".DS.$template);
}

function log_action($action="", $message="") {
    $log = SIT_ROT.DS.'logs'.DS.'logs.txt';
    $msg = strftime('%Y-%m-%d %H:%M', time()) . " | " . $action . " : " . $message . ";\n";
    if (!is_writable($log)) {
        echo "Unable to write to log file, please check your access permissions.";
    } else {
        $handle = fopen($log,'a');
            fwrite($handle, $msg);
        fclose($handle);
    }
}

?>
