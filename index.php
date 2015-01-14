<?php
require_once("Classes/Loader.php");

define('DS',DIRECTORY_SEPARATOR);

$loader = new Loader;
$loader->loadClasses();
$loader->loadConfig();
$i=new Main();
$i->run();