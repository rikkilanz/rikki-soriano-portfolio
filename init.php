<?php

    define('WWW_ROOT', 'localhost');
    define('PROJECT_ROOT', dirname(__FILE__));

    //Functions
    require_once('functions.php');

    //Classes
    require_once(get_project_path('/Classes/Project.php'));
    require('data/projects.php');
?>