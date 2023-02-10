<?php 
// Return a path to a asset or url
// Adds a leading '/' if one has not been provided.
// function get_url($path = "") {
//     if($path[0] != '/') {
//         $path = '/' . $path;
//     }
//     return WWW_ROOT . $path;
// }

// function get_project_path($path = "") {
//     if($path[0] != '/') {
//         $path = '/' . $path;
//     }
//     return PROJECT_ROOT . $path;
// }

// function get_path($path = "") {
//     if ($path != "") {
//         if($path[0] != '/') {
//         $path = '/' . $path;
//     }
// }
//     return PROJECT_ROOT . $path;
// }

// function redirect($path) {
//     header('Location: ' . get_public_url($path) );
// }

function get_public_url($path = "") {
    if($path[0] != '/') {
        $path = '/' . $path;
    }
    return WWW_ROOT . '/public' . $path;
}

function redirect($path) {
    header('Location: ' . get_public_url($path) );
}

function get_path($path = "") {
    if ($path != "") {
        if($path[0] != '/') {
        $path = '/' . $path;
    }
}
    return PROJECT_ROOT . $path;
}

// Return special characters as HTML entities
function h($str) {
    return htmlspecialchars($str);
}

// Returns a URL safe string
function u($string) {
    return urlencode($string);
}

// Checks if a value is blank 
function is_blank($var) {
    if(!isset($var) || "" === trim($var, " ") ) {
        return true;
    } 
    return false;
}

// Wrap in a <pre> HML tag to display data in HTML
function wrap_pre($data) {
    return '<pre>' . print_r($data,true) . '</pre>';
}

function dd($data) {
    echo wrap_pre($data);
    die();
}

function set_name($name) {
    $namesplode = explode(" ", $name);
    // The variable the stores the concatenated strings
    $name_split = strtolower($namesplode[0]) . "-" . strtolower($namesplode[1]);
    // We then assign that variable to $this->image_url which is the new object that is instantiated/constructed
    return $name_split;          
}  