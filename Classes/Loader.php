<?php 

class Loader{
	
	public function  loadClasses()
	{
		spl_autoload_register(function($class){
			include 'Classes/'.$class.'.php';
		});
	}	

	public function loadViews($viewName)
	{
		spl_autoload_register(function($class){
			include 'Views/'.$class.'.php';
		});
	}
}