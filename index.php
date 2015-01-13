<?php
require_once("Classes/Loader.php");



$loader = new Loader;
$loader->loadClasses();

$i=new Main();

$i->run();

