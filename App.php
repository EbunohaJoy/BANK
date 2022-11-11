<?php
// echo 20; die;

session_start();
define('APP_ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

// echo 'seen'; die;

require_once 'core' . DS . 'config' . DS . 'config.php';
require_once 'core' . DS . 'Db' . DS . 'dbconnect.php';
require_once 'core' . DS . 'util' . DS . 'helpers.php';
require_once 'core' . DS . 'controllers' . DS . 'usercontrollers.php';
require_once 'core' . DS . 'controllers' . DS . 'transaction.php';
require_once 'core' . DS . 'controllers' . DS . 'admincontroller.php';



