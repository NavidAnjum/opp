<?php
require_once("Classes/Loader.php");

define('DS',DIRECTORY_SEPARATOR);
error_reporting(E_ALL);
$loader = new Loader;
$loader->loadClasses();
$loader->loadConfig();
$i=new Main();
$i->run();