<?php
require_once("core/Loader.php");

define('DS',DIRECTORY_SEPARATOR);

error_reporting(E_ALL);

$loader = new Loader;
$loader->loadResources();


$i=new Main();
$i->run();

