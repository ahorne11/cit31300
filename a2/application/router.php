<?php
/*
require_once 'application/load.class.php';
require_once 'application/model.class.php';
require_once 'application/controller.class.php';

require_once 'application/load.class.php';
    include_once('models/'.strtolower($class).'.class.php');
    include_once('controllers/'.strtolower($class).'.class.php');

*/


function loadClasses($class) {

    if(file_exists('application/'.strtolower($class).'.class.php')) {
        require_once('application/' . strtolower($class) . '.class.php');
    }
    if(file_exists('application/models/'.strtolower($class).'.class.php')) {
        require_once('application/models/' . strtolower($class) . '.class.php');
    }
    if(file_exists('application/controllers/'.strtolower($class).'.class.php')) {
        require_once('application/controllers/' . strtolower($class) . '.class.php');
    }

}
spl_autoload_register('loadClasses');

new Controller();